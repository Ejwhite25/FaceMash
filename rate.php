<?php


include('mysql.php');
include('functions.php');

//if-rating
if ($_GET['winner'] && $_GET['loser']){
    //get-winner
$result =  mysqli_query($GLOBALS["___mysqli_ston"],"SELECT * FROM images ORDER BY image_id = ".$_GET['winner']. " "); 
while($winner =  mysqli_fetch_object($result));

    //get-loser
$result = mysqli_query($GLOBALS["___mysqli_ston"],"SELECT * FROM images WHERE image_id = ".$_GET['loser']. "");
while($loser = mysqli_fetch_object($result));


//winner-score-updated
$winner_expected = isset($loser->score, $winner->score);
$winner_new_score = isset($winner->score, $winner_expected);
//test print "Winner: ".$winner->score."-".$winner_new_score."-".$winner_expected."<br>";
mysqli_query($GLOBALS["___mysqli_ston"], "UPDATE images SET score = " .$winner_new_score. ", wins = wins+1 WHERE image_id = " . $_GET['winner']);


//loser-score-updated 
$loser_expected =  isset($winner->score, $loser->score);
$loser_new_score = isset($loser->score, $loser_expected);
//test print "Loser:".$loser->score."-".$loser_new_score."-".$loser_expected."<br>";
mysqli_query($GLOBALS["___mysqli_ston"], "UPDATE images SET score = " .$loser_new_score. ", losses = losses+1 WHERE image_id = " . $_GET['loser']);


//insert-battle
mysqli_query($GLOBALS["___mysqli_ston"], "INSERT INTO battles SET winner = " .$_GET['winner'].", loser = ".$_GET['loser']);




	 // Back to the frontpage
 header('location: /');
 

}


?>






