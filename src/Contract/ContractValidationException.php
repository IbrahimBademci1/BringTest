<?php

namespace Brohim\Bringapi\src\Contract;

class ContractValidationException extends \Exception
{

    protected $_fields = [];

    public function addField ($field) {
        $this->_fields[] = $field;
    }

    public function getFields() {
        return $this->_fields;
    }

}
