<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Filter</title>
    <style>
        /* @import 'bourbon'; */
        *{
        margin: 0;
        padding: 0;
        font-family: Arial, Helvetica, sans-serif;
    }
    body{
        
    }
    .container{
        background: url(../Assets/images/image.jpg) no-repeat center;
        width: 100%;
        height: 100vh;
        background-size: cover;
        text-align: center;
        color: black;
        

       }
       .container h2{
        font-size: 2.5em;
        font-weight: 900;
        text-transform: uppercase;

       }
       .container p{
        line-height: 1.5;
       }
       .range-slide{
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
       }
       .range-slide .box{
        padding: 20px;
        background: white;
        margin: 10px 0;
        border-radius: 5px;
        box-shadow: 0 0 5px #0005;
       }
       .box p{
        text-transform: uppercase;
       }
       .box .range{
        width: 350px;
        height: 40px;
        display: flex;
        justify-content: center;
        align-items: center;

       }
       .range input{
        width: 100%;
        height: 3px;
        appearance: none;
        background: teal;
        margin: 0 10px;
        outline: none;
       }
       .range input::slider-thumb{
        appearance: none;
        width: 18px;
        background: teal;
        border-radius: 50%;
        cursor: pointer;
       }
       .range input::-moz-slider-thumb{
        -moz-appearance: none;
        width: 18px;
        background: teal;
        border-radius: 50%;
        cursor: pointer;
       }
    </style>
</head>
<body>

    <div>
        <div class="container">
            <h2>Change the page brightness contrast</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit similique necessitatibus molestias assumenda accusantium excepturi sunt iusto reiciendis, distinctio rerum!
            </p>
        </div>
        <div class="range-slide">
            <div class="box">
                <p>Brightness</p>
                <div class="range">
                    <i class="fa fa-sun-o" aria-hidden="true"></i>
                    <input type="range" name="" id="bright" min="0" max="200" value="100">
                    <span class="value">100</span>
                </div>
            </div>
            <div class="box">
                <p>Contrast</p>
                <div class="range">
                    <i class="fa fa-adjust" aria-hidden="true"></i>
                    <input type="range" name="" id="contrast" min="0" max="100" value="100">
                    
                    <span class="value">100</span>
                </div>
            </div>
        </div>
    </div>
    <script>
        const rangeInput = document.querySelectorAll('input');
        const value = document.querySelectorAll('.value');
        const container = document.querySelector('.container');
        for(let i=0; i<rangeInput.length; i++){
            value[i].textContent=rangeInput[i].value;
            rangeInput[i].addEventListener('input',()=>{
                value[i].textContent=rangeInput[i].value;
                if (rangeInput[i].id === 'bright') {
                    container.style.filter = `brightness(${rangeInput[i].value}%)`;
                }
                if (rangeInput[i].id === 'contrast') {
                    container.style.filter = `contrast(${rangeInput[i].value}%)`;
                }

            })
        }
    </script>
</body>
</html>