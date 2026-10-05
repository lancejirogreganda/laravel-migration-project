<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    include "database.php";

    $fullname = htmlspecialchars($_POST["fullname"]);
    $age = htmlspecialchars($_POST["age"]);
    $course = htmlspecialchars($_POST["course"]);
    $email = htmlspecialchars($_POST["email"]);
    $motto = htmlspecialchars($_POST["motto"]);

    // Save to database
    $sql = "INSERT INTO students (fullname, age, course, email, motto)
            VALUES ('$fullname', '$age', '$course', '$email', '$motto')";

    $conn->query($sql);

} else {
    echo "<h3>Access Denied</h3>";
    echo "<p>Please submit the form first.</p>";
    echo '<a href="index.html">Go to Form</a>';
    exit;
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Profile</title>

    <style>
        .profile-card {
            width: 350px;
            padding: 20px;
            border: 2px solid #2b6cb0;
            border-radius: 10px;
            background: #f5f5f5;
            font-family: Arial;
        }

        h2 {
            color: #2b6cb0;
        }
    </style>
</head>

<body>

<div class="profile-card">

    <h2>Student Profile</h2>

    <p><b>Full Name:</b> <?php echo $fullname; ?></p>

    <p><b>Age:</b> <?php echo $age; ?></p>

    <p><b>Course:</b> <?php echo $course; ?></p>

    <p><b>Email:</b> <?php echo $email; ?></p>

    <p><b>Motto:</b> <?php echo $motto ?: "No motto provided."; ?></p>

</div>

<br>

<a href="index.html">← Back to Form</a>

</body>
</html>