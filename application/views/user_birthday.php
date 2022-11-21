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
            }
            form {
                width: 50%;
                margin-left: 25%;
                display: flex;
                align-items: center;
                flex-direction: column;
                padding: 20px;
                border: 1px solid black;
                margin-top: 10%;
                border-radius: 10px;
            }
            form div {
                padding: 10px;
            }

            form div h4 {
                margin-right: 10px;
            }
            form input[type=submit] {
                cursor: pointer;
                padding: 5px;
                width: 10em;
                border: none;
                border-radius: 20px;
                box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
                transition: all 200ms ease-in-out;
            }
            form input[type=submit]:hover {
                background-color: #a8a4a3;
            }
        </style>
    </head>
    <body>
        <form action="/ciappTest/index.php/User_age/actionCalculateAge" method="POST">
            <h1>Age Calculator</h1>
            <div>
                <h4>User name: </h4>
                <input type="text" name="name" />
            </div>
            <div>
                <h4>User born year: </h4>
                <input type="text" name="year" />
            </div>
            <div>
                <h4>User born month: </h4>
                <input type="text" name="month" />
            </div>
            <div>
                <h4>User born date: </h4>
                <input type="text" name="date" />
            </div>
            <div>
                <input type="submit" name="Submit" />
            </div>
        </form>
    </body>
</html>