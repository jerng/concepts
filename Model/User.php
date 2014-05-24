<?php

App::uses('AppModel', 'Model');

class User extends AppModel {
  
  public $name = 'User';
  public $hasAndBelongsToMany = array
  (
    'Problem'/* =>
      array
      (
        'className' => 'Problems',
        'joinTable' => 'problems_users',
        'foreignKey' => 'user_id',
        'associationForeignKey' => 'problem_id',
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
