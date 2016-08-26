<?php

function update_vote($mysqli){

	$product_id = $_GET['id'];

	// クッキーで投票済かどうかを判断する
	if ( !isset($_COOKIE['voted_'.$product_id]) ) {

		// GETが実行されたときに下記を実行
		if ( isset($_GET['vote'], $_GET['id']) ) {
			$query = "UPDATE products SET product_votes = product_votes + 1 WHERE product_id = $product_id";
			$mysqli->query($query);

			// クッキーの付与
			// 参考：http://php.net/manual/ja/function.setcookie.php#refsect1-function.setcookie-examples
			setcookie("voted_".$product_id, "voted_".$product_id, time()+3600);  // 有効期限は一時間です

		}

	} else {
		// echo "投票済です";
	}

}
