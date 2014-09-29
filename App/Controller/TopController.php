<?php

class TopController extends AppController {
    public $components = array('Session');

    public $uses = array('RideRequest');
    function index(){
       $facebook = $this->createFacebook(); //【2】アプリに接続
       $myFbData = $this->Session->read('mydata');       //【3】facebookのデータ
       if (empty($myFbData)) {
          $this->set('login', false);
          return;
       }

       $this->set('login', true);
       
       $this->set('myFbData', $myFbData);
       $list = $this->RideRequest->find('all');
       $this->set('list', $list);
       //var_dump($this->RideRequest->find('all'));
       $this->render('main');
    }
}
