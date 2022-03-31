<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\pelicula;

class peliculaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $nombre=['The Batman', 'Spider-Man No Way Home', 'Mariposa Negra', 'End Game', 'Shrek','Bob esponja la pelicula'];
        $imagen=['https://img.buymeacoffee.com/api/?url=aHR0cHM6Ly9jZG4uYnV5bWVhY29mZmVlLmNvbS91cGxvYWRzL3Byb2plY3RfdXBkYXRlcy8yMDIyLzAzL2U1MDg1NGQ2NWZlZTM3NmNmMTA1NmVhNjlkZGQ1Nzk3LmpwZw==&height=600&width=1200',
         'https://tvolima.pe/wp-content/uploads/2021/12/Spider-Man-No-Way-Home-fue-una-de-las-cintas-m%C3%A1s-esperadas-del-2021..jpg',
          'https://www.justwatch.com/images/backdrop/10597894/s640/mariposa-negra-black-butterfly',
           'https://i0.wp.com/collectible506.com/wp-content/uploads/2019/02/avengers-endgame-logo.jpg?fit=1200%2C600&ssl=1',
            'https://depor.com/resizer/5Ke5xFUyYNlKm_CL8Wzy9sz30dg=/1200x675/smart/filters:format(jpeg):quality(75)/cloudfront-us-east-1.images.arcpublishing.com/elcomercio/OF64YVDTRJHXBFTEKRWC3G7YOE.png',
             'https://cdn043.fractalmedia.es/thumb/Bqrso1ENEB_w1920.jpg'];
        $fecha_estreno=['3 de marzo de 2022', '15 de diciembre de 2021', '26 de mayo de 2017', '26 de abril de 2019', '29 de junio de 2001', '3 de diciembre de 2004'];
        $descripcion=['En su segundo año luchando contra el crimen, Batman explora la corrupción existente en la ciudad de Gotham y el vínculo de esta con su propia familia. Además, entrará en conflicto con un asesino en serie conocido como "el Acertijo".',
        'Tras descubrirse la identidad secreta de Peter Parker como Spider-Man, la vida del joven se vuelve una locura. Peter decide pedirle ayuda al Doctor Extraño para recuperar su vida. Pero algo sale mal y provoca una fractura en el multiverso.',
        'En un pueblo en el que se están sucediendo asesinatos, Paul, un escritor en crisis da cobijo en su alejada cabaña a un vagabundo, pero éste lo toma como rehén y lo obliga a escribir todos sus secretos íntimos más intimos, enterrados durante mucho tiempo.',
         'Después de los eventos devastadores de "Avengers: Infinity War", el universo está en ruinas debido a las acciones de Thanos, el Titán Loco. Con la ayuda de los aliados que quedaron, los Vengadores deberán reunirse una vez más para intentar detenerlo y restaurar el orden en el universo de una vez por todas.', 
         'Shrek es un ogro verde, gruñón, es altamente territorial que ama la soledad. Todos están en su contra, por lo que asusta a los aldeanos que entran al pantano en el que vive. Un día conoce a un burro parlante que huía de su dueña.', 
         'La existencia en Fondo Bikini, hogar de Bob Esponja y sus amigos, transcurre plácidamente hasta que todos ellos se embarcan en una odisea que los lleva a descubrir nuevos mundos y peligrosos monstruos.'];
        $sinopsis=['“Dos años acechando las calles como Batman, infundiendo el miedo en los corazones de los criminales, han llevado a Bruce Wayne a lo más profundo de las sombras de Gotham City. Con solo unos pocos aliados de confianza -Alfred Pennyworth y el teniente James Gordon- entre la corrupta red de funcionarios y personajes de alto nivel de la ciudad, el solitario justiciero se ha establecido como la única encarnación de la venganza entre sus conciudadanos.
        Cuando un asesino se dirige a la élite de Gotham con una serie de maquinaciones sádicas, un rastro de pistas crípticas envía al mejor detective del mundo a una investigación en los bajos fondos donde se encuentra con personajes como Selina Kyle/aka Catwoman, Oswald Cobblepot/aka el Pingüino, Carmine Falcone y Edward Nashton/aka Enigma. A medida que las pruebas comienzan a acercarse a su casa y se hace evidente la magnitud de los planes del autor, Batman debe forjar nuevas relaciones, desenmascarar al culpable y hacer justicia al abuso de poder y la corrupción que durante mucho tiempo han asolado Gotham City”.
        Durante un largo tiempo, cuando Ben Affleck estaba aún el proyecto, la película iba a llevar al protagonista al Arkham Asylum, es decir, el manicomio de Gotham donde están encerrados la gran mayoría de villanos. Pero el guión fue finalmente descartado, aunque se mantuvo la idea de enfrentar a Batman a varios de sus enemigos más míticos. ¿La fuente de inspiración? El cómic El largo Halloween.', 
        'Tal y cómo has visto en los avances, Spider-Man: No Way Home nos coloca inmediatamente después de la gran revelación sobre la identidad de Peter Parker. Por lo tanto, Spidey ha pasado a ser blanco de las masas, quienes enloquecen ante su presencia y buscan a toda costa condenarlo por la muerte de Mysterio. Por si todo lo anterior fuera poca cosa, la sociedad también señala a todos los que tienen alguna relación con Spidey, desde su enamorada MJ, hasta la tía May, y sus mejores amigos. Peter es el enemigo número… a pesar de que tan solo un año atrás había ayudado a restaurar el universo en una encarnizada lucha contra Thanos.
        Cansado de escapar y de ser señalado, Peter busca ayuda en un viejo conocido: Dr. Strange. Para este hechicero reconfigurar el mundo no es nada nuevo, pero las banalidades personales de Spider-Man no parecen suficientes como para alterar la realidad. Sin embargo, existe un hechizo más simple y que no pone en juego al universo… hasta que las prisas del héroe adolescente deforman el encantamiento y consigue justamente lo opuesto a lo que necesita. En vez de que las personas olviden que Peter Parker es el Hombre Araña, Strange provoca que todo aquel que conoce la identidad secreta de el Hombre Araña sea transportado al Marvel Cinematic Universe.', 
        'Gabriela está a punto de casarse con Guido, un conocido juez de instrucción, que es asesinado en extrañas circunstancias. El caso es tratado de forma sensacionalista por la prensa. Para averiguar lo ocurrido y así limpiar la imagen de su novio, Gabriela inicia una investigación. Se cruzará con Ángela una joven y ambiciosa periodista y con Osman el director de un influyente periódico, fiel al régimen de Fujimori y responsable del encubrimiento de un crimen de estado haciendo pasar la muerte del juez por un crimen pasional en un entorno gay. Gabriela para demostrar la verdad se adentra en los bajos fondos del círculo que rodea a Vladimiro Montesinos. Su objetivo es matarle.', 
        'La historia continuará los eventos de Vengadores: Infinity War. Thanos destruyó la mitad de la vida del Universo y se retiró a un paradisíaco lugar. Los supervivientes deberán hacer frente a la situación e intentar revertirla. «Cueste lo que cueste» como bien dicen en el tráiler.
        Para ello deberán viajar por el Reino Cuántico, un lugar del que sale Ant-Man y que seguro que será la clave de todo. Además tendrán la ayuda de Capitana Marvel, un personaje que como pudimos comprobar en su propia película es muy poderoso. Al nivel de Thor o Thanos con las Gemas del Infinito. Así que la batalla seguro que será muy épica y podremos disfrutar durante las 3 horas que dura la película. Aunque probablemente una vez más los que mayor importancia tengan serán Iron Man / Tony Stark y Capitán América / Steve Rogers. Dos personajes cuya relación ha sido la base de muchas de las películas de Marvel Studios que hemos visto hasta la fecha.',
        'La historia inicia con el personaje principal Shrek, quien vive solo en un pantano hasta que un día aparece un burro que habla y que decide quedarse en su pequeña casa, a pesar de los intentos de echarlo. Pero no solo es el único invitado no deseado en su morada, durante la madrugada la llegada de personajes del reino empiezan a invadir su casa con el fin de echarlo, sin embargo, Shrek descubre al verdadero orquestador y sale en búsqueda de él junto a su nuevo compañero.
        Y para logra esto, le pide ayuda burro para encontrar a Lord Farquaad quien tiene un fuerte deseo de convertirse en rey pero que solo puede lograrlo al casarse con una princesa. Para llegar a este objetivo le pide a un espejo mágico al estilo de Blancanieves, que busque a las mejores opciones y entre ellas está a la joven princesa Fiona, una damisela que se encuentra reguardada por un enorme dragón en un castillo abandonado.
        Al descubrir esto, Farquaad decide organizar un torneo donde el ganador será el encargado de rescatarla y es allí donde aparece el protagonista.', 
        'La película comienza mostrando a un grupo de piratas obteniendo boletos para ver La película de Bob Esponja desde un cofre del tesoro. Luego, los piratas cantan la Canción Temática de Bob Esponja, luego entran en un cine, lo asaltan y se sientan a ver la película.
        La Película luego cambia a una emergencia en el Crustáceo Cascarudo, con helicópteros de la policía, grandes multitudes y reporteros de noticias. De repente, Bob Esponja, "el gerente", llega en un auto deportivo. Don Cangrejo dice que comenzó con un pedido simple, una Cangreburger con queso. Pero cuando el cliente tomó un bocado, no había queso en la hamburguesa. Bob Esponja entra en el Crustáceo Cascarudo y se encuentra con un pez llamado Phil. Bob Esponja luego abre su maleta, saca un par de pinzas y dramáticamente le pone queso a la Cangreburger. El día se salva y la multitud comienza a animar a Bob Esponja. Sus vítores pronto degeneran con el sonido del despertador de Bob Esponja, y él se despierta, revelando que la escena inicial es un sueño.'];
        $genero_id=[1,1,10,1,2,4];
        foreach($nombre as $key => $val){
            $nuevapelicula=new pelicula();
            $nuevapelicula->nombre=$val;
            $nuevapelicula->imagen=$imagen[$key];
            $nuevapelicula->fecha_estreno=$fecha_estreno[$key];
            $nuevapelicula->descripcion=$descripcion[$key];
            $nuevapelicula->sinopsis=$sinopsis[$key];
            $nuevapelicula->genero_id=$genero_id[$key];
            $nuevapelicula->save();
    }
    }
}
