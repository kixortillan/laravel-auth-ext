<?php

namespace AuthExt\Eloquent;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Access extends Model
{

    use SoftDeletes;

    /**
     * Table name
     * @var string 
     */
    protected $table = 'access';

}
