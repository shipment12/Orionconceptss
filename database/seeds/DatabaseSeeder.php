<?php

use App\User;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * 
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Publisher',
            'email' => 'admin@test.com',
            'firstName' => 'Udedibor',
            'lastName'=>'favour',
            'location'=>'Nigerian',
            'company'=>'Sahara reporters',
            'website'=> url('udedibor.com'),
            'terms_condition'=>1,
            'phone'=>01234566,
        'password' => 'secret',
            'password' => Hash::make('admin'),
            'role' => 2,
            'im'=> 'facebook',
            'im_account'=>'reckk',
            'remember_token' => str_random(10),



            // 'firstName' => $faker->firstName,
            //     'lastName' => $faker->lastName ,
            //     'email' => $faker->unique()->safeEmail,
            //     'location' =>$faker->country,
            //     'company' =>$faker->Company,
            //     'website' =>$faker->url,
            //     'terms_condition' =>$faker->Boolean,
                
                
            //     'im' =>$faker->Company,
            //     'im_account'=>$faker->Company,
            //     'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
            //     'remember_token' => str_random(10),
        ]);
        User::create([
            'name' => 'Advertiser',
            'email' => 'user@test.com',
            'name' => 'Advertiser',
            
            'firstName' => 'Udedibor',
            'lastName'=>'favour',
            'location'=>'Nigerian',
            'company'=>'Sahara reporters',
            'website'=> url('udedibor.com'),
            'terms_condition'=>1,
            'phone'=>01234566,
            'password' => 'secret',
            'password' => Hash::make('admin'),
            'role' => 1,
            'im'=> 'facebook',
            'im_account'=>'reckk',
            'remember_token' => str_random(10),
        ]);
       

        
        // factory(User::class, 10)->create();
    }
}
