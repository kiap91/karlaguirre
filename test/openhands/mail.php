<?php
    /**
     * sends mail submitted from the contact form
     */
    
    /*
        EDIT BELOW
     */
    $to_Email       = "contact@taggcar.com"; //Replace with your email address
    $subject        = 'Welcome to taggcar!'; //Subject line for emails
    $welcome_message = "user text message";

    /*Database connection settings*/
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "taggcar";
    /*
        EDIT ABOVE
     */


    if(!isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest')
        ;//die("No direct access.");

    if(!isset($_POST["email"]) ) {
        $output = json_encode(array('type'=>'Error', 'text' => 'Input fields are empty!'));
        die($output);
    }

    //additional validation
    $user_Email       = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);

    if(!filter_var($user_Email, FILTER_VALIDATE_EMAIL)) {
        $output = json_encode(array('type'=>'Hold up!', 'text' => 'Please enter a valid email!'));
        die($output);
    }

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO subscriptions (email) VALUES ('$user_Email')";

    if ($conn->query($sql) === TRUE) {
        $sentMail = @mail($user_Email, $subject, $welcome_message , $headers);
        if(!$sentMail) {
            $output = json_encode(array('type'=>'Oops! Sorry...', 'text' => 'Looks like there was a problem with the server.'));
            die($output);
        } else {
            $output = json_encode(array('type'=>'Thank you!', 'text' => 'You have suscribed successfully!'));
            die($output);
        }
    } else {
         $output = json_encode(array('type'=>'Oh no!', 'text' => 'Server Database error, could not save email. Sorry for the inconvenience.'));
        die($output);
    }

    $conn->close();
   
    
?>