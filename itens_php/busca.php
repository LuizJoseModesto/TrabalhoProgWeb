<section class='busca-block'>
<form method="POST"
        action="login/buscaProduto.php">
<?php session_start();?>

    <div class='content'>
        <div class='box-busca'>
            <div class="filter-card">
            <input type="text"
                    name="descricao"
                    id="descricao"
                    class="login-input"
                    placeholder="Pesquise aqui...."
                    required="required"/>
                    <ul>
                      <input type="submit"
                      class="login-button"
                      value="Buscar"
                      id="bucar"
                      name="buscar">
                    </ul>
            </div>
        </div>
    </div>
</form>
</section>