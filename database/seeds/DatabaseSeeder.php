<?php

use Illuminate\Database\Seeder;

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
        for($a=0;$a<10;$a++){
            DB::table('professionals')->insert([
                'name' => 'TuNombre'.($a+1),
                'lastname' => 'TuApellido'.($a+1),
                'type' => 'Ingeniero'.($a+1),
                'qualification' => 1
            ]);
            DB::table('services')->insert([
                'id_professionals' => ($a+1),
                'qualification' => 3,
                'commentary' => 'Soy un Comentario',
                'month' => ($a+1)
            ]);
        }
    }
}
