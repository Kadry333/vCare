<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Major;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\File;
class MajorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // Define an array of sample images
        $sampleImages = ['major1.jpg', 'major2.jpg', 'major3.jpg'];

        // Randomly pick one image from the sample images
        $randomImage = $this->faker->randomElement($sampleImages);

        // Copy the sample image to the storage directory and get its path
        $imagePath = 'uploads/majors/' . $randomImage;

        return [
            'name' => $this->faker->word(),
            'image' => $imagePath,
        ];
    }
}