<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(mt_rand(3, 10)),
            'slug' => $this->faker->slug(),
            'excerpt' => $this->faker->paragraph(),
            // 'body' => '<p>' . implode('<p></p>', $this->faker->paragraphs(mt_rand(5, 10))) . '</p>',
            'body' => collect($this->faker->paragraphs(mt_rand(5, 10)))
                //map digunakan untuk mengubah isi dari array menjadi string
                //fn adalah function yang akan dijalankan
                ->map(fn ($p) => "<p>$p</p>")
                //implode adalah untuk menggabungkan array menjadi string
                ->implode(''),
            'category_id' => mt_rand(1, 3),
            'user_id' => mt_rand(1, 5),
        ];
    }
}
