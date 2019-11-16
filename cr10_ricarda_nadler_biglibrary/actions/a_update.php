<?php require_once 'dbconnect.php'; ?>

<!DOCTYPE html>
<html>
<head>
   <title>Library Ricarda Nadler</title>
  <link rel="stylesheet" href="../style/style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/19d8352366.js" crossorigin="anonymous"></script>

</head>
<body>

<!--nav bar-->

<nav class="navbar navbar-expand-lg">
    <a class="navbar-brand" href="#"><img src="../img/library_logo.jpg" alt="Logo" height="80" width=auto></a>
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
<!--main-->
  <main>
<?php
if ($_POST) {
   $type = $_POST['type'];
   $title = $_POST['title'];
   $image = $_POST['image'];
   $isbn = $_POST['isbn'];
   $short = $_POST['short'];
   $first_name = $_POST['first_name'];
   $last_name = $_POST['last_name'];
   $pub_name = $_POST['pub_name'];
   $pub_date = $_POST['pub_date'];
   $pub_street = $_POST['pub_street'];
   $pub_streetno = $_POST['pub_streetno'];
   $pub_zip = $_POST['pub_zip'];
   $pub_city = $_POST['pub_city'];
   
   $id = $_POST['id'];

   $sql = "UPDATE media SET type='$type', title='$title', image='$image', ISBN_code='$isbn', short_description='$short', publish_date='$pub_date', author_name='$first_name', author_surname='$last_name', pub_name='$pub_name', pub_street='$pub_street', pub_streetno='$pub_streetno', pub_zip='$pub_zip', pub_city='$pub_city' WHERE media_id = {$id}" ;
   if($conn->query($sql) === TRUE) {
       echo  "<p>Successfully Updated</p>";
       echo "<a href='../update.php?id=" .$id."'><button type='button'>Back</button></a>";
       echo  "<a href='../index.php'><button type='button'>Home</button></a>";
   } else {
        echo "Error while updating record : ". $conn->error;
   }

   $conn->close();

}

?>
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
<!-- Footer -->


</body>
</html>
