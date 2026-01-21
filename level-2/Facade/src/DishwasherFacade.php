<?php

require('Dishwasher.php');

class DishwasherFacade
{

    protected Dishwasher $dishwasher;

    public function __construct(Dishwasher $dishwasher)
    {
        $this->dishwasher = $dishwasher;
    }

    public function turnOn()
    {
        $this->dishwasher->makeOnsound();
        $this->dishwasher->lightScreen();
    }

    public function washDishes()
    {
        $this->dishwasher->startProgram();
        $this->dishwasher->addDetergent();
        $this->dishwasher->rinse();
        $this->dishwasher->makeFinishedProgramSound();
    }

    public function turnOff()
    {
        $this->dishwasher->makeOffSound();
        $this->dishwasher->closeEverything();
    }
}
