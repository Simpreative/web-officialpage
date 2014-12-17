<?php
require_once "common.inc.php";
require_once "db.inc.php";

global $mysqli;

?>
<!doctype html>
<html>
<head>
<meta charset="utf8">
	<title>Simpreative Official Page</title>
	<!--[if lte IE 8]><script src="/include/css/ie/html5shiv.js"></script><![endif]-->
	<script src="/include/jquery/dist/jquery.min.js"></script>
	<script src="/include/js/jquery.scrolly.min.js"></script>
	<script src="/include/js/jquery.scrollzer.min.js"></script>
	<script src="/include/js/skel.min.js"></script>
	<script src="/include/js/skel-layers.min.js"></script>
	<script src="/include/js/init.js?<?php echo mt_rand();?>"></script>
	<script src="/include/bootstrap/dist/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="/include/bootstrap/less/panels.css?<?php echo mt_rand();?>" />
	<link rel="stylesheet" href="/include/css/z.css?<?php echo mt_rand();?>" />
	<noscript>
		<link rel="stylesheet" href="/include/css/skel.css" />
		<link rel="stylesheet" href="/include/css/style.css" />
		<link rel="stylesheet" href="/include/css/style-wide.css" />
	</noscript>
	<!--[if lte IE 9]><link rel="stylesheet" href="/include/css/ie/v9.css" /><![endif]-->
	<!--[if lte IE 8]><link rel="stylesheet" href="/include/css/ie/v8.css" /><![endif]-->
</head>
<body>
	<!-- Header -->
		<div id="header" class="skel-layers-fixed">
			<div class="top">
				<!-- Logo -->
					<div id="logo">
						<span class="image avatar48"><img src="/include/images/avatar/<?php echo $con['img']; ?>" alt="" /></span>
						<h1 id="title"><?php echo $con['name']; ?></h1>
						<p><?php echo $con['desc']; ?></p>
					</div>
				<!-- Nav -->
					<nav id="nav">
						<!--
						
							Prologue's nav expects links in one of two formats:
							
							1. Hash link (scrolls to a different section within the page)
							
							   <li><a href="#foobar" id="foobar-link" class="icon fa-whatever-icon-you-want skel-layers-ignoreHref"><span class="label">Foobar</span></a></li>
							2. Standard link (sends the user to another page/site)
							   <li><a href="http://foobar.tld" id="foobar-link" class="icon fa-whatever-icon-you-want"><span class="label">Foobar</span></a></li>
						
						-->
						<ul>
							<li><a href="#write" id="write-link" class="skel-layers-ignoreHref"><span class="icon fa-pencil">Write</span></a></li>
							<li><a href="#post" id="post-link" class="skel-layers-ignoreHref"><span class="icon fa-list">Posts</span></a></li>
							<li><a href="#members" id="members-link" class="skel-layers-ignoreHref"><span class="icon fa-user">Members</span></a></li>
						</ul>
					</nav>
					
			</div>
			
			<div class="bottom">
				<!-- Social Icons -->
					<ul class="icons">
						<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon fa-github"><span class="label">Github</span></a></li>
						<li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
						<li><a href="#" class="icon fa-envelope"><span class="label">Email</span></a></li>
					</ul>
			
			</div>
		
		</div>
	<!-- Main -->
		<div id="main">
			<section id="write" class="one">
				<img id="logo" src="/include/images/logo.png?<?php echo mt_rand();?>" />
				<div class="container" style="">
					<form method="post" action="write.php">
						<div class="row 50%">
							<div class="12u">
								<textarea name="message" placeholder="Message"></textarea>
							</div>
						</div>
						<div class="row">
							<div class="12u">
								<input type="submit" value="Write Post" />
							</div>
						</div>
					</form>
				</div>
			</section>

			<!-- Portfolio -->
				<section id="post" class="two">
					<div class="container">
						<div class="panel panel-default">
							<div class="panel-heading">
								<div id="post-userinfo"><img src="/include/images/avatar/<?php echo $con['img']; ?>" /> ZerglingGo</div>
								<div id="post-date">14-12-16</div><br />
								<div id="post-mod">Edit | Delete</div>
							</div>
							<div class="panel-body" id="post-body">
								Testing post.<br />
								2014-12-16 Simpreative Official Page Created.<br />
								보는것과 같이 한글과 English를 같이 사용하면 이상함.
							</div>
						</div>
					</div>
				</section>
			<!-- About Me -->
				<section id="members" class="three">
					<div class="container">
						<header>
							<h2>Members</h2>
						</header>
						<div class="member">
							<div id="members-imgnick">
								<img src="/include/images/avatar/zerglinggo.png?<?php echo mt_rand(); ?>" />
								<span id="desc">
									ZerglingGo<br />
									Web Developer
								</span>
							</div>
						</div>
						<div class="member">
							<div id="members-imgnick">
								<img src="/include/images/avatar/whitewolf.png?<?php echo mt_rand(); ?>" />
								WhiteWolf
							</div>
						</div>
						<div class="member">
							<div id="members-imgnick">
								<img src="/include/images/avatar/qwertylove.png?<?php echo mt_rand(); ?>" />
								QwertyLove
							</div>
						</div>
					</div>
				</section>
		</div>
	<!-- Footer -->
		<div id="footer">
			
			<!-- Copyright -->
				<ul class="copyright">
					<li>&copy; Simpreative. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
				</ul>
			
		</div>
</body>
</html>