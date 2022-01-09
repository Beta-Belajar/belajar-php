<?php
//Single Quote
echo 'Nama : ';
echo 'Lerry Julian Joostensz';
//Dalam Single Quote tidak bisa menambahkan enter atau tab
//Double Quote
echo "Nama : ";
echo "Lerry\t Julian\t Joostensz\n";
//Multiline String  bisa menggunakan heredoc dan nowdoc(seperti single qoute)
//Heredoc -> menggunakan double quote -> tanpa menggunakan \t atau \n dalam pengetikan
echo <<<TAGNAME
Selamat belajar PHP
sekaran, kita belajar tipe data string
ini adalah :    Cara ke-3 membuat string
bisa menggunakan heredoc
TAGNAME;
