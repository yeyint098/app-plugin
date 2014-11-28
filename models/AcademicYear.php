<?php namespace MMlinks\App\Models;

use Model;

/**
 * AcademicYear Model
 */
class AcademicYear extends Model
{

    /**
     * @var string The database table used by the model.
     */
    public $table = 'mmlinks_app_academic_years';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [];

    /**
     * @var array Relations
     */
    public $hasOne = [];
    public $hasMany = [];
    public $belongsTo = [];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];

}