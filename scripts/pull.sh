#!/usr/bin/env sh

LOCAL=~/Sites/trocadero

cd $LOCAL
HOST=root@149.28.168.105
WEBROOT=/var/www/trocadero

rsync -r -p -t -u -z --checksum --exclude=".*" -P -h -i --delete $HOST:$WEBROOT/content ./
