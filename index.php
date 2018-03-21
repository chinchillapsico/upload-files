<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Alexia</title>
    </head>
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <!--FONTS-->
      <link href='https://fonts.googleapis.com/css?family=Roboto:400,500,300,100,700,900' rel='stylesheet' type='text/css'>
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

      <!-- Compiled and minified CSS -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
      <!-- my CSS -->
      <link rel="stylesheet" href="archivo_min/main.min.css">

	
	
      <body>
 <!--
  <nav>
    <div class="nav-wrapper">
      <a href="#" data-activates="mobile-demo" class="button-collapse show-on-large"><i class="material-icons">menu</i></a>
      <a href="https://codepen.io/collection/nbBqgY/" class="brand-logo" target="_blank">Materialize Framework</a>
      <ul class="right hide-on-med-and-down">
      
        <li><a href="collapsible.html"><i class="material-icons">settings</i></a></li>
        <li><a href="mobile.html"><i class="material-icons">account_circle</i></a></li>
      </ul>
      
      <ul class="side-nav grey darken-2" id="mobile-demo">
        
        
        <li class="sidenav-header blue">
          <div class="row">
            <div class="col s4">
                <img src="user.png" width="48px" height="48px" alt="" class="circle responsive-img valign profile-image">
            </div>
            <div class="col s8">
                <a class="btn-flat dropdown-button waves-effect waves-light white-text" href="#" data-activates="profile-dropdown">User name<i class="mdi-navigation-arrow-drop-down right"></i></a>
                <ul id="profile-dropdown" class="dropdown-content">
                    <li><a href="#"><i class="material-icons">person</i>Profile</a></li>
                    <li><a href="#"><i class="material-icons">settings</i>Setting</a></li>
                </ul>
            </div>
          </div>
        </li>
        
        
        <li class="white">
          <ul class="collapsible collapsible-accordion">
            <li>
              <a class="collapsible-header waves-effect waves-blue"><i class="material-icons">folder_special</i>Layouts <i class="material-icons right" style="margin-right:0;">arrow_drop_down</i></a>
              <div class="collapsible-body">
                <ul>
                  <li><a class="waves-effect waves-blue" href="#"><i class="material-icons">fullscreen</i>Full Screen<span class="new badge right yellow grey lighten-1" data-badge-caption="updated"></span></a></li>
                  <li><a class="waves-effect waves-blue" href="#"><i class="material-icons">swap_horiz</i>Horizontal Menu<span class="new badge right yellow darken-3"></span></a></li>
                  <li><div class="divider"></div></li>
                </ul>
              </div>
            </li>
          </ul>
        </li>
        <li class="white">
          <ul class="collapsible collapsible-accordion">
            <li>
              <a class="collapsible-header waves-effect waves-blue"><i class="material-icons">folder_open</i>A submenu <i class="material-icons right" style="margin-right:0;">arrow_drop_down</i></a>
              <div class="collapsible-body">
                <ul>
                  <li><a class="waves-effect waves-blue" href="#"><i class="material-icons">fullscreen</i>Full Screen</a></li>
                  <li><a class="waves-effect waves-blue" href="#"><i class="material-icons">swap_horiz</i>Horizontal Menu</a></li>
                  <li><div class="divider"></div></li>
                </ul>
              </div>
            </li>
          </ul>
        </li>
        <li class="white"><a href="#" class="waves-effect waves-blue"><i class="material-icons">mail</i>Menu item</a></li>
        <li class="white"><a href="#" class="waves-effect waves-blue"><i class="material-icons">call</i> Menu item</a></li>
        <li class="white"><a href="#" class="waves-effect waves-blue"><i class="material-icons">android</i> Menu item</a></li>
        <li class="white"><a href="#" class="waves-effect waves-blue"><i class="material-icons">dialpad</i> Menu item</a></li>
        <li class="white"><div class="divider"></div></li>
        <li class="white"><a href="#" class="waves-effect waves-blue"><i class="material-icons">language</i> Menu item<span class="new badge right yellow darken-3"></span></a></li>
        
        <li class="sidenav-footer grey darken-2">
          <div class="row">  
            <div class="social-icons">
              <div class="col s2">
                <a href="#"><i class="fa fa-lg fa-linkedin-square"></a></i>
              </div>
              <div class="col s2">
                <a href="#"><i class="fa fa-lg fa-facebook-official"></a></i>
              </div>
              <div class="col s2">
                <a href="#"><i class="fa fa-lg fa-twitter"></a></i>
              </div>
              <div class="col s2">
                <a href="#"><i class="fa fa-lg fa-google-plus"></a></i>
              </div>
              <div class="col s2">
                <a href="#"><i class="fa fa-lg fa-pinterest"></a></i>
              </div>
              <div class="col s2">
                <a href="#"><i class="fa fa-lg fa-youtube"></a></i>
              </div>
            </div>
          </div>
        </li>
      </ul>
      
    </div>
  </nav>
-->
<!-- Gitter Chat Link -->
<div class="fixed-action-btn"><a class="btn-floating btn-large red" href="https://gitter.im/Dogfalo/materialize" target="_blank"><i class="large material-icons">chat</i></a></div>



          <form id="file-form" action="upload.php" method="POST" enctype="multipart/form-data">
  		  	<input type="file" id="file" name="file[]" multiple="" / >
  		  	<button type="submit" id="upload-button">Subir</button>
  		</form>





      <!-- JQuery -->
	    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      <!-- Compiled and minified JavaScript -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
      <!-- my JavaScript -->
	    <script type="text/javascript" src="app.js"></script>	
    </body>
</html>