<?php
session_start();

require("parameters.php");

//gestion de la langue à afficher
require("assets/php/decide-lang.php");

//gestion du badge pour les marchés
require("assets/php/fonctions.php");
?>
<!DOCTYPE html>
<html lang="<?php echo $lang; ?>">
    <head>
        <meta charset="utf-8">
        <meta content="IE=edge" http-equiv="X-UA-Compatible" >
        <meta content="<?php echo TXT_HEAD_DESCRIPTION; ?>" name="description">
        <meta content="<?php echo TXT_HEAD_KEYWORDS_COMMUN; ?>, <?php echo TXT_HEAD_KEYWORDS_BY_LANG; ?>" name="keywords">
        <meta content="<?php echo $AUTEUR_SITE; ?>" name="author">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php echo TXT_HEAD_TITLE; ?></title>
        <link rel="icon" href="<?php echo BASE_HTTP; ?>assets/img/favicon.ico">
        <script src="https://www.google.com/recaptcha/api.js?hl=<?php echo $lang; ?>" async defer></script>
        <link href="<?php echo BASE_HTTP; ?>bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo BASE_HTTP; ?>font-awesome-4.5.0/css/font-awesome.min.css" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo BASE_HTTP; ?>assets/css/style.css" media="screen"/>
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body id="page-top"  data-spy="scroll" data-target=".navbar" >
        <?php include_once("assets/php/analyticstracking.php") ?>
        <div class="container-fluid">
            <header>
                <!-- Navigation
                ================================================== -->
                <nav class="navbar navbar-default navbar-fixed-top">
				    <div class="container">
				        <div class="navbar-header hidden-sm">
					       <button type="button" data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle">
					           <span class="icon-bar"></span>
					           <span class="icon-bar"></span>
					           <span class="icon-bar"></span>
					       </button>
					       <a href="#page-top" class="navbar-brand"><?php echo TXT_NAV_TITLE; ?></a>
				        </div>
				        <div class="collapse navbar-collapse">
                            <ul class="nav navbar-nav">
                                <li class="hidden liSlide"><a href="#page-top"></a></li>
                                <li class="liSlide active"><a href="#accueil" class=""><i class="fa fa-home"></i> <?php echo TXT_NAV_HOME; ?></a></li>
                                <li class="liSlide"><a href="#presentation"><i class="fa fa-user"></i> <?php echo TXT_NAV_WHO; ?></a></li>
                                <li class="liSlide"><a href="#marches"><i class="fa fa-map-marker"></i> <?php echo TXT_NAV_WHERE; ?></a></li>
                                <li class="liSlide"><a href="#contact"><i class="fa fa-envelope-o"></i> <?php echo TXT_NAV_CONTACT; ?></a></li>
                            </ul>
                            <ul class="nav navbar-nav navbar-right">
                            <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-globe"></i>
                                <?php echo TXT_NAV_LANGUES; ?> <span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                <li><a href="<?php echo BASE_HTTP; ?>"><img src="<?php echo BASE_HTTP; ?>assets/img/fr.png" alt="<?php echo TXT_NAV_FRANCAIS; ?>" ><small><?php echo TXT_NAV_FRANCAIS; ?></small></a></li>
                                <li><a href="<?php echo BASE_HTTP; ?>en/"><img src="<?php echo BASE_HTTP; ?>assets/img/en.png" alt="<?php echo TXT_NAV_ANGLAIS; ?>" ><small><?php echo TXT_NAV_ANGLAIS; ?></small></a></li>
                                <li><a href="<?php echo BASE_HTTP; ?>de/"><img src="<?php echo BASE_HTTP; ?>assets/img/de.png" alt="<?php echo TXT_NAV_ALLEMAND; ?>" ><small><?php echo TXT_NAV_ALLEMAND; ?></small></a></li>
                                <li><a href="<?php echo BASE_HTTP; ?>es/"><img src="<?php echo BASE_HTTP; ?>assets/img/es.png" alt="<?php echo TXT_NAV_ESPAGNOL; ?>" ><small><?php echo TXT_NAV_ESPAGNOL; ?></small></a></li>
                              </ul>
                            </li>
                          </ul>
                        </div>
                    </div>
                </nav>
            </header>
                <!-- Corps de page
                ================================================== -->
            <div class="container">
                <div class="jumbotron row" id="accueil">
                    <section class="logoTitre row">
                        <img src="<?php echo BASE_HTTP; ?>assets/img/LogoLaFermeDuSouchet.gif" class="col-lg-3 col-sm-4 logo img-responsive center-block" alt="Logo <?php echo TXT_NAV_TITLE; ?>" title="Logo <?php echo TXT_NAV_TITLE; ?>">
                        <h1 class="col-lg-9 col-sm-8 text-center"><?php echo TXT_ACCUEIL_TITRE; ?></h1>
                    </section>
                    <section class="col-sm-12 col-md-7">
                    <p class="well">
                    <?php echo TXT_ACCUEIL_INTRO; ?>
                    </p>
                    </section>
                    <section  class="text-success col-sm-12 col-md-5">
                    <blockquote class="text-success">
                        <i class="fa fa-quote-left fa-lg fa-pull-left fa-border"></i>
                        <?php echo TXT_ACCUEIL_CITATION; ?>
                        <i class="fa fa-quote-right fa-lg fa-pull-right pull-right fa-border"></i>
                        <small class="pull-right"><?php echo TXT_ACCUEIL_SIGNATURE_CITATION; ?></small>
                    </blockquote>
                    </section>
                </div>

                <div class="jumbotron row" id="presentation">
                    <h1 class="text-center"><?php echo TXT_PREZ_TITRE; ?></h1>
                    <!-- Caroussel
    ================================================== -->

	<div id="carousel" class="carousel thumbnail slide col-sm-12 col-md-7" >
		<ol class="carousel-indicators">
			<li data-target="#carousel" data-slide-to="0" class="active"></li>
			<li data-target="#carousel" data-slide-to="1"></li>
			<li data-target="#carousel" data-slide-to="2"></li>
			<li data-target="#carousel" data-slide-to="3"></li>
            <li data-target="#carousel" data-slide-to="4"></li>
		</ol>
		<div class="carousel-inner">
			<div class="item active"> <img src="<?php echo BASE_HTTP; ?>assets/img/serresExterieurOpti.JPG" alt="<?php echo TXT_PREZ_CAROUSSEL_1; ?>"><h4 class="carousel-caption"><?php echo TXT_PREZ_CAROUSSEL_1; ?></h4></div>
            <div class="item"> <img src="<?php echo BASE_HTTP; ?>assets/img/jumentsRolandOpti.JPG" alt="<?php echo TXT_PREZ_CAROUSSEL_2; ?>"><h4 class="carousel-caption"><?php echo TXT_PREZ_CAROUSSEL_2; ?></h4></div>
			<div class="item"> <img src="<?php echo BASE_HTTP; ?>assets/img/rangsSaladesOpti.jpg" alt="<?php echo TXT_PREZ_CAROUSSEL_3; ?>"><h4 class="carousel-caption"><?php echo TXT_PREZ_CAROUSSEL_3; ?></h4></div>
			<div class="item"> <img src="<?php echo BASE_HTTP; ?>assets/img/serreCibouletteOpti.jpg" alt="<?php echo TXT_PREZ_CAROUSSEL_4; ?>"><h4 class="carousel-caption"><?php echo TXT_PREZ_CAROUSSEL_4; ?></h4></div>
			<div class="item"> <img src="<?php echo BASE_HTTP; ?>assets/img/serreTomatesOpti.jpg" alt="<?php echo TXT_PREZ_CAROUSSEL_5; ?>"><h4 class="carousel-caption"><?php echo TXT_PREZ_CAROUSSEL_5; ?></h4></div>
		</div>
		<a class="left carousel-control" href="#carousel" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left"></span>
		</a>
		<a class="right carousel-control" href="#carousel" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right"></span>
		</a>
	</div>

                    <section class="col-sm-12 col-md-5">
                    <p class="well"><?php echo TXT_PREZ_PARAGRAPHE; ?></p>
                        </section>
                </div>

                <div class="jumbotron row" id="marches">
                    <h1 class="text-center"><?php echo TXT_MARCHE_TITRE; ?></h1>
                    <section class="col-xs-12 col-sm-5 col-md-6">
                    <p class="well "><?php echo TXT_MARCHE_PARAGRAPHE; ?></p>
                    </section>
                    <section class="col-xs-12 col-sm-7 col-md-6">
                        <div class="panel panel-success">
                            <table class="table table-striped table-condensed">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><?php echo TXT_MARCHE_TITRE_TABLEAU; ?></h3>
                                </div>
                                <thead>
                                    <tr>
                                        <th><i class="fa fa-calendar"></i> <?php echo TXT_MARCHE_JOUR; ?></th>
                                        <th><i class="fa fa-map-marker"></i> <?php echo TXT_MARCHE_VILLE; ?></th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><span class="jourDeLaSemaine"><?php echo TXT_MARCHE_MERCREDI; ?></span><?php echo alertDay('3') ; ?></td>
                                        <td><?php echo TXT_MARCHE_VILLE_MERCREDI; ?></td>
                                        <td>
                                            <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#modalMerdrignac"><?php echo TXT_MARCHE_PLAN; ?></button>
                                            <!-- Modal -->
                                            <div class="modal fade" id="modalMerdrignac" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                              <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                  <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="<?php echo TXT_ML_FERMER; ?>"><span aria-hidden="true">&times;</span></button>
                                                    <h4 class="modal-title" id="myModalLabel"><i class="fa fa-map-marker"></i> <?php echo TXT_MARCHE_VILLE_MERCREDI; ?> (<?php echo TXT_MARCHE_MERCREDI; ?>)</h4>
                                                  </div>
                                                  <div class="modal-body">
                                                    <p><?php echo TXT_MARCHE_MODAL_MERCREDI; ?></p>
                                                      <hr>
                                                      <iframe class="col-xs-12 center-block" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d10639.55345260476!2d-2.4170427!3d48.1895024!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x480e37d877425c7b%3A0x40ca5cd36e63220!2sMerdrignac!5e0!3m2!1sfr!2sfr!4v1459415837373" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                                                  </div>
                                                  <div class="modal-footer" style="margin-top: 460px;">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo TXT_ML_FERMER; ?></button>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                            <!-- Fin Modal -->
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="jourDeLaSemaine"><?php echo TXT_MARCHE_VENDREDI; ?></span><?php echo alertDay('5') ; ?></td>
                                        <td><?php echo TXT_MARCHE_VILLE_VENDREDI; ?></td>
                                        <td>
                                            <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#modalStPierre"><?php echo TXT_MARCHE_PLAN; ?></button>
                                            <!-- Modal -->
                                            <div class="modal fade" id="modalStPierre" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                              <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                  <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="<?php echo TXT_ML_FERMER; ?>"><span aria-hidden="true">&times;</span></button>
                                                    <h4 class="modal-title" id="myModalLabel"><i class="fa fa-map-marker"></i> <?php echo TXT_MARCHE_VILLE_VENDREDI; ?> (<?php echo TXT_MARCHE_VENDREDI; ?>)</h4>
                                                  </div>
                                                  <div class="modal-body">
                                                    <p><?php echo TXT_MARCHE_MODAL_VENDREDI; ?></p>
                                                      <hr>
                                                      <iframe class="col-xs-12 center-block" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29935.72902737861!2d-1.9150724095299274!3d48.457112349196144!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x480e8de98864ae8f%3A0x705982c00329eea!2sSaint-Pierre-de-Plesguen!5e0!3m2!1sfr!2sfr!4v1459419470915" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                                                    </div>
                                                  <div class="modal-footer" style="margin-top: 460px;">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo TXT_ML_FERMER; ?></button>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                            <!-- Fin Modal -->
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="jourDeLaSemaine"><?php echo TXT_MARCHE_SAMEDI; ?></span><?php echo alertDay('6') ; ?></td>
                                        <td><?php echo TXT_MARCHE_VILLE_SAMEDI; ?></td>
                                        <td>
                                            <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#modalEvran"><?php echo TXT_MARCHE_PLAN; ?></button>
                                            <!-- Modal -->
                                            <div class="modal fade" id="modalEvran" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                              <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                  <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="<?php echo TXT_ML_FERMER; ?>"><span aria-hidden="true">&times;</span></button>
                                                    <h4 class="modal-title" id="myModalLabel"><i class="fa fa-map-marker"></i> <?php echo TXT_MARCHE_VILLE_SAMEDI; ?> (<?php echo TXT_MARCHE_SAMEDI; ?>)</h4>
                                                  </div>
                                                  <div class="modal-body">
                                                    <p><?php echo TXT_MARCHE_MODAL_SAMEDI; ?></p>
                                                      <hr><iframe class="col-xs-12 center-block" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d10599.97469232392!2d-1.984916!3d48.3798578!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x480e8b53122d0455%3A0x60cbf728c9a60b9d!2zw4l2cmFu!5e0!3m2!1sfr!2sfr!4v1459418397679" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                                                   </div>
                                                  <div class="modal-footer" style="margin-top: 460px;">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo TXT_ML_FERMER; ?></button>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                            <!-- Fin Modal -->
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="jourDeLaSemaine"><?php echo TXT_MARCHE_DIMANCHE; ?></span><?php echo alertDay('7') ; ?></td>
                                        <td><?php echo TXT_MARCHE_VILLE_DIMANCHE; ?></td>
                                        <td>
                                            <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#modalPloufragan"><?php echo TXT_MARCHE_PLAN; ?></button>
                                            <!-- Modal -->
                                            <div class="modal fade" id="modalPloufragan" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                              <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                  <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="<?php echo TXT_ML_FERMER; ?>"><span aria-hidden="true">&times;</span></button>
                                                    <h4 class="modal-title" id="myModalLabel"><i class="fa fa-map-marker"></i> <?php echo TXT_MARCHE_VILLE_DIMANCHE; ?> (<?php echo TXT_MARCHE_DIMANCHE; ?>)</h4>
                                                  </div>
                                                  <div class="modal-body">
                                                    <p><?php echo TXT_MARCHE_MODAL_DIMANCHE; ?></p>
                                                      <hr>
                                                      <iframe class="col-xs-12 center-block" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d5288.828221723151!2d-2.7996561!3d48.4869507!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4811e29d3fddc5b1%3A0xdae6e65d869bd05f!2sPloufragan!5e0!3m2!1sfr!2sfr!4v1459418458241" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                                                  </div>
                                                  <div class="modal-footer" style="margin-top: 460px;">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo TXT_ML_FERMER; ?></button>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                            <!-- Fin Modal -->
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </section>
                    <section class="col-lg-4 col-md-5 col-sm-12">
                    <img src="<?php echo BASE_HTTP; ?>assets/img/marcheRolandOpti.jpg" class="thumbnail" alt="<?php echo TXT_MARCHE_LABEL_PHOTO; ?>" title="<?php echo TXT_MARCHE_LABEL_PHOTO; ?>">
                    </section>
                        <section class="col-lg-8 col-md-7 col-sm-12">
                    <p class="well"><?php echo TXT_MARCHE_LIVRAISON; ?></p>
                    </section>
                </div>

                <div class="jumbotron row" id="contact">
                    <h1 class="text-center"><?php echo TXT_CONTACT_TITRE; ?></h1>
                    <?php if(array_key_exists('errors',$_SESSION)): ?>
                  <div class="alert alert-danger fade-in flash">
                  <?= implode('<br>', $_SESSION['errors']); ?>
                  </div>
                  <?php endif; ?>
                  <?php if(array_key_exists('success',$_SESSION)): ?>
                  <div class="alert alert-success fade-in flash"><?php echo TXT_CONTACT_FLASHBAG_OK; ?></div>
                  <?php endif; ?>
                <section class="col-md-8">
                    <form class=" well" action="<?php echo BASE_HTTP; ?>assets/php/formulaire.php" method="POST">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="inputname"><?php echo TXT_CONTACT_FORM_NOM; ?></label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                        <input required type="text" name="name" placeholder="<?php echo TXT_CONTACT_FORM_NOM; ?>" class="form-control" id="inputname" value="<?php echo isset($_SESSION['inputs']['name'])? $_SESSION['inputs']['name'] : ''; ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="inputtel"><?php echo TXT_CONTACT_FORM_TEL; ?></label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-phone"></i></div>
                                        <input required type="tel" name="tel" placeholder="<?php echo TXT_CONTACT_FORM_TEL; ?>"class="form-control" id="inputtel" value="<?php echo isset($_SESSION['inputs']['tel'])? $_SESSION['inputs']['tel'] : ''; ?>">
                                    </div>
                                </div><!--/*.form-group-->
                            </div><!--/*.col-md-6-->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="inputemail"><?php echo TXT_CONTACT_FORM_MAIL; ?></label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-envelope"></i></div>
                                        <input required type="email" name="email" placeholder="<?php echo TXT_CONTACT_FORM_MAIL; ?>" class="form-control" id="inputemail" value="<?php echo isset($_SESSION['inputs']['email'])? $_SESSION['inputs']['email'] : ''; ?>">
                                    </div>
                                </div><!--/*.form-group-->
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="inputmessage"><?php echo TXT_CONTACT_FORM_MESSAGE; ?></label>
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-pencil"></i></div>
                                        <textarea required id="inputmessage" name="message" placeholder="<?php echo TXT_CONTACT_FORM_MESSAGE; ?>" class="form-control"><?php echo isset($_SESSION['inputs']['message'])? $_SESSION['inputs']['message'] : ''; ?></textarea>
                                    </div>
                                </div><!--/*.form-group-->
                            </div><!--/*.col-md-12-->
                            <div id = "ReCaptcha" class="g-recaptcha form-group col-sm-6" data-sitekey="<?php echo $siteKey; ?>"></div>
                            <!--/*.col-md-12-->
                            <div class="col-sm-6">
                                <button type='submit' class='btn btn-success pull-right'><?php echo TXT_CONTACT_FORM_ENVOYER; ?></button>
                            </div><!--/*.col-md-12-->
                        </div><!--/*.row-->
                    </form>
                </section>
                <section class="col-md-4 col-sm-6">
         <img src="<?php echo BASE_HTTP; ?>assets/img/contactRolandOpti.jpg" class="thumbnail" alt="<?php echo TXT_CONTACT_LABEL_PHOTO; ?>" title="<?php echo TXT_CONTACT_LABEL_PHOTO; ?>">
        </section>
        <section class="col-md-4 col-sm-6">
          <address class="thumbnail"><?php echo TXT_CONTACT_ADRESSE; ?></address>
        </section>

                </div>
            </div>

            <!-- Pied de page
            ================================================== -->
            <footer class="container well">
                <div class="center-block">
                    <i class="fa fa-copyright"></i> La ferme du Souchet | 2016 | <a data-toggle="modal" href="#" data-target="#infoLegales"><?php echo TXT_ML_TITRE_BTN; ?></a>
                </div>

                <!-- Modal Mentions légales -->
                <div class="modal fade" id="infoLegales" tabindex="-1" role="dialog" aria-labelledby="<?php echo TXT_ML_TITRE_MODALE; ?>">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h4 class="modal-title" id="MentionsLegales"><?php echo TXT_ML_TITRE_MODALE; ?></h4>
                      </div>
                      <div class="modal-body">
                          <p class="well"><?php echo TXT_ML_PARAGRAPHE; ?></p>
                          <p>
                              <i class="fa fa-angle-double-right"></i>  <strong><?php echo TXT_ML_RESPONSABLE; ?> :</strong> M. URVOY Roland, Joseph.<br />
                              <i class="fa fa-angle-double-right"></i>  <strong><?php echo TXT_ML_SIEGE; ?> :</strong> Le souchet 22230 Saint-Vran, France.<br />
                              <i class="fa fa-angle-double-right"></i>  <strong><?php echo TXT_ML_ACTIVITE; ?> :</strong> <?php echo TXT_ML_ACTIVITE_DETAIL; ?><br />
                              <i class="fa fa-angle-double-right"></i>  <strong><?php echo TXT_ML_TEL; ?> :</strong> <?php echo TXT_ML_TEL_DETAIL; ?><br />
                              <i class="fa fa-angle-double-right"></i>  <strong><?php echo TXT_ML_SIRET; ?> :</strong> 49249219400021<br />
                              <i class="fa fa-angle-double-right"></i>  <strong><?php echo TXT_ML_TVA; ?> :</strong> FR 45492492194<br />
                              <i class="fa fa-angle-double-right"></i> <strong><?php echo TXT_ML_HEBERGEUR; ?> :</strong> <?php echo $HEBERGEMENT_SITE; ?> <br />
                              <i class="fa fa-angle-double-right"></i>  <strong><?php echo TXT_ML_REALISATION; ?> :</strong> <?php echo $AUTEUR_SITE_MENTION_LEGALE; ?>
                          </p>
                      </div>
                      <div class="modal-footer">
                        <button id="mention" type="button" class="btn btn-default" data-dismiss="modal"><?php echo TXT_ML_FERMER; ?></button>
                      </div>
                    </div>
                  </div>
                </div>
            </footer>

    <!-- jQuery -->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <!-- Javascript de Bootstrap -->
            <script src="<?php echo BASE_HTTP; ?>bootstrap/js/bootstrap.min.js"></script>
	<!-- Javascript perso -->
            <script src="<?php echo BASE_HTTP; ?>assets/js/navigation.js"></script>
        </div>
    </body>
</html>
<?php
    unset($_SESSION['inputs']); // on nettoie les données précédentes
    unset($_SESSION['success']);
    unset($_SESSION['errors']);