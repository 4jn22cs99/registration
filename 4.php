<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $age = (int)$_POST['age'];
    $interests = $_POST['interests'];
    $bio = htmlspecialchars($_POST['bio']);

    // Save to database or process the data
    $interestsString = implode(", ", $interests);

    echo "<h2>Registration Successful</h2>";
    echo "<p>Name: $name</p>";
    echo "<p>Email: $email</p>";
    echo "<p>Phone: $phone</p>";
    echo "<p>Age: $age</p>";
    echo "<p>Interests: $interestsString</p>";
    echo "<p>Bio: $bio</p>";
}
?>