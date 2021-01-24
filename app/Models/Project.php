<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Carbon\Carbon;

class Project extends Model
{
    use HasFactory;

    use SoftDeletes;

    protected $table = 'projects';

    protected $dates = ['deleted_at'];

    protected $fillable = [

        'name',
        'slug',
        'desc',
        'duedate',
        'completed'
    ];



    public function setdueDateAttributes($date)
    {
        $this->attribute['duedate'] = Carbon::parse($date);
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function tasks()
    {
        return $this->hasMany('App\Models\Task');
    }

    public function subtasks()
    {
        return $this->hasManyThrough('App\Models\Subtask','App\Models\Task');
    }
}
