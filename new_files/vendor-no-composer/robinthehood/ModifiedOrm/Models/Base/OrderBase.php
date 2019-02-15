<?php
namespace RobinTheHood\ModifiedOrm\Models\Base;

use RobinTheHood\ModifiedOrm\Repositories\OrderProductRepository;

class OrderBase
{
    protected $id;
    protected $customerId;
    protected $customerCId;
    protected $customerVatId;
    protected $customerStatus;
    protected $customersStatusName;
    protected $customerStatusImage;
    protected $customerStatusDiscount;
    protected $customerFirstName;
    protected $customerLastName;
    protected $customerGender;
    protected $customerCompany;
    protected $customersStreetAddress;
    protected $customerSuburb;
    protected $customerCity;
    protected $customerPostcode;
    protected $customerState;
    protected $customerCountry;
    protected $customerTelephone;
    protected $customerEmailAddress;
    protected $customerAddressFormatId;
    protected $customerCountryIsoCode2;
    protected $deliveryName;
    protected $deliveryFirstName;
    protected $deliveryLastName;
    protected $deliveryGender;
    protected $deliveryCompany;
    protected $deliveryStreetAddress;
    protected $deliverySuburb;
    protected $deliveryCity;
    protected $deliveryPostcode;
    protected $deliveryState;
    protected $deliveryCountry;
    protected $deliveryCountryIsoCode2;
    protected $deliveryAddressFormatId;
    protected $billingName;
    protected $billingFirstName;
    protected $billingLastName;
    protected $billingGender;
    protected $billingCompany;
    protected $billingStreetAddress;
    protected $billingSuburb;
    protected $billingCity;
    protected $billingPostcode;
    protected $billingState;
    protected $billingCountry;
    protected $billingCountryIsoCode2;
    protected $billingAddressFormatId;
    protected $paymentMethod;
    protected $comment;
    protected $lastModified;
    protected $datePurchased;
    protected $orderStatus;
    protected $orderDateFinished;
    protected $currency;
    protected $currencyValue;
    protected $accountType;
    protected $paymentClass;
    protected $shippingMethod;
    protected $shippingClass;
    protected $customerIp;
    protected $language;
    protected $languageId;
    protected $afterbuySuccess;
    protected $afterbuyId;
    protected $reffererId;
    protected $conversionType;
    protected $orderIdentKey;

    public function getId()
    {
        return $this->id;
    }

    public function getCustomerId()
    {
        return $this->customerId;
    }

    public function getCustomerCId()
    {
        return $this->customerCId;
    }

    public function getCustomerVatId()
    {
        return $this->customerVatId;
    }

    public function getCustomerStatus()
    {
        return $this->customerStatus;
    }
    public function getCustomersStatusName()
    {
        return $this->customersStatusName;
    }

    public function getCustomerStatusImage()
    {
        return $this->customerStatusImage;
    }

    public function getCustomerStatusDiscount()
    {
        return $this->customerStatusDiscount;
    }

    public function getCustomerFirstName()
    {
        return $this->customerFirstName;
    }

    public function getCustomerLastName()
    {
        return $this->customerLastName;
    }

    public function getCustomerGender()
    {
        return $this->customerGender;
    }

    public function getCustomerCompany()
    {
        return $this->customerCompany;
    }

    public function getCustomersStreetAddress()
    {
        return $this->customersStreetAddress;
    }

    public function getCustomerSuburb()
    {
        return $this->customerSuburb;
    }

    public function getCustomerCity()
    {
        return $this->customerCity;
    }

    public function getCustomerPostcode()
    {
        return $this->customerPostcode;
    }

    public function getCustomerState()
    {
        return $this->customerState;
    }

    public function getCustomerCountry()
    {
        return $this->customerCountry;
    }

    public function getCustomerTelephone()
    {
        return $this->customerTelephone;
    }

    public function getCustomerEmailAddress()
    {
        return $this->customerEmailAddress;
    }

    public function getCustomerAddressFormatId()
    {
        return $this->customerAddressFormatId;
    }

    public function getCustomerCountryIsoCode2()
    {
        return $this->customerCountryIsoCode2;
    }

    public function getDeliveryName()
    {
        return $this->deliveryName;
    }

    public function getDeliveryFirstName()
    {
        return $this->deliveryFirstName;
    }

    public function getDeliveryLastName()
    {
        return $this->deliveryLastName;
    }

    public function getDeliveryGender()
    {
        return $this->deliveryGender;
    }

    public function getDeliveryCompany()
    {
        return $this->deliveryCompany;
    }

    public function getDeliveryStreetAddress()
    {
        return $this->deliveryStreetAddress;
    }

    public function getDeliverySuburb()
    {
        return $this->deliverySuburb;
    }

    public function getDeliveryCity()
    {
        return $this->deliveryCity;
    }

    public function getDeliveryPostcode()
    {
        return $this->deliveryPostcode;
    }

    public function getDeliveryState()
    {
        return $this->deliveryState;
    }

    public function getDeliveryCountry()
    {
        return $this->deliveryCountry;
    }

    public function getDeliveryCountryIsoCode2()
    {
        return $this->deliveryCountryIsoCode2;
    }

    public function getDeliveryAddressFormatId()
    {
        return $this->deliveryAddressFormatId;
    }

    public function getBillingName()
    {
        return $this->billingName;
    }

    public function getBillingFirstName()
    {
        return $this->billingFirstName;
    }

    public function getBillingLastName()
    {
        return $this->billingLastName;
    }

    public function getBillingGender()
    {
        return $this->billingGender;
    }

    public function getBillingCompany()
    {
        return $this->billingCompany;
    }

    public function getBillingStreetAddress()
    {
        return $this->billingStreetAddress;
    }

    public function getBillingSuburb()
    {
        return $this->billingSuburb;
    }

    public function getBillingCity()
    {
        return $this->billingCity;
    }

    public function getBillingPostcode()
    {
        return $this->billingPostcode;
    }

    public function getBillingState()
    {
        return $this->billingState;
    }

    public function getBillingCountry()
    {
        return $this->billingCountry;
    }

    public function getBillingCountryIsoCode2()
    {
        return $this->billingCountryIsoCode2;
    }

    public function getBillingAddressFormatId()
    {
        return $this->billingAddressFormatId;
    }

    public function getPaymentMethod()
    {
        return $this->paymentMethod;
    }

    public function getComment()
    {
        return $this->comment;
    }

    public function getLastModified()
    {
        return $this->lastModified;
    }

    public function getDatePurchased()
    {
        return $this->datePurchased;
    }

    public function getOrderStatus()
    {
        return $this->orderStatus;
    }

    public function getOrderDateFinished()
    {
        return $this->orderDateFinished;
    }

    public function getCurrency()
    {
        return $this->currency;
    }

    public function getCurrencyValue()
    {
        return $this->currencyValue;
    }

    public function getAccountType()
    {
        return $this->accountType;
    }

    public function getPaymentClass()
    {
        return $this->paymentClass;
    }

    public function getShippingMethod()
    {
        return $this->shippingMethod;
    }

    public function getShippingClass()
    {
        return $this->shippingClass;
    }

    public function getCustomerIp()
    {
        return $this->customerIp;
    }

    public function getLanguage()
    {
        return $this->language;
    }

    public function getLanguageId()
    {
        return $this->languageId;
    }

    public function getAfterbuySuccess()
    {
        return $this->afterbuySuccess;
    }

    public function getAfterbuyId()
    {
        return $this->afterbuyId;
    }

    public function getReffererId()
    {
        return $this->reffererId;
    }

    public function getConversionType()
    {
        return $this->conversionType;
    }

    public function getOrderIdentKey()
    {
        return $this->orderIdentKey;
    }



    public function setId($id)
    {
        $this->id = $id;
    }

    public function setCustomerId($customerId)
    {
        $this->customerId = $customerId;
    }

    public function setCustomerCId($customerCId)
    {
        $this->customerCId = $customerCId;
    }

    public function setCustomerVatId($customerVatId)
    {
        $this->customerVatId = $customerVatId;
    }

    public function setCustomerStatus($customerStatus)
    {
        $this->customerStatus = $customerStatus;
    }
    public function setCustomersStatusName($customersStatusName)
    {
        $this->customersStatusName = $customersStatusName;
    }

    public function setCustomerStatusImage($customerStatusImage)
    {
        $this->customerStatusImage = $customerStatusImage;
    }

    public function setCustomerStatusDiscount($customerStatusDiscount)
    {
        $this->customerStatusDiscount = $customerStatusDiscount;
    }

    public function setCustomerFirstName($customerFirstName)
    {
        $this->customerFirstName = $customerFirstName;
    }

    public function setCustomerLastName($customerLastName)
    {
        $this->customerLastName = $customerLastName;
    }

    public function setCustomerGender($customerGender)
    {
        $this->customerGender = $customerGender;
    }

    public function setCustomerCompany($customerCompany)
    {
        $this->customerCompany = $customerCompany;
    }

    public function setCustomersStreetAddress($customersStreetAddress)
    {
        $this->customersStreetAddress = $customersStreetAddress;
    }

    public function setCustomerSuburb($customerSuburb)
    {
        $this->customerSuburb = $customerSuburb;
    }

    public function setCustomerCity($customerCity)
    {
        $this->customerCity = $customerCity;
    }

    public function setCustomerPostcode($customerPostcode)
    {
        $this->customerPostcode = $customerPostcode;
    }

    public function setCustomerState($customerState)
    {
        $this->customerState = $customerState;
    }

    public function setCustomerCountry($customerCountry)
    {
        $this->customerCountry = $customerCountry;
    }

    public function setCustomerTelephone($customerTelephone)
    {
        $this->customerTelephone = $customerTelephone;
    }

    public function setCustomerEmailAddress($customerEmailAddress)
    {
        $this->customerEmailAddress = $customerEmailAddress;
    }

    public function setCustomerAddressFormatId($customerAddressFormatId)
    {
        $this->customerAddressFormatId = $customerAddressFormatId;
    }

    public function setCustomerCountryIsoCode2($customerCountryIsoCode2)
    {
        $this->customerCountryIsoCode2 = $customerCountryIsoCode2;
    }

    public function setDeliveryName($deliveryName)
    {
        $this->deliveryName = $deliveryName;
    }

    public function setDeliveryFirstName($deliveryFirstName)
    {
        $this->deliveryFirstName = $deliveryFirstName;
    }

    public function setDeliveryLastName($deliveryLastName)
    {
        $this->deliveryLastName = $deliveryLastName;
    }

    public function setDeliveryGender($deliveryGender)
    {
        $this->deliveryGender = $deliveryGender;
    }

    public function setDeliveryCompany($deliveryCompany)
    {
        $this->deliveryCompany = $deliveryCompany;
    }

    public function setDeliveryStreetAddress($deliveryStreetAddress)
    {
        $this->deliveryStreetAddress = $deliveryStreetAddress;
    }

    public function setDeliverySuburb($deliverySuburb)
    {
        $this->deliverySuburb = $deliverySuburb;
    }

    public function setDeliveryCity($deliveryCity)
    {
        $this->deliveryCity = $deliveryCity;
    }

    public function setDeliveryPostcode($deliveryPostcode)
    {
        $this->deliveryPostcode = $deliveryPostcode;
    }

    public function setDeliveryState($deliveryState)
    {
        $this->deliveryState = $deliveryState;
    }

    public function setDeliveryCountry($deliveryCountry)
    {
        $this->deliveryCountry = $deliveryCountry;
    }

    public function setDeliveryCountryIsoCode2($deliveryCountryIsoCode2)
    {
        $this->deliveryCountryIsoCode2 = $deliveryCountryIsoCode2;
    }

    public function setDeliveryAddressFormatId($deliveryAddressFormatId)
    {
        $this->deliveryAddressFormatId = $deliveryAddressFormatId;
    }

    public function setBillingName($billingName)
    {
        $this->billingName = $billingName;
    }

    public function setBillingFirstName($billingFirstName)
    {
        $this->billingFirstName = $billingFirstName;
    }

    public function setBillingLastName($billingLastName)
    {
        $this->billingLastName = $billingLastName;
    }

    public function setBillingGender($billingGender)
    {
        $this->billingGender = $billingGender;
    }

    public function setBillingCompany($billingCompany)
    {
        $this->billingCompany = $billingCompany;
    }

    public function setBillingStreetAddress($billingStreetAddress)
    {
        $this->billingStreetAddress = $billingStreetAddress;
    }

    public function setBillingSuburb($billingSuburb)
    {
        $this->billingSuburb = $billingSuburb;
    }

    public function setBillingCity($billingCity)
    {
        $this->billingCity = $billingCity;
    }

    public function setBillingPostcode($billingPostcode)
    {
        $this->billingPostcode = $billingPostcode;
    }

    public function setBillingState($billingState)
    {
        $this->billingState = $billingState;
    }

    public function setBillingCountry($billingCountry)
    {
        $this->billingCountry = $billingCountry;
    }

    public function setBillingCountryIsoCode2($billingCountryIsoCode2)
    {
        $this->billingCountryIsoCode2 = $billingCountryIsoCode2;
    }

    public function setBillingAddressFormatId($billingAddressFormatId)
    {
        $this->billingAddressFormatId = $billingAddressFormatId;
    }

    public function setPaymentMethod($paymentMethod)
    {
        $this->paymentMethod = $paymentMethod;
    }

    public function setComment($comment)
    {
        $this->comment = $comment;
    }

    public function setLastModified($lastModified)
    {
        $this->lastModified = $lastModified;
    }

    public function setDatePurchased($datePurchased)
    {
        $this->datePurchased = $datePurchased;
    }

    public function setOrderStatus($orderStatussetOrderStatus)
    {
        $this->orderStatus = $orderStatussetOrderStatus;
    }

    public function setOrderDateFinished($orderDateFinished)
    {
        $this->orderDateFinished = $orderDateFinished;
    }

    public function setCurrency($currency)
    {
        $this->currency = $currency;
    }

    public function setCurrencyValue($currencyValue)
    {
        $this->currencyValue = $currencyValue;
    }

    public function setAccountType($accountType)
    {
        $this->accountType = $accountType;
    }

    public function setPaymentClass($paymentClass)
    {
        $this->paymentClass = $paymentClass;
    }

    public function setShippingMethod($shippingMethod)
    {
        $this->shippingMethod = $shippingMethod;
    }

    public function setShippingClass($shippingClass)
    {
        $this->shippingClass = $shippingClass;
    }

    public function setCustomerIp($customerIp)
    {
        $this->customerIp = $customerIp;
    }

    public function setLanguage($language)
    {
        $this->language = $language;
    }

    public function setLanguageId($languageId)
    {
        $this->languageId = $languageId;
    }

    public function setAfterbuySuccess($afterbuySuccess)
    {
        $this->afterbuySuccess = $afterbuySuccess;
    }

    public function setAfterbuyId($afterbuyId)
    {
        $this->afterbuyId = $afterbuyId;
    }

    public function setReffererId($reffererId)
    {
        $this->reffererId = $reffererId;
    }

    public function setConversionType($conversionType)
    {
        $this->conversionType = $conversionType;
    }

    public function setOrderIdentKey($orderIdentKey)
    {
        $this->orderIdentKey = $orderIdentKey;
    }


    public function getOrderProducts()
    {
        $repo = new OrderProductRepository();
        $orderProducts = $repo->getAllByOrderId($this->id);
        return $orderProducts;
    }
}
