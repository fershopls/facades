<?php
/**
 * Abstract Class HelloWorld
 */
class HelloWorldManager {

    public function hello ($name = null)
    {
        if ($name)
            echo "Hello " . $name . "!";
        else echo "Hello my Friend!";
        echo PHP_EOL;
    }

}


/**
 * HelloWorld as Facade
 */
class HelloWorldFacade extends \FershoPls\Facades\Facade {

    /**
     * Retrive Facade Class
     *
     * @return string|object
     */
    public static function getFacadeAccessor ()
    {
        return "HelloWorldManager"; // namespace || object
    }

}