<?php
App::uses('AppController', 'Controller');

class DemosController extends AppController {

  public $uses = array();

  public function a() { } 
  
  public function b() { } 
  
  public function c()
  { 
    $this->loadModel('Emotion');
    $emotions = $this->Emotion->find('all',array
      ( 
        'conditions' => array
        (
          'Emotion.text LIKE \'%coffee%\''
        )
      ));
    $this->set('emotions',$emotions);
  } 

  public function d(){}

}
