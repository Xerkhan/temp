<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Crecerem World</title>
  <link href="<?php echo base_url('/assets/css/bootstrap.min.css'); ?>" rel="stylesheet">
  <link href="<?php echo base_url('/assets/css/animate.min.css'); ?>" rel="stylesheet"> 
  <link href="<?php echo base_url('/assets/css/font-awesome.min.css'); ?>" rel="stylesheet"> 
  <link href="<?php echo base_url('/assets/css/lightbox.css'); ?>" rel="stylesheet"> 
  <link href="<?php echo base_url('/assets/css/main.css'); ?>" rel="stylesheet"> 
  <link id="css-preset" href="<?php echo base_url('/assets/css/presets/preset1.css'); ?>" rel="stylesheet"> 
  <link href="<?php echo base_url('/assets/css/responsive.css'); ?>" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <!--el color verde es #168c3b-->

  
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
  <link rel="shortcut icon" href="images/favicon.ico">

</head><!--/head-->

<body>

  <!--.preloader-->
  <div class="preloader"> <i class="fa fa-circle-o-notch fa-spin"></i></div>
  <!--/.preloader-->
  <header id="home">
    <div id="home-slider" class="carousel slide carousel-fade" data-ride="carousel">

      <div class="carousel-inner">

<?php $i=0; $class=""; foreach($home as $hom) {
        if($i==0) { $class = "active"; } else { $class = ""; } ?>
        <div class="item <?php echo $class; ?>" style="background-image: url(<?php echo base_url($hom['url_image']); ?>)">
          <div class="caption">
            <h1 class="animated fadeInLeftBig"> <span><?php echo $hom['titulo']; ?></span></h1>
            <p class="animated fadeInRightBig"><?php echo $hom['mensaje']; ?></p>
            <a data-scroll class="btn btn-start animated fadeInUpBig" data-toggle="modal" data-target="#Modalreg">Ingresa</a>
          </div>
        </div>
      <?php $i++; } ?>
        </div>
       <a class="left-control" href="#home-slider" data-slide="prev"><i class="fa fa-angle-left"></i></a>
      <a class="right-control" href="#home-slider" data-slide="next"><i class="fa fa-angle-right"></i></a>

      <a id="tohash" href="#services"><i class="fa fa-angle-down"></i></a>
        </div>
                        

    </div><!--/#home-slider-->

    <div class="main-nav">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">
            <h1><img class="img-responsive" src="<?php echo base_url("/assets/images/logo.png"); ?>" alt="logo"></h1>
          </a>           
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right" style="cursor: pointer;">
            <li class="scroll"><a href="#home">Inicio</a></li>
            <li class="scroll"><a href="#aprende">Conoce más</a></li>
            <li class="scroll"><a href="#curso">Cursos</a></li>
            <li class="scroll" data-toggle="modal" data-target="#modalcontacto"><a>Contactanos</a></li>
            <li class="scroll"><a data-toggle="modal" data-target="#modaling">Ingresa</a></li>




          </ul>
        </div>
      </div>
    </div><!--/#main-nav-->
  </header><!--/#home-->



  <section id="aprende">
  <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <div class="about-info wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
            <h2>Aprende mas</h2>
            <p>Te resolvemos las preguntas que podrian existir en caso de que no conozcas de lo que ya sabes</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio et porro, sunt cum fuga hic temporibus. Dicta quis nam incidunt accusantium iusto, natus autem? Delectus, eos, quasi! Ratione, rerum, maiores.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint enim beatae sunt, cumque eius distinctio debitis in blanditiis sed amet. A odio mollitia sint pariatur voluptates vero delectus libero deserunt!</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi, quas repellat eligendi atque soluta totam, magnam laboriosam aspernatur architecto, saepe natus quae. Dolore earum illum provident sit? Sed, reiciendis, harum!</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi, quaerat, repellendus. Doloribus, dolorem beatae praesentium reiciendis aspernatur odio earum in illo possimus molestias voluptas, neque quos delectus eaque odit non!</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas aliquid velit atque illum esse porro libero nam. Impedit eligendi, adipisci voluptate distinctio, aperiam explicabo dignissimos, mollitia magni veritatis sunt corporis?</p>

          </div>
        </div>
        <div class="col-sm-6">
          <div align="center"><h3>Mira nuestros videos</h3></div>
            <!--slider de aprende-->                



  <div class="container-fluid"> 
    <div class="row">
      <div class="flex-box">
          <div id="myCarousel" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
          </ol>

          <!-- Wrapper for slides -->
          <div class="carousel-inner">
            <div class="item active" class="video">
              <iframe width="100%" height="345" src="https://www.youtube.com/embed/Ghg7u0LHFB8?rel=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>

            <div class="item" class="video">
              <iframe width="100%" height="315" src="https://www.youtube.com/embed/6uiTumehwOE?rel=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>

            <div class="item" class="video">
              <iframe width="100%" height="315" src="https://www.youtube.com/embed/smJZMS5COFQ?rel=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
          </div>

          <!-- Left and right controls -->
          <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>
  </div>

