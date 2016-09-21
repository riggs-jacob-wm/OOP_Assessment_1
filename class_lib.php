<?php

    class paladin{
        public $name;
        private $catch_phrase;
        public static $maxLionNumber = 5;

        function __construct($paladin_name){
            $this->name = $paladin_name;
        }

        public static function validateLions($lions){
            if(strlen($lions) >= self::$maxLionNumber) {
                return true;
            }else{
                return false;
            }
        }

        protected function set_name($new_name){
            $this->name = $new_name;
        }

        public function get_name() {
            return $this->name;
        }
    }

    class lion extends paladin{

        protected function set_name($new_name) {
            if ($new_name == "Black Lion") {
                $this->name = $new_name;
            }
            else if($new_name == "Black Lion") {
                paladin::set_name($lion_name);
            }
        }

        function __construct($lion_name)
        {
            $this->set_name($lion_name);
        }

    }

abstract class paladin2
{
    public $name;
    public $color;

    public function describe()
    {
        return $this->name . ' is ' . $this->color . '</br>';
    }

    abstract public function makeSound();

}

class Hunk extends paladin2{
    public function describe(){
        return parent::describe();
    }

    public function makeSound()
    {
        return 'PAO!'. '</br>';
    }
}

class Pidge extends paladin2{
    public function describe(){
        return parent::describe();
    }

    public function makeSound()
    {
        return 'P-CHEW!'. '</br>';
    }
}

class Shiro extends paladin2{
    public function describe(){
        return parent::describe();
    }

    public function makeSound()
    {
        return 'BLAM!'. '</br>';
    }
}

class Paladin3 {
    public $paladin1 = 'Shiro';
    public $paladin2 = 'Keith';
    public $paladin3 = 'Pidhe';
    public $paladin4 = 'Lance';
    public $paladin5 = 'Hunk';

    function iterateObject(){
        foreach($this as $key => $value) {
            print "$key => $value\n" . '</br>';
        }
    }
}