<?php

/**
 * Class Stringley
 * @author Kevin Woodard
 * @date 2014-07-01
 * @file Stringley.php
 * @package Kevincio/Cms-stringley
 * @description The Stringley model
 *
 */
class Stringley extends \Eloquent {

	/**
	 * @var string table name
	 */
	protected $table = 'stringleys';

	/**
	 * @var array fillable fields
	 */
	protected $fillable = array('tag', 'name', 'category', 'content');

	/**
	 * @var array guarded fields
	 */
	protected $guarded = array('id');

	/**
	 * @var array validation rules
	 */
	public static $rules = array(
		'tag' => 'required|unique|min:3|max:32',
		'name' => 'required|min:3|max:64',
		'content' => 'required',
		'category' => 'required'
	);

	/**
	 * @var array validation failure messages
	 */
	public static $messages = array(
		'tag' => 'The "Tag" field is required, must be unique and between 3 and 32 characters in length.',
		'name'=> 'The "Name" field is required and must be between 3 and 64 characters in length.',
		'content' => 'The "Content" field is required',
		'category' => 'The "Category" field is required'
	);

	/**
	 * Our category scope
	 *
	 * @param $query
	 * @param $category_id
	 * @return mixed
	 */
	public function scopeCategory($query, $category_id)
	{
		return $query->whereCategory($category_id);
	}

}