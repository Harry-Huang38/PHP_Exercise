<?php
	error_reporting(E_ALL);
	ini_set("display_errors", 1);

	$select1= $_POST["question1"];
	$select2 = $_POST["question2"];
	$select3 = $_POST["question3"];
	$select4 = $_POST["question4"];
	$select5 = $_POST["question5"];
	
	$score = 0;
	
	if($select1== "A. iPhone 12"){
		$score ++;
	}
	if($select2== "A. PlayStation 5"){
		$score ++;
	}
	if($select3== "D. XBOX Series X"){
		$score ++;
	}
	if($select4== "D. Nintendo Switch"){
		$score ++;
	}
	if($select5== "C. Samsung Note 20"){
		$score ++;
	}
	echo"<h1 style='text-align: center;'>There are " .$score . "  Correct Answers</h1>";


	if($score == 1){
		$score = 20;
	}
	if($score == 2){
		$score = 40;
	}
	if($score == 3){
		$score = 60;
	}
	if($score == 4){
		$score = 80;
	}
	if($score == 5){
		$score = 100;
	}
	echo"<h1 style='text-align: center;'>The Score is " .$score . "%</h1>";


	echo"<h2 style='text-align: center;'>Question 1: What is the Newest iPhone? <br></h2>";
	echo"<h3 style='text-align: center;'> You Answered: 	" .$select1. "<br> Correct answer:  	A. iPhone 12</h3>";
	
	echo"<h2 style='text-align: center;'>Question 2: What is the Newest PlayStation Home video game console? <br></h2>";
	echo"<h3 style='text-align: center;'> You Answered: 	" .$select2. "<br> Correct answer:  	A. PlayStation 5</h3>";

	echo"<h2 style='text-align: center;'>Question 3: What is the Newest XBOX Home video game console? <br></h2>";
	echo"<h3 style='text-align: center;'> You Answered: 	" .$select3. "<br> Correct answer:  	D. XBOX Series X</h3>";

	echo"<h2 style='text-align: center;'>Question 4: What is Newest Nintendo Home video game console? <br></h2>";
	echo"<h3 style='text-align: center;'> You Answered: 	" .$select4. "<br> Correct answer:  	D. Nintendo Switch</h3>";

	echo"<h2 style='text-align: center;'>Question 5: What is the Newest Samsung Phones? <br></h2>";
	echo"<h3 style='text-align: center;'> You Answered: 	" .$select5. "<br> Correct answer:  	C. Samsung Note 20</h3>";
?>
