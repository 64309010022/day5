<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

</head>
<style>
    .H1{
        margin: 0 auto;
        max-width: 400px;
        border: 1px solid red;
        padding: 10px;
        background-color: whitesmoke;
        
    }
    .H2{
        margin-top: 100px;
       
    }
    .bg{
        background-image: url("2.jpg")
    }

</style>
<body class="bg">
    <div class="H2">
    <div style="text-align: center;">
        <p><label style="font-size: 50px;color: black;">Login</label>
       
    </p>
    </div>
    
    <div class="H1">

        <p><label for="myemail">username: </label>
        <input id="myemail" type="email" size="30" name="email">
        </p>
        
        <p><label for="mypass">password: </label>
        <input id="mypass" type="password" name="password">
        </p>

        <div style="text-align: right;"><input type="submit" value="OK"></div>
    </div>
</div>
</body>
</html>