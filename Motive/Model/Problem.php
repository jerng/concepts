<?php

App::uses('AppModel', 'Model');

class Problem extends AppModel {
  
  public $name = 'Problem';
  public $hasAndBelongsToMany = array
  (
    'Emotion'
  );
}
