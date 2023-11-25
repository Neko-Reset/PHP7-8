<?php

// 数字を成形して表示する
function echo_price($callback)
{
    echo number_format($callback(1000, 500)) . "円";
}

// クロージャー・無名関数
$get_sum = function($a, $b) {
    return $a + $b;
};

echo_price($get_sum);
