<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Register</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url()?>/assets/css/bootstrap.min.css">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url()?>/assets/css/font-awesome.min.css">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url()?>/assets/css/owl.carousel.css">
    <link rel="stylesheet" href="<?= base_url()?>/assets/css/owl.theme.css">
    <link rel="stylesheet" href="<?= base_url()?>/assets/css/owl.transitions.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url()?>/assets/css/animate.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url()?>/assets/css/normalize.css">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url()?>/assets/css/main.css">
    <!-- morrisjs CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url()?>/assets/css/morris<?= base_url()?>/assets/js/morris.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url()?>/assets/css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- metisMenu CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url()?>/assets/css/metisMenu/metisMenu.min.css">
    <link rel="stylesheet" href="<?= base_url()?>/assets/css/metisMenu/metisMenu-vertical.css">
    <!-- calendar CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url()?>/assets/css/calendar/fullcalendar.min.css">
    <link rel="stylesheet" href="<?= base_url()?>/assets/css/calendar/fullcalendar.print.min.css">
    <!-- forms CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url()?>/assets/css/form/all-type-forms.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url()?>/assets/style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url()?>/assets/css/responsive.css">
    <!-- modernizr JS
		============================================ -->
    <script src="<?= base_url()?>/assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    <div class="color-line"></div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="back-link back-backend">
                    <a href="<?=base_url('/')?>" class="btn btn-primary">Voltar</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12"></div>
            <div class="col-md-6 col-md-6 col-sm-6 col-xs-12">
                <div class="text-center custom-login">
                    <h3 class=" text-white" >Registrar|SIGES</h3>
                    <?php if(!empty($mensagem)){?>
                      <h4 class=" alert text-center " style="color: <?=$cor??''?>;"><?=$mensagem??''?></h4>

                      <?php }?>
                    
                </div>
                <div class="hpanel">
                    <div class="panel-body">
                        
                            <?=form_open('index/registrar')?>

                            <div class="row">
                                <div class="form-group col-lg-12">
                                    <label>Seu Nome </label>
                                    <input class="form-control" placeholder="Seu nome"  required="" value="<?=$nome??''?>" name="nome" id="nome" class="form-control">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Sua senha </label>
                                    <input type="text" class="form-control" placeholder="******" required="" value="" name="senha" id="senha" class="form-control">
                                </div>
                               
                                <div class="form-group col-lg-6">
                                    
                                    <label>Seu  email</label>
                                    <input class="form-control"  placeholder="example@gmail.com"  required="" value="<?=$email??''?>" name="email" id="email" class="form-control" >
                                </div>
                                <div class="form-group col-lg-12">
                                    
                                    <label>Seu  telefone</label>
                                    <input class="form-control"  placeholder="Telefone"  required="" value="<?=$telefone??''?>" name="telefone" id="telefone" class="form-control" >
                                </div>
                                <div class="form-group col-lg-12">
                                    
                                    <label>Seu BI</label>
                                    <input   placeholder="Número do BI"   name="bi" id="bi" class="form-control" >
                                </div>
                                <div class="form-group col-lg-12">
                                    
                                    <label>Seu NIF</label>
                                    <input   placeholder="Número do NIF"    name="nif" id="nif" class="form-control" >
                                </div>
                                

                        <div class="form-group col-lg-12">
                        <select class="form-control required" name="tipo_acesso">
													<option >Selecione tipo de conta</option>
													<option  value="Cliente">Cliente</option>
													<option value="Admin">Admin</option>
										
												</select>
                                </div>

                             
                               
                            </div>

                            <div class="text-center">
                                <button type="submit" class="btn btn-success loginbtn col-md-4"  >Salvar</button>
                                
                            </div>
                            
                            <?=form_close()?>
                         
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12"></div>
        </div>
       
    </div>

    <!-- jquery
		============================================ -->
    <script src="<?= base_url()?>/assets/js/vendor/jquery-1.11.3.min.js"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="<?= base_url()?>/assets/js/bootstrap.min.js"></script>
    <!-- wow JS
		============================================ -->
    <script src="<?= base_url()?>/assets/js/wow.min.js"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="<?= base_url()?>/assets/js/jquery-price-slider.js"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="<?= base_url()?>/assets/js/jquery.meanmenu.js"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="<?= base_url()?>/assets/js/owl.carousel.min.js"></script>
    <!-- sticky JS
		============================================ -->
    <script src="<?= base_url()?>/assets/js/jquery.sticky.js"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="<?= base_url()?>/assets/js/jquery.scrollUp.min.js"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="<?= base_url()?>/assets/js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="<?= base_url()?>/assets/js/scrollbar/mCustomScrollbar-active.js"></script>
    <!-- metisMenu JS
		============================================ -->
    <script src="<?= base_url()?>/assets/js/metisMenu/metisMenu.min.js"></script>
    <script src="<?= base_url()?>/assets/js/metisMenu/metisMenu-active.js"></script>
    <!-- tab JS
		============================================ -->
    <script src="<?= base_url()?>/assets/js/tab.js"></script>
    <!-- icheck JS
		============================================ -->
    <script src="<?= base_url()?>/assets/js/icheck/icheck.min.js"></script>
    <script src="<?= base_url()?>/assets/js/icheck/icheck-active.js"></script>
    <!-- plugins JS
		============================================ -->
    <script src="<?= base_url()?>/assets/js/plugins.js"></script>
    <!-- main JS
		============================================ -->
    <script src="<?= base_url()?>/assets/js/main.js"></script>
</body>

</html>