<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Site;
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
        \DB::table('sitios')->delete();

        foreach( $this->arraySites as $site){
            $s = new Site;
            $s->title = $site['title'];
            $s->image = $site['image'];
            $s->description1 = $site['description1'];
            $s->description2 = $site['description2'];
            $s->video = $site['video'];
            $s->save();
    
        }
    }

    private $arraySites = array(
        array(
            'title' => 'Tumaco',
            'image' => 'https://i.pinimg.com/originals/20/48/26/204826583bceb39b3aff88635116b2a3.jpg',
            'description1' => 'Para empezar, vamos con un destino con mucho sabor y alegría, se trata de Tumaco.
            Este municipio es conocido como la Perla del Pacífico.
            Su población es mayoritariamente afrocolombiana y son muy orgullosos de sus raíces.',
            'description2' => 'Los principales atractivos turísticos de Tumaco son las playas del Morro con su imponente arco natural.
            También están las playas de Bocagrande y el puente del morro con sus miradores.
            Desde allí se tiene una vista única del océano Pacífico.
            Además, existen destinos poco explorados y de gran belleza. Uno de estos son las playas ubicadas cerca a la desembocadura del río Mira.
            Acá el río se encuentra con el mar en medio de un paisaje que quita el aliento.',
            'video' => 'https://fb.watch/3AvVKZtoJG/'
        ),
        array(
            'title' => 'Santuario Nuestra Señora de las Lajas',
            'image' => 'https://viajes.nationalgeographic.com.es/medio/2019/04/08/santuario-de-las-lajas_6ed0eca2_800x800.jpg',
            'description1' => 'El Santuario Nuestra Señora de las Lajas es uno de los sitios turísticos de Nariño más visitado por turistas del mundo entero.',
            'description2' => 'Esta iglesia de estilo gótico es conocida como ‘Un milagro de Dios en el abismo’. Por esto fue declara en 2007 como la segunda maravilla de Colombia.
            Esta impresionante construcción está sobre el cañón del río Guáitara, a 2.900 metros sobre el nivel del mar. El lugar recibe más de 750.000 personas al año, de las cuales unas 120.000 lo hacen en Semana Santa. El templo está ubicado en el municipio de Ipiales, en el corregimiento de Las Lajas y a solo 3 kilómetros de la frontera con Ecuador.',
            'video' => 'https://youtu.be/ZD2Ekw2rh50'
        ),
        array(
            'title' => 'Laguna de la Cocha',
            'image' => 'http://kahuaritravel.com.co/wp-content/uploads/2016/01/Imagen-Destacada-Laguna-La-Cocha-Kahuari.jpg',
            'description1' => 'Seguimos con un templo de agua. La laguna de la Cocha es el segundo cuerpo de agua natural más grande de Colombia, después del lago de Tota. Está ubicada a tan solo 40 minutos de Pasto.',
            'description2' => 'Esta laguna se encuentra en el sistema de páramos más bajo del mundo y, entre la vegetación que lo rodea, se encuentran frailejones. En la laguna hay un embarcadero colorido donde se pueden encontrar restaurantes donde preparan truchas arcoiris, toda una delicia.
            Dentro de la laguna se encuentra La Isla la Carota. Un santuario de fauna y flora que está a cargo del sistema de parques nacionales. Este santuario tiene solo 12 hectáreas de superficie. El lugar posee una gran riqueza de flora y fauna: existe una gran variedad de musgos, anfibios, aves y peces.',
            'video' => 'https://www.youtube.com/watch?v=fIMq4a_iCTs'
        ),
        array(
            'title' => 'Parque Sanquianga',
            'image' => 'http://awsassets.panda.org/img/original/8057487393_d5252437be_k.jpg',
            'description1' => 'Estos ecosistemas costeros tienen la capacidad de almacenar más carbono que muchos bosques tropicales y protegen las costas de los tsunamis y del alza del nivel del mar.',
            'description2' => 'Nariño es tierra de contrastes. El parque Sanquianga está bañado por las aguas del océano Pacífico. Se trata de uno de los bosques de manglares más grande del mundo. Tiene más de 80.000 hectáreas y acá se encuentran el 20% de los manglares de Colombia. El parque es hogar de sesenta clases de peces, treinta tipos de moluscos, una veintena de especies de aves y doce tipos de reptiles.',
            'video' => 'https://youtu.be/cLZxmZ4eav4'
        ),
        array(
            'title' => 'Laguna Verde',
            'image' => 'https://www.turismopasto.com/wp-content/uploads/2018/04/plan-turistico-narino-maximo-laguna-verde.jpg',
            'description1' => 'La laguna Verde es considerada como una de las lagunas más bellas del mundo y uno de los sitios turísticos más importantes de Nariño',
            'description2' => 'Está ubicada en el Volcán Azufral, en el municipio de Túquerres, a 90 minutos de Pasto.
            La laguna se localiza a 3900 m.s.n.m, en medio del cráter del Volcán. Su temperatura promedio es de 8°C y llegar a la cima es toda una aventura. Este lugar de Nariño es ideal para alejarse de la ciudad y contemplar los misterios de la naturaleza. Hay una gran flora y fauna, y también se puede acampar.',
            'video' => 'https://youtu.be/EG1C6jBdbFQ'
        ),
        array(
            'title' => 'Volcán Galeras',
            'image' => 'http://hablemosdevolcanes.com/wp-content/uploads/2018/10/volcan-galeras-4.jpg',
            'description1' => ' Está ubicado a 9 km de Pasto y es el volcán con mayor actividad en el país. En sus faldas existe un santuario de fauna y flora y sus riscos son locación idónea para hacer montañismo.',
            'description2' => 'El Santuario cuenta con dos senderos, El Frailejonal y el Achichay. Acá los turistas pueden entender importancia del ecosistema de páramo. Además se les enseñan aspectos sobre la conservación de este y la importancia del agua. Como resultado de esta riqueza, cerca del Galeras hay 125 quebradas, varios ríos y cuatro lagunas.
            Como si fuera poco, en el Galeras se pueden observar aves como cucaracheros, búhos, azulejos, águilas y 16 variedades de colibríes. Definitivamente, es el escenario perfecto para los amantes del avistamiento de aves.',
            'video' => 'https://youtu.be/EG1C6jBdbFQ'
        ),
        array(
            'title' => 'Cañón de Juanambú',
            'image' => 'https://buesaconarino.micolombiadigital.gov.co/sites/buesaconarino/content/files/000045/2240_parque-canon-de-juanambu_1024x600.jpg',
            'description1' => ' El Cañón de Juanambú está ubicado a 54 kilómetros de Pasto, entre los municipios de Buesaco y Arboleda',
            'description2' => 'Entre sus atracciones ofrece la oportunidad de realizar deportes acuáticos como canotaje de travesía, kayak, natación en río y en piscinas naturales.
            Finalmente, para los amantes de caminatas ecológicas, existe una gran extensión de senderos naturales. Además se puede aprender de historia por medio de las trincheras que se construyeron durante las batallas que le dieron la libertad a Colombia, a manos de Simón Bolívar.',
            'video' => 'https://youtu.be/oIsCINxnFww'
        ),
        array(
            'title' => 'Isla de la Carota',
            'image' => 'https://www.viajaporcolombia.com/images//isla-la-corota.jpg',
            'description1' => 'La Isla La Corota se encuentra ubicada en medio de las aguas de la Laguna de La Cocha, la segunda más grande de Colombia y una de las más grandes de los Andes. En el Encano, corregimiento de Pasto, se encuentra ubicado El Puerto, un pintoresco embarcadero rodeado de alojamientos y restaurantes cuya especialidad es la preparación de trucha arco iris.',
            'description2' => 'La Corota cuenta con un sendero de 500 mts de largo que atraviesa la isla de lado a lado entre el denso bosque. Bajo una bóveda de árboles simétrica como un rompecabezas, el visitante se encuentra con plantas como el motilón dulce, encinos, majua, arrayán, anturios, cancho, el paloerosa, sietecueros, motilones silvestres, tinto, cuyos frutos se utilizan para teñir telas, orquídeas y helechos que completan un hermoso cuadro natural.

            El Santuario no cuenta con infraestructura para alojamiento, ni restaurante. El valor de ingreso a la isla es de $2.500, mientras que el servicio de transporte desde El Puerto tiene un costo de $35.000 ida y regreso en lanchas artesanales.',
            'video' => 'https://www.youtube.com/watch?v=RuGwH-LopgY'
        )
    );

}
