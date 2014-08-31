<?php


namespace Nam\Factory;


class ShoppingCart
{

    private $productsInTheCart = [ ];

    /**
     * @var ProductFactory
     */
    private $productFactory;

    public function __construct()
    {
        $this->productFactory = new ProductFactory;
    }


    public function add( $productId )
    {
        $this->productsInTheCart[] = $this->productFactory->make( $productId );
    }


}