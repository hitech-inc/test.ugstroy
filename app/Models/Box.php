<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Box
 * @package App\Models
 * @version June 27, 2018, 10:27 am UTC
 *
 * @property integer boxable_id
 * @property string boxable_type
 * @property string name
 * @property string text
 */
class Box extends Model
{
    use SoftDeletes;

    public $table = 'boxes';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'boxable_id',
        'boxable_type',
        'name',
        'text'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'boxable_id' => 'integer',
        'boxable_type' => 'string',
        'name' => 'string',
        'text' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'boxable_id' => 'required',
        'boxable_type' => 'required',
        'name' => 'required',
        'text' => 'required'
    ];

    public function boxable()
    {
        return $this->morphTo();
    }
}
