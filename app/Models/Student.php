<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Student
 *
 * @property $id
 * @property $name
 * @property $email
 * @property $created_at
 * @property $updated_at
 *
 * @property Grade[] $grades
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Student extends Model
{
  use HasFactory;
    
    static $rules = [
      'name' => 'required',
      'surname' => 'required',
      'email' => 'required',
      'currentTerm' => 'required',
      'img' => 'required',
      'isTeacher' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','email'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function grades()
    {
        return $this->hasMany('App\Models\Grade', 'student_id', 'id');
    }
    

}
