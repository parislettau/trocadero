#!/usr/bin/env sh

LOCAL=~/Sites/memoreview

cd $LOCAL
HOST=root@149.28.168.105
WEBROOT=/var/www/memoreview

rsync -r -p -t -u -z --checksum --exclude=".*" -P -h -i --delete $HOST:$WEBROOT/content ./
