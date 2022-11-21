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
        </style>
    </head>
    <body>
        <h1 style="padding: 10px;">Student Details</h1>
        <div style="display: flex; align-items: center; padding: 5px 10px;">
            <b style="margin-right: 10px;">Student Name:</b>
            <p><?php echo $name ?></p>
        </div>
        <div style="display: flex; align-items: center; padding: 5px 10px;">
            <b style="margin-right: 10px;">Student Age:</b>
            <p><?php echo $age ?></p>
        </div>
        <div style="display: flex; align-items: center; padding: 5px 10px;">
            <b style="margin-right: 10px;">Student school:</b>
            <p><?php echo $school ?></p>
        </div>
        <div style="display: flex; align-items: center; padding: 5px 10px;">
            <b style="margin-right: 10px;">Student Location:</b>
            <p><?php echo $location ?></p>
        </div>
    </body>
</html>