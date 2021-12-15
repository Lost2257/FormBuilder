<?php
namespace App\Forms;

class Form extends \Kris\LaravelFormBuilder\Form {

    public function redirectIfNotValid($destination = null)
    {
        $values = $this->getFieldValues();
        foreach($values as $name => $value) {
            $this->getModel()->$name = $value;
        }
        parent::redirectIfNotValid($destination);
    }

}