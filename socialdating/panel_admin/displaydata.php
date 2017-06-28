<?php
    session_start(); // needs to be before anything else on page to use $_SESSION
    // this page outputs the textarea1 from the session IF it exists
    $name = ""; // set var to avoid errors
    if(isset($_SESSION['name'])){
        $name = $_SESSION['name']
    }
?>

<html>
   <head>
     <title>Display data</title>
   </head>
   <body>
     <form>
     <table>
       <tr>
       <th>Name</th>
       <th>Mobile Number</th>
       <th>Gender</th>
       <th>Age</th>
       <th>current lat</th>
       <th>current long</th>
       <th>change lat</th>
       <th>change long</th>
       <th>Image</th>
       <th>Other details</th>
     </tr>
     <tr>
       <th>name</th>
       <th>number</th>
       <th>gender</th>
       <th>age</th>
       <th>curr_lat</th>
       <th>curr_long</th>
       <th>change_lat</th>
       <th>change_long</th>
       <th>details</th>
       <th>imgst</th>
     </tr>
   </table>
 </form>
 </body>
 </html>
