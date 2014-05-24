<?php

App::uses('AppModel', 'Model');

class Emotion extends AppModel {
  
  public $name = 'Emotion';
  public $displayField = 'text';
  public $hasAndBelongsToMany = array
  (
    'Problem'
  );
}
