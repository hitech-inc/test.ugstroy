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
        'img',
        'description',
        'lat',
        'lng',
        'slug',
        'address',
        'phone',
        'text',
        'script',
        'style'
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
        'img' => 'string',
        'description' => 'string',
        'lat' => 'string',
        'lng' => 'string',
        'slug' => 'string',
        'address' => 'string',
        'phone' => 'string',
        'text' => 'text',
        'style' => 'text',
        'script' => 'text'
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
        'img' => 'required',
        'description' => 'required',
        'slug' => 'required',
        'lat' => 'numeric',
        'lng' => 'numeric'
    ];

    public function boxes()
    {
        return $this->morphMany('App\Models\Box', 'boxable');
    }

}
