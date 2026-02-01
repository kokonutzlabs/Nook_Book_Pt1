<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="Project1/nook-book-layout.css">
        <title>nook book voting, reacting, and commenting</title>
    </head>
    
    <body>
        <?php
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {  //checks if someone added data, if so it proceeds to the next three functions
                if (isset($_POST['best_fit'])) { //if the data came from the best-fit form it continues to the next line
                    $bestfit = ($_POST['best_fit']); //(safely saves variables each option) turns choice into a variable for echo
                    echo "You voted for: $bestfit<br>"; //message you get when everything checks out
                }
                if (isset($_POST['reaction'])) {
                    $reaction = ($_POST['reaction']);
                    echo "You reacted with: $reaction<br>";
                }
                if (isset($_POST['comment'])) {
                    $comment = ($_POST['comment']);
                    echo "You commented: $comment<br>";
                }
            }
        ?>
    </body>
</html>
