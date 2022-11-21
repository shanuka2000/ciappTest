<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Welcome to CodeIgniter</title>
        <style>
            * {
                margin: 0;
                padding: 0;
            }
            

            div {
                width: 50%;
                margin-left: 25%;
                margin-top: 25%;
                border: 1px solid black;
                padding: 10px;
            }

            p {
                margin-top: 5%;
                font-size: 12px;
            }
        </style>
    </head>
    <body>
        <div>
            <h1>Welcome <?php echo $name ?></h1>
            <p> Request type => <?php echo $requestType ?></p>
        </div>
    </body>
</html>