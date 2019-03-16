<!--<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>canvas</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
     <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700i" rel="stylesheet">-->
<?php
require_once 'class/usuarios.php';
include 'header.php';
?>

    <style>
    
     * {
  box-sizing: border-box;
         margin: 0;
         padding: 0;
}
html, body {
  height: 100%;
  overflow: hidden;
    font-family: 'Roboto Condensed', sans-serif;
}
.page {
  height: 100%;
  background-color: #584e4a;
}
.content {
  height: 200%;
  transform-origin: top left;
  transition: transform 0.7s cubic-bezier(1, 0.005, 0.24, 1);
/*  background-color: #f0f0f0;*/
  background-color: white;
}
.content_inner {
  height: 50%;
  overflow-y: auto;
  padding: 50px 20%;
}
/* basically all styling from now on */
.menu_toggle {
  z-index: 900;
  position: fixed;
  top: 20px;
  left: 10;
  display: block;
  cursor: pointer;
  width: 110px;
  height: 150px;
  background-color: #ff401c;
  border-bottom-right-radius: 100%;
}
.menu_toggle:active i {
  opacity: 0.8;
}
.menu_toggle i {
  color:white;
}
.menu_toggle .menu_open, .menu_toggle .menu_close {
  position: absolute;
  top: 50%;
  left: 50%;
  margin-top: -15px;
  margin-left: -12px;
  transition: transform 0.7s cubic-bezier(1, 0.005, 0.24, 1);
}
.menu_toggle .menu_open {
  transform-origin: -100px -100px;
}
.menu_toggle .menu_close {
  transform: rotate(20deg);
  transform-origin: -100px -160px;
}
.menu_items {
  position: fixed;
  bottom: 0;
  left: 50px;
  list-style-type: none;
  margin: 0;
  padding: 0;
}
.menu_items li {
  height: 60px;
  margin-bottom: 30px;
  transform: translateX(-300px);
  transition: transform 0.7s 0s cubic-bezier(1, 0.005, 0.24, 1);
}
.menu_items li:nth-child(2) {
  margin-left: 40px;
}
.menu_items li:nth-child(3) {
  margin-left: 80px;
}
/*ESTILOS DE MENU DESPLEGABLE*/
.menu_items a {
  display: block;
  text-decoration: none;
  text-transform: uppercase;
  letter-spacing: 2px;
  color: #a4a4a4;
  transition: color 0.2s;
}
/*ESTILO DE IMAGENES DE MENU DESPLEGABL*/
.menu_items a .icon {
  position: relative;
  display: inline-block;
  margin-right: 25px;
  color: #f0f0f0;
}
/*ESTILOS DE CIRCULO DE IMAGENES DEL MENU DESPLEGABLE*/
.menu_items a .icon:after {
  position: absolute;
  top: 50%;
  left: 50%;
  content: '';
  display: block;
  width: 60px;
  height: 60px;
  margin-left: -33px;
  margin-top: -32px;
  border-radius: 100%;
  border: 2px solid yellow;
  transition: border-color 0.2s;
}
/*ESTILO AL PONER EL CURSOS ENCIMA DE LAS IMAGENES*/
.menu_items a:hover {
  color: #ff401c;
}
/*ESTILO AL PONER EL CURSOS ENCIMA DEL CIRCULO DE LA IMAGEN*/

.menu_items a:hover .icon:after {
  border-color: #ff401c;
}
.menu_items a:active .icon {
  color: #f37272;
}
/* Let's open up the menu */
.shazam {
  /*.content_inner {
   height: 100%;
   }*/
}
.shazam .content {
  transform: rotate(-30deg);
}
.shazam .menu_open {
  transform: rotate(-20deg);
}
.shazam .menu_close {
  transform: rotate(0);
}
.shazam .menu_items li {
  transform: translateX(0);
  transition: transform 0.35s 0.45s cubic-bezier(0.175, 0.885, 0.32, 1.275);
}
.shazam .menu_items li:nth-child(2) {
  transition-delay: 0.47s;
}
.shazam .menu_items li:nth-child(3) {
  transition-delay: 0.48s;
}
h1 {
  padding-bottom: 15px;
  border-bottom: 1px solid #ddd;
}
body {
  color: #584e4a;
}
        .social i{
            font-size: 20px;
            background-color: #ff401c;
            width: 40px;
            height: 40px;
            line-height: 40px;
            text-align: center;
            color: white;
            border-radius: 50px;
        }
    
    </style>
<!--</head>
<body>-->
  <br><br><br>
    <div class="page">
  <span class="menu_toggle">
    <i class="menu_open fa fa-bars fa-lg"></i>
    <i class="menu_close fa fa-times fa-lg"></i>
  </span>
  <ul class="menu_items">
    <li><a href="index.php"><i class="icon fa fa-home fa-2x"></i> Menu</a></li>
    <li><a href="#"><i class="icon fa fa-phone fa-2x"></i> Contactanos</a></li>
    <li><a href="#"><i class="icon fa fa-heart fa-2x"></i> Cerrar</a></li>
  </ul>
  <main class="content">
    <div class="content_inner">
      <h1>Cineri</h1>
      <br><br><br> 
      <div class="social">
          <i class="fa fa-facebook"></i>
          <i class="fa fa-twitter"></i>
          <i class="fa fa-linkedin"></i>
          <i class="fa fa-behance"></i>
          <i class="fa fa-youtube"></i>
      </div>
      <br><br>
    
      <h1>Mision</h1>
      <p>Descripcion</p>
      <br>
      <h1>Vision</h1>
      <p>Descripcion</p>
      <br>
      <h1>Valores</h1>      
      <p>Descripcion</p>
    </div>
  </main>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script>
    // elements
var $page = $('.page');

$('.menu_toggle').on('click', function(){
  $page.toggleClass('shazam');
});
$('.content').on('click', function(){
  $page.removeClass('shazam');
});
    
</script>
<!--</body>-->
<!--</html>-->
<?php
include 'footer.php';
?>

