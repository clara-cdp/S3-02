<?php
spl_autoload_register(function ($class_name) {

    $file =  $class_name . '.php';

    if (file_exists($file)) {
        require_once $file;
    }
});

class TurkeyAdapter implements DuckInterface
{

    protected Turkey $turkey;

    public function __construct(Turkey $turkey)
    {
        $this->turkey = $turkey;
    }
    public function quack()
    {
        $this->turkey->gobble();
    }

    public function fly()
    {
        $output = [];

        for ($i = 0; $i < 5; $i++) {

            $results[] = $this->turkey->fly();
        }

        return $output;
    }
}
