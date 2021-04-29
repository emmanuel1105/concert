<!DOCTYPE html>
<html>

<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>DEM'S TOUR</title>
<?php require_once "bootstrap1.php";?>

	
<script type="text/javascript">

  function checkForm(form)
  {
    // validation fails if the input is blank
    // regular expression to match only alphanumeric characters and spaces
    var r = /^[A-Za-z ]*$/;
    var re = new RegExp("^(?=.*[a-z])(?=.*[0-9])(?=.{8,})");

    // validation fails if the input doesn't match our regular expression
    if(!r.test(form.first.value)) {
      alert("Error: Caractère non valide!");
      form.first.focus();
      return false;
    }
    
    if(form.pwd1.value.length < 8) 
    {
        alert("Error: mot de passe doit etre superieur à 8!");
        form.pwd1.focus();
        return false;
    }
    
    if(form.pwd1.value == form.first.value) {
        alert("Error: mot de passe doit etre different du nom d'utilisateur !");
        form.pwd1.focus();
        return false;
    }
    
    if(!re.test(form.pwd1.value)) {
      alert("Error: contenu invalide!");
      form.first.focus();
      return false;
    }
    
        // validation was successful
    return true;
  }

</script>

<style>
a {
    color: #124c76;
    text-decoration: none;
}
.new{
	margin-top: 16px;
    padding: 15px 20px;
    text-align: center;
}
.head{
	
	text-align: center;
}
.login{

	margin: 0 auto;
    width: 340px;
}
label{
	color: white;
}
.bd1{

	background-color: transparent;
    font-size: 14px;
    padding: 20px;
}
.btn-primary {
    background-color: #2675aed9;
}
form label {
    display: block;
    margin-bottom: 7px;
}
input{
	margin-bottom: 15px;
    margin-top: 5px;
}
body{
	background-image: url("img2/bacc4.png");
	background-repeat: no-repeat;
  color:white;
}
.label-link{
	margin-left: 7em;
}
.form-control{
	background-color: #ffffffc2;
}
p{
	color: #ffffffba;
}
.logo{
	width: 146px;
    height: 18px;
    background: url("img/logo.png");
}
@keyframes shake {
  10%, 90% {
    transform: translate3d(-1px, 0, 0);
  }
  
  20%, 80% {
    transform: translate3d(2px, 0, 0);
  }

  30%, 50%, 70% {
    transform: translate3d(-4px, 0, 0);
  }

  40%, 60% {
    transform: translate3d(4px, 0, 0);
  }
}
.inc{
  animation-name: shake;
  animation-duration: 1s;
  text-align: center;
  color: red;
}

</style>
</head>
<body>

<div class="login">
	<form name="form1" action="Sign up.php" method="POST" onsubmit="return checkForm(this);">
		<div class="head">
			<h1><b>Enregistre toi</b></h1>
		</div>
		<div class="bd1">
      <?php
          if(isset($_REQUEST["msg"])<>"")
          {
            echo  "<h4 class='inc'>".$_REQUEST["msg"]."</h4>";
          }
       ?>
			<label for="signup">Nom</label>
			<input type="text" name="first" id="first_name" class="form-control input-block"  placeholder="Entrer Nom" tabindex="0" autocapitalize="off" autocorrect="off" autofocus="autofocus" required="Name">
			<label for="user">Email</label>
			<input type="email" name="mail" id="login_field"  class="form-control input-block"  autocapitalize="off" autocorrect="off"  required="Entrer Email" placeholder="Enter Email ID">
			<label for="password">Mot de Passe</label>
			<input type="password" name="pwd1" id="password"  class="form-control form-control input-block"  required="Enter Password" placeholder="Entrer Mot de Passe">
			<span><small><i>Le mot de passe doit etre de 8 caractères et doit contenir des minuscules et des nombres <i><sup>*</sup></small></span>
			<input type="submit" name="commit" value="S'enregistrer" class="btn btn-primary btn-block" data-disable-with="Signing in…">
		</div>
	</form>
	<p class="new">
		"Vous avez deja un compte !"<br>
		<a data-ga-click="Sign in, switch to sign in" href="Sign in.php" style="color: white;">Se connecter</a>
	</p>
</div>

<AUDIO src="zik1.mp3" preload="auto"  preload="load" autoplay> </AUDIO>

</body>
</html>