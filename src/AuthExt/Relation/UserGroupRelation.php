<?php

namespace AuthExt\Relation;

trait UserGroupRelation
{

    /**
     * 
     */
    public function groups()
    {
        return $this->hasManyThrough();
    }

}
