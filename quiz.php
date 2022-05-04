<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Quiz</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:ital,wght@1,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/styleheader.css">
	<link rel="stylesheet" href="css/stylequiz.css">
  <link rel="stylesheet" href="css/bootstrap.css">

</head>
<body>
    <?php
    include 'inc/header.php';
    ?>

	<div class ="center">	
    <div class = "questions">
      <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
  		<form method="post" action="perswork.php">
  			<h3>1. Is there any reason you want to work out? </h3>
    			<input type="checkbox" class="answer1" name="q1" value="a1">&nbspJust for fun
    			<br>
    			<input type="checkbox" class="answer1" name="q1" value="a2">&nbspBecause of health reasons
    			<br>
    			<input type="checkbox" class="answer1" name="q1" value="a3">&nbspI need to get fit
    			<br>

    			<h3>2. Do you want to gain muscular mass or lose weight?</h3>
    			<input type="checkbox" class="answer2" name="q2" value="a1">&nbspMuscular mass
    			<br>
    			<input type="checkbox" class="answer2" name="q2" value="a2">&nbspLose weight
    			<br>
    			<input type="checkbox" class="answer2" name="q2" value="a3">&nbspI want to be active in general
    			<br>

    			<h3>3. Would you say that you are a determined person?</h3>
    			<input type="checkbox" class="answer3" name="q3" value="a1">&nbspI think I am.
    			<br>
    			<input type="checkbox" class="answer3" name="q3" value="a2">&nbspNo, but I’m working on it
    			<br>
    			<input type="checkbox" class="answer3" name="q3" value="a3">&nbspNot at all, I give up easily
    			<br>

    			<h3>4. Do you like to listen to music while performing different activities?(e.g. studying, working, working out)</h3>
    			<input type="checkbox" class="answer4" name="q4" value="a1">&nbspWho doesn’t?
    			<br>
    			<input type="checkbox" class="answer4" name="q4" value="a2">&nbspNo, I can't focus
    			<br>
    			<input type="checkbox" class="answer4" name="q4" value="a3">&nbspNot really, but I don’t mind it in the background
    			<br>

    			<h3>5. How much time are you willing to spend working out?</h3>
    			<input type="checkbox" class="answer5" name="q5" value="a1">&nbspAround 15 minutes or more
    			<br>
    			<input type="checkbox" class="answer5" name="q5" value="a2">&nbspAs less time as possible
    			<br>
    			<input type="checkbox" class="answer5" name="q5" value="a3">&nbspDoesn’t matter for me
    			<br>
    			<input type="submit" class="submitButton" value="Submit this quiz">
  		</form>
      <script src="js/scriptquiz.js"></script>
       <?php
          include 'inc/q&a.php'
        ?>
    </div>  
	</div>
</body>
</html>