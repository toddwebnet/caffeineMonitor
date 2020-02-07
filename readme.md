OK... to setup hosting, I used Vagrant.  I build a vagrant framework to easily stand up stuff

https://bitbucket.org/toddwebnet2/vagrant

config.yaml for vagrant should look like:

servers:
- projects:
  - ip: "192.168.200.15"
  - folders:
    - map: /home/user/projects
      to: /home/vagrant/www
  - features:
      - lamp      
  - sites:
      - adminer.local.com
      - mjFreeway.local.com

will need to also install plugins
vagrant plugin install vagrant-vbguest
vagrant plugin install vagrant-winnfsd
vagrant plugin install vagrant-hostsupdater


once that is setup, this project should be in the same root folder of vagrant

/home/user/projects/vagrant
/home/user/projects/mjFreeway

update your .env file
inside this project you can find the sql credentials
./vagrant/create.sql (or you can use username: "root" password "password")



ssh into vagrant by using 
"vagrant ssh"
cd www/mjFreeway
cd vagrant
sudo bash setup.sh 
cd ..
php artisan migrate
php artisan db:seed

once loaded (and hopefully everything works)

you can go to your browser to http://mjFreeway.local.com and see the app


