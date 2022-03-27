<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Setting>
 */
class SettingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'header_logo' => 'Virtual-Vectory store',
            'address' => 'Dargi Malakand , GT Road Mardan',
            'phone' => '+923423601581',
            'email' => 'programmerhero6@gmail.com',
            'footer_logo' => 'Virtual-Vectory store',
            'footer_desc' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt, deleniti modi eveniet dignissimos autem, beatae pariatur nobis ',
        ];
    }
}
