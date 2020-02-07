in reference to the requirements in 
./MJ Freeway Skills Assessment_20200121.pdf

aspects addressed:
data input validation - was built in a way so that no user input is typed in.  its all based on "clicks"
mysql database - added the drinks to a mysql database 
mvc - used orm model, controllers, and blade views (even with ajax)
logic - my process should be (subjective to me) easy to follow.  All the js code is in an external file except for the landing page for document loading function
design - I had a little fun with it by adding pictures and different stage of caffination pictures
function - I suppose you will have to determine if it meets all the requirements :) 
api - because I used the jquery method, the api model didn't feel right.  I could have added a log api to CRUD the log (but sorry I didn't) - it would have been a simple laravel resource  


.env adds a new key

SAVE_CAFFEINE_AMOUNT=500

system will default to 500 if not set, so you can adjust this



OK... to setup hosting, I used Vagrant.  I build a vagrant framework to easily stand up stuff

https://bitbucket.org/toddwebnet2/vagrant

I have oracle virtualbox and vagrant installed.

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
php artisan key:generate
php artisan migrate
php artisan db:seed

once loaded (and hopefully everything works)

you can go to your browser to http://mjFreeway.local.com and see the app

or ... 

if you don't want that route. 
you could change the driver to sqllite or have a mysql server setup somewhere
and use
php artisan serve

