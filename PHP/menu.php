<nav class="navbar navbar-default">
	<div class="container-fluid">
		<ul class="nav navbar-nav">
			<?php
                $menu = array(
                    "Home" => "index.php",
                    "About" => "about.php",
                    "Friends" => "friends.php",
                    "Blog" => ""
                );
                
                foreach($menu as $pagename => $filename){
                    $class = ($page == $pagename)?"active":"";
                    echo "<li class='{$class}'><a href='{$filename}'>{$pagename}</a></li>";
                }
            ?>
        </ul>
	</div>
</nav>