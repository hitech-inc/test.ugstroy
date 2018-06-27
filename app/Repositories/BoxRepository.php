<?php

namespace App\Repositories;

use App\Models\Box;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class BoxRepository
 * @package App\Repositories
 * @version June 27, 2018, 10:27 am UTC
 *
 * @method Box findWithoutFail($id, $columns = ['*'])
 * @method Box find($id, $columns = ['*'])
 * @method Box first($columns = ['*'])
*/
class BoxRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'boxable_id',
        'boxable_type',
        'name',
        'text'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Box::class;
    }
}
