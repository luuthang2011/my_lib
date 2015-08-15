
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link rel="stylesheet" href="../libs/add.css">
    <style type="text/css"></style></head>
<title>-DEV-    Add</title>

</head>
<body>
<h1>ADD NEW ESSAYS / FIND ESSAY AND UPDATE</h1>
<h4>--> FIND ESSAY AND TAKE INFO <--</h4>
<form method="post" action="">
    <input type="text" name="input" placeholder="Enter essay's code!" value="<?php include 'showinfo.php'; echo $code?>">
    <input type="submit" name="search">
</form>
<div>
    <h3>ESSAY'S INFOMATIONS</h3>
    <p>CODE: <?php include 'showinfo.php'; echo $code?></p>
    <form method="post" action="">
        <input type="text" name="input2" id="input2" style="display: none" value="<?php include 'showinfo.php'; echo $code?>">
        <table>
            <tr>
                <td><label>YEAR: </label></td>
                <td><input type="text" name="year" value="<?php include 'showinfo.php'; echo $year?>"></td>
            </tr>
            <tr>
                <td><label>ESSAY'S MOJOR: </label></td>
                <td><select name="faculty">
                        <option <?php include 'showinfo.php'; if($key == 'C' || $key == 'c') echo "selected";?> value="C">CNTT</option>
                        <option <?php include 'showinfo.php'; if($key == 'D' || $key == 'd') echo "selected";?> value="D">DTVT</option>
                        <option <?php include 'showinfo.php'; if($key == 'V' || $key == 'v') echo "selected";?> value="V">VLKT</option>
                        <option <?php include 'showinfo.php'; if($key == 'M' || $key == 'm') echo "selected";?> value="M">CDT</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td><label>ESSAY'S NAME: </label></td>
                <td><input type="text" class="inputform" name="name" value="<?php include 'showinfo.php';echo $name;?>"></td>
            </tr>
            <tr>
                <td><label>AUTHOR: </label></td>
                <td><input type="text" class="inputform" name="author" value="<?php include 'showinfo.php';echo $author;?>"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
            </tr>
        </table>
        <label>
            <input type="checkbox" name="check">
            <label>I am sure that these informations exactly.</label>
        </label>
        <br>
        <input type="submit" value="submit add" id="submit" name="submit">
        <input type="submit" name="update" value="update">
    </form>
    <p>Noti: <?php include 'add.php'; include 'update.php';?></p>
</div>
</body>
</html>

<?php
echo '<pre>'.print_r($_POST,true).'</pre>';
?>
