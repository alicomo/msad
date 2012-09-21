<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php include_title() ?>
    <link rel="shortcut icon" href="/favicon.ico" />
    <?php include_stylesheets() ?>
    <?php include_javascripts() ?>
  </head>
  <body>
<!-- start header -->
<div id="header">
	<div id="menu">
		<ul>
			<li class="current_page_item"><a href="#">Home</a></li>
			<li><a href="#">Blogs</a></li>
			<li><a href="#">Photos</a></li>
			<li><a href="#">About</a></li>
			<li><a href="#">Contact</a></li>
		</ul>
	</div>
	<div id="search">
		<form id="searchform" method="get" action="#">
			<fieldset>
			<input id="s" type="text" name="s" value="" class="text" />
			<input id="x" type="submit" value="Search" class="button" />
			</fieldset>
		</form>
	</div>
</div>
<div id="logo">
	<h1><a href="#">Symfony Training</a></h1>
	<h2>By Muhammadali Shaduli</h2>
</div>
<!-- end header -->
<hr />
<!-- start page -->
<div id="page">
	<?php echo $sf_content ?>
</div>
<!-- end page -->
<hr />
<!-- start footer -->
<div id="footer">
	<p>&copy;2012 All Rights Reserved. &nbsp;&bull;&nbsp; Developed by <a href="http://www.shaduli.com/">Muhammadali Shaduli</a>.</p>
</div>
<!-- end footer -->
</body>
</html>
