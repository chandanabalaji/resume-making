htness_4
<?php

$conn = "";

try {
    $servername = "localhost:3306";
    $dbname = "resume";
    $username = "root";
    $password = "";

    $conn = new PDO(
        "mysql:host=$servername; dbname=$resume",
        $username, $password
    );

   $conn->setAttribute(PDO::ATTR_ERRMODE,
                    PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

?>
