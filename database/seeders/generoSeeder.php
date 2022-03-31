<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\genero;

class generoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $nombre=['Acción', 'Aventura', 'Ciencia Ficción', 'Comedia', 'No- Ficción','Drama', 'Fantasia', 'Musical', 'Suspenso', 'Terror'];
        $descripcion=['En este género prevalecen altas dosis de adrenalina con una buena carga de movimiento, fugas, acrobacias, peleas, guerras, persecuciones y una lucha contra el mal.', 'Similares a las de acción, predominan las nuevas experiencias y situaciones.', 'Basados en fenómenos imaginarios, en la ciencia ficción son usuales los extraterrestres, sociedades inventadas, otros planetas'
        , 'Diseñadas específicamente para provocar la risa o la alegría entre los espectadores.', 'Este género analiza un hecho o situación real sin ficcionarlo', 'Los dramas se centran en desarrollar el problema o problemas entre los diferentes protagonistas. Este es quizás uno de los géneros cinematográficos más amplios de la lista. No predominan las aventuras o la acción, aunque pueden aparecer puntualmente Generalmente se basan en desarrollar la interacción y caracteres humanos.'
        , 'En ellas se incluyen personajes irreales o totalmente inventados, inexistentes en nuestra realidad. También podemos conocer este género de cine como “fantástico”. No se basa en ideas que puedan llegar a materializarse.', ' Las películas que cortan su desarrollo natural con fragmentos musicales son protagonistas de este género.',
         'Conocido también como intriga, estas películas se desarrollan rápidamente, y todos sus elementos giran entorno un mismo elemento intrigante.', 'Su principal objetivo es causar miedo, horror, incomodidad o preocupación'];
        $tipo_audiencia=['+14 años', 'Para todos', 'Para todos', 'Para todos', '+10 años', '+12 años', 'Para todos', 'Para todos', '+16 años', '+16 años'];
        $estatus=['Activo','Activo','Activo', 'Activo', 'Inactivo', 'Inactivo', 'Activo', 'Activo', 'Activo', 'Activo'];
        foreach($nombre as $key => $val){
            $nuevogenero=new genero();
            $nuevogenero->nombre=$val;
            $nuevogenero->descripcion=$descripcion[$key];
            $nuevogenero->tipo_audiencia=$tipo_audiencia[$key];
            $nuevogenero->estatus=$estatus[$key];
            $nuevogenero->save();
    }
    }
}
