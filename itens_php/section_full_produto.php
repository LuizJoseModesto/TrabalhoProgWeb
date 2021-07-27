<section class="features" id="features">
  <div class="content">
      <div class="title-wrapper-features">
          <p>Tudo o que você procura</p>
          <h3>Encontre Aqui</h3>
      </div>

      <div>

          <?php
            
            if (isset($_GET['tmpString']))
              $tmpString = $_GET['tmpString'];
            else
              $tmpString = null;

            echo 'o valor de tmpString é: '.$tmpString;

          ?>
      



      </div>
      
    </div>
  </div>
</section>