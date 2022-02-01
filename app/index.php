<?php

$mysqli = new mysqli("db","test","123","test") or die('DB not working');

echo "DB is working";
?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="author" content="Steven Liebregt" />
        <title>Hello, world!</title>
        <style>
            table, th, td {
                border: 1px solid black;
                border-collapse: collapse;
            }
        </style>
    </head>
    <body>
        <h1>Hello, world!</h1>
Server IP: <?= $_SERVER["SERVER_ADDR"] ?>
    </body>
</html>
