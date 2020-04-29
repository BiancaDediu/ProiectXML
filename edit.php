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
<div id="content">
<?php
if(isset($_POST['submit'])) {
$id=$_POST['id'];
 $data=simplexml_load_file('data.xml');
foreach($data->date as $date){
    if($date->id==$id){
unlink($date->image);
 $date->title=$_POST['title'];
$target="./images/".md5(uniqid(time())).basename($_FILES['image']['name']);
 $date->image=$target;
    }
}
$handle=fopen("data.xml","wb");
fwrite($handle,$data->asXML());
fclose($handle);

if(move_uploaded_file($_FILES['image']['tmp_name'],$target)){
       header('location:welcome.php');
    }else{
        $msg="Vai! Vai! Vai!!!";
    }
}
  ?>

<?php
$id=$_GET['id'];
$data=simplexml_load_file('data.xml');
foreach($data->date as $date){
    if($date->id==$id){
?>
<form method="post" enctype="multipart/form-data">
<input type = "hidden" name = "id" value="<?php echo $date->id; ?>"> 
Title: <br>
<input type = "text" name = "title" value="<?php echo $date->title; ?>"> <br><br>
Image: <br>
 <input type="file" name="image"><br><br>
 <img src="<?php echo $date->image; ?>" height="400" width="300"><br><br>
<input type="submit" name="submit" value="Update">
</form>
<?php
    }
}
?>
</div>
 <footer class="w3-center w3-black w3-padding-64 w3-opacity w3-hover-opacity-off">
  <a href="#portfolio" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
  <div class="w3-xlarge w3-section">
    <a href="http://www.facebook.com" class="fa fa-facebook-official w3-hover-opacity"></a>
    <a href="https://www.instagram.com/" class="fa fa-instagram w3-hover-opacity"></a>
    <a  href="http://googleplus.com/" class="fa fa-google w3-hover-opacity"></a>
    <a  href="http://www.twitter.com/" class="fa fa-twitter w3-hover-opacity"></a>

  </div>
  
</footer>
</body>
 </html>