<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Exercício 3</title>
<style type="text/css">
  #menu ul {
	  padding:3px;
	  margin:0px;
	  list-style:none;
  }

  #menu ul li { display: inline; }
  
  #footer{
	  position: absolute;
	  bottom: 40px;
	  font-size:12px;
  }
</style>
</head>

<body>
<div id="container">
	<div id="top">
    	<h2>Exercício 3</h2>
		<?php require("menu.php"); ?>
    </div>
    
    <div id="content">
    	<?php require("content.php"); ?>
    </div>
    
   	<div id="footer">
    <p>Exercício 3</p>
    	<?php require("footer.php"); ?>
    </div>
</div>
</body>
</html>