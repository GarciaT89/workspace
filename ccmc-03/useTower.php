<?php
require_once("class/Tower.php");
$tokyoTower = new Tower("東京タワー", 333, 1958);
$skyTree = new Tower("東京スカイツリー", 634, 2012);

?>
<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="UTF-8">
	<title>Towerクラスを利用する</title>
	<link rel="stylesheet" href="../assets/css/style.css" />
	<link rel="stylesheet" href="../assets/css/ccmc-03.css" />
</head>

<body>
	<h1>Towerクラスを利用する</h1>
	<dl>
		<dt><?=$tokyoTower->getName() ?></dt>
		<dd><?=$tokyoTower->getProfile() ?></dd>
	</dl>
	<dl>
		<dt><?=$skyTree->getName() ?></dt>
		<dd><?=$skyTree->getProfile() ?></dd>
	</dl>
	<p><a href="index.html">インデックスに戻る</a></p>
</body>

</html>