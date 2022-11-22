<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Welcome to CodeIgniter</title>

        <style>
            @import url('https://fonts.googleapis.com/css2?family=Roboto&display=swap');
            
            * {
                margin: 0;
                padding: 0;
                font-family: 'Roboto', sans-serif;
            }
            body {
                width: 100vw;
                height: 100vh;
                display: flex;
                flex-direction: column;
                justify-content: center;
                background-image: linear-gradient(#67e5cd, #4b81e5);
            }

            .container {
                display: flex;
                flex-direction: column;
                width: 30%;
                margin-left: 35%;
                padding: 10px;
                border-radius: 5px;
                background-color: white;
            }
            .newTodoSection {
                margin-top: 10px;
                display: flex;
                align-items: center;
                justify-content: space-between;
                width: 100%;
            }

            .newTodoSection input {
                width: 89%;
                margin-right: 1%;
                padding: 5px;
                border: 1px solid #90918f;
                border-radius: 5px;
                background-color: white;
                height: 30px;
                outline: none;
            }

            .newTodoSection button {
                flex: 1;
                display: flex;
                align-items: center;
                justify-content: center;
                padding: 5px;
                background-color: #8e49e3;
                border: none;
                border-radius: 5px;
            }

            .newTodoSection button ion-icon {
                font-size: 30px;
                color: white;
            }

            .todoListSection {
                margin-top: 10px;
                height: 50%;
                overflow-y: scroll;   
            }

            .todoListSection::-webkit-scrollbar {
                display: none;
            }

            .todo {
                background-color: #f3f1f4;
                padding: 10px;
                border-radius: 5px;
                margin-bottom: 5px;
            }

            .clearSection {
                margin-top: 10px;
                display: flex;
                align-items: center;
                justify-content: space-between;
            }

            .clearSection p {
                flex: 1;
                font-size: 15px;
            }

            .clearSection button {
                width: 20%;
                background-color: #8e49e3;
                border: none;
                padding: 10px;
                border-radius: 5px;
                color: white;
            }

        </style>
    </head>
    <body>
        <div class="container">
            <h1>Todo App</h1>
            <form class="newTodoSection" action="/ciappTest/index.php/Todo/addTodo" method="POST">
                <input type="text" name="todo" placeholder="Add your new todo"/>
                <button type="submit" name="Submit">
                    <ion-icon name="add-outline"></ion-icon>
                </button>
            </form>
            <div class="todoListSection">
                <!-- PHP should come here -->
                <?php
                    if (empty($actions)) {
                        echo 'No tasks Available';
                    } else {
                        foreach ($actions as $row) {
                            echo '<div class="todo">';
                            echo '<p>' . $row->action_title . '</p>';
                            echo '</div>';
                        }
                    }
                ?>
            </div>
            <form action="/ciappTest/index.php/Todo/removeAll" class="clearSection">
                <p>You have 
                    <?php
                        if (empty($actions)) {
                            echo 0;
                        } else {
                            echo count($actions);
                        }
                    ?> 
                pending tasks</p>
                <button class="clearAll">Clear All</button>
            </form>
        </div>
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    </body>
</html>