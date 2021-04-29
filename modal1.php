
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span class="close" style="margin-top: -18px;">&times;</span>
      <h2 style="font-size: 23px;">Connectez-vous svp !!</h2>
    </div>

    <div class="login">
      <form action="tour(cor).php" method="POST">
        <div class="head">
          <h1 style="color: black;"><b>Connectez-vous</b></h1>
        </div>
        <div class="bd1">
          <label for="login">Email</label>
          <input type="email" name="mai" id="login" class="form-control input-block" tabindex="1" autocapitalize="off" autocorrect="off" autofocus="autofocus" required="Enter Username" placeholder="Entrer Email ID" value="<?php 

              if (isset($_COOKIE['mail']) && isset($_COOKIE['password'])) {
                echo $_COOKIE['mail'];
              }
              else
              {
                echo "";
              }

            ?>">
          <label for="password">Mot de Passe</label>
          <input type="password" name="pwd" id="password" placeholder="Entrer Mot de Passe" class="form-control form-control input-block" tabindex="2" required="Enter Password" value="<?php 

              if (isset($_COOKIE['mail']) && isset($_COOKIE['password'])) {
                echo $_COOKIE['password'];
              }
              else
              {
                echo "";
              }

            ?>">
          <input type="submit" name="commit" value="Connection" tabindex="3" class="btn btn-primary btn-block" data-disable-with="Signing in…">
        </div>
      </form>
      <p class="new" id="p">
        "Nouveau sur le site"<i>
        <a data-ga-click="Sign in, switch to sign up" href="Signup.php" id="a" style="color: #2675ae;">Crée un Nouveau Compte</a></i>
      </p>
    </div>

  </div>

</div>
