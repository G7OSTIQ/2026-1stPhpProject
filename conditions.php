<?php include "templates/header.php"; ?>

<div> class="border rounded">
    <h1>Conditions</h1>

    <?php
    $awake = false;
    if ($awake === true) {
        echo "<p> Yay i-m awake</p>";
    }

    $num1 = 30;
    $num2 = 20:

    if ($num1 > $num2){
        echo "<p> Num1 is greater</p>";
    }
    else{
        echo "<p>Num2 is greater</p>"
    }

    $time = date("H"); //H checks for hour
    if($time < "9"){
        echo "<p>Good Morning</p>";
    }
    elseif($time == "12"){
        echo "<p>It's High Noon!</p>";
    }
    elseif($time < "20"){
        echo "<p>Have a nice day</p>";
    }
    else{
         echo "<p>Good Night</p>";
    }

    //Switch
    $favcol = "green";
    switch($favcol){
        case "red":
             echo "<p>You are passionate</p>";
             break;
        case "blue":
            echo "<p>You are cool</p>";
            break;
           case "green":
            echo "<p>You are relaxed</p>";
            break; 
        default:
            echo "<p>You colour is weird</p>";
            break;
    }


    //logical Operator (&&, ||, ?)
    
            if ($awake === true && $num1 < $num2) {
                 echo "<p>I'm awake and num1 is smaller than num2</p>";
            }
            //Variables need to satisy at least 1 condition

            if($favcol == "blue" || $favcol == "green"){
                echo "<p>you like cooler colouyrs</p>";
            }

            if($awake !== true){
                echo "<p>Wakey wakey! ! It's not 8am anymore.</p>";
            }

            if($awake === true){   }
            if($awake){}
            if(!$awake){}


</div>
<?php include "templates/footer.php"; ?>