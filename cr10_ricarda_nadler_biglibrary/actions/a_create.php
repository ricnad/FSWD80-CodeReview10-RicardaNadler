<?php 

require_once 'dbconnect.php';


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

   $sql = "INSERT INTO media (type, title, image, ISBN_code, short_description, publish_date, author_name, author_surname, pub_name, pub_street, pub_streetno, pub_zip, pub_city) VALUES ('$type', '$title', '$image', '$isbn', '$short', '$pub_date', '$first_name', '$last_name', '$pub_name', '$pub_street', '$pub_streetno', '$pub_zip', '$pub_city');";
    if($conn->query($sql) === TRUE) {
       echo "<p>New Record Successfully Created</p>" ;
       echo "<a href='../create.php'><button type='button'>Back</button></a>";
        echo "<a href='../index.php'><button type='button'>Home</button></a>";
   } else  {
       echo "Error " . $sql . ' ' . $conn->conn_error;
   }

   $conn->close();

}

?>