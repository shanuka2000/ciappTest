<!DOCTYPE html>
    <html lang="en">
    <head>
        <title>Document</title>
        <style>
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
            }

            .container {
                display: flex;
                flex-direction: column;
                align-items: center;
                width: 50%;
                margin-left: 25%;
                padding: 10px;
                border-radius: 5px;
                background-color: white;
                border: 1px solid black;
            }

            .container div {
                display: flex;
                align-items: center;
                padding: 10px;
            }

            .container div p {
                margin-right: 10px;
            }

            .container div input {
                padding: 5px;
            }

            .container input[type=submit] {
                width: 30%;
                padding: 5px;
                cursor: pointer;
            }

            .container:nth-child(2) {
                margin-top: 10px;
                align-items: flex-start;
            }
            
            .container:nth-child(2) div {
                margin-left: 10%;
            }

        </style>
    </head>
    <body>
        <form class="container">
            <div>
                <p>Text Input: </p>
                <input type="text" id="textField"/>
            </div>
            <input type="submit" id="submit" />
        </form>
        <div class="container">
            <h3>Your input was, </h3></br>
            <div id="output"></div>
        </div>
        <!-- Javascript part starts here -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" ></script>		
        
        <script language="javascript">
            $('#submit').click(function() {
                $('#output').html(`<p>${$('#textField').val()}</p>`);
                event.preventDefault();
            });
        </script>
    </body>
</html>