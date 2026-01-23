<?php

interface CouponGenerator
{
    public function couponGenerator(bool $lowSales, bool $bigStock): string;

    public function addSeasonalDiscount();

    public function addStockDiscount();
}
