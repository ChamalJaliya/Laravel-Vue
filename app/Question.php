<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    //
    protected $fillable = ['title' , 'body'];
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function SetTitleAttribute($value)
    {
        $this->attributes['title'] = $value;
        $this->attributes['slug'] = str_slug($value);
    }
    //create a accessor
    public function getUrlAttribute(){
        return route("questions.show",$this->id);
    }
    public function getCreatedDateAttribute(){
        return $this->created_at->diffForHumans();
    }
   
}
