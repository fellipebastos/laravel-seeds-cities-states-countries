<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('states')->insert($this->getArrayStates());
    }

    private function getArrayStates() {
        return [
            [
                "country_id" => 1,
                "name" => "Acre",
                "slug" => "acre",
                "initials" => "AC",
            ],
            [
                "country_id" => 1,
                "name" => "Alagoas",
                "slug" => "alagoas",
                "initials" => "AL",
            ],
            [
                "country_id" => 1,
                "name" => "Amazonas",
                "slug" => "amazonas",
                "initials" => "AM",
            ],
            [
                "country_id" => 1,
                "name" => "Amapá",
                "slug" => "amapa",
                "initials" => "AP",
            ],
            [
                "country_id" => 1,
                "name" => "Bahia",
                "slug" => "bahia",
                "initials" => "BA",
            ],
            [
                "country_id" => 1,
                "name" => "Ceará",
                "slug" => "ceara",
                "initials" => "CE",
            ],
            [
                "country_id" => 1,
                "name" => "Distrito Federal",
                "slug" => "distrito-federal",
                "initials" => "DF",
            ],
            [
                "country_id" => 1,
                "name" => "Espírito Santo",
                "slug" => "espirito-santo",
                "initials" => "ES",
            ],
            [
                "country_id" => 1,
                "name" => "Goiás",
                "slug" => "goias",
                "initials" => "GO",
            ],
            [
                "country_id" => 1,
                "name" => "Maranhão",
                "slug" => "maranhao",
                "initials" => "MA",
            ],
            [
                "country_id" => 1,
                "name" => "Minas Gerais",
                "slug" => "minas-gerais",
                "initials" => "MG",
            ],
            [
                "country_id" => 1,
                "name" => "Mato Grosso do Sul",
                "slug" => "mato-grosso-do-sul",
                "initials" => "MS",
            ],
            [
                "country_id" => 1,
                "name" => "Mato Grosso",
                "slug" => "mato-grosso",
                "initials" => "MT",
            ],
            [
                "country_id" => 1,
                "name" => "Pará",
                "slug" => "para",
                "initials" => "PA",
            ],
            [
                "country_id" => 1,
                "name" => "Paraíba",
                "slug" => "paraiba",
                "initials" => "PB",
            ],
            [
                "country_id" => 1,
                "name" => "Pernambuco",
                "slug" => "pernambuco",
                "initials" => "PE",
            ],
            [
                "country_id" => 1,
                "name" => "Piauí",
                "slug" => "piaui",
                "initials" => "PI",
            ],
            [
                "country_id" => 1,
                "name" => "Paraná",
                "slug" => "parana",
                "initials" => "PR",
            ],
            [
                "country_id" => 1,
                "name" => "Rio de Janeiro",
                "slug" => "rio-de-janeiro",
                "initials" => "RJ",
            ],
            [
                "country_id" => 1,
                "name" => "Rio Grande do Norte",
                "slug" => "rio-grande-do-norte",
                "initials" => "RN",
            ],
            [
                "country_id" => 1,
                "name" => "Rondônia",
                "slug" => "rondonia",
                "initials" => "RO",
            ],
            [
                "country_id" => 1,
                "name" => "Roraima",
                "slug" => "roraima",
                "initials" => "RR",
            ],
            [
                "country_id" => 1,
                "name" => "Rio Grande do Sul",
                "slug" => "rio-grande-do-sul",
                "initials" => "RS",
            ],
            [
                "country_id" => 1,
                "name" => "Santa Catarina",
                "slug" => "santa-catarina",
                "initials" => "SC",
            ],
            [
                "country_id" => 1,
                "name" => "Sergipe",
                "slug" => "sergipe",
                "initials" => "SE",
            ],
            [
                "country_id" => 1,
                "name" => "São Paulo",
                "slug" => "sao-paulo",
                "initials" => "SP",
            ],
            [
                "country_id" => 1,
                "name" => "Tocantins",
                "slug" => "tocantins",
                "initials" => "TO",
            ],
            [
                "country_id" => 1,
                "name" => "Exterior",
                "slug" => "exterior",
                "initials" => "EX",
            ],
        ];
    }
}
