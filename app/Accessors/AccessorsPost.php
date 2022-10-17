<?php

namespace App\Accessors;

trait AccessorsPost{

    public function getTitleAttribute($value)
    {
        return $this->attributes['title'] = ucfirst($value);
    }

    public function getContentAttribute($value)
    {
        return $this->attributes['content'] = ucfirst($value);
    }
}