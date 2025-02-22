<html>
<HEAD>

  <META HTTP-EQUIV="content-type" CONTENT="text/html; CHARSET=iso-8859-2">
  <LINK REL="STYLESHEET" TYPE="text/css" HREF="style.css">

</HEAD>

<body CLASS="FRAME">
<P CLASS="TRESC">
<?php

act();

function act()
{

	$NAME = $_POST["Name"];	
	$AGE = $_POST["Age"];

	printf("<br>Your name is [%s] and you are [%s] years old<br>",$NAME,$AGE);
	
}


?>
</body>
</html>
