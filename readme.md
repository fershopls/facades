Facades
=======

Turn your abstract classes on Facades with PHP!

Also helps to keep your code clean, fast & readable.

 

What that means?
----------------

[Wikipedia rules ;)][1]

[1]: <http://en.wikipedia.org/wiki/Facade_pattern>

 

Examples
--------

**Abstract Class**

~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
class HelloWorld {
    /*
     * Just sample method to say hello! :3
     */
    public function hello ($name = null)
    {
        if (!$name) return "Hello world!";
        else return "Hello {$name}, nice to meet you. ;)";
    }
}
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

 

**Facade Class**

~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
class HelloWorldFacade extends \FershoPls\Facades\Facade {
    public function getFacadeAccessor ()
    {
    //  Full namespace class || some object/class instanced
        return "HelloWorld";
    }
}
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

 

**Runtime Code**

~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
/**
 * Setup alias to use class everywhere. No really needed.
 */
class_alias("HelloWorld", "HelloWorldFacade");

/**
 * How to use a Facade Class?
 */
// Use normal methods as Static class! It isn't amazing?
HelloWorld::hello();
// Almost forget! You can pass arguments too.
HelloWorld::hello("John Doe");
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

 

### License

MIT Mudafakas ;)
