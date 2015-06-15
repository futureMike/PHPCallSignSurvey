<?php
include 'connect.php';

$kfuk = "SELECT COUNT(callsign) FROM callsigns WHERE callsign='KFUK'";
$kkkk = "SELECT COUNT(callsign) FROM callsigns WHERE callsign='KKKK'";
$krap = "SELECT COUNT(callsign) FROM callsigns WHERE callsign='KRAP'";
$kunt = "SELECT COUNT(callsign) FROM callsigns WHERE callsign='KUNT'";

$query = "SELECT * FROM callsigns ORDER BY id DESC LIMIT 1";

$fuk = mysqli_query($con, $kfuk);
$kkk = mysqli_query($con, $kkkk);
$rap = mysqli_query($con, $krap);
$unt = mysqli_query($con, $kunt);
$result = mysqli_query($con, $query);
$cfuk = mysqli_fetch_array($fuk);
$ckkk = mysqli_fetch_array($kkk);
$crap = mysqli_fetch_array($rap);
$cunt = mysqli_fetch_array($unt);
//print_r($result);






?>

<!DOCTYPE html>

<html>
<head>
    <title>Offensive Call Sign Poll!</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
    <script src="jquery.js"></script>
</head>

<body>
    <div class="header">
    <h1> Greater Las Cruces, NM Offensive Call Sign Survey</h1>
    </div><br>
    <div id="cockape">
    Enter your name:
    <form action="insert.php" method="post">
        <input type="text" name="name" placeholder="enter your name voter!"><br><br>
        
        <input type='radio' name='callsign' value='KFUK'>KFUK - 24/7/365 punk bands<br>
        <input type='radio' name='callsign' value='KKKK'>KKKK - White Separatist Talk(hate)Radio<br>
        <input type='radio' name='callsign' value='KRAP'>KRAP - embarrassing 90's top 40<br>
        <input type='radio' name='callsign' value='KUNT'>KUNT - sister station to NPR<br>
        <input type='submit' id="cockbutton" name='submit' value='VOTE'>
    </form><br>
    </div>
    <div id="fagape">
    <h2>Current Standings!</h2><br>
    <?php
    echo "KFUK: ".$cfuk[0]."<br>";
    echo "KKKK: ".$ckkk[0]."<br>";
    echo "KRAP: ".$crap[0]."<br>";
    echo "KUNT: ".$cunt[0]."<br>";
    while($row = mysqli_fetch_assoc($result)){
        $voter = $row['name'];
        $sign = $row['callsign'];
    
    echo "<h4> our latest voter: ".$voter." voted ".$sign."<br><br>";
    }
    ?>
    </div>

<br>
    <div class="row footer"><h3>Las Cruces... things just suck more here...</h3>
    &#9400 2015 <ABBR class="initialism" title="Geek Owned And Operated">GOAO Inc.</ABBR>
    </div>
    <script>
        $(document).ready(function(){
            $(".footer").on("mouseover", function(){
                
                alert("man... Las Cruces,New Mexico really SUCKS!!!");
            });
            $("#cockbutton").on("click", function(){
                
                alert("Hey voter, thanks for your vote!"+
                      "Be sure to read the results below!");
            })
            
            
        });
    </script>



</body>
</html>


