<?php

namespace Command;

class GoOffline implements ICommand
{
    protected $user;

    public function __construct(User $user){
        $this->user = $user;
    }

    public function execute(){
        $this->user->goOffline();
    }

    public function undo(){
        $this->user->goOnline();
    }

    public function redo(){
        $this->execute();
    }
}