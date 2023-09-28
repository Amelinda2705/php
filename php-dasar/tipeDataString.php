<?php

echo 'Name : ';
echo 'Amelinda';
echo "\n";

echo "Name : ";
echo "Amel\tinda\n";

echo <<<EKO
\tHaloo, selamat belajar PHP
ini adalah cara membuat string dengan heredoc
jadi "heredoc" ini bisa buat enter tanpa simbol
EKO;

echo <<<TEXT
\n\tHaloo, selamat belajar (again) PHP 
ini adalah cara membuat string menggunakan nowdoc
kurang lebih sama kayak heredoc cuma bedanya tuh yang 
nowdoc gak bisa buat parsing
TEXT;



