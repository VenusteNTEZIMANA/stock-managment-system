<?php
$name="localhost";
$username="root";
$password="";
$db="test_db";

$conn=mysqli_connect($name,$username,$password,$db);
if (!$conn) {
    echo "connection failed";
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email= $_POST['email'];

    // Check if email exists
    $sql = "SELECT * FROM user WHERE email='$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Generate a random password
        $new_password = generateRandomPassword();

        // Hash the password (use a strong hashing algorithm like bcrypt)
        $hashed_password = password_hash($new_password, PASSWORD_DEFAULT);

        // Update the user's password in the database
        $sql = "UPDATE user SET password='$hashed_password' WHERE email='$email'";
        if ($conn->query($sql) === TRUE) {
            // Send an email with the new password
            sendPasswordResetEmail($email, $new_password);
            echo "New password sent to your email.";
        } else {
            echo "Error updating record: " . $conn->error;
        }
    } else {
        echo "Email not found.";
    }
}

$conn->close();

function generateRandomPassword($length = 10) {
    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
    $password = "";
    for ($i = 0; $i < $length; $i++) {
        $password .= $chars[rand(0, strlen($chars) - 1)];
    }
    return $password;
}

function sendPasswordResetEmail($email, $password) {
    // Implement your email sending logic here, e.g., using PHPMailer or a mailing service
    // ...
}

?>