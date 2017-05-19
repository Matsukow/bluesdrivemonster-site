<?php
	session_start();
?>

<!-- <link href="css/signin.css" rel="stylesheet"> -->
<section class="pg-login">
    <div class="container">

      <form class="form-signin" method="POST" action="?pg=valida">
        <h2 class="form-signin-heading">Login</h2>
        <label for="inputUser" class="sr-only">Usuário (de drogas)</label>
        <input type="text" name="usuario" id="inputUser" class="form-control" placeholder="Usuário (de drogas)" required autofocus>
        <label for="inputPassword" class="sr-only">Senha</label>
        <input type="password" name="senha" id="inputPassword" class="form-control" placeholder="Senha" required>
        <button class="btn btn-lg btn-danger btn-block" type="submit">Acessar</button>
      </form>

  	  <p class="text-center text-danger">
  			<?php if(isset($_SESSION['loginErro'])){
  				echo $_SESSION['loginErro'];
  				unset($_SESSION['loginErro']);
  			}?>
  		</p>

  		<p class="text-center text-success">
  			<?php 
  			if(isset($_SESSION['logindeslogado'])){
  				echo $_SESSION['logindeslogado'];
  				unset($_SESSION['logindeslogado']);
  			}
  			?>
  		</p>
    </div> <!-- /container -->
</section>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>