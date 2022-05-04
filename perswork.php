<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Personal workout</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@1,600&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="css/styleperswork.css">
	<link rel="stylesheet" href="css/bootstrap.css">

</head>
<body>
	<div class ="center">
		<div class = "container">
			<div class = "row">
				<div class = "col-md-12">
					<h4 class="text">This might be the workout that suits you. Try it!</h4>
				</div>
			</div>
		
		<div id ="display">			
		
    <?php
    include 'inc/q&a.php'
    ?>
    <script>
    	var sum = <?php echo json_encode($sum); ?>;
		let q5 = <?php echo json_encode($q5); ?>;
		let q2 = <?php echo json_encode($q2); ?>;

		if(sum == 5)
		{
			document.getElementById('display').innerHTML= '<iframe width="650" height="400" src="https://www.youtube.com/embed/ILUZz0nGEBI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
		}

		if(sum > 5 && sum < 9)
		{
			if(q5 == "a2")
			{
				document.getElementById('display').innerHTML='<iframe width="650" height="400" src="https://www.youtube.com/embed/V1peOTo53UQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
			}
			else {
			document.getElementById('display').innerHTML= '<iframe width="650" height="400" src="https://www.youtube.com/embed/UItWltVZZmE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
		}
		}
		if(sum >= 9 && sum < 12)
		{
			document.getElementById('display').innerHTML = '<iframe width="650" height="400" src="https://www.youtube.com/embed/kTTP82Vhcww" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
		}

		if(sum >= 12 && sum <= 15)
		{
			document.getElementById('display').innerHTML = '<iframe width="650" height="400" src="https://www.youtube.com/embed/-TAvkrgi65I" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>'
		}

    </script>
    
		</div>
		</div>
	</div>
</body>
</html>