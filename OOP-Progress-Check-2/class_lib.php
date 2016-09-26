<?php
    class President {
        var $name;
        var $age;
        var $party;
        var $number = 1;

        public static $minimumAge = 35;

        function print_candidate (){
            return "President " . $this->name;
        }

        static function getMinimumAge ($minimumAge){
            echo $minimumAge;
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

        function nullify (){
            foreach ($this as $key => $value){
                $value = null;
            }
        }
    }

    class Vice_President extends President
    {
        var $number = 2;
        public $state;

        function get_candidate($name)
        {
            return "Vice President " . $name;
        }
        function home_state($state){
            $this -> state = $state;
        }
    }

    abstract class People{
        var $captain = "hook";

        function captain($captain) {
            echo $captain;
        }

        final function hi (){
            echo "hi";
        }
    }
    class Kids extends People {
        var $captain = "Crunch";
    }
    class Clowns extends People {
        var $captain = "knuckles";
    }
    class lawyers extends People {
        var $captain = "Jack Sparrow";
    }