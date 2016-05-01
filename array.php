<html>
<head>
    <title>Array</title>
</head>
<body>
<?php

    $title = 'This is a practice array page';
    echo '<p> '.$title.' </p>';

    $products = array('Tires', 'Oil', 'Spark Plus');
    foreach($products as $prod) {
        echo $prod.'  ';
    }

    echo '<br/>';

    // 定义关联数组
    $productAndPrice = array('Tires'=>100, 'Oil'=>10, 'Spark Plus'=>4);

    foreach($productAndPrice as $key => $value) {
        echo $key.' - '.$value.'<br/>';
    }


    while($element = each($productAndPrice)) {
        echo $element['key'].' - '.$element['value'].'  |  ';
    }
    echo '<br/>';

    reset($productAndPrice);
    while(list($product, $price) = each($productAndPrice)) {
        echo $product.' - '.$price.'  ';
    }

    echo '<br/> ==========<br/>';
    echo '[100, 10, 4, "41"] 没有排序<br/>';
    $prices = array(100, 10, 4, '41');
    foreach($prices as $pri) {
        echo $pri.' ';
    }
    echo '<br/>[100, 10, 4, "41"] 排序之后, (使用SORT_STRING)<br/>';
    sort($prices, SORT_STRING);
    foreach($prices as $pri) {
        echo $pri.' ';
    }

    echo '<br/>[100, 10, 4, "41"] 排序之后, (使用SORT_NUMERIC)<br/>';
    sort($prices, SORT_NUMERIC);
    foreach ($prices as $pri) {
        echo $pri . ' ';
    }

//  对于关联数组, asort()方法可以按value排序, ksort方法可以按key排序
//  反向排序函数: rsort, arsort, krsort

?>
</body>
</html>