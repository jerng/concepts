<?php

App::uses('AppModel', 'Model');

class Solution extends AppModel {
  
  public $name = 'Solution';
  public $hasAndBelongsToMany = array
  (
    'Emotion'
  );
}
