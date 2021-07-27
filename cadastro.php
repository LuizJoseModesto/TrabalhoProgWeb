<!DOCTYPE html>
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
        <!-- Registration Form start -->
        <form method="POST" action="login/SalvaUsuario.php">
            <div class="content">
                <div class="cadastro-block">
                <div class="box-cadastro">
                    <label>Nome: </label><br>
                    <input type="text" name="nome" id="nome" class="login-input" placeholder="Digite seu nome" required="required"/><br>
                    <label>E-mail: </label><br>
                    <input type="text" name="email" id="email" class="login-input" placeholder="Digite sua e-mail" required="required"/><br>
                    <label>Telefone: </label><br>
                    <input type="text" name="telefone" id="telefone" class="login-input" placeholder="Digite seu telefone" required="required"/><br>
                    <label>Senha: </label><br>
                    <input type="password" name="senha" id="senha" class="login-input" placeholder="Digite sua senha" required="required"/><br>
                    
					          <!--checking if the session 'success' is set.-->
                    <?php if(ISSET($_SESSION['success'])){?>
				            <!-- Display regostration success message -->
				            <div><?php echo $_SESSION['success']?></div>
				            <!--Unsetting the 'success' session after displaying the message.-->
                    <?php unset($_SESSION['success']);}?>

                    <ul>
                      <input type="submit" class="login-button" value="Cadastro" id="cadastrar" name="cadastrar">
                    </ul>
                </div>
                </div>
            </div>
        </form>
    </section>
    
    <?php include('itens_php/footer_roda_pe.php')?>

  </body>
</html>
