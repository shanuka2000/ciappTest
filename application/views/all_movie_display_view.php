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
                background-image: url('https://wallpapercave.com/dwp1x/wp10615907.jpg');
            }
            .container {
                margin-top: 10%;
                width: 50%;
                margin-left: 25%;
                display: flex;
                flex-direction: column;
                padding: 20px;
                border-radius: 10px;
                background-color: whitesmoke;
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
            <h1>All Movies</h1>
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