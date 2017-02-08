<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="dist/css/bootstrap.min.css">
</head>
<body>
    <?php 
        $page = "Home";
        require("menu.php");
    ?>
    <h1 class="text-center">Hello and Welcome!</h1>
    <!--FIRST
    <form class="text-center" method="GET" action="greeting.php">
        Enter you name:
        <input type="text" name="username">
        <input type="text" name="gender">
        <button type="submit">Submit</button>
    </form>-->
    
    <!--SECOND
    Choose thine Language: <br>
    <a href='greeting.php?l=english'>English</a>
    <a href='greeting.php?l=old_english'>Old English</a>
    <a href='greeting.php?l=ancient_english'>Ancient English</a>
    <a href='greeting.php?l=future_english'>Future English</a>
    <a href='greeting.php?l=past_english'>Past English</a>-->
    
    <!--THIRD-->
    <form class="text-center" method="GET" action="greeting.php">
        Enter numbers:
        <input type="text" name="num1">
        <input type="text" name="num2">
        <button type="submit">Submit</button>
    </form>
    
</body>
</html>
<script src="jquery.min.js"></script>


