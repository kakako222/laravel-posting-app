<?php
// memory_limitの変更
ini_set('memory_limit', '256M');

// その他の処理をここに書く
// 例えば、大きな配列を生成するなど
$arr = range(1, 1000000);

echo "メモリ制限を256Mに変更しました。";
?>
