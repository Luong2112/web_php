<?php

    class Products{
        private $id;
        private $name;
        private $category_id;

        public function getId(){
            return $this->id;
        }

        public function setId($id){
            $this->id = $id;
        }

        public function getName(){
            return $this->name;
        }

        public function setName($name){
            $this->name = $name;
        }

        public function getCategory_id(){
            return $this->category_id;
        }

        public function setCategory_id($category_id){
            $this->category_id = $category_id;
        }
    }
?>