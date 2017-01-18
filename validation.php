<?php
// Initialize variables to null.
$nameError ="";
$emailError ="";
$genderError ="";
$websiteError ="";
// On submitting form below function will execute.
if(isset($_POST['submit'])){
if (empty($_POST["name"])) {
$nameError = "Name is required";
} else {
$name = test_input($_POST["name"]);
// check name only contains letters and whitespace
if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
$nameError = "Only letters and white space allowed";
}
}
if (empty($_POST["email"])) {
$emailError = "Email is required";
} else {
$email = test_input($_POST["email"]);
// check if e-mail address syntax is valid or not
if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email)) {
$emailError = "Invalid email format";
}
}
if (empty($_POST["password"])) {
$comment = "";
} else {
$comment = test_input($_POST["password"]);
}
}
function test_input($data) {
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;
}
//php code ends here
?>