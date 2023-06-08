<?php

namespace App\Http\Livewire;

use App\Models\Student;
use Livewire\Component;
use Livewire\WithFileUploads;

class MultiStepForm extends Component
{
    use WithFileUploads;

    // form properties
    public $first_name;
    public $last_name;
    public $gender;
    public $age;
    public $description;
    public $email;
    public $phone;
    public $country;
    public $city;
    public $frameworks = [];
    public $cv;
    public $terms;

    public $totalSteps = 4;
    public $currentSteps = 1; // Default

    public function mount() {
        $this->currentSteps = 1;
    }

    public function render()
    {
        return view('livewire.multi-step-form');
    }

    public function addStep() {
        $this->resetErrorBag();
        $this->validateData();
        return ++$this->currentSteps;
    }

    public function minusStep() {
        $this->resetErrorBag();
        return --$this->currentSteps;
    }

    public function validateData() {
        if ($this->currentSteps == 1) {
            $this->validate([
                'first_name' => 'required|string',
                'last_name' => 'required|string',
                'age' => 'required|digits:2',
                'gender' => 'required',
                'description' => 'string'
            ]);
        } else if ( $this->currentSteps == 2) {
            $this->validate([
                'email' => 'required|email|unique:students',
                'phone' => 'required',
                'country' => 'required',
                'city' => 'required'
            ]);
        } else if ( $this->currentSteps == 3) {
            $this->validate([
                'frameworks' => 'required|array|min:2|max:3'
            ]);
        }
    }

    public function register() {
        $this->resetErrorBag();
        $this->validate([
            'cv' => 'required|mimes:doc,docx,pdf|max:1024',
            'terms' => 'accepted'
        ]);

        $cvName = 'CV_' . $this->cv->getClientOriginalName();
        $uploadCv = $this->cv->storeAs('students_cvs', $cvName);

        if ($uploadCv) {
            Student::create([
                'first_name' => $this->first_name,
                'last_name' => $this->last_name,
                'age' => $this->age,
                'gender' => $this->gender,
                'description' => $this->description,
                'email' => $this->email,
                'phone' => $this->phone,
                'country' => $this->country,
                'city' => $this->city,
                'frameworks' => json_encode($this->frameworks),
                'cv' => $cvName
            ]);

            // $this->reset();
            // $this->currentSteps = 1;
            $data = [
                'name' => $this->first_name. ' ' .$this->last_name,
                'email' => $this->email
            ];

            dd(compact('data'));

            return redirect()->route('register.success', compact('data'));
        }
    }
}
