<?php  
// Ambil data dari file
$noWa = file_get_contents('a.txt');
$pesan = file_get_contents('b.txt');
?>


<!DOCTYPE html>
<html lang="in">
<head>
    <meta charset="UTF-8">
    <title>remote-whatsapp</title>
</head>
<body>
    
  <input type="hidden" name="noWa" id="noWa" value="<?php echo htmlspecialchars($noWa); ?>">
  <textarea style="display:none;" name="pesan" id="pesan"><?php echo htmlspecialchars($pesan); ?></textarea>
    
    
  <br>
  <br>
  <center><button onclick="go()">whatsapp</button></center>
    
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
var noWa = document.getElementById("noWa").value;
var pesan = document.getElementById("pesan").value;
var url = `https://wa.me/${noWa}?text=${encodeURIComponent(pesan)}`;

function go(){
    setTimeout(function(){  
   location.href= url;
    }, 00);    
}  
    </script>
</body>
</html>