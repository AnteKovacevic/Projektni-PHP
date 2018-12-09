<?php
	#show errors
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
	
	# Variables MUST BE INTEGERS
    if(isset($_GET['menu'])) { $menu = (int)$_GET['menu']; }
	# Kada kliknete na link radite slanje vrijednosti kroz varijablu. U tom slučaju morate napraviti globalnu varijablu koja će dohvatiti taj podatak. 
	# Da ne pišete svaki puta $_GET['menu'] napravili smo ovdje novu varijablu koja će primiti vrijednost klika na link i zove se $menu
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Naslov</title>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta name="description" content="">
		<meta name="keywords" content="">
		<meta name="author" content="Ante Kovačević">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="style.css"/>
	</head>
	<body>

	<div class="banner"></div>
	
	<?php include ("nav.php");
	print '<main>';
	if (!isset($menu) || $menu == 1) {
		print '
		<h1>HTML5 - A vocabulary and associated APIs for HTML and XHTML</h1>
		
		<figure>
		
			<img class="image2" src="html.jpg" alt="HTML5" title="HTML5"/>
			<figcaption>Sir Timothy John Berners-Lee OM KBE FRS FREng FRSA FBCS (<time datetime="1955-06-08">born 8 June 1955</time>), also known as TimBL, is an English engineer and computer scientist, best known as the inventor of the World Wide Web. </figcaption>
		
		</figure>
		<p>Berners Lee is a British computer scientist who invented the World Wide Web.</p>
		<p>Timothy John Berners Lee was born on 8 June 1955 and grew up in London. He studied physics at Oxford University and became a software engineer.</p>
		<p>In 1980, while working at CERN, the European Particle Physics Laboratory in Geneva, he first described the concept of a global system, based on the concept of "hypertext", that would allow researchers anywhere to share information. He also built a prototype called "Enquire".</p>
		<p>In 1984, Berners Lees returned to CERN, which was also home to a major European Internet node. In 1989, Berners Lee published a paper called "Information Management: A Proposal" in which he married up hypertext with the Internet, to create a system for sharing and distributing information not just within a company, but globally. He named it the World Wide Web.</p>
		<p>He also created the first web browser and editor. The worlds first website, http://info.cern.ch, was launched on 6 August 1991. It explained the World Wide Web concept and gave users an introduction to getting started with their own websites.</p>
		<p>In 1994, Berners Lee founded the World Wide Web Consortium at the Laboratory of Computer Science (LCS) at the Massachusetts Institute of Technology in Boston. He has served as director of the consortium since then. He also works as a senior research scientist at LCS which has now become the Computer Science and Artificial Intelligence Laboratory.</p>
		<p>Source: <a href="http://www.bbc.co.uk/history/historic_figures/berners_lee_tim.shtml" target="_blank">BBC</a></p>
		<p>Social media:<br>
			<a href="https://www.linkedin.com/in/tim-berners-lee-b41808ab/" target="_blank"><img src="linkedin.png" alt="Linkedin" title="Linkedin" style="width:25.5px; margin-top:0.4em"></a>
			<a href="https://twitter.com/timberners_lee" target="_blank"><img src="Twitter.png" alt="Twitter" title="Twitter" style="width:24px; margin-top:0.4em"></a>
			<a href="https://plus.google.com/113372414904624897851" target="_blank"><img src="g+.png" alt="Google+" title="Google+" style="width:24px; margin-top:0.4em"></a>
		</p>';
	}
	else if ($menu == 2) {
		print '
		<h1>News</h1>';
		// ovdje ide news
	}
	else if ($menu == 3) {
		print '
		<h1>Contact</h1>';
		// ovdje ide Contact
	}
	else if ($menu == 6) {
		print '
		<h1>Registration</h1>';
		// ovdje ide Registration
		include ("registration.php");
	}
	else if ($menu == 7) {
		print '
		<h1>Sign In</h1>';
		// ovdje ide Sign In
		include ("signin.php");
	}
	print '
	</main>';
	include ("footer.php");?>
	
	</body>
</html>