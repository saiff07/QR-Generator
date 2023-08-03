<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>QR Generator</title>
</head>
<body>   

<div class="container">
    <form  id="form" class="form" method="post" >
  
    <h1 class="clr">QR Generator</h1>

 
<div class="center">
  <p>  <input class="demo" type="text" name="name" id="name" placeholder="Name" required> </p>
  <p>  <input class="demo" type="text" name="text" id="email" placeholder="QR Link" required> </p>
  <p> <button class="btn" type="submit" name= "sub" >Generate</button></p>

  <?php

  include("phpqrcode/qrlib.php");

  if (isset($_POST['sub'])) {

    $path = 'images/';

    $file = $path . $_POST['name'] . '.png';

    $text = $_POST['text'];

    echo '<div class = "padd"> <center>' . $_POST['name'] . " , your QR is here : </center> </div>";

    QRcode::png($text, $file);
    echo "<center><img src='" . $file . "'></center>";

  }
  ?>


 
</div>

</form>

</div>
    
</body>
</html>

