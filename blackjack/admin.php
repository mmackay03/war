<?php
require_once 'blackLib.php';
require_once 'header.php';
$con=mysqli_connect("127.0.0.1","login","login","blackjack") or die(mysql_error());
?>
<form action= admin.php method="post">
    <table class="form">
        <tr><td>UID: </td><td><input type=text name=uid length=6></td></tr>
        <tr><td>Money: </td><td><input type=text name=money length=10></td></tr>
        <tr><td><input type="submit" name="submit"></td></tr>
    </table>
</form>
</br>
</br>

        
<?php
if (isset($_REQUEST['submit']))
{
    $uid = $_REQUEST['uid'];
    $money = $_REQUEST['money'];
    $update = "UPDATE `uinfo` SET `money` = $money WHERE `uid` =$uid";
    mysqli_query($con, $update);
}
$getUid = "SELECT u.user_name, i.uid, i.money FROM user AS u INNER JOIN uinfo AS i ON u.uid=i.uid";
$count = 0;
$getVal = mysqli_query($con, $getUid);
while($info = mysqli_fetch_array( $getVal )){
    //echo $info;
    echo "<table class='admin'> ";
    if ($count == 0)
    {
        echo "<tr><th class='admin'>User Name</th><th class='admin'>UID</th><th class='admin'>Money</th></tr>";
    }
    echo "<tr><td class='dis'>$info[user_name]</td><td class='dis'>$info[uid]</td><td class='dis'>$info[money]</td></tr>";
    echo "</table>";
    $count++;
}
require 'footer.php';
