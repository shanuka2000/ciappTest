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
                width: 50%;
                margin-left: 25%;
                display: flex;
                flex-direction: column;
            }
            .mainForm {
                width: 50%;
                margin-left: 25%;
                display: flex;
                align-items: center;
                flex-direction: column;
                padding: 20px;
                border: 1px solid black;
                border-radius: 10px;
                background-color: whitesmoke;
            }

            .mainForm:nth-child(1) {
                margin-top: 10%;
            }

            .mainForm div {
                padding: 10px;
            }

            .mainForm div h4 {
                margin-right: 10px;
            }
            .mainForm input[type=submit] {
                cursor: pointer;
                padding: 10px;
                width: 13em;
                border: none;
                border-radius: 20px;
                box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
                transition: all 200ms ease-in-out;
                text-align: center;
            }
            .mainForm input[type=submit]:hover {
                background-color: #a8a4a3;
            }
            .mainForm input[type=date] {
                width: 13em;
            }
            .mainForm select {
                width:  13em;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <form class="mainForm" action="/ciappTest/index.php/Movies/addToDatabase" method="POST">
                <h1>Add new Movie</h1>
                <div>
                    <h4>Movie Name: </h4>
                    <input type="text" name="title" />
                </div>
                <div>
                    <h4>Movie Director: </h4>
                    <input type="text" name="director" />
                </div>
                <div>
                    <h4>Movie IMDB rating: </h4>
                    <input type="text" name="rating" />
                </div>
                <div>
                    <h4>Movie Genre: </h4>
                    <select name="genres">
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
                </div>
                <div>
                    <h4>Movie Released Year: </h4>
                    <input type="date" name="year">
                </div>
                <div>
                    <input type="submit" name="Submit" />
                </div>
            </form>
            <form class="mainForm" action="/ciappTest/index.php/Movies/allmovies" method="POST">
                <input type="submit" name="Submit" value="Load All Movies" />
            </form>
            <form class="mainForm" action="/ciappTest/index.php/Movies/searchMovie" method="POST">
                <input type="submit" name="Submit" value="Load Search Movie Form"/>
            </form>
        </div>
    </body>
</html>