<!--slider de aprende-->

        </div>
        </div>
      </div>
  </section><!--Aprende mas-->

  <section id="mision vision">
    <div class="container">
      <div class="heading wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
        <div class="row">
          <div class="text-center col-sm-8 col-sm-offset-2">
            <h2>Crecerem<h2>
            <h3><p>Entrena tus formas de ser con apoyo del COACHING ONTOLÓGICO, alcanza o mantén el éxito y la felicidad de la forma que la concibas, cualquiera que esta sea, pero de una manera consciente, deliberada, asertiva y luego compártela.</p></h3>
          </div>
        </div> 
      </div>
      <div class="text-center our-services">
        <div class="row">
          <div class="col-sm-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms" data-toggle="modal" data-target="#miModalmi" style="cursor: pointer;">
            <div class="service-icon">
              <i class="fa fa-child"></i>
            </div>
              <h3>Misión</h3>
              <p>Apoyamos el crecimiento de cada ser humano, ampliando su visión del mundo, creando mejores entornos desde el respeto y la consciencia.</p>
          </div>
              
          <div class="col-sm-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="450ms" data-toggle="modal" data-target="#miModalvi" style="cursor: pointer;">
            <div class="service-icon">
              <i class="fa fa-crosshairs"></i>
            </div>
              <h3>Visión</h3>
              <p>Somos seres humanos apoyando a otros seres humanos para expandir sus horizontes y abrir posibilidades.</p>
            </div>
                
          <div class="col-sm-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="550ms" data-toggle="modal" data-target="#miModalpri" style="cursor: pointer;">
            <div class="service-icon">
              <i class="fa fa-book" ></i>
            </div>
              <h3>Principios</h3>
              <p>Para apoyar a nuestros clientes tenemos principios y valores que nos inspiran desde lo más hondo de nuestro ser.</p>
              </div>          
          </div>
        </div>
        </div>
        
  </section><!--/#services-->



  <section id="prueba">
