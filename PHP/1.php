<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="BOOTSTRAP/dist/css/bootstrap.min.css">
</head>
<body>
    <h1>GOOD DAY!</h1>
    <h3>Today is <?php echo date("F j, Y"); ?></h3>
    <p>
        <span class="label label-success">
            <?php echo date("H:i:s")?>
        </span>
    </p>
    <?php
        $types = array("warning", "danger", "success");
        foreach($types as $t){
            echo "<button class='btn btn-{$t}'>TIS I</button>";
        }
    ?>
</body>
</html>
<script src="JQUERY/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $(".btn").on("click", function(){
        alert("YES, TIS YOU"); 
    });
});
</script>