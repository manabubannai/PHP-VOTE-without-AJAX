<?php
ob_start();
require_once( 'core/init.php' );
require_once( 'functions/general.php' );
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-A-Compatible" content="IE=edge">
	<title>PHP：投票機能を作成する方法</title>
	<link rel="stylesheet" href="">
</head>
<body>

<?php

if ($_GET) {
	// 商品がクリックされたときに、該当商品の投票をアップデートする
	update_vote($mysqli);
}

// 現在の投票数を取得する
$query = "SELECT product_id, product_name, product_votes FROM products";
$result = $mysqli->query($query);
while ( $row = $result->fetch_assoc() ) { ?>

	<!-- <a href="?vote=up&id=1">商品A</a> -->
	<a href="?vote=up&amp;id=<?php echo $row["product_id"] ?>">

		<!-- 商品名を表示 -->
		<?php echo $row["product_name"]; ?>：

		<!-- 商品の投票数を表示 -->
		<?php echo $row["product_votes"]; ?>

	</a>
	<br />
<?php } // End of While ?>



</body>
</html>