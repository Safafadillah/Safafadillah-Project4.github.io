<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Perbandingan Angka</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
<?php

if(isset($_POST['submit'])) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    
    if($num1 == $num2) {
        echo "<h1> <span style='color: yellow;'> = </span> </h1>";
        echo "<h1> $num1 sama dengan $num2 </h1>";
    } elseif($num1 > $num2) {
        echo "<h1> <span style='color: yellow;'> > </span> </h1>";
        echo" <h1>$num1 lebih besar dari  $num2 </h1>";
    } else {
        echo "<h1> <span style='color: yellow;'> < </span> </h1>";
        echo "<h1>$num1 lebih kecil dari $num2</h1>";
    }
    
}
?>

  <h4>Cek Perbandingan Angka</h4>
  <form action="index.php" method="post">

    <div class="form-group">
      <label for="num1">Angka Pertama:</label>
      <input type="number" id="num1" name="num1" required>

      <label for="num2">Angka Kedua:</label>
      <input type="number" id="num2" name="num2" required>

      <button type="submit" name="submit">kirim</button>
    </div>

</div>

</body>
</html>
