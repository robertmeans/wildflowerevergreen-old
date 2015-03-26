
<nav> 

        <?php if (($thisPage=="menu") || ($thisPage=="sushi_menu"))
        echo "<button id=\"all\">toggle all menu items</button>";
        else {
        echo ""; 
        }?>

		<a href="index.php">Home</a>
        <a href="menu.php">Menu</a>
        <a href="sushi_menu.php">Sushi Menu</a>
        <a href="directions.php">Directions</a>
     
</nav><!-- nav -->