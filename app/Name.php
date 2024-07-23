<?php

namespace app;

class Name
{
    public function prepare(?string $name) : string|bool{
        if(!is_string($name)){
            return false;
        }
        return ucfirst(trim($name));
    }
}