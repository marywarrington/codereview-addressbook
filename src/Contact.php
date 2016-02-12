<?php
class Contact
{
    private $name;
    private $phone;
    private $street;
    private $city;

    function __construct($name, $phone, $street, $city)
    {
        $this->name = $name;
        $this->phone = $phone;
        $this->street = $street;
        $this->city = $city;
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

    function getStreet()
    {
        return $this->street;
    }

    function setStreet()
    {
        $this->street = (string) $street;
    }

    function getCity()
    {
        return $this->city;
    }

    function setCity()
    {
        $this->city = (string) $city;
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
