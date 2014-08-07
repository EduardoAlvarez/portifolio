#!/usr/bin/env bash

sudo apt-get update
#apache
sudo apt-get install -y apache2
#php5
sudo apt-get install php5 
#mysql
sudo apt-get install mysql-server

rmd: -rf /var/www
ln -fs /vagrant /var/www
