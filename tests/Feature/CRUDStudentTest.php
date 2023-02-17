<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Student;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CRUDStudentTest extends TestCase    
{
    /**
     * A basic feature test example.
     *
     * @return void
     */

    use RefreshDatabase;
    
    /* public function test_example()
    {
        $response = $this->get('/');
        $response->assertStatus(200);
    } */

    public function test_listStudentAppearInHomeView(){
        $this->withExceptionHandling();
        $students = Student::Factory(2)->create();
        $student = $students[0];
        $response = $this->get('/');
        $response->assertSee($student->name);
        $response->assertStatus(200)
        ->assertViewIs('home');
    }

    public function test_anStudentCannotBeDeletedByAnStudent(){
        $this->withExceptionHandling();

        $student = Student::factory()->create(['isTeacher' => false]);     
        $this->actingAs($student);     

        $response = $this->delete(route('deleteStudent', $student->id));
        $this->assertCount(1, Student::all());
    }

    public function test_anStudentCanBeDeletedByATeacher(){
        $this->withExceptionHandling();

        $student = Student::factory()->create(['isTeacher' => false]);
        $this->actingAs($student);

        $studentTeacher = Student::factory()->create(['isTeacher' => true]);
        $this->actingAs($studentTeacher);

        $response = $this->delete(route('deleteStudent', $student->id));
        $this->assertCount(1, Student::all()); 
    }

    public function test_anStudentCanBeUpdated(){
        $this->withExceptionHandling();

        $student = Student::factory()->create();
        $this->assertCount(1, Student::all()); 

        $response = $this->delete(route("deleteStudent", $student->id));
        $studentTeacher = Student::factory()->create(['isTeacher'=> true]);
        $this->actingAs($studentTeacher);
        $response = $this->patch(route('updateStudent', $student->id),['name' => 'New Name']);
        $this->assertEquals('New Name' , Student::first()->name);

        $student = Student::factory()->create(['isTeacher'=> false]);
        $this->actingAs($student);
        $response = $this->patch(route('updateStudent', $student->id),['name' => 'New Name if no Teacher']);
        $this->assertEquals('New Name' , Student::first()->name);
    }

    public function test_aStudentCanBeCreated(){
        $this->withExceptionHandling();

        $studentTeacher = Student::factory()->create(['isTeacher'=>true]);
        $this->actingAs($studentTeacher);
        $response = $this->post(route('storeStudent'),
        [
            'name' => 'name',
            'surname' => 'surname', 
            'email' => 'email',
            'password' => 'password',
            'img' => 'img',
            'currentTerm' => 'currentTerm'
        ]); 
        $this->assertCount(2, Student::all());

        $student = Student::factory()->create(['isTeacher'=>false]);
        $this->actingAs($student);
        $response = $this->post(route('storeStudent'), 
        [
            'name' => 'name',
            'surname' => 'surname',
            'email' => 'email',
            'password' => 'password',
            'img' => 'img',
            'currentTerm' => 'currentTerm'
        ]);

        $this->assertCount(3, Student::all());
    }
}