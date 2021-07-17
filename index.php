<?php
// ERRORS DISPLAY
	error_reporting(E_ALL);
	ini_set('display_errors', 'On');

// Connecting
	
	// Setting encoding for Hebrew
	header('Content-Type: text/html; charset=utf-8');
	
	// Data
	$host = 'localhost';
	$username = 'elad189g_energy_user';
	$password = '111222';
	$db = 'elad189g_energy_comments';
	
	// Create Connection
	$con = mysqli_connect($host, $username, $password,$db);
	
	// Selecting Database
	mysqli_select_db($con,"elad189g_energy_comments"); 
	
	// Enabling Hebrew
	mysqli_query($con,"SET character_set_client=utf8");
	mysqli_query($con,"SET character_set_connection=utf8");
	mysqli_query($con,"SET character_set_database=utf8");
	mysqli_query($con,"SET character_set_results=utf8");
	mysqli_query($con,"SET character_set_server=utf8");
	
	// Setting Time	
	$sql_Time = "SET time_zone = '+00:00';";
    $query = mysqli_query($con,$sql_Time);
	
	// Check Connection
	if ($con){
		//For Debugging:
		//echo '<div style="width:100%;text-align:center;font-size:150%;">connected successfully to database<br></div>';
		//echo '<div style="width:100%;text-align:center;"><u>comments</u></div>';
		} 
	
	if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
	}

// Connecting End

//Declaring  
//$Sql_Comp = "SELECT * FROM p WHERE Company LIKE 'ביוטופ'";
$Sql_Comp = "SELECT * FROM Comments1L ORDER BY ID desc";
//For Debugging:
//echo '<div style="width:100%;text-align:center;font-size:150%;">'.$Sql_Comp.'</div>';
$query_Comp = mysqli_query($con,$Sql_Comp); 

//Creating table
	//echo '<table id="table_comments">';
	//echo '<tr>';
	//echo '<th id="th_comments">id</th>';
	//echo '<th id="th_comments">Text</th>';
	//echo '<th id="th_comments">Voice</th></tr>';
	//echo '<tr><td colspan="2" id="td_comments"><hr id="hr_baloons_bottom" style="margin-top:3%;width:100%;"></td></tr>';
	
// Creating Table End
	
//Extracting Data
//Declaring Variable For Row Number ID
	
while ($row = mysqli_fetch_array($query_Comp, MYSQLI_ASSOC)){
	//echo '<tr>';
	//echo '<td id="td_comments">'.$row['ID'].'</td>';
	//echo '<td id="td_comments">'.$row['Text'].'</td>';	
    //echo '<td id="td_comments">'.$row['Voice'].'</td></tr>';
    //echo '<tr><td colspan="2" id="td_comments"><hr id="hr_baloons_bottom" style="margin-top:3%;width:100%;"></td></tr>';
	
	
	
	//echo '<script>var r = document.getElementById(result_button_'.$rownumber.'); console.log("Hi it\'s rownumber:",r.outerHtml);</script>';
	//echo '<script>console.log("Hi");</script>';
	
	}

//echo '</table>';

//Js in Php Code
//src:http://stackoverflow.com/questions/3556381/how-to-add-script-inside-a-php-code

// Closing Connection
mysqli_close($con);
?>

<!DOCTYPE html>
<html>
<head>
	<!-- FAVICON --><!-- OUTPUT 01 -->
	<link rel="icon" type="image/png" href="css/favicon.ico">

	<!-- APPLE TOUCH ICON --><!-- OUTPUT 02 -->
	<link rel="apple-touch-icon" sizes="16x16" href="css/favicon-16x16.png" />
	<link rel="apple-touch-icon" sizes="32x32" href="css/favicon-32x32.png" />
	<link rel="apple-touch-icon" sizes="180x180" href="css/apple-touch-icon.png" />
	<link rel="apple-touch-icon" sizes="512x512" href="css/android-chrome-512x512.png" />
	<link rel="apple-touch-icon" sizes="192x192" href="css/android-chrome-192x192.png" />

	<!-- TITLE -->
	<title>ENERGY</title>
	
	<!-- DESCRIPTION -->
	<meta name="description" content='Join The Journey.'>
	
	<!-- ENCODING -->
	<meta charset="utf-8">
	
	<!-- VIEWPORT -->
	<!-- <meta name="viewport" content="width=device-width, initial-scale=1">  -->
	
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Sahitya" rel="stylesheet">
	
	<!-- GOOGLE ICONS -->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	
	<!-- EMOJI CSS -->
	<link href="https://afeld.github.io/emoji-css/emoji.css" rel="stylesheet">
	
	<!-- JQUERY -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
	
	<!-- COUNT COMMENTS EXAMPLE FOR NON CLICKABLE ELEMENTS -->
	<!-- <span class="disqus-comment-count" data-disqus-identifier="indexPage">02.2017</span> -->
	
<!-- Style -->
<style>
* {font-family: 'Sahitya', serif;}

