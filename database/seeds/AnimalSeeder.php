<?php

use Illuminate\Database\Seeder;

class AnimalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('TRUNCATE TABLE `owners`');
        DB::statement('TRUNCATE TABLE `pets`');


         $data = json_decode(file_get_contents(storage_path('clients.json')), true);

        $id=0;
        foreach($data as $owner[$id]) {
            $first_name = $owner[$id]['first_name'];
            $surname = $owner[$id]['surname'];

            DB::table('owners')->insert([
                'first_name'=> $first_name,
                'surname' => $surname,
                ]);
        

            $animal = $owner[$id]['pets'];
            $id_animal=0;

            foreach($animal as $array[$id_animal]) {
            
                if (isset($array[$id_animal]['species'])){
                    DB::table('pets')->insert([
                        'name'=> $array[$id_animal]['name'],
                        'species' => $array[$id_animal]['species'],
                        'breed' => $array[$id_animal]['breed'],
                        'weight' => $array[$id_animal]['weight'],
                        'age' => $array[$id_animal]['age'],
                        'photo' => $array[$id_animal]['photo'],
                        'owner_id' => $id

                        ]);
                } else {
                    DB::table('pets')->insert([
                        'name'=> $array[$id_animal]['name'],
                        'breed' => $array[$id_animal]['breed'],
                        'weight' => $array[$id_animal]['weight'],
                        'age' => $array[$id_animal]['age'],
                        'photo' => $array[$id_animal]['photo'],
                        'owner_id' => $id + 1

                        ]);
                }
                $id_animal++;
               

            }
            $id++;
        

         

        
    }



        return $data;

    }




}
