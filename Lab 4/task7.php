 <?php
 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $name = $email = $username = $password = $confpassword = $gender = $dob = "";
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    } 
    if (empty($_POST["name"])) {
        echo "Name is required. <br>";
    } else {
        $name = test_input($_POST["name"]);
    }
    if (empty($_POST["email"])) {
        echo "Email is required. <br>";
    } else {
        $email = test_input($_POST["email"]);
        // Check if email address is well-formed
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "Invalid email format. <br>";
        }
    } 
    if (empty($_POST["username"])) {
        echo "Username is required. <br>";
    } else {
        $username = test_input($_POST["username"]);
    }
    if (empty($_POST["password"])) {
        echo "Password is required. <br>";
    } else {
        $password = test_input($_POST["password"]);
    }
    if (empty($_POST["confpassword"])) {
        echo "Confirm Password is required. <br>";
    } else {
        $confpassword = test_input($_POST["confpassword"]);
        if ($password != $confpassword) {
            echo "Passwords do not match. <br>";
        } 
    }
    if (empty($_POST["gender"])) {
        echo "Gender is required. <br>";
    } else {
        $gender = test_input($_POST["gender"]);
    }
    if (empty($_POST["dob"])) {
        echo "Date of Birth is required. <br>";
    } else {
        $dob = test_input($_POST["dob"]);
    }
}
?>
