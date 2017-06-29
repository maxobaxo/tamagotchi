<?php
    class Tamagotchi
    {
        private $food;
        private $play;
        private $sleep;
        private $name;

        function __construct ($name, $food = 10, $play = 10 , $sleep = 10)
        {
            $this->name = $name;
            $this->food = $food;
            $this->play = $play;
            $this->sleep = $sleep;
        }

        function setFood()
        {
            $this->food += (float) 1;
        }

        function setPlay()
        {
            $this->play += (float) 1;
        }

        function setSleep()
        {
            $this->sleep += (float) 1;
        }

        function setName()
        {
            $this->name = (string) 1;
        }

        function getFood()
        {
            return $this->food;
        }

        function getPlay()
        {
            return $this->play;
        }
        function getSleep()
        {
            return $this->sleep;
        }

        function getName()
        {
            return $this->name;
        }

        function save()
        {
            array_push($_SESSION['creature-life'], $this);
        }

        static function getAll()
        {
            return $_SESSION['creature-life'];
        }

        static function deleteAll()
        {
            $_SESSION['creature-life'] = array();
        }
    }

 ?>
