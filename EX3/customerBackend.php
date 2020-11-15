<style>
    body{background:url('https://png.pngtree.com/58pic/32/69/41/84f58PICitRcMXwz4vDXf_PIC2018.jpg');}  {text-align: center;} table {margin: auto;}
    
    table.Table 
    {
        width:50%;
        border-collapse:collapse;
        font-family:"Time New roman", Arial, Helvetica, sans-serif;
    }

    table.Table td,table.Table th
    {
        padding:3px 7px 2px 7px;
        border:2px solid #98bf21;
        font-size: 20px;
    }

    table.Table th
    {
        color:black;
        background-color:#FFFFCC;
        text-align: center;
    }

    table.Table td
    {
        color:black;
        background-color:#66CCFF;
        text-align: center;
    }

    h2{
        text-align:center;
	    font:bold 50px helvetica,arial,sans-serif;
	    color:#fff;
	    text-shadow:black 5px 5px 5px;
    }

</style>

<?php 
    error_reporting(E_ALL);
    ini_set("display_errors", 1);
    $minCss=' <link href="https://people.eecs.ku.edu/~m282h813/Lab09/Exercise3/style.css" rel="stylesheet">';

	$userNAME= $_POST["userName"];
	$passWD = $_POST["password"];
	$ps5 = $_POST["PS5"];
	$ns = $_POST["NS"];
    $xbox = $_POST["XBOX"];
    $ship = $_POST["shipping"];

    $shipType = "Free 7 Day";
    $shipCost = 0;

    if($ship == "7day"){
        $shipType = "Free 7 Day";
        $shipCost = 0;
    }
    else if($ship == "overNight"){
        $shipType = "Over Night";
        $shipCost = 50;
    }
    else if($ship == "threeDay"){
        $shipType = "Three Day";
        $shipCost = 5;
    }

  

    echo "<title>Lab09_Exercise_3</title>";
    echo "<h2 style='text-align: center;'> Welcome to EECS Web Store!!<br> Here is Your Receipt!!</h2>";

    echo "<h3 style='text-align: center;'> Username: " .$userNAME. "</h3>";
    echo "<h3 style='text-align: center;'> Password: " .$passWD. "</h3><br>";

    echo "<table class='Table';>";
    echo "<th></th>";
    echo "<th>Quantity</th>";
    echo "<th>Cost Per Item</th>";
    echo "<th>Sub Total</th>";

    echo "<tr>";
    echo "<th> PlayStation 5 </th>";
    echo "<td>" .$ps5. "</td>";
    echo "<td>$399.99</td>";
    echo "<td>$" .$ps5*399.99. "</td>";
    echo"</tr>";

    echo "<tr>";
    echo "<th> Nintendo Switch</th>";
    echo "<td>" .$ns. "</td>";
    echo "<td>$362.99</td>";
    echo "<td>$" .$ns*399.99. "</td>";
    echo"</tr>";

    echo "<tr>";
    echo "<th> Xbox Serice X </th>";
    echo "<td>" .$xbox. "</td>";
    echo "<td>$399.99</td>";
    echo "<td>$" .$xbox*499.99. "</td>";
    echo"</tr>";

    echo "<tr>";
    echo "<th> Shipping Type</th>";
    echo "<td colspan='2'>" .$shipType. "</td>";
    echo "<td>$" .$shipCost. "</td>";
    echo"</tr>";

    echo "<tr>";
    echo "<th  colspan='3'>Total Cost</th>";
    echo "<th>$".($ps5*399.99 + $ns*399.99 + $xbox*499.99 + $shipCost)."</th>";
    echo"</tr>";
    
    echo "</table>";
?>