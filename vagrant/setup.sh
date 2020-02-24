if [ "$EUID" -ne 0 ];  then
  echo "Please run as root"
  exit
fi

if ! grep -q "caffeineMonitor.local.com" /etc/hosts; then
  echo "append to host file"
  echo "" >> /etc/hosts
  echo "127.0.0.1 caffeineMonitor.local.com" >> /etc/hosts
fi


if [ ! -f /etc/apache2/ssl/server.crt ]; then
  echo "Installing SSL ##########################################################"
  mkdir /etc/apache2/ssl
  openssl genrsa -des3 -passout pass:x -out /etc/apache2/ssl/server.pass.key 2048
  openssl rsa -passin pass:x -in /etc/apache2/ssl/server.pass.key -out /etc/apache2/ssl/server.key
  rm /etc/apache2/ssl/server.pass.key
  openssl req -new -key /etc/apache2/ssl/server.key -out /etc/apache2/ssl/server.csr -subj "/C=US/ST=DC/L=Texas/O=Todd/OU=IT Department/CN=*.caff.com"
  openssl x509 -req -days 365 -in /etc/apache2/ssl/server.csr -signkey /etc/apache2/ssl/server.key -out /etc/apache2/ssl/server.crt

fi

cp /home/vagrant/www/caffeineMonitor/vagrant/caffeineMonitor.conf /etc/apache2/sites-available/caffeineMonitor.conf

rm -f /etc/apache2/sites-enabled/caffeineMonitor.conf

ln -s /etc/apache2/sites-available/caffeineMonitor.conf /etc/apache2/sites-enabled/caffeineMonitor.conf


mysql -uroot -ppassword < /home/vagrant/www/caffeineMonitor/vagrant/create.sql



service apache2 restart

