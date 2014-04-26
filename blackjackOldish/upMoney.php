<script type="text/javascript" src="game.js">
</script>

<?php
require_once("debug.php");
require_once("blackLib.php");
setSessions($debug);
$uid = $_SESSION["uid"];
//include('../includes/dbopen.php');
$con=mysqli_connect("127.0.0.1","login","login","blackjack") or die(mysql_error());

//if(isset($_POST)){
//    $bet = $_POST['bet'];
//    $win = $_POST['won'];
//    if($win){
//        $payout = $bet * 2;
//    }
//    else if($draw){
//        $payout = $bet;
//        //bet doesnt need to change
//    }
//    else{
//        $payout = 0;
//    }
//    
//}
//$betAmt = $_POST['Bet_Amount'];


//if(isset($_POST)){
//    $bet = $_POST['bet'];
//    $win = $_POST['won'];
//    if($win){
//        $payout = $bet * 2;
//    }
//    else if($draw){
//        $payout = $bet;
//        //bet doesnt need to change
//    }
//    else{
//        $payout = 0;
//    }
//    
//}
$chips = $_POST['chips'];



$sql = "select money from uinfo where $uid = uid";
$result = mysql_query($sql);
while($row=mysql_fetch_array($result))
{
echo "<p>".$row['money']."</p>";
}
?>

