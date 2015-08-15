<?php
    include 'connect.php';
    $ans = 0;
    if (!empty($_POST['input'])) {
        $find = $_POST['input'];
        $sql1 = "SELECT bookName,bookID FROM books WHERE bookName like '%$find%'";
        $result1 = $conn->query($sql1);
        if ($result1->num_rows > 0) {
            // output data of each row
            while($row = $result1->fetch_assoc()) {
                echo "<li>" . '<div class="view">' . "<label>" . "ID: ".$row['bookID']. " - "
                    . $row['bookName'] . "</label>" . '<button class="destroy">' . "</div>" ."</li>";
                $ans ++;
            }
        }
        $arr = explode(" ", str_replace(",", ", ", $find));
        //echo $count ;
        for ($i = 0;$i < sizeof($arr); $i++) {
            echo $arr[$i];
            $find2 = $arr[$i];
            $sql2 = "SELECT bookName,bookID FROM books WHERE bookName like '%$find2%'";
            $result2 = $conn->query($sql2);
            if ($result2->num_rows > 0) {
                // output data of each row
                while($row = $result2->fetch_assoc()) {
                    echo "<li>" . '<div class="view">' . "<label>" . "ID: ".$row['bookID']. " - "
                        . $row['bookName'] . "</label>" . '<button class="destroy">' . "</div>" ."</li>";
                    $ans ++;
                }
            }
        }
        if ($ans == 0) {
            echo "<li>" . '<div class="view">' . "<label>" . "CANT FIND THIS SEARCH" .
                "</label>" . '<button class="destroy">' . "</div>" ."</li>";
        }
    }
?>
