<?php

use App\Category;
use App\Gallery;
use App\Vendor;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        factory('App\AboutUs')->create();
        factory('App\User')->create([
            'name' => 'Nefiana Mey',
            'email' => 'nefianamey@gmail.com',
            'username' => 'nefianamey'
        ]);
        factory('App\Packet')->create([
            'name' => 'Paket Akad/Pemberkatan'
        ]);
        factory('App\Packet')->create([
            'name' => 'Paket Resepsi'
        ]);
        factory('App\Packet')->create([
            'name' => 'Paket Akad/Pemberkatan dan Resepsi'
        ]);
        factory('App\Gallery', 5)->create();
        factory('App\Category')->create([
            'name' => 'mc'
        ]);
        factory('App\Category')->create([
            'name' => 'venue'
        ]);
        factory('App\Category')->create([
            'name' => 'photography'
        ]);
        factory('App\Category')->create([
            'name' => 'catering'
        ]);
        factory('App\Category')->create([
            'name' => 'makeup'
        ]);
        factory('App\Category')->create([
            'name' => 'decoration'
        ]);
        factory('App\Category')->create([
            'name' => 'sound system'
        ]);


        $categories = Category::all();
        $categories->each(function($category){
            factory('App\Vendor', 5)->create([
                'category_id' => $category->id
            ]);
        });
        
        $galleries = Gallery::all();
        $galleries->each(function($gallery){
            factory('App\Photo', 3)->create([
                'gallery_id' => $gallery->id
            ]);
        });
        $galleries->each(function($gallery){
            $vendors = Vendor::inRandomOrder()->take(3)->get();
            $vendors->each(function($vendor) use ($gallery) {
                DB::table('gallery_vendor')->insert([
                    'gallery_id' => $gallery->id,
                    'vendor_id' => $vendor->id
                ]);
            });
        });
    }
}
