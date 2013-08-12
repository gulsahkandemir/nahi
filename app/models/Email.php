<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class Email extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'emails';

    /**
     * Fillable columns of the model.
     *
     * @var array
     */
    protected $fillable = array('email', 'timezone_offset', 'locale');

}