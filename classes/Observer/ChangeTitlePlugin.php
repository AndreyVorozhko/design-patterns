<?php

namespace Observer;

class ChangeTitlePlugin implements \SplObserver
{
    public function update(\SplSubject $obj, string $event = null, $data = null){
        if(isset($obj->title)){
            $obj->title .= ' Create event';
        }
    }
}