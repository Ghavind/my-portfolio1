<!DOCTYPE html>
<html>
<head>
<title>Contact Me</title>
</head>
<body>
<h1>Contact Form</h1>
<form action="contact.php" method="POST">
Name: <input type="text" name="name"><br><br>
Email: <input type="email" name="email"><br><br>
Message: <textarea name="message"></textarea><br><br>
<input type="submit" name="submit" value="Send">
</form>


<?php
if(isset($_POST['submit'])){
echo "<h3>Thank you for contacting me!</h3>";
echo "Name: " . $_POST['name'] . "<br>";
echo "Email: " . $_POST['email'] . "<br>";
echo "Message: " . $_POST['message'];
}
?>
</body>
</html>