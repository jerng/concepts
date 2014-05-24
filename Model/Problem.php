<?php

App::uses('AppModel', 'Model');

class Problem extends AppModel {
  
  public $name = 'Problem';
  public $hasMany = 'ProblemTag';
  public $hasAndBelongsToMany = array
  (
    'Users'
    /*=>
      array
      (
        'className' => 'Users',
        'joinTable' => 'problems_users',
        'foreignKey' => 'problem_id',
        'associationForeignKey' => 'user_id',
        'unique' => true,
        'conditions' => '',
        'fields' => '',
        'order' => '',
        'limit' => '',
        'offset' => '',
        'finderQuery' => '',
        'with' => ''
      )*/
  );
}
