<!DOCTYPE html>
<html>
<head>
       
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    
   
   <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    
    
    <!-- Load font awesome icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="css/background.css" rel="stylesheet" >

    
    <title>Piotr Kowalecki</title>
</head>
<body>
 <div id="cf">
    <img class="background1" src="obrazki/tlo/czarne.jpg" />
</div>

<link href="css/navbar.css" rel="stylesheet">
<div class="navbar">
<a href="index.php">Home</a>
 <a href="#contact">Kontakt</a>
  <a href="#aboutUs">O Nas</a>
  <a href="#informations">Informacje</a>
  <a href="#log" onclick="document.getElementById('log').style.display='block'" style="width:auto;">Logowanie</a>
</div>


<link href="css/iconbar.css" rel="stylesheet">
<div class="icon-bar">
  <a href="https://www.facebook.com/amw.gdynia/" class="facebook" target="_blank"><i class="fa fa-facebook"></i></a>
  <a href="mrdann1404@gmail.com" class="google" target="_blank"><i class="fa fa-google"></i></a>
  <a href="https://github.com/pkowalecki" class="github" target="_blank"><i class=" fa fa-github"></i></a>
  <!--<a href="#" class="telegram"><i class="fa fa-telegram"></i></a>
  <a href="#" class="slack"><i class="fa fa-slack"></i></a>!-->
</div>
<center><div class="napis1">Zobacz jak wygląda Nasz portal: *obrazki z tabelek czy coś*</div></center>

<link href="css/scroller.css" rel="stylesheet">
<div class="topButton">
<button onclick="topFunction()" id="myBtn" title="topBtn"><i class="fa fa-level-up"></i></button></div>
        

<link href="css/login.css" rel="stylesheet">
<div id="log" class="modal">
<div class="container">
	<form class="form-signin" action="process.php" method="POST">
        <h1 class="form-signin-heading text-muted">Zaloguj się</h1>
		<input type="text" id= "user" name = "user" class="form-control" placeholder="login" required="" autofocus="">
		<input type="password" id = "pass" name="pass" class="form-control" placeholder="Hasło" required="">
		<button class="btn btn-lg btn-primary btn-block" type="submit">
			Zaloguj mnie
		</button>
	</form>
    </div></div>        
    
    

</body>          

<footer class="footer">To jest stopka</footer>
    <!-- skrypciki !-->
    <script src="js/clickOverBox.js"></script> 
    <script src="js/scroller.js"></script>  
    
                    
</html>