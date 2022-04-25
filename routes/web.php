<?php

$text = 'Привет мир!';

$title = 'Моя первая страница';

Route::get('/', function () use ($text, $title) {
    return " 
        <!doctype html>
        <html lang=\"en\">
        <head>
            <meta charset=\"UFT-8\">
            <title>$title</title>
        </head>
        <body>
            <h1>$text</h1>
            Lorem ipsum dolor sit amet.
        </body>
    ";
});
