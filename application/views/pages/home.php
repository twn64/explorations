
<html>
<head>
    <title>Login Page</title>
    <!--<link rel="stylesheet" type="text/css" href="style/style.css">
    need to create a style sheet for the style attributes-->
</head>
    <style>
        body{
            text-align: center;
            background-color: white;
        }
        div{
            background-color: lightgrey;
            width: 50%;
            margin: 0 auto; 
            align-items: center;
            border: 3px solid #FFCC33;
            color: black;
            border-radius: 25px;
        }
        .Header{
            background-color: #303030;
            color: #FFCC33;
            text-align: center;
            padding: 50px; 
            font-size: 40;
        
        }
       
        .button{
            background-color: gainsboro;
            border-radius: 25%;
            border-color: aliceblue;
            
        }
        .header2{
            font-size: 26;
        }
        
       
    </style>
<body>
    <img src="https://myzou.missouri.edu/um_extcopy/myzou/tigermark.gif" alt="tiger" style="float: left">
        <h1 class="Header">myZou SECURITY Request Form
            <p class="header2">
            University of Missouri-Columbia</p>
        </h1>
      
    
  <form name="Login" action="login.php" method="POST">
                <input type="hidden" name="action" value="do_login">
                <p class="login"> LOGIN </p>
                <div>
                    <p>

                        <label for="username">USER NAME:</label>
                        <input type="text" name="username" id="username" value="">
                    </p>
                    <p>
                        <label for="password">PASSWORD:</label>
                        <input type="password" name="password" id="password">
                    </p>
                </div>
                   <p>
                    <button class="button" type="submit" name="submit" >SUBMIT</button>
                    </p>
                
    </form>

</body>
</html>
