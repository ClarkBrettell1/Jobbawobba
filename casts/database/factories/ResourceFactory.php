<?php

    namespace Database\Factories;

    use App\Models\Resource;
    use App\Models\User;
    use Illuminate\Database\Eloquent\Factories\Factory;
    use Illuminate\Support\Str;

    class ResourceFactory extends Factory
    {
        /**
         * The name of the factory's corresponding model.
         *
         * @var string
         */
        protected $model = Resource::class;

        /**
         * Define the model's default state.
         *
         * @return array
         */
        public function definition()
        {
            return [
                'name' => $this->faker->name,
                'monarch_id' => $this->faker->numberBetween(1, 6),
                'link' => $this->faker->url,
                'description' => $this->faker->paragraph,
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }
    }
