#!/bin/bash

# ~~~~~~~~~~~~ CONFIG ~~~~~~~~~~~~ #
# --------- Source config -------- #
SRC_DIRECTORY="/var/www/fruit-dashboard"
CONFIG_DIRECTORY="/var/www/fruit-dashboard-config/local"

# ~~~~~~~~~~~~ INSTALL ~~~~~~~~~~~ #
echo "# ------ Moving configuration ------ #"
if [ -d "$SRC_DIRECTORY" ]; then
    cp -rv `echo $CONFIG_DIRECTORY/.` `echo $SRC_DIRECTORY/`
    rm -rfv `echo $SRC_DIRECTORY/install.sh`
else
    echo -e "\e[31mSource folder cannot be found. \e[0mPlease clone the project source first."
fi
echo "# --- Done: Moving configuration --- #"
