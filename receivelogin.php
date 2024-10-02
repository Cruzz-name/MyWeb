<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="mystyle.css">
<style>
    input.GoBack{
            background-color: salmon;
            color: white;
            border-radius: 16px ;
            padding: 8px;
            padding-left: 18px;
            padding-right: 18px;

            border: 3px rgb(255, 100, 82) solid;
    }
    input.GoBack:hover {
            background-color: rgb(245, 89, 71);
            transform: scale(1.1);
    }
    input.login:hover {
        background-color: rgb(69, 211, 67);
        transform: scale(1.1);
    }
    .textbackbotton{
        position: absolute;
        padding-left:22px;
        padding-top:710px;
    }
</style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<body>
    
    <h1 class="textWellcome"> Welcome </h1>

    <form class="textbackbotton" action="login.html" method="post">
            <input class="GoBack" type="submit" id="back" name="back" value="ย้อนกลับ" >

    </form>
    <center class="wellcombox">
    
    <br><br>
    <p class="textwelcomephp">
        <?php 
            $showuser = $_POST['user'];
            echo "Welcome to cs supermarket websit: $showuser";
        ?> 
    </p>

   <form class="textshopbotton" action="shopping.html">
    shopping click here --> <input class="login" type="submit" name="shop" value="shopping here!">
    </form>
    </center>

    
    
</body>
</html>



