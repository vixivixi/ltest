<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable=[
        'title',
        'body',
        'published_at',
        'user_id'//temporary
    ];
    //теперь это тип объекта CARBON с которым можно производить различные манипуляции
    protected $dates=[
        'published_at'
    ];
    //
    public function setPublishedAtAttribute($date){
        //mutation data before store, setNameCamelAttribute
        $this->attributes['published_at'] = Carbon::createFromFormat('Y-m-d',$date);
    }
    public function scopePublished($query){
        $query->where('published_at','<>',Carbon::now());
    }
    public function scopeUnpublished($query){
        $query->where('published_at','>',Carbon::now());
    }

    /**
     * Post belong to User
     */
    public function user(){
        return $this->belongsTo('App\User');
    }
}