<!---- /sección de pruebas-->
              <div class="container">
            <div class="col-sm-6">
              
            <div class ="hidden" id="menu1">
              <h1>Menu 1</h1>
              <p class="menudesc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus id officia, suscipit libero, pariatur in dolore exercitationem placeat hic vel! Animi excepturi, doloremque, amet provident tempora facere assumenda explicabo laboriosam?</p>
            </div>
            <div class ="hidden" id="menu2">
              <h1>que?</h1>
              <p class="menudesc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem, corporis unde culpa fuga atque fugit neque tempore error minus laudantium, laboriosam ex aperiam accusantium pariatur. Libero totam recusandae sint, pariatur.</p>
            </div>
            <div class ="hidden" id="menu3">
              <h1>Menu 3</h1>
              <p class="menudesc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda perferendis fuga reiciendis, dolorum praesentium obcaecati sint amet nobis. Expedita impedit, odit, quas dignissimos repellat nam quo voluptatum consequuntur adipisci fugit.</p>
            </div>
            <div class ="hidden" id="menu4">
              <h1>Menu 4</h1>
              <p class="menudesc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto qui voluptatem fugit quasi maxime nulla molestias nisi reiciendis, assumenda et iste ducimus facilis provident id mollitia ut repellendus praesentium pariatur.</p>
            </div>
            <div class ="hidden" id="menu5">
              <h1>Menu 5</h1>
              <p class="menudesc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque dolorum deserunt temporibus, numquam in beatae earum accusantium delectus est a. Quisquam vel eaque excepturi aut debitis repellendus quas ipsam ducimus.</p>
            </div>
            <div class ="hidden" id="menu6">
              <h1>Menu 6</h1>
              <p class="menudesc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae nesciunt laboriosam est maxime minus quia. Dolore et rem reprehenderit non molestias quaerat facilis quibusdam, harum aliquid, velit earum asperiores, laboriosam.</p>
            </div>
            <div class ="hidden" id="menu7">
              <h1>Menu 7</h1>
              <p class="menudesc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore facilis illum accusantium, debitis ut soluta odit! Consequuntur atque laboriosam enim officia accusantium illum culpa, minima fugit? Fuga officia iusto natus.</p>
            </div>
            <div class ="visible" id="centro">
              <h1>Crecerem</h1>
              <p class="menudesc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero dolor hic non eos velit, provident voluptatum repudiandae doloremque sit unde culpa recusandae et aliquid perspiciatis eveniet omnis perferendis, rerum accusantium.</p>
            </div>
            </div>

            <nav class="menunav" class="col-sm-6">
              <ul class="circle">
                <li class="colo1 light slice">
                  <label for="col1" class="circle over" id="1">Menu 1</label>
                </li>
                <li class="colo2 light slice">
                  <label for="col2" class="circle over" id="2">Menu 2</label>
                </li>
                <li class="colo3 light slice">
                  <label for="col3" class="circle over" id="3">Menu 3</label>
                </li>
                <li class="colo4 light slice">
                  <label for="col4" class="circle over" id="4">Menu 4</label>
                </li>
                <li class="colo5 light slice">
                  <label for="col5" class="circle over" id="5">Menu 5</label>
                </li>
                <li class="colo6 dark slice">
                  <label for="col6" class="circle over" id="6">Menu 6</label>
                </li>
                <li class="colo7 dark slice">
                  <label for="col7" class="circle over" id="7">Menu 7</label>
                </li>
                <li class="unsel circle">
                  <label for="unsel" class="clicky menuname">Menu</label>
                </li>
                <li class="middle circle"></li> 
              </ul>
            </nav>
            </div>

  </section> <!-- termina sección de pruebas-->




  <section id="curso">

    <div class="container">
      <div class="row">
        <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
          <h2>Cursos</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ut enim ad minim veniam</p>
        </div>
      </div> 
    </div>
    <div class="container">
                         <!-- EMPIEZA EL CICLO DE DE LOS CURSOS -->
        <?php foreach($cursos as $curso) { ?> 

        <div class="col-md-4"> 
            <figure class="desc"style="cursor: pointer;">
              <img src="<?php echo base_url($curso['url_image']); ?>" alt="" class="img-responsive" style="-webkit-border-radius: 30px;-moz-border-radius: 30px;border-radius: 30px;padding:0px;">
              <a data-toggle="modal" data-target="#product_view"></a>
          <figcaption>
            <h3><?php echo $curso['nombre']; ?></h3>
              <p><?php echo $curso['descripcion']; ?></p>
          </figcaption>
        </figure>
        </div>
        <?php } ?>
        <!--// TERMINA EL CICLO DE LOS CURSOS -->
        </div>
              

  </section><!--cursos-->

  <section id="team">
    <div class="container">
      <div class="row">
        <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1200ms" data-wow-delay="300ms">
          <h2>Entrenadores</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ut enim ad minim veniam</p>
        </div>
      </div>

      <div class="team-members">
        <div class="row">
        <!-- AQUÍ SE CICLAN LOS ENTRENADORES -->
        <?php foreach($entrenadores as $entrenador) { ?>
          <div class="col-sm-6">
            <div class="team-member wow flipInY" data-wow-duration="1000ms" data-wow-delay="300ms">
              <div class="member-image">
                <img src="<?php echo base_url($entrenador['url_image']); ?>" alt="" class="img-responsive"style="-webkit-border-radius: 30px;-moz-border-radius: 30px;border-radius: 30px;padding:0px;">
<!--
<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#modal4">
  Abrir modal
</button>-->
              </div>

              <div class="member-info">
                <h3><?php echo $entrenador['nombre']; ?></h3>
                <h4><?php echo $entrenador['puesto']; ?></h4>
                <p><?php echo $entrenador['descripcion']; ?></p>
              </div>
              <div class="social-icons">
                <ul>
                  <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                  <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                  <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
                  <li><a class="rss" href="#"><i class="fa fa-rss"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        <?php } ?>
        <!--/// AQUÍ TERMINA EL CICLO DE LOS ENTRENADORES -->
        </div>
      </div>            
    </div>
  </section><!--team-->

<div class="modal fade" id="miModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title" id="myModalLabel">Esto es un modal</h4>
      </div>
      <div class="modal-body">
        Texto del modal
      </div>
    </div>
  </div>
</div>


<section id="testimonial">
      



