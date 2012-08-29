#!/bin/bash
if [ ! -d ./outputfiles ]; then mkdir ./outputfiles; fi;
for f in *.png;
do
    echo "Processing $f"
    convert bg.png -size 32x32 -page +4+4 $f -background transparent  -layers flatten ./outputfiles/$f
done
