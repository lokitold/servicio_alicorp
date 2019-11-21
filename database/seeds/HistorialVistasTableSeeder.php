<?php

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class HistorialVistasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        $contador= 125;
        for ($i=0; $i < 700; $i++) {

            \DB::table('historial_visitas')->insert(array(
                'usuario_id' => $contador++,
                'archivo_id' => $faker->randomElement(['1134','1135','1136','1137','1138','1139', '1140', '1141', '1142',
                    '1143', '1144', '1145', '1145', '1146', '1147', '1148',
                    '1149', '1150', '1151', '1152', '1153', '1154', '1155', '1156', '1157', '1158', '1159', '1160',
                    '1161', '1162', '1163', '1164', '1165', '1166', '1167', '1168', '1169', '1160',
                    '1171', '1172', '1173', '1174', '1175', '1176', '1177', '1178', '1179', '1180',
                    '1191', '1192', '1193', '1194', '1195', '1196', '1197', '1198', '1199', '1200',
                    '1300', '1301', '1302', '1303', '1304', '1305', '1306', '1307', '1308', '1309',
                    '1400', '1401', '1402', '1403', '1404', '1405', '1406', '1407', '1408', '1409',
                    ]),
                'histv_fecha_visita' => date('Y-m-d H:m:s'),
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ));
        }
    }
}
