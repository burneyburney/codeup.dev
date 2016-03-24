<?php

class Input

{
    /**
     * Check if a given value was passed in the request
     *
     * @param string $key index to look for in request
     * @return boolean whether value exists in $_POST or $_GET
     */
    public static function has($key)
    {
        return isset($_REQUEST[$key]);
    }

    /**
     * Get a requested value from either $_POST or $_GET
     *
     * @param string $key index to look for in index
     * @param mixed $default default value to return if key not found
     * @return mixed value passed in request
     */
    public static function get($key, $default = null)
    {
        $value = self::has($key) ? $_REQUEST[$key] : $default;
        return $value;
    }

    ///////////////////////////////////////////////////////////////////////////
    //                      DO NOT EDIT ANYTHING BELOW!!                     //
    // The Input class should not ever be instantiated, so we prevent the    //
    // constructor method from being called. We will be covering private     //
    // later in the curriculum.                                              //
    ///////////////////////////////////////////////////////////////////////////
    private function __construct() {}

    public static function getString($key){
        $value = self::get($key);
        if(is_string($value)){
            return $value;
        } else{
            throw new Exeception('Must be a string!');
        }
    }
    public static function getNumber($key){
        $value = self::get($key);
        if(is_numeric($key)){
            return (int)$value;
        } else{
            throw new Exception('Must be a number!');
        }
    }


}
