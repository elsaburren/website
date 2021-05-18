<!DOCTYPE html>
<html>
<head>
	<title>A meaningful title (wont appear in the page content but will appear when sharing the page by WhatsApp etc)</title>
	<link rel = "icon" href="icon.png" type = "image/x-icon">
	<meta name="description" content="A meaningful descriptoin (wont appear in the page but will appear when sharing the page).">
  	<meta name="keywords" content="Keyword1,Keyword2,Choose,Appropriate,Keywords">
  	<meta name="author" content="Your Name">
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<link rel="stylesheet" type="text/css" href="myStyle.css"><!--define your colours in myStyle.css-->
	<link rel="stylesheet" type="text/css" href="w3.css"><!--w3.css is an external library-->
</head>
<body id='Home'>
<div class="myPageWrapper">
	<div class="myPage">
		<a name="scroll-top"></a>
		<?php include_once("myTabs.html"); ?>
		<div class="myPageContent">
			<div class="myRow">
				<div class="myCol myLeft myBlueBox">
					<h2>Title 1</h2>
					This is a simple website template which I created for my business, <a href="https://www.promasta.com" class=myLink target="_blank">ProMaSta</a>.
					This template does not use any JavaScript. Its style is defined in two css-files, myStyle.css (written by me) and <a href="https://www.w3schools.com/w3css/" class="myLin" target="_blank">w3.css</a>.
					<p><a href="page1.php" class="myLinkButton">Read more...</a></p>
				</div>
				<div class="myCol myRight myBlueBox">
					<h2>Title 2</h2>
					 Note that this template's main pages are php files (this allows me to include_once the tab menu and footer from separate html files). So to display it, a php interpreter is required.
					<p><a href="page2.php" class="myLinkButton">Read more...</a></p>
				</div>
			</div>
		</div><!--endOfPageContent-->
		<?php include_once("myFooter.html"); ?>
	</div><!--endOfPage-->
</div><!--endOfPageWrapper-->
</body>
</html>
