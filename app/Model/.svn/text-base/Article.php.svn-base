<?php
App::uses('AppModel', 'Model');
/**
 * Article Model
 *
 */
class Article extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'article_title';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'article_title' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'article_content' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);
}
