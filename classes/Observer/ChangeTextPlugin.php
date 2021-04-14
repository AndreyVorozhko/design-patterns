<?php

namespace Observer;

class ChangeTextPlugin implements \SplObserver
{
    public function update(\SplSubject $obj, string $event = null, $data = null){
        if(isset($obj->text)){
            $obj->text .= 'Create event';
        }
    }
}