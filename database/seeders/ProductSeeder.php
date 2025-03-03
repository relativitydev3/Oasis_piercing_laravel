<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::insert(
            [
                [
                    'nombre' => 'Piercing de nariz',
                    'material_id' => 1,
                    'precio' => '10.000',
                    'stock' => '10',
                    'imagen' => 'piercing_nariz.jpg',
                    'descripcion' => 'Piercing de nariz en acero inoxidable',
                    'estado_id' => '1',
                ],
                [
                    'nombre' => 'CANDONGAS DORADAS #12',
                    'material_id' => 1,
                    'precio' => '16000',
                    'stock' => '2',
                    'imagen' => 'candongas_doradas_12.jpg',
                    'descripcion' => 'UN PAR DISPONIBLE.',
                    'estado_id' => '1',
                ],
                [
                    'nombre' => 'CANDONGAS PLATEADAS #12',
                    'material_id' => 1,
                    'precio' => '16000',
                    'stock' => '4',
                    'imagen' => 'candongas_plateadas_12.jpg',
                    'descripcion' => 'DOS PARES DISPONIBLES.',
                    'estado_id' => '1',
                ],
                [
                    'nombre' => 'CANDONGAS TORNASOL#12',
                    'material_id' => 1,
                    'precio' => '16000',
                    'stock' => '4',
                    'imagen' => 'candongas_tornasol_12.jpg',
                    'descripcion' => 'DOS PARES DISPONIBLES.',
                    'estado_id' => '1',
                ],
                [
                    'nombre' => 'CANDONGAS DORADAS #8',
                    'material_id' => 1,
                    'precio' => '16000',
                    'stock' => '4',
                    'imagen' => 'candongas_doradas_8.jpg',
                    'descripcion' => 'UN PAR DISPONIBLE.',
                    'estado_id' => '1',
                ],
                [
                    'nombre' => 'CANDONGAS PLATEADAS #8',
                    'material_id' => 1,
                    'precio' => '16000',
                    'stock' => '4',
                    'imagen' => 'candongas_plateadas_8.jpg',
                    'descripcion' => 'DOS PARES DISPONIBLES.',
                    'estado_id' => '1',
                ],
                [
                    'nombre' => 'CANDONGAS NEGRAS #8',
                    'material_id' => 1,
                    'precio' => '16000',
                    'stock' => '4',
                    'imagen' => 'candongas_negras_8.jpg',
                    'descripcion' => 'DOS PARES DISPONIBLES.',
                    'estado_id' => '1',
                ],
                [
                    'nombre' => 'CANDONGAS TORNASOL #8',
                    'material_id' => 1,
                    'precio' => '16000',
                    'stock' => '3',
                    'imagen' => 'candongas_tornasol_8.jpg',
                    'descripcion' => 'DOS PARES DISPONIBLES.',
                    'estado_id' => '1',
                ],
                [
                    'nombre' => 'CANDONGAS DORADAS #10',
                    'material_id' => 1,
                    'precio' => '16000',
                    'stock' => '2',
                    'imagen' => 'candongas_doradas_10.jpg',
                    'descripcion' => 'UN PAR DISPONIBLE.',
                    'estado_id' => '1',
                ],
                [
                    'nombre' => 'CANDONGAS PLATEADAS #10',
                    'material_id' => 1,
                    'precio' => '16000',
                    'stock' => '2',
                    'imagen' => 'candongas_plateadas_10.jpg',
                    'descripcion' => 'UN PAR DISPONIBLE.',
                    'estado_id' => '1',
                ],
                [
                    'nombre' => 'CANDONGAS NEGRAS #10',
                    'material_id' => 1,
                    'precio' => '16000',
                    'stock' => '6',
                    'imagen' => 'candongas_negras_10.jpg',
                    'descripcion' => 'TRES PARES DISPONIBLES.',
                    'estado_id' => '1',
                ],
                [
                    'nombre' => 'CANDONGAS TORNASOL',
                    'material_id' => 1,
                    'precio' => '16000',
                    'stock' => '4',
                    'imagen' => 'candongas_tornasol.jpg',
                    'descripcion' => 'DOS PARES DISPONIBLES.',
                    'estado_id' => '1',
                ],
                [
                    'nombre' => 'CANDONGAS AZUL #10',
                    'material_id' => 1,
                    'precio' => '16000',
                    'stock' => '2',
                    'imagen' => 'candongas_azul_10.jpg',
                    'descripcion' => 'UN PAR DISPONIBLE.',
                    'estado_id' => '1',
                ],
                [
                    'nombre' => 'CENTRO DE LENGUA ARAÑA',
                    'material_id' => 1,
                    'precio' => '12000',
                    'stock' => '2',
                    'imagen' => 'centro_lengua_arana.jpg',
                    'descripcion' => '2 UNIDADES DISPONIBLES.',
                    'estado_id' => '1',
                ],
                [
                    'nombre' => 'CENTRO DE LENGUA PLAY BOY',
                    'material_id' => 1,
                    'precio' => '12000',
                    'stock' => '1',
                    'imagen' => 'centro_lengua_playboy.jpg',
                    'descripcion' => '1 UNIDAD DISPONIBLE.',
                    'estado_id' => '1',
                ],
                [
                    'nombre' => 'CENTRO DE LENGUA HONGO',
                    'material_id' => 1,
                    'precio' => '12000',
                    'stock' => '1',
                    'imagen' => 'centro_lengua_hongo.jpg',
                    'descripcion' => '1 UNIDAD DISPONIBLE.',
                    'estado_id' => '1',
                ],
                [
                    'nombre' => 'CENTRO DE LENGUA PATRICIO',
                    'material_id' => 1,
                    'precio' => '12000',
                    'stock' => '1',
                    'imagen' => 'centro_lengua_patricio.jpg',
                    'descripcion' => '1 UNIDAD DISPONIBLE.',
                    'estado_id' => '1',
                ],
                [
                    'nombre' => 'CENTRO DE LENGUA PASTILLA',
                    'material_id' => 1,
                    'precio' => '8000',
                    'stock' => '1',
                    'imagen' => 'centro_lengua_pastilla.jpg',
                    'descripcion' => '1 UNIDAD DISPONIBLE.',
                    'estado_id' => '1',
                ],
                [
                    'nombre' => 'INDUSTRIAL TORNASOL CORAZON',
                    'material_id' => 1,
                    'precio' => '13000',
                    'stock' => '1',
                    'imagen' => 'industrial_tornasol_corazon.jpg',
                    'descripcion' => '1 UNIDAD DISPONIBLE.',
                    'estado_id' => '1',
                ],
                [
                    'nombre' => 'INDUSTRIAL TORNASOL LUNA & GATO',
                    'material_id' => 1,
                    'precio' => '13000',
                    'stock' => '1',
                    'imagen' => 'industrial_tornasol_luna_gato.jpg',
                    'descripcion' => '1 UNIDAD DISPONIBLE.',
                    'estado_id' => '1',
                ],
                [
                    'nombre' => 'INDUSTRIAL GATO',
                    'material_id' => 1,
                    'precio' => '13000',
                    'stock' => '2',
                    'imagen' => 'industrial_gato.jpg',
                    'descripcion' => '2 UNIDADES DISPONIBLES.',
                    'estado_id' => '1',
                ],
                [
                    'nombre' => 'PEZONERAS ZIRCONES TRANSPARENTES',
                    'material_id' => 1,
                    'precio' => '16000',
                    'stock' => '2',
                    'imagen' => 'pezoneras_zircones_transparentes.jpg',
                    'descripcion' => '2 UNIDADES DISPONIBLES.',
                    'estado_id' => '1',
                ],
                [
                    'nombre' => 'PEZONERAS 3 ZIRCONES TORNASOL',
                    'material_id' => 1,
                    'precio' => '16000',
                    'stock' => '2',
                    'imagen' => 'pezoneras_zircones_tornasol.jpg',
                    'descripcion' => '2 UNIDADES DISPONIBLES.',
                    'estado_id' => '1',
                ],
                [
                    'nombre' => 'AROS DORADOS COLGANTE DISEÑO',
                    'material_id' => 1,
                    'precio' => '15000',
                    'stock' => '4',
                    'imagen' => 'aros_dorados_colgante.jpg',
                    'descripcion' => '4 UNIDADES DISPONIBLES.',
                    'estado_id' => '1',
                ],
                [
                    'nombre' => 'AROS PLATEADOS COLGANTE DISEÑO',
                    'material_id' => 1,
                    'precio' => '15000',
                    'stock' => '6',
                    'imagen' => 'aros_plateados_colgante.jpg',
                    'descripcion' => '6 UNIDADES DISPONIBLES.',
                    'estado_id' => '1',
                ],
                [
                    'nombre' => 'BARBELL DORADO 10X4',
                    'material_id' => 1,
                    'precio' => '6400',
                    'stock' => '4',
                    'imagen' => 'barbell_dorado_10x4.jpg',
                    'descripcion' => '4 UNIDADES DIPONIBLES.',
                    'estado_id' => '1',
                ],
                [
                    'nombre' => 'BARBELL DORADO 12X4',
                    'material_id' => 1,
                    'precio' => '6400',
                    'stock' => '4',
                    'imagen' => 'barbell_dorado_12x4.jpg',
                    'descripcion' => '4 UNIDADES DISPONIBLES.',
                    'estado_id' => '1',
                ],
                [
                    'nombre' => 'AROS SILICONA NARIZ',
                    'material_id' => 1,
                    'precio' => '2000',
                    'stock' => '24',
                    'imagen' => 'aros_silicona_nariz.jpg',
                    'descripcion' => '24 UNIDADES DISPONIBLES.',
                    'estado_id' => '1',
                ],
                [
                    'nombre' => 'G RING DORADO',
                    'material_id' => 1,
                    'precio' => '4000',
                    'stock' => '3',
                    'imagen' => 'g_ring_dorado.jpg',
                    'descripcion' => '3 UNIDADES DISPONIBLES.',
                    'estado_id' => '1',
                ],
                [
                    'nombre' => 'G RING PLATEADO',
                    'material_id' => 1,
                    'precio' => '4000',
                    'stock' => '3',
                    'imagen' => 'g_ring_plateado.jpg',
                    'descripcion' => '3 UNIDADES DISPONIBLES.',
                    'estado_id' => '1',
                ],
                [
                    'nombre' => 'G RING NEGROS',
                    'material_id' => 1,
                    'precio' => '4000',
                    'stock' => '4',
                    'imagen' => 'g_ring_negros.jpg',
                    'descripcion' => '4 UNIDADES DISPONIBLES.',
                    'estado_id' => '1',
                ],
                [
                    'nombre' => 'G RING TORNASOL',
                    'material_id' => 1,
                    'precio' => '4000',
                    'stock' => '4',
                    'imagen' => 'g_ring_tornasol.jpg',
                    'descripcion' => '4 UNIDADES DISPONIBLES.',
                    'estado_id' => '1',
                ],
                [
                    'nombre' => 'BANANA PIEDRA AZUL',
                    'material_id' => 1,
                    'precio' => '7000',
                    'stock' => '5',
                    'imagen' => 'banana_piedra_azul.jpg',
                    'descripcion' => '5 UNIDADES DISPONIBLES.',
                    'estado_id' => '1',
                ],
                [
                    'nombre' => 'BANANA PIEDRA ROJA',
                    'material_id' => 1,
                    'precio' => '7000',
                    'stock' => '5',
                    'imagen' => 'banana_piedra_roja.jpg',
                    'descripcion' => '5 UNIDADES DISPONIBLES.',
                    'estado_id' => '1',
                ],
                [
                    'nombre' => 'BANANA PIEDRA ROSADA',
                    'material_id' => 1,
                    'precio' => '7000',
                    'stock' => '2',
                    'imagen' => 'banana_piedra_rosada.jpg',
                    'descripcion' => '2 UNIDADES DISPONIBLES.',
                    'estado_id' => '1',
                ],
                [
                    'nombre' => 'HERRADURAS BASICAS #6',
                    'material_id' => 1,
                    'precio' => '1000',
                    'stock' => '16',
                    'imagen' => 'herraduras_basicas_6.jpg',
                    'descripcion' => '16 UNIDADES DISPONIBLES.',
                    'estado_id' => '1',
                ],
                [
                    'nombre' => 'HERRADURAS BASICAS CONO #6',
                    'material_id' => 1,
                    'precio' => '1000',
                    'stock' => '2',
                    'imagen' => 'herraduras_basicas_cono_6.jpg',
                    'descripcion' => '2 UNIDADES DISPONIBLES.',
                    'estado_id' => '1',
                ],
                [
                    'nombre' => 'HERRADURAS BASICAS #8',
                    'material_id' => 1,
                    'precio' => '1000',
                    'stock' => '11',
                    'imagen' => 'herraduras_basicas_8.jpg',
                    'descripcion' => '11 UNIDADES DISPONIBLES.',
                    'estado_id' => '1',
                ],
                [
                    'nombre' => 'HERRADURA BASICAS CONO #8',
                    'material_id' => 1,
                    'precio' => '1000',
                    'stock' => '6',
                    'imagen' => 'herraduras_basicas_cono_8.jpg',
                    'descripcion' => '6 UNIDADES DISPONIBLES.',
                    'estado_id' => '1',
                ],
                [
                    'nombre' => 'HERRADURAS BASICAS #10',
                    'material_id' => 1,
                    'precio' => '1000',
                    'stock' => '13',
                    'imagen' => 'herraduras_basicas_10.jpg',
                    'descripcion' => '13 UNIDADES DISPONIBLES.',
                    'estado_id' => '1',
                ],
                [
                    'nombre' => 'HERRADURAS BASICAS #12',
                    'material_id' => 1,
                    'precio' => '1000',
                    'stock' => '15',
                    'imagen' => 'herraduras_basicas_12.jpg',
                    'descripcion' => '15 UNIDADES DISPONIBLES.',
                    'estado_id' => '1',
                ],
                [
                    'nombre' => 'AROS BASICOS NARIZ AZUL',
                    'material_id' => 1,
                    'precio' => '800',
                    'stock' => '2',
                    'imagen' => 'aros_basicos_nariz_azul.jpg',
                    'descripcion' => '2 UNIDADES DISPONIBLES.',
                    'estado_id' => '1',
                ],
                [
                    'nombre' => 'AROS BASICOS NARIZ VERDE',
                    'material_id' => 1,
                    'precio' => '800',
                    'stock' => '2',
                    'imagen' => 'aros_basicos_nariz_verde.jpg',
                    'descripcion' => '2 UNIDADES DISPONIBLES.',
                    'estado_id' => '1',
                ],
                [
                    'nombre' => 'AROS BASICOS NARIZ ROJO',
                    'material_id' => 1,
                    'precio' => '800',
                    'stock' => '2',
                    'imagen' => 'aros_basicos_nariz_rojo.jpg',
                    'descripcion' => '2 UNIDADES DISPONIBLES.',
                    'estado_id' => '1',
                ],
                [
                    'nombre' => 'AROS BASICOS NARIZ TORNASOL',
                    'material_id' => 1,
                    'precio' => '800',
                    'stock' => '1',
                    'imagen' => 'aros_basicos_nariz_tornasol.jpg',
                    'descripcion' => '1 UNIDAD DISPONIBLE.',
                    'estado_id' => '1',
                ],
                [
                    'nombre' => 'LABRET BASICO #6',
                    'material_id' => 1,
                    'precio' => '1000',
                    'stock' => '10',
                    'imagen' => 'labret_basico_6.jpg',
                    'descripcion' => '10 UNIDADES DISPONIBLES.',
                    'estado_id' => '1',
                ],
                [
                    'nombre' => 'LABRET BASICO #8 CONO',
                    'material_id' => 1,
                    'precio' => '1000',
                    'stock' => '12',
                    'imagen' => 'labret_basico_8_cono.jpg',
                    'descripcion' => '12 UNIDADES DISPONIBLES.',
                    'estado_id' => '1',
                ],
                [
                    'nombre' => 'LABRET BASICO #8',
                    'material_id' => 1,
                    'precio' => '1000',
                    'stock' => '11',
                    'imagen' => 'labret_basico_8.jpg',
                    'descripcion' => '11 UNIDADES DISPONIBLES.',
                    'estado_id' => '1',
                ],
                [
                    'nombre' => 'LABRET BASICO #10',
                    'material_id' => 1,
                    'precio' => '1000',
                    'stock' => '10',
                    'imagen' => 'labret_basico_10.jpg',
                    'descripcion' => '10 UNIDADES DISPONIBLES.',
                    'estado_id' => '1',
                ],
                [
                    'nombre' => 'LABRET BASICO #12',
                    'material_id' => 1,
                    'precio' => '1000',
                    'stock' => '11',
                    'imagen' => 'labret_basico_12.jpg',
                    'descripcion' => '11 UNIDADES DISPONIBLES.',
                    'estado_id' => '1',
                ],
                [
                    'nombre' => 'ARO BCR BOLA #6 PLATEADO',
                    'material_id' => 1,
                    'precio' => '10000',
                    'stock' => '1',
                    'imagen' => 'aro_bcr_bola_6_plateado.jpg',
                    'descripcion' => '1 UNIDAD DISPONIBLE.',
                    'estado_id' => '1',
                ],
                [
                    'nombre' => 'ARO BCR BOLA #6 TORNASOL',
                    'material_id' => 1,
                    'precio' => '10000',
                    'stock' => '2',
                    'imagen' => 'aro_bcr_bola_6_tornasol.jpg',
                    'descripcion' => '2 UNIDADES DISPONIBLES.',
                    'estado_id' => '1',
                ],
                [
                    'nombre' => 'SIMULADOR SEPTUM TORNASOL',
                    'material_id' => 1,
                    'precio' => '7600',
                    'stock' => '2',
                    'imagen' => 'simulador_septum_tornasol.jpg',
                    'descripcion' => '2 UNIDADES DISPONIBLES.',
                    'estado_id' => '1',
                ],
                [
                    'nombre' => 'SIMULADOR SEPTUM DORADO',
                    'material_id' => 1,
                    'precio' => '7600',
                    'stock' => '2',
                    'imagen' => 'simulador_septum_dorado.jpg',
                    'descripcion' => '2 UNIDADES DISPONIBLES.',
                    'estado_id' => '1',
                ],
                [
                    'nombre' => 'PIERCING LABIO CURVO DORADO',
                    'material_id' => 1,
                    'precio' => '8000',
                    'stock' => '1',
                    'imagen' => 'piercing_labio_curvo_dorado.jpg',
                    'descripcion' => '1 UNIDAD DISPONIBLE.',
                    'estado_id' => '1',
                ],
                [
                    'nombre' => 'PIERCING LABIO CURVO PLATEADO',
                    'material_id' => 1,
                    'precio' => '8000',
                    'stock' => '1',
                    'imagen' => 'piercing_labio_curvo_plateado.jpg',
                    'descripcion' => '1 UNIDAD DISPONIBLE.',
                    'estado_id' => '1',
                ],
                [
                    'nombre' => 'PIERCING LABIO CURVO NEGRO',
                    'material_id' => 1,
                    'precio' => '8000',
                    'stock' => '1',
                    'imagen' => 'piercing_labio_curvo_negro.jpg',
                    'descripcion' => '1 UNIDAD DISPONIBLE.',
                    'estado_id' => '1',
                ],
                [
                    'nombre' => 'PIERCING LABIO CURVO AZUL',
                    'material_id' => 1,
                    'precio' => '8000',
                    'stock' => '1',
                    'imagen' => 'piercing_labio_curvo_azul.jpg',
                    'descripcion' => '1 UNIDAD DISPONIBLE',
                    'estado_id' => '1',
                ],
                [
                    'nombre' => 'SEPTUM IMAN NEGRO',
                    'material_id' => 1,
                    'precio' => '9000',
                    'stock' => '3',
                    'imagen' => 'septum_iman_negro.jpg',
                    'descripcion' => '3 UNIDADES DISPONIBLES.',
                    'estado_id' => '1',
                ],
                [
                    'nombre' => 'SEPTUM IMAN TORNASOL',
                    'material_id' => 1,
                    'precio' => '9000',
                    'stock' => '2',
                    'imagen' => 'septum_iman_tornasol.jpg',
                    'descripcion' => '2 UNIDADES DISPONIBLES.',
                    'estado_id' => '1',
                ],
                [
                    'nombre' => 'SEPTUM IMAN DORADO',
                    'material_id' => 1,
                    'precio' => '9000',
                    'stock' => '1',
                    'imagen' => 'septum_iman_dorado.jpg',
                    'descripcion' => '1 UNIDAD DISPONIBLE.',
                    'estado_id' => '1',
                ],
                [
                    'nombre' => 'AROS CONTINUOS CLICKER #8',
                    'material_id' => 1,
                    'precio' => '10000',
                    'stock' => '2',
                    'imagen' => 'aros_continuos_clicker_8.jpg',
                    'descripcion' => '2 UNIDADES DISPONIBLES.',
                    'estado_id' => '1',
                ],
                [
                    'nombre' => 'AROS CONTINUOS CLICKER #6',
                    'material_id' => 1,
                    'precio' => '8000',
                    'stock' => '2',
                    'imagen' => 'aros_continuos_clicker_6.jpg',
                    'descripcion' => '2 UNIDADES DISPONIBLES.',
                    'estado_id' => '1',
                ],
                [
                    'nombre' => 'AROS CONTINUOS CLICKER #10',
                    'material_id' => 1,
                    'precio' => '10000',
                    'stock' => '1',
                    'imagen' => 'aros_continuos_clicker_10.jpg',
                    'descripcion' => '1 UNIDAD DISPONIBLE.',
                    'estado_id' => '1',
                ],
                [
                    'nombre' => 'AROS CONTINUOS CLICKER #12',
                    'material_id' => 1,
                    'precio' => '10000',
                    'stock' => '2',
                    'imagen' => 'aros_continuos_clicker_12.jpg',
                    'descripcion' => '2 UNIDADES DISPONIBLES.',
                    'estado_id' => '1',
                ],
                [
                    'nombre' => 'AROS BROCHE TORNASOL',
                    'material_id' => 1,
                    'precio' => '8700',
                    'stock' => '2',
                    'imagen' => 'aros_broche_tornasol.jpg',
                    'descripcion' => '2 UNIDADES DISPONIBLES.',
                    'estado_id' => '1',
                ],
                [
                    'nombre' => 'AROS BROCHE NEGRO',
                    'material_id' => 1,
                    'precio' => '8700',
                    'stock' => '1',
                    'imagen' => 'aros_broche_negro.jpg',
                    'descripcion' => '1 UNIDAD DISPONIBLE.',
                    'estado_id' => '1',
                ],
                [
                    'nombre' => 'AROS BROCHE PLATEADO',
                    'material_id' => 1,
                    'precio' => '8700',
                    'stock' => '1',
                    'imagen' => 'aros_broche_plateado.jpg',
                    'descripcion' => '1 UNIDAD DISPONIBLE.',
                    'estado_id' => '1',
                ],
                [
                    'nombre' => 'AROS BROCHE DORADO',
                    'material_id' => 1,
                    'precio' => '8700',
                    'stock' => '1',
                    'imagen' => 'aros_broche_dorado.jpg',
                    'descripcion' => '1 UNIDAD DISPONIBLE.',
                    'estado_id' => '1',
                ],
                [
                    'nombre' => 'LABRET PIEDRA INCRUSTADA AZUL CLARO',
                    'material_id' => 1,
                    'precio' => '5000',
                    'stock' => '2',
                    'imagen' => 'labret_piedra_incrustada_azul_claro.jpg',
                    'descripcion' => '2 UNIDAD DISPONIBLE.',
                    'estado_id' => '1',
                ],
                [
                    'nombre' => 'LABRET PIEDRA INCRUSTADA AGUA MARINA',
                    'material_id' => 1,
                    'precio' => '5000',
                    'stock' => '2',
                    'imagen' => 'labret_piedra_incrustada_agua_marina.jpg',
                    'descripcion' => '2 UNIDADES DISPONIBLES.',
                    'estado_id' => '1',
                ],
                [
                    'nombre' => 'LABRET PIEDRA INCRUSTADA ROSADA',
                    'material_id' => 1,
                    'precio' => '5000',
                    'stock' => '1',
                    'imagen' => 'labret_piedra_incrustada_rosada.jpg',
                    'descripcion' => '1 UNIDAD DISPONIBLE.',
                    'estado_id' => '1',
                ],
                [
                    'nombre' => 'LABRET PIEDRA INCRUSTADA ROJO',
                    'material_id' => 1,
                    'precio' => '5000',
                    'stock' => '1',
                    'imagen' => 'labret_piedra_incrustada_rojo.jpg',
                    'descripcion' => '1 UNIDAD DISPONIBLE.',
                    'estado_id' => '1',
                ],
                [
                    'nombre' => 'LABRET PIEDRA INCRUSTADA AZUL REY',
                    'material_id' => 1,
                    'precio' => '5000',
                    'stock' => '1',
                    'imagen' => 'labret_piedra_incrustada_azul_rey.jpg',
                    'descripcion' => '1 UNIDAD DISPONIBLE.',
                    'estado_id' => '1',
                ],
                [
                    'nombre' => 'LABRET PIEDRA INCRUSTADA TORNASOL',
                    'material_id' => 1,
                    'precio' => '5000',
                    'stock' => '1',
                    'imagen' => 'labret_piedra_incrustada_tornasol.jpg',
                    'descripcion' => '1 UNIDAD DISPONIBLE.',
                    'estado_id' => '1',
                ],
                [
                    'nombre' => 'LABRET PIEDRA LISA FUCSIA',
                    'material_id' => 1,
                    'precio' => '3700',
                    'stock' => '2',
                    'imagen' => 'labret_piedra_lisa_fucsia.jpg',
                    'descripcion' => '2 UNIDADES DISPONIBLES.',
                    'estado_id' => '1',
                ],
                [
                    'nombre' => 'LABRET PIEDRA LISA TORNASOL',
                    'material_id' => 1,
                    'precio' => 3700,
                    'stock' => 1,
                    'imagen' => 'labret_piedra_lisa_tornasol.jpg',
                    'descripcion' => '1 UNIDAD DISPONIBLE.',
                    'estado_id' => '1',
                ],
                [
                    'nombre' => 'LABRET DORADO OPALO MORADO',
                    'material_id' => 1,
                    'precio' => 6000,
                    'stock' => 1,
                    'imagen' => 'labret_dorado_opalo_morado.jpg',
                    'descripcion' => '1 UNIDAD DISPONIBLE.',
                    'estado_id' => '1',
                ],
                [
                    'nombre' => 'LABRET 3 BOLAS ZIRCON VERDE',
                    'material_id' => 1,
                    'precio' => 10500,
                    'stock' => 1,
                    'imagen' => 'labret_3_bolas_zircon_verde.jpg',
                    'descripcion' => '1 UNIDAD DISPONIBLE.',
                    'estado_id' => '1',
                ],
                [
                    'nombre' => 'LABRET OPALO AZUL',
                    'material_id' => 1,
                    'precio' => 13000,
                    'stock' => 1,
                    'imagen' => 'labret_opalo_azul.jpg',
                    'descripcion' => '1 UNIDAD DISPONIBLE.',
                    'estado_id' => '1',
                ],
                [
                    'nombre' => 'LABRET OPALO MORADO',
                    'material_id' => 1,
                    'precio' => 13000,
                    'stock' => 1,
                    'imagen' => 'labret_opalo_morado.jpg',
                    'descripcion' => '1 UNIDAD DISPONIBLE.',
                    'estado_id' => '1',
                ],
                [
                    'nombre' => 'NO PULL',
                    'material_id' => 1,
                    'precio' => 600,
                    'stock' => 5,
                    'imagen' => 'no_pull.jpg',
                    'descripcion' => '5 UNIDADES DISPONIBLES.',
                    'estado_id' => '1',
                ],
                [
                    'nombre' => 'NOSTRIL RECTO',
                    'material_id' => 1,
                    'precio' => 1800,
                    'stock' => 35,
                    'imagen' => 'nostril_recto.jpg',
                    'descripcion' => '35 UNIDADES DISPONIBLES.',
                    'estado_id' => '1',
                ],
                [
                    'nombre' => 'NOSTRIL EN L',
                    'material_id' => 1,
                    'precio' => 1800,
                    'stock' => 51,
                    'imagen' => 'nostril_en_l.jpg',
                    'descripcion' => '51 UNIDADES DISPONIBLES.',
                    'estado_id' => '1',
                ],
                [
                    'nombre' => 'NOSTRIL PIEDRA INCRUSTADA DORADO',
                    'material_id' => 1,
                    'precio' => 2000,
                    'stock' => 6,
                    'imagen' => 'nostril_piedra_incrustada_dorado.jpg',
                    'descripcion' => '6 UNIDADES DISPONIBLES.',
                    'estado_id' => '1',
                ],
                [
                    'nombre' => 'NOSTRIL PIEDRA INCRUSTADA DORADO- VERDE',
                    'material_id' => 1,
                    'precio' => 2300,
                    'stock' => 4,
                    'imagen' => 'nostril_piedra_incrustada_dorado_verde.jpg',
                    'descripcion' => '4 UNIDADES DISPONIBLES.',
                    'estado_id' => '1',
                ],
                [
                    'nombre' => 'NOSTRIL CURVO',
                    'material_id' => 1,
                    'precio' => 1200,
                    'stock' => 33,
                    'imagen' => 'nostril_curvo.jpg',
                    'descripcion' => '33 UNIDADES DISPONIBLES.',
                    'estado_id' => '1',
                ],
                [
                    'nombre' => 'NOSTRIL PIEDRA OPALO EN L',
                    'material_id' => 1,
                    'precio' => 9000,
                    'stock' => 16,
                    'imagen' => 'nostril_piedra_opalo_en_l.jpg',
                    'descripcion' => '16 UNIDADES DISPONIBLES.',
                    'estado_id' => '1',
                ],
                [
                    'nombre' => 'SURFACE OPALO AZUL',
                    'material_id' => 1,
                    'precio' => 45000,
                    'stock' => 1,
                    'imagen' => 'surface_opalo_azul.jpg',
                    'descripcion' => '1 UNIDAD DISPONIBLE.',
                    'estado_id' => '1',
                ],
            ]

        );
    }
}
