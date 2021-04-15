<?php

namespace Command;

class ChatInterface
{
    private $command;

    public function setCommand(Icommand $command){
        $this->command = $command;
    }

    public function run(){
        $this->command->execute();
    }

    public function undo(){
        $this->command->undo();
    }

    public function redo(){
        $this->command->redo();
    }
}