<div class="container content"> 
  <div class="row">
        <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1200ms" data-wow-delay="300ms">
          <h2>Testimonial</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ut enim ad minim veniam</p>
        </div>
      </div>
  <div id="carousel-example-generic" class="carousel slide" data-ride="carousel"> <!-- Indicators --> 
    <ol class="carousel-indicators"> 
      <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li> 
      <li data-target="#carousel-example-generic" data-slide-to="1"></li> 
      <li data-target="#carousel-example-generic" data-slide-to="2"></li> 
    </ol> <!-- Wrapper for slides --> 
      <div class="carousel-inner"> 
        <div class="item active"> 
          <div class="row"> 
            <div class="col-xs-12"> 
              <div class="thumbnail adjust1"> 
            <div class="col-md-2 col-sm-2 col-xs-12"> 
              <img class="media-object img-rounded img-responsive" src="http://placehold.it/100"> 
            </div> 
              <div class="col-md-10 col-sm-10 col-xs-12"> 
                 <div class="caption"> 
                      <p class="text-info lead adjust2">Experiencia</p> 
                      <p><span class="glyphicon glyphicon-thumbs-up"></span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora odit perferendis, voluptas voluptates nulla, commodi eaque consequuntur repudiandae repellat iste soluta iusto provident totam eos, nisi. Exercitationem numquam odio perferendis.</p> 
                      <blockquote class="adjust2"> <p>Nombre1</p> 
                        <small><cite title="Source Title"><i class="glyphicon glyphicon-globe"></i>Nombre Usuario</cite></small> 
                      </blockquote> 
                    </div>
              </div> 
            </div> 
          </div> 
        </div> 
      </div> 
      <div class="item"> 
        <div class="row"> 
          <div class="col-xs-12"> 
            <div class="thumbnail adjust1"> 
              <div class="col-md-2 col-sm-2 col-xs-12"> 
                <img class="media-object img-rounded img-responsive" src="http://placehold.it/100"> </div> 
                <div class="col-md-10 col-sm-10 col-xs-12"> 
                   <div class="caption"> 
                      <p class="text-info lead adjust2">Experiencia</p> 
                      <p><span class="glyphicon glyphicon-thumbs-up"></span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora odit perferendis, voluptas voluptates nulla, commodi eaque consequuntur repudiandae repellat iste soluta iusto provident totam eos, nisi. Exercitationem numquam odio perferendis.</p> 
                      <blockquote class="adjust2"> <p>Nombre2</p> 
                        <small><cite title="Source Title"><i class="glyphicon glyphicon-globe"></i>Nombre Usuario</cite></small> 
                      </blockquote> 
                    </div>
                </div> 
              </div> 
            </div> 
          </div> 
        </div> 
        <div class="item"> 
          <div class="row"> 
            <div class="col-xs-12"> 
              <div class="thumbnail adjust1"> 
                <div class="col-md-2 col-sm-2 col-xs-12"> 
                  <img class="media-object img-rounded img-responsive" src="http://placehold.it/100"> </div> 
                  <div class="col-md-10 col-sm-10 col-xs-12"> 
                    <div class="caption"> 
                      <p class="text-info lead adjust2">Experiencia</p> 
                      <p><span class="glyphicon glyphicon-thumbs-up"></span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora odit perferendis, voluptas voluptates nulla, commodi eaque consequuntur repudiandae repellat iste soluta iusto provident totam eos, nisi. Exercitationem numquam odio perferendis.</p> 
                      <blockquote class="adjust2"> <p>Nombre3</p> 
                        <small><cite title="Source Title"><i class="glyphicon glyphicon-globe"></i>Nombre Usuario</cite></small> 
                      </blockquote> 
                    </div> 
                  </div> 
                </div> 
              </div> 
            </div> 
          </div> 
        </div> <!-- Controls --> 
        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev"> 
          <span class="glyphicon glyphicon-chevron-left"></span> 
        </a> 
        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next"> 
          <span class="glyphicon glyphicon-chevron-right"></span> 
        </a> 
      </div> 
    </div>



</section> <!--testimonial-->


  <section id="mapas">
   <div class="container">

      <div class="row">
        <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1200ms" data-wow-delay="300ms">
          <h2>Sabes donde encontrarnos?</h2>
          <p>Te mostramos los lugares donde puedes acudir, no te quedes con las ganas</p>
          <p>En cualquiera de los lugares a donde quieras ir, eres bienvenido</p>
        </div>
      </div>


<div id="Cuautla">
  <div class="container">
    <div class="row">
      <h3>Cuautla</h3>
        <p>Encuentranos en cuautla</p>
      <div class="col-md-6"><div class="mapa-responsive">
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15105.02711730213!2d-98.9447429!3d18.8312471!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd6f7c2197b8e195d!2sCrecerem.+Cuautla.!5e0!3m2!1ses!2smx!4v1535131912931" frameborder="0" style="border:0" allowfullscreen></iframe>    
</div></div>
      <div class="col-md-6"><div class="mapa-responsive">
        <!--Mapa cuautla--><iframe src="https://www.google.com/maps/embed?pb=!4v1543276153116!6m8!1m7!1sFqw0H9SD94uErI0tHt7e7Q!2m2!1d18.83123173958793!2d-98.94466550239572!3f272.1578!4f0!5f0.7820865974627469"  frameborder="0" style="border:0" allowfullscreen></iframe>  
      </div></div>
    </div>
  </div>
</div>

<div id="CDMX">
  <div class="container">
    <div class="row">
        <h3>CDMX</h3>
        <p>Encuentranos en CDMX</p>
      <div class="col-md-6"><div class="mapa-responsive">
      <iframe src="https://www.google.com/maps/embed?pb=!4v1543276153116!6m8!1m7!1sFqw0H9SD94uErI0tHt7e7Q!2m2!1d18.83123173958793!2d-98.94466550239572!3f272.1578!4f0!5f0.7820865974627469"  frameborder="0" style="border:0" allowfullscreen></iframe>  
      </div></div>
      <div class="col-md-6"><div class="mapa-responsive">
        <!--Mapa CDMX--><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d482612.7905509178!2d-99.34720193807256!3d19.08955465545545!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1fff7fec57645%3A0xf1cc071ce0cf3396!2sCrecerem+World+SA+de+CV!5e0!3m2!1ses!2smx!4v1535249562461" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div></div>
    </div>
  </div>
</div>  
</div>
    
  </section><!--mapas-->


<section> <!--cartas-->
  

</section>


  <section id="pie"> 
    <div id="contact-us" class="parallax">
      <div class="container">
