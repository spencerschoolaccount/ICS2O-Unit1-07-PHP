<!DOCTYPE HTML>
<html>
  
  <head>
    <meta charset="utf-8" />
    <meta name="description" content="My first php page" />
    <meta name="keywords" content="ics2o" />
    <meta name="author" content="Mr. Atkinson" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
    <link rel="apple-touch-icon" sizes="180x180" href="./orb_favicon_io/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./orb_favicon_io/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./orb_favicon_io/favicon-16x16.png">
    <link rel="manifest" href="./orb_favicon_io/site.webmanifest">
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <title>FORM</title>
  </head>
  
  <body>
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
      
      <header class="mdl-layout__header">
        <div class="mdl-layout__header-row">
          <span class="mdl-layout-title">FORM</span>
        </div>
      </header>
  
      <main class="mdl-layout__content" style="margin-left:75px;">
        <?php
          echo "<h3>Welcome ".$_POST['sample1'];"</h3>"; 
        ?>
      </main>

    </div>
  </body>
</html>
