<?php

	$page = $_GET['page'];

	if ($page == 'article-page') {
		$id = $_GET['id'];
		$article = [];
        foreach ($articles as $article_p) {
            if ($article_p[0] == $id) {
                $article = $article_p;
                break;
            }
        }
        ?>
        <title><?= $article[1] ?></title>
	<?php
    }
?>