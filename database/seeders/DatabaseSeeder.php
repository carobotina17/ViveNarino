<?php

namespace Database\Seeders;

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
        self::seedSites();
        $this->command->info('Tabla sitios inicializada con exito');
    }

    private function seedSites(){
        DB::table('sitios')->delete();

        foreach( $this->arraySites as $site){
            $s = new Site;
            $s->titulo = $site['titulo'];
            $s->imagen = $site['imagen'];
            $s->descripcion = $site['descripcion'];
            $s->save();
    
        }
    }

    private $arraySites = array(
        array(
            
        )
    )

}
