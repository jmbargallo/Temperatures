<html>
 <head>
  <title>Temperatura Pessimista</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
 </head>
 <body>
 
 <div class="container-fluid" >
   
<h1 align="center">Temperatura pessimista</h1>
    <img src="menys_vint.png"  class="mx-auto d-block" width=90% >
    <br>
    <h2 align="center">
    <?php   
    
     $filename = 'menys_vint.png';
if (file_exists($filename)) {
    
    echo "Fitxer : "."$filename"."  ";
    
    echo "Ultima modificació: " . date ("d/m/yy  H:i:s." ,filemtime($filename));
}
     ?>
     </h2 >
    <br>
    <img src="menys_vuitanta.jpg" class="mx-auto d-block" class="rounded" width=90% >
    <br>
    <h2 align="center">
    <?php      
     $filename2 = 'menys_vuitanta.jpg';
if (file_exists($filename2)) {
    echo "Fitxer : "."$filename2"."  ";
    echo "Ultima modificacio: " . date ("d/m/yy  H:i:s.", filemtime($filename2));
}
     ?>
     </h2 >
     
     </div>

 </body>
</html>
