<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Carbon\Carbon;

class Subtask extends Model
{
    use HasFactory;

    use SoftDeletes;

    protected $table = 'subtasks';

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

    public function task()
    {
        return $this->belongsTo('App\Models\Task');
    }


}
