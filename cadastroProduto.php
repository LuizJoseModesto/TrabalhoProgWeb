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
        <form method="POST" action="login/SalvaProduto.php" enctype='multipart/form-data'>
            <div class="content">
                <div class="cadastro-block">
                <div class="box-cadastro">
                    <label>Nome: </label><br>
                    <input type="text" name="nome" id="nome" class="login-input" placeholder="Digite nome" required="required"/><br>
                    <label>Descrição: </label><br>
                    <input type="text" name="descricao" id="descricao" class="login-input" placeholder="Digite sa descrição" required="required"/><br>
                    <label>Preço: </label><br>
                    <input type="text" name="preco" id="preco" class="login-input" placeholder="Digite o preço" required="required"/><br>
                    <label>Imagem: </label><br>
                    <input type="file" name="imagem" id="imagem" class="login-input" placeholder="----------" required="required"/><br>
                    
					          <!--checking if the session 'success' is set.-->
                    <?php if(ISSET($_SESSION['success'])){?>
				            <!-- Display regostration success message -->
				            <div><?php echo $_SESSION['success']?></div>
				            <!--Unsetting the 'success' session after displaying the message.-->
                    <?php unset($_SESSION['success']);}?>

                    <ul>
                      <input type="submit" class="login-button" value="Cadastrar" id="cadastroProduto" name="cadastroProduto"/>
                    </ul>
                </div>
                </div>
            </div>
        </form>
    </section>
    
    <?php include('itens_php/footer_roda_pe.php')?>

  </body>
</html>
