<?php

namespace AuthExt\Relation;

use AuthExt\Eloquent\Access;

trait UserAccessRelation
{

    public function access()
    {
        return $this->hasManyThrough();
    }

}
