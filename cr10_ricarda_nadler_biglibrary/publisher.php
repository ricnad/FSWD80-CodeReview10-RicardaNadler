<?php 

require_once 'actions/dbconnect.php';


?>

<!DOCTYPE html>
<html>
<head>
   <title>Publisher</title>
  <title>Library Ricarda Nadler</title>
  <link rel="stylesheet" href="style/style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/19d8352366.js" crossorigin="anonymous"></script>


</head>
<body>
<!--nav bar-->

<nav class="navbar navbar-expand-lg">
    <a class="navbar-brand" href="#"><img src="img/library_logo.jpg" alt="Logo" height="80" width=auto></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="create.php">Add media <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="publisher.php">Publisher <span class="sr-only">(current)</span></a>
        </li>
        </ul>
     
    </div>
  </nav>  

<!-- main -->
<main>
<h1 class="text-info">List of all publishers available at the library</h1>
<div class ="manageUser">
   
   <table border="1" cellspacing= "0" cellpadding="0">
        <tr>
               <th>Publisher</th>
               <th>Publisher Adress</th>
               <th>Show media from publisher</th>
           </tr>
	


<?php 
  $sql = "SELECT * FROM media GROUP BY pub_name";
  
  $result = mysqli_query($conn, $sql);

  if($result->num_rows == 0){
    $row = "No result";
    $res = 0;
  } elseif($result->num_rows == 1){
    $row = $result->fetch_assoc();
    $res = 1;
  } else{
    $row = $result->fetch_all(MYSQLI_ASSOC);
    $res = 2;
  }

  if($res == 0){
    echo $row;
  }elseif($res == 1){
    echo $row["title"]." ". $row["image"];
  }else{
    foreach ($row as $value) {
     ?> 
    
    <tr>
      <td><?php echo $value["pub_name"]?></td>
      <td><?php echo $value["pub_street"]." ".$value["pub_streetno"].", ".$value["pub_zip"]." ".$value["pub_city"]?></td>
      <td><?php echo " <a href='media_pub.php?id=".$value["media_id"]."'> Show all media from publisher </a><br>";
    }
  }
?>
</td>
</tr>
</table>
</div>
</main>
<!-- Footer -->
<footer class="fixed-bottom page-footer font-small cyan darken-3 ">

  <!-- Footer Elements -->
  <div class="container">

    <!-- Grid row-->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-12 py-5">
        <div class="mb-5 flex-center">

          <!-- Facebook -->
          <a class="fb-ic">
            <i class="fab fa-facebook-f fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
          </a>
          <!-- Twitter -->
          <a class="tw-ic">
            <i class=""> </i>
          </a>
          <!-- Google +-->
          <a class="gplus-ic">
            <i class="fab fa-google-plus-g fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
          </a>
          <!--Linkedin -->
          <a class="li-ic">
            <i class="fab fa-linkedin-in fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
          </a>
          <!--Instagram-->
          <a class="ins-ic">
            <i class="fab fa-instagram fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
          </a>
          <!--Pinterest-->
          <a class="pin-ic">
            <i class="fab fa-pinterest fa-lg white-text fa-2x"> </i>
          </a>
        </div>
      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row-->

  </div>
  <!-- Footer Elements -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2019 Copyright: Ricarda Nadler CodeFactory
  </div>
  <!-- Copyright -->
</footer>
</body>
</html>