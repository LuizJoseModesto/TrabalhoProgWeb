<!DOCTYPE html>
<?php session_start();?>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Shop Racer</title>
    <link rel="stylesheet" href="css/styles.css" />
  </head>
  <body>
    
    <?php include('itens_php/header_topo.php')?>

    <section>
      <form method="POST" action="login/LoginQuery.php">
        <div class="content">
          <div class="login-block">
            <div class="box-login">
              <label>E-mail: </label><br>
              <input type="text" name="email" id="email" class="login-input" placeholder="Digite seu e-mail"  required="required"/><br>
              <label>Senha: </label><br>
              <input type="password" name="senha" id="senha" class="login-input" placeholder="Digite sua senha" required="required"/><br>
              
              <!-- checking if the session 'error' is set. Erro session is the message if the 'Username' and 'Password' is not valid.-->
              <?php if(ISSET($_SESSION['error'])){?>
				      <!-- Display Login Error message -->
					    <div ><?php echo $_SESSION['error']?></div>
              <!--//Unsetting the 'error' session after displaying the message.-->
              <?php unset($_SESSION['error']);}?>

              <ul>
                <input type="submit" class="login-button" value="Login" id="login" name="login">
                <a href="cadastro.php" >Cadastro</a>
              </ul>
            </div>
          </div>
        </div>
      </form>
    </section>
    
    <?php include('itens_php/footer_roda_pe.php')?>

  </body>
</html>