<footer>
    <div style="background-color: ;">
      <div class="container">
        <!-- cascada-->
        <div class="row py-4 d-flex align-items-center">      
        </div>
        <!-- cascada-->
      </div>
    </div>
    <!-- links -->
    <div class="container text-center text-md-left mt-5">

      <!-- cascada -->
      <div class="row mt-3 dark-grey-text">

        <!-- lados -->
        <div class="col-md-3 col-lg-4 col-xl-3 mb-4">

          <!-- cont -->
          <h6 class="text-uppercase font-weight-bold">Certificaciones</h6>

        <div class="col-md-6">
          <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo aliquid dicta maxime eveniet minima harum, soluta eius sint temporibus veritatis praesentium animi, itaque quaerat. Placeat sit veniam doloremque ratione ut.</p>
        </div>

        <div class="col-md-6">
          <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo aliquid dicta maxime eveniet minima harum, soluta eius sint temporibus veritatis praesentium animi, itaque quaerat. Placeat sit veniam doloremque ratione ut.</p>
        </div>

        </div>
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <h6 class="text-uppercase font-weight-bold">Nuestras Redes</h6>
          <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
          <p><a class="fa fa-facebook white-text" class="dark-grey-text" href="#!"> Facebook</a></p>
          <p><a class="fa fa-youtube white-text" class="dark-grey-text" href="#!"> Youtube</a></p>
          <p><a class="fa fa-instagram white-text" class="dark-grey-text" href="#!"> Instagram</a></p>
          <p><a  class="fa fa-twitter white-text" class="dark-grey-text" href="#!"> Twitter</a></p>
          <p><a class="fa fa-linkedin white-text" class="dark-grey-text" href="#!"> Linkedin</a></p>
          <p><a class="fa fa-google white-text" class="dark-grey-text" href="#!"> Google</a></p>
          <p><a class="fa fa-vimeo white-text" class="dark-grey-text" href="#!"> Vimeo</a></p>
        </div>

        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <h6 class="text-uppercase font-weight-bold">Te interesa</h6>
          <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
          <p><a class="dark-grey-text" href="#modal0">Servicios comerciales</a></p>
          <p><a class="dark-grey-text" data-toggle="modal" data-target="#modal1">Pregunta1</a></p>
          <p><a class="dark-grey-text" data-toggle="modal" data-target="#modal1">Pregunta2</a></p>
          <p><a class="dark-grey-text" data-toggle="modal" data-target="#modal1">Pregunta3</a></p>
          <p><a class="dark-grey-text" data-toggle="modal" data-target="#modal1">Pregunta4</a></p>
          <p><a class="dark-grey-text" data-toggle="modal" data-target="#modal1">Pregunta5</a></p>
          <p><a class="dark-grey-text" data-toggle="modal" data-target="#modal1">Pregunta6</a></p>
        </div>
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <h6 class="text-uppercase font-weight-bold">Contacto</h6>
          <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
          <p><a class="dark-grey-text" data-toggle="modal" data-target="#modal1">INAI</a></p>
          <p><a class="dark-grey-text" data-toggle="modal" data-target="#modal1"">PROFECO</a></p>
          <p><a class="dark-grey-text" data-toggle="modal" data-target="#modal1">Quejas</a></p>
          <p><i class="fa fa-home mr-3"></i> Cuautla <br> <i class="fa fa-home mr-3"> CDMX</i></p><p>
            <i class="fa fa-envelope mr-3"></i> CURSOSCDMX@CRECEREM.COM <br> CURSOSCUAUTLA@CRECEREM.COM</p>
          <p><i class="fa fa-phone mr-3"></i> (55) 4748 7000 CDMX <BR> <i class="fa fa-phone mr-3"></i>(735) 152 9800 CUAUTLA</p>
        </div>
      </div>
    </div>
    <div class="footer-copyright text-center text-black-50 py-3">© 2018 Copyright:
      <a class="dark-grey-text"> Crecerem.com</a>
    </div>
    </footer>
      </div>
    </div>        
  </section>



  <script type="text/javascript" src="<?php echo base_url("/assets/js/jquery.js"); ?>"></script>
  <script type="text/javascript" src="<?php echo base_url("/assets/js/bootstrap.min.js"); ?>"></script>
  <script type="text/javascript" src="<?php echo base_url("/assets/js/jquery.inview.min.js"); ?>"></script>
  <script type="text/javascript" src="<?php echo base_url("/assets/js/wow.min.js"); ?>"></script>
  <script type="text/javascript" src="<?php echo base_url("/assets/js/mousescroll.js"); ?>"></script>
  <script type="text/javascript" src="<?php echo base_url("/assets/js/smoothscroll.js"); ?>"></script>
  <script type="text/javascript" src="<?php echo base_url("/assets/js/jquery.countTo.js"); ?>"></script>
  <script type="text/javascript" src="<?php echo base_url("/assets/js/lightbox.min.js"); ?>"></script>
  <script type="text/javascript" src="<?php echo base_url("/assets/js/main.js"); ?>"></script>

</body>
</html>


<div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title" id="myModalLabel">Esto es un modal</h4>
      </div>
      <div class="modal-body">
        Texto del modal
      </div>
    </div>
  </div>
