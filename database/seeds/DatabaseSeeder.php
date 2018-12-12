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
            'name' => 'Resepsi'
        ]);
        factory('App\Packet')->create([
            'name' => 'Akad/Pemberkatan dan Resepsi'
        ]);
        factory('App\Packet')->create([
            'name' => 'Lamaran'
        ]);
        factory('App\Packet')->create([
            'name' => 'Siraman dan Midodareni'
        ]);
        factory('App\Packet')->create([
            'name' => 'Temu Pengantin'
        ]);
        factory('App\Packet')->create([
            'name' => 'Penambahan Crew WO'
        ]);
        factory('App\Packet')->create([
            'name' => 'Extra Day'
        ]);
        factory('App\Gallery', 5)->create();
        factory('App\Category')->create([
            'name' => 'mc'
        ]);
        factory('App\Category')->create([
            'name' => 'tempat'
        ]);
        factory('App\Category')->create([
            'name' => 'fotografi'
        ]);
        factory('App\Category')->create([
            'name' => 'katering'
        ]);
        factory('App\Category')->create([
            'name' => 'rias wajah'
        ]);
        factory('App\Category')->create([
            'name' => 'dekorasi'
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
