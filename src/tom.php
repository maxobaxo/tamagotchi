<?php
    class Tamagotchi
    {
        private $feed;
        private $play;
        private $sleep;
        private $name;

        function __construct ($feed, $play, $sleep, $name)
        {
            $this->food = $food;
            $this->play = $play;
            $this->sleep = $sleep;
            $this->name = $name;
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
        function setFood($new_food)
        {
            $this->food = $new_food;
        }

        function setPlay($new_play)
        {
            $this->play = $new_play;
        }
        function setSleep($new_sleep)
        {
            $this->sleep = $new_sleep;
        }

        function setName($new_name)
        {
            $this->name = $new_name;
        }

    }

 ?>
