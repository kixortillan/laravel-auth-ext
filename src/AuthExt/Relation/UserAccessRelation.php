<?php

namespace AuthExt\Relation;

use AuthExt\Eloquent\Access;

trait UserAccessRelation
{

    /**
     * 
     * @return type
     */
    public function access()
    {
        return $this->hasManyThrough(Access::class, 'user_access', 'user_id', 'access_id');
    }

}
