<?php
if(isset($_POST['submit'])) {
$userName = $_POST['userName'];
$userPhoneNumber = $_POST['userPhoneNumber'];
$userEmail = $_POST['userEmail'];
$userInfo = $_POST['userInfo'];
echo "You have been registered successfully!<br>";
echo "Your name is: $userName<br>";
echo "Your phone number is: $userPhoneNumber<br>";
echo "Your email is: $userEmail<br>";
echo "Your information is: $userInfo<br>";
}
