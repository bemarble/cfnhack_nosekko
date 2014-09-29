<?php

class RideController extends AppController {

    public $components = array('Session');

    public $uses = array('RideRequest');
    function index()
    {

    }

    function confirm()
    {
       $this->set('data', $this->request['data']);
    }

    function finish()
    {
       $facebook = $this->createFacebook();
       $myFbData = $this->Session->read('mydata');
       $saveData = $this->data;
       $saveData['fb_account'] = $myFbData['id'];
       $saveData['name'] = $myFbData['name'];
       if (!empty($myFbData['id'])) {
          $imagePath = "https://graph.facebook.com/".  $myFbData['id'] . "/picture?type=large";
       } else {
          $imagePath = '/img/gassyo' . rand(1,4) . '.jpg';
       }
       $saveData['image'] = $imagePath;
//var_dump();
$this->RideRequest->save($saveData);
    }
}
