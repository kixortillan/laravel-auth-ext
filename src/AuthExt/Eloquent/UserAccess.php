<?php

namespace AuthExt\Eloquent;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserAccess extends Model
{
    protected $table = 'user_access';
}
