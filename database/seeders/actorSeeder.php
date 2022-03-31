<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\actor;

class actorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $nombre=['Robert Pattinson', 'Zoë Kravitz', 'Paul Dano', 'Colin Farrell', 'Jeffrey Wright','John Turturro',
        'Tom Holland', 'Tobey Maguire', 'Andrew Garfield', 'Benedict Cumberbatch', 'Zendaya', 'Marisa Tomei',
        'Jonathan Rhys-Meyers', 'Piper Perabo', 'Antonio Banderas', 'Nathalie Rapti Gomez', 'Alexandra Klim', 'Abel Ferrara',
        'Robert Downey Jr', 'Chris Evans', 'Scarlett Johansson', 'Chris Hemsworth', 'Elizabeth Olsen', 'Josh Brolin',
        'Mike Myers', 'Eddie Murphy', 'Cameron Diaz', 'Conrad Vernon', 'John Lithgow', 'Cody Cameron',
        'Tom Kenny', 'Bill Fagerbakke', 'Mr. Lawrence', 'Clancy Brown', 'Carolyn Lawrence', 'Scarlett Johansson',];
        $papel=['Batman', 'Catwoman', 'El Acertijo', 'El Pingüino', 'James Gordon', 'Barton Fink',
        'Spider-Man', 'Spider-Man', 'Spider-Man', 'Doctor Strange', 'MJ', 'Tia May',
        'Jack', 'Laura', 'Paul', 'Julie', 'Esposa de paul', 'Pat',
        'Iron Man', 'Capitan America', 'Viuda Negra', 'Thor', 'Bruja Escarlata', 'Thanos',
        'Shrek', 'Burro', 'Princesa Fiona', 'Jengibre', 'Lord Farquaad', 'Pinocho',
        'Bob Esponja', 'Patricio Estrella', 'Plankton', 'Don Cangrejo', 'Arenita Mejillas', 'Princesa Mindy',];
        $imagen=['https://images.chicmagazine.com.mx/mSGVqHPlhpzeeLAyuAtFslpVe_w=/958x596/uploads/media/2020/05/13/robert-pattinson-actual-novia-suki.jpg', 'https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/zoe-kravitz-the-batman-catwoman-1578989813.jpg', 'https://www.nacionflix.com/__export/1646186439348/sites/debate/img/2022/03/01/paul-dano-mejores-peliculas-villano-the-batman.jpeg_1902800913.jpeg', 'https://imagenes.elpais.com/resizer/fJbYhT9LVPNzst8gZ4-j3mOz3Uc=/1960x1470/cloudfront-eu-central-1.images.arcpublishing.com/prisa/FBKDLX6EGFAL5PSJKNCSFZJJMA.jpg', 'https://www.cinemascomics.com/wp-content/uploads/2021/02/jeffrey-wright-batman-hbo-max.jpg', 'https://macmagazine.com.br/wp-content/uploads/2020/10/30-john-turturro.jpg', 
        'https://media.metrolatam.com/2019/06/06/spiderholland1-479b65d04e9a8b25f5da5527c3a9457f-1200x800.jpg', 'https://hipertextual.com/wp-content/uploads/2022/01/spider-man-no-way-home-tobey-maguire.jpg', 'https://www.adeaurelia.org/wp-content/uploads/2022/01/1643105096_Andrew-Garfield-mintio-durante-dos-anos-sobre-su-cameo-de.jpg', 'https://img2.rtve.es/i/?w=1600&i=1641568878656.jpg', 'https://images2.revistafama.com/sJzo5JGRQySiiluuTO64dnl1bdo=/958x596/uploads/media/2022/03/27/zendaya-brilla-en-los-oscar-1.jpg', 'https://estaticos.marie-claire.es/uploads/images/article/6149ccca5cafe83ac36549b2/marisa-tomei-entrevista-facebook.jpg', 
        'https://s3.amazonaws.com/arc-wordpress-client-uploads/infobae-wp/wp-content/uploads/2018/07/09124741/jonathan-rhys-meyers-1.jpg', 'https://spoilertime.com/wp-content/uploads/2019/08/Piper-Perabo-1024x577.jpg', 'https://www.hola.com/imagenes/actualidad/20210716193184/antonio-banderas-se-incorpora-saga-importante-historia-cine/0-976-100/antonio-banderas-gtres-t.jpg', 'https://www.elnuevosiglo.com.co/sites/default/files/styles/noticia_interna/public/2020-10/Nathalie%20Rap.jpg', 'https://pics.wikifeet.com/Alexandra-Klim-Feet-4878659.jpg', 'https://www.sensesofcinema.com/wp-content/uploads/2019/06/abel-ferrara.jpg',
        'https://imagenes.20minutos.es/files/image_656_370/uploads/imagenes/2021/07/07/robert-downey-jr.jpeg', 'https://fotografias.antena3.com/clipping/cmsimages01/2020/11/16/6277FC59-AC67-4817-9150-DC733AA7716D/98.jpg?crop=2817,1585,x0,y78&width=1900&height=1069&optimize=high&format=webply', 'https://as01.epimg.net/meristation/imagenes/2022/01/05/reportajes/1641379658_031391_1641379891_noticia_normal.jpg', 'https://imagenes.20minutos.es/files/article_amp/uploads/imagenes/2020/06/14/chris-hemsworth.jpeg', 'https://cdn.hobbyconsolas.com/sites/navi.axelspringer.es/public/styles/1200/public/media/image/2021/05/elizabeth-olsen-2322363.jpg?itok=pGbQjU-v', 'https://fotografias.antena3.com/clipping/cmsimages02/2020/04/20/4B81A25A-45BA-4AD6-9BC4-80D77B38DDF0/98.jpg?crop=1200,675,x0,y12&width=1900&height=1069&optimize=high&format=webply',
        'https://cdn.semana.es/wp-content/uploads/2021/05/mike-myers.jpg', 'https://estaticos-cdn.prensaiberica.es/clip/da04bb1e-7adf-4ee0-826a-fb736f84bdac_16-9-aspect-ratio_default_0.jpg', 'https://is.mediadelivery.fi/img/some/default/b2dd759d16e537a2f35e886cefeb248b.jpg', 'https://static.toiimg.com/thumb/msid-54308834,imgsize-68418,width-1070,height-580,resizemode-75,overlay-toi_sw,pt-32,y_pad-40/54308834.jpg', 'https://conpochoclos.com/wp-content/uploads/2021/07/john_lithgow_1000x563px.jpg', 'https://live.staticflickr.com/7324/9352296387_af47c65d0b_b.jpg',
        'https://www.looper.com/img/gallery/the-spongebob-voice-actor-you-didnt-know-is-in-solar-opposites/intro-1616337303.jpg', 'https://assets-prd.ignimgs.com/2021/07/26/billfagerbakke-patrickstar-blogroll-1627320659513.jpg', 'https://www.denofgeek.com/wp-content/uploads/2019/07/mr-lawrence-spongebob.jpg?fit=768%2C432', 'https://www.formulatv.com/images/articulos/105000/105747_MxWJ12Y6s7m3z5cBL9q8vRgPUtFk4iHeN-h2.jpg', 'https://marriedbiography.org/wp-content/uploads/2020/07/Carolyn_Lawrence_Pic.jpg', 'https://as01.epimg.net/meristation/imagenes/2022/01/05/reportajes/1641379658_031391_1641379891_noticia_normal.jpg',];
        $genero=['Masculino','Femenino','Masculino', 'Masculino', 'Masculino', 'Masculino',
        'Masculino', 'Masculino', 'Masculino', 'Masculino', 'Femenino', 'Femenino',
        'Masculino', 'Femenino', 'Masculino', 'Femenino', 'Femenino', 'Masculino',
        'Masculino', 'Masculino', 'Femenino', 'Masculino', 'Femenino', 'Masculino',
        'Masculino', 'Masculino', 'Femenino', 'Masculino', 'Masculino', 'Masculino',
        'Masculino', 'Masculino', 'Masculino', 'Masculino', 'Femenino', 'Femenino',];
        $edad=['35 años', '33 años', '37 años', '45 años', '56 años', '65 años',
        '25 años', '46 años', '38 años', '45 años', '25 años', '57 años',
        '44 años', '45 años', '61 años', '37 años', '49 años', '70 años',
        '56 años', '40 años', '37 años', '38 años', '33 años', '54 años',
        '58 años', '60 años', '49 años', '53 años', '76 años', '51 años',
        '59 años', '64 años', '53 años', '63 años', '55 años', '37 años',];
        $pelicula_id=[1,1,1,1,1,1,2,2,2,2,2,2,3,3,3,3,3,3,4,4,4,4,4,4,5,5,5,5,5,5,6,6,6,6,6,6];
        foreach($nombre as $key => $val){
            $nuevoactor=new actor();
            $nuevoactor->nombre=$val;
            $nuevoactor->papel=$papel[$key];
            $nuevoactor->imagen=$imagen[$key];
            $nuevoactor->genero=$genero[$key];
            $nuevoactor->edad=$edad[$key];
            $nuevoactor->pelicula_id=$pelicula_id[$key];
            $nuevoactor->save();
    }
}
}