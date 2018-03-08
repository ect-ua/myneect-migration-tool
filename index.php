<?php include 'header.php' ?>

<!-- <script>
function submitForm() {
  var response = grecaptcha.getResponse();

  if(response.length == 0) {
    //reCaptcha not verified
    console.log("Falhou captcha");
    return false;
  }
      

  else {
      //reCaptch verified
      //console.log("success");
      console.log(response);

      var input = $("<input>")
               .attr("type", "hidden")
               .attr("name", "g-recaptcha-response").val(response);

      $("#form-update").append($(input));

      document.getElementById("form-update").submit();

      return true;
  }
}
</script> -->

<script>
       function onSubmit(token) {
         document.getElementById("form-update").submit();
       }
</script>

<form id="form-update" class="form-signin well" method="post" action="migrate.php">
  <p class="h1" align="center" style="color: #2f84b8;"><span class="glyphicon glyphicon-refresh" aria-hidden="true"></span></p>
  <h1 class="h2" align="center">Migração de contas myNEECT</h1>
  <p align="center">Para poderes continuar a usar o fórum, é necessário migrar a tua conta.</p>
  <p align="center">Insere o teu nome de utilizador e palavra-passe para continuar.</p>
  <br />

  <div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
    <input id="username" type="text" class="form-control" name="username" value="" placeholder="Nome de utilizador ou e-mail" required>                                        
  </div>

  <div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
    <input id="password" type="password" class="form-control" name="password" placeholder="Palavra-passe" required>
  </div>
  
  <br />
  <p><button class="btn btn-lg btn-primary btn-block g-recaptcha" data-sitekey="6Lem2x8UAAAAAO8LtKMNbDDMLXHSWfETHTGN8cKt" data-callback="onSubmit">Migrar a minha conta</button></p>
  <p><a href="/forum" class="btn btn-lg btn-default btn-block">Já migrei a minha conta</a></p>
</form>

<?php include 'footer.php' ?>