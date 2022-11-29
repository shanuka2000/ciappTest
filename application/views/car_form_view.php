<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <style>

            @import url('https://fonts.googleapis.com/css2?family=Anek+Devanagari:wght@200&display=swap');

            * {
                margin: 0;
                padding: 0;
                font-family: 'Anek Devanagari', sans-serif;
            }
            .body {
                width: 100vw;
                height: 100vh;
                background-image: url('https://digitalsynopsis.com/wp-content/uploads/2014/06/supercar-wallpapers-bugatti-1.jpg');
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
                position: relative;
            }

            .topContainer {
                position: absolute;
                display: flex;
                color: #fff;
                width: 100%;
            }

            .formContainer, .carMake{
                display: flex;
                padding: 10px;
                margin-top: 10px;
                /* From https://css.glass */
                background: rgba(255, 255, 255, 0.30);
                border-radius: 16px;
                box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
                backdrop-filter: blur(5px);
                -webkit-backdrop-filter: blur(5px);
                border: 1px solid rgba(255, 255, 255, 0.3);
                font-weight: bold;
            }

            .formContainer {
                width: 17%;
                margin-left: 2%;
            }

            .carMake {
                flex: 1;
                background-color: transparent;
                box-shadow: none;
                backdrop-filter: blur(0px);
                -webkit-backdrop-filter: blur(0px);
                border: none;
                display: flex;
                align-items: center;
                justify-content: flex-end;
            }

            .carMake h1 {
                font-size: 50px;
                margin-right: 10%;
            }


            .section p {
                font-size: 15px;
                margin-bottom: 5px;
                color: #fff;
                text-align: center;
            }

            .section input[type='text'] {
                width: 100%;
                padding: 10px;
                border-radius: 10px;
                outline-width: 0;
                border: none;
            }

            #btn {
                padding: 5px;
                width: 50%;
                margin-top: 10%;
                margin-left: 25%;
                cursor: pointer;
                border-radius: 5px;
                border: none;
            }

            .bottomContainer {
                position: absolute;
                width: 100%;
                height: 20%;
                margin-top: 37%;
                display: flex;
                align-items: center;
                justify-content: space-around;
            }

            .specContainer {
                display: flex;
                align-items: center;
                justify-content: center;
            }

            .specContainer p {
                color: whitesmoke;
                font-size: large;
                align-self: flex-end;
            }

            .round {
                width: 70px;
                height: 70px;
                padding: 10px;
                display: flex;
                align-items: center;
                justify-content: center;
                margin-right: 10px;
                color: whitesmoke;
                text-align: center;

                background: rgba(255, 255, 255, 0.30);
                border-radius: 60px;
                box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
                backdrop-filter: blur(5px);
                -webkit-backdrop-filter: blur(5px);
                border: 1px solid rgba(255, 255, 255, 0.3);
            }

        </style>
    </head>
    <body class="body">
        <div class="topContainer">
            <form class="formContainer">
                <div class="section">
                    <p>Enter Car name</p>
                    <input type="text" id="textField" name="carName" id="carName"/>
                    <button id="btn" type="submit">Submit</button>
                </div>
            </form>
            <div class="carMake">
                <h1 id="carMake">Bugatti</h1>
            </div>
        </div>
    

        <div class="bottomContainer">
            <div class="specContainer">
                <div class="round" id="carModel">Chiron</div>
                <p>Car Model</p>
            </div>

            <div class="specContainer">
                <div class="round" id="topSpeed">440 km/h</div>
                <p>Top Speed</p>
            </div>

            <div class="specContainer">
                <div class="round" id="zeroToHundred">2.4 s</div>
                <p>Acceleration 0 - 100 km/h</p>
            </div>
        </div>

        <!-- Javascript part starts here -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" ></script>		
        
        <script language="javascript">
            $('#btn').click(function() {
                // console.log("sss")
                // var imageUrl = "https://media.autoexpress.co.uk/image/private/s--tiCJ6t-W--/f_auto,t_content-image-full-desktop@1/v1618844261/autoexpress/2021/04/Porsche%20911%20GT3%20-3.jpg";
                // $('.body').css("background-image", "url("+ imageUrl +")");
                // event.preventDefault();

                $.ajax({
                    url: '/ciappTest/index.php/Car/getCarDetails',
                    data: {'input' : $('#textField').val() },
                    dataType: 'json',
                    type: 'POST',
                }).done(function(data){
                    if (!data) {
                        $('#carMake').text('N/A');
                        $('#carModel').text('N/A');
                        $('#topSpeed').text('N/A');
                        $('#zeroToHundred').text('N/A');
                    } else {

                        var imageUrl = data[0].carImageUrl;
                        $('.body').css("background-image", "url("+ imageUrl +")");

                        $('#output').text(data[0].definition);
                        $('#carMake').text(data[0].carMake);
                        $('#carModel').text(data[0].carModel);
                        $('#topSpeed').text(data[0].topSpeed);
                        $('#zeroToHundred').text(data[0].zeroTo100);

                    }
                })
                event.preventDefault();
            });
            
        </script>
    </body>
</html>