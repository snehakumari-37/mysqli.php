<?php
/////////////////////////////////
# FUNCTIONS
$GLOBALS['hostname'] = 'sql6.freesqldatabase.com';
// $GLOBALS['hostname'] = '';
$GLOBALS['username'] = 'sql6480104';
$GLOBALS['password'] = 'ZyMjJ1CvvH';
$GLOBALS['dbName'] = 'sql6480104';

function conn(){
    if($GLOBALS['hostname']==''){echo "hostname required";return;}
    $GLOBALS['conn'] = mysqli_connect($GLOBALS['hostname'],$GLOBALS['username'],$GLOBALS['password'],$GLOBALS['dbName']);
    if($GLOBALS['conn']){echo'<br><h1>CONNECTED SUCCESSFULLY</h1>';}
    else{echo('<br><h1>FAILED TO CONNECT <br>ERROR =><br>' . mysqli_connect_error() .'</h1>');}
}
function close(){
    mysqli_close($GLOBALS['conn']);
}
conn();
close();
////////////////////////////////////////////
$hostname = 'sql6.freesqldatabase.com';
$username ='sql6480104';
$password = 'ZyMjJ1CvvH';
$dbName = 'sql6480104';

$conn = mysqli_connect('sql6.freesqldatabase.com','sql6480104','ZyMjJ1CvvH','sql6480104');
if(!$conn){
die('unable to connect'.mysqli_connect_error());
}
else{
    echo "wooohoo";
    $tableName = 'register';
    $want_change_in = "(`username`,`email`,`password`,`gender`)";
    $new_username = "xon";
    $new_email = 'z@xol.com';
    $new_pass = 'passing';
    $new_gender = 'f';
    // $sql = "INSERT INTO `register` (`username`,`email`,`password`,`gender`) VALUES ('akar bakar','ab@lol.ml','zooon.passwording','m')";
    $sql = "INSERT INTO `$tableName` $want_change_in VALUES ('$new_username', '$new_email', '$new_pass', '$new_gender')";
    $sql = "DELETE FROM `register` WHERE gender='m'";
    $result = mysqli_query($conn, $sql);
    // mysql_query($conn,$sql)
    
    if($result)
    {echo(" happy");}
    else{echo 'sad';}
}



?>
