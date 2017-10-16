<html>

<title>Search</title>

<head>
<a href="/" style="text-decoration: none;"><h1 class="Search">Search</h1></a>
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

<form action="Public/Search/search.php" method="post">
<input class="Searchbar" type="text" placeholder="Search..." name="search" autofocus="autofocus"/>
</form>

<?php

if(isset($_GET["f"])){

if($_GET["f"] == "f"){
	echo "You Entered an Invalid Dir";
}
}
?>

</body>
</html>
