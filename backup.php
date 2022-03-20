<?php
###################################################
##   PLEASE USE                                  ##
##   <?php requre 'This_File.php'; ? >           ##
##   INSIDE YOUR PHP FILE                        ##
###################################################


#   DON'T CHANGE THESE VALUES !!
$GLOBALS['hostname'] = '';
$GLOBALS['username'] = '';
$GLOBALS['password'] = '';
$GLOBALS['dbName'] ='';
$GLOBALS['conn'] = '';
#

#FUNCTION FOR MYSQLI_CONNECT()
function connect(){
#   checking if any required field is empty for mysqli_connect()
    if(!empty($GLOBALS['hostname']) && !empty($GLOBALS['username']) && !empty($GLOBALS['password']) && !empty($GLOBALS['dbName']))
{  
        #   connecting to the DATABASE
        $GLOBALS['conn'] = mysqli_connect($GLOBALS['hostname'],$GLOBALS['username'],$GLOBALS['password'],$GLOBALS['dbName']);
        
        #   CHECKING the CONNECTION
        if($GLOBALS['conn']){
            echo'<h1>CONNECTED SUCCESSFULLY</h1>';
        }
        else{
            echo('<h1>FAILED TO CONNECT <br>ERROR =>' . mysqli_connect_error() .'</h1>');
        }
}

#   Informing The user if any required field is missing for mysqli_connect()
    else 
{
        if (empty($GLOBALS['hostname'])) {
            echo "<h1><b>Database hostname required</h1>";  
        }
        if(empty($GLOBALS['username'])){
            echo "<h1><b>Database username required</h1>";
        }
        if(empty($GLOBALS['password'])){
            echo "<h1><b>Database password required</h1><br>";
        }
        if(empty($GLOBALS['dbName'])){
            echo "<h1><b>Database Name required</h1>";
        }
        
}

#   function ends here
}
#

#   FUNCTION TO CLOSE THE CONNECTION
function close(){
    #   Check if there is an EXISTING CONNECTION
    if(empty($GLOBALS['conn'])){
        echo "<h1>NO EXISTING CONNECTION</h1>";
        return;
    }
        #   closing the connection
        mysqli_close($GLOBALS['conn']);
        echo '<h1>CONNECTION CLOSED</h1>';
    
# function ends here
}
#

#   FUNCTION TO INSERT A ROW
function insert($dbTableName, $dbWhatToChange, $newValues){
    if(empty($GLOBALS['conn'])){
        echo "<h1>PLEASE START A CONNECTION FIRST</h1>";
        return;
    }
    $q='(';
    $length = count($dbWhatToChange);
    for($i = 0; $i<$length; $i++){

        $q = $q . "`" . $dbWhatToChange[$i] . '`,';
        echo $q;
    }
    return ####################
    // echo $length;
    $sql = "INSERT INTO `$dbTableName` (`username`,`email`,`password`,`gender`) VALUES ('akar bakar','ab@lol.ml','zooon.passwording','m')";
    $result = mysqli_query($GLOBALS['conn'],$sql);
    if($result){
        echo "<h1>INSERTED SUCCESSFULLY</h1>";
    }
    else{
        echo "<h1>INSERTING FAILED</h1>";
    }
}
#



##################
##      END     ##
##################





#   ANOTHER SCRIPT FILE


$GLOBALS['hostname'] = 'sql6.freesqldatabase.com';
$GLOBALS['username'] = 'sql6480104';
$GLOBALS['password'] = 'ZyMjJ1CvvH';
$GLOBALS['dbName'] = 'sql6480104';

connect();
insert('register',array("username","password"),'b');
close();


// echo $conn;
// if($conn){
// die('sorry');
// }
// else{
//     echo mysqli_error($conn);
//     // echo mysqli_query();
//     echo "wooohoo";
//     $table = 'register';
    
//     $tableName = 'register';
//     $want_change = "(`username`,`email`,`password`,`gender`)";
//     $new_username = "xon";
//     $new_email = 'z@xol.com';
//     $new_pass = 'passing';
//     $new_gender = 'f';
//     // $sql = "INSERT INTO `register` (`username`,`email`,`password`,`gender`) VALUES ('akar bakar','ab@lol.ml','zooon.passwording','m')";
//     $sql = "INSERT INTO `$tableName` (`username`, `email`, `password`, `gender`) VALUES ('$new_username', '$new_email', '$new_pass', '$new_gender')";
// //     $sql = "DELETE FROM `register` WHERE gender='m'";
//     $result = mysqli_query($conn, $sql);
//     // mysql_query($conn,$sql)
    
//     if($result)
//     {echo(" happy");}
//     else{echo 'sad';}
// }

?>
