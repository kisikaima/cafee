<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="utf-8">
		<title>サイトタイトル</title>
		<meta name="description" content="サイトキャプションを入力">
		<meta name="keywords" content="サイトキーワードを,で区切って入力">
		<link rel="stylesheet" href="sample.css">
		<script src="sample.js"></script>
	</head>
	<body>
		<!----- ヘッダー ----->
		<?php
			echo $this->element('flash/cafes/header');
		?>
		<!----- ヘッダー END ----->
		
		<!----- メインコンテンツ ----->
		<article>
			<h1>タイトル</h1>
			<section>
				<h2>タイトル</h2>
				<p>コンテンツの内容</p>
			</section>
		</article>
		<!----- メインコンテンツ END ----->
		
		<!----- フッター ----->
		<footer>フッター</footer>
		<!----- フッター END ----->
	</body>
</html>