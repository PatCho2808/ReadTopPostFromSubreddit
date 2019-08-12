<?php

$ch = curl_init("https://www.reddit.com/r/" . $_GET["subreddit_name"] . "/top.json");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);  
$result = curl_exec($ch); 
curl_close($ch);
$result = json_decode($result,true);

?>