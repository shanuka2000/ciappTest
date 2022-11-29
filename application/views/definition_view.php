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
                display: flex;
            }

            .container:nth-child(2) div:nth-child(1) {
                display: flex;
            }

            .container:nth-child(2) div:nth-child(1) h4:nth-child(1) {
                margin-right: 5px;
            }
            
            .container:nth-child(2) div:nth-child(2) {
                font-size: 12px;
                text-align: center;
            }

        </style>
    </head>
    <body>
    <form class="container">
            <div>
                <p>Enter your word: </p>
                <input type="text" id="textField"/>
            </div>
            <input type="submit" id="submit" value="Search Definition"/>
        </form>
        <div class="container">
            <div>
                <h4>Your Definition for the word </h4>
                <h4 id="word"></h4>
            </div>
            <div id="output"></div>
        </div>
        
        <!-- Javascript part starts here -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" ></script>		
        
        <script language="javascript">
            $('#submit').click(function() {
                
                $.ajax({
                    url: '/ciappTest/index.php/Definition/getDef',
                    data: {'input' : $('#textField').val() },
                    dataType: 'json',
                    type: 'POST',
                    // success: function(data) {
                    //     $('#word').text(data[0].word + ",");
                    //     $('#output').text(data[0].definition);
                    // }
                }).done(function(data){
                    $('#word').text($('#textField').val() + ",");
                    if (!data) {
                        $('#output').text('Word is not registered. Please try again!');
                    } else {
                        $('#output').text(data[0].definition);
                    }
                    
                    
                })
                event.preventDefault();
            })
        </script>
    </body>
</html>