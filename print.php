<?php


if(isset($_GET["subreddit_name"]) == false)
{
	header("Location: form.php"); 
}

include 'curl.php'; 
include 'post.php'; 

$newPost = new SubredditPost($result["data"]["children"][0]["data"]["author_fullname"],$result["data"]["children"][0]["data"]["selftext"],$result["data"]["children"][0]["data"]["title"],$_GET["subreddit_name"]); 
$newPost->print(); 

?>