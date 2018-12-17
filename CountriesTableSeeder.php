<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('countries')->insert($this->getArrayCountries());
    }

    private function getArrayCountries() {
        return $countries = [
            [
              "name" => "Brasil",
              "slug" => "brasil",
              "initials" => "BR",
            ],
            [
              "name" => "Afeganistão",
              "slug" => "afeganistao",
              "initials" => "AF",
            ],
            [
              "name" => "Albânia, Republica da",
              "slug" => "albania-republica-da",
              "initials" => "AL",
            ],
            [
              "name" => "Argélia",
              "slug" => "argelia",
              "initials" => "DZ",
            ],
            [
              "name" => "Samoa Americana",
              "slug" => "samoa-americana",
              "initials" => "AS",
            ],
            [
              "name" => "Andorra",
              "slug" => "andorra",
              "initials" => "AD",
            ],
            [
              "name" => "Angola",
              "slug" => "angola",
              "initials" => "AO",
            ],
            [
              "name" => "Anguilla",
              "slug" => "anguilla",
              "initials" => "AI",
            ],
            [
              "name" => "Antártida",
              "slug" => "antartida",
              "initials" => "AQ",
            ],
            [
              "name" => "Antigua e Barbuda",
              "slug" => "antigua-e-barbuda",
              "initials" => "AG",
            ],
            [
              "name" => "Argentina",
              "slug" => "argentina",
              "initials" => "AR",
            ],
            [
              "name" => "Armênia, Republica da",
              "slug" => "armenia-republica-da",
              "initials" => "AM",
            ],
            [
              "name" => "Aruba",
              "slug" => "aruba",
              "initials" => "AW",
            ],
            [
              "name" => "Austrália",
              "slug" => "australia",
              "initials" => "AU",
            ],
            [
              "name" => "Áustria",
              "slug" => "austria",
              "initials" => "AT",
            ],
            [
              "name" => "Azerbaijão, Republica do",
              "slug" => "azerbaijao-republica-do",
              "initials" => "AZ",
            ],
            [
              "name" => "Bahamas, Ilhas",
              "slug" => "bahamas-ilhas",
              "initials" => "BS",
            ],
            [
              "name" => "Bahrein, Ilhas",
              "slug" => "bahrein-ilhas",
              "initials" => "BH",
            ],
            [
              "name" => "Bangladesh",
              "slug" => "bangladesh",
              "initials" => "BD",
            ],
            [
              "name" => "Barbados",
              "slug" => "barbados",
              "initials" => "BB",
            ],
            [
              "name" => "Belarus, Republica da",
              "slug" => "belarus-republica-da",
              "initials" => "BY",
            ],
            [
              "name" => "Bélgica",
              "slug" => "belgica",
              "initials" => "BE",
            ],
            [
              "name" => "Belize",
              "slug" => "belize",
              "initials" => "BZ",
            ],
            [
              "name" => "Benin",
              "slug" => "benin",
              "initials" => "BJ",
            ],
            [
              "name" => "Bermudas",
              "slug" => "bermudas",
              "initials" => "BM",
            ],
            [
              "name" => "Butão",
              "slug" => "butao",
              "initials" => "BT",
            ],
            [
              "name" => "Bolívia",
              "slug" => "bolivia",
              "initials" => "BO",
            ],
            [
              "name" => "Bósnia-herzegovina (Republica da)",
              "slug" => "bosnia-herzegovina-republica-da",
              "initials" => "BA",
            ],
            [
              "name" => "Botsuana",
              "slug" => "botsuana",
              "initials" => "BW",
            ],
            [
              "name" => "Ilha Bouvet",
              "slug" => "ilha-bouvet",
              "initials" => "BV",
            ],
            [
              "name" => "Território Britânico do Oceano Indico",
              "slug" => "territorio-britanico-do-oceano-indico",
              "initials" => "IO",
            ],
            [
              "name" => "Brunei",
              "slug" => "brunei",
              "initials" => "BN",
            ],
            [
              "name" => "Bulgária, Republica da",
              "slug" => "bulgaria-republica-da",
              "initials" => "BG",
            ],
            [
              "name" => "Burkina Faso",
              "slug" => "burkina-faso",
              "initials" => "BF",
            ],
            [
              "name" => "Burundi",
              "slug" => "burundi",
              "initials" => "BI",
            ],
            [
              "name" => "Camboja",
              "slug" => "camboja",
              "initials" => "KH",
            ],
            [
              "name" => "Camarões",
              "slug" => "camaroes",
              "initials" => "CM",
            ],
            [
              "name" => "Canada",
              "slug" => "canada",
              "initials" => "CA",
            ],
            [
              "name" => "Cabo Verde, Republica de",
              "slug" => "cabo-verde-republica-de",
              "initials" => "CV",
            ],
            [
              "name" => "Cayman, Ilhas",
              "slug" => "cayman-ilhas",
              "initials" => "KY",
            ],
            [
              "name" => "Republica Centro-Africana",
              "slug" => "republica-centro-africana",
              "initials" => "CF",
            ],
            [
              "name" => "Chade",
              "slug" => "chade",
              "initials" => "TD",
            ],
            [
              "name" => "Chile",
              "slug" => "chile",
              "initials" => "CL",
            ],
            [
              "name" => "China, Republica Popular",
              "slug" => "china-republica-popular",
              "initials" => "CN",
            ],
            [
              "name" => "Christmas, Ilha (Navidad)",
              "slug" => "christmas-ilha-navidad",
              "initials" => "CX",
            ],
            [
              "name" => "Cocos (Keeling), Ilhas",
              "slug" => "cocos-keeling-ilhas",
              "initials" => "CC",
            ],
            [
              "name" => "Colômbia",
              "slug" => "colombia",
              "initials" => "CO",
            ],
            [
              "name" => "Comores, Ilhas",
              "slug" => "comores-ilhas",
              "initials" => "KM",
            ],
            [
              "name" => "Congo",
              "slug" => "congo",
              "initials" => "CG",
            ],
            [
              "name" => "Congo, Republica Democrática do",
              "slug" => "congo-republica-democratica-do",
              "initials" => "CD",
            ],
            [
              "name" => "Cook, Ilhas",
              "slug" => "cook-ilhas",
              "initials" => "CK",
            ],
            [
              "name" => "Costa Rica",
              "slug" => "costa-rica",
              "initials" => "CR",
            ],
            [
              "name" => "Costa do Marfim",
              "slug" => "costa-do-marfim",
              "initials" => "CI",
            ],
            [
              "name" => "Croácia (Republica da)",
              "slug" => "croacia-republica-da",
              "initials" => "HR",
            ],
            [
              "name" => "Cuba",
              "slug" => "cuba",
              "initials" => "CU,"
            ],
            [
              "name" => "Chipre",
              "slug" => "chipre",
              "initials" => "CY",
            ],
            [
              "name" => "Tcheca, Republica",
              "slug" => "tcheca-republica",
              "initials" => "CZ",
            ],
            [
              "name" => "Dinamarca",
              "slug" => "dinamarca",
              "initials" => "DK",
            ],
            [
              "name" => "Djibuti",
              "slug" => "djibuti",
              "initials" => "DJ",
            ],
            [
              "name" => "Dominica, Ilha",
              "slug" => "dominica-ilha",
              "initials" => "DM",
            ],
            [
              "name" => "Republica Dominicana",
              "slug" => "republica-dominicana",
              "initials" => "DO",
            ],
            [
              "name" => "Timor Leste",
              "slug" => "timor-leste",
              "initials" => "TL",
            ],
            [
              "name" => "Equador",
              "slug" => "equador",
              "initials" => "EC",
            ],
            [
              "name" => "Egito",
              "slug" => "egito",
              "initials" => "EG",
            ],
            [
              "name" => "El Salvador",
              "slug" => "el-salvador",
              "initials" => "SV",
            ],
            [
              "name" => "Guine-Equatorial",
              "slug" => "guine-equatorial",
              "initials" => "GQ",
            ],
            [
              "name" => "Eritreia",
              "slug" => "eritreia",
              "initials" => "ER",
            ],
            [
              "name" => "Estônia, Republica da",
              "slug" => "estonia-republica-da",
              "initials" => "EE",
            ],
            [
              "name" => "Etiópia",
              "slug" => "etiopia",
              "initials" => "ET",
            ],
            [
              "name" => "Falkland (Ilhas Malvinas)",
              "slug" => "falkland-ilhas-malvinas",
              "initials" => "FK",
            ],
            [
              "name" => "Feroe, Ilhas",
              "slug" => "feroe-ilhas",
              "initials" => "FO",
            ],
            [
              "name" => "Fiji",
              "slug" => "fiji",
              "initials" => "FJ,"
            ],
            [
              "name" => "Finlândia",
              "slug" => "finlandia",
              "initials" => "FI",
            ],
            [
              "name" => "Franca",
              "slug" => "franca",
              "initials" => "FR",
            ],
            [
              "name" => "Guiana francesa",
              "slug" => "guiana-francesa",
              "initials" => "GF",
            ],
            [
              "name" => "Polinésia Francesa",
              "slug" => "polinesia-francesa",
              "initials" => "PF",
            ],
            [
              "name" => "Terras Austrais e Antárticas Francesas",
              "slug" => "terras-austrais-e-antarticas-francesas",
              "initials" => "TF",
            ],
            [
              "name" => "Gabão",
              "slug" => "gabao",
              "initials" => "GA",
            ],
            [
              "name" => "Gambia",
              "slug" => "gambia",
              "initials" => "GM",
            ],
            [
              "name" => "Georgia, Republica da",
              "slug" => "georgia-republica-da",
              "initials" => "GE",
            ],
            [
              "name" => "Alemanha",
              "slug" => "alemanha",
              "initials" => "DE",
            ],
            [
              "name" => "Gana",
              "slug" => "gana",
              "initials" => "GH,"
            ],
            [
              "name" => "Gibraltar",
              "slug" => "gibraltar",
              "initials" => "GI",
            ],
            [
              "name" => "Grécia",
              "slug" => "grecia",
              "initials" => "GR",
            ],
            [
              "name" => "Groenlândia",
              "slug" => "groenlandia",
              "initials" => "GL",
            ],
            [
              "name" => "Granada",
              "slug" => "granada",
              "initials" => "GD",
            ],
            [
              "name" => "Guadalupe",
              "slug" => "guadalupe",
              "initials" => "GP",
            ],
            [
              "name" => "Guam",
              "slug" => "guam",
              "initials" => "GU,"
            ],
            [
              "name" => "Guatemala",
              "slug" => "guatemala",
              "initials" => "GT",
            ],
            [
              "name" => "Guine",
              "slug" => "guine",
              "initials" => "GN",
            ],
            [
              "name" => "Guine-Bissau",
              "slug" => "guine-bissau",
              "initials" => "GW",
            ],
            [
              "name" => "Guiana",
              "slug" => "guiana",
              "initials" => "GY",
            ],
            [
              "name" => "Haiti",
              "slug" => "haiti",
              "initials" => "HT",
            ],
            [
              "name" => "Ilha Heard e Ilhas McDonald",
              "slug" => "ilha-heard-e-ilhas-mcdonald",
              "initials" => "HM",
            ],
            [
              "name" => "Vaticano, Estado da Cidade do",
              "slug" => "vaticano-estado-da-cidade-do",
              "initials" => "VA",
            ],
            [
              "name" => "Honduras",
              "slug" => "honduras",
              "initials" => "HN",
            ],
            [
              "name" => "Hong Kong",
              "slug" => "hong-kong",
              "initials" => "HK",
            ],
            [
              "name" => "Hungria, Republica da",
              "slug" => "hungria-republica-da",
              "initials" => "HU",
            ],
            [
              "name" => "Islândia",
              "slug" => "islandia",
              "initials" => "IS",
            ],
            [
              "name" => "Índia",
              "slug" => "india",
              "initials" => "IN",
            ],
            [
              "name" => "Indonésia",
              "slug" => "indonesia",
              "initials" => "ID",
            ],
            [
              "name" => "Ira, Republica Islâmica do",
              "slug" => "ira-republica-islamica-do",
              "initials" => "IR",
            ],
            [
              "name" => "Iraque",
              "slug" => "iraque",
              "initials" => "IQ",
            ],
            [
              "name" => "Irlanda",
              "slug" => "irlanda",
              "initials" => "IE",
            ],
            [
              "name" => "Israel",
              "slug" => "israel",
              "initials" => "IL",
            ],
            [
              "name" => "Itália",
              "slug" => "italia",
              "initials" => "IT",
            ],
            [
              "name" => "Jamaica",
              "slug" => "jamaica",
              "initials" => "JM",
            ],
            [
              "name" => "Japão",
              "slug" => "japao",
              "initials" => "JP",
            ],
            [
              "name" => "Jordânia",
              "slug" => "jordania",
              "initials" => "JO",
            ],
            [
              "name" => "Cazaquistão, Republica do",
              "slug" => "cazaquistao-republica-do",
              "initials" => "KZ",
            ],
            [
              "name" => "Quênia",
              "slug" => "quenia",
              "initials" => "KE",
            ],
            [
              "name" => "Kiribati",
              "slug" => "kiribati",
              "initials" => "KI",
            ],
            [
              "name" => "Coreia, Republica Popular Democrática da",
              "slug" => "coreia-republica-popular-democratica-da",
              "initials" => "KP",
            ],
            [
              "name" => "Coreia, Republica da",
              "slug" => "coreia-republica-da",
              "initials" => "KR",
            ],
            [
              "name" => "Kuwait",
              "slug" => "kuwait",
              "initials" => "KW",
            ],
            [
              "name" => "Quirguiz, Republica",
              "slug" => "quirguiz-republica",
              "initials" => "KG",
            ],
            [
              "name" => "Laos, Republica Popular Democrática do",
              "slug" => "laos-republica-popular-democratica-do",
              "initials" => "LA",
            ],
            [
              "name" => "Letônia, Republica da",
              "slug" => "letonia-republica-da",
              "initials" => "LV",
            ],
            [
              "name" => "Líbano",
              "slug" => "libano",
              "initials" => "LB",
            ],
            [
              "name" => "Lesoto",
              "slug" => "lesoto",
              "initials" => "LS",
            ],
            [
              "name" => "Libéria",
              "slug" => "liberia",
              "initials" => "LR",
            ],
            [
              "name" => "Líbia",
              "slug" => "libia",
              "initials" => "LY",
            ],
            [
              "name" => "Liechtenstein",
              "slug" => "liechtenstein",
              "initials" => "LI",
            ],
            [
              "name" => "Lituânia, Republica da",
              "slug" => "lituania-republica-da",
              "initials" => "LT",
            ],
            [
              "name" => "Luxemburgo",
              "slug" => "luxemburgo",
              "initials" => "LU",
            ],
            [
              "name" => "Macau",
              "slug" => "macau",
              "initials" => "MO",
            ],
            [
              "name" => "Macedônia, Antiga Republica Iugoslava",
              "slug" => "macedonia-antiga-republica-iugoslava",
              "initials" => "MK",
            ],
            [
              "name" => "Madagascar",
              "slug" => "madagascar",
              "initials" => "MG",
            ],
            [
              "name" => "Malavi",
              "slug" => "malavi",
              "initials" => "MW",
            ],
            [
              "name" => "Malásia",
              "slug" => "malasia",
              "initials" => "MY",
            ],
            [
              "name" => "Maldivas",
              "slug" => "maldivas",
              "initials" => "MV",
            ],
            [
              "name" => "Mali",
              "slug" => "mali",
              "initials" => "ML,"
            ],
            [
              "name" => "Malta",
              "slug" => "malta",
              "initials" => "MT",
            ],
            [
              "name" => "Marshall, Ilhas",
              "slug" => "marshall-ilhas",
              "initials" => "MH",
            ],
            [
              "name" => "Martinica",
              "slug" => "martinica",
              "initials" => "MQ",
            ],
            [
              "name" => "Mauritânia",
              "slug" => "mauritania",
              "initials" => "MR",
            ],
            [
              "name" => "Mauricio",
              "slug" => "mauricio",
              "initials" => "MU",
            ],
            [
              "name" => "Mayotte (Ilhas Francesas)",
              "slug" => "mayotte-ilhas-francesas",
              "initials" => "YT",
            ],
            [
              "name" => "México",
              "slug" => "mexico",
              "initials" => "MX",
            ],
            [
              "name" => "Micronesia",
              "slug" => "micronesia",
              "initials" => "FM",
            ],
            [
              "name" => "Moldávia, Republica da",
              "slug" => "moldavia-republica-da",
              "initials" => "MD",
            ],
            [
              "name" => "Mônaco",
              "slug" => "monaco",
              "initials" => "MC",
            ],
            [
              "name" => "Mongólia",
              "slug" => "mongolia",
              "initials" => "MN",
            ],
            [
              "name" => "Montserrat, Ilhas",
              "slug" => "montserrat-ilhas",
              "initials" => "MS",
            ],
            [
              "name" => "Marrocos",
              "slug" => "marrocos",
              "initials" => "MA",
            ],
            [
              "name" => "Moçambique",
              "slug" => "mocambique",
              "initials" => "MZ",
            ],
            [
              "name" => "Mianmar (Birmânia)",
              "slug" => "mianmar-birmania",
              "initials" => "MM",
            ],
            [
              "name" => "Namíbia",
              "slug" => "namibia",
              "initials" => "NA",
            ],
            [
              "name" => "Nauru",
              "slug" => "nauru",
              "initials" => "NR",
            ],
            [
              "name" => "Nepal",
              "slug" => "nepal",
              "initials" => "NP",
            ],
            [
              "name" => "Países Baixos (Holanda)",
              "slug" => "paises-baixos-holanda",
              "initials" => "NL",
            ],
            [
              "name" => "Nova Caledonia",
              "slug" => "nova-caledonia",
              "initials" => "NC",
            ],
            [
              "name" => "Nova Zelândia",
              "slug" => "nova-zelandia",
              "initials" => "NZ",
            ],
            [
              "name" => "Nicarágua",
              "slug" => "nicaragua",
              "initials" => "NI",
            ],
            [
              "name" => "Níger",
              "slug" => "niger",
              "initials" => "NE",
            ],
            [
              "name" => "Nigéria",
              "slug" => "nigeria",
              "initials" => "NG",
            ],
            [
              "name" => "Niue, Ilha",
              "slug" => "niue-ilha",
              "initials" => "NU",
            ],
            [
              "name" => "Norfolk, Ilha",
              "slug" => "norfolk-ilha",
              "initials" => "NF",
            ],
            [
              "name" => "Marianas do Norte",
              "slug" => "marianas-do-norte",
              "initials" => "MP",
            ],
            [
              "name" => "Noruega",
              "slug" => "noruega",
              "initials" => "NO",
            ],
            [
              "name" => "Oma",
              "slug" => "oma",
              "initials" => "O,M"
            ],
            [
              "name" => "Paquistão",
              "slug" => "paquistao",
              "initials" => "PK",
            ],
            [
              "name" => "Palau",
              "slug" => "palau",
              "initials" => "PW",
            ],
            [
              "name" => "Panamá",
              "slug" => "panama",
              "initials" => "PA",
            ],
            [
              "name" => "Papua Nova Guine",
              "slug" => "papua-nova-guine",
              "initials" => "PG",
            ],
            [
              "name" => "Paraguai",
              "slug" => "paraguai",
              "initials" => "PY",
            ],
            [
              "name" => "Peru",
              "slug" => "peru",
              "initials" => "PE,"
            ],
            [
              "name" => "Filipinas",
              "slug" => "filipinas",
              "initials" => "PH",
            ],
            [
              "name" => "Pitcairn, Ilha",
              "slug" => "pitcairn-ilha",
              "initials" => "PN",
            ],
            [
              "name" => "Polônia, Republica da",
              "slug" => "polonia-republica-da",
              "initials" => "PL",
            ],
            [
              "name" => "Portugal",
              "slug" => "portugal",
              "initials" => "PT",
            ],
            [
              "name" => "Porto Rico",
              "slug" => "porto-rico",
              "initials" => "PR",
            ],
            [
              "name" => "Catar",
              "slug" => "catar",
              "initials" => "QA",
            ],
            [
              "name" => "Reunião, Ilha",
              "slug" => "reuniao-ilha",
              "initials" => "RE",
            ],
            [
              "name" => "Romênia",
              "slug" => "romenia",
              "initials" => "RO",
            ],
            [
              "name" => "Rússia, Federação da",
              "slug" => "russia-federacao-da",
              "initials" => "RU",
            ],
            [
              "name" => "Ruanda",
              "slug" => "ruanda",
              "initials" => "RW",
            ],
            [
              "name" => "São Cristovão e Neves, Ilhas",
              "slug" => "sao-cristovao-e-neves-ilhas",
              "initials" => "KN",
            ],
            [
              "name" => "Santa Lucia",
              "slug" => "santa-lucia",
              "initials" => "LC",
            ],
            [
              "name" => "São Vicente e Granadinas",
              "slug" => "sao-vicente-e-granadinas",
              "initials" => "VC",
            ],
            [
              "name" => "Samoa",
              "slug" => "samoa",
              "initials" => "WS",
            ],
            [
              "name" => "San Marino",
              "slug" => "san-marino",
              "initials" => "SM",
            ],
            [
              "name" => "São Tome e Príncipe, Ilhas",
              "slug" => "sao-tome-e-principe-ilhas",
              "initials" => "ST",
            ],
            [
              "name" => "Arábia Saudita",
              "slug" => "arabia-saudita",
              "initials" => "SA",
            ],
            [
              "name" => "Senegal",
              "slug" => "senegal",
              "initials" => "SN",
            ],
            [
              "name" => "Seychelles",
              "slug" => "seychelles",
              "initials" => "SC",
            ],
            [
              "name" => "Serra Leoa",
              "slug" => "serra-leoa",
              "initials" => "SL",
            ],
            [
              "name" => "Cingapura",
              "slug" => "cingapura",
              "initials" => "SG",
            ],
            [
              "name" => "Eslovaca, Republica",
              "slug" => "eslovaca-republica",
              "initials" => "SK",
            ],
            [
              "name" => "Eslovênia, Republica da",
              "slug" => "eslovenia-republica-da",
              "initials" => "SI",
            ],
            [
              "name" => "Salomão, Ilhas",
              "slug" => "salomao-ilhas",
              "initials" => "SB",
            ],
            [
              "name" => "Somalia",
              "slug" => "somalia",
              "initials" => "SO",
            ],
            [
              "name" => "África do Sul",
              "slug" => "africa-do-sul",
              "initials" => "ZA",
            ],
            [
              "name" => "Ilhas Geórgia do Sul e Sandwich do Sul",
              "slug" => "ilhas-georgia-do-sul-e-sandwich-do-sul",
              "initials" => "GS",
            ],
            [
              "name" => "Espanha",
              "slug" => "espanha",
              "initials" => "ES",
            ],
            [
              "name" => "Sri Lanka",
              "slug" => "sri-lanka",
              "initials" => "LK",
            ],
            [
              "name" => "Santa Helena",
              "slug" => "santa-helena",
              "initials" => "SH",
            ],
            [
              "name" => "São Pedro e Miquelon",
              "slug" => "sao-pedro-e-miquelon",
              "initials" => "PM",
            ],
            [
              "name" => "Sudão",
              "slug" => "sudao",
              "initials" => "SD",
            ],
            [
              "name" => "Suriname",
              "slug" => "suriname",
              "initials" => "SR",
            ],
            [
              "name" => "Svalbard e Jan Mayen",
              "slug" => "svalbard-e-jan-mayen",
              "initials" => "SJ",
            ],
            [
              "name" => "Suazilândia",
              "slug" => "suazilandia",
              "initials" => "SZ",
            ],
            [
              "name" => "Suécia",
              "slug" => "suecia",
              "initials" => "SE",
            ],
            [
              "name" => "Suíça",
              "slug" => "suica",
              "initials" => "CH",
            ],
            [
              "name" => "Síria, Republica Árabe da",
              "slug" => "siria-republica-arabe-da",
              "initials" => "SY",
            ],
            [
              "name" => "Formosa (Taiwan)",
              "slug" => "formosa-taiwan",
              "initials" => "TW",
            ],
            [
              "name" => "Tadjiquistao, Republica do",
              "slug" => "tadjiquistao-republica-do",
              "initials" => "TJ",
            ],
            [
              "name" => "Tanzânia, Republica Unida da",
              "slug" => "tanzania-republica-unida-da",
              "initials" => "TZ",
            ],
            [
              "name" => "Tailândia",
              "slug" => "tailandia",
              "initials" => "TH",
            ],
            [
              "name" => "Togo",
              "slug" => "togo",
              "initials" => "TG,"
            ],
            [
              "name" => "Toquelau, Ilhas",
              "slug" => "toquelau-ilhas",
              "initials" => "TK",
            ],
            [
              "name" => "Tonga",
              "slug" => "tonga",
              "initials" => "TO",
            ],
            [
              "name" => "Trinidad e Tobago",
              "slug" => "trinidad-e-tobago",
              "initials" => "TT",
            ],
            [
              "name" => "Tunísia",
              "slug" => "tunisia",
              "initials" => "TN",
            ],
            [
              "name" => "Turquia",
              "slug" => "turquia",
              "initials" => "TR",
            ],
            [
              "name" => "Turcomenistão, Republica do",
              "slug" => "turcomenistao-republica-do",
              "initials" => "TM",
            ],
            [
              "name" => "Turcas e Caicos, Ilhas",
              "slug" => "turcas-e-caicos-ilhas",
              "initials" => "TC",
            ],
            [
              "name" => "Tuvalu",
              "slug" => "tuvalu",
              "initials" => "TV",
            ],
            [
              "name" => "Uganda",
              "slug" => "uganda",
              "initials" => "UG",
            ],
            [
              "name" => "Ucrânia",
              "slug" => "ucrania",
              "initials" => "UA",
            ],
            [
              "name" => "Emirados Árabes Unidos",
              "slug" => "emirados-arabes-unidos",
              "initials" => "AE",
            ],
            [
              "name" => "Reino Unido",
              "slug" => "reino-unido",
              "initials" => "GB",
            ],
            [
              "name" => "Estados Unidos",
              "slug" => "estados-unidos",
              "initials" => "US",
            ],
            [
              "name" => "Ilhas Menores Distantes dos Estados Unidos",
              "slug" => "ilhas-menores-distantes-dos-estados-unidos",
              "initials" => "UM",
            ],
            [
              "name" => "Uruguai",
              "slug" => "uruguai",
              "initials" => "UY",
            ],
            [
              "name" => "Uzbequistão, Republica do",
              "slug" => "uzbequistao-republica-do",
              "initials" => "UZ",
            ],
            [
              "name" => "Vanuatu",
              "slug" => "vanuatu",
              "initials" => "VU",
            ],
            [
              "name" => "Venezuela",
              "slug" => "venezuela",
              "initials" => "VE",
            ],
            [
              "name" => "Vietnã",
              "slug" => "vietna",
              "initials" => "VN",
            ],
            [
              "name" => "Virgens, Ilhas (Britânicas)",
              "slug" => "virgens-ilhas-britanicas",
              "initials" => "VG",
            ],
            [
              "name" => "Virgens, Ilhas (E.U.A.)",
              "slug" => "virgens-ilhas-eua",
              "initials" => "VI",
            ],
            [
              "name" => "Wallis e Futuna, Ilhas",
              "slug" => "wallis-e-futuna-ilhas",
              "initials" => "WF",
            ],
            [
              "name" => "Saara Ocidental",
              "slug" => "saara-ocidental",
              "initials" => "EH",
            ],
            [
              "name" => "Iémen",
              "slug" => "iemen",
              "initials" => "YE",
            ],
            [
              "name" => "Iugoslávia, República Fed. da",
              "slug" => "iugoslavia-republica-fed-da",
              "initials" => "YU",
            ],
            [
              "name" => "Zâmbia",
              "slug" => "zambia",
              "initials" => "ZM",
            ],
            [
              "name" => "Zimbabue",
              "slug" => "zimbabue",
              "initials" => "ZW",
            ],
            [
              "name" => "Guernsey, Ilha do Canal (Inclui Alderney e Sark)",
              "slug" => "guernsey-ilha-do-canal-inclui-alderney-e-sark",
              "initials" => "GG",
            ],
            [
              "name" => "Jersey, Ilha do Canal",
              "slug" => "jersey-ilha-do-canal",
              "initials" => "JE",
            ],
            [
              "name" => "Man, Ilha de",
              "slug" => "man-ilha-de",
              "initials" => "IM",
            ],
            [
              "name" => "Montenegro",
              "slug" => "montenegro",
              "initials" => "ME",
            ],
            [
              "name" => "Republika Srbija",
              "slug" => "republika-srbija",
              "initials" => "RS",
            ],
            [
              "name" => "Sudao do Sul",
              "slug" => "sudao-do-sul",
              "initials" => "SS",
            ],
            [
              "name" => "Zona do Canal do Panamá",
              "slug" => "zona-do-canal-do-panama",
              "initials" => "",
            ],
            [
              "name" => "Palestina",
              "slug" => "palestina",
              "initials" => "PS",
            ],
            [
              "name" => "Ilhas de Aland",
              "slug" => "ilhas-de-aland",
              "initials" => "AX",
            ],
            [
              "name" => "Coletividade de São Bartolomeu",
              "slug" => "coletividade-de-sao-bartolomeu",
              "initials" => "BL",
            ],
            [
              "name" => "Curaçao",
              "slug" => "curacao",
              "initials" => "CW",
            ],
            [
              "name" => "Ilha de São Martinho (França)",
              "slug" => "ilha-de-sao-martinho-franca",
              "initials" => "MF",
            ],
            [
              "name" => "São Martinho (Países Baixos)",
              "slug" => "sao-martinho-paises-baixos",
              "initials" => "SX",
            ],
            [
              "name" => "Bonaire",
              "slug" => "bonaire",
              "initials" => "AN",
            ],
            [
              "name" => "Antartica",
              "slug" => "antartica",
              "initials" => "AQ",
            ],
            [
              "name" => "Ilha Herad e Ilhas Macdonald",
              "slug" => "ilha-herad-e-ilhas-macdonald",
              "initials" => "AU",
            ],
            [
              "name" => "Colectividade de São Bartolomeu",
              "slug" => "colectividade-de-sao-bartolomeu",
              "initials" => "FR",
            ],
            [
              "name" => "Ilha de São Martinho",
              "slug" => "ilha-de-sao-martinho",
              "initials" => "FR",
            ],
            [
              "name" => "Território das Terras Austrais e Antárcticas Francesas",
              "slug" => "territorio-das-terras-austrais-e-antarcticas-francesas",
              "initials" => "TF",
            ],
        ];
    }
}
