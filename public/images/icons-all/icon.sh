#!/bin/bash

[ $# -eq 2 ] ||
{
	echo -e "Usage: `basename $0` <fichier-model> <pattern> "
	echo -e "exemple: `basename $0` model.jpg new"
	echo "Crée les fichiers: new-19.png new-38.png new-96.png new-128.png"
	exit 1
}
 
[ -e "$1" ] ||
{ 
	echo "$1 fichier introuvable ";
	exit 1; 
}

for i in 19 38 96 128
do 
    convert -size $ix$i "$1"  $2-$i.png ; 
done
ls $2-*.png -l
