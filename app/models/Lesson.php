<?php

class Lesson extends Eloquent {

    /**
     * @var array
     */
    protected $fillable = ['title', 'body', 'completed'];

    /**
     * @return mixed
     */
    public function tags()
    {
        return $this->belongsToMany('Tag');
    }
}