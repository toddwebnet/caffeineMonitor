
CREATE USER 'caffeineMonitor'@'%' IDENTIFIED BY 'jSuZ7ugR7SKB9Afm';
CREATE DATABASE IF NOT EXISTS `caffeineMonitor`;
GRANT ALL PRIVILEGES ON `caffeineMonitor`.* TO 'caffeineMonitor'@'%';GRANT ALL PRIVILEGES ON `caffeineMonitor\_%`.* TO 'caffeineMonitor'@'%';
flush privileges;
