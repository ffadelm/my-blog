<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(5)->create();

        Post::factory(50)->create();

        Category::create([
            'name' => 'Programming',
            'slug' => 'programming',
        ]);

        Category::create([
            'name' => 'Design',
            'slug' => 'design',
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal',
        ]);

        Category::create([
            'name' => 'Science',
            'slug' => 'science',
        ]);

        Category::create([
            'name' => 'Other',
            'slug' => 'other',
        ]);

        // User::create([
        //     'name' => 'Faysal Fadel Maulana',
        //     'email' => 'faysal@gmail.com',
        //     'password' => bcrypt('123456'),
        // ]);

        // User::create([
        //     "name" => "Jacki",
        //     "email" => "jack@mail.com",
        //     "password" => bcrypt("123456"),
        // ]);

        // Post::create([
        //     'title' => 'Laravel 5.7',
        //     'slug' => 'laravel-5.7',
        //     'excerpt' => 'Laravel 5.7 is a free, open-source PHP web framework, created by Taylor Otwell and intended for...',
        //     'body' => 'Laravel 5.7 is a free, open-source PHP web framework, created by Taylor Otwell and intended for the development of web applications following the model–view–controller (MVC) architectural pattern. It is based on Symfony, and its components are interoperable with the Symfony 2 framework.',
        //     'category_id' => 2,
        //     'user_id' => 1,
        // ]);

        // Post::create([
        //     'title' => 'vue js',
        //     'slug' => 'vue-js',
        //     'excerpt' => 'Vue.js is a progressive framework for building user interfaces. It is a library for building UI components based on reactive data...',
        //     'body' => '<p>Vue.js is a progressive framework for building user interfaces. It is a library for building UI components based on reactive data. Vue.js is designed from the ground up to be incrementally adoptable. It is also designed to be efficient and performant, as it is idiomatically designed for this purpose. Vue.js is a library for building UI components based on reactive data. Vue.js is designed from the ground up to be incrementally adoptable.</p> <p>It is also designed to be efficient and performant, as it is idiomatically designed for this purpose. Vue.js is a library for building UI components based on reactive data. Vue.js is designed from the ground up to be incrementally adoptable. It is also designed to be efficient and performant, as it is idiomatically designed for this purpose. Vue.js is a library for building UI components based on reactive data. Vue.js is designed from the ground up to be incrementally adoptable. It is also designed to be efficient and performant, as it is idiomatically designed for this purpose. Vue.js is a library for building UI components based on reactive data. Vue.js is designed from the ground up to be incrementally adoptable.</p> <p>It is also designed to be efficient and performant, as it is idiomatically designed for this purpose. Vue.js is a library for building UI components based on reactive data. Vue.js is designed from the ground up to be incrementally adoptable. It is also designed to be efficient and performant, as it is idiomatically designed for this purpose. Vue.js is a library for building UI components based on reactive data. Vue.js is designed from the ground up to be incrementally adoptable. It is also designed to be efficient and performant, as it is idiomatically designed for this purpose.</p><p> Vue.js is a library for building UI components based on reactive data. Vue.js is designed from the ground up to be incrementally adoptable. It is also designed to be efficient and performant, as it is idiomatically designed for this purpose. Vue.js is a library for building UI components based on reactive data. Vue.js is designed from the ground up to be incrementally adoptable. It is also designed to be efficient and performant, as it is id</p>',
        //     'category_id' => 3,
        //     'user_id' => 1,
        // ]);

        // Post::create([
        //     "title" => "PHP 7",
        //     "slug" => "php-7",
        //     "excerpt" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt, iure beatae. Iste numquam quisquam voluptas sunt non tenetur error soluta harum. Nostrum velit voluptate fuga sed doloribus, quas eveniet dignissimos.",
        //     "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laborum hic dolore ipsa laboriosam accusantium rerum expedita recusandae aperiam architecto facere vel est molestiae libero fugit deleniti facilis totam id repudiandae doloremque consequuntur tempora perferendis autem, officiis exercitationem. Asperiores beatae, exercitationem eaque repellat officia dolor ea nulla quis commodi unde magnam sapiente delectus necessitatibus quas, laudantium aspernatur, adipisci vitae iusto hic deserunt? Nostrum molestias neque iste magnam dolores, ratione alias eius amet iusto distinctio magni molestiae voluptates, explicabo consequatur quasi error quas, praesentium aspernatur natus? Eum expedita, eaque molestias earum exercitationem tenetur est libero perferendis harum ratione animi esse, maxime sed, officia pariatur at. Illum error nesciunt cupiditate alias. Error ea voluptatem hic nemo voluptatibus laborum sint, quo nesciunt omnis? Omnis, aliquam modi? Vero corrupti error deserunt, architecto optio excepturi eos quo, quibusdam dicta sed voluptates ad laudantium officia ducimus obcaecati fugit debitis. Porro saepe minima sed minus culpa? Quod, nemo.",
        //     "category_id" => 1,
        //     "user_id" => 2,
        // ]);
    }
}
