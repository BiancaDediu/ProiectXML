<html>
 <head>
<title>Photography</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/style.css">
 <script src="https://www.google.com/recaptcha/api.js" async defer></script>
 </head>

<body>
  
    <div class="bgimg-2 w3-display-container w3-opacity-min">
  <div class="w3-display-middle"> 
    <span class="w3-xxlarge w3-text-whitew3-wide">PORTFOLIO</span>
  </div>
</div>
    <div class="w3-content w3-container w3-padding-64" id="portfolio">
  <h3 class="w3-center">MY WORK</h3>
 
<?php

echo "     <a href='index.php'>logout</a>";
?>
  
    <!--inserare imagini sql-->
<?php
       $xslDoc=new DOMDocument();
       $xslDoc->load("data.xsl");
       
       $xmlDoc=new DOMDocument();
       $xmlDoc->load("data.xml");
       //enable extension=php_xsl.dll in php.ini !!!
       $proc=new XSLTProcessor();
       $proc->importStylesheet($xslDoc);
       echo $proc->transformToXml($xmlDoc);
 ?>
   
   <?php
       $xslDoc=new DOMDocument();
       $xslDoc->load("link.xsl");
       
       $xmlDoc=new DOMDocument();
       $xmlDoc->load("link.xml");
       
       $proc=new XSLTProcessor();
       $proc->importStylesheet($xslDoc);
       echo $proc->transformToXml($xmlDoc);
        ?>
  <!-- Footer -->
<footer class="w3-center w3-black w3-padding-64 w3-opacity w3-hover-opacity-off">
  <a href="#home" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
  <div class="w3-xlarge w3-section">
    <a href="http://www.facebook.com" class="fa fa-facebook-official w3-hover-opacity"></a>
    <a href="https://www.instagram.com/" class="fa fa-instagram w3-hover-opacity"></a>
    <a  href="http://googleplus.com/" class="fa fa-google w3-hover-opacity"></a>
    <a  href="http://www.twitter.com/" class="fa fa-twitter w3-hover-opacity"></a>

  </div>
  
</footer>
</body>
 </html>