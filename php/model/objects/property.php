<?php

class property {

    /***
     * @var string $description
     */
    protected $description;
    /***
     * @var bool $primary_attribute
     */
    protected $primary_attribute;

    public function __construct($pram1,$param2)
    {
        $description = "foo"; //platzhalter
        $primary_attribute = "bar";//platzhalter
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function isPrimaryAttribute()
    {
        return $this->primary_attribute;
    }

    public function setPrimaryAttribute($primary_attribute)
    {
        $this->primary_attribute = $primary_attribute;
    }
}
