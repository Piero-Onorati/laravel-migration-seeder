<?php

use Illuminate\Database\Seeder;

use App\Trip;

class TripsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 50; $i++) { 

            // creo una nuova istanza
            $newTrip = new Trip();

            // Popoliamo le righe della tabella con valori fake
            $newTrip->name='3 giorni da vivere in Europa';
            $newTrip->city ='London';
            $newTrip->description='Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad esse corporis incidunt quos soluta in quo obcaecati, ipsam dolore fuga, dolorem laborum nobis a, adipisci cum aliquam aliquid officiis recusandae. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quaerat deserunt accusamus dicta voluptas laboriosam fuga provident. Temporibus doloribus corrupti saepe atque autem ducimus dolores porro molestias impedit, totam quia repellat!';
            $newTrip->people=rand(2,4);
            $newTrip->price=rand(100,1000);
            $newTrip->validity= '2022-05-05';

            // salviamo la nuova variabile nella tabella
            $newTrip->save();
        }
    }
}
