<!DOCTYPE html>
<!-- saved from url=(0035)http://todomvc.com/examples/flight/ -->
<html lang="en" data-framework="flight"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title>Search</title>
    <link rel="stylesheet" href="libs/base.css">
    <link rel="stylesheet" href="libs/index.css">
    <style type="text/css"></style></head>
<body class="learn-bar">
<section id="todoapp">
    <header id="header">
        <h1>Library's seach tool of UET</h1>
        <form action="" id='myform' method="post">
            <input name="input" id="new-todo" placeholder="What you are looking for ?" autofocus="">
        </form>
    </header>
    <section id="main">
        <form action="" method="post">
            <ul id="todo-list">
                <?php include 'php/search.php';?>
            </ul>
        </form>
    </section>
    <footer id="footer"></footer>
</section>
<footer id="info">
    <p>Hopefully people will get the desired result !!</p>
    <p>Edit by Libary of UET </a></p>
    <p>Copy from TodoMVC 2015</a></p>
</footer>

<script src="libs/jquery.js"></script>
<script src="libs/myjs.js"></script>
</body>
</html>
