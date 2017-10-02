<?php
//echo "I hate everything";
$userColor = $_POST["color"];
$userMascot = $_POST["mascot"];
$userTeam = $_POST["team"];
$userChicago = $_POST["chicago"];
$userVinegar = $_POST["vinegar"];
$ansColor = "red";
$ansMascot = "jayhawk";
$ansTeam = "bluejays";
$ansChicago = "27";
$ansVinegar = "ch3cooh";
$userScore = 0;
echo "Question 1: What color is a warm color?<br>";
echo "You answered: " . $userColor . "<br>";
echo "Correct answer: " . $ansColor . "<br><br>";
echo "Question 2: What is the mascot of the University of Kansas?<br>";
echo "You answered: " . $userMascot . "<br>";
echo "Correct answer: " . $ansMascot . "<br><br>";
echo "Question 3: Which is not a NFL team?<br>";
echo "You answered: " . $userTeam . "<br>";
echo "Correct answer: " . $ansTeam . "<br><br>";
echo "Question 4: What is the population of Chicago?<br>";
echo "You answered: " . $userChicago . "<br>";
echo "Correct answer: " . $ansChicago . "<br><br>";
echo "Question 5: What is the molecular formula for vinegar?<br>";
echo "You answered: " . $userVinegar . "<br>";
echo "Correct answer: " . $ansVinegar . "<br><br>";
if ($userColor == $ansColor) {
  $userScore++;
}
if ($userMascot == $ansMascot) {
  $userScore++;
}
if ($userTeam == $ansTeam) {
  $userScore++;
}
if ($userChicago == $ansChicago) {
  $userScore++;
}
if ($userVinegar == $ansVinegar) {
  $userScore++;
}
echo "You answered " . $userScore . " questions correctly<br>";
$userScore = $userScore*100/5;
echo "Your score is " . $userScore . "%<br>";
?>
