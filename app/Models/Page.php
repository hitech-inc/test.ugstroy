<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Page
 * @package App\Models
 * @version April 9, 2018, 6:11 am UTC
 *
 * @property string title
 * @property string url
 * @property string category
 * @property string img
 * @property string text
 */
class Page extends Model
{
    use SoftDeletes;

    public $table = 'pages';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'title',
        'slug',
        'category',
        'img',
        'text'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'title' => 'string',
        'slug' => 'string',
        'category' => 'string',
        'img' => 'string',
        'text' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'title' => 'required',
        'slug' => 'required',
        'category' => 'required'
    ];

    
}