#div_ontop {
    width: 75%;
    height: 15%;
    margin: 2% 12.5% 0% 12.5%;
    padding: 0px;
    border: solid black 2px;
    border-radius: 10px;
    background-color: lightgreen;
    clear: both;
    text-align: center;}
	
#div_ontop>h1 {
	margin: 2% auto 0% auto;}	
	
#div_pic_left{}
#div_pic_right{}
#div_text_top{}

.div_baloons_left {
    width: 50%;
    height: 8.33%;
    margin: 2% 0% 2% 12.5%;
    padding: 0px;
    border: solid black 2px;
    border-radius: 10px;
    background-color: lightblue;
    float: left;
    clear: right;
	text-align:justify;
	}
	
.div_baloons_right {
    width: 50%;
    height: 8.33%;
    margin: 0% 12.5% 0% 0%;
    padding: 0px;
    border: solid black 2px;
    border-radius: 10px;
    background-color: pink;
    float: right;
    clear: left;
    text-align:justify;
	}

.div_baloons_left_comments {
    width: 50%;
    height: 8.33%;
    margin: 0% 0% 2% 12.5%;
    padding: 0px;
    border: solid black 2px;
    border-radius: 10px;
    background-color: pink;
    float: left;
    clear: right;
	text-align:justify;
	}
	
#div_textarea {
	width:75%;
	margin:1% 12.5% 0% 12.5%;
	}
	
#text_top {
    width:75%;
	margin:0% auto 2% auto;
	padding: 0% 5% 0% 5%;
    text-align: center;}
	
.text_baloons{
	margin:1% 12.5% 2% 12.5%;
}

.text_baloons_date {
	margin:2% auto 2% auto;
	text-align:center;
	}
	
#text_baloon_number {
	float:left;
	text-align:center;
	margin:0% 0% 0% 12.5%;}

#text_baloon_playicon {
	margin: 0% 12.5% 0% 0%;
    float: right;}
	
#text_baloon_plays {
	float:right;
	text-align:center;
	margin:0% 0.5% 0% 0%;}	
	
.hr_baloons_top {
	width:75%;
	margin: 0% auto 4% auto;
    border: solid black 0.5px;}	
	
.hr_baloons_bottom {
	width:75%;
	margin: 0% auto 3% auto;
    border: solid black 0.5px;}	
	
#audio {
	width:75%;
	//max-width:75%;
	margin:0% 12.5% 0% 12.5%;}
	
#table_comments{
	border: none;
	border-collapse:collapse;
	//margin:auto;
	width:75%;
	margin:1% 12.5% 2% 12.5%;
    }
	
#textarea_comments{
	border: none;
	border-collapse:collapse;
	//margin:auto;
	width:100%;
	//margin:1% 12.5% 2% 12.5%;
    }
	
#th_comments {
	text-align:center;
	}
	
#td_comments {
	text-align:center;
	//border:solid black 2px;
	}	
.not_yet
{
	display:none;
}

h2 {
   width: 100%; 
   text-align: center; 
   border-bottom: 1px solid #000; 
   line-height: 0.1em;
   margin: 10px 0 20px; 
} 

h2 span { 
    background:#fff; 
    padding:0 10px; 
}
	
@media (min-width:480px) and (max-width:880px) {
    #div_ontop>h1 {
	margin: 4% 5% 0% 5%;
	}
	.div_baloons_left {
    width: 75%;
	}
	.div_baloons_left_comments {
	width: 75%;
	}
	}
	
@media (max-width:480px) {
    #div_ontop>h1 {
	margin: 8% 5% 0% 5%;
	}
	.div_baloons_left {
    width: 75%;
	}
	.div_baloons_left_comments {
	width: 75%;
	}
	}
	
</style>
<!-- Style End -->

</head>
<body>
<!-- Top Text -->
<div id="div_ontop"><h1>Join the Journey | <i class="material-icons" style="font-size:40px;">message</i>&nbsp;</h1><a href="http://energy.explainit.online#disqus_thread"></a>
<hr width="75%" style="border:solid black 0.5px;">
<p id="text_top">An energy expert
and a physicist trying to understand how these two areas of interest interconnect.</p></div>
<!-- Top Text End -->

<!-- MID TITLE -->
<h6 style="margin:2px auto;">&nbsp;</h6>
<h2><span>THE BEGINNING</span></h2>
<p style="text-align:center;">2 years ago</p>
<!-- MID TITLE END -->

