<?php

namespace AuthExt\Eloquent;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use AuthExt\Eloquent\Access;

class Group extends Model
{

    use SoftDeletes;

    /**
     * Table name
     * @var string 
     */
    protected $table = 'groups';

    /**
     * 
     * @return type
     */
    public function access()
    {
        return $this->hasMany(Access::class, 'group_access', 'group_id', 'access_id');
    }

}
