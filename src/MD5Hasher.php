<?php

namespace Duocheng\Hasher;
/**
 * Created by PhpStorm.
 * User: scaly
 * Date: 17/4/18
 * Time: 下午11:12
 */
/**
 * Class MD5Haser
 * @package Duocheng\Hasher
 */
class MD5Hasher
{
    /**
     * @param $value
     * @param array $options
     * @return mixed
     */
    public function make($value, array $options=[]) {
        $salt = isset($options['salt'])?$options['salt']:'';
        return hash('md5',$value.$salt);
    }


    /**
     * @param $value
     * @param $hashValue
     * @param array $options
     * @return bool
     */
    public function check($value, $hashValue, array $options) {
        $salt = isset($options['salt'])?$options['salt']:'';
        return hash('md5',$value.$salt) === $hashValue;
    }
}