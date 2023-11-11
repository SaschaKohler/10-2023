<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ZipCodesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run(): void
    {


        \DB::table('zip_codes')->delete();

        \DB::table('zip_codes')->insert(array (
            0 =>
            array (
                'id' => 1,
                'zip' => '1000',
                'location' => 'Wien',
            ),
            1 =>
            array (
                'id' => 2,
                'zip' => '1004',
                'location' => 'Wien',
            ),
            2 =>
            array (
                'id' => 3,
                'zip' => '1006',
                'location' => 'Wien',
            ),
            3 =>
            array (
                'id' => 4,
                'zip' => '1010',
                'location' => 'Wien',
            ),
            4 =>
            array (
                'id' => 5,
                'zip' => '1011',
                'location' => 'Wien Postfach',
            ),
            5 =>
            array (
                'id' => 6,
                'zip' => '1013',
                'location' => 'Wien',
            ),
            6 =>
            array (
                'id' => 7,
                'zip' => '1015',
                'location' => 'Wien',
            ),
            7 =>
            array (
                'id' => 8,
                'zip' => '1016',
                'location' => 'Wien',
            ),
            8 =>
            array (
                'id' => 9,
                'zip' => '1020',
                'location' => 'Wien',
            ),
            9 =>
            array (
                'id' => 10,
                'zip' => '1021',
                'location' => 'Wien Postfach',
            ),
            10 =>
            array (
                'id' => 11,
                'zip' => '1024',
                'location' => 'Wien',
            ),
            11 =>
            array (
                'id' => 12,
                'zip' => '1025',
                'location' => 'Wien',
            ),
            12 =>
            array (
                'id' => 13,
                'zip' => '1029',
                'location' => 'Wien',
            ),
            13 =>
            array (
                'id' => 14,
                'zip' => '1030',
                'location' => 'Wien',
            ),
            14 =>
            array (
                'id' => 15,
                'zip' => '1031',
                'location' => 'Wien Postfach',
            ),
            15 =>
            array (
                'id' => 16,
                'zip' => '1032',
                'location' => 'Wien',
            ),
            16 =>
            array (
                'id' => 17,
                'zip' => '1035',
                'location' => 'Wien',
            ),
            17 =>
            array (
                'id' => 18,
                'zip' => '1037',
                'location' => 'Wien',
            ),
            18 =>
            array (
                'id' => 19,
                'zip' => '1038',
                'location' => 'Wien',
            ),
            19 =>
            array (
                'id' => 20,
                'zip' => '1040',
                'location' => 'Wien',
            ),
            20 =>
            array (
                'id' => 21,
                'zip' => '1041',
                'location' => 'Wien Postfach',
            ),
            21 =>
            array (
                'id' => 22,
                'zip' => '1042',
                'location' => 'Wien',
            ),
            22 =>
            array (
                'id' => 23,
                'zip' => '1043',
                'location' => 'Wien',
            ),
            23 =>
            array (
                'id' => 24,
                'zip' => '1045',
                'location' => 'Wien',
            ),
            24 =>
            array (
                'id' => 25,
                'zip' => '1050',
                'location' => 'Wien',
            ),
            25 =>
            array (
                'id' => 26,
                'zip' => '1051',
                'location' => 'Wien Postfach',
            ),
            26 =>
            array (
                'id' => 27,
                'zip' => '1052',
                'location' => 'Wien',
            ),
            27 =>
            array (
                'id' => 28,
                'zip' => '1053',
                'location' => 'Wien',
            ),
            28 =>
            array (
                'id' => 29,
                'zip' => '1060',
                'location' => 'Wien',
            ),
            29 =>
            array (
                'id' => 30,
                'zip' => '1061',
                'location' => 'Wien Postfach',
            ),
            30 =>
            array (
                'id' => 31,
                'zip' => '1063',
                'location' => 'Wien-VÖPh',
            ),
            31 =>
            array (
                'id' => 32,
                'zip' => '1065',
                'location' => 'Wien',
            ),
            32 =>
            array (
                'id' => 33,
                'zip' => '1070',
                'location' => 'Wien',
            ),
            33 =>
            array (
                'id' => 34,
                'zip' => '1071',
                'location' => 'Wien Postfach',
            ),
            34 =>
            array (
                'id' => 35,
                'zip' => '1072',
                'location' => 'Wien',
            ),
            35 =>
            array (
                'id' => 36,
                'zip' => '1080',
                'location' => 'Wien',
            ),
            36 =>
            array (
                'id' => 37,
                'zip' => '1081',
                'location' => 'Wien Postfach',
            ),
            37 =>
            array (
                'id' => 38,
                'zip' => '1082',
                'location' => 'Wien',
            ),
            38 =>
            array (
                'id' => 39,
                'zip' => '1090',
                'location' => 'Wien',
            ),
            39 =>
            array (
                'id' => 40,
                'zip' => '1091',
                'location' => 'Wien Postfach',
            ),
            40 =>
            array (
                'id' => 41,
                'zip' => '1092',
                'location' => 'Wien',
            ),
            41 =>
            array (
                'id' => 42,
                'zip' => '1095',
                'location' => 'Wien',
            ),
            42 =>
            array (
                'id' => 43,
                'zip' => '1097',
                'location' => 'Wien',
            ),
            43 =>
            array (
                'id' => 44,
                'zip' => '1100',
                'location' => 'Wien',
            ),
            44 =>
            array (
                'id' => 45,
                'zip' => '1101',
                'location' => 'Wien Postfach',
            ),
            45 =>
            array (
                'id' => 46,
                'zip' => '1103',
                'location' => 'Wien',
            ),
            46 =>
            array (
                'id' => 47,
                'zip' => '1104',
                'location' => 'Wien',
            ),
            47 =>
            array (
                'id' => 48,
                'zip' => '1105',
                'location' => 'Wien',
            ),
            48 =>
            array (
                'id' => 49,
                'zip' => '1106',
                'location' => 'Wien',
            ),
            49 =>
            array (
                'id' => 50,
                'zip' => '1107',
                'location' => 'Wien',
            ),
            50 =>
            array (
                'id' => 51,
                'zip' => '1108',
                'location' => 'Wien',
            ),
            51 =>
            array (
                'id' => 52,
                'zip' => '1109',
                'location' => 'Wien',
            ),
            52 =>
            array (
                'id' => 53,
                'zip' => '1110',
                'location' => 'Wien',
            ),
            53 =>
            array (
                'id' => 54,
                'zip' => '1111',
                'location' => 'Wien Postfach',
            ),
            54 =>
            array (
                'id' => 55,
                'zip' => '1114',
                'location' => 'Wien',
            ),
            55 =>
            array (
                'id' => 56,
                'zip' => '1115',
                'location' => 'Wien',
            ),
            56 =>
            array (
                'id' => 57,
                'zip' => '1120',
                'location' => 'Wien',
            ),
            57 =>
            array (
                'id' => 58,
                'zip' => '1121',
                'location' => 'Wien Postfach',
            ),
            58 =>
            array (
                'id' => 59,
                'zip' => '1122',
                'location' => 'Wien',
            ),
            59 =>
            array (
                'id' => 60,
                'zip' => '1124',
                'location' => 'Wien',
            ),
            60 =>
            array (
                'id' => 61,
                'zip' => '1125',
                'location' => 'Wien',
            ),
            61 =>
            array (
                'id' => 62,
                'zip' => '1127',
                'location' => 'Wien',
            ),
            62 =>
            array (
                'id' => 63,
                'zip' => '1128',
                'location' => 'Wien',
            ),
            63 =>
            array (
                'id' => 64,
                'zip' => '1130',
                'location' => 'Wien',
            ),
            64 =>
            array (
                'id' => 65,
                'zip' => '1131',
                'location' => 'Wien Postfach',
            ),
            65 =>
            array (
                'id' => 66,
                'zip' => '1132',
                'location' => 'Wien',
            ),
            66 =>
            array (
                'id' => 67,
                'zip' => '1134',
                'location' => 'Wien',
            ),
            67 =>
            array (
                'id' => 68,
                'zip' => '1136',
                'location' => 'Wien',
            ),
            68 =>
            array (
                'id' => 69,
                'zip' => '1140',
                'location' => 'Wien',
            ),
            69 =>
            array (
                'id' => 70,
                'zip' => '1141',
                'location' => 'Wien Postfach',
            ),
            70 =>
            array (
                'id' => 71,
                'zip' => '1142',
                'location' => 'Wien',
            ),
            71 =>
            array (
                'id' => 72,
                'zip' => '1143',
                'location' => 'Wien',
            ),
            72 =>
            array (
                'id' => 73,
                'zip' => '1147',
                'location' => 'Wien',
            ),
            73 =>
            array (
                'id' => 74,
                'zip' => '1148',
                'location' => 'Wien',
            ),
            74 =>
            array (
                'id' => 75,
                'zip' => '1150',
                'location' => 'Wien',
            ),
            75 =>
            array (
                'id' => 76,
                'zip' => '1151',
                'location' => 'Wien Postfach',
            ),
            76 =>
            array (
                'id' => 77,
                'zip' => '1152',
                'location' => 'Wien',
            ),
            77 =>
            array (
                'id' => 78,
                'zip' => '1153',
                'location' => 'Wien',
            ),
            78 =>
            array (
                'id' => 79,
                'zip' => '1155',
                'location' => 'Wien',
            ),
            79 =>
            array (
                'id' => 80,
                'zip' => '1156',
                'location' => 'Wien',
            ),
            80 =>
            array (
                'id' => 81,
                'zip' => '1160',
                'location' => 'Wien',
            ),
            81 =>
            array (
                'id' => 82,
                'zip' => '1161',
                'location' => 'Wien Postfach',
            ),
            82 =>
            array (
                'id' => 83,
                'zip' => '1163',
                'location' => 'Wien',
            ),
            83 =>
            array (
                'id' => 84,
                'zip' => '1165',
                'location' => 'Wien',
            ),
            84 =>
            array (
                'id' => 85,
                'zip' => '1166',
                'location' => 'Wien',
            ),
            85 =>
            array (
                'id' => 86,
                'zip' => '1170',
                'location' => 'Wien',
            ),
            86 =>
            array (
                'id' => 87,
                'zip' => '1171',
                'location' => 'Wien Postfach',
            ),
            87 =>
            array (
                'id' => 88,
                'zip' => '1172',
                'location' => 'Wien',
            ),
            88 =>
            array (
                'id' => 89,
                'zip' => '1180',
                'location' => 'Wien',
            ),
            89 =>
            array (
                'id' => 90,
                'zip' => '1181',
                'location' => 'Wien Postfach',
            ),
            90 =>
            array (
                'id' => 91,
                'zip' => '1182',
                'location' => 'Wien',
            ),
            91 =>
            array (
                'id' => 92,
                'zip' => '1183',
                'location' => 'Wien',
            ),
            92 =>
            array (
                'id' => 93,
                'zip' => '1190',
                'location' => 'Wien',
            ),
            93 =>
            array (
                'id' => 94,
                'zip' => '1191',
                'location' => 'Wien Postfach',
            ),
            94 =>
            array (
                'id' => 95,
                'zip' => '1192',
                'location' => 'Wien',
            ),
            95 =>
            array (
                'id' => 96,
                'zip' => '1193',
                'location' => 'Wien',
            ),
            96 =>
            array (
                'id' => 97,
                'zip' => '1194',
                'location' => 'Wien',
            ),
            97 =>
            array (
                'id' => 98,
                'zip' => '1195',
                'location' => 'Wien',
            ),
            98 =>
            array (
                'id' => 99,
                'zip' => '1196',
                'location' => 'Wien',
            ),
            99 =>
            array (
                'id' => 100,
                'zip' => '1200',
                'location' => 'Wien',
            ),
            100 =>
            array (
                'id' => 101,
                'zip' => '1201',
                'location' => 'Wien Postfach',
            ),
            101 =>
            array (
                'id' => 102,
                'zip' => '1203',
                'location' => 'Wien',
            ),
            102 =>
            array (
                'id' => 103,
                'zip' => '1205',
                'location' => 'Wien',
            ),
            103 =>
            array (
                'id' => 104,
                'zip' => '1206',
                'location' => 'Wien',
            ),
            104 =>
            array (
                'id' => 105,
                'zip' => '1208',
                'location' => 'Wien',
            ),
            105 =>
            array (
                'id' => 106,
                'zip' => '1210',
                'location' => 'Wien',
            ),
            106 =>
            array (
                'id' => 107,
                'zip' => '1211',
                'location' => 'Wien Postfach',
            ),
            107 =>
            array (
                'id' => 108,
                'zip' => '1213',
                'location' => 'Wien',
            ),
            108 =>
            array (
                'id' => 109,
                'zip' => '1215',
                'location' => 'Wien',
            ),
            109 =>
            array (
                'id' => 110,
                'zip' => '1217',
                'location' => 'Wien',
            ),
            110 =>
            array (
                'id' => 111,
                'zip' => '1218',
                'location' => 'Wien',
            ),
            111 =>
            array (
                'id' => 112,
                'zip' => '1219',
                'location' => 'Wien',
            ),
            112 =>
            array (
                'id' => 113,
                'zip' => '1220',
                'location' => 'Wien',
            ),
            113 =>
            array (
                'id' => 114,
                'zip' => '1221',
                'location' => 'Wien Postfach',
            ),
            114 =>
            array (
                'id' => 115,
                'zip' => '1222',
                'location' => 'Wien',
            ),
            115 =>
            array (
                'id' => 116,
                'zip' => '1223',
                'location' => 'Wien',
            ),
            116 =>
            array (
                'id' => 117,
                'zip' => '1224',
                'location' => 'Wien',
            ),
            117 =>
            array (
                'id' => 118,
                'zip' => '1225',
                'location' => 'Wien',
            ),
            118 =>
            array (
                'id' => 119,
                'zip' => '1228',
                'location' => 'Wien',
            ),
            119 =>
            array (
                'id' => 120,
                'zip' => '1229',
                'location' => 'Wien',
            ),
            120 =>
            array (
                'id' => 121,
                'zip' => '1230',
                'location' => 'Wien',
            ),
            121 =>
            array (
                'id' => 122,
                'zip' => '1231',
                'location' => 'Wien Postfach',
            ),
            122 =>
            array (
                'id' => 123,
                'zip' => '1233',
                'location' => 'Wien',
            ),
            123 =>
            array (
                'id' => 124,
                'zip' => '1235',
                'location' => 'Wien',
            ),
            124 =>
            array (
                'id' => 125,
                'zip' => '1236',
                'location' => 'Wien',
            ),
            125 =>
            array (
                'id' => 126,
                'zip' => '1238',
                'location' => 'Wien',
            ),
            126 =>
            array (
                'id' => 127,
                'zip' => '1239',
                'location' => 'Wien',
            ),
            127 =>
            array (
                'id' => 128,
                'zip' => '1254',
                'location' => 'Wien',
            ),
            128 =>
            array (
                'id' => 129,
                'zip' => '1300',
                'location' => 'Wien-Flughafen',
            ),
            129 =>
            array (
                'id' => 130,
                'zip' => '1310',
                'location' => 'Wien',
            ),
            130 =>
            array (
                'id' => 131,
                'zip' => '1400',
                'location' => 'Wien-Vereinte Nationen',
            ),
            131 =>
            array (
                'id' => 132,
                'zip' => '1423',
                'location' => 'Wien',
            ),
            132 =>
            array (
                'id' => 133,
                'zip' => '1500',
                'location' => 'UNDOF AUTCON',
            ),
            133 =>
            array (
                'id' => 134,
                'zip' => '1502',
                'location' => 'AUTCON EUFOR',
            ),
            134 =>
            array (
                'id' => 135,
                'zip' => '1503',
                'location' => 'AUTCON KFOR',
            ),
            135 =>
            array (
                'id' => 136,
                'zip' => '1600',
                'location' => 'Wien',
            ),
            136 =>
            array (
                'id' => 137,
                'zip' => '1610',
                'location' => 'Wien',
            ),
            137 =>
            array (
                'id' => 138,
                'zip' => '2000',
                'location' => 'Stockerau',
            ),
            138 =>
            array (
                'id' => 139,
                'zip' => '2002',
                'location' => 'Großmugl',
            ),
            139 =>
            array (
                'id' => 140,
                'zip' => '2003',
                'location' => 'Leitzersdorf',
            ),
            140 =>
            array (
                'id' => 141,
                'zip' => '2004',
                'location' => 'Niederhollabrunn',
            ),
            141 =>
            array (
                'id' => 142,
                'zip' => '2011',
                'location' => 'Sierndorf',
            ),
            142 =>
            array (
                'id' => 143,
                'zip' => '2013',
                'location' => 'Göllersdorf',
            ),
            143 =>
            array (
                'id' => 144,
                'zip' => '2014',
                'location' => 'Breitenwaida',
            ),
            144 =>
            array (
                'id' => 145,
                'zip' => '2020',
                'location' => 'Hollabrunn',
            ),
            145 =>
            array (
                'id' => 146,
                'zip' => '2022',
                'location' => 'Immendorf',
            ),
            146 =>
            array (
                'id' => 147,
                'zip' => '2023',
                'location' => 'Nappersdorf',
            ),
            147 =>
            array (
                'id' => 148,
                'zip' => '2024',
                'location' => 'Mailberg',
            ),
            148 =>
            array (
                'id' => 149,
                'zip' => '2031',
                'location' => 'Eggendorf im Thale',
            ),
            149 =>
            array (
                'id' => 150,
                'zip' => '2032',
                'location' => 'Enzersdorf im Thale',
            ),
            150 =>
            array (
                'id' => 151,
                'zip' => '2033',
                'location' => 'Kammersdorf',
            ),
            151 =>
            array (
                'id' => 152,
                'zip' => '2034',
                'location' => 'Großharras',
            ),
            152 =>
            array (
                'id' => 153,
                'zip' => '2041',
                'location' => 'Wullersdorf',
            ),
            153 =>
            array (
                'id' => 154,
                'zip' => '2042',
                'location' => 'Guntersdorf',
            ),
            154 =>
            array (
                'id' => 155,
                'zip' => '2051',
                'location' => 'Zellerndorf',
            ),
            155 =>
            array (
                'id' => 156,
                'zip' => '2052',
                'location' => 'Pernersdorf-Pfaffendorf',
            ),
            156 =>
            array (
                'id' => 157,
                'zip' => '2053',
                'location' => 'Jetzelsdorf',
            ),
            157 =>
            array (
                'id' => 158,
                'zip' => '2054',
                'location' => 'Haugsdorf',
            ),
            158 =>
            array (
                'id' => 159,
                'zip' => '2061',
                'location' => 'Hadres',
            ),
            159 =>
            array (
                'id' => 160,
                'zip' => '2062',
                'location' => 'Seefeld-Großkadolz',
            ),
            160 =>
            array (
                'id' => 161,
                'zip' => '2063',
                'location' => 'Zwingendorf',
            ),
            161 =>
            array (
                'id' => 162,
                'zip' => '2064',
                'location' => 'Wulzeshofen',
            ),
            162 =>
            array (
                'id' => 163,
                'zip' => '2070',
                'location' => 'Retz',
            ),
            163 =>
            array (
                'id' => 164,
                'zip' => '2073',
                'location' => 'Schrattenthal',
            ),
            164 =>
            array (
                'id' => 165,
                'zip' => '2074',
                'location' => 'Unterretzbach',
            ),
            165 =>
            array (
                'id' => 166,
                'zip' => '2081',
                'location' => 'Niederfladnitz',
            ),
            166 =>
            array (
                'id' => 167,
                'zip' => '2082',
                'location' => 'Hardegg',
            ),
            167 =>
            array (
                'id' => 168,
                'zip' => '2083',
                'location' => 'Pleißing',
            ),
            168 =>
            array (
                'id' => 169,
                'zip' => '2084',
                'location' => 'Weitersfeld',
            ),
            169 =>
            array (
                'id' => 170,
                'zip' => '2091',
                'location' => 'Langau',
            ),
            170 =>
            array (
                'id' => 171,
                'zip' => '2092',
                'location' => 'Riegersburg',
            ),
            171 =>
            array (
                'id' => 172,
                'zip' => '2093',
                'location' => 'Geras',
            ),
            172 =>
            array (
                'id' => 173,
                'zip' => '2094',
                'location' => 'Zissersdorf',
            ),
            173 =>
            array (
                'id' => 174,
                'zip' => '2095',
                'location' => 'Drosendorf',
            ),
            174 =>
            array (
                'id' => 175,
                'zip' => '2100',
                'location' => 'Korneuburg',
            ),
            175 =>
            array (
                'id' => 176,
                'zip' => '2102',
                'location' => 'Bisamberg',
            ),
            176 =>
            array (
                'id' => 177,
                'zip' => '2103',
                'location' => 'Langenzersdorf',
            ),
            177 =>
            array (
                'id' => 178,
                'zip' => '2104',
                'location' => 'Spillern',
            ),
            178 =>
            array (
                'id' => 179,
                'zip' => '2105',
                'location' => 'Oberrohrbach',
            ),
            179 =>
            array (
                'id' => 180,
                'zip' => '2106',
                'location' => 'Klein-Engersdorf',
            ),
            180 =>
            array (
                'id' => 181,
                'zip' => '2111',
                'location' => 'Rückersdorf-Harmannsdorf',
            ),
            181 =>
            array (
                'id' => 182,
                'zip' => '2112',
                'location' => 'Würnitz',
            ),
            182 =>
            array (
                'id' => 183,
                'zip' => '2113',
                'location' => 'Karnabrunn',
            ),
            183 =>
            array (
                'id' => 184,
                'zip' => '2114',
                'location' => 'Großrußbach',
            ),
            184 =>
            array (
                'id' => 185,
                'zip' => '2115',
                'location' => 'Ernstbrunn',
            ),
            185 =>
            array (
                'id' => 186,
                'zip' => '2116',
                'location' => 'Niederleis',
            ),
            186 =>
            array (
                'id' => 187,
                'zip' => '2120',
                'location' => 'Wolkersdorf im Weinviertel',
            ),
            187 =>
            array (
                'id' => 188,
                'zip' => '2122',
                'location' => 'Ulrichskirchen',
            ),
            188 =>
            array (
                'id' => 189,
                'zip' => '2123',
                'location' => 'Schleinbach',
            ),
            189 =>
            array (
                'id' => 190,
                'zip' => '2124',
                'location' => 'Niederkreuzstetten',
            ),
            190 =>
            array (
                'id' => 191,
                'zip' => '2125',
                'location' => 'Neubau',
            ),
            191 =>
            array (
                'id' => 192,
                'zip' => '2126',
                'location' => 'Ladendorf',
            ),
            192 =>
            array (
                'id' => 193,
                'zip' => '2127',
                'location' => 'Hautzendorf',
            ),
            193 =>
            array (
                'id' => 194,
                'zip' => '2128',
                'location' => 'Wolfpassing',
            ),
            194 =>
            array (
                'id' => 195,
                'zip' => '2130',
                'location' => 'Mistelbach',
            ),
            195 =>
            array (
                'id' => 196,
                'zip' => '2132',
                'location' => 'Frättingsdorf',
            ),
            196 =>
            array (
                'id' => 197,
                'zip' => '2133',
                'location' => 'Loosdorf',
            ),
            197 =>
            array (
                'id' => 198,
                'zip' => '2134',
                'location' => 'Staatz-Kautendorf',
            ),
            198 =>
            array (
                'id' => 199,
                'zip' => '2135',
                'location' => 'Neudorf im Weinviertel',
            ),
            199 =>
            array (
                'id' => 200,
                'zip' => '2136',
                'location' => 'Laa an der Thaya',
            ),
            200 =>
            array (
                'id' => 201,
                'zip' => '2141',
                'location' => 'Ameis',
            ),
            201 =>
            array (
                'id' => 202,
                'zip' => '2143',
                'location' => 'Großkrut',
            ),
            202 =>
            array (
                'id' => 203,
                'zip' => '2144',
                'location' => 'Altlichtenwarth',
            ),
            203 =>
            array (
                'id' => 204,
                'zip' => '2145',
                'location' => 'Hausbrunn',
            ),
            204 =>
            array (
                'id' => 205,
                'zip' => '2151',
                'location' => 'Asparn an der Zaya',
            ),
            205 =>
            array (
                'id' => 206,
                'zip' => '2152',
                'location' => 'Gnadendorf',
            ),
            206 =>
            array (
                'id' => 207,
                'zip' => '2153',
                'location' => 'Stronsdorf',
            ),
            207 =>
            array (
                'id' => 208,
                'zip' => '2154',
                'location' => 'Unterstinkenbrunn',
            ),
            208 =>
            array (
                'id' => 209,
                'zip' => '2161',
                'location' => 'Poysbrunn',
            ),
            209 =>
            array (
                'id' => 210,
                'zip' => '2162',
                'location' => 'Falkenstein',
            ),
            210 =>
            array (
                'id' => 211,
                'zip' => '2163',
                'location' => 'Ottenthal',
            ),
            211 =>
            array (
                'id' => 212,
                'zip' => '2164',
                'location' => 'Wildendürnbach',
            ),
            212 =>
            array (
                'id' => 213,
                'zip' => '2165',
                'location' => 'Drasenhofen',
            ),
            213 =>
            array (
                'id' => 214,
                'zip' => '2170',
                'location' => 'Poysdorf',
            ),
            214 =>
            array (
                'id' => 215,
                'zip' => '2171',
                'location' => 'Herrnbaumgarten',
            ),
            215 =>
            array (
                'id' => 216,
                'zip' => '2172',
                'location' => 'Schrattenberg',
            ),
            216 =>
            array (
                'id' => 217,
                'zip' => '2181',
                'location' => 'Dobermannsdorf',
            ),
            217 =>
            array (
                'id' => 218,
                'zip' => '2182',
                'location' => 'Palterndorf',
            ),
            218 =>
            array (
                'id' => 219,
                'zip' => '2183',
                'location' => 'Neusiedl an der Zaya',
            ),
            219 =>
            array (
                'id' => 220,
                'zip' => '2184',
                'location' => 'Hauskirchen',
            ),
            220 =>
            array (
                'id' => 221,
                'zip' => '2185',
                'location' => 'Prinzendorf an der Zaya',
            ),
            221 =>
            array (
                'id' => 222,
                'zip' => '2191',
                'location' => 'Gaweinstal',
            ),
            222 =>
            array (
                'id' => 223,
                'zip' => '2192',
                'location' => 'Kettlasbrunn',
            ),
            223 =>
            array (
                'id' => 224,
                'zip' => '2193',
                'location' => 'Wilfersdorf',
            ),
            224 =>
            array (
                'id' => 225,
                'zip' => '2201',
                'location' => 'Gerasdorf',
            ),
            225 =>
            array (
                'id' => 226,
                'zip' => '2202',
                'location' => 'Enzersfeld',
            ),
            226 =>
            array (
                'id' => 227,
                'zip' => '2203',
                'location' => 'Großebersdorf',
            ),
            227 =>
            array (
                'id' => 228,
                'zip' => '2211',
                'location' => 'Pillichsdorf',
            ),
            228 =>
            array (
                'id' => 229,
                'zip' => '2212',
                'location' => 'Großengersdorf',
            ),
            229 =>
            array (
                'id' => 230,
                'zip' => '2213',
                'location' => 'Bockfließ',
            ),
            230 =>
            array (
                'id' => 231,
                'zip' => '2214',
                'location' => 'Auersthal',
            ),
            231 =>
            array (
                'id' => 232,
                'zip' => '2215',
                'location' => 'Raggendorf',
            ),
            232 =>
            array (
                'id' => 233,
                'zip' => '2221',
                'location' => 'Groß Schweinbarth',
            ),
            233 =>
            array (
                'id' => 234,
                'zip' => '2222',
                'location' => 'Bad Pirawarth',
            ),
            234 =>
            array (
                'id' => 235,
                'zip' => '2223',
                'location' => 'Hohenruppersdorf',
            ),
            235 =>
            array (
                'id' => 236,
                'zip' => '2224',
                'location' => 'Obersulz',
            ),
            236 =>
            array (
                'id' => 237,
                'zip' => '2225',
                'location' => 'Zistersdorf',
            ),
            237 =>
            array (
                'id' => 238,
                'zip' => '2230',
                'location' => 'Gänserndorf',
            ),
            238 =>
            array (
                'id' => 239,
                'zip' => '2231',
                'location' => 'Strasshof an der Nordbahn',
            ),
            239 =>
            array (
                'id' => 240,
                'zip' => '2232',
                'location' => 'Deutsch Wagram',
            ),
            240 =>
            array (
                'id' => 241,
                'zip' => '2241',
                'location' => 'Schönkirchen',
            ),
            241 =>
            array (
                'id' => 242,
                'zip' => '2242',
                'location' => 'Prottes',
            ),
            242 =>
            array (
                'id' => 243,
                'zip' => '2243',
                'location' => 'Matzen',
            ),
            243 =>
            array (
                'id' => 244,
                'zip' => '2244',
                'location' => 'Spannberg',
            ),
            244 =>
            array (
                'id' => 245,
                'zip' => '2245',
                'location' => 'Velm-Götzendorf',
            ),
            245 =>
            array (
                'id' => 246,
                'zip' => '2251',
                'location' => 'Ebenthal',
            ),
            246 =>
            array (
                'id' => 247,
                'zip' => '2252',
                'location' => 'Ollersdorf',
            ),
            247 =>
            array (
                'id' => 248,
                'zip' => '2253',
                'location' => 'Weikendorf',
            ),
            248 =>
            array (
                'id' => 249,
                'zip' => '2261',
                'location' => 'Angern an der March',
            ),
            249 =>
            array (
                'id' => 250,
                'zip' => '2262',
                'location' => 'Stillfried',
            ),
            250 =>
            array (
                'id' => 251,
                'zip' => '2263',
                'location' => 'Dürnkrut',
            ),
            251 =>
            array (
                'id' => 252,
                'zip' => '2264',
                'location' => 'Jedenspeigen',
            ),
            252 =>
            array (
                'id' => 253,
                'zip' => '2265',
                'location' => 'Drösing',
            ),
            253 =>
            array (
                'id' => 254,
                'zip' => '2272',
                'location' => 'Niederabsdorf',
            ),
            254 =>
            array (
                'id' => 255,
                'zip' => '2273',
                'location' => 'Hohenau an der March',
            ),
            255 =>
            array (
                'id' => 256,
                'zip' => '2274',
                'location' => 'Rabensburg',
            ),
            256 =>
            array (
                'id' => 257,
                'zip' => '2275',
                'location' => 'Bernhardsthal',
            ),
            257 =>
            array (
                'id' => 258,
                'zip' => '2276',
                'location' => 'Reintal',
            ),
            258 =>
            array (
                'id' => 259,
                'zip' => '2280',
                'location' => 'Glinzendorf',
            ),
            259 =>
            array (
                'id' => 260,
                'zip' => '2281',
                'location' => 'Raasdorf',
            ),
            260 =>
            array (
                'id' => 261,
                'zip' => '2282',
                'location' => 'Markgrafneusiedl',
            ),
            261 =>
            array (
                'id' => 262,
                'zip' => '2283',
                'location' => 'Obersiebenbrunn',
            ),
            262 =>
            array (
                'id' => 263,
                'zip' => '2284',
                'location' => 'Untersiebenbrunn',
            ),
            263 =>
            array (
                'id' => 264,
                'zip' => '2285',
                'location' => 'Leopoldsdorf im Marchfelde',
            ),
            264 =>
            array (
                'id' => 265,
                'zip' => '2286',
                'location' => 'Haringsee',
            ),
            265 =>
            array (
                'id' => 266,
                'zip' => '2291',
                'location' => 'Lassee',
            ),
            266 =>
            array (
                'id' => 267,
                'zip' => '2292',
                'location' => 'Engelhartstetten',
            ),
            267 =>
            array (
                'id' => 268,
                'zip' => '2293',
                'location' => 'Marchegg Stadt',
            ),
            268 =>
            array (
                'id' => 269,
                'zip' => '2294',
                'location' => 'Marchegg Bahnhof',
            ),
            269 =>
            array (
                'id' => 270,
                'zip' => '2295',
                'location' => 'Oberweiden',
            ),
            270 =>
            array (
                'id' => 271,
                'zip' => '2301',
                'location' => 'Groß-Enzersdorf',
            ),
            271 =>
            array (
                'id' => 272,
                'zip' => '2304',
                'location' => 'Orth an der Donau',
            ),
            272 =>
            array (
                'id' => 273,
                'zip' => '2305',
                'location' => 'Eckartsau',
            ),
            273 =>
            array (
                'id' => 274,
                'zip' => '2320',
                'location' => 'Schwechat',
            ),
            274 =>
            array (
                'id' => 275,
                'zip' => '2322',
                'location' => 'Zwölfaxing',
            ),
            275 =>
            array (
                'id' => 276,
                'zip' => '2325',
                'location' => 'Himberg',
            ),
            276 =>
            array (
                'id' => 277,
                'zip' => '2326',
                'location' => 'Maria Lanzendorf',
            ),
            277 =>
            array (
                'id' => 278,
                'zip' => '2331',
                'location' => 'Vösendorf',
            ),
            278 =>
            array (
                'id' => 279,
                'zip' => '2332',
                'location' => 'Hennersdorf',
            ),
            279 =>
            array (
                'id' => 280,
                'zip' => '2333',
                'location' => 'Leopoldsdorf',
            ),
            280 =>
            array (
                'id' => 281,
                'zip' => '2334',
                'location' => 'Vösendorf',
            ),
            281 =>
            array (
                'id' => 282,
                'zip' => '2340',
                'location' => 'Mödling',
            ),
            282 =>
            array (
                'id' => 283,
                'zip' => '2344',
                'location' => 'Maria Enzersdorf',
            ),
            283 =>
            array (
                'id' => 284,
                'zip' => '2345',
                'location' => 'Brunn am Gebirge',
            ),
            284 =>
            array (
                'id' => 285,
                'zip' => '2346',
                'location' => 'Maria Enzersdorf-Südstadt',
            ),
            285 =>
            array (
                'id' => 286,
                'zip' => '2348',
                'location' => 'Mödling',
            ),
            286 =>
            array (
                'id' => 287,
                'zip' => '2349',
                'location' => 'Mödling',
            ),
            287 =>
            array (
                'id' => 288,
                'zip' => '2351',
                'location' => 'Wiener Neudorf',
            ),
            288 =>
            array (
                'id' => 289,
                'zip' => '2352',
                'location' => 'Gumpoldskirchen',
            ),
            289 =>
            array (
                'id' => 290,
                'zip' => '2353',
                'location' => 'Guntramsdorf',
            ),
            290 =>
            array (
                'id' => 291,
                'zip' => '2355',
                'location' => 'Wiener Neudorf',
            ),
            291 =>
            array (
                'id' => 292,
                'zip' => '2356',
                'location' => 'Wiener Neudorf',
            ),
            292 =>
            array (
                'id' => 293,
                'zip' => '2361',
                'location' => 'Laxenburg',
            ),
            293 =>
            array (
                'id' => 294,
                'zip' => '2362',
                'location' => 'Biedermannsdorf',
            ),
            294 =>
            array (
                'id' => 295,
                'zip' => '2371',
                'location' => 'Hinterbrühl',
            ),
            295 =>
            array (
                'id' => 296,
                'zip' => '2372',
                'location' => 'Gießhübl',
            ),
            296 =>
            array (
                'id' => 297,
                'zip' => '2380',
                'location' => 'Perchtoldsdorf',
            ),
            297 =>
            array (
                'id' => 298,
                'zip' => '2381',
                'location' => 'Laab im Walde',
            ),
            298 =>
            array (
                'id' => 299,
                'zip' => '2384',
                'location' => 'Breitenfurt bei Wien',
            ),
            299 =>
            array (
                'id' => 300,
                'zip' => '2391',
                'location' => 'Kaltenleutgeben',
            ),
            300 =>
            array (
                'id' => 301,
                'zip' => '2392',
                'location' => 'Sulz im Wienerwald',
            ),
            301 =>
            array (
                'id' => 302,
                'zip' => '2393',
                'location' => 'Sittendorf',
            ),
            302 =>
            array (
                'id' => 303,
                'zip' => '2401',
                'location' => 'Fischamend',
            ),
            303 =>
            array (
                'id' => 304,
                'zip' => '2402',
                'location' => 'Maria Ellend',
            ),
            304 =>
            array (
                'id' => 305,
                'zip' => '2403',
                'location' => 'Regelsbrunn',
            ),
            305 =>
            array (
                'id' => 306,
                'zip' => '2404',
                'location' => 'Petronell',
            ),
            306 =>
            array (
                'id' => 307,
                'zip' => '2405',
                'location' => 'Bad Deutsch Altenburg',
            ),
            307 =>
            array (
                'id' => 308,
                'zip' => '2410',
                'location' => 'Hainburg an der Donau',
            ),
            308 =>
            array (
                'id' => 309,
                'zip' => '2412',
                'location' => 'Wolfsthal',
            ),
            309 =>
            array (
                'id' => 310,
                'zip' => '2413',
                'location' => 'Berg',
            ),
            310 =>
            array (
                'id' => 311,
                'zip' => '2421',
                'location' => 'Kittsee',
            ),
            311 =>
            array (
                'id' => 312,
                'zip' => '2422',
                'location' => 'Pama',
            ),
            312 =>
            array (
                'id' => 313,
                'zip' => '2423',
                'location' => 'Deutsch Jahrndorf',
            ),
            313 =>
            array (
                'id' => 314,
                'zip' => '2424',
                'location' => 'Zurndorf',
            ),
            314 =>
            array (
                'id' => 315,
                'zip' => '2425',
                'location' => 'Nickelsdorf',
            ),
            315 =>
            array (
                'id' => 316,
                'zip' => '2431',
                'location' => 'Kleinneusiedl',
            ),
            316 =>
            array (
                'id' => 317,
                'zip' => '2432',
                'location' => 'Schwadorf',
            ),
            317 =>
            array (
                'id' => 318,
                'zip' => '2433',
                'location' => 'Margarethen am Moos',
            ),
            318 =>
            array (
                'id' => 319,
                'zip' => '2434',
                'location' => 'Götzendorf an der Leitha',
            ),
            319 =>
            array (
                'id' => 320,
                'zip' => '2435',
                'location' => 'Ebergassing',
            ),
            320 =>
            array (
                'id' => 321,
                'zip' => '2440',
                'location' => 'Gramatneusiedl',
            ),
            321 =>
            array (
                'id' => 322,
                'zip' => '2441',
                'location' => 'Mitterndorf an der Fischa',
            ),
            322 =>
            array (
                'id' => 323,
                'zip' => '2442',
                'location' => 'Unterwaltersdorf',
            ),
            323 =>
            array (
                'id' => 324,
                'zip' => '2443',
                'location' => 'Deutsch-Brodersdorf',
            ),
            324 =>
            array (
                'id' => 325,
                'zip' => '2444',
                'location' => 'Seibersdorf',
            ),
            325 =>
            array (
                'id' => 326,
                'zip' => '2445',
                'location' => 'Leithaprodersdorf',
            ),
            326 =>
            array (
                'id' => 327,
                'zip' => '2451',
                'location' => 'Hof am Leithaberge',
            ),
            327 =>
            array (
                'id' => 328,
                'zip' => '2452',
                'location' => 'Mannersdorf am Leithagebirge',
            ),
            328 =>
            array (
                'id' => 329,
                'zip' => '2453',
                'location' => 'Sommerein',
            ),
            329 =>
            array (
                'id' => 330,
                'zip' => '2454',
                'location' => 'Trautmannsdorf an der Leitha',
            ),
            330 =>
            array (
                'id' => 331,
                'zip' => '2460',
                'location' => 'Bruck an der Leitha',
            ),
            331 =>
            array (
                'id' => 332,
                'zip' => '2462',
                'location' => 'Wilfleinsdorf',
            ),
            332 =>
            array (
                'id' => 333,
                'zip' => '2463',
                'location' => 'Stixneusiedl',
            ),
            333 =>
            array (
                'id' => 334,
                'zip' => '2464',
                'location' => 'Göttlesbrunn',
            ),
            334 =>
            array (
                'id' => 335,
                'zip' => '2465',
                'location' => 'Höflein',
            ),
            335 =>
            array (
                'id' => 336,
                'zip' => '2471',
                'location' => 'Rohrau',
            ),
            336 =>
            array (
                'id' => 337,
                'zip' => '2472',
                'location' => 'Prellenkirchen',
            ),
            337 =>
            array (
                'id' => 338,
                'zip' => '2473',
                'location' => 'Potzneusiedl',
            ),
            338 =>
            array (
                'id' => 339,
                'zip' => '2474',
                'location' => 'Gattendorf',
            ),
            339 =>
            array (
                'id' => 340,
                'zip' => '2475',
                'location' => 'Neudorf',
            ),
            340 =>
            array (
                'id' => 341,
                'zip' => '2481',
                'location' => 'Achau',
            ),
            341 =>
            array (
                'id' => 342,
                'zip' => '2482',
                'location' => 'Münchendorf',
            ),
            342 =>
            array (
                'id' => 343,
                'zip' => '2483',
                'location' => 'Ebreichsdorf',
            ),
            343 =>
            array (
                'id' => 344,
                'zip' => '2484',
                'location' => 'Weigelsdorf, Fischa',
            ),
            344 =>
            array (
                'id' => 345,
                'zip' => '2485',
                'location' => 'Wampersdorf',
            ),
            345 =>
            array (
                'id' => 346,
                'zip' => '2486',
                'location' => 'Pottendorf',
            ),
            346 =>
            array (
                'id' => 347,
                'zip' => '2490',
                'location' => 'Ebenfurth',
            ),
            347 =>
            array (
                'id' => 348,
                'zip' => '2491',
                'location' => 'Neufeld an der Leitha',
            ),
            348 =>
            array (
                'id' => 349,
                'zip' => '2492',
                'location' => 'Eggendorf',
            ),
            349 =>
            array (
                'id' => 350,
                'zip' => '2493',
                'location' => 'Lichtenwörth-Nadelburg',
            ),
            350 =>
            array (
                'id' => 351,
                'zip' => '2500',
                'location' => 'Baden',
            ),
            351 =>
            array (
                'id' => 352,
                'zip' => '2504',
                'location' => 'Sooß',
            ),
            352 =>
            array (
                'id' => 353,
                'zip' => '2505',
                'location' => 'Baden-Leesdorf',
            ),
            353 =>
            array (
                'id' => 354,
                'zip' => '2511',
                'location' => 'Pfaffstätten',
            ),
            354 =>
            array (
                'id' => 355,
                'zip' => '2512',
                'location' => 'Tribuswinkel',
            ),
            355 =>
            array (
                'id' => 356,
                'zip' => '2513',
                'location' => 'Möllersdorf',
            ),
            356 =>
            array (
                'id' => 357,
                'zip' => '2514',
                'location' => 'Traiskirchen',
            ),
            357 =>
            array (
                'id' => 358,
                'zip' => '2521',
                'location' => 'Trumau',
            ),
            358 =>
            array (
                'id' => 359,
                'zip' => '2522',
                'location' => 'Oberwaltersdorf',
            ),
            359 =>
            array (
                'id' => 360,
                'zip' => '2523',
                'location' => 'Tattendorf',
            ),
            360 =>
            array (
                'id' => 361,
                'zip' => '2524',
                'location' => 'Teesdorf',
            ),
            361 =>
            array (
                'id' => 362,
                'zip' => '2525',
                'location' => 'Günselsdorf',
            ),
            362 =>
            array (
                'id' => 363,
                'zip' => '2531',
                'location' => 'Gaaden',
            ),
            363 =>
            array (
                'id' => 364,
                'zip' => '2532',
                'location' => 'Heiligenkreuz im Wienerwald',
            ),
            364 =>
            array (
                'id' => 365,
                'zip' => '2533',
                'location' => 'Klausen-Leopoldsdorf',
            ),
            365 =>
            array (
                'id' => 366,
                'zip' => '2534',
                'location' => 'Alland',
            ),
            366 =>
            array (
                'id' => 367,
                'zip' => '2540',
                'location' => 'Bad Vöslau',
            ),
            367 =>
            array (
                'id' => 368,
                'zip' => '2542',
                'location' => 'Kottingbrunn',
            ),
            368 =>
            array (
                'id' => 369,
                'zip' => '2544',
                'location' => 'Leobersdorf',
            ),
            369 =>
            array (
                'id' => 370,
                'zip' => '2551',
                'location' => 'Enzesfeld-Lindabrunn',
            ),
            370 =>
            array (
                'id' => 371,
                'zip' => '2552',
                'location' => 'Hirtenberg',
            ),
            371 =>
            array (
                'id' => 372,
                'zip' => '2560',
                'location' => 'Berndorf',
            ),
            372 =>
            array (
                'id' => 373,
                'zip' => '2561',
                'location' => 'Hernstein',
            ),
            373 =>
            array (
                'id' => 374,
                'zip' => '2563',
                'location' => 'Pottenstein',
            ),
            374 =>
            array (
                'id' => 375,
                'zip' => '2564',
                'location' => 'Weissenbach an der Triesting',
            ),
            375 =>
            array (
                'id' => 376,
                'zip' => '2565',
                'location' => 'Neuhaus',
            ),
            376 =>
            array (
                'id' => 377,
                'zip' => '2571',
                'location' => 'Altenmarkt-Thenneberg',
            ),
            377 =>
            array (
                'id' => 378,
                'zip' => '2572',
                'location' => 'Kaumberg',
            ),
            378 =>
            array (
                'id' => 379,
                'zip' => '2601',
                'location' => 'Sollenau',
            ),
            379 =>
            array (
                'id' => 380,
                'zip' => '2602',
                'location' => 'Blumau-Neurißhof',
            ),
            380 =>
            array (
                'id' => 381,
                'zip' => '2603',
                'location' => 'Felixdorf',
            ),
            381 =>
            array (
                'id' => 382,
                'zip' => '2604',
                'location' => 'Theresienfeld',
            ),
            382 =>
            array (
                'id' => 383,
                'zip' => '2620',
                'location' => 'Neunkirchen',
            ),
            383 =>
            array (
                'id' => 384,
                'zip' => '2624',
                'location' => 'Breitenau',
            ),
            384 =>
            array (
                'id' => 385,
                'zip' => '2625',
                'location' => 'Schwarzau am Steinfelde',
            ),
            385 =>
            array (
                'id' => 386,
                'zip' => '2630',
                'location' => 'Ternitz',
            ),
            386 =>
            array (
                'id' => 387,
                'zip' => '2631',
                'location' => 'Sieding-Stixenstein',
            ),
            387 =>
            array (
                'id' => 388,
                'zip' => '2632',
                'location' => 'Wimpassing im Schwarzatale',
            ),
            388 =>
            array (
                'id' => 389,
                'zip' => '2640',
                'location' => 'Gloggnitz',
            ),
            389 =>
            array (
                'id' => 390,
                'zip' => '2641',
                'location' => 'Schottwien',
            ),
            390 =>
            array (
                'id' => 391,
                'zip' => '2642',
                'location' => 'Maria Schutz',
            ),
            391 =>
            array (
                'id' => 392,
                'zip' => '2650',
                'location' => 'Payerbach',
            ),
            392 =>
            array (
                'id' => 393,
                'zip' => '2651',
                'location' => 'Reichenau an der Rax',
            ),
            393 =>
            array (
                'id' => 394,
                'zip' => '2654',
                'location' => 'Prein an der Rax',
            ),
            394 =>
            array (
                'id' => 395,
                'zip' => '2661',
                'location' => 'Naßwald',
            ),
            395 =>
            array (
                'id' => 396,
                'zip' => '2662',
                'location' => 'Schwarzau im Gebirge',
            ),
            396 =>
            array (
                'id' => 397,
                'zip' => '2663',
                'location' => 'Rohr im Gebirge',
            ),
            397 =>
            array (
                'id' => 398,
                'zip' => '2671',
                'location' => 'Küb',
            ),
            398 =>
            array (
                'id' => 399,
                'zip' => '2673',
                'location' => 'Breitenstein',
            ),
            399 =>
            array (
                'id' => 400,
                'zip' => '2680',
                'location' => 'Semmering',
            ),
            400 =>
            array (
                'id' => 401,
                'zip' => '2700',
                'location' => 'Wiener Neustadt',
            ),
            401 =>
            array (
                'id' => 402,
                'zip' => '2704',
                'location' => 'Wiener Neustadt',
            ),
            402 =>
            array (
                'id' => 403,
                'zip' => '2705',
                'location' => 'Wiener Neustadt',
            ),
            403 =>
            array (
                'id' => 404,
                'zip' => '2706',
                'location' => 'Wiener Neustadt',
            ),
            404 =>
            array (
                'id' => 405,
                'zip' => '2707',
                'location' => 'Wiener Neustadt',
            ),
            405 =>
            array (
                'id' => 406,
                'zip' => '2721',
                'location' => 'Bad Fischau',
            ),
            406 =>
            array (
                'id' => 407,
                'zip' => '2722',
                'location' => 'Winzendorf',
            ),
            407 =>
            array (
                'id' => 408,
                'zip' => '2723',
                'location' => 'Muthmannsdorf',
            ),
            408 =>
            array (
                'id' => 409,
                'zip' => '2724',
                'location' => 'Hohe Wand-Stollhof',
            ),
            409 =>
            array (
                'id' => 410,
                'zip' => '2731',
                'location' => 'St. Egyden am Steinfeld',
            ),
            410 =>
            array (
                'id' => 411,
                'zip' => '2732',
                'location' => 'Willendorf',
            ),
            411 =>
            array (
                'id' => 412,
                'zip' => '2733',
                'location' => 'Grünbach am Schneeberg',
            ),
            412 =>
            array (
                'id' => 413,
                'zip' => '2734',
                'location' => 'Puchberg am Schneeberg',
            ),
            413 =>
            array (
                'id' => 414,
                'zip' => '2751',
                'location' => 'Steinabrückl',
            ),
            414 =>
            array (
                'id' => 415,
                'zip' => '2752',
                'location' => 'Wöllersdorf',
            ),
            415 =>
            array (
                'id' => 416,
                'zip' => '2753',
                'location' => 'Markt Piesting',
            ),
            416 =>
            array (
                'id' => 417,
                'zip' => '2754',
                'location' => 'Waldegg',
            ),
            417 =>
            array (
                'id' => 418,
                'zip' => '2755',
                'location' => 'Oed',
            ),
            418 =>
            array (
                'id' => 419,
                'zip' => '2761',
                'location' => 'Miesenbach',
            ),
            419 =>
            array (
                'id' => 420,
                'zip' => '2763',
                'location' => 'Pernitz',
            ),
            420 =>
            array (
                'id' => 421,
                'zip' => '2770',
                'location' => 'Gutenstein',
            ),
            421 =>
            array (
                'id' => 422,
                'zip' => '2801',
                'location' => 'Katzelsdorf',
            ),
            422 =>
            array (
                'id' => 423,
                'zip' => '2802',
                'location' => 'Hochwolkersdorf',
            ),
            423 =>
            array (
                'id' => 424,
                'zip' => '2803',
                'location' => 'Schwarzenbach',
            ),
            424 =>
            array (
                'id' => 425,
                'zip' => '2811',
                'location' => 'Wiesmath',
            ),
            425 =>
            array (
                'id' => 426,
                'zip' => '2812',
                'location' => 'Hollenthon',
            ),
            426 =>
            array (
                'id' => 427,
                'zip' => '2813',
                'location' => 'Lichtenegg',
            ),
            427 =>
            array (
                'id' => 428,
                'zip' => '2821',
                'location' => 'Lanzenkirchen',
            ),
            428 =>
            array (
                'id' => 429,
                'zip' => '2822',
                'location' => 'Bad Erlach',
            ),
            429 =>
            array (
                'id' => 430,
                'zip' => '2823',
                'location' => 'Pitten',
            ),
            430 =>
            array (
                'id' => 431,
                'zip' => '2824',
                'location' => 'Seebenstein',
            ),
            431 =>
            array (
                'id' => 432,
                'zip' => '2831',
                'location' => 'Warth',
            ),
            432 =>
            array (
                'id' => 433,
                'zip' => '2832',
                'location' => 'Thernberg',
            ),
            433 =>
            array (
                'id' => 434,
                'zip' => '2833',
                'location' => 'Bromberg',
            ),
            434 =>
            array (
                'id' => 435,
                'zip' => '2840',
                'location' => 'Grimmenstein',
            ),
            435 =>
            array (
                'id' => 436,
                'zip' => '2842',
                'location' => 'Edlitz',
            ),
            436 =>
            array (
                'id' => 437,
                'zip' => '2851',
                'location' => 'Krumbach',
            ),
            437 =>
            array (
                'id' => 438,
                'zip' => '2852',
                'location' => 'Hochneukirchen',
            ),
            438 =>
            array (
                'id' => 439,
                'zip' => '2853',
                'location' => 'Bad Schönau',
            ),
            439 =>
            array (
                'id' => 440,
                'zip' => '2860',
                'location' => 'Kirchschlag in der Buckligen Welt',
            ),
            440 =>
            array (
                'id' => 441,
                'zip' => '2870',
                'location' => 'Aspang',
            ),
            441 =>
            array (
                'id' => 442,
                'zip' => '2871',
                'location' => 'Zöbern',
            ),
            442 =>
            array (
                'id' => 443,
                'zip' => '2872',
                'location' => 'Mönichkirchen',
            ),
            443 =>
            array (
                'id' => 444,
                'zip' => '2873',
                'location' => 'Feistritz am Wechsel',
            ),
            444 =>
            array (
                'id' => 445,
                'zip' => '2880',
                'location' => 'Kirchberg am Wechsel',
            ),
            445 =>
            array (
                'id' => 446,
                'zip' => '2881',
                'location' => 'Trattenbach',
            ),
            446 =>
            array (
                'id' => 447,
                'zip' => '3001',
                'location' => 'Mauerbach',
            ),
            447 =>
            array (
                'id' => 448,
                'zip' => '3002',
                'location' => 'Purkersdorf',
            ),
            448 =>
            array (
                'id' => 449,
                'zip' => '3003',
                'location' => 'Gablitz',
            ),
            449 =>
            array (
                'id' => 450,
                'zip' => '3004',
                'location' => 'Ried am Riederberg',
            ),
            450 =>
            array (
                'id' => 451,
                'zip' => '3011',
                'location' => 'Untertullnerbach',
            ),
            451 =>
            array (
                'id' => 452,
                'zip' => '3012',
                'location' => 'Wolfsgraben',
            ),
            452 =>
            array (
                'id' => 453,
                'zip' => '3013',
                'location' => 'Tullnerbach-Lawies',
            ),
            453 =>
            array (
                'id' => 454,
                'zip' => '3021',
                'location' => 'Pressbaum',
            ),
            454 =>
            array (
                'id' => 455,
                'zip' => '3031',
                'location' => 'Rekawinkel',
            ),
            455 =>
            array (
                'id' => 456,
                'zip' => '3032',
                'location' => 'Eichgraben',
            ),
            456 =>
            array (
                'id' => 457,
                'zip' => '3033',
                'location' => 'Altlengbach',
            ),
            457 =>
            array (
                'id' => 458,
                'zip' => '3034',
                'location' => 'Maria Anzbach',
            ),
            458 =>
            array (
                'id' => 459,
                'zip' => '3040',
                'location' => 'Neulengbach',
            ),
            459 =>
            array (
                'id' => 460,
                'zip' => '3041',
                'location' => 'Asperhofen',
            ),
            460 =>
            array (
                'id' => 461,
                'zip' => '3042',
                'location' => 'Würmla',
            ),
            461 =>
            array (
                'id' => 462,
                'zip' => '3051',
                'location' => 'St. Christophen',
            ),
            462 =>
            array (
                'id' => 463,
                'zip' => '3052',
                'location' => 'Innermanzing',
            ),
            463 =>
            array (
                'id' => 464,
                'zip' => '3053',
                'location' => 'Laaben',
            ),
            464 =>
            array (
                'id' => 465,
                'zip' => '3061',
                'location' => 'Ollersbach',
            ),
            465 =>
            array (
                'id' => 466,
                'zip' => '3062',
                'location' => 'Kirchstetten',
            ),
            466 =>
            array (
                'id' => 467,
                'zip' => '3071',
                'location' => 'Böheimkirchen',
            ),
            467 =>
            array (
                'id' => 468,
                'zip' => '3072',
                'location' => 'Kasten bei Böheimkirchen',
            ),
            468 =>
            array (
                'id' => 469,
                'zip' => '3073',
                'location' => 'Stössing',
            ),
            469 =>
            array (
                'id' => 470,
                'zip' => '3074',
                'location' => 'Michelbach',
            ),
            470 =>
            array (
                'id' => 471,
                'zip' => '3100',
                'location' => 'St. Pölten',
            ),
            471 =>
            array (
                'id' => 472,
                'zip' => '3101',
                'location' => 'St. Pölten Postfach',
            ),
            472 =>
            array (
                'id' => 473,
                'zip' => '3104',
                'location' => 'St. Pölten-Harland',
            ),
            473 =>
            array (
                'id' => 474,
                'zip' => '3105',
                'location' => 'St. Pölten-Radlberg',
            ),
            474 =>
            array (
                'id' => 475,
                'zip' => '3106',
                'location' => 'St. Pölten-Spratzern',
            ),
            475 =>
            array (
                'id' => 476,
                'zip' => '3107',
                'location' => 'St. Pölten-Traisenpark',
            ),
            476 =>
            array (
                'id' => 477,
                'zip' => '3108',
                'location' => 'St. Pölten-Wagram',
            ),
            477 =>
            array (
                'id' => 478,
                'zip' => '3109',
                'location' => 'St. Pölten',
            ),
            478 =>
            array (
                'id' => 479,
                'zip' => '3110',
                'location' => 'Neidling',
            ),
            479 =>
            array (
                'id' => 480,
                'zip' => '3121',
                'location' => 'Karlstetten',
            ),
            480 =>
            array (
                'id' => 481,
                'zip' => '3122',
                'location' => 'Gansbach',
            ),
            481 =>
            array (
                'id' => 482,
                'zip' => '3123',
                'location' => 'Obritzberg',
            ),
            482 =>
            array (
                'id' => 483,
                'zip' => '3124',
                'location' => 'Oberwölbling',
            ),
            483 =>
            array (
                'id' => 484,
                'zip' => '3125',
                'location' => 'Statzendorf',
            ),
            484 =>
            array (
                'id' => 485,
                'zip' => '3130',
                'location' => 'Herzogenburg',
            ),
            485 =>
            array (
                'id' => 486,
                'zip' => '3131',
                'location' => 'Getzersdorf',
            ),
            486 =>
            array (
                'id' => 487,
                'zip' => '3133',
                'location' => 'Traismauer',
            ),
            487 =>
            array (
                'id' => 488,
                'zip' => '3134',
                'location' => 'Nußdorf',
            ),
            488 =>
            array (
                'id' => 489,
                'zip' => '3140',
                'location' => 'Pottenbrunn',
            ),
            489 =>
            array (
                'id' => 490,
                'zip' => '3141',
                'location' => 'Kapelln',
            ),
            490 =>
            array (
                'id' => 491,
                'zip' => '3142',
                'location' => 'Perschling',
            ),
            491 =>
            array (
                'id' => 492,
                'zip' => '3143',
                'location' => 'Pyhra',
            ),
            492 =>
            array (
                'id' => 493,
                'zip' => '3144',
                'location' => 'Wald',
            ),
            493 =>
            array (
                'id' => 494,
                'zip' => '3150',
                'location' => 'Wilhelmsburg',
            ),
            494 =>
            array (
                'id' => 495,
                'zip' => '3151',
                'location' => 'St. Georgen am Steinfelde',
            ),
            495 =>
            array (
                'id' => 496,
                'zip' => '3153',
                'location' => 'Eschenau',
            ),
            496 =>
            array (
                'id' => 497,
                'zip' => '3160',
                'location' => 'Traisen',
            ),
            497 =>
            array (
                'id' => 498,
                'zip' => '3161',
                'location' => 'St. Veit an der Gölsen',
            ),
            498 =>
            array (
                'id' => 499,
                'zip' => '3162',
                'location' => 'Rainfeld',
            ),
            499 =>
            array (
                'id' => 500,
                'zip' => '3163',
                'location' => 'Rohrbach',
            ),
        ));
        \DB::table('zip_codes')->insert(array (
            0 =>
            array (
                'id' => 501,
                'zip' => '3170',
                'location' => 'Hainfeld',
            ),
            1 =>
            array (
                'id' => 502,
                'zip' => '3171',
                'location' => 'Kleinzell-Salzerbad',
            ),
            2 =>
            array (
                'id' => 503,
                'zip' => '3172',
                'location' => 'Ramsau',
            ),
            3 =>
            array (
                'id' => 504,
                'zip' => '3180',
                'location' => 'Lilienfeld',
            ),
            4 =>
            array (
                'id' => 505,
                'zip' => '3182',
                'location' => 'Marktl, Traisental',
            ),
            5 =>
            array (
                'id' => 506,
                'zip' => '3183',
                'location' => 'Freiland',
            ),
            6 =>
            array (
                'id' => 507,
                'zip' => '3184',
                'location' => 'Türnitz',
            ),
            7 =>
            array (
                'id' => 508,
                'zip' => '3192',
                'location' => 'Hohenberg',
            ),
            8 =>
            array (
                'id' => 509,
                'zip' => '3193',
                'location' => 'St. Aegyd am Neuwalde',
            ),
            9 =>
            array (
                'id' => 510,
                'zip' => '3195',
                'location' => 'Kernhof',
            ),
            10 =>
            array (
                'id' => 511,
                'zip' => '3200',
                'location' => 'Ober-Grafendorf',
            ),
            11 =>
            array (
                'id' => 512,
                'zip' => '3202',
                'location' => 'Hofstetten',
            ),
            12 =>
            array (
                'id' => 513,
                'zip' => '3203',
                'location' => 'Rabenstein an der Pielach',
            ),
            13 =>
            array (
                'id' => 514,
                'zip' => '3204',
                'location' => 'Kirchberg an der Pielach',
            ),
            14 =>
            array (
                'id' => 515,
                'zip' => '3205',
                'location' => 'Weinburg',
            ),
            15 =>
            array (
                'id' => 516,
                'zip' => '3211',
                'location' => 'Loich',
            ),
            16 =>
            array (
                'id' => 517,
                'zip' => '3212',
                'location' => 'Schwarzenbach an der Pielach',
            ),
            17 =>
            array (
                'id' => 518,
                'zip' => '3213',
                'location' => 'Frankenfels',
            ),
            18 =>
            array (
                'id' => 519,
                'zip' => '3214',
                'location' => 'Puchenstuben',
            ),
            19 =>
            array (
                'id' => 520,
                'zip' => '3221',
                'location' => 'Gösing an der Mariazellerbahn',
            ),
            20 =>
            array (
                'id' => 521,
                'zip' => '3222',
                'location' => 'Annaberg',
            ),
            21 =>
            array (
                'id' => 522,
                'zip' => '3223',
                'location' => 'Wienerbruck',
            ),
            22 =>
            array (
                'id' => 523,
                'zip' => '3224',
                'location' => 'Mitterbach',
            ),
            23 =>
            array (
                'id' => 524,
                'zip' => '3231',
                'location' => 'St. Margarethen an der Sierning',
            ),
            24 =>
            array (
                'id' => 525,
                'zip' => '3232',
                'location' => 'Bischofstetten',
            ),
            25 =>
            array (
                'id' => 526,
                'zip' => '3233',
                'location' => 'Kilb',
            ),
            26 =>
            array (
                'id' => 527,
                'zip' => '3240',
                'location' => 'Mank',
            ),
            27 =>
            array (
                'id' => 528,
                'zip' => '3241',
                'location' => 'Kirnberg an der Mank',
            ),
            28 =>
            array (
                'id' => 529,
                'zip' => '3242',
                'location' => 'Texing',
            ),
            29 =>
            array (
                'id' => 530,
                'zip' => '3243',
                'location' => 'St. Leonhard am Forst',
            ),
            30 =>
            array (
                'id' => 531,
                'zip' => '3244',
                'location' => 'Ruprechtshofen',
            ),
            31 =>
            array (
                'id' => 532,
                'zip' => '3250',
                'location' => 'Wieselburg',
            ),
            32 =>
            array (
                'id' => 533,
                'zip' => '3251',
                'location' => 'Purgstall',
            ),
            33 =>
            array (
                'id' => 534,
                'zip' => '3252',
                'location' => 'Petzenkirchen',
            ),
            34 =>
            array (
                'id' => 535,
                'zip' => '3253',
                'location' => 'Erlauf',
            ),
            35 =>
            array (
                'id' => 536,
                'zip' => '3254',
                'location' => 'Bergland',
            ),
            36 =>
            array (
                'id' => 537,
                'zip' => '3261',
                'location' => 'Steinakirchen am Forst',
            ),
            37 =>
            array (
                'id' => 538,
                'zip' => '3262',
                'location' => 'Wang',
            ),
            38 =>
            array (
                'id' => 539,
                'zip' => '3263',
                'location' => 'Randegg',
            ),
            39 =>
            array (
                'id' => 540,
                'zip' => '3264',
                'location' => 'Gresten',
            ),
            40 =>
            array (
                'id' => 541,
                'zip' => '3270',
                'location' => 'Scheibbs',
            ),
            41 =>
            array (
                'id' => 542,
                'zip' => '3281',
                'location' => 'Oberndorf an der Melk',
            ),
            42 =>
            array (
                'id' => 543,
                'zip' => '3282',
                'location' => 'St. Georgen an der Leys',
            ),
            43 =>
            array (
                'id' => 544,
                'zip' => '3283',
                'location' => 'St. Anton an der Jeßnitz',
            ),
            44 =>
            array (
                'id' => 545,
                'zip' => '3291',
                'location' => 'Kienberg',
            ),
            45 =>
            array (
                'id' => 546,
                'zip' => '3292',
                'location' => 'Gaming',
            ),
            46 =>
            array (
                'id' => 547,
                'zip' => '3293',
                'location' => 'Lunz am See',
            ),
            47 =>
            array (
                'id' => 548,
                'zip' => '3294',
                'location' => 'Langau',
            ),
            48 =>
            array (
                'id' => 549,
                'zip' => '3295',
                'location' => 'Lackenhof',
            ),
            49 =>
            array (
                'id' => 550,
                'zip' => '3300',
                'location' => 'Amstetten',
            ),
            50 =>
            array (
                'id' => 551,
                'zip' => '3304',
                'location' => 'St. Georgen am Ybbsfelde',
            ),
            51 =>
            array (
                'id' => 552,
                'zip' => '3311',
                'location' => 'Zeillern',
            ),
            52 =>
            array (
                'id' => 553,
                'zip' => '3312',
                'location' => 'Oed',
            ),
            53 =>
            array (
                'id' => 554,
                'zip' => '3313',
                'location' => 'Wallsee',
            ),
            54 =>
            array (
                'id' => 555,
                'zip' => '3314',
                'location' => 'Strengberg',
            ),
            55 =>
            array (
                'id' => 556,
                'zip' => '3321',
                'location' => 'Ardagger',
            ),
            56 =>
            array (
                'id' => 557,
                'zip' => '3322',
                'location' => 'Viehdorf',
            ),
            57 =>
            array (
                'id' => 558,
                'zip' => '3323',
                'location' => 'Neustadtl an der Donau',
            ),
            58 =>
            array (
                'id' => 559,
                'zip' => '3324',
                'location' => 'Euratsfeld',
            ),
            59 =>
            array (
                'id' => 560,
                'zip' => '3325',
                'location' => 'Ferschnitz',
            ),
            60 =>
            array (
                'id' => 561,
                'zip' => '3331',
                'location' => 'Kematen',
            ),
            61 =>
            array (
                'id' => 562,
                'zip' => '3332',
                'location' => 'Rosenau am Sonntagberg',
            ),
            62 =>
            array (
                'id' => 563,
                'zip' => '3333',
                'location' => 'Böhlerwerk',
            ),
            63 =>
            array (
                'id' => 564,
                'zip' => '3334',
                'location' => 'Gaflenz',
            ),
            64 =>
            array (
                'id' => 565,
                'zip' => '3335',
                'location' => 'Weyer',
            ),
            65 =>
            array (
                'id' => 566,
                'zip' => '3340',
                'location' => 'Waidhofen an der Ybbs',
            ),
            66 =>
            array (
                'id' => 567,
                'zip' => '3341',
                'location' => 'Ybbsitz',
            ),
            67 =>
            array (
                'id' => 568,
                'zip' => '3342',
                'location' => 'Opponitz',
            ),
            68 =>
            array (
                'id' => 569,
                'zip' => '3343',
                'location' => 'Hollenstein an der Ybbs',
            ),
            69 =>
            array (
                'id' => 570,
                'zip' => '3344',
                'location' => 'St. Georgen am Reith',
            ),
            70 =>
            array (
                'id' => 571,
                'zip' => '3345',
                'location' => 'Göstling an der Ybbs',
            ),
            71 =>
            array (
                'id' => 572,
                'zip' => '3350',
                'location' => 'Haag',
            ),
            72 =>
            array (
                'id' => 573,
                'zip' => '3351',
                'location' => 'Weistrach',
            ),
            73 =>
            array (
                'id' => 574,
                'zip' => '3352',
                'location' => 'St. Peter in der Au',
            ),
            74 =>
            array (
                'id' => 575,
                'zip' => '3353',
                'location' => 'Seitenstetten',
            ),
            75 =>
            array (
                'id' => 576,
                'zip' => '3354',
                'location' => 'Wolfsbach',
            ),
            76 =>
            array (
                'id' => 577,
                'zip' => '3355',
                'location' => 'Ertl',
            ),
            77 =>
            array (
                'id' => 578,
                'zip' => '3356',
                'location' => 'Biberbach',
            ),
            78 =>
            array (
                'id' => 579,
                'zip' => '3361',
                'location' => 'Aschbach Markt',
            ),
            79 =>
            array (
                'id' => 580,
                'zip' => '3362',
                'location' => 'Mauer-Öhling',
            ),
            80 =>
            array (
                'id' => 581,
                'zip' => '3363',
                'location' => 'Ulmerfeld-Hausmening',
            ),
            81 =>
            array (
                'id' => 582,
                'zip' => '3364',
                'location' => 'Neuhofen an der Ybbs',
            ),
            82 =>
            array (
                'id' => 583,
                'zip' => '3365',
                'location' => 'Allhartsberg',
            ),
            83 =>
            array (
                'id' => 584,
                'zip' => '3366',
                'location' => 'Kühberg',
            ),
            84 =>
            array (
                'id' => 585,
                'zip' => '3370',
                'location' => 'Ybbs an der Donau',
            ),
            85 =>
            array (
                'id' => 586,
                'zip' => '3371',
                'location' => 'Neumarkt an der Ybbs',
            ),
            86 =>
            array (
                'id' => 587,
                'zip' => '3372',
                'location' => 'Blindenmarkt',
            ),
            87 =>
            array (
                'id' => 588,
                'zip' => '3373',
                'location' => 'Kemmelbach',
            ),
            88 =>
            array (
                'id' => 589,
                'zip' => '3374',
                'location' => 'Säusenstein',
            ),
            89 =>
            array (
                'id' => 590,
                'zip' => '3375',
                'location' => 'Krummnußbaum',
            ),
            90 =>
            array (
                'id' => 591,
                'zip' => '3376',
                'location' => 'St. Martin-Karlsbach',
            ),
            91 =>
            array (
                'id' => 592,
                'zip' => '3380',
                'location' => 'Pöchlarn',
            ),
            92 =>
            array (
                'id' => 593,
                'zip' => '3381',
                'location' => 'Golling',
            ),
            93 =>
            array (
                'id' => 594,
                'zip' => '3382',
                'location' => 'Loosdorf',
            ),
            94 =>
            array (
                'id' => 595,
                'zip' => '3383',
                'location' => 'Hürm',
            ),
            95 =>
            array (
                'id' => 596,
                'zip' => '3384',
                'location' => 'Groß Sierning',
            ),
            96 =>
            array (
                'id' => 597,
                'zip' => '3385',
                'location' => 'Prinzersdorf',
            ),
            97 =>
            array (
                'id' => 598,
                'zip' => '3386',
                'location' => 'Hafnerbach',
            ),
            98 =>
            array (
                'id' => 599,
                'zip' => '3387',
                'location' => 'Groß Sierning',
            ),
            99 =>
            array (
                'id' => 600,
                'zip' => '3390',
                'location' => 'Melk',
            ),
            100 =>
            array (
                'id' => 601,
                'zip' => '3392',
                'location' => 'Schönbühel an der Donau',
            ),
            101 =>
            array (
                'id' => 602,
                'zip' => '3393',
                'location' => 'Matzleinsdorf',
            ),
            102 =>
            array (
                'id' => 603,
                'zip' => '3394',
                'location' => 'Schönbühel-Aggsbach',
            ),
            103 =>
            array (
                'id' => 604,
                'zip' => '3400',
                'location' => 'Klosterneuburg',
            ),
            104 =>
            array (
                'id' => 605,
                'zip' => '3402',
                'location' => 'Klosterneuburg',
            ),
            105 =>
            array (
                'id' => 606,
                'zip' => '3404',
                'location' => 'Klosterneuburg',
            ),
            106 =>
            array (
                'id' => 607,
                'zip' => '3413',
                'location' => 'Hintersdorf',
            ),
            107 =>
            array (
                'id' => 608,
                'zip' => '3420',
                'location' => 'Kritzendorf',
            ),
            108 =>
            array (
                'id' => 609,
                'zip' => '3421',
                'location' => 'Höflein an der Donau',
            ),
            109 =>
            array (
                'id' => 610,
                'zip' => '3422',
                'location' => 'Greifenstein',
            ),
            110 =>
            array (
                'id' => 611,
                'zip' => '3423',
                'location' => 'St. Andrä-Wördern',
            ),
            111 =>
            array (
                'id' => 612,
                'zip' => '3424',
                'location' => 'Zeiselmauer',
            ),
            112 =>
            array (
                'id' => 613,
                'zip' => '3425',
                'location' => 'Langenlebarn',
            ),
            113 =>
            array (
                'id' => 614,
                'zip' => '3426',
                'location' => 'Muckendorf-Wipfing',
            ),
            114 =>
            array (
                'id' => 615,
                'zip' => '3430',
                'location' => 'Tulln an der Donau',
            ),
            115 =>
            array (
                'id' => 616,
                'zip' => '3433',
                'location' => 'Königstetten',
            ),
            116 =>
            array (
                'id' => 617,
                'zip' => '3434',
                'location' => 'Tulbing',
            ),
            117 =>
            array (
                'id' => 618,
                'zip' => '3435',
                'location' => 'Zwentendorf an der Donau',
            ),
            118 =>
            array (
                'id' => 619,
                'zip' => '3441',
                'location' => 'Judenau',
            ),
            119 =>
            array (
                'id' => 620,
                'zip' => '3442',
                'location' => 'Langenrohr',
            ),
            120 =>
            array (
                'id' => 621,
                'zip' => '3443',
                'location' => 'Sieghartskirchen',
            ),
            121 =>
            array (
                'id' => 622,
                'zip' => '3451',
                'location' => 'Michelhausen',
            ),
            122 =>
            array (
                'id' => 623,
                'zip' => '3452',
                'location' => 'Atzenbrugg',
            ),
            123 =>
            array (
                'id' => 624,
                'zip' => '3454',
                'location' => 'Sitzenberg-Reidling',
            ),
            124 =>
            array (
                'id' => 625,
                'zip' => '3462',
                'location' => 'Absdorf',
            ),
            125 =>
            array (
                'id' => 626,
                'zip' => '3463',
                'location' => 'Stetteldorf am Wagram',
            ),
            126 =>
            array (
                'id' => 627,
                'zip' => '3464',
                'location' => 'Hausleiten',
            ),
            127 =>
            array (
                'id' => 628,
                'zip' => '3465',
                'location' => 'Königsbrunn am Wagram',
            ),
            128 =>
            array (
                'id' => 629,
                'zip' => '3470',
                'location' => 'Kirchberg am Wagram',
            ),
            129 =>
            array (
                'id' => 630,
                'zip' => '3471',
                'location' => 'Großriedenthal',
            ),
            130 =>
            array (
                'id' => 631,
                'zip' => '3472',
                'location' => 'Hohenwarth',
            ),
            131 =>
            array (
                'id' => 632,
                'zip' => '3473',
                'location' => 'Mühlbach am Manhartsberg',
            ),
            132 =>
            array (
                'id' => 633,
                'zip' => '3474',
                'location' => 'Altenwörth',
            ),
            133 =>
            array (
                'id' => 634,
                'zip' => '3481',
                'location' => 'Fels am Wagram',
            ),
            134 =>
            array (
                'id' => 635,
                'zip' => '3482',
                'location' => 'Gösing am Wagram',
            ),
            135 =>
            array (
                'id' => 636,
                'zip' => '3483',
                'location' => 'Feuersbrunn',
            ),
            136 =>
            array (
                'id' => 637,
                'zip' => '3484',
                'location' => 'Grafenwörth',
            ),
            137 =>
            array (
                'id' => 638,
                'zip' => '3485',
                'location' => 'Haitzendorf',
            ),
            138 =>
            array (
                'id' => 639,
                'zip' => '3491',
                'location' => 'Straß im Straßertale',
            ),
            139 =>
            array (
                'id' => 640,
                'zip' => '3492',
                'location' => 'Etsdorf am Kamp',
            ),
            140 =>
            array (
                'id' => 641,
                'zip' => '3493',
                'location' => 'Hadersdorf am Kamp',
            ),
            141 =>
            array (
                'id' => 642,
                'zip' => '3494',
                'location' => 'Gedersdorf',
            ),
            142 =>
            array (
                'id' => 643,
                'zip' => '3495',
                'location' => 'Rohrendorf bei Krems',
            ),
            143 =>
            array (
                'id' => 644,
                'zip' => '3500',
                'location' => 'Krems an der Donau',
            ),
            144 =>
            array (
                'id' => 645,
                'zip' => '3502',
                'location' => 'Krems-Lerchenfeld',
            ),
            145 =>
            array (
                'id' => 646,
                'zip' => '3503',
                'location' => 'Krems-Rehberg',
            ),
            146 =>
            array (
                'id' => 647,
                'zip' => '3504',
                'location' => 'Krems-Stein',
            ),
            147 =>
            array (
                'id' => 648,
                'zip' => '3505',
                'location' => 'Krems',
            ),
            148 =>
            array (
                'id' => 649,
                'zip' => '3506',
                'location' => 'Krems-Hollenburg',
            ),
            149 =>
            array (
                'id' => 650,
                'zip' => '3508',
                'location' => 'Paudorf',
            ),
            150 =>
            array (
                'id' => 651,
                'zip' => '3511',
                'location' => 'Furth bei Göttweig',
            ),
            151 =>
            array (
                'id' => 652,
                'zip' => '3512',
                'location' => 'Mautern',
            ),
            152 =>
            array (
                'id' => 653,
                'zip' => '3521',
                'location' => 'Obermeisling',
            ),
            153 =>
            array (
                'id' => 654,
                'zip' => '3522',
                'location' => 'Lichtenau',
            ),
            154 =>
            array (
                'id' => 655,
                'zip' => '3524',
                'location' => 'Grainbrunn',
            ),
            155 =>
            array (
                'id' => 656,
                'zip' => '3525',
                'location' => 'Sallingberg',
            ),
            156 =>
            array (
                'id' => 657,
                'zip' => '3531',
                'location' => 'Niedernondorf',
            ),
            157 =>
            array (
                'id' => 658,
                'zip' => '3532',
                'location' => 'Rastenfeld',
            ),
            158 =>
            array (
                'id' => 659,
                'zip' => '3533',
                'location' => 'Friedersbach',
            ),
            159 =>
            array (
                'id' => 660,
                'zip' => '3541',
                'location' => 'Senftenberg',
            ),
            160 =>
            array (
                'id' => 661,
                'zip' => '3542',
                'location' => 'Gföhl',
            ),
            161 =>
            array (
                'id' => 662,
                'zip' => '3543',
                'location' => 'Krumau am Kamp',
            ),
            162 =>
            array (
                'id' => 663,
                'zip' => '3544',
                'location' => 'Idolsberg',
            ),
            163 =>
            array (
                'id' => 664,
                'zip' => '3550',
                'location' => 'Langenlois',
            ),
            164 =>
            array (
                'id' => 665,
                'zip' => '3552',
                'location' => 'Lengenfeld',
            ),
            165 =>
            array (
                'id' => 666,
                'zip' => '3553',
                'location' => 'Schiltern',
            ),
            166 =>
            array (
                'id' => 667,
                'zip' => '3561',
                'location' => 'Zöbing',
            ),
            167 =>
            array (
                'id' => 668,
                'zip' => '3562',
                'location' => 'Schönberg',
            ),
            168 =>
            array (
                'id' => 669,
                'zip' => '3564',
                'location' => 'Plank am Kamp',
            ),
            169 =>
            array (
                'id' => 670,
                'zip' => '3571',
                'location' => 'Gars am Kamp',
            ),
            170 =>
            array (
                'id' => 671,
                'zip' => '3572',
                'location' => 'St. Leonhard am Hornerwald',
            ),
            171 =>
            array (
                'id' => 672,
                'zip' => '3573',
                'location' => 'Rosenburg',
            ),
            172 =>
            array (
                'id' => 673,
                'zip' => '3580',
                'location' => 'Horn',
            ),
            173 =>
            array (
                'id' => 674,
                'zip' => '3591',
                'location' => 'Altenburg',
            ),
            174 =>
            array (
                'id' => 675,
                'zip' => '3592',
                'location' => 'Röhrenbach',
            ),
            175 =>
            array (
                'id' => 676,
                'zip' => '3593',
                'location' => 'Neupölla',
            ),
            176 =>
            array (
                'id' => 677,
                'zip' => '3594',
                'location' => 'Franzen',
            ),
            177 =>
            array (
                'id' => 678,
                'zip' => '3595',
                'location' => 'Brunn an der Wild',
            ),
            178 =>
            array (
                'id' => 679,
                'zip' => '3601',
                'location' => 'Dürnstein',
            ),
            179 =>
            array (
                'id' => 680,
                'zip' => '3602',
                'location' => 'Rossatz',
            ),
            180 =>
            array (
                'id' => 681,
                'zip' => '3610',
                'location' => 'Weißenkirchen in der Wachau',
            ),
            181 =>
            array (
                'id' => 682,
                'zip' => '3611',
                'location' => 'Großheinrichschlag',
            ),
            182 =>
            array (
                'id' => 683,
                'zip' => '3613',
                'location' => 'Albrechtsberg an der Großen Krems',
            ),
            183 =>
            array (
                'id' => 684,
                'zip' => '3620',
                'location' => 'Spitz',
            ),
            184 =>
            array (
                'id' => 685,
                'zip' => '3621',
                'location' => 'Mitterarnsdorf',
            ),
            185 =>
            array (
                'id' => 686,
                'zip' => '3622',
                'location' => 'Mühldorf',
            ),
            186 =>
            array (
                'id' => 687,
                'zip' => '3623',
                'location' => 'Kottes',
            ),
            187 =>
            array (
                'id' => 688,
                'zip' => '3631',
                'location' => 'Ottenschlag',
            ),
            188 =>
            array (
                'id' => 689,
                'zip' => '3632',
                'location' => 'Bad Traunstein',
            ),
            189 =>
            array (
                'id' => 690,
                'zip' => '3633',
                'location' => 'Schönbach',
            ),
            190 =>
            array (
                'id' => 691,
                'zip' => '3641',
                'location' => 'Aggsbach Markt',
            ),
            191 =>
            array (
                'id' => 692,
                'zip' => '3642',
                'location' => 'Aggsbach Dorf',
            ),
            192 =>
            array (
                'id' => 693,
                'zip' => '3643',
                'location' => 'Maria Laach am Jauerling',
            ),
            193 =>
            array (
                'id' => 694,
                'zip' => '3644',
                'location' => 'Emmersdorf an der Donau',
            ),
            194 =>
            array (
                'id' => 695,
                'zip' => '3650',
                'location' => 'Pöggstall',
            ),
            195 =>
            array (
                'id' => 696,
                'zip' => '3652',
                'location' => 'Leiben',
            ),
            196 =>
            array (
                'id' => 697,
                'zip' => '3653',
                'location' => 'Weiten',
            ),
            197 =>
            array (
                'id' => 698,
                'zip' => '3654',
                'location' => 'Raxendorf',
            ),
            198 =>
            array (
                'id' => 699,
                'zip' => '3660',
                'location' => 'Klein-Pöchlarn',
            ),
            199 =>
            array (
                'id' => 700,
                'zip' => '3661',
                'location' => 'Artstetten',
            ),
            200 =>
            array (
                'id' => 701,
                'zip' => '3662',
                'location' => 'Münichreith',
            ),
            201 =>
            array (
                'id' => 702,
                'zip' => '3663',
                'location' => 'Laimbach am Ostrong',
            ),
            202 =>
            array (
                'id' => 703,
                'zip' => '3664',
                'location' => 'Martinsberg',
            ),
            203 =>
            array (
                'id' => 704,
                'zip' => '3665',
                'location' => 'Gutenbrunn',
            ),
            204 =>
            array (
                'id' => 705,
                'zip' => '3671',
                'location' => 'Marbach an der Donau',
            ),
            205 =>
            array (
                'id' => 706,
                'zip' => '3672',
                'location' => 'Maria Taferl',
            ),
            206 =>
            array (
                'id' => 707,
                'zip' => '3680',
                'location' => 'Persenbeug',
            ),
            207 =>
            array (
                'id' => 708,
                'zip' => '3681',
                'location' => 'Hofamt Priel',
            ),
            208 =>
            array (
                'id' => 709,
                'zip' => '3683',
                'location' => 'Yspertal',
            ),
            209 =>
            array (
                'id' => 710,
                'zip' => '3684',
                'location' => 'St. Oswald',
            ),
            210 =>
            array (
                'id' => 711,
                'zip' => '3691',
                'location' => 'Nöchling',
            ),
            211 =>
            array (
                'id' => 712,
                'zip' => '3701',
                'location' => 'Großweikersdorf',
            ),
            212 =>
            array (
                'id' => 713,
                'zip' => '3702',
                'location' => 'Niederrußbach',
            ),
            213 =>
            array (
                'id' => 714,
                'zip' => '3704',
                'location' => 'Glaubendorf',
            ),
            214 =>
            array (
                'id' => 715,
                'zip' => '3710',
                'location' => 'Ziersdorf',
            ),
            215 =>
            array (
                'id' => 716,
                'zip' => '3711',
                'location' => 'Großmeiseldorf',
            ),
            216 =>
            array (
                'id' => 717,
                'zip' => '3712',
                'location' => 'Maissau',
            ),
            217 =>
            array (
                'id' => 718,
                'zip' => '3713',
                'location' => 'Harmannsdorf',
            ),
            218 =>
            array (
                'id' => 719,
                'zip' => '3714',
                'location' => 'Sitzendorf an der Schmida',
            ),
            219 =>
            array (
                'id' => 720,
                'zip' => '3720',
                'location' => 'Ravelsbach',
            ),
            220 =>
            array (
                'id' => 721,
                'zip' => '3721',
                'location' => 'Limberg',
            ),
            221 =>
            array (
                'id' => 722,
                'zip' => '3722',
                'location' => 'Straning',
            ),
            222 =>
            array (
                'id' => 723,
                'zip' => '3730',
                'location' => 'Eggenburg',
            ),
            223 =>
            array (
                'id' => 724,
                'zip' => '3741',
                'location' => 'Pulkau',
            ),
            224 =>
            array (
                'id' => 725,
                'zip' => '3742',
                'location' => 'Theras',
            ),
            225 =>
            array (
                'id' => 726,
                'zip' => '3743',
                'location' => 'Röschitz',
            ),
            226 =>
            array (
                'id' => 727,
                'zip' => '3744',
                'location' => 'Stockern',
            ),
            227 =>
            array (
                'id' => 728,
                'zip' => '3751',
                'location' => 'Sigmundsherberg',
            ),
            228 =>
            array (
                'id' => 729,
                'zip' => '3752',
                'location' => 'Walkenstein',
            ),
            229 =>
            array (
                'id' => 730,
                'zip' => '3753',
                'location' => 'Hötzelsdorf',
            ),
            230 =>
            array (
                'id' => 731,
                'zip' => '3754',
                'location' => 'Irnfritz',
            ),
            231 =>
            array (
                'id' => 732,
                'zip' => '3761',
                'location' => 'Messern',
            ),
            232 =>
            array (
                'id' => 733,
                'zip' => '3762',
                'location' => 'Ludweis',
            ),
            233 =>
            array (
                'id' => 734,
                'zip' => '3763',
                'location' => 'Japons',
            ),
            234 =>
            array (
                'id' => 735,
                'zip' => '3800',
                'location' => 'Göpfritz an der Wild',
            ),
            235 =>
            array (
                'id' => 736,
                'zip' => '3804',
                'location' => 'Allentsteig',
            ),
            236 =>
            array (
                'id' => 737,
                'zip' => '3811',
                'location' => 'Kirchberg an der Wild',
            ),
            237 =>
            array (
                'id' => 738,
                'zip' => '3812',
                'location' => 'Groß Siegharts',
            ),
            238 =>
            array (
                'id' => 739,
                'zip' => '3813',
                'location' => 'Dietmanns',
            ),
            239 =>
            array (
                'id' => 740,
                'zip' => '3814',
                'location' => 'Aigen',
            ),
            240 =>
            array (
                'id' => 741,
                'zip' => '3820',
                'location' => 'Raabs an der Thaya',
            ),
            241 =>
            array (
                'id' => 742,
                'zip' => '3822',
                'location' => 'Karlstein an der Thaya',
            ),
            242 =>
            array (
                'id' => 743,
                'zip' => '3823',
                'location' => 'Weikertschlag an der Thaya',
            ),
            243 =>
            array (
                'id' => 744,
                'zip' => '3824',
                'location' => 'Großau',
            ),
            244 =>
            array (
                'id' => 745,
                'zip' => '3830',
                'location' => 'Waidhofen an der Thaya',
            ),
            245 =>
            array (
                'id' => 746,
                'zip' => '3834',
                'location' => 'Pfaffenschlag bei Waidhofen an der Thaya',
            ),
            246 =>
            array (
                'id' => 747,
                'zip' => '3841',
                'location' => 'Windigsteig',
            ),
            247 =>
            array (
                'id' => 748,
                'zip' => '3842',
                'location' => 'Thaya',
            ),
            248 =>
            array (
                'id' => 749,
                'zip' => '3843',
                'location' => 'Dobersberg',
            ),
            249 =>
            array (
                'id' => 750,
                'zip' => '3844',
                'location' => 'Waldkirchen an der Thaya',
            ),
            250 =>
            array (
                'id' => 751,
                'zip' => '3851',
                'location' => 'Kautzen',
            ),
            251 =>
            array (
                'id' => 752,
                'zip' => '3852',
                'location' => 'Gastern',
            ),
            252 =>
            array (
                'id' => 753,
                'zip' => '3860',
                'location' => 'Heidenreichstein',
            ),
            253 =>
            array (
                'id' => 754,
                'zip' => '3861',
                'location' => 'Eggern',
            ),
            254 =>
            array (
                'id' => 755,
                'zip' => '3862',
                'location' => 'Eisgarn',
            ),
            255 =>
            array (
                'id' => 756,
                'zip' => '3863',
                'location' => 'Reingers',
            ),
            256 =>
            array (
                'id' => 757,
                'zip' => '3871',
                'location' => 'Nagelberg',
            ),
            257 =>
            array (
                'id' => 758,
                'zip' => '3872',
                'location' => 'Langegg',
            ),
            258 =>
            array (
                'id' => 759,
                'zip' => '3873',
                'location' => 'Brand',
            ),
            259 =>
            array (
                'id' => 760,
                'zip' => '3874',
                'location' => 'Litschau',
            ),
            260 =>
            array (
                'id' => 761,
                'zip' => '3900',
                'location' => 'Schwarzenau',
            ),
            261 =>
            array (
                'id' => 762,
                'zip' => '3902',
                'location' => 'Vitis',
            ),
            262 =>
            array (
                'id' => 763,
                'zip' => '3903',
                'location' => 'Echsenbach',
            ),
            263 =>
            array (
                'id' => 764,
                'zip' => '3910',
                'location' => 'Zwettl',
            ),
            264 =>
            array (
                'id' => 765,
                'zip' => '3911',
                'location' => 'Rappottenstein',
            ),
            265 =>
            array (
                'id' => 766,
                'zip' => '3912',
                'location' => 'Grafenschlag',
            ),
            266 =>
            array (
                'id' => 767,
                'zip' => '3913',
                'location' => 'Großgöttfritz',
            ),
            267 =>
            array (
                'id' => 768,
                'zip' => '3914',
                'location' => 'Waldhausen',
            ),
            268 =>
            array (
                'id' => 769,
                'zip' => '3920',
                'location' => 'Groß Gerungs',
            ),
            269 =>
            array (
                'id' => 770,
                'zip' => '3921',
                'location' => 'Langschlag',
            ),
            270 =>
            array (
                'id' => 771,
                'zip' => '3922',
                'location' => 'Großschönau',
            ),
            271 =>
            array (
                'id' => 772,
                'zip' => '3923',
                'location' => 'Jagenbach',
            ),
            272 =>
            array (
                'id' => 773,
                'zip' => '3924',
                'location' => 'Rosenau Schloß',
            ),
            273 =>
            array (
                'id' => 774,
                'zip' => '3925',
                'location' => 'Arbesbach',
            ),
            274 =>
            array (
                'id' => 775,
                'zip' => '3931',
                'location' => 'Schweiggers',
            ),
            275 =>
            array (
                'id' => 776,
                'zip' => '3932',
                'location' => 'Kirchberg am Walde',
            ),
            276 =>
            array (
                'id' => 777,
                'zip' => '3942',
                'location' => 'Hirschbach',
            ),
            277 =>
            array (
                'id' => 778,
                'zip' => '3943',
                'location' => 'Schrems',
            ),
            278 =>
            array (
                'id' => 779,
                'zip' => '3944',
                'location' => 'Pürbach',
            ),
            279 =>
            array (
                'id' => 780,
                'zip' => '3945',
                'location' => 'Hoheneich',
            ),
            280 =>
            array (
                'id' => 781,
                'zip' => '3950',
                'location' => 'Gmünd',
            ),
            281 =>
            array (
                'id' => 782,
                'zip' => '3961',
                'location' => 'Waldenstein',
            ),
            282 =>
            array (
                'id' => 783,
                'zip' => '3962',
                'location' => 'Heinrichs bei Weitra',
            ),
            283 =>
            array (
                'id' => 784,
                'zip' => '3970',
                'location' => 'Weitra',
            ),
            284 =>
            array (
                'id' => 785,
                'zip' => '3971',
                'location' => 'St. Martin',
            ),
            285 =>
            array (
                'id' => 786,
                'zip' => '3972',
                'location' => 'Bad Großpertholz',
            ),
            286 =>
            array (
                'id' => 787,
                'zip' => '3973',
                'location' => 'Karlstift',
            ),
            287 =>
            array (
                'id' => 788,
                'zip' => '4000',
                'location' => 'Allhaming',
            ),
            288 =>
            array (
                'id' => 789,
                'zip' => '4010',
                'location' => 'Linz, Donau',
            ),
            289 =>
            array (
                'id' => 790,
                'zip' => '4016',
                'location' => 'Linz, Donau',
            ),
            290 =>
            array (
                'id' => 791,
                'zip' => '4018',
                'location' => 'Linz, Donau',
            ),
            291 =>
            array (
                'id' => 792,
                'zip' => '4020',
                'location' => 'Linz',
            ),
            292 =>
            array (
                'id' => 793,
                'zip' => '4021',
                'location' => 'Linz, Donau Postfach',
            ),
            293 =>
            array (
                'id' => 794,
                'zip' => '4024',
                'location' => 'Linz, Donau',
            ),
            294 =>
            array (
                'id' => 795,
                'zip' => '4025',
                'location' => 'Linz, Donau',
            ),
            295 =>
            array (
                'id' => 796,
                'zip' => '4030',
                'location' => 'Linz',
            ),
            296 =>
            array (
                'id' => 797,
                'zip' => '4031',
                'location' => 'Linz, Donau Postfach',
            ),
            297 =>
            array (
                'id' => 798,
                'zip' => '4032',
                'location' => 'Linz',
            ),
            298 =>
            array (
                'id' => 799,
                'zip' => '4033',
                'location' => 'Linz-Ebelsberg',
            ),
            299 =>
            array (
                'id' => 800,
                'zip' => '4036',
                'location' => 'Linz',
            ),
            300 =>
            array (
                'id' => 801,
                'zip' => '4040',
                'location' => 'Linz',
            ),
            301 =>
            array (
                'id' => 802,
                'zip' => '4041',
                'location' => 'Linz, Donau Postfach',
            ),
            302 =>
            array (
                'id' => 803,
                'zip' => '4046',
                'location' => 'Linz, Donau',
            ),
            303 =>
            array (
                'id' => 804,
                'zip' => '4048',
                'location' => 'Puchenau',
            ),
            304 =>
            array (
                'id' => 805,
                'zip' => '4050',
                'location' => 'Traun',
            ),
            305 =>
            array (
                'id' => 806,
                'zip' => '4052',
                'location' => 'Ansfelden',
            ),
            306 =>
            array (
                'id' => 807,
                'zip' => '4053',
                'location' => 'Haid',
            ),
            307 =>
            array (
                'id' => 808,
                'zip' => '4055',
                'location' => 'Pucking',
            ),
            308 =>
            array (
                'id' => 809,
                'zip' => '4056',
                'location' => 'Sankt Martin',
            ),
            309 =>
            array (
                'id' => 810,
                'zip' => '4059',
                'location' => 'Leonding',
            ),
            310 =>
            array (
                'id' => 811,
                'zip' => '4060',
                'location' => 'Leonding',
            ),
            311 =>
            array (
                'id' => 812,
                'zip' => '4061',
                'location' => 'Pasching',
            ),
            312 =>
            array (
                'id' => 813,
                'zip' => '4062',
                'location' => 'Thening',
            ),
            313 =>
            array (
                'id' => 814,
                'zip' => '4063',
                'location' => 'Hörsching',
            ),
            314 =>
            array (
                'id' => 815,
                'zip' => '4064',
                'location' => 'Oftering',
            ),
            315 =>
            array (
                'id' => 816,
                'zip' => '4066',
                'location' => 'Pasching',
            ),
            316 =>
            array (
                'id' => 817,
                'zip' => '4070',
                'location' => 'Eferding',
            ),
            317 =>
            array (
                'id' => 818,
                'zip' => '4072',
                'location' => 'Alkoven',
            ),
            318 =>
            array (
                'id' => 819,
                'zip' => '4073',
                'location' => 'Wilhering',
            ),
            319 =>
            array (
                'id' => 820,
                'zip' => '4074',
                'location' => 'Stroheim',
            ),
            320 =>
            array (
                'id' => 821,
                'zip' => '4075',
                'location' => 'Breitenaich',
            ),
            321 =>
            array (
                'id' => 822,
                'zip' => '4076',
                'location' => 'St. Marienkirchen an der Polsenz',
            ),
            322 =>
            array (
                'id' => 823,
                'zip' => '4077',
                'location' => 'Straßham',
            ),
            323 =>
            array (
                'id' => 824,
                'zip' => '4081',
                'location' => 'Hartkirchen',
            ),
            324 =>
            array (
                'id' => 825,
                'zip' => '4082',
                'location' => 'Aschach an der Donau',
            ),
            325 =>
            array (
                'id' => 826,
                'zip' => '4083',
                'location' => 'Haibach ob der Donau',
            ),
            326 =>
            array (
                'id' => 827,
                'zip' => '4084',
                'location' => 'St. Agatha',
            ),
            327 =>
            array (
                'id' => 828,
                'zip' => '4085',
                'location' => 'Wesenufer',
            ),
            328 =>
            array (
                'id' => 829,
                'zip' => '4090',
                'location' => 'Engelhartszell',
            ),
            329 =>
            array (
                'id' => 830,
                'zip' => '4091',
                'location' => 'Vichtenstein',
            ),
            330 =>
            array (
                'id' => 831,
                'zip' => '4092',
                'location' => 'Esternberg',
            ),
            331 =>
            array (
                'id' => 832,
                'zip' => '4100',
                'location' => 'Ottensheim',
            ),
            332 =>
            array (
                'id' => 833,
                'zip' => '4101',
                'location' => 'Feldkirchen an der Donau',
            ),
            333 =>
            array (
                'id' => 834,
                'zip' => '4102',
                'location' => 'Goldwörth',
            ),
            334 =>
            array (
                'id' => 835,
                'zip' => '4111',
                'location' => 'Walding',
            ),
            335 =>
            array (
                'id' => 836,
                'zip' => '4112',
                'location' => 'Rottenegg',
            ),
            336 =>
            array (
                'id' => 837,
                'zip' => '4113',
                'location' => 'St. Martin im Mühlkreis',
            ),
            337 =>
            array (
                'id' => 838,
                'zip' => '4114',
                'location' => 'Neuhaus an der Donau',
            ),
            338 =>
            array (
                'id' => 839,
                'zip' => '4115',
                'location' => 'Kleinzell im Mühlkreis',
            ),
            339 =>
            array (
                'id' => 840,
                'zip' => '4116',
                'location' => 'St. Ulrich im Mühlkreis',
            ),
            340 =>
            array (
                'id' => 841,
                'zip' => '4120',
                'location' => 'Neufelden',
            ),
            341 =>
            array (
                'id' => 842,
                'zip' => '4121',
                'location' => 'Altenfelden',
            ),
            342 =>
            array (
                'id' => 843,
                'zip' => '4122',
                'location' => 'Arnreit',
            ),
            343 =>
            array (
                'id' => 844,
                'zip' => '4131',
                'location' => 'Kirchberg ob der Donau',
            ),
            344 =>
            array (
                'id' => 845,
                'zip' => '4132',
                'location' => 'Lembach im Mühlkreis',
            ),
            345 =>
            array (
                'id' => 846,
                'zip' => '4133',
                'location' => 'Niederkappel',
            ),
            346 =>
            array (
                'id' => 847,
                'zip' => '4134',
                'location' => 'Putzleinsdorf',
            ),
            347 =>
            array (
                'id' => 848,
                'zip' => '4141',
                'location' => 'Pfarrkirchen im Mühlkreis',
            ),
            348 =>
            array (
                'id' => 849,
                'zip' => '4142',
                'location' => 'Hofkirchen im Mühlkreis',
            ),
            349 =>
            array (
                'id' => 850,
                'zip' => '4143',
                'location' => 'Neustift im Mühlkreis',
            ),
            350 =>
            array (
                'id' => 851,
                'zip' => '4144',
                'location' => 'Oberkappel',
            ),
            351 =>
            array (
                'id' => 852,
                'zip' => '4150',
                'location' => 'Rohrbach in Oberösterreich',
            ),
            352 =>
            array (
                'id' => 853,
                'zip' => '4151',
                'location' => 'Oepping',
            ),
            353 =>
            array (
                'id' => 854,
                'zip' => '4152',
                'location' => 'Sarleinsbach',
            ),
            354 =>
            array (
                'id' => 855,
                'zip' => '4153',
                'location' => 'Peilstein im Mühlviertel',
            ),
            355 =>
            array (
                'id' => 856,
                'zip' => '4154',
                'location' => 'Kollerschlag',
            ),
            356 =>
            array (
                'id' => 857,
                'zip' => '4155',
                'location' => 'Nebelberg',
            ),
            357 =>
            array (
                'id' => 858,
                'zip' => '4160',
                'location' => 'Aigen-Schlägl',
            ),
            358 =>
            array (
                'id' => 859,
                'zip' => '4161',
                'location' => 'Ulrichsberg',
            ),
            359 =>
            array (
                'id' => 860,
                'zip' => '4162',
                'location' => 'Julbach',
            ),
            360 =>
            array (
                'id' => 861,
                'zip' => '4163',
                'location' => 'Klaffer am Hochficht',
            ),
            361 =>
            array (
                'id' => 862,
                'zip' => '4164',
                'location' => 'Schwarzenberg am Böhmerwald',
            ),
            362 =>
            array (
                'id' => 863,
                'zip' => '4170',
                'location' => 'Haslach an der Mühl',
            ),
            363 =>
            array (
                'id' => 864,
                'zip' => '4171',
                'location' => 'St. Peter am Wimberg',
            ),
            364 =>
            array (
                'id' => 865,
                'zip' => '4172',
                'location' => 'St. Johann am Wimberg',
            ),
            365 =>
            array (
                'id' => 866,
                'zip' => '4173',
                'location' => 'St. Veit im Mühlkreis',
            ),
            366 =>
            array (
                'id' => 867,
                'zip' => '4174',
                'location' => 'Niederwaldkirchen',
            ),
            367 =>
            array (
                'id' => 868,
                'zip' => '4175',
                'location' => 'Herzogsdorf',
            ),
            368 =>
            array (
                'id' => 869,
                'zip' => '4180',
                'location' => 'Zwettl an der Rodl',
            ),
            369 =>
            array (
                'id' => 870,
                'zip' => '4181',
                'location' => 'Oberneukirchen',
            ),
            370 =>
            array (
                'id' => 871,
                'zip' => '4182',
                'location' => 'Waxenberg',
            ),
            371 =>
            array (
                'id' => 872,
                'zip' => '4183',
                'location' => 'Traberg',
            ),
            372 =>
            array (
                'id' => 873,
                'zip' => '4184',
                'location' => 'Helfenberg',
            ),
            373 =>
            array (
                'id' => 874,
                'zip' => '4190',
                'location' => 'Bad Leonfelden',
            ),
            374 =>
            array (
                'id' => 875,
                'zip' => '4191',
                'location' => 'Vorderweißenbach',
            ),
            375 =>
            array (
                'id' => 876,
                'zip' => '4192',
                'location' => 'Schenkenfelden',
            ),
            376 =>
            array (
                'id' => 877,
                'zip' => '4193',
                'location' => 'Reichenthal',
            ),
            377 =>
            array (
                'id' => 878,
                'zip' => '4201',
                'location' => 'Gramastetten',
            ),
            378 =>
            array (
                'id' => 879,
                'zip' => '4202',
                'location' => 'Hellmonsödt',
            ),
            379 =>
            array (
                'id' => 880,
                'zip' => '4203',
                'location' => 'Altenberg bei Linz',
            ),
            380 =>
            array (
                'id' => 881,
                'zip' => '4204',
                'location' => 'Reichenau im Mühlkreis',
            ),
            381 =>
            array (
                'id' => 882,
                'zip' => '4205',
                'location' => 'Kirchschlag bei Linz',
            ),
            382 =>
            array (
                'id' => 883,
                'zip' => '4209',
                'location' => 'Engerwitzdorf',
            ),
            383 =>
            array (
                'id' => 884,
                'zip' => '4210',
                'location' => 'Gallneukirchen',
            ),
            384 =>
            array (
                'id' => 885,
                'zip' => '4211',
                'location' => 'Alberndorf in der Riedmark',
            ),
            385 =>
            array (
                'id' => 886,
                'zip' => '4212',
                'location' => 'Neumarkt im Mühlkreis',
            ),
            386 =>
            array (
                'id' => 887,
                'zip' => '4213',
                'location' => 'Unterweitersdorf',
            ),
            387 =>
            array (
                'id' => 888,
                'zip' => '4221',
                'location' => 'Steyregg',
            ),
            388 =>
            array (
                'id' => 889,
                'zip' => '4222',
                'location' => 'St. Georgen an der Gusen',
            ),
            389 =>
            array (
                'id' => 890,
                'zip' => '4223',
                'location' => 'Katsdorf',
            ),
            390 =>
            array (
                'id' => 891,
                'zip' => '4224',
                'location' => 'Wartberg ob der Aist',
            ),
            391 =>
            array (
                'id' => 892,
                'zip' => '4225',
                'location' => 'Luftenberg',
            ),
            392 =>
            array (
                'id' => 893,
                'zip' => '4230',
                'location' => 'Pregarten',
            ),
            393 =>
            array (
                'id' => 894,
                'zip' => '4231',
                'location' => 'Untergaisbach',
            ),
            394 =>
            array (
                'id' => 895,
                'zip' => '4232',
                'location' => 'Hagenberg im Mühlkreis',
            ),
            395 =>
            array (
                'id' => 896,
                'zip' => '4240',
                'location' => 'Freistadt',
            ),
            396 =>
            array (
                'id' => 897,
                'zip' => '4242',
                'location' => 'Hirschbach im Mühlkreis',
            ),
            397 =>
            array (
                'id' => 898,
                'zip' => '4251',
                'location' => 'Sandl',
            ),
            398 =>
            array (
                'id' => 899,
                'zip' => '4252',
                'location' => 'Liebenau',
            ),
            399 =>
            array (
                'id' => 900,
                'zip' => '4261',
                'location' => 'Rainbach im Mühlkreis',
            ),
            400 =>
            array (
                'id' => 901,
                'zip' => '4262',
                'location' => 'Leopoldschlag',
            ),
            401 =>
            array (
                'id' => 902,
                'zip' => '4263',
                'location' => 'Windhaag bei Freistadt',
            ),
            402 =>
            array (
                'id' => 903,
                'zip' => '4264',
                'location' => 'Grünbach',
            ),
            403 =>
            array (
                'id' => 904,
                'zip' => '4271',
                'location' => 'St. Oswald bei Freistadt',
            ),
            404 =>
            array (
                'id' => 905,
                'zip' => '4272',
                'location' => 'Weitersfelden',
            ),
            405 =>
            array (
                'id' => 906,
                'zip' => '4273',
                'location' => 'Unterweißenbach',
            ),
            406 =>
            array (
                'id' => 907,
                'zip' => '4274',
                'location' => 'Schönau im Mühlkreis',
            ),
            407 =>
            array (
                'id' => 908,
                'zip' => '4280',
                'location' => 'Königswiesen',
            ),
            408 =>
            array (
                'id' => 909,
                'zip' => '4281',
                'location' => 'Mönchdorf',
            ),
            409 =>
            array (
                'id' => 910,
                'zip' => '4282',
                'location' => 'Pierbach',
            ),
            410 =>
            array (
                'id' => 911,
                'zip' => '4283',
                'location' => 'Bad Zell',
            ),
            411 =>
            array (
                'id' => 912,
                'zip' => '4284',
                'location' => 'Tragwein',
            ),
            412 =>
            array (
                'id' => 913,
                'zip' => '4291',
                'location' => 'Lasberg',
            ),
            413 =>
            array (
                'id' => 914,
                'zip' => '4292',
                'location' => 'Kefermarkt',
            ),
            414 =>
            array (
                'id' => 915,
                'zip' => '4293',
                'location' => 'Gutau',
            ),
            415 =>
            array (
                'id' => 916,
                'zip' => '4294',
                'location' => 'St. Leonhard bei Freistadt',
            ),
            416 =>
            array (
                'id' => 917,
                'zip' => '4300',
                'location' => 'St. Valentin',
            ),
            417 =>
            array (
                'id' => 918,
                'zip' => '4303',
                'location' => 'St. Pantaleon',
            ),
            418 =>
            array (
                'id' => 919,
                'zip' => '4310',
                'location' => 'Mauthausen',
            ),
            419 =>
            array (
                'id' => 920,
                'zip' => '4311',
                'location' => 'Schwertberg',
            ),
            420 =>
            array (
                'id' => 921,
                'zip' => '4312',
                'location' => 'Ried in der Riedmark',
            ),
            421 =>
            array (
                'id' => 922,
                'zip' => '4320',
                'location' => 'Perg',
            ),
            422 =>
            array (
                'id' => 923,
                'zip' => '4322',
                'location' => 'Windhaag bei Perg',
            ),
            423 =>
            array (
                'id' => 924,
                'zip' => '4323',
                'location' => 'Münzbach',
            ),
            424 =>
            array (
                'id' => 925,
                'zip' => '4324',
                'location' => 'Rechberg',
            ),
            425 =>
            array (
                'id' => 926,
                'zip' => '4331',
                'location' => 'Naarn',
            ),
            426 =>
            array (
                'id' => 927,
                'zip' => '4332',
                'location' => 'Au an der Donau',
            ),
            427 =>
            array (
                'id' => 928,
                'zip' => '4341',
                'location' => 'Arbing',
            ),
            428 =>
            array (
                'id' => 929,
                'zip' => '4342',
                'location' => 'Baumgartenberg',
            ),
            429 =>
            array (
                'id' => 930,
                'zip' => '4343',
                'location' => 'Mitterkirchen',
            ),
            430 =>
            array (
                'id' => 931,
                'zip' => '4351',
                'location' => 'Saxen',
            ),
            431 =>
            array (
                'id' => 932,
                'zip' => '4352',
                'location' => 'Klam',
            ),
            432 =>
            array (
                'id' => 933,
                'zip' => '4360',
                'location' => 'Grein',
            ),
            433 =>
            array (
                'id' => 934,
                'zip' => '4362',
                'location' => 'Bad Kreuzen',
            ),
            434 =>
            array (
                'id' => 935,
                'zip' => '4363',
                'location' => 'Pabneukirchen',
            ),
            435 =>
            array (
                'id' => 936,
                'zip' => '4364',
                'location' => 'St. Thomas',
            ),
            436 =>
            array (
                'id' => 937,
                'zip' => '4371',
                'location' => 'Dimbach',
            ),
            437 =>
            array (
                'id' => 938,
                'zip' => '4372',
                'location' => 'St. Georgen am Walde',
            ),
            438 =>
            array (
                'id' => 939,
                'zip' => '4381',
                'location' => 'St. Nikola an der Donau',
            ),
            439 =>
            array (
                'id' => 940,
                'zip' => '4382',
                'location' => 'Sarmingstein',
            ),
            440 =>
            array (
                'id' => 941,
                'zip' => '4391',
                'location' => 'Waldhausen im Strudengau',
            ),
            441 =>
            array (
                'id' => 942,
                'zip' => '4392',
                'location' => 'Dorfstetten',
            ),
            442 =>
            array (
                'id' => 943,
                'zip' => '4400',
                'location' => 'Steyr',
            ),
            443 =>
            array (
                'id' => 944,
                'zip' => '4401',
                'location' => 'Steyr Postfach',
            ),
            444 =>
            array (
                'id' => 945,
                'zip' => '4403',
                'location' => 'Steyr',
            ),
            445 =>
            array (
                'id' => 946,
                'zip' => '4405',
                'location' => 'Steyr-Münichholz',
            ),
            446 =>
            array (
                'id' => 947,
                'zip' => '4407',
                'location' => 'Steyr-Gleink',
            ),
            447 =>
            array (
                'id' => 948,
                'zip' => '4410',
                'location' => 'Steyr',
            ),
            448 =>
            array (
                'id' => 949,
                'zip' => '4421',
                'location' => 'Aschach an der Steyr',
            ),
            449 =>
            array (
                'id' => 950,
                'zip' => '4431',
                'location' => 'Haidershofen',
            ),
            450 =>
            array (
                'id' => 951,
                'zip' => '4432',
                'location' => 'Ernsthofen',
            ),
            451 =>
            array (
                'id' => 952,
                'zip' => '4441',
                'location' => 'Behamberg',
            ),
            452 =>
            array (
                'id' => 953,
                'zip' => '4442',
                'location' => 'Kleinraming',
            ),
            453 =>
            array (
                'id' => 954,
                'zip' => '4443',
                'location' => 'Maria Neustift',
            ),
            454 =>
            array (
                'id' => 955,
                'zip' => '4451',
                'location' => 'Garsten',
            ),
            455 =>
            array (
                'id' => 956,
                'zip' => '4452',
                'location' => 'Ternberg',
            ),
            456 =>
            array (
                'id' => 957,
                'zip' => '4453',
                'location' => 'Trattenbach',
            ),
            457 =>
            array (
                'id' => 958,
                'zip' => '4460',
                'location' => 'Losenstein',
            ),
            458 =>
            array (
                'id' => 959,
                'zip' => '4461',
                'location' => 'Laussa',
            ),
            459 =>
            array (
                'id' => 960,
                'zip' => '4462',
                'location' => 'Reichraming',
            ),
            460 =>
            array (
                'id' => 961,
                'zip' => '4463',
                'location' => 'Großraming',
            ),
            461 =>
            array (
                'id' => 962,
                'zip' => '4464',
                'location' => 'Kleinreifling',
            ),
            462 =>
            array (
                'id' => 963,
                'zip' => '4470',
                'location' => 'Enns',
            ),
            463 =>
            array (
                'id' => 964,
                'zip' => '4481',
                'location' => 'Asten',
            ),
            464 =>
            array (
                'id' => 965,
                'zip' => '4482',
                'location' => 'Ennsdorf',
            ),
            465 =>
            array (
                'id' => 966,
                'zip' => '4483',
                'location' => 'Hargelsberg',
            ),
            466 =>
            array (
                'id' => 967,
                'zip' => '4484',
                'location' => 'Kronstorf',
            ),
            467 =>
            array (
                'id' => 968,
                'zip' => '4490',
                'location' => 'St. Florian',
            ),
            468 =>
            array (
                'id' => 969,
                'zip' => '4491',
                'location' => 'Niederneukirchen',
            ),
            469 =>
            array (
                'id' => 970,
                'zip' => '4492',
                'location' => 'Hofkirchen im Traunkreis',
            ),
            470 =>
            array (
                'id' => 971,
                'zip' => '4493',
                'location' => 'Wolfern',
            ),
            471 =>
            array (
                'id' => 972,
                'zip' => '4501',
                'location' => 'Neuhofen an der Krems',
            ),
            472 =>
            array (
                'id' => 973,
                'zip' => '4502',
                'location' => 'St. Marien',
            ),
            473 =>
            array (
                'id' => 974,
                'zip' => '4511',
                'location' => 'Allhaming',
            ),
            474 =>
            array (
                'id' => 975,
                'zip' => '4521',
                'location' => 'Schiedlberg',
            ),
            475 =>
            array (
                'id' => 976,
                'zip' => '4522',
                'location' => 'Sierning',
            ),
            476 =>
            array (
                'id' => 977,
                'zip' => '4523',
                'location' => 'Neuzeug',
            ),
            477 =>
            array (
                'id' => 978,
                'zip' => '4531',
                'location' => 'Kematen an der Krems',
            ),
            478 =>
            array (
                'id' => 979,
                'zip' => '4532',
                'location' => 'Rohr im Kremstal',
            ),
            479 =>
            array (
                'id' => 980,
                'zip' => '4533',
                'location' => 'Piberbach',
            ),
            480 =>
            array (
                'id' => 981,
                'zip' => '4540',
                'location' => 'Bad Hall',
            ),
            481 =>
            array (
                'id' => 982,
                'zip' => '4541',
                'location' => 'Adlwang',
            ),
            482 =>
            array (
                'id' => 983,
                'zip' => '4542',
                'location' => 'Nußbach',
            ),
            483 =>
            array (
                'id' => 984,
                'zip' => '4550',
                'location' => 'Kremsmünster',
            ),
            484 =>
            array (
                'id' => 985,
                'zip' => '4551',
                'location' => 'Ried im Traunkreis',
            ),
            485 =>
            array (
                'id' => 986,
                'zip' => '4552',
                'location' => 'Wartberg an der Krems',
            ),
            486 =>
            array (
                'id' => 987,
                'zip' => '4553',
                'location' => 'Schlierbach',
            ),
            487 =>
            array (
                'id' => 988,
                'zip' => '4554',
                'location' => 'Oberschlierbach',
            ),
            488 =>
            array (
                'id' => 989,
                'zip' => '4560',
                'location' => 'Kirchdorf an der Krems',
            ),
            489 =>
            array (
                'id' => 990,
                'zip' => '4562',
                'location' => 'Steinbach am Ziehberg',
            ),
            490 =>
            array (
                'id' => 991,
                'zip' => '4563',
                'location' => 'Micheldorf',
            ),
            491 =>
            array (
                'id' => 992,
                'zip' => '4564',
                'location' => 'Klaus an der Pyhrnbahn',
            ),
            492 =>
            array (
                'id' => 993,
                'zip' => '4565',
                'location' => 'Inzersdorf im Kremstal',
            ),
            493 =>
            array (
                'id' => 994,
                'zip' => '4571',
                'location' => 'Steyrling',
            ),
            494 =>
            array (
                'id' => 995,
                'zip' => '4572',
                'location' => 'St. Pankraz',
            ),
            495 =>
            array (
                'id' => 996,
                'zip' => '4573',
                'location' => 'Hinterstoder',
            ),
            496 =>
            array (
                'id' => 997,
                'zip' => '4574',
                'location' => 'Vorderstoder',
            ),
            497 =>
            array (
                'id' => 998,
                'zip' => '4575',
                'location' => 'Roßleithen',
            ),
            498 =>
            array (
                'id' => 999,
                'zip' => '4580',
                'location' => 'Windischgarsten',
            ),
            499 =>
            array (
                'id' => 1000,
                'zip' => '4581',
                'location' => 'Rosenau am Hengstpaß',
            ),
        ));
        \DB::table('zip_codes')->insert(array (
            0 =>
            array (
                'id' => 1001,
                'zip' => '4582',
                'location' => 'Spital am Pyhrn',
            ),
            1 =>
            array (
                'id' => 1002,
                'zip' => '4591',
                'location' => 'Molln',
            ),
            2 =>
            array (
                'id' => 1003,
                'zip' => '4592',
                'location' => 'Leonstein',
            ),
            3 =>
            array (
                'id' => 1004,
                'zip' => '4593',
                'location' => 'Obergrünburg',
            ),
            4 =>
            array (
                'id' => 1005,
                'zip' => '4594',
                'location' => 'Grünburg',
            ),
            5 =>
            array (
                'id' => 1006,
                'zip' => '4595',
                'location' => 'Waldneukirchen',
            ),
            6 =>
            array (
                'id' => 1007,
                'zip' => '4596',
                'location' => 'Steinbach an der Steyr',
            ),
            7 =>
            array (
                'id' => 1008,
                'zip' => '4600',
                'location' => 'Wels',
            ),
            8 =>
            array (
                'id' => 1009,
                'zip' => '4601',
                'location' => 'Wels',
            ),
            9 =>
            array (
                'id' => 1010,
                'zip' => '4602',
                'location' => 'Wels Postfach',
            ),
            10 =>
            array (
                'id' => 1011,
                'zip' => '4603',
                'location' => 'Wels',
            ),
            11 =>
            array (
                'id' => 1012,
                'zip' => '4605',
                'location' => 'Wels',
            ),
            12 =>
            array (
                'id' => 1013,
                'zip' => '4606',
                'location' => 'Wels',
            ),
            13 =>
            array (
                'id' => 1014,
                'zip' => '4609',
                'location' => 'Thalheim bei Wels',
            ),
            14 =>
            array (
                'id' => 1015,
                'zip' => '4610',
                'location' => 'Wels',
            ),
            15 =>
            array (
                'id' => 1016,
                'zip' => '4611',
                'location' => 'Buchkirchen',
            ),
            16 =>
            array (
                'id' => 1017,
                'zip' => '4612',
                'location' => 'Scharten',
            ),
            17 =>
            array (
                'id' => 1018,
                'zip' => '4613',
                'location' => 'Mistelbach bei Wels',
            ),
            18 =>
            array (
                'id' => 1019,
                'zip' => '4614',
                'location' => 'Marchtrenk',
            ),
            19 =>
            array (
                'id' => 1020,
                'zip' => '4615',
                'location' => 'Holzhausen',
            ),
            20 =>
            array (
                'id' => 1021,
                'zip' => '4616',
                'location' => 'Weißkirchen',
            ),
            21 =>
            array (
                'id' => 1022,
                'zip' => '4618',
                'location' => 'Höllwiesen',
            ),
            22 =>
            array (
                'id' => 1023,
                'zip' => '4619',
                'location' => 'Wels',
            ),
            23 =>
            array (
                'id' => 1024,
                'zip' => '4621',
                'location' => 'Sipbachzell',
            ),
            24 =>
            array (
                'id' => 1025,
                'zip' => '4622',
                'location' => 'Eggendorf im Traunkreis',
            ),
            25 =>
            array (
                'id' => 1026,
                'zip' => '4623',
                'location' => 'Gunskirchen',
            ),
            26 =>
            array (
                'id' => 1027,
                'zip' => '4624',
                'location' => 'Pennewang',
            ),
            27 =>
            array (
                'id' => 1028,
                'zip' => '4625',
                'location' => 'Offenhausen',
            ),
            28 =>
            array (
                'id' => 1029,
                'zip' => '4631',
                'location' => 'Krenglbach',
            ),
            29 =>
            array (
                'id' => 1030,
                'zip' => '4632',
                'location' => 'Pichl bei Wels',
            ),
            30 =>
            array (
                'id' => 1031,
                'zip' => '4633',
                'location' => 'Kematen am Innbach',
            ),
            31 =>
            array (
                'id' => 1032,
                'zip' => '4641',
                'location' => 'Steinhaus',
            ),
            32 =>
            array (
                'id' => 1033,
                'zip' => '4642',
                'location' => 'Sattledt',
            ),
            33 =>
            array (
                'id' => 1034,
                'zip' => '4643',
                'location' => 'Pettenbach',
            ),
            34 =>
            array (
                'id' => 1035,
                'zip' => '4644',
                'location' => 'Scharnstein',
            ),
            35 =>
            array (
                'id' => 1036,
                'zip' => '4645',
                'location' => 'Grünau im Almtal',
            ),
            36 =>
            array (
                'id' => 1037,
                'zip' => '4650',
                'location' => 'Lambach',
            ),
            37 =>
            array (
                'id' => 1038,
                'zip' => '4651',
                'location' => 'Stadl-Paura',
            ),
            38 =>
            array (
                'id' => 1039,
                'zip' => '4652',
                'location' => 'Steinerkirchen an der Traun',
            ),
            39 =>
            array (
                'id' => 1040,
                'zip' => '4653',
                'location' => 'Eberstalzell',
            ),
            40 =>
            array (
                'id' => 1041,
                'zip' => '4654',
                'location' => 'Bad Wimsbach-Neydharting',
            ),
            41 =>
            array (
                'id' => 1042,
                'zip' => '4655',
                'location' => 'Vorchdorf',
            ),
            42 =>
            array (
                'id' => 1043,
                'zip' => '4656',
                'location' => 'Kirchham',
            ),
            43 =>
            array (
                'id' => 1044,
                'zip' => '4659',
                'location' => 'Edt bei Lambach',
            ),
            44 =>
            array (
                'id' => 1045,
                'zip' => '4661',
                'location' => 'Roitham am Traunfall',
            ),
            45 =>
            array (
                'id' => 1046,
                'zip' => '4662',
                'location' => 'Steyrermühl',
            ),
            46 =>
            array (
                'id' => 1047,
                'zip' => '4663',
                'location' => 'Laakirchen',
            ),
            47 =>
            array (
                'id' => 1048,
                'zip' => '4664',
                'location' => 'Oberweis',
            ),
            48 =>
            array (
                'id' => 1049,
                'zip' => '4671',
                'location' => 'Neukirchen bei Lambach',
            ),
            49 =>
            array (
                'id' => 1050,
                'zip' => '4672',
                'location' => 'Bachmanning',
            ),
            50 =>
            array (
                'id' => 1051,
                'zip' => '4673',
                'location' => 'Gaspoltshofen',
            ),
            51 =>
            array (
                'id' => 1052,
                'zip' => '4674',
                'location' => 'Altenhof am Hausruck',
            ),
            52 =>
            array (
                'id' => 1053,
                'zip' => '4675',
                'location' => 'Weibern',
            ),
            53 =>
            array (
                'id' => 1054,
                'zip' => '4676',
                'location' => 'Aistersheim',
            ),
            54 =>
            array (
                'id' => 1055,
                'zip' => '4680',
                'location' => 'Haag am Hausruck',
            ),
            55 =>
            array (
                'id' => 1056,
                'zip' => '4681',
                'location' => 'Rottenbach',
            ),
            56 =>
            array (
                'id' => 1057,
                'zip' => '4682',
                'location' => 'Geboltskirchen',
            ),
            57 =>
            array (
                'id' => 1058,
                'zip' => '4690',
                'location' => 'Schwanenstadt',
            ),
            58 =>
            array (
                'id' => 1059,
                'zip' => '4691',
                'location' => 'Breitenschützing',
            ),
            59 =>
            array (
                'id' => 1060,
                'zip' => '4692',
                'location' => 'Niederthalheim',
            ),
            60 =>
            array (
                'id' => 1061,
                'zip' => '4693',
                'location' => 'Desselbrunn',
            ),
            61 =>
            array (
                'id' => 1062,
                'zip' => '4694',
                'location' => 'Ohlsdorf',
            ),
            62 =>
            array (
                'id' => 1063,
                'zip' => '4701',
                'location' => 'Bad Schallerbach',
            ),
            63 =>
            array (
                'id' => 1064,
                'zip' => '4702',
                'location' => 'Wallern an der Trattnach',
            ),
            64 =>
            array (
                'id' => 1065,
                'zip' => '4707',
                'location' => 'Schlüßlberg',
            ),
            65 =>
            array (
                'id' => 1066,
                'zip' => '4710',
                'location' => 'Grieskirchen',
            ),
            66 =>
            array (
                'id' => 1067,
                'zip' => '4712',
                'location' => 'Michaelnbach',
            ),
            67 =>
            array (
                'id' => 1068,
                'zip' => '4713',
                'location' => 'Gallspach',
            ),
            68 =>
            array (
                'id' => 1069,
                'zip' => '4714',
                'location' => 'Meggenhofen',
            ),
            69 =>
            array (
                'id' => 1070,
                'zip' => '4715',
                'location' => 'Taufkirchen an der Trattnach',
            ),
            70 =>
            array (
                'id' => 1071,
                'zip' => '4716',
                'location' => 'Hofkirchen an der Trattnach',
            ),
            71 =>
            array (
                'id' => 1072,
                'zip' => '4720',
                'location' => 'Neumarkt im Hausruckkreis',
            ),
            72 =>
            array (
                'id' => 1073,
                'zip' => '4721',
                'location' => 'Altschwendt',
            ),
            73 =>
            array (
                'id' => 1074,
                'zip' => '4722',
                'location' => 'Peuerbach',
            ),
            74 =>
            array (
                'id' => 1075,
                'zip' => '4723',
                'location' => 'Natternbach',
            ),
            75 =>
            array (
                'id' => 1076,
                'zip' => '4724',
                'location' => 'Neukirchen am Walde',
            ),
            76 =>
            array (
                'id' => 1077,
                'zip' => '4725',
                'location' => 'St. Aegidi',
            ),
            77 =>
            array (
                'id' => 1078,
                'zip' => '4730',
                'location' => 'Waizenkirchen',
            ),
            78 =>
            array (
                'id' => 1079,
                'zip' => '4731',
                'location' => 'Prambachkirchen',
            ),
            79 =>
            array (
                'id' => 1080,
                'zip' => '4732',
                'location' => 'St. Thomas',
            ),
            80 =>
            array (
                'id' => 1081,
                'zip' => '4733',
                'location' => 'Heiligenberg',
            ),
            81 =>
            array (
                'id' => 1082,
                'zip' => '4741',
                'location' => 'Wendling',
            ),
            82 =>
            array (
                'id' => 1083,
                'zip' => '4742',
                'location' => 'Pram',
            ),
            83 =>
            array (
                'id' => 1084,
                'zip' => '4743',
                'location' => 'Peterskirchen',
            ),
            84 =>
            array (
                'id' => 1085,
                'zip' => '4751',
                'location' => 'Dorf',
            ),
            85 =>
            array (
                'id' => 1086,
                'zip' => '4752',
                'location' => 'Riedau',
            ),
            86 =>
            array (
                'id' => 1087,
                'zip' => '4753',
                'location' => 'Taiskirchen im Innkreis',
            ),
            87 =>
            array (
                'id' => 1088,
                'zip' => '4754',
                'location' => 'Andrichsfurt',
            ),
            88 =>
            array (
                'id' => 1089,
                'zip' => '4755',
                'location' => 'Zell an der Pram',
            ),
            89 =>
            array (
                'id' => 1090,
                'zip' => '4760',
                'location' => 'Raab',
            ),
            90 =>
            array (
                'id' => 1091,
                'zip' => '4761',
                'location' => 'Enzenkirchen',
            ),
            91 =>
            array (
                'id' => 1092,
                'zip' => '4762',
                'location' => 'St. Willibald',
            ),
            92 =>
            array (
                'id' => 1093,
                'zip' => '4770',
                'location' => 'Andorf',
            ),
            93 =>
            array (
                'id' => 1094,
                'zip' => '4771',
                'location' => 'Sigharting',
            ),
            94 =>
            array (
                'id' => 1095,
                'zip' => '4772',
                'location' => 'Lambrechten',
            ),
            95 =>
            array (
                'id' => 1096,
                'zip' => '4773',
                'location' => 'Eggerding',
            ),
            96 =>
            array (
                'id' => 1097,
                'zip' => '4774',
                'location' => 'St. Marienkirchen bei Schärding',
            ),
            97 =>
            array (
                'id' => 1098,
                'zip' => '4775',
                'location' => 'Taufkirchen an der Pram',
            ),
            98 =>
            array (
                'id' => 1099,
                'zip' => '4776',
                'location' => 'Diersbach',
            ),
            99 =>
            array (
                'id' => 1100,
                'zip' => '4777',
                'location' => 'Mayrhof',
            ),
            100 =>
            array (
                'id' => 1101,
                'zip' => '4778',
                'location' => 'Andorf, Oberösterreich',
            ),
            101 =>
            array (
                'id' => 1102,
                'zip' => '4780',
                'location' => 'Schärding',
            ),
            102 =>
            array (
                'id' => 1103,
                'zip' => '4782',
                'location' => 'St. Florian am Inn',
            ),
            103 =>
            array (
                'id' => 1104,
                'zip' => '4783',
                'location' => 'Wernstein am Inn',
            ),
            104 =>
            array (
                'id' => 1105,
                'zip' => '4784',
                'location' => 'Schardenberg',
            ),
            105 =>
            array (
                'id' => 1106,
                'zip' => '4785',
                'location' => 'Freinberg',
            ),
            106 =>
            array (
                'id' => 1107,
                'zip' => '4786',
                'location' => 'Brunnenthal',
            ),
            107 =>
            array (
                'id' => 1108,
                'zip' => '4791',
                'location' => 'Rainbach im Innkreis',
            ),
            108 =>
            array (
                'id' => 1109,
                'zip' => '4792',
                'location' => 'Münzkirchen',
            ),
            109 =>
            array (
                'id' => 1110,
                'zip' => '4793',
                'location' => 'St. Roman',
            ),
            110 =>
            array (
                'id' => 1111,
                'zip' => '4794',
                'location' => 'Kopfing im Innkreis',
            ),
            111 =>
            array (
                'id' => 1112,
                'zip' => '4800',
                'location' => 'Attnang-Puchheim',
            ),
            112 =>
            array (
                'id' => 1113,
                'zip' => '4801',
                'location' => 'Traunkirchen',
            ),
            113 =>
            array (
                'id' => 1114,
                'zip' => '4802',
                'location' => 'Ebensee',
            ),
            114 =>
            array (
                'id' => 1115,
                'zip' => '4810',
                'location' => 'Gmunden',
            ),
            115 =>
            array (
                'id' => 1116,
                'zip' => '4812',
                'location' => 'Pinsdorf',
            ),
            116 =>
            array (
                'id' => 1117,
                'zip' => '4813',
                'location' => 'Altmünster',
            ),
            117 =>
            array (
                'id' => 1118,
                'zip' => '4814',
                'location' => 'Neukirchen',
            ),
            118 =>
            array (
                'id' => 1119,
                'zip' => '4816',
                'location' => 'Gschwandt',
            ),
            119 =>
            array (
                'id' => 1120,
                'zip' => '4817',
                'location' => 'St. Konrad',
            ),
            120 =>
            array (
                'id' => 1121,
                'zip' => '4820',
                'location' => 'Bad Ischl',
            ),
            121 =>
            array (
                'id' => 1122,
                'zip' => '4821',
                'location' => 'Lauffen',
            ),
            122 =>
            array (
                'id' => 1123,
                'zip' => '4822',
                'location' => 'Bad Goisern am Hallstättersee',
            ),
            123 =>
            array (
                'id' => 1124,
                'zip' => '4823',
                'location' => 'Steeg',
            ),
            124 =>
            array (
                'id' => 1125,
                'zip' => '4824',
                'location' => 'Gosau',
            ),
            125 =>
            array (
                'id' => 1126,
                'zip' => '4825',
                'location' => 'Gosau-Hintertal',
            ),
            126 =>
            array (
                'id' => 1127,
                'zip' => '4829',
                'location' => 'Bad Ischl',
            ),
            127 =>
            array (
                'id' => 1128,
                'zip' => '4830',
                'location' => 'Hallstatt',
            ),
            128 =>
            array (
                'id' => 1129,
                'zip' => '4831',
                'location' => 'Obertraun',
            ),
            129 =>
            array (
                'id' => 1130,
                'zip' => '4840',
                'location' => 'Vöcklabruck',
            ),
            130 =>
            array (
                'id' => 1131,
                'zip' => '4841',
                'location' => 'Ungenach',
            ),
            131 =>
            array (
                'id' => 1132,
                'zip' => '4842',
                'location' => 'Zell am Pettenfirst',
            ),
            132 =>
            array (
                'id' => 1133,
                'zip' => '4843',
                'location' => 'Ampflwang',
            ),
            133 =>
            array (
                'id' => 1134,
                'zip' => '4844',
                'location' => 'Regau',
            ),
            134 =>
            array (
                'id' => 1135,
                'zip' => '4845',
                'location' => 'Rutzenmoos',
            ),
            135 =>
            array (
                'id' => 1136,
                'zip' => '4846',
                'location' => 'Redlham',
            ),
            136 =>
            array (
                'id' => 1137,
                'zip' => '4847',
                'location' => 'Vöcklabruck',
            ),
            137 =>
            array (
                'id' => 1138,
                'zip' => '4849',
                'location' => 'Puchkirchen am Trattberg',
            ),
            138 =>
            array (
                'id' => 1139,
                'zip' => '4850',
                'location' => 'Timelkam',
            ),
            139 =>
            array (
                'id' => 1140,
                'zip' => '4851',
                'location' => 'Gampern',
            ),
            140 =>
            array (
                'id' => 1141,
                'zip' => '4852',
                'location' => 'Weyregg am Attersee',
            ),
            141 =>
            array (
                'id' => 1142,
                'zip' => '4853',
                'location' => 'Steinbach am Attersee',
            ),
            142 =>
            array (
                'id' => 1143,
                'zip' => '4854',
                'location' => 'Weißenbach',
            ),
            143 =>
            array (
                'id' => 1144,
                'zip' => '4860',
                'location' => 'Lenzing',
            ),
            144 =>
            array (
                'id' => 1145,
                'zip' => '4861',
                'location' => 'Schörfling',
            ),
            145 =>
            array (
                'id' => 1146,
                'zip' => '4863',
                'location' => 'Seewalchen am Attersee',
            ),
            146 =>
            array (
                'id' => 1147,
                'zip' => '4864',
                'location' => 'Attersee',
            ),
            147 =>
            array (
                'id' => 1148,
                'zip' => '4865',
                'location' => 'Nußdorf am Attersee',
            ),
            148 =>
            array (
                'id' => 1149,
                'zip' => '4866',
                'location' => 'Unterach',
            ),
            149 =>
            array (
                'id' => 1150,
                'zip' => '4870',
                'location' => 'Vöcklamarkt',
            ),
            150 =>
            array (
                'id' => 1151,
                'zip' => '4871',
                'location' => 'Zipf',
            ),
            151 =>
            array (
                'id' => 1152,
                'zip' => '4872',
                'location' => 'Neukirchen an der Vöckla',
            ),
            152 =>
            array (
                'id' => 1153,
                'zip' => '4873',
                'location' => 'Frankenburg am Hausruck',
            ),
            153 =>
            array (
                'id' => 1154,
                'zip' => '4874',
                'location' => 'Pramet',
            ),
            154 =>
            array (
                'id' => 1155,
                'zip' => '4875',
                'location' => 'Redleiten',
            ),
            155 =>
            array (
                'id' => 1156,
                'zip' => '4880',
                'location' => 'St. Georgen im Attergau',
            ),
            156 =>
            array (
                'id' => 1157,
                'zip' => '4881',
                'location' => 'Straß im Attergau',
            ),
            157 =>
            array (
                'id' => 1158,
                'zip' => '4882',
                'location' => 'Oberwang',
            ),
            158 =>
            array (
                'id' => 1159,
                'zip' => '4890',
                'location' => 'Frankenmarkt',
            ),
            159 =>
            array (
                'id' => 1160,
                'zip' => '4891',
                'location' => 'Pöndorf',
            ),
            160 =>
            array (
                'id' => 1161,
                'zip' => '4892',
                'location' => 'Fornach',
            ),
            161 =>
            array (
                'id' => 1162,
                'zip' => '4893',
                'location' => 'Zell am Moos',
            ),
            162 =>
            array (
                'id' => 1163,
                'zip' => '4894',
                'location' => 'Oberhofen am Irrsee',
            ),
            163 =>
            array (
                'id' => 1164,
                'zip' => '4901',
                'location' => 'Ottnang',
            ),
            164 =>
            array (
                'id' => 1165,
                'zip' => '4902',
                'location' => 'Wolfsegg am Hausruck',
            ),
            165 =>
            array (
                'id' => 1166,
                'zip' => '4903',
                'location' => 'Manning',
            ),
            166 =>
            array (
                'id' => 1167,
                'zip' => '4904',
                'location' => 'Atzbach',
            ),
            167 =>
            array (
                'id' => 1168,
                'zip' => '4905',
                'location' => 'Thomasroith',
            ),
            168 =>
            array (
                'id' => 1169,
                'zip' => '4906',
                'location' => 'Eberschwang',
            ),
            169 =>
            array (
                'id' => 1170,
                'zip' => '4910',
                'location' => 'Ried im Innkreis',
            ),
            170 =>
            array (
                'id' => 1171,
                'zip' => '4911',
                'location' => 'Tumeltsham',
            ),
            171 =>
            array (
                'id' => 1172,
                'zip' => '4912',
                'location' => 'Neuhofen im Innkreis',
            ),
            172 =>
            array (
                'id' => 1173,
                'zip' => '4920',
                'location' => 'Schildorn',
            ),
            173 =>
            array (
                'id' => 1174,
                'zip' => '4921',
                'location' => 'Hohenzell',
            ),
            174 =>
            array (
                'id' => 1175,
                'zip' => '4922',
                'location' => 'Geiersberg',
            ),
            175 =>
            array (
                'id' => 1176,
                'zip' => '4923',
                'location' => 'Lohnsburg',
            ),
            176 =>
            array (
                'id' => 1177,
                'zip' => '4924',
                'location' => 'Waldzell',
            ),
            177 =>
            array (
                'id' => 1178,
                'zip' => '4925',
                'location' => 'Pramet',
            ),
            178 =>
            array (
                'id' => 1179,
                'zip' => '4926',
                'location' => 'St. Marienkirchen am Hausruck',
            ),
            179 =>
            array (
                'id' => 1180,
                'zip' => '4931',
                'location' => 'Mettmach',
            ),
            180 =>
            array (
                'id' => 1181,
                'zip' => '4932',
                'location' => 'Kirchheim im Innkreis',
            ),
            181 =>
            array (
                'id' => 1182,
                'zip' => '4933',
                'location' => 'Wildenau',
            ),
            182 =>
            array (
                'id' => 1183,
                'zip' => '4941',
                'location' => 'Mehrnbach',
            ),
            183 =>
            array (
                'id' => 1184,
                'zip' => '4942',
                'location' => 'Gurten',
            ),
            184 =>
            array (
                'id' => 1185,
                'zip' => '4943',
                'location' => 'Geinberg',
            ),
            185 =>
            array (
                'id' => 1186,
                'zip' => '4950',
                'location' => 'Altheim',
            ),
            186 =>
            array (
                'id' => 1187,
                'zip' => '4951',
                'location' => 'Polling im Innkreis',
            ),
            187 =>
            array (
                'id' => 1188,
                'zip' => '4952',
                'location' => 'Weng im Innkreis',
            ),
            188 =>
            array (
                'id' => 1189,
                'zip' => '4961',
                'location' => 'Mühlheim am Inn',
            ),
            189 =>
            array (
                'id' => 1190,
                'zip' => '4962',
                'location' => 'Mining',
            ),
            190 =>
            array (
                'id' => 1191,
                'zip' => '4963',
                'location' => 'St. Peter am Hart',
            ),
            191 =>
            array (
                'id' => 1192,
                'zip' => '4970',
                'location' => 'Eitzing',
            ),
            192 =>
            array (
                'id' => 1193,
                'zip' => '4971',
                'location' => 'Aurolzmünster',
            ),
            193 =>
            array (
                'id' => 1194,
                'zip' => '4972',
                'location' => 'Utzenaich',
            ),
            194 =>
            array (
                'id' => 1195,
                'zip' => '4973',
                'location' => 'St. Martin',
            ),
            195 =>
            array (
                'id' => 1196,
                'zip' => '4974',
                'location' => 'Ort im Innkreis',
            ),
            196 =>
            array (
                'id' => 1197,
                'zip' => '4975',
                'location' => 'Suben',
            ),
            197 =>
            array (
                'id' => 1198,
                'zip' => '4980',
                'location' => 'Antiesenhofen',
            ),
            198 =>
            array (
                'id' => 1199,
                'zip' => '4981',
                'location' => 'Reichersberg',
            ),
            199 =>
            array (
                'id' => 1200,
                'zip' => '4982',
                'location' => 'Obernberg am Inn',
            ),
            200 =>
            array (
                'id' => 1201,
                'zip' => '4983',
                'location' => 'St. Georgen bei Obernberg am Inn',
            ),
            201 =>
            array (
                'id' => 1202,
                'zip' => '4984',
                'location' => 'Weilbach',
            ),
            202 =>
            array (
                'id' => 1203,
                'zip' => '4985',
                'location' => 'Katzenberg',
            ),
            203 =>
            array (
                'id' => 1204,
                'zip' => '5000',
                'location' => 'Wals bei Salzburg',
            ),
            204 =>
            array (
                'id' => 1205,
                'zip' => '5010',
                'location' => 'Salzburg',
            ),
            205 =>
            array (
                'id' => 1206,
                'zip' => '5012',
                'location' => 'Salzburg',
            ),
            206 =>
            array (
                'id' => 1207,
                'zip' => '5013',
                'location' => 'Salzburg-Liefering',
            ),
            207 =>
            array (
                'id' => 1208,
                'zip' => '5014',
                'location' => 'Salzburg',
            ),
            208 =>
            array (
                'id' => 1209,
                'zip' => '5015',
                'location' => 'Salzburg',
            ),
            209 =>
            array (
                'id' => 1210,
                'zip' => '5016',
                'location' => 'Salzburg',
            ),
            210 =>
            array (
                'id' => 1211,
                'zip' => '5017',
                'location' => 'Salzburg',
            ),
            211 =>
            array (
                'id' => 1212,
                'zip' => '5018',
                'location' => 'Salzburg-Europark',
            ),
            212 =>
            array (
                'id' => 1213,
                'zip' => '5020',
                'location' => 'Salzburg',
            ),
            213 =>
            array (
                'id' => 1214,
                'zip' => '5021',
                'location' => 'Salzburg Postfach',
            ),
            214 =>
            array (
                'id' => 1215,
                'zip' => '5023',
                'location' => 'Salzburg-Gnigl',
            ),
            215 =>
            array (
                'id' => 1216,
                'zip' => '5025',
                'location' => 'Salzburg-Parsch',
            ),
            216 =>
            array (
                'id' => 1217,
                'zip' => '5026',
                'location' => 'Salzburg-Aigen',
            ),
            217 =>
            array (
                'id' => 1218,
                'zip' => '5027',
                'location' => 'Salzburg',
            ),
            218 =>
            array (
                'id' => 1219,
                'zip' => '5033',
                'location' => 'Salzburg',
            ),
            219 =>
            array (
                'id' => 1220,
                'zip' => '5061',
                'location' => 'Elsbethen-Glasenbach',
            ),
            220 =>
            array (
                'id' => 1221,
                'zip' => '5071',
                'location' => 'Wals',
            ),
            221 =>
            array (
                'id' => 1222,
                'zip' => '5072',
                'location' => 'Siezenheim',
            ),
            222 =>
            array (
                'id' => 1223,
                'zip' => '5081',
                'location' => 'Anif',
            ),
            223 =>
            array (
                'id' => 1224,
                'zip' => '5082',
                'location' => 'Grödig',
            ),
            224 =>
            array (
                'id' => 1225,
                'zip' => '5083',
                'location' => 'Gartenau-St. Leonhard',
            ),
            225 =>
            array (
                'id' => 1226,
                'zip' => '5084',
                'location' => 'Großgmain',
            ),
            226 =>
            array (
                'id' => 1227,
                'zip' => '5089',
                'location' => 'Niederalm',
            ),
            227 =>
            array (
                'id' => 1228,
                'zip' => '5090',
                'location' => 'Lofer',
            ),
            228 =>
            array (
                'id' => 1229,
                'zip' => '5091',
                'location' => 'Unken',
            ),
            229 =>
            array (
                'id' => 1230,
                'zip' => '5092',
                'location' => 'St. Martin bei Lofer',
            ),
            230 =>
            array (
                'id' => 1231,
                'zip' => '5093',
                'location' => 'Weißbach bei Lofer',
            ),
            231 =>
            array (
                'id' => 1232,
                'zip' => '5101',
                'location' => 'Bergheim',
            ),
            232 =>
            array (
                'id' => 1233,
                'zip' => '5102',
                'location' => 'Anthering',
            ),
            233 =>
            array (
                'id' => 1234,
                'zip' => '5110',
                'location' => 'Oberndorf bei Salzburg',
            ),
            234 =>
            array (
                'id' => 1235,
                'zip' => '5111',
                'location' => 'Bürmoos',
            ),
            235 =>
            array (
                'id' => 1236,
                'zip' => '5112',
                'location' => 'Lamprechtshausen',
            ),
            236 =>
            array (
                'id' => 1237,
                'zip' => '5113',
                'location' => 'St. Georgen bei Salzburg',
            ),
            237 =>
            array (
                'id' => 1238,
                'zip' => '5114',
                'location' => 'Göming',
            ),
            238 =>
            array (
                'id' => 1239,
                'zip' => '5120',
                'location' => 'St. Pantaleon',
            ),
            239 =>
            array (
                'id' => 1240,
                'zip' => '5121',
                'location' => 'Ostermiething',
            ),
            240 =>
            array (
                'id' => 1241,
                'zip' => '5122',
                'location' => 'Ach',
            ),
            241 =>
            array (
                'id' => 1242,
                'zip' => '5123',
                'location' => 'Überackern',
            ),
            242 =>
            array (
                'id' => 1243,
                'zip' => '5131',
                'location' => 'Franking',
            ),
            243 =>
            array (
                'id' => 1244,
                'zip' => '5132',
                'location' => 'Geretsberg',
            ),
            244 =>
            array (
                'id' => 1245,
                'zip' => '5133',
                'location' => 'Gilgenberg am Weilhart',
            ),
            245 =>
            array (
                'id' => 1246,
                'zip' => '5134',
                'location' => 'Schwand im Innkreis',
            ),
            246 =>
            array (
                'id' => 1247,
                'zip' => '5141',
                'location' => 'Moosdorf',
            ),
            247 =>
            array (
                'id' => 1248,
                'zip' => '5142',
                'location' => 'Eggelsberg',
            ),
            248 =>
            array (
                'id' => 1249,
                'zip' => '5143',
                'location' => 'Feldkirchen bei Mattighofen',
            ),
            249 =>
            array (
                'id' => 1250,
                'zip' => '5144',
                'location' => 'Handenberg',
            ),
            250 =>
            array (
                'id' => 1251,
                'zip' => '5145',
                'location' => 'Neukirchen an der Enknach',
            ),
            251 =>
            array (
                'id' => 1252,
                'zip' => '5151',
                'location' => 'Nußdorf am Haunsberg',
            ),
            252 =>
            array (
                'id' => 1253,
                'zip' => '5152',
                'location' => 'Michaelbeuern',
            ),
            253 =>
            array (
                'id' => 1254,
                'zip' => '5161',
                'location' => 'Elixhausen',
            ),
            254 =>
            array (
                'id' => 1255,
                'zip' => '5162',
                'location' => 'Obertrum am See',
            ),
            255 =>
            array (
                'id' => 1256,
                'zip' => '5163',
                'location' => 'Mattsee',
            ),
            256 =>
            array (
                'id' => 1257,
                'zip' => '5164',
                'location' => 'Seeham',
            ),
            257 =>
            array (
                'id' => 1258,
                'zip' => '5165',
                'location' => 'Berndorf bei Salzburg',
            ),
            258 =>
            array (
                'id' => 1259,
                'zip' => '5166',
                'location' => 'Perwang am Grabensee',
            ),
            259 =>
            array (
                'id' => 1260,
                'zip' => '5201',
                'location' => 'Seekirchen',
            ),
            260 =>
            array (
                'id' => 1261,
                'zip' => '5202',
                'location' => 'Neumarkt am Wallersee',
            ),
            261 =>
            array (
                'id' => 1262,
                'zip' => '5203',
                'location' => 'Köstendorf',
            ),
            262 =>
            array (
                'id' => 1263,
                'zip' => '5204',
                'location' => 'Straßwalchen',
            ),
            263 =>
            array (
                'id' => 1264,
                'zip' => '5205',
                'location' => 'Schleedorf',
            ),
            264 =>
            array (
                'id' => 1265,
                'zip' => '5211',
                'location' => 'Friedburg',
            ),
            265 =>
            array (
                'id' => 1266,
                'zip' => '5212',
                'location' => 'Schneegattern',
            ),
            266 =>
            array (
                'id' => 1267,
                'zip' => '5221',
                'location' => 'Lochen am See',
            ),
            267 =>
            array (
                'id' => 1268,
                'zip' => '5222',
                'location' => 'Munderfing',
            ),
            268 =>
            array (
                'id' => 1269,
                'zip' => '5223',
                'location' => 'Pfaffstätt',
            ),
            269 =>
            array (
                'id' => 1270,
                'zip' => '5224',
                'location' => 'Auerbach',
            ),
            270 =>
            array (
                'id' => 1271,
                'zip' => '5225',
                'location' => 'Jeging',
            ),
            271 =>
            array (
                'id' => 1272,
                'zip' => '5230',
                'location' => 'Mattighofen',
            ),
            272 =>
            array (
                'id' => 1273,
                'zip' => '5231',
                'location' => 'Schalchen',
            ),
            273 =>
            array (
                'id' => 1274,
                'zip' => '5232',
                'location' => 'Kirchberg bei Mattighofen',
            ),
            274 =>
            array (
                'id' => 1275,
                'zip' => '5233',
                'location' => 'Pischelsdorf am Engelbach',
            ),
            275 =>
            array (
                'id' => 1276,
                'zip' => '5241',
                'location' => 'Maria Schmolln',
            ),
            276 =>
            array (
                'id' => 1277,
                'zip' => '5242',
                'location' => 'St. Johann am Walde',
            ),
            277 =>
            array (
                'id' => 1278,
                'zip' => '5251',
                'location' => 'Höhnhart',
            ),
            278 =>
            array (
                'id' => 1279,
                'zip' => '5252',
                'location' => 'Aspach',
            ),
            279 =>
            array (
                'id' => 1280,
                'zip' => '5261',
                'location' => 'Uttendorf',
            ),
            280 =>
            array (
                'id' => 1281,
                'zip' => '5270',
                'location' => 'Mauerkirchen',
            ),
            281 =>
            array (
                'id' => 1282,
                'zip' => '5271',
                'location' => 'Moosbach',
            ),
            282 =>
            array (
                'id' => 1283,
                'zip' => '5272',
                'location' => 'Treubach',
            ),
            283 =>
            array (
                'id' => 1284,
                'zip' => '5273',
                'location' => 'Roßbach',
            ),
            284 =>
            array (
                'id' => 1285,
                'zip' => '5274',
                'location' => 'Burgkirchen',
            ),
            285 =>
            array (
                'id' => 1286,
                'zip' => '5280',
                'location' => 'Braunau am Inn',
            ),
            286 =>
            array (
                'id' => 1287,
                'zip' => '5282',
                'location' => 'Braunau',
            ),
            287 =>
            array (
                'id' => 1288,
                'zip' => '5283',
                'location' => 'Braunau am Inn',
            ),
            288 =>
            array (
                'id' => 1289,
                'zip' => '5300',
                'location' => 'Hallwang',
            ),
            289 =>
            array (
                'id' => 1290,
                'zip' => '5301',
                'location' => 'Eugendorf',
            ),
            290 =>
            array (
                'id' => 1291,
                'zip' => '5302',
                'location' => 'Henndorf am Wallersee',
            ),
            291 =>
            array (
                'id' => 1292,
                'zip' => '5303',
                'location' => 'Thalgau',
            ),
            292 =>
            array (
                'id' => 1293,
                'zip' => '5310',
                'location' => 'Mondsee',
            ),
            293 =>
            array (
                'id' => 1294,
                'zip' => '5311',
                'location' => 'Loibichl',
            ),
            294 =>
            array (
                'id' => 1295,
                'zip' => '5321',
                'location' => 'Koppl',
            ),
            295 =>
            array (
                'id' => 1296,
                'zip' => '5322',
                'location' => 'Hof bei Salzburg',
            ),
            296 =>
            array (
                'id' => 1297,
                'zip' => '5323',
                'location' => 'Ebenau',
            ),
            297 =>
            array (
                'id' => 1298,
                'zip' => '5324',
                'location' => 'Faistenau',
            ),
            298 =>
            array (
                'id' => 1299,
                'zip' => '5325',
                'location' => 'Plainfeld',
            ),
            299 =>
            array (
                'id' => 1300,
                'zip' => '5330',
                'location' => 'Fuschl am See',
            ),
            300 =>
            array (
                'id' => 1301,
                'zip' => '5340',
                'location' => 'St. Gilgen',
            ),
            301 =>
            array (
                'id' => 1302,
                'zip' => '5342',
                'location' => 'Abersee',
            ),
            302 =>
            array (
                'id' => 1303,
                'zip' => '5350',
                'location' => 'Strobl',
            ),
            303 =>
            array (
                'id' => 1304,
                'zip' => '5351',
                'location' => 'Aigen-Voglhub',
            ),
            304 =>
            array (
                'id' => 1305,
                'zip' => '5360',
                'location' => 'St. Wolfgang im Salzkammergut',
            ),
            305 =>
            array (
                'id' => 1306,
                'zip' => '5400',
                'location' => 'Hallein',
            ),
            306 =>
            array (
                'id' => 1307,
                'zip' => '5411',
                'location' => 'Oberalm',
            ),
            307 =>
            array (
                'id' => 1308,
                'zip' => '5412',
                'location' => 'Puch bei Hallein',
            ),
            308 =>
            array (
                'id' => 1309,
                'zip' => '5421',
                'location' => 'Adnet',
            ),
            309 =>
            array (
                'id' => 1310,
                'zip' => '5422',
                'location' => 'Heilbad Dürrnberg',
            ),
            310 =>
            array (
                'id' => 1311,
                'zip' => '5423',
                'location' => 'St. Koloman',
            ),
            311 =>
            array (
                'id' => 1312,
                'zip' => '5424',
                'location' => 'Bad Vigaun',
            ),
            312 =>
            array (
                'id' => 1313,
                'zip' => '5425',
                'location' => 'Krispl',
            ),
            313 =>
            array (
                'id' => 1314,
                'zip' => '5431',
                'location' => 'Kuchl',
            ),
            314 =>
            array (
                'id' => 1315,
                'zip' => '5440',
                'location' => 'Golling an der Salzach',
            ),
            315 =>
            array (
                'id' => 1316,
                'zip' => '5441',
                'location' => 'Abtenau',
            ),
            316 =>
            array (
                'id' => 1317,
                'zip' => '5442',
                'location' => 'Rußbach am Paß Gschütt',
            ),
            317 =>
            array (
                'id' => 1318,
                'zip' => '5450',
                'location' => 'Werfen',
            ),
            318 =>
            array (
                'id' => 1319,
                'zip' => '5451',
                'location' => 'Tenneck',
            ),
            319 =>
            array (
                'id' => 1320,
                'zip' => '5452',
                'location' => 'Pfarrwerfen',
            ),
            320 =>
            array (
                'id' => 1321,
                'zip' => '5453',
                'location' => 'Werfenweng',
            ),
            321 =>
            array (
                'id' => 1322,
                'zip' => '5500',
                'location' => 'Bischofshofen',
            ),
            322 =>
            array (
                'id' => 1323,
                'zip' => '5505',
                'location' => 'Mühlbach am Hochkönig',
            ),
            323 =>
            array (
                'id' => 1324,
                'zip' => '5511',
                'location' => 'Hüttau',
            ),
            324 =>
            array (
                'id' => 1325,
                'zip' => '5521',
                'location' => 'Niedernfritz',
            ),
            325 =>
            array (
                'id' => 1326,
                'zip' => '5522',
                'location' => 'St. Martin am Tennengebirge',
            ),
            326 =>
            array (
                'id' => 1327,
                'zip' => '5523',
                'location' => 'Lungötz',
            ),
            327 =>
            array (
                'id' => 1328,
                'zip' => '5524',
                'location' => 'Annaberg',
            ),
            328 =>
            array (
                'id' => 1329,
                'zip' => '5531',
                'location' => 'Eben im Pongau',
            ),
            329 =>
            array (
                'id' => 1330,
                'zip' => '5532',
                'location' => 'Filzmoos',
            ),
            330 =>
            array (
                'id' => 1331,
                'zip' => '5541',
                'location' => 'Altenmarkt im Pongau',
            ),
            331 =>
            array (
                'id' => 1332,
                'zip' => '5542',
                'location' => 'Flachau',
            ),
            332 =>
            array (
                'id' => 1333,
                'zip' => '5550',
                'location' => 'Radstadt',
            ),
            333 =>
            array (
                'id' => 1334,
                'zip' => '5552',
                'location' => 'Forstau',
            ),
            334 =>
            array (
                'id' => 1335,
                'zip' => '5561',
                'location' => 'Untertauern',
            ),
            335 =>
            array (
                'id' => 1336,
                'zip' => '5562',
                'location' => 'Obertauern',
            ),
            336 =>
            array (
                'id' => 1337,
                'zip' => '5563',
                'location' => 'Tweng',
            ),
            337 =>
            array (
                'id' => 1338,
                'zip' => '5570',
                'location' => 'Mauterndorf',
            ),
            338 =>
            array (
                'id' => 1339,
                'zip' => '5571',
                'location' => 'Mariapfarr',
            ),
            339 =>
            array (
                'id' => 1340,
                'zip' => '5572',
                'location' => 'St. Andrä im Lungau',
            ),
            340 =>
            array (
                'id' => 1341,
                'zip' => '5573',
                'location' => 'Weißpriach',
            ),
            341 =>
            array (
                'id' => 1342,
                'zip' => '5574',
                'location' => 'Göriach',
            ),
            342 =>
            array (
                'id' => 1343,
                'zip' => '5575',
                'location' => 'Lessach',
            ),
            343 =>
            array (
                'id' => 1344,
                'zip' => '5580',
                'location' => 'Tamsweg',
            ),
            344 =>
            array (
                'id' => 1345,
                'zip' => '5581',
                'location' => 'St. Margarethen im Lungau',
            ),
            345 =>
            array (
                'id' => 1346,
                'zip' => '5582',
                'location' => 'St. Michael im Lungau',
            ),
            346 =>
            array (
                'id' => 1347,
                'zip' => '5583',
                'location' => 'Muhr',
            ),
            347 =>
            array (
                'id' => 1348,
                'zip' => '5584',
                'location' => 'Zederhaus',
            ),
            348 =>
            array (
                'id' => 1349,
                'zip' => '5585',
                'location' => 'Unternberg',
            ),
            349 =>
            array (
                'id' => 1350,
                'zip' => '5591',
                'location' => 'Ramingstein',
            ),
            350 =>
            array (
                'id' => 1351,
                'zip' => '5592',
                'location' => 'Thomatal',
            ),
            351 =>
            array (
                'id' => 1352,
                'zip' => '5600',
                'location' => 'St. Johann im Pongau',
            ),
            352 =>
            array (
                'id' => 1353,
                'zip' => '5602',
                'location' => 'Wagrain',
            ),
            353 =>
            array (
                'id' => 1354,
                'zip' => '5603',
                'location' => 'Kleinarl',
            ),
            354 =>
            array (
                'id' => 1355,
                'zip' => '5611',
                'location' => 'Großarl',
            ),
            355 =>
            array (
                'id' => 1356,
                'zip' => '5612',
                'location' => 'Hüttschlag',
            ),
            356 =>
            array (
                'id' => 1357,
                'zip' => '5620',
                'location' => 'Schwarzach im Pongau',
            ),
            357 =>
            array (
                'id' => 1358,
                'zip' => '5621',
                'location' => 'St. Veit im Pongau',
            ),
            358 =>
            array (
                'id' => 1359,
                'zip' => '5622',
                'location' => 'Goldegg',
            ),
            359 =>
            array (
                'id' => 1360,
                'zip' => '5623',
                'location' => 'Schwarzach im Pongau',
            ),
            360 =>
            array (
                'id' => 1361,
                'zip' => '5630',
                'location' => 'Bad Hofgastein',
            ),
            361 =>
            array (
                'id' => 1362,
                'zip' => '5632',
                'location' => 'Dorfgastein',
            ),
            362 =>
            array (
                'id' => 1363,
                'zip' => '5640',
                'location' => 'Bad Gastein',
            ),
            363 =>
            array (
                'id' => 1364,
                'zip' => '5645',
                'location' => 'Böckstein',
            ),
            364 =>
            array (
                'id' => 1365,
                'zip' => '5651',
                'location' => 'Lend',
            ),
            365 =>
            array (
                'id' => 1366,
                'zip' => '5652',
                'location' => 'Dienten am Hochkönig',
            ),
            366 =>
            array (
                'id' => 1367,
                'zip' => '5660',
                'location' => 'Taxenbach',
            ),
            367 =>
            array (
                'id' => 1368,
                'zip' => '5661',
                'location' => 'Rauris',
            ),
            368 =>
            array (
                'id' => 1369,
                'zip' => '5662',
                'location' => 'Gries',
            ),
            369 =>
            array (
                'id' => 1370,
                'zip' => '5671',
                'location' => 'Bruck an der Großglocknerstraße',
            ),
            370 =>
            array (
                'id' => 1371,
                'zip' => '5672',
                'location' => 'Fusch an der Glocknerstraße',
            ),
            371 =>
            array (
                'id' => 1372,
                'zip' => '5700',
                'location' => 'Zell am See',
            ),
            372 =>
            array (
                'id' => 1373,
                'zip' => '5710',
                'location' => 'Kaprun',
            ),
            373 =>
            array (
                'id' => 1374,
                'zip' => '5721',
                'location' => 'Piesendorf',
            ),
            374 =>
            array (
                'id' => 1375,
                'zip' => '5722',
                'location' => 'Niedernsill',
            ),
            375 =>
            array (
                'id' => 1376,
                'zip' => '5723',
                'location' => 'Uttendorf',
            ),
            376 =>
            array (
                'id' => 1377,
                'zip' => '5724',
                'location' => 'Stuhlfelden',
            ),
            377 =>
            array (
                'id' => 1378,
                'zip' => '5730',
                'location' => 'Mittersill',
            ),
            378 =>
            array (
                'id' => 1379,
                'zip' => '5731',
                'location' => 'Hollersbach im Pinzgau',
            ),
            379 =>
            array (
                'id' => 1380,
                'zip' => '5732',
                'location' => 'Mühlbach',
            ),
            380 =>
            array (
                'id' => 1381,
                'zip' => '5733',
                'location' => 'Bramberg am Wildkogel',
            ),
            381 =>
            array (
                'id' => 1382,
                'zip' => '5741',
                'location' => 'Neukirchen am Großvenediger',
            ),
            382 =>
            array (
                'id' => 1383,
                'zip' => '5742',
                'location' => 'Wald im Pinzgau',
            ),
            383 =>
            array (
                'id' => 1384,
                'zip' => '5743',
                'location' => 'Krimml',
            ),
            384 =>
            array (
                'id' => 1385,
                'zip' => '5751',
                'location' => 'Maishofen',
            ),
            385 =>
            array (
                'id' => 1386,
                'zip' => '5752',
                'location' => 'Viehhofen',
            ),
            386 =>
            array (
                'id' => 1387,
                'zip' => '5753',
                'location' => 'Saalbach',
            ),
            387 =>
            array (
                'id' => 1388,
                'zip' => '5754',
                'location' => 'Hinterglemm',
            ),
            388 =>
            array (
                'id' => 1389,
                'zip' => '5760',
                'location' => 'Saalfelden am Steinernen Meer',
            ),
            389 =>
            array (
                'id' => 1390,
                'zip' => '5761',
                'location' => 'Maria Alm am Steinernen Meer',
            ),
            390 =>
            array (
                'id' => 1391,
                'zip' => '5771',
                'location' => 'Leogang',
            ),
            391 =>
            array (
                'id' => 1392,
                'zip' => '6000',
                'location' => 'Hall in Tirol',
            ),
            392 =>
            array (
                'id' => 1393,
                'zip' => '6010',
                'location' => 'Innsbruck',
            ),
            393 =>
            array (
                'id' => 1394,
                'zip' => '6013',
                'location' => 'Innsbruck',
            ),
            394 =>
            array (
                'id' => 1395,
                'zip' => '6018',
                'location' => 'Innsbruck',
            ),
            395 =>
            array (
                'id' => 1396,
                'zip' => '6019',
                'location' => 'Innsbruck',
            ),
            396 =>
            array (
                'id' => 1397,
                'zip' => '6020',
                'location' => 'Innsbruck',
            ),
            397 =>
            array (
                'id' => 1398,
                'zip' => '6021',
                'location' => 'Innsbruck Postfach',
            ),
            398 =>
            array (
                'id' => 1399,
                'zip' => '6022',
                'location' => 'Innsbruck',
            ),
            399 =>
            array (
                'id' => 1400,
                'zip' => '6023',
                'location' => 'Innsbruck',
            ),
            400 =>
            array (
                'id' => 1401,
                'zip' => '6026',
                'location' => 'Innsbruck',
            ),
            401 =>
            array (
                'id' => 1402,
                'zip' => '6029',
                'location' => 'Innsbruck',
            ),
            402 =>
            array (
                'id' => 1403,
                'zip' => '6033',
                'location' => 'Innsbruck-Arzl',
            ),
            403 =>
            array (
                'id' => 1404,
                'zip' => '6050',
                'location' => 'Hall in Tirol',
            ),
            404 =>
            array (
                'id' => 1405,
                'zip' => '6060',
                'location' => 'Hall in Tirol',
            ),
            405 =>
            array (
                'id' => 1406,
                'zip' => '6063',
                'location' => 'Rum',
            ),
            406 =>
            array (
                'id' => 1407,
                'zip' => '6065',
                'location' => 'Thaur',
            ),
            407 =>
            array (
                'id' => 1408,
                'zip' => '6067',
                'location' => 'Absam',
            ),
            408 =>
            array (
                'id' => 1409,
                'zip' => '6068',
                'location' => 'Mils',
            ),
            409 =>
            array (
                'id' => 1410,
                'zip' => '6069',
                'location' => 'Gnadenwald',
            ),
            410 =>
            array (
                'id' => 1411,
                'zip' => '6070',
                'location' => 'Ampass',
            ),
            411 =>
            array (
                'id' => 1412,
                'zip' => '6071',
                'location' => 'Aldrans',
            ),
            412 =>
            array (
                'id' => 1413,
                'zip' => '6072',
                'location' => 'Lans',
            ),
            413 =>
            array (
                'id' => 1414,
                'zip' => '6073',
                'location' => 'Sistrans',
            ),
            414 =>
            array (
                'id' => 1415,
                'zip' => '6074',
                'location' => 'Rinn',
            ),
            415 =>
            array (
                'id' => 1416,
                'zip' => '6075',
                'location' => 'Tulfes',
            ),
            416 =>
            array (
                'id' => 1417,
                'zip' => '6080',
                'location' => 'Innsbruck-Igls',
            ),
            417 =>
            array (
                'id' => 1418,
                'zip' => '6082',
                'location' => 'Patsch',
            ),
            418 =>
            array (
                'id' => 1419,
                'zip' => '6083',
                'location' => 'Ellbögen',
            ),
            419 =>
            array (
                'id' => 1420,
                'zip' => '6091',
                'location' => 'Götzens',
            ),
            420 =>
            array (
                'id' => 1421,
                'zip' => '6092',
                'location' => 'Birgitz',
            ),
            421 =>
            array (
                'id' => 1422,
                'zip' => '6094',
                'location' => 'Axams',
            ),
            422 =>
            array (
                'id' => 1423,
                'zip' => '6095',
                'location' => 'Grinzens',
            ),
            423 =>
            array (
                'id' => 1424,
                'zip' => '6100',
                'location' => 'Seefeld in Tirol',
            ),
            424 =>
            array (
                'id' => 1425,
                'zip' => '6103',
                'location' => 'Reith bei Seefeld',
            ),
            425 =>
            array (
                'id' => 1426,
                'zip' => '6105',
                'location' => 'Leutasch',
            ),
            426 =>
            array (
                'id' => 1427,
                'zip' => '6108',
                'location' => 'Scharnitz',
            ),
            427 =>
            array (
                'id' => 1428,
                'zip' => '6111',
                'location' => 'Volders',
            ),
            428 =>
            array (
                'id' => 1429,
                'zip' => '6112',
                'location' => 'Wattens',
            ),
            429 =>
            array (
                'id' => 1430,
                'zip' => '6113',
                'location' => 'Wattenberg',
            ),
            430 =>
            array (
                'id' => 1431,
                'zip' => '6114',
                'location' => 'Kolsass',
            ),
            431 =>
            array (
                'id' => 1432,
                'zip' => '6115',
                'location' => 'Kolsassberg',
            ),
            432 =>
            array (
                'id' => 1433,
                'zip' => '6116',
                'location' => 'Weer',
            ),
            433 =>
            array (
                'id' => 1434,
                'zip' => '6121',
                'location' => 'Baumkirchen',
            ),
            434 =>
            array (
                'id' => 1435,
                'zip' => '6122',
                'location' => 'Fritzens',
            ),
            435 =>
            array (
                'id' => 1436,
                'zip' => '6123',
                'location' => 'Terfens',
            ),
            436 =>
            array (
                'id' => 1437,
                'zip' => '6130',
                'location' => 'Schwaz',
            ),
            437 =>
            array (
                'id' => 1438,
                'zip' => '6133',
                'location' => 'Weerberg',
            ),
            438 =>
            array (
                'id' => 1439,
                'zip' => '6134',
                'location' => 'Vomp',
            ),
            439 =>
            array (
                'id' => 1440,
                'zip' => '6135',
                'location' => 'Stans',
            ),
            440 =>
            array (
                'id' => 1441,
                'zip' => '6136',
                'location' => 'Pill',
            ),
            441 =>
            array (
                'id' => 1442,
                'zip' => '6138',
                'location' => 'Vomp',
            ),
            442 =>
            array (
                'id' => 1443,
                'zip' => '6141',
                'location' => 'Schönberg im Stubaital',
            ),
            443 =>
            array (
                'id' => 1444,
                'zip' => '6142',
                'location' => 'Mieders',
            ),
            444 =>
            array (
                'id' => 1445,
                'zip' => '6143',
                'location' => 'Matrei am Brenner',
            ),
            445 =>
            array (
                'id' => 1446,
                'zip' => '6145',
                'location' => 'Navis',
            ),
            446 =>
            array (
                'id' => 1447,
                'zip' => '6150',
                'location' => 'Steinach am Brenner',
            ),
            447 =>
            array (
                'id' => 1448,
                'zip' => '6151',
                'location' => 'Gschnitz',
            ),
            448 =>
            array (
                'id' => 1449,
                'zip' => '6152',
                'location' => 'Trins',
            ),
            449 =>
            array (
                'id' => 1450,
                'zip' => '6154',
                'location' => 'St. Jodok am Brenner',
            ),
            450 =>
            array (
                'id' => 1451,
                'zip' => '6156',
                'location' => 'Gries am Brenner',
            ),
            451 =>
            array (
                'id' => 1452,
                'zip' => '6157',
                'location' => 'Obernberg am Brenner',
            ),
            452 =>
            array (
                'id' => 1453,
                'zip' => '6161',
                'location' => 'Natters',
            ),
            453 =>
            array (
                'id' => 1454,
                'zip' => '6162',
                'location' => 'Mutters',
            ),
            454 =>
            array (
                'id' => 1455,
                'zip' => '6165',
                'location' => 'Telfes im Stubai',
            ),
            455 =>
            array (
                'id' => 1456,
                'zip' => '6166',
                'location' => 'Fulpmes',
            ),
            456 =>
            array (
                'id' => 1457,
                'zip' => '6167',
                'location' => 'Neustift im Stubaital',
            ),
            457 =>
            array (
                'id' => 1458,
                'zip' => '6170',
                'location' => 'Zirl',
            ),
            458 =>
            array (
                'id' => 1459,
                'zip' => '6173',
                'location' => 'Oberperfuss',
            ),
            459 =>
            array (
                'id' => 1460,
                'zip' => '6175',
                'location' => 'Kematen in Tirol',
            ),
            460 =>
            array (
                'id' => 1461,
                'zip' => '6176',
                'location' => 'Völs',
            ),
            461 =>
            array (
                'id' => 1462,
                'zip' => '6178',
                'location' => 'Unterperfuss',
            ),
            462 =>
            array (
                'id' => 1463,
                'zip' => '6179',
                'location' => 'Ranggen',
            ),
            463 =>
            array (
                'id' => 1464,
                'zip' => '6181',
                'location' => 'Sellrain',
            ),
            464 =>
            array (
                'id' => 1465,
                'zip' => '6182',
                'location' => 'Gries im Sellrain',
            ),
            465 =>
            array (
                'id' => 1466,
                'zip' => '6183',
                'location' => 'Kühtai',
            ),
            466 =>
            array (
                'id' => 1467,
                'zip' => '6184',
                'location' => 'St. Sigmund',
            ),
            467 =>
            array (
                'id' => 1468,
                'zip' => '6200',
                'location' => 'Jenbach',
            ),
            468 =>
            array (
                'id' => 1469,
                'zip' => '6210',
                'location' => 'Wiesing',
            ),
            469 =>
            array (
                'id' => 1470,
                'zip' => '6212',
                'location' => 'Maurach',
            ),
            470 =>
            array (
                'id' => 1471,
                'zip' => '6213',
                'location' => 'Pertisau',
            ),
            471 =>
            array (
                'id' => 1472,
                'zip' => '6215',
                'location' => 'Achenkirch',
            ),
            472 =>
            array (
                'id' => 1473,
                'zip' => '6220',
                'location' => 'Buch in Tirol',
            ),
            473 =>
            array (
                'id' => 1474,
                'zip' => '6222',
                'location' => 'Gallzein',
            ),
            474 =>
            array (
                'id' => 1475,
                'zip' => '6230',
                'location' => 'Brixlegg',
            ),
            475 =>
            array (
                'id' => 1476,
                'zip' => '6232',
                'location' => 'Münster',
            ),
            476 =>
            array (
                'id' => 1477,
                'zip' => '6233',
                'location' => 'Kramsach',
            ),
            477 =>
            array (
                'id' => 1478,
                'zip' => '6234',
                'location' => 'Brandenberg',
            ),
            478 =>
            array (
                'id' => 1479,
                'zip' => '6235',
                'location' => 'Reith im Alpbachtal',
            ),
            479 =>
            array (
                'id' => 1480,
                'zip' => '6236',
                'location' => 'Alpbach',
            ),
            480 =>
            array (
                'id' => 1481,
                'zip' => '6240',
                'location' => 'Rattenberg',
            ),
            481 =>
            array (
                'id' => 1482,
                'zip' => '6241',
                'location' => 'Radfeld',
            ),
            482 =>
            array (
                'id' => 1483,
                'zip' => '6250',
                'location' => 'Kundl',
            ),
            483 =>
            array (
                'id' => 1484,
                'zip' => '6252',
                'location' => 'Breitenbach am Inn',
            ),
            484 =>
            array (
                'id' => 1485,
                'zip' => '6260',
                'location' => 'Bruck am Ziller',
            ),
            485 =>
            array (
                'id' => 1486,
                'zip' => '6261',
                'location' => 'Strass im Zillertal',
            ),
            486 =>
            array (
                'id' => 1487,
                'zip' => '6262',
                'location' => 'Schlitters',
            ),
            487 =>
            array (
                'id' => 1488,
                'zip' => '6263',
                'location' => 'Fügen',
            ),
            488 =>
            array (
                'id' => 1489,
                'zip' => '6264',
                'location' => 'Fügenberg',
            ),
            489 =>
            array (
                'id' => 1490,
                'zip' => '6265',
                'location' => 'Hart im Zillertal',
            ),
            490 =>
            array (
                'id' => 1491,
                'zip' => '6271',
                'location' => 'Uderns',
            ),
            491 =>
            array (
                'id' => 1492,
                'zip' => '6272',
                'location' => 'Kaltenbach',
            ),
            492 =>
            array (
                'id' => 1493,
                'zip' => '6273',
                'location' => 'Ried im Zillertal',
            ),
            493 =>
            array (
                'id' => 1494,
                'zip' => '6274',
                'location' => 'Aschau',
            ),
            494 =>
            array (
                'id' => 1495,
                'zip' => '6275',
                'location' => 'Stumm',
            ),
            495 =>
            array (
                'id' => 1496,
                'zip' => '6276',
                'location' => 'Stummerberg',
            ),
            496 =>
            array (
                'id' => 1497,
                'zip' => '6277',
                'location' => 'Zellberg',
            ),
            497 =>
            array (
                'id' => 1498,
                'zip' => '6278',
                'location' => 'Hainzenberg',
            ),
            498 =>
            array (
                'id' => 1499,
                'zip' => '6280',
                'location' => 'Zell am Ziller',
            ),
            499 =>
            array (
                'id' => 1500,
                'zip' => '6281',
                'location' => 'Gerlos',
            ),
        ));
        \DB::table('zip_codes')->insert(array (
            0 =>
            array (
                'id' => 1501,
                'zip' => '6283',
                'location' => 'Hippach',
            ),
            1 =>
            array (
                'id' => 1502,
                'zip' => '6284',
                'location' => 'Ramsau im Zillertal',
            ),
            2 =>
            array (
                'id' => 1503,
                'zip' => '6290',
                'location' => 'Mayrhofen',
            ),
            3 =>
            array (
                'id' => 1504,
                'zip' => '6292',
                'location' => 'Finkenberg',
            ),
            4 =>
            array (
                'id' => 1505,
                'zip' => '6293',
                'location' => 'Tux',
            ),
            5 =>
            array (
                'id' => 1506,
                'zip' => '6294',
                'location' => 'Hintertux',
            ),
            6 =>
            array (
                'id' => 1507,
                'zip' => '6295',
                'location' => 'Ginzling',
            ),
            7 =>
            array (
                'id' => 1508,
                'zip' => '6300',
                'location' => 'Wörgl',
            ),
            8 =>
            array (
                'id' => 1509,
                'zip' => '6305',
                'location' => 'Itter',
            ),
            9 =>
            array (
                'id' => 1510,
                'zip' => '6306',
                'location' => 'Söll',
            ),
            10 =>
            array (
                'id' => 1511,
                'zip' => '6311',
                'location' => 'Wildschönau-Oberau',
            ),
            11 =>
            array (
                'id' => 1512,
                'zip' => '6313',
                'location' => 'Wildschönau-Auffach',
            ),
            12 =>
            array (
                'id' => 1513,
                'zip' => '6314',
                'location' => 'Wildschönau-Niederau',
            ),
            13 =>
            array (
                'id' => 1514,
                'zip' => '6320',
                'location' => 'Angerberg',
            ),
            14 =>
            array (
                'id' => 1515,
                'zip' => '6321',
                'location' => 'Angath',
            ),
            15 =>
            array (
                'id' => 1516,
                'zip' => '6322',
                'location' => 'Kirchbichl',
            ),
            16 =>
            array (
                'id' => 1517,
                'zip' => '6323',
                'location' => 'Bad Häring',
            ),
            17 =>
            array (
                'id' => 1518,
                'zip' => '6324',
                'location' => 'Mariastein',
            ),
            18 =>
            array (
                'id' => 1519,
                'zip' => '6330',
                'location' => 'Kufstein',
            ),
            19 =>
            array (
                'id' => 1520,
                'zip' => '6332',
                'location' => 'Kufstein',
            ),
            20 =>
            array (
                'id' => 1521,
                'zip' => '6334',
                'location' => 'Schwoich',
            ),
            21 =>
            array (
                'id' => 1522,
                'zip' => '6335',
                'location' => 'Thiersee',
            ),
            22 =>
            array (
                'id' => 1523,
                'zip' => '6336',
                'location' => 'Langkampfen',
            ),
            23 =>
            array (
                'id' => 1524,
                'zip' => '6341',
                'location' => 'Ebbs',
            ),
            24 =>
            array (
                'id' => 1525,
                'zip' => '6342',
                'location' => 'Niederndorf',
            ),
            25 =>
            array (
                'id' => 1526,
                'zip' => '6343',
                'location' => 'Erl',
            ),
            26 =>
            array (
                'id' => 1527,
                'zip' => '6344',
                'location' => 'Walchsee',
            ),
            27 =>
            array (
                'id' => 1528,
                'zip' => '6345',
                'location' => 'Kössen',
            ),
            28 =>
            array (
                'id' => 1529,
                'zip' => '6346',
                'location' => 'Niederndorferberg',
            ),
            29 =>
            array (
                'id' => 1530,
                'zip' => '6347',
                'location' => 'Rettenschöss',
            ),
            30 =>
            array (
                'id' => 1531,
                'zip' => '6351',
                'location' => 'Scheffau am Wilden Kaiser',
            ),
            31 =>
            array (
                'id' => 1532,
                'zip' => '6352',
                'location' => 'Ellmau',
            ),
            32 =>
            array (
                'id' => 1533,
                'zip' => '6353',
                'location' => 'Going am Wilden Kaiser',
            ),
            33 =>
            array (
                'id' => 1534,
                'zip' => '6361',
                'location' => 'Hopfgarten',
            ),
            34 =>
            array (
                'id' => 1535,
                'zip' => '6362',
                'location' => 'Kelchsau',
            ),
            35 =>
            array (
                'id' => 1536,
                'zip' => '6363',
                'location' => 'Westendorf',
            ),
            36 =>
            array (
                'id' => 1537,
                'zip' => '6364',
                'location' => 'Brixen im Thale',
            ),
            37 =>
            array (
                'id' => 1538,
                'zip' => '6365',
                'location' => 'Kirchberg in Tirol',
            ),
            38 =>
            array (
                'id' => 1539,
                'zip' => '6370',
                'location' => 'Kitzbühel',
            ),
            39 =>
            array (
                'id' => 1540,
                'zip' => '6371',
                'location' => 'Aurach',
            ),
            40 =>
            array (
                'id' => 1541,
                'zip' => '6372',
                'location' => 'Oberndorf in Tirol',
            ),
            41 =>
            array (
                'id' => 1542,
                'zip' => '6373',
                'location' => 'Jochberg',
            ),
            42 =>
            array (
                'id' => 1543,
                'zip' => '6380',
                'location' => 'St. Johann in Tirol',
            ),
            43 =>
            array (
                'id' => 1544,
                'zip' => '6382',
                'location' => 'Kirchdorf in Tirol',
            ),
            44 =>
            array (
                'id' => 1545,
                'zip' => '6383',
                'location' => 'Erpfendorf',
            ),
            45 =>
            array (
                'id' => 1546,
                'zip' => '6384',
                'location' => 'Waidring',
            ),
            46 =>
            array (
                'id' => 1547,
                'zip' => '6385',
                'location' => 'Schwendt',
            ),
            47 =>
            array (
                'id' => 1548,
                'zip' => '6391',
                'location' => 'Fieberbrunn',
            ),
            48 =>
            array (
                'id' => 1549,
                'zip' => '6392',
                'location' => 'St. Jakob in Haus',
            ),
            49 =>
            array (
                'id' => 1550,
                'zip' => '6393',
                'location' => 'St. Ulrich am Pillersee',
            ),
            50 =>
            array (
                'id' => 1551,
                'zip' => '6395',
                'location' => 'Hochfilzen',
            ),
            51 =>
            array (
                'id' => 1552,
                'zip' => '6401',
                'location' => 'Inzing',
            ),
            52 =>
            array (
                'id' => 1553,
                'zip' => '6402',
                'location' => 'Hatting',
            ),
            53 =>
            array (
                'id' => 1554,
                'zip' => '6403',
                'location' => 'Flaurling',
            ),
            54 =>
            array (
                'id' => 1555,
                'zip' => '6404',
                'location' => 'Polling',
            ),
            55 =>
            array (
                'id' => 1556,
                'zip' => '6405',
                'location' => 'Pfaffenhofen',
            ),
            56 =>
            array (
                'id' => 1557,
                'zip' => '6406',
                'location' => 'Oberhofen im Inntal',
            ),
            57 =>
            array (
                'id' => 1558,
                'zip' => '6408',
                'location' => 'Pettnau',
            ),
            58 =>
            array (
                'id' => 1559,
                'zip' => '6410',
                'location' => 'Telfs',
            ),
            59 =>
            array (
                'id' => 1560,
                'zip' => '6412',
                'location' => 'Telfs-St. Georgen',
            ),
            60 =>
            array (
                'id' => 1561,
                'zip' => '6413',
                'location' => 'Wildermieming',
            ),
            61 =>
            array (
                'id' => 1562,
                'zip' => '6414',
                'location' => 'Mieming',
            ),
            62 =>
            array (
                'id' => 1563,
                'zip' => '6416',
                'location' => 'Obsteig',
            ),
            63 =>
            array (
                'id' => 1564,
                'zip' => '6421',
                'location' => 'Rietz',
            ),
            64 =>
            array (
                'id' => 1565,
                'zip' => '6422',
                'location' => 'Stams',
            ),
            65 =>
            array (
                'id' => 1566,
                'zip' => '6423',
                'location' => 'Mötz',
            ),
            66 =>
            array (
                'id' => 1567,
                'zip' => '6424',
                'location' => 'Silz',
            ),
            67 =>
            array (
                'id' => 1568,
                'zip' => '6425',
                'location' => 'Haiming',
            ),
            68 =>
            array (
                'id' => 1569,
                'zip' => '6426',
                'location' => 'Roppen',
            ),
            69 =>
            array (
                'id' => 1570,
                'zip' => '6430',
                'location' => 'Ötztal Bahnhof',
            ),
            70 =>
            array (
                'id' => 1571,
                'zip' => '6432',
                'location' => 'Sautens',
            ),
            71 =>
            array (
                'id' => 1572,
                'zip' => '6433',
                'location' => 'Oetz',
            ),
            72 =>
            array (
                'id' => 1573,
                'zip' => '6441',
                'location' => 'Umhausen',
            ),
            73 =>
            array (
                'id' => 1574,
                'zip' => '6444',
                'location' => 'Längenfeld',
            ),
            74 =>
            array (
                'id' => 1575,
                'zip' => '6450',
                'location' => 'Sölden',
            ),
            75 =>
            array (
                'id' => 1576,
                'zip' => '6452',
                'location' => 'Hochsölden',
            ),
            76 =>
            array (
                'id' => 1577,
                'zip' => '6456',
                'location' => 'Obergurgl',
            ),
            77 =>
            array (
                'id' => 1578,
                'zip' => '6458',
                'location' => 'Vent',
            ),
            78 =>
            array (
                'id' => 1579,
                'zip' => '6460',
                'location' => 'Imst',
            ),
            79 =>
            array (
                'id' => 1580,
                'zip' => '6462',
                'location' => 'Karres',
            ),
            80 =>
            array (
                'id' => 1581,
                'zip' => '6463',
                'location' => 'Karrösten',
            ),
            81 =>
            array (
                'id' => 1582,
                'zip' => '6464',
                'location' => 'Tarrenz',
            ),
            82 =>
            array (
                'id' => 1583,
                'zip' => '6465',
                'location' => 'Nassereith',
            ),
            83 =>
            array (
                'id' => 1584,
                'zip' => '6471',
                'location' => 'Arzl im Pitztal',
            ),
            84 =>
            array (
                'id' => 1585,
                'zip' => '6473',
                'location' => 'Wenns',
            ),
            85 =>
            array (
                'id' => 1586,
                'zip' => '6474',
                'location' => 'Jerzens',
            ),
            86 =>
            array (
                'id' => 1587,
                'zip' => '6481',
                'location' => 'St. Leonhard im Pitztal',
            ),
            87 =>
            array (
                'id' => 1588,
                'zip' => '6491',
                'location' => 'Schönwies',
            ),
            88 =>
            array (
                'id' => 1589,
                'zip' => '6492',
                'location' => 'Imsterberg',
            ),
            89 =>
            array (
                'id' => 1590,
                'zip' => '6493',
                'location' => 'Mils',
            ),
            90 =>
            array (
                'id' => 1591,
                'zip' => '6500',
                'location' => 'Landeck',
            ),
            91 =>
            array (
                'id' => 1592,
                'zip' => '6511',
                'location' => 'Zams',
            ),
            92 =>
            array (
                'id' => 1593,
                'zip' => '6521',
                'location' => 'Fließ',
            ),
            93 =>
            array (
                'id' => 1594,
                'zip' => '6522',
                'location' => 'Prutz',
            ),
            94 =>
            array (
                'id' => 1595,
                'zip' => '6524',
                'location' => 'Feichten im Kaunertal',
            ),
            95 =>
            array (
                'id' => 1596,
                'zip' => '6525',
                'location' => 'Faggen',
            ),
            96 =>
            array (
                'id' => 1597,
                'zip' => '6526',
                'location' => 'Kauns',
            ),
            97 =>
            array (
                'id' => 1598,
                'zip' => '6527',
                'location' => 'Kaunerberg',
            ),
            98 =>
            array (
                'id' => 1599,
                'zip' => '6528',
                'location' => 'Fendels',
            ),
            99 =>
            array (
                'id' => 1600,
                'zip' => '6531',
                'location' => 'Ried im Oberinntal',
            ),
            100 =>
            array (
                'id' => 1601,
                'zip' => '6532',
                'location' => 'Ladis',
            ),
            101 =>
            array (
                'id' => 1602,
                'zip' => '6533',
                'location' => 'Fiss',
            ),
            102 =>
            array (
                'id' => 1603,
                'zip' => '6534',
                'location' => 'Serfaus',
            ),
            103 =>
            array (
                'id' => 1604,
                'zip' => '6541',
                'location' => 'Tösens',
            ),
            104 =>
            array (
                'id' => 1605,
                'zip' => '6542',
                'location' => 'Pfunds',
            ),
            105 =>
            array (
                'id' => 1606,
                'zip' => '6543',
                'location' => 'Nauders',
            ),
            106 =>
            array (
                'id' => 1607,
                'zip' => '6544',
                'location' => 'Spiss',
            ),
            107 =>
            array (
                'id' => 1608,
                'zip' => '6551',
                'location' => 'Pians',
            ),
            108 =>
            array (
                'id' => 1609,
                'zip' => '6552',
                'location' => 'Tobadill',
            ),
            109 =>
            array (
                'id' => 1610,
                'zip' => '6553',
                'location' => 'See',
            ),
            110 =>
            array (
                'id' => 1611,
                'zip' => '6555',
                'location' => 'Kappl',
            ),
            111 =>
            array (
                'id' => 1612,
                'zip' => '6561',
                'location' => 'Ischgl',
            ),
            112 =>
            array (
                'id' => 1613,
                'zip' => '6562',
                'location' => 'Mathon',
            ),
            113 =>
            array (
                'id' => 1614,
                'zip' => '6563',
                'location' => 'Galtür',
            ),
            114 =>
            array (
                'id' => 1615,
                'zip' => '6571',
                'location' => 'Strengen',
            ),
            115 =>
            array (
                'id' => 1616,
                'zip' => '6572',
                'location' => 'Flirsch',
            ),
            116 =>
            array (
                'id' => 1617,
                'zip' => '6574',
                'location' => 'Pettneu am Arlberg',
            ),
            117 =>
            array (
                'id' => 1618,
                'zip' => '6580',
                'location' => 'St. Anton am Arlberg',
            ),
            118 =>
            array (
                'id' => 1619,
                'zip' => '6591',
                'location' => 'Grins',
            ),
            119 =>
            array (
                'id' => 1620,
                'zip' => '6600',
                'location' => 'Reutte',
            ),
            120 =>
            array (
                'id' => 1621,
                'zip' => '6604',
                'location' => 'Höfen',
            ),
            121 =>
            array (
                'id' => 1622,
                'zip' => '6610',
                'location' => 'Wängle',
            ),
            122 =>
            array (
                'id' => 1623,
                'zip' => '6611',
                'location' => 'Heiterwang',
            ),
            123 =>
            array (
                'id' => 1624,
                'zip' => '6621',
                'location' => 'Bichlbach',
            ),
            124 =>
            array (
                'id' => 1625,
                'zip' => '6622',
                'location' => 'Berwang',
            ),
            125 =>
            array (
                'id' => 1626,
                'zip' => '6623',
                'location' => 'Namlos',
            ),
            126 =>
            array (
                'id' => 1627,
                'zip' => '6631',
                'location' => 'Lermoos',
            ),
            127 =>
            array (
                'id' => 1628,
                'zip' => '6632',
                'location' => 'Ehrwald',
            ),
            128 =>
            array (
                'id' => 1629,
                'zip' => '6633',
                'location' => 'Biberwier',
            ),
            129 =>
            array (
                'id' => 1630,
                'zip' => '6642',
                'location' => 'Stanzach',
            ),
            130 =>
            array (
                'id' => 1631,
                'zip' => '6644',
                'location' => 'Elmen',
            ),
            131 =>
            array (
                'id' => 1632,
                'zip' => '6645',
                'location' => 'Vorderhornbach',
            ),
            132 =>
            array (
                'id' => 1633,
                'zip' => '6646',
                'location' => 'Hinterhornbach',
            ),
            133 =>
            array (
                'id' => 1634,
                'zip' => '6647',
                'location' => 'Pfafflar',
            ),
            134 =>
            array (
                'id' => 1635,
                'zip' => '6650',
                'location' => 'Gramais',
            ),
            135 =>
            array (
                'id' => 1636,
                'zip' => '6651',
                'location' => 'Häselgehr',
            ),
            136 =>
            array (
                'id' => 1637,
                'zip' => '6652',
                'location' => 'Elbigenalp',
            ),
            137 =>
            array (
                'id' => 1638,
                'zip' => '6653',
                'location' => 'Bach',
            ),
            138 =>
            array (
                'id' => 1639,
                'zip' => '6654',
                'location' => 'Holzgau',
            ),
            139 =>
            array (
                'id' => 1640,
                'zip' => '6655',
                'location' => 'Steeg',
            ),
            140 =>
            array (
                'id' => 1641,
                'zip' => '6670',
                'location' => 'Forchach',
            ),
            141 =>
            array (
                'id' => 1642,
                'zip' => '6671',
                'location' => 'Weißenbach am Lech',
            ),
            142 =>
            array (
                'id' => 1643,
                'zip' => '6672',
                'location' => 'Nesselwängle',
            ),
            143 =>
            array (
                'id' => 1644,
                'zip' => '6673',
                'location' => 'Grän',
            ),
            144 =>
            array (
                'id' => 1645,
                'zip' => '6675',
                'location' => 'Tannheim',
            ),
            145 =>
            array (
                'id' => 1646,
                'zip' => '6677',
                'location' => 'Schattwald',
            ),
            146 =>
            array (
                'id' => 1647,
                'zip' => '6682',
                'location' => 'Vils',
            ),
            147 =>
            array (
                'id' => 1648,
                'zip' => '6691',
                'location' => 'Jungholz',
            ),
            148 =>
            array (
                'id' => 1649,
                'zip' => '6700',
                'location' => 'Bludenz',
            ),
            149 =>
            array (
                'id' => 1650,
                'zip' => '6701',
                'location' => 'Bludenz Postfach',
            ),
            150 =>
            array (
                'id' => 1651,
                'zip' => '6706',
                'location' => 'Bürs',
            ),
            151 =>
            array (
                'id' => 1652,
                'zip' => '6707',
                'location' => 'Bürserberg',
            ),
            152 =>
            array (
                'id' => 1653,
                'zip' => '6708',
                'location' => 'Brand',
            ),
            153 =>
            array (
                'id' => 1654,
                'zip' => '6710',
                'location' => 'Nenzing',
            ),
            154 =>
            array (
                'id' => 1655,
                'zip' => '6712',
                'location' => 'Thüringen',
            ),
            155 =>
            array (
                'id' => 1656,
                'zip' => '6713',
                'location' => 'Ludesch',
            ),
            156 =>
            array (
                'id' => 1657,
                'zip' => '6714',
                'location' => 'Nüziders',
            ),
            157 =>
            array (
                'id' => 1658,
                'zip' => '6719',
                'location' => 'Bludesch',
            ),
            158 =>
            array (
                'id' => 1659,
                'zip' => '6721',
                'location' => 'Thüringerberg',
            ),
            159 =>
            array (
                'id' => 1660,
                'zip' => '6722',
                'location' => 'St. Gerold',
            ),
            160 =>
            array (
                'id' => 1661,
                'zip' => '6723',
                'location' => 'Blons',
            ),
            161 =>
            array (
                'id' => 1662,
                'zip' => '6731',
                'location' => 'Sonntag',
            ),
            162 =>
            array (
                'id' => 1663,
                'zip' => '6733',
                'location' => 'Fontanella',
            ),
            163 =>
            array (
                'id' => 1664,
                'zip' => '6741',
                'location' => 'Raggal',
            ),
            164 =>
            array (
                'id' => 1665,
                'zip' => '6751',
                'location' => 'Braz',
            ),
            165 =>
            array (
                'id' => 1666,
                'zip' => '6752',
                'location' => 'Dalaas',
            ),
            166 =>
            array (
                'id' => 1667,
                'zip' => '6754',
                'location' => 'Klösterle',
            ),
            167 =>
            array (
                'id' => 1668,
                'zip' => '6762',
                'location' => 'Stuben',
            ),
            168 =>
            array (
                'id' => 1669,
                'zip' => '6763',
                'location' => 'Zürs',
            ),
            169 =>
            array (
                'id' => 1670,
                'zip' => '6764',
                'location' => 'Lech',
            ),
            170 =>
            array (
                'id' => 1671,
                'zip' => '6767',
                'location' => 'Warth',
            ),
            171 =>
            array (
                'id' => 1672,
                'zip' => '6771',
                'location' => 'St. Anton im Montafon',
            ),
            172 =>
            array (
                'id' => 1673,
                'zip' => '6773',
                'location' => 'Vandans',
            ),
            173 =>
            array (
                'id' => 1674,
                'zip' => '6774',
                'location' => 'Tschagguns',
            ),
            174 =>
            array (
                'id' => 1675,
                'zip' => '6780',
                'location' => 'Schruns',
            ),
            175 =>
            array (
                'id' => 1676,
                'zip' => '6781',
                'location' => 'Bartholomäberg',
            ),
            176 =>
            array (
                'id' => 1677,
                'zip' => '6782',
                'location' => 'Silbertal',
            ),
            177 =>
            array (
                'id' => 1678,
                'zip' => '6787',
                'location' => 'Gargellen',
            ),
            178 =>
            array (
                'id' => 1679,
                'zip' => '6791',
                'location' => 'St. Gallenkirch',
            ),
            179 =>
            array (
                'id' => 1680,
                'zip' => '6793',
                'location' => 'Gaschurn',
            ),
            180 =>
            array (
                'id' => 1681,
                'zip' => '6794',
                'location' => 'Partenen',
            ),
            181 =>
            array (
                'id' => 1682,
                'zip' => '6800',
                'location' => 'Feldkirch',
            ),
            182 =>
            array (
                'id' => 1683,
                'zip' => '6801',
                'location' => 'Feldkirch Postfach',
            ),
            183 =>
            array (
                'id' => 1684,
                'zip' => '6803',
                'location' => 'Feldkirch',
            ),
            184 =>
            array (
                'id' => 1685,
                'zip' => '6805',
                'location' => 'Feldkirch-Gisingen',
            ),
            185 =>
            array (
                'id' => 1686,
                'zip' => '6808',
                'location' => 'Feldkirch-Nofels',
            ),
            186 =>
            array (
                'id' => 1687,
                'zip' => '6811',
                'location' => 'Göfis',
            ),
            187 =>
            array (
                'id' => 1688,
                'zip' => '6812',
                'location' => 'Meiningen',
            ),
            188 =>
            array (
                'id' => 1689,
                'zip' => '6820',
                'location' => 'Frastanz',
            ),
            189 =>
            array (
                'id' => 1690,
                'zip' => '6822',
                'location' => 'Satteins',
            ),
            190 =>
            array (
                'id' => 1691,
                'zip' => '6824',
                'location' => 'Schlins',
            ),
            191 =>
            array (
                'id' => 1692,
                'zip' => '6830',
                'location' => 'Rankweil',
            ),
            192 =>
            array (
                'id' => 1693,
                'zip' => '6832',
                'location' => 'Sulz-Röthis',
            ),
            193 =>
            array (
                'id' => 1694,
                'zip' => '6833',
                'location' => 'Klaus-Weiler',
            ),
            194 =>
            array (
                'id' => 1695,
                'zip' => '6834',
                'location' => 'Übersaxen',
            ),
            195 =>
            array (
                'id' => 1696,
                'zip' => '6835',
                'location' => 'Zwischenwasser',
            ),
            196 =>
            array (
                'id' => 1697,
                'zip' => '6836',
                'location' => 'Viktorsberg',
            ),
            197 =>
            array (
                'id' => 1698,
                'zip' => '6837',
                'location' => 'Weiler',
            ),
            198 =>
            array (
                'id' => 1699,
                'zip' => '6840',
                'location' => 'Götzis',
            ),
            199 =>
            array (
                'id' => 1700,
                'zip' => '6841',
                'location' => 'Mäder',
            ),
            200 =>
            array (
                'id' => 1701,
                'zip' => '6842',
                'location' => 'Koblach',
            ),
            201 =>
            array (
                'id' => 1702,
                'zip' => '6844',
                'location' => 'Altach',
            ),
            202 =>
            array (
                'id' => 1703,
                'zip' => '6845',
                'location' => 'Hohenems',
            ),
            203 =>
            array (
                'id' => 1704,
                'zip' => '6850',
                'location' => 'Dornbirn',
            ),
            204 =>
            array (
                'id' => 1705,
                'zip' => '6851',
                'location' => 'Dornbirn Postfach',
            ),
            205 =>
            array (
                'id' => 1706,
                'zip' => '6854',
                'location' => 'Dornbirn-Messepark',
            ),
            206 =>
            array (
                'id' => 1707,
                'zip' => '6855',
                'location' => 'Dornbirn',
            ),
            207 =>
            array (
                'id' => 1708,
                'zip' => '6857',
                'location' => 'Dornbirn-Haselstauden',
            ),
            208 =>
            array (
                'id' => 1709,
                'zip' => '6858',
                'location' => 'Schwarzach',
            ),
            209 =>
            array (
                'id' => 1710,
                'zip' => '6861',
                'location' => 'Alberschwende',
            ),
            210 =>
            array (
                'id' => 1711,
                'zip' => '6863',
                'location' => 'Egg',
            ),
            211 =>
            array (
                'id' => 1712,
                'zip' => '6866',
                'location' => 'Andelsbuch',
            ),
            212 =>
            array (
                'id' => 1713,
                'zip' => '6867',
                'location' => 'Schwarzenberg',
            ),
            213 =>
            array (
                'id' => 1714,
                'zip' => '6870',
                'location' => 'Bezau',
            ),
            214 =>
            array (
                'id' => 1715,
                'zip' => '6874',
                'location' => 'Bizau',
            ),
            215 =>
            array (
                'id' => 1716,
                'zip' => '6881',
                'location' => 'Mellau',
            ),
            216 =>
            array (
                'id' => 1717,
                'zip' => '6882',
                'location' => 'Schnepfau',
            ),
            217 =>
            array (
                'id' => 1718,
                'zip' => '6883',
                'location' => 'Au',
            ),
            218 =>
            array (
                'id' => 1719,
                'zip' => '6884',
                'location' => 'Damüls',
            ),
            219 =>
            array (
                'id' => 1720,
                'zip' => '6886',
                'location' => 'Schoppernau',
            ),
            220 =>
            array (
                'id' => 1721,
                'zip' => '6888',
                'location' => 'Schröcken',
            ),
            221 =>
            array (
                'id' => 1722,
                'zip' => '6890',
                'location' => 'Lustenau',
            ),
            222 =>
            array (
                'id' => 1723,
                'zip' => '6900',
                'location' => 'Bregenz',
            ),
            223 =>
            array (
                'id' => 1724,
                'zip' => '6901',
                'location' => 'Bregenz Postfach',
            ),
            224 =>
            array (
                'id' => 1725,
                'zip' => '6904',
                'location' => 'Bregenz-Schendlingen',
            ),
            225 =>
            array (
                'id' => 1726,
                'zip' => '6911',
                'location' => 'Lochau',
            ),
            226 =>
            array (
                'id' => 1727,
                'zip' => '6912',
                'location' => 'Hörbranz',
            ),
            227 =>
            array (
                'id' => 1728,
                'zip' => '6914',
                'location' => 'Hohenweiler',
            ),
            228 =>
            array (
                'id' => 1729,
                'zip' => '6921',
                'location' => 'Kennelbach',
            ),
            229 =>
            array (
                'id' => 1730,
                'zip' => '6922',
                'location' => 'Wolfurt',
            ),
            230 =>
            array (
                'id' => 1731,
                'zip' => '6923',
                'location' => 'Lauterach',
            ),
            231 =>
            array (
                'id' => 1732,
                'zip' => '6932',
                'location' => 'Langen bei Bregenz',
            ),
            232 =>
            array (
                'id' => 1733,
                'zip' => '6933',
                'location' => 'Doren',
            ),
            233 =>
            array (
                'id' => 1734,
                'zip' => '6934',
                'location' => 'Sulzberg',
            ),
            234 =>
            array (
                'id' => 1735,
                'zip' => '6941',
                'location' => 'Langenegg',
            ),
            235 =>
            array (
                'id' => 1736,
                'zip' => '6942',
                'location' => 'Krumbach',
            ),
            236 =>
            array (
                'id' => 1737,
                'zip' => '6943',
                'location' => 'Riefensberg',
            ),
            237 =>
            array (
                'id' => 1738,
                'zip' => '6951',
                'location' => 'Lingenau',
            ),
            238 =>
            array (
                'id' => 1739,
                'zip' => '6952',
                'location' => 'Hittisau',
            ),
            239 =>
            array (
                'id' => 1740,
                'zip' => '6953',
                'location' => 'Sibratsgfäll',
            ),
            240 =>
            array (
                'id' => 1741,
                'zip' => '6960',
                'location' => 'Wolfurt-Bahnhof',
            ),
            241 =>
            array (
                'id' => 1742,
                'zip' => '6961',
                'location' => 'Wolfurt-Bahnhof Postfach',
            ),
            242 =>
            array (
                'id' => 1743,
                'zip' => '6971',
                'location' => 'Hard',
            ),
            243 =>
            array (
                'id' => 1744,
                'zip' => '6972',
                'location' => 'Fußach',
            ),
            244 =>
            array (
                'id' => 1745,
                'zip' => '6973',
                'location' => 'Höchst',
            ),
            245 =>
            array (
                'id' => 1746,
                'zip' => '6974',
                'location' => 'Gaißau',
            ),
            246 =>
            array (
                'id' => 1747,
                'zip' => '6991',
                'location' => 'Riezlern',
            ),
            247 =>
            array (
                'id' => 1748,
                'zip' => '6992',
                'location' => 'Hirschegg',
            ),
            248 =>
            array (
                'id' => 1749,
                'zip' => '6993',
                'location' => 'Mittelberg',
            ),
            249 =>
            array (
                'id' => 1750,
                'zip' => '7000',
                'location' => 'Eisenstadt',
            ),
            250 =>
            array (
                'id' => 1751,
                'zip' => '7001',
                'location' => 'Eisenstadt Postfach',
            ),
            251 =>
            array (
                'id' => 1752,
                'zip' => '7002',
                'location' => 'Eisenstadt',
            ),
            252 =>
            array (
                'id' => 1753,
                'zip' => '7011',
                'location' => 'Siegendorf',
            ),
            253 =>
            array (
                'id' => 1754,
                'zip' => '7012',
                'location' => 'Zagersdorf',
            ),
            254 =>
            array (
                'id' => 1755,
                'zip' => '7013',
                'location' => 'Klingenbach',
            ),
            255 =>
            array (
                'id' => 1756,
                'zip' => '7020',
                'location' => 'Loipersbach im Burgenland',
            ),
            256 =>
            array (
                'id' => 1757,
                'zip' => '7021',
                'location' => 'Draßburg',
            ),
            257 =>
            array (
                'id' => 1758,
                'zip' => '7022',
                'location' => 'Schattendorf',
            ),
            258 =>
            array (
                'id' => 1759,
                'zip' => '7023',
                'location' => 'Zemendorf',
            ),
            259 =>
            array (
                'id' => 1760,
                'zip' => '7024',
                'location' => 'Hirm',
            ),
            260 =>
            array (
                'id' => 1761,
                'zip' => '7025',
                'location' => 'Pöttelsdorf',
            ),
            261 =>
            array (
                'id' => 1762,
                'zip' => '7031',
                'location' => 'Krensdorf',
            ),
            262 =>
            array (
                'id' => 1763,
                'zip' => '7032',
                'location' => 'Sigleß',
            ),
            263 =>
            array (
                'id' => 1764,
                'zip' => '7033',
                'location' => 'Pöttsching',
            ),
            264 =>
            array (
                'id' => 1765,
                'zip' => '7034',
                'location' => 'Zillingtal',
            ),
            265 =>
            array (
                'id' => 1766,
                'zip' => '7035',
                'location' => 'Steinbrunn',
            ),
            266 =>
            array (
                'id' => 1767,
                'zip' => '7041',
                'location' => 'Wulkaprodersdorf',
            ),
            267 =>
            array (
                'id' => 1768,
                'zip' => '7042',
                'location' => 'Antau',
            ),
            268 =>
            array (
                'id' => 1769,
                'zip' => '7051',
                'location' => 'Großhöflein',
            ),
            269 =>
            array (
                'id' => 1770,
                'zip' => '7052',
                'location' => 'Müllendorf',
            ),
            270 =>
            array (
                'id' => 1771,
                'zip' => '7053',
                'location' => 'Hornstein',
            ),
            271 =>
            array (
                'id' => 1772,
                'zip' => '7061',
                'location' => 'Trausdorf an der Wulka',
            ),
            272 =>
            array (
                'id' => 1773,
                'zip' => '7062',
                'location' => 'St. Margarethen im Burgenland',
            ),
            273 =>
            array (
                'id' => 1774,
                'zip' => '7063',
                'location' => 'Oggau',
            ),
            274 =>
            array (
                'id' => 1775,
                'zip' => '7064',
                'location' => 'Oslip',
            ),
            275 =>
            array (
                'id' => 1776,
                'zip' => '7071',
                'location' => 'Rust',
            ),
            276 =>
            array (
                'id' => 1777,
                'zip' => '7072',
                'location' => 'Mörbisch am See',
            ),
            277 =>
            array (
                'id' => 1778,
                'zip' => '7081',
                'location' => 'Schützen am Gebirge',
            ),
            278 =>
            array (
                'id' => 1779,
                'zip' => '7082',
                'location' => 'Donnerskirchen',
            ),
            279 =>
            array (
                'id' => 1780,
                'zip' => '7083',
                'location' => 'Purbach am Neusiedler See',
            ),
            280 =>
            array (
                'id' => 1781,
                'zip' => '7091',
                'location' => 'Breitenbrunn am Neusiedler See',
            ),
            281 =>
            array (
                'id' => 1782,
                'zip' => '7092',
                'location' => 'Winden am See',
            ),
            282 =>
            array (
                'id' => 1783,
                'zip' => '7093',
                'location' => 'Jois',
            ),
            283 =>
            array (
                'id' => 1784,
                'zip' => '7100',
                'location' => 'Neusiedl am See',
            ),
            284 =>
            array (
                'id' => 1785,
                'zip' => '7111',
                'location' => 'Parndorf',
            ),
            285 =>
            array (
                'id' => 1786,
                'zip' => '7121',
                'location' => 'Weiden am See',
            ),
            286 =>
            array (
                'id' => 1787,
                'zip' => '7122',
                'location' => 'Gols',
            ),
            287 =>
            array (
                'id' => 1788,
                'zip' => '7123',
                'location' => 'Mönchhof',
            ),
            288 =>
            array (
                'id' => 1789,
                'zip' => '7131',
                'location' => 'Halbturn',
            ),
            289 =>
            array (
                'id' => 1790,
                'zip' => '7132',
                'location' => 'Frauenkirchen',
            ),
            290 =>
            array (
                'id' => 1791,
                'zip' => '7141',
                'location' => 'Podersdorf am See',
            ),
            291 =>
            array (
                'id' => 1792,
                'zip' => '7142',
                'location' => 'Illmitz',
            ),
            292 =>
            array (
                'id' => 1793,
                'zip' => '7143',
                'location' => 'Apetlon',
            ),
            293 =>
            array (
                'id' => 1794,
                'zip' => '7151',
                'location' => 'Wallern im Burgenland',
            ),
            294 =>
            array (
                'id' => 1795,
                'zip' => '7152',
                'location' => 'Pamhagen',
            ),
            295 =>
            array (
                'id' => 1796,
                'zip' => '7161',
                'location' => 'St. Andrä am Zicksee',
            ),
            296 =>
            array (
                'id' => 1797,
                'zip' => '7162',
                'location' => 'Tadten',
            ),
            297 =>
            array (
                'id' => 1798,
                'zip' => '7163',
                'location' => 'Andau',
            ),
            298 =>
            array (
                'id' => 1799,
                'zip' => '7201',
                'location' => 'Neudörfl',
            ),
            299 =>
            array (
                'id' => 1800,
                'zip' => '7202',
                'location' => 'Bad Sauerbrunn',
            ),
            300 =>
            array (
                'id' => 1801,
                'zip' => '7203',
                'location' => 'Wiesen',
            ),
            301 =>
            array (
                'id' => 1802,
                'zip' => '7210',
                'location' => 'Mattersburg',
            ),
            302 =>
            array (
                'id' => 1803,
                'zip' => '7212',
                'location' => 'Forchtenstein',
            ),
            303 =>
            array (
                'id' => 1804,
                'zip' => '7221',
                'location' => 'Marz',
            ),
            304 =>
            array (
                'id' => 1805,
                'zip' => '7222',
                'location' => 'Rohrbach bei Mattersburg',
            ),
            305 =>
            array (
                'id' => 1806,
                'zip' => '7223',
                'location' => 'Sieggraben',
            ),
            306 =>
            array (
                'id' => 1807,
                'zip' => '7301',
                'location' => 'Deutschkreutz',
            ),
            307 =>
            array (
                'id' => 1808,
                'zip' => '7302',
                'location' => 'Nikitsch',
            ),
            308 =>
            array (
                'id' => 1809,
                'zip' => '7304',
                'location' => 'Großwarasdorf',
            ),
            309 =>
            array (
                'id' => 1810,
                'zip' => '7311',
                'location' => 'Neckenmarkt',
            ),
            310 =>
            array (
                'id' => 1811,
                'zip' => '7312',
                'location' => 'Horitschon',
            ),
            311 =>
            array (
                'id' => 1812,
                'zip' => '7321',
                'location' => 'Lackendorf',
            ),
            312 =>
            array (
                'id' => 1813,
                'zip' => '7322',
                'location' => 'Lackenbach',
            ),
            313 =>
            array (
                'id' => 1814,
                'zip' => '7323',
                'location' => 'Ritzing',
            ),
            314 =>
            array (
                'id' => 1815,
                'zip' => '7331',
                'location' => 'Weppersdorf',
            ),
            315 =>
            array (
                'id' => 1816,
                'zip' => '7332',
                'location' => 'Kobersdorf',
            ),
            316 =>
            array (
                'id' => 1817,
                'zip' => '7341',
                'location' => 'Markt St. Martin',
            ),
            317 =>
            array (
                'id' => 1818,
                'zip' => '7342',
                'location' => 'Kaisersdorf',
            ),
            318 =>
            array (
                'id' => 1819,
                'zip' => '7343',
                'location' => 'Neutal',
            ),
            319 =>
            array (
                'id' => 1820,
                'zip' => '7344',
                'location' => 'Stoob',
            ),
            320 =>
            array (
                'id' => 1821,
                'zip' => '7350',
                'location' => 'Oberpullendorf',
            ),
            321 =>
            array (
                'id' => 1822,
                'zip' => '7361',
                'location' => 'Lutzmannsburg',
            ),
            322 =>
            array (
                'id' => 1823,
                'zip' => '7371',
                'location' => 'Unterrabnitz',
            ),
            323 =>
            array (
                'id' => 1824,
                'zip' => '7372',
                'location' => 'Draßmarkt',
            ),
            324 =>
            array (
                'id' => 1825,
                'zip' => '7373',
                'location' => 'Piringsdorf',
            ),
            325 =>
            array (
                'id' => 1826,
                'zip' => '7374',
                'location' => 'Weingraben',
            ),
            326 =>
            array (
                'id' => 1827,
                'zip' => '7400',
                'location' => 'Oberwart',
            ),
            327 =>
            array (
                'id' => 1828,
                'zip' => '7410',
                'location' => 'Loipersdorf-Kitzladen',
            ),
            328 =>
            array (
                'id' => 1829,
                'zip' => '7411',
                'location' => 'Markt Allhau',
            ),
            329 =>
            array (
                'id' => 1830,
                'zip' => '7412',
                'location' => 'Wolfau',
            ),
            330 =>
            array (
                'id' => 1831,
                'zip' => '7421',
                'location' => 'Tauchen-Schaueregg',
            ),
            331 =>
            array (
                'id' => 1832,
                'zip' => '7422',
                'location' => 'Riedlingsdorf',
            ),
            332 =>
            array (
                'id' => 1833,
                'zip' => '7423',
                'location' => 'Pinkafeld',
            ),
            333 =>
            array (
                'id' => 1834,
                'zip' => '7425',
                'location' => 'Wiesfleck',
            ),
            334 =>
            array (
                'id' => 1835,
                'zip' => '7431',
                'location' => 'Bad Tatzmannsdorf',
            ),
            335 =>
            array (
                'id' => 1836,
                'zip' => '7432',
                'location' => 'Oberschützen',
            ),
            336 =>
            array (
                'id' => 1837,
                'zip' => '7433',
                'location' => 'Mariasdorf',
            ),
            337 =>
            array (
                'id' => 1838,
                'zip' => '7434',
                'location' => 'Bernstein',
            ),
            338 =>
            array (
                'id' => 1839,
                'zip' => '7435',
                'location' => 'Unterkohlstätten',
            ),
            339 =>
            array (
                'id' => 1840,
                'zip' => '7441',
                'location' => 'Pilgersdorf',
            ),
            340 =>
            array (
                'id' => 1841,
                'zip' => '7442',
                'location' => 'Lockenhaus',
            ),
            341 =>
            array (
                'id' => 1842,
                'zip' => '7443',
                'location' => 'Rattersdorf-Liebing',
            ),
            342 =>
            array (
                'id' => 1843,
                'zip' => '7444',
                'location' => 'Mannersdorf an der Rabnitz',
            ),
            343 =>
            array (
                'id' => 1844,
                'zip' => '7451',
                'location' => 'Oberloisdorf',
            ),
            344 =>
            array (
                'id' => 1845,
                'zip' => '7452',
                'location' => 'Unterpullendorf',
            ),
            345 =>
            array (
                'id' => 1846,
                'zip' => '7453',
                'location' => 'Steinberg-Dörfl',
            ),
            346 =>
            array (
                'id' => 1847,
                'zip' => '7461',
                'location' => 'Stadtschlaining',
            ),
            347 =>
            array (
                'id' => 1848,
                'zip' => '7463',
                'location' => 'Weiden bei Rechnitz',
            ),
            348 =>
            array (
                'id' => 1849,
                'zip' => '7464',
                'location' => 'Markt Neuhodis',
            ),
            349 =>
            array (
                'id' => 1850,
                'zip' => '7471',
                'location' => 'Rechnitz',
            ),
            350 =>
            array (
                'id' => 1851,
                'zip' => '7472',
                'location' => 'Schachendorf',
            ),
            351 =>
            array (
                'id' => 1852,
                'zip' => '7473',
                'location' => 'Hannersdorf',
            ),
            352 =>
            array (
                'id' => 1853,
                'zip' => '7474',
                'location' => 'Deutsch Schützen',
            ),
            353 =>
            array (
                'id' => 1854,
                'zip' => '7501',
                'location' => 'Rotenturm an der Pinka',
            ),
            354 =>
            array (
                'id' => 1855,
                'zip' => '7502',
                'location' => 'Unterwart',
            ),
            355 =>
            array (
                'id' => 1856,
                'zip' => '7503',
                'location' => 'Großpetersdorf',
            ),
            356 =>
            array (
                'id' => 1857,
                'zip' => '7511',
                'location' => 'Mischendorf',
            ),
            357 =>
            array (
                'id' => 1858,
                'zip' => '7512',
                'location' => 'Kohfidisch',
            ),
            358 =>
            array (
                'id' => 1859,
                'zip' => '7521',
                'location' => 'Eberau',
            ),
            359 =>
            array (
                'id' => 1860,
                'zip' => '7522',
                'location' => 'Strem',
            ),
            360 =>
            array (
                'id' => 1861,
                'zip' => '7531',
                'location' => 'Kemeten',
            ),
            361 =>
            array (
                'id' => 1862,
                'zip' => '7532',
                'location' => 'Litzelsdorf',
            ),
            362 =>
            array (
                'id' => 1863,
                'zip' => '7533',
                'location' => 'Ollersdorf im Burgenland',
            ),
            363 =>
            array (
                'id' => 1864,
                'zip' => '7534',
                'location' => 'Olbendorf',
            ),
            364 =>
            array (
                'id' => 1865,
                'zip' => '7535',
                'location' => 'St. Michael im Burgenland',
            ),
            365 =>
            array (
                'id' => 1866,
                'zip' => '7536',
                'location' => 'Güttenbach',
            ),
            366 =>
            array (
                'id' => 1867,
                'zip' => '7537',
                'location' => 'Neuberg im Burgenland',
            ),
            367 =>
            array (
                'id' => 1868,
                'zip' => '7540',
                'location' => 'Güssing',
            ),
            368 =>
            array (
                'id' => 1869,
                'zip' => '7542',
                'location' => 'Gerersdorf bei Güssing',
            ),
            369 =>
            array (
                'id' => 1870,
                'zip' => '7543',
                'location' => 'Kukmirn',
            ),
            370 =>
            array (
                'id' => 1871,
                'zip' => '7544',
                'location' => 'Tobaj',
            ),
            371 =>
            array (
                'id' => 1872,
                'zip' => '7545',
                'location' => 'Neustift bei Güssing',
            ),
            372 =>
            array (
                'id' => 1873,
                'zip' => '7546',
                'location' => 'Moschendorf',
            ),
            373 =>
            array (
                'id' => 1874,
                'zip' => '7550',
                'location' => 'Wörterberg',
            ),
            374 =>
            array (
                'id' => 1875,
                'zip' => '7551',
                'location' => 'Stegersbach',
            ),
            375 =>
            array (
                'id' => 1876,
                'zip' => '7552',
                'location' => 'Stinatz',
            ),
            376 =>
            array (
                'id' => 1877,
                'zip' => '7553',
                'location' => 'Bocksdorf',
            ),
            377 =>
            array (
                'id' => 1878,
                'zip' => '7554',
                'location' => 'Rohr im Burgenland',
            ),
            378 =>
            array (
                'id' => 1879,
                'zip' => '7561',
                'location' => 'Heiligenkreuz im Lafnitztal',
            ),
            379 =>
            array (
                'id' => 1880,
                'zip' => '7562',
                'location' => 'Eltendorf',
            ),
            380 =>
            array (
                'id' => 1881,
                'zip' => '7563',
                'location' => 'Königsdorf',
            ),
            381 =>
            array (
                'id' => 1882,
                'zip' => '7564',
                'location' => 'Dobersdorf',
            ),
            382 =>
            array (
                'id' => 1883,
                'zip' => '7571',
                'location' => 'Rudersdorf',
            ),
            383 =>
            array (
                'id' => 1884,
                'zip' => '7572',
                'location' => 'Deutsch Kaltenbrunn',
            ),
            384 =>
            array (
                'id' => 1885,
                'zip' => '7574',
                'location' => 'Burgauberg-Neudauberg',
            ),
            385 =>
            array (
                'id' => 1886,
                'zip' => '8000',
                'location' => 'Graz',
            ),
            386 =>
            array (
                'id' => 1887,
                'zip' => '8006',
                'location' => 'Graz',
            ),
            387 =>
            array (
                'id' => 1888,
                'zip' => '8010',
                'location' => 'Graz',
            ),
            388 =>
            array (
                'id' => 1889,
                'zip' => '8011',
                'location' => 'Graz Postfach',
            ),
            389 =>
            array (
                'id' => 1890,
                'zip' => '8012',
                'location' => 'Graz',
            ),
            390 =>
            array (
                'id' => 1891,
                'zip' => '8014',
                'location' => 'Hönigtal',
            ),
            391 =>
            array (
                'id' => 1892,
                'zip' => '8015',
                'location' => 'Graz',
            ),
            392 =>
            array (
                'id' => 1893,
                'zip' => '8016',
                'location' => 'Graz',
            ),
            393 =>
            array (
                'id' => 1894,
                'zip' => '8017',
                'location' => 'Graz',
            ),
            394 =>
            array (
                'id' => 1895,
                'zip' => '8019',
                'location' => 'Graz',
            ),
            395 =>
            array (
                'id' => 1896,
                'zip' => '8020',
                'location' => 'Graz',
            ),
            396 =>
            array (
                'id' => 1897,
                'zip' => '8021',
                'location' => 'Graz Postfach',
            ),
            397 =>
            array (
                'id' => 1898,
                'zip' => '8025',
                'location' => 'Graz',
            ),
            398 =>
            array (
                'id' => 1899,
                'zip' => '8026',
                'location' => 'Graz',
            ),
            399 =>
            array (
                'id' => 1900,
                'zip' => '8035',
                'location' => 'Graz',
            ),
            400 =>
            array (
                'id' => 1901,
                'zip' => '8036',
                'location' => 'Graz',
            ),
            401 =>
            array (
                'id' => 1902,
                'zip' => '8041',
                'location' => 'Graz-Liebenau',
            ),
            402 =>
            array (
                'id' => 1903,
                'zip' => '8042',
                'location' => 'Graz-St. Peter',
            ),
            403 =>
            array (
                'id' => 1904,
                'zip' => '8043',
                'location' => 'Graz-Kroisbach',
            ),
            404 =>
            array (
                'id' => 1905,
                'zip' => '8044',
                'location' => 'Graz-Mariatrost',
            ),
            405 =>
            array (
                'id' => 1906,
                'zip' => '8045',
                'location' => 'Graz-Andritz',
            ),
            406 =>
            array (
                'id' => 1907,
                'zip' => '8046',
                'location' => 'Graz-St. Veit',
            ),
            407 =>
            array (
                'id' => 1908,
                'zip' => '8047',
                'location' => 'Graz-Ragnitz',
            ),
            408 =>
            array (
                'id' => 1909,
                'zip' => '8049',
                'location' => 'Graz',
            ),
            409 =>
            array (
                'id' => 1910,
                'zip' => '8051',
                'location' => 'Graz-Gösting',
            ),
            410 =>
            array (
                'id' => 1911,
                'zip' => '8052',
                'location' => 'Graz-Wetzelsdorf',
            ),
            411 =>
            array (
                'id' => 1912,
                'zip' => '8053',
                'location' => 'Graz-Neuhart',
            ),
            412 =>
            array (
                'id' => 1913,
                'zip' => '8054',
                'location' => 'Graz-Straßgang',
            ),
            413 =>
            array (
                'id' => 1914,
                'zip' => '8055',
                'location' => 'Graz-Puntigam',
            ),
            414 =>
            array (
                'id' => 1915,
                'zip' => '8056',
                'location' => 'Graz',
            ),
            415 =>
            array (
                'id' => 1916,
                'zip' => '8057',
                'location' => 'Graz-Straßgang',
            ),
            416 =>
            array (
                'id' => 1917,
                'zip' => '8061',
                'location' => 'St. Radegund bei Graz',
            ),
            417 =>
            array (
                'id' => 1918,
                'zip' => '8062',
                'location' => 'Kumberg',
            ),
            418 =>
            array (
                'id' => 1919,
                'zip' => '8063',
                'location' => 'Eggersdorf bei Graz',
            ),
            419 =>
            array (
                'id' => 1920,
                'zip' => '8071',
                'location' => 'Hausmannstätten',
            ),
            420 =>
            array (
                'id' => 1921,
                'zip' => '8072',
                'location' => 'Fernitz',
            ),
            421 =>
            array (
                'id' => 1922,
                'zip' => '8073',
                'location' => 'Feldkirchen bei Graz',
            ),
            422 =>
            array (
                'id' => 1923,
                'zip' => '8074',
                'location' => 'Raaba',
            ),
            423 =>
            array (
                'id' => 1924,
                'zip' => '8075',
                'location' => 'Hart bei Graz',
            ),
            424 =>
            array (
                'id' => 1925,
                'zip' => '8076',
                'location' => 'Vasoldsberg',
            ),
            425 =>
            array (
                'id' => 1926,
                'zip' => '8077',
                'location' => 'Gössendorf',
            ),
            426 =>
            array (
                'id' => 1927,
                'zip' => '8081',
                'location' => 'Heiligenkreuz am Waasen',
            ),
            427 =>
            array (
                'id' => 1928,
                'zip' => '8082',
                'location' => 'Kirchbach in Steiermark',
            ),
            428 =>
            array (
                'id' => 1929,
                'zip' => '8083',
                'location' => 'St. Stefan im Rosental',
            ),
            429 =>
            array (
                'id' => 1930,
                'zip' => '8091',
                'location' => 'Jagerberg',
            ),
            430 =>
            array (
                'id' => 1931,
                'zip' => '8092',
                'location' => 'Mettersdorf am Saßbach',
            ),
            431 =>
            array (
                'id' => 1932,
                'zip' => '8093',
                'location' => 'St. Peter am Ottersbach',
            ),
            432 =>
            array (
                'id' => 1933,
                'zip' => '8101',
                'location' => 'Gratkorn',
            ),
            433 =>
            array (
                'id' => 1934,
                'zip' => '8102',
                'location' => 'Semriach',
            ),
            434 =>
            array (
                'id' => 1935,
                'zip' => '8103',
                'location' => 'Rein',
            ),
            435 =>
            array (
                'id' => 1936,
                'zip' => '8111',
                'location' => 'Judendorf-Straßengel',
            ),
            436 =>
            array (
                'id' => 1937,
                'zip' => '8112',
                'location' => 'Gratwein',
            ),
            437 =>
            array (
                'id' => 1938,
                'zip' => '8113',
                'location' => 'St. Oswald bei Plankenwarth',
            ),
            438 =>
            array (
                'id' => 1939,
                'zip' => '8114',
                'location' => 'Stübing',
            ),
            439 =>
            array (
                'id' => 1940,
                'zip' => '8120',
                'location' => 'Peggau',
            ),
            440 =>
            array (
                'id' => 1941,
                'zip' => '8121',
                'location' => 'Deutschfeistritz',
            ),
            441 =>
            array (
                'id' => 1942,
                'zip' => '8122',
                'location' => 'Waldstein',
            ),
            442 =>
            array (
                'id' => 1943,
                'zip' => '8124',
                'location' => 'Übelbach',
            ),
            443 =>
            array (
                'id' => 1944,
                'zip' => '8130',
                'location' => 'Frohnleiten',
            ),
            444 =>
            array (
                'id' => 1945,
                'zip' => '8131',
                'location' => 'Mixnitz',
            ),
            445 =>
            array (
                'id' => 1946,
                'zip' => '8132',
                'location' => 'Pernegg an der Mur',
            ),
            446 =>
            array (
                'id' => 1947,
                'zip' => '8141',
                'location' => 'Unterpremstätten',
            ),
            447 =>
            array (
                'id' => 1948,
                'zip' => '8142',
                'location' => 'Wundschuh',
            ),
            448 =>
            array (
                'id' => 1949,
                'zip' => '8143',
                'location' => 'Dobl',
            ),
            449 =>
            array (
                'id' => 1950,
                'zip' => '8144',
                'location' => 'Tobelbad',
            ),
            450 =>
            array (
                'id' => 1951,
                'zip' => '8151',
                'location' => 'Hitzendorf',
            ),
            451 =>
            array (
                'id' => 1952,
                'zip' => '8152',
                'location' => 'Stallhofen',
            ),
            452 =>
            array (
                'id' => 1953,
                'zip' => '8153',
                'location' => 'Geistthal',
            ),
            453 =>
            array (
                'id' => 1954,
                'zip' => '8160',
                'location' => 'Weiz',
            ),
            454 =>
            array (
                'id' => 1955,
                'zip' => '8162',
                'location' => 'Passail',
            ),
            455 =>
            array (
                'id' => 1956,
                'zip' => '8163',
                'location' => 'Fladnitz an der Teichalm',
            ),
            456 =>
            array (
                'id' => 1957,
                'zip' => '8171',
                'location' => 'St. Kathrein am Offenegg',
            ),
            457 =>
            array (
                'id' => 1958,
                'zip' => '8172',
                'location' => 'Heilbrunn',
            ),
            458 =>
            array (
                'id' => 1959,
                'zip' => '8181',
                'location' => 'St. Ruprecht an der Raab',
            ),
            459 =>
            array (
                'id' => 1960,
                'zip' => '8182',
                'location' => 'Puch bei Weiz',
            ),
            460 =>
            array (
                'id' => 1961,
                'zip' => '8183',
                'location' => 'Floing',
            ),
            461 =>
            array (
                'id' => 1962,
                'zip' => '8184',
                'location' => 'Anger',
            ),
            462 =>
            array (
                'id' => 1963,
                'zip' => '8190',
                'location' => 'Birkfeld',
            ),
            463 =>
            array (
                'id' => 1964,
                'zip' => '8191',
                'location' => 'Koglhof',
            ),
            464 =>
            array (
                'id' => 1965,
                'zip' => '8192',
                'location' => 'Strallegg',
            ),
            465 =>
            array (
                'id' => 1966,
                'zip' => '8193',
                'location' => 'Dorfviertel',
            ),
            466 =>
            array (
                'id' => 1967,
                'zip' => '8194',
                'location' => 'Waisenegg',
            ),
            467 =>
            array (
                'id' => 1968,
                'zip' => '8200',
                'location' => 'Gleisdorf',
            ),
            468 =>
            array (
                'id' => 1969,
                'zip' => '8211',
                'location' => 'Ilztal',
            ),
            469 =>
            array (
                'id' => 1970,
                'zip' => '8212',
                'location' => 'Pischelsdorf am Kulm',
            ),
            470 =>
            array (
                'id' => 1971,
                'zip' => '8213',
                'location' => 'Gersdorf  an der Feistritz',
            ),
            471 =>
            array (
                'id' => 1972,
                'zip' => '8221',
                'location' => 'Hirnsdorf',
            ),
            472 =>
            array (
                'id' => 1973,
                'zip' => '8222',
                'location' => 'St. Johann bei Herberstein',
            ),
            473 =>
            array (
                'id' => 1974,
                'zip' => '8223',
                'location' => 'Stubenberg am See',
            ),
            474 =>
            array (
                'id' => 1975,
                'zip' => '8224',
                'location' => 'Kaindorf bei Hartberg',
            ),
            475 =>
            array (
                'id' => 1976,
                'zip' => '8225',
                'location' => 'Pöllau bei Hartberg',
            ),
            476 =>
            array (
                'id' => 1977,
                'zip' => '8226',
                'location' => 'Obersaifen',
            ),
            477 =>
            array (
                'id' => 1978,
                'zip' => '8230',
                'location' => 'Hartberg',
            ),
            478 =>
            array (
                'id' => 1979,
                'zip' => '8232',
                'location' => 'Grafendorf bei Hartberg',
            ),
            479 =>
            array (
                'id' => 1980,
                'zip' => '8233',
                'location' => 'Lafnitz',
            ),
            480 =>
            array (
                'id' => 1981,
                'zip' => '8234',
                'location' => 'Rohrbach an der Lafnitz',
            ),
            481 =>
            array (
                'id' => 1982,
                'zip' => '8240',
                'location' => 'Friedberg',
            ),
            482 =>
            array (
                'id' => 1983,
                'zip' => '8241',
                'location' => 'Dechantskirchen',
            ),
            483 =>
            array (
                'id' => 1984,
                'zip' => '8242',
                'location' => 'St. Lorenzen am Wechsel',
            ),
            484 =>
            array (
                'id' => 1985,
                'zip' => '8243',
                'location' => 'Pinggau',
            ),
            485 =>
            array (
                'id' => 1986,
                'zip' => '8244',
                'location' => 'Schäffern',
            ),
            486 =>
            array (
                'id' => 1987,
                'zip' => '8250',
                'location' => 'Vorau',
            ),
            487 =>
            array (
                'id' => 1988,
                'zip' => '8251',
                'location' => 'Bruck an der Lafnitz',
            ),
            488 =>
            array (
                'id' => 1989,
                'zip' => '8252',
                'location' => 'Mönichwald',
            ),
            489 =>
            array (
                'id' => 1990,
                'zip' => '8253',
                'location' => 'Waldbach',
            ),
            490 =>
            array (
                'id' => 1991,
                'zip' => '8254',
                'location' => 'Wenigzell',
            ),
            491 =>
            array (
                'id' => 1992,
                'zip' => '8255',
                'location' => 'St. Jakob',
            ),
            492 =>
            array (
                'id' => 1993,
                'zip' => '8261',
                'location' => 'Sinabelkirchen',
            ),
            493 =>
            array (
                'id' => 1994,
                'zip' => '8262',
                'location' => 'Ilz',
            ),
            494 =>
            array (
                'id' => 1995,
                'zip' => '8263',
                'location' => 'Großwilfersdorf',
            ),
            495 =>
            array (
                'id' => 1996,
                'zip' => '8264',
                'location' => 'Hainersdorf',
            ),
            496 =>
            array (
                'id' => 1997,
                'zip' => '8265',
                'location' => 'Großsteinbach',
            ),
            497 =>
            array (
                'id' => 1998,
                'zip' => '8271',
                'location' => 'Bad Waltersdorf',
            ),
            498 =>
            array (
                'id' => 1999,
                'zip' => '8272',
                'location' => 'Sebersdorf',
            ),
            499 =>
            array (
                'id' => 2000,
                'zip' => '8273',
                'location' => 'Ebersdorf',
            ),
        ));
        \DB::table('zip_codes')->insert(array (
            0 =>
            array (
                'id' => 2001,
                'zip' => '8274',
                'location' => 'Buch',
            ),
            1 =>
            array (
                'id' => 2002,
                'zip' => '8280',
                'location' => 'Fürstenfeld',
            ),
            2 =>
            array (
                'id' => 2003,
                'zip' => '8282',
                'location' => 'Bad Loipersdorf',
            ),
            3 =>
            array (
                'id' => 2004,
                'zip' => '8283',
                'location' => 'Bad Blumau',
            ),
            4 =>
            array (
                'id' => 2005,
                'zip' => '8291',
                'location' => 'Burgau',
            ),
            5 =>
            array (
                'id' => 2006,
                'zip' => '8292',
                'location' => 'Neudau',
            ),
            6 =>
            array (
                'id' => 2007,
                'zip' => '8293',
                'location' => 'Wörth an der Lafnitz',
            ),
            7 =>
            array (
                'id' => 2008,
                'zip' => '8294',
                'location' => 'Unterrohr',
            ),
            8 =>
            array (
                'id' => 2009,
                'zip' => '8295',
                'location' => 'St. Johann in der Haide',
            ),
            9 =>
            array (
                'id' => 2010,
                'zip' => '8301',
                'location' => 'Laßnitzhöhe',
            ),
            10 =>
            array (
                'id' => 2011,
                'zip' => '8302',
                'location' => 'Nestelbach bei Graz',
            ),
            11 =>
            array (
                'id' => 2012,
                'zip' => '8311',
                'location' => 'Markt Hartmannsdorf',
            ),
            12 =>
            array (
                'id' => 2013,
                'zip' => '8312',
                'location' => 'Ottendorf an der Rittschein',
            ),
            13 =>
            array (
                'id' => 2014,
                'zip' => '8313',
                'location' => 'Breitenfeld an der Rittschein',
            ),
            14 =>
            array (
                'id' => 2015,
                'zip' => '8321',
                'location' => 'St. Margarethen an der Raab',
            ),
            15 =>
            array (
                'id' => 2016,
                'zip' => '8322',
                'location' => 'Studenzen',
            ),
            16 =>
            array (
                'id' => 2017,
                'zip' => '8323',
                'location' => 'St. Marein bei Graz',
            ),
            17 =>
            array (
                'id' => 2018,
                'zip' => '8324',
                'location' => 'Kirchberg an der Raab',
            ),
            18 =>
            array (
                'id' => 2019,
                'zip' => '8330',
                'location' => 'Feldbach',
            ),
            19 =>
            array (
                'id' => 2020,
                'zip' => '8332',
                'location' => 'Edelsbach bei Feldbach',
            ),
            20 =>
            array (
                'id' => 2021,
                'zip' => '8333',
                'location' => 'Riegersburg',
            ),
            21 =>
            array (
                'id' => 2022,
                'zip' => '8334',
                'location' => 'Lödersdorf',
            ),
            22 =>
            array (
                'id' => 2023,
                'zip' => '8341',
                'location' => 'Paldau',
            ),
            23 =>
            array (
                'id' => 2024,
                'zip' => '8342',
                'location' => 'Gnas',
            ),
            24 =>
            array (
                'id' => 2025,
                'zip' => '8343',
                'location' => 'Trautmannsdorf in Oststeiermark',
            ),
            25 =>
            array (
                'id' => 2026,
                'zip' => '8344',
                'location' => 'Bad Gleichenberg',
            ),
            26 =>
            array (
                'id' => 2027,
                'zip' => '8345',
                'location' => 'Straden',
            ),
            27 =>
            array (
                'id' => 2028,
                'zip' => '8350',
                'location' => 'Fehring',
            ),
            28 =>
            array (
                'id' => 2029,
                'zip' => '8352',
                'location' => 'Unterlamm',
            ),
            29 =>
            array (
                'id' => 2030,
                'zip' => '8353',
                'location' => 'Kapfenstein',
            ),
            30 =>
            array (
                'id' => 2031,
                'zip' => '8354',
                'location' => 'St. Anna am Aigen',
            ),
            31 =>
            array (
                'id' => 2032,
                'zip' => '8355',
                'location' => 'Tieschen',
            ),
            32 =>
            array (
                'id' => 2033,
                'zip' => '8361',
                'location' => 'Hatzendorf',
            ),
            33 =>
            array (
                'id' => 2034,
                'zip' => '8362',
                'location' => 'Söchau',
            ),
            34 =>
            array (
                'id' => 2035,
                'zip' => '8380',
                'location' => 'Jennersdorf',
            ),
            35 =>
            array (
                'id' => 2036,
                'zip' => '8382',
                'location' => 'Mogersdorf',
            ),
            36 =>
            array (
                'id' => 2037,
                'zip' => '8383',
                'location' => 'St. Martin an der Raab',
            ),
            37 =>
            array (
                'id' => 2038,
                'zip' => '8384',
                'location' => 'Minihof-Liebau',
            ),
            38 =>
            array (
                'id' => 2039,
                'zip' => '8385',
                'location' => 'Neuhaus am Klausenbach',
            ),
            39 =>
            array (
                'id' => 2040,
                'zip' => '8401',
                'location' => 'Kalsdorf bei Graz',
            ),
            40 =>
            array (
                'id' => 2041,
                'zip' => '8402',
                'location' => 'Werndorf',
            ),
            41 =>
            array (
                'id' => 2042,
                'zip' => '8403',
                'location' => 'Lebring',
            ),
            42 =>
            array (
                'id' => 2043,
                'zip' => '8404',
                'location' => 'Kalsdorf bei Graz',
            ),
            43 =>
            array (
                'id' => 2044,
                'zip' => '8410',
                'location' => 'Wildon',
            ),
            44 =>
            array (
                'id' => 2045,
                'zip' => '8411',
                'location' => 'Hengsberg',
            ),
            45 =>
            array (
                'id' => 2046,
                'zip' => '8412',
                'location' => 'Allerheiligen bei Wildon',
            ),
            46 =>
            array (
                'id' => 2047,
                'zip' => '8413',
                'location' => 'St. Georgen an der Stiefing',
            ),
            47 =>
            array (
                'id' => 2048,
                'zip' => '8421',
                'location' => 'Wolfsberg im Schwarzautal',
            ),
            48 =>
            array (
                'id' => 2049,
                'zip' => '8422',
                'location' => 'St. Nikolai ob Draßling',
            ),
            49 =>
            array (
                'id' => 2050,
                'zip' => '8423',
                'location' => 'St. Veit am Vogau',
            ),
            50 =>
            array (
                'id' => 2051,
                'zip' => '8424',
                'location' => 'Gabersdorf',
            ),
            51 =>
            array (
                'id' => 2052,
                'zip' => '8430',
                'location' => 'Leibnitz',
            ),
            52 =>
            array (
                'id' => 2053,
                'zip' => '8431',
                'location' => 'Gralla',
            ),
            53 =>
            array (
                'id' => 2054,
                'zip' => '8432',
                'location' => 'Kaindorf an der Sulm',
            ),
            54 =>
            array (
                'id' => 2055,
                'zip' => '8434',
                'location' => 'Tillmitsch',
            ),
            55 =>
            array (
                'id' => 2056,
                'zip' => '8435',
                'location' => 'Wagna',
            ),
            56 =>
            array (
                'id' => 2057,
                'zip' => '8441',
                'location' => 'Fresing',
            ),
            57 =>
            array (
                'id' => 2058,
                'zip' => '8442',
                'location' => 'Kitzeck im Sausal',
            ),
            58 =>
            array (
                'id' => 2059,
                'zip' => '8443',
                'location' => 'Gleinstätten',
            ),
            59 =>
            array (
                'id' => 2060,
                'zip' => '8444',
                'location' => 'St. Andrä im Sausal',
            ),
            60 =>
            array (
                'id' => 2061,
                'zip' => '8451',
                'location' => 'Heimschuh',
            ),
            61 =>
            array (
                'id' => 2062,
                'zip' => '8452',
                'location' => 'Großklein',
            ),
            62 =>
            array (
                'id' => 2063,
                'zip' => '8453',
                'location' => 'St. Johann im Saggautal',
            ),
            63 =>
            array (
                'id' => 2064,
                'zip' => '8454',
                'location' => 'Arnfels',
            ),
            64 =>
            array (
                'id' => 2065,
                'zip' => '8455',
                'location' => 'Oberhaag',
            ),
            65 =>
            array (
                'id' => 2066,
                'zip' => '8461',
                'location' => 'Ehrenhausen',
            ),
            66 =>
            array (
                'id' => 2067,
                'zip' => '8462',
                'location' => 'Gamlitz',
            ),
            67 =>
            array (
                'id' => 2068,
                'zip' => '8463',
                'location' => 'Leutschach',
            ),
            68 =>
            array (
                'id' => 2069,
                'zip' => '8471',
                'location' => 'Spielfeld',
            ),
            69 =>
            array (
                'id' => 2070,
                'zip' => '8472',
                'location' => 'Straß in Steiermark',
            ),
            70 =>
            array (
                'id' => 2071,
                'zip' => '8473',
                'location' => 'Weitersfeld an der Mur',
            ),
            71 =>
            array (
                'id' => 2072,
                'zip' => '8480',
                'location' => 'Mureck',
            ),
            72 =>
            array (
                'id' => 2073,
                'zip' => '8481',
                'location' => 'Weinburg am Saßbach',
            ),
            73 =>
            array (
                'id' => 2074,
                'zip' => '8482',
                'location' => 'Gosdorf',
            ),
            74 =>
            array (
                'id' => 2075,
                'zip' => '8483',
                'location' => 'Deutsch Goritz',
            ),
            75 =>
            array (
                'id' => 2076,
                'zip' => '8484',
                'location' => 'Unterpurkla',
            ),
            76 =>
            array (
                'id' => 2077,
                'zip' => '8490',
                'location' => 'Bad Radkersburg',
            ),
            77 =>
            array (
                'id' => 2078,
                'zip' => '8492',
                'location' => 'Halbenrain',
            ),
            78 =>
            array (
                'id' => 2079,
                'zip' => '8493',
                'location' => 'Klöch',
            ),
            79 =>
            array (
                'id' => 2080,
                'zip' => '8501',
                'location' => 'Lieboch',
            ),
            80 =>
            array (
                'id' => 2081,
                'zip' => '8502',
                'location' => 'Lannach',
            ),
            81 =>
            array (
                'id' => 2082,
                'zip' => '8503',
                'location' => 'St. Josef Weststeiermark',
            ),
            82 =>
            array (
                'id' => 2083,
                'zip' => '8504',
                'location' => 'Preding',
            ),
            83 =>
            array (
                'id' => 2084,
                'zip' => '8505',
                'location' => 'St. Nikolai im Sausal',
            ),
            84 =>
            array (
                'id' => 2085,
                'zip' => '8510',
                'location' => 'Stainz',
            ),
            85 =>
            array (
                'id' => 2086,
                'zip' => '8511',
                'location' => 'St. Stefan ob Stainz',
            ),
            86 =>
            array (
                'id' => 2087,
                'zip' => '8521',
                'location' => 'Wettmannstätten',
            ),
            87 =>
            array (
                'id' => 2088,
                'zip' => '8522',
                'location' => 'Groß St. Florian',
            ),
            88 =>
            array (
                'id' => 2089,
                'zip' => '8523',
                'location' => 'Frauental an der Laßnitz',
            ),
            89 =>
            array (
                'id' => 2090,
                'zip' => '8524',
                'location' => 'Bad Gams',
            ),
            90 =>
            array (
                'id' => 2091,
                'zip' => '8530',
                'location' => 'Deutschlandsberg',
            ),
            91 =>
            array (
                'id' => 2092,
                'zip' => '8541',
                'location' => 'Schwanberg',
            ),
            92 =>
            array (
                'id' => 2093,
                'zip' => '8542',
                'location' => 'St. Peter im Sulmtal',
            ),
            93 =>
            array (
                'id' => 2094,
                'zip' => '8543',
                'location' => 'St. Martin im Sulmtal',
            ),
            94 =>
            array (
                'id' => 2095,
                'zip' => '8544',
                'location' => 'Pölfing-Brunn',
            ),
            95 =>
            array (
                'id' => 2096,
                'zip' => '8551',
                'location' => 'Wies',
            ),
            96 =>
            array (
                'id' => 2097,
                'zip' => '8552',
                'location' => 'Eibiswald',
            ),
            97 =>
            array (
                'id' => 2098,
                'zip' => '8553',
                'location' => 'St. Oswald ob Eibiswald',
            ),
            98 =>
            array (
                'id' => 2099,
                'zip' => '8554',
                'location' => 'Soboth',
            ),
            99 =>
            array (
                'id' => 2100,
                'zip' => '8555',
                'location' => 'Wernersdorf',
            ),
            100 =>
            array (
                'id' => 2101,
                'zip' => '8561',
                'location' => 'Söding',
            ),
            101 =>
            array (
                'id' => 2102,
                'zip' => '8562',
                'location' => 'Mooskirchen',
            ),
            102 =>
            array (
                'id' => 2103,
                'zip' => '8563',
                'location' => 'Ligist',
            ),
            103 =>
            array (
                'id' => 2104,
                'zip' => '8564',
                'location' => 'Krottendorf-Gaisfeld',
            ),
            104 =>
            array (
                'id' => 2105,
                'zip' => '8565',
                'location' => 'St. Johann ob Hohenburg',
            ),
            105 =>
            array (
                'id' => 2106,
                'zip' => '8570',
                'location' => 'Voitsberg',
            ),
            106 =>
            array (
                'id' => 2107,
                'zip' => '8571',
                'location' => 'Bärnbach',
            ),
            107 =>
            array (
                'id' => 2108,
                'zip' => '8572',
                'location' => 'Bärnbach',
            ),
            108 =>
            array (
                'id' => 2109,
                'zip' => '8573',
                'location' => 'Kainach bei Voitsberg',
            ),
            109 =>
            array (
                'id' => 2110,
                'zip' => '8580',
                'location' => 'Köflach',
            ),
            110 =>
            array (
                'id' => 2111,
                'zip' => '8582',
                'location' => 'Rosental an der Kainach',
            ),
            111 =>
            array (
                'id' => 2112,
                'zip' => '8583',
                'location' => 'Edelschrott',
            ),
            112 =>
            array (
                'id' => 2113,
                'zip' => '8584',
                'location' => 'Hirschegg',
            ),
            113 =>
            array (
                'id' => 2114,
                'zip' => '8591',
                'location' => 'Maria Lankowitz',
            ),
            114 =>
            array (
                'id' => 2115,
                'zip' => '8592',
                'location' => 'Salla',
            ),
            115 =>
            array (
                'id' => 2116,
                'zip' => '8593',
                'location' => 'Graden',
            ),
            116 =>
            array (
                'id' => 2117,
                'zip' => '8600',
                'location' => 'Bruck an der Mur',
            ),
            117 =>
            array (
                'id' => 2118,
                'zip' => '8605',
                'location' => 'Kapfenberg',
            ),
            118 =>
            array (
                'id' => 2119,
                'zip' => '8606',
                'location' => 'Kapfenberg',
            ),
            119 =>
            array (
                'id' => 2120,
                'zip' => '8607',
                'location' => 'Kapfenberg',
            ),
            120 =>
            array (
                'id' => 2121,
                'zip' => '8611',
                'location' => 'St. Katharein an der Laming',
            ),
            121 =>
            array (
                'id' => 2122,
                'zip' => '8612',
                'location' => 'Tragöß-Oberort',
            ),
            122 =>
            array (
                'id' => 2123,
                'zip' => '8614',
                'location' => 'Breitenau',
            ),
            123 =>
            array (
                'id' => 2124,
                'zip' => '8616',
                'location' => 'Gasen',
            ),
            124 =>
            array (
                'id' => 2125,
                'zip' => '8621',
                'location' => 'Thörl',
            ),
            125 =>
            array (
                'id' => 2126,
                'zip' => '8622',
                'location' => 'Etmißl',
            ),
            126 =>
            array (
                'id' => 2127,
                'zip' => '8623',
                'location' => 'Aflenz Kurort',
            ),
            127 =>
            array (
                'id' => 2128,
                'zip' => '8624',
                'location' => 'Au',
            ),
            128 =>
            array (
                'id' => 2129,
                'zip' => '8625',
                'location' => 'Turnau',
            ),
            129 =>
            array (
                'id' => 2130,
                'zip' => '8630',
                'location' => 'Mariazell',
            ),
            130 =>
            array (
                'id' => 2131,
                'zip' => '8632',
                'location' => 'Gußwerk',
            ),
            131 =>
            array (
                'id' => 2132,
                'zip' => '8634',
                'location' => 'Wegscheid',
            ),
            132 =>
            array (
                'id' => 2133,
                'zip' => '8635',
                'location' => 'Gollrad',
            ),
            133 =>
            array (
                'id' => 2134,
                'zip' => '8636',
                'location' => 'Seewiesen',
            ),
            134 =>
            array (
                'id' => 2135,
                'zip' => '8641',
                'location' => 'St. Marein im Mürztal',
            ),
            135 =>
            array (
                'id' => 2136,
                'zip' => '8642',
                'location' => 'St. Lorenzen im Mürztal',
            ),
            136 =>
            array (
                'id' => 2137,
                'zip' => '8643',
                'location' => 'Allerheiligen im Mürztal',
            ),
            137 =>
            array (
                'id' => 2138,
                'zip' => '8644',
                'location' => 'Mürzhofen',
            ),
            138 =>
            array (
                'id' => 2139,
                'zip' => '8650',
                'location' => 'Kindberg',
            ),
            139 =>
            array (
                'id' => 2140,
                'zip' => '8652',
                'location' => 'Kindberg-Aumühl',
            ),
            140 =>
            array (
                'id' => 2141,
                'zip' => '8653',
                'location' => 'Stanz im Mürztal',
            ),
            141 =>
            array (
                'id' => 2142,
                'zip' => '8654',
                'location' => 'Fischbach',
            ),
            142 =>
            array (
                'id' => 2143,
                'zip' => '8661',
                'location' => 'Wartberg im Mürztal',
            ),
            143 =>
            array (
                'id' => 2144,
                'zip' => '8662',
                'location' => 'Mitterdorf im Mürztal',
            ),
            144 =>
            array (
                'id' => 2145,
                'zip' => '8663',
                'location' => 'Dorf Veitsch',
            ),
            145 =>
            array (
                'id' => 2146,
                'zip' => '8664',
                'location' => 'Großveitsch',
            ),
            146 =>
            array (
                'id' => 2147,
                'zip' => '8665',
                'location' => 'Langenwang',
            ),
            147 =>
            array (
                'id' => 2148,
                'zip' => '8670',
                'location' => 'Krieglach',
            ),
            148 =>
            array (
                'id' => 2149,
                'zip' => '8671',
                'location' => 'Alpl',
            ),
            149 =>
            array (
                'id' => 2150,
                'zip' => '8672',
                'location' => 'St. Kathrein am Hauenstein',
            ),
            150 =>
            array (
                'id' => 2151,
                'zip' => '8673',
                'location' => 'Ratten',
            ),
            151 =>
            array (
                'id' => 2152,
                'zip' => '8674',
                'location' => 'Rettenegg',
            ),
            152 =>
            array (
                'id' => 2153,
                'zip' => '8680',
                'location' => 'Mürzzuschlag',
            ),
            153 =>
            array (
                'id' => 2154,
                'zip' => '8682',
                'location' => 'Mürzzuschlag-Hönigsberg',
            ),
            154 =>
            array (
                'id' => 2155,
                'zip' => '8684',
                'location' => 'Spital am Semmering',
            ),
            155 =>
            array (
                'id' => 2156,
                'zip' => '8685',
                'location' => 'Steinhaus am Semmering',
            ),
            156 =>
            array (
                'id' => 2157,
                'zip' => '8691',
                'location' => 'Kapellen',
            ),
            157 =>
            array (
                'id' => 2158,
                'zip' => '8692',
                'location' => 'Neuberg an der Mürz',
            ),
            158 =>
            array (
                'id' => 2159,
                'zip' => '8693',
                'location' => 'Mürzsteg',
            ),
            159 =>
            array (
                'id' => 2160,
                'zip' => '8694',
                'location' => 'Frein an der Mürz',
            ),
            160 =>
            array (
                'id' => 2161,
                'zip' => '8700',
                'location' => 'Leoben',
            ),
            161 =>
            array (
                'id' => 2162,
                'zip' => '8704',
                'location' => 'Leoben',
            ),
            162 =>
            array (
                'id' => 2163,
                'zip' => '8707',
                'location' => 'Leoben',
            ),
            163 =>
            array (
                'id' => 2164,
                'zip' => '8709',
                'location' => 'Leoben-Lerchenfeld',
            ),
            164 =>
            array (
                'id' => 2165,
                'zip' => '8712',
                'location' => 'Niklasdorf',
            ),
            165 =>
            array (
                'id' => 2166,
                'zip' => '8713',
                'location' => 'St. Stefan ob Leoben',
            ),
            166 =>
            array (
                'id' => 2167,
                'zip' => '8714',
                'location' => 'Kraubath an der Mur',
            ),
            167 =>
            array (
                'id' => 2168,
                'zip' => '8715',
                'location' => 'St. Lorenzen bei Knittelfeld',
            ),
            168 =>
            array (
                'id' => 2169,
                'zip' => '8720',
                'location' => 'Knittelfeld',
            ),
            169 =>
            array (
                'id' => 2170,
                'zip' => '8722',
                'location' => 'Knittelfeld',
            ),
            170 =>
            array (
                'id' => 2171,
                'zip' => '8723',
                'location' => 'Kobenz',
            ),
            171 =>
            array (
                'id' => 2172,
                'zip' => '8724',
                'location' => 'Spielberg',
            ),
            172 =>
            array (
                'id' => 2173,
                'zip' => '8731',
                'location' => 'Bischoffeld',
            ),
            173 =>
            array (
                'id' => 2174,
                'zip' => '8732',
                'location' => 'Seckau',
            ),
            174 =>
            array (
                'id' => 2175,
                'zip' => '8733',
                'location' => 'St. Marein bei Knittelfeld',
            ),
            175 =>
            array (
                'id' => 2176,
                'zip' => '8734',
                'location' => 'Großlobming',
            ),
            176 =>
            array (
                'id' => 2177,
                'zip' => '8740',
                'location' => 'Zeltweg',
            ),
            177 =>
            array (
                'id' => 2178,
                'zip' => '8741',
                'location' => 'Weißkirchen in Steiermark',
            ),
            178 =>
            array (
                'id' => 2179,
                'zip' => '8742',
                'location' => 'Obdach',
            ),
            179 =>
            array (
                'id' => 2180,
                'zip' => '8743',
                'location' => 'Eppenstein',
            ),
            180 =>
            array (
                'id' => 2181,
                'zip' => '8750',
                'location' => 'Judenburg',
            ),
            181 =>
            array (
                'id' => 2182,
                'zip' => '8751',
                'location' => 'Judenburg - Murdorf',
            ),
            182 =>
            array (
                'id' => 2183,
                'zip' => '8753',
                'location' => 'Fohnsdorf',
            ),
            183 =>
            array (
                'id' => 2184,
                'zip' => '8754',
                'location' => 'Thalheim',
            ),
            184 =>
            array (
                'id' => 2185,
                'zip' => '8755',
                'location' => 'St. Peter ob Judenburg',
            ),
            185 =>
            array (
                'id' => 2186,
                'zip' => '8756',
                'location' => 'St. Georgen ob Judenburg',
            ),
            186 =>
            array (
                'id' => 2187,
                'zip' => '8761',
                'location' => 'Pöls',
            ),
            187 =>
            array (
                'id' => 2188,
                'zip' => '8762',
                'location' => 'Oberzeiring',
            ),
            188 =>
            array (
                'id' => 2189,
                'zip' => '8763',
                'location' => 'Möderbrugg',
            ),
            189 =>
            array (
                'id' => 2190,
                'zip' => '8764',
                'location' => 'Pusterwald',
            ),
            190 =>
            array (
                'id' => 2191,
                'zip' => '8765',
                'location' => 'St. Johann am Tauern',
            ),
            191 =>
            array (
                'id' => 2192,
                'zip' => '8770',
                'location' => 'St. Michael in Obersteiermark',
            ),
            192 =>
            array (
                'id' => 2193,
                'zip' => '8772',
                'location' => 'Timmersdorf',
            ),
            193 =>
            array (
                'id' => 2194,
                'zip' => '8773',
                'location' => 'Kammern im Liesingtal',
            ),
            194 =>
            array (
                'id' => 2195,
                'zip' => '8774',
                'location' => 'Mautern in Steiermark',
            ),
            195 =>
            array (
                'id' => 2196,
                'zip' => '8775',
                'location' => 'Kalwang',
            ),
            196 =>
            array (
                'id' => 2197,
                'zip' => '8781',
                'location' => 'Wald am Schoberpaß',
            ),
            197 =>
            array (
                'id' => 2198,
                'zip' => '8782',
                'location' => 'Treglwang',
            ),
            198 =>
            array (
                'id' => 2199,
                'zip' => '8783',
                'location' => 'Gaishorn am See',
            ),
            199 =>
            array (
                'id' => 2200,
                'zip' => '8784',
                'location' => 'Trieben',
            ),
            200 =>
            array (
                'id' => 2201,
                'zip' => '8785',
                'location' => 'Hohentauern',
            ),
            201 =>
            array (
                'id' => 2202,
                'zip' => '8786',
                'location' => 'Rottenmann',
            ),
            202 =>
            array (
                'id' => 2203,
                'zip' => '8790',
                'location' => 'Eisenerz',
            ),
            203 =>
            array (
                'id' => 2204,
                'zip' => '8792',
                'location' => 'St. Peter-Freienstein',
            ),
            204 =>
            array (
                'id' => 2205,
                'zip' => '8793',
                'location' => 'Trofaiach',
            ),
            205 =>
            array (
                'id' => 2206,
                'zip' => '8794',
                'location' => 'Vordernberg',
            ),
            206 =>
            array (
                'id' => 2207,
                'zip' => '8795',
                'location' => 'Radmer',
            ),
            207 =>
            array (
                'id' => 2208,
                'zip' => '8800',
                'location' => 'Unzmarkt',
            ),
            208 =>
            array (
                'id' => 2209,
                'zip' => '8811',
                'location' => 'Scheifling',
            ),
            209 =>
            array (
                'id' => 2210,
                'zip' => '8812',
                'location' => 'Mariahof',
            ),
            210 =>
            array (
                'id' => 2211,
                'zip' => '8813',
                'location' => 'St. Lambrecht',
            ),
            211 =>
            array (
                'id' => 2212,
                'zip' => '8820',
                'location' => 'Neumarkt in Steiermark',
            ),
            212 =>
            array (
                'id' => 2213,
                'zip' => '8822',
                'location' => 'Mühlen',
            ),
            213 =>
            array (
                'id' => 2214,
                'zip' => '8831',
                'location' => 'Niederwölz',
            ),
            214 =>
            array (
                'id' => 2215,
                'zip' => '8832',
                'location' => 'Oberwölz',
            ),
            215 =>
            array (
                'id' => 2216,
                'zip' => '8833',
                'location' => 'Teufenbach',
            ),
            216 =>
            array (
                'id' => 2217,
                'zip' => '8841',
                'location' => 'Frojach',
            ),
            217 =>
            array (
                'id' => 2218,
                'zip' => '8842',
                'location' => 'Katsch an der Mur',
            ),
            218 =>
            array (
                'id' => 2219,
                'zip' => '8843',
                'location' => 'St. Peter am Kammersberg',
            ),
            219 =>
            array (
                'id' => 2220,
                'zip' => '8844',
                'location' => 'Schöder',
            ),
            220 =>
            array (
                'id' => 2221,
                'zip' => '8850',
                'location' => 'Murau',
            ),
            221 =>
            array (
                'id' => 2222,
                'zip' => '8852',
                'location' => 'Stolzalpe',
            ),
            222 =>
            array (
                'id' => 2223,
                'zip' => '8853',
                'location' => 'Ranten',
            ),
            223 =>
            array (
                'id' => 2224,
                'zip' => '8854',
                'location' => 'Krakaudorf',
            ),
            224 =>
            array (
                'id' => 2225,
                'zip' => '8861',
                'location' => 'St. Georgen ob Murau',
            ),
            225 =>
            array (
                'id' => 2226,
                'zip' => '8862',
                'location' => 'Stadl an der Mur',
            ),
            226 =>
            array (
                'id' => 2227,
                'zip' => '8863',
                'location' => 'Predlitz',
            ),
            227 =>
            array (
                'id' => 2228,
                'zip' => '8864',
                'location' => 'Turrach',
            ),
            228 =>
            array (
                'id' => 2229,
                'zip' => '8900',
                'location' => 'Selzthal',
            ),
            229 =>
            array (
                'id' => 2230,
                'zip' => '8903',
                'location' => 'Lassing',
            ),
            230 =>
            array (
                'id' => 2231,
                'zip' => '8904',
                'location' => 'Ardning',
            ),
            231 =>
            array (
                'id' => 2232,
                'zip' => '8911',
                'location' => 'Admont',
            ),
            232 =>
            array (
                'id' => 2233,
                'zip' => '8912',
                'location' => 'Johnsbach',
            ),
            233 =>
            array (
                'id' => 2234,
                'zip' => '8913',
                'location' => 'Weng',
            ),
            234 =>
            array (
                'id' => 2235,
                'zip' => '8920',
                'location' => 'Hieflau',
            ),
            235 =>
            array (
                'id' => 2236,
                'zip' => '8921',
                'location' => 'Lainbach',
            ),
            236 =>
            array (
                'id' => 2237,
                'zip' => '8922',
                'location' => 'Gams bei Hieflau',
            ),
            237 =>
            array (
                'id' => 2238,
                'zip' => '8923',
                'location' => 'Palfau',
            ),
            238 =>
            array (
                'id' => 2239,
                'zip' => '8924',
                'location' => 'Wildalpen',
            ),
            239 =>
            array (
                'id' => 2240,
                'zip' => '8931',
                'location' => 'Landl',
            ),
            240 =>
            array (
                'id' => 2241,
                'zip' => '8932',
                'location' => 'Weißenbach an der Enns',
            ),
            241 =>
            array (
                'id' => 2242,
                'zip' => '8933',
                'location' => 'St. Gallen',
            ),
            242 =>
            array (
                'id' => 2243,
                'zip' => '8934',
                'location' => 'Altenmarkt bei St. Gallen',
            ),
            243 =>
            array (
                'id' => 2244,
                'zip' => '8940',
                'location' => 'Liezen',
            ),
            244 =>
            array (
                'id' => 2245,
                'zip' => '8941',
                'location' => 'Weißenbach bei Liezen',
            ),
            245 =>
            array (
                'id' => 2246,
                'zip' => '8942',
                'location' => 'Wörschach',
            ),
            246 =>
            array (
                'id' => 2247,
                'zip' => '8943',
                'location' => 'Aigen im Ennstal',
            ),
            247 =>
            array (
                'id' => 2248,
                'zip' => '8950',
                'location' => 'Stainach',
            ),
            248 =>
            array (
                'id' => 2249,
                'zip' => '8951',
                'location' => 'Trautenfels',
            ),
            249 =>
            array (
                'id' => 2250,
                'zip' => '8952',
                'location' => 'Irdning',
            ),
            250 =>
            array (
                'id' => 2251,
                'zip' => '8953',
                'location' => 'Donnersbach',
            ),
            251 =>
            array (
                'id' => 2252,
                'zip' => '8954',
                'location' => 'St. Martin am Grimming',
            ),
            252 =>
            array (
                'id' => 2253,
                'zip' => '8960',
                'location' => 'Öblarn',
            ),
            253 =>
            array (
                'id' => 2254,
                'zip' => '8961',
                'location' => 'Stein an der Enns',
            ),
            254 =>
            array (
                'id' => 2255,
                'zip' => '8962',
                'location' => 'Gröbming',
            ),
            255 =>
            array (
                'id' => 2256,
                'zip' => '8963',
                'location' => 'Sankt Nikolai im Sölktal',
            ),
            256 =>
            array (
                'id' => 2257,
                'zip' => '8965',
                'location' => 'Pruggern',
            ),
            257 =>
            array (
                'id' => 2258,
                'zip' => '8966',
                'location' => 'Aich-Assach',
            ),
            258 =>
            array (
                'id' => 2259,
                'zip' => '8967',
                'location' => 'Haus',
            ),
            259 =>
            array (
                'id' => 2260,
                'zip' => '8970',
                'location' => 'Schladming',
            ),
            260 =>
            array (
                'id' => 2261,
                'zip' => '8971',
                'location' => 'Rohrmoos-Untertal',
            ),
            261 =>
            array (
                'id' => 2262,
                'zip' => '8972',
                'location' => 'Ramsau',
            ),
            262 =>
            array (
                'id' => 2263,
                'zip' => '8973',
                'location' => 'Pichl',
            ),
            263 =>
            array (
                'id' => 2264,
                'zip' => '8974',
                'location' => 'Mandling',
            ),
            264 =>
            array (
                'id' => 2265,
                'zip' => '8982',
                'location' => 'Tauplitz',
            ),
            265 =>
            array (
                'id' => 2266,
                'zip' => '8983',
                'location' => 'Bad Mitterndorf',
            ),
            266 =>
            array (
                'id' => 2267,
                'zip' => '8984',
                'location' => 'Kainisch',
            ),
            267 =>
            array (
                'id' => 2268,
                'zip' => '8990',
                'location' => 'Bad Aussee',
            ),
            268 =>
            array (
                'id' => 2269,
                'zip' => '8992',
                'location' => 'Altaussee',
            ),
            269 =>
            array (
                'id' => 2270,
                'zip' => '8993',
                'location' => 'Grundlsee',
            ),
            270 =>
            array (
                'id' => 2271,
                'zip' => '9000',
                'location' => 'Villach',
            ),
            271 =>
            array (
                'id' => 2272,
                'zip' => '9010',
                'location' => 'Klagenfurt am Wörthersee',
            ),
            272 =>
            array (
                'id' => 2273,
                'zip' => '9020',
                'location' => 'Klagenfurt am Wörthersee',
            ),
            273 =>
            array (
                'id' => 2274,
                'zip' => '9021',
                'location' => 'Klagenfurt am Wörthersee Postfach',
            ),
            274 =>
            array (
                'id' => 2275,
                'zip' => '9022',
                'location' => 'Klagenfurt am Wörthersee',
            ),
            275 =>
            array (
                'id' => 2276,
                'zip' => '9024',
                'location' => 'Klagenfurt am Wörthersee',
            ),
            276 =>
            array (
                'id' => 2277,
                'zip' => '9025',
                'location' => 'Klagenfurt am Wörthersee',
            ),
            277 =>
            array (
                'id' => 2278,
                'zip' => '9026',
                'location' => 'Klagenfurt am Wörthersee',
            ),
            278 =>
            array (
                'id' => 2279,
                'zip' => '9027',
                'location' => 'Klagenfurt am Wörthersee',
            ),
            279 =>
            array (
                'id' => 2280,
                'zip' => '9028',
                'location' => 'Klagenfurt am Wörthersee',
            ),
            280 =>
            array (
                'id' => 2281,
                'zip' => '9033',
                'location' => 'Klagenfurt',
            ),
            281 =>
            array (
                'id' => 2282,
                'zip' => '9034',
                'location' => 'Klagenfurt',
            ),
            282 =>
            array (
                'id' => 2283,
                'zip' => '9061',
                'location' => 'Klagenfurt-Wölfnitz',
            ),
            283 =>
            array (
                'id' => 2284,
                'zip' => '9062',
                'location' => 'Moosburg',
            ),
            284 =>
            array (
                'id' => 2285,
                'zip' => '9063',
                'location' => 'Maria Saal',
            ),
            285 =>
            array (
                'id' => 2286,
                'zip' => '9064',
                'location' => 'Pischeldorf',
            ),
            286 =>
            array (
                'id' => 2287,
                'zip' => '9065',
                'location' => 'Ebenthal',
            ),
            287 =>
            array (
                'id' => 2288,
                'zip' => '9071',
                'location' => 'Köttmannsdorf',
            ),
            288 =>
            array (
                'id' => 2289,
                'zip' => '9072',
                'location' => 'Ludmannsdorf',
            ),
            289 =>
            array (
                'id' => 2290,
                'zip' => '9073',
                'location' => 'Klagenfurt-Viktring',
            ),
            290 =>
            array (
                'id' => 2291,
                'zip' => '9074',
                'location' => 'Keutschach',
            ),
            291 =>
            array (
                'id' => 2292,
                'zip' => '9081',
                'location' => 'Reifnitz',
            ),
            292 =>
            array (
                'id' => 2293,
                'zip' => '9082',
                'location' => 'Maria Wörth',
            ),
            293 =>
            array (
                'id' => 2294,
                'zip' => '9100',
                'location' => 'Völkermarkt',
            ),
            294 =>
            array (
                'id' => 2295,
                'zip' => '9102',
                'location' => 'Mittertrixen',
            ),
            295 =>
            array (
                'id' => 2296,
                'zip' => '9103',
                'location' => 'Diex',
            ),
            296 =>
            array (
                'id' => 2297,
                'zip' => '9104',
                'location' => 'Pustritz',
            ),
            297 =>
            array (
                'id' => 2298,
                'zip' => '9111',
                'location' => 'Haimburg',
            ),
            298 =>
            array (
                'id' => 2299,
                'zip' => '9112',
                'location' => 'Griffen',
            ),
            299 =>
            array (
                'id' => 2300,
                'zip' => '9113',
                'location' => 'Ruden',
            ),
            300 =>
            array (
                'id' => 2301,
                'zip' => '9121',
                'location' => 'Tainach',
            ),
            301 =>
            array (
                'id' => 2302,
                'zip' => '9122',
                'location' => 'St. Kanzian am Klopeiner See',
            ),
            302 =>
            array (
                'id' => 2303,
                'zip' => '9123',
                'location' => 'St. Primus',
            ),
            303 =>
            array (
                'id' => 2304,
                'zip' => '9125',
                'location' => 'Kühnsdorf',
            ),
            304 =>
            array (
                'id' => 2305,
                'zip' => '9130',
                'location' => 'Poggersdorf',
            ),
            305 =>
            array (
                'id' => 2306,
                'zip' => '9131',
                'location' => 'Grafenstein',
            ),
            306 =>
            array (
                'id' => 2307,
                'zip' => '9132',
                'location' => 'Gallizien',
            ),
            307 =>
            array (
                'id' => 2308,
                'zip' => '9133',
                'location' => 'Sittersdorf',
            ),
            308 =>
            array (
                'id' => 2309,
                'zip' => '9135',
                'location' => 'Bad Eisenkappel',
            ),
            309 =>
            array (
                'id' => 2310,
                'zip' => '9141',
                'location' => 'Eberndorf',
            ),
            310 =>
            array (
                'id' => 2311,
                'zip' => '9142',
                'location' => 'Globasnitz',
            ),
            311 =>
            array (
                'id' => 2312,
                'zip' => '9143',
                'location' => 'St. Michael ob Bleiburg',
            ),
            312 =>
            array (
                'id' => 2313,
                'zip' => '9150',
                'location' => 'Bleiburg',
            ),
            313 =>
            array (
                'id' => 2314,
                'zip' => '9155',
                'location' => 'Neuhaus',
            ),
            314 =>
            array (
                'id' => 2315,
                'zip' => '9161',
                'location' => 'Maria Rain',
            ),
            315 =>
            array (
                'id' => 2316,
                'zip' => '9162',
                'location' => 'Strau',
            ),
            316 =>
            array (
                'id' => 2317,
                'zip' => '9163',
                'location' => 'Unterbergen',
            ),
            317 =>
            array (
                'id' => 2318,
                'zip' => '9170',
                'location' => 'Ferlach',
            ),
            318 =>
            array (
                'id' => 2319,
                'zip' => '9171',
                'location' => 'Ferlach',
            ),
            319 =>
            array (
                'id' => 2320,
                'zip' => '9172',
                'location' => 'Zell-Pfarre',
            ),
            320 =>
            array (
                'id' => 2321,
                'zip' => '9173',
                'location' => 'St. Margareten im Rosental',
            ),
            321 =>
            array (
                'id' => 2322,
                'zip' => '9181',
                'location' => 'Feistritz im Rosental',
            ),
            322 =>
            array (
                'id' => 2323,
                'zip' => '9182',
                'location' => 'Maria Elend',
            ),
            323 =>
            array (
                'id' => 2324,
                'zip' => '9183',
                'location' => 'Rosenbach',
            ),
            324 =>
            array (
                'id' => 2325,
                'zip' => '9184',
                'location' => 'St. Jakob im Rosental',
            ),
            325 =>
            array (
                'id' => 2326,
                'zip' => '9201',
                'location' => 'Krumpendorf',
            ),
            326 =>
            array (
                'id' => 2327,
                'zip' => '9210',
                'location' => 'Pörtschach am Wörther See',
            ),
            327 =>
            array (
                'id' => 2328,
                'zip' => '9212',
                'location' => 'Techelsberg am Wörther See',
            ),
            328 =>
            array (
                'id' => 2329,
                'zip' => '9220',
                'location' => 'Velden am Wörther See',
            ),
            329 =>
            array (
                'id' => 2330,
                'zip' => '9231',
                'location' => 'Köstenberg',
            ),
            330 =>
            array (
                'id' => 2331,
                'zip' => '9232',
                'location' => 'Rosegg',
            ),
            331 =>
            array (
                'id' => 2332,
                'zip' => '9241',
                'location' => 'Wernberg',
            ),
            332 =>
            array (
                'id' => 2333,
                'zip' => '9300',
                'location' => 'St. Veit an der Glan',
            ),
            333 =>
            array (
                'id' => 2334,
                'zip' => '9311',
                'location' => 'Kraig',
            ),
            334 =>
            array (
                'id' => 2335,
                'zip' => '9312',
                'location' => 'Meiselding',
            ),
            335 =>
            array (
                'id' => 2336,
                'zip' => '9313',
                'location' => 'St. Georgen am Längsee',
            ),
            336 =>
            array (
                'id' => 2337,
                'zip' => '9314',
                'location' => 'Launsdorf',
            ),
            337 =>
            array (
                'id' => 2338,
                'zip' => '9321',
                'location' => 'Kappel am Krappfeld',
            ),
            338 =>
            array (
                'id' => 2339,
                'zip' => '9322',
                'location' => 'Micheldorf',
            ),
            339 =>
            array (
                'id' => 2340,
                'zip' => '9323',
                'location' => 'Wildbad Einöd',
            ),
            340 =>
            array (
                'id' => 2341,
                'zip' => '9330',
                'location' => 'Treibach-Althofen',
            ),
            341 =>
            array (
                'id' => 2342,
                'zip' => '9334',
                'location' => 'Guttaring',
            ),
            342 =>
            array (
                'id' => 2343,
                'zip' => '9335',
                'location' => 'Lölling',
            ),
            343 =>
            array (
                'id' => 2344,
                'zip' => '9341',
                'location' => 'Straßburg',
            ),
            344 =>
            array (
                'id' => 2345,
                'zip' => '9342',
                'location' => 'Gurk',
            ),
            345 =>
            array (
                'id' => 2346,
                'zip' => '9343',
                'location' => 'Zweinitz',
            ),
            346 =>
            array (
                'id' => 2347,
                'zip' => '9344',
                'location' => 'Weitensfeld',
            ),
            347 =>
            array (
                'id' => 2348,
                'zip' => '9345',
                'location' => 'Kleinglödnitz',
            ),
            348 =>
            array (
                'id' => 2349,
                'zip' => '9346',
                'location' => 'Glödnitz',
            ),
            349 =>
            array (
                'id' => 2350,
                'zip' => '9360',
                'location' => 'Friesach',
            ),
            350 =>
            array (
                'id' => 2351,
                'zip' => '9361',
                'location' => 'St. Salvator',
            ),
            351 =>
            array (
                'id' => 2352,
                'zip' => '9362',
                'location' => 'Grades',
            ),
            352 =>
            array (
                'id' => 2353,
                'zip' => '9363',
                'location' => 'Metnitz',
            ),
            353 =>
            array (
                'id' => 2354,
                'zip' => '9371',
                'location' => 'Brückl',
            ),
            354 =>
            array (
                'id' => 2355,
                'zip' => '9372',
                'location' => 'Eberstein',
            ),
            355 =>
            array (
                'id' => 2356,
                'zip' => '9373',
                'location' => 'Klein St. Paul',
            ),
            356 =>
            array (
                'id' => 2357,
                'zip' => '9374',
                'location' => 'Wieting',
            ),
            357 =>
            array (
                'id' => 2358,
                'zip' => '9375',
                'location' => 'Hüttenberg',
            ),
            358 =>
            array (
                'id' => 2359,
                'zip' => '9376',
                'location' => 'Knappenberg',
            ),
            359 =>
            array (
                'id' => 2360,
                'zip' => '9400',
                'location' => 'Wolfsberg',
            ),
            360 =>
            array (
                'id' => 2361,
                'zip' => '9402',
                'location' => 'Wolfsberg, Kärnten',
            ),
            361 =>
            array (
                'id' => 2362,
                'zip' => '9411',
                'location' => 'St. Michael',
            ),
            362 =>
            array (
                'id' => 2363,
                'zip' => '9412',
                'location' => 'St. Margarethen im Lavanttal',
            ),
            363 =>
            array (
                'id' => 2364,
                'zip' => '9413',
                'location' => 'St. Gertraud',
            ),
            364 =>
            array (
                'id' => 2365,
                'zip' => '9421',
                'location' => 'Eitweg',
            ),
            365 =>
            array (
                'id' => 2366,
                'zip' => '9422',
                'location' => 'Maria Rojach',
            ),
            366 =>
            array (
                'id' => 2367,
                'zip' => '9423',
                'location' => 'St. Georgen',
            ),
            367 =>
            array (
                'id' => 2368,
                'zip' => '9431',
                'location' => 'St. Stefan',
            ),
            368 =>
            array (
                'id' => 2369,
                'zip' => '9433',
                'location' => 'St. Andrä',
            ),
            369 =>
            array (
                'id' => 2370,
                'zip' => '9441',
                'location' => 'Twimberg',
            ),
            370 =>
            array (
                'id' => 2371,
                'zip' => '9451',
                'location' => 'Preitenegg',
            ),
            371 =>
            array (
                'id' => 2372,
                'zip' => '9461',
                'location' => 'Prebl',
            ),
            372 =>
            array (
                'id' => 2373,
                'zip' => '9462',
                'location' => 'Bad St. Leonhard im Lavanttal',
            ),
            373 =>
            array (
                'id' => 2374,
                'zip' => '9463',
                'location' => 'Reichenfels',
            ),
            374 =>
            array (
                'id' => 2375,
                'zip' => '9470',
                'location' => 'St. Paul im Lavanttal',
            ),
            375 =>
            array (
                'id' => 2376,
                'zip' => '9472',
                'location' => 'Ettendorf',
            ),
            376 =>
            array (
                'id' => 2377,
                'zip' => '9473',
                'location' => 'Lavamünd',
            ),
            377 =>
            array (
                'id' => 2378,
                'zip' => '9500',
                'location' => 'Villach',
            ),
            378 =>
            array (
                'id' => 2379,
                'zip' => '9501',
                'location' => 'Villach',
            ),
            379 =>
            array (
                'id' => 2380,
                'zip' => '9503',
                'location' => 'Villach',
            ),
            380 =>
            array (
                'id' => 2381,
                'zip' => '9504',
                'location' => 'Villach-Warmbad Villach',
            ),
            381 =>
            array (
                'id' => 2382,
                'zip' => '9507',
                'location' => 'Villach',
            ),
            382 =>
            array (
                'id' => 2383,
                'zip' => '9509',
                'location' => 'Zauchen',
            ),
            383 =>
            array (
                'id' => 2384,
                'zip' => '9520',
                'location' => 'Sattendorf',
            ),
            384 =>
            array (
                'id' => 2385,
                'zip' => '9521',
                'location' => 'Treffen',
            ),
            385 =>
            array (
                'id' => 2386,
                'zip' => '9523',
                'location' => 'Villach-Landskron',
            ),
            386 =>
            array (
                'id' => 2387,
                'zip' => '9524',
                'location' => 'Villach-St. Magdalen',
            ),
            387 =>
            array (
                'id' => 2388,
                'zip' => '9530',
                'location' => 'Bad Bleiberg',
            ),
            388 =>
            array (
                'id' => 2389,
                'zip' => '9531',
                'location' => 'Kreuth',
            ),
            389 =>
            array (
                'id' => 2390,
                'zip' => '9535',
                'location' => 'Schiefling am Wörthersee',
            ),
            390 =>
            array (
                'id' => 2391,
                'zip' => '9536',
                'location' => 'St. Egyden',
            ),
            391 =>
            array (
                'id' => 2392,
                'zip' => '9541',
                'location' => 'Einöde',
            ),
            392 =>
            array (
                'id' => 2393,
                'zip' => '9542',
                'location' => 'Afritz',
            ),
            393 =>
            array (
                'id' => 2394,
                'zip' => '9543',
                'location' => 'Arriach',
            ),
            394 =>
            array (
                'id' => 2395,
                'zip' => '9544',
                'location' => 'Feld am See',
            ),
            395 =>
            array (
                'id' => 2396,
                'zip' => '9545',
                'location' => 'Radenthein',
            ),
            396 =>
            array (
                'id' => 2397,
                'zip' => '9546',
                'location' => 'Bad Kleinkirchheim',
            ),
            397 =>
            array (
                'id' => 2398,
                'zip' => '9551',
                'location' => 'Bodensdorf',
            ),
            398 =>
            array (
                'id' => 2399,
                'zip' => '9552',
                'location' => 'Steindorf am Ossiacher See',
            ),
            399 =>
            array (
                'id' => 2400,
                'zip' => '9554',
                'location' => 'St. Urban',
            ),
            400 =>
            array (
                'id' => 2401,
                'zip' => '9555',
                'location' => 'Glanegg',
            ),
            401 =>
            array (
                'id' => 2402,
                'zip' => '9556',
                'location' => 'Liebenfels',
            ),
            402 =>
            array (
                'id' => 2403,
                'zip' => '9560',
                'location' => 'Feldkirchen in Kärnten',
            ),
            403 =>
            array (
                'id' => 2404,
                'zip' => '9562',
                'location' => 'Himmelberg',
            ),
            404 =>
            array (
                'id' => 2405,
                'zip' => '9563',
                'location' => 'Gnesau',
            ),
            405 =>
            array (
                'id' => 2406,
                'zip' => '9564',
                'location' => 'Patergassen',
            ),
            406 =>
            array (
                'id' => 2407,
                'zip' => '9565',
                'location' => 'Ebene Reichenau',
            ),
            407 =>
            array (
                'id' => 2408,
                'zip' => '9570',
                'location' => 'Ossiach',
            ),
            408 =>
            array (
                'id' => 2409,
                'zip' => '9571',
                'location' => 'Sirnitz',
            ),
            409 =>
            array (
                'id' => 2410,
                'zip' => '9572',
                'location' => 'Deutsch Griffen',
            ),
            410 =>
            array (
                'id' => 2411,
                'zip' => '9580',
                'location' => 'Villach-Drobollach am Faaker See',
            ),
            411 =>
            array (
                'id' => 2412,
                'zip' => '9581',
                'location' => 'Ledenitzen',
            ),
            412 =>
            array (
                'id' => 2413,
                'zip' => '9582',
                'location' => 'Latschach',
            ),
            413 =>
            array (
                'id' => 2414,
                'zip' => '9583',
                'location' => 'Faak am See',
            ),
            414 =>
            array (
                'id' => 2415,
                'zip' => '9584',
                'location' => 'Finkenstein',
            ),
            415 =>
            array (
                'id' => 2416,
                'zip' => '9585',
                'location' => 'Gödersdorf',
            ),
            416 =>
            array (
                'id' => 2417,
                'zip' => '9586',
                'location' => 'Fürnitz',
            ),
            417 =>
            array (
                'id' => 2418,
                'zip' => '9587',
                'location' => 'Riegersdorf',
            ),
            418 =>
            array (
                'id' => 2419,
                'zip' => '9601',
                'location' => 'Arnoldstein',
            ),
            419 =>
            array (
                'id' => 2420,
                'zip' => '9602',
                'location' => 'Thörl-Maglern',
            ),
            420 =>
            array (
                'id' => 2421,
                'zip' => '9611',
                'location' => 'Nötsch',
            ),
            421 =>
            array (
                'id' => 2422,
                'zip' => '9612',
                'location' => 'St. Georgen im Gailtal',
            ),
            422 =>
            array (
                'id' => 2423,
                'zip' => '9613',
                'location' => 'Feistritz an der Gail',
            ),
            423 =>
            array (
                'id' => 2424,
                'zip' => '9614',
                'location' => 'Vorderberg',
            ),
            424 =>
            array (
                'id' => 2425,
                'zip' => '9615',
                'location' => 'Görtschach',
            ),
            425 =>
            array (
                'id' => 2426,
                'zip' => '9620',
                'location' => 'Hermagor',
            ),
            426 =>
            array (
                'id' => 2427,
                'zip' => '9622',
                'location' => 'Weißbriach',
            ),
            427 =>
            array (
                'id' => 2428,
                'zip' => '9623',
                'location' => 'St. Stefan an der Gail',
            ),
            428 =>
            array (
                'id' => 2429,
                'zip' => '9624',
                'location' => 'Egg',
            ),
            429 =>
            array (
                'id' => 2430,
                'zip' => '9631',
                'location' => 'Jenig',
            ),
            430 =>
            array (
                'id' => 2431,
                'zip' => '9632',
                'location' => 'Kirchbach',
            ),
            431 =>
            array (
                'id' => 2432,
                'zip' => '9633',
                'location' => 'Reisach',
            ),
            432 =>
            array (
                'id' => 2433,
                'zip' => '9634',
                'location' => 'Gundersheim',
            ),
            433 =>
            array (
                'id' => 2434,
                'zip' => '9635',
                'location' => 'Dellach',
            ),
            434 =>
            array (
                'id' => 2435,
                'zip' => '9640',
                'location' => 'Kötschach-Mauthen',
            ),
            435 =>
            array (
                'id' => 2436,
                'zip' => '9651',
                'location' => 'St. Jakob im Lesachtal',
            ),
            436 =>
            array (
                'id' => 2437,
                'zip' => '9652',
                'location' => 'Birnbaum',
            ),
            437 =>
            array (
                'id' => 2438,
                'zip' => '9653',
                'location' => 'Liesing',
            ),
            438 =>
            array (
                'id' => 2439,
                'zip' => '9654',
                'location' => 'St. Lorenzen im Lesachtal',
            ),
            439 =>
            array (
                'id' => 2440,
                'zip' => '9655',
                'location' => 'Maria Luggau',
            ),
            440 =>
            array (
                'id' => 2441,
                'zip' => '9701',
                'location' => 'Rothenthurn',
            ),
            441 =>
            array (
                'id' => 2442,
                'zip' => '9702',
                'location' => 'Ferndorf',
            ),
            442 =>
            array (
                'id' => 2443,
                'zip' => '9710',
                'location' => 'Feistritz an der Drau',
            ),
            443 =>
            array (
                'id' => 2444,
                'zip' => '9711',
                'location' => 'Paternion',
            ),
            444 =>
            array (
                'id' => 2445,
                'zip' => '9712',
                'location' => 'Fresach',
            ),
            445 =>
            array (
                'id' => 2446,
                'zip' => '9713',
                'location' => 'Zlan',
            ),
            446 =>
            array (
                'id' => 2447,
                'zip' => '9714',
                'location' => 'Stockenboi',
            ),
            447 =>
            array (
                'id' => 2448,
                'zip' => '9721',
                'location' => 'Weißenstein',
            ),
            448 =>
            array (
                'id' => 2449,
                'zip' => '9722',
                'location' => 'Gummern',
            ),
            449 =>
            array (
                'id' => 2450,
                'zip' => '9751',
                'location' => 'Sachsenburg',
            ),
            450 =>
            array (
                'id' => 2451,
                'zip' => '9753',
                'location' => 'Lind im Drautal',
            ),
            451 =>
            array (
                'id' => 2452,
                'zip' => '9754',
                'location' => 'Steinfeld',
            ),
            452 =>
            array (
                'id' => 2453,
                'zip' => '9761',
                'location' => 'Greifenburg',
            ),
            453 =>
            array (
                'id' => 2454,
                'zip' => '9762',
                'location' => 'Weißensee',
            ),
            454 =>
            array (
                'id' => 2455,
                'zip' => '9771',
                'location' => 'Berg im Drautal',
            ),
            455 =>
            array (
                'id' => 2456,
                'zip' => '9772',
                'location' => 'Dellach',
            ),
            456 =>
            array (
                'id' => 2457,
                'zip' => '9773',
                'location' => 'Irschen',
            ),
            457 =>
            array (
                'id' => 2458,
                'zip' => '9781',
                'location' => 'Oberdrauburg',
            ),
            458 =>
            array (
                'id' => 2459,
                'zip' => '9782',
                'location' => 'Nikolsdorf',
            ),
            459 =>
            array (
                'id' => 2460,
                'zip' => '9800',
                'location' => 'Spittal an der Drau',
            ),
            460 =>
            array (
                'id' => 2461,
                'zip' => '9802',
                'location' => 'Spittal an der Drau',
            ),
            461 =>
            array (
                'id' => 2462,
                'zip' => '9803',
                'location' => 'Spittal an der Drau',
            ),
            462 =>
            array (
                'id' => 2463,
                'zip' => '9805',
                'location' => 'Baldramsdorf',
            ),
            463 =>
            array (
                'id' => 2464,
                'zip' => '9811',
                'location' => 'Lendorf',
            ),
            464 =>
            array (
                'id' => 2465,
                'zip' => '9812',
                'location' => 'Pusarnitz',
            ),
            465 =>
            array (
                'id' => 2466,
                'zip' => '9813',
                'location' => 'Möllbrücke',
            ),
            466 =>
            array (
                'id' => 2467,
                'zip' => '9814',
                'location' => 'Mühldorf',
            ),
            467 =>
            array (
                'id' => 2468,
                'zip' => '9815',
                'location' => 'Kolbnitz',
            ),
            468 =>
            array (
                'id' => 2469,
                'zip' => '9816',
                'location' => 'Penk',
            ),
            469 =>
            array (
                'id' => 2470,
                'zip' => '9821',
                'location' => 'Obervellach',
            ),
            470 =>
            array (
                'id' => 2471,
                'zip' => '9822',
                'location' => 'Mallnitz',
            ),
            471 =>
            array (
                'id' => 2472,
                'zip' => '9831',
                'location' => 'Flattach',
            ),
            472 =>
            array (
                'id' => 2473,
                'zip' => '9832',
                'location' => 'Stall',
            ),
            473 =>
            array (
                'id' => 2474,
                'zip' => '9833',
                'location' => 'Rangersdorf',
            ),
            474 =>
            array (
                'id' => 2475,
                'zip' => '9841',
                'location' => 'Winklern',
            ),
            475 =>
            array (
                'id' => 2476,
                'zip' => '9842',
                'location' => 'Mörtschach',
            ),
            476 =>
            array (
                'id' => 2477,
                'zip' => '9843',
                'location' => 'Großkirchheim',
            ),
            477 =>
            array (
                'id' => 2478,
                'zip' => '9844',
                'location' => 'Heiligenblut',
            ),
            478 =>
            array (
                'id' => 2479,
                'zip' => '9851',
                'location' => 'Lieserbrücke',
            ),
            479 =>
            array (
                'id' => 2480,
                'zip' => '9852',
                'location' => 'Trebesing',
            ),
            480 =>
            array (
                'id' => 2481,
                'zip' => '9853',
                'location' => 'Gmünd',
            ),
            481 =>
            array (
                'id' => 2482,
                'zip' => '9854',
                'location' => 'Malta',
            ),
            482 =>
            array (
                'id' => 2483,
                'zip' => '9861',
                'location' => 'Eisentratten',
            ),
            483 =>
            array (
                'id' => 2484,
                'zip' => '9862',
                'location' => 'Kremsbrücke',
            ),
            484 =>
            array (
                'id' => 2485,
                'zip' => '9863',
                'location' => 'Rennweg',
            ),
            485 =>
            array (
                'id' => 2486,
                'zip' => '9871',
                'location' => 'Seeboden',
            ),
            486 =>
            array (
                'id' => 2487,
                'zip' => '9872',
                'location' => 'Millstatt am See',
            ),
            487 =>
            array (
                'id' => 2488,
                'zip' => '9873',
                'location' => 'Döbriach',
            ),
            488 =>
            array (
                'id' => 2489,
                'zip' => '9900',
                'location' => 'Lienz',
            ),
            489 =>
            array (
                'id' => 2490,
                'zip' => '9903',
                'location' => 'Oberlienz',
            ),
            490 =>
            array (
                'id' => 2491,
                'zip' => '9904',
                'location' => 'Thurn',
            ),
            491 =>
            array (
                'id' => 2492,
                'zip' => '9905',
                'location' => 'Gaimberg',
            ),
            492 =>
            array (
                'id' => 2493,
                'zip' => '9906',
                'location' => 'Lavant',
            ),
            493 =>
            array (
                'id' => 2494,
                'zip' => '9907',
                'location' => 'Tristach',
            ),
            494 =>
            array (
                'id' => 2495,
                'zip' => '9908',
                'location' => 'Amlach',
            ),
            495 =>
            array (
                'id' => 2496,
                'zip' => '9909',
                'location' => 'Leisach',
            ),
            496 =>
            array (
                'id' => 2497,
                'zip' => '9911',
                'location' => 'Assling',
            ),
            497 =>
            array (
                'id' => 2498,
                'zip' => '9912',
                'location' => 'Anras',
            ),
            498 =>
            array (
                'id' => 2499,
                'zip' => '9913',
                'location' => 'Abfaltersbach',
            ),
            499 =>
            array (
                'id' => 2500,
                'zip' => '9918',
                'location' => 'Strassen',
            ),
        ));
        \DB::table('zip_codes')->insert(array (
            0 =>
            array (
                'id' => 2501,
                'zip' => '9919',
                'location' => 'Heinfels',
            ),
            1 =>
            array (
                'id' => 2502,
                'zip' => '9920',
                'location' => 'Sillian',
            ),
            2 =>
            array (
                'id' => 2503,
                'zip' => '9931',
                'location' => 'Außervillgraten',
            ),
            3 =>
            array (
                'id' => 2504,
                'zip' => '9932',
                'location' => 'Innervillgraten',
            ),
            4 =>
            array (
                'id' => 2505,
                'zip' => '9941',
                'location' => 'Kartitsch',
            ),
            5 =>
            array (
                'id' => 2506,
                'zip' => '9942',
                'location' => 'Obertilliach',
            ),
            6 =>
            array (
                'id' => 2507,
                'zip' => '9943',
                'location' => 'Untertilliach',
            ),
            7 =>
            array (
                'id' => 2508,
                'zip' => '9951',
                'location' => 'Ainet',
            ),
            8 =>
            array (
                'id' => 2509,
                'zip' => '9952',
                'location' => 'St. Johann im Walde',
            ),
            9 =>
            array (
                'id' => 2510,
                'zip' => '9953',
                'location' => 'Huben',
            ),
            10 =>
            array (
                'id' => 2511,
                'zip' => '9954',
                'location' => 'Schlaiten',
            ),
            11 =>
            array (
                'id' => 2512,
                'zip' => '9961',
                'location' => 'Hopfgarten in Defereggen',
            ),
            12 =>
            array (
                'id' => 2513,
                'zip' => '9962',
                'location' => 'St. Veit in Defereggen',
            ),
            13 =>
            array (
                'id' => 2514,
                'zip' => '9963',
                'location' => 'St. Jakob in Defereggen',
            ),
            14 =>
            array (
                'id' => 2515,
                'zip' => '9971',
                'location' => 'Matrei in Osttirol',
            ),
            15 =>
            array (
                'id' => 2516,
                'zip' => '9972',
                'location' => 'Virgen',
            ),
            16 =>
            array (
                'id' => 2517,
                'zip' => '9974',
                'location' => 'Prägraten',
            ),
            17 =>
            array (
                'id' => 2518,
                'zip' => '9981',
                'location' => 'Kals',
            ),
            18 =>
            array (
                'id' => 2519,
                'zip' => '9990',
                'location' => 'Nußdorf-Debant',
            ),
            19 =>
            array (
                'id' => 2520,
                'zip' => '9991',
                'location' => 'Dölsach',
            ),
            20 =>
            array (
                'id' => 2521,
                'zip' => '9992',
                'location' => 'Iselsberg-Stronach',
            ),
        ));


    }
}