</div>


 <?php foreach($entrenadores as $entrenador) { ?>
<div class="modal fade" id="modal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
<h3 class="modal-title"><?php echo $entrenador['nombre']; ?></h3>
      </div>
      <div class="modal-body">
        <div class="row">
                    <div class="col-md-6 product_img">
                    
          <img src="<?php echo base_url($entrenador['url_image']); ?>" alt="" class="img-responsive">
                <h4><?php echo $entrenador['puesto']; ?></h4>

                
      </div>
      <div class="col-md-6 product_content">
         <p><?php echo $entrenador['descripcion']; ?></p>                    
        Texto del modal
    </div>
        </div>
        </div>
      </div>
    </div>
</div>
         <?php } ?>




            <div class="modal fade" id="miModalmi" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                      <h4 class="modal-title" id="myModalLabel">Misión</h4>
                    </div>
                    <div class="modal-body">
                      “Apoyamos el crecimiento de cada ser humano, ampliando su visión del mundo, creando mejores entornos desde el respeto y la consciencia” <br>
                      La historia de quienes formamos Crecerem ha sido así precisamente. Alguien hizo una diferencia en nuestras vidas y ahora nosotros deseamos hacer un parada para apoyar a otras personas más.
                      En CRECEREM WORLD estamos claros de que impulsar el crecimiento de otro ser humano, es un acto de nobleza y nuestra misión es  precisamente esa; Ser una plataforma de crecimiento para cada persona que participa en nuestros entrenamientos.<br>
                      Para nosotros es importante trabajar desde un espacio de respeto, amor y confianza. Y para lograr nuestra misión, tenemos la claridad de observar que cada ser humano viene con una historia llena de alegrías y dolores, combinada con una carga cultural, familiar, escolar y social que en su conjunto configuran su propia forma de ser, pero cada persona puede, si así lo desea, empezar desde aquí a crear su mejor versión personal y su vez, formar la realidad que desea.
                      Nuestra misión esta clara; Colaborar con el crecimiento personal y profesional de nuestros participantes para que se lancen a la conquista de si mismo, de sus sueños y de su propio camino. Es un efecto de recuperación de su fe, su esperanza, y su confianza, pero sobre todo de sus propias vidas.<br>
                      ”Si supiera que el mundo se acaba mañana, yo, hoy todavía, plantaría un árbol”                    
                    </div>
                  </div>
                </div>
              </div>
              <div class="modal fade" id="miModalvi" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                        <h4 class="modal-title" id="myModalLabel">Visión</h4>
                      </div>
                      <div class="modal-body">
                        Somos seres humanos apoyando a otros seres humanos para expandir sus horizontes y abrir posibilidades. Impartimos educación divertida y consciente para que cada persona retome sus sueños y sus propósitos de vida. Y mientras se entrenan, gozan de los beneficios del resultado junto con sus seres queridos. Trabajamos generando un planeta mejor, a nuestro paso.<br>
                        El resultado ya desde hoy lo vemos grandioso y es nuestro deseo dejar un mundo mejor, de cómo lo recibimos nosotros. Estamos permanentemente abiertos a mejorar y dar un servicio de calidad para nuestros participantes. Nuestra misión, nuestra visión y nuestros valores están alineados para poder entregarle a cada alumno lo mejor de nuestra experiencia, de tal forma que cada persona que llega a nuestro centro, alcance sus propios objetivos.
                        Nuestra visión es lejana y cada acción que sembramos en el presente esta direccionada para conformar el resultado que deseamos adelante. Amamos lo que hacemos porque sabemos que el que ama lo que hace, está benditamente condenado al éxito.<br>
                        “Es mejor viajar lleno de esperanza que llegar”     
                      </div>
                    </div>
                  </div>
                </div>
              <div class="modal fade" id="miModalpri" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                      <h4 class="modal-title" id="myModalLabel">Principios</h4>
                    </div>
                    <div class="modal-body">
                    Para apoyar a nuestros clientes tenemos principios y valores que nos inspiran desde lo más hondo de nuestro ser…
                    <ul>
                    <li>UNIÓN...   porque somos seres en comunidad</li>
                    <li>AMOR...   como la base de nuestra existencia</li>
                    <li>ABUNDANCIA...   es nuestra forma de vibrar en la vida</li>
                    <li>CONFIANZA...   para crear relaciones sólidas</li>
                    <li>SERVICIO...   como un camino seguro a la felicidad</li>
                    <li>DEDICACIÓN...   y empeño para alcanzar los sueños</li>
                    <li>COMPROMISO...   es el nombre del juego</li>
                    <li>EXPERIENCIA...   para crecer y madurar juntos</li>
                    <li>LIDERAZGO... para inspirar a otros</li>
                    </ul>
                    </div>
                     </div>
                  </div>
                </div>
              <div class="modal fade" id="miModalpri" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              </div>




