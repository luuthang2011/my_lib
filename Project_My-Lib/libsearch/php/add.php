<?php
    include 'connect.php';
    if (!empty($_POST['year']) && $_POST['year'] != ""
        && !empty($_POST['name']) && $_POST['name'] != ""
        && !empty($_POST['author']) && $_POST['author'] != ""
        && !empty($_POST['check']) && is_numeric($_POST['year'])
        && !empty($_POST['submit'])
    ) {
        $year = $_POST['year'];
        $faculty = $_POST['faculty'];
        $name = $_POST['name'];
        $author = mb_strtoupper($_POST['author'],"UTF-8");   // fix string Vietnamese
        // encode
        $like = $year . $faculty;
        $sql3 = "SELECT bookID FROM books WHERE bookID like '$like%'";
        $result3 = $conn->query($sql3);
        $order = $result3->num_rows;
        //echo $order;
        $code = $year . $faculty . $order;
        // out endcode
        $sql1 = "SELECT years,author FROM books WHERE years = '$year' and author = '$author'";
        $result1 = $conn->query($sql1);
        if ($result1->num_rows > 0) {
            // output data of each row
            while($row = $result1->fetch_assoc()) {
                echo " -> This essay existed!!";
            }
        } else {
            $sql2 = "INSERT INTO books (bookID,bookName,author,years,bookTypeID,numbers )
        VALUES ('$code','$name','$author',$year,'LV',1)";
            $sql4 = "INSERT INTO copies (bookID,copyID,checked )
        VALUES ('$code','$code',1)";

            if ($conn->query($sql2) === TRUE && $conn->query($sql4) === TRUE) {
                echo " -> Complete!! Essay: " .$code ;
            } else {
                echo "<br>Error: " . $sql . "<br>" . $conn->error;
            }
        }
    }
    else {
        echo " -> WARNING :: NO NEW ADDED ::";
    }
?>
