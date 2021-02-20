<?php

namespace Database\Factories;

use App\Models\Patient;
use Illuminate\Database\Eloquent\Factories\Factory;

class PatientFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Patient::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'last_name' => $this->faker->lastName,
            'first_name' => $this->faker->firstName,
            'sex' => $this->faker->randomElement(array('Male','Female')),
            'age' => $this->faker->numberBetween($min = 0, $max = 100), //1-99 only
            'email' => $this->faker->unique()->email,
            'contact_number' => $this->faker->phoneNumber,
            'medical_history' => $this->faker->text($maxNbChars = 500),
            'general_condition' => $this->faker->text($maxNbChars = 500),    
        ];
    }
}
