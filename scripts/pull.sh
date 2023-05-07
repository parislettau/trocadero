#!/usr/bin/env sh

# PROJECT=${PWD##*/}  # get project directory name
HOST=ubuntu@67.219.98.22           # 
WEBROOT=/etc/easypanel/projects/trocadero/trocaderoprojects/volumes/content     # get the location of the project on the server

rsync -r -p -t -u -z --checksum --exclude=".*" -P -h -i --delete $HOST:$WEBROOT ./
