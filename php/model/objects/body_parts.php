<?php

/**
 * Created by PhpStorm.
 * User: A.Geikis
 * Date: 20.06.2016
 * Time: 11:15
 */
class body_parts {
    /***
     * @var string $upperArmLeft
     */
    protected $upperArmLeft;
    /***
     * @var string $upperArmRight
     */
    protected $upperArmRight;
    /***
     * @var string $foreArmLeft
     */
    protected $foreArmLeft;
    /***
     * @var string $foreArmRight
     */
    protected $foreArmRight;

    public function getForeArmLeft()
    {
        return $this->foreArmLeft;
    }
}