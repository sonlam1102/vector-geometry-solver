<?php
/**
 * Created by PhpStorm.
 * User: sonlam1102
 * Date: 2019-02-12
 * Time: 14:09
 */

namespace App\Console;


class RunCommand
{
    private $command;

    function __construct($mpl_path) {
        $this->command = "\"".env("MAPPLE_DIR")."\" ".$mpl_path;
    }

    public function setCommand($command) {
        $this->command = $command;
    }

    public function execute() {
        exec($this->command);
    }
}