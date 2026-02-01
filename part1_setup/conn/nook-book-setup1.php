<?php
//*opens conn to sql databse
require_once "nook-book-conn1.php";

 //* you create your database here
$sql = "CREATE TABLE IF NOT EXISTS user_activity 
        (post_id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
        bestfit VARCHAR(50) NULL, 
        reaction VARCHAR(50) NULL, 
        comment TEXT NULL, 
        posted_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
        )";

//*keeps conn open until table is made
if ($conn->query($sql) === TRUE) {
    echo "Table user_activity created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>
