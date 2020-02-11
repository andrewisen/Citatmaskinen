#!/bin/bash
# Purpose: Check if links are valid. Note: follows redirects.
# ------------------------------------------
INPUT=app/files/data.txt
OLDIFS=$IFS
IFS=';'
[ ! -f $INPUT ] && { echo "$INPUT file not found"; exit 99; }
while read quote answer link
do
    echo -n "Checking quote '$quote'. Result: "
    RESP_CODE=$(curl -sL -o /dev/null -w "%{http_code}" $link)
    if [ $RESP_CODE != 200 ]
        then
        echo "OUFF that's not looking good! Checkout the link: $link"
        exit 1
        # Or comment out 'exit 1' and continue instead.
        # continue
    fi
    echo "OK!"
done < $INPUT
IFS=$OLDIFS