#!/bin/bash

# ~~~~~~~~~~~~ CONFIG ~~~~~~~~~~~~ #
# --------- Source config -------- #
SRC_DIRECTORY='/var/www/fruit-dashboard'

# ~~~~~~~~~ RUN COMMANDS ~~~~~~~~~ #
echo "# ------ Collect widget data ----- #"
cd `echo $SRC_DIRECTORY`
php artisan widgets:collect_data
echo "# -------------------------------- #"
