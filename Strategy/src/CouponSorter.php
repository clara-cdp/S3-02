<?php

spl_autoload_register(function ($class_name) {

    $file =  $class_name . '.php';

    if (file_exists($file)) {
        require_once $file;
    }
});

class CouponSorter
{
    protected $bmw;
    protected $mercedes;


    public function __construct(CouponGenerator $bmw, CouponGenerator $mercedes)
    {
        $this->bmw = $bmw;
        $this->mercedes = $mercedes;
    }

    public  function sortCoupon(string $car, bool $isHighSeason, bool $bigStock)
    {
        if ($car == "BMW") {
            return $this->bmw->couponGenerator($car,  $isHighSeason,  $bigStock);
        } else if ($car == "mercedes") {
            return $this->mercedes->CouponGenerator($car, $isHighSeason,  $bigStock);
        }
    }
}
