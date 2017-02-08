<link rel="stylesheet" href="dist/css/bootstrap.min.css">
<?php 
    //FIRST
    //$x = ($_GET["gender"] == "Unicorn")?"you MAJESTIC UNICORN":"you UNIMPORTANT BEING";
    //echo "Hello ".$_GET["username"].", get out {$x}.";
    
    //SECOND
    //switch($_GET['l']){
    //    case "english": echo "Want some tea mayt?"; break;
    //    case "old_english": echo "Wes Hal!"; break;
    //    case "ancient_english": echo "The Sun Welcomes You!"; break;
    //    case "future_english": echo "Sup!"; break;
    //    case "past_english": echo "Good Day!"; break;
    //}
    
    //THIRD
    $x = $_GET["num1"];
    $y = $_GET["num2"];
    if($x == 0 || $y == 0){
        echo "<h1 class='text-center'>ERROR</h1>";
    }else{
        echo "<script>alert({($x+$y)});</script>";
    }
    
?>