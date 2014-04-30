<?PHP

require_once("debug.php");
require_once("blackLib.php");
require_once ('header.php');
setSessions($debug);
?>
<title>play</title>
<div id="banner">&nbsp;</div><br />

<div class="post">
    <h1 class="title">Leader Board</h1>
    <br />
    
   
</div>
<?PHP
$con = mysqli_connect("127.0.0.1", "login", "login", "blackjack") or die(mysql_error());

$leadStr ="SELECT u.user_name, i.money FROM `uinfo` AS i, `user` AS u WHERE i.uid = u.uid ORDER BY i.money DESC LIMIT 5";
$leadQry = mysqli_query($con, $leadStr);
$count = 0;
while ($info = mysqli_fetch_array($leadQry)) {
        //echo $info;
        echo "<table class='admin'> ";
        if ($count == 0) {
            echo "<tr><th class='admin'>User Name</th><th class='admin'>Chips</th></tr>";
        }
        echo "<tr><td class='dis'>$info[user_name]</td><td class='dis'>$$info[money]</td></tr>";
        echo "</table>";
        $count++;
    }

require_once ('footer.php');