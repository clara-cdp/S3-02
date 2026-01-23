<?php

spl_autoload_register(function ($class_name) {

    $file =  $class_name . '.php';

    if (file_exists($file)) {
        require_once $file;
    }
});

class mercedesCouponGenerator implements CouponGenerator
{


    protected $discount = 0;
    protected $coupon = '';

    public function couponGenerator($isHighSeason,  $bigStock): string
    {
        $this->discount = 0;
        $this->addSeasonalDiscount($isHighSeason);
        $this->addStockDiscount($bigStock);
        $this->coupon = "Get {$this->discount}% off the price of your new MERCEDES.";
        return $this->coupon;
    }


    public function addSeasonalDiscount()
    {
        return $this->discount += 4;
    }


    public function addStockDiscount()
    {
        return $this->discount += 10;
    }
}
