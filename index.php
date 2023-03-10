<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <style>
        body, ul{
            margin: 0;
            padding: 0;
            font-family: Arial, Helvetica, sans-serif;

        }
        body{
            box-sizing: border-box;
        }
       
        .navbar{
            /* float: left; */
            border-bottom: 1px solid gray;
            width: 100%;
            height: 50px;
            padding: 8px;
            background-color: #ccc;
            position: fixed;
            left: 0;
            top: 0;
        }
        
        footer{
            /* float: left; */
            /* border: 1px solid gray; */
            width: 100%;
            height: 100px;
            background-color: #ccc;
            margin-bottom: 0;
            
        }
        
        footer ul{
            /* margin-left: 300px; */
        }
        .navbar ul li{
            float: left;
            display: inline-block;
            padding-top: 15px;

        }
        a{
            text-decoration: none;
            padding: 20px;
            text-align: center;
            margin-top: 50px;
        }
        a:hover{
            background-color: #555;
            border-radius: 20px;
            color: white;
        }
        .auth{
            float: right;
        }
        .auth li{
            
            display: inline-block;
            margin-right: 20px;
        }
        img{
            width: 100%;
        }
        .contents{
            width: 100%;
            height: 600px;
            margin-top: 70px;
            background-image: url(Assets/images/image.jpg);
            background-size: cover;
            background-repeat: no-repeat;  
            box-sizing: border-box;
        }
        .wel{
            box-sizing: border-box;
            height: 200px;
            width: 220px;
            padding-top: 50px;
            padding: 50px 0 10px 10px;
            text-align: center;
            font-size: 20px;
            color:gray;
            border-radius: 5%;
            box-shadow: 0 0 10px black;
            background-color: rgba(0,0,0,0.1);
            position: absolute;
            top: 50%;
            left: 50%;
            position: fixed;
            transform: translate(-50%,-50%);
        }
        footer{
            
            height: 150px;
            width: 100%;
            /* margin-top: 600px; */
            text-align: center;
        }
        footer h2{
            float: left;
            padding: 50px;
            
            /* margin-left: 300px; */
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="navbar">
                <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="resources/project.php">My Project</a></li>
                    <li><a href="resources/gallary.php">Gallary</a></li>
                    <li><a href="resources/about.php">About</a></li>
                    <li><a href="resources/contact.php">Contact</a></li>
                </ul>
                <ul class="auth">
                    <li><a href="">Login</a></li>
                    <li><a href="">Signup</a></li>
                </ul>
            </div>
            <div class="bimage">
                
            </div>
        </div>
        <div class="row">
            <div class="contents">
               <div class="wel">
                <h1>Welcome !</h1>
               </div>
            </div>
        </div>
        <div class="row">
            <footer>
                <div class="box">
                    <h2>Front end Designer</h2>
                </div>
                <div class="box2">
                    <h2>Backend Developer</h2>
                </div>
            </footer>
        </div>
    </div>
</body>
</html>
