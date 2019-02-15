<?php
namespace RobinTheHood\ModifiedOrm\Repositories\Base;

use RobinTheHood\ModifiedOrm\Core\Database;
use RobinTheHood\ModifiedOrm\Models\Order;

class OrderRepositoryBase
{
    private $tableName = 'orders';
    private $mapping = [
        'id' => 'orders_id',
        'customerId' => 'customers_id',
        'customerCId' => 'customers_cid',
        'customerVatId' => 'customers_vat_id',
        'customerStatus' => 'customers_status',
        'customersStatusName' => 'customers_status_name',
        'customerStatusImage' => 'customers_status_image',
        'customerStatusDiscount' => 'customers_status_discount',
        'customerFirstName' => 'customers_firstname',
        'customerLastName' => 'customers_lastname',
        'customerGender' => 'customers_gender',
        'customerCompany' => 'customers_company',
        'customersStreetAddress' => 'customers_street_address',
        'customerSuburb' => 'customers_suburb',
        'customerCity' => 'customers_city',
        'customerPostcode' => 'customers_postcode',
        'customerState' => 'customers_state',
        'customerCountry' => 'customers_country',
        'customerTelephone' => 'customers_telephone',
        'customerEmailAddress' => 'customers_email_address',
        'customerAddressFormatId' => 'customers_address_format_id',
        'customerCountryIsoCode2' => 'customers_country_iso_code_2',
        'deliveryName' => 'delivery_name',
        'deliveryFirstName' => 'delivery_firstname',
        'deliveryLastName' => 'delivery_lastname',
        'deliveryGender' => 'delivery_gender',
        'deliveryCompany' => 'delivery_company',
        'deliveryStreetAddress' => 'delivery_street_address',
        'deliverySuburb' => 'delivery_suburb',
        'deliveryCity' => 'delivery_city',
        'deliveryPostcode' => 'delivery_postcode',
        'deliveryState' => 'delivery_state',
        'deliveryCountry' => 'delivery_country',
        'deliveryCountryIsoCode2' => 'delivery_country_iso_code_2',
        'deliveryAddressFormatId' => 'delivery_address_format_id',
        'billingName' => 'billing_name',
        'billingFirstName' => 'billing_firstname',
        'billingLastName' => 'billing_lastname',
        'billingGender' => 'billing_gender',
        'billingCompany' => 'billing_company',
        'billingStreetAddress' => 'billing_street_address',
        'billingSuburb' => 'billing_suburb',
        'billingCity' => 'billing_city',
        'billingPostcode' => 'billing_postcode',
        'billingState' => 'billing_state',
        'billingCountry' => 'billing_country',
        'billingCountryIsoCode2' => 'billing_country_iso_code_2',
        'billingAddressFormatId' => 'billing_address_format_id',
        'paymentMethod' => 'payment_method',
        'comment' => 'comments',
        'lastModified' => 'last_modified',
        'datePurchased' => 'date_purchased',
        'orderStatus' => 'orders_status',
        'orderDateFinished' => 'orders_date_finished',
        'currency' => 'currency',
        'currencyValue' => 'currency_value',
        'accountType' => 'account_type',
        'paymentClass' => 'payment_class',
        'shippingMethod' => 'shipping_method',
        'shippingClass' => 'shipping_class',
        'customerIp' => 'customers_ip',
        'language' => 'language',
        'languageId' => 'languages_id',
        'afterbuySuccess' => 'afterbuy_success',
        'afterbuyId' => 'afterbuy_id',
        'reffererId' => 'refferers_id',
        'conversionType' => 'conversion_type',
        'orderIdentKey' => 'orders_ident_key'
    ];

    public function createObj()
    {
        return new Order();
    }

    public function getMapping()
    {
        return $this->mapping;
    }

    public function get($id)
    {
        $sql = "SELECT * FROM " . $this->tableName . " WHERE orders_id = '$id'";
        $row = Database::getRowFromSql($sql);
        $obj = Database::rowToObj($row, $this);
        return $obj;
    }

    public function insert($obj)
    {
        $row = Database::objToRow($obj, $this);
        unset($row['orders_id']);
        $sql = Database::createInsertSql($this->tableName, $row);
        Database::execute($sql);
        $id = xtc_db_insert_id();
        $obj->setId($id);
        return $id;
    }

    public function update($obj)
    {
        $row = Database::objToRow($obj, $this);
        $where = 'orders_id=' . $obj->getId();
        $sql = Database::createUpdateSql($this->tableName, $row, $where);
        Database::execute($sql);
    }

    public function delete($obj)
    {
        $where = 'orders_id=' . $obj->getId();
        $sql = "DELETE FROM " . $this->tableName . " WHERE $where";
        Database::execute($sql);
    }
}
