#!/bin/bash

URL='https://webdav.labri.fr/perso/qrouxel/'

FILES=`
    find . -type f -name "*" -not -path "*git*" -not -name "publish.sh" -not -name "*.swp" -not -name "leph_logs.txt"
`

for file in $FILES; do
    echo "Pushing $URL$file";
    curl -u qrouxel -T $file $URL$file
done;

#Delete file
#curl -u qrouxel -X DELETE https://webdav.labri.fr/perso/qrouxel/file

