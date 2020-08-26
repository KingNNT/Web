<?php 
    class Controllers {
        public function model($model) {
            require_once "./mvc/models/".$model.".php";
            return new $model;
        }

        public function view($view) {
            
        }
        public function test() {
            echo "Controller - test";
        }
    }
?>
