<!DOCTYPE html>
<html>
<head>
	<title>My Image Gallery</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Nerko+One&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/fe786c7701.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script language="JavaScript">

						function calculateBmi() {
						var weight = document.bmiForm.weight.value
						var height = document.bmiForm.height.value
						if(weight > 0 && height > 0){	
						var finalBmi = weight/(height/100*height/100)
						document.bmiForm.bmi.value = finalBmi
						if(finalBmi < 18.5){
						document.bmiForm.meaning.value = "That you are too thin."
						}
						if(finalBmi > 18.5 && finalBmi < 25){
						document.bmiForm.meaning.value = "That you are healthy."
						}
						if(finalBmi > 25){
						document.bmiForm.meaning.value = "That you have overweight."
						}
						}
						else{
						alert("Please Fill in everything correctly")
						}
						}

	</script>

</head>
<body style="background-color:black;">
	<div class="container">
		<div class="jumbotron mt-2" id="div11" style="background-color:black;">
		
		<h1 id="h11"><a href="index.php"> <span style="font-family: Jokerman; color:red; background-color:black; ">My Image Gallery</span> </a></h1>
		</div>
		
		<div id="bdiv">
			<button type="button" class="btn btn-primary btn-lg" id="mov" onclick = "window.location.href='./movies.php';">Movies</button>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<button type="button" class="btn btn-primary btn-lg" id="car" onclick = "window.location.href='./cars.php';">Cars</button>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<button type="button" class="btn btn-primary btn-lg" id="pers" onclick = "window.location.href='./personalities.php';">Personalities</button>
			<br>
			<br>
			<img src="./smit_logo.jpeg" alt="" id = "LogoOfSmit">
		</div>

	

		<div id="calbmi">
			<center><b>Check your BMI  :</b></center>
			<form name="bmiForm">
				<center>
					<table style="font-family: Nerko One;" bgcolor="black" border="2" bordercolor="green" rules="none" cellspacing="0" cellpadding="4" style="color: white;" height="400" width="500">
						<tr>
						<td>&nbsp;&nbsp;Your Weight(kg): <input type="text" name="weight" size="10"><br /></td>
						</tr>
						<tr><td>&nbsp;&nbsp;Your Height(cm): <input type="text" name="height" size="10"><br /></tr></td>
						<br>
						<tr><td><center><input type="button" value="Calculate BMI" onClick="calculateBmi()"><br /></tr></td>
						<br>
						<tr><td>&nbsp;&nbsp;&nbsp;Your BMI: <input type="text" name="bmi" size="10"><br /></tr></td>
						<tr><td>&nbsp;&nbsp;&nbsp;This Means: <input type="text" name="meaning" size="25"><br /></tr></td>
						<tr><td><center><input type="reset" value="Reset" /></tr></td>
					</table>

			</form>


		</div>
		
	
<br>
  <div class="container" style="padding: 1.5%; ">
    <div class="footer" style="background-color:orange; color:black;; text-align: center; box-shadow: 1px 1px 6px 0px #000; padding: 5px;">
      
      <h3 style="font-family: Nerko One;">Name : Harsh Kumar</h3>
      <h3 style="font-family: Nerko One;">Regn. No. : 201800494</h3>
      


    </div>
  </div>



</body>
</html>
