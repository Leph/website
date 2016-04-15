#!/bin/bash

URL='https://webdav.labri.fr/perso/qrouxel/'

FILES='
    index.html
'

for file in $FILES; do
    echo "Pushing $URL$file";
    curl -u qrouxel -T $file $URL$file
done;

