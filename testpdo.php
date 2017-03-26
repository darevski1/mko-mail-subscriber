<?php
require ('db.php');

try {
    $conn = new PDO($dsn, $user, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // prepare sql and bind parameters
    $stmt = $conn->prepare("INSERT INTO subscriber (email) 
    VALUES (:email)");
    $stmt->bindParam(':email', $email);

    // insert a row
    $email = "john@example.com";
    $stmt->execute();

    // insert another row
    $email = "mary@example.com";
    $stmt->execute();

    // insert another row
    $email = "julie@example.com";
    $stmt->execute();

    echo "New records created successfully";
}
catch(PDOException $e)
{
    echo "Error: " . $e->getMessage();
}
$conn = null;
?>