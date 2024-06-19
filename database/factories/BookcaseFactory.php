<?php

namespace Database\Factories;

use App\Models\Bookcase;
use App\Models\Library;
use App\Models\Theme;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Bookcase>
 */
class BookcaseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $tema = Theme::factory()->create();
        $library = Library::factory()->create();
        $codigo = substr($tema->nombre, 0, 1) . (Bookcase::where('library_id', $library->id)->count() + 1);

        return [
            'codigo' => $codigo,
            'library_id' => $library->id
        ];
    }
}