<!-- LEFT MESSAGE 001 -->
<div class="div_baloons_left" style="width:420px;">
	<!-- Top Part -->
	<p class="text_baloons_date">02.2017 #001</p>
	<hr class="hr_baloons_top">
	<!-- Top Part End -->
	
	<!-- Middle Part -->
	<div style="height:100px;width:420px;text-align:center;">
		<iframe style="margin:auto;" frameborder="0" width="400" height="100" src="https://drive.google.com/file/d/1IBH-dyLmEK01glBExsbI-5lmRfHF0ReS/preview"></iframe>
	</div>
	<p class="text_baloons"></p>
	<!-- Middle Part End -->
	
	<!-- Bottom Part -->
	<hr class="hr_baloons_bottom">
    <i class="material-icons not_yet">message</i>
	<p id="text_baloon_number" class="not_yet">#1</p>
    <i id="text_baloon_playicon" class="material-icons not_yet">play_circle_outline</i>
    <p id="text_baloon_plays" class="not_yet"> #2</p>
	<!-- Bottom Part End -->
</div>

<!-- LEFT MESSAGE 001 END -->

<!-- RIGHT MESSAGE 002 -->
<div class="div_baloons_right" style="width:420px;margin-bottom:20px;">
	<!-- Top Part -->
	<p class="text_baloons_date">02.2017 #002</p>
	<hr class="hr_baloons_top">
	

	<!-- Middle Part -->
	<div style="height:100px;width:420px;text-align:center;">
		<iframe style="margin:auto;" frameborder="0" width="400" height="100" src="https://drive.google.com/file/d/1cxEXJCidL6fKOtsU5bdaifh6J_rHFOes/preview"></iframe>
	</div>
	<p class="text_baloons" style="margin-bottom:10px;">
	This is the original recording from 2 years ago :)
	</p>
	

	<!-- Bottom Part -->
	<hr class="hr_baloons_bottom">
    <i class="material-icons not_yet">message</i>
	<p id="text_baloon_number" class="not_yet">#1034</p>
    <i id="text_baloon_playicon" class="material-icons not_yet">play_circle_outline</i>
	<p id="text_baloon_plays" class="not_yet"> #1034</p>
	 
</div>

<!-- RIGHT MESSAGE 002 END -->

<!-- MID TITLE -->
<div style="width:100%;float:right;">
	<h6 style="margin:2px auto;">&nbsp;</h6>
	<h2><span>WEEK 001</span></h2>
	<h6 style="margin:2px auto;">&nbsp;</h6>
</div>
<!-- MID TITLE END -->

<!-- LEFT MESSAGE 003 -->
<div class="div_baloons_left" style="width:420px;">
	<!-- Top Part -->
	<p class="text_baloons_date">07.2019 #003</p>
	<hr class="hr_baloons_top">
	<!-- Top Part End -->
	
	<!-- Middle Part -->
	<div style="height:100px;width:420px;text-align:center;">
		<iframe style="margin:auto;" frameborder="0" width="400" height="100" src="https://drive.google.com/file/d/1sQ5SKqu1COzWJAIIaR3uDcZfvg13sTrb/preview"></iframe>
	</div>
	<p class="text_baloons"></p>
	<!-- Middle Part End -->
	
	<!-- Bottom Part -->
	<hr class="hr_baloons_bottom">
    <i class="material-icons not_yet">message</i>
	<p id="text_baloon_number" class="not_yet">#1</p>
    <i id="text_baloon_playicon" class="material-icons not_yet">play_circle_outline</i>
    <p id="text_baloon_plays" class="not_yet"> #2</p>
	<!-- Bottom Part End -->
</div>

<!-- LEFT MESSAGE 003 END -->

<!-- HORIZONTAL LINE -->
<div style="width:100%;float:right;text-align:center;">	
	<hr>
</div>
<!-- HORIZONTAL LINE END -->

<!-- DISQUS PLUGIN -->                            
<div id="disqus_thread"></div>
<script>

/**
*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/

var disqus_config = function () {
this.page.url = 'http://www.energy.explainit.online';  // Replace PAGE_URL with your page's canonical URL variable
this.page.identifier = 'indexPage'; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
};

(function() { // DON'T EDIT BELOW THIS LINE
var d = document, s = d.createElement('script');
s.src = 'https://http-energy-explainit-online.disqus.com/embed.js';
s.setAttribute('data-timestamp', +new Date());
(d.head || d.body).appendChild(s);
})();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
<!-- DISQUS PLUGIN END -->                        
    
<!-- First Couple Of Messages End -->
<!--
<div id="div_baloons_left_comments">
	<p style="margin:1% 12.5% 0% 12.5%;"><u>Add comment:</u></p>
	
	<div id="div_textarea">
		<form id="textarea_comments" action="11.php" method="post">
			<textarea rows="4" style="width:100%" name="comment" placeholder="typing..."></textarea>
			<input type="submit" name="submit" value="Send" id="submit"/>
		</form>
	</div>
</div>
-->

<script id="dsq-count-scr" src="//http-energy-explainit-online.disqus.com/count.js" async></script>
</body>
<!-- textarea -->
<!-- src:https://www.w3schools.com/tags/tag_textarea.asp -->

<!-- 2 be continued -->
<!-- src1:http://stackoverflow.com/questions/7582577/php-post-method-to-get-textarea-value-->
<!-- src2:https://www.w3schools.com/tags/att_form_action.asp -->
</html>