<?php

$url = 'https://alura.com.br';

if (str_starts_with($url, 'https')) {
    echo 'It is a safe URL';
}   else {
    echo 'It is not a safe URL';
};

echo PHP_EOL;

if (str_ends_with($url, '.br')) {
    echo 'It is a domain from Brazil';
}   else {
    echo 'It is not a domain from Brazil';
};

