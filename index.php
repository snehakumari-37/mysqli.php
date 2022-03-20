<?php
$hostname = 'sql6.freesqldatabase.com';
$username ='sql6480104';
$password = 'ZyMjJ1CvvH';
$dbName = 'sql6480104';

$conn = mysqli_connect('sql6.freesqldatabase.com','sql6480104','ZyMjJ1CvvH','sql6480104');
if(!$conn){
die('sorry');
}
else{
    echo mysqli_error($conn);
    // echo mysqli_query();
    echo "wooohoo";
    // $sql = "INSERT INTO `register` (`username`,`email`,`password`,`gender`) VALUES ('akar bakar','ab@lol.ml','zooon.passwording','m')";
    // $sql = "INSERT INTO `register` (`username`, `email`, `password`, `gender`) VALUES ('kek', ';dfslkajfdl', 'jlsdfjalf', 'f')";
    // mysqli_query($conn,$sql);
    $sql = "DELETE FROM `register` WHERE gender='m'";
    $result = mysqli_query($conn, $sql);
    // mysql_query($conn,$sql)
    
    if($result)
    {
        echo(" happy");
    }
    else
    {
        echo 'sad';
    }
}



?>
