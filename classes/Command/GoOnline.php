<?php

namespace Command;

class GoOnline implements ICommand
{
    protected $user;

    public function __construct(User $user){
        $this->user = $user;
    }

    public function execute(){
        $this->user->goOnline();
    }

    public function undo(){
        $this->user->goOffline();
    }

    public function redo(){
        $this->execute();
    }
}