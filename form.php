<?php

if(isset($_POST["subreddit_name"]))
{
	header("Location: print.php?subreddit_name=".$_POST["subreddit_name"]); 
}

?>

<html>
<head>
</head>
<body>

	<form method = "POST">
	<label> Name of subreddit: </label>
	<input type = "text" name = "subreddit_name"> <br>
	</form>


</body>
</html>