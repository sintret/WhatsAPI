<?php

namespace sintret\whatsapp;

include 'src/whatsprot.class.php';

class WhatsApp {

    public $number = 6281311160876;
    public $app = 'Alfarecords';
    public $password = 'c7v3YhuBR1QfZhe/5NDRn4YZxnk=';
    public $connect;

    public function __construct() {
        $this->getConnection();
    }

    public function getConnection() {
        $w = new \WhatsProt($this->number, 0, $this->app, true);
        $w->connect();
        $w->loginWithPassword($password);
        $this->connect = $w;
    }

    public function send($target, $message) {
        $target = '6281575068530'; //Target Phone,reciever phone 
        $message = 'Your message comes here';
        $this->connect->SendPresenceSubscription($target); //Let us first send presence to user 
        $this->connect->sendMessage($target, $message); // Send Message 
    }

}
