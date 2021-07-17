<?php
// Start the session
session_start();
?>

<!DOCTYPE html>

<html lang="en-US">

<head>
	<title>Comments</title>
	
	<!-- Encoding -->
	<meta charset="utf-8">
	<!-- Encoding End -->

	<!-- Style -->
	<!-- CSS Comments Syntax -->
	<!-- src:http://www.xanthir.com/b4U10 -->
	<style>
	#table_labels {border: 2px black solid;
		border-collapse:collapse;
		background-color: orange;
		text-align: center;
		//width:100%;
		//Min-width:80%;
		//max-width:90%;
		margin: auto;
		}	

	#table_labels>td,th {border: 2px solid blue;
		//min-width:10%;}

	#results_table {border: 2px black solid;
		border-collapse:collapse;
		//padding: 0px 16px 0px 16px;
		background-color: orange;
		text-align: center;
		width:100%;
		min-width:80%;
		max-width:100%;
		margin: auto;
		}	
			
	td,th {border: 2px solid blue;
		//min-width: 90px;
		//max-width: 90px;
		//height:50px;
		padding: 5px;
		//font-size:150%;
		overflow:hidden;
		//White Space;
		//src:https://www.w3schools.com/cssref/pr_text_white-space.asp;
		white-space: nowrap;}
		
	tr:hover {
		background-color:yellow;		
	}
	
	a {
		/* These are technically the same, but use both */
		overflow-wrap: break-word;
		word-wrap: break-word;
		
		-ms-word-break: break-all;
		/* This is the dangerous one in WebKit, as it breaks things wherever */
		word-break: break-all;
		/* Instead use this non-standard one: */
		word-break: break-word;
		
		/* Adds a hyphen where the word breaks, if supported (No Blink) */
		-ms-hyphens: auto;
		-moz-hyphens: auto;
		-webkit-hyphens: auto;
		hyphens: auto;
		} 	 

	a	{
		text-decoration:none;}

	#by_name,#by_category,#by_company,
	#by_series,#by_demand,#by_size,
	#by_price,#by_color,#by_id {
		height:5px;	
		}
	</style>
	<!-- Style End -->
	
</head>

<body>

<?php
// Declaring Variables
	//$Comp = $_POST['comp'];
	//echo '<p>'.$Comp.'</p>';

// Connecting
	
	// Setting encoding for Hebrew
	header('Content-Type: text/html; charset=utf-8');
	
	// Data
	$host = 'localhost';
	$username = 'elad189g_energy_user';
	$password = 'VeryStr0ngPassw0rd';
	$db = 'elad189g_energy_comments';
	
	// Create Connection
	$con = mysqli_connect($host, $username, $password,$db);
	
	// Selecting Database
	mysql_select_db("elad189g_energy_comments"); 
	
	// Enabling Hebrew
	mysql_query("SET character_set_client=utf8");
	mysql_query("SET character_set_connection=utf8");
	mysql_query("SET character_set_database=utf8");
	mysql_query("SET character_set_results=utf8");
	mysql_query("SET character_set_server=utf8");
	
	// Setting Time	
	$sql_Time = "SET time_zone = '+00:00';";
    $query = mysqli_query($con,$sql_Time);
	
	// Check Connection
	if ($con){
		//For Debugging:
		echo '<div style="width:100%;text-align:center;font-size:150%;">connected successfully to database<br></div>';
		} 
	
	if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
	}

// Connecting End

//Declaring  
//$Sql_Comp = "SELECT * FROM p WHERE Company LIKE 'ביוטופ'";
$Sql_Comp = "SELECT * FROM p ORDER BY ID desc";
//For Debugging:
echo '<div style="width:100%;text-align:center;font-size:150%;">'.$Sql_Comp.'</div>';
$query_Comp = mysqli_query($con,$Sql_Comp); 

//Creating table
echo '<table id="table_1">';
	echo '<tr>';
	echo '<th>id</th>';
	echo '<th>Text</th>';
	echo '<th>Voice</th></tr>';

// Creating Table End
	
//Extracting Data
//Declaring Variable For Row Number ID
	
while ($row = mysqli_fetch_array($query_Comp, MYSQLI_ASSOC)){
	echo '<tr>';
	echo '<td>'.$row['ID'].'</td>';
	echo '<td>'.$row['Text'].'</td>';	
    echo '<td>';
		$b=$row['Voice'];
		if(strlen($b) > 0){
			echo "<a href=$b><img src=".$row['Piclink']." width='50%'></a>";} 
		else {
			echo $row['Piclink'];}
	echo '</td></tr>';
	
	
	//echo '<script>var r = document.getElementById(result_button_'.$rownumber.'); console.log("Hi it\'s rownumber:",r.outerHtml);</script>';
	//echo '<script>console.log("Hi");</script>';
	$rownumber = $rownumber + 1;
	}

echo '</table>';

//Js in Php Code
//src:http://stackoverflow.com/questions/3556381/how-to-add-script-inside-a-php-code

// Closing Connection
mysqli_close($con);
?>

</body>
</html> 