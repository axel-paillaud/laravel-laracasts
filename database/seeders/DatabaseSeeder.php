<?php

namespace Database\Seeders;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::truncate();
        Category::truncate();
        Post::truncate();

        $user = User::factory()->create();

        $personal = Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        $family = Category::create([
            'name' => 'Family',
            'slug' => 'family'
        ]);

        $work = Category::create([
            'name' => 'Work',
            'slug' => 'work'
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $family->id,
            'title' => 'My Family Post',
            'slug' => 'my-first-post',
            'excerpt' => 'Lorem ipsum dolor sit amet',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                Maecenas massa diam, fringilla sed ornare eu, tristique in velit. 
                In congue eros eros, quis euismod dui lobortis quis. Nullam nulla 
                augue, venenatis a ultricies nec, tristique vel mauris. Integer rutrum
                libero et justo dapibus feugiat. In aliquam feugiat pulvinar. Praesent congue quam diam, id facilisis neque efficitur sit amet. Nam dictum venenatis lorem non interdum. Praesent finibus nec nunc a sollicitudin. Aliquam ut sodales dolor. In hac habitasse platea dictumst. Maecenas posuere at sem vel lobortis. Ut non gravida erat. Aenean eu viverra erat. Proin sed libero dignissim, interdum sem ac, pretium mi. Mauris sed tellus vehicula, elementum libero sit amet, interdum nisl. Vestibulum bibendum risus arcu, a dignissim enim rhoncus at.
                Suspendisse potenti. Ut a rutrum diam. Vivamus molestie, 
                risus sit amet imperdiet interdum, neque augue facilisis dui, 
                eget euismod quam enim et enim. Duis massa purus, tempus in
                imperdiet quis, rutrum in eros. Mauris scelerisque pellentesque
                libero sed dictum. Fusce eu tempus ligula, et pretium ligula. 
                Donec faucibus lectus at hendrerit semper. Ut eleifend nisl lacus,
                quis venenatis nisl dignissim id. Orci varius natoque penatibus 
                et magnis dis parturient montes, nascetur ridiculus mus. Donec
                aliquet gravida mollis. Etiam volutpat arcu dapibus ligula convallis, 
                sit amet feugiat magna lobortis. Sed luctus convallis egestas. 
                Quisque sit amet euismod lorem. Vestibulum ante ipsum primis
                in faucibus orci luctus et ultrices posuere cubilia curae; 
                Morbi convallis ex mi, at sagittis felis scelerisque ac. ',
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $personal->id,
            'title' => 'My Personal Post',
            'slug' => 'my-second-post',
            'excerpt' => 'Lorem ipsum dolor sit amet',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                Maecenas massa diam, fringilla sed ornare eu, tristique in velit. 
                In congue eros eros, quis euismod dui lobortis quis. Nullam nulla 
                augue, venenatis a ultricies nec, tristique vel mauris. Integer rutrum
                libero et justo dapibus feugiat. In aliquam feugiat pulvinar. Praesent congue quam diam, id facilisis neque efficitur sit amet. Nam dictum venenatis lorem non interdum. Praesent finibus nec nunc a sollicitudin. Aliquam ut sodales dolor. In hac habitasse platea dictumst. Maecenas posuere at sem vel lobortis. Ut non gravida erat. Aenean eu viverra erat. Proin sed libero dignissim, interdum sem ac, pretium mi. Mauris sed tellus vehicula, elementum libero sit amet, interdum nisl. Vestibulum bibendum risus arcu, a dignissim enim rhoncus at.
                Suspendisse potenti. Ut a rutrum diam. Vivamus molestie, 
                risus sit amet imperdiet interdum, neque augue facilisis dui, 
                eget euismod quam enim et enim. Duis massa purus, tempus in
                imperdiet quis, rutrum in eros. Mauris scelerisque pellentesque
                libero sed dictum. Fusce eu tempus ligula, et pretium ligula. 
                Donec faucibus lectus at hendrerit semper. Ut eleifend nisl lacus,
                quis venenatis nisl dignissim id. Orci varius natoque penatibus 
                et magnis dis parturient montes, nascetur ridiculus mus. Donec
                aliquet gravida mollis. Etiam volutpat arcu dapibus ligula convallis, 
                sit amet feugiat magna lobortis. Sed luctus convallis egestas. 
                Quisque sit amet euismod lorem. Vestibulum ante ipsum primis
                in faucibus orci luctus et ultrices posuere cubilia curae; 
                Morbi convallis ex mi, at sagittis felis scelerisque ac. ',
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $work->id,
            'title' => 'My Work Post',
            'slug' => 'my-third-post',
            'excerpt' => 'Lorem ipsum dolor sit amet',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                Maecenas massa diam, fringilla sed ornare eu, tristique in velit. 
                In congue eros eros, quis euismod dui lobortis quis. Nullam nulla 
                augue, venenatis a ultricies nec, tristique vel mauris. Integer rutrum
                libero et justo dapibus feugiat. In aliquam feugiat pulvinar. Praesent congue quam diam, id facilisis neque efficitur sit amet. Nam dictum venenatis lorem non interdum. Praesent finibus nec nunc a sollicitudin. Aliquam ut sodales dolor. In hac habitasse platea dictumst. Maecenas posuere at sem vel lobortis. Ut non gravida erat. Aenean eu viverra erat. Proin sed libero dignissim, interdum sem ac, pretium mi. Mauris sed tellus vehicula, elementum libero sit amet, interdum nisl. Vestibulum bibendum risus arcu, a dignissim enim rhoncus at.
                Suspendisse potenti. Ut a rutrum diam. Vivamus molestie, 
                risus sit amet imperdiet interdum, neque augue facilisis dui, 
                eget euismod quam enim et enim. Duis massa purus, tempus in
                imperdiet quis, rutrum in eros. Mauris scelerisque pellentesque
                libero sed dictum. Fusce eu tempus ligula, et pretium ligula. 
                Donec faucibus lectus at hendrerit semper. Ut eleifend nisl lacus,
                quis venenatis nisl dignissim id. Orci varius natoque penatibus 
                et magnis dis parturient montes, nascetur ridiculus mus. Donec
                aliquet gravida mollis. Etiam volutpat arcu dapibus ligula convallis, 
                sit amet feugiat magna lobortis. Sed luctus convallis egestas. 
                Quisque sit amet euismod lorem. Vestibulum ante ipsum primis
                in faucibus orci luctus et ultrices posuere cubilia curae; 
                Morbi convallis ex mi, at sagittis felis scelerisque ac. ',
        ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
