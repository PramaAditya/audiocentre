<?php namespace Balkat\ProductPlugin\Models;

use Model;

/**
 * Model
 */
class Product extends Model
{
    use \October\Rain\Database\Traits\Validation;
    public $jsonable = ['image_urls'];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'balkat_productplugin_product';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
