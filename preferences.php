<html>
    <head>
        <link rel="stylesheet" href="./css/sheet.css" type="text/css">
        <link rel="stylesheet" href="./css/bootstrap.min.css" type="text/css">
        <link rel="stylesheet" href="./css/hover.css" type="text/css">
        <style>
            @font-face {
            font-family: myFirstFont;
            src: url("./sprite/fonts/arista.ttf");
            }

            body{
                background:#f2f2f2;
                font-family: myFirstFont;
            }     
        </style>
    </head>

    <body>
        <!--BACKGROUND CIRCLES-->
        <div id="wtf" class="circle dark"></div>
        <div id="wtq" class="circle light"></div>
        <div id="wtw" class="circle light"></div>
        <div id="wte" class="circle dark"></div>
        <div id="wtr" class="circle light"></div>
        <div id="wtt" class="circle light"></div>
        <div id="wtt" class="circle light"></div>
        <div id="wty" class="circle light"></div>
        <div id="wtu" class="circle light"></div>
        <!--BACKGROUND CIRCLES-->

        <!--HEADING AND SUB-HEADING-->
            <h1 class="pref-text heading">NAMASTE, 
                
                <?php
                    $con = mysqli_connect("localhost","root","");
                    $db  = mysqli_select_db($con,"musicdb");
                    $sql = "SELECT `username` FROM `logged` WHERE 1";
                    $res = mysqli_query($con,$sql);
                    $row = mysqli_fetch_assoc($res);
                    echo $row['username'];
                ?>
                 !</h1>
            <h5 style="width:400px;" class="pref-text subheading">LET US KNOW THE MOST LOVED GENRE OF YOUR TASTE SO THAT WE CAN CUSTOMIZE YOUR FEED !</h5>
        <!--HEADING AND SUB-HEADING-->

        <!--BUTTONS FOR SELECTING-->
        <div class="pref-row one">
                <button class="circle pref-butt hvr-hang">ROCK</button><br>
                <button class="circle pref-butt hvr-hang">POP</button>
                <button class="circle pref-butt hvr-hang">RAP</button>
                <button class="circle pref-butt hvr-hang">HIP-HOP</button>
        </div>
        <br>
        <div class="pref-row two">
                <button class="circle pref-butt hvr-hang">ELECTRONIC</button><br>
                <button class="circle pref-butt hvr-hang">CLASSICAL</button>
                <button class="circle pref-butt hvr-hang">COUNTRY</button>
                <button class="circle pref-butt hvr-hang">JAZZ</button>
        </div>
        <!--BUTTONS FOR SELECTING-->
    </body>
</html>