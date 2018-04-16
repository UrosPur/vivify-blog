<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        factory(App\Posts::class,20)->create();

        App\User::all()->each(function (App\User $u) {

            $u->post()->saveMany(

                factory(App\Post::class,5)->make()
            );

        });
    }

}
