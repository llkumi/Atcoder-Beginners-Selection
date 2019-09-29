<?php
# スペース区切りの整数の入力
fscanf(STDIN, "%d %d", $b, $c);
$sum = $b * $c;
if ($sum % 2 === 0 ) {
  echo 'Even';
} else {
  echo 'Odd';
}