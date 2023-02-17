<?php

namespace Tests\Feature; 

use Tests\TestCase;
use App\Models\Grade; 
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CRUDGradeTest extends TestCase 
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_aGradeCanBeUpdated(){
        $this->withExceptionHandling();

        $grade = Grade::factory()->create();
        
        $this->assertCount(1, Grade::all());

        $response = $this->patch(route('updateGrade', $grade->id),['grade' => 'New Grade']);
        $this->assertEquals('New Grade', Grade::first()->name);

    }
}