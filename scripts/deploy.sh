#!/usr/bin/env sh
PROJECT=trocadero
LOCAL=~/sites/$PROJECT

# Ask the user for a descripion of push
echo Hello, please enter short description of the push:
read varname

DESCRIPTION=$varname

cd $LOCAL
git pull
git add .
git commit -m "$DESCRIPTION"
git push

USER=root
HOST=149.28.168.105
WEBROOT=/var/www/$PROJECT

ssh -A $USER@$HOST /bin/bash <<EOF
  cd $WEBROOT
  git pull
  sudo chown -R www-data:www-data .
EOF



