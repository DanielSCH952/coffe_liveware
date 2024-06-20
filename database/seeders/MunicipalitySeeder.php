<?php

namespace Database\Seeders;

use App\Models\Municipality;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MunicipalitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $municipalities = [
            ['state_id' => 21, 'municipio' => 'Acajete'],
            ['state_id' => 21, 'municipio' => 'Acateno'],
            ['state_id' => 21, 'municipio' => 'Acatlán'],
            ['state_id' => 21, 'municipio' => 'Acatzingo'],
            ['state_id' => 21, 'municipio' => 'Acteopan'],
            ['state_id' => 21, 'municipio' => 'Ahuacatlán'],
            ['state_id' => 21, 'municipio' => 'Ahuatlán'],
            ['state_id' => 21, 'municipio' => 'Ahuazotepec'],
            ['state_id' => 21, 'municipio' => 'Ahuehuetitla'],
            ['state_id' => 21, 'municipio' => 'Ajalpan'],
            ['state_id' => 21, 'municipio' => 'Albino Zertuche'],
            ['state_id' => 21, 'municipio' => 'Aljojuca'],
            ['state_id' => 21, 'municipio' => 'Altepexi'],
            ['state_id' => 21, 'municipio' => 'Amixtlán'],
            ['state_id' => 21, 'municipio' => 'Amozoc'],
            ['state_id' => 21, 'municipio' => 'Aquixtla'],
            ['state_id' => 21, 'municipio' => 'Atempan'],
            ['state_id' => 21, 'municipio' => 'Atexcal'],
            ['state_id' => 21, 'municipio' => 'Atlixco'],
            ['state_id' => 21, 'municipio' => 'Atoyatempan'],
            ['state_id' => 21, 'municipio' => 'Atzala'],
            ['state_id' => 21, 'municipio' => 'Atzitzihuacán'],
            ['state_id' => 21, 'municipio' => 'Atzitzintla'],
            ['state_id' => 21, 'municipio' => 'Axutla'],
            ['state_id' => 21, 'municipio' => 'Calpan'],
            ['state_id' => 21, 'municipio' => 'Caltepec'],
            ['state_id' => 21, 'municipio' => 'Camocuautla'],
            ['state_id' => 21, 'municipio' => 'Caxhuacan'],
            ['state_id' => 21, 'municipio' => 'Coatepec'],
            ['state_id' => 21, 'municipio' => 'Coatzingo'],
            ['state_id' => 21, 'municipio' => 'Cohetzala'],
            ['state_id' => 21, 'municipio' => 'Cohuecan'],
            ['state_id' => 21, 'municipio' => 'Coronango'],
            ['state_id' => 21, 'municipio' => 'Coxcatlán'],
            ['state_id' => 21, 'municipio' => 'Coyomeapan'],
            ['state_id' => 21, 'municipio' => 'Coyotepec'],
            ['state_id' => 21, 'municipio' => 'Cuapiaxtla de Madero'],
            ['state_id' => 21, 'municipio' => 'Cuautempan'],
            ['state_id' => 21, 'municipio' => 'Cuautinchán'],
            ['state_id' => 21, 'municipio' => 'Cuautlancingo'],
            ['state_id' => 21, 'municipio' => 'Cuayuca de Andrade'],
            ['state_id' => 21, 'municipio' => 'Cuetzalan del Progreso'],
            ['state_id' => 21, 'municipio' => 'Cuyoaco'],
            ['state_id' => 21, 'municipio' => 'Chalchicomula de Sesma'],
            ['state_id' => 21, 'municipio' => 'Chapulco'],
            ['state_id' => 21, 'municipio' => 'Chiautla'],
            ['state_id' => 21, 'municipio' => 'Chiautzingo'],
            ['state_id' => 21, 'municipio' => 'Chiconcuautla'],
            ['state_id' => 21, 'municipio' => 'Chichiquila'],
            ['state_id' => 21, 'municipio' => 'Chietla'],
            ['state_id' => 21, 'municipio' => 'Chigmecatitlán'],
            ['state_id' => 21, 'municipio' => 'Chignahuapan'],
            ['state_id' => 21, 'municipio' => 'Chignautla'],
            ['state_id' => 21, 'municipio' => 'Chila'],
            ['state_id' => 21, 'municipio' => 'Chila de la Sal'],
            ['state_id' => 21, 'municipio' => 'Honey'],
            ['state_id' => 21, 'municipio' => 'Chilchotla'],
            ['state_id' => 21, 'municipio' => 'Chinantla'],
            ['state_id' => 21, 'municipio' => 'Domingo Arenas'],
            ['state_id' => 21, 'municipio' => 'Eloxochitlán'],
            ['state_id' => 21, 'municipio' => 'Epatlán'],
            ['state_id' => 21, 'municipio' => 'Esperanza'],
            ['state_id' => 21, 'municipio' => 'Francisco Z. Mena'],
            ['state_id' => 21, 'municipio' => 'General Felipe Ángeles'],
            ['state_id' => 21, 'municipio' => 'Guadalupe'],
            ['state_id' => 21, 'municipio' => 'Guadalupe Victoria'],
            ['state_id' => 21, 'municipio' => 'Hermenegildo Galeana'],
            ['state_id' => 21, 'municipio' => 'Huaquechula'],
            ['state_id' => 21, 'municipio' => 'Huatlatlauca'],
            ['state_id' => 21, 'municipio' => 'Huauchinango'],
            ['state_id' => 21, 'municipio' => 'Huehuetla'],
            ['state_id' => 21, 'municipio' => 'Huehuetlán el Chico'],
            ['state_id' => 21, 'municipio' => 'Huejotzingo'],
            ['state_id' => 21, 'municipio' => 'Hueyapan'],
            ['state_id' => 21, 'municipio' => 'Hueytamalco'],
            ['state_id' => 21, 'municipio' => 'Hueytlalpan'],
            ['state_id' => 21, 'municipio' => 'Huitzilan de Serdán'],
            ['state_id' => 21, 'municipio' => 'Huitziltepec'],
            ['state_id' => 21, 'municipio' => 'Atlequizayan'],
            ['state_id' => 21, 'municipio' => 'Ixcamilpa de Guerrero'],
            ['state_id' => 21, 'municipio' => 'Ixcaquixtla'],
            ['state_id' => 21, 'municipio' => 'Ixtacamaxtitlán'],
            ['state_id' => 21, 'municipio' => 'Ixtepec'],
            ['state_id' => 21, 'municipio' => 'Izúcar de Matamoros'],
            ['state_id' => 21, 'municipio' => 'Jalpan'],
            ['state_id' => 21, 'municipio' => 'Jolalpan'],
            ['state_id' => 21, 'municipio' => 'Jonotla'],
            ['state_id' => 21, 'municipio' => 'Jopala'],
            ['state_id' => 21, 'municipio' => 'Juan C. Bonilla'],
            ['state_id' => 21, 'municipio' => 'Juan Galindo'],
            ['state_id' => 21, 'municipio' => 'Juan N. Méndez'],
            ['state_id' => 21, 'municipio' => 'La Magdalena Tlatlauquitepec'],
            ['state_id' => 21, 'municipio' => 'Lafragua'],
            ['state_id' => 21, 'municipio' => 'Libres'],
            ['state_id' => 21, 'municipio' => 'Los Reyes de Juárez'],
            ['state_id' => 21, 'municipio' => 'Mazapiltepec de Juárez'],
            ['state_id' => 21, 'municipio' => 'Mixtla'],
            ['state_id' => 21, 'municipio' => 'Molcaxac'],
            ['state_id' => 21, 'municipio' => 'Cañada Morelos'],
            ['state_id' => 21, 'municipio' => 'Naupan'],
            ['state_id' => 21, 'municipio' => 'Nauzontla'],
            ['state_id' => 21, 'municipio' => 'Nealtican'],
            ['state_id' => 21, 'municipio' => 'Nicolás Bravo'],
            ['state_id' => 21, 'municipio' => 'Nopalucan'],
            ['state_id' => 21, 'municipio' => 'Ocotepec'],
            ['state_id' => 21, 'municipio' => 'Ocoyucan'],
            ['state_id' => 21, 'municipio' => 'Olintla'],
            ['state_id' => 21, 'municipio' => 'Oriental'],
            ['state_id' => 21, 'municipio' => 'Pahuatlán'],
            ['state_id' => 21, 'municipio' => 'Palmar de Bravo'],
            ['state_id' => 21, 'municipio' => 'Pantepec'],
            ['state_id' => 21, 'municipio' => 'Petlalcingo'],
            ['state_id' => 21, 'municipio' => 'Piaxtla'],
            ['state_id' => 21, 'municipio' => 'Puebla'],
            ['state_id' => 21, 'municipio' => 'Quecholac'],
            ['state_id' => 21, 'municipio' => 'Quimixtlán'],
            ['state_id' => 21, 'municipio' => 'Rafael Lara Grajales'],
            ['state_id' => 21, 'municipio' => 'San Andrés Cholula'],
            ['state_id' => 21, 'municipio' => 'San Antonio Cañada'],
            ['state_id' => 21, 'municipio' => 'San Diego la Mesa Tochimiltzingo'],
            ['state_id' => 21, 'municipio' => 'San Felipe Teotlalcingo'],
            ['state_id' => 21, 'municipio' => 'San Felipe Tepatlán'],
            ['state_id' => 21, 'municipio' => 'San Gabriel Chilac'],
            ['state_id' => 21, 'municipio' => 'San Gregorio Atzompa'],
            ['state_id' => 21, 'municipio' => 'San Jerónimo Tecuanipan'],
            ['state_id' => 21, 'municipio' => 'San Jerónimo Xayacatlán'],
            ['state_id' => 21, 'municipio' => 'San José Chiapa'],
            ['state_id' => 21, 'municipio' => 'San José Miahuatlán'],
            ['state_id' => 21, 'municipio' => 'San Juan Atenco'],
            ['state_id' => 21, 'municipio' => 'San Juan Atzompa'],
            ['state_id' => 21, 'municipio' => 'San Martín Texmelucan'],
            ['state_id' => 21, 'municipio' => 'San Martín Totoltepec'],
            ['state_id' => 21, 'municipio' => 'San Matías Tlalancaleca'],
            ['state_id' => 21, 'municipio' => 'San Miguel Ixitlán'],
            ['state_id' => 21, 'municipio' => 'San Miguel Xoxtla'],
            ['state_id' => 21, 'municipio' => 'San Nicolás Buenos Aires'],
            ['state_id' => 21, 'municipio' => 'San Nicolás de los Ranchos'],
            ['state_id' => 21, 'municipio' => 'San Pablo Anicano'],
            ['state_id' => 21, 'municipio' => 'San Pedro Cholula'],
            ['state_id' => 21, 'municipio' => 'San Pedro Yeloixtlahuaca'],
            ['state_id' => 21, 'municipio' => 'San Salvador el Seco'],
            ['state_id' => 21, 'municipio' => 'San Salvador el Verde'],
            ['state_id' => 21, 'municipio' => 'San Salvador Huixcolotla'],
            ['state_id' => 21, 'municipio' => 'San Sebastián Tlacotepec'],
            ['state_id' => 21, 'municipio' => 'Santa Catarina Tlaltempan'],
            ['state_id' => 21, 'municipio' => 'Santa Inés Ahuatempan'],
            ['state_id' => 21, 'municipio' => 'Santa Isabel Cholula'],
            ['state_id' => 21, 'municipio' => 'Santiago Miahuatlán'],
            ['state_id' => 21, 'municipio' => 'Huehuetlán el Grande'],
            ['state_id' => 21, 'municipio' => 'Santo Tomás Hueyotlipan'],
            ['state_id' => 21, 'municipio' => 'Soltepec'],
            ['state_id' => 21, 'municipio' => 'Tecali de Herrera'],
            ['state_id' => 21, 'municipio' => 'Tecamachalco'],
            ['state_id' => 21, 'municipio' => 'Tecomatlán'],
            ['state_id' => 21, 'municipio' => 'Tehuacán'],
            ['state_id' => 21, 'municipio' => 'Tehuitzingo'],
            ['state_id' => 21, 'municipio' => 'Tenampulco'],
            ['state_id' => 21, 'municipio' => 'Teopantlán'],
            ['state_id' => 21, 'municipio' => 'Teotlalco'],
            ['state_id' => 21, 'municipio' => 'Tepanco de López'],
            ['state_id' => 21, 'municipio' => 'Tepango de Rodríguez'],
            ['state_id' => 21, 'municipio' => 'Tepatlaxco de Hidalgo'],
            ['state_id' => 21, 'municipio' => 'Tepeaca'],
            ['state_id' => 21, 'municipio' => 'Tepemaxalco'],
            ['state_id' => 21, 'municipio' => 'Tepeojuma'],
            ['state_id' => 21, 'municipio' => 'Tepetzintla'],
            ['state_id' => 21, 'municipio' => 'Tepexco'],
            ['state_id' => 21, 'municipio' => 'Tepexi de Rodríguez'],
            ['state_id' => 21, 'municipio' => 'Tepeyahualco'],
            ['state_id' => 21, 'municipio' => 'Tepeyahualco de Cuauhtémoc'],
            ['state_id' => 21, 'municipio' => 'Tetela de Ocampo'],
            ['state_id' => 21, 'municipio' => 'Teteles de Avila Castillo'],
            ['state_id' => 21, 'municipio' => 'Teziutlán'],
            ['state_id' => 21, 'municipio' => 'Tianguismanalco'],
            ['state_id' => 21, 'municipio' => 'Tilapa'],
            ['state_id' => 21, 'municipio' => 'Tlachichuca'],
            ['state_id' => 21, 'municipio' => 'Tlacotepec de Benito Juárez'],
            ['state_id' => 21, 'municipio' => 'Tlacuilotepec'],
            ['state_id' => 21, 'municipio' => 'Tlahuapan'],
            ['state_id' => 21, 'municipio' => 'Tlaltenango'],
            ['state_id' => 21, 'municipio' => 'Tlanepantla'],
            ['state_id' => 21, 'municipio' => 'Tlaola'],
            ['state_id' => 21, 'municipio' => 'Tlapacoya'],
            ['state_id' => 21, 'municipio' => 'Tlapanalá'],
            ['state_id' => 21, 'municipio' => 'Tlatlauquitepec'],
            ['state_id' => 21, 'municipio' => 'Tlaxco'],
            ['state_id' => 21, 'municipio' => 'Tochimilco'],
            ['state_id' => 21, 'municipio' => 'Tochtepec'],
            ['state_id' => 21, 'municipio' => 'Totoltepec de Guerrero'],
            ['state_id' => 21, 'municipio' => 'Tulcingo'],
            ['state_id' => 21, 'municipio' => 'Tuzamapan de Galeana'],
            ['state_id' => 21, 'municipio' => 'Tzicatlacoyan'],
            ['state_id' => 21, 'municipio' => 'Venustiano Carranza'],
            ['state_id' => 21, 'municipio' => 'Vicente Guerrero'],
            ['state_id' => 21, 'municipio' => 'Xayacatlán de Bravo'],
            ['state_id' => 21, 'municipio' => 'Xicotepec'],
            ['state_id' => 21, 'municipio' => 'Xicotlán'],
            ['state_id' => 21, 'municipio' => 'Xiutetelco'],
            ['state_id' => 21, 'municipio' => 'Xochiapulco'],
            ['state_id' => 21, 'municipio' => 'Xochiltepec'],
            ['state_id' => 21, 'municipio' => 'Xochitlán de Vicente Suárez'],
            ['state_id' => 21, 'municipio' => 'Xochitlán Todos Santos'],
            ['state_id' => 21, 'municipio' => 'Yaonáhuac'],
            ['state_id' => 21, 'municipio' => 'Yehualtepec'],
            ['state_id' => 21, 'municipio' => 'Zacapala'],
            ['state_id' => 21, 'municipio' => 'Zacapoaxtla'],
            ['state_id' => 21, 'municipio' => 'Zacatlán'],
            ['state_id' => 21, 'municipio' => 'Zapotitlán'],
            ['state_id' => 21, 'municipio' => 'Zapotitlán de Méndez'],
            ['state_id' => 21, 'municipio' => 'Zaragoza'],
            ['state_id' => 21, 'municipio' => 'Zautla'],
            ['state_id' => 21, 'municipio' => 'Zihuateutla'],
            ['state_id' => 21, 'municipio' => 'Zinacatepec'],
            ['state_id' => 21, 'municipio' => 'Zongozotla'],
            ['state_id' => 21, 'municipio' => 'Zoquiapan'],
            ['state_id' => 21, 'municipio' => 'Zoquitlán'],
            ['state_id' => 22, 'municipio' => 'Amealco de Bonfil'],
            ['state_id' => 22, 'municipio' => 'Pinal de Amoles'],
            ['state_id' => 22, 'municipio' => 'Arroyo Seco'],
            ['state_id' => 22, 'municipio' => 'Cadereyta de Montes'],
            ['state_id' => 22, 'municipio' => 'Colón'],
            ['state_id' => 22, 'municipio' => 'Corregidora'],
            ['state_id' => 22, 'municipio' => 'Ezequiel Montes'],
            ['state_id' => 22, 'municipio' => 'Huimilpan'],
            ['state_id' => 22, 'municipio' => 'Jalpan de Serra'],
            ['state_id' => 22, 'municipio' => 'Landa de Matamoros'],
            ['state_id' => 22, 'municipio' => 'El Marqués'],
            ['state_id' => 22, 'municipio' => 'Pedro Escobedo'],
            ['state_id' => 22, 'municipio' => 'Peñamiller'],
            ['state_id' => 22, 'municipio' => 'Querétaro'],
            ['state_id' => 22, 'municipio' => 'San Joaquín'],
            ['state_id' => 22, 'municipio' => 'San Juan del Río'],
            ['state_id' => 22, 'municipio' => 'Tequisquiapan'],
            ['state_id' => 22, 'municipio' => 'Tolimán'],
            ['state_id' => 23, 'municipio' => 'Cozumel'],
            ['state_id' => 23, 'municipio' => 'Felipe Carrillo Puerto'],
            ['state_id' => 23, 'municipio' => 'Isla Mujeres'],
            ['state_id' => 23, 'municipio' => 'Othón P. Blanco'],
            ['state_id' => 23, 'municipio' => 'Benito Juárez'],
            ['state_id' => 23, 'municipio' => 'José María Morelos'],
            ['state_id' => 23, 'municipio' => 'Lázaro Cárdenas'],
            ['state_id' => 23, 'municipio' => 'Solidaridad'],
            ['state_id' => 23, 'municipio' => 'Tulum'],
            ['state_id' => 23, 'municipio' => 'Bacalar'],
            ['state_id' => 23, 'municipio' => 'Puerto Morelos'],
            ['state_id' => 24, 'municipio' => 'Ahualulco'],
            ['state_id' => 24, 'municipio' => 'Alaquines'],
            ['state_id' => 24, 'municipio' => 'Aquismón'],
            ['state_id' => 24, 'municipio' => 'Armadillo de los Infante'],
            ['state_id' => 24, 'municipio' => 'Cárdenas'],
            ['state_id' => 24, 'municipio' => 'Catorce'],
            ['state_id' => 24, 'municipio' => 'Cedral'],
            ['state_id' => 24, 'municipio' => 'Cerritos'],
            ['state_id' => 24, 'municipio' => 'Cerro de San Pedro'],
            ['state_id' => 24, 'municipio' => 'Ciudad del Maíz'],
            ['state_id' => 24, 'municipio' => 'Ciudad Fernández'],
            ['state_id' => 24, 'municipio' => 'Tancanhuitz'],
            ['state_id' => 24, 'municipio' => 'Ciudad Valles'],
            ['state_id' => 24, 'municipio' => 'Coxcatlán'],
            ['state_id' => 24, 'municipio' => 'Charcas'],
            ['state_id' => 24, 'municipio' => 'Ebano'],
            ['state_id' => 24, 'municipio' => 'Guadalcázar'],
            ['state_id' => 24, 'municipio' => 'Huehuetlán'],
            ['state_id' => 24, 'municipio' => 'Lagunillas'],
            ['state_id' => 24, 'municipio' => 'Matehuala'],
        ];

        foreach ($municipalities as $municipio) {
            $municipalitySv = new Municipality();
            $municipalitySv->municipality = $municipio['municipio'];
            $municipalitySv->state_id = $municipio['state_id'];
            $municipalitySv->save();
        }
    }
}