<div id="Modalreg" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">×</span>
                    <span class="sr-only">Cerrar</span>
                </button>
                <h4 class="modal-title">Registrate</h4>
            </div>

            <div class="modal-body">
                <form role="form">
                    <div class="form-group">
                        <label for="inputName">Nombre</label>
                        <input type="text" class="form-control" id="inputName" placeholder="Cual es tu nombre?"/>
                    </div>
                    <div class="form-group">
                        <label for="inputName">Apellido Paterno</label>
                        <input type="text" class="form-control" id="inputApPa" placeholder="Apellido Paterno"/>
                    </div>
                    <div class="form-group">
                        <label for="inputName">Apellido Materno</label>
                        <input type="text" class="form-control" id="inputApMa" placeholder="Apellido Materno"/>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail">Email</label>
                        <input type="email" class="form-control" id="inputEmail" placeholder="Escribe tu email"/>
                    </div>
                    <div class="form-group"> 
                    <label for="Fecha">Fecha de nacimiento</label>
                      <select id="Fecha" name="Fecha">
                        <option value="0">Dia</option>
                        <option value="1">01</option>
                        <option value="2">02</option>
                        <option value="3">03</option>
                        <option value="4">04</option>
                        <option value="5">05</option>
                        <option value="6">06</option>
                        <option value="7">07</option>
                        <option value="8">08</option>
                        <option value="9">09</option>
                        <option value="10">10</option>
                        <option value="11">11</option>  
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="20">20</option>
                        <option value="21">21</option>
                        <option value="22">22</option>
                        <option value="23">23</option>
                        <option value="24">24</option>
                        <option value="25">25</option>
                        <option value="26">26</option>
                        <option value="27">27</option>
                        <option value="28">28</option>
                        <option value="29">29</option>
                        <option value="30">30</option>
                        <option value="31">31</option>
                        
                      </select>
                      <select id="Mes" name="Mes">
                         <option value="0">Mes</option>
                        <option value="1">Enero</option>
                        <option value="2">Febrero</option>
                        <option value="3">Marzo</option>
                        <option value="4">Abril</option>
                        <option value="5">Mayo</option>
                        <option value="6">Junio</option>
                        <option value="7">Julio</option>
                        <option value="8">Agosto</option>
                        <option value="9">Septiembre</option>
                        <option value="10">Octubre</option>
                        <option value="11">Noviembre</option>  
                        <option value="12">Diciembre</option>
                      </select>
                      <select id="Año" name="Año">
                        <option value="Año">Año</option>
                        <option value="1919">1919</option>
                        <option value="1920">1920</option>
                        <option value="1920">1920</option>
                        <option value="1921">1921</option>
                        <option value="1922">1922</option>
                        <option value="1923">1923</option>
                        <option value="1924">1924</option>
                        <option value="1925">1925</option>
                        <option value="1926">1926</option>
                        <option value="1927">1927</option>
                        <option value="1928">1928</option>
                        <option value="1929">1929</option>
                        <option value="1930">1930</option>
                        <option value="1931">1931</option>
                        <option value="1932">1932</option>
                        <option value="1933">1933</option>
                        <option value="1934">1934</option>
                        <option value="1935">1935</option>
                        <option value="1936">1936</option>
                        <option value="1937">1937</option>
                        <option value="1938">1938</option>
                        <option value="1939">1939</option>
                        <option value="1940">1940</option>
                        <option value="1941">1941</option>
                        <option value="1942">1942</option>
                        <option value="1943">1943</option>
                        <option value="1944">1944</option>
                        <option value="1945">1945</option>
                        <option value="1946">1946</option>
                        <option value="1947">1947</option>
                        <option value="1948">1948</option>
                        <option value="1949">1949</option>
                        <option value="1950">1950</option>
                        <option value="1951">1951</option>
                        <option value="1952">1952</option>
                        <option value="1953">1953</option>
                        <option value="1954">1954</option>
                        <option value="1955">1955</option>
                        <option value="1956">1956</option>
                        <option value="1957">1957</option>
                        <option value="1958">1958</option>
                        <option value="1959">1959</option>
                        <option value="1960">1960</option>
                        <option value="1961">1961</option>
                        <option value="1962">1962</option>
                        <option value="1963">1963</option>
                        <option value="1964">1964</option>
                        <option value="1965">1965</option>
                        <option value="1966">1966</option>
                        <option value="1967">1967</option>
                        <option value="1968">1968</option>
                        <option value="1969">1969</option>
                        <option value="1970">1970</option>
                        <option value="1971">1971</option>
                        <option value="1972">1972</option>
                        <option value="1973">1973</option>
                        <option value="1974">1974</option>
                        <option value="1975">1975</option>
                        <option value="1976">1976</option>
                        <option value="1977">1977</option>
                        <option value="1978">1978</option>
                        <option value="1979">1979</option>
                        <option value="1980">1980</option>
                        <option value="1981">1981</option>
                        <option value="1982">1982</option>
                        <option value="1983">1983</option>
                        <option value="1984">1984</option>
                        <option value="1985">1985</option>
                        <option value="1986">1986</option>
                        <option value="1987">1987</option>
                        <option value="1988">1988</option>
                        <option value="1989">1989</option>
                        <option value="1990">1990</option>
                        <option value="1991">1991</option>
                        <option value="1992">1992</option>
                        <option value="1993">1993</option>
                        <option value="1994">1994</option>
                        <option value="1995">1995</option>
                        <option value="1996">1996</option>
                        <option value="1997">1997</option>
                        <option value="1998">1998</option>
                        <option value="1999">1999</option>
                        <option value="2000">2000</option>
                        <option value="2001">2001</option>
                        <option value="2002">2002</option>
                        <option value="2003">2003</option>
                        <option value="2004">2004</option>
                        <option value="2005">2005</option>
                        <option value="2006">2006</option>
                        <option value="2007">2007</option>
                        <option value="2008">2008</option>
                        <option value="2009">2009</option>
                        <option value="2010">2010</option>
                        <option value="2011">2011</option>
                        <option value="2012">2012</option>
                        <option value="2013">2013</option>
                        <option value="2014">2014</option>
                        <option value="2015">2015</option>
                        <option value="2016">2016</option>
                        <option value="2017">2017</option>
                        <option value="2018">2018</option>
                      </select>
                    </div>
                    
                    <div class="form-group"> 
                    <label for="Sexo">Sexo</label>
                      <select id="Sexo" name="Sexo">
                        <option value="0">Arbol</option>
                        <option value="0">Masculino</option>
                        <option value="0">Femenino</option>
                      </select>
                    </div>

                     <div class="form-group">
                        <label for="inputPhone">Telefono</label>
                        <input type="text" class="form-control" id="inputPhone" placeholder="Telefono"/>
                    </div>
                    </div>
                    <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary submitBtn" onclick="submitContactForm()">Registrar</button>
            </div>
                </form>
            </div>
            
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->



<!-- Modal  contacto-->
<div class="modal fade" id="modalcontacto" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">×</span>
                    <span class="sr-only">Cerrar</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">Contactanos</h4>
            </div>
            
            <!-- Modal Body <--></-->
            <div class="modal-body">
                <p class="statusMsg"></p>
                <form role="form">
                    <div class="form-group">
                        <label for="inputName">Nombre</label>
                        <input type="text" class="form-control" id="inputName" placeholder="Ingresa tu nombre"/>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail">Email</label>
                        <input type="email" class="form-control" id="inputEmail" placeholder="Escribe tu email"/>
                    </div>
                    <div class="form-group"> 
                    <label for="destinatario">Destinatario</label>
                      <select id="destino" name="destino">
                        <option value="1">Recursos humanos</option>
                        <option value="2">Finanzas</option>
                        <option value="3">Cabecita</option>
                        <option value="4">Claro que si</option>
                        <option value="5">Que quiere?</option>
                        <option value="6">Venga señor</option>
                      </select>
                    </div>
                    <div class="form-group">
                        <label for="inputMessage">Mensaje</label>
                        <textarea class="form-control" id="inputMessage" placeholder="Aqui va el mensaje"></textarea>
                    </div>
                </form>
            </div>
            
            <!-- Modal Footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-primary submitBtn" onclick="submitContactForm()">Enviar</button>
            </div>
        </div>
    </div>
</div>


          <div class="modal fade" id="modaling" role="dialog">
        <div class="modal-dialog" >
        <div class="modal-content">
          <h1>Ingresa en tu cuenta</h1><br>
          <form>
          <input type="text" name="user" placeholder="Usuario">
          <input type="password" name="pass" placeholder="Contraseña">
          <input type="submit" name="login" class="login loginmodal-submit" value="Ingresa">
          </form>
          <div class="login-help">
          <a href="#">Registrate</a> - <a href="#">Olvidé mi contraseña</a>
          </div>
        </div>
      </div>
</div>
<!-- Preguntas frecuentes-->

<!--modal entrenador-->

<?php foreach($cursos as $curso) { ?> 
<div class="modal fade product_view" id="product_view">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <a href="#" data-dismiss="modal" class="class pull-right"><span class="glyphicon glyphicon-remove"></span></a>
                <h3 class="modal-title"><?php echo $curso['nombre']; ?></h3>
            </div>
            <div class="modal-body">
                <div class="row">
                   
                    <div class="col-md-6 product_img">
                        <img src="<?php echo base_url($curso['url_image']); ?>" class="img-responsive">
                        <h3 class="cost"><span class="glyphicon glyphicon-usd"></span> <?php echo $curso['precio']; ?></h3>
                        <div class="space-ten"></div>
                        <div class="btn-ground">
                            <button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-pencil"></span> Inscribirse</button>
                            <button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-pencil"></span> Formas de inscribirse</button>
                        </div>
                    </div>

                    <div class="col-md-6 product_content">
                        <h4>Dedicado a <?php echo $curso ['objetivo'];?></h4>
       
              <h4 class="pull-left"></h4>
              <h4></h4>
              <p><?php echo $curso['completo']; ?></p><?php } ?>
                      
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
</div>


