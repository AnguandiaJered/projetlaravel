<?php

    namespace App\Utilities;

    class Date{
         public function isWeeckend(){
             return date('N') >=6;
         }
    }