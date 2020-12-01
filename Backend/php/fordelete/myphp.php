<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>  
</head>

<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>

<body>

<h3>Contact Form with Validation</h3>

<div class="container">
  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <label for="fname">First Name</label>
    <input type="text" name="fname" placeholder="Your name..">

    <label for="lname">Last Name</label>
    <input type="text" name="lname" placeholder="Your last name..">

    <label>Gender</label>
    <select name="gender">
      <option value="Male">Male</option>
      <option value="Female">Female</option>
      <option value="Other">Other</option>
    </select>

    <label>Message</label>
    <textarea name="msg" placeholder="Write something.." style="height:200px"></textarea>

    <input type="submit">
  </form>
</div>

<?php

$fname = $lname = $gender = $msg = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   $fname = convertData($_POST["fname"]);
   $lname = convertData($_POST["lname"]);
   $msg = convertData($_POST["msg"]);
   $gender = convertData($_POST["gender"]);
};

function convertData($data){
   $data = trim($data);
   $data = stripcslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}


?>

This is you First Name <?php echo $fname ?><br>
   This is you Last Name <?php echo $lname ?><br>
   This is you Gender <?php echo $gender ?><br>
   This is you Message <?php echo $msg ?><br>

</body>
</html>