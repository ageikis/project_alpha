<?php

class magic_property
{

    /***
     * @var string $effect
     */
    protected $effect;

    public function getEffect()
    {
        return $this->effect;
    }

    public function setEffect($effect)
    {
        $this->effect = $effect;
    }

}