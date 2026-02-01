<?php
//*opens conn to sql databse
require_once "nook-book-conn1.php";

//* Initializing variables so it will be defined 
$bestfit = "best_fit_1";
$reaction = "submit_2";
$comment = "comment_1";

//* get info from post on html that i want to go to sql
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {  //checks if someone added data, if so it proceeds to the next three functions
                if (isset($_POST['best_fit_1'])) { //if the data came from the best-fit form it continues to the next line
                    $bestfit = ($_POST['best_fit_1']); //(safely saves variables each option) turns choice into a variable for echo
                    echo "You voted for: $bestfit<br>"; //message you get when everything checks out
                }
                if (isset($_POST['submit_2'])) {
                    $reaction = ($_POST['submit_2']);
                    echo "You reacted with: $reaction<br>";
                }
                if (isset($_POST['comment_1'])) {
                    $comment = ($_POST['comment_1']);
                    echo "You commented: $comment<br>";
                }
            }

 //* 2 add form data
$sql = "INSERT INTO user_activity (bestfit, reaction, comment) VALUES ('$bestfit', '$reaction', '$comment')";

//*keeps conn open until insertion is recorded
if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $conn->error;
    }

$conn->close();
?>
