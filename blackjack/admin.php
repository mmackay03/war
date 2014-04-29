<?php
require_once 'blackLib.php';
require_once 'header.php';
$con = mysqli_connect("127.0.0.1", "login", "login", "blackjack") or die(mysql_error());
?>
<title>admin</title>
<div id="banner">&nbsp;</div><br />

<div class="post">
    <h1 class="title">Admin</h1>
    <br />
    
   
</div>
<form action= admin.php method="post" name="adminF" onsubmit="return admin()">
    <table class="form">
        <tr><td>UID: </td><td><input type=text name=uid length=6></td></tr>
        <tr><td>Money: </td><td><input type=text name=money length=10></td></tr>
        <tr><td>Admin: </td><td><input type=text name=adm length=1></td></tr>
        <tr><td><button type="submit" name="submit">submit</td></tr>
    </table>
</form>
</br>
</br>


<?php
$uid = $_SESSION["uid"];
$adminStr = "SELECT admin FROM `admin` WHERE  uid = $uid";
$adminQry = mysqli_query($con, $adminStr);
 while($info = mysqli_fetch_array( $adminQry ))
{
   $adminVal = $info['admin'];
}
if ($adminVal == 1) {
    if (isset($_REQUEST['submit'])) {
        $uid = $_REQUEST['uid'];
        $money = $_REQUEST['money'];
        $adm = $_REQUEST['adm'];
        $update = "UPDATE `uinfo` SET `money` = $money WHERE `uid` =$uid";
        mysqli_query($con, $update);
        $upAdm = "UPDATE admin SET admin = $adm WHERE uid = $uid";
        mysqli_query($con, $upAdm);
    }
    $getUid = "SELECT u.user_name, i.uid, i.money, a.admin FROM user AS u INNER JOIN uinfo AS i ON u.uid=i.uid INNER JOIN admin as a ON u.uid=a.uid";
    $count = 0;
    $getVal = mysqli_query($con, $getUid);
    while ($info = mysqli_fetch_array($getVal)) {
        //echo $info;
        echo "<table class='admin'> ";
        if ($count == 0) {
            echo "<tr><th class='admin'>User Name</th><th class='admin'>UID</th><th class='admin'>Money</th><th class='admin'>Admin</th></tr>";
        }
        echo "<tr><td class='dis'>$info[user_name]</td><td class='dis'>$info[uid]</td><td class='dis'>$info[money]</td><td class='dis'>$info[admin]</td></tr>";
        echo "</table>";
        $count++;
    }
} else if ($adminVal == 0 ){
    print "This is not an admin account. You are not authorized to make changes.";
    if (isset($_REQUEST['submit'])) {
        echo '<script type="text/javascript">';
        echo 'alert("This is not an admin account therefore changes cannot be made!")';
        echo '</script>';
    }
}
require 'footer.php';
