<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Grade
 *
 * @property $id
 * @property $maths_grade
 * @property $student_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Student $student
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Grade extends Model
{
    
    static $rules = [
		'maths_grade' => 'required',
		'student_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['maths_grade','student_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function student()
    {
        return $this->hasOne('App\Models\Student', 'id', 'student_id');
    }
    

}
