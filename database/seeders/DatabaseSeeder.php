<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Jason Oktavian',
            'username' => 'Jason',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('password')
        ]);

        User::factory(4)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        // User::create([
        //     'name' => 'Anthony Chandra',
        //     'email' => 'anthony.chandra@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);
        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);
        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);
        Category::create([
            'name' => 'Design',
            'slug' => 'design'
        ]);
        Category::create([
            'name' => 'School Life',
            'slug' => 'school-life'
        ]);


        // Category::factory(3)->create();

        Post::factory(20)->create();
        //Post::create([
        //     'title' => 'First Blog',
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'slug' => 'first-blog',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatum ex, vel perspiciatis nemo vero corporis repellendus quibusdam rem est veritatis?',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe, beatae. Doloribus ipsa cum nemo, hic sed aperiam ipsam harum consequuntur unde non voluptas quo! Dolores magnam voluptatum commodi inventore, facilis hic explicabo illo doloremque iste consectetur velit esse aspernatur enim optio placeat.</p> <p>Maiores quisquam temporibus similique suscipit illo, amet nihil pariatur sunt iusto saepe, perferendis, repudiandae dicta magnam voluptas consequatur.</p> <p>Omnis earum vitae necessitatibus eos minima similique dicta. Similique corrupti tenetur, repellendus officia neque nostrum fuga reprehenderit repudiandae quod fugiat expedita optio cum saepe quasi voluptatem delectus incidunt quisquam. Recusandae fugiat doloribus, odit laudantium perferendis harum corporis cumque reiciendis laborum!</p>'

        // ]);
        // Post::create([
        //     'title' => 'Second Blog',
        //     'category_id' => 1,
        //     'user_id' => 2,
        //     'slug' => 'second-blog',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatum ex, vel perspiciatis nemo vero corporis repellendus quibusdam rem est veritatis?',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe, beatae. Doloribus ipsa cum nemo, hic sed aperiam ipsam harum consequuntur unde non voluptas quo! Dolores magnam voluptatum commodi inventore, facilis hic explicabo illo doloremque iste consectetur velit esse aspernatur enim optio placeat.</p> <p>Maiores quisquam temporibus similique suscipit illo, amet nihil pariatur sunt iusto saepe, perferendis, repudiandae dicta magnam voluptas consequatur.</p> <p>Omnis earum vitae necessitatibus eos minima similique dicta. Similique corrupti tenetur, repellendus officia neque nostrum fuga reprehenderit repudiandae quod fugiat expedita optio cum saepe quasi voluptatem delectus incidunt quisquam. Recusandae fugiat doloribus, odit laudantium perferendis harum corporis cumque reiciendis laborum!</p>'

        // ]);
        // Post::create([
        //     'title' => 'Third Blog',
        //     'category_id' => 2,
        //     'user_id' => 1,
        //     'slug' => 'third-blog',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatum ex, vel perspiciatis nemo vero corporis repellendus quibusdam rem est veritatis?',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe, beatae. Doloribus ipsa cum nemo, hic sed aperiam ipsam harum consequuntur unde non voluptas quo! Dolores magnam voluptatum commodi inventore, facilis hic explicabo illo doloremque iste consectetur velit esse aspernatur enim optio placeat.</p> <p>Maiores quisquam temporibus similique suscipit illo, amet nihil pariatur sunt iusto saepe, perferendis, repudiandae dicta magnam voluptas consequatur.</p> <p>Omnis earum vitae necessitatibus eos minima similique dicta. Similique corrupti tenetur, repellendus officia neque nostrum fuga reprehenderit repudiandae quod fugiat expedita optio cum saepe quasi voluptatem delectus incidunt quisquam. Recusandae fugiat doloribus, odit laudantium perferendis harum corporis cumque reiciendis laborum!</p>'

        // ]);
        // Post::create([
        //     'title' => 'Fourth Blog',
        //     'category_id' => 2,
        //     'user_id' => 2,
        //     'slug' => 'fourth-blog',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatum ex, vel perspiciatis nemo vero corporis repellendus quibusdam rem est veritatis?',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe, beatae. Doloribus ipsa cum nemo, hic sed aperiam ipsam harum consequuntur unde non voluptas quo! Dolores magnam voluptatum commodi inventore, facilis hic explicabo illo doloremque iste consectetur velit esse aspernatur enim optio placeat.</p> <p>Maiores quisquam temporibus similique suscipit illo, amet nihil pariatur sunt iusto saepe, perferendis, repudiandae dicta magnam voluptas consequatur.</p> <p>Omnis earum vitae necessitatibus eos minima similique dicta. Similique corrupti tenetur, repellendus officia neque nostrum fuga reprehenderit repudiandae quod fugiat expedita optio cum saepe quasi voluptatem delectus incidunt quisquam. Recusandae fugiat doloribus, odit laudantium perferendis harum corporis cumque reiciendis laborum!</p>'

        // ]);
    }
}
