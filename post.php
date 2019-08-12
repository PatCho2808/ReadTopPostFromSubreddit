<?php 

class SubredditPost
{
	private $user_name;
	private $text; 
	private $title; 
	private $subreddit;

	function __construct($user_name, $text, $title, $subreddit)
	{
		  
		$this->user_name = $user_name;
		$this->text = $text; 
		$this->title = $title; 
		$this->subreddit = $subreddit; 
	}

	function print()
	{
		echo "Subreddit: " . $this->subreddit; 
		echo "<br>";
		echo "<br>";
		echo "<b>"; 
		echo $this->title; 
		echo "</b>"; 
		echo "<br>";
		echo "<br>";
		echo $this->text; 
		echo "<br>";
		echo "<br>";
		echo $this->user_name; 
	}
}

?>