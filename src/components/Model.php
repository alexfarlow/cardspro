<?php

namespace cardspro\components;

use cardspro\exceptions\UnknownPropertyException;

class Model
{
    public function __construct($config = [])
    {
        if (!empty($config)) {
            foreach ($config as $name => $value) {
                if (property_exists($this, $name)) {
                    $this->$name = $value;
                } else {
                    throw new UnknownPropertyException('Свойство ' . $name . ' не существует в классе ');
                }
            }
        }
    }


    public function __call($name, $args)
    {
        if (strpos($name, 'set') === 0){
            $name = preg_replace('#^set#','',$name);
            $name = lcfirst($name);

            if (property_exists($this, $name)) {
                $this->$name = $args[0];
            } else {
                throw new UnknownPropertyException('Свойство ' . $name . ' не существует в классе '.__CLASS__);
            }
            return $this;

        }elseif (strpos($name, 'get') === 0){

            $name = preg_replace('#^get#','',$name);
            $name = lcfirst($name);

            if (property_exists($this, $name)) {

                throw new UnknownPropertyException('Свойство ' . $name . ' не существует в классе '.__CLASS__);
            }

            return $this->$name;
        }

        return $this;
    }
}