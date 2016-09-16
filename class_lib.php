<?php

    class paladin{
        public $name;
        private $catch_phrase;

        function __construct($paladin_name){
            $this->name = $paladin_name;
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