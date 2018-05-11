<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Kalnoy\Nestedset\NodeTrait;

/**
 * Class Category
 * @package App\Models
 * @version May 3, 2018, 5:57 am UTC
 *
 * @property string title
 * @property string slug
 * @property integer parent_id
 * @property string text
 * @property string img
 */
class Category extends Model
{
    use SoftDeletes;
    use NodeTrait;

    public $table = 'categories';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'title',
        'slug',
        'parent_id',
        'text',
        'img'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'title' => 'string',
        'slug' => 'string',
        'parent_id' => 'integer',
        'text' => 'string',
        'img' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'title' => 'required',
        'slug' => 'required'
    ];

    public static function select() 
    {
        $res = self::withDepth()->having('depth', '=', 0)->get();

        return ['' => 'Верхний уровень'] + $res->pluck('title', 'id')->all();
    }
}
