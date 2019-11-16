<!DOCTYPE html>
<html>
<head>
   <title>Create new entry for Library Ricarda Nadler</title>
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
<main>
<fieldset>
   <h1>Add Media</h1>

   <form  action="actions/a_create.php" method= "post">
       <table cellspacing= "0" cellpadding="0">
           <tr>
               <th>Type</th>
               <td><input  type="text" name="type"  placeholder="Media type" /></td>
           </tr>
           <tr>
               <th>Title</th>
               <td><input  type="text" name="title"  placeholder="Title" /></td>
           </tr>
           <tr>
               <th>Image</th>
               <td><input type="text"  name="image" placeholder ="HTML Link to image" /></td>
           </tr>
           <tr>
               <th>ISBN-Code(10)</th>
               <td><input type="number"  name="isbn" placeholder ="ISBN-Code(10)" /></td>
           </tr>    
           <tr>
               <th>Short description</th>
               <td><input type="text"  name="short" placeholder ="Short description" /></td>
           </tr>
           <tr>
               <th>Author first name</th>
               <td><input type="text"  name="first_name" placeholder ="Author first Name" /></td>
           </tr>
           <tr>
               <th>Author last name</th>
               <td><input type="text"  name="last_name" placeholder ="Author last name" /></td>
           </tr>
           <tr>
               <th>Publisher</th>
               <td><input type="text"  name="pub_name" placeholder ="Name of publisher" /></td>
           </tr>
           <tr>
               <th>Publishing Date</th>
               <td><input type="date"  name="pub_date" placeholder ="Publishing date of media" /></td>
           </tr>
           <tr>
               <th>Publisher street name</th>
               <td><input type="text"  name="pub_street" placeholder ="Publisher street name" /></td>
           </tr>
           <tr>
               <th>Publisher street number</th>
               <td><input type="number"  name="pub_streetno" placeholder ="Publisher street number" /></td>
           </tr>
           <tr>
               <th>Publisher zip code</th>
               <td><input type="number"  name="pub_zip" placeholder ="Publisher zip code" /></td>
           </tr>
           <tr>
               <th>Publisher city</th>
               <td><input type="text"  name="pub_city" placeholder ="Publisher city" /></td>
           </tr>
           <tr>
               <td><button type ="submit">Insert media</button></td>
               <td ><a href= "index.php"><button  type="button">Back</button></a></td>
           </tr >
       </table>
   </form>

</fieldset >
</main>
<!-- Footer -->
<footer class="page-footer font-small cyan darken-3 ">

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

</body>
</html>