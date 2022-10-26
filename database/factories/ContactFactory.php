<?php

namespace Database\Factories;

use App\Models\Company;
use App\Models\Contact;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Contact>
 */
class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *\
     * how we  start the process i will connwct you with
     * @return array<string, mixed>
     */

    public function definition()
    {

        return [
            'first_name'=>$this->faker->firstName,
            'last_name'=>$this->faker->lastName,
            'phone'=>$this->faker->phoneNumber,
            'email'=>$this->faker->email,
            'address'=>$this->faker->address,
            'company_id'=>Company::pluck('id')->random()
        ];
    }
}
