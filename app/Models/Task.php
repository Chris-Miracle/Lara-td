<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Carbon\Carbon;

class Task extends Model
{
    use HasFactory;

    use SoftDeletes;

    protected $table = 'tasks';

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
        $thus->attribute['duedate'] = Carbon::parse($date);
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function project()
    {
        return $this->belongsTo('App\Models\Project');
    }

    public function subtasks()
    {
        return $this->hasMany('App\Models\Subtask');
    }

}
