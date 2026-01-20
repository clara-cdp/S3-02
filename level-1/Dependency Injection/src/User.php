<?php

spl_autoload_register(function ($class_name) {

    $file =  $class_name . '.php';

    if (file_exists($file)) {
        require_once $file;
    }
});

class User
{
    private string $name;
    private Wallet $wallet;
    private Keys $keys;
    private Transport $transport;
    private Phone $phone;

    public function __construct(string $name, Wallet $wallet, Keys $keys, Transport $transport, Phone $phone)
    {
        $this->name = $name;
        $this->wallet = $wallet;
        $this->keys = $keys;
        $this->transport = $transport;
        $this->phone = $phone;
    }



    public function Exit()
    {
        return
            strtoupper($this->name) . ":<br>" .
            $this->wallet->takeItem() . "<br>" .
            $this->transport->movingAround() . " <br> " .
            $this->phone->takeItem() . " <br> " .
            $this->keys->takeItem() . "<br>" .
            "<strong>I'm off now!</strong><br>";
    }
}
