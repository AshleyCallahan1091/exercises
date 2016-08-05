<?php 

class Attribute
{
    // Array to store our key/value data
    private $attributes = [];

    // Magic setter to populate $data array
    public function __set($attribute, $value)
    {
        // Set the $name key to hold $value in $data
        $this->attributes[$attribute] = $value;
    }

    // Magic getter to retrieve values from $data
    public function __get($attribute)
    {
        // Check for existence of array key $name
        if (array_key_exists($name, $this->attributes)) {
            return $this->attributes[$attribute];
        }

        return null;
    }
}