<?php
// Create connection
$con=mysqli_connect("127.0.0.1","login","login","blackjack") or die(mysql_error());

session_start();
$_SESSION["user"] = "";
$_SESSION["uid"] = "";



// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  else
      echo "You Connected";
   
  //Current User Login
// if (isset($_REQUEST['csubmit']))
// {
//     //Checks if there is a login cookie
//    if(isset($_SESSION['ID_blackjack']))
// //if there is, it logs you in and directes you to the members page
// { 
// 	$cuser = $_SESSION['ID_blackjack']; 
//
// 	$cpass = $_SESSION['Key_blackjack'];
// 	$check = mysqli_query($con, "SELECT * FROM user WHERE user_name = '$cuser'")or die(mysql_error());
// 	while($info = mysqli_fetch_array( $check )) 	
// 	{
//            if ($cpass != $info['pass']) 
//            {
//            }
//            else
//            {
//                header("Location: play.php");
//            }
// 	}
// }


 //if the login form is submitted 

if (isset($_REQUEST['csubmit'])) 
{ // if form has been submitted
   // makes sure they filled it in
    if(!$_REQUEST['cuser'] | !$_REQUEST['cpass']) 
    {
        die('You did not fill in a required field.');
    }
    $check = mysqli_query($con, "SELECT * FROM user WHERE user_name = '".$_REQUEST['cuser']."'")or die(mysql_error());

 //Gives error if user dosen't exist

$check2 = mysqli_num_rows($check);
if ($check2 == 0) 
{
    die('That user does not exist in our database. <a href=index.php>Click Here to Register</a>');
}
while($info = mysqli_fetch_array( $check )) 	
{
    $_POST['cpass'] = stripslashes($_POST['cpass']);
    $info['pass'] = stripslashes($info['pass']);
    $_REQUEST['cpass'] = md5($_REQUEST['cpass']);
 //gives error if the password is wrong
    if ($_REQUEST['cpass'] != $info['pass']) 
    {
        die('Incorrect password, please try again.');
    }
 else
 {  
 // if login is ok then we add a cookie 
$_POST['cuser'] = stripslashes($_POST['cuser']); 
$hour = time() + 3600; 
//setcookie("ID_blackjack", $_POST['cuser'], $hour); 
//setcookie("Key_blackjack", $_POST['cpass'], $hour);
$userName =  $_POST['cuser'];

$_SESSION["user"] = $userName;
$result = mysqli_query($con, "SELECT uid FROM user WHERE user_name = '$userName'");
$resultinfo = mysqli_fetch_assoc($result);
$_SESSION["uid"] = $resultinfo["uid"];

//then redirect them to the members area 
header("Location: play.php"); 
 } 
} 
} 

    
    
    
    //New User Registration
    
    elseif(isset($_REQUEST['nsubmit']))
    {
        $nuser = $_REQUEST['nuser'];
        $npass1 = $_REQUEST['npass1'];
        $npass2 = $_REQUEST['npass2'];
        if($npass1 != $npass2)
        {
            die("Your two passwords do not match plesase re-enter.");
        }
        $usercheck = $_REQUEST['nuser'];
        $check = mysqli_query($con,"SELECT user_name FROM user WHERE user_name = '$usercheck'") 
        or die(mysql_error().":   Die");
        $check2 = mysqli_num_rows($check);
        //if the name exists it gives an error
        if ($check2 != 0) 
        {
            die('Sorry, the username '.$_REQUEST['nuser'].' is already in use.');
        }
        $_REQUEST['npass1'] = md5($_REQUEST['npass1']);
        if (!get_magic_quotes_gpc()) 
        {
            $_POST['npass1'] = addslashes($_POST['npass1']);
            $_POST['nuser'] = addslashes($_POST['nuser']);
        }
        
         // now we insert it into the database
        $_SESSION['user'] = $nuser;

 	$insert = "INSERT INTO user (user_name, pass)
        VALUES ('".$_REQUEST['nuser']."', '".$_REQUEST['npass1']."')";
        $add_member = mysqli_query($con, $insert);
        header("Location: addMoney.php");
        
    }
    
    
