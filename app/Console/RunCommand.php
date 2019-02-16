<?php
namespace App\Console;

# This class used to set and run Maple engine to solve the problem
# The inference engine are built on Maple platform so the machine must be installed Maple before
# set the Maple path to cmaple in .env file MAPLE_DIR
class RunCommand
{
    private $command;

    function __construct($mpl_path) {
        $this->command = "\"".env("MAPLE_DIR")."\" ".$mpl_path;
    }

    public function setCommand($command) {
        $this->command = $command;
    }

    public function execute() {
        exec($this->command);
    }
}