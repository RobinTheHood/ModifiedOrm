<?php
namespace RobinTheHood\ModifiedOrm\Models\Base;

class OrderProductBase
{
    protected $id;
    protected $orderId;
    protected $productId;
    protected $productModel;
    protected $productEan;
    protected $productName;
    protected $productPrice;
    protected $productPriceOrigin;
    protected $productDiscountMade;
    protected $productShippingTime;
    protected $finalPrice;
    protected $productTax;
    protected $productQuantity;
    protected $allowTax;
    protected $productOrderDescription;
    protected $productWeight;


    public function getId()
    {
        return $this->id;
    }

    public function getOrderId()
    {
        return $this->orderId;
    }

    public function getProductId()
    {
        return $this->productId;
    }

    public function getProductModel()
    {
        return $this->productModel;
    }

    public function getProductEan()
    {
        return $this->productEan;
    }

    public function getProductName()
    {
        return $this->productName;
    }

    public function getProductPrice()
    {
        return $this->productPrice;
    }

    public function getProductPriceOrigin()
    {
        return $this->productPriceOrigin;
    }

    public function getProductDiscountMade()
    {
        return $this->productDiscountMade;
    }

    public function getProductShippingTime()
    {
        return $this->productShippingTime;
    }

    public function getFinalPrice()
    {
        return $this->finalPrice;
    }

    public function getProductTax()
    {
        return $this->productTax;
    }

    public function getProductQuantity()
    {
        return $this->productQuantity;
    }

    public function getAllowTax()
    {
        return $this->allowTax;
    }

    public function getProductOrderDescription()
    {
        return $this->productOrderDescription;
    }

    public function getProductWeight()
    {
        return $this->productWeight;
    }


    public function setId($id)
    {
        $this->id = $id;
    }

    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;
    }

    public function setProductId($productId)
    {
        $this->productId = $productId;
    }

    public function setProductModel($productModel)
    {
        $this->productModel = $productModel;
    }

    public function setProductEan($productEan)
    {
        $this->productEan = $productEan;
    }

    public function setProductName($productName)
    {
        $this->productName = $productName;
    }

    public function setProductPrice($productPrice)
    {
        $this->productPrice = $productPrice;
    }

    public function setProductPriceOrigin($productPriceOrigin)
    {
        $this->productPriceOrigin = $productPriceOrigin;
    }

    public function setProductDiscountMade($productDiscountMade)
    {
        $this->productDiscountMade = $productDiscountMade;
    }

    public function setProductShippingTime($productShippingTime)
    {
        $this->productShippingTime = $productShippingTime;
    }

    public function setFinalPrice($finalPrice)
    {
        $this->finalPrice = $finalPrice;
    }

    public function setProductTax($productTax)
    {
        $this->productTax = $productTax;
    }

    public function setProductQuantity($productQuantity)
    {
        $this->productQuantity = $productQuantity;
    }

    public function setAllowTax($allowTax)
    {
        $this->allowTax = $allowTax;
    }

    public function setProductOrderDescription($productOrderDescription)
    {
        $this->productOrderDescription = $productOrderDescription;
    }

    public function setProductWeight($productWeight)
    {
        $this->productWeight = $productWeight;
    }
}
