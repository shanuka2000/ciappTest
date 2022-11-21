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
                margin-top: 20%;
                border-radius: 10px;
            }

            form div {
                display: flex;
                align-items: center;
                padding: 10px;
            }

            form div h4 {
                margin-right: 10px;
            }

            form input[type=submit] {
                padding: 5px;
                width: 30%;
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
        <form action="/ciappTest/index.php/StudentForm/actionGet" method="GET">
            <h2>Form with GET</h2>

            <div>
                <h4>Enter name :</h4>
                <input type="text" name="name" />
            </div>

            <input type="submit" name="Submit"/>
        </form>

        <form action="/ciappTest/index.php/StudentForm/actionPost" method="POST">
            <h2>Form with POST</h2>

            <div>
                <h4>Enter name :</h4>
                <input type="text" name="name" />
            </div>

            <input type="submit" name="Submit"/>
        </form>
    </body>
</html>