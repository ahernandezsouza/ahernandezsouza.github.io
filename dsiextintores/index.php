<?php
    if (isset($_POST["submit"])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $telefono = $_POST['telefono'];
        $message = $_POST['message'];
        $human = intval($_POST['human']);
        $from = 'Forma de Contacto Sitio Extintores DSI'; 
        $to = 'rulsalmeron@hotmail.com'; 
        $subject = 'Solicitud de Informacion';
        
        $body = "De: $name\n Email: $email\n Teléfono: $telefono\n Mensaje:\n $message";
 
        // Check if name has been entered
        if (!$_POST['name']) {
            $errName = 'Por favor incluye tu nombre';
        }
        
        // Check if email has been entered and is valid
        if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $errEmail = 'Por favor usa una dirección de Email válida';
        }
        
        // Check if email has been entered and is valid
        if (!$_POST['telefono']) {
            $errTelefono = 'Por favor incluye tu número telefónico';
        }
        
        //Check if message has been entered
        if (!$_POST['message']) {
            $errMessage = 'Por favor dinos cual es tu mensaje';
        }
        //Check if simple anti-bot test is correct
        if ($human !== 5) {
            $errHuman = 'La validación anti-spam no es correcta';
        }
 
// If there are no errors, send the email
if (!$errName && !$errEmail && !$errMessage && !$errHuman && !$errTelefono) {
    if (mail ($to, $subject, $body, $from)) {
        $result='<div class="alert alert-success">Muchas Gracias! Estaremos en contacto.</div>';
    } else {
        $result='<div class="alert alert-danger">Lo sentimos, hubo un error al enviar su mensaje. Por favor intente más tarde.</div>';
    }
}
    }
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>DSI Extintores equipo y sistemas contra incendio</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!--Google Fonts: Fuentes Play, Oswald y Awesome-->
    <link href='https://fonts.googleapis.com/css?family=Play|Oswald:700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Estilos Personalizados -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="apple-touch-icon" sizes="57x57" href="favicon/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="favicon/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="favicon/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="favicon/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="favicon/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="favicon/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="favicon/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="favicon/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="favicon/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="favicon/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
	<link rel="manifest" href="favicon/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="favicon/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">
  </head>
  <body>
    <div class="jumbotron banner-top">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-xs-7">
            <img class="img-responsive"src="assets/img/dsi_logo.png"></div>
          <div class="col-md-4 col-xs-5">
            <div class="contactanos text-center sombreado"></br><span>Contáctanos al número</span><h2>52.71.91.79</h2><h2>LLAMA AHORA</h2><p>y obtén un presupuesto</p></div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-8 encabezado">
            <h2>EQUIPO Y SISTEMAS CONTRA INCENDIO</h2>
            <h1>DSI SOLUCIONES CONTRA INCENDIO, S.A. DE C.V.</h1>
          </div>
          <div class="col-md-2"></div>
        </div>
        <div class="row raya">
        </div>
      </div>
        <nav class="menu">
          <div class="container">
            <ul class="nav nav-tabs nav-justified" id="myTab">
              <li class="active"><a data-toggle="tab" href="#inicio">INICIO</a></li>
              <li><a data-toggle="tab" href="#extintores" class="menu-extintores">EXTINTORES</a></li> 
              <li><a data-toggle="tab" href="#productos" class="menu-productos">PRODUCTOS</a></li> 
              <li><a data-toggle="tab" href="#servicios">SERVICIOS</a></li> 
              <li><a data-toggle="tab" href="#quienes-somos">QUIÉNES SOMOS</a></li>
              <li><a data-toggle="tab" href="#contacto" class="menu-contacto">CONTACTO</a></li>  
            </ul>
          </div>
        </nav>
    </div>
    <div class="container contenido tab-content">
      <div id="inicio" class="tab-pane row fade in active">
          <div class="col-md-9 col-sm-9 col-xs-8">
            <div class="row">
              <div class="col-md-9 col-sm-9 lead">
                <h3>BIENVENIDOS</h3>
                <p>Somos una Empresa dictaminada  en la NOM-154-SCFI-2005</p>
                <p>Equipo Contra Incendio - Extintores -</p>
                <p>Servicio De Mantenimiento y Servicio de Recarga.</p>
              </div>
              <div class="col-md-3 col-sm-3">
                  <img src="assets/img/nfpa.png" class="img-responsive">
              </div>
            </div>
            <hr>
            <div class="row">
              <div id="cuadro" class="col-md-9 col-sm-9 lead">
                <ul class="nav nav-tabs nav-justified">
                  <li>
                    <a class="btn btn-lg sombreado extintores" href="#extintores" role="button">EXTINTORES</a>
                  </li>
                  <li>
                    <a class="btn btn-lg sombreado productos" href="#productos" role="button">PRODUCTOS</a>
                  </li>
                </ul>
                  <br>
                  <br>
                  <img id="ABC" src="assets/img/cuadro_A_B_C.png" class="img-responsive">
              </div>
              <div class="col-md-3 col-sm-3">
                  <img src="assets/img/NOM.png" class="img-responsive">
                  <br>
                  <img src="assets/img/dictamen.png" class="img-responsive">
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-3 col-xs-4">
            <img src="assets/img/extintor_inicio.png" class="img-responsive">
          </div>
      </div>
      <hr>
      <div id="extintores" class="tab-pane fade row">
          <div class="container linea-1">
            <div class="row">
              <div class="col-md-12 text-center">
                <h3 class="titulo-pagina sombreado text-center" style="color:#E21A23;"><img src="assets/img/ext_icono.png">&nbsp&nbsp<span style="color:white;">EXTINTORES </span><span style="color:#E21A23;">POLVO QUIMICO</span></h3>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4">
                <div class="extintores">
                  <h4 id="encabezado-producto">EXTINTORES AUTOMOTRICES</h4>
                    <div id="cuerpo-producto"><small>El polvo químico seco ABC es el agente extintor más usado en el mercado por su amplia versatilidad dado que puede ser utilizado en automóviles, montacargas y camionetas.</small></div>
                  <h3 id="tamano-producto">TAMAÑOS</h3>
                    <p class="lead">750 grs. / 1.0 kg. / 2.5 kg.</br>NOM-154-SCFI-2005 y NOM-104-STPS-2001</p>
                </div>
              </div>
              <div class="col-md-2">
                <img src="assets/img/ext1.jpg" class="extintor img-responsive">
              </div>
              <div class="col-md-4">
                <div class="extintores">
                  <h4 id="encabezado-producto">EXTINTORES DE USO COMERCIAL, INDUSTRIAL Y OFICINAS</h4>
                    <div id="cuerpo-producto"><small>El polvo químico seco ABC es el agente extintor más usado en el mercado por su amplia versatilidad dado que puede ser utilizado en oficinas, centros comerciales, hoteles, bodegas, industrias e incluso para aplicación residencial.</small></div>
                  <h3 id="tamano-producto">TAMAÑOS</h3>
                    <p class="lead">4.5 kg / 6 kg. / 9 kg. / 12 kg.</br>NOM-154-SCFI-2005 y NOM-104-STPS-2001</p>
                </div>
              </div>
              <div class="col-md-2">
                <img src="assets/img/ext2.png" class="extintor img-responsive">
              </div>
              <div class="col-md-4 col-md-offset-3">
                <div class="extintores">
                  <h4 id="encabezado-producto">EXTINTORES DE USO INDUSTRIAL</h4>
                    <div id="cuerpo-producto"><small>El polvo químico seco ABC es el agente extintor más usado en el mercado por su amplia versatilidad dado que puede ser utilizado en industrias, almacenes, bodegas y gasolineras.</small></div>
                  <h3 id="tamano-producto">TAMAÑOS</h3>
                    <p class="lead">35 kg. / 50 kg. / 70 kg.</br>NOM-154-SCFI-2005 y NOM-104-STPS-2001</p>
                </div>
              </div>
              <div class="col-md-2">
                <img src="assets/img/ext3.png" class="extintor img-responsive">
              </div>
            </div>
            <hr>
          </div>
          <div class="container linea-2">
            <div class="row">
                <div class="col-md-12 text-center">
                  <h3 class="titulo-pagina sombreado text-center" style="color:#E21A23;"><img src="assets/img/ext_icono.png">&nbsp&nbsp<span style="color:white;">EXTINTORES </span><span style="color:#E21A23;">BIOXIDO DE CARBONO CO2</span></h3>
                </div>
            </div>
            <div class="row renglon">
              <div class="col-md-4 col-md-offset-2">
                <div class="extintores">
                  <h4 id="encabezado-producto">EXTINTORES DE BIOXIDO DE CARBONO CO2</h4>
                    <div id="cuerpo-producto"><small>Estos modelos de extinguidores de incendios ofrecen protección rápida. Segura y efectiva.
                    Están listos para manejar peligros de incendio debido a líquidos inflamables y electricidad.
                    Son ideales para uso en interiores, en donde haya equipos o procesos delicados que requieran de un extinguidor con un compuesto limpio.
                    El dióxido de carbono es un compuesto gaseoso para extinguidor eficaz y limpio, que no deja residuos que limpiar.
                    Estos modelos pueden usarse en incendios de Clase B y C.</small></div>
                  <h3 id="tamano-producto">TAMAÑOS</h3>
                    <p class="lead">5 lb. / 10 lb. / 15lb. / 20 lb.</br>CUMPLE CON LA NOM-102-STPS-1994</p>
                </div>
              </div>
              <div class="col-md-2 col-xs-6">
                <img src="assets/img/ext3.jpg" class="extintor img-responsive">
              </div>
              <div class="col-md-2 col-xs-6">
                <img src="assets/img/ext4.png" class="extintor img-responsive">
              </div>
            </div>
          <hr>
          </div>
          <div class="container linea-2">
            <div class="row">
                <div class="col-md-12 text-center">
                  <h3 class="titulo-pagina sombreado text-center" style="color:#E21A23;"><img src="assets/img/ext_icono.png">&nbsp&nbsp<span style="color:white;">EXTINTORES </span><span style="color:#E21A23;">AGUA A PRESIÓN H2O</span></h3>
                </div>
            </div>
            <div class="row renglon">
              <div class="col-md-4 col-md-offset-2">
                <div class="extintores">
                  <h4 id="encabezado-producto">AGUA A PRESIÓN H2O</h4>
                    <div id="cuerpo-producto"><small>Los extintores de agua de alta presión son ideales para materiales combustibles comunes como basura, madera y papel, no es toxico, son la alternativa número uno para los fuegos ocasionados por materiales combustibles clasificados tipo A.</small></div>
                  <h3 id="tamano-producto">TAMAÑOS</h3>
                    <p class="lead">10 Lts. / 50 Lts. / 70 Lts.</p>
                </div>
              </div>
              <div class="col-md-2 col-xs-6">
                <img src="assets/img/ext4.jpg" class="extintor img-responsive">
              </div>
              <div class="col-md-2 col-xs-6">
                <img src="assets/img/ext5.jpg" class="extintor img-responsive">
              </div>
            </div>
          <hr>  
          </div>
          <div class="container linea-2">
            <div class="row">
                <div class="col-md-12 text-center">
                  <h3 class="titulo-pagina sombreado text-center" style="color:#E21A23;"><img src="assets/img/ext_icono.png">&nbsp&nbsp<span style="color:white;">EXTINTORES </span><span style="color:#E21A23;">AGUA AFFF</span></h3>
                </div>
            </div>
            <div class="row renglon">
              <div class="col-md-4 col-md-offset-2">
                <div class="extintores">
                  <h4 id="encabezado-producto">AGUA AFFF</h4>
                    <div id="cuerpo-producto"><small>Son altamente efectivos por su capacidad de potencializar el poder humectante del agua al encapsular los gases y vapores generados por el fuego, rompiendo las moléculas de los hidrocarburos. Están diseñados para proteger áreas que contienen riesgos de fuego clase A  (combustibles sólidos) y clase B (combustibles líquidos y gaseosos).</small></div>
                  <h3 id="tamano-producto">TAMAÑOS</h3>
                    <p class="lead">10 Lts. / 50 Lts. / 70 Lts.</br>CUMPLE CON NOM-103-STPS-1994</p>
                </div>
              </div>
              <div class="col-md-2 col-xs-6">
                <img src="assets/img/ext4.jpg" class="extintor img-responsive">
              </div>
              <div class="col-md-2 col-xs-6">
                <img src="assets/img/ext5.jpg" class="extintor img-responsive">
              </div>
            </div>
          <hr>  
          </div>
          <div class="container linea-2">
            <div class="row">
                <div class="col-md-12 text-center">
                  <h3 class="titulo-pagina sombreado text-center" style="color:#E21A23;"><img src="assets/img/ext_icono.png">&nbsp&nbsp<span style="color:white;">EXTINTORES </span><span style="color:#E21A23;">HFC-236</span></h3>
                </div>
            </div>
            <div class="row renglon">
              <div class="col-md-4 col-md-offset-3">
                <div class="extintores">
                  <h4 id="encabezado-producto">EXTINTORES DE HFC-236</h4>
                    <div id="cuerpo-producto"><small>El HFC-236 al ser un agente extintor compatible con el medio ambiente, es ideal para satisfacer necesidades donde se use Halon. Es la alternativa idónea para lugares donde hay equipo de cómputo, equipo electrónico, tableros inteligentes, laboratorios, consultorios y cuartos de alta tecnología limpia.
                    Para tipo de fuego A, B, C</small></div>
                  <h3 id="tamano-producto">TAMAÑOS</h3>
                    <p class="lead">1 kg. / 2 kg. / 4.5 kg. / 6 kg.</br>NOM 100 STPS 1994 y NOM 104 STPS 2001</p>
                </div>
              </div>
              <div class="col-md-2">
                <img src="assets/img/ext6.jpg" class="extintor img-responsive">
              </div>
            </div>
          <hr>  
          </div>
          <div class="container linea-2">
            <div class="row">
                <div class="col-md-12 text-center">
                  <h3 class="titulo-pagina sombreado text-center" style="color:#E21A23;"><img src="assets/img/ext_icono.png">&nbsp&nbsp<span style="color:white;">EXTINTORES </span><span style="color:#E21A23;">HALOTRÓN</span></h3>
                </div>
            </div>
            <div class="row renglon">
              <div class="col-md-4 col-md-offset-3">
                <div class="extintores">
                  <h4 id="encabezado-producto">EXTINTORES DE HALOTRÓN</h4>
                    <div id="cuerpo-producto"><small>A base de Gas Halotron y/o Agente limpio. Se recomienda su uso en centrales eléctricas, equipos de oficina, equipos de computo, aparatos eléctricos y artículos delicados y valiosos que sean afectadas por otro agente extintor.
                    Para tipo de fuego A, B, C</small></div>
                  <h3 id="tamano-producto">TAMAÑOS</h3>
                    <p class="lead">2 Lbs. / 5 Lbs. / 11 Lbs. / 15.5 Lbs.</p>
                </div>
              </div>
              <div class="col-md-2">
                <img src="assets/img/ext2.png" class="extintor img-responsive">
              </div>
            </div>
          <hr>  
          </div>
          <div class="container linea-2">
            <div class="row">
                <div class="col-md-12 text-center">
                  <h3 class="titulo-pagina sombreado text-center" style="color:#E21A23;"><img src="assets/img/ext_icono.png">&nbsp&nbsp<span style="color:white;">EXTINTORES </span><span style="color:#E21A23;">CLASE K</span></h3>
                </div>
            </div>
            <div class="row renglon">
              <div class="col-md-4 col-md-offset-3">
                <div class="extintores">
                  <h4 id="encabezado-producto">EXTINTORES CLASE K</h4>
                    <div id="cuerpo-producto"><small>Recomendado para fuegos tipo “K”, su componente es polvo mezclado con agua su función será absorber el calor y hacer una capa de espuma.</small></div>
                  <h3 id="tamano-producto">TAMAÑOS</h3>
                    <p class="lead">6 Lbs.</p>
                </div>
              </div>
              <div class="col-md-2">
                <img src="assets/img/ext7.jpg" class="extintor img-responsive">
              </div>
            </div>
          </div>  
      </div>
      <div id="productos" class="tab-pane fade row">
        <div class="container">
          <div class="row">
              <h3 class="titulo-pagina sombreado text-center col-md-3"><img src="assets/img/productos.png"><span style="color:#E21A23;"> PRODUCTOS</span></h3>
              <div class="col-md-9"></div>
          </div>
          <div class="row">
            <div class="col-md-8">
                <h3 class="titulo-pagina sombreado text-left" style="color:#E21A23;"><img src="assets/img/productos.png"> SEÑALAMIENTOS</span></h3>
                <h4 id="encabezado-producto">SEÑALAMIENTOS DE PROTECCIÓN CIVIL</h4>
                  <div id="cuerpo-producto">Contamos con señalización para  protección civil que cumplen con las normas NOM-026-STPS-1998 Y NOM-003-SEGOB-2002.</div>
            </div>
            <div class="col-md-4">
              <img src="assets/img/senalamientos.png" class="img-responsive">
            </div>
           </div>
          <hr>
          <div class="row">
            <div class="col-md-8">
                <h3 class="titulo-pagina sombreado text-left" style="color:#E21A23;"><img src="assets/img/productos.png"> CENICEROS PORTA EXTINTORES</span></h3>
                <h4 id="encabezado-producto">CENICEROS</h4>
                  <div id="cuerpo-producto">Porta extintor de piso cilíndrico, utilizado para el resguardo de extintores portátiles, sin alterar la imagen del área en el que se instale.</div>
                <h3 id="tamano-producto">Materiales y componentes:</h3>
                  <p>FABRICADO DE LÁMINA DE ACERO INOXIDABLE, ACABADO EN PULIDO MATE , CALIBRE 24. IDEAL PARA USO EN INTERIORES Y EXTERIORES YA QUE POR SUS COMPONENTES TIENE UN DESEMPEÑO FAVORABLE, SALVO EN AMBIENTES HÚMEDOS Y/O CONDICIONES EXTREMAS  DE CORROSION (SALINIDAD), DONDE SE RECOMIENDA LA APLICACIÓN DE UN PASIVANTE.</p>
            </div>
            <div class="col-md-4">
              <img src="assets/img/ceniceros.png" class="img-responsive">
            </div>            
          </div>
          <hr>
          <div class="row">
            <div class="col-md-8">
                <h3 class="titulo-pagina sombreado text-left" style="color:#E21A23;"><img src="assets/img/productos.png"> GABINETES PARA HIDRANTES</span></h3>
                <h4 id="encabezado-producto">GABINETES</h4>
                  <div id="cuerpo-producto">De sobre poner o empotrar para mangueras de 15 y 30 metros.</div>
                <h3 id="tamano-producto">Materiales y componentes:</h3>
                  <p>Lámina negra acero al carbón, calibre 22, con puerta y chapa, con opción a cuna ó sin cuna.</p>
                  <ul>
                    <li>Modelo 30 M sobreponer Medidas: 88 x 70 x 21 cm.</li>
                    <li>Modelo 15 M sobreponer Medidas: 75 x 50 x 21 cm.</li>
                    <li>Modelo 30 M empotrar Medidas: 88 x 70 x 21 cm.</li>
                    <li>Modelo 15 M empotrar Medidas: 75 x 50 x 21 cm.</li>
                    <li>Modelo 30 M-E empotrar Medidas: 88 x 85 x 21 cm.</li>
                    <li>Modelo 30 M-E sobreponer Medidas: 88 x 85 x 21 cm.</li>
                  </ul>
            </div>
            <div class="col-md-4">
              <img src="assets/img/gabinetes1.png" class="img-responsive">
              <img src="assets/img/gabinetes2.png" class="extintor img-responsive">
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-md-8">
                <h3 class="titulo-pagina sombreado text-left" style="color:#E21A23;"><img src="assets/img/productos.png"> GABINETES PARA EQUIPO DE BOMBERO</span></h3>
                <h4 id="encabezado-producto">GABINETES</h4>
                <h3 id="tamano-producto">Materiales y componentes:</h3>
                  <p>Lámina negra acero al carbón, calibre 22, con entrepaños, puerta y chapa.</p>
                  <ul> 
                    <li>Un equipo de bombero, medidas de 1.80 x 0.45 x 0.40</li>
                    <li>Dos equipos de bombero, medidas de 1.80 x 0.57 x 0.40</li>
                    <li>Cuatro equipos de bombero, medidas de 1.80 x 0.90 x 0.40</li>
                    <li>Seis equipos de bombero, medidas de 1.80 x 1.22 x 0.40</li>
                  </ul>
            </div>
            <div class="col-md-4">
              <img src="assets/img/gabinete_bombero.png" class="img-responsive">
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-md-8">
                <h3 class="titulo-pagina sombreado text-left" style="color:#E21A23;"><img src="assets/img/productos.png"> BOTIQUINES DE PRIMEROS AUXILIOS</span></h3>
                <h4 id="encabezado-producto">BOTIQUINES</h4>
                <h3 id="tamano-producto">Materiales y componentes:</h3>
                  <p>Fabricados en lámina calibre 24</p>
                  <p>En todo lugar donde exista concentración de personas debe existir un Botiquín de primeros auxilios.</p>
            </div>
            <div class="col-md-4">
              <img src="assets/img/botiquin_1.png" class="img-responsive">
              <img src="assets/img/botiquin2.png" class="extintor img-responsive">
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-md-8">
                <h3 class="titulo-pagina sombreado text-left" style="color:#E21A23;"><img src="assets/img/productos.png"> HERRAJES Y MANGUERAS</span></h3>
                <h4 id="encabezado-producto">MANGUERA</h4>
                <h3 id="tamano-producto">Materiales y componentes:</h3>
                  <p>Fabricada en 100% fibra de poliéster de alta resistencia y baja elongación para reducir peso y aumentar la flexibilidad.</p>
                  <p>IMPREGNACION PARA LA ABRASION:</br>
                  Nuestras mangueras están disponibles para ser cubierta con un polímero de impregnación que permite una resistencia adicional a la abrasión.</p>
                  <p>LONGITUD DISPONIBLE:</br>
                  15 Y 30 metros.</p>
            </div>
            <div class="col-md-4">
              <img src="assets/img/manguera.png" class="img-responsive">
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-md-8">
                <h4 id="encabezado-producto">VÁLVULA DE GLOBO ANGULAR</h4>
                <h3 id="tamano-producto">Materiales y componentes:</h3>
                  <p>Válvula tipo globo para manguera de hidrante, de fabricación nacional en bronce fundido en acabado granallado, con volante ó manivela de aluminio pintado en color rojo, que permite ser operada manualmente.</p>
                  <p>Cuenta con vástago ascendente para la apertura o cierre al paso del agua. La rosca de entrada es en Hembra de 2" con cuerda NPT. Rosca de salida en cuerda Macho 1 1/2 y 2" en cuerdas IPT o NST. Toda válvula es sometida a pruebas con una presión de 250 lb.</p>
            </div>
            <div class="col-md-4">
              <img src="assets/img/valvula.png" class="img-responsive">
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-md-8">
                <h4 id="encabezado-producto">CHIFLÓN DE NEBLINA DE TRES PASOS EN BRONCE DE 1 1/2</h4>
                <h3 id="tamano-producto">Materiales y componentes:</h3>
                  <p>Chiflón o boquilla para manguera contra incendio, consta de tres pasos regulables: cierre, chorro y niebla.</br>Fabricada en bronce fundido.</br>Sometido a pruebas con una presión de 250 lbs.</br>Con capuchón de neopreno.</br>Acabado en granallado.</p>
            </div>
            <div class="col-md-4">
              <img src="assets/img/chiflon.png" class="img-responsive">
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-md-8">
                <h4 id="encabezado-producto">LLAVE UNIVERSAL</h4>
                <h3 id="tamano-producto">Materiales y componentes:</h3>
                  <p>Llave universal fabricada en bronce fundido. Su diseño permite tener el suficiente apoyo para operar el ajuste del cople, conexión o adaptadores desde 1 1/2" hasta 4 1/2". Su acabado es en bronce granallado.</p>
            </div>
            <div class="col-md-4">
              <img src="assets/img/llave.png" class="img-responsive">
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-md-8">
                <h4 id="encabezado-producto">TOMA SIAMESA</h4>
                <h3 id="tamano-producto">Materiales y componentes:</h3>
                  <p>Válvula recta con doble entrada, también conocida como toma siamesa, de fabricación nacional, a base de fundición de bronce, en acabado cromado.</br>Con dos conexiones de entrada de 2 1/2" en cuerda NST (NH) y conexión de salida recta de 4" en cuerda NPT, con capacidad para un gasto de 500 G.P.M.</br>Cuenta con válvula anti-retorno en cada entrada que permiten agregar líneas adicionales sin interrumpir el flujo.</br>Sometida a pruebas con presión de 300 lb.</br>Incluye anillos giratorios, juego de tapones de 2 1/2" con cadena, en cuerda NST y disco con leyenda de "Bomberos", todo en acabado cromado.</p>
            </div>
            <div class="col-md-4">
              <img src="assets/img/toma_siamesa.png" class="img-responsive">
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-md-8">
                <h3 class="titulo-pagina sombreado text-left" style="color:#E21A23;"><img src="assets/img/productos.png"> EQUIPO DE BOMBERO</span></h3>
                <h4 id="encabezado-producto">CHAQUETÓN PARA BOMBERO</h4>
                <h3 id="tamano-producto">Materiales y componentes:</h3>
                  <p>CHAQUETON NORMADO Y CERTIFICADO PARA BOMBERO PROFESIONAL EN TELA NOMEX III, FORRO INTERIOR STEDAIR 3000 COMO BARRERA DE HUMEDAD, VAPOR Y LIQUIDOS CALIENTES, FORRO ARALITE NP COMO BARRERA TERMICA CON DRD NFPA 1971 ULTIMA EDICION 2007</p>
            </div>
            <div class="col-md-4">
              <img src="assets/img/chaqueton.png" class="extintor img-responsive">
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-md-8">
                <h4 id="encabezado-producto">PANTALÓN PARA BOMBERO BRIGADISTA</h4>
                <h3 id="tamano-producto">Materiales y componentes:</h3>
                  <p>PANTALON NORMADO Y CERTIFICADO PARA BOMBERO PROFESIONAL EN TELA NOMEX III, FORRO INTERIOR STEDAIR 3000 COMO BARRERA DE HUMEDAD, VAPOR Y LIQUIDOS CALIENTES, FORRO ARALITE NP COMO BARRERA TERMICA CON DRD NFPA 197 ULTIMA EDICION 2007.</p>
            </div>
            <div class="col-md-4">
              <img src="assets/img/pantalon.png" class="extintor img-responsive">
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-md-8">
                <h4 id="encabezado-producto">CASCO PARA BOMBERO</h4>
                <h3 id="tamano-producto">Materiales y componentes:</h3>
                  <p>CASCO para Bombero Termoplástico, Modelo PX, Marca Bullard, con protección facial de policarbonato de 4" ó 6" nuquera de tela Nomex matraca para ajuste de la cabeza y cintas reflejantes.</p>
            </div>
            <div class="col-md-4">
              <img src="assets/img/casco.png" class="img-responsive">
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-md-8">
                <h4 id="encabezado-producto">CAPUCHA O MONJA PARA BOMBERO</h4>
                <h3 id="tamano-producto">Materiales y componentes:</h3>
                  <p>Manufacturada con tela Nomex 100% de doble capa costura plana con ajuste cómodo.</br>La capucha cubre 18" de la cabeza al torso.</p>
            </div>
            <div class="col-md-4">
              <img src="assets/img/capucha.png" class="img-responsive">
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-md-8">
                <h4 id="encabezado-producto">GUANTE PARA BOMBERO</h4>
                <h3 id="tamano-producto">Materiales y componentes:</h3>
                  <p>Guante para Bombero de 33 cm, en carnaza suave color amarillo, con forro Stedair 3000 barrera de humedad.</p>
            </div>
            <div class="col-md-4">
              <img src="assets/img/guantes.png" class="extintor img-responsive">
            </div>
          </div>
          <hr>

        </div>
      </div>
      <div id="servicios" class="tab-pane fade row">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-left">
              <h3 class="titulo-pagina sombreado text-center" style="color:#E21A23;"><img src="assets/img/servicios-icono.png">&nbsp&nbsp<span style="color:white;">SERVICIOS</span></h3>
              <p>Contamos con el personal calificado y especializado, así como con los equipos y herramientas propias necesarias y adecuadas para mantener el buen estado a los equipos proporcionando el apoyo y asesoría técnica que permita asegurar el correcto funcionamiento y operación de los mismos. Mantenimiento y recarga a extintores.</p>
              <p>Nuestro departamento de administración se encarga diariamente de la gestión de fechas de mantenimiento y recarga para que el cliente no tenga que estar pendiente de cuando ha de hacer la revisión de sus equipos extintores.</p>
              <p>En DSI también mantenemos existencias para entrega inmediatas de los materiales y partes más usuales listados a continuación.</p>
            </div>
            <div class="col-md-6">
              <ul>
                <li>Manómetros certificados para PQS, Agua  y gases limpios.</li>
                <li>Vástagos, resortes, O`rings</li>
                <li>Cinturones sujeta manguera, precintos marchamos</li>
                <li>Cinturón para Extintor de hasta 2.5 Kg.</li>
                <li>Detector de Humo</li>
                <li>Sporte tipo L para Extintor</li>
                <li>Mangueras</li>
                <li>Válvulas</li>
                <li>Lámpara de Emergencia</li>
              </ul>
            </div>
            <div class="col-md-6">
              <img src="assets/img/detector.png" class="img-responsive">
            </div>
          </div>
          <hr>
        </div>
      </div>
      <div id="quienes-somos" class="tab-pane fade row">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-left">
              <h3 class="titulo-pagina sombreado text-center" style="color:#E21A23;"><img src="assets/img/icono_quienes.png">&nbsp&nbsp<span style="color:white;">QUIENES SOMOS</span></h3>
            </div>
            <div class="col-md-6">
                <p class="lead">Somos una Empresa dictaminada en la </br> NOM-154-SCFI-2005</p>
                <p class="lead">Equipo Contra Incendio - Extintores - Servicio De Mantenimiento y Servicio de Recarga.</p>
                <p>Tenemos mas de 14 años de experiencia en el área de sistemas y equipos de detección y extinción de fuego, así como artículos de seguridad.</p>
                <p>DSI, es una empresa con una amplia experiencia en proporcionar  soluciones  para su empresa  siguiendo las normas y procedimientos de calidad para que nuestros servicios cuenten con todas las normas  y satisfacción de nuestros clientes.</p>
                <p>En DSI Soluciones Contra Incendio asesoramos y damos  servicios a todos los sectores.</p>
            </div>
            <div class="col-md-3 col-xs-6">
              <img src="assets/img/quienes_1.png" class="img-responsive quienes">
            </div>
            <div class="col-md-3 col-xs-6">
              <img src="assets/img/quienes_2.png" class="img-responsive quienes">
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-md-4 text-center">
              <h3 class="titulo-pagina sombreado text-center" style="color:#E21A23;"><img src="assets/img/ext_icono.png">&nbsp&nbsp<span style="color:white;">MISIÓN</span></h3>
              <p class="text-left">Crear una cultura de la prevención, con la finalidad de  disminuir riesgos de pérdidas de vidas humanas o materiales ocasionados por siniestros de la naturaleza o humanos.</p>
            </div>
            <div class="col-md-4 text-center">
              <h3 class="titulo-pagina sombreado text-center" style="color:#E21A23;"><img src="assets/img/ext_icono.png">&nbsp&nbsp<span style="color:white;">VISIÓN</span></h3>
              <p class="text-left">Ser una empresa líder en el ramo de Equipos y Sistemas contra incendio, ofreciendo servicios con profesionalismo y honestidad.</p>
            </div>
            <div class="col-md-4 text-center">
              <h3 class="titulo-pagina sombreado text-center" style="color:#E21A23;"><img src="assets/img/ext_icono.png">&nbsp&nbsp<span style="color:white;">VALORES</span></h3>
              <p class="text-left">Honestidad, Integridad, Calidad,  Servicio Y Responsabilidad.</p>
            </div>
          </div>
        </div>
      </div>
      <div id="contacto" class="tab-pane fade row">
        <div class="container">
          <div class="row">
            <div class="col-md-4">
              <h1>CONTACTO</h1>
              <p>JOSE MORAN No. 73</br>
              COL. SAN MIGUEL CHAPULTEPEC,</br>
              DELEGACION MIGUEL HIDALGO,</br>
              MEXICO, D.F. C.P. 11850</p>
              <p>​ventas@extintoresdsi.mx</br>
              Tel: 52.71.91.79</p>
              <p>Llama gratis al:</br>
              ( 01 55 ) 52.71.91.79</br>
              ( 01 55 ) 52.71.10.19</p>
              <small>Síguenos en Facebook </small><a class="btn btn-social-icon btn-facebook" href="https://www.facebook.com/dsimexico">
                <span style="font-size:20px;" class="fa fa-facebook"></span>
              </a>
                </br>
              <small>Síguenos en Twitter </small><a class="btn btn-social-icon btn-twitter" href="https://twitter.com/DSI_Mex">
                <span style="font-size:20px;" class="fa fa-twitter"></span>
              </a>
            </div>
            <div class="col-md-8">
              <h1>ESCRÍBENOS</h1>
              <form class="form-horizontal" role="form" method="post" action="index.php#contacto">
                <div class="form-group">
                    <div class="col-sm-12">
                        <input type="text" class="form-control forma" id="name" name="name" placeholder="Nombre" value="<?php echo htmlspecialchars($_POST['name']); ?>">
                        <?php echo "<p class='text-danger'>$errName</p>";?>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12">
                        <input type="email" class="form-control forma" id="email" name="email" placeholder="Email" value="<?php echo htmlspecialchars($_POST['email']); ?>">
                        <?php echo "<p class='text-danger'>$errEmail</p>";?>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12">
                        <input type="text" class="form-control forma" id="telefono" name="telefono" placeholder="Teléfono" value="<?php echo htmlspecialchars($_POST['telefono']); ?>">
                        <?php echo "<p class='text-danger'>$errTelefono</p>";?>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12">
                        <textarea class="form-control forma" rows="4" name="message" placeholder="Mensaje"><?php echo htmlspecialchars($_POST['message']);?></textarea>
                        <?php echo "<p class='text-danger'>$errMessage</p>";?>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12">
                        <input type="text" class="form-control forma" id="human" name="human" placeholder="Demuestra que eres humano: ¿Cuanto es 2 + 3 = ?">
                        <?php echo "<p class='text-danger'>$errHuman</p>";?>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12">
                        <input id="submit" name="submit" type="submit" value="Enviar" class="btn btn-primary">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12">
                      <?php echo $result; ?>    
                    </div>
                </div>
              </form> 
            </div>
          </div>
          <div class="row">
            <div id="map">              
            </div>
            </br>
          </div>
        </div>
      </div>
    </div>
    <div class="jumbotron banner-bottom">
      <div class="container">
        <div class="row">
          <div class="col-md-6 text-left"><p>Los Influyentes <span class="glyphicon glyphicon-copyright-mark"></span></p></div>
          <div class="col-md-6 text-right"><small>SÍGUENOS EN LAS REDES SOCIALES</small><a class="btn btn-social-icon btn-facebook" href="https://www.facebook.com/dsimexico"><span style="font-size:40px;" class="fa fa-facebook"><a class="btn btn-social-icon btn-twitter" href="https://twitter.com/DSI_Mex"><span style="font-size:40px;" class="fa fa-twitter"></span></a>
          </div>       
        </div>
        <div class="row pie">          
        </div>
      </div>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/clic.js"></script>
    <script type="text/javascript">
      var map; 
      function initMap()     {
        var mapDiv = document.getElementById("map");
        var latlng = new google.maps.LatLng(19.409167, -99.187381);
        var mapOptions = 
        {
            zoom: 14,
            center:latlng,
            //backgroundColor: '#ff0000',
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            //imageDefaultUI: true
        };
        map = new google.maps.Map(mapDiv, mapOptions);
        var marker = new google.maps.Marker({
          position: latlng,
          map: map,
          labelContent: 'DSI Extintores - JOSE MORAN No. 73 COL. SAN MIGUEL CHAPULTEPEC, DELEGACION MIGUEL HIDALGO, MEXICO, D.F. C.P. 11850',
          title: 'DSI Extintores - JOSE MORAN No. 73 COL. SAN MIGUEL CHAPULTEPEC, DELEGACION MIGUEL HIDALGO, MEXICO, D.F. C.P. 11850',
        });
        var infowindow = new google.maps.InfoWindow({
        	position: latlng,
        	content: '<h4 id="encabezado-producto">DSI Extintores</h4><p>JOSE MORAN No. 73 COL. SAN MIGUEL CHAPULTEPEC, DELEGACION MIGUEL HIDALGO, MEXICO, D.F. C.P. 11850</p>',
        });
        infowindow.open(map,marker);
       // l=19.409167,-99.187381&z=14&t=m&hl=en&gl=US&mapclient=apiv3
       // map.addControl(new GSmallMapControl());
       // map.addControl(new GMapTypeControl());
       // map.addMapType(ROADMAP);
       // map.setCenter(
       // new GLatLng(37.4419, -122.1419), 13);
    }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?callback=initMap" async defer></script>
    <script type="text/javascript">
        $('#myTab a').click(function(e) {
          e.preventDefault();
          $(this).tab('show');
        });

        // store the currently selected tab in the hash value
        $("ul.nav-tabs > li > a").on("shown.bs.tab", function(e) {
          var id = $(e.target).attr("href").substr(1);
          window.location.hash = id;
        });

        // on load of the page: switch to the currently selected tab
        var hash = window.location.hash;
        $('#myTab a[href="' + hash + '"]').tab('show');
    </script>
    <script type="text/javascript">
      $(document).on('pageshow', function (e){
        var center = map.getCenter();
        google.maps.event.trigger(map, "resize");
        map.setCenter(center);
      });
    </script>
  </body>
</html>