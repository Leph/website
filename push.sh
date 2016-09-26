#!/bin/bash

URL='https://webdav.labri.fr/perso/qrouxel/'

if [ "$#" -ne 1 ]; then
    echo 'Usage: push.sh [path]';
    exit;
fi

file=$1;
echo "Pushing $URL$file";
curl -u qrouxel -T $file $URL$file

