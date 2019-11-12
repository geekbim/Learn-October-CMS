<?php namespace AbimanyuGatyaDhaneswara\Movies\Models;

use Model;

/**
 * Model
 */
class Genre extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'abimanyugatyadhaneswara_movies_genres';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    // relation
    public $belongsToMany = [
        'movies' => [
            'abimanyugatyadhaneswara\Movies\Models\Movie',
            'table' => 'abimanyugatyadhaneswara_movies_movies_genres',
            'order' => 'name'
        ]
    ];
}
