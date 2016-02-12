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

    function getName()
    {
        return $this->name;
    }

    function setName()
    {
        $this->name = (string) $name;
    }

    function getPhone()
    {
        return $this->phone;
    }

    function setPhone()
    {
        $this->phone = (string) $phone;
    }

    function getAddress()
    {
        return $this->address;
    }

    function setAddress()
    {
        $this->address = (string) $address;
    }

    function save()
    {
        array_push($_SESSION['list_of_contacts'], $this);
    }

    static function getAll()
    {
        return $_SESSION['list_of_contacts'];
    }

    static function deleteAll()
    {
        $_SESSION['list_of_contacts'] = array();
    }


}
?>
