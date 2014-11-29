<?php
class User extends Eloquent{
	
	

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'user_table';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

	protected $guarded = array('id');
}
