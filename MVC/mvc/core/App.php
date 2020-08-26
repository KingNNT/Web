<?php

class App {

        protected $controller;
        protected $action;
        protected $param;

        function __construct()
        {
            $this->controller = "Home";
            $this->action = "default";
            $this->param = [];

            $arr = $this->urlProcess();

            // echo "Result Debug<br>";
            // print_r($arr); echo "<br>";

            $this->handingController($arr);
            $this->handingAction($arr);
            $this->handingParam($arr);

            // echo $this->controller . "<br>";
            // echo $this->action . "<br>";
            // print_r($this->param); echo "<hr/>";

            call_user_func_array([$this->controller, $this->action], $this->param);

        }

        function __destruct()
        {
            
        }

        private function urlProcess() {
            if (isset($_GET["url"])) {
                return explode("/", filter_var(trim($_GET["url"], "/")));
            } else {
                // echo "Error";
            }
        }

        private function handingController(&$arr) {
            if (file_exists("./mvc/controllers/".$arr[0].".php")) {
                $this->controller = $arr[0];
            }            
            unset($arr[0]);
            require_once "./mvc/controllers/".$this->controller.".php";
        }

        private function handingAction (&$arr) {
            if (isset($arr[1])) {
                if (method_exists($this->controller, $arr[1])) {
                    $this->action = $arr[1];
                }
                unset($arr[1]);
            }
        }

        private function handingParam ($arr) {
            $this->param = $arr?array_values($arr):[];
        }

        // $obj = new Home();
        // obj.show();
        // Khong the lam nhu nay duoc, boi vi chua biet thang controller nao se duoc goi vao, nen khong new duoc
    }
