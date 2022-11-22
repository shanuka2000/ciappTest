<?php

use LDAP\Result;

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
                background-image: url('https://wallpapercave.com/dwp1x/wp10615907.jpg');
            }

            .container {
                background-color: whitesmoke;
                width: 50%;
                margin-left: 25%;
                margin-top: 10%;
                padding: 10px;
                display: flex;
                align-items: center;
                flex-direction: column;
                border-radius: 10px;
            }

            form {
                margin-top: 20px;
            }

            .container select {
                width:  13em;
                padding: 10px;
            }

            input[type=submit] {
                margin-top: 10px;
                cursor: pointer;
                padding: 10px;
                width: 13em;
                border: none;
                border-radius: 20px;
                box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
                transition: all 200ms ease-in-out;
                text-align: center;
            }
            input[type=submit]:hover {
                background-color: #a8a4a3;
            }

            .resultContainer {
                background-color: whitesmoke;
                width: 50%;
                margin-left: 25%;
                padding: 10px;
                border-radius: 10px;
                margin-top: 10px;
                display: flex;
                align-items: center;
                justify-content: center;
            }

            table {
                border-collapse: collapse;
                width: 100%;
            }

            td, th {
                border: 1px solid #dddddd;
                text-align: left;
                padding: 8px;
            }

            tr:nth-child(even) {
                background-color: #dddddd;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <h1>Search Movie By Genre</h1>
            <form action="/ciappTest/index.php/Movies/search" method="POST">
                <p>Select Genre: </p>
                <select name="genres">
                    <option>Select Genre</option>
                    <option value="drama">Drama</option>
                    <option value="action">Action</option>
                    <option value="horror">Horror</option>
                    <option value="thriller">Thriller</option>
                    <option value="adventure">Adventure</option>
                    <option value="fantasy">Fantasy</option>
                    <option value="comedy">Comedy</option>
                    <option value="romantic">Romantic</option>
                    <option value="sci-fi">Sci-fi</option>
                    <option value="biography">Biography</option>
                </select>
                <div>
                    <input type="submit" name="Submit" />
                </div>
            </form>
        </div>
        <div class="resultContainer">
            <!-- <?php
                // foreach ($result as $row) {
                //     echo $row->imdbRating;
                // }
            ?> -->
            <?php
                if (empty($result)) {  
                    echo '<p>' . "Nothing to show" . '</p>';
                } else {
            ?>
            <table>
                <tr>
                    <th>Movie Title</th>
                    <th>Movie Director</th>
                    <th>Movie Genre</th>
                    <th>IMDB Rating for Movie</th>
                    <th>Movie Released Year</th>
                </tr>
                
                <?php 
                        foreach ($result as $row) {
                            echo '<tr>';
                            echo '<td>' . $row->title . '</td>';
                            echo '<td>' . $row->director . '</td>';
                            echo '<td>' . $row->genre . '</td>';
                            echo '<td>' . $row->imdbRating . '</td>';
                            echo '<td>' . $row->releaseYear . '</td>';
                            echo '</tr>';
                        }
                    }
                ?>
            </table>
        </div>
    </body>
</html>