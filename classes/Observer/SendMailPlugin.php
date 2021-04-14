<?php

namespace Observer;

class SendMailPlugin implements \SplObserver
{
    public function update(\SplSubject $obj, string $event = null, $data = null){
        echo ' Send Email';
        // mail();
    }
}