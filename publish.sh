#!/bin/bash

URL='https://webdav.labri.fr/perso/qrouxel/'

FILES=`find . -type f -iname "*" -and -not -ipath "*.git*" -and -not -iname "*.sh" -and -not -iname "*leph_logs.txt" -not -iname "*.swp"`

read -s -p "Enter Password: " PWD
echo ""

for file in $FILES; do
    echo "Pushing $URL$file";
    curl -u qrouxel:$PWD -T $file $URL$file
done;

#Delete file
#curl -u qrouxel -X DELETE https://webdav.labri.fr/perso/qrouxel/file

