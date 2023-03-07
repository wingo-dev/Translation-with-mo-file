<?php
$locale = 'en_ES';
setlocale(LC_ALL, $locale);
bindtextdomain('translation', dirname(__FILE__) . "/locale");

textdomain('translation');

echo _('¡Hola, mundo!') . "<br>"; // Output: ¡Hola, mundo!
