<?php
	 require "config/db.php";
	 $articles = mysqli_query($connection, "SELECT * FROM `articles` ORDER BY `pubdate` DESC");
	 $articles = mysqli_fetch_all($articles);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="media/styles/main.css">
	<link rel="stylesheet" type="text/css" href="media/styles/article_page.css">
	<link rel="icon" href="media/images/icon.ico">
	<?php
		include "title.php"
	?>
	<title>Новости</title>
</head>
<body>
	<div class="wrapper">

		<?php

			include "header.php";

			$page = $_GET['page'];

		    if (!isset($page)) {
		        require('main.php');
		    } elseif ($page == 'article-page') {
		    	$id = $_GET['id'];
		        $article = [];
		        foreach ($articles as $article_p) {
		            if ($article_p[0] == $id) {
		                $article = $article_p;
		                break;
		            }
		        }
		        require('article-page.php');
		    }

		    include "footer.php";

		?>

	</div>
</body>
</html>