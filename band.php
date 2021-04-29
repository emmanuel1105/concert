<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>DEM'S TOUR</title>
    <?php include "session.php";?>
	<?php require_once "bootstrap.php";?>

<style type="text/css">
.nav-bar {
    background-color: transparent;
}
.w-container {
    margin-left: auto;
    margin-right: auto;
    max-width: 940px;
}
#nav{
	background-color: transparent;
}
.logo{
	padding-top: 8px;
}
.w-nav {
    position: relative;
    background: #dddddd;
    z-index: 1000;
}
.w-nav-brand {
    position: relative;
    float: none;
    text-decoration: none;
    color: #333333;
}
.w-nav-overlay {
    position: absolute;
    overflow: hidden;
    display: none;
    top: 100%;
    left: 0;
    right: 0;
    width: 100%;
}
body {

    background: linear-gradient(30deg,#000,#535050);
    background-size: cover;
    overflow: ;
    background-repeat: no-repeat;
    background-attachment: fixed;
}
.content-wrapper {
    margin-top: 78px;
}
.w-container {
    margin-left: auto;
    margin-right: auto;
    max-width: 940px;
}
.page-title {
    margin-top: 0px;
    margin-bottom: 86px;
    font-size: 45px;
    line-height: 51px;
    font-weight: 300;
    text-align: center;
    text-transform: uppercase;
}
.footer {
    padding-top: 43px;
    padding-bottom: 43px;
    background-color: transparent;
    color: #222;
    text-align: center;
}
p {
    margin-bottom: 10px;
    line-height: 24px;
    font-weight: 300;
    padding-left: 5px;
    padding-right: 5px;
}
@media screen and (max-width: 991px){

	.w-container {
    max-width: 728px !important;
	}	
	.w-nav[data-collapse="medium"] .w-nav-menu {
	    display: none;
	}
	.nav-menu {
    padding-top: 18px !important;
    padding-bottom: 18px !important;
    border-top: 1px solid #000 !important;
    background-color: rgba(0, 0, 0, .85) !important;
	}
	
	.w-container {
    max-width: 728px !important;
	}
	.logo{
	padding-top: 8px !important;
	width: 10% !important;
	}
}

@media (max-width: 767px){
	

	.logo{
	padding-top: 8px !important;
	width: 10% !important;
	}
}

@media screen and (max-width: 479px){
	.w-container {
	    max-width: none !important;
	}	
	.logo{
	padding-top: 8px !important;
	width: 10% !important;
	}
}

</style>
</head>

<body>
	<?php require_once "navbar.php";?>
	<div class="content-wrapper w-container">
    <h1 class="page-title"><font style="vertical-align: inherit; font-family: sans-serif;"><font style="vertical-align: inherit; background: linear-gradient(to right,#E20D13, #F0E300, #A4C615, #4363AB,#BE4A94,#E30922);-webkit-background-clip: text;-webkit-text-fill-color: transparent;">Comment tous à commencer</font></font></h1>
    <div class="w-richtext">
        <center>
    	<p  >
        Damso naît le 10 mai 1992 à Kinshasa, d'une mère sociologue et d'un père cardiologue
        . Lui et sa famille fuient la République démocratique du Congo à cause du conflit armé les menaçant 
        dont il parle dans ses morceaux Graine de sablier (« les tirs de kalash m'empêchaient de rêver »), 
        Exutoire (« tue tout le monde même les femmes enceintes »), BruxellesVie (« enfance pas tranquille 
        coup de feu je n'ai plus peur ») ou encore K. Kin la belle (« Oh Kin [Kinshasa] la belle c'qu'ils te 
        font me fait beaucoup de peine »)10,11. Ils s'installent en Belgique alors qu'il a 9 ans et grandit à 
        Kraainem dans la province du Brabant flamand en Région flamande avant de déménager à ses 22 ans pendant 
        trois ans dans le quartier congolais de Matonge dans la commune bruxelloise d'Ixelles.
        Damso commence le rap en 2006, en créant le groupe OPG avec son ami d'enfance Dolfa12.
         Ils seront rejoint par la suite par Rex, Ducke et Lio Brown. Il publie son premier projet solo en 2014, 
        une mixtape intitulée Salle d'attente, disponible en téléchargement gratuit, composé de huit titres, 
        avec des nombreuses productions faites par lui-même et une production de Dolfa. La même année, le 24 septembre,
         il sort la mixtape MMMXIII ou 3013 avec son groupe OPG. 
</p></center>
	</div>
  </div>
  <?php require_once "footer.php";?>
</body>
</html>