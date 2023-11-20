<?php

namespace Database\Factories;

use App\Models\Document;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class DocumentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
            $ijazahPath = Storage::disk('public')->put('ijazah', fake()->image());
    $nilaiAkhirPath = Storage::disk('public')->put('nilai_akhir', fake()->image());
        return [
            'user_id' => \App\Models\User::inRandomOrder()->first()->id,
            'nama' => fake()->name,
            'no_telp' => fake()->numerify('############'), // 12-digit random number
            'email' => fake()->unique()->safeEmail(),
            'ktp' => fake()->numerify('################'),
            'ijazah' => $ijazahPath,
            'nilai_akhir' => $nilaiAkhirPath,
        ];
    }
}
