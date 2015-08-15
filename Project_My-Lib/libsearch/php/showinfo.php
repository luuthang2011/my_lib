<?php
    include 'connect.php';
    $year = null;
    $name = null;
    $author = null;
    $key = null;
    $code = null;
    if (!empty($_POST['search'])) {
        $code = $_POST['input'];
        $sql1 = "SELECT bookID,bookName,author,years,bookTypeID FROM books WHERE bookID = '$code'";
        $result1 = $conn->query($sql1);
        if ($result1->num_rows > 0) {
            // output data of each row
            while($row = $result1->fetch_assoc()) {
                $year = $row['years'];
                $name = $row['bookName'];
                $author = $row['author'];
                $key = substr($code,4,1);
            }
        } else {
            echo "not found";
        }
    }
?>
