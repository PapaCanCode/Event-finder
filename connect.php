<?php 
//CONNECT
$hostname = 'localhost';
$username = 'root';  
$password = '';
$dbname = 'event_submission';

try {
    $db = new PDO("mysql:host=$hostname;dbname=$dbname", $username, $password);
      $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}







  /*  $userEmail = ""; //first we leave email field blank
    if(isset($_POST['subscribe'])){ //if subscribe btn clicked
      $userEmail = $_POST['email']; //getting user entered email
      if(filter_var($userEmail, FILTER_VALIDATE_EMAIL)){ //validating user email
        $subject = "Thanks for Subscribing to eventgang";
        $message = "Thanks for subscribing to eventgang. You will receive regular updates from us. And we won't share and sell your information.";
        $sender = "From: josephnestor71@gmail.com";
        //php function to send mail

        ini_set('SMTP', "server.com");
        ini_set('smtp_port', "25");
        ini_set('sendmail_from', "josephnestor71@gmail.com");
        if(mail($userEmail, $subject, $message, $sender)){
          ?>
           <!-- show sucess message once email send successfully -->
          <div class="alert success-alert">
            <?php echo "Thanks for Subscribing." ?>
          </div>
          <?php
          $userEmail = "";
        }else{
          ?>
          <!-- show error message if somehow mail can't be sent -->
          <div class="alert error-alert">
          <?php echo "Failed while sending your mail!" ?>
          </div>
          <?php
        }
      }else{
        ?>
        <!-- show error message if user entered email is not valid -->
        <div class="alert error-alert">
          <?php echo "$userEmail is not a valid email address!" ?>
        </div>
        <?php
      }
    }

    //Database connection
    $connect = new mysqli('localhost', 'root', '', 'maildb');
    if($connect -> connect_error){
      die('connection failed : ' .$connect -> connect_error);
    }else{
      $stmt = $connect -> prepare("insert into maillist(id, email)values(?, ?)");
      $stmt -> bind_param("is",$id,$email);
      $stmt -> execute();
      echo "registration successful";
      $stmt ->close();
      $connect ->close();
    }*/
    
  ?>