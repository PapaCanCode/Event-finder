<?php
 require_once 'connect.php';
 session_start();

 if($_SERVER['REQUEST_METHOD'] == 'POST'){
  $firstname = $_POST['first_name'];
  $lastname = $_POST['last_name'];
  $email = $_POST['email'];
  $eventtype = $_POST['event_type'];
  $location = $_POST['location'];
  $timedate = $_POST['time&date'];
 
    try {
    $stmt = $db->prepare("INSERT Into submission(firstname, lastname, email, eventtype, location, timedate) values(?,?,?,?,?,?)");
    $stmt->execute([$firstname,$lastname,$email,$eventtype,$location,$timedate]);
    $_SESSION['success'] = 'Message sent successfully';
    } catch (PDOException $e) {
        $_SESSION['error'] = $e->getMessage();
    }
 }

 header('Location: connect.php');





/*<?php


//EVENT SUBMISSION FORM
 $firstname = $_POST['first_name'];
 $lastname = $_POST['last_name'];
 $email = $_POST['email'];
 $eventtype = $_POST['event_type'];
 $location = $_POST['location'];
 $timedate = $_POST['time&date'];

 if (!empty($firstname) || !empty($lastname) || !empty($email) || !empty($eventtype) || !empty($location) || !empty($timedate)){
   $host = "localhost";
   $dbUsername = "root";
   $dbpassword = "";
   $dbname = "event_submission";

   //Database connection
   $conn = new mysqli($host, $dbUsername, $dbpassword, $dbname);
   if($connect -> connect_error){
    die('connection failed : ' .$connect -> connect_error);
  }else{
    $SELECT = "SELECT email From submission Where email=? Limit 1";
    $INSERT = "INSERT Into submission(firstname, lastname, email, eventtype, location, timedate) values(?,?,?,?,?,?)";

    //prepare statement
    $stnt = $conn->prepare($SELECT);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->bind_result($email);
    $stmt->store_result();
    $stmt->execute();
    $rnum = $stmt->num_rows;

     if($rnum==0){
       $stmt->close();
       
       $stmt = $conn->prepare($INSERT);
       $stmt->bind_param("sssssi", $firstname, $lastname, $email, $eventtype, $location, $timedate);
       $stmt->execute();
       echo "submission succcessful";
     }else{
       echo "Email already exsists";
     }
     $stmt->close();
     $conn->close();
  }
 }else{
   echo "All fields are requied";
   die();
 }*/