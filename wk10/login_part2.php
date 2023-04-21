<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $password = isset($_POST['password']) ? $_POST['password'] : '';

    // Array of weak passwords
    $weakPasswords = array(
        '123456',
        'password',
        '123456789',
        '12345678',
        '12345',
        '1234567',
        '1234567890',
        'qwerty',
        'abc123',
        '111111'
    );

    // Check if the entered password is in the list of weak passwords
    if (!in_array($password, $weakPasswords) && $password === '!@#$') {
        $username = isset($_POST['username']) ? $_POST['username'] : ''; // Get the entered username
        echo "Welcome " . $username . " to Phuong's Portal"; // Display welcome message with username
        exit; // Stop further execution of the script
    } else {
        echo "Weak Password";
    }
}
?>

<h1>Weak Password</h1>
<form method="post">
    <input type="hidden" name="username" value="Prof. Ben Blanc"> <!-- Add hidden field for username -->
    <label>Password</label>
    <input type="password" name="password">
    <br/>
    <input type="submit">
</form>

