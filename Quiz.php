<?php
$limb = $_POST["limb"];
$rubber = $_POST["MichelinMan"];
$job = $_POST["job"];
$zodiac = $_POST["TedCruz"];
$gitgot = $_POST["theaterKids"];

echo "<h2>Questions: </h2>";
echo "Q1: Which limb is best? <br>";
echo "  You answered: " . $limb . "<br>";
echo "  Right answer: Left Leg <br><br>";

echo "Q2: The Michelin Man is comprised of how many tires? <br>";
echo "  You answered: " . $rubber . "<br>";
echo "  Right answer: We Will Never Know <br><br>";

echo "Q3: Can I have a job?<br>";
echo "  You answered: " . $job . "<br>";
echo "  Right answer: Of course, you are a servant in the capitalist machine...<br><br>";

echo "Q4: What's my favorite president's zodiac sign?<br>";
echo "  You answered: " . $zodiac . "<br>";
echo "  Right answer: Aquarius (FDR WHIPS ASS)<br><br>";

echo "Q5: Look behind you.<br>";
echo "  You answered: " . $gitgot . "<br>";
echo "  Right answer: I Swear I've Done Everything You Asked.<br><br>";

$score = 0;
if($limb == "Left Leg") $score += 20;
if($rubber == "We Will Never Know") $score += 20;
if($job == "Of course, you are a servant in the capitalist machine...") $score += 20;
if($zodiac == "Aquarius") $score += 20;
if($gitgot == "I Swear I've Done Everything You Asked") $score += 20;
echo "<h2>You got: " . $score/20 . " out of 5 correct!</h2>"; 
echo "<h2>Your score: </h2><h1>{$score}%</h1>";
?>
