#!/bin/bash
if [ ! -d ./outputfiles ]; then mkdir ./outputfiles; fi;
for f in *.png;
do
    echo "Processing $f"
    convert -resize 32x32 $f -background none -gravity center -extent 32x32  ./outputfiles/$f
done
