<?php

namespace App\Repositories;

use App\Models\Trade;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class TradeRepository
 * @package App\Repositories
 * @version April 6, 2018, 11:25 am UTC
 *
 * @method Trade findWithoutFail($id, $columns = ['*'])
 * @method Trade find($id, $columns = ['*'])
 * @method Trade first($columns = ['*'])
*/
class TradeRepository extends BaseRepository
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
        return Trade::class;
    }
}
