<?php
/*setting encoding for hebrew*/
header('Content-Type: text/html; charset=utf-8');
/*Data*/
$host = 'localhost';
$username = 'elad189g_energy_user';
$password = '111222';
$db = 'elad189g_energy_comments';

// Create connection
$con = mysqli_connect($host, $username, $password,$db);
// enabling hebrew
//mysql_query("SET NAMES 'hebrew_bin'");
/*mysql_query("SET character_set_client=utf8");
mysql_query("SET character_set_connection=utf8");
mysql_query("SET character_set_database=utf8");
mysql_query("SET character_set_results=utf8");
mysql_query("SET character_set_server=utf8");*/

// Inserting data with variables
$Comment = $_POST["comment"];

$sql2="insert into Comments1L (Text) values ('$Comment')";
$query = mysqli_query($con,$sql2); 
if ($query){ 
 echo '<br>'.'data inserted successfully';
}

//Variables
//src:http://stackoverflow.com/questions/5157905/mysql-query-result-in-php-variable


//getting back to previous page
$red="http://www.energy.project2017.co/index.php";
redirect($red);

function redirect($url){
    if (headers_sent()){
      die('<script type="text/javascript">window.location.href="' . $url . '";</script>');
    }else{
      header('Location: ' . $url);
      die();
    }    
}

?>