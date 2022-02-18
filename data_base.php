<?php

    $my_country = $_GET["countryList"];
    $my_age = $_GET["age"];
    $my_gender = $_GET["gender"];
    $my_education = $_GET["education"];
    $my_work = $_GET["work"];
    $my_rate = $_GET["rate"];

    $my_host = "ec2-34-206-148-196.compute-1.amazonaws.com";
    $my_user = "zoamtdgnjxkpje";
    $my_password = "5e9bac442fde8cf3e947746b5c28f12a31d8dc0d7bcc32cab8f9e4a50b1f3167";
    $my_db = "d4jj8qvivkb39o";

    $my_conection = mysqli_connect($my_host, $my_user, $my_password, $my_db);

    $my_query = "INSERT INTO my_visitors(COUNTRY, AGE, GENDER, EDUCATION, WORK, RATE) 
    VALUES ('$my_country', $my_age, '$my_gender', '$my_education', '$my_work', $my_rate)";

    $my_register = mysqli_query($my_conection, $my_query);

    if($my_register){
        echo "
            <link rel='stylesheet' href='styles02.css'/>

            <div class='uploadMessage'>
            
                <img src='good.png' id='myImage' />
                <p id='myMessage'>Information sent successfully</p>

            </div>

            <script>

                let image = document.getElementById('myImage');
                let message = document.getElementById('myMessage');

                if(window.screen.width <= 550){
                    image.style.width = '300px';
                    message.style.fontSize = '70px';
                }else if (window.screen.width >= 1000 && window.screen.width < 1920){
                    image.style.width = '150px';
                    message.style.fontSize = '50px';
                }else if (window.screen.width >= 1920 && window.screen.width < 2560){
                    image.style.width = '250px';
                    message.style.fontSize = '75px';
                }else if (window.screen.width >= 2560 && window.screen.width < 3840){
                    image.style.width = '300px';
                    message.style.fontSize = '75px';
                }else if (window.screen.width >= 3840 && window.screen.width < 7680){
                    image.style.width = '500px';
                    message.style.fontSize = '125px';
                }else if (window.screen.width >= 7680){
                    image.style.width = '800px';
                    message.style.fontSize = '200px';
                }
            
                window.addEventListener('resize', ()=>{
                    if(window.screen.width < 550){
                        image.style.width = '300px';
                        message.style.fontSize = '70px';
                    }else if(window.screen.width >= 550 && window.screen.width < 1000){
                        image.style.width = '150px';
                        message.style.fontSize = '30px';
                    }
                });
        
            </script>
        ";
    }else{
        echo "
            <link rel='stylesheet' href='styles02.css'/>

            <div class='uploadMessage'>
            
                <img src='wrong.png' id='myImage'/>
                <p id='myMessage'>Error, the information was not sent</p>

            </div>

            <script>

                let image = document.getElementById('myImage');
                let message = document.getElementById('myMessage');

                if(window.screen.width <= 550){
                    image.style.width = '300px';
                    message.style.fontSize = '70px';
                }else if (window.screen.width >= 1000 && window.screen.width < 1920){
                    image.style.width = '150px';
                    message.style.fontSize = '50px';
                }else if (window.screen.width >= 1920 && window.screen.width < 2560){
                    image.style.width = '250px';
                    message.style.fontSize = '75px';
                }else if (window.screen.width >= 2560 && window.screen.width < 3840){
                    image.style.width = '300px';
                    message.style.fontSize = '75px';
                }else if (window.screen.width >= 3840 && window.screen.width < 7680){
                    image.style.width = '500px';
                    message.style.fontSize = '125px';
                }else if (window.screen.width >= 7680){
                    image.style.width = '800px';
                    message.style.fontSize = '200px';
                }
            
                window.addEventListener('resize', ()=>{
                    if(window.screen.width < 550){
                        image.style.width = '300px';
                        message.style.fontSize = '70px';
                    }else if(window.screen.width >= 550 && window.screen.width < 1000){
                        image.style.width = '150px';
                        message.style.fontSize = '30px';
                    }
                });
    
             </script>
        ";
    }

    mysqli_close($my_conection);

?>