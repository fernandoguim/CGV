 <?php session_start();?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
   <meta charset="utf-8">
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <!-- <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />-->
        <link href="../assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="../assets/global/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/select2/css/select2-bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="../assets/global/css/components.min.css" rel="stylesheet" id="style_components" type="text/css" />
        <link href="../assets/global/css/plugins.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN PAGE LEVEL STYLES -->
        <link href="../assets/pages/css/login-4.min.css" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="favicon.ico" /> </head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="vendors/login/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="vendors/login/font-awesome.css" rel="stylesheet">
 <link rel="shortcut icon" href="favicon.ico" />
 
   <!-- <link href="css/animate.css" rel="stylesheet">-->
    <link href="vendors/login/	style.css" rel="stylesheet">
  <title>.:: Login ::.</title>
    
    </head>      	
	<body class="gray-bg">
		<div class="row">
    <div class="middle-box loginscreen panel panel-default animated fadeInDown" style="padding-top: 0; margin-top: 8%; background-color: rgba(255, 255, 255, 0.5);">
    	<div align="center" class="animated fadeInRight">
	 	 <div class="caption modal-header">
          <h2>
            <div align="center">CGC -Controle de Gestão de Vendas</div>
          </h2>
        </div>
      </div>
     	 <div class="panel-body">
        <form class="login-form" method="post" name="logar" >
          <div class="form-group floating-label-form-group">
            <label for="user"><i class="fa fa-user"></i> Usuário</label>
            <input class="form-control" type="text" name="usuario" id="usuario" placeholder="Usuário" value="" required autofocus>
          </div>
          <div class="form-group floating-label-form-group">
            <label for="password"><i class="fa fa-lock"></i> Senha</label>
            <input class="form-control" type="password" name="pwd" id="pwd" placeholder="Senha" required>
          </div>
          <br>
          <div align="center" id="capsWarning" style="display:none; font-size: 18px"><span class="label label-danger">Caps Lock ativado!</span></div>
          <br>
          <button type="submit" class="btn block full-width m-b"  style="background-color: #0B3D86; color: #FFF;">Entrar</button>
          <?php 				
			 	require 'bdLogin/login.class.php'; 				
				$l = new Logar();
				if (isset($_POST['usuario']) && !empty($_POST['usuario'])) {
				$usuario = $_POST['usuario'];
				$pwd= $_POST['pwd'];				
				if($l->Login($usuario,$pwd)) {	  ?>
				<script type="text/javascript">window.location.href="dash"</script>				
				<?php
				} else {  ?>
				<div class="alert alert-danger showtoast" aling="center">
				Usuario não encontrado!
				</div>
				<?php
				}
				}
				
				?>

         <!-- <div class="text-center"><a href="#"><small>Esqueci minha senha</small></a></div>-->
          <p></p>
                 <div class="create-account" data-toggle="modal" data-target="#myvisualizacaocadastro" data-id="cadastro">
                    <p> Não possui Login?&nbsp; <a href="#">Cadastrar!</a></p>
                </div>
                
        </form>
      </div>
      
      <p></p>
    </div>
  </div>

  <div id="particles"></div>

  <!-- mensagem_erro_login -->
    <div class="modal fade" id="modalErroLogin" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div align="center" class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title alert alert-danger" id="myModalLabel">FALHA NA AUTENTICAÇÃO</h4>
        </div>
        <div align="center" class="modal-body">
          <h4></h4>              
        </div>
      </div>
    </div>
  </div>

	 
		<div align="center" class="animated fadeInRight">
			<br>
		<a href="https://fcgsolucoes.com.br" class="instagram-login">FCGSOLUCOES.COM.BR</a>
		</div>-
		
 	 <?php if($_GET['login']=="false"){?> 
  
		<script>
		$(document).ready(function() {
 
		$('#modalErroLogin').modal('show');

		
		})
		</script>
		<?php }?>
			<!-- mensagem_erro_login -->
					<div class="modal fade" id="modalErroLogin" tabindex="-1"
				role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-sm">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal"
								aria-hidden="true">&times;</button>
							<h4 align="center" class="modal-title alert alert-danger" id="myModalLabel">FALHA NA AUTENTICAÇÃO</h4>
						</div>
						<div align="center" class="modal-body">
							<h4>Verifique seu usuário e senha!</h4>							
						</div>
						<!-- /.modal-body-->
					</div>
					<!-- /.modal-content -->
				</div>
				<!-- /.modal-dialog -->
			</div>
			
		
            
            
  <!-- Mainly scripts -->  
  <script src="vendors/login/jquery-3.1.1.min.js"></script>
  <script src="vendors/login/bootstrap.min.js"></script>
  
  <!-- jQuery CapsLock Plugin-->
  <script src="vendors/login/jquery.capslockstate.js"></script>

  <!-- Custom and plugin javascript -->
  <script src="vendors/login/inspinia.js"></script>
  <script src="vendors/login/login.js"></script>
	<?php if($_REQUEST['login']=="false"){ ?> 
		<script>
		$(document).ready(function() { 
	 		$('#modalErroLogin').modal('show')
		})
		</script>
 	<?php }?>
 	
 	
  <!-- MOTAL Pendentes-->
<div class="modal inmodal" id="myvisualizacaocadastro" tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-dialog modal-lg">
<div class="modal-content animated pulse">
<!--tipos de Motal(separado por -) modal-content animated flipInY - modal-content  modal-content animated bounceInRight  -->

<div class="modal-header">
<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
 <h6 class="modal-title">Cadastro de usuários</h6> 
<small class="font-bold"> </small>
</div>
<div class="modal-body" >
<div class="x_panel">
                <div class="x_title">
				     	 <form class="register-form" method="post" name="cadastro">
                <h3>Sign Up</h3>
                <p>Favor preencher com dados reais:  </p>
                <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9">Full Name</label>
                    <div class="input-icon">
                        <i class="fa fa-font"></i>
                        <input class="form-control placeholder-no-fix" type="text" placeholder="nome" name="cnome" id="cnome"/> </div>
                </div>
                <div class="form-group">
                    <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
                    <label class="control-label visible-ie8 visible-ie9">Email</label>
                    <div class="input-icon">
                        <i class="fa fa-envelope"></i>
                        <input class="form-control placeholder-no-fix" type="text" placeholder="Email" name="cemail" id="cemail"/> </div>
                </div>
                 <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9">Address</label>
                    <div class="input-icon">
                    <i class="fa fa-check"></i>   <select class="form-control placeholder-no-fix" name="cargo" id="cargo" placeholder="Cargo">
                            <option value="">Selecionar</option>
                            <option value="BO">BO</option>
                            <option value="VENDEDOR">VENDEDOR</option>
                            <option value="SUPERVISOR">SUPERVISOR</option>
                             <option value="GERENTE">GERENTE</option>
                            </select>
            </div>
            </div>
            <br>
                <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9">City/Town</label>
                    <div class="input-icon">
                        <i class="fa fa-location-arrow"></i>
                        <input class="form-control placeholder-no-fix" type="text" placeholder="UF" name="cuf" id="cuf"/> </div>
                </div>
                
                <p> Dados de Login</p>
                <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9">Username</label>
                    <div class="input-icon">
                        <i class="fa fa-user"></i>
                        <input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Username" name="username" id="username"/> </div>
                </div>
                <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9">Password</label>
                    <div class="input-icon">
                        <i class="fa fa-lock"></i>
                        <input class="form-control placeholder-no-fix" type="password" autocomplete="off" id="register_password" placeholder="Senha" name="password" id="password"/> </div>
                </div>
                <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9">Re-type Your Password</label>
                    <div class="controls">
                        <div class="input-icon">
                            <i class="fa fa-check"></i>
                            <input class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="Digitar de novo Senha" name="rpassword" id="rpassword"/> </div>
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="mt-checkbox mt-checkbox-outline">
                        <input type="checkbox" name="tnc" /> I agree to the
                        <a href="javascript:;">Terms of Service </a> &
                        <a href="javascript:;">Privacy Policy </a>
                        <span></span>
                    </label>
                    <div id="register_tnc_error"> </div>
                </div>
                <div class="form-actions">
                    <button id="register-back-btn" type="button" class="btn red btn-outline"> Back </button>
                    <button type="submit" id="register-submit-btn" class="btn green pull-right"> Sign Up </button>
                </div>
 <?php 
 	require 'bdLogin/select.class.php'; 
$l = new selectoi();
  
if (isset($_POST['username']) && !empty($_POST['username'])) {
    $username= addslashes($_POST['username']);
    $password= addslashes($_POST['password']);
     $cnome= addslashes($_POST['cnome']);
      $cemail= addslashes($_POST['cemail']);
       $cargo= addslashes($_POST['cargo']);
        $cuf= addslashes($_POST['cuf']);
         $matricula= rand().date('dHi'); #addslashes($_POST['matricula']);
      
    $l->addcadastro($username,$password,$cnome, $cemail,$cargo,$cuf,$matricula);// está enviando para a classe 

           
   $msgg= "<div class='alert alert-success'>Cadastro realizado com sucesso!!!</div>";
   
   ?>
	   <script>
		window.setTimeout(function() {
	    	window.location = '';
	  	}, 3000);
	</script>
<?php // depois de 3 segundo redireciona
	echo $msgg; //posta a ensagem
}
?>

            </form>
            <!-- END REGISTRATION FORM -->
				       
                    </div>
                    </div>
 	                </div>
                    </div>
                    </div>
                    </div>	
  </body>
</html>
