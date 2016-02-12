<?php
class Contact
{
    $name;
    $phone;
    $address;

    function __construct($name, $phone, $address)
    {
        $this->name = $name;
        $this->phone = $phone;
        $this->address = $address;
    }
}
?>
