<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Sempre gostei da área de informática antes mesmo de ter noção de que seria rentável, quando apendi php percebi que está seria minha profissão e mantenho um sonho de criar uma nova tecnologia revolucionária.">
    <meta name="author" content="TAFFAREL OLIVEIRA">
    <meta name="keywords" content="web design, web development, freelancer, jobs, agências de publicidade, desenvolvedor front-end freelancer, front-end, css, html, css3, html5, back-end, javascript, jquery"/>
    
    <link rel="shortcut icon" type="image/png" href="img/favicon01.png"/>
    <title>ENTRE EM CONTATO</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/portfolio-item.css" rel="stylesheet">
    <link href='css/style.css' rel='stylesheet'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>






<body>
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              
                <a class="navbar-brand" href="#"><span id='branco'>TAFFAREL OLIVEIRA</span></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
           
               
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>


    <div class='container'>


    <div class='rows'>
         <div class='col-lg-8'>
         <?php
          $var2 =0;
          @$var2 = $_GET['var'];

         if($var2 == 'ERROR'){
            echo "<div class='alert  alert-danger alert-dismissable'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'> &times; </button> Seu E-mail<strong> não pode ser enviado</strong> </div><br/> <br/>";

         }
         elseif($var2 == 'success'){
             echo "<div class='alert alert-success alert-dismissable'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'> &times; </button> Seu E-mail foi enviado com <strong>Sucesso</strong> </div><br/>";
         }
         ?>
        
         <fieldset>
         <legend>CONTATO</legend><br/>
             <form action='enviarEmail.php' method='post'>
                         <div class="form-group">
                              <label for="exampleInputName2">Nome</label>
                              <input type="text" class="form-control" name='nome' id="exampleInputName2" placeholder="Seu nome">
                            </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">E-mail</label>
                        <input type="email" class="form-control" name='email' id="exampleInputEmail1" placeholder="Um E-mail válido">
                      </div>

                     
                        <div class="form-group">
                              <label for="exampleInputName2">Assunto</label>
                              <input type="text" class="form-control" name='assunto' id="exampleInputName2" placeholder="O que você deseja">
                            </div>


                    <div class="form-group"> 
                       
                           <label for=textarea>Mensagem</label><textarea class="form-control" name='mensagem' rows="3" placeholder='Sua mensagem' id='textarea'></textarea>
                     
                           
                      </div>
                      
                       <div class="form-group">

                                  <div class="col-sm-offset-2 col-sm-10">
                                       <button type="submit" class="btn btn-success active">Enviar</button>
                                       <a href='index.html' class='btn btn-warning'>Voltar</a>
                                  </div>
                                  <br/>
                         </div>
         </form>
              
      </fieldset>


    </div>
    </div>
    <div class='container'>
      <div class='row'>
      <hr>
      </div>
         </div>






     <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
