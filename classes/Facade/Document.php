<?php

namespace Facade;

// This class is Facade

class Document
{
    private $db, $log, $mail;

    public function __construct(Db $db, Log $log, Mail $mail){
        $this->db = $db;
        $this->log = $log;
        $this->mail = $mail;
    }

    // This method is Facade
    public function save($message){
        $this->db->connect();
        $this->db->saveDocument($message);
        $this->log->addLog($message);
        $this->mail->sendMessage($message);
    }

}