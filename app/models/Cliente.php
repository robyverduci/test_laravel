<?php

class Cliente extends \Eloquent {


	public $table = 'cliente';
	public $primaryKey = 'idcliente';
	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = [];

}