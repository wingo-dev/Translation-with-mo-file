<?php
$locale = 'es_ES';
putenv("LC_ALL=$locale");
setlocale(LC_ALL, $locale);
bindtextdomain('translation', 'E:\Xampp\htdocs\translate\locale');
bind_textdomain_codeset('translation', 'UTF-8');
textdomain('translation');

echo _('Hello, world!') . "<br>"; // Output: ¡Hola, mundo!
echo _('Goodbye!'); // Output: ¡Adiós!
