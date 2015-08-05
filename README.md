# README #

This repository stores the configuration related files for Fruit Dashboard.

### How to use it? ###

* Clone the project source (https://github.com/tryfruit/fruit-dashboard.git) to your public website folder (e.g. /var/www, /home/user/public_html)
* Clone the configuration project somewhere safe (not in the public website folder)
* Set up your configuration variables
* Set up the *SRC_DIRECTORY* and *CONFIG_DIRECTORY* variables inside your configuration folder in install.sh
* run ./install.sh
* Profit... :)

### How to add a new config? ###

* Copy one of the existing configurations
* Set up your configuration variables
* Set up the *SRC_DIRECTORY* and *CONFIG_DIRECTORY* variables inside your configuration folder in install.sh
* run ./install.sh
* Profit... :)

### Which variables are configuration dependent? ###
* All of the sensitive variables. You should not push any sensitive data to the original project.
