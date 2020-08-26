<?php
    class Home extends Controllers {
        function default () {
            $sinhVienModel = self::model("SinhVienModel");
            echo $sinhVienModel->removeSinhVien();

        }
        function sayHi() {
            echo "Home - Sayhi";
        }
        function show() {
            echo "Home - Show";
        }
        function demo($paramtest) {
            echo "Param ".$paramtest;
        }
    }