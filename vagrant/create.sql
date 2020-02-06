
CREATE USER 'mjFreeway'@'%' IDENTIFIED BY 'jSuZ7ugR7SKB9Afm';
CREATE DATABASE IF NOT EXISTS `mjFreeway`;
GRANT ALL PRIVILEGES ON `mjFreeway`.* TO 'mjFreeway'@'%';GRANT ALL PRIVILEGES ON `mjFreeway\_%`.* TO 'mjFreeway'@'%';
flush privileges;
