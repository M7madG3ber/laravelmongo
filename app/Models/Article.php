<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;

class Article extends Model
{
    protected $connection = 'mongodb';

    protected $primaryKey = '_id';

    protected $collection = 'articles';

    protected $fillable = [
        'title',
        'body',
        'image1',
        'image2',
        'image3',
    ];
}