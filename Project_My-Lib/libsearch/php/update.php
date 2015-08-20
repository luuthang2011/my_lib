<?php
    include 'connect.php';
    if (!empty($_POST['year']) && $_POST['year'] != ""
        && !empty($_POST['name']) && $_POST['name'] != ""
        && !empty($_POST['author']) && $_POST['author'] != ""
        && !empty($_POST['check']) && is_numeric($_POST['year'])
        && !empty($_POST['update'])
    ) {
        $year = $_POST['year'];
        $faculty = $_POST['faculty'];
        $name = $_POST['name'];
        $author = mb_strtoupper($_POST['author'], "UTF-8");   // fix string Vietnamese
        // encode
        $code = $_POST['input2'];
        // out endcode
        $sql1 ="UPDATE books SET bookName='$name',author='$author' WHERE bookID = '$code' ";
        $result1 = $conn->query($sql1);
        echo "Update completed !!";
    }
    else {

    }
?>
