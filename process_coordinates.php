<?php
// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $lon1 = $_POST["lon1"];
    $lat1 = $_POST["lat1"];
    $lon2 = $_POST["lon2"];
    $lat2 = $_POST["lat2"];
    $lon3 = $_POST["lon3"];
    $lat3 = $_POST["lat3"];
    $lon4 = $_POST["lon4"];
    $lat4 = $_POST["lat4"];
    $email = $_POST['email'];

    // Validate input
    $errors = [];

    // Validate email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email address";
    }

    // If there are validation errors, display them and exit
    if (!empty($errors)) {
        foreach ($errors as $error) {
            echo $error . "<br>";
        }
        exit;
    }
    // Optionally, sanitize input
    $lon1 = filter_var($lon1, FILTER_SANITIZE_NUMBER_FLOAT);
    $lat1 = filter_var($lat1, FILTER_SANITIZE_NUMBER_FLOAT);
    $lon2 = filter_var($lon2, FILTER_SANITIZE_NUMBER_FLOAT);
    $lat2 = filter_var($lat2, FILTER_SANITIZE_NUMBER_FLOAT);
    $lon3 = filter_var($lon3, FILTER_SANITIZE_NUMBER_FLOAT);
    $lat3 = filter_var($lat3, FILTER_SANITIZE_NUMBER_FLOAT);
    $lon4 = filter_var($lon4, FILTER_SANITIZE_NUMBER_FLOAT);
    $lat4 = filter_var($lat4, FILTER_SANITIZE_NUMBER_FLOAT);

    // Process the data (e.g., store in a database)
    // Example: Connect to database and insert coordinates
    // $db = new PDO("mysql:host=localhost;dbname=your_database", "username", "password");
    // $stmt = $db->prepare("INSERT INTO coordinates (lon, lat) VALUES (?, ?)");
    // $stmt->execute([$lon1, $lat1]);

    // Provide feedback to the user
    echo "Coordinates submitted successfully.";
    // After processing the data, redirect to send_email.php to send the email
    // You can redirect using header() function
    header("Location: send_email.php?email=$email&lon1=$lon1&lat1=$lat1&lon2=$lon2&lat2=$lat2&lon3=$lon3&lat3=$lat3&lon4=$lon4&lat4=$lat4");
    } else {
    // If the form was not submitted via POST method, redirect the user
    header("Location: enter_coordinates.php");
    exit;
}


?>
