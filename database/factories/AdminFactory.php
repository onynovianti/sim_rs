<?php

namespace Database\Factories;

use App\Models\Admin;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Admin>
 */
class AdminFactory extends Factory
{
    protected $model = Admin::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'namaLengkap' => $this->faker->name,
            'username' => $this->faker->userName,
            'password' => $this->faker->password,
            'alamat' => $this->faker->address,
            'noHp' => $this->faker->phoneNumber,
            'jenisKelamin' => $this->faker->boolean,
            'tempatLahir' => $this->faker->city,
            'tanggalLahir' => $this->faker->date,
        ];
    }
}
