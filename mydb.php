<?php
$hostName = "localhost";
$userName = "root";
$password = "root";
// Create connection
$conn = mysqli_connect($host, $userName, $password, "seawave_database");
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $companyname = $_REQUEST['companyname'];
    $phone = $_REQUEST['phone'];
    $companyaddress = $_REQUEST['companyaddress'];
    $checkbox = $_REQUEST['servicescheckbox'];
    $message = $_REQUEST['message'];
        $chk="";  
foreach($checkbox as $chk1)  
   {  
      $chk .= $chk1.",";  
   }  
   $sql = "INSERT INTO get_quotes  VALUES ('2022-06-24','$name',
   '$email','$companyname','$phone','$companyaddress','$chk','$message')";

   if(mysqli_query($conn, $sql)){
    //    echo "<h3>data stored in a database successfully."
    //        . " Please browse your localhost php my admin"
    //        . " to view the updated data</h3>";
    echo "<script>window.location.href='./thank-you.html'</script>";

       // echo nl2br("\n$first_name\n $last_name\n "
       //     . "$gender\n $address\n $email");
   } else{
       echo "ERROR: Hush! Sorry $sql. "
           . mysqli_error($conn);
   }  

         
        // Close connection
        mysqli_close($conn);
?>
