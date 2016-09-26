<?php



class President {
    var $name;
    var $age;
    var $party;

    function get_candidate ($name){
        return "President " . $name;
    }

    function set_candidate ($new_name){
        $this -> name = $new_name;
    }

    function get_party ($party){
        $this-> party = $party;
    }

    function __construct($age, $name)
    {
        $this -> age = $age;
        $this -> name = $name;
    }
}

class Vice_President extends President
{
    public $state;

    function get_candidate($name)
    {
        return "Vice President " . $name;
    }
    function home_state($state){
        $this -> state = $state;
    }
}
