<main class="main">
		<div class="articles">
			<div class="day">
				<span>СЕГОДНЯ</span>
			</div>

		<?php
				foreach ($articles as $article) {
		?>
			<a href="index.php?page=article-page&id=<?php echo $article[0]; ?>">
				<div class="article-card">
				<!-- 	<?php
						if ($article[6] != "") {
					?>
							<div class="article-card-image">
								<img src="<?= $article[6] ?>" alt="">
							</div>
					<?php
						}
					?> -->
					<div class="article-card-info">
						<b>
							<?= $article[1] ?>
						</b>
						<span class="article-date">
							<?= $article[5] ?>
						</span>
					</div>
				</div>
			</a>
		<?php
			}
		?>

		</div>
		<div class="more-articles">
			<span class="more-articles-text">ПОКАЗАТЬ ЕЩЁ</span>
		</div>
</main>