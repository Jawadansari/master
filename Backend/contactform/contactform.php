<!DOCTYPE html>
<html lang="en">

<head>
  <title>Send Email From Contact Page using Php</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>

<body>

  <div class="container">
    <br>
    <center>
      <h4>Send Email From Contact Page using PHP</h4>
    </center>
    <div class="row">
      <div class="col-md-2">
      </div>
      <div class="col-md-8">

        <form action="" method="post">
          <div class="form-group">
            <label>Name:</label>
            <input type="text" class="form-control" placeholder="Enter Name" name="name">
          </div>
          <div class="form-group">
            <label>Email:</label>
            <input type="email" class="form-control" placeholder="Enter Email" name="email">
          </div>
          <div class="form-group">
            <label>Contact:</label>
            <input type="text" class="form-control" placeholder="Enter Contact No" name="contact">
          </div>
          <div class="form-group">
            <label>Message:</label>
            <textarea class="form-control" rows="3" placeholder="Message" name="message"></textarea>
          </div>
          <button type="submit" class="btn btn-primary" name="submit">Send Here</button>
        </form>
      </div>
    </div>
    <div class="col-md-2">
    </div>
  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>

<?php



$host = 'localhost';
$username = 'jadsawgraphicszz_contactform';
$password = 'HelloChannel@123';

// creating connection from server
$con = new mysqli($host, $username, $password);

// checking connection
if ($con->connect_error) {
  die('connection failed: ' . $con->connect_error);
}


// inserting data into database if all value are avalible
if (isset($_POST['name'], $_POST['email'], $_POST['contact'], $_POST['message'])) {

  $name = $_POST['name'];
  $email = $_POST['email'];
  $contact = $_POST['contact'];
  $message = $_POST['message'];
  if ($name == '' || $email == '' || $contact == '' || $message == '') {
    echo "</script>alert('All fields are required !')</script>";
  } else {

    // sending query for inserting data in to table (data)
    $sql = "INSERT INTO `jadsawgraphicszz_contactform` . `data`(`name`, `email`, `contact`, `message`) VALUES ('$name', '$email', '$contact', '$message')";

    if ($con->query($sql) === FALSE) {
      echo $con->error;
    }

    $from       = "JADSAW Graphics.";
    $webmaster  = "info@jadsawgraphics.com";
    $to         = "muhammad.jawad5855@gmail.com," . $_POST['email'];
    $subject    = " Contact Us From JADSAW Graphics.com";

    $headers    = "From: " . $from . "<" . $webmaster . ">\r\n";
    $headers    .= "X-Mailer: PHP/" . phpversion() . "\r\n";
    $headers    .= "MIME-Version: 1.0" . "\r\n";
    $headers    .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

    $message = "<html><body>";
    $message .= "<p>Hello,</p>";
    $message .= "<p>" . $_POST['name'] . "</p><br>";
    
    $message = "<p>We recived your message and your details ";
    $message .= "<p>Name: " . $_POST['name'] . "</p>";
    $message .= "<p>Email: " . $_POST['email'] . "</p>";
    $message .= "<p>Contact: " . $_POST['contact'] . "</p>";
    $message .= "<p>Message: " . $_POST['message'] . "</p><br>";
    $message .= "<p>Thanks for contacting us We will Get back to you soon</p>";
    $message .= "<p>Best Regards</p>";
    $message .= "</body></html>";

    $sendmail = mail($to . "muhammad.jawad5855@gmail.com", $subject, $message, $headers);


    echo "<script>alert('Thank you for contact us, our team will contact with you very soon')</script>";
  }
  

    // $from = "info@jadsawgraphics.com";
    // $to        = "muhmmad.jawad5855@gmail.com";
    // $subject   = " Contact Us From JADSAW Graphics.com";

    // $headers   = "From: " . $from_admin . "\r\n";
    // $headers    .= "X-Mailer: PHP/" . phpversion() . "\r\n";
    // $headers    .= "MIME-Version: 1.0" . "\r\n";
    // $headers    .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

    // $message = "<html><body>";
    // $message .= "<p>Name: " . $_POST['name'] . "</p>";
    // $message .= "<p>Email: " . $_POST['email'] . "</p>";
    // $message .= "<p>Contact: " . $_POST['contact'] . "</p>";
    // $message .= "<p>Message: " . $_POST['message'] . "</p>";
    // $sendmail = mail($to, $subject, $message, $headers);
  
}

?>