<?php

//Variables  for the local coffee shop
$ownerFirtName = "Sempebwa";
$ownerSecondName = "Paul";
$no_cup1 = 120;
$price1 = 2.50;
$sales1 = $no_cup1 * $price1;
$day1 = "Monday";

$no_cup2 = 200;
$price2 = 200;
$sales2 = $no_cup2 * $price2;
$day2 = 'Tuseday';

//Variables for clothig store
$dresses = 50;
$Cprice = 25;
$Sprice = 50;
$profit = $Sprice - $Cprice;
$totProfit = $profit * $Cprice;

// Variables for Construction company
$bags_Cement = 300;
$bagPx = 10;
$bricks = 1000;
$brickPx = 0.50;
$totCement = $bagPx * $bags_Cement;
$totBricks = $brickPx * $bricks;
$totMatCost = $totBricks + $totCement;

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>CV</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='mystyle.css'>
    <script src='main.js'></script>
</head>
<body></body>
<!-- Coffe store -->
<h1>
    <!-- concatenation -->
    <?php echo $ownerFirtName ." ". $ownerSecondName. "'s Coffee shop"?> 
</h1>
<h3>Daily sales</h3>
<div style="overflow-x: auto;">
    <table style="width: 50%">
        <tr>
            <th>Date</th>
            <th>No. Cups</th>
            <th>Price per cup</th>
            <th>Total Sales</th>
        </tr>
        <tr>
            <td><?php echo $day1 ?></td>
            <td><?php echo $no_cup1 ?></td>
            <!-- This is concatenation -->
            <td><?php echo "\${$price1}" ?></td>
            <td><?php echo "$". $sales1 ?></td>
        </tr>
        <tr>
        <td><?php echo $day2 ?></td>
            <td><?php echo $no_cup2 ?></td>
            <!-- This is concatenation -->
            <td><?php echo "\${$price2}" ?></td>
            <td><?php echo "$". $sales2 ?></td>
        </tr>
    </table>
</div>
<!-- Clothing store -->
<div style="overflow-x: auto;">
    <h3>Clothing Store.</h3>
    <p>Total profit made is 
        <?php 
        echo "\$".$totProfit.".";
        echo "<br> This is after selling {$dresses} dresses at \${$Sprice}.";
        echo "<br> Each dress was bought at \${$Cprice}."
        ?>

    </p>
</div>
<!-- Construction company -->
<div style="overflow-x: auto;">
    <h3>Construction company.</h3>
    <p>Total cost of materials used on the recent project is 
        <?php 
        echo "\$".$totMatCost.".";
        echo "<br> The total number of bags of cement used is {$bags_Cement} with each at \${$bagPx}.";
        echo "<br> The total number of bricks is {$bricks} with each at \${$brickPx}."
        ?>
    </p>
</div>
<!-- Grocery store -->
<?php 
//variables for the grocery
$monSales = 200;
$wedSales = 150;
$friSales = 175;
$totWeight = $monSales + $wedSales + $friSales;

?>
<h2>Grocery Store.</h2>
<h3>Weekly total weight of apples sold.</h3>
<div style="overflow-x: auto;">
    <?php 
        echo "At the grocery, 
        <span>&#163;</span>
        {$totWeight} of apples have been sold.
        ";
    ?>
</div>
<!-- The Gym -->
<?php  
//variables for weight lifte in the gym
$w1 = 200; $w2 = 225; $w3 = 180; $w4 = 190; $w5 = 215; $w6 = 210;
$w7 = 195; $w8 = 185; $w9 = 230; $w10 = 240;
$totW = $w1 + $w2 +$w3 +$w4 + $w5 + $w6 + $w7 + $w8 + $w9 + $w10;
$avW = $totW /10;
?>
<h2>Sempo's Gym</h2>
<h3>Weght lifting competition.</h3>
<div style="overflow-x: auto;">
    <?php 
        echo "
            <p>
                The average weight lifted by ten participants is 
                {$totWeight}lbs.
            </p>
        ";
    ?>
</div>
</body>
</html>

