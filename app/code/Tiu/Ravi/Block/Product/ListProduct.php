<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Tiu\Ravi\Block\Product;

/**
 * Class View
 * @api
 * @package Magento\Catalog\Block\Product
 * @since 100.0.2
 */
class ListProduct {

    /**
     * Get product price.
     *
     * @param Product $product
     * @return string
     */
    public function afterGetProductPrice(\Magento\Catalog\Block\Product\ListProduct $subject, $result)
    {
        //echo $result ; exit;
        //$result = $result+1000;
        return $result."<div>dddd1.001</div>";
    }
    
}
