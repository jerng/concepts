<?php

App::uses('AppModel', 'Model');

class ProblemTag extends AppModel {
  
  public $name = 'ProblemTag';
  public $belongsTo = array
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
