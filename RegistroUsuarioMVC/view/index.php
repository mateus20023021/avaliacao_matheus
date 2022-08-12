<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Registre o seu usuário</title>


  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

  <!--owl slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- font awesome style -->
  <link href="../css/font-awesome.min.css" rel="stylesheet" />
  <!-- nice select -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css" integrity="sha256-mLBIhmBvigTFWPSCtvdu6a76T+3Xyt+K571hupeFLg4=" crossorigin="anonymous" />
  <!-- datepicker -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css">

  <!-- Custom styles for this template -->
  <link href="../css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="../css/responsive.css" rel="stylesheet" />

  

</head>

<body class="sub_page">




  <!-- contact section -->
  <section class="contact_section layout_padding-bottom">
    <br><br><br>
    <div class="container">
      <div class="heading_container">
        <h2>
          Cadastre-se
        </h2>
      </div>
      <div class="row">
        <div class="col-md-7">
          <div class="form_container">

            <!-- Início de Form cadastro -->
            <form action="../index.php?classe=Profissional&acao=storeProfissional" method="POST">

              <div>
                <input type="text" name="cpf" id="cpf" placeholder="Digite seu CPF" autocomplete="off" required/>
              </div>
              <div>
                <input type="text" name="contato" id="contato" placeholder="Digite seu contato/whatsapp" autocomplete="off" required/>
              </div>
              <div>
                <input type="email" name="email" placeholder="Digite seu email" autocomplete="off" required/>
              </div>
              <div>
                <input type="number" name="status" placeholder="Status" value="1" autocomplete="off" required/>
              </div>
              <div>
                <input type="text" name="rg" id="rg" placeholder="RG" autocomplete="off" required/>
              </div>
              <div>
                <input type="text" name="nome_prof" placeholder="Nome do Usuário" autocomplete="off" required/>
              </div>
              <div>
                <input type="password" name="password" placeholder="Password" autocomplete="off" required/>
              </div>
              <div>
                <input type="password"  placeholder="Repetir a senha" autocomplete="off" required/>
              </div>

              <div id="alvo">
                <label for="cargo" style="color: green">Cargo</label><br />
                <input type="cargo" name="cargo" placeholder="Tipo de Cargo" autocomplete="off"/>
              </div>

              <br/><br/>

              <div class="btn_box">
                <button>
                  Cadastre-se
                </button>
              </div>

            </form>
            <!-- Final de Form cadastro -->


          </div>
        </div>

      </div>
    </div>
  </section>
  <!-- end contact section -->





 <footer class="footer_section">
    <div class="container">
      <p>
        &copy; <span id="displayYear"></span> Registro de Usuário MVC - Github link: <a href="https://github.com/mateus20023021" target="_blank">Mateus Silva Rodrigues de Lima</a>
      </p>
    </div>
  </footer>


  <!-- jQery -->
  <script src="../js/jquery-3.4.1.min.js"></script>
  <!-- bootstrap js -->
  <script src="../js/bootstrap.js"></script>
  <!-- nice select -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js" integrity="sha256-Zr3vByTlMGQhvMfgkQ5BtWRSKBGa2QlspKYJnkjZTmo=" crossorigin="anonymous"></script>
  <!-- owl slider -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <!-- datepicker -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>
  <!-- custom js -->
  <script src="../js/custom.js"></script>

  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"> </script>
  <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.js"></script>
  
  <script>
  // Máscara do RG
  $(document).ready(function() {
      $('#cpf').mask('000.000.000-00', {reverse: true});
      $("#contato").mask('(00) 00000-0000', {reverse: false});
      $("#celular").mask('000 00000-0000', {reverse: true});
      $('#rg').mask('00.000.000-0', {reverse: true});
  });
  </script>

  <!-- input control -->
  <script>
    $(function() {
        $('#meuDiv').hide();

        $('#select').change(function() {
            if ($(this).val() === 'outro') {
                $('#meuDiv').show();
                $('#select').hide();
            }
        });

        $('#cancel').click(function () {
            $('#select').show();
            $('#select').val('');
            $('#meuDiv').hide();
        });
    });
  </script>

</body>

</html>