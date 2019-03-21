<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Favori extends Model
{
    protected function setKeysForSaveQuery(Builder $query)
    {
        $query
            ->where('mom_id', '=', $this->getAttribute('mom_id'))
            ->where('discussion_id', '=', $this->getAttribute('discussion_id'));
        return $query;
    }
}
