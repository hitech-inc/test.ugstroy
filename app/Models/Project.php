<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Project
 * @package App\Models
 * @version April 10, 2018, 8:28 am UTC
 *
 * @property string title
 * @property string category
 * @property string type
 * @property string area
 * @property string finish
 */
class Project extends Model
{
    use SoftDeletes;

    public $table = 'projects';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'title',
        'category',
        'type',
        'area',
        'finish',
        'lat',
        'lng'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'title' => 'string',
        'category' => 'string',
        'type' => 'string',
        'area' => 'string',
        'finish' => 'string',
        'lat' => 'string',
        'lng' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'title' => 'required',
        'category' => 'required',
        'type' => 'required',
        'lat' => 'numeric',
        'lng' => 'numeric'
    ];

    
}
