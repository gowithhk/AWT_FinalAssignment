<!DOCTYPE html>
<html>
<head>
	<title>Movies Gallery</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Nerko+One&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/fe786c7701.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="style.css">
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


<div id="mov" style="background-color:black;">
<br>
<h2 id="h22"> <u>My Favourite Movies</u></h2>

<?php
$pic = array('https://m.media-amazon.com/images/M/MV5BMDFkYTc0MGEtZmNhMC00ZDIzLWFmNTEtODM1ZmRlYWMwMWFmXkEyXkFqcGdeQXVyMTMxODk2OTU@._V1_QL50_.jpg',
             'https://m.media-amazon.com/images/M/MV5BM2MyNjYxNmUtYTAwNi00MTYxLWJmNWYtYzZlODY3ZTk3OTFlXkEyXkFqcGdeQXVyNzkwMjQ5NzM@._V1_QL50_SY1000_CR0,0,704,1000_AL_.jpg',
             'https://m.media-amazon.com/images/M/MV5BMTMxNTMwODM0NF5BMl5BanBnXkFtZTcwODAyMTk2Mw@@._V1_QL50_SY1000_CR0,0,675,1000_AL_.jpg',
             'https://m.media-amazon.com/images/M/MV5BNzA5ZDNlZWMtM2NhNS00NDJjLTk4NDItYTRmY2EwMWZlMTY3XkEyXkFqcGdeQXVyNzkwMjQ5NzM@._V1_QL50_SY1000_CR0,0,675,1000_AL_.jpg',
             'https://m.media-amazon.com/images/M/MV5BMjAxMzY3NjcxNF5BMl5BanBnXkFtZTcwNTI5OTM0Mw@@._V1_QL50_SY1000_CR0,0,675,1000_AL_.jpg',
             'https://m.media-amazon.com/images/M/MV5BNzQzOTk3OTAtNDQ0Zi00ZTVkLWI0MTEtMDllZjNkYzNjNTc4L2ltYWdlXkEyXkFqcGdeQXVyNjU0OTQ0OTY@._V1_QL50_SY1000_CR0,0,665,1000_AL_.jpg',
             'https://m.media-amazon.com/images/M/MV5BZjdkOTU3MDktN2IxOS00OGEyLWFmMjktY2FiMmZkNWIyODZiXkEyXkFqcGdeQXVyMTMxODk2OTU@._V1_QL50_SY1000_SX675_AL_.jpg',
             'https://m.media-amazon.com/images/M/MV5BMjA4NDI0MTIxNF5BMl5BanBnXkFtZTYwNTM0MzY2._V1_QL50_.jpg',
             'https://m.media-amazon.com/images/M/MV5BNGVjNWI4ZGUtNzE0MS00YTJmLWE0ZDctN2ZiYTk2YmI3NTYyXkEyXkFqcGdeQXVyMTkxNjUyNQ@@._V1_QL50_SY1000_CR0,0,674,1000_AL_.jpg',
             'https://www.cineworld.co.uk/xmedia-cw/repo/feats/posters/HO00003849.jpg'
           );
shuffle($pic);
$checker = array();
?>

  <ul>
<?php
   for( $i = 0; $i < 10; $i++)
      echo "<li style=\"display: inline-block; margin-right:10px; margin-bottom:10px; border: 3px solid #ddd;
	  border-radius: 4px; \">
                         <img src=\"$pic[$i]\" width=\"300\" height=\"400\">
                       </li>";


?>
 </ul>
</div>


  <br>
  <div class="container" style="padding: 1.5%; ">
    <div class="footer" style="background-color:orange; color:black;; text-align: center; box-shadow: 1px 1px 6px 0px #000; padding: 5px;">
      
      <h3 style="font-family: Nerko One;">Name : Harsh Kumar</h3>
      <h3 style="font-family: Nerko One;">Regn. No. : 201800494</h3>
      


    </div>
  </div>


	<script type="text/javascript" src="gallery.js"></script>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
