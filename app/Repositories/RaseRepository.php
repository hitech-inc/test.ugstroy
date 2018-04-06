<?php

namespace App\Repositories;

use App\Models\Rase;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class RaseRepository
 * @package App\Repositories
 * @version April 6, 2018, 11:28 am UTC
 *
 * @method Rase findWithoutFail($id, $columns = ['*'])
 * @method Rase find($id, $columns = ['*'])
 * @method Rase first($columns = ['*'])
*/
class RaseRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'text'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Rase::class;
    }
}
