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
            body {
                width: 100%;
                height: 100%;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
            }

            div {
                width: 50%;
                margin-top: 10%;
                text-align: center;
            }
        </style>
    </head>
    <body>
            <div>
                <h1>User name is <?php echo $name ?>.</h1> 
                <h1>Age is <?php echo $age ?></h1>
            </div>
    </body>
</html>