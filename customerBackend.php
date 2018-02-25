<html>
    <head>
        <title>Kyle Berkley</title>
        <link rel="stylesheet" href="style.css">
        <script src="formChecker.js"></script>
    </head>
    <body>
        <div id="container">
            <h1>Your purchase has been processed!</h1><br>
            <h2>Below are the credentials you gave us:</h2>
            
            <?php
                $username = $_POST["Username"];
                $password = $_POST["Password"];

                $first  = $_POST["25"];
                $second = $_POST["800"];
                $third  = $_POST["2200"];
                $fourth = $_POST["15000"];
                $fifth  = $_POST["85000"];
                $sixth  = $_POST["1000000"];

                $firstPrice  = $first * 25;
                $secondPrice = $second * 800;
                $thirdPrice  = $third * 2200;
                $fourthPrice = $fourth * 15000;
                $fifthPrice  = $fifth * 85000;
                $sixthPrice  = $sixth * 1000000;

                $shipping = $_POST["delivery"];

                $total = '&#36;'.($firstPrice + $secondPrice + $thirdPrice + $fourthPrice + $fifthPrice + $sixthPrice + $shipping);

                $shippingType = "";
                if($shipping == 0) $shippingType = "Free 7-Day Shipping";
                else if($shipping == 5) $shippingType = "Three-Day Shipping";
                else if($shipping == 50) $shippingType = "Overnight Shipping";
                else $shippingType = "Dog we got a problem";

                $firstPrice  = '&#36;'.$firstPrice;
                $secondPrice = '&#36;'.$secondPrice;
                $thirdPrice  = '&#36;'.$thirdPrice;
                $fourthPrice = '&#36;'.$fourthPrice;
                $fifthPrice  = '&#36;'.$fifthPrice;
                $sixthPrice  = '&#36;'.$sixthPrice;
                $shipping    = '&#36;'.$shipping;
                

                echo "<h4>Username: {$username}</h4><h4>Password: {$password}</h4>";
                echo "<br><br><br>";

                echo "<h2>Here is your order:</h2>";
                //Prepare for some ugly ass code...
                echo "<table>";
                echo    "<tr><td class=\"g\"></td><td class=\"g\"><b>Quantity</b></td><td class=\"g\"><b>Cost Per Item</b></td><td class=\"g\"><b>Sub Total</b></td></tr>";
                echo    "<tr><td class=\"g\"><b>Picture 1</b></td><td class=\"b\">{$first}</td><td class=\"b\">$25.00</td><td class=\"b\">{$firstPrice}.00</td></tr>";
                echo    "<tr><td class=\"g\"><b>Picture 2</b></td><td class=\"b\">{$second}</td><td class=\"b\">$800.00</td><td class=\"b\">{$secondPrice}.00</td></tr>";
                echo    "<tr><td class=\"g\"><b>Picture 3</b></td><td class=\"b\">{$third}</td><td class=\"b\">$2,200.00</td><td class=\"b\">{$thirdPrice}.00</td></tr>";
                echo    "<tr><td class=\"g\"><b>Picture 4</b></td><td class=\"b\">{$fourth}</td><td class=\"b\">$15,000.00</td><td class=\"b\">{$fourthPrice}.00</td></tr>";
                echo    "<tr><td class=\"g\"><b>Picture 5</b></td><td class=\"b\">{$fifth}</td><td class=\"b\">$85,000.00</td><td class=\"b\">{$fifthPrice}.00</td></tr>";
                echo    "<tr><td class=\"g\"><b>Picture 6</b></td><td class=\"b\">{$sixth}</td><td class=\"b\">$1,000,000.00</td><td class=\"b\">{$sixthPrice}.00</td></tr>";
                echo    "<tr><td class=\"g\"><b>Shipping</b></td><td colspan=\"2\"  class=\"b\">{$shippingType}</td><td class=\"b\">{$shipping}.00</td></tr>";
                echo    "<tr><td colspan=\"3\" class=\"g\"><b>Total Cost</b></td><td class=\"g\"><b>{$total}.00</b></td></tr>";
                echo "</table>";

            ?>
        </div>
    </body>
</html>
