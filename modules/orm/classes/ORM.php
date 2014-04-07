<?php

defined('SYSPATH') OR die('No direct script access.');

class ORM extends Kohana_ORM {

    /**
     * Проводить ли валидацию при методе save() или нет?
     * @var bool 
     */
    protected $_validationRequired = true;

    /**
     * Обработка функционала, связанного с
     * получением параметров - get,
     * обновлением параметров - set,
     */
    public function __call($method, array $arg = null) {
        $param = strtolower(substr($method, 3));
        if (preg_match('^get*^', $method)) {
            return $this->{$param};
        } elseif (preg_match('^set*^', $method)) {
            $this->{$param} = $arg[0];
        }

        return true;
    }

    public function loadValues($values) {
        foreach ($values as $key => $value) {
            $key = ucfirst($key);
            $action = 'set' . $key;
            $this->{$action}($value);
        }

        return true;
    }

    public function validationRequired($required = true) {
        if ($required === NULL) {
            return $this->_validationRequired;
        }

        // set value
        $this->_validationRequired = (bool) $required;
        return $this;
    }

}
