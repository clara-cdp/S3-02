<?php

spl_autoload_register(function ($class_name) {

    $directory = 'src/';

    $file = $directory . $class_name . '.php';

    if (file_exists($file)) {
        require_once $file;
    }
});


$isHighSeason = false;
$bigStock = true;

$sorter = new CouponSorter(new bmwCouponGenerator(), new mercedesCouponGenerator);
$merche = 'mercedes';
$bayerischeMotorenWerkeAktiengesellschaft = 'BMW';

echo $sorter->sortCoupon($merche, $isHighSeason, $bigStock) . PHP_EOL;
echo $sorter->sortCoupon($bayerischeMotorenWerkeAktiengesellschaft, $isHighSeason, $bigStock) . PHP_EOL;
