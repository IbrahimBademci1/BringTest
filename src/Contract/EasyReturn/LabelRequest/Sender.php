<?php
namespace Brohim\Bringapi\src\Contract\EasyReturn\LabelRequest;
use Brohim\Bringapi\src\Contract\ApiEntity;
use Brohim\Bringapi\src\Contract\ContractValidationException;

class Sender extends ApiEntity
{
    protected $_data = [
        'Name' => null,
        'PostalCode' => null,
        'StateOrRegion' => null,
        'City' => null,
        'CountryCode' => null,
        'Street' => null,
        'AddressLine' => null,
    ];

    public function setName ($name) {
        return $this->setData('Name', $name);
    }

    public function setPostalCode ($value) {
        return $this->setData('PostalCode', $value);
    }


    public function setStateOrRegion ($value) {
        return $this->setData('StateOrRegion', $value);
    }


    public function setCity ($value) {
        return $this->setData('City', $value);
    }

    public function setCountryCode ($value) {
        return $this->setData('CountryCode', $value);
    }

    public function setStreet ($value) {
        return $this->setData('Street', $value);
    }


    public function setAddressLine ($value) {
        return $this->setData('AddressLine', $value);
    }



    public function validate()
    {
        if (!$this->getData('Name')) {
            throw new ContractValidationException('Sender requires "Name" attribute to be set.');
        }
        if (!$this->getData('Street')) {
            throw new ContractValidationException('Sender requires "Street" attribute to be set.');
        }
        if (!$this->getData('City')) {
            throw new ContractValidationException('Sender requires "City" attribute to be set.');
        }
        if (!$this->getData('CountryCode')) {
            throw new ContractValidationException('Sender requires "CountryCode" attribute to be set.');
        }

    }

}
