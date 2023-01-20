<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<h1>NYEWASCO WATER COMPANY</h1>
<p>Bringing water to you</p>
    <form method="post" action="index.php">
  <div class="inputs">
    <div class="input-holder">
        <label>USER</label>
        Name: <input type="text" name="client-name" placeholder="Input user-name"><br>
    </div>
    <div class="input-holder">
        <label>UNITS</label>
        Units: <input type="number" name="units" placeholder="Input the units spent"><br>
    </div>
</div>
    <button class="calculate" type="submit" value="CALCULATE">CALCULATE</button>   
    </form>



    
    <?php

    class Bills {
       
        function untisCalculator(){
            $name= $_POST['client-name'];
            $units = $_POST['units'];
            switch($units) {
                case $units >= 0 && $units <= 20:
                    $amount = $units * 35;
                    echo "<p class='message'>".$name." has a total bill amount of  ksh".$amount."</p><br>";
                    break;
                case $units > 20 && $units <= 49:
                    $amount = $units * 40;
                    echo "<p class='message'>".$name." has a total bill amount of  ksh".$amount."</p><br>";
                    
                    break;
                case $units > 49 && $units <= 100:
                    $amount = $units * 45;
                    echo "<p class='message'>".$name." has a total bill amount of  ksh".$amount."</p><br>";
                    break;
                case $units > 100:
                    $amount = $units * 50;
                    echo "<p class='message'>".$name." has a total bill amount of  ksh".$amount."</p><br>";
                    break;
                default: echo"please enter the number of units spent";;
            }
        }
    }


    $total = new Bills();
    echo $total->untisCalculator();

    
    ?>
</body>
</html>