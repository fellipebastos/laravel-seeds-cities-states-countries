<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cities')->insert($this->getArrayCities());
    }

    private function getArrayCities() 
    {
        return [
            [
                "state_id" => 8,
                "name" => "Afonso Cláudio",
                "slug" => "afonso-claudio",
            ],
            [
                "state_id" => 8,
                "name" => "Água Doce do Norte",
                "slug" => "agua-doce-do-norte",
            ],
            [
                "state_id" => 8,
                "name" => "Águia Branca",
                "slug" => "aguia-branca",
            ],
            [
                "state_id" => 8,
                "name" => "Alegre",
                "slug" => "alegre",
            ],
            [
                "state_id" => 8,
                "name" => "Alfredo Chaves",
                "slug" => "alfredo-chaves",
            ],
            [
                "state_id" => 8,
                "name" => "Alto Rio Novo",
                "slug" => "alto-rio-novo",
            ],
            [
                "state_id" => 8,
                "name" => "Anchieta",
                "slug" => "anchieta",
            ],
            [
                "state_id" => 8,
                "name" => "Apiacá",
                "slug" => "apiaca",
            ],
            [
                "state_id" => 8,
                "name" => "Aracruz",
                "slug" => "aracruz",
            ],
            [
                "state_id" => 8,
                "name" => "Atilio Vivacqua",
                "slug" => "atilio-vivacqua",
            ],
            [
                "state_id" => 8,
                "name" => "Baixo Guandu",
                "slug" => "baixo-guandu",
            ],
            [
                "state_id" => 8,
                "name" => "Barra de São Francisco",
                "slug" => "barra-de-sao-francisco",
            ],
            [
                "state_id" => 8,
                "name" => "Boa Esperança",
                "slug" => "boa-esperanca",
            ],
            [
                "state_id" => 8,
                "name" => "Bom Jesus do Norte",
                "slug" => "bom-jesus-do-norte",
            ],
            [
                "state_id" => 8,
                "name" => "Brejetuba",
                "slug" => "brejetuba",
            ],
            [
                "state_id" => 8,
                "name" => "Cachoeiro de Itapemirim",
                "slug" => "cachoeiro-de-itapemirim",
            ],
            [
                "state_id" => 8,
                "name" => "Cariacica",
                "slug" => "cariacica",
            ],
            [
                "state_id" => 8,
                "name" => "Castelo",
                "slug" => "castelo",
            ],
            [
                "state_id" => 8,
                "name" => "Colatina",
                "slug" => "colatina",
            ],
            [
                "state_id" => 8,
                "name" => "Conceição da Barra",
                "slug" => "conceicao-da-barra",
            ],
            [
                "state_id" => 8,
                "name" => "Conceição do Castelo",
                "slug" => "conceicao-do-castelo",
            ],
            [
                "state_id" => 8,
                "name" => "Divino de São Lourenço",
                "slug" => "divino-de-sao-lourenco",
            ],
            [
                "state_id" => 8,
                "name" => "Domingos Martins",
                "slug" => "domingos-martins",
            ],
            [
                "state_id" => 8,
                "name" => "Dores do Rio Preto",
                "slug" => "dores-do-rio-preto",
            ],
            [
                "state_id" => 8,
                "name" => "Ecoporanga",
                "slug" => "ecoporanga",
            ],
            [
                "state_id" => 8,
                "name" => "Fundão",
                "slug" => "fundao",
            ],
            [
                "state_id" => 8,
                "name" => "Governador Lindenberg",
                "slug" => "governador-lindenberg",
            ],
            [
                "state_id" => 8,
                "name" => "Guaçuí",
                "slug" => "guacui",
            ],
            [
                "state_id" => 8,
                "name" => "Guarapari",
                "slug" => "guarapari",
            ],
            [
                "state_id" => 8,
                "name" => "Ibatiba",
                "slug" => "ibatiba",
            ],
            [
                "state_id" => 8,
                "name" => "Ibiraçu",
                "slug" => "ibiracu",
            ],
            [
                "state_id" => 8,
                "name" => "Ibitirama",
                "slug" => "ibitirama",
            ],
            [
                "state_id" => 8,
                "name" => "Iconha",
                "slug" => "iconha",
            ],
            [
                "state_id" => 8,
                "name" => "Irupi",
                "slug" => "irupi",
            ],
            [
                "state_id" => 8,
                "name" => "Itaguaçu",
                "slug" => "itaguacu",
            ],
            [
                "state_id" => 8,
                "name" => "Itapemirim",
                "slug" => "itapemirim",
            ],
            [
                "state_id" => 8,
                "name" => "Itarana",
                "slug" => "itarana",
            ],
            [
                "state_id" => 8,
                "name" => "Iúna",
                "slug" => "iuna",
            ],
            [
                "state_id" => 8,
                "name" => "Jaguaré",
                "slug" => "jaguare",
            ],
            [
                "state_id" => 8,
                "name" => "Jerônimo Monteiro",
                "slug" => "jeronimo-monteiro",
            ],
            [
                "state_id" => 8,
                "name" => "João Neiva",
                "slug" => "joao-neiva",
            ],
            [
                "state_id" => 8,
                "name" => "Laranja da Terra",
                "slug" => "laranja-da-terra",
            ],
            [
                "state_id" => 8,
                "name" => "Linhares",
                "slug" => "linhares",
            ],
            [
                "state_id" => 8,
                "name" => "Mantenópolis",
                "slug" => "mantenopolis",
            ],
            [
                "state_id" => 8,
                "name" => "Marataízes",
                "slug" => "marataizes",
            ],
            [
                "state_id" => 8,
                "name" => "Marechal Floriano",
                "slug" => "marechal-floriano",
            ],
            [
                "state_id" => 8,
                "name" => "Marilândia",
                "slug" => "marilandia",
            ],
            [
                "state_id" => 8,
                "name" => "Mimoso do Sul",
                "slug" => "mimoso-do-sul",
            ],
            [
                "state_id" => 8,
                "name" => "Montanha",
                "slug" => "montanha",
            ],
            [
                "state_id" => 8,
                "name" => "Mucurici",
                "slug" => "mucurici",
            ],
            [
                "state_id" => 8,
                "name" => "Muniz Freire",
                "slug" => "muniz-freire",
            ],
            [
                "state_id" => 8,
                "name" => "Muqui",
                "slug" => "muqui",
            ],
            [
                "state_id" => 8,
                "name" => "Nova Venécia",
                "slug" => "nova-venecia",
            ],
            [
                "state_id" => 8,
                "name" => "Pancas",
                "slug" => "pancas",
            ],
            [
                "state_id" => 8,
                "name" => "Pedro Canário",
                "slug" => "pedro-canario",
            ],
            [
                "state_id" => 8,
                "name" => "Pinheiros",
                "slug" => "pinheiros",
            ],
            [
                "state_id" => 8,
                "name" => "Piúma",
                "slug" => "piuma",
            ],
            [
                "state_id" => 8,
                "name" => "Ponto Belo",
                "slug" => "ponto-belo",
            ],
            [
                "state_id" => 8,
                "name" => "Presidente Kennedy",
                "slug" => "presidente-kennedy",
            ],
            [
                "state_id" => 8,
                "name" => "Rio Bananal",
                "slug" => "rio-bananal",
            ],
            [
                "state_id" => 8,
                "name" => "Rio Novo do Sul",
                "slug" => "rio-novo-do-sul",
            ],
            [
                "state_id" => 8,
                "name" => "Santa Leopoldina",
                "slug" => "santa-leopoldina",
            ],
            [
                "state_id" => 8,
                "name" => "Santa Maria de Jetibá",
                "slug" => "santa-maria-de-jetiba",
            ],
            [
                "state_id" => 8,
                "name" => "Santa Teresa",
                "slug" => "santa-teresa",
            ],
            [
                "state_id" => 8,
                "name" => "São Domingos do Norte",
                "slug" => "sao-domingos-do-norte",
            ],
            [
                "state_id" => 8,
                "name" => "São Gabriel da Palha",
                "slug" => "sao-gabriel-da-palha",
            ],
            [
                "state_id" => 8,
                "name" => "São José do Calçado",
                "slug" => "sao-jose-do-calcado",
            ],
            [
                "state_id" => 8,
                "name" => "São Mateus",
                "slug" => "sao-mateus",
            ],
            [
                "state_id" => 8,
                "name" => "São Roque do Canaã",
                "slug" => "sao-roque-do-canaa",
            ],
            [
                "state_id" => 8,
                "name" => "Serra",
                "slug" => "serra",
            ],
            [
                "state_id" => 8,
                "name" => "Sooretama",
                "slug" => "sooretama",
            ],
            [
                "state_id" => 8,
                "name" => "Vargem Alta",
                "slug" => "vargem-alta",
            ],
            [
                "state_id" => 8,
                "name" => "Venda Nova do Imigrante",
                "slug" => "venda-nova-do-imigrante",
            ],
            [
                "state_id" => 8,
                "name" => "Viana",
                "slug" => "viana",
            ],
            [
                "state_id" => 8,
                "name" => "Vila Pavão",
                "slug" => "vila-pavao",
            ],
            [
                "state_id" => 8,
                "name" => "Vila Valério",
                "slug" => "vila-valerio",
            ],
            [
                "state_id" => 8,
                "name" => "Vila Velha",
                "slug" => "vila-velha",
            ],
            [
                "state_id" => 8,
                "name" => "Vitória",
                "slug" => "vitoria",
            ],
            [
                "state_id" => 1,
                "name" => "Acrelândia",
                "slug" => "acrelandia",
            ],
            [
                "state_id" => 1,
                "name" => "Assis Brasil",
                "slug" => "assis-brasil",
            ],
            [
                "state_id" => 1,
                "name" => "Brasiléia",
                "slug" => "brasileia",
            ],
            [
                "state_id" => 1,
                "name" => "Bujari",
                "slug" => "bujari",
            ],
            [
                "state_id" => 1,
                "name" => "Capixaba",
                "slug" => "capixaba",
            ],
            [
                "state_id" => 1,
                "name" => "Cruzeiro do Sul",
                "slug" => "cruzeiro-do-sul",
            ],
            [
                "state_id" => 1,
                "name" => "Epitaciolândia",
                "slug" => "epitaciolandia",
            ],
            [
                "state_id" => 1,
                "name" => "Feijó",
                "slug" => "feijo",
            ],
            [
                "state_id" => 1,
                "name" => "Jordão",
                "slug" => "jordao",
            ],
            [
                "state_id" => 1,
                "name" => "Mâncio Lima",
                "slug" => "mancio-lima",
            ],
            [
                "state_id" => 1,
                "name" => "Manoel Urbano",
                "slug" => "manoel-urbano",
            ],
            [
                "state_id" => 1,
                "name" => "Marechal Thaumaturgo",
                "slug" => "marechal-thaumaturgo",
            ],
            [
                "state_id" => 1,
                "name" => "Plácido de Castro",
                "slug" => "placido-de-castro",
            ],
            [
                "state_id" => 1,
                "name" => "Porto Acre",
                "slug" => "porto-acre",
            ],
            [
                "state_id" => 1,
                "name" => "Porto Walter",
                "slug" => "porto-walter",
            ],
            [
                "state_id" => 1,
                "name" => "Rio Branco",
                "slug" => "rio-branco",
            ],
            [
                "state_id" => 1,
                "name" => "Rodrigues Alves",
                "slug" => "rodrigues-alves",
            ],
            [
                "state_id" => 1,
                "name" => "Santa Rosa do Purus",
                "slug" => "santa-rosa-do-purus",
            ],
            [
                "state_id" => 1,
                "name" => "Sena Madureira",
                "slug" => "sena-madureira",
            ],
            [
                "state_id" => 1,
                "name" => "Senador Guiomard",
                "slug" => "senador-guiomard",
            ],
            [
                "state_id" => 1,
                "name" => "Tarauacá",
                "slug" => "tarauaca",
            ],
            [
                "state_id" => 1,
                "name" => "Xapuri",
                "slug" => "xapuri",
            ],
            [
                "state_id" => 2,
                "name" => "Água Branca",
                "slug" => "agua-branca",
            ],
            [
                "state_id" => 2,
                "name" => "Anadia",
                "slug" => "anadia",
            ],
            [
                "state_id" => 2,
                "name" => "Arapiraca",
                "slug" => "arapiraca",
            ],
            [
                "state_id" => 2,
                "name" => "Atalaia",
                "slug" => "atalaia",
            ],
            [
                "state_id" => 2,
                "name" => "Barra de Santo Antônio",
                "slug" => "barra-de-santo-antonio",
            ],
            [
                "state_id" => 2,
                "name" => "Barra de São Miguel",
                "slug" => "barra-de-sao-miguel",
            ],
            [
                "state_id" => 2,
                "name" => "Batalha",
                "slug" => "batalha",
            ],
            [
                "state_id" => 2,
                "name" => "Belém",
                "slug" => "belem",
            ],
            [
                "state_id" => 2,
                "name" => "Belo Monte",
                "slug" => "belo-monte",
            ],
            [
                "state_id" => 2,
                "name" => "Boca da Mata",
                "slug" => "boca-da-mata",
            ],
            [
                "state_id" => 2,
                "name" => "Branquinha",
                "slug" => "branquinha",
            ],
            [
                "state_id" => 2,
                "name" => "Cacimbinhas",
                "slug" => "cacimbinhas",
            ],
            [
                "state_id" => 2,
                "name" => "Cajueiro",
                "slug" => "cajueiro",
            ],
            [
                "state_id" => 2,
                "name" => "Campestre",
                "slug" => "campestre",
            ],
            [
                "state_id" => 2,
                "name" => "Campo Alegre",
                "slug" => "campo-alegre",
            ],
            [
                "state_id" => 2,
                "name" => "Campo Grande",
                "slug" => "campo-grande",
            ],
            [
                "state_id" => 2,
                "name" => "Canapi",
                "slug" => "canapi",
            ],
            [
                "state_id" => 2,
                "name" => "Capela",
                "slug" => "capela",
            ],
            [
                "state_id" => 2,
                "name" => "Carneiros",
                "slug" => "carneiros",
            ],
            [
                "state_id" => 2,
                "name" => "Chã Preta",
                "slug" => "cha-preta",
            ],
            [
                "state_id" => 2,
                "name" => "Coité do Nóia",
                "slug" => "coite-do-noia",
            ],
            [
                "state_id" => 2,
                "name" => "Colônia Leopoldina",
                "slug" => "colonia-leopoldina",
            ],
            [
                "state_id" => 2,
                "name" => "Coqueiro Seco",
                "slug" => "coqueiro-seco",
            ],
            [
                "state_id" => 2,
                "name" => "Coruripe",
                "slug" => "coruripe",
            ],
            [
                "state_id" => 2,
                "name" => "Craíbas",
                "slug" => "craibas",
            ],
            [
                "state_id" => 2,
                "name" => "Delmiro Gouveia",
                "slug" => "delmiro-gouveia",
            ],
            [
                "state_id" => 2,
                "name" => "Dois Riachos",
                "slug" => "dois-riachos",
            ],
            [
                "state_id" => 2,
                "name" => "Estrela de Alagoas",
                "slug" => "estrela-de-alagoas",
            ],
            [
                "state_id" => 2,
                "name" => "Feira Grande",
                "slug" => "feira-grande",
            ],
            [
                "state_id" => 2,
                "name" => "Feliz Deserto",
                "slug" => "feliz-deserto",
            ],
            [
                "state_id" => 2,
                "name" => "Flexeiras",
                "slug" => "flexeiras",
            ],
            [
                "state_id" => 2,
                "name" => "Girau do Ponciano",
                "slug" => "girau-do-ponciano",
            ],
            [
                "state_id" => 2,
                "name" => "Ibateguara",
                "slug" => "ibateguara",
            ],
            [
                "state_id" => 2,
                "name" => "Igaci",
                "slug" => "igaci",
            ],
            [
                "state_id" => 2,
                "name" => "Igreja Nova",
                "slug" => "igreja-nova",
            ],
            [
                "state_id" => 2,
                "name" => "Inhapi",
                "slug" => "inhapi",
            ],
            [
                "state_id" => 2,
                "name" => "Jacaré dos Homens",
                "slug" => "jacare-dos-homens",
            ],
            [
                "state_id" => 2,
                "name" => "Jacuípe",
                "slug" => "jacuipe",
            ],
            [
                "state_id" => 2,
                "name" => "Japaratinga",
                "slug" => "japaratinga",
            ],
            [
                "state_id" => 2,
                "name" => "Jaramataia",
                "slug" => "jaramataia",
            ],
            [
                "state_id" => 2,
                "name" => "Jequiá da Praia",
                "slug" => "jequia-da-praia",
            ],
            [
                "state_id" => 2,
                "name" => "Joaquim Gomes",
                "slug" => "joaquim-gomes",
            ],
            [
                "state_id" => 2,
                "name" => "Jundiá",
                "slug" => "jundia",
            ],
            [
                "state_id" => 2,
                "name" => "Junqueiro",
                "slug" => "junqueiro",
            ],
            [
                "state_id" => 2,
                "name" => "Lagoa da Canoa",
                "slug" => "lagoa-da-canoa",
            ],
            [
                "state_id" => 2,
                "name" => "Limoeiro de Anadia",
                "slug" => "limoeiro-de-anadia",
            ],
            [
                "state_id" => 2,
                "name" => "Maceió",
                "slug" => "maceio",
            ],
            [
                "state_id" => 2,
                "name" => "Major Isidoro",
                "slug" => "major-isidoro",
            ],
            [
                "state_id" => 2,
                "name" => "Mar Vermelho",
                "slug" => "mar-vermelho",
            ],
            [
                "state_id" => 2,
                "name" => "Maragogi",
                "slug" => "maragogi",
            ],
            [
                "state_id" => 2,
                "name" => "Maravilha",
                "slug" => "maravilha",
            ],
            [
                "state_id" => 2,
                "name" => "Marechal Deodoro",
                "slug" => "marechal-deodoro",
            ],
            [
                "state_id" => 2,
                "name" => "Maribondo",
                "slug" => "maribondo",
            ],
            [
                "state_id" => 2,
                "name" => "Mata Grande",
                "slug" => "mata-grande",
            ],
            [
                "state_id" => 2,
                "name" => "Matriz de Camaragibe",
                "slug" => "matriz-de-camaragibe",
            ],
            [
                "state_id" => 2,
                "name" => "Messias",
                "slug" => "messias",
            ],
            [
                "state_id" => 2,
                "name" => "Minador do Negrão",
                "slug" => "minador-do-negrao",
            ],
            [
                "state_id" => 2,
                "name" => "Monteirópolis",
                "slug" => "monteiropolis",
            ],
            [
                "state_id" => 2,
                "name" => "Murici",
                "slug" => "murici",
            ],
            [
                "state_id" => 2,
                "name" => "Novo Lino",
                "slug" => "novo-lino",
            ],
            [
                "state_id" => 2,
                "name" => "Olho d`Água das Flores",
                "slug" => "olho-dagua-das-flores",
            ],
            [
                "state_id" => 2,
                "name" => "Olho d`Água do Casado",
                "slug" => "olho-dagua-do-casado",
            ],
            [
                "state_id" => 2,
                "name" => "Olho d`Água Grande",
                "slug" => "olho-dagua-grande",
            ],
            [
                "state_id" => 2,
                "name" => "Olivença",
                "slug" => "olivenca",
            ],
            [
                "state_id" => 2,
                "name" => "Ouro Branco",
                "slug" => "ouro-branco",
            ],
            [
                "state_id" => 2,
                "name" => "Palestina",
                "slug" => "palestina",
            ],
            [
                "state_id" => 2,
                "name" => "Palmeira dos Índios",
                "slug" => "palmeira-dos-indios",
            ],
            [
                "state_id" => 2,
                "name" => "Pão de Açúcar",
                "slug" => "pao-de-acucar",
            ],
            [
                "state_id" => 2,
                "name" => "Pariconha",
                "slug" => "pariconha",
            ],
            [
                "state_id" => 2,
                "name" => "Paripueira",
                "slug" => "paripueira",
            ],
            [
                "state_id" => 2,
                "name" => "Passo de Camaragibe",
                "slug" => "passo-de-camaragibe",
            ],
            [
                "state_id" => 2,
                "name" => "Paulo Jacinto",
                "slug" => "paulo-jacinto",
            ],
            [
                "state_id" => 2,
                "name" => "Penedo",
                "slug" => "penedo",
            ],
            [
                "state_id" => 2,
                "name" => "Piaçabuçu",
                "slug" => "piacabucu",
            ],
            [
                "state_id" => 2,
                "name" => "Pilar",
                "slug" => "pilar",
            ],
            [
                "state_id" => 2,
                "name" => "Pindoba",
                "slug" => "pindoba",
            ],
            [
                "state_id" => 2,
                "name" => "Piranhas",
                "slug" => "piranhas",
            ],
            [
                "state_id" => 2,
                "name" => "Poço das Trincheiras",
                "slug" => "poco-das-trincheiras",
            ],
            [
                "state_id" => 2,
                "name" => "Porto Calvo",
                "slug" => "porto-calvo",
            ],
            [
                "state_id" => 2,
                "name" => "Porto de Pedras",
                "slug" => "porto-de-pedras",
            ],
            [
                "state_id" => 2,
                "name" => "Porto Real do Colégio",
                "slug" => "porto-real-do-colegio",
            ],
            [
                "state_id" => 2,
                "name" => "Quebrangulo",
                "slug" => "quebrangulo",
            ],
            [
                "state_id" => 2,
                "name" => "Rio Largo",
                "slug" => "rio-largo",
            ],
            [
                "state_id" => 2,
                "name" => "Roteiro",
                "slug" => "roteiro",
            ],
            [
                "state_id" => 2,
                "name" => "Santa Luzia do Norte",
                "slug" => "santa-luzia-do-norte",
            ],
            [
                "state_id" => 2,
                "name" => "Santana do Ipanema",
                "slug" => "santana-do-ipanema",
            ],
            [
                "state_id" => 2,
                "name" => "Santana do Mundaú",
                "slug" => "santana-do-mundau",
            ],
            [
                "state_id" => 2,
                "name" => "São Brás",
                "slug" => "sao-bras",
            ],
            [
                "state_id" => 2,
                "name" => "São José da Laje",
                "slug" => "sao-jose-da-laje",
            ],
            [
                "state_id" => 2,
                "name" => "São José da Tapera",
                "slug" => "sao-jose-da-tapera",
            ],
            [
                "state_id" => 2,
                "name" => "São Luís do Quitunde",
                "slug" => "sao-luis-do-quitunde",
            ],
            [
                "state_id" => 2,
                "name" => "São Miguel dos Campos",
                "slug" => "sao-miguel-dos-campos",
            ],
            [
                "state_id" => 2,
                "name" => "São Miguel dos Milagres",
                "slug" => "sao-miguel-dos-milagres",
            ],
            [
                "state_id" => 2,
                "name" => "São Sebastião",
                "slug" => "sao-sebastiao",
            ],
            [
                "state_id" => 2,
                "name" => "Satuba",
                "slug" => "satuba",
            ],
            [
                "state_id" => 2,
                "name" => "Senador Rui Palmeira",
                "slug" => "senador-rui-palmeira",
            ],
            [
                "state_id" => 2,
                "name" => "Tanque d`Arca",
                "slug" => "tanque-darca",
            ],
            [
                "state_id" => 2,
                "name" => "Taquarana",
                "slug" => "taquarana",
            ],
            [
                "state_id" => 2,
                "name" => "Teotônio Vilela",
                "slug" => "teotonio-vilela",
            ],
            [
                "state_id" => 2,
                "name" => "Traipu",
                "slug" => "traipu",
            ],
            [
                "state_id" => 2,
                "name" => "União dos Palmares",
                "slug" => "uniao-dos-palmares",
            ],
            [
                "state_id" => 2,
                "name" => "Viçosa",
                "slug" => "vicosa",
            ],
            [
                "state_id" => 4,
                "name" => "Amapá",
                "slug" => "amapa",
            ],
            [
                "state_id" => 4,
                "name" => "Calçoene",
                "slug" => "calcoene",
            ],
            [
                "state_id" => 4,
                "name" => "Cutias",
                "slug" => "cutias",
            ],
            [
                "state_id" => 4,
                "name" => "Ferreira Gomes",
                "slug" => "ferreira-gomes",
            ],
            [
                "state_id" => 4,
                "name" => "Itaubal",
                "slug" => "itaubal",
            ],
            [
                "state_id" => 4,
                "name" => "Laranjal do Jari",
                "slug" => "laranjal-do-jari",
            ],
            [
                "state_id" => 4,
                "name" => "Macapá",
                "slug" => "macapa",
            ],
            [
                "state_id" => 4,
                "name" => "Mazagão",
                "slug" => "mazagao",
            ],
            [
                "state_id" => 4,
                "name" => "Oiapoque",
                "slug" => "oiapoque",
            ],
            [
                "state_id" => 4,
                "name" => "Pedra Branca do Amaparí",
                "slug" => "pedra-branca-do-amapari",
            ],
            [
                "state_id" => 4,
                "name" => "Porto Grande",
                "slug" => "porto-grande",
            ],
            [
                "state_id" => 4,
                "name" => "Pracuúba",
                "slug" => "pracuuba",
            ],
            [
                "state_id" => 4,
                "name" => "Santana",
                "slug" => "santana",
            ],
            [
                "state_id" => 4,
                "name" => "Serra do Navio",
                "slug" => "serra-do-navio",
            ],
            [
                "state_id" => 4,
                "name" => "Tartarugalzinho",
                "slug" => "tartarugalzinho",
            ],
            [
                "state_id" => 4,
                "name" => "Vitória do Jari",
                "slug" => "vitoria-do-jari",
            ],
            [
                "state_id" => 3,
                "name" => "Alvarães",
                "slug" => "alvaraes",
            ],
            [
                "state_id" => 3,
                "name" => "Amaturá",
                "slug" => "amatura",
            ],
            [
                "state_id" => 3,
                "name" => "Anamã",
                "slug" => "anama",
            ],
            [
                "state_id" => 3,
                "name" => "Anori",
                "slug" => "anori",
            ],
            [
                "state_id" => 3,
                "name" => "Apuí",
                "slug" => "apui",
            ],
            [
                "state_id" => 3,
                "name" => "Atalaia do Norte",
                "slug" => "atalaia-do-norte",
            ],
            [
                "state_id" => 3,
                "name" => "Autazes",
                "slug" => "autazes",
            ],
            [
                "state_id" => 3,
                "name" => "Barcelos",
                "slug" => "barcelos",
            ],
            [
                "state_id" => 3,
                "name" => "Barreirinha",
                "slug" => "barreirinha",
            ],
            [
                "state_id" => 3,
                "name" => "Benjamin Constant",
                "slug" => "benjamin-constant",
            ],
            [
                "state_id" => 3,
                "name" => "Beruri",
                "slug" => "beruri",
            ],
            [
                "state_id" => 3,
                "name" => "Boa Vista do Ramos",
                "slug" => "boa-vista-do-ramos",
            ],
            [
                "state_id" => 3,
                "name" => "Boca do Acre",
                "slug" => "boca-do-acre",
            ],
            [
                "state_id" => 3,
                "name" => "Borba",
                "slug" => "borba",
            ],
            [
                "state_id" => 3,
                "name" => "Caapiranga",
                "slug" => "caapiranga",
            ],
            [
                "state_id" => 3,
                "name" => "Canutama",
                "slug" => "canutama",
            ],
            [
                "state_id" => 3,
                "name" => "Carauari",
                "slug" => "carauari",
            ],
            [
                "state_id" => 3,
                "name" => "Careiro",
                "slug" => "careiro",
            ],
            [
                "state_id" => 3,
                "name" => "Careiro da Várzea",
                "slug" => "careiro-da-varzea",
            ],
            [
                "state_id" => 3,
                "name" => "Coari",
                "slug" => "coari",
            ],
            [
                "state_id" => 3,
                "name" => "Codajás",
                "slug" => "codajas",
            ],
            [
                "state_id" => 3,
                "name" => "Eirunepé",
                "slug" => "eirunepe",
            ],
            [
                "state_id" => 3,
                "name" => "Envira",
                "slug" => "envira",
            ],
            [
                "state_id" => 3,
                "name" => "Fonte Boa",
                "slug" => "fonte-boa",
            ],
            [
                "state_id" => 3,
                "name" => "Guajará",
                "slug" => "guajara",
            ],
            [
                "state_id" => 3,
                "name" => "Humaitá",
                "slug" => "humaita",
            ],
            [
                "state_id" => 3,
                "name" => "Ipixuna",
                "slug" => "ipixuna",
            ],
            [
                "state_id" => 3,
                "name" => "Iranduba",
                "slug" => "iranduba",
            ],
            [
                "state_id" => 3,
                "name" => "Itacoatiara",
                "slug" => "itacoatiara",
            ],
            [
                "state_id" => 3,
                "name" => "Itamarati",
                "slug" => "itamarati",
            ],
            [
                "state_id" => 3,
                "name" => "Itapiranga",
                "slug" => "itapiranga",
            ],
            [
                "state_id" => 3,
                "name" => "Japurá",
                "slug" => "japura",
            ],
            [
                "state_id" => 3,
                "name" => "Juruá",
                "slug" => "jurua",
            ],
            [
                "state_id" => 3,
                "name" => "Jutaí",
                "slug" => "jutai",
            ],
            [
                "state_id" => 3,
                "name" => "Lábrea",
                "slug" => "labrea",
            ],
            [
                "state_id" => 3,
                "name" => "Manacapuru",
                "slug" => "manacapuru",
            ],
            [
                "state_id" => 3,
                "name" => "Manaquiri",
                "slug" => "manaquiri",
            ],
            [
                "state_id" => 3,
                "name" => "Manaus",
                "slug" => "manaus",
            ],
            [
                "state_id" => 3,
                "name" => "Manicoré",
                "slug" => "manicore",
            ],
            [
                "state_id" => 3,
                "name" => "Maraã",
                "slug" => "maraa",
            ],
            [
                "state_id" => 3,
                "name" => "Maués",
                "slug" => "maues",
            ],
            [
                "state_id" => 3,
                "name" => "Nhamundá",
                "slug" => "nhamunda",
            ],
            [
                "state_id" => 3,
                "name" => "Nova Olinda do Norte",
                "slug" => "nova-olinda-do-norte",
            ],
            [
                "state_id" => 3,
                "name" => "Novo Airão",
                "slug" => "novo-airao",
            ],
            [
                "state_id" => 3,
                "name" => "Novo Aripuanã",
                "slug" => "novo-aripuana",
            ],
            [
                "state_id" => 3,
                "name" => "Parintins",
                "slug" => "parintins",
            ],
            [
                "state_id" => 3,
                "name" => "Pauini",
                "slug" => "pauini",
            ],
            [
                "state_id" => 3,
                "name" => "Presidente Figueiredo",
                "slug" => "presidente-figueiredo",
            ],
            [
                "state_id" => 3,
                "name" => "Rio Preto da Eva",
                "slug" => "rio-preto-da-eva",
            ],
            [
                "state_id" => 3,
                "name" => "Santa Isabel do Rio Negro",
                "slug" => "santa-isabel-do-rio-negro",
            ],
            [
                "state_id" => 3,
                "name" => "Santo Antônio do Içá",
                "slug" => "santo-antonio-do-ica",
            ],
            [
                "state_id" => 3,
                "name" => "São Gabriel da Cachoeira",
                "slug" => "sao-gabriel-da-cachoeira",
            ],
            [
                "state_id" => 3,
                "name" => "São Paulo de Olivença",
                "slug" => "sao-paulo-de-olivenca",
            ],
            [
                "state_id" => 3,
                "name" => "São Sebastião do Uatumã",
                "slug" => "sao-sebastiao-do-uatuma",
            ],
            [
                "state_id" => 3,
                "name" => "Silves",
                "slug" => "silves",
            ],
            [
                "state_id" => 3,
                "name" => "Tabatinga",
                "slug" => "tabatinga",
            ],
            [
                "state_id" => 3,
                "name" => "Tapauá",
                "slug" => "tapaua",
            ],
            [
                "state_id" => 3,
                "name" => "Tefé",
                "slug" => "tefe",
            ],
            [
                "state_id" => 3,
                "name" => "Tonantins",
                "slug" => "tonantins",
            ],
            [
                "state_id" => 3,
                "name" => "Uarini",
                "slug" => "uarini",
            ],
            [
                "state_id" => 3,
                "name" => "Urucará",
                "slug" => "urucara",
            ],
            [
                "state_id" => 3,
                "name" => "Urucurituba",
                "slug" => "urucurituba",
            ],
            [
                "state_id" => 5,
                "name" => "Abaíra",
                "slug" => "abaira",
            ],
            [
                "state_id" => 5,
                "name" => "Abaré",
                "slug" => "abare",
            ],
            [
                "state_id" => 5,
                "name" => "Acajutiba",
                "slug" => "acajutiba",
            ],
            [
                "state_id" => 5,
                "name" => "Adustina",
                "slug" => "adustina",
            ],
            [
                "state_id" => 5,
                "name" => "Água Fria",
                "slug" => "agua-fria",
            ],
            [
                "state_id" => 5,
                "name" => "Aiquara",
                "slug" => "aiquara",
            ],
            [
                "state_id" => 5,
                "name" => "Alagoinhas",
                "slug" => "alagoinhas",
            ],
            [
                "state_id" => 5,
                "name" => "Alcobaça",
                "slug" => "alcobaca",
            ],
            [
                "state_id" => 5,
                "name" => "Almadina",
                "slug" => "almadina",
            ],
            [
                "state_id" => 5,
                "name" => "Amargosa",
                "slug" => "amargosa",
            ],
            [
                "state_id" => 5,
                "name" => "Amélia Rodrigues",
                "slug" => "amelia-rodrigues",
            ],
            [
                "state_id" => 5,
                "name" => "América Dourada",
                "slug" => "america-dourada",
            ],
            [
                "state_id" => 5,
                "name" => "Anagé",
                "slug" => "anage",
            ],
            [
                "state_id" => 5,
                "name" => "Andaraí",
                "slug" => "andarai",
            ],
            [
                "state_id" => 5,
                "name" => "Andorinha",
                "slug" => "andorinha",
            ],
            [
                "state_id" => 5,
                "name" => "Angical",
                "slug" => "angical",
            ],
            [
                "state_id" => 5,
                "name" => "Anguera",
                "slug" => "anguera",
            ],
            [
                "state_id" => 5,
                "name" => "Antas",
                "slug" => "antas",
            ],
            [
                "state_id" => 5,
                "name" => "Antônio Cardoso",
                "slug" => "antonio-cardoso",
            ],
            [
                "state_id" => 5,
                "name" => "Antônio Gonçalves",
                "slug" => "antonio-goncalves",
            ],
            [
                "state_id" => 5,
                "name" => "Aporá",
                "slug" => "apora",
            ],
            [
                "state_id" => 5,
                "name" => "Apuarema",
                "slug" => "apuarema",
            ],
            [
                "state_id" => 5,
                "name" => "Araças",
                "slug" => "aracas",
            ],
            [
                "state_id" => 5,
                "name" => "Aracatu",
                "slug" => "aracatu",
            ],
            [
                "state_id" => 5,
                "name" => "Araci",
                "slug" => "araci",
            ],
            [
                "state_id" => 5,
                "name" => "Aramari",
                "slug" => "aramari",
            ],
            [
                "state_id" => 5,
                "name" => "Arataca",
                "slug" => "arataca",
            ],
            [
                "state_id" => 5,
                "name" => "Aratuípe",
                "slug" => "aratuipe",
            ],
            [
                "state_id" => 5,
                "name" => "Aurelino Leal",
                "slug" => "aurelino-leal",
            ],
            [
                "state_id" => 5,
                "name" => "Baianópolis",
                "slug" => "baianopolis",
            ],
            [
                "state_id" => 5,
                "name" => "Baixa Grande",
                "slug" => "baixa-grande",
            ],
            [
                "state_id" => 5,
                "name" => "Banzaê",
                "slug" => "banzae",
            ],
            [
                "state_id" => 5,
                "name" => "Barra",
                "slug" => "barra",
            ],
            [
                "state_id" => 5,
                "name" => "Barra da Estiva",
                "slug" => "barra-da-estiva",
            ],
            [
                "state_id" => 5,
                "name" => "Barra do Choça",
                "slug" => "barra-do-choca",
            ],
            [
                "state_id" => 5,
                "name" => "Barra do Mendes",
                "slug" => "barra-do-mendes",
            ],
            [
                "state_id" => 5,
                "name" => "Barra do Rocha",
                "slug" => "barra-do-rocha",
            ],
            [
                "state_id" => 5,
                "name" => "Barreiras",
                "slug" => "barreiras",
            ],
            [
                "state_id" => 5,
                "name" => "Barro Alto",
                "slug" => "barro-alto",
            ],
            [
                "state_id" => 5,
                "name" => "Barro Preto (antigo Gov. Lomanto Jr.)",
                "slug" => "barro-preto-antigo-gov-lomanto-jr",
            ],
            [
                "state_id" => 5,
                "name" => "Barrocas",
                "slug" => "barrocas",
            ],
            [
                "state_id" => 5,
                "name" => "Belmonte",
                "slug" => "belmonte",
            ],
            [
                "state_id" => 5,
                "name" => "Belo Campo",
                "slug" => "belo-campo",
            ],
            [
                "state_id" => 5,
                "name" => "Biritinga",
                "slug" => "biritinga",
            ],
            [
                "state_id" => 5,
                "name" => "Boa Nova",
                "slug" => "boa-nova",
            ],
            [
                "state_id" => 5,
                "name" => "Boa Vista do Tupim",
                "slug" => "boa-vista-do-tupim",
            ],
            [
                "state_id" => 5,
                "name" => "Bom Jesus da Lapa",
                "slug" => "bom-jesus-da-lapa",
            ],
            [
                "state_id" => 5,
                "name" => "Bom Jesus da Serra",
                "slug" => "bom-jesus-da-serra",
            ],
            [
                "state_id" => 5,
                "name" => "Boninal",
                "slug" => "boninal",
            ],
            [
                "state_id" => 5,
                "name" => "Bonito",
                "slug" => "bonito",
            ],
            [
                "state_id" => 5,
                "name" => "Boquira",
                "slug" => "boquira",
            ],
            [
                "state_id" => 5,
                "name" => "Botuporã",
                "slug" => "botupora",
            ],
            [
                "state_id" => 5,
                "name" => "Brejões",
                "slug" => "brejoes",
            ],
            [
                "state_id" => 5,
                "name" => "Brejolândia",
                "slug" => "brejolandia",
            ],
            [
                "state_id" => 5,
                "name" => "Brotas de Macaúbas",
                "slug" => "brotas-de-macaubas",
            ],
            [
                "state_id" => 5,
                "name" => "Brumado",
                "slug" => "brumado",
            ],
            [
                "state_id" => 5,
                "name" => "Buerarema",
                "slug" => "buerarema",
            ],
            [
                "state_id" => 5,
                "name" => "Buritirama",
                "slug" => "buritirama",
            ],
            [
                "state_id" => 5,
                "name" => "Caatiba",
                "slug" => "caatiba",
            ],
            [
                "state_id" => 5,
                "name" => "Cabaceiras do Paraguaçu",
                "slug" => "cabaceiras-do-paraguacu",
            ],
            [
                "state_id" => 5,
                "name" => "Cachoeira",
                "slug" => "cachoeira",
            ],
            [
                "state_id" => 5,
                "name" => "Caculé",
                "slug" => "cacule",
            ],
            [
                "state_id" => 5,
                "name" => "Caém",
                "slug" => "caem",
            ],
            [
                "state_id" => 5,
                "name" => "Caetanos",
                "slug" => "caetanos",
            ],
            [
                "state_id" => 5,
                "name" => "Caetité",
                "slug" => "caetite",
            ],
            [
                "state_id" => 5,
                "name" => "Cafarnaum",
                "slug" => "cafarnaum",
            ],
            [
                "state_id" => 5,
                "name" => "Cairu",
                "slug" => "cairu",
            ],
            [
                "state_id" => 5,
                "name" => "Caldeirão Grande",
                "slug" => "caldeirao-grande",
            ],
            [
                "state_id" => 5,
                "name" => "Camacan",
                "slug" => "camacan",
            ],
            [
                "state_id" => 5,
                "name" => "Camaçari",
                "slug" => "camacari",
            ],
            [
                "state_id" => 5,
                "name" => "Camamu",
                "slug" => "camamu",
            ],
            [
                "state_id" => 5,
                "name" => "Campo Alegre de Lourdes",
                "slug" => "campo-alegre-de-lourdes",
            ],
            [
                "state_id" => 5,
                "name" => "Campo Formoso",
                "slug" => "campo-formoso",
            ],
            [
                "state_id" => 5,
                "name" => "Canápolis",
                "slug" => "canapolis",
            ],
            [
                "state_id" => 5,
                "name" => "Canarana",
                "slug" => "canarana",
            ],
            [
                "state_id" => 5,
                "name" => "Canavieiras",
                "slug" => "canavieiras",
            ],
            [
                "state_id" => 5,
                "name" => "Candeal",
                "slug" => "candeal",
            ],
            [
                "state_id" => 5,
                "name" => "Candeias",
                "slug" => "candeias",
            ],
            [
                "state_id" => 5,
                "name" => "Candiba",
                "slug" => "candiba",
            ],
            [
                "state_id" => 5,
                "name" => "Cândido Sales",
                "slug" => "candido-sales",
            ],
            [
                "state_id" => 5,
                "name" => "Cansanção",
                "slug" => "cansancao",
            ],
            [
                "state_id" => 5,
                "name" => "Canudos",
                "slug" => "canudos",
            ],
            [
                "state_id" => 5,
                "name" => "Capela do Alto Alegre",
                "slug" => "capela-do-alto-alegre",
            ],
            [
                "state_id" => 5,
                "name" => "Capim Grosso",
                "slug" => "capim-grosso",
            ],
            [
                "state_id" => 5,
                "name" => "Caraíbas",
                "slug" => "caraibas",
            ],
            [
                "state_id" => 5,
                "name" => "Caravelas",
                "slug" => "caravelas",
            ],
            [
                "state_id" => 5,
                "name" => "Cardeal da Silva",
                "slug" => "cardeal-da-silva",
            ],
            [
                "state_id" => 5,
                "name" => "Carinhanha",
                "slug" => "carinhanha",
            ],
            [
                "state_id" => 5,
                "name" => "Casa Nova",
                "slug" => "casa-nova",
            ],
            [
                "state_id" => 5,
                "name" => "Castro Alves",
                "slug" => "castro-alves",
            ],
            [
                "state_id" => 5,
                "name" => "Catolândia",
                "slug" => "catolandia",
            ],
            [
                "state_id" => 5,
                "name" => "Catu",
                "slug" => "catu",
            ],
            [
                "state_id" => 5,
                "name" => "Caturama",
                "slug" => "caturama",
            ],
            [
                "state_id" => 5,
                "name" => "Central",
                "slug" => "central",
            ],
            [
                "state_id" => 5,
                "name" => "Chorrochó",
                "slug" => "chorrocho",
            ],
            [
                "state_id" => 5,
                "name" => "Cícero Dantas",
                "slug" => "cicero-dantas",
            ],
            [
                "state_id" => 5,
                "name" => "Cipó",
                "slug" => "cipo",
            ],
            [
                "state_id" => 5,
                "name" => "Coaraci",
                "slug" => "coaraci",
            ],
            [
                "state_id" => 5,
                "name" => "Cocos",
                "slug" => "cocos",
            ],
            [
                "state_id" => 5,
                "name" => "Conceição da Feira",
                "slug" => "conceicao-da-feira",
            ],
            [
                "state_id" => 5,
                "name" => "Conceição do Almeida",
                "slug" => "conceicao-do-almeida",
            ],
            [
                "state_id" => 5,
                "name" => "Conceição do Coité",
                "slug" => "conceicao-do-coite",
            ],
            [
                "state_id" => 5,
                "name" => "Conceição do Jacuípe",
                "slug" => "conceicao-do-jacuipe",
            ],
            [
                "state_id" => 5,
                "name" => "Conde",
                "slug" => "conde",
            ],
            [
                "state_id" => 5,
                "name" => "Condeúba",
                "slug" => "condeuba",
            ],
            [
                "state_id" => 5,
                "name" => "Contendas do Sincorá",
                "slug" => "contendas-do-sincora",
            ],
            [
                "state_id" => 5,
                "name" => "Coração de Maria",
                "slug" => "coracao-de-maria",
            ],
            [
                "state_id" => 5,
                "name" => "Cordeiros",
                "slug" => "cordeiros",
            ],
            [
                "state_id" => 5,
                "name" => "Coribe",
                "slug" => "coribe",
            ],
            [
                "state_id" => 5,
                "name" => "Coronel João Sá",
                "slug" => "coronel-joao-sa",
            ],
            [
                "state_id" => 5,
                "name" => "Correntina",
                "slug" => "correntina",
            ],
            [
                "state_id" => 5,
                "name" => "Cotegipe",
                "slug" => "cotegipe",
            ],
            [
                "state_id" => 5,
                "name" => "Cravolândia",
                "slug" => "cravolandia",
            ],
            [
                "state_id" => 5,
                "name" => "Crisópolis",
                "slug" => "crisopolis",
            ],
            [
                "state_id" => 5,
                "name" => "Cristópolis",
                "slug" => "cristopolis",
            ],
            [
                "state_id" => 5,
                "name" => "Cruz das Almas",
                "slug" => "cruz-das-almas",
            ],
            [
                "state_id" => 5,
                "name" => "Curaçá",
                "slug" => "curaca",
            ],
            [
                "state_id" => 5,
                "name" => "Dário Meira",
                "slug" => "dario-meira",
            ],
            [
                "state_id" => 5,
                "name" => "Dias d`Ávila",
                "slug" => "dias-davila",
            ],
            [
                "state_id" => 5,
                "name" => "Dom Basílio",
                "slug" => "dom-basilio",
            ],
            [
                "state_id" => 5,
                "name" => "Dom Macedo Costa",
                "slug" => "dom-macedo-costa",
            ],
            [
                "state_id" => 5,
                "name" => "Elísio Medrado",
                "slug" => "elisio-medrado",
            ],
            [
                "state_id" => 5,
                "name" => "Encruzilhada",
                "slug" => "encruzilhada",
            ],
            [
                "state_id" => 5,
                "name" => "Entre Rios",
                "slug" => "entre-rios",
            ],
            [
                "state_id" => 5,
                "name" => "Érico Cardoso",
                "slug" => "erico-cardoso",
            ],
            [
                "state_id" => 5,
                "name" => "Esplanada",
                "slug" => "esplanada",
            ],
            [
                "state_id" => 5,
                "name" => "Euclides da Cunha",
                "slug" => "euclides-da-cunha",
            ],
            [
                "state_id" => 5,
                "name" => "Eunápolis",
                "slug" => "eunapolis",
            ],
            [
                "state_id" => 5,
                "name" => "Fátima",
                "slug" => "fatima",
            ],
            [
                "state_id" => 5,
                "name" => "Feira da Mata",
                "slug" => "feira-da-mata",
            ],
            [
                "state_id" => 5,
                "name" => "Feira de Santana",
                "slug" => "feira-de-santana",
            ],
            [
                "state_id" => 5,
                "name" => "Filadélfia",
                "slug" => "filadelfia",
            ],
            [
                "state_id" => 5,
                "name" => "Firmino Alves",
                "slug" => "firmino-alves",
            ],
            [
                "state_id" => 5,
                "name" => "Floresta Azul",
                "slug" => "floresta-azul",
            ],
            [
                "state_id" => 5,
                "name" => "Formosa do Rio Preto",
                "slug" => "formosa-do-rio-preto",
            ],
            [
                "state_id" => 5,
                "name" => "Gandu",
                "slug" => "gandu",
            ],
            [
                "state_id" => 5,
                "name" => "Gavião",
                "slug" => "gaviao",
            ],
            [
                "state_id" => 5,
                "name" => "Gentio do Ouro",
                "slug" => "gentio-do-ouro",
            ],
            [
                "state_id" => 5,
                "name" => "Glória",
                "slug" => "gloria",
            ],
            [
                "state_id" => 5,
                "name" => "Gongogi",
                "slug" => "gongogi",
            ],
            [
                "state_id" => 5,
                "name" => "Governador Mangabeira",
                "slug" => "governador-mangabeira",
            ],
            [
                "state_id" => 5,
                "name" => "Guajeru",
                "slug" => "guajeru",
            ],
            [
                "state_id" => 5,
                "name" => "Guanambi",
                "slug" => "guanambi",
            ],
            [
                "state_id" => 5,
                "name" => "Guaratinga",
                "slug" => "guaratinga",
            ],
            [
                "state_id" => 5,
                "name" => "Heliópolis",
                "slug" => "heliopolis",
            ],
            [
                "state_id" => 5,
                "name" => "Iaçu",
                "slug" => "iacu",
            ],
            [
                "state_id" => 5,
                "name" => "Ibiassucê",
                "slug" => "ibiassuce",
            ],
            [
                "state_id" => 5,
                "name" => "Ibicaraí",
                "slug" => "ibicarai",
            ],
            [
                "state_id" => 5,
                "name" => "Ibicoara",
                "slug" => "ibicoara",
            ],
            [
                "state_id" => 5,
                "name" => "Ibicuí",
                "slug" => "ibicui",
            ],
            [
                "state_id" => 5,
                "name" => "Ibipeba",
                "slug" => "ibipeba",
            ],
            [
                "state_id" => 5,
                "name" => "Ibipitanga",
                "slug" => "ibipitanga",
            ],
            [
                "state_id" => 5,
                "name" => "Ibiquera",
                "slug" => "ibiquera",
            ],
            [
                "state_id" => 5,
                "name" => "Ibirapitanga",
                "slug" => "ibirapitanga",
            ],
            [
                "state_id" => 5,
                "name" => "Ibirapuã",
                "slug" => "ibirapua",
            ],
            [
                "state_id" => 5,
                "name" => "Ibirataia",
                "slug" => "ibirataia",
            ],
            [
                "state_id" => 5,
                "name" => "Ibitiara",
                "slug" => "ibitiara",
            ],
            [
                "state_id" => 5,
                "name" => "Ibititá",
                "slug" => "ibitita",
            ],
            [
                "state_id" => 5,
                "name" => "Ibotirama",
                "slug" => "ibotirama",
            ],
            [
                "state_id" => 5,
                "name" => "Ichu",
                "slug" => "ichu",
            ],
            [
                "state_id" => 5,
                "name" => "Igaporã",
                "slug" => "igapora",
            ],
            [
                "state_id" => 5,
                "name" => "Igrapiúna",
                "slug" => "igrapiuna",
            ],
            [
                "state_id" => 5,
                "name" => "Iguaí",
                "slug" => "iguai",
            ],
            [
                "state_id" => 5,
                "name" => "Ilhéus",
                "slug" => "ilheus",
            ],
            [
                "state_id" => 5,
                "name" => "Inhambupe",
                "slug" => "inhambupe",
            ],
            [
                "state_id" => 5,
                "name" => "Ipecaetá",
                "slug" => "ipecaeta",
            ],
            [
                "state_id" => 5,
                "name" => "Ipiaú",
                "slug" => "ipiau",
            ],
            [
                "state_id" => 5,
                "name" => "Ipirá",
                "slug" => "ipira",
            ],
            [
                "state_id" => 5,
                "name" => "Ipupiara",
                "slug" => "ipupiara",
            ],
            [
                "state_id" => 5,
                "name" => "Irajuba",
                "slug" => "irajuba",
            ],
            [
                "state_id" => 5,
                "name" => "Iramaia",
                "slug" => "iramaia",
            ],
            [
                "state_id" => 5,
                "name" => "Iraquara",
                "slug" => "iraquara",
            ],
            [
                "state_id" => 5,
                "name" => "Irará",
                "slug" => "irara",
            ],
            [
                "state_id" => 5,
                "name" => "Irecê",
                "slug" => "irece",
            ],
            [
                "state_id" => 5,
                "name" => "Itabela",
                "slug" => "itabela",
            ],
            [
                "state_id" => 5,
                "name" => "Itaberaba",
                "slug" => "itaberaba",
            ],
            [
                "state_id" => 5,
                "name" => "Itabuna",
                "slug" => "itabuna",
            ],
            [
                "state_id" => 5,
                "name" => "Itacaré",
                "slug" => "itacare",
            ],
            [
                "state_id" => 5,
                "name" => "Itaeté",
                "slug" => "itaete",
            ],
            [
                "state_id" => 5,
                "name" => "Itagi",
                "slug" => "itagi",
            ],
            [
                "state_id" => 5,
                "name" => "Itagibá",
                "slug" => "itagiba",
            ],
            [
                "state_id" => 5,
                "name" => "Itagimirim",
                "slug" => "itagimirim",
            ],
            [
                "state_id" => 5,
                "name" => "Itaguaçu da Bahia",
                "slug" => "itaguacu-da-bahia",
            ],
            [
                "state_id" => 5,
                "name" => "Itaju do Colônia",
                "slug" => "itaju-do-colonia",
            ],
            [
                "state_id" => 5,
                "name" => "Itajuípe",
                "slug" => "itajuipe",
            ],
            [
                "state_id" => 5,
                "name" => "Itamaraju",
                "slug" => "itamaraju",
            ],
            [
                "state_id" => 5,
                "name" => "Itamari",
                "slug" => "itamari",
            ],
            [
                "state_id" => 5,
                "name" => "Itambé",
                "slug" => "itambe",
            ],
            [
                "state_id" => 5,
                "name" => "Itanagra",
                "slug" => "itanagra",
            ],
            [
                "state_id" => 5,
                "name" => "Itanhém",
                "slug" => "itanhem",
            ],
            [
                "state_id" => 5,
                "name" => "Itaparica",
                "slug" => "itaparica",
            ],
            [
                "state_id" => 5,
                "name" => "Itapé",
                "slug" => "itape",
            ],
            [
                "state_id" => 5,
                "name" => "Itapebi",
                "slug" => "itapebi",
            ],
            [
                "state_id" => 5,
                "name" => "Itapetinga",
                "slug" => "itapetinga",
            ],
            [
                "state_id" => 5,
                "name" => "Itapicuru",
                "slug" => "itapicuru",
            ],
            [
                "state_id" => 5,
                "name" => "Itapitanga",
                "slug" => "itapitanga",
            ],
            [
                "state_id" => 5,
                "name" => "Itaquara",
                "slug" => "itaquara",
            ],
            [
                "state_id" => 5,
                "name" => "Itarantim",
                "slug" => "itarantim",
            ],
            [
                "state_id" => 5,
                "name" => "Itatim",
                "slug" => "itatim",
            ],
            [
                "state_id" => 5,
                "name" => "Itiruçu",
                "slug" => "itirucu",
            ],
            [
                "state_id" => 5,
                "name" => "Itiúba",
                "slug" => "itiuba",
            ],
            [
                "state_id" => 5,
                "name" => "Itororó",
                "slug" => "itororo",
            ],
            [
                "state_id" => 5,
                "name" => "Ituaçu",
                "slug" => "ituacu",
            ],
            [
                "state_id" => 5,
                "name" => "Ituberá",
                "slug" => "itubera",
            ],
            [
                "state_id" => 5,
                "name" => "Iuiú",
                "slug" => "iuiu",
            ],
            [
                "state_id" => 5,
                "name" => "Jaborandi",
                "slug" => "jaborandi",
            ],
            [
                "state_id" => 5,
                "name" => "Jacaraci",
                "slug" => "jacaraci",
            ],
            [
                "state_id" => 5,
                "name" => "Jacobina",
                "slug" => "jacobina",
            ],
            [
                "state_id" => 5,
                "name" => "Jaguaquara",
                "slug" => "jaguaquara",
            ],
            [
                "state_id" => 5,
                "name" => "Jaguarari",
                "slug" => "jaguarari",
            ],
            [
                "state_id" => 5,
                "name" => "Jaguaripe",
                "slug" => "jaguaripe",
            ],
            [
                "state_id" => 5,
                "name" => "Jandaíra",
                "slug" => "jandaira",
            ],
            [
                "state_id" => 5,
                "name" => "Jequié",
                "slug" => "jequie",
            ],
            [
                "state_id" => 5,
                "name" => "Jeremoabo",
                "slug" => "jeremoabo",
            ],
            [
                "state_id" => 5,
                "name" => "Jiquiriçá",
                "slug" => "jiquirica",
            ],
            [
                "state_id" => 5,
                "name" => "Jitaúna",
                "slug" => "jitauna",
            ],
            [
                "state_id" => 5,
                "name" => "João Dourado",
                "slug" => "joao-dourado",
            ],
            [
                "state_id" => 5,
                "name" => "Juazeiro",
                "slug" => "juazeiro",
            ],
            [
                "state_id" => 5,
                "name" => "Jucuruçu",
                "slug" => "jucurucu",
            ],
            [
                "state_id" => 5,
                "name" => "Jussara",
                "slug" => "jussara",
            ],
            [
                "state_id" => 5,
                "name" => "Jussari",
                "slug" => "jussari",
            ],
            [
                "state_id" => 5,
                "name" => "Jussiape",
                "slug" => "jussiape",
            ],
            [
                "state_id" => 5,
                "name" => "Lafaiete Coutinho",
                "slug" => "lafaiete-coutinho",
            ],
            [
                "state_id" => 5,
                "name" => "Lagoa Real",
                "slug" => "lagoa-real",
            ],
            [
                "state_id" => 5,
                "name" => "Laje",
                "slug" => "laje",
            ],
            [
                "state_id" => 5,
                "name" => "Lajedão",
                "slug" => "lajedao",
            ],
            [
                "state_id" => 5,
                "name" => "Lajedinho",
                "slug" => "lajedinho",
            ],
            [
                "state_id" => 5,
                "name" => "Lajedo do Tabocal",
                "slug" => "lajedo-do-tabocal",
            ],
            [
                "state_id" => 5,
                "name" => "Lamarão",
                "slug" => "lamarao",
            ],
            [
                "state_id" => 5,
                "name" => "Lapão",
                "slug" => "lapao",
            ],
            [
                "state_id" => 5,
                "name" => "Lauro de Freitas",
                "slug" => "lauro-de-freitas",
            ],
            [
                "state_id" => 5,
                "name" => "Lençóis",
                "slug" => "lencois",
            ],
            [
                "state_id" => 5,
                "name" => "Licínio de Almeida",
                "slug" => "licinio-de-almeida",
            ],
            [
                "state_id" => 5,
                "name" => "Livramento de Nossa Senhora",
                "slug" => "livramento-de-nossa-senhora",
            ],
            [
                "state_id" => 5,
                "name" => "Luís Eduardo Magalhães",
                "slug" => "luis-eduardo-magalhaes",
            ],
            [
                "state_id" => 5,
                "name" => "Macajuba",
                "slug" => "macajuba",
            ],
            [
                "state_id" => 5,
                "name" => "Macarani",
                "slug" => "macarani",
            ],
            [
                "state_id" => 5,
                "name" => "Macaúbas",
                "slug" => "macaubas",
            ],
            [
                "state_id" => 5,
                "name" => "Macururé",
                "slug" => "macurure",
            ],
            [
                "state_id" => 5,
                "name" => "Madre de Deus",
                "slug" => "madre-de-deus",
            ],
            [
                "state_id" => 5,
                "name" => "Maetinga",
                "slug" => "maetinga",
            ],
            [
                "state_id" => 5,
                "name" => "Maiquinique",
                "slug" => "maiquinique",
            ],
            [
                "state_id" => 5,
                "name" => "Mairi",
                "slug" => "mairi",
            ],
            [
                "state_id" => 5,
                "name" => "Malhada",
                "slug" => "malhada",
            ],
            [
                "state_id" => 5,
                "name" => "Malhada de Pedras",
                "slug" => "malhada-de-pedras",
            ],
            [
                "state_id" => 5,
                "name" => "Manoel Vitorino",
                "slug" => "manoel-vitorino",
            ],
            [
                "state_id" => 5,
                "name" => "Mansidão",
                "slug" => "mansidao",
            ],
            [
                "state_id" => 5,
                "name" => "Maracás",
                "slug" => "maracas",
            ],
            [
                "state_id" => 5,
                "name" => "Maragogipe",
                "slug" => "maragogipe",
            ],
            [
                "state_id" => 5,
                "name" => "Maraú",
                "slug" => "marau",
            ],
            [
                "state_id" => 5,
                "name" => "Marcionílio Souza",
                "slug" => "marcionilio-souza",
            ],
            [
                "state_id" => 5,
                "name" => "Mascote",
                "slug" => "mascote",
            ],
            [
                "state_id" => 5,
                "name" => "Mata de São João",
                "slug" => "mata-de-sao-joao",
            ],
            [
                "state_id" => 5,
                "name" => "Matina",
                "slug" => "matina",
            ],
            [
                "state_id" => 5,
                "name" => "Medeiros Neto",
                "slug" => "medeiros-neto",
            ],
            [
                "state_id" => 5,
                "name" => "Miguel Calmon",
                "slug" => "miguel-calmon",
            ],
            [
                "state_id" => 5,
                "name" => "Milagres",
                "slug" => "milagres",
            ],
            [
                "state_id" => 5,
                "name" => "Mirangaba",
                "slug" => "mirangaba",
            ],
            [
                "state_id" => 5,
                "name" => "Mirante",
                "slug" => "mirante",
            ],
            [
                "state_id" => 5,
                "name" => "Monte Santo",
                "slug" => "monte-santo",
            ],
            [
                "state_id" => 5,
                "name" => "Morpará",
                "slug" => "morpara",
            ],
            [
                "state_id" => 5,
                "name" => "Morro do Chapéu",
                "slug" => "morro-do-chapeu",
            ],
            [
                "state_id" => 5,
                "name" => "Mortugaba",
                "slug" => "mortugaba",
            ],
            [
                "state_id" => 5,
                "name" => "Mucugê",
                "slug" => "mucuge",
            ],
            [
                "state_id" => 5,
                "name" => "Mucuri",
                "slug" => "mucuri",
            ],
            [
                "state_id" => 5,
                "name" => "Mulungu do Morro",
                "slug" => "mulungu-do-morro",
            ],
            [
                "state_id" => 5,
                "name" => "Mundo Novo",
                "slug" => "mundo-novo",
            ],
            [
                "state_id" => 5,
                "name" => "Muniz Ferreira",
                "slug" => "muniz-ferreira",
            ],
            [
                "state_id" => 5,
                "name" => "Muquém de São Francisco",
                "slug" => "muquem-de-sao-francisco",
            ],
            [
                "state_id" => 5,
                "name" => "Muritiba",
                "slug" => "muritiba",
            ],
            [
                "state_id" => 5,
                "name" => "Mutuípe",
                "slug" => "mutuipe",
            ],
            [
                "state_id" => 5,
                "name" => "Nazaré",
                "slug" => "nazare",
            ],
            [
                "state_id" => 5,
                "name" => "Nilo Peçanha",
                "slug" => "nilo-pecanha",
            ],
            [
                "state_id" => 5,
                "name" => "Nordestina",
                "slug" => "nordestina",
            ],
            [
                "state_id" => 5,
                "name" => "Nova Canaã",
                "slug" => "nova-canaa",
            ],
            [
                "state_id" => 5,
                "name" => "Nova Fátima",
                "slug" => "nova-fatima",
            ],
            [
                "state_id" => 5,
                "name" => "Nova Ibiá",
                "slug" => "nova-ibia",
            ],
            [
                "state_id" => 5,
                "name" => "Nova Itarana",
                "slug" => "nova-itarana",
            ],
            [
                "state_id" => 5,
                "name" => "Nova Redenção",
                "slug" => "nova-redencao",
            ],
            [
                "state_id" => 5,
                "name" => "Nova Soure",
                "slug" => "nova-soure",
            ],
            [
                "state_id" => 5,
                "name" => "Nova Viçosa",
                "slug" => "nova-vicosa",
            ],
            [
                "state_id" => 5,
                "name" => "Novo Horizonte",
                "slug" => "novo-horizonte",
            ],
            [
                "state_id" => 5,
                "name" => "Novo Triunfo",
                "slug" => "novo-triunfo",
            ],
            [
                "state_id" => 5,
                "name" => "Olindina",
                "slug" => "olindina",
            ],
            [
                "state_id" => 5,
                "name" => "Oliveira dos Brejinhos",
                "slug" => "oliveira-dos-brejinhos",
            ],
            [
                "state_id" => 5,
                "name" => "Ouriçangas",
                "slug" => "ouricangas",
            ],
            [
                "state_id" => 5,
                "name" => "Ourolândia",
                "slug" => "ourolandia",
            ],
            [
                "state_id" => 5,
                "name" => "Palmas de Monte Alto",
                "slug" => "palmas-de-monte-alto",
            ],
            [
                "state_id" => 5,
                "name" => "Palmeiras",
                "slug" => "palmeiras",
            ],
            [
                "state_id" => 5,
                "name" => "Paramirim",
                "slug" => "paramirim",
            ],
            [
                "state_id" => 5,
                "name" => "Paratinga",
                "slug" => "paratinga",
            ],
            [
                "state_id" => 5,
                "name" => "Paripiranga",
                "slug" => "paripiranga",
            ],
            [
                "state_id" => 5,
                "name" => "Pau Brasil",
                "slug" => "pau-brasil",
            ],
            [
                "state_id" => 5,
                "name" => "Paulo Afonso",
                "slug" => "paulo-afonso",
            ],
            [
                "state_id" => 5,
                "name" => "Pé de Serra",
                "slug" => "pe-de-serra",
            ],
            [
                "state_id" => 5,
                "name" => "Pedrão",
                "slug" => "pedrao",
            ],
            [
                "state_id" => 5,
                "name" => "Pedro Alexandre",
                "slug" => "pedro-alexandre",
            ],
            [
                "state_id" => 5,
                "name" => "Piatã",
                "slug" => "piata",
            ],
            [
                "state_id" => 5,
                "name" => "Pilão Arcado",
                "slug" => "pilao-arcado",
            ],
            [
                "state_id" => 5,
                "name" => "Pindaí",
                "slug" => "pindai",
            ],
            [
                "state_id" => 5,
                "name" => "Pindobaçu",
                "slug" => "pindobacu",
            ],
            [
                "state_id" => 5,
                "name" => "Pintadas",
                "slug" => "pintadas",
            ],
            [
                "state_id" => 5,
                "name" => "Piraí do Norte",
                "slug" => "pirai-do-norte",
            ],
            [
                "state_id" => 5,
                "name" => "Piripá",
                "slug" => "piripa",
            ],
            [
                "state_id" => 5,
                "name" => "Piritiba",
                "slug" => "piritiba",
            ],
            [
                "state_id" => 5,
                "name" => "Planaltino",
                "slug" => "planaltino",
            ],
            [
                "state_id" => 5,
                "name" => "Planalto",
                "slug" => "planalto",
            ],
            [
                "state_id" => 5,
                "name" => "Poções",
                "slug" => "pocoes",
            ],
            [
                "state_id" => 5,
                "name" => "Pojuca",
                "slug" => "pojuca",
            ],
            [
                "state_id" => 5,
                "name" => "Ponto Novo",
                "slug" => "ponto-novo",
            ],
            [
                "state_id" => 5,
                "name" => "Porto Seguro",
                "slug" => "porto-seguro",
            ],
            [
                "state_id" => 5,
                "name" => "Potiraguá",
                "slug" => "potiragua",
            ],
            [
                "state_id" => 5,
                "name" => "Prado",
                "slug" => "prado",
            ],
            [
                "state_id" => 5,
                "name" => "Presidente Dutra",
                "slug" => "presidente-dutra",
            ],
            [
                "state_id" => 5,
                "name" => "Presidente Jânio Quadros",
                "slug" => "presidente-janio-quadros",
            ],
            [
                "state_id" => 5,
                "name" => "Presidente Tancredo Neves",
                "slug" => "presidente-tancredo-neves",
            ],
            [
                "state_id" => 5,
                "name" => "Queimadas",
                "slug" => "queimadas",
            ],
            [
                "state_id" => 5,
                "name" => "Quijingue",
                "slug" => "quijingue",
            ],
            [
                "state_id" => 5,
                "name" => "Quixabeira",
                "slug" => "quixabeira",
            ],
            [
                "state_id" => 5,
                "name" => "Rafael Jambeiro",
                "slug" => "rafael-jambeiro",
            ],
            [
                "state_id" => 5,
                "name" => "Remanso",
                "slug" => "remanso",
            ],
            [
                "state_id" => 5,
                "name" => "Retirolândia",
                "slug" => "retirolandia",
            ],
            [
                "state_id" => 5,
                "name" => "Riachão das Neves",
                "slug" => "riachao-das-neves",
            ],
            [
                "state_id" => 5,
                "name" => "Riachão do Jacuípe",
                "slug" => "riachao-do-jacuipe",
            ],
            [
                "state_id" => 5,
                "name" => "Riacho de Santana",
                "slug" => "riacho-de-santana",
            ],
            [
                "state_id" => 5,
                "name" => "Ribeira do Amparo",
                "slug" => "ribeira-do-amparo",
            ],
            [
                "state_id" => 5,
                "name" => "Ribeira do Pombal",
                "slug" => "ribeira-do-pombal",
            ],
            [
                "state_id" => 5,
                "name" => "Ribeirão do Largo",
                "slug" => "ribeirao-do-largo",
            ],
            [
                "state_id" => 5,
                "name" => "Rio de Contas",
                "slug" => "rio-de-contas",
            ],
            [
                "state_id" => 5,
                "name" => "Rio do Antônio",
                "slug" => "rio-do-antonio",
            ],
            [
                "state_id" => 5,
                "name" => "Rio do Pires",
                "slug" => "rio-do-pires",
            ],
            [
                "state_id" => 5,
                "name" => "Rio Real",
                "slug" => "rio-real",
            ],
            [
                "state_id" => 5,
                "name" => "Rodelas",
                "slug" => "rodelas",
            ],
            [
                "state_id" => 5,
                "name" => "Ruy Barbosa",
                "slug" => "ruy-barbosa",
            ],
            [
                "state_id" => 5,
                "name" => "Salinas da Margarida",
                "slug" => "salinas-da-margarida",
            ],
            [
                "state_id" => 5,
                "name" => "Salvador",
                "slug" => "salvador",
            ],
            [
                "state_id" => 5,
                "name" => "Santa Bárbara",
                "slug" => "santa-barbara",
            ],
            [
                "state_id" => 5,
                "name" => "Santa Brígida",
                "slug" => "santa-brigida",
            ],
            [
                "state_id" => 5,
                "name" => "Santa Cruz Cabrália",
                "slug" => "santa-cruz-cabralia",
            ],
            [
                "state_id" => 5,
                "name" => "Santa Cruz da Vitória",
                "slug" => "santa-cruz-da-vitoria",
            ],
            [
                "state_id" => 5,
                "name" => "Santa Inês",
                "slug" => "santa-ines",
            ],
            [
                "state_id" => 5,
                "name" => "Santa Luzia",
                "slug" => "santa-luzia",
            ],
            [
                "state_id" => 5,
                "name" => "Santa Maria da Vitória",
                "slug" => "santa-maria-da-vitoria",
            ],
            [
                "state_id" => 5,
                "name" => "Santa Rita de Cássia",
                "slug" => "santa-rita-de-cassia",
            ],
            [
                "state_id" => 5,
                "name" => "Santa Teresinha",
                "slug" => "santa-teresinha",
            ],
            [
                "state_id" => 5,
                "name" => "Santaluz",
                "slug" => "santaluz",
            ],
            [
                "state_id" => 5,
                "name" => "Santana",
                "slug" => "santana",
            ],
            [
                "state_id" => 5,
                "name" => "Santanópolis",
                "slug" => "santanopolis",
            ],
            [
                "state_id" => 5,
                "name" => "Santo Amaro",
                "slug" => "santo-amaro",
            ],
            [
                "state_id" => 5,
                "name" => "Santo Antônio de Jesus",
                "slug" => "santo-antonio-de-jesus",
            ],
            [
                "state_id" => 5,
                "name" => "Santo Estêvão",
                "slug" => "santo-estevao",
            ],
            [
                "state_id" => 5,
                "name" => "São Desidério",
                "slug" => "sao-desiderio",
            ],
            [
                "state_id" => 5,
                "name" => "São Domingos",
                "slug" => "sao-domingos",
            ],
            [
                "state_id" => 5,
                "name" => "São Felipe",
                "slug" => "sao-felipe",
            ],
            [
                "state_id" => 5,
                "name" => "São Félix",
                "slug" => "sao-felix",
            ],
            [
                "state_id" => 5,
                "name" => "São Félix do Coribe",
                "slug" => "sao-felix-do-coribe",
            ],
            [
                "state_id" => 5,
                "name" => "São Francisco do Conde",
                "slug" => "sao-francisco-do-conde",
            ],
            [
                "state_id" => 5,
                "name" => "São Gabriel",
                "slug" => "sao-gabriel",
            ],
            [
                "state_id" => 5,
                "name" => "São Gonçalo dos Campos",
                "slug" => "sao-goncalo-dos-campos",
            ],
            [
                "state_id" => 5,
                "name" => "São José da Vitória",
                "slug" => "sao-jose-da-vitoria",
            ],
            [
                "state_id" => 5,
                "name" => "São José do Jacuípe",
                "slug" => "sao-jose-do-jacuipe",
            ],
            [
                "state_id" => 5,
                "name" => "São Miguel das Matas",
                "slug" => "sao-miguel-das-matas",
            ],
            [
                "state_id" => 5,
                "name" => "São Sebastião do Passé",
                "slug" => "sao-sebastiao-do-passe",
            ],
            [
                "state_id" => 5,
                "name" => "Sapeaçu",
                "slug" => "sapeacu",
            ],
            [
                "state_id" => 5,
                "name" => "Sátiro Dias",
                "slug" => "satiro-dias",
            ],
            [
                "state_id" => 5,
                "name" => "Saubara",
                "slug" => "saubara",
            ],
            [
                "state_id" => 5,
                "name" => "Saúde",
                "slug" => "saude",
            ],
            [
                "state_id" => 5,
                "name" => "Seabra",
                "slug" => "seabra",
            ],
            [
                "state_id" => 5,
                "name" => "Sebastião Laranjeiras",
                "slug" => "sebastiao-laranjeiras",
            ],
            [
                "state_id" => 5,
                "name" => "Senhor do Bonfim",
                "slug" => "senhor-do-bonfim",
            ],
            [
                "state_id" => 5,
                "name" => "Sento Sé",
                "slug" => "sento-se",
            ],
            [
                "state_id" => 5,
                "name" => "Serra do Ramalho",
                "slug" => "serra-do-ramalho",
            ],
            [
                "state_id" => 5,
                "name" => "Serra Dourada",
                "slug" => "serra-dourada",
            ],
            [
                "state_id" => 5,
                "name" => "Serra Preta",
                "slug" => "serra-preta",
            ],
            [
                "state_id" => 5,
                "name" => "Serrinha",
                "slug" => "serrinha",
            ],
            [
                "state_id" => 5,
                "name" => "Serrolândia",
                "slug" => "serrolandia",
            ],
            [
                "state_id" => 5,
                "name" => "Simões Filho",
                "slug" => "simoes-filho",
            ],
            [
                "state_id" => 5,
                "name" => "Sítio do Mato",
                "slug" => "sitio-do-mato",
            ],
            [
                "state_id" => 5,
                "name" => "Sítio do Quinto",
                "slug" => "sitio-do-quinto",
            ],
            [
                "state_id" => 5,
                "name" => "Sobradinho",
                "slug" => "sobradinho",
            ],
            [
                "state_id" => 5,
                "name" => "Souto Soares",
                "slug" => "souto-soares",
            ],
            [
                "state_id" => 5,
                "name" => "Tabocas do Brejo Velho",
                "slug" => "tabocas-do-brejo-velho",
            ],
            [
                "state_id" => 5,
                "name" => "Tanhaçu",
                "slug" => "tanhacu",
            ],
            [
                "state_id" => 5,
                "name" => "Tanque Novo",
                "slug" => "tanque-novo",
            ],
            [
                "state_id" => 5,
                "name" => "Tanquinho",
                "slug" => "tanquinho",
            ],
            [
                "state_id" => 5,
                "name" => "Taperoá",
                "slug" => "taperoa",
            ],
            [
                "state_id" => 5,
                "name" => "Tapiramutá",
                "slug" => "tapiramuta",
            ],
            [
                "state_id" => 5,
                "name" => "Teixeira de Freitas",
                "slug" => "teixeira-de-freitas",
            ],
            [
                "state_id" => 5,
                "name" => "Teodoro Sampaio",
                "slug" => "teodoro-sampaio",
            ],
            [
                "state_id" => 5,
                "name" => "Teofilândia",
                "slug" => "teofilandia",
            ],
            [
                "state_id" => 5,
                "name" => "Teolândia",
                "slug" => "teolandia",
            ],
            [
                "state_id" => 5,
                "name" => "Terra Nova",
                "slug" => "terra-nova",
            ],
            [
                "state_id" => 5,
                "name" => "Tremedal",
                "slug" => "tremedal",
            ],
            [
                "state_id" => 5,
                "name" => "Tucano",
                "slug" => "tucano",
            ],
            [
                "state_id" => 5,
                "name" => "Uauá",
                "slug" => "uaua",
            ],
            [
                "state_id" => 5,
                "name" => "Ubaíra",
                "slug" => "ubaira",
            ],
            [
                "state_id" => 5,
                "name" => "Ubaitaba",
                "slug" => "ubaitaba",
            ],
            [
                "state_id" => 5,
                "name" => "Ubatã",
                "slug" => "ubata",
            ],
            [
                "state_id" => 5,
                "name" => "Uibaí",
                "slug" => "uibai",
            ],
            [
                "state_id" => 5,
                "name" => "Umburanas",
                "slug" => "umburanas",
            ],
            [
                "state_id" => 5,
                "name" => "Una",
                "slug" => "una",
            ],
            [
                "state_id" => 5,
                "name" => "Urandi",
                "slug" => "urandi",
            ],
            [
                "state_id" => 5,
                "name" => "Uruçuca",
                "slug" => "urucuca",
            ],
            [
                "state_id" => 5,
                "name" => "Utinga",
                "slug" => "utinga",
            ],
            [
                "state_id" => 5,
                "name" => "Valença",
                "slug" => "valenca",
            ],
            [
                "state_id" => 5,
                "name" => "Valente",
                "slug" => "valente",
            ],
            [
                "state_id" => 5,
                "name" => "Várzea da Roça",
                "slug" => "varzea-da-roca",
            ],
            [
                "state_id" => 5,
                "name" => "Várzea do Poço",
                "slug" => "varzea-do-poco",
            ],
            [
                "state_id" => 5,
                "name" => "Várzea Nova",
                "slug" => "varzea-nova",
            ],
            [
                "state_id" => 5,
                "name" => "Varzedo",
                "slug" => "varzedo",
            ],
            [
                "state_id" => 5,
                "name" => "Vera Cruz",
                "slug" => "vera-cruz",
            ],
            [
                "state_id" => 5,
                "name" => "Vereda",
                "slug" => "vereda",
            ],
            [
                "state_id" => 5,
                "name" => "Vitória da Conquista",
                "slug" => "vitoria-da-conquista",
            ],
            [
                "state_id" => 5,
                "name" => "Wagner",
                "slug" => "wagner",
            ],
            [
                "state_id" => 5,
                "name" => "Wanderley",
                "slug" => "wanderley",
            ],
            [
                "state_id" => 5,
                "name" => "Wenceslau Guimarães",
                "slug" => "wenceslau-guimaraes",
            ],
            [
                "state_id" => 5,
                "name" => "Xique-Xique",
                "slug" => "xique-xique",
            ],
            [
                "state_id" => 6,
                "name" => "Abaiara",
                "slug" => "abaiara",
            ],
            [
                "state_id" => 6,
                "name" => "Acarape",
                "slug" => "acarape",
            ],
            [
                "state_id" => 6,
                "name" => "Acaraú",
                "slug" => "acarau",
            ],
            [
                "state_id" => 6,
                "name" => "Acopiara",
                "slug" => "acopiara",
            ],
            [
                "state_id" => 6,
                "name" => "Aiuaba",
                "slug" => "aiuaba",
            ],
            [
                "state_id" => 6,
                "name" => "Alcântaras",
                "slug" => "alcantaras",
            ],
            [
                "state_id" => 6,
                "name" => "Altaneira",
                "slug" => "altaneira",
            ],
            [
                "state_id" => 6,
                "name" => "Alto Santo",
                "slug" => "alto-santo",
            ],
            [
                "state_id" => 6,
                "name" => "Amontada",
                "slug" => "amontada",
            ],
            [
                "state_id" => 6,
                "name" => "Antonina do Norte",
                "slug" => "antonina-do-norte",
            ],
            [
                "state_id" => 6,
                "name" => "Apuiarés",
                "slug" => "apuiares",
            ],
            [
                "state_id" => 6,
                "name" => "Aquiraz",
                "slug" => "aquiraz",
            ],
            [
                "state_id" => 6,
                "name" => "Aracati",
                "slug" => "aracati",
            ],
            [
                "state_id" => 6,
                "name" => "Aracoiaba",
                "slug" => "aracoiaba",
            ],
            [
                "state_id" => 6,
                "name" => "Ararendá",
                "slug" => "ararenda",
            ],
            [
                "state_id" => 6,
                "name" => "Araripe",
                "slug" => "araripe",
            ],
            [
                "state_id" => 6,
                "name" => "Aratuba",
                "slug" => "aratuba",
            ],
            [
                "state_id" => 6,
                "name" => "Arneiroz",
                "slug" => "arneiroz",
            ],
            [
                "state_id" => 6,
                "name" => "Assaré",
                "slug" => "assare",
            ],
            [
                "state_id" => 6,
                "name" => "Aurora",
                "slug" => "aurora",
            ],
            [
                "state_id" => 6,
                "name" => "Baixio",
                "slug" => "baixio",
            ],
            [
                "state_id" => 6,
                "name" => "Banabuiú",
                "slug" => "banabuiu",
            ],
            [
                "state_id" => 6,
                "name" => "Barbalha",
                "slug" => "barbalha",
            ],
            [
                "state_id" => 6,
                "name" => "Barreira",
                "slug" => "barreira",
            ],
            [
                "state_id" => 6,
                "name" => "Barro",
                "slug" => "barro",
            ],
            [
                "state_id" => 6,
                "name" => "Barroquinha",
                "slug" => "barroquinha",
            ],
            [
                "state_id" => 6,
                "name" => "Baturité",
                "slug" => "baturite",
            ],
            [
                "state_id" => 6,
                "name" => "Beberibe",
                "slug" => "beberibe",
            ],
            [
                "state_id" => 6,
                "name" => "Bela Cruz",
                "slug" => "bela-cruz",
            ],
            [
                "state_id" => 6,
                "name" => "Boa Viagem",
                "slug" => "boa-viagem",
            ],
            [
                "state_id" => 6,
                "name" => "Brejo Santo",
                "slug" => "brejo-santo",
            ],
            [
                "state_id" => 6,
                "name" => "Camocim",
                "slug" => "camocim",
            ],
            [
                "state_id" => 6,
                "name" => "Campos Sales",
                "slug" => "campos-sales",
            ],
            [
                "state_id" => 6,
                "name" => "Canindé",
                "slug" => "caninde",
            ],
            [
                "state_id" => 6,
                "name" => "Capistrano",
                "slug" => "capistrano",
            ],
            [
                "state_id" => 6,
                "name" => "Caridade",
                "slug" => "caridade",
            ],
            [
                "state_id" => 6,
                "name" => "Cariré",
                "slug" => "carire",
            ],
            [
                "state_id" => 6,
                "name" => "Caririaçu",
                "slug" => "caririacu",
            ],
            [
                "state_id" => 6,
                "name" => "Cariús",
                "slug" => "carius",
            ],
            [
                "state_id" => 6,
                "name" => "Carnaubal",
                "slug" => "carnaubal",
            ],
            [
                "state_id" => 6,
                "name" => "Cascavel",
                "slug" => "cascavel",
            ],
            [
                "state_id" => 6,
                "name" => "Catarina",
                "slug" => "catarina",
            ],
            [
                "state_id" => 6,
                "name" => "Catunda",
                "slug" => "catunda",
            ],
            [
                "state_id" => 6,
                "name" => "Caucaia",
                "slug" => "caucaia",
            ],
            [
                "state_id" => 6,
                "name" => "Cedro",
                "slug" => "cedro",
            ],
            [
                "state_id" => 6,
                "name" => "Chaval",
                "slug" => "chaval",
            ],
            [
                "state_id" => 6,
                "name" => "Choró",
                "slug" => "choro",
            ],
            [
                "state_id" => 6,
                "name" => "Chorozinho",
                "slug" => "chorozinho",
            ],
            [
                "state_id" => 6,
                "name" => "Coreaú",
                "slug" => "coreau",
            ],
            [
                "state_id" => 6,
                "name" => "Crateús",
                "slug" => "crateus",
            ],
            [
                "state_id" => 6,
                "name" => "Crato",
                "slug" => "crato",
            ],
            [
                "state_id" => 6,
                "name" => "Croatá",
                "slug" => "croata",
            ],
            [
                "state_id" => 6,
                "name" => "Cruz",
                "slug" => "cruz",
            ],
            [
                "state_id" => 6,
                "name" => "Deputado Irapuan Pinheiro",
                "slug" => "deputado-irapuan-pinheiro",
            ],
            [
                "state_id" => 6,
                "name" => "Ererê",
                "slug" => "erere",
            ],
            [
                "state_id" => 6,
                "name" => "Eusébio",
                "slug" => "eusebio",
            ],
            [
                "state_id" => 6,
                "name" => "Farias Brito",
                "slug" => "farias-brito",
            ],
            [
                "state_id" => 6,
                "name" => "Forquilha",
                "slug" => "forquilha",
            ],
            [
                "state_id" => 6,
                "name" => "Fortaleza",
                "slug" => "fortaleza",
            ],
            [
                "state_id" => 6,
                "name" => "Fortim",
                "slug" => "fortim",
            ],
            [
                "state_id" => 6,
                "name" => "Frecheirinha",
                "slug" => "frecheirinha",
            ],
            [
                "state_id" => 6,
                "name" => "General Sampaio",
                "slug" => "general-sampaio",
            ],
            [
                "state_id" => 6,
                "name" => "Graça",
                "slug" => "graca",
            ],
            [
                "state_id" => 6,
                "name" => "Granja",
                "slug" => "granja",
            ],
            [
                "state_id" => 6,
                "name" => "Granjeiro",
                "slug" => "granjeiro",
            ],
            [
                "state_id" => 6,
                "name" => "Groaíras",
                "slug" => "groairas",
            ],
            [
                "state_id" => 6,
                "name" => "Guaiúba",
                "slug" => "guaiuba",
            ],
            [
                "state_id" => 6,
                "name" => "Guaraciaba do Norte",
                "slug" => "guaraciaba-do-norte",
            ],
            [
                "state_id" => 6,
                "name" => "Guaramiranga",
                "slug" => "guaramiranga",
            ],
            [
                "state_id" => 6,
                "name" => "Hidrolândia",
                "slug" => "hidrolandia",
            ],
            [
                "state_id" => 6,
                "name" => "Horizonte",
                "slug" => "horizonte",
            ],
            [
                "state_id" => 6,
                "name" => "Ibaretama",
                "slug" => "ibaretama",
            ],
            [
                "state_id" => 6,
                "name" => "Ibiapina",
                "slug" => "ibiapina",
            ],
            [
                "state_id" => 6,
                "name" => "Ibicuitinga",
                "slug" => "ibicuitinga",
            ],
            [
                "state_id" => 6,
                "name" => "Icapuí",
                "slug" => "icapui",
            ],
            [
                "state_id" => 6,
                "name" => "Icó",
                "slug" => "ico",
            ],
            [
                "state_id" => 6,
                "name" => "Iguatu",
                "slug" => "iguatu",
            ],
            [
                "state_id" => 6,
                "name" => "Independência",
                "slug" => "independencia",
            ],
            [
                "state_id" => 6,
                "name" => "Ipaporanga",
                "slug" => "ipaporanga",
            ],
            [
                "state_id" => 6,
                "name" => "Ipaumirim",
                "slug" => "ipaumirim",
            ],
            [
                "state_id" => 6,
                "name" => "Ipu",
                "slug" => "ipu",
            ],
            [
                "state_id" => 6,
                "name" => "Ipueiras",
                "slug" => "ipueiras",
            ],
            [
                "state_id" => 6,
                "name" => "Iracema",
                "slug" => "iracema",
            ],
            [
                "state_id" => 6,
                "name" => "Irauçuba",
                "slug" => "iraucuba",
            ],
            [
                "state_id" => 6,
                "name" => "Itaiçaba",
                "slug" => "itaicaba",
            ],
            [
                "state_id" => 6,
                "name" => "Itaitinga",
                "slug" => "itaitinga",
            ],
            [
                "state_id" => 6,
                "name" => "Itapagé",
                "slug" => "itapage",
            ],
            [
                "state_id" => 6,
                "name" => "Itapipoca",
                "slug" => "itapipoca",
            ],
            [
                "state_id" => 6,
                "name" => "Itapiúna",
                "slug" => "itapiuna",
            ],
            [
                "state_id" => 6,
                "name" => "Itarema",
                "slug" => "itarema",
            ],
            [
                "state_id" => 6,
                "name" => "Itatira",
                "slug" => "itatira",
            ],
            [
                "state_id" => 6,
                "name" => "Jaguaretama",
                "slug" => "jaguaretama",
            ],
            [
                "state_id" => 6,
                "name" => "Jaguaribara",
                "slug" => "jaguaribara",
            ],
            [
                "state_id" => 6,
                "name" => "Jaguaribe",
                "slug" => "jaguaribe",
            ],
            [
                "state_id" => 6,
                "name" => "Jaguaruana",
                "slug" => "jaguaruana",
            ],
            [
                "state_id" => 6,
                "name" => "Jardim",
                "slug" => "jardim",
            ],
            [
                "state_id" => 6,
                "name" => "Jati",
                "slug" => "jati",
            ],
            [
                "state_id" => 6,
                "name" => "Jijoca de Jericoacoara",
                "slug" => "jijoca-de-jericoacoara",
            ],
            [
                "state_id" => 6,
                "name" => "Juazeiro do Norte",
                "slug" => "juazeiro-do-norte",
            ],
            [
                "state_id" => 6,
                "name" => "Jucás",
                "slug" => "jucas",
            ],
            [
                "state_id" => 6,
                "name" => "Lavras da Mangabeira",
                "slug" => "lavras-da-mangabeira",
            ],
            [
                "state_id" => 6,
                "name" => "Limoeiro do Norte",
                "slug" => "limoeiro-do-norte",
            ],
            [
                "state_id" => 6,
                "name" => "Madalena",
                "slug" => "madalena",
            ],
            [
                "state_id" => 6,
                "name" => "Maracanaú",
                "slug" => "maracanau",
            ],
            [
                "state_id" => 6,
                "name" => "Maranguape",
                "slug" => "maranguape",
            ],
            [
                "state_id" => 6,
                "name" => "Marco",
                "slug" => "marco",
            ],
            [
                "state_id" => 6,
                "name" => "Martinópole",
                "slug" => "martinopole",
            ],
            [
                "state_id" => 6,
                "name" => "Massapê",
                "slug" => "massape",
            ],
            [
                "state_id" => 6,
                "name" => "Mauriti",
                "slug" => "mauriti",
            ],
            [
                "state_id" => 6,
                "name" => "Meruoca",
                "slug" => "meruoca",
            ],
            [
                "state_id" => 6,
                "name" => "Milagres",
                "slug" => "milagres",
            ],
            [
                "state_id" => 6,
                "name" => "Milhã",
                "slug" => "milha",
            ],
            [
                "state_id" => 6,
                "name" => "Miraíma",
                "slug" => "miraima",
            ],
            [
                "state_id" => 6,
                "name" => "Missão Velha",
                "slug" => "missao-velha",
            ],
            [
                "state_id" => 6,
                "name" => "Mombaça",
                "slug" => "mombaca",
            ],
            [
                "state_id" => 6,
                "name" => "Monsenhor Tabosa",
                "slug" => "monsenhor-tabosa",
            ],
            [
                "state_id" => 6,
                "name" => "Morada Nova",
                "slug" => "morada-nova",
            ],
            [
                "state_id" => 6,
                "name" => "Moraújo",
                "slug" => "moraujo",
            ],
            [
                "state_id" => 6,
                "name" => "Morrinhos",
                "slug" => "morrinhos",
            ],
            [
                "state_id" => 6,
                "name" => "Mucambo",
                "slug" => "mucambo",
            ],
            [
                "state_id" => 6,
                "name" => "Mulungu",
                "slug" => "mulungu",
            ],
            [
                "state_id" => 6,
                "name" => "Nova Olinda",
                "slug" => "nova-olinda",
            ],
            [
                "state_id" => 6,
                "name" => "Nova Russas",
                "slug" => "nova-russas",
            ],
            [
                "state_id" => 6,
                "name" => "Novo Oriente",
                "slug" => "novo-oriente",
            ],
            [
                "state_id" => 6,
                "name" => "Ocara",
                "slug" => "ocara",
            ],
            [
                "state_id" => 6,
                "name" => "Orós",
                "slug" => "oros",
            ],
            [
                "state_id" => 6,
                "name" => "Pacajus",
                "slug" => "pacajus",
            ],
            [
                "state_id" => 6,
                "name" => "Pacatuba",
                "slug" => "pacatuba",
            ],
            [
                "state_id" => 6,
                "name" => "Pacoti",
                "slug" => "pacoti",
            ],
            [
                "state_id" => 6,
                "name" => "Pacujá",
                "slug" => "pacuja",
            ],
            [
                "state_id" => 6,
                "name" => "Palhano",
                "slug" => "palhano",
            ],
            [
                "state_id" => 6,
                "name" => "Palmácia",
                "slug" => "palmacia",
            ],
            [
                "state_id" => 6,
                "name" => "Paracuru",
                "slug" => "paracuru",
            ],
            [
                "state_id" => 6,
                "name" => "Paraipaba",
                "slug" => "paraipaba",
            ],
            [
                "state_id" => 6,
                "name" => "Parambu",
                "slug" => "parambu",
            ],
            [
                "state_id" => 6,
                "name" => "Paramoti",
                "slug" => "paramoti",
            ],
            [
                "state_id" => 6,
                "name" => "Pedra Branca",
                "slug" => "pedra-branca",
            ],
            [
                "state_id" => 6,
                "name" => "Penaforte",
                "slug" => "penaforte",
            ],
            [
                "state_id" => 6,
                "name" => "Pentecoste",
                "slug" => "pentecoste",
            ],
            [
                "state_id" => 6,
                "name" => "Pereiro",
                "slug" => "pereiro",
            ],
            [
                "state_id" => 6,
                "name" => "Pindoretama",
                "slug" => "pindoretama",
            ],
            [
                "state_id" => 6,
                "name" => "Piquet Carneiro",
                "slug" => "piquet-carneiro",
            ],
            [
                "state_id" => 6,
                "name" => "Pires Ferreira",
                "slug" => "pires-ferreira",
            ],
            [
                "state_id" => 6,
                "name" => "Poranga",
                "slug" => "poranga",
            ],
            [
                "state_id" => 6,
                "name" => "Porteiras",
                "slug" => "porteiras",
            ],
            [
                "state_id" => 6,
                "name" => "Potengi",
                "slug" => "potengi",
            ],
            [
                "state_id" => 6,
                "name" => "Potiretama",
                "slug" => "potiretama",
            ],
            [
                "state_id" => 6,
                "name" => "Quiterianópolis",
                "slug" => "quiterianopolis",
            ],
            [
                "state_id" => 6,
                "name" => "Quixadá",
                "slug" => "quixada",
            ],
            [
                "state_id" => 6,
                "name" => "Quixelô",
                "slug" => "quixelo",
            ],
            [
                "state_id" => 6,
                "name" => "Quixeramobim",
                "slug" => "quixeramobim",
            ],
            [
                "state_id" => 6,
                "name" => "Quixeré",
                "slug" => "quixere",
            ],
            [
                "state_id" => 6,
                "name" => "Redenção",
                "slug" => "redencao",
            ],
            [
                "state_id" => 6,
                "name" => "Reriutaba",
                "slug" => "reriutaba",
            ],
            [
                "state_id" => 6,
                "name" => "Russas",
                "slug" => "russas",
            ],
            [
                "state_id" => 6,
                "name" => "Saboeiro",
                "slug" => "saboeiro",
            ],
            [
                "state_id" => 6,
                "name" => "Salitre",
                "slug" => "salitre",
            ],
            [
                "state_id" => 6,
                "name" => "Santa Quitéria",
                "slug" => "santa-quiteria",
            ],
            [
                "state_id" => 6,
                "name" => "Santana do Acaraú",
                "slug" => "santana-do-acarau",
            ],
            [
                "state_id" => 6,
                "name" => "Santana do Cariri",
                "slug" => "santana-do-cariri",
            ],
            [
                "state_id" => 6,
                "name" => "São Benedito",
                "slug" => "sao-benedito",
            ],
            [
                "state_id" => 6,
                "name" => "São Gonçalo do Amarante",
                "slug" => "sao-goncalo-do-amarante",
            ],
            [
                "state_id" => 6,
                "name" => "São João do Jaguaribe",
                "slug" => "sao-joao-do-jaguaribe",
            ],
            [
                "state_id" => 6,
                "name" => "São Luís do Curu",
                "slug" => "sao-luis-do-curu",
            ],
            [
                "state_id" => 6,
                "name" => "Senador Pompeu",
                "slug" => "senador-pompeu",
            ],
            [
                "state_id" => 6,
                "name" => "Senador Sá",
                "slug" => "senador-sa",
            ],
            [
                "state_id" => 6,
                "name" => "Sobral",
                "slug" => "sobral",
            ],
            [
                "state_id" => 6,
                "name" => "Solonópole",
                "slug" => "solonopole",
            ],
            [
                "state_id" => 6,
                "name" => "Tabuleiro do Norte",
                "slug" => "tabuleiro-do-norte",
            ],
            [
                "state_id" => 6,
                "name" => "Tamboril",
                "slug" => "tamboril",
            ],
            [
                "state_id" => 6,
                "name" => "Tarrafas",
                "slug" => "tarrafas",
            ],
            [
                "state_id" => 6,
                "name" => "Tauá",
                "slug" => "taua",
            ],
            [
                "state_id" => 6,
                "name" => "Tejuçuoca",
                "slug" => "tejucuoca",
            ],
            [
                "state_id" => 6,
                "name" => "Tianguá",
                "slug" => "tiangua",
            ],
            [
                "state_id" => 6,
                "name" => "Trairi",
                "slug" => "trairi",
            ],
            [
                "state_id" => 6,
                "name" => "Tururu",
                "slug" => "tururu",
            ],
            [
                "state_id" => 6,
                "name" => "Ubajara",
                "slug" => "ubajara",
            ],
            [
                "state_id" => 6,
                "name" => "Umari",
                "slug" => "umari",
            ],
            [
                "state_id" => 6,
                "name" => "Umirim",
                "slug" => "umirim",
            ],
            [
                "state_id" => 6,
                "name" => "Uruburetama",
                "slug" => "uruburetama",
            ],
            [
                "state_id" => 6,
                "name" => "Uruoca",
                "slug" => "uruoca",
            ],
            [
                "state_id" => 6,
                "name" => "Varjota",
                "slug" => "varjota",
            ],
            [
                "state_id" => 6,
                "name" => "Várzea Alegre",
                "slug" => "varzea-alegre",
            ],
            [
                "state_id" => 6,
                "name" => "Viçosa do Ceará",
                "slug" => "vicosa-do-ceara",
            ],
            [
                "state_id" => 7,
                "name" => "Brasília",
                "slug" => "brasilia",
            ],
            [
                "state_id" => 9,
                "name" => "Abadia de Goiás",
                "slug" => "abadia-de-goias",
            ],
            [
                "state_id" => 9,
                "name" => "Abadiânia",
                "slug" => "abadiania",
            ],
            [
                "state_id" => 9,
                "name" => "Acreúna",
                "slug" => "acreuna",
            ],
            [
                "state_id" => 9,
                "name" => "Adelândia",
                "slug" => "adelandia",
            ],
            [
                "state_id" => 9,
                "name" => "Água Fria de Goiás",
                "slug" => "agua-fria-de-goias",
            ],
            [
                "state_id" => 9,
                "name" => "Água Limpa",
                "slug" => "agua-limpa",
            ],
            [
                "state_id" => 9,
                "name" => "Águas Lindas de Goiás",
                "slug" => "aguas-lindas-de-goias",
            ],
            [
                "state_id" => 9,
                "name" => "Alexânia",
                "slug" => "alexania",
            ],
            [
                "state_id" => 9,
                "name" => "Aloândia",
                "slug" => "aloandia",
            ],
            [
                "state_id" => 9,
                "name" => "Alto Horizonte",
                "slug" => "alto-horizonte",
            ],
            [
                "state_id" => 9,
                "name" => "Alto Paraíso de Goiás",
                "slug" => "alto-paraiso-de-goias",
            ],
            [
                "state_id" => 9,
                "name" => "Alvorada do Norte",
                "slug" => "alvorada-do-norte",
            ],
            [
                "state_id" => 9,
                "name" => "Amaralina",
                "slug" => "amaralina",
            ],
            [
                "state_id" => 9,
                "name" => "Americano do Brasil",
                "slug" => "americano-do-brasil",
            ],
            [
                "state_id" => 9,
                "name" => "Amorinópolis",
                "slug" => "amorinopolis",
            ],
            [
                "state_id" => 9,
                "name" => "Anápolis",
                "slug" => "anapolis",
            ],
            [
                "state_id" => 9,
                "name" => "Anhanguera",
                "slug" => "anhanguera",
            ],
            [
                "state_id" => 9,
                "name" => "Anicuns",
                "slug" => "anicuns",
            ],
            [
                "state_id" => 9,
                "name" => "Aparecida de Goiânia",
                "slug" => "aparecida-de-goiania",
            ],
            [
                "state_id" => 9,
                "name" => "Aparecida do Rio Doce",
                "slug" => "aparecida-do-rio-doce",
            ],
            [
                "state_id" => 9,
                "name" => "Aporé",
                "slug" => "apore",
            ],
            [
                "state_id" => 9,
                "name" => "Araçu",
                "slug" => "aracu",
            ],
            [
                "state_id" => 9,
                "name" => "Aragarças",
                "slug" => "aragarcas",
            ],
            [
                "state_id" => 9,
                "name" => "Aragoiânia",
                "slug" => "aragoiania",
            ],
            [
                "state_id" => 9,
                "name" => "Araguapaz",
                "slug" => "araguapaz",
            ],
            [
                "state_id" => 9,
                "name" => "Arenópolis",
                "slug" => "arenopolis",
            ],
            [
                "state_id" => 9,
                "name" => "Aruanã",
                "slug" => "aruana",
            ],
            [
                "state_id" => 9,
                "name" => "Aurilândia",
                "slug" => "aurilandia",
            ],
            [
                "state_id" => 9,
                "name" => "Avelinópolis",
                "slug" => "avelinopolis",
            ],
            [
                "state_id" => 9,
                "name" => "Baliza",
                "slug" => "baliza",
            ],
            [
                "state_id" => 9,
                "name" => "Barro Alto",
                "slug" => "barro-alto",
            ],
            [
                "state_id" => 9,
                "name" => "Bela Vista de Goiás",
                "slug" => "bela-vista-de-goias",
            ],
            [
                "state_id" => 9,
                "name" => "Bom Jardim de Goiás",
                "slug" => "bom-jardim-de-goias",
            ],
            [
                "state_id" => 9,
                "name" => "Bom Jesus de Goiás",
                "slug" => "bom-jesus-de-goias",
            ],
            [
                "state_id" => 9,
                "name" => "Bonfinópolis",
                "slug" => "bonfinopolis",
            ],
            [
                "state_id" => 9,
                "name" => "Bonópolis",
                "slug" => "bonopolis",
            ],
            [
                "state_id" => 9,
                "name" => "Brazabrantes",
                "slug" => "brazabrantes",
            ],
            [
                "state_id" => 9,
                "name" => "Britânia",
                "slug" => "britania",
            ],
            [
                "state_id" => 9,
                "name" => "Buriti Alegre",
                "slug" => "buriti-alegre",
            ],
            [
                "state_id" => 9,
                "name" => "Buriti de Goiás",
                "slug" => "buriti-de-goias",
            ],
            [
                "state_id" => 9,
                "name" => "Buritinópolis",
                "slug" => "buritinopolis",
            ],
            [
                "state_id" => 9,
                "name" => "Cabeceiras",
                "slug" => "cabeceiras",
            ],
            [
                "state_id" => 9,
                "name" => "Cachoeira Alta",
                "slug" => "cachoeira-alta",
            ],
            [
                "state_id" => 9,
                "name" => "Cachoeira de Goiás",
                "slug" => "cachoeira-de-goias",
            ],
            [
                "state_id" => 9,
                "name" => "Cachoeira Dourada",
                "slug" => "cachoeira-dourada",
            ],
            [
                "state_id" => 9,
                "name" => "Caçu",
                "slug" => "cacu",
            ],
            [
                "state_id" => 9,
                "name" => "Caiapônia",
                "slug" => "caiaponia",
            ],
            [
                "state_id" => 9,
                "name" => "Caldas Novas",
                "slug" => "caldas-novas",
            ],
            [
                "state_id" => 9,
                "name" => "Caldazinha",
                "slug" => "caldazinha",
            ],
            [
                "state_id" => 9,
                "name" => "Campestre de Goiás",
                "slug" => "campestre-de-goias",
            ],
            [
                "state_id" => 9,
                "name" => "Campinaçu",
                "slug" => "campinacu",
            ],
            [
                "state_id" => 9,
                "name" => "Campinorte",
                "slug" => "campinorte",
            ],
            [
                "state_id" => 9,
                "name" => "Campo Alegre de Goiás",
                "slug" => "campo-alegre-de-goias",
            ],
            [
                "state_id" => 9,
                "name" => "Campo Limpo de Goiás",
                "slug" => "campo-limpo-de-goias",
            ],
            [
                "state_id" => 9,
                "name" => "Campos Belos",
                "slug" => "campos-belos",
            ],
            [
                "state_id" => 9,
                "name" => "Campos Verdes",
                "slug" => "campos-verdes",
            ],
            [
                "state_id" => 9,
                "name" => "Carmo do Rio Verde",
                "slug" => "carmo-do-rio-verde",
            ],
            [
                "state_id" => 9,
                "name" => "Castelândia",
                "slug" => "castelandia",
            ],
            [
                "state_id" => 9,
                "name" => "Catalão",
                "slug" => "catalao",
            ],
            [
                "state_id" => 9,
                "name" => "Caturaí",
                "slug" => "caturai",
            ],
            [
                "state_id" => 9,
                "name" => "Cavalcante",
                "slug" => "cavalcante",
            ],
            [
                "state_id" => 9,
                "name" => "Ceres",
                "slug" => "ceres",
            ],
            [
                "state_id" => 9,
                "name" => "Cezarina",
                "slug" => "cezarina",
            ],
            [
                "state_id" => 9,
                "name" => "Chapadão do Céu",
                "slug" => "chapadao-do-ceu",
            ],
            [
                "state_id" => 9,
                "name" => "Cidade Ocidental",
                "slug" => "cidade-ocidental",
            ],
            [
                "state_id" => 9,
                "name" => "Cocalzinho de Goiás",
                "slug" => "cocalzinho-de-goias",
            ],
            [
                "state_id" => 9,
                "name" => "Colinas do Sul",
                "slug" => "colinas-do-sul",
            ],
            [
                "state_id" => 9,
                "name" => "Córrego do Ouro",
                "slug" => "corrego-do-ouro",
            ],
            [
                "state_id" => 9,
                "name" => "Corumbá de Goiás",
                "slug" => "corumba-de-goias",
            ],
            [
                "state_id" => 9,
                "name" => "Corumbaíba",
                "slug" => "corumbaiba",
            ],
            [
                "state_id" => 9,
                "name" => "Cristalina",
                "slug" => "cristalina",
            ],
            [
                "state_id" => 9,
                "name" => "Cristianópolis",
                "slug" => "cristianopolis",
            ],
            [
                "state_id" => 9,
                "name" => "Crixás",
                "slug" => "crixas",
            ],
            [
                "state_id" => 9,
                "name" => "Cromínia",
                "slug" => "crominia",
            ],
            [
                "state_id" => 9,
                "name" => "Cumari",
                "slug" => "cumari",
            ],
            [
                "state_id" => 9,
                "name" => "Damianópolis",
                "slug" => "damianopolis",
            ],
            [
                "state_id" => 9,
                "name" => "Damolândia",
                "slug" => "damolandia",
            ],
            [
                "state_id" => 9,
                "name" => "Davinópolis",
                "slug" => "davinopolis",
            ],
            [
                "state_id" => 9,
                "name" => "Diorama",
                "slug" => "diorama",
            ],
            [
                "state_id" => 9,
                "name" => "Divinópolis de Goiás",
                "slug" => "divinopolis-de-goias",
            ],
            [
                "state_id" => 9,
                "name" => "Doverlândia",
                "slug" => "doverlandia",
            ],
            [
                "state_id" => 9,
                "name" => "Edealina",
                "slug" => "edealina",
            ],
            [
                "state_id" => 9,
                "name" => "Edéia",
                "slug" => "edeia",
            ],
            [
                "state_id" => 9,
                "name" => "Estrela do Norte",
                "slug" => "estrela-do-norte",
            ],
            [
                "state_id" => 9,
                "name" => "Faina",
                "slug" => "faina",
            ],
            [
                "state_id" => 9,
                "name" => "Fazenda Nova",
                "slug" => "fazenda-nova",
            ],
            [
                "state_id" => 9,
                "name" => "Firminópolis",
                "slug" => "firminopolis",
            ],
            [
                "state_id" => 9,
                "name" => "Flores de Goiás",
                "slug" => "flores-de-goias",
            ],
            [
                "state_id" => 9,
                "name" => "Formosa",
                "slug" => "formosa",
            ],
            [
                "state_id" => 9,
                "name" => "Formoso",
                "slug" => "formoso",
            ],
            [
                "state_id" => 9,
                "name" => "Gameleira de Goiás",
                "slug" => "gameleira-de-goias",
            ],
            [
                "state_id" => 9,
                "name" => "Goianápolis",
                "slug" => "goianapolis",
            ],
            [
                "state_id" => 9,
                "name" => "Goiandira",
                "slug" => "goiandira",
            ],
            [
                "state_id" => 9,
                "name" => "Goianésia",
                "slug" => "goianesia",
            ],
            [
                "state_id" => 9,
                "name" => "Goiânia",
                "slug" => "goiania",
            ],
            [
                "state_id" => 9,
                "name" => "Goianira",
                "slug" => "goianira",
            ],
            [
                "state_id" => 9,
                "name" => "Goiás",
                "slug" => "goias",
            ],
            [
                "state_id" => 9,
                "name" => "Goiatuba",
                "slug" => "goiatuba",
            ],
            [
                "state_id" => 9,
                "name" => "Gouvelândia",
                "slug" => "gouvelandia",
            ],
            [
                "state_id" => 9,
                "name" => "Guapó",
                "slug" => "guapo",
            ],
            [
                "state_id" => 9,
                "name" => "Guaraíta",
                "slug" => "guaraita",
            ],
            [
                "state_id" => 9,
                "name" => "Guarani de Goiás",
                "slug" => "guarani-de-goias",
            ],
            [
                "state_id" => 9,
                "name" => "Guarinos",
                "slug" => "guarinos",
            ],
            [
                "state_id" => 9,
                "name" => "Heitoraí",
                "slug" => "heitorai",
            ],
            [
                "state_id" => 9,
                "name" => "Hidrolândia",
                "slug" => "hidrolandia",
            ],
            [
                "state_id" => 9,
                "name" => "Hidrolina",
                "slug" => "hidrolina",
            ],
            [
                "state_id" => 9,
                "name" => "Iaciara",
                "slug" => "iaciara",
            ],
            [
                "state_id" => 9,
                "name" => "Inaciolândia",
                "slug" => "inaciolandia",
            ],
            [
                "state_id" => 9,
                "name" => "Indiara",
                "slug" => "indiara",
            ],
            [
                "state_id" => 9,
                "name" => "Inhumas",
                "slug" => "inhumas",
            ],
            [
                "state_id" => 9,
                "name" => "Ipameri",
                "slug" => "ipameri",
            ],
            [
                "state_id" => 9,
                "name" => "Ipiranga de Goiás",
                "slug" => "ipiranga-de-goias",
            ],
            [
                "state_id" => 9,
                "name" => "Iporá",
                "slug" => "ipora",
            ],
            [
                "state_id" => 9,
                "name" => "Israelândia",
                "slug" => "israelandia",
            ],
            [
                "state_id" => 9,
                "name" => "Itaberaí",
                "slug" => "itaberai",
            ],
            [
                "state_id" => 9,
                "name" => "Itaguari",
                "slug" => "itaguari",
            ],
            [
                "state_id" => 9,
                "name" => "Itaguaru",
                "slug" => "itaguaru",
            ],
            [
                "state_id" => 9,
                "name" => "Itajá",
                "slug" => "itaja",
            ],
            [
                "state_id" => 9,
                "name" => "Itapaci",
                "slug" => "itapaci",
            ],
            [
                "state_id" => 9,
                "name" => "Itapirapuã",
                "slug" => "itapirapua",
            ],
            [
                "state_id" => 9,
                "name" => "Itapuranga",
                "slug" => "itapuranga",
            ],
            [
                "state_id" => 9,
                "name" => "Itarumã",
                "slug" => "itaruma",
            ],
            [
                "state_id" => 9,
                "name" => "Itauçu",
                "slug" => "itaucu",
            ],
            [
                "state_id" => 9,
                "name" => "Itumbiara",
                "slug" => "itumbiara",
            ],
            [
                "state_id" => 9,
                "name" => "Ivolândia",
                "slug" => "ivolandia",
            ],
            [
                "state_id" => 9,
                "name" => "Jandaia",
                "slug" => "jandaia",
            ],
            [
                "state_id" => 9,
                "name" => "Jaraguá",
                "slug" => "jaragua",
            ],
            [
                "state_id" => 9,
                "name" => "Jataí",
                "slug" => "jatai",
            ],
            [
                "state_id" => 9,
                "name" => "Jaupaci",
                "slug" => "jaupaci",
            ],
            [
                "state_id" => 9,
                "name" => "Jesúpolis",
                "slug" => "jesupolis",
            ],
            [
                "state_id" => 9,
                "name" => "Joviânia",
                "slug" => "joviania",
            ],
            [
                "state_id" => 9,
                "name" => "Jussara",
                "slug" => "jussara",
            ],
            [
                "state_id" => 9,
                "name" => "Lagoa Santa",
                "slug" => "lagoa-santa",
            ],
            [
                "state_id" => 9,
                "name" => "Leopoldo de Bulhões",
                "slug" => "leopoldo-de-bulhoes",
            ],
            [
                "state_id" => 9,
                "name" => "Luziânia",
                "slug" => "luziania",
            ],
            [
                "state_id" => 9,
                "name" => "Mairipotaba",
                "slug" => "mairipotaba",
            ],
            [
                "state_id" => 9,
                "name" => "Mambaí",
                "slug" => "mambai",
            ],
            [
                "state_id" => 9,
                "name" => "Mara Rosa",
                "slug" => "mara-rosa",
            ],
            [
                "state_id" => 9,
                "name" => "Marzagão",
                "slug" => "marzagao",
            ],
            [
                "state_id" => 9,
                "name" => "Matrinchã",
                "slug" => "matrincha",
            ],
            [
                "state_id" => 9,
                "name" => "Maurilândia",
                "slug" => "maurilandia",
            ],
            [
                "state_id" => 9,
                "name" => "Mimoso de Goiás",
                "slug" => "mimoso-de-goias",
            ],
            [
                "state_id" => 9,
                "name" => "Minaçu",
                "slug" => "minacu",
            ],
            [
                "state_id" => 9,
                "name" => "Mineiros",
                "slug" => "mineiros",
            ],
            [
                "state_id" => 9,
                "name" => "Moiporá",
                "slug" => "moipora",
            ],
            [
                "state_id" => 9,
                "name" => "Monte Alegre de Goiás",
                "slug" => "monte-alegre-de-goias",
            ],
            [
                "state_id" => 9,
                "name" => "Montes Claros de Goiás",
                "slug" => "montes-claros-de-goias",
            ],
            [
                "state_id" => 9,
                "name" => "Montividiu",
                "slug" => "montividiu",
            ],
            [
                "state_id" => 9,
                "name" => "Montividiu do Norte",
                "slug" => "montividiu-do-norte",
            ],
            [
                "state_id" => 9,
                "name" => "Morrinhos",
                "slug" => "morrinhos",
            ],
            [
                "state_id" => 9,
                "name" => "Morro Agudo de Goiás",
                "slug" => "morro-agudo-de-goias",
            ],
            [
                "state_id" => 9,
                "name" => "Mossâmedes",
                "slug" => "mossamedes",
            ],
            [
                "state_id" => 9,
                "name" => "Mozarlândia",
                "slug" => "mozarlandia",
            ],
            [
                "state_id" => 9,
                "name" => "Mundo Novo",
                "slug" => "mundo-novo",
            ],
            [
                "state_id" => 9,
                "name" => "Mutunópolis",
                "slug" => "mutunopolis",
            ],
            [
                "state_id" => 9,
                "name" => "Nazário",
                "slug" => "nazario",
            ],
            [
                "state_id" => 9,
                "name" => "Nerópolis",
                "slug" => "neropolis",
            ],
            [
                "state_id" => 9,
                "name" => "Niquelândia",
                "slug" => "niquelandia",
            ],
            [
                "state_id" => 9,
                "name" => "Nova América",
                "slug" => "nova-america",
            ],
            [
                "state_id" => 9,
                "name" => "Nova Aurora",
                "slug" => "nova-aurora",
            ],
            [
                "state_id" => 9,
                "name" => "Nova Crixás",
                "slug" => "nova-crixas",
            ],
            [
                "state_id" => 9,
                "name" => "Nova Glória",
                "slug" => "nova-gloria",
            ],
            [
                "state_id" => 9,
                "name" => "Nova Iguaçu de Goiás",
                "slug" => "nova-iguacu-de-goias",
            ],
            [
                "state_id" => 9,
                "name" => "Nova Roma",
                "slug" => "nova-roma",
            ],
            [
                "state_id" => 9,
                "name" => "Nova Veneza",
                "slug" => "nova-veneza",
            ],
            [
                "state_id" => 9,
                "name" => "Novo Brasil",
                "slug" => "novo-brasil",
            ],
            [
                "state_id" => 9,
                "name" => "Novo Gama",
                "slug" => "novo-gama",
            ],
            [
                "state_id" => 9,
                "name" => "Novo Planalto",
                "slug" => "novo-planalto",
            ],
            [
                "state_id" => 9,
                "name" => "Orizona",
                "slug" => "orizona",
            ],
            [
                "state_id" => 9,
                "name" => "Ouro Verde de Goiás",
                "slug" => "ouro-verde-de-goias",
            ],
            [
                "state_id" => 9,
                "name" => "Ouvidor",
                "slug" => "ouvidor",
            ],
            [
                "state_id" => 9,
                "name" => "Padre Bernardo",
                "slug" => "padre-bernardo",
            ],
            [
                "state_id" => 9,
                "name" => "Palestina de Goiás",
                "slug" => "palestina-de-goias",
            ],
            [
                "state_id" => 9,
                "name" => "Palmeiras de Goiás",
                "slug" => "palmeiras-de-goias",
            ],
            [
                "state_id" => 9,
                "name" => "Palmelo",
                "slug" => "palmelo",
            ],
            [
                "state_id" => 9,
                "name" => "Palminópolis",
                "slug" => "palminopolis",
            ],
            [
                "state_id" => 9,
                "name" => "Panamá",
                "slug" => "panama",
            ],
            [
                "state_id" => 9,
                "name" => "Paranaiguara",
                "slug" => "paranaiguara",
            ],
            [
                "state_id" => 9,
                "name" => "Paraúna",
                "slug" => "parauna",
            ],
            [
                "state_id" => 9,
                "name" => "Perolândia",
                "slug" => "perolandia",
            ],
            [
                "state_id" => 9,
                "name" => "Petrolina de Goiás",
                "slug" => "petrolina-de-goias",
            ],
            [
                "state_id" => 9,
                "name" => "Pilar de Goiás",
                "slug" => "pilar-de-goias",
            ],
            [
                "state_id" => 9,
                "name" => "Piracanjuba",
                "slug" => "piracanjuba",
            ],
            [
                "state_id" => 9,
                "name" => "Piranhas",
                "slug" => "piranhas",
            ],
            [
                "state_id" => 9,
                "name" => "Pirenópolis",
                "slug" => "pirenopolis",
            ],
            [
                "state_id" => 9,
                "name" => "Pires do Rio",
                "slug" => "pires-do-rio",
            ],
            [
                "state_id" => 9,
                "name" => "Planaltina",
                "slug" => "planaltina",
            ],
            [
                "state_id" => 9,
                "name" => "Pontalina",
                "slug" => "pontalina",
            ],
            [
                "state_id" => 9,
                "name" => "Porangatu",
                "slug" => "porangatu",
            ],
            [
                "state_id" => 9,
                "name" => "Porteirão",
                "slug" => "porteirao",
            ],
            [
                "state_id" => 9,
                "name" => "Portelândia",
                "slug" => "portelandia",
            ],
            [
                "state_id" => 9,
                "name" => "Posse",
                "slug" => "posse",
            ],
            [
                "state_id" => 9,
                "name" => "Professor Jamil",
                "slug" => "professor-jamil",
            ],
            [
                "state_id" => 9,
                "name" => "Quirinópolis",
                "slug" => "quirinopolis",
            ],
            [
                "state_id" => 9,
                "name" => "Rialma",
                "slug" => "rialma",
            ],
            [
                "state_id" => 9,
                "name" => "Rianápolis",
                "slug" => "rianapolis",
            ],
            [
                "state_id" => 9,
                "name" => "Rio Quente",
                "slug" => "rio-quente",
            ],
            [
                "state_id" => 9,
                "name" => "Rio Verde",
                "slug" => "rio-verde",
            ],
            [
                "state_id" => 9,
                "name" => "Rubiataba",
                "slug" => "rubiataba",
            ],
            [
                "state_id" => 9,
                "name" => "Sanclerlândia",
                "slug" => "sanclerlandia",
            ],
            [
                "state_id" => 9,
                "name" => "Santa Bárbara de Goiás",
                "slug" => "santa-barbara-de-goias",
            ],
            [
                "state_id" => 9,
                "name" => "Santa Cruz de Goiás",
                "slug" => "santa-cruz-de-goias",
            ],
            [
                "state_id" => 9,
                "name" => "Santa Fé de Goiás",
                "slug" => "santa-fe-de-goias",
            ],
            [
                "state_id" => 9,
                "name" => "Santa Helena de Goiás",
                "slug" => "santa-helena-de-goias",
            ],
            [
                "state_id" => 9,
                "name" => "Santa Isabel",
                "slug" => "santa-isabel",
            ],
            [
                "state_id" => 9,
                "name" => "Santa Rita do Araguaia",
                "slug" => "santa-rita-do-araguaia",
            ],
            [
                "state_id" => 9,
                "name" => "Santa Rita do Novo Destino",
                "slug" => "santa-rita-do-novo-destino",
            ],
            [
                "state_id" => 9,
                "name" => "Santa Rosa de Goiás",
                "slug" => "santa-rosa-de-goias",
            ],
            [
                "state_id" => 9,
                "name" => "Santa Tereza de Goiás",
                "slug" => "santa-tereza-de-goias",
            ],
            [
                "state_id" => 9,
                "name" => "Santa Terezinha de Goiás",
                "slug" => "santa-terezinha-de-goias",
            ],
            [
                "state_id" => 9,
                "name" => "Santo Antônio da Barra",
                "slug" => "santo-antonio-da-barra",
            ],
            [
                "state_id" => 9,
                "name" => "Santo Antônio de Goiás",
                "slug" => "santo-antonio-de-goias",
            ],
            [
                "state_id" => 9,
                "name" => "Santo Antônio do Descoberto",
                "slug" => "santo-antonio-do-descoberto",
            ],
            [
                "state_id" => 9,
                "name" => "São Domingos",
                "slug" => "sao-domingos",
            ],
            [
                "state_id" => 9,
                "name" => "São Francisco de Goiás",
                "slug" => "sao-francisco-de-goias",
            ],
            [
                "state_id" => 9,
                "name" => "São João d`Aliança",
                "slug" => "sao-joao-dalianca",
            ],
            [
                "state_id" => 9,
                "name" => "São João da Paraúna",
                "slug" => "sao-joao-da-parauna",
            ],
            [
                "state_id" => 9,
                "name" => "São Luís de Montes Belos",
                "slug" => "sao-luis-de-montes-belos",
            ],
            [
                "state_id" => 9,
                "name" => "São Luíz do Norte",
                "slug" => "sao-luiz-do-norte",
            ],
            [
                "state_id" => 9,
                "name" => "São Miguel do Araguaia",
                "slug" => "sao-miguel-do-araguaia",
            ],
            [
                "state_id" => 9,
                "name" => "São Miguel do Passa Quatro",
                "slug" => "sao-miguel-do-passa-quatro",
            ],
            [
                "state_id" => 9,
                "name" => "São Patrício",
                "slug" => "sao-patricio",
            ],
            [
                "state_id" => 9,
                "name" => "São Simão",
                "slug" => "sao-simao",
            ],
            [
                "state_id" => 9,
                "name" => "Senador Canedo",
                "slug" => "senador-canedo",
            ],
            [
                "state_id" => 9,
                "name" => "Serranópolis",
                "slug" => "serranopolis",
            ],
            [
                "state_id" => 9,
                "name" => "Silvânia",
                "slug" => "silvania",
            ],
            [
                "state_id" => 9,
                "name" => "Simolândia",
                "slug" => "simolandia",
            ],
            [
                "state_id" => 9,
                "name" => "Sítio d`Abadia",
                "slug" => "sitio-dabadia",
            ],
            [
                "state_id" => 9,
                "name" => "Taquaral de Goiás",
                "slug" => "taquaral-de-goias",
            ],
            [
                "state_id" => 9,
                "name" => "Teresina de Goiás",
                "slug" => "teresina-de-goias",
            ],
            [
                "state_id" => 9,
                "name" => "Terezópolis de Goiás",
                "slug" => "terezopolis-de-goias",
            ],
            [
                "state_id" => 9,
                "name" => "Três Ranchos",
                "slug" => "tres-ranchos",
            ],
            [
                "state_id" => 9,
                "name" => "Trindade",
                "slug" => "trindade",
            ],
            [
                "state_id" => 9,
                "name" => "Trombas",
                "slug" => "trombas",
            ],
            [
                "state_id" => 9,
                "name" => "Turvânia",
                "slug" => "turvania",
            ],
            [
                "state_id" => 9,
                "name" => "Turvelândia",
                "slug" => "turvelandia",
            ],
            [
                "state_id" => 9,
                "name" => "Uirapuru",
                "slug" => "uirapuru",
            ],
            [
                "state_id" => 9,
                "name" => "Uruaçu",
                "slug" => "uruacu",
            ],
            [
                "state_id" => 9,
                "name" => "Uruana",
                "slug" => "uruana",
            ],
            [
                "state_id" => 9,
                "name" => "Urutaí",
                "slug" => "urutai",
            ],
            [
                "state_id" => 9,
                "name" => "Valparaíso de Goiás",
                "slug" => "valparaiso-de-goias",
            ],
            [
                "state_id" => 9,
                "name" => "Varjão",
                "slug" => "varjao",
            ],
            [
                "state_id" => 9,
                "name" => "Vianópolis",
                "slug" => "vianopolis",
            ],
            [
                "state_id" => 9,
                "name" => "Vicentinópolis",
                "slug" => "vicentinopolis",
            ],
            [
                "state_id" => 9,
                "name" => "Vila Boa",
                "slug" => "vila-boa",
            ],
            [
                "state_id" => 9,
                "name" => "Vila Propício",
                "slug" => "vila-propicio",
            ],
            [
                "state_id" => 10,
                "name" => "Açailândia",
                "slug" => "acailandia",
            ],
            [
                "state_id" => 10,
                "name" => "Afonso Cunha",
                "slug" => "afonso-cunha",
            ],
            [
                "state_id" => 10,
                "name" => "Água Doce do Maranhão",
                "slug" => "agua-doce-do-maranhao",
            ],
            [
                "state_id" => 10,
                "name" => "Alcântara",
                "slug" => "alcantara",
            ],
            [
                "state_id" => 10,
                "name" => "Aldeias Altas",
                "slug" => "aldeias-altas",
            ],
            [
                "state_id" => 10,
                "name" => "Altamira do Maranhão",
                "slug" => "altamira-do-maranhao",
            ],
            [
                "state_id" => 10,
                "name" => "Alto Alegre do Maranhão",
                "slug" => "alto-alegre-do-maranhao",
            ],
            [
                "state_id" => 10,
                "name" => "Alto Alegre do Pindaré",
                "slug" => "alto-alegre-do-pindare",
            ],
            [
                "state_id" => 10,
                "name" => "Alto Parnaíba",
                "slug" => "alto-parnaiba",
            ],
            [
                "state_id" => 10,
                "name" => "Amapá do Maranhão",
                "slug" => "amapa-do-maranhao",
            ],
            [
                "state_id" => 10,
                "name" => "Amarante do Maranhão",
                "slug" => "amarante-do-maranhao",
            ],
            [
                "state_id" => 10,
                "name" => "Anajatuba",
                "slug" => "anajatuba",
            ],
            [
                "state_id" => 10,
                "name" => "Anapurus",
                "slug" => "anapurus",
            ],
            [
                "state_id" => 10,
                "name" => "Apicum-Açu",
                "slug" => "apicum-acu",
            ],
            [
                "state_id" => 10,
                "name" => "Araguanã",
                "slug" => "araguana",
            ],
            [
                "state_id" => 10,
                "name" => "Araioses",
                "slug" => "araioses",
            ],
            [
                "state_id" => 10,
                "name" => "Arame",
                "slug" => "arame",
            ],
            [
                "state_id" => 10,
                "name" => "Arari",
                "slug" => "arari",
            ],
            [
                "state_id" => 10,
                "name" => "Axixá",
                "slug" => "axixa",
            ],
            [
                "state_id" => 10,
                "name" => "Bacabal",
                "slug" => "bacabal",
            ],
            [
                "state_id" => 10,
                "name" => "Bacabeira",
                "slug" => "bacabeira",
            ],
            [
                "state_id" => 10,
                "name" => "Bacuri",
                "slug" => "bacuri",
            ],
            [
                "state_id" => 10,
                "name" => "Bacurituba",
                "slug" => "bacurituba",
            ],
            [
                "state_id" => 10,
                "name" => "Balsas",
                "slug" => "balsas",
            ],
            [
                "state_id" => 10,
                "name" => "Barão de Grajaú",
                "slug" => "barao-de-grajau",
            ],
            [
                "state_id" => 10,
                "name" => "Barra do Corda",
                "slug" => "barra-do-corda",
            ],
            [
                "state_id" => 10,
                "name" => "Barreirinhas",
                "slug" => "barreirinhas",
            ],
            [
                "state_id" => 10,
                "name" => "Bela Vista do Maranhão",
                "slug" => "bela-vista-do-maranhao",
            ],
            [
                "state_id" => 10,
                "name" => "Belágua",
                "slug" => "belagua",
            ],
            [
                "state_id" => 10,
                "name" => "Benedito Leite",
                "slug" => "benedito-leite",
            ],
            [
                "state_id" => 10,
                "name" => "Bequimão",
                "slug" => "bequimao",
            ],
            [
                "state_id" => 10,
                "name" => "Bernardo do Mearim",
                "slug" => "bernardo-do-mearim",
            ],
            [
                "state_id" => 10,
                "name" => "Boa Vista do Gurupi",
                "slug" => "boa-vista-do-gurupi",
            ],
            [
                "state_id" => 10,
                "name" => "Bom Jardim",
                "slug" => "bom-jardim",
            ],
            [
                "state_id" => 10,
                "name" => "Bom Jesus das Selvas",
                "slug" => "bom-jesus-das-selvas",
            ],
            [
                "state_id" => 10,
                "name" => "Bom Lugar",
                "slug" => "bom-lugar",
            ],
            [
                "state_id" => 10,
                "name" => "Brejo",
                "slug" => "brejo",
            ],
            [
                "state_id" => 10,
                "name" => "Brejo de Areia",
                "slug" => "brejo-de-areia",
            ],
            [
                "state_id" => 10,
                "name" => "Buriti",
                "slug" => "buriti",
            ],
            [
                "state_id" => 10,
                "name" => "Buriti Bravo",
                "slug" => "buriti-bravo",
            ],
            [
                "state_id" => 10,
                "name" => "Buriticupu",
                "slug" => "buriticupu",
            ],
            [
                "state_id" => 10,
                "name" => "Buritirana",
                "slug" => "buritirana",
            ],
            [
                "state_id" => 10,
                "name" => "Cachoeira Grande",
                "slug" => "cachoeira-grande",
            ],
            [
                "state_id" => 10,
                "name" => "Cajapió",
                "slug" => "cajapio",
            ],
            [
                "state_id" => 10,
                "name" => "Cajari",
                "slug" => "cajari",
            ],
            [
                "state_id" => 10,
                "name" => "Campestre do Maranhão",
                "slug" => "campestre-do-maranhao",
            ],
            [
                "state_id" => 10,
                "name" => "Cândido Mendes",
                "slug" => "candido-mendes",
            ],
            [
                "state_id" => 10,
                "name" => "Cantanhede",
                "slug" => "cantanhede",
            ],
            [
                "state_id" => 10,
                "name" => "Capinzal do Norte",
                "slug" => "capinzal-do-norte",
            ],
            [
                "state_id" => 10,
                "name" => "Carolina",
                "slug" => "carolina",
            ],
            [
                "state_id" => 10,
                "name" => "Carutapera",
                "slug" => "carutapera",
            ],
            [
                "state_id" => 10,
                "name" => "Caxias",
                "slug" => "caxias",
            ],
            [
                "state_id" => 10,
                "name" => "Cedral",
                "slug" => "cedral",
            ],
            [
                "state_id" => 10,
                "name" => "Central do Maranhão",
                "slug" => "central-do-maranhao",
            ],
            [
                "state_id" => 10,
                "name" => "Centro do Guilherme",
                "slug" => "centro-do-guilherme",
            ],
            [
                "state_id" => 10,
                "name" => "Centro Novo do Maranhão",
                "slug" => "centro-novo-do-maranhao",
            ],
            [
                "state_id" => 10,
                "name" => "Chapadinha",
                "slug" => "chapadinha",
            ],
            [
                "state_id" => 10,
                "name" => "Cidelândia",
                "slug" => "cidelandia",
            ],
            [
                "state_id" => 10,
                "name" => "Codó",
                "slug" => "codo",
            ],
            [
                "state_id" => 10,
                "name" => "Coelho Neto",
                "slug" => "coelho-neto",
            ],
            [
                "state_id" => 10,
                "name" => "Colinas",
                "slug" => "colinas",
            ],
            [
                "state_id" => 10,
                "name" => "Conceição do Lago-Açu",
                "slug" => "conceicao-do-lago-acu",
            ],
            [
                "state_id" => 10,
                "name" => "Coroatá",
                "slug" => "coroata",
            ],
            [
                "state_id" => 10,
                "name" => "Cururupu",
                "slug" => "cururupu",
            ],
            [
                "state_id" => 10,
                "name" => "Davinópolis",
                "slug" => "davinopolis",
            ],
            [
                "state_id" => 10,
                "name" => "Dom Pedro",
                "slug" => "dom-pedro",
            ],
            [
                "state_id" => 10,
                "name" => "Duque Bacelar",
                "slug" => "duque-bacelar",
            ],
            [
                "state_id" => 10,
                "name" => "Esperantinópolis",
                "slug" => "esperantinopolis",
            ],
            [
                "state_id" => 10,
                "name" => "Estreito",
                "slug" => "estreito",
            ],
            [
                "state_id" => 10,
                "name" => "Feira Nova do Maranhão",
                "slug" => "feira-nova-do-maranhao",
            ],
            [
                "state_id" => 10,
                "name" => "Fernando Falcão",
                "slug" => "fernando-falcao",
            ],
            [
                "state_id" => 10,
                "name" => "Formosa da Serra Negra",
                "slug" => "formosa-da-serra-negra",
            ],
            [
                "state_id" => 10,
                "name" => "Fortaleza dos Nogueiras",
                "slug" => "fortaleza-dos-nogueiras",
            ],
            [
                "state_id" => 10,
                "name" => "Fortuna",
                "slug" => "fortuna",
            ],
            [
                "state_id" => 10,
                "name" => "Godofredo Viana",
                "slug" => "godofredo-viana",
            ],
            [
                "state_id" => 10,
                "name" => "Gonçalves Dias",
                "slug" => "goncalves-dias",
            ],
            [
                "state_id" => 10,
                "name" => "Governador Archer",
                "slug" => "governador-archer",
            ],
            [
                "state_id" => 10,
                "name" => "Governador Edison Lobão",
                "slug" => "governador-edison-lobao",
            ],
            [
                "state_id" => 10,
                "name" => "Governador Eugênio Barros",
                "slug" => "governador-eugenio-barros",
            ],
            [
                "state_id" => 10,
                "name" => "Governador Luiz Rocha",
                "slug" => "governador-luiz-rocha",
            ],
            [
                "state_id" => 10,
                "name" => "Governador Newton Bello",
                "slug" => "governador-newton-bello",
            ],
            [
                "state_id" => 10,
                "name" => "Governador Nunes Freire",
                "slug" => "governador-nunes-freire",
            ],
            [
                "state_id" => 10,
                "name" => "Graça Aranha",
                "slug" => "graca-aranha",
            ],
            [
                "state_id" => 10,
                "name" => "Grajaú",
                "slug" => "grajau",
            ],
            [
                "state_id" => 10,
                "name" => "Guimarães",
                "slug" => "guimaraes",
            ],
            [
                "state_id" => 10,
                "name" => "Humberto de Campos",
                "slug" => "humberto-de-campos",
            ],
            [
                "state_id" => 10,
                "name" => "Icatu",
                "slug" => "icatu",
            ],
            [
                "state_id" => 10,
                "name" => "Igarapé do Meio",
                "slug" => "igarape-do-meio",
            ],
            [
                "state_id" => 10,
                "name" => "Igarapé Grande",
                "slug" => "igarape-grande",
            ],
            [
                "state_id" => 10,
                "name" => "Imperatriz",
                "slug" => "imperatriz",
            ],
            [
                "state_id" => 10,
                "name" => "Itaipava do Grajaú",
                "slug" => "itaipava-do-grajau",
            ],
            [
                "state_id" => 10,
                "name" => "Itapecuru Mirim",
                "slug" => "itapecuru-mirim",
            ],
            [
                "state_id" => 10,
                "name" => "Itinga do Maranhão",
                "slug" => "itinga-do-maranhao",
            ],
            [
                "state_id" => 10,
                "name" => "Jatobá",
                "slug" => "jatoba",
            ],
            [
                "state_id" => 10,
                "name" => "Jenipapo dos Vieiras",
                "slug" => "jenipapo-dos-vieiras",
            ],
            [
                "state_id" => 10,
                "name" => "João Lisboa",
                "slug" => "joao-lisboa",
            ],
            [
                "state_id" => 10,
                "name" => "Joselândia",
                "slug" => "joselandia",
            ],
            [
                "state_id" => 10,
                "name" => "Junco do Maranhão",
                "slug" => "junco-do-maranhao",
            ],
            [
                "state_id" => 10,
                "name" => "Lago da Pedra",
                "slug" => "lago-da-pedra",
            ],
            [
                "state_id" => 10,
                "name" => "Lago do Junco",
                "slug" => "lago-do-junco",
            ],
            [
                "state_id" => 10,
                "name" => "Lago dos Rodrigues",
                "slug" => "lago-dos-rodrigues",
            ],
            [
                "state_id" => 10,
                "name" => "Lago Verde",
                "slug" => "lago-verde",
            ],
            [
                "state_id" => 10,
                "name" => "Lagoa do Mato",
                "slug" => "lagoa-do-mato",
            ],
            [
                "state_id" => 10,
                "name" => "Lagoa Grande do Maranhão",
                "slug" => "lagoa-grande-do-maranhao",
            ],
            [
                "state_id" => 10,
                "name" => "Lajeado Novo",
                "slug" => "lajeado-novo",
            ],
            [
                "state_id" => 10,
                "name" => "Lima Campos",
                "slug" => "lima-campos",
            ],
            [
                "state_id" => 10,
                "name" => "Loreto",
                "slug" => "loreto",
            ],
            [
                "state_id" => 10,
                "name" => "Luís Domingues",
                "slug" => "luis-domingues",
            ],
            [
                "state_id" => 10,
                "name" => "Magalhães de Almeida",
                "slug" => "magalhaes-de-almeida",
            ],
            [
                "state_id" => 10,
                "name" => "Maracaçumé",
                "slug" => "maracacume",
            ],
            [
                "state_id" => 10,
                "name" => "Marajá do Sena",
                "slug" => "maraja-do-sena",
            ],
            [
                "state_id" => 10,
                "name" => "Maranhãozinho",
                "slug" => "maranhaozinho",
            ],
            [
                "state_id" => 10,
                "name" => "Mata Roma",
                "slug" => "mata-roma",
            ],
            [
                "state_id" => 10,
                "name" => "Matinha",
                "slug" => "matinha",
            ],
            [
                "state_id" => 10,
                "name" => "Matões",
                "slug" => "matoes",
            ],
            [
                "state_id" => 10,
                "name" => "Matões do Norte",
                "slug" => "matoes-do-norte",
            ],
            [
                "state_id" => 10,
                "name" => "Milagres do Maranhão",
                "slug" => "milagres-do-maranhao",
            ],
            [
                "state_id" => 10,
                "name" => "Mirador",
                "slug" => "mirador",
            ],
            [
                "state_id" => 10,
                "name" => "Miranda do Norte",
                "slug" => "miranda-do-norte",
            ],
            [
                "state_id" => 10,
                "name" => "Mirinzal",
                "slug" => "mirinzal",
            ],
            [
                "state_id" => 10,
                "name" => "Monção",
                "slug" => "moncao",
            ],
            [
                "state_id" => 10,
                "name" => "Montes Altos",
                "slug" => "montes-altos",
            ],
            [
                "state_id" => 10,
                "name" => "Morros",
                "slug" => "morros",
            ],
            [
                "state_id" => 10,
                "name" => "Nina Rodrigues",
                "slug" => "nina-rodrigues",
            ],
            [
                "state_id" => 10,
                "name" => "Nova Colinas",
                "slug" => "nova-colinas",
            ],
            [
                "state_id" => 10,
                "name" => "Nova Iorque",
                "slug" => "nova-iorque",
            ],
            [
                "state_id" => 10,
                "name" => "Nova Olinda do Maranhão",
                "slug" => "nova-olinda-do-maranhao",
            ],
            [
                "state_id" => 10,
                "name" => "Olho d`Água das Cunhãs",
                "slug" => "olho-dagua-das-cunhas",
            ],
            [
                "state_id" => 10,
                "name" => "Olinda Nova do Maranhão",
                "slug" => "olinda-nova-do-maranhao",
            ],
            [
                "state_id" => 10,
                "name" => "Paço do Lumiar",
                "slug" => "paco-do-lumiar",
            ],
            [
                "state_id" => 10,
                "name" => "Palmeirândia",
                "slug" => "palmeirandia",
            ],
            [
                "state_id" => 10,
                "name" => "Paraibano",
                "slug" => "paraibano",
            ],
            [
                "state_id" => 10,
                "name" => "Parnarama",
                "slug" => "parnarama",
            ],
            [
                "state_id" => 10,
                "name" => "Passagem Franca",
                "slug" => "passagem-franca",
            ],
            [
                "state_id" => 10,
                "name" => "Pastos Bons",
                "slug" => "pastos-bons",
            ],
            [
                "state_id" => 10,
                "name" => "Paulino Neves",
                "slug" => "paulino-neves",
            ],
            [
                "state_id" => 10,
                "name" => "Paulo Ramos",
                "slug" => "paulo-ramos",
            ],
            [
                "state_id" => 10,
                "name" => "Pedreiras",
                "slug" => "pedreiras",
            ],
            [
                "state_id" => 10,
                "name" => "Pedro do Rosário",
                "slug" => "pedro-do-rosario",
            ],
            [
                "state_id" => 10,
                "name" => "Penalva",
                "slug" => "penalva",
            ],
            [
                "state_id" => 10,
                "name" => "Peri Mirim",
                "slug" => "peri-mirim",
            ],
            [
                "state_id" => 10,
                "name" => "Peritoró",
                "slug" => "peritoro",
            ],
            [
                "state_id" => 10,
                "name" => "Pindaré-Mirim",
                "slug" => "pindare-mirim",
            ],
            [
                "state_id" => 10,
                "name" => "Pinheiro",
                "slug" => "pinheiro",
            ],
            [
                "state_id" => 10,
                "name" => "Pio XII",
                "slug" => "pio-xii",
            ],
            [
                "state_id" => 10,
                "name" => "Pirapemas",
                "slug" => "pirapemas",
            ],
            [
                "state_id" => 10,
                "name" => "Poção de Pedras",
                "slug" => "pocao-de-pedras",
            ],
            [
                "state_id" => 10,
                "name" => "Porto Franco",
                "slug" => "porto-franco",
            ],
            [
                "state_id" => 10,
                "name" => "Porto Rico do Maranhão",
                "slug" => "porto-rico-do-maranhao",
            ],
            [
                "state_id" => 10,
                "name" => "Presidente Dutra",
                "slug" => "presidente-dutra",
            ],
            [
                "state_id" => 10,
                "name" => "Presidente Juscelino",
                "slug" => "presidente-juscelino",
            ],
            [
                "state_id" => 10,
                "name" => "Presidente Médici",
                "slug" => "presidente-medici",
            ],
            [
                "state_id" => 10,
                "name" => "Presidente Sarney",
                "slug" => "presidente-sarney",
            ],
            [
                "state_id" => 10,
                "name" => "Presidente Vargas",
                "slug" => "presidente-vargas",
            ],
            [
                "state_id" => 10,
                "name" => "Primeira Cruz",
                "slug" => "primeira-cruz",
            ],
            [
                "state_id" => 10,
                "name" => "Raposa",
                "slug" => "raposa",
            ],
            [
                "state_id" => 10,
                "name" => "Riachão",
                "slug" => "riachao",
            ],
            [
                "state_id" => 10,
                "name" => "Ribamar Fiquene",
                "slug" => "ribamar-fiquene",
            ],
            [
                "state_id" => 10,
                "name" => "Rosário",
                "slug" => "rosario",
            ],
            [
                "state_id" => 10,
                "name" => "Sambaíba",
                "slug" => "sambaiba",
            ],
            [
                "state_id" => 10,
                "name" => "Santa Filomena do Maranhão",
                "slug" => "santa-filomena-do-maranhao",
            ],
            [
                "state_id" => 10,
                "name" => "Santa Helena",
                "slug" => "santa-helena",
            ],
            [
                "state_id" => 10,
                "name" => "Santa Inês",
                "slug" => "santa-ines",
            ],
            [
                "state_id" => 10,
                "name" => "Santa Luzia",
                "slug" => "santa-luzia",
            ],
            [
                "state_id" => 10,
                "name" => "Santa Luzia do Paruá",
                "slug" => "santa-luzia-do-parua",
            ],
            [
                "state_id" => 10,
                "name" => "Santa Quitéria do Maranhão",
                "slug" => "santa-quiteria-do-maranhao",
            ],
            [
                "state_id" => 10,
                "name" => "Santa Rita",
                "slug" => "santa-rita",
            ],
            [
                "state_id" => 10,
                "name" => "Santana do Maranhão",
                "slug" => "santana-do-maranhao",
            ],
            [
                "state_id" => 10,
                "name" => "Santo Amaro do Maranhão",
                "slug" => "santo-amaro-do-maranhao",
            ],
            [
                "state_id" => 10,
                "name" => "Santo Antônio dos Lopes",
                "slug" => "santo-antonio-dos-lopes",
            ],
            [
                "state_id" => 10,
                "name" => "São Benedito do Rio Preto",
                "slug" => "sao-benedito-do-rio-preto",
            ],
            [
                "state_id" => 10,
                "name" => "São Bento",
                "slug" => "sao-bento",
            ],
            [
                "state_id" => 10,
                "name" => "São Bernardo",
                "slug" => "sao-bernardo",
            ],
            [
                "state_id" => 10,
                "name" => "São Domingos do Azeitão",
                "slug" => "sao-domingos-do-azeitao",
            ],
            [
                "state_id" => 10,
                "name" => "São Domingos do Maranhão",
                "slug" => "sao-domingos-do-maranhao",
            ],
            [
                "state_id" => 10,
                "name" => "São Félix de Balsas",
                "slug" => "sao-felix-de-balsas",
            ],
            [
                "state_id" => 10,
                "name" => "São Francisco do Brejão",
                "slug" => "sao-francisco-do-brejao",
            ],
            [
                "state_id" => 10,
                "name" => "São Francisco do Maranhão",
                "slug" => "sao-francisco-do-maranhao",
            ],
            [
                "state_id" => 10,
                "name" => "São João Batista",
                "slug" => "sao-joao-batista",
            ],
            [
                "state_id" => 10,
                "name" => "São João do Carú",
                "slug" => "sao-joao-do-caru",
            ],
            [
                "state_id" => 10,
                "name" => "São João do Paraíso",
                "slug" => "sao-joao-do-paraiso",
            ],
            [
                "state_id" => 10,
                "name" => "São João do Soter",
                "slug" => "sao-joao-do-soter",
            ],
            [
                "state_id" => 10,
                "name" => "São João dos Patos",
                "slug" => "sao-joao-dos-patos",
            ],
            [
                "state_id" => 10,
                "name" => "São José de Ribamar",
                "slug" => "sao-jose-de-ribamar",
            ],
            [
                "state_id" => 10,
                "name" => "São José dos Basílios",
                "slug" => "sao-jose-dos-basilios",
            ],
            [
                "state_id" => 10,
                "name" => "São Luís",
                "slug" => "sao-luis",
            ],
            [
                "state_id" => 10,
                "name" => "São Luís Gonzaga do Maranhão",
                "slug" => "sao-luis-gonzaga-do-maranhao",
            ],
            [
                "state_id" => 10,
                "name" => "São Mateus do Maranhão",
                "slug" => "sao-mateus-do-maranhao",
            ],
            [
                "state_id" => 10,
                "name" => "São Pedro da Água Branca",
                "slug" => "sao-pedro-da-agua-branca",
            ],
            [
                "state_id" => 10,
                "name" => "São Pedro dos Crentes",
                "slug" => "sao-pedro-dos-crentes",
            ],
            [
                "state_id" => 10,
                "name" => "São Raimundo das Mangabeiras",
                "slug" => "sao-raimundo-das-mangabeiras",
            ],
            [
                "state_id" => 10,
                "name" => "São Raimundo do Doca Bezerra",
                "slug" => "sao-raimundo-do-doca-bezerra",
            ],
            [
                "state_id" => 10,
                "name" => "São Roberto",
                "slug" => "sao-roberto",
            ],
            [
                "state_id" => 10,
                "name" => "São Vicente Ferrer",
                "slug" => "sao-vicente-ferrer",
            ],
            [
                "state_id" => 10,
                "name" => "Satubinha",
                "slug" => "satubinha",
            ],
            [
                "state_id" => 10,
                "name" => "Senador Alexandre Costa",
                "slug" => "senador-alexandre-costa",
            ],
            [
                "state_id" => 10,
                "name" => "Senador La Rocque",
                "slug" => "senador-la-rocque",
            ],
            [
                "state_id" => 10,
                "name" => "Serrano do Maranhão",
                "slug" => "serrano-do-maranhao",
            ],
            [
                "state_id" => 10,
                "name" => "Sítio Novo",
                "slug" => "sitio-novo",
            ],
            [
                "state_id" => 10,
                "name" => "Sucupira do Norte",
                "slug" => "sucupira-do-norte",
            ],
            [
                "state_id" => 10,
                "name" => "Sucupira do Riachão",
                "slug" => "sucupira-do-riachao",
            ],
            [
                "state_id" => 10,
                "name" => "Tasso Fragoso",
                "slug" => "tasso-fragoso",
            ],
            [
                "state_id" => 10,
                "name" => "Timbiras",
                "slug" => "timbiras",
            ],
            [
                "state_id" => 10,
                "name" => "Timon",
                "slug" => "timon",
            ],
            [
                "state_id" => 10,
                "name" => "Trizidela do Vale",
                "slug" => "trizidela-do-vale",
            ],
            [
                "state_id" => 10,
                "name" => "Tufilândia",
                "slug" => "tufilandia",
            ],
            [
                "state_id" => 10,
                "name" => "Tuntum",
                "slug" => "tuntum",
            ],
            [
                "state_id" => 10,
                "name" => "Turiaçu",
                "slug" => "turiacu",
            ],
            [
                "state_id" => 10,
                "name" => "Turilândia",
                "slug" => "turilandia",
            ],
            [
                "state_id" => 10,
                "name" => "Tutóia",
                "slug" => "tutoia",
            ],
            [
                "state_id" => 10,
                "name" => "Urbano Santos",
                "slug" => "urbano-santos",
            ],
            [
                "state_id" => 10,
                "name" => "Vargem Grande",
                "slug" => "vargem-grande",
            ],
            [
                "state_id" => 10,
                "name" => "Viana",
                "slug" => "viana",
            ],
            [
                "state_id" => 10,
                "name" => "Vila Nova dos Martírios",
                "slug" => "vila-nova-dos-martirios",
            ],
            [
                "state_id" => 10,
                "name" => "Vitória do Mearim",
                "slug" => "vitoria-do-mearim",
            ],
            [
                "state_id" => 10,
                "name" => "Vitorino Freire",
                "slug" => "vitorino-freire",
            ],
            [
                "state_id" => 10,
                "name" => "Zé Doca",
                "slug" => "ze-doca",
            ],
            [
                "state_id" => 13,
                "name" => "Acorizal",
                "slug" => "acorizal",
            ],
            [
                "state_id" => 13,
                "name" => "Água Boa",
                "slug" => "agua-boa",
            ],
            [
                "state_id" => 13,
                "name" => "Alta Floresta",
                "slug" => "alta-floresta",
            ],
            [
                "state_id" => 13,
                "name" => "Alto Araguaia",
                "slug" => "alto-araguaia",
            ],
            [
                "state_id" => 13,
                "name" => "Alto Boa Vista",
                "slug" => "alto-boa-vista",
            ],
            [
                "state_id" => 13,
                "name" => "Alto Garças",
                "slug" => "alto-garcas",
            ],
            [
                "state_id" => 13,
                "name" => "Alto Paraguai",
                "slug" => "alto-paraguai",
            ],
            [
                "state_id" => 13,
                "name" => "Alto Taquari",
                "slug" => "alto-taquari",
            ],
            [
                "state_id" => 13,
                "name" => "Apiacás",
                "slug" => "apiacas",
            ],
            [
                "state_id" => 13,
                "name" => "Araguaiana",
                "slug" => "araguaiana",
            ],
            [
                "state_id" => 13,
                "name" => "Araguainha",
                "slug" => "araguainha",
            ],
            [
                "state_id" => 13,
                "name" => "Araputanga",
                "slug" => "araputanga",
            ],
            [
                "state_id" => 13,
                "name" => "Arenápolis",
                "slug" => "arenapolis",
            ],
            [
                "state_id" => 13,
                "name" => "Aripuanã",
                "slug" => "aripuana",
            ],
            [
                "state_id" => 13,
                "name" => "Barão de Melgaço",
                "slug" => "barao-de-melgaco",
            ],
            [
                "state_id" => 13,
                "name" => "Barra do Bugres",
                "slug" => "barra-do-bugres",
            ],
            [
                "state_id" => 13,
                "name" => "Barra do Garças",
                "slug" => "barra-do-garcas",
            ],
            [
                "state_id" => 13,
                "name" => "Bom Jesus do Araguaia",
                "slug" => "bom-jesus-do-araguaia",
            ],
            [
                "state_id" => 13,
                "name" => "Brasnorte",
                "slug" => "brasnorte",
            ],
            [
                "state_id" => 13,
                "name" => "Cáceres",
                "slug" => "caceres",
            ],
            [
                "state_id" => 13,
                "name" => "Campinápolis",
                "slug" => "campinapolis",
            ],
            [
                "state_id" => 13,
                "name" => "Campo Novo do Parecis",
                "slug" => "campo-novo-do-parecis",
            ],
            [
                "state_id" => 13,
                "name" => "Campo Verde",
                "slug" => "campo-verde",
            ],
            [
                "state_id" => 13,
                "name" => "Campos de Júlio",
                "slug" => "campos-de-julio",
            ],
            [
                "state_id" => 13,
                "name" => "Canabrava do Norte",
                "slug" => "canabrava-do-norte",
            ],
            [
                "state_id" => 13,
                "name" => "Canarana",
                "slug" => "canarana",
            ],
            [
                "state_id" => 13,
                "name" => "Carlinda",
                "slug" => "carlinda",
            ],
            [
                "state_id" => 13,
                "name" => "Castanheira",
                "slug" => "castanheira",
            ],
            [
                "state_id" => 13,
                "name" => "Chapada dos Guimarães",
                "slug" => "chapada-dos-guimaraes",
            ],
            [
                "state_id" => 13,
                "name" => "Cláudia",
                "slug" => "claudia",
            ],
            [
                "state_id" => 13,
                "name" => "Cocalinho",
                "slug" => "cocalinho",
            ],
            [
                "state_id" => 13,
                "name" => "Colíder",
                "slug" => "colider",
            ],
            [
                "state_id" => 13,
                "name" => "Colniza",
                "slug" => "colniza",
            ],
            [
                "state_id" => 13,
                "name" => "Comodoro",
                "slug" => "comodoro",
            ],
            [
                "state_id" => 13,
                "name" => "Confresa",
                "slug" => "confresa",
            ],
            [
                "state_id" => 13,
                "name" => "Conquista d`Oeste",
                "slug" => "conquista-doeste",
            ],
            [
                "state_id" => 13,
                "name" => "Cotriguaçu",
                "slug" => "cotriguacu",
            ],
            [
                "state_id" => 13,
                "name" => "Cuiabá",
                "slug" => "cuiaba",
            ],
            [
                "state_id" => 13,
                "name" => "Curvelândia",
                "slug" => "curvelandia",
            ],
            [
                "state_id" => 13,
                "name" => "Denise",
                "slug" => "denise",
            ],
            [
                "state_id" => 13,
                "name" => "Diamantino",
                "slug" => "diamantino",
            ],
            [
                "state_id" => 13,
                "name" => "Dom Aquino",
                "slug" => "dom-aquino",
            ],
            [
                "state_id" => 13,
                "name" => "Feliz Natal",
                "slug" => "feliz-natal",
            ],
            [
                "state_id" => 13,
                "name" => "Figueirópolis d`Oeste",
                "slug" => "figueiropolis-doeste",
            ],
            [
                "state_id" => 13,
                "name" => "Gaúcha do Norte",
                "slug" => "gaucha-do-norte",
            ],
            [
                "state_id" => 13,
                "name" => "General Carneiro",
                "slug" => "general-carneiro",
            ],
            [
                "state_id" => 13,
                "name" => "Glória d`Oeste",
                "slug" => "gloria-doeste",
            ],
            [
                "state_id" => 13,
                "name" => "Guarantã do Norte",
                "slug" => "guaranta-do-norte",
            ],
            [
                "state_id" => 13,
                "name" => "Guiratinga",
                "slug" => "guiratinga",
            ],
            [
                "state_id" => 13,
                "name" => "Indiavaí",
                "slug" => "indiavai",
            ],
            [
                "state_id" => 13,
                "name" => "Ipiranga do Norte",
                "slug" => "ipiranga-do-norte",
            ],
            [
                "state_id" => 13,
                "name" => "Itanhangá",
                "slug" => "itanhanga",
            ],
            [
                "state_id" => 13,
                "name" => "Itaúba",
                "slug" => "itauba",
            ],
            [
                "state_id" => 13,
                "name" => "Itiquira",
                "slug" => "itiquira",
            ],
            [
                "state_id" => 13,
                "name" => "Jaciara",
                "slug" => "jaciara",
            ],
            [
                "state_id" => 13,
                "name" => "Jangada",
                "slug" => "jangada",
            ],
            [
                "state_id" => 13,
                "name" => "Jauru",
                "slug" => "jauru",
            ],
            [
                "state_id" => 13,
                "name" => "Juara",
                "slug" => "juara",
            ],
            [
                "state_id" => 13,
                "name" => "Juína",
                "slug" => "juina",
            ],
            [
                "state_id" => 13,
                "name" => "Juruena",
                "slug" => "juruena",
            ],
            [
                "state_id" => 13,
                "name" => "Juscimeira",
                "slug" => "juscimeira",
            ],
            [
                "state_id" => 13,
                "name" => "Lambari d`Oeste",
                "slug" => "lambari-doeste",
            ],
            [
                "state_id" => 13,
                "name" => "Lucas do Rio Verde",
                "slug" => "lucas-do-rio-verde",
            ],
            [
                "state_id" => 13,
                "name" => "Luciára",
                "slug" => "luciara",
            ],
            [
                "state_id" => 13,
                "name" => "Marcelândia",
                "slug" => "marcelandia",
            ],
            [
                "state_id" => 13,
                "name" => "Matupá",
                "slug" => "matupa",
            ],
            [
                "state_id" => 13,
                "name" => "Mirassol d`Oeste",
                "slug" => "mirassol-doeste",
            ],
            [
                "state_id" => 13,
                "name" => "Nobres",
                "slug" => "nobres",
            ],
            [
                "state_id" => 13,
                "name" => "Nortelândia",
                "slug" => "nortelandia",
            ],
            [
                "state_id" => 13,
                "name" => "Nossa Senhora do Livramento",
                "slug" => "nossa-senhora-do-livramento",
            ],
            [
                "state_id" => 13,
                "name" => "Nova Bandeirantes",
                "slug" => "nova-bandeirantes",
            ],
            [
                "state_id" => 13,
                "name" => "Nova Brasilândia",
                "slug" => "nova-brasilandia",
            ],
            [
                "state_id" => 13,
                "name" => "Nova Canaã do Norte",
                "slug" => "nova-canaa-do-norte",
            ],
            [
                "state_id" => 13,
                "name" => "Nova Guarita",
                "slug" => "nova-guarita",
            ],
            [
                "state_id" => 13,
                "name" => "Nova Lacerda",
                "slug" => "nova-lacerda",
            ],
            [
                "state_id" => 13,
                "name" => "Nova Marilândia",
                "slug" => "nova-marilandia",
            ],
            [
                "state_id" => 13,
                "name" => "Nova Maringá",
                "slug" => "nova-maringa",
            ],
            [
                "state_id" => 13,
                "name" => "Nova Monte verde",
                "slug" => "nova-monte-verde",
            ],
            [
                "state_id" => 13,
                "name" => "Nova Mutum",
                "slug" => "nova-mutum",
            ],
            [
                "state_id" => 13,
                "name" => "Nova Olímpia",
                "slug" => "nova-olimpia",
            ],
            [
                "state_id" => 13,
                "name" => "Nova Santa Helena",
                "slug" => "nova-santa-helena",
            ],
            [
                "state_id" => 13,
                "name" => "Nova Ubiratã",
                "slug" => "nova-ubirata",
            ],
            [
                "state_id" => 13,
                "name" => "Nova Xavantina",
                "slug" => "nova-xavantina",
            ],
            [
                "state_id" => 13,
                "name" => "Novo Horizonte do Norte",
                "slug" => "novo-horizonte-do-norte",
            ],
            [
                "state_id" => 13,
                "name" => "Novo Mundo",
                "slug" => "novo-mundo",
            ],
            [
                "state_id" => 13,
                "name" => "Novo Santo Antônio",
                "slug" => "novo-santo-antonio",
            ],
            [
                "state_id" => 13,
                "name" => "Novo São Joaquim",
                "slug" => "novo-sao-joaquim",
            ],
            [
                "state_id" => 13,
                "name" => "Paranaíta",
                "slug" => "paranaita",
            ],
            [
                "state_id" => 13,
                "name" => "Paranatinga",
                "slug" => "paranatinga",
            ],
            [
                "state_id" => 13,
                "name" => "Pedra Preta",
                "slug" => "pedra-preta",
            ],
            [
                "state_id" => 13,
                "name" => "Peixoto de Azevedo",
                "slug" => "peixoto-de-azevedo",
            ],
            [
                "state_id" => 13,
                "name" => "Planalto da Serra",
                "slug" => "planalto-da-serra",
            ],
            [
                "state_id" => 13,
                "name" => "Poconé",
                "slug" => "pocone",
            ],
            [
                "state_id" => 13,
                "name" => "Pontal do Araguaia",
                "slug" => "pontal-do-araguaia",
            ],
            [
                "state_id" => 13,
                "name" => "Ponte Branca",
                "slug" => "ponte-branca",
            ],
            [
                "state_id" => 13,
                "name" => "Pontes e Lacerda",
                "slug" => "pontes-e-lacerda",
            ],
            [
                "state_id" => 13,
                "name" => "Porto Alegre do Norte",
                "slug" => "porto-alegre-do-norte",
            ],
            [
                "state_id" => 13,
                "name" => "Porto dos Gaúchos",
                "slug" => "porto-dos-gauchos",
            ],
            [
                "state_id" => 13,
                "name" => "Porto Esperidião",
                "slug" => "porto-esperidiao",
            ],
            [
                "state_id" => 13,
                "name" => "Porto Estrela",
                "slug" => "porto-estrela",
            ],
            [
                "state_id" => 13,
                "name" => "Poxoréo",
                "slug" => "poxoreo",
            ],
            [
                "state_id" => 13,
                "name" => "Primavera do Leste",
                "slug" => "primavera-do-leste",
            ],
            [
                "state_id" => 13,
                "name" => "Querência",
                "slug" => "querencia",
            ],
            [
                "state_id" => 13,
                "name" => "Reserva do Cabaçal",
                "slug" => "reserva-do-cabacal",
            ],
            [
                "state_id" => 13,
                "name" => "Ribeirão Cascalheira",
                "slug" => "ribeirao-cascalheira",
            ],
            [
                "state_id" => 13,
                "name" => "Ribeirãozinho",
                "slug" => "ribeiraozinho",
            ],
            [
                "state_id" => 13,
                "name" => "Rio Branco",
                "slug" => "rio-branco",
            ],
            [
                "state_id" => 13,
                "name" => "Rondolândia",
                "slug" => "rondolandia",
            ],
            [
                "state_id" => 13,
                "name" => "Rondonópolis",
                "slug" => "rondonopolis",
            ],
            [
                "state_id" => 13,
                "name" => "Rosário Oeste",
                "slug" => "rosario-oeste",
            ],
            [
                "state_id" => 13,
                "name" => "Salto do Céu",
                "slug" => "salto-do-ceu",
            ],
            [
                "state_id" => 13,
                "name" => "Santa Carmem",
                "slug" => "santa-carmem",
            ],
            [
                "state_id" => 13,
                "name" => "Santa Cruz do Xingu",
                "slug" => "santa-cruz-do-xingu",
            ],
            [
                "state_id" => 13,
                "name" => "Santa Rita do Trivelato",
                "slug" => "santa-rita-do-trivelato",
            ],
            [
                "state_id" => 13,
                "name" => "Santa Terezinha",
                "slug" => "santa-terezinha",
            ],
            [
                "state_id" => 13,
                "name" => "Santo Afonso",
                "slug" => "santo-afonso",
            ],
            [
                "state_id" => 13,
                "name" => "Santo Antônio do Leste",
                "slug" => "santo-antonio-do-leste",
            ],
            [
                "state_id" => 13,
                "name" => "Santo Antônio do Leverger",
                "slug" => "santo-antonio-do-leverger",
            ],
            [
                "state_id" => 13,
                "name" => "São Félix do Araguaia",
                "slug" => "sao-felix-do-araguaia",
            ],
            [
                "state_id" => 13,
                "name" => "São José do Povo",
                "slug" => "sao-jose-do-povo",
            ],
            [
                "state_id" => 13,
                "name" => "São José do Rio Claro",
                "slug" => "sao-jose-do-rio-claro",
            ],
            [
                "state_id" => 13,
                "name" => "São José do Xingu",
                "slug" => "sao-jose-do-xingu",
            ],
            [
                "state_id" => 13,
                "name" => "São José dos Quatro Marcos",
                "slug" => "sao-jose-dos-quatro-marcos",
            ],
            [
                "state_id" => 13,
                "name" => "São Pedro da Cipa",
                "slug" => "sao-pedro-da-cipa",
            ],
            [
                "state_id" => 13,
                "name" => "Sapezal",
                "slug" => "sapezal",
            ],
            [
                "state_id" => 13,
                "name" => "Serra Nova Dourada",
                "slug" => "serra-nova-dourada",
            ],
            [
                "state_id" => 13,
                "name" => "Sinop",
                "slug" => "sinop",
            ],
            [
                "state_id" => 13,
                "name" => "Sorriso",
                "slug" => "sorriso",
            ],
            [
                "state_id" => 13,
                "name" => "Tabaporã",
                "slug" => "tabapora",
            ],
            [
                "state_id" => 13,
                "name" => "Tangará da Serra",
                "slug" => "tangara-da-serra",
            ],
            [
                "state_id" => 13,
                "name" => "Tapurah",
                "slug" => "tapurah",
            ],
            [
                "state_id" => 13,
                "name" => "Terra Nova do Norte",
                "slug" => "terra-nova-do-norte",
            ],
            [
                "state_id" => 13,
                "name" => "Tesouro",
                "slug" => "tesouro",
            ],
            [
                "state_id" => 13,
                "name" => "Torixoréu",
                "slug" => "torixoreu",
            ],
            [
                "state_id" => 13,
                "name" => "União do Sul",
                "slug" => "uniao-do-sul",
            ],
            [
                "state_id" => 13,
                "name" => "Vale de São Domingos",
                "slug" => "vale-de-sao-domingos",
            ],
            [
                "state_id" => 13,
                "name" => "Várzea Grande",
                "slug" => "varzea-grande",
            ],
            [
                "state_id" => 13,
                "name" => "Vera",
                "slug" => "vera",
            ],
            [
                "state_id" => 13,
                "name" => "Vila Bela da Santíssima Trindade",
                "slug" => "vila-bela-da-santissima-trindade",
            ],
            [
                "state_id" => 13,
                "name" => "Vila Rica",
                "slug" => "vila-rica",
            ],
            [
                "state_id" => 12,
                "name" => "Água Clara",
                "slug" => "agua-clara",
            ],
            [
                "state_id" => 12,
                "name" => "Alcinópolis",
                "slug" => "alcinopolis",
            ],
            [
                "state_id" => 12,
                "name" => "Amambaí",
                "slug" => "amambai",
            ],
            [
                "state_id" => 12,
                "name" => "Anastácio",
                "slug" => "anastacio",
            ],
            [
                "state_id" => 12,
                "name" => "Anaurilândia",
                "slug" => "anaurilandia",
            ],
            [
                "state_id" => 12,
                "name" => "Angélica",
                "slug" => "angelica",
            ],
            [
                "state_id" => 12,
                "name" => "Antônio João",
                "slug" => "antonio-joao",
            ],
            [
                "state_id" => 12,
                "name" => "Aparecida do Taboado",
                "slug" => "aparecida-do-taboado",
            ],
            [
                "state_id" => 12,
                "name" => "Aquidauana",
                "slug" => "aquidauana",
            ],
            [
                "state_id" => 12,
                "name" => "Aral Moreira",
                "slug" => "aral-moreira",
            ],
            [
                "state_id" => 12,
                "name" => "Bandeirantes",
                "slug" => "bandeirantes",
            ],
            [
                "state_id" => 12,
                "name" => "Bataguassu",
                "slug" => "bataguassu",
            ],
            [
                "state_id" => 12,
                "name" => "Bela Vista",
                "slug" => "bela-vista",
            ],
            [
                "state_id" => 12,
                "name" => "Bodoquena",
                "slug" => "bodoquena",
            ],
            [
                "state_id" => 12,
                "name" => "Bonito",
                "slug" => "bonito",
            ],
            [
                "state_id" => 12,
                "name" => "Brasilândia",
                "slug" => "brasilandia",
            ],
            [
                "state_id" => 12,
                "name" => "Caarapó",
                "slug" => "caarapo",
            ],
            [
                "state_id" => 12,
                "name" => "Camapuã",
                "slug" => "camapua",
            ],
            [
                "state_id" => 12,
                "name" => "Campo Grande",
                "slug" => "campo-grande",
            ],
            [
                "state_id" => 12,
                "name" => "Caracol",
                "slug" => "caracol",
            ],
            [
                "state_id" => 12,
                "name" => "Cassilândia",
                "slug" => "cassilandia",
            ],
            [
                "state_id" => 12,
                "name" => "Chapadão do Sul",
                "slug" => "chapadao-do-sul",
            ],
            [
                "state_id" => 12,
                "name" => "Corguinho",
                "slug" => "corguinho",
            ],
            [
                "state_id" => 12,
                "name" => "Coronel Sapucaia",
                "slug" => "coronel-sapucaia",
            ],
            [
                "state_id" => 12,
                "name" => "Corumbá",
                "slug" => "corumba",
            ],
            [
                "state_id" => 12,
                "name" => "Costa Rica",
                "slug" => "costa-rica",
            ],
            [
                "state_id" => 12,
                "name" => "Coxim",
                "slug" => "coxim",
            ],
            [
                "state_id" => 12,
                "name" => "Deodápolis",
                "slug" => "deodapolis",
            ],
            [
                "state_id" => 12,
                "name" => "Dois Irmãos do Buriti",
                "slug" => "dois-irmaos-do-buriti",
            ],
            [
                "state_id" => 12,
                "name" => "Douradina",
                "slug" => "douradina",
            ],
            [
                "state_id" => 12,
                "name" => "Dourados",
                "slug" => "dourados",
            ],
            [
                "state_id" => 12,
                "name" => "Eldorado",
                "slug" => "eldorado",
            ],
            [
                "state_id" => 12,
                "name" => "Fátima do Sul",
                "slug" => "fatima-do-sul",
            ],
            [
                "state_id" => 12,
                "name" => "Figueirão",
                "slug" => "figueirao",
            ],
            [
                "state_id" => 12,
                "name" => "Glória de Dourados",
                "slug" => "gloria-de-dourados",
            ],
            [
                "state_id" => 12,
                "name" => "Guia Lopes da Laguna",
                "slug" => "guia-lopes-da-laguna",
            ],
            [
                "state_id" => 12,
                "name" => "Iguatemi",
                "slug" => "iguatemi",
            ],
            [
                "state_id" => 12,
                "name" => "Inocência",
                "slug" => "inocencia",
            ],
            [
                "state_id" => 12,
                "name" => "Itaporã",
                "slug" => "itapora",
            ],
            [
                "state_id" => 12,
                "name" => "Itaquiraí",
                "slug" => "itaquirai",
            ],
            [
                "state_id" => 12,
                "name" => "Ivinhema",
                "slug" => "ivinhema",
            ],
            [
                "state_id" => 12,
                "name" => "Japorã",
                "slug" => "japora",
            ],
            [
                "state_id" => 12,
                "name" => "Jaraguari",
                "slug" => "jaraguari",
            ],
            [
                "state_id" => 12,
                "name" => "Jardim",
                "slug" => "jardim",
            ],
            [
                "state_id" => 12,
                "name" => "Jateí",
                "slug" => "jatei",
            ],
            [
                "state_id" => 12,
                "name" => "Juti",
                "slug" => "juti",
            ],
            [
                "state_id" => 12,
                "name" => "Ladário",
                "slug" => "ladario",
            ],
            [
                "state_id" => 12,
                "name" => "Laguna Carapã",
                "slug" => "laguna-carapa",
            ],
            [
                "state_id" => 12,
                "name" => "Maracaju",
                "slug" => "maracaju",
            ],
            [
                "state_id" => 12,
                "name" => "Miranda",
                "slug" => "miranda",
            ],
            [
                "state_id" => 12,
                "name" => "Mundo Novo",
                "slug" => "mundo-novo",
            ],
            [
                "state_id" => 12,
                "name" => "Naviraí",
                "slug" => "navirai",
            ],
            [
                "state_id" => 12,
                "name" => "Nioaque",
                "slug" => "nioaque",
            ],
            [
                "state_id" => 12,
                "name" => "Nova Alvorada do Sul",
                "slug" => "nova-alvorada-do-sul",
            ],
            [
                "state_id" => 12,
                "name" => "Nova Andradina",
                "slug" => "nova-andradina",
            ],
            [
                "state_id" => 12,
                "name" => "Novo Horizonte do Sul",
                "slug" => "novo-horizonte-do-sul",
            ],
            [
                "state_id" => 12,
                "name" => "Paranaíba",
                "slug" => "paranaiba",
            ],
            [
                "state_id" => 12,
                "name" => "Paranhos",
                "slug" => "paranhos",
            ],
            [
                "state_id" => 12,
                "name" => "Pedro Gomes",
                "slug" => "pedro-gomes",
            ],
            [
                "state_id" => 12,
                "name" => "Ponta Porã",
                "slug" => "ponta-pora",
            ],
            [
                "state_id" => 12,
                "name" => "Porto Murtinho",
                "slug" => "porto-murtinho",
            ],
            [
                "state_id" => 12,
                "name" => "Ribas do Rio Pardo",
                "slug" => "ribas-do-rio-pardo",
            ],
            [
                "state_id" => 12,
                "name" => "Rio Brilhante",
                "slug" => "rio-brilhante",
            ],
            [
                "state_id" => 12,
                "name" => "Rio Negro",
                "slug" => "rio-negro",
            ],
            [
                "state_id" => 12,
                "name" => "Rio Verde de Mato Grosso",
                "slug" => "rio-verde-de-mato-grosso",
            ],
            [
                "state_id" => 12,
                "name" => "Rochedo",
                "slug" => "rochedo",
            ],
            [
                "state_id" => 12,
                "name" => "Santa Rita do Pardo",
                "slug" => "santa-rita-do-pardo",
            ],
            [
                "state_id" => 12,
                "name" => "São Gabriel do Oeste",
                "slug" => "sao-gabriel-do-oeste",
            ],
            [
                "state_id" => 12,
                "name" => "Selvíria",
                "slug" => "selviria",
            ],
            [
                "state_id" => 12,
                "name" => "Sete Quedas",
                "slug" => "sete-quedas",
            ],
            [
                "state_id" => 12,
                "name" => "Sidrolândia",
                "slug" => "sidrolandia",
            ],
            [
                "state_id" => 12,
                "name" => "Sonora",
                "slug" => "sonora",
            ],
            [
                "state_id" => 12,
                "name" => "Tacuru",
                "slug" => "tacuru",
            ],
            [
                "state_id" => 12,
                "name" => "Taquarussu",
                "slug" => "taquarussu",
            ],
            [
                "state_id" => 12,
                "name" => "Terenos",
                "slug" => "terenos",
            ],
            [
                "state_id" => 12,
                "name" => "Três Lagoas",
                "slug" => "tres-lagoas",
            ],
            [
                "state_id" => 12,
                "name" => "Vicentina",
                "slug" => "vicentina",
            ],
            [
                "state_id" => 11,
                "name" => "Abadia dos Dourados",
                "slug" => "abadia-dos-dourados",
            ],
            [
                "state_id" => 11,
                "name" => "Abaeté",
                "slug" => "abaete",
            ],
            [
                "state_id" => 11,
                "name" => "Abre Campo",
                "slug" => "abre-campo",
            ],
            [
                "state_id" => 11,
                "name" => "Acaiaca",
                "slug" => "acaiaca",
            ],
            [
                "state_id" => 11,
                "name" => "Açucena",
                "slug" => "acucena",
            ],
            [
                "state_id" => 11,
                "name" => "Água Boa",
                "slug" => "agua-boa",
            ],
            [
                "state_id" => 11,
                "name" => "Água Comprida",
                "slug" => "agua-comprida",
            ],
            [
                "state_id" => 11,
                "name" => "Aguanil",
                "slug" => "aguanil",
            ],
            [
                "state_id" => 11,
                "name" => "Águas Formosas",
                "slug" => "aguas-formosas",
            ],
            [
                "state_id" => 11,
                "name" => "Águas Vermelhas",
                "slug" => "aguas-vermelhas",
            ],
            [
                "state_id" => 11,
                "name" => "Aimorés",
                "slug" => "aimores",
            ],
            [
                "state_id" => 11,
                "name" => "Aiuruoca",
                "slug" => "aiuruoca",
            ],
            [
                "state_id" => 11,
                "name" => "Alagoa",
                "slug" => "alagoa",
            ],
            [
                "state_id" => 11,
                "name" => "Albertina",
                "slug" => "albertina",
            ],
            [
                "state_id" => 11,
                "name" => "Além Paraíba",
                "slug" => "alem-paraiba",
            ],
            [
                "state_id" => 11,
                "name" => "Alfenas",
                "slug" => "alfenas",
            ],
            [
                "state_id" => 11,
                "name" => "Alfredo Vasconcelos",
                "slug" => "alfredo-vasconcelos",
            ],
            [
                "state_id" => 11,
                "name" => "Almenara",
                "slug" => "almenara",
            ],
            [
                "state_id" => 11,
                "name" => "Alpercata",
                "slug" => "alpercata",
            ],
            [
                "state_id" => 11,
                "name" => "Alpinópolis",
                "slug" => "alpinopolis",
            ],
            [
                "state_id" => 11,
                "name" => "Alterosa",
                "slug" => "alterosa",
            ],
            [
                "state_id" => 11,
                "name" => "Alto Caparaó",
                "slug" => "alto-caparao",
            ],
            [
                "state_id" => 11,
                "name" => "Alto Jequitibá",
                "slug" => "alto-jequitiba",
            ],
            [
                "state_id" => 11,
                "name" => "Alto Rio Doce",
                "slug" => "alto-rio-doce",
            ],
            [
                "state_id" => 11,
                "name" => "Alvarenga",
                "slug" => "alvarenga",
            ],
            [
                "state_id" => 11,
                "name" => "Alvinópolis",
                "slug" => "alvinopolis",
            ],
            [
                "state_id" => 11,
                "name" => "Alvorada de Minas",
                "slug" => "alvorada-de-minas",
            ],
            [
                "state_id" => 11,
                "name" => "Amparo do Serra",
                "slug" => "amparo-do-serra",
            ],
            [
                "state_id" => 11,
                "name" => "Andradas",
                "slug" => "andradas",
            ],
            [
                "state_id" => 11,
                "name" => "Andrelândia",
                "slug" => "andrelandia",
            ],
            [
                "state_id" => 11,
                "name" => "Angelândia",
                "slug" => "angelandia",
            ],
            [
                "state_id" => 11,
                "name" => "Antônio Carlos",
                "slug" => "antonio-carlos",
            ],
            [
                "state_id" => 11,
                "name" => "Antônio Dias",
                "slug" => "antonio-dias",
            ],
            [
                "state_id" => 11,
                "name" => "Antônio Prado de Minas",
                "slug" => "antonio-prado-de-minas",
            ],
            [
                "state_id" => 11,
                "name" => "Araçaí",
                "slug" => "aracai",
            ],
            [
                "state_id" => 11,
                "name" => "Aracitaba",
                "slug" => "aracitaba",
            ],
            [
                "state_id" => 11,
                "name" => "Araçuaí",
                "slug" => "aracuai",
            ],
            [
                "state_id" => 11,
                "name" => "Araguari",
                "slug" => "araguari",
            ],
            [
                "state_id" => 11,
                "name" => "Arantina",
                "slug" => "arantina",
            ],
            [
                "state_id" => 11,
                "name" => "Araponga",
                "slug" => "araponga",
            ],
            [
                "state_id" => 11,
                "name" => "Araporã",
                "slug" => "arapora",
            ],
            [
                "state_id" => 11,
                "name" => "Arapuá",
                "slug" => "arapua",
            ],
            [
                "state_id" => 11,
                "name" => "Araújos",
                "slug" => "araujos",
            ],
            [
                "state_id" => 11,
                "name" => "Araxá",
                "slug" => "araxa",
            ],
            [
                "state_id" => 11,
                "name" => "Arceburgo",
                "slug" => "arceburgo",
            ],
            [
                "state_id" => 11,
                "name" => "Arcos",
                "slug" => "arcos",
            ],
            [
                "state_id" => 11,
                "name" => "Areado",
                "slug" => "areado",
            ],
            [
                "state_id" => 11,
                "name" => "Argirita",
                "slug" => "argirita",
            ],
            [
                "state_id" => 11,
                "name" => "Aricanduva",
                "slug" => "aricanduva",
            ],
            [
                "state_id" => 11,
                "name" => "Arinos",
                "slug" => "arinos",
            ],
            [
                "state_id" => 11,
                "name" => "Astolfo Dutra",
                "slug" => "astolfo-dutra",
            ],
            [
                "state_id" => 11,
                "name" => "Ataléia",
                "slug" => "ataleia",
            ],
            [
                "state_id" => 11,
                "name" => "Augusto de Lima",
                "slug" => "augusto-de-lima",
            ],
            [
                "state_id" => 11,
                "name" => "Baependi",
                "slug" => "baependi",
            ],
            [
                "state_id" => 11,
                "name" => "Baldim",
                "slug" => "baldim",
            ],
            [
                "state_id" => 11,
                "name" => "Bambuí",
                "slug" => "bambui",
            ],
            [
                "state_id" => 11,
                "name" => "Bandeira",
                "slug" => "bandeira",
            ],
            [
                "state_id" => 11,
                "name" => "Bandeira do Sul",
                "slug" => "bandeira-do-sul",
            ],
            [
                "state_id" => 11,
                "name" => "Barão de Cocais",
                "slug" => "barao-de-cocais",
            ],
            [
                "state_id" => 11,
                "name" => "Barão de Monte Alto",
                "slug" => "barao-de-monte-alto",
            ],
            [
                "state_id" => 11,
                "name" => "Barbacena",
                "slug" => "barbacena",
            ],
            [
                "state_id" => 11,
                "name" => "Barra Longa",
                "slug" => "barra-longa",
            ],
            [
                "state_id" => 11,
                "name" => "Barroso",
                "slug" => "barroso",
            ],
            [
                "state_id" => 11,
                "name" => "Bela Vista de Minas",
                "slug" => "bela-vista-de-minas",
            ],
            [
                "state_id" => 11,
                "name" => "Belmiro Braga",
                "slug" => "belmiro-braga",
            ],
            [
                "state_id" => 11,
                "name" => "Belo Horizonte",
                "slug" => "belo-horizonte",
            ],
            [
                "state_id" => 11,
                "name" => "Belo Oriente",
                "slug" => "belo-oriente",
            ],
            [
                "state_id" => 11,
                "name" => "Belo Vale",
                "slug" => "belo-vale",
            ],
            [
                "state_id" => 11,
                "name" => "Berilo",
                "slug" => "berilo",
            ],
            [
                "state_id" => 11,
                "name" => "Berizal",
                "slug" => "berizal",
            ],
            [
                "state_id" => 11,
                "name" => "Bertópolis",
                "slug" => "bertopolis",
            ],
            [
                "state_id" => 11,
                "name" => "Betim",
                "slug" => "betim",
            ],
            [
                "state_id" => 11,
                "name" => "Cachoeira de Pajeú",
                "slug" => "cachoeira-de-pajeu",
            ],
            [
                "state_id" => 11,
                "name" => "Cachoeira Dourada",
                "slug" => "cachoeira-dourada",
            ],
            [
                "state_id" => 11,
                "name" => "Caetanópolis",
                "slug" => "caetanopolis",
            ],
            [
                "state_id" => 11,
                "name" => "Caeté",
                "slug" => "caete",
            ],
            [
                "state_id" => 11,
                "name" => "Caiana",
                "slug" => "caiana",
            ],
            [
                "state_id" => 11,
                "name" => "Cajuri",
                "slug" => "cajuri",
            ],
            [
                "state_id" => 11,
                "name" => "Caldas",
                "slug" => "caldas",
            ],
            [
                "state_id" => 11,
                "name" => "Camacho",
                "slug" => "camacho",
            ],
            [
                "state_id" => 11,
                "name" => "Camanducaia",
                "slug" => "camanducaia",
            ],
            [
                "state_id" => 11,
                "name" => "Cambuí",
                "slug" => "cambui",
            ],
            [
                "state_id" => 11,
                "name" => "Cambuquira",
                "slug" => "cambuquira",
            ],
            [
                "state_id" => 11,
                "name" => "Campanário",
                "slug" => "campanario",
            ],
            [
                "state_id" => 11,
                "name" => "Campanha",
                "slug" => "campanha",
            ],
            [
                "state_id" => 11,
                "name" => "Campestre",
                "slug" => "campestre",
            ],
            [
                "state_id" => 11,
                "name" => "Campina Verde",
                "slug" => "campina-verde",
            ],
            [
                "state_id" => 11,
                "name" => "Campo Azul",
                "slug" => "campo-azul",
            ],
            [
                "state_id" => 11,
                "name" => "Campo Belo",
                "slug" => "campo-belo",
            ],
            [
                "state_id" => 11,
                "name" => "Campo do Meio",
                "slug" => "campo-do-meio",
            ],
            [
                "state_id" => 11,
                "name" => "Campo Florido",
                "slug" => "campo-florido",
            ],
            [
                "state_id" => 11,
                "name" => "Campos Altos",
                "slug" => "campos-altos",
            ],
            [
                "state_id" => 11,
                "name" => "Campos Gerais",
                "slug" => "campos-gerais",
            ],
            [
                "state_id" => 11,
                "name" => "Cana Verde",
                "slug" => "cana-verde",
            ],
            [
                "state_id" => 11,
                "name" => "Canaã",
                "slug" => "canaa",
            ],
            [
                "state_id" => 11,
                "name" => "Canápolis",
                "slug" => "canapolis",
            ],
            [
                "state_id" => 11,
                "name" => "Candeias",
                "slug" => "candeias",
            ],
            [
                "state_id" => 11,
                "name" => "Cantagalo",
                "slug" => "cantagalo",
            ],
            [
                "state_id" => 11,
                "name" => "Caparaó",
                "slug" => "caparao",
            ],
            [
                "state_id" => 11,
                "name" => "Capela Nova",
                "slug" => "capela-nova",
            ],
            [
                "state_id" => 11,
                "name" => "Capelinha",
                "slug" => "capelinha",
            ],
            [
                "state_id" => 11,
                "name" => "Capetinga",
                "slug" => "capetinga",
            ],
            [
                "state_id" => 11,
                "name" => "Capim Branco",
                "slug" => "capim-branco",
            ],
            [
                "state_id" => 11,
                "name" => "Capinópolis",
                "slug" => "capinopolis",
            ],
            [
                "state_id" => 11,
                "name" => "Capitão Andrade",
                "slug" => "capitao-andrade",
            ],
            [
                "state_id" => 11,
                "name" => "Capitão Enéas",
                "slug" => "capitao-eneas",
            ],
            [
                "state_id" => 11,
                "name" => "Capitólio",
                "slug" => "capitolio",
            ],
            [
                "state_id" => 11,
                "name" => "Caputira",
                "slug" => "caputira",
            ],
            [
                "state_id" => 11,
                "name" => "Caraí",
                "slug" => "carai",
            ],
            [
                "state_id" => 11,
                "name" => "Caranaíba",
                "slug" => "caranaiba",
            ],
            [
                "state_id" => 11,
                "name" => "Carandaí",
                "slug" => "carandai",
            ],
            [
                "state_id" => 11,
                "name" => "Carangola",
                "slug" => "carangola",
            ],
            [
                "state_id" => 11,
                "name" => "Caratinga",
                "slug" => "caratinga",
            ],
            [
                "state_id" => 11,
                "name" => "Carbonita",
                "slug" => "carbonita",
            ],
            [
                "state_id" => 11,
                "name" => "Careaçu",
                "slug" => "careacu",
            ],
            [
                "state_id" => 11,
                "name" => "Carlos Chagas",
                "slug" => "carlos-chagas",
            ],
            [
                "state_id" => 11,
                "name" => "Carmésia",
                "slug" => "carmesia",
            ],
            [
                "state_id" => 11,
                "name" => "Carmo da Cachoeira",
                "slug" => "carmo-da-cachoeira",
            ],
            [
                "state_id" => 11,
                "name" => "Carmo da Mata",
                "slug" => "carmo-da-mata",
            ],
            [
                "state_id" => 11,
                "name" => "Carmo de Minas",
                "slug" => "carmo-de-minas",
            ],
            [
                "state_id" => 11,
                "name" => "Carmo do Cajuru",
                "slug" => "carmo-do-cajuru",
            ],
            [
                "state_id" => 11,
                "name" => "Carmo do Paranaíba",
                "slug" => "carmo-do-paranaiba",
            ],
            [
                "state_id" => 11,
                "name" => "Carmo do Rio Claro",
                "slug" => "carmo-do-rio-claro",
            ],
            [
                "state_id" => 11,
                "name" => "Carmópolis de Minas",
                "slug" => "carmopolis-de-minas",
            ],
            [
                "state_id" => 11,
                "name" => "Carneirinho",
                "slug" => "carneirinho",
            ],
            [
                "state_id" => 11,
                "name" => "Carrancas",
                "slug" => "carrancas",
            ],
            [
                "state_id" => 11,
                "name" => "Carvalhópolis",
                "slug" => "carvalhopolis",
            ],
            [
                "state_id" => 11,
                "name" => "Carvalhos",
                "slug" => "carvalhos",
            ],
            [
                "state_id" => 11,
                "name" => "Casa Grande",
                "slug" => "casa-grande",
            ],
            [
                "state_id" => 11,
                "name" => "Cascalho Rico",
                "slug" => "cascalho-rico",
            ],
            [
                "state_id" => 11,
                "name" => "Cássia",
                "slug" => "cassia",
            ],
            [
                "state_id" => 11,
                "name" => "Cataguases",
                "slug" => "cataguases",
            ],
            [
                "state_id" => 11,
                "name" => "Catas Altas",
                "slug" => "catas-altas",
            ],
            [
                "state_id" => 11,
                "name" => "Catas Altas da Noruega",
                "slug" => "catas-altas-da-noruega",
            ],
            [
                "state_id" => 11,
                "name" => "Catuji",
                "slug" => "catuji",
            ],
            [
                "state_id" => 11,
                "name" => "Catuti",
                "slug" => "catuti",
            ],
            [
                "state_id" => 11,
                "name" => "Caxambu",
                "slug" => "caxambu",
            ],
            [
                "state_id" => 11,
                "name" => "Cedro do Abaeté",
                "slug" => "cedro-do-abaete",
            ],
            [
                "state_id" => 11,
                "name" => "Central de Minas",
                "slug" => "central-de-minas",
            ],
            [
                "state_id" => 11,
                "name" => "Centralina",
                "slug" => "centralina",
            ],
            [
                "state_id" => 11,
                "name" => "Chácara",
                "slug" => "chacara",
            ],
            [
                "state_id" => 11,
                "name" => "Chalé",
                "slug" => "chale",
            ],
            [
                "state_id" => 11,
                "name" => "Chapada do Norte",
                "slug" => "chapada-do-norte",
            ],
            [
                "state_id" => 11,
                "name" => "Chapada Gaúcha",
                "slug" => "chapada-gaucha",
            ],
            [
                "state_id" => 11,
                "name" => "Chiador",
                "slug" => "chiador",
            ],
            [
                "state_id" => 11,
                "name" => "Cipotânea",
                "slug" => "cipotanea",
            ],
            [
                "state_id" => 11,
                "name" => "Claraval",
                "slug" => "claraval",
            ],
            [
                "state_id" => 11,
                "name" => "Claro dos Poções",
                "slug" => "claro-dos-pocoes",
            ],
            [
                "state_id" => 11,
                "name" => "Cláudio",
                "slug" => "claudio",
            ],
            [
                "state_id" => 11,
                "name" => "Coimbra",
                "slug" => "coimbra",
            ],
            [
                "state_id" => 11,
                "name" => "Coluna",
                "slug" => "coluna",
            ],
            [
                "state_id" => 11,
                "name" => "Comendador Gomes",
                "slug" => "comendador-gomes",
            ],
            [
                "state_id" => 11,
                "name" => "Comercinho",
                "slug" => "comercinho",
            ],
            [
                "state_id" => 11,
                "name" => "Conceição da Aparecida",
                "slug" => "conceicao-da-aparecida",
            ],
            [
                "state_id" => 11,
                "name" => "Conceição da Barra de Minas",
                "slug" => "conceicao-da-barra-de-minas",
            ],
            [
                "state_id" => 11,
                "name" => "Conceição das Alagoas",
                "slug" => "conceicao-das-alagoas",
            ],
            [
                "state_id" => 11,
                "name" => "Conceição das Pedras",
                "slug" => "conceicao-das-pedras",
            ],
            [
                "state_id" => 11,
                "name" => "Conceição de Ipanema",
                "slug" => "conceicao-de-ipanema",
            ],
            [
                "state_id" => 11,
                "name" => "Conceição do Mato Dentro",
                "slug" => "conceicao-do-mato-dentro",
            ],
            [
                "state_id" => 11,
                "name" => "Conceição do Pará",
                "slug" => "conceicao-do-para",
            ],
            [
                "state_id" => 11,
                "name" => "Conceição do Rio Verde",
                "slug" => "conceicao-do-rio-verde",
            ],
            [
                "state_id" => 11,
                "name" => "Conceição dos Ouros",
                "slug" => "conceicao-dos-ouros",
            ],
            [
                "state_id" => 11,
                "name" => "Cônego Marinho",
                "slug" => "conego-marinho",
            ],
            [
                "state_id" => 11,
                "name" => "Confins",
                "slug" => "confins",
            ],
            [
                "state_id" => 11,
                "name" => "Congonhal",
                "slug" => "congonhal",
            ],
            [
                "state_id" => 11,
                "name" => "Congonhas",
                "slug" => "congonhas",
            ],
            [
                "state_id" => 11,
                "name" => "Congonhas do Norte",
                "slug" => "congonhas-do-norte",
            ],
            [
                "state_id" => 11,
                "name" => "Conquista",
                "slug" => "conquista",
            ],
            [
                "state_id" => 11,
                "name" => "Conselheiro Lafaiete",
                "slug" => "conselheiro-lafaiete",
            ],
            [
                "state_id" => 11,
                "name" => "Conselheiro Pena",
                "slug" => "conselheiro-pena",
            ],
            [
                "state_id" => 11,
                "name" => "Consolação",
                "slug" => "consolacao",
            ],
            [
                "state_id" => 11,
                "name" => "Contagem",
                "slug" => "contagem",
            ],
            [
                "state_id" => 11,
                "name" => "Coqueiral",
                "slug" => "coqueiral",
            ],
            [
                "state_id" => 11,
                "name" => "Coração de Jesus",
                "slug" => "coracao-de-jesus",
            ],
            [
                "state_id" => 11,
                "name" => "Cordisburgo",
                "slug" => "cordisburgo",
            ],
            [
                "state_id" => 11,
                "name" => "Cordislândia",
                "slug" => "cordislandia",
            ],
            [
                "state_id" => 11,
                "name" => "Corinto",
                "slug" => "corinto",
            ],
            [
                "state_id" => 11,
                "name" => "Coroaci",
                "slug" => "coroaci",
            ],
            [
                "state_id" => 11,
                "name" => "Coromandel",
                "slug" => "coromandel",
            ],
            [
                "state_id" => 11,
                "name" => "Coronel Fabriciano",
                "slug" => "coronel-fabriciano",
            ],
            [
                "state_id" => 11,
                "name" => "Coronel Murta",
                "slug" => "coronel-murta",
            ],
            [
                "state_id" => 11,
                "name" => "Coronel Pacheco",
                "slug" => "coronel-pacheco",
            ],
            [
                "state_id" => 11,
                "name" => "Coronel Xavier Chaves",
                "slug" => "coronel-xavier-chaves",
            ],
            [
                "state_id" => 11,
                "name" => "Córrego Danta",
                "slug" => "corrego-danta",
            ],
            [
                "state_id" => 11,
                "name" => "Córrego do Bom Jesus",
                "slug" => "corrego-do-bom-jesus",
            ],
            [
                "state_id" => 11,
                "name" => "Córrego Fundo",
                "slug" => "corrego-fundo",
            ],
            [
                "state_id" => 11,
                "name" => "Córrego Novo",
                "slug" => "corrego-novo",
            ],
            [
                "state_id" => 11,
                "name" => "Couto de Magalhães de Minas",
                "slug" => "couto-de-magalhaes-de-minas",
            ],
            [
                "state_id" => 11,
                "name" => "Crisólita",
                "slug" => "crisolita",
            ],
            [
                "state_id" => 11,
                "name" => "Cristais",
                "slug" => "cristais",
            ],
            [
                "state_id" => 11,
                "name" => "Cristália",
                "slug" => "cristalia",
            ],
            [
                "state_id" => 11,
                "name" => "Cristiano Otoni",
                "slug" => "cristiano-otoni",
            ],
            [
                "state_id" => 11,
                "name" => "Cristina",
                "slug" => "cristina",
            ],
            [
                "state_id" => 11,
                "name" => "Crucilândia",
                "slug" => "crucilandia",
            ],
            [
                "state_id" => 11,
                "name" => "Cruzeiro da Fortaleza",
                "slug" => "cruzeiro-da-fortaleza",
            ],
            [
                "state_id" => 11,
                "name" => "Cruzília",
                "slug" => "cruzilia",
            ],
            [
                "state_id" => 11,
                "name" => "Cuparaque",
                "slug" => "cuparaque",
            ],
            [
                "state_id" => 11,
                "name" => "Curral de Dentro",
                "slug" => "curral-de-dentro",
            ],
            [
                "state_id" => 11,
                "name" => "Curvelo",
                "slug" => "curvelo",
            ],
            [
                "state_id" => 11,
                "name" => "Datas",
                "slug" => "datas",
            ],
            [
                "state_id" => 11,
                "name" => "Delfim Moreira",
                "slug" => "delfim-moreira",
            ],
            [
                "state_id" => 11,
                "name" => "Delfinópolis",
                "slug" => "delfinopolis",
            ],
            [
                "state_id" => 11,
                "name" => "Delta",
                "slug" => "delta",
            ],
            [
                "state_id" => 11,
                "name" => "Descoberto",
                "slug" => "descoberto",
            ],
            [
                "state_id" => 11,
                "name" => "Desterro de Entre Rios",
                "slug" => "desterro-de-entre-rios",
            ],
            [
                "state_id" => 11,
                "name" => "Desterro do Melo",
                "slug" => "desterro-do-melo",
            ],
            [
                "state_id" => 11,
                "name" => "Diamantina",
                "slug" => "diamantina",
            ],
            [
                "state_id" => 11,
                "name" => "Diogo de Vasconcelos",
                "slug" => "diogo-de-vasconcelos",
            ],
            [
                "state_id" => 11,
                "name" => "Dionísio",
                "slug" => "dionisio",
            ],
            [
                "state_id" => 11,
                "name" => "Divinésia",
                "slug" => "divinesia",
            ],
            [
                "state_id" => 11,
                "name" => "Divino",
                "slug" => "divino",
            ],
            [
                "state_id" => 11,
                "name" => "Divino das Laranjeiras",
                "slug" => "divino-das-laranjeiras",
            ],
            [
                "state_id" => 11,
                "name" => "Divinolândia de Minas",
                "slug" => "divinolandia-de-minas",
            ],
            [
                "state_id" => 11,
                "name" => "Divinópolis",
                "slug" => "divinopolis",
            ],
            [
                "state_id" => 11,
                "name" => "Divisa Alegre",
                "slug" => "divisa-alegre",
            ],
            [
                "state_id" => 11,
                "name" => "Divisa Nova",
                "slug" => "divisa-nova",
            ],
            [
                "state_id" => 11,
                "name" => "Divisópolis",
                "slug" => "divisopolis",
            ],
            [
                "state_id" => 11,
                "name" => "Dom Bosco",
                "slug" => "dom-bosco",
            ],
            [
                "state_id" => 11,
                "name" => "Dom Cavati",
                "slug" => "dom-cavati",
            ],
            [
                "state_id" => 11,
                "name" => "Dom Joaquim",
                "slug" => "dom-joaquim",
            ],
            [
                "state_id" => 11,
                "name" => "Dom Silvério",
                "slug" => "dom-silverio",
            ],
            [
                "state_id" => 11,
                "name" => "Dom Viçoso",
                "slug" => "dom-vicoso",
            ],
            [
                "state_id" => 11,
                "name" => "Dona Eusébia",
                "slug" => "dona-eusebia",
            ],
            [
                "state_id" => 11,
                "name" => "Dores de Campos",
                "slug" => "dores-de-campos",
            ],
            [
                "state_id" => 11,
                "name" => "Dores de Guanhães",
                "slug" => "dores-de-guanhaes",
            ],
            [
                "state_id" => 11,
                "name" => "Dores do Indaiá",
                "slug" => "dores-do-indaia",
            ],
            [
                "state_id" => 11,
                "name" => "Dores do Turvo",
                "slug" => "dores-do-turvo",
            ],
            [
                "state_id" => 11,
                "name" => "Doresópolis",
                "slug" => "doresopolis",
            ],
            [
                "state_id" => 11,
                "name" => "Douradoquara",
                "slug" => "douradoquara",
            ],
            [
                "state_id" => 11,
                "name" => "Durandé",
                "slug" => "durande",
            ],
            [
                "state_id" => 11,
                "name" => "Elói Mendes",
                "slug" => "eloi-mendes",
            ],
            [
                "state_id" => 11,
                "name" => "Engenheiro Caldas",
                "slug" => "engenheiro-caldas",
            ],
            [
                "state_id" => 11,
                "name" => "Engenheiro Navarro",
                "slug" => "engenheiro-navarro",
            ],
            [
                "state_id" => 11,
                "name" => "Entre Folhas",
                "slug" => "entre-folhas",
            ],
            [
                "state_id" => 11,
                "name" => "Entre Rios de Minas",
                "slug" => "entre-rios-de-minas",
            ],
            [
                "state_id" => 11,
                "name" => "Ervália",
                "slug" => "ervalia",
            ],
            [
                "state_id" => 11,
                "name" => "Esmeraldas",
                "slug" => "esmeraldas",
            ],
            [
                "state_id" => 11,
                "name" => "Espera Feliz",
                "slug" => "espera-feliz",
            ],
            [
                "state_id" => 11,
                "name" => "Espinosa",
                "slug" => "espinosa",
            ],
            [
                "state_id" => 11,
                "name" => "Espírito Santo do Dourado",
                "slug" => "espirito-santo-do-dourado",
            ],
            [
                "state_id" => 11,
                "name" => "Estiva",
                "slug" => "estiva",
            ],
            [
                "state_id" => 11,
                "name" => "Estrela Dalva",
                "slug" => "estrela-dalva",
            ],
            [
                "state_id" => 11,
                "name" => "Estrela do Indaiá",
                "slug" => "estrela-do-indaia",
            ],
            [
                "state_id" => 11,
                "name" => "Estrela do Sul",
                "slug" => "estrela-do-sul",
            ],
            [
                "state_id" => 11,
                "name" => "Eugenópolis",
                "slug" => "eugenopolis",
            ],
            [
                "state_id" => 11,
                "name" => "Ewbank da Câmara",
                "slug" => "ewbank-da-camara",
            ],
            [
                "state_id" => 11,
                "name" => "Extrema",
                "slug" => "extrema",
            ],
            [
                "state_id" => 11,
                "name" => "Fama",
                "slug" => "fama",
            ],
            [
                "state_id" => 11,
                "name" => "Faria Lemos",
                "slug" => "faria-lemos",
            ],
            [
                "state_id" => 11,
                "name" => "Felício dos Santos",
                "slug" => "felicio-dos-santos",
            ],
            [
                "state_id" => 11,
                "name" => "Felisburgo",
                "slug" => "felisburgo",
            ],
            [
                "state_id" => 11,
                "name" => "Felixlândia",
                "slug" => "felixlandia",
            ],
            [
                "state_id" => 11,
                "name" => "Fernandes Tourinho",
                "slug" => "fernandes-tourinho",
            ],
            [
                "state_id" => 11,
                "name" => "Ferros",
                "slug" => "ferros",
            ],
            [
                "state_id" => 11,
                "name" => "Fervedouro",
                "slug" => "fervedouro",
            ],
            [
                "state_id" => 11,
                "name" => "Florestal",
                "slug" => "florestal",
            ],
            [
                "state_id" => 11,
                "name" => "Formiga",
                "slug" => "formiga",
            ],
            [
                "state_id" => 11,
                "name" => "Formoso",
                "slug" => "formoso",
            ],
            [
                "state_id" => 11,
                "name" => "Fortaleza de Minas",
                "slug" => "fortaleza-de-minas",
            ],
            [
                "state_id" => 11,
                "name" => "Fortuna de Minas",
                "slug" => "fortuna-de-minas",
            ],
            [
                "state_id" => 11,
                "name" => "Francisco Badaró",
                "slug" => "francisco-badaro",
            ],
            [
                "state_id" => 11,
                "name" => "Francisco Dumont",
                "slug" => "francisco-dumont",
            ],
            [
                "state_id" => 11,
                "name" => "Francisco Sá",
                "slug" => "francisco-sa",
            ],
            [
                "state_id" => 11,
                "name" => "Franciscópolis",
                "slug" => "franciscopolis",
            ],
            [
                "state_id" => 11,
                "name" => "Frei Gaspar",
                "slug" => "frei-gaspar",
            ],
            [
                "state_id" => 11,
                "name" => "Frei Inocêncio",
                "slug" => "frei-inocencio",
            ],
            [
                "state_id" => 11,
                "name" => "Frei Lagonegro",
                "slug" => "frei-lagonegro",
            ],
            [
                "state_id" => 11,
                "name" => "Fronteira",
                "slug" => "fronteira",
            ],
            [
                "state_id" => 11,
                "name" => "Fronteira dos Vales",
                "slug" => "fronteira-dos-vales",
            ],
            [
                "state_id" => 11,
                "name" => "Fruta de Leite",
                "slug" => "fruta-de-leite",
            ],
            [
                "state_id" => 11,
                "name" => "Frutal",
                "slug" => "frutal",
            ],
            [
                "state_id" => 11,
                "name" => "Funilândia",
                "slug" => "funilandia",
            ],
            [
                "state_id" => 11,
                "name" => "Galiléia",
                "slug" => "galileia",
            ],
            [
                "state_id" => 11,
                "name" => "Gameleiras",
                "slug" => "gameleiras",
            ],
            [
                "state_id" => 11,
                "name" => "Glaucilândia",
                "slug" => "glaucilandia",
            ],
            [
                "state_id" => 11,
                "name" => "Goiabeira",
                "slug" => "goiabeira",
            ],
            [
                "state_id" => 11,
                "name" => "Goianá",
                "slug" => "goiana",
            ],
            [
                "state_id" => 11,
                "name" => "Gonçalves",
                "slug" => "goncalves",
            ],
            [
                "state_id" => 11,
                "name" => "Gonzaga",
                "slug" => "gonzaga",
            ],
            [
                "state_id" => 11,
                "name" => "Gouveia",
                "slug" => "gouveia",
            ],
            [
                "state_id" => 11,
                "name" => "Governador Valadares",
                "slug" => "governador-valadares",
            ],
            [
                "state_id" => 11,
                "name" => "Grão Mogol",
                "slug" => "grao-mogol",
            ],
            [
                "state_id" => 11,
                "name" => "Grupiara",
                "slug" => "grupiara",
            ],
            [
                "state_id" => 11,
                "name" => "Guanhães",
                "slug" => "guanhaes",
            ],
            [
                "state_id" => 11,
                "name" => "Guapé",
                "slug" => "guape",
            ],
            [
                "state_id" => 11,
                "name" => "Guaraciaba",
                "slug" => "guaraciaba",
            ],
            [
                "state_id" => 11,
                "name" => "Guaraciama",
                "slug" => "guaraciama",
            ],
            [
                "state_id" => 11,
                "name" => "Guaranésia",
                "slug" => "guaranesia",
            ],
            [
                "state_id" => 11,
                "name" => "Guarani",
                "slug" => "guarani",
            ],
            [
                "state_id" => 11,
                "name" => "Guarará",
                "slug" => "guarara",
            ],
            [
                "state_id" => 11,
                "name" => "Guarda-Mor",
                "slug" => "guarda-mor",
            ],
            [
                "state_id" => 11,
                "name" => "Guaxupé",
                "slug" => "guaxupe",
            ],
            [
                "state_id" => 11,
                "name" => "Guidoval",
                "slug" => "guidoval",
            ],
            [
                "state_id" => 11,
                "name" => "Guimarânia",
                "slug" => "guimarania",
            ],
            [
                "state_id" => 11,
                "name" => "Guiricema",
                "slug" => "guiricema",
            ],
            [
                "state_id" => 11,
                "name" => "Gurinhatã",
                "slug" => "gurinhata",
            ],
            [
                "state_id" => 11,
                "name" => "Heliodora",
                "slug" => "heliodora",
            ],
            [
                "state_id" => 11,
                "name" => "Iapu",
                "slug" => "iapu",
            ],
            [
                "state_id" => 11,
                "name" => "Ibertioga",
                "slug" => "ibertioga",
            ],
            [
                "state_id" => 11,
                "name" => "Ibiá",
                "slug" => "ibia",
            ],
            [
                "state_id" => 11,
                "name" => "Ibiaí",
                "slug" => "ibiai",
            ],
            [
                "state_id" => 11,
                "name" => "Ibiracatu",
                "slug" => "ibiracatu",
            ],
            [
                "state_id" => 11,
                "name" => "Ibiraci",
                "slug" => "ibiraci",
            ],
            [
                "state_id" => 11,
                "name" => "Ibirité",
                "slug" => "ibirite",
            ],
            [
                "state_id" => 11,
                "name" => "Ibitiúra de Minas",
                "slug" => "ibitiura-de-minas",
            ],
            [
                "state_id" => 11,
                "name" => "Ibituruna",
                "slug" => "ibituruna",
            ],
            [
                "state_id" => 11,
                "name" => "Icaraí de Minas",
                "slug" => "icarai-de-minas",
            ],
            [
                "state_id" => 11,
                "name" => "Igarapé",
                "slug" => "igarape",
            ],
            [
                "state_id" => 11,
                "name" => "Igaratinga",
                "slug" => "igaratinga",
            ],
            [
                "state_id" => 11,
                "name" => "Iguatama",
                "slug" => "iguatama",
            ],
            [
                "state_id" => 11,
                "name" => "Ijaci",
                "slug" => "ijaci",
            ],
            [
                "state_id" => 11,
                "name" => "Ilicínea",
                "slug" => "ilicinea",
            ],
            [
                "state_id" => 11,
                "name" => "Imbé de Minas",
                "slug" => "imbe-de-minas",
            ],
            [
                "state_id" => 11,
                "name" => "Inconfidentes",
                "slug" => "inconfidentes",
            ],
            [
                "state_id" => 11,
                "name" => "Indaiabira",
                "slug" => "indaiabira",
            ],
            [
                "state_id" => 11,
                "name" => "Indianópolis",
                "slug" => "indianopolis",
            ],
            [
                "state_id" => 11,
                "name" => "Ingaí",
                "slug" => "ingai",
            ],
            [
                "state_id" => 11,
                "name" => "Inhapim",
                "slug" => "inhapim",
            ],
            [
                "state_id" => 11,
                "name" => "Inhaúma",
                "slug" => "inhauma",
            ],
            [
                "state_id" => 11,
                "name" => "Inimutaba",
                "slug" => "inimutaba",
            ],
            [
                "state_id" => 11,
                "name" => "Ipaba",
                "slug" => "ipaba",
            ],
            [
                "state_id" => 11,
                "name" => "Ipanema",
                "slug" => "ipanema",
            ],
            [
                "state_id" => 11,
                "name" => "Ipatinga",
                "slug" => "ipatinga",
            ],
            [
                "state_id" => 11,
                "name" => "Ipiaçu",
                "slug" => "ipiacu",
            ],
            [
                "state_id" => 11,
                "name" => "Ipuiúna",
                "slug" => "ipuiuna",
            ],
            [
                "state_id" => 11,
                "name" => "Iraí de Minas",
                "slug" => "irai-de-minas",
            ],
            [
                "state_id" => 11,
                "name" => "Itabira",
                "slug" => "itabira",
            ],
            [
                "state_id" => 11,
                "name" => "Itabirito",
                "slug" => "itabirito",
            ],
            [
                "state_id" => 11,
                "name" => "Itacambira",
                "slug" => "itacambira",
            ],
            [
                "state_id" => 11,
                "name" => "Itacarambi",
                "slug" => "itacarambi",
            ],
            [
                "state_id" => 11,
                "name" => "Itaguara",
                "slug" => "itaguara",
            ],
            [
                "state_id" => 11,
                "name" => "Itaipé",
                "slug" => "itaipe",
            ],
            [
                "state_id" => 11,
                "name" => "Itajubá",
                "slug" => "itajuba",
            ],
            [
                "state_id" => 11,
                "name" => "Itamarandiba",
                "slug" => "itamarandiba",
            ],
            [
                "state_id" => 11,
                "name" => "Itamarati de Minas",
                "slug" => "itamarati-de-minas",
            ],
            [
                "state_id" => 11,
                "name" => "Itambacuri",
                "slug" => "itambacuri",
            ],
            [
                "state_id" => 11,
                "name" => "Itambé do Mato Dentro",
                "slug" => "itambe-do-mato-dentro",
            ],
            [
                "state_id" => 11,
                "name" => "Itamogi",
                "slug" => "itamogi",
            ],
            [
                "state_id" => 11,
                "name" => "Itamonte",
                "slug" => "itamonte",
            ],
            [
                "state_id" => 11,
                "name" => "Itanhandu",
                "slug" => "itanhandu",
            ],
            [
                "state_id" => 11,
                "name" => "Itanhomi",
                "slug" => "itanhomi",
            ],
            [
                "state_id" => 11,
                "name" => "Itaobim",
                "slug" => "itaobim",
            ],
            [
                "state_id" => 11,
                "name" => "Itapagipe",
                "slug" => "itapagipe",
            ],
            [
                "state_id" => 11,
                "name" => "Itapecerica",
                "slug" => "itapecerica",
            ],
            [
                "state_id" => 11,
                "name" => "Itapeva",
                "slug" => "itapeva",
            ],
            [
                "state_id" => 11,
                "name" => "Itatiaiuçu",
                "slug" => "itatiaiucu",
            ],
            [
                "state_id" => 11,
                "name" => "Itaú de Minas",
                "slug" => "itau-de-minas",
            ],
            [
                "state_id" => 11,
                "name" => "Itaúna",
                "slug" => "itauna",
            ],
            [
                "state_id" => 11,
                "name" => "Itaverava",
                "slug" => "itaverava",
            ],
            [
                "state_id" => 11,
                "name" => "Itinga",
                "slug" => "itinga",
            ],
            [
                "state_id" => 11,
                "name" => "Itueta",
                "slug" => "itueta",
            ],
            [
                "state_id" => 11,
                "name" => "Ituiutaba",
                "slug" => "ituiutaba",
            ],
            [
                "state_id" => 11,
                "name" => "Itumirim",
                "slug" => "itumirim",
            ],
            [
                "state_id" => 11,
                "name" => "Iturama",
                "slug" => "iturama",
            ],
            [
                "state_id" => 11,
                "name" => "Itutinga",
                "slug" => "itutinga",
            ],
            [
                "state_id" => 11,
                "name" => "Jaboticatubas",
                "slug" => "jaboticatubas",
            ],
            [
                "state_id" => 11,
                "name" => "Jacinto",
                "slug" => "jacinto",
            ],
            [
                "state_id" => 11,
                "name" => "Jacuí",
                "slug" => "jacui",
            ],
            [
                "state_id" => 11,
                "name" => "Jacutinga",
                "slug" => "jacutinga",
            ],
            [
                "state_id" => 11,
                "name" => "Jaguaraçu",
                "slug" => "jaguaracu",
            ],
            [
                "state_id" => 11,
                "name" => "Jaíba",
                "slug" => "jaiba",
            ],
            [
                "state_id" => 11,
                "name" => "Jampruca",
                "slug" => "jampruca",
            ],
            [
                "state_id" => 11,
                "name" => "Janaúba",
                "slug" => "janauba",
            ],
            [
                "state_id" => 11,
                "name" => "Januária",
                "slug" => "januaria",
            ],
            [
                "state_id" => 11,
                "name" => "Japaraíba",
                "slug" => "japaraiba",
            ],
            [
                "state_id" => 11,
                "name" => "Japonvar",
                "slug" => "japonvar",
            ],
            [
                "state_id" => 11,
                "name" => "Jeceaba",
                "slug" => "jeceaba",
            ],
            [
                "state_id" => 11,
                "name" => "Jenipapo de Minas",
                "slug" => "jenipapo-de-minas",
            ],
            [
                "state_id" => 11,
                "name" => "Jequeri",
                "slug" => "jequeri",
            ],
            [
                "state_id" => 11,
                "name" => "Jequitaí",
                "slug" => "jequitai",
            ],
            [
                "state_id" => 11,
                "name" => "Jequitibá",
                "slug" => "jequitiba",
            ],
            [
                "state_id" => 11,
                "name" => "Jequitinhonha",
                "slug" => "jequitinhonha",
            ],
            [
                "state_id" => 11,
                "name" => "Jesuânia",
                "slug" => "jesuania",
            ],
            [
                "state_id" => 11,
                "name" => "Joaíma",
                "slug" => "joaima",
            ],
            [
                "state_id" => 11,
                "name" => "Joanésia",
                "slug" => "joanesia",
            ],
            [
                "state_id" => 11,
                "name" => "João Monlevade",
                "slug" => "joao-monlevade",
            ],
            [
                "state_id" => 11,
                "name" => "João Pinheiro",
                "slug" => "joao-pinheiro",
            ],
            [
                "state_id" => 11,
                "name" => "Joaquim Felício",
                "slug" => "joaquim-felicio",
            ],
            [
                "state_id" => 11,
                "name" => "Jordânia",
                "slug" => "jordania",
            ],
            [
                "state_id" => 11,
                "name" => "José Gonçalves de Minas",
                "slug" => "jose-goncalves-de-minas",
            ],
            [
                "state_id" => 11,
                "name" => "José Raydan",
                "slug" => "jose-raydan",
            ],
            [
                "state_id" => 11,
                "name" => "Josenópolis",
                "slug" => "josenopolis",
            ],
            [
                "state_id" => 11,
                "name" => "Juatuba",
                "slug" => "juatuba",
            ],
            [
                "state_id" => 11,
                "name" => "Juiz de Fora",
                "slug" => "juiz-de-fora",
            ],
            [
                "state_id" => 11,
                "name" => "Juramento",
                "slug" => "juramento",
            ],
            [
                "state_id" => 11,
                "name" => "Juruaia",
                "slug" => "juruaia",
            ],
            [
                "state_id" => 11,
                "name" => "Juvenília",
                "slug" => "juvenilia",
            ],
            [
                "state_id" => 11,
                "name" => "Ladainha",
                "slug" => "ladainha",
            ],
            [
                "state_id" => 11,
                "name" => "Lagamar",
                "slug" => "lagamar",
            ],
            [
                "state_id" => 11,
                "name" => "Lagoa da Prata",
                "slug" => "lagoa-da-prata",
            ],
            [
                "state_id" => 11,
                "name" => "Lagoa dos Patos",
                "slug" => "lagoa-dos-patos",
            ],
            [
                "state_id" => 11,
                "name" => "Lagoa Dourada",
                "slug" => "lagoa-dourada",
            ],
            [
                "state_id" => 11,
                "name" => "Lagoa Formosa",
                "slug" => "lagoa-formosa",
            ],
            [
                "state_id" => 11,
                "name" => "Lagoa Grande",
                "slug" => "lagoa-grande",
            ],
            [
                "state_id" => 11,
                "name" => "Lagoa Santa",
                "slug" => "lagoa-santa",
            ],
            [
                "state_id" => 11,
                "name" => "Lajinha",
                "slug" => "lajinha",
            ],
            [
                "state_id" => 11,
                "name" => "Lambari",
                "slug" => "lambari",
            ],
            [
                "state_id" => 11,
                "name" => "Lamim",
                "slug" => "lamim",
            ],
            [
                "state_id" => 11,
                "name" => "Laranjal",
                "slug" => "laranjal",
            ],
            [
                "state_id" => 11,
                "name" => "Lassance",
                "slug" => "lassance",
            ],
            [
                "state_id" => 11,
                "name" => "Lavras",
                "slug" => "lavras",
            ],
            [
                "state_id" => 11,
                "name" => "Leandro Ferreira",
                "slug" => "leandro-ferreira",
            ],
            [
                "state_id" => 11,
                "name" => "Leme do Prado",
                "slug" => "leme-do-prado",
            ],
            [
                "state_id" => 11,
                "name" => "Leopoldina",
                "slug" => "leopoldina",
            ],
            [
                "state_id" => 11,
                "name" => "Liberdade",
                "slug" => "liberdade",
            ],
            [
                "state_id" => 11,
                "name" => "Lima Duarte",
                "slug" => "lima-duarte",
            ],
            [
                "state_id" => 11,
                "name" => "Limeira do Oeste",
                "slug" => "limeira-do-oeste",
            ],
            [
                "state_id" => 11,
                "name" => "Lontra",
                "slug" => "lontra",
            ],
            [
                "state_id" => 11,
                "name" => "Luisburgo",
                "slug" => "luisburgo",
            ],
            [
                "state_id" => 11,
                "name" => "Luislândia",
                "slug" => "luislandia",
            ],
            [
                "state_id" => 11,
                "name" => "Luminárias",
                "slug" => "luminarias",
            ],
            [
                "state_id" => 11,
                "name" => "Luz",
                "slug" => "luz",
            ],
            [
                "state_id" => 11,
                "name" => "Machacalis",
                "slug" => "machacalis",
            ],
            [
                "state_id" => 11,
                "name" => "Machado",
                "slug" => "machado",
            ],
            [
                "state_id" => 11,
                "name" => "Madre de Deus de Minas",
                "slug" => "madre-de-deus-de-minas",
            ],
            [
                "state_id" => 11,
                "name" => "Malacacheta",
                "slug" => "malacacheta",
            ],
            [
                "state_id" => 11,
                "name" => "Mamonas",
                "slug" => "mamonas",
            ],
            [
                "state_id" => 11,
                "name" => "Manga",
                "slug" => "manga",
            ],
            [
                "state_id" => 11,
                "name" => "Manhuaçu",
                "slug" => "manhuacu",
            ],
            [
                "state_id" => 11,
                "name" => "Manhumirim",
                "slug" => "manhumirim",
            ],
            [
                "state_id" => 11,
                "name" => "Mantena",
                "slug" => "mantena",
            ],
            [
                "state_id" => 11,
                "name" => "Mar de Espanha",
                "slug" => "mar-de-espanha",
            ],
            [
                "state_id" => 11,
                "name" => "Maravilhas",
                "slug" => "maravilhas",
            ],
            [
                "state_id" => 11,
                "name" => "Maria da Fé",
                "slug" => "maria-da-fe",
            ],
            [
                "state_id" => 11,
                "name" => "Mariana",
                "slug" => "mariana",
            ],
            [
                "state_id" => 11,
                "name" => "Marilac",
                "slug" => "marilac",
            ],
            [
                "state_id" => 11,
                "name" => "Mário Campos",
                "slug" => "mario-campos",
            ],
            [
                "state_id" => 11,
                "name" => "Maripá de Minas",
                "slug" => "maripa-de-minas",
            ],
            [
                "state_id" => 11,
                "name" => "Marliéria",
                "slug" => "marlieria",
            ],
            [
                "state_id" => 11,
                "name" => "Marmelópolis",
                "slug" => "marmelopolis",
            ],
            [
                "state_id" => 11,
                "name" => "Martinho Campos",
                "slug" => "martinho-campos",
            ],
            [
                "state_id" => 11,
                "name" => "Martins Soares",
                "slug" => "martins-soares",
            ],
            [
                "state_id" => 11,
                "name" => "Mata Verde",
                "slug" => "mata-verde",
            ],
            [
                "state_id" => 11,
                "name" => "Materlândia",
                "slug" => "materlandia",
            ],
            [
                "state_id" => 11,
                "name" => "Mateus Leme",
                "slug" => "mateus-leme",
            ],
            [
                "state_id" => 11,
                "name" => "Mathias Lobato",
                "slug" => "mathias-lobato",
            ],
            [
                "state_id" => 11,
                "name" => "Matias Barbosa",
                "slug" => "matias-barbosa",
            ],
            [
                "state_id" => 11,
                "name" => "Matias Cardoso",
                "slug" => "matias-cardoso",
            ],
            [
                "state_id" => 11,
                "name" => "Matipó",
                "slug" => "matipo",
            ],
            [
                "state_id" => 11,
                "name" => "Mato Verde",
                "slug" => "mato-verde",
            ],
            [
                "state_id" => 11,
                "name" => "Matozinhos",
                "slug" => "matozinhos",
            ],
            [
                "state_id" => 11,
                "name" => "Matutina",
                "slug" => "matutina",
            ],
            [
                "state_id" => 11,
                "name" => "Medeiros",
                "slug" => "medeiros",
            ],
            [
                "state_id" => 11,
                "name" => "Medina",
                "slug" => "medina",
            ],
            [
                "state_id" => 11,
                "name" => "Mendes Pimentel",
                "slug" => "mendes-pimentel",
            ],
            [
                "state_id" => 11,
                "name" => "Mercês",
                "slug" => "merces",
            ],
            [
                "state_id" => 11,
                "name" => "Mesquita",
                "slug" => "mesquita",
            ],
            [
                "state_id" => 11,
                "name" => "Minas Novas",
                "slug" => "minas-novas",
            ],
            [
                "state_id" => 11,
                "name" => "Minduri",
                "slug" => "minduri",
            ],
            [
                "state_id" => 11,
                "name" => "Mirabela",
                "slug" => "mirabela",
            ],
            [
                "state_id" => 11,
                "name" => "Miradouro",
                "slug" => "miradouro",
            ],
            [
                "state_id" => 11,
                "name" => "Miraí",
                "slug" => "mirai",
            ],
            [
                "state_id" => 11,
                "name" => "Miravânia",
                "slug" => "miravania",
            ],
            [
                "state_id" => 11,
                "name" => "Moeda",
                "slug" => "moeda",
            ],
            [
                "state_id" => 11,
                "name" => "Moema",
                "slug" => "moema",
            ],
            [
                "state_id" => 11,
                "name" => "Monjolos",
                "slug" => "monjolos",
            ],
            [
                "state_id" => 11,
                "name" => "Monsenhor Paulo",
                "slug" => "monsenhor-paulo",
            ],
            [
                "state_id" => 11,
                "name" => "Montalvânia",
                "slug" => "montalvania",
            ],
            [
                "state_id" => 11,
                "name" => "Monte Alegre de Minas",
                "slug" => "monte-alegre-de-minas",
            ],
            [
                "state_id" => 11,
                "name" => "Monte Azul",
                "slug" => "monte-azul",
            ],
            [
                "state_id" => 11,
                "name" => "Monte Belo",
                "slug" => "monte-belo",
            ],
            [
                "state_id" => 11,
                "name" => "Monte Carmelo",
                "slug" => "monte-carmelo",
            ],
            [
                "state_id" => 11,
                "name" => "Monte Formoso",
                "slug" => "monte-formoso",
            ],
            [
                "state_id" => 11,
                "name" => "Monte Santo de Minas",
                "slug" => "monte-santo-de-minas",
            ],
            [
                "state_id" => 11,
                "name" => "Monte Sião",
                "slug" => "monte-siao",
            ],
            [
                "state_id" => 11,
                "name" => "Montes Claros",
                "slug" => "montes-claros",
            ],
            [
                "state_id" => 11,
                "name" => "Montezuma",
                "slug" => "montezuma",
            ],
            [
                "state_id" => 11,
                "name" => "Morada Nova de Minas",
                "slug" => "morada-nova-de-minas",
            ],
            [
                "state_id" => 11,
                "name" => "Morro da Garça",
                "slug" => "morro-da-garca",
            ],
            [
                "state_id" => 11,
                "name" => "Morro do Pilar",
                "slug" => "morro-do-pilar",
            ],
            [
                "state_id" => 11,
                "name" => "Munhoz",
                "slug" => "munhoz",
            ],
            [
                "state_id" => 11,
                "name" => "Muriaé",
                "slug" => "muriae",
            ],
            [
                "state_id" => 11,
                "name" => "Mutum",
                "slug" => "mutum",
            ],
            [
                "state_id" => 11,
                "name" => "Muzambinho",
                "slug" => "muzambinho",
            ],
            [
                "state_id" => 11,
                "name" => "Nacip Raydan",
                "slug" => "nacip-raydan",
            ],
            [
                "state_id" => 11,
                "name" => "Nanuque",
                "slug" => "nanuque",
            ],
            [
                "state_id" => 11,
                "name" => "Naque",
                "slug" => "naque",
            ],
            [
                "state_id" => 11,
                "name" => "Natalândia",
                "slug" => "natalandia",
            ],
            [
                "state_id" => 11,
                "name" => "Natércia",
                "slug" => "natercia",
            ],
            [
                "state_id" => 11,
                "name" => "Nazareno",
                "slug" => "nazareno",
            ],
            [
                "state_id" => 11,
                "name" => "Nepomuceno",
                "slug" => "nepomuceno",
            ],
            [
                "state_id" => 11,
                "name" => "Ninheira",
                "slug" => "ninheira",
            ],
            [
                "state_id" => 11,
                "name" => "Nova Belém",
                "slug" => "nova-belem",
            ],
            [
                "state_id" => 11,
                "name" => "Nova Era",
                "slug" => "nova-era",
            ],
            [
                "state_id" => 11,
                "name" => "Nova Lima",
                "slug" => "nova-lima",
            ],
            [
                "state_id" => 11,
                "name" => "Nova Módica",
                "slug" => "nova-modica",
            ],
            [
                "state_id" => 11,
                "name" => "Nova Ponte",
                "slug" => "nova-ponte",
            ],
            [
                "state_id" => 11,
                "name" => "Nova Porteirinha",
                "slug" => "nova-porteirinha",
            ],
            [
                "state_id" => 11,
                "name" => "Nova Resende",
                "slug" => "nova-resende",
            ],
            [
                "state_id" => 11,
                "name" => "Nova Serrana",
                "slug" => "nova-serrana",
            ],
            [
                "state_id" => 11,
                "name" => "Nova União",
                "slug" => "nova-uniao",
            ],
            [
                "state_id" => 11,
                "name" => "Novo Cruzeiro",
                "slug" => "novo-cruzeiro",
            ],
            [
                "state_id" => 11,
                "name" => "Novo Oriente de Minas",
                "slug" => "novo-oriente-de-minas",
            ],
            [
                "state_id" => 11,
                "name" => "Novorizonte",
                "slug" => "novorizonte",
            ],
            [
                "state_id" => 11,
                "name" => "Olaria",
                "slug" => "olaria",
            ],
            [
                "state_id" => 11,
                "name" => "Olhos-d`Água",
                "slug" => "olhos-dagua",
            ],
            [
                "state_id" => 11,
                "name" => "Olímpio Noronha",
                "slug" => "olimpio-noronha",
            ],
            [
                "state_id" => 11,
                "name" => "Oliveira",
                "slug" => "oliveira",
            ],
            [
                "state_id" => 11,
                "name" => "Oliveira Fortes",
                "slug" => "oliveira-fortes",
            ],
            [
                "state_id" => 11,
                "name" => "Onça de Pitangui",
                "slug" => "onca-de-pitangui",
            ],
            [
                "state_id" => 11,
                "name" => "Oratórios",
                "slug" => "oratorios",
            ],
            [
                "state_id" => 11,
                "name" => "Orizânia",
                "slug" => "orizania",
            ],
            [
                "state_id" => 11,
                "name" => "Ouro Branco",
                "slug" => "ouro-branco",
            ],
            [
                "state_id" => 11,
                "name" => "Ouro Fino",
                "slug" => "ouro-fino",
            ],
            [
                "state_id" => 11,
                "name" => "Ouro Preto",
                "slug" => "ouro-preto",
            ],
            [
                "state_id" => 11,
                "name" => "Ouro Verde de Minas",
                "slug" => "ouro-verde-de-minas",
            ],
            [
                "state_id" => 11,
                "name" => "Padre Carvalho",
                "slug" => "padre-carvalho",
            ],
            [
                "state_id" => 11,
                "name" => "Padre Paraíso",
                "slug" => "padre-paraiso",
            ],
            [
                "state_id" => 11,
                "name" => "Pai Pedro",
                "slug" => "pai-pedro",
            ],
            [
                "state_id" => 11,
                "name" => "Paineiras",
                "slug" => "paineiras",
            ],
            [
                "state_id" => 11,
                "name" => "Pains",
                "slug" => "pains",
            ],
            [
                "state_id" => 11,
                "name" => "Paiva",
                "slug" => "paiva",
            ],
            [
                "state_id" => 11,
                "name" => "Palma",
                "slug" => "palma",
            ],
            [
                "state_id" => 11,
                "name" => "Palmópolis",
                "slug" => "palmopolis",
            ],
            [
                "state_id" => 11,
                "name" => "Papagaios",
                "slug" => "papagaios",
            ],
            [
                "state_id" => 11,
                "name" => "Pará de Minas",
                "slug" => "para-de-minas",
            ],
            [
                "state_id" => 11,
                "name" => "Paracatu",
                "slug" => "paracatu",
            ],
            [
                "state_id" => 11,
                "name" => "Paraguaçu",
                "slug" => "paraguacu",
            ],
            [
                "state_id" => 11,
                "name" => "Paraisópolis",
                "slug" => "paraisopolis",
            ],
            [
                "state_id" => 11,
                "name" => "Paraopeba",
                "slug" => "paraopeba",
            ],
            [
                "state_id" => 11,
                "name" => "Passa Quatro",
                "slug" => "passa-quatro",
            ],
            [
                "state_id" => 11,
                "name" => "Passa Tempo",
                "slug" => "passa-tempo",
            ],
            [
                "state_id" => 11,
                "name" => "Passabém",
                "slug" => "passabem",
            ],
            [
                "state_id" => 11,
                "name" => "Passa-Vinte",
                "slug" => "passa-vinte",
            ],
            [
                "state_id" => 11,
                "name" => "Passos",
                "slug" => "passos",
            ],
            [
                "state_id" => 11,
                "name" => "Patis",
                "slug" => "patis",
            ],
            [
                "state_id" => 11,
                "name" => "Patos de Minas",
                "slug" => "patos-de-minas",
            ],
            [
                "state_id" => 11,
                "name" => "Patrocínio",
                "slug" => "patrocinio",
            ],
            [
                "state_id" => 11,
                "name" => "Patrocínio do Muriaé",
                "slug" => "patrocinio-do-muriae",
            ],
            [
                "state_id" => 11,
                "name" => "Paula Cândido",
                "slug" => "paula-candido",
            ],
            [
                "state_id" => 11,
                "name" => "Paulistas",
                "slug" => "paulistas",
            ],
            [
                "state_id" => 11,
                "name" => "Pavão",
                "slug" => "pavao",
            ],
            [
                "state_id" => 11,
                "name" => "Peçanha",
                "slug" => "pecanha",
            ],
            [
                "state_id" => 11,
                "name" => "Pedra Azul",
                "slug" => "pedra-azul",
            ],
            [
                "state_id" => 11,
                "name" => "Pedra Bonita",
                "slug" => "pedra-bonita",
            ],
            [
                "state_id" => 11,
                "name" => "Pedra do Anta",
                "slug" => "pedra-do-anta",
            ],
            [
                "state_id" => 11,
                "name" => "Pedra do Indaiá",
                "slug" => "pedra-do-indaia",
            ],
            [
                "state_id" => 11,
                "name" => "Pedra Dourada",
                "slug" => "pedra-dourada",
            ],
            [
                "state_id" => 11,
                "name" => "Pedralva",
                "slug" => "pedralva",
            ],
            [
                "state_id" => 11,
                "name" => "Pedras de Maria da Cruz",
                "slug" => "pedras-de-maria-da-cruz",
            ],
            [
                "state_id" => 11,
                "name" => "Pedrinópolis",
                "slug" => "pedrinopolis",
            ],
            [
                "state_id" => 11,
                "name" => "Pedro Leopoldo",
                "slug" => "pedro-leopoldo",
            ],
            [
                "state_id" => 11,
                "name" => "Pedro Teixeira",
                "slug" => "pedro-teixeira",
            ],
            [
                "state_id" => 11,
                "name" => "Pequeri",
                "slug" => "pequeri",
            ],
            [
                "state_id" => 11,
                "name" => "Pequi",
                "slug" => "pequi",
            ],
            [
                "state_id" => 11,
                "name" => "Perdigão",
                "slug" => "perdigao",
            ],
            [
                "state_id" => 11,
                "name" => "Perdizes",
                "slug" => "perdizes",
            ],
            [
                "state_id" => 11,
                "name" => "Perdões",
                "slug" => "perdoes",
            ],
            [
                "state_id" => 11,
                "name" => "Periquito",
                "slug" => "periquito",
            ],
            [
                "state_id" => 11,
                "name" => "Pescador",
                "slug" => "pescador",
            ],
            [
                "state_id" => 11,
                "name" => "Piau",
                "slug" => "piau",
            ],
            [
                "state_id" => 11,
                "name" => "Piedade de Caratinga",
                "slug" => "piedade-de-caratinga",
            ],
            [
                "state_id" => 11,
                "name" => "Piedade de Ponte Nova",
                "slug" => "piedade-de-ponte-nova",
            ],
            [
                "state_id" => 11,
                "name" => "Piedade do Rio Grande",
                "slug" => "piedade-do-rio-grande",
            ],
            [
                "state_id" => 11,
                "name" => "Piedade dos Gerais",
                "slug" => "piedade-dos-gerais",
            ],
            [
                "state_id" => 11,
                "name" => "Pimenta",
                "slug" => "pimenta",
            ],
            [
                "state_id" => 11,
                "name" => "Pingo-d`Água",
                "slug" => "pingo-dagua",
            ],
            [
                "state_id" => 11,
                "name" => "Pintópolis",
                "slug" => "pintopolis",
            ],
            [
                "state_id" => 11,
                "name" => "Piracema",
                "slug" => "piracema",
            ],
            [
                "state_id" => 11,
                "name" => "Pirajuba",
                "slug" => "pirajuba",
            ],
            [
                "state_id" => 11,
                "name" => "Piranga",
                "slug" => "piranga",
            ],
            [
                "state_id" => 11,
                "name" => "Piranguçu",
                "slug" => "pirangucu",
            ],
            [
                "state_id" => 11,
                "name" => "Piranguinho",
                "slug" => "piranguinho",
            ],
            [
                "state_id" => 11,
                "name" => "Pirapetinga",
                "slug" => "pirapetinga",
            ],
            [
                "state_id" => 11,
                "name" => "Pirapora",
                "slug" => "pirapora",
            ],
            [
                "state_id" => 11,
                "name" => "Piraúba",
                "slug" => "pirauba",
            ],
            [
                "state_id" => 11,
                "name" => "Pitangui",
                "slug" => "pitangui",
            ],
            [
                "state_id" => 11,
                "name" => "Piumhi",
                "slug" => "piumhi",
            ],
            [
                "state_id" => 11,
                "name" => "Planura",
                "slug" => "planura",
            ],
            [
                "state_id" => 11,
                "name" => "Poço Fundo",
                "slug" => "poco-fundo",
            ],
            [
                "state_id" => 11,
                "name" => "Poços de Caldas",
                "slug" => "pocos-de-caldas",
            ],
            [
                "state_id" => 11,
                "name" => "Pocrane",
                "slug" => "pocrane",
            ],
            [
                "state_id" => 11,
                "name" => "Pompéu",
                "slug" => "pompeu",
            ],
            [
                "state_id" => 11,
                "name" => "Ponte Nova",
                "slug" => "ponte-nova",
            ],
            [
                "state_id" => 11,
                "name" => "Ponto Chique",
                "slug" => "ponto-chique",
            ],
            [
                "state_id" => 11,
                "name" => "Ponto dos Volantes",
                "slug" => "ponto-dos-volantes",
            ],
            [
                "state_id" => 11,
                "name" => "Porteirinha",
                "slug" => "porteirinha",
            ],
            [
                "state_id" => 11,
                "name" => "Porto Firme",
                "slug" => "porto-firme",
            ],
            [
                "state_id" => 11,
                "name" => "Poté",
                "slug" => "pote",
            ],
            [
                "state_id" => 11,
                "name" => "Pouso Alegre",
                "slug" => "pouso-alegre",
            ],
            [
                "state_id" => 11,
                "name" => "Pouso Alto",
                "slug" => "pouso-alto",
            ],
            [
                "state_id" => 11,
                "name" => "Prados",
                "slug" => "prados",
            ],
            [
                "state_id" => 11,
                "name" => "Prata",
                "slug" => "prata",
            ],
            [
                "state_id" => 11,
                "name" => "Pratápolis",
                "slug" => "pratapolis",
            ],
            [
                "state_id" => 11,
                "name" => "Pratinha",
                "slug" => "pratinha",
            ],
            [
                "state_id" => 11,
                "name" => "Presidente Bernardes",
                "slug" => "presidente-bernardes",
            ],
            [
                "state_id" => 11,
                "name" => "Presidente Juscelino",
                "slug" => "presidente-juscelino",
            ],
            [
                "state_id" => 11,
                "name" => "Presidente Kubitschek",
                "slug" => "presidente-kubitschek",
            ],
            [
                "state_id" => 11,
                "name" => "Presidente Olegário",
                "slug" => "presidente-olegario",
            ],
            [
                "state_id" => 11,
                "name" => "Prudente de Morais",
                "slug" => "prudente-de-morais",
            ],
            [
                "state_id" => 11,
                "name" => "Quartel Geral",
                "slug" => "quartel-geral",
            ],
            [
                "state_id" => 11,
                "name" => "Queluzito",
                "slug" => "queluzito",
            ],
            [
                "state_id" => 11,
                "name" => "Raposos",
                "slug" => "raposos",
            ],
            [
                "state_id" => 11,
                "name" => "Raul Soares",
                "slug" => "raul-soares",
            ],
            [
                "state_id" => 11,
                "name" => "Recreio",
                "slug" => "recreio",
            ],
            [
                "state_id" => 11,
                "name" => "Reduto",
                "slug" => "reduto",
            ],
            [
                "state_id" => 11,
                "name" => "Resende Costa",
                "slug" => "resende-costa",
            ],
            [
                "state_id" => 11,
                "name" => "Resplendor",
                "slug" => "resplendor",
            ],
            [
                "state_id" => 11,
                "name" => "Ressaquinha",
                "slug" => "ressaquinha",
            ],
            [
                "state_id" => 11,
                "name" => "Riachinho",
                "slug" => "riachinho",
            ],
            [
                "state_id" => 11,
                "name" => "Riacho dos Machados",
                "slug" => "riacho-dos-machados",
            ],
            [
                "state_id" => 11,
                "name" => "Ribeirão das Neves",
                "slug" => "ribeirao-das-neves",
            ],
            [
                "state_id" => 11,
                "name" => "Ribeirão Vermelho",
                "slug" => "ribeirao-vermelho",
            ],
            [
                "state_id" => 11,
                "name" => "Rio Acima",
                "slug" => "rio-acima",
            ],
            [
                "state_id" => 11,
                "name" => "Rio Casca",
                "slug" => "rio-casca",
            ],
            [
                "state_id" => 11,
                "name" => "Rio do Prado",
                "slug" => "rio-do-prado",
            ],
            [
                "state_id" => 11,
                "name" => "Rio Doce",
                "slug" => "rio-doce",
            ],
            [
                "state_id" => 11,
                "name" => "Rio Espera",
                "slug" => "rio-espera",
            ],
            [
                "state_id" => 11,
                "name" => "Rio Manso",
                "slug" => "rio-manso",
            ],
            [
                "state_id" => 11,
                "name" => "Rio Novo",
                "slug" => "rio-novo",
            ],
            [
                "state_id" => 11,
                "name" => "Rio Paranaíba",
                "slug" => "rio-paranaiba",
            ],
            [
                "state_id" => 11,
                "name" => "Rio Pardo de Minas",
                "slug" => "rio-pardo-de-minas",
            ],
            [
                "state_id" => 11,
                "name" => "Rio Piracicaba",
                "slug" => "rio-piracicaba",
            ],
            [
                "state_id" => 11,
                "name" => "Rio Pomba",
                "slug" => "rio-pomba",
            ],
            [
                "state_id" => 11,
                "name" => "Rio Preto",
                "slug" => "rio-preto",
            ],
            [
                "state_id" => 11,
                "name" => "Rio Vermelho",
                "slug" => "rio-vermelho",
            ],
            [
                "state_id" => 11,
                "name" => "Ritápolis",
                "slug" => "ritapolis",
            ],
            [
                "state_id" => 11,
                "name" => "Rochedo de Minas",
                "slug" => "rochedo-de-minas",
            ],
            [
                "state_id" => 11,
                "name" => "Rodeiro",
                "slug" => "rodeiro",
            ],
            [
                "state_id" => 11,
                "name" => "Romaria",
                "slug" => "romaria",
            ],
            [
                "state_id" => 11,
                "name" => "Rosário da Limeira",
                "slug" => "rosario-da-limeira",
            ],
            [
                "state_id" => 11,
                "name" => "Rubelita",
                "slug" => "rubelita",
            ],
            [
                "state_id" => 11,
                "name" => "Rubim",
                "slug" => "rubim",
            ],
            [
                "state_id" => 11,
                "name" => "Sabará",
                "slug" => "sabara",
            ],
            [
                "state_id" => 11,
                "name" => "Sabinópolis",
                "slug" => "sabinopolis",
            ],
            [
                "state_id" => 11,
                "name" => "Sacramento",
                "slug" => "sacramento",
            ],
            [
                "state_id" => 11,
                "name" => "Salinas",
                "slug" => "salinas",
            ],
            [
                "state_id" => 11,
                "name" => "Salto da Divisa",
                "slug" => "salto-da-divisa",
            ],
            [
                "state_id" => 11,
                "name" => "Santa Bárbara",
                "slug" => "santa-barbara",
            ],
            [
                "state_id" => 11,
                "name" => "Santa Bárbara do Leste",
                "slug" => "santa-barbara-do-leste",
            ],
            [
                "state_id" => 11,
                "name" => "Santa Bárbara do Monte Verde",
                "slug" => "santa-barbara-do-monte-verde",
            ],
            [
                "state_id" => 11,
                "name" => "Santa Bárbara do Tugúrio",
                "slug" => "santa-barbara-do-tugurio",
            ],
            [
                "state_id" => 11,
                "name" => "Santa Cruz de Minas",
                "slug" => "santa-cruz-de-minas",
            ],
            [
                "state_id" => 11,
                "name" => "Santa Cruz de Salinas",
                "slug" => "santa-cruz-de-salinas",
            ],
            [
                "state_id" => 11,
                "name" => "Santa Cruz do Escalvado",
                "slug" => "santa-cruz-do-escalvado",
            ],
            [
                "state_id" => 11,
                "name" => "Santa Efigênia de Minas",
                "slug" => "santa-efigenia-de-minas",
            ],
            [
                "state_id" => 11,
                "name" => "Santa Fé de Minas",
                "slug" => "santa-fe-de-minas",
            ],
            [
                "state_id" => 11,
                "name" => "Santa Helena de Minas",
                "slug" => "santa-helena-de-minas",
            ],
            [
                "state_id" => 11,
                "name" => "Santa Juliana",
                "slug" => "santa-juliana",
            ],
            [
                "state_id" => 11,
                "name" => "Santa Luzia",
                "slug" => "santa-luzia",
            ],
            [
                "state_id" => 11,
                "name" => "Santa Margarida",
                "slug" => "santa-margarida",
            ],
            [
                "state_id" => 11,
                "name" => "Santa Maria de Itabira",
                "slug" => "santa-maria-de-itabira",
            ],
            [
                "state_id" => 11,
                "name" => "Santa Maria do Salto",
                "slug" => "santa-maria-do-salto",
            ],
            [
                "state_id" => 11,
                "name" => "Santa Maria do Suaçuí",
                "slug" => "santa-maria-do-suacui",
            ],
            [
                "state_id" => 11,
                "name" => "Santa Rita de Caldas",
                "slug" => "santa-rita-de-caldas",
            ],
            [
                "state_id" => 11,
                "name" => "Santa Rita de Ibitipoca",
                "slug" => "santa-rita-de-ibitipoca",
            ],
            [
                "state_id" => 11,
                "name" => "Santa Rita de Jacutinga",
                "slug" => "santa-rita-de-jacutinga",
            ],
            [
                "state_id" => 11,
                "name" => "Santa Rita de Minas",
                "slug" => "santa-rita-de-minas",
            ],
            [
                "state_id" => 11,
                "name" => "Santa Rita do Itueto",
                "slug" => "santa-rita-do-itueto",
            ],
            [
                "state_id" => 11,
                "name" => "Santa Rita do Sapucaí",
                "slug" => "santa-rita-do-sapucai",
            ],
            [
                "state_id" => 11,
                "name" => "Santa Rosa da Serra",
                "slug" => "santa-rosa-da-serra",
            ],
            [
                "state_id" => 11,
                "name" => "Santa Vitória",
                "slug" => "santa-vitoria",
            ],
            [
                "state_id" => 11,
                "name" => "Santana da Vargem",
                "slug" => "santana-da-vargem",
            ],
            [
                "state_id" => 11,
                "name" => "Santana de Cataguases",
                "slug" => "santana-de-cataguases",
            ],
            [
                "state_id" => 11,
                "name" => "Santana de Pirapama",
                "slug" => "santana-de-pirapama",
            ],
            [
                "state_id" => 11,
                "name" => "Santana do Deserto",
                "slug" => "santana-do-deserto",
            ],
            [
                "state_id" => 11,
                "name" => "Santana do Garambéu",
                "slug" => "santana-do-garambeu",
            ],
            [
                "state_id" => 11,
                "name" => "Santana do Jacaré",
                "slug" => "santana-do-jacare",
            ],
            [
                "state_id" => 11,
                "name" => "Santana do Manhuaçu",
                "slug" => "santana-do-manhuacu",
            ],
            [
                "state_id" => 11,
                "name" => "Santana do Paraíso",
                "slug" => "santana-do-paraiso",
            ],
            [
                "state_id" => 11,
                "name" => "Santana do Riacho",
                "slug" => "santana-do-riacho",
            ],
            [
                "state_id" => 11,
                "name" => "Santana dos Montes",
                "slug" => "santana-dos-montes",
            ],
            [
                "state_id" => 11,
                "name" => "Santo Antônio do Amparo",
                "slug" => "santo-antonio-do-amparo",
            ],
            [
                "state_id" => 11,
                "name" => "Santo Antônio do Aventureiro",
                "slug" => "santo-antonio-do-aventureiro",
            ],
            [
                "state_id" => 11,
                "name" => "Santo Antônio do Grama",
                "slug" => "santo-antonio-do-grama",
            ],
            [
                "state_id" => 11,
                "name" => "Santo Antônio do Itambé",
                "slug" => "santo-antonio-do-itambe",
            ],
            [
                "state_id" => 11,
                "name" => "Santo Antônio do Jacinto",
                "slug" => "santo-antonio-do-jacinto",
            ],
            [
                "state_id" => 11,
                "name" => "Santo Antônio do Monte",
                "slug" => "santo-antonio-do-monte",
            ],
            [
                "state_id" => 11,
                "name" => "Santo Antônio do Retiro",
                "slug" => "santo-antonio-do-retiro",
            ],
            [
                "state_id" => 11,
                "name" => "Santo Antônio do Rio Abaixo",
                "slug" => "santo-antonio-do-rio-abaixo",
            ],
            [
                "state_id" => 11,
                "name" => "Santo Hipólito",
                "slug" => "santo-hipolito",
            ],
            [
                "state_id" => 11,
                "name" => "Santos Dumont",
                "slug" => "santos-dumont",
            ],
            [
                "state_id" => 11,
                "name" => "São Bento Abade",
                "slug" => "sao-bento-abade",
            ],
            [
                "state_id" => 11,
                "name" => "São Brás do Suaçuí",
                "slug" => "sao-bras-do-suacui",
            ],
            [
                "state_id" => 11,
                "name" => "São Domingos das Dores",
                "slug" => "sao-domingos-das-dores",
            ],
            [
                "state_id" => 11,
                "name" => "São Domingos do Prata",
                "slug" => "sao-domingos-do-prata",
            ],
            [
                "state_id" => 11,
                "name" => "São Félix de Minas",
                "slug" => "sao-felix-de-minas",
            ],
            [
                "state_id" => 11,
                "name" => "São Francisco",
                "slug" => "sao-francisco",
            ],
            [
                "state_id" => 11,
                "name" => "São Francisco de Paula",
                "slug" => "sao-francisco-de-paula",
            ],
            [
                "state_id" => 11,
                "name" => "São Francisco de Sales",
                "slug" => "sao-francisco-de-sales",
            ],
            [
                "state_id" => 11,
                "name" => "São Francisco do Glória",
                "slug" => "sao-francisco-do-gloria",
            ],
            [
                "state_id" => 11,
                "name" => "São Geraldo",
                "slug" => "sao-geraldo",
            ],
            [
                "state_id" => 11,
                "name" => "São Geraldo da Piedade",
                "slug" => "sao-geraldo-da-piedade",
            ],
            [
                "state_id" => 11,
                "name" => "São Geraldo do Baixio",
                "slug" => "sao-geraldo-do-baixio",
            ],
            [
                "state_id" => 11,
                "name" => "São Gonçalo do Abaeté",
                "slug" => "sao-goncalo-do-abaete",
            ],
            [
                "state_id" => 11,
                "name" => "São Gonçalo do Pará",
                "slug" => "sao-goncalo-do-para",
            ],
            [
                "state_id" => 11,
                "name" => "São Gonçalo do Rio Abaixo",
                "slug" => "sao-goncalo-do-rio-abaixo",
            ],
            [
                "state_id" => 11,
                "name" => "São Gonçalo do Rio Preto",
                "slug" => "sao-goncalo-do-rio-preto",
            ],
            [
                "state_id" => 11,
                "name" => "São Gonçalo do Sapucaí",
                "slug" => "sao-goncalo-do-sapucai",
            ],
            [
                "state_id" => 11,
                "name" => "São Gotardo",
                "slug" => "sao-gotardo",
            ],
            [
                "state_id" => 11,
                "name" => "São João Batista do Glória",
                "slug" => "sao-joao-batista-do-gloria",
            ],
            [
                "state_id" => 11,
                "name" => "São João da Lagoa",
                "slug" => "sao-joao-da-lagoa",
            ],
            [
                "state_id" => 11,
                "name" => "São João da Mata",
                "slug" => "sao-joao-da-mata",
            ],
            [
                "state_id" => 11,
                "name" => "São João da Ponte",
                "slug" => "sao-joao-da-ponte",
            ],
            [
                "state_id" => 11,
                "name" => "São João das Missões",
                "slug" => "sao-joao-das-missoes",
            ],
            [
                "state_id" => 11,
                "name" => "São João del Rei",
                "slug" => "sao-joao-del-rei",
            ],
            [
                "state_id" => 11,
                "name" => "São João do Manhuaçu",
                "slug" => "sao-joao-do-manhuacu",
            ],
            [
                "state_id" => 11,
                "name" => "São João do Manteninha",
                "slug" => "sao-joao-do-manteninha",
            ],
            [
                "state_id" => 11,
                "name" => "São João do Oriente",
                "slug" => "sao-joao-do-oriente",
            ],
            [
                "state_id" => 11,
                "name" => "São João do Pacuí",
                "slug" => "sao-joao-do-pacui",
            ],
            [
                "state_id" => 11,
                "name" => "São João do Paraíso",
                "slug" => "sao-joao-do-paraiso",
            ],
            [
                "state_id" => 11,
                "name" => "São João Evangelista",
                "slug" => "sao-joao-evangelista",
            ],
            [
                "state_id" => 11,
                "name" => "São João Nepomuceno",
                "slug" => "sao-joao-nepomuceno",
            ],
            [
                "state_id" => 11,
                "name" => "São Joaquim de Bicas",
                "slug" => "sao-joaquim-de-bicas",
            ],
            [
                "state_id" => 11,
                "name" => "São José da Barra",
                "slug" => "sao-jose-da-barra",
            ],
            [
                "state_id" => 11,
                "name" => "São José da Lapa",
                "slug" => "sao-jose-da-lapa",
            ],
            [
                "state_id" => 11,
                "name" => "São José da Safira",
                "slug" => "sao-jose-da-safira",
            ],
            [
                "state_id" => 11,
                "name" => "São José da Varginha",
                "slug" => "sao-jose-da-varginha",
            ],
            [
                "state_id" => 11,
                "name" => "São José do Alegre",
                "slug" => "sao-jose-do-alegre",
            ],
            [
                "state_id" => 11,
                "name" => "São José do Divino",
                "slug" => "sao-jose-do-divino",
            ],
            [
                "state_id" => 11,
                "name" => "São José do Goiabal",
                "slug" => "sao-jose-do-goiabal",
            ],
            [
                "state_id" => 11,
                "name" => "São José do Jacuri",
                "slug" => "sao-jose-do-jacuri",
            ],
            [
                "state_id" => 11,
                "name" => "São José do Mantimento",
                "slug" => "sao-jose-do-mantimento",
            ],
            [
                "state_id" => 11,
                "name" => "São Lourenço",
                "slug" => "sao-lourenco",
            ],
            [
                "state_id" => 11,
                "name" => "São Miguel do Anta",
                "slug" => "sao-miguel-do-anta",
            ],
            [
                "state_id" => 11,
                "name" => "São Pedro da União",
                "slug" => "sao-pedro-da-uniao",
            ],
            [
                "state_id" => 11,
                "name" => "São Pedro do Suaçuí",
                "slug" => "sao-pedro-do-suacui",
            ],
            [
                "state_id" => 11,
                "name" => "São Pedro dos Ferros",
                "slug" => "sao-pedro-dos-ferros",
            ],
            [
                "state_id" => 11,
                "name" => "São Romão",
                "slug" => "sao-romao",
            ],
            [
                "state_id" => 11,
                "name" => "São Roque de Minas",
                "slug" => "sao-roque-de-minas",
            ],
            [
                "state_id" => 11,
                "name" => "São Sebastião da Bela Vista",
                "slug" => "sao-sebastiao-da-bela-vista",
            ],
            [
                "state_id" => 11,
                "name" => "São Sebastião da Vargem Alegre",
                "slug" => "sao-sebastiao-da-vargem-alegre",
            ],
            [
                "state_id" => 11,
                "name" => "São Sebastião do Anta",
                "slug" => "sao-sebastiao-do-anta",
            ],
            [
                "state_id" => 11,
                "name" => "São Sebastião do Maranhão",
                "slug" => "sao-sebastiao-do-maranhao",
            ],
            [
                "state_id" => 11,
                "name" => "São Sebastião do Oeste",
                "slug" => "sao-sebastiao-do-oeste",
            ],
            [
                "state_id" => 11,
                "name" => "São Sebastião do Paraíso",
                "slug" => "sao-sebastiao-do-paraiso",
            ],
            [
                "state_id" => 11,
                "name" => "São Sebastião do Rio Preto",
                "slug" => "sao-sebastiao-do-rio-preto",
            ],
            [
                "state_id" => 11,
                "name" => "São Sebastião do Rio Verde",
                "slug" => "sao-sebastiao-do-rio-verde",
            ],
            [
                "state_id" => 11,
                "name" => "São Thomé das Letras",
                "slug" => "sao-thome-das-letras",
            ],
            [
                "state_id" => 11,
                "name" => "São Tiago",
                "slug" => "sao-tiago",
            ],
            [
                "state_id" => 11,
                "name" => "São Tomás de Aquino",
                "slug" => "sao-tomas-de-aquino",
            ],
            [
                "state_id" => 11,
                "name" => "São Vicente de Minas",
                "slug" => "sao-vicente-de-minas",
            ],
            [
                "state_id" => 11,
                "name" => "Sapucaí-Mirim",
                "slug" => "sapucai-mirim",
            ],
            [
                "state_id" => 11,
                "name" => "Sardoá",
                "slug" => "sardoa",
            ],
            [
                "state_id" => 11,
                "name" => "Sarzedo",
                "slug" => "sarzedo",
            ],
            [
                "state_id" => 11,
                "name" => "Sem-Peixe",
                "slug" => "sem-peixe",
            ],
            [
                "state_id" => 11,
                "name" => "Senador Amaral",
                "slug" => "senador-amaral",
            ],
            [
                "state_id" => 11,
                "name" => "Senador Cortes",
                "slug" => "senador-cortes",
            ],
            [
                "state_id" => 11,
                "name" => "Senador Firmino",
                "slug" => "senador-firmino",
            ],
            [
                "state_id" => 11,
                "name" => "Senador José Bento",
                "slug" => "senador-jose-bento",
            ],
            [
                "state_id" => 11,
                "name" => "Senador Modestino Gonçalves",
                "slug" => "senador-modestino-goncalves",
            ],
            [
                "state_id" => 11,
                "name" => "Senhora de Oliveira",
                "slug" => "senhora-de-oliveira",
            ],
            [
                "state_id" => 11,
                "name" => "Senhora do Porto",
                "slug" => "senhora-do-porto",
            ],
            [
                "state_id" => 11,
                "name" => "Senhora dos Remédios",
                "slug" => "senhora-dos-remedios",
            ],
            [
                "state_id" => 11,
                "name" => "Sericita",
                "slug" => "sericita",
            ],
            [
                "state_id" => 11,
                "name" => "Seritinga",
                "slug" => "seritinga",
            ],
            [
                "state_id" => 11,
                "name" => "Serra Azul de Minas",
                "slug" => "serra-azul-de-minas",
            ],
            [
                "state_id" => 11,
                "name" => "Serra da Saudade",
                "slug" => "serra-da-saudade",
            ],
            [
                "state_id" => 11,
                "name" => "Serra do Salitre",
                "slug" => "serra-do-salitre",
            ],
            [
                "state_id" => 11,
                "name" => "Serra dos Aimorés",
                "slug" => "serra-dos-aimores",
            ],
            [
                "state_id" => 11,
                "name" => "Serrania",
                "slug" => "serrania",
            ],
            [
                "state_id" => 11,
                "name" => "Serranópolis de Minas",
                "slug" => "serranopolis-de-minas",
            ],
            [
                "state_id" => 11,
                "name" => "Serranos",
                "slug" => "serranos",
            ],
            [
                "state_id" => 11,
                "name" => "Serro",
                "slug" => "serro",
            ],
            [
                "state_id" => 11,
                "name" => "Sete Lagoas",
                "slug" => "sete-lagoas",
            ],
            [
                "state_id" => 11,
                "name" => "Setubinha",
                "slug" => "setubinha",
            ],
            [
                "state_id" => 11,
                "name" => "Silveirânia",
                "slug" => "silveirania",
            ],
            [
                "state_id" => 11,
                "name" => "Silvianópolis",
                "slug" => "silvianopolis",
            ],
            [
                "state_id" => 11,
                "name" => "Simão Pereira",
                "slug" => "simao-pereira",
            ],
            [
                "state_id" => 11,
                "name" => "Simonésia",
                "slug" => "simonesia",
            ],
            [
                "state_id" => 11,
                "name" => "Sobrália",
                "slug" => "sobralia",
            ],
            [
                "state_id" => 11,
                "name" => "Soledade de Minas",
                "slug" => "soledade-de-minas",
            ],
            [
                "state_id" => 11,
                "name" => "Tabuleiro",
                "slug" => "tabuleiro",
            ],
            [
                "state_id" => 11,
                "name" => "Taiobeiras",
                "slug" => "taiobeiras",
            ],
            [
                "state_id" => 11,
                "name" => "Taparuba",
                "slug" => "taparuba",
            ],
            [
                "state_id" => 11,
                "name" => "Tapira",
                "slug" => "tapira",
            ],
            [
                "state_id" => 11,
                "name" => "Tapiraí",
                "slug" => "tapirai",
            ],
            [
                "state_id" => 11,
                "name" => "Taquaraçu de Minas",
                "slug" => "taquaracu-de-minas",
            ],
            [
                "state_id" => 11,
                "name" => "Tarumirim",
                "slug" => "tarumirim",
            ],
            [
                "state_id" => 11,
                "name" => "Teixeiras",
                "slug" => "teixeiras",
            ],
            [
                "state_id" => 11,
                "name" => "Teófilo Otoni",
                "slug" => "teofilo-otoni",
            ],
            [
                "state_id" => 11,
                "name" => "Timóteo",
                "slug" => "timoteo",
            ],
            [
                "state_id" => 11,
                "name" => "Tiradentes",
                "slug" => "tiradentes",
            ],
            [
                "state_id" => 11,
                "name" => "Tiros",
                "slug" => "tiros",
            ],
            [
                "state_id" => 11,
                "name" => "Tocantins",
                "slug" => "tocantins",
            ],
            [
                "state_id" => 11,
                "name" => "Tocos do Moji",
                "slug" => "tocos-do-moji",
            ],
            [
                "state_id" => 11,
                "name" => "Toledo",
                "slug" => "toledo",
            ],
            [
                "state_id" => 11,
                "name" => "Tombos",
                "slug" => "tombos",
            ],
            [
                "state_id" => 11,
                "name" => "Três Corações",
                "slug" => "tres-coracoes",
            ],
            [
                "state_id" => 11,
                "name" => "Três Marias",
                "slug" => "tres-marias",
            ],
            [
                "state_id" => 11,
                "name" => "Três Pontas",
                "slug" => "tres-pontas",
            ],
            [
                "state_id" => 11,
                "name" => "Tumiritinga",
                "slug" => "tumiritinga",
            ],
            [
                "state_id" => 11,
                "name" => "Tupaciguara",
                "slug" => "tupaciguara",
            ],
            [
                "state_id" => 11,
                "name" => "Turmalina",
                "slug" => "turmalina",
            ],
            [
                "state_id" => 11,
                "name" => "Turvolândia",
                "slug" => "turvolandia",
            ],
            [
                "state_id" => 11,
                "name" => "Ubá",
                "slug" => "uba",
            ],
            [
                "state_id" => 11,
                "name" => "Ubaí",
                "slug" => "ubai",
            ],
            [
                "state_id" => 11,
                "name" => "Ubaporanga",
                "slug" => "ubaporanga",
            ],
            [
                "state_id" => 11,
                "name" => "Uberaba",
                "slug" => "uberaba",
            ],
            [
                "state_id" => 11,
                "name" => "Uberlândia",
                "slug" => "uberlandia",
            ],
            [
                "state_id" => 11,
                "name" => "Umburatiba",
                "slug" => "umburatiba",
            ],
            [
                "state_id" => 11,
                "name" => "Unaí",
                "slug" => "unai",
            ],
            [
                "state_id" => 11,
                "name" => "União de Minas",
                "slug" => "uniao-de-minas",
            ],
            [
                "state_id" => 11,
                "name" => "Uruana de Minas",
                "slug" => "uruana-de-minas",
            ],
            [
                "state_id" => 11,
                "name" => "Urucânia",
                "slug" => "urucania",
            ],
            [
                "state_id" => 11,
                "name" => "Urucuia",
                "slug" => "urucuia",
            ],
            [
                "state_id" => 11,
                "name" => "Vargem Alegre",
                "slug" => "vargem-alegre",
            ],
            [
                "state_id" => 11,
                "name" => "Vargem Bonita",
                "slug" => "vargem-bonita",
            ],
            [
                "state_id" => 11,
                "name" => "Vargem Grande do Rio Pardo",
                "slug" => "vargem-grande-do-rio-pardo",
            ],
            [
                "state_id" => 11,
                "name" => "Varginha",
                "slug" => "varginha",
            ],
            [
                "state_id" => 11,
                "name" => "Varjão de Minas",
                "slug" => "varjao-de-minas",
            ],
            [
                "state_id" => 11,
                "name" => "Várzea da Palma",
                "slug" => "varzea-da-palma",
            ],
            [
                "state_id" => 11,
                "name" => "Varzelândia",
                "slug" => "varzelandia",
            ],
            [
                "state_id" => 11,
                "name" => "Vazante",
                "slug" => "vazante",
            ],
            [
                "state_id" => 11,
                "name" => "Verdelândia",
                "slug" => "verdelandia",
            ],
            [
                "state_id" => 11,
                "name" => "Veredinha",
                "slug" => "veredinha",
            ],
            [
                "state_id" => 11,
                "name" => "Veríssimo",
                "slug" => "verissimo",
            ],
            [
                "state_id" => 11,
                "name" => "Vermelho Novo",
                "slug" => "vermelho-novo",
            ],
            [
                "state_id" => 11,
                "name" => "Vespasiano",
                "slug" => "vespasiano",
            ],
            [
                "state_id" => 11,
                "name" => "Viçosa",
                "slug" => "vicosa",
            ],
            [
                "state_id" => 11,
                "name" => "Vieiras",
                "slug" => "vieiras",
            ],
            [
                "state_id" => 11,
                "name" => "Virgem da Lapa",
                "slug" => "virgem-da-lapa",
            ],
            [
                "state_id" => 11,
                "name" => "Virgínia",
                "slug" => "virginia",
            ],
            [
                "state_id" => 11,
                "name" => "Virginópolis",
                "slug" => "virginopolis",
            ],
            [
                "state_id" => 11,
                "name" => "Virgolândia",
                "slug" => "virgolandia",
            ],
            [
                "state_id" => 11,
                "name" => "Visconde do Rio Branco",
                "slug" => "visconde-do-rio-branco",
            ],
            [
                "state_id" => 11,
                "name" => "Volta Grande",
                "slug" => "volta-grande",
            ],
            [
                "state_id" => 11,
                "name" => "Wenceslau Braz",
                "slug" => "wenceslau-braz",
            ],
            [
                "state_id" => 14,
                "name" => "Abaetetuba",
                "slug" => "abaetetuba",
            ],
            [
                "state_id" => 14,
                "name" => "Abel Figueiredo",
                "slug" => "abel-figueiredo",
            ],
            [
                "state_id" => 14,
                "name" => "Acará",
                "slug" => "acara",
            ],
            [
                "state_id" => 14,
                "name" => "Afuá",
                "slug" => "afua",
            ],
            [
                "state_id" => 14,
                "name" => "Água Azul do Norte",
                "slug" => "agua-azul-do-norte",
            ],
            [
                "state_id" => 14,
                "name" => "Alenquer",
                "slug" => "alenquer",
            ],
            [
                "state_id" => 14,
                "name" => "Almeirim",
                "slug" => "almeirim",
            ],
            [
                "state_id" => 14,
                "name" => "Altamira",
                "slug" => "altamira",
            ],
            [
                "state_id" => 14,
                "name" => "Anajás",
                "slug" => "anajas",
            ],
            [
                "state_id" => 14,
                "name" => "Ananindeua",
                "slug" => "ananindeua",
            ],
            [
                "state_id" => 14,
                "name" => "Anapu",
                "slug" => "anapu",
            ],
            [
                "state_id" => 14,
                "name" => "Augusto Corrêa",
                "slug" => "augusto-correa",
            ],
            [
                "state_id" => 14,
                "name" => "Aurora do Pará",
                "slug" => "aurora-do-para",
            ],
            [
                "state_id" => 14,
                "name" => "Aveiro",
                "slug" => "aveiro",
            ],
            [
                "state_id" => 14,
                "name" => "Bagre",
                "slug" => "bagre",
            ],
            [
                "state_id" => 14,
                "name" => "Baião",
                "slug" => "baiao",
            ],
            [
                "state_id" => 14,
                "name" => "Bannach",
                "slug" => "bannach",
            ],
            [
                "state_id" => 14,
                "name" => "Barcarena",
                "slug" => "barcarena",
            ],
            [
                "state_id" => 14,
                "name" => "Belém",
                "slug" => "belem",
            ],
            [
                "state_id" => 14,
                "name" => "Belterra",
                "slug" => "belterra",
            ],
            [
                "state_id" => 14,
                "name" => "Benevides",
                "slug" => "benevides",
            ],
            [
                "state_id" => 14,
                "name" => "Bom Jesus do Tocantins",
                "slug" => "bom-jesus-do-tocantins",
            ],
            [
                "state_id" => 14,
                "name" => "Bonito",
                "slug" => "bonito",
            ],
            [
                "state_id" => 14,
                "name" => "Bragança",
                "slug" => "braganca",
            ],
            [
                "state_id" => 14,
                "name" => "Brasil Novo",
                "slug" => "brasil-novo",
            ],
            [
                "state_id" => 14,
                "name" => "Brejo Grande do Araguaia",
                "slug" => "brejo-grande-do-araguaia",
            ],
            [
                "state_id" => 14,
                "name" => "Breu Branco",
                "slug" => "breu-branco",
            ],
            [
                "state_id" => 14,
                "name" => "Breves",
                "slug" => "breves",
            ],
            [
                "state_id" => 14,
                "name" => "Bujaru",
                "slug" => "bujaru",
            ],
            [
                "state_id" => 14,
                "name" => "Cachoeira do Arari",
                "slug" => "cachoeira-do-arari",
            ],
            [
                "state_id" => 14,
                "name" => "Cachoeira do Piriá",
                "slug" => "cachoeira-do-piria",
            ],
            [
                "state_id" => 14,
                "name" => "Cametá",
                "slug" => "cameta",
            ],
            [
                "state_id" => 14,
                "name" => "Canaã dos Carajás",
                "slug" => "canaa-dos-carajas",
            ],
            [
                "state_id" => 14,
                "name" => "Capanema",
                "slug" => "capanema",
            ],
            [
                "state_id" => 14,
                "name" => "Capitão Poço",
                "slug" => "capitao-poco",
            ],
            [
                "state_id" => 14,
                "name" => "Castanhal",
                "slug" => "castanhal",
            ],
            [
                "state_id" => 14,
                "name" => "Chaves",
                "slug" => "chaves",
            ],
            [
                "state_id" => 14,
                "name" => "Colares",
                "slug" => "colares",
            ],
            [
                "state_id" => 14,
                "name" => "Conceição do Araguaia",
                "slug" => "conceicao-do-araguaia",
            ],
            [
                "state_id" => 14,
                "name" => "Concórdia do Pará",
                "slug" => "concordia-do-para",
            ],
            [
                "state_id" => 14,
                "name" => "Cumaru do Norte",
                "slug" => "cumaru-do-norte",
            ],
            [
                "state_id" => 14,
                "name" => "Curionópolis",
                "slug" => "curionopolis",
            ],
            [
                "state_id" => 14,
                "name" => "Curralinho",
                "slug" => "curralinho",
            ],
            [
                "state_id" => 14,
                "name" => "Curuá",
                "slug" => "curua",
            ],
            [
                "state_id" => 14,
                "name" => "Curuçá",
                "slug" => "curuca",
            ],
            [
                "state_id" => 14,
                "name" => "Dom Eliseu",
                "slug" => "dom-eliseu",
            ],
            [
                "state_id" => 14,
                "name" => "Eldorado dos Carajás",
                "slug" => "eldorado-dos-carajas",
            ],
            [
                "state_id" => 14,
                "name" => "Faro",
                "slug" => "faro",
            ],
            [
                "state_id" => 14,
                "name" => "Floresta do Araguaia",
                "slug" => "floresta-do-araguaia",
            ],
            [
                "state_id" => 14,
                "name" => "Garrafão do Norte",
                "slug" => "garrafao-do-norte",
            ],
            [
                "state_id" => 14,
                "name" => "Goianésia do Pará",
                "slug" => "goianesia-do-para",
            ],
            [
                "state_id" => 14,
                "name" => "Gurupá",
                "slug" => "gurupa",
            ],
            [
                "state_id" => 14,
                "name" => "Igarapé-Açu",
                "slug" => "igarape-acu",
            ],
            [
                "state_id" => 14,
                "name" => "Igarapé-Miri",
                "slug" => "igarape-miri",
            ],
            [
                "state_id" => 14,
                "name" => "Inhangapi",
                "slug" => "inhangapi",
            ],
            [
                "state_id" => 14,
                "name" => "Ipixuna do Pará",
                "slug" => "ipixuna-do-para",
            ],
            [
                "state_id" => 14,
                "name" => "Irituia",
                "slug" => "irituia",
            ],
            [
                "state_id" => 14,
                "name" => "Itaituba",
                "slug" => "itaituba",
            ],
            [
                "state_id" => 14,
                "name" => "Itupiranga",
                "slug" => "itupiranga",
            ],
            [
                "state_id" => 14,
                "name" => "Jacareacanga",
                "slug" => "jacareacanga",
            ],
            [
                "state_id" => 14,
                "name" => "Jacundá",
                "slug" => "jacunda",
            ],
            [
                "state_id" => 14,
                "name" => "Juruti",
                "slug" => "juruti",
            ],
            [
                "state_id" => 14,
                "name" => "Limoeiro do Ajuru",
                "slug" => "limoeiro-do-ajuru",
            ],
            [
                "state_id" => 14,
                "name" => "Mãe do Rio",
                "slug" => "mae-do-rio",
            ],
            [
                "state_id" => 14,
                "name" => "Magalhães Barata",
                "slug" => "magalhaes-barata",
            ],
            [
                "state_id" => 14,
                "name" => "Marabá",
                "slug" => "maraba",
            ],
            [
                "state_id" => 14,
                "name" => "Maracanã",
                "slug" => "maracana",
            ],
            [
                "state_id" => 14,
                "name" => "Marapanim",
                "slug" => "marapanim",
            ],
            [
                "state_id" => 14,
                "name" => "Marituba",
                "slug" => "marituba",
            ],
            [
                "state_id" => 14,
                "name" => "Medicilândia",
                "slug" => "medicilandia",
            ],
            [
                "state_id" => 14,
                "name" => "Melgaço",
                "slug" => "melgaco",
            ],
            [
                "state_id" => 14,
                "name" => "Mocajuba",
                "slug" => "mocajuba",
            ],
            [
                "state_id" => 14,
                "name" => "Moju",
                "slug" => "moju",
            ],
            [
                "state_id" => 14,
                "name" => "Monte Alegre",
                "slug" => "monte-alegre",
            ],
            [
                "state_id" => 14,
                "name" => "Muaná",
                "slug" => "muana",
            ],
            [
                "state_id" => 14,
                "name" => "Nova Esperança do Piriá",
                "slug" => "nova-esperanca-do-piria",
            ],
            [
                "state_id" => 14,
                "name" => "Nova Ipixuna",
                "slug" => "nova-ipixuna",
            ],
            [
                "state_id" => 14,
                "name" => "Nova Timboteua",
                "slug" => "nova-timboteua",
            ],
            [
                "state_id" => 14,
                "name" => "Novo Progresso",
                "slug" => "novo-progresso",
            ],
            [
                "state_id" => 14,
                "name" => "Novo Repartimento",
                "slug" => "novo-repartimento",
            ],
            [
                "state_id" => 14,
                "name" => "Óbidos",
                "slug" => "obidos",
            ],
            [
                "state_id" => 14,
                "name" => "Oeiras do Pará",
                "slug" => "oeiras-do-para",
            ],
            [
                "state_id" => 14,
                "name" => "Oriximiná",
                "slug" => "oriximina",
            ],
            [
                "state_id" => 14,
                "name" => "Ourém",
                "slug" => "ourem",
            ],
            [
                "state_id" => 14,
                "name" => "Ourilândia do Norte",
                "slug" => "ourilandia-do-norte",
            ],
            [
                "state_id" => 14,
                "name" => "Pacajá",
                "slug" => "pacaja",
            ],
            [
                "state_id" => 14,
                "name" => "Palestina do Pará",
                "slug" => "palestina-do-para",
            ],
            [
                "state_id" => 14,
                "name" => "Paragominas",
                "slug" => "paragominas",
            ],
            [
                "state_id" => 14,
                "name" => "Parauapebas",
                "slug" => "parauapebas",
            ],
            [
                "state_id" => 14,
                "name" => "Pau d`Arco",
                "slug" => "pau-darco",
            ],
            [
                "state_id" => 14,
                "name" => "Peixe-Boi",
                "slug" => "peixe-boi",
            ],
            [
                "state_id" => 14,
                "name" => "Piçarra",
                "slug" => "picarra",
            ],
            [
                "state_id" => 14,
                "name" => "Placas",
                "slug" => "placas",
            ],
            [
                "state_id" => 14,
                "name" => "Ponta de Pedras",
                "slug" => "ponta-de-pedras",
            ],
            [
                "state_id" => 14,
                "name" => "Portel",
                "slug" => "portel",
            ],
            [
                "state_id" => 14,
                "name" => "Porto de Moz",
                "slug" => "porto-de-moz",
            ],
            [
                "state_id" => 14,
                "name" => "Prainha",
                "slug" => "prainha",
            ],
            [
                "state_id" => 14,
                "name" => "Primavera",
                "slug" => "primavera",
            ],
            [
                "state_id" => 14,
                "name" => "Quatipuru",
                "slug" => "quatipuru",
            ],
            [
                "state_id" => 14,
                "name" => "Redenção",
                "slug" => "redencao",
            ],
            [
                "state_id" => 14,
                "name" => "Rio Maria",
                "slug" => "rio-maria",
            ],
            [
                "state_id" => 14,
                "name" => "Rondon do Pará",
                "slug" => "rondon-do-para",
            ],
            [
                "state_id" => 14,
                "name" => "Rurópolis",
                "slug" => "ruropolis",
            ],
            [
                "state_id" => 14,
                "name" => "Salinópolis",
                "slug" => "salinopolis",
            ],
            [
                "state_id" => 14,
                "name" => "Salvaterra",
                "slug" => "salvaterra",
            ],
            [
                "state_id" => 14,
                "name" => "Santa Bárbara do Pará",
                "slug" => "santa-barbara-do-para",
            ],
            [
                "state_id" => 14,
                "name" => "Santa Cruz do Arari",
                "slug" => "santa-cruz-do-arari",
            ],
            [
                "state_id" => 14,
                "name" => "Santa Isabel do Pará",
                "slug" => "santa-isabel-do-para",
            ],
            [
                "state_id" => 14,
                "name" => "Santa Luzia do Pará",
                "slug" => "santa-luzia-do-para",
            ],
            [
                "state_id" => 14,
                "name" => "Santa Maria das Barreiras",
                "slug" => "santa-maria-das-barreiras",
            ],
            [
                "state_id" => 14,
                "name" => "Santa Maria do Pará",
                "slug" => "santa-maria-do-para",
            ],
            [
                "state_id" => 14,
                "name" => "Santana do Araguaia",
                "slug" => "santana-do-araguaia",
            ],
            [
                "state_id" => 14,
                "name" => "Santarém",
                "slug" => "santarem",
            ],
            [
                "state_id" => 14,
                "name" => "Santarém Novo",
                "slug" => "santarem-novo",
            ],
            [
                "state_id" => 14,
                "name" => "Santo Antônio do Tauá",
                "slug" => "santo-antonio-do-taua",
            ],
            [
                "state_id" => 14,
                "name" => "São Caetano de Odivelas",
                "slug" => "sao-caetano-de-odivelas",
            ],
            [
                "state_id" => 14,
                "name" => "São Domingos do Araguaia",
                "slug" => "sao-domingos-do-araguaia",
            ],
            [
                "state_id" => 14,
                "name" => "São Domingos do Capim",
                "slug" => "sao-domingos-do-capim",
            ],
            [
                "state_id" => 14,
                "name" => "São Félix do Xingu",
                "slug" => "sao-felix-do-xingu",
            ],
            [
                "state_id" => 14,
                "name" => "São Francisco do Pará",
                "slug" => "sao-francisco-do-para",
            ],
            [
                "state_id" => 14,
                "name" => "São Geraldo do Araguaia",
                "slug" => "sao-geraldo-do-araguaia",
            ],
            [
                "state_id" => 14,
                "name" => "São João da Ponta",
                "slug" => "sao-joao-da-ponta",
            ],
            [
                "state_id" => 14,
                "name" => "São João de Pirabas",
                "slug" => "sao-joao-de-pirabas",
            ],
            [
                "state_id" => 14,
                "name" => "São João do Araguaia",
                "slug" => "sao-joao-do-araguaia",
            ],
            [
                "state_id" => 14,
                "name" => "São Miguel do Guamá",
                "slug" => "sao-miguel-do-guama",
            ],
            [
                "state_id" => 14,
                "name" => "São Sebastião da Boa Vista",
                "slug" => "sao-sebastiao-da-boa-vista",
            ],
            [
                "state_id" => 14,
                "name" => "Sapucaia",
                "slug" => "sapucaia",
            ],
            [
                "state_id" => 14,
                "name" => "Senador José Porfírio",
                "slug" => "senador-jose-porfirio",
            ],
            [
                "state_id" => 14,
                "name" => "Soure",
                "slug" => "soure",
            ],
            [
                "state_id" => 14,
                "name" => "Tailândia",
                "slug" => "tailandia",
            ],
            [
                "state_id" => 14,
                "name" => "Terra Alta",
                "slug" => "terra-alta",
            ],
            [
                "state_id" => 14,
                "name" => "Terra Santa",
                "slug" => "terra-santa",
            ],
            [
                "state_id" => 14,
                "name" => "Tomé-Açu",
                "slug" => "tome-acu",
            ],
            [
                "state_id" => 14,
                "name" => "Tracuateua",
                "slug" => "tracuateua",
            ],
            [
                "state_id" => 14,
                "name" => "Trairão",
                "slug" => "trairao",
            ],
            [
                "state_id" => 14,
                "name" => "Tucumã",
                "slug" => "tucuma",
            ],
            [
                "state_id" => 14,
                "name" => "Tucuruí",
                "slug" => "tucurui",
            ],
            [
                "state_id" => 14,
                "name" => "Ulianópolis",
                "slug" => "ulianopolis",
            ],
            [
                "state_id" => 14,
                "name" => "Uruará",
                "slug" => "uruara",
            ],
            [
                "state_id" => 14,
                "name" => "Vigia",
                "slug" => "vigia",
            ],
            [
                "state_id" => 14,
                "name" => "Viseu",
                "slug" => "viseu",
            ],
            [
                "state_id" => 14,
                "name" => "Vitória do Xingu",
                "slug" => "vitoria-do-xingu",
            ],
            [
                "state_id" => 14,
                "name" => "Xinguara",
                "slug" => "xinguara",
            ],
            [
                "state_id" => 15,
                "name" => "Água Branca",
                "slug" => "agua-branca",
            ],
            [
                "state_id" => 15,
                "name" => "Aguiar",
                "slug" => "aguiar",
            ],
            [
                "state_id" => 15,
                "name" => "Alagoa Grande",
                "slug" => "alagoa-grande",
            ],
            [
                "state_id" => 15,
                "name" => "Alagoa Nova",
                "slug" => "alagoa-nova",
            ],
            [
                "state_id" => 15,
                "name" => "Alagoinha",
                "slug" => "alagoinha",
            ],
            [
                "state_id" => 15,
                "name" => "Alcantil",
                "slug" => "alcantil",
            ],
            [
                "state_id" => 15,
                "name" => "Algodão de Jandaíra",
                "slug" => "algodao-de-jandaira",
            ],
            [
                "state_id" => 15,
                "name" => "Alhandra",
                "slug" => "alhandra",
            ],
            [
                "state_id" => 15,
                "name" => "Amparo",
                "slug" => "amparo",
            ],
            [
                "state_id" => 15,
                "name" => "Aparecida",
                "slug" => "aparecida",
            ],
            [
                "state_id" => 15,
                "name" => "Araçagi",
                "slug" => "aracagi",
            ],
            [
                "state_id" => 15,
                "name" => "Arara",
                "slug" => "arara",
            ],
            [
                "state_id" => 15,
                "name" => "Araruna",
                "slug" => "araruna",
            ],
            [
                "state_id" => 15,
                "name" => "Areia",
                "slug" => "areia",
            ],
            [
                "state_id" => 15,
                "name" => "Areia de Baraúnas",
                "slug" => "areia-de-baraunas",
            ],
            [
                "state_id" => 15,
                "name" => "Areial",
                "slug" => "areial",
            ],
            [
                "state_id" => 15,
                "name" => "Aroeiras",
                "slug" => "aroeiras",
            ],
            [
                "state_id" => 15,
                "name" => "Assunção",
                "slug" => "assuncao",
            ],
            [
                "state_id" => 15,
                "name" => "Baía da Traição",
                "slug" => "baia-da-traicao",
            ],
            [
                "state_id" => 15,
                "name" => "Bananeiras",
                "slug" => "bananeiras",
            ],
            [
                "state_id" => 15,
                "name" => "Baraúna",
                "slug" => "barauna",
            ],
            [
                "state_id" => 15,
                "name" => "Barra de Santa Rosa",
                "slug" => "barra-de-santa-rosa",
            ],
            [
                "state_id" => 15,
                "name" => "Barra de Santana",
                "slug" => "barra-de-santana",
            ],
            [
                "state_id" => 15,
                "name" => "Barra de São Miguel",
                "slug" => "barra-de-sao-miguel",
            ],
            [
                "state_id" => 15,
                "name" => "Bayeux",
                "slug" => "bayeux",
            ],
            [
                "state_id" => 15,
                "name" => "Belém",
                "slug" => "belem",
            ],
            [
                "state_id" => 15,
                "name" => "Belém do Brejo do Cruz",
                "slug" => "belem-do-brejo-do-cruz",
            ],
            [
                "state_id" => 15,
                "name" => "Bernardino Batista",
                "slug" => "bernardino-batista",
            ],
            [
                "state_id" => 15,
                "name" => "Boa Ventura",
                "slug" => "boa-ventura",
            ],
            [
                "state_id" => 15,
                "name" => "Boa Vista",
                "slug" => "boa-vista",
            ],
            [
                "state_id" => 15,
                "name" => "Bom Jesus",
                "slug" => "bom-jesus",
            ],
            [
                "state_id" => 15,
                "name" => "Bom Sucesso",
                "slug" => "bom-sucesso",
            ],
            [
                "state_id" => 15,
                "name" => "Bonito de Santa Fé",
                "slug" => "bonito-de-santa-fe",
            ],
            [
                "state_id" => 15,
                "name" => "Boqueirão",
                "slug" => "boqueirao",
            ],
            [
                "state_id" => 15,
                "name" => "Borborema",
                "slug" => "borborema",
            ],
            [
                "state_id" => 15,
                "name" => "Brejo do Cruz",
                "slug" => "brejo-do-cruz",
            ],
            [
                "state_id" => 15,
                "name" => "Brejo dos Santos",
                "slug" => "brejo-dos-santos",
            ],
            [
                "state_id" => 15,
                "name" => "Caaporã",
                "slug" => "caapora",
            ],
            [
                "state_id" => 15,
                "name" => "Cabaceiras",
                "slug" => "cabaceiras",
            ],
            [
                "state_id" => 15,
                "name" => "Cabedelo",
                "slug" => "cabedelo",
            ],
            [
                "state_id" => 15,
                "name" => "Cachoeira dos Índios",
                "slug" => "cachoeira-dos-indios",
            ],
            [
                "state_id" => 15,
                "name" => "Cacimba de Areia",
                "slug" => "cacimba-de-areia",
            ],
            [
                "state_id" => 15,
                "name" => "Cacimba de Dentro",
                "slug" => "cacimba-de-dentro",
            ],
            [
                "state_id" => 15,
                "name" => "Cacimbas",
                "slug" => "cacimbas",
            ],
            [
                "state_id" => 15,
                "name" => "Caiçara",
                "slug" => "caicara",
            ],
            [
                "state_id" => 15,
                "name" => "Cajazeiras",
                "slug" => "cajazeiras",
            ],
            [
                "state_id" => 15,
                "name" => "Cajazeirinhas",
                "slug" => "cajazeirinhas",
            ],
            [
                "state_id" => 15,
                "name" => "Caldas Brandão",
                "slug" => "caldas-brandao",
            ],
            [
                "state_id" => 15,
                "name" => "Camalaú",
                "slug" => "camalau",
            ],
            [
                "state_id" => 15,
                "name" => "Campina Grande",
                "slug" => "campina-grande",
            ],
            [
                "state_id" => 15,
                "name" => "Campo de Santana",
                "slug" => "campo-de-santana",
            ],
            [
                "state_id" => 15,
                "name" => "Capim",
                "slug" => "capim",
            ],
            [
                "state_id" => 15,
                "name" => "Caraúbas",
                "slug" => "caraubas",
            ],
            [
                "state_id" => 15,
                "name" => "Carrapateira",
                "slug" => "carrapateira",
            ],
            [
                "state_id" => 15,
                "name" => "Casserengue",
                "slug" => "casserengue",
            ],
            [
                "state_id" => 15,
                "name" => "Catingueira",
                "slug" => "catingueira",
            ],
            [
                "state_id" => 15,
                "name" => "Catolé do Rocha",
                "slug" => "catole-do-rocha",
            ],
            [
                "state_id" => 15,
                "name" => "Caturité",
                "slug" => "caturite",
            ],
            [
                "state_id" => 15,
                "name" => "Conceição",
                "slug" => "conceicao",
            ],
            [
                "state_id" => 15,
                "name" => "Condado",
                "slug" => "condado",
            ],
            [
                "state_id" => 15,
                "name" => "Conde",
                "slug" => "conde",
            ],
            [
                "state_id" => 15,
                "name" => "Congo",
                "slug" => "congo",
            ],
            [
                "state_id" => 15,
                "name" => "Coremas",
                "slug" => "coremas",
            ],
            [
                "state_id" => 15,
                "name" => "Coxixola",
                "slug" => "coxixola",
            ],
            [
                "state_id" => 15,
                "name" => "Cruz do Espírito Santo",
                "slug" => "cruz-do-espirito-santo",
            ],
            [
                "state_id" => 15,
                "name" => "Cubati",
                "slug" => "cubati",
            ],
            [
                "state_id" => 15,
                "name" => "Cuité",
                "slug" => "cuite",
            ],
            [
                "state_id" => 15,
                "name" => "Cuité de Mamanguape",
                "slug" => "cuite-de-mamanguape",
            ],
            [
                "state_id" => 15,
                "name" => "Cuitegi",
                "slug" => "cuitegi",
            ],
            [
                "state_id" => 15,
                "name" => "Curral de Cima",
                "slug" => "curral-de-cima",
            ],
            [
                "state_id" => 15,
                "name" => "Curral Velho",
                "slug" => "curral-velho",
            ],
            [
                "state_id" => 15,
                "name" => "Damião",
                "slug" => "damiao",
            ],
            [
                "state_id" => 15,
                "name" => "Desterro",
                "slug" => "desterro",
            ],
            [
                "state_id" => 15,
                "name" => "Diamante",
                "slug" => "diamante",
            ],
            [
                "state_id" => 15,
                "name" => "Dona Inês",
                "slug" => "dona-ines",
            ],
            [
                "state_id" => 15,
                "name" => "Duas Estradas",
                "slug" => "duas-estradas",
            ],
            [
                "state_id" => 15,
                "name" => "Emas",
                "slug" => "emas",
            ],
            [
                "state_id" => 15,
                "name" => "Esperança",
                "slug" => "esperanca",
            ],
            [
                "state_id" => 15,
                "name" => "Fagundes",
                "slug" => "fagundes",
            ],
            [
                "state_id" => 15,
                "name" => "Frei Martinho",
                "slug" => "frei-martinho",
            ],
            [
                "state_id" => 15,
                "name" => "Gado Bravo",
                "slug" => "gado-bravo",
            ],
            [
                "state_id" => 15,
                "name" => "Guarabira",
                "slug" => "guarabira",
            ],
            [
                "state_id" => 15,
                "name" => "Gurinhém",
                "slug" => "gurinhem",
            ],
            [
                "state_id" => 15,
                "name" => "Gurjão",
                "slug" => "gurjao",
            ],
            [
                "state_id" => 15,
                "name" => "Ibiara",
                "slug" => "ibiara",
            ],
            [
                "state_id" => 15,
                "name" => "Igaracy",
                "slug" => "igaracy",
            ],
            [
                "state_id" => 15,
                "name" => "Imaculada",
                "slug" => "imaculada",
            ],
            [
                "state_id" => 15,
                "name" => "Ingá",
                "slug" => "inga",
            ],
            [
                "state_id" => 15,
                "name" => "Itabaiana",
                "slug" => "itabaiana",
            ],
            [
                "state_id" => 15,
                "name" => "Itaporanga",
                "slug" => "itaporanga",
            ],
            [
                "state_id" => 15,
                "name" => "Itapororoca",
                "slug" => "itapororoca",
            ],
            [
                "state_id" => 15,
                "name" => "Itatuba",
                "slug" => "itatuba",
            ],
            [
                "state_id" => 15,
                "name" => "Jacaraú",
                "slug" => "jacarau",
            ],
            [
                "state_id" => 15,
                "name" => "Jericó",
                "slug" => "jerico",
            ],
            [
                "state_id" => 15,
                "name" => "João Pessoa",
                "slug" => "joao-pessoa",
            ],
            [
                "state_id" => 15,
                "name" => "Juarez Távora",
                "slug" => "juarez-tavora",
            ],
            [
                "state_id" => 15,
                "name" => "Juazeirinho",
                "slug" => "juazeirinho",
            ],
            [
                "state_id" => 15,
                "name" => "Junco do Seridó",
                "slug" => "junco-do-serido",
            ],
            [
                "state_id" => 15,
                "name" => "Juripiranga",
                "slug" => "juripiranga",
            ],
            [
                "state_id" => 15,
                "name" => "Juru",
                "slug" => "juru",
            ],
            [
                "state_id" => 15,
                "name" => "Lagoa",
                "slug" => "lagoa",
            ],
            [
                "state_id" => 15,
                "name" => "Lagoa de Dentro",
                "slug" => "lagoa-de-dentro",
            ],
            [
                "state_id" => 15,
                "name" => "Lagoa Seca",
                "slug" => "lagoa-seca",
            ],
            [
                "state_id" => 15,
                "name" => "Lastro",
                "slug" => "lastro",
            ],
            [
                "state_id" => 15,
                "name" => "Livramento",
                "slug" => "livramento",
            ],
            [
                "state_id" => 15,
                "name" => "Logradouro",
                "slug" => "logradouro",
            ],
            [
                "state_id" => 15,
                "name" => "Lucena",
                "slug" => "lucena",
            ],
            [
                "state_id" => 15,
                "name" => "Mãe d`Água",
                "slug" => "mae-dagua",
            ],
            [
                "state_id" => 15,
                "name" => "Malta",
                "slug" => "malta",
            ],
            [
                "state_id" => 15,
                "name" => "Mamanguape",
                "slug" => "mamanguape",
            ],
            [
                "state_id" => 15,
                "name" => "Manaíra",
                "slug" => "manaira",
            ],
            [
                "state_id" => 15,
                "name" => "Marcação",
                "slug" => "marcacao",
            ],
            [
                "state_id" => 15,
                "name" => "Mari",
                "slug" => "mari",
            ],
            [
                "state_id" => 15,
                "name" => "Marizópolis",
                "slug" => "marizopolis",
            ],
            [
                "state_id" => 15,
                "name" => "Massaranduba",
                "slug" => "massaranduba",
            ],
            [
                "state_id" => 15,
                "name" => "Mataraca",
                "slug" => "mataraca",
            ],
            [
                "state_id" => 15,
                "name" => "Matinhas",
                "slug" => "matinhas",
            ],
            [
                "state_id" => 15,
                "name" => "Mato Grosso",
                "slug" => "mato-grosso",
            ],
            [
                "state_id" => 15,
                "name" => "Maturéia",
                "slug" => "matureia",
            ],
            [
                "state_id" => 15,
                "name" => "Mogeiro",
                "slug" => "mogeiro",
            ],
            [
                "state_id" => 15,
                "name" => "Montadas",
                "slug" => "montadas",
            ],
            [
                "state_id" => 15,
                "name" => "Monte Horebe",
                "slug" => "monte-horebe",
            ],
            [
                "state_id" => 15,
                "name" => "Monteiro",
                "slug" => "monteiro",
            ],
            [
                "state_id" => 15,
                "name" => "Mulungu",
                "slug" => "mulungu",
            ],
            [
                "state_id" => 15,
                "name" => "Natuba",
                "slug" => "natuba",
            ],
            [
                "state_id" => 15,
                "name" => "Nazarezinho",
                "slug" => "nazarezinho",
            ],
            [
                "state_id" => 15,
                "name" => "Nova Floresta",
                "slug" => "nova-floresta",
            ],
            [
                "state_id" => 15,
                "name" => "Nova Olinda",
                "slug" => "nova-olinda",
            ],
            [
                "state_id" => 15,
                "name" => "Nova Palmeira",
                "slug" => "nova-palmeira",
            ],
            [
                "state_id" => 15,
                "name" => "Olho d`Água",
                "slug" => "olho-dagua",
            ],
            [
                "state_id" => 15,
                "name" => "Olivedos",
                "slug" => "olivedos",
            ],
            [
                "state_id" => 15,
                "name" => "Ouro Velho",
                "slug" => "ouro-velho",
            ],
            [
                "state_id" => 15,
                "name" => "Parari",
                "slug" => "parari",
            ],
            [
                "state_id" => 15,
                "name" => "Passagem",
                "slug" => "passagem",
            ],
            [
                "state_id" => 15,
                "name" => "Patos",
                "slug" => "patos",
            ],
            [
                "state_id" => 15,
                "name" => "Paulista",
                "slug" => "paulista",
            ],
            [
                "state_id" => 15,
                "name" => "Pedra Branca",
                "slug" => "pedra-branca",
            ],
            [
                "state_id" => 15,
                "name" => "Pedra Lavrada",
                "slug" => "pedra-lavrada",
            ],
            [
                "state_id" => 15,
                "name" => "Pedras de Fogo",
                "slug" => "pedras-de-fogo",
            ],
            [
                "state_id" => 15,
                "name" => "Pedro Régis",
                "slug" => "pedro-regis",
            ],
            [
                "state_id" => 15,
                "name" => "Piancó",
                "slug" => "pianco",
            ],
            [
                "state_id" => 15,
                "name" => "Picuí",
                "slug" => "picui",
            ],
            [
                "state_id" => 15,
                "name" => "Pilar",
                "slug" => "pilar",
            ],
            [
                "state_id" => 15,
                "name" => "Pilões",
                "slug" => "piloes",
            ],
            [
                "state_id" => 15,
                "name" => "Pilõezinhos",
                "slug" => "piloezinhos",
            ],
            [
                "state_id" => 15,
                "name" => "Pirpirituba",
                "slug" => "pirpirituba",
            ],
            [
                "state_id" => 15,
                "name" => "Pitimbu",
                "slug" => "pitimbu",
            ],
            [
                "state_id" => 15,
                "name" => "Pocinhos",
                "slug" => "pocinhos",
            ],
            [
                "state_id" => 15,
                "name" => "Poço Dantas",
                "slug" => "poco-dantas",
            ],
            [
                "state_id" => 15,
                "name" => "Poço de José de Moura",
                "slug" => "poco-de-jose-de-moura",
            ],
            [
                "state_id" => 15,
                "name" => "Pombal",
                "slug" => "pombal",
            ],
            [
                "state_id" => 15,
                "name" => "Prata",
                "slug" => "prata",
            ],
            [
                "state_id" => 15,
                "name" => "Princesa Isabel",
                "slug" => "princesa-isabel",
            ],
            [
                "state_id" => 15,
                "name" => "Puxinanã",
                "slug" => "puxinana",
            ],
            [
                "state_id" => 15,
                "name" => "Queimadas",
                "slug" => "queimadas",
            ],
            [
                "state_id" => 15,
                "name" => "Quixabá",
                "slug" => "quixaba",
            ],
            [
                "state_id" => 15,
                "name" => "Remígio",
                "slug" => "remigio",
            ],
            [
                "state_id" => 15,
                "name" => "Riachão",
                "slug" => "riachao",
            ],
            [
                "state_id" => 15,
                "name" => "Riachão do Bacamarte",
                "slug" => "riachao-do-bacamarte",
            ],
            [
                "state_id" => 15,
                "name" => "Riachão do Poço",
                "slug" => "riachao-do-poco",
            ],
            [
                "state_id" => 15,
                "name" => "Riacho de Santo Antônio",
                "slug" => "riacho-de-santo-antonio",
            ],
            [
                "state_id" => 15,
                "name" => "Riacho dos Cavalos",
                "slug" => "riacho-dos-cavalos",
            ],
            [
                "state_id" => 15,
                "name" => "Rio Tinto",
                "slug" => "rio-tinto",
            ],
            [
                "state_id" => 15,
                "name" => "Salgadinho",
                "slug" => "salgadinho",
            ],
            [
                "state_id" => 15,
                "name" => "Salgado de São Félix",
                "slug" => "salgado-de-sao-felix",
            ],
            [
                "state_id" => 15,
                "name" => "Santa Cecília",
                "slug" => "santa-cecilia",
            ],
            [
                "state_id" => 15,
                "name" => "Santa Cruz",
                "slug" => "santa-cruz",
            ],
            [
                "state_id" => 15,
                "name" => "Santa Helena",
                "slug" => "santa-helena",
            ],
            [
                "state_id" => 15,
                "name" => "Santa Inês",
                "slug" => "santa-ines",
            ],
            [
                "state_id" => 15,
                "name" => "Santa Luzia",
                "slug" => "santa-luzia",
            ],
            [
                "state_id" => 15,
                "name" => "Santa Rita",
                "slug" => "santa-rita",
            ],
            [
                "state_id" => 15,
                "name" => "Santa Teresinha",
                "slug" => "santa-teresinha",
            ],
            [
                "state_id" => 15,
                "name" => "Santana de Mangueira",
                "slug" => "santana-de-mangueira",
            ],
            [
                "state_id" => 15,
                "name" => "Santana dos Garrotes",
                "slug" => "santana-dos-garrotes",
            ],
            [
                "state_id" => 15,
                "name" => "Santarém",
                "slug" => "santarem",
            ],
            [
                "state_id" => 15,
                "name" => "Santo André",
                "slug" => "santo-andre",
            ],
            [
                "state_id" => 15,
                "name" => "São Bentinho",
                "slug" => "sao-bentinho",
            ],
            [
                "state_id" => 15,
                "name" => "São Bento",
                "slug" => "sao-bento",
            ],
            [
                "state_id" => 15,
                "name" => "São Domingos de Pombal",
                "slug" => "sao-domingos-de-pombal",
            ],
            [
                "state_id" => 15,
                "name" => "São Domingos do Cariri",
                "slug" => "sao-domingos-do-cariri",
            ],
            [
                "state_id" => 15,
                "name" => "São Francisco",
                "slug" => "sao-francisco",
            ],
            [
                "state_id" => 15,
                "name" => "São João do Cariri",
                "slug" => "sao-joao-do-cariri",
            ],
            [
                "state_id" => 15,
                "name" => "São João do Rio do Peixe",
                "slug" => "sao-joao-do-rio-do-peixe",
            ],
            [
                "state_id" => 15,
                "name" => "São João do Tigre",
                "slug" => "sao-joao-do-tigre",
            ],
            [
                "state_id" => 15,
                "name" => "São José da Lagoa Tapada",
                "slug" => "sao-jose-da-lagoa-tapada",
            ],
            [
                "state_id" => 15,
                "name" => "São José de Caiana",
                "slug" => "sao-jose-de-caiana",
            ],
            [
                "state_id" => 15,
                "name" => "São José de Espinharas",
                "slug" => "sao-jose-de-espinharas",
            ],
            [
                "state_id" => 15,
                "name" => "São José de Piranhas",
                "slug" => "sao-jose-de-piranhas",
            ],
            [
                "state_id" => 15,
                "name" => "São José de Princesa",
                "slug" => "sao-jose-de-princesa",
            ],
            [
                "state_id" => 15,
                "name" => "São José do Bonfim",
                "slug" => "sao-jose-do-bonfim",
            ],
            [
                "state_id" => 15,
                "name" => "São José do Brejo do Cruz",
                "slug" => "sao-jose-do-brejo-do-cruz",
            ],
            [
                "state_id" => 15,
                "name" => "São José do Sabugi",
                "slug" => "sao-jose-do-sabugi",
            ],
            [
                "state_id" => 15,
                "name" => "São José dos Cordeiros",
                "slug" => "sao-jose-dos-cordeiros",
            ],
            [
                "state_id" => 15,
                "name" => "São José dos Ramos",
                "slug" => "sao-jose-dos-ramos",
            ],
            [
                "state_id" => 15,
                "name" => "São Mamede",
                "slug" => "sao-mamede",
            ],
            [
                "state_id" => 15,
                "name" => "São Miguel de Taipu",
                "slug" => "sao-miguel-de-taipu",
            ],
            [
                "state_id" => 15,
                "name" => "São Sebastião de Lagoa de Roça",
                "slug" => "sao-sebastiao-de-lagoa-de-roca",
            ],
            [
                "state_id" => 15,
                "name" => "São Sebastião do Umbuzeiro",
                "slug" => "sao-sebastiao-do-umbuzeiro",
            ],
            [
                "state_id" => 15,
                "name" => "Sapé",
                "slug" => "sape",
            ],
            [
                "state_id" => 15,
                "name" => "Seridó",
                "slug" => "serido",
            ],
            [
                "state_id" => 15,
                "name" => "Serra Branca",
                "slug" => "serra-branca",
            ],
            [
                "state_id" => 15,
                "name" => "Serra da Raiz",
                "slug" => "serra-da-raiz",
            ],
            [
                "state_id" => 15,
                "name" => "Serra Grande",
                "slug" => "serra-grande",
            ],
            [
                "state_id" => 15,
                "name" => "Serra Redonda",
                "slug" => "serra-redonda",
            ],
            [
                "state_id" => 15,
                "name" => "Serraria",
                "slug" => "serraria",
            ],
            [
                "state_id" => 15,
                "name" => "Sertãozinho",
                "slug" => "sertaozinho",
            ],
            [
                "state_id" => 15,
                "name" => "Sobrado",
                "slug" => "sobrado",
            ],
            [
                "state_id" => 15,
                "name" => "Solânea",
                "slug" => "solanea",
            ],
            [
                "state_id" => 15,
                "name" => "Soledade",
                "slug" => "soledade",
            ],
            [
                "state_id" => 15,
                "name" => "Sossêgo",
                "slug" => "sossego",
            ],
            [
                "state_id" => 15,
                "name" => "Sousa",
                "slug" => "sousa",
            ],
            [
                "state_id" => 15,
                "name" => "Sumé",
                "slug" => "sume",
            ],
            [
                "state_id" => 15,
                "name" => "Taperoá",
                "slug" => "taperoa",
            ],
            [
                "state_id" => 15,
                "name" => "Tavares",
                "slug" => "tavares",
            ],
            [
                "state_id" => 15,
                "name" => "Teixeira",
                "slug" => "teixeira",
            ],
            [
                "state_id" => 15,
                "name" => "Tenório",
                "slug" => "tenorio",
            ],
            [
                "state_id" => 15,
                "name" => "Triunfo",
                "slug" => "triunfo",
            ],
            [
                "state_id" => 15,
                "name" => "Uiraúna",
                "slug" => "uirauna",
            ],
            [
                "state_id" => 15,
                "name" => "Umbuzeiro",
                "slug" => "umbuzeiro",
            ],
            [
                "state_id" => 15,
                "name" => "Várzea",
                "slug" => "varzea",
            ],
            [
                "state_id" => 15,
                "name" => "Vieirópolis",
                "slug" => "vieiropolis",
            ],
            [
                "state_id" => 15,
                "name" => "Vista Serrana",
                "slug" => "vista-serrana",
            ],
            [
                "state_id" => 15,
                "name" => "Zabelê",
                "slug" => "zabele",
            ],
            [
                "state_id" => 18,
                "name" => "Abatiá",
                "slug" => "abatia",
            ],
            [
                "state_id" => 18,
                "name" => "Adrianópolis",
                "slug" => "adrianopolis",
            ],
            [
                "state_id" => 18,
                "name" => "Agudos do Sul",
                "slug" => "agudos-do-sul",
            ],
            [
                "state_id" => 18,
                "name" => "Almirante Tamandaré",
                "slug" => "almirante-tamandare",
            ],
            [
                "state_id" => 18,
                "name" => "Altamira do Paraná",
                "slug" => "altamira-do-parana",
            ],
            [
                "state_id" => 18,
                "name" => "Alto Paraíso",
                "slug" => "alto-paraiso",
            ],
            [
                "state_id" => 18,
                "name" => "Alto Paraná",
                "slug" => "alto-parana",
            ],
            [
                "state_id" => 18,
                "name" => "Alto Piquiri",
                "slug" => "alto-piquiri",
            ],
            [
                "state_id" => 18,
                "name" => "Altônia",
                "slug" => "altonia",
            ],
            [
                "state_id" => 18,
                "name" => "Alvorada do Sul",
                "slug" => "alvorada-do-sul",
            ],
            [
                "state_id" => 18,
                "name" => "Amaporã",
                "slug" => "amapora",
            ],
            [
                "state_id" => 18,
                "name" => "Ampére",
                "slug" => "ampere",
            ],
            [
                "state_id" => 18,
                "name" => "Anahy",
                "slug" => "anahy",
            ],
            [
                "state_id" => 18,
                "name" => "Andirá",
                "slug" => "andira",
            ],
            [
                "state_id" => 18,
                "name" => "Ângulo",
                "slug" => "angulo",
            ],
            [
                "state_id" => 18,
                "name" => "Antonina",
                "slug" => "antonina",
            ],
            [
                "state_id" => 18,
                "name" => "Antônio Olinto",
                "slug" => "antonio-olinto",
            ],
            [
                "state_id" => 18,
                "name" => "Apucarana",
                "slug" => "apucarana",
            ],
            [
                "state_id" => 18,
                "name" => "Arapongas",
                "slug" => "arapongas",
            ],
            [
                "state_id" => 18,
                "name" => "Arapoti",
                "slug" => "arapoti",
            ],
            [
                "state_id" => 18,
                "name" => "Arapuã",
                "slug" => "arapua",
            ],
            [
                "state_id" => 18,
                "name" => "Araruna",
                "slug" => "araruna",
            ],
            [
                "state_id" => 18,
                "name" => "Araucária",
                "slug" => "araucaria",
            ],
            [
                "state_id" => 18,
                "name" => "Ariranha do Ivaí",
                "slug" => "ariranha-do-ivai",
            ],
            [
                "state_id" => 18,
                "name" => "Assaí",
                "slug" => "assai",
            ],
            [
                "state_id" => 18,
                "name" => "Assis Chateaubriand",
                "slug" => "assis-chateaubriand",
            ],
            [
                "state_id" => 18,
                "name" => "Astorga",
                "slug" => "astorga",
            ],
            [
                "state_id" => 18,
                "name" => "Atalaia",
                "slug" => "atalaia",
            ],
            [
                "state_id" => 18,
                "name" => "Balsa Nova",
                "slug" => "balsa-nova",
            ],
            [
                "state_id" => 18,
                "name" => "Bandeirantes",
                "slug" => "bandeirantes",
            ],
            [
                "state_id" => 18,
                "name" => "Barbosa Ferraz",
                "slug" => "barbosa-ferraz",
            ],
            [
                "state_id" => 18,
                "name" => "Barra do Jacaré",
                "slug" => "barra-do-jacare",
            ],
            [
                "state_id" => 18,
                "name" => "Barracão",
                "slug" => "barracao",
            ],
            [
                "state_id" => 18,
                "name" => "Bela Vista da Caroba",
                "slug" => "bela-vista-da-caroba",
            ],
            [
                "state_id" => 18,
                "name" => "Bela Vista do Paraíso",
                "slug" => "bela-vista-do-paraiso",
            ],
            [
                "state_id" => 18,
                "name" => "Bituruna",
                "slug" => "bituruna",
            ],
            [
                "state_id" => 18,
                "name" => "Boa Esperança",
                "slug" => "boa-esperanca",
            ],
            [
                "state_id" => 18,
                "name" => "Boa Esperança do Iguaçu",
                "slug" => "boa-esperanca-do-iguacu",
            ],
            [
                "state_id" => 18,
                "name" => "Boa Ventura de São Roque",
                "slug" => "boa-ventura-de-sao-roque",
            ],
            [
                "state_id" => 18,
                "name" => "Boa Vista da Aparecida",
                "slug" => "boa-vista-da-aparecida",
            ],
            [
                "state_id" => 18,
                "name" => "Bocaiúva do Sul",
                "slug" => "bocaiuva-do-sul",
            ],
            [
                "state_id" => 18,
                "name" => "Bom Jesus do Sul",
                "slug" => "bom-jesus-do-sul",
            ],
            [
                "state_id" => 18,
                "name" => "Bom Sucesso",
                "slug" => "bom-sucesso",
            ],
            [
                "state_id" => 18,
                "name" => "Bom Sucesso do Sul",
                "slug" => "bom-sucesso-do-sul",
            ],
            [
                "state_id" => 18,
                "name" => "Borrazópolis",
                "slug" => "borrazopolis",
            ],
            [
                "state_id" => 18,
                "name" => "Braganey",
                "slug" => "braganey",
            ],
            [
                "state_id" => 18,
                "name" => "Brasilândia do Sul",
                "slug" => "brasilandia-do-sul",
            ],
            [
                "state_id" => 18,
                "name" => "Cafeara",
                "slug" => "cafeara",
            ],
            [
                "state_id" => 18,
                "name" => "Cafelândia",
                "slug" => "cafelandia",
            ],
            [
                "state_id" => 18,
                "name" => "Cafezal do Sul",
                "slug" => "cafezal-do-sul",
            ],
            [
                "state_id" => 18,
                "name" => "Califórnia",
                "slug" => "california",
            ],
            [
                "state_id" => 18,
                "name" => "Cambará",
                "slug" => "cambara",
            ],
            [
                "state_id" => 18,
                "name" => "Cambé",
                "slug" => "cambe",
            ],
            [
                "state_id" => 18,
                "name" => "Cambira",
                "slug" => "cambira",
            ],
            [
                "state_id" => 18,
                "name" => "Campina da Lagoa",
                "slug" => "campina-da-lagoa",
            ],
            [
                "state_id" => 18,
                "name" => "Campina do Simão",
                "slug" => "campina-do-simao",
            ],
            [
                "state_id" => 18,
                "name" => "Campina Grande do Sul",
                "slug" => "campina-grande-do-sul",
            ],
            [
                "state_id" => 18,
                "name" => "Campo Bonito",
                "slug" => "campo-bonito",
            ],
            [
                "state_id" => 18,
                "name" => "Campo do Tenente",
                "slug" => "campo-do-tenente",
            ],
            [
                "state_id" => 18,
                "name" => "Campo Largo",
                "slug" => "campo-largo",
            ],
            [
                "state_id" => 18,
                "name" => "Campo Magro",
                "slug" => "campo-magro",
            ],
            [
                "state_id" => 18,
                "name" => "Campo Mourão",
                "slug" => "campo-mourao",
            ],
            [
                "state_id" => 18,
                "name" => "Cândido de Abreu",
                "slug" => "candido-de-abreu",
            ],
            [
                "state_id" => 18,
                "name" => "Candói",
                "slug" => "candoi",
            ],
            [
                "state_id" => 18,
                "name" => "Cantagalo",
                "slug" => "cantagalo",
            ],
            [
                "state_id" => 18,
                "name" => "Capanema",
                "slug" => "capanema",
            ],
            [
                "state_id" => 18,
                "name" => "Capitão Leônidas Marques",
                "slug" => "capitao-leonidas-marques",
            ],
            [
                "state_id" => 18,
                "name" => "Carambeí",
                "slug" => "carambei",
            ],
            [
                "state_id" => 18,
                "name" => "Carlópolis",
                "slug" => "carlopolis",
            ],
            [
                "state_id" => 18,
                "name" => "Cascavel",
                "slug" => "cascavel",
            ],
            [
                "state_id" => 18,
                "name" => "Castro",
                "slug" => "castro",
            ],
            [
                "state_id" => 18,
                "name" => "Catanduvas",
                "slug" => "catanduvas",
            ],
            [
                "state_id" => 18,
                "name" => "Centenário do Sul",
                "slug" => "centenario-do-sul",
            ],
            [
                "state_id" => 18,
                "name" => "Cerro Azul",
                "slug" => "cerro-azul",
            ],
            [
                "state_id" => 18,
                "name" => "Céu Azul",
                "slug" => "ceu-azul",
            ],
            [
                "state_id" => 18,
                "name" => "Chopinzinho",
                "slug" => "chopinzinho",
            ],
            [
                "state_id" => 18,
                "name" => "Cianorte",
                "slug" => "cianorte",
            ],
            [
                "state_id" => 18,
                "name" => "Cidade Gaúcha",
                "slug" => "cidade-gaucha",
            ],
            [
                "state_id" => 18,
                "name" => "Clevelândia",
                "slug" => "clevelandia",
            ],
            [
                "state_id" => 18,
                "name" => "Colombo",
                "slug" => "colombo",
            ],
            [
                "state_id" => 18,
                "name" => "Colorado",
                "slug" => "colorado",
            ],
            [
                "state_id" => 18,
                "name" => "Congonhinhas",
                "slug" => "congonhinhas",
            ],
            [
                "state_id" => 18,
                "name" => "Conselheiro Mairinck",
                "slug" => "conselheiro-mairinck",
            ],
            [
                "state_id" => 18,
                "name" => "Contenda",
                "slug" => "contenda",
            ],
            [
                "state_id" => 18,
                "name" => "Corbélia",
                "slug" => "corbelia",
            ],
            [
                "state_id" => 18,
                "name" => "Cornélio Procópio",
                "slug" => "cornelio-procopio",
            ],
            [
                "state_id" => 18,
                "name" => "Coronel Domingos Soares",
                "slug" => "coronel-domingos-soares",
            ],
            [
                "state_id" => 18,
                "name" => "Coronel Vivida",
                "slug" => "coronel-vivida",
            ],
            [
                "state_id" => 18,
                "name" => "Corumbataí do Sul",
                "slug" => "corumbatai-do-sul",
            ],
            [
                "state_id" => 18,
                "name" => "Cruz Machado",
                "slug" => "cruz-machado",
            ],
            [
                "state_id" => 18,
                "name" => "Cruzeiro do Iguaçu",
                "slug" => "cruzeiro-do-iguacu",
            ],
            [
                "state_id" => 18,
                "name" => "Cruzeiro do Oeste",
                "slug" => "cruzeiro-do-oeste",
            ],
            [
                "state_id" => 18,
                "name" => "Cruzeiro do Sul",
                "slug" => "cruzeiro-do-sul",
            ],
            [
                "state_id" => 18,
                "name" => "Cruzmaltina",
                "slug" => "cruzmaltina",
            ],
            [
                "state_id" => 18,
                "name" => "Curitiba",
                "slug" => "curitiba",
            ],
            [
                "state_id" => 18,
                "name" => "Curiúva",
                "slug" => "curiuva",
            ],
            [
                "state_id" => 18,
                "name" => "Diamante d`Oeste",
                "slug" => "diamante-doeste",
            ],
            [
                "state_id" => 18,
                "name" => "Diamante do Norte",
                "slug" => "diamante-do-norte",
            ],
            [
                "state_id" => 18,
                "name" => "Diamante do Sul",
                "slug" => "diamante-do-sul",
            ],
            [
                "state_id" => 18,
                "name" => "Dois Vizinhos",
                "slug" => "dois-vizinhos",
            ],
            [
                "state_id" => 18,
                "name" => "Douradina",
                "slug" => "douradina",
            ],
            [
                "state_id" => 18,
                "name" => "Doutor Camargo",
                "slug" => "doutor-camargo",
            ],
            [
                "state_id" => 18,
                "name" => "Doutor Ulysses",
                "slug" => "doutor-ulysses",
            ],
            [
                "state_id" => 18,
                "name" => "Enéas Marques",
                "slug" => "eneas-marques",
            ],
            [
                "state_id" => 18,
                "name" => "Engenheiro Beltrão",
                "slug" => "engenheiro-beltrao",
            ],
            [
                "state_id" => 18,
                "name" => "Entre Rios do Oeste",
                "slug" => "entre-rios-do-oeste",
            ],
            [
                "state_id" => 18,
                "name" => "Esperança Nova",
                "slug" => "esperanca-nova",
            ],
            [
                "state_id" => 18,
                "name" => "Espigão Alto do Iguaçu",
                "slug" => "espigao-alto-do-iguacu",
            ],
            [
                "state_id" => 18,
                "name" => "Farol",
                "slug" => "farol",
            ],
            [
                "state_id" => 18,
                "name" => "Faxinal",
                "slug" => "faxinal",
            ],
            [
                "state_id" => 18,
                "name" => "Fazenda Rio Grande",
                "slug" => "fazenda-rio-grande",
            ],
            [
                "state_id" => 18,
                "name" => "Fênix",
                "slug" => "fenix",
            ],
            [
                "state_id" => 18,
                "name" => "Fernandes Pinheiro",
                "slug" => "fernandes-pinheiro",
            ],
            [
                "state_id" => 18,
                "name" => "Figueira",
                "slug" => "figueira",
            ],
            [
                "state_id" => 18,
                "name" => "Flor da Serra do Sul",
                "slug" => "flor-da-serra-do-sul",
            ],
            [
                "state_id" => 18,
                "name" => "Floraí",
                "slug" => "florai",
            ],
            [
                "state_id" => 18,
                "name" => "Floresta",
                "slug" => "floresta",
            ],
            [
                "state_id" => 18,
                "name" => "Florestópolis",
                "slug" => "florestopolis",
            ],
            [
                "state_id" => 18,
                "name" => "Flórida",
                "slug" => "florida",
            ],
            [
                "state_id" => 18,
                "name" => "Formosa do Oeste",
                "slug" => "formosa-do-oeste",
            ],
            [
                "state_id" => 18,
                "name" => "Foz do Iguaçu",
                "slug" => "foz-do-iguacu",
            ],
            [
                "state_id" => 18,
                "name" => "Foz do Jordão",
                "slug" => "foz-do-jordao",
            ],
            [
                "state_id" => 18,
                "name" => "Francisco Alves",
                "slug" => "francisco-alves",
            ],
            [
                "state_id" => 18,
                "name" => "Francisco Beltrão",
                "slug" => "francisco-beltrao",
            ],
            [
                "state_id" => 18,
                "name" => "General Carneiro",
                "slug" => "general-carneiro",
            ],
            [
                "state_id" => 18,
                "name" => "Godoy Moreira",
                "slug" => "godoy-moreira",
            ],
            [
                "state_id" => 18,
                "name" => "Goioerê",
                "slug" => "goioere",
            ],
            [
                "state_id" => 18,
                "name" => "Goioxim",
                "slug" => "goioxim",
            ],
            [
                "state_id" => 18,
                "name" => "Grandes Rios",
                "slug" => "grandes-rios",
            ],
            [
                "state_id" => 18,
                "name" => "Guaíra",
                "slug" => "guaira",
            ],
            [
                "state_id" => 18,
                "name" => "Guairaçá",
                "slug" => "guairaca",
            ],
            [
                "state_id" => 18,
                "name" => "Guamiranga",
                "slug" => "guamiranga",
            ],
            [
                "state_id" => 18,
                "name" => "Guapirama",
                "slug" => "guapirama",
            ],
            [
                "state_id" => 18,
                "name" => "Guaporema",
                "slug" => "guaporema",
            ],
            [
                "state_id" => 18,
                "name" => "Guaraci",
                "slug" => "guaraci",
            ],
            [
                "state_id" => 18,
                "name" => "Guaraniaçu",
                "slug" => "guaraniacu",
            ],
            [
                "state_id" => 18,
                "name" => "Guarapuava",
                "slug" => "guarapuava",
            ],
            [
                "state_id" => 18,
                "name" => "Guaraqueçaba",
                "slug" => "guaraquecaba",
            ],
            [
                "state_id" => 18,
                "name" => "Guaratuba",
                "slug" => "guaratuba",
            ],
            [
                "state_id" => 18,
                "name" => "Honório Serpa",
                "slug" => "honorio-serpa",
            ],
            [
                "state_id" => 18,
                "name" => "Ibaiti",
                "slug" => "ibaiti",
            ],
            [
                "state_id" => 18,
                "name" => "Ibema",
                "slug" => "ibema",
            ],
            [
                "state_id" => 18,
                "name" => "Ibiporã",
                "slug" => "ibipora",
            ],
            [
                "state_id" => 18,
                "name" => "Icaraíma",
                "slug" => "icaraima",
            ],
            [
                "state_id" => 18,
                "name" => "Iguaraçu",
                "slug" => "iguaracu",
            ],
            [
                "state_id" => 18,
                "name" => "Iguatu",
                "slug" => "iguatu",
            ],
            [
                "state_id" => 18,
                "name" => "Imbaú",
                "slug" => "imbau",
            ],
            [
                "state_id" => 18,
                "name" => "Imbituva",
                "slug" => "imbituva",
            ],
            [
                "state_id" => 18,
                "name" => "Inácio Martins",
                "slug" => "inacio-martins",
            ],
            [
                "state_id" => 18,
                "name" => "Inajá",
                "slug" => "inaja",
            ],
            [
                "state_id" => 18,
                "name" => "Indianópolis",
                "slug" => "indianopolis",
            ],
            [
                "state_id" => 18,
                "name" => "Ipiranga",
                "slug" => "ipiranga",
            ],
            [
                "state_id" => 18,
                "name" => "Iporã",
                "slug" => "ipora",
            ],
            [
                "state_id" => 18,
                "name" => "Iracema do Oeste",
                "slug" => "iracema-do-oeste",
            ],
            [
                "state_id" => 18,
                "name" => "Irati",
                "slug" => "irati",
            ],
            [
                "state_id" => 18,
                "name" => "Iretama",
                "slug" => "iretama",
            ],
            [
                "state_id" => 18,
                "name" => "Itaguajé",
                "slug" => "itaguaje",
            ],
            [
                "state_id" => 18,
                "name" => "Itaipulândia",
                "slug" => "itaipulandia",
            ],
            [
                "state_id" => 18,
                "name" => "Itambaracá",
                "slug" => "itambaraca",
            ],
            [
                "state_id" => 18,
                "name" => "Itambé",
                "slug" => "itambe",
            ],
            [
                "state_id" => 18,
                "name" => "Itapejara d`Oeste",
                "slug" => "itapejara-doeste",
            ],
            [
                "state_id" => 18,
                "name" => "Itaperuçu",
                "slug" => "itaperucu",
            ],
            [
                "state_id" => 18,
                "name" => "Itaúna do Sul",
                "slug" => "itauna-do-sul",
            ],
            [
                "state_id" => 18,
                "name" => "Ivaí",
                "slug" => "ivai",
            ],
            [
                "state_id" => 18,
                "name" => "Ivaiporã",
                "slug" => "ivaipora",
            ],
            [
                "state_id" => 18,
                "name" => "Ivaté",
                "slug" => "ivate",
            ],
            [
                "state_id" => 18,
                "name" => "Ivatuba",
                "slug" => "ivatuba",
            ],
            [
                "state_id" => 18,
                "name" => "Jaboti",
                "slug" => "jaboti",
            ],
            [
                "state_id" => 18,
                "name" => "Jacarezinho",
                "slug" => "jacarezinho",
            ],
            [
                "state_id" => 18,
                "name" => "Jaguapitã",
                "slug" => "jaguapita",
            ],
            [
                "state_id" => 18,
                "name" => "Jaguariaíva",
                "slug" => "jaguariaiva",
            ],
            [
                "state_id" => 18,
                "name" => "Jandaia do Sul",
                "slug" => "jandaia-do-sul",
            ],
            [
                "state_id" => 18,
                "name" => "Janiópolis",
                "slug" => "janiopolis",
            ],
            [
                "state_id" => 18,
                "name" => "Japira",
                "slug" => "japira",
            ],
            [
                "state_id" => 18,
                "name" => "Japurá",
                "slug" => "japura",
            ],
            [
                "state_id" => 18,
                "name" => "Jardim Alegre",
                "slug" => "jardim-alegre",
            ],
            [
                "state_id" => 18,
                "name" => "Jardim Olinda",
                "slug" => "jardim-olinda",
            ],
            [
                "state_id" => 18,
                "name" => "Jataizinho",
                "slug" => "jataizinho",
            ],
            [
                "state_id" => 18,
                "name" => "Jesuítas",
                "slug" => "jesuitas",
            ],
            [
                "state_id" => 18,
                "name" => "Joaquim Távora",
                "slug" => "joaquim-tavora",
            ],
            [
                "state_id" => 18,
                "name" => "Jundiaí do Sul",
                "slug" => "jundiai-do-sul",
            ],
            [
                "state_id" => 18,
                "name" => "Juranda",
                "slug" => "juranda",
            ],
            [
                "state_id" => 18,
                "name" => "Jussara",
                "slug" => "jussara",
            ],
            [
                "state_id" => 18,
                "name" => "Kaloré",
                "slug" => "kalore",
            ],
            [
                "state_id" => 18,
                "name" => "Lapa",
                "slug" => "lapa",
            ],
            [
                "state_id" => 18,
                "name" => "Laranjal",
                "slug" => "laranjal",
            ],
            [
                "state_id" => 18,
                "name" => "Laranjeiras do Sul",
                "slug" => "laranjeiras-do-sul",
            ],
            [
                "state_id" => 18,
                "name" => "Leópolis",
                "slug" => "leopolis",
            ],
            [
                "state_id" => 18,
                "name" => "Lidianópolis",
                "slug" => "lidianopolis",
            ],
            [
                "state_id" => 18,
                "name" => "Lindoeste",
                "slug" => "lindoeste",
            ],
            [
                "state_id" => 18,
                "name" => "Loanda",
                "slug" => "loanda",
            ],
            [
                "state_id" => 18,
                "name" => "Lobato",
                "slug" => "lobato",
            ],
            [
                "state_id" => 18,
                "name" => "Londrina",
                "slug" => "londrina",
            ],
            [
                "state_id" => 18,
                "name" => "Luiziana",
                "slug" => "luiziana",
            ],
            [
                "state_id" => 18,
                "name" => "Lunardelli",
                "slug" => "lunardelli",
            ],
            [
                "state_id" => 18,
                "name" => "Lupionópolis",
                "slug" => "lupionopolis",
            ],
            [
                "state_id" => 18,
                "name" => "Mallet",
                "slug" => "mallet",
            ],
            [
                "state_id" => 18,
                "name" => "Mamborê",
                "slug" => "mambore",
            ],
            [
                "state_id" => 18,
                "name" => "Mandaguaçu",
                "slug" => "mandaguacu",
            ],
            [
                "state_id" => 18,
                "name" => "Mandaguari",
                "slug" => "mandaguari",
            ],
            [
                "state_id" => 18,
                "name" => "Mandirituba",
                "slug" => "mandirituba",
            ],
            [
                "state_id" => 18,
                "name" => "Manfrinópolis",
                "slug" => "manfrinopolis",
            ],
            [
                "state_id" => 18,
                "name" => "Mangueirinha",
                "slug" => "mangueirinha",
            ],
            [
                "state_id" => 18,
                "name" => "Manoel Ribas",
                "slug" => "manoel-ribas",
            ],
            [
                "state_id" => 18,
                "name" => "Marechal Cândido Rondon",
                "slug" => "marechal-candido-rondon",
            ],
            [
                "state_id" => 18,
                "name" => "Maria Helena",
                "slug" => "maria-helena",
            ],
            [
                "state_id" => 18,
                "name" => "Marialva",
                "slug" => "marialva",
            ],
            [
                "state_id" => 18,
                "name" => "Marilândia do Sul",
                "slug" => "marilandia-do-sul",
            ],
            [
                "state_id" => 18,
                "name" => "Marilena",
                "slug" => "marilena",
            ],
            [
                "state_id" => 18,
                "name" => "Mariluz",
                "slug" => "mariluz",
            ],
            [
                "state_id" => 18,
                "name" => "Maringá",
                "slug" => "maringa",
            ],
            [
                "state_id" => 18,
                "name" => "Mariópolis",
                "slug" => "mariopolis",
            ],
            [
                "state_id" => 18,
                "name" => "Maripá",
                "slug" => "maripa",
            ],
            [
                "state_id" => 18,
                "name" => "Marmeleiro",
                "slug" => "marmeleiro",
            ],
            [
                "state_id" => 18,
                "name" => "Marquinho",
                "slug" => "marquinho",
            ],
            [
                "state_id" => 18,
                "name" => "Marumbi",
                "slug" => "marumbi",
            ],
            [
                "state_id" => 18,
                "name" => "Matelândia",
                "slug" => "matelandia",
            ],
            [
                "state_id" => 18,
                "name" => "Matinhos",
                "slug" => "matinhos",
            ],
            [
                "state_id" => 18,
                "name" => "Mato Rico",
                "slug" => "mato-rico",
            ],
            [
                "state_id" => 18,
                "name" => "Mauá da Serra",
                "slug" => "maua-da-serra",
            ],
            [
                "state_id" => 18,
                "name" => "Medianeira",
                "slug" => "medianeira",
            ],
            [
                "state_id" => 18,
                "name" => "Mercedes",
                "slug" => "mercedes",
            ],
            [
                "state_id" => 18,
                "name" => "Mirador",
                "slug" => "mirador",
            ],
            [
                "state_id" => 18,
                "name" => "Miraselva",
                "slug" => "miraselva",
            ],
            [
                "state_id" => 18,
                "name" => "Missal",
                "slug" => "missal",
            ],
            [
                "state_id" => 18,
                "name" => "Moreira Sales",
                "slug" => "moreira-sales",
            ],
            [
                "state_id" => 18,
                "name" => "Morretes",
                "slug" => "morretes",
            ],
            [
                "state_id" => 18,
                "name" => "Munhoz de Melo",
                "slug" => "munhoz-de-melo",
            ],
            [
                "state_id" => 18,
                "name" => "Nossa Senhora das Graças",
                "slug" => "nossa-senhora-das-gracas",
            ],
            [
                "state_id" => 18,
                "name" => "Nova Aliança do Ivaí",
                "slug" => "nova-alianca-do-ivai",
            ],
            [
                "state_id" => 18,
                "name" => "Nova América da Colina",
                "slug" => "nova-america-da-colina",
            ],
            [
                "state_id" => 18,
                "name" => "Nova Aurora",
                "slug" => "nova-aurora",
            ],
            [
                "state_id" => 18,
                "name" => "Nova Cantu",
                "slug" => "nova-cantu",
            ],
            [
                "state_id" => 18,
                "name" => "Nova Esperança",
                "slug" => "nova-esperanca",
            ],
            [
                "state_id" => 18,
                "name" => "Nova Esperança do Sudoeste",
                "slug" => "nova-esperanca-do-sudoeste",
            ],
            [
                "state_id" => 18,
                "name" => "Nova Fátima",
                "slug" => "nova-fatima",
            ],
            [
                "state_id" => 18,
                "name" => "Nova Laranjeiras",
                "slug" => "nova-laranjeiras",
            ],
            [
                "state_id" => 18,
                "name" => "Nova Londrina",
                "slug" => "nova-londrina",
            ],
            [
                "state_id" => 18,
                "name" => "Nova Olímpia",
                "slug" => "nova-olimpia",
            ],
            [
                "state_id" => 18,
                "name" => "Nova Prata do Iguaçu",
                "slug" => "nova-prata-do-iguacu",
            ],
            [
                "state_id" => 18,
                "name" => "Nova Santa Bárbara",
                "slug" => "nova-santa-barbara",
            ],
            [
                "state_id" => 18,
                "name" => "Nova Santa Rosa",
                "slug" => "nova-santa-rosa",
            ],
            [
                "state_id" => 18,
                "name" => "Nova Tebas",
                "slug" => "nova-tebas",
            ],
            [
                "state_id" => 18,
                "name" => "Novo Itacolomi",
                "slug" => "novo-itacolomi",
            ],
            [
                "state_id" => 18,
                "name" => "Ortigueira",
                "slug" => "ortigueira",
            ],
            [
                "state_id" => 18,
                "name" => "Ourizona",
                "slug" => "ourizona",
            ],
            [
                "state_id" => 18,
                "name" => "Ouro Verde do Oeste",
                "slug" => "ouro-verde-do-oeste",
            ],
            [
                "state_id" => 18,
                "name" => "Paiçandu",
                "slug" => "paicandu",
            ],
            [
                "state_id" => 18,
                "name" => "Palmas",
                "slug" => "palmas",
            ],
            [
                "state_id" => 18,
                "name" => "Palmeira",
                "slug" => "palmeira",
            ],
            [
                "state_id" => 18,
                "name" => "Palmital",
                "slug" => "palmital",
            ],
            [
                "state_id" => 18,
                "name" => "Palotina",
                "slug" => "palotina",
            ],
            [
                "state_id" => 18,
                "name" => "Paraíso do Norte",
                "slug" => "paraiso-do-norte",
            ],
            [
                "state_id" => 18,
                "name" => "Paranacity",
                "slug" => "paranacity",
            ],
            [
                "state_id" => 18,
                "name" => "Paranaguá",
                "slug" => "paranagua",
            ],
            [
                "state_id" => 18,
                "name" => "Paranapoema",
                "slug" => "paranapoema",
            ],
            [
                "state_id" => 18,
                "name" => "Paranavaí",
                "slug" => "paranavai",
            ],
            [
                "state_id" => 18,
                "name" => "Pato Bragado",
                "slug" => "pato-bragado",
            ],
            [
                "state_id" => 18,
                "name" => "Pato Branco",
                "slug" => "pato-branco",
            ],
            [
                "state_id" => 18,
                "name" => "Paula Freitas",
                "slug" => "paula-freitas",
            ],
            [
                "state_id" => 18,
                "name" => "Paulo Frontin",
                "slug" => "paulo-frontin",
            ],
            [
                "state_id" => 18,
                "name" => "Peabiru",
                "slug" => "peabiru",
            ],
            [
                "state_id" => 18,
                "name" => "Perobal",
                "slug" => "perobal",
            ],
            [
                "state_id" => 18,
                "name" => "Pérola",
                "slug" => "perola",
            ],
            [
                "state_id" => 18,
                "name" => "Pérola d`Oeste",
                "slug" => "perola-doeste",
            ],
            [
                "state_id" => 18,
                "name" => "Piên",
                "slug" => "pien",
            ],
            [
                "state_id" => 18,
                "name" => "Pinhais",
                "slug" => "pinhais",
            ],
            [
                "state_id" => 18,
                "name" => "Pinhal de São Bento",
                "slug" => "pinhal-de-sao-bento",
            ],
            [
                "state_id" => 18,
                "name" => "Pinhalão",
                "slug" => "pinhalao",
            ],
            [
                "state_id" => 18,
                "name" => "Pinhão",
                "slug" => "pinhao",
            ],
            [
                "state_id" => 18,
                "name" => "Piraí do Sul",
                "slug" => "pirai-do-sul",
            ],
            [
                "state_id" => 18,
                "name" => "Piraquara",
                "slug" => "piraquara",
            ],
            [
                "state_id" => 18,
                "name" => "Pitanga",
                "slug" => "pitanga",
            ],
            [
                "state_id" => 18,
                "name" => "Pitangueiras",
                "slug" => "pitangueiras",
            ],
            [
                "state_id" => 18,
                "name" => "Planaltina do Paraná",
                "slug" => "planaltina-do-parana",
            ],
            [
                "state_id" => 18,
                "name" => "Planalto",
                "slug" => "planalto",
            ],
            [
                "state_id" => 18,
                "name" => "Ponta Grossa",
                "slug" => "ponta-grossa",
            ],
            [
                "state_id" => 18,
                "name" => "Pontal do Paraná",
                "slug" => "pontal-do-parana",
            ],
            [
                "state_id" => 18,
                "name" => "Porecatu",
                "slug" => "porecatu",
            ],
            [
                "state_id" => 18,
                "name" => "Porto Amazonas",
                "slug" => "porto-amazonas",
            ],
            [
                "state_id" => 18,
                "name" => "Porto Barreiro",
                "slug" => "porto-barreiro",
            ],
            [
                "state_id" => 18,
                "name" => "Porto Rico",
                "slug" => "porto-rico",
            ],
            [
                "state_id" => 18,
                "name" => "Porto Vitória",
                "slug" => "porto-vitoria",
            ],
            [
                "state_id" => 18,
                "name" => "Prado Ferreira",
                "slug" => "prado-ferreira",
            ],
            [
                "state_id" => 18,
                "name" => "Pranchita",
                "slug" => "pranchita",
            ],
            [
                "state_id" => 18,
                "name" => "Presidente Castelo Branco",
                "slug" => "presidente-castelo-branco",
            ],
            [
                "state_id" => 18,
                "name" => "Primeiro de Maio",
                "slug" => "primeiro-de-maio",
            ],
            [
                "state_id" => 18,
                "name" => "Prudentópolis",
                "slug" => "prudentopolis",
            ],
            [
                "state_id" => 18,
                "name" => "Quarto Centenário",
                "slug" => "quarto-centenario",
            ],
            [
                "state_id" => 18,
                "name" => "Quatiguá",
                "slug" => "quatigua",
            ],
            [
                "state_id" => 18,
                "name" => "Quatro Barras",
                "slug" => "quatro-barras",
            ],
            [
                "state_id" => 18,
                "name" => "Quatro Pontes",
                "slug" => "quatro-pontes",
            ],
            [
                "state_id" => 18,
                "name" => "Quedas do Iguaçu",
                "slug" => "quedas-do-iguacu",
            ],
            [
                "state_id" => 18,
                "name" => "Querência do Norte",
                "slug" => "querencia-do-norte",
            ],
            [
                "state_id" => 18,
                "name" => "Quinta do Sol",
                "slug" => "quinta-do-sol",
            ],
            [
                "state_id" => 18,
                "name" => "Quitandinha",
                "slug" => "quitandinha",
            ],
            [
                "state_id" => 18,
                "name" => "Ramilândia",
                "slug" => "ramilandia",
            ],
            [
                "state_id" => 18,
                "name" => "Rancho Alegre",
                "slug" => "rancho-alegre",
            ],
            [
                "state_id" => 18,
                "name" => "Rancho Alegre d`Oeste",
                "slug" => "rancho-alegre-doeste",
            ],
            [
                "state_id" => 18,
                "name" => "Realeza",
                "slug" => "realeza",
            ],
            [
                "state_id" => 18,
                "name" => "Rebouças",
                "slug" => "reboucas",
            ],
            [
                "state_id" => 18,
                "name" => "Renascença",
                "slug" => "renascenca",
            ],
            [
                "state_id" => 18,
                "name" => "Reserva",
                "slug" => "reserva",
            ],
            [
                "state_id" => 18,
                "name" => "Reserva do Iguaçu",
                "slug" => "reserva-do-iguacu",
            ],
            [
                "state_id" => 18,
                "name" => "Ribeirão Claro",
                "slug" => "ribeirao-claro",
            ],
            [
                "state_id" => 18,
                "name" => "Ribeirão do Pinhal",
                "slug" => "ribeirao-do-pinhal",
            ],
            [
                "state_id" => 18,
                "name" => "Rio Azul",
                "slug" => "rio-azul",
            ],
            [
                "state_id" => 18,
                "name" => "Rio Bom",
                "slug" => "rio-bom",
            ],
            [
                "state_id" => 18,
                "name" => "Rio Bonito do Iguaçu",
                "slug" => "rio-bonito-do-iguacu",
            ],
            [
                "state_id" => 18,
                "name" => "Rio Branco do Ivaí",
                "slug" => "rio-branco-do-ivai",
            ],
            [
                "state_id" => 18,
                "name" => "Rio Branco do Sul",
                "slug" => "rio-branco-do-sul",
            ],
            [
                "state_id" => 18,
                "name" => "Rio Negro",
                "slug" => "rio-negro",
            ],
            [
                "state_id" => 18,
                "name" => "Rolândia",
                "slug" => "rolandia",
            ],
            [
                "state_id" => 18,
                "name" => "Roncador",
                "slug" => "roncador",
            ],
            [
                "state_id" => 18,
                "name" => "Rondon",
                "slug" => "rondon",
            ],
            [
                "state_id" => 18,
                "name" => "Rosário do Ivaí",
                "slug" => "rosario-do-ivai",
            ],
            [
                "state_id" => 18,
                "name" => "Sabáudia",
                "slug" => "sabaudia",
            ],
            [
                "state_id" => 18,
                "name" => "Salgado Filho",
                "slug" => "salgado-filho",
            ],
            [
                "state_id" => 18,
                "name" => "Salto do Itararé",
                "slug" => "salto-do-itarare",
            ],
            [
                "state_id" => 18,
                "name" => "Salto do Lontra",
                "slug" => "salto-do-lontra",
            ],
            [
                "state_id" => 18,
                "name" => "Santa Amélia",
                "slug" => "santa-amelia",
            ],
            [
                "state_id" => 18,
                "name" => "Santa Cecília do Pavão",
                "slug" => "santa-cecilia-do-pavao",
            ],
            [
                "state_id" => 18,
                "name" => "Santa Cruz de Monte Castelo",
                "slug" => "santa-cruz-de-monte-castelo",
            ],
            [
                "state_id" => 18,
                "name" => "Santa Fé",
                "slug" => "santa-fe",
            ],
            [
                "state_id" => 18,
                "name" => "Santa Helena",
                "slug" => "santa-helena",
            ],
            [
                "state_id" => 18,
                "name" => "Santa Inês",
                "slug" => "santa-ines",
            ],
            [
                "state_id" => 18,
                "name" => "Santa Isabel do Ivaí",
                "slug" => "santa-isabel-do-ivai",
            ],
            [
                "state_id" => 18,
                "name" => "Santa Izabel do Oeste",
                "slug" => "santa-izabel-do-oeste",
            ],
            [
                "state_id" => 18,
                "name" => "Santa Lúcia",
                "slug" => "santa-lucia",
            ],
            [
                "state_id" => 18,
                "name" => "Santa Maria do Oeste",
                "slug" => "santa-maria-do-oeste",
            ],
            [
                "state_id" => 18,
                "name" => "Santa Mariana",
                "slug" => "santa-mariana",
            ],
            [
                "state_id" => 18,
                "name" => "Santa Mônica",
                "slug" => "santa-monica",
            ],
            [
                "state_id" => 18,
                "name" => "Santa Tereza do Oeste",
                "slug" => "santa-tereza-do-oeste",
            ],
            [
                "state_id" => 18,
                "name" => "Santa Terezinha de Itaipu",
                "slug" => "santa-terezinha-de-itaipu",
            ],
            [
                "state_id" => 18,
                "name" => "Santana do Itararé",
                "slug" => "santana-do-itarare",
            ],
            [
                "state_id" => 18,
                "name" => "Santo Antônio da Platina",
                "slug" => "santo-antonio-da-platina",
            ],
            [
                "state_id" => 18,
                "name" => "Santo Antônio do Caiuá",
                "slug" => "santo-antonio-do-caiua",
            ],
            [
                "state_id" => 18,
                "name" => "Santo Antônio do Paraíso",
                "slug" => "santo-antonio-do-paraiso",
            ],
            [
                "state_id" => 18,
                "name" => "Santo Antônio do Sudoeste",
                "slug" => "santo-antonio-do-sudoeste",
            ],
            [
                "state_id" => 18,
                "name" => "Santo Inácio",
                "slug" => "santo-inacio",
            ],
            [
                "state_id" => 18,
                "name" => "São Carlos do Ivaí",
                "slug" => "sao-carlos-do-ivai",
            ],
            [
                "state_id" => 18,
                "name" => "São Jerônimo da Serra",
                "slug" => "sao-jeronimo-da-serra",
            ],
            [
                "state_id" => 18,
                "name" => "São João",
                "slug" => "sao-joao",
            ],
            [
                "state_id" => 18,
                "name" => "São João do Caiuá",
                "slug" => "sao-joao-do-caiua",
            ],
            [
                "state_id" => 18,
                "name" => "São João do Ivaí",
                "slug" => "sao-joao-do-ivai",
            ],
            [
                "state_id" => 18,
                "name" => "São João do Triunfo",
                "slug" => "sao-joao-do-triunfo",
            ],
            [
                "state_id" => 18,
                "name" => "São Jorge d`Oeste",
                "slug" => "sao-jorge-doeste",
            ],
            [
                "state_id" => 18,
                "name" => "São Jorge do Ivaí",
                "slug" => "sao-jorge-do-ivai",
            ],
            [
                "state_id" => 18,
                "name" => "São Jorge do Patrocínio",
                "slug" => "sao-jorge-do-patrocinio",
            ],
            [
                "state_id" => 18,
                "name" => "São José da Boa Vista",
                "slug" => "sao-jose-da-boa-vista",
            ],
            [
                "state_id" => 18,
                "name" => "São José das Palmeiras",
                "slug" => "sao-jose-das-palmeiras",
            ],
            [
                "state_id" => 18,
                "name" => "São José dos Pinhais",
                "slug" => "sao-jose-dos-pinhais",
            ],
            [
                "state_id" => 18,
                "name" => "São Manoel do Paraná",
                "slug" => "sao-manoel-do-parana",
            ],
            [
                "state_id" => 18,
                "name" => "São Mateus do Sul",
                "slug" => "sao-mateus-do-sul",
            ],
            [
                "state_id" => 18,
                "name" => "São Miguel do Iguaçu",
                "slug" => "sao-miguel-do-iguacu",
            ],
            [
                "state_id" => 18,
                "name" => "São Pedro do Iguaçu",
                "slug" => "sao-pedro-do-iguacu",
            ],
            [
                "state_id" => 18,
                "name" => "São Pedro do Ivaí",
                "slug" => "sao-pedro-do-ivai",
            ],
            [
                "state_id" => 18,
                "name" => "São Pedro do Paraná",
                "slug" => "sao-pedro-do-parana",
            ],
            [
                "state_id" => 18,
                "name" => "São Sebastião da Amoreira",
                "slug" => "sao-sebastiao-da-amoreira",
            ],
            [
                "state_id" => 18,
                "name" => "São Tomé",
                "slug" => "sao-tome",
            ],
            [
                "state_id" => 18,
                "name" => "Sapopema",
                "slug" => "sapopema",
            ],
            [
                "state_id" => 18,
                "name" => "Sarandi",
                "slug" => "sarandi",
            ],
            [
                "state_id" => 18,
                "name" => "Saudade do Iguaçu",
                "slug" => "saudade-do-iguacu",
            ],
            [
                "state_id" => 18,
                "name" => "Sengés",
                "slug" => "senges",
            ],
            [
                "state_id" => 18,
                "name" => "Serranópolis do Iguaçu",
                "slug" => "serranopolis-do-iguacu",
            ],
            [
                "state_id" => 18,
                "name" => "Sertaneja",
                "slug" => "sertaneja",
            ],
            [
                "state_id" => 18,
                "name" => "Sertanópolis",
                "slug" => "sertanopolis",
            ],
            [
                "state_id" => 18,
                "name" => "Siqueira Campos",
                "slug" => "siqueira-campos",
            ],
            [
                "state_id" => 18,
                "name" => "Sulina",
                "slug" => "sulina",
            ],
            [
                "state_id" => 18,
                "name" => "Tamarana",
                "slug" => "tamarana",
            ],
            [
                "state_id" => 18,
                "name" => "Tamboara",
                "slug" => "tamboara",
            ],
            [
                "state_id" => 18,
                "name" => "Tapejara",
                "slug" => "tapejara",
            ],
            [
                "state_id" => 18,
                "name" => "Tapira",
                "slug" => "tapira",
            ],
            [
                "state_id" => 18,
                "name" => "Teixeira Soares",
                "slug" => "teixeira-soares",
            ],
            [
                "state_id" => 18,
                "name" => "Telêmaco Borba",
                "slug" => "telemaco-borba",
            ],
            [
                "state_id" => 18,
                "name" => "Terra Boa",
                "slug" => "terra-boa",
            ],
            [
                "state_id" => 18,
                "name" => "Terra Rica",
                "slug" => "terra-rica",
            ],
            [
                "state_id" => 18,
                "name" => "Terra Roxa",
                "slug" => "terra-roxa",
            ],
            [
                "state_id" => 18,
                "name" => "Tibagi",
                "slug" => "tibagi",
            ],
            [
                "state_id" => 18,
                "name" => "Tijucas do Sul",
                "slug" => "tijucas-do-sul",
            ],
            [
                "state_id" => 18,
                "name" => "Toledo",
                "slug" => "toledo",
            ],
            [
                "state_id" => 18,
                "name" => "Tomazina",
                "slug" => "tomazina",
            ],
            [
                "state_id" => 18,
                "name" => "Três Barras do Paraná",
                "slug" => "tres-barras-do-parana",
            ],
            [
                "state_id" => 18,
                "name" => "Tunas do Paraná",
                "slug" => "tunas-do-parana",
            ],
            [
                "state_id" => 18,
                "name" => "Tuneiras do Oeste",
                "slug" => "tuneiras-do-oeste",
            ],
            [
                "state_id" => 18,
                "name" => "Tupãssi",
                "slug" => "tupassi",
            ],
            [
                "state_id" => 18,
                "name" => "Turvo",
                "slug" => "turvo",
            ],
            [
                "state_id" => 18,
                "name" => "Ubiratã",
                "slug" => "ubirata",
            ],
            [
                "state_id" => 18,
                "name" => "Umuarama",
                "slug" => "umuarama",
            ],
            [
                "state_id" => 18,
                "name" => "União da Vitória",
                "slug" => "uniao-da-vitoria",
            ],
            [
                "state_id" => 18,
                "name" => "Uniflor",
                "slug" => "uniflor",
            ],
            [
                "state_id" => 18,
                "name" => "Uraí",
                "slug" => "urai",
            ],
            [
                "state_id" => 18,
                "name" => "Ventania",
                "slug" => "ventania",
            ],
            [
                "state_id" => 18,
                "name" => "Vera Cruz do Oeste",
                "slug" => "vera-cruz-do-oeste",
            ],
            [
                "state_id" => 18,
                "name" => "Verê",
                "slug" => "vere",
            ],
            [
                "state_id" => 18,
                "name" => "Virmond",
                "slug" => "virmond",
            ],
            [
                "state_id" => 18,
                "name" => "Vitorino",
                "slug" => "vitorino",
            ],
            [
                "state_id" => 18,
                "name" => "Wenceslau Braz",
                "slug" => "wenceslau-braz",
            ],
            [
                "state_id" => 18,
                "name" => "Xambrê",
                "slug" => "xambre",
            ],
            [
                "state_id" => 16,
                "name" => "Abreu e Lima",
                "slug" => "abreu-e-lima",
            ],
            [
                "state_id" => 16,
                "name" => "Afogados da Ingazeira",
                "slug" => "afogados-da-ingazeira",
            ],
            [
                "state_id" => 16,
                "name" => "Afrânio",
                "slug" => "afranio",
            ],
            [
                "state_id" => 16,
                "name" => "Agrestina",
                "slug" => "agrestina",
            ],
            [
                "state_id" => 16,
                "name" => "Água Preta",
                "slug" => "agua-preta",
            ],
            [
                "state_id" => 16,
                "name" => "Águas Belas",
                "slug" => "aguas-belas",
            ],
            [
                "state_id" => 16,
                "name" => "Alagoinha",
                "slug" => "alagoinha",
            ],
            [
                "state_id" => 16,
                "name" => "Aliança",
                "slug" => "alianca",
            ],
            [
                "state_id" => 16,
                "name" => "Altinho",
                "slug" => "altinho",
            ],
            [
                "state_id" => 16,
                "name" => "Amaraji",
                "slug" => "amaraji",
            ],
            [
                "state_id" => 16,
                "name" => "Angelim",
                "slug" => "angelim",
            ],
            [
                "state_id" => 16,
                "name" => "Araçoiaba",
                "slug" => "aracoiaba",
            ],
            [
                "state_id" => 16,
                "name" => "Araripina",
                "slug" => "araripina",
            ],
            [
                "state_id" => 16,
                "name" => "Arcoverde",
                "slug" => "arcoverde",
            ],
            [
                "state_id" => 16,
                "name" => "Barra de Guabiraba",
                "slug" => "barra-de-guabiraba",
            ],
            [
                "state_id" => 16,
                "name" => "Barreiros",
                "slug" => "barreiros",
            ],
            [
                "state_id" => 16,
                "name" => "Belém de Maria",
                "slug" => "belem-de-maria",
            ],
            [
                "state_id" => 16,
                "name" => "Belém de São Francisco",
                "slug" => "belem-de-sao-francisco",
            ],
            [
                "state_id" => 16,
                "name" => "Belo Jardim",
                "slug" => "belo-jardim",
            ],
            [
                "state_id" => 16,
                "name" => "Betânia",
                "slug" => "betania",
            ],
            [
                "state_id" => 16,
                "name" => "Bezerros",
                "slug" => "bezerros",
            ],
            [
                "state_id" => 16,
                "name" => "Bodocó",
                "slug" => "bodoco",
            ],
            [
                "state_id" => 16,
                "name" => "Bom Conselho",
                "slug" => "bom-conselho",
            ],
            [
                "state_id" => 16,
                "name" => "Bom Jardim",
                "slug" => "bom-jardim",
            ],
            [
                "state_id" => 16,
                "name" => "Bonito",
                "slug" => "bonito",
            ],
            [
                "state_id" => 16,
                "name" => "Brejão",
                "slug" => "brejao",
            ],
            [
                "state_id" => 16,
                "name" => "Brejinho",
                "slug" => "brejinho",
            ],
            [
                "state_id" => 16,
                "name" => "Brejo da Madre de Deus",
                "slug" => "brejo-da-madre-de-deus",
            ],
            [
                "state_id" => 16,
                "name" => "Buenos Aires",
                "slug" => "buenos-aires",
            ],
            [
                "state_id" => 16,
                "name" => "Buíque",
                "slug" => "buique",
            ],
            [
                "state_id" => 16,
                "name" => "Cabo de Santo Agostinho",
                "slug" => "cabo-de-santo-agostinho",
            ],
            [
                "state_id" => 16,
                "name" => "Cabrobó",
                "slug" => "cabrobo",
            ],
            [
                "state_id" => 16,
                "name" => "Cachoeirinha",
                "slug" => "cachoeirinha",
            ],
            [
                "state_id" => 16,
                "name" => "Caetés",
                "slug" => "caetes",
            ],
            [
                "state_id" => 16,
                "name" => "Calçado",
                "slug" => "calcado",
            ],
            [
                "state_id" => 16,
                "name" => "Calumbi",
                "slug" => "calumbi",
            ],
            [
                "state_id" => 16,
                "name" => "Camaragibe",
                "slug" => "camaragibe",
            ],
            [
                "state_id" => 16,
                "name" => "Camocim de São Félix",
                "slug" => "camocim-de-sao-felix",
            ],
            [
                "state_id" => 16,
                "name" => "Camutanga",
                "slug" => "camutanga",
            ],
            [
                "state_id" => 16,
                "name" => "Canhotinho",
                "slug" => "canhotinho",
            ],
            [
                "state_id" => 16,
                "name" => "Capoeiras",
                "slug" => "capoeiras",
            ],
            [
                "state_id" => 16,
                "name" => "Carnaíba",
                "slug" => "carnaiba",
            ],
            [
                "state_id" => 16,
                "name" => "Carnaubeira da Penha",
                "slug" => "carnaubeira-da-penha",
            ],
            [
                "state_id" => 16,
                "name" => "Carpina",
                "slug" => "carpina",
            ],
            [
                "state_id" => 16,
                "name" => "Caruaru",
                "slug" => "caruaru",
            ],
            [
                "state_id" => 16,
                "name" => "Casinhas",
                "slug" => "casinhas",
            ],
            [
                "state_id" => 16,
                "name" => "Catende",
                "slug" => "catende",
            ],
            [
                "state_id" => 16,
                "name" => "Cedro",
                "slug" => "cedro",
            ],
            [
                "state_id" => 16,
                "name" => "Chã de Alegria",
                "slug" => "cha-de-alegria",
            ],
            [
                "state_id" => 16,
                "name" => "Chã Grande",
                "slug" => "cha-grande",
            ],
            [
                "state_id" => 16,
                "name" => "Condado",
                "slug" => "condado",
            ],
            [
                "state_id" => 16,
                "name" => "Correntes",
                "slug" => "correntes",
            ],
            [
                "state_id" => 16,
                "name" => "Cortês",
                "slug" => "cortes",
            ],
            [
                "state_id" => 16,
                "name" => "Cumaru",
                "slug" => "cumaru",
            ],
            [
                "state_id" => 16,
                "name" => "Cupira",
                "slug" => "cupira",
            ],
            [
                "state_id" => 16,
                "name" => "Custódia",
                "slug" => "custodia",
            ],
            [
                "state_id" => 16,
                "name" => "Dormentes",
                "slug" => "dormentes",
            ],
            [
                "state_id" => 16,
                "name" => "Escada",
                "slug" => "escada",
            ],
            [
                "state_id" => 16,
                "name" => "Exu",
                "slug" => "exu",
            ],
            [
                "state_id" => 16,
                "name" => "Feira Nova",
                "slug" => "feira-nova",
            ],
            [
                "state_id" => 16,
                "name" => "Fernando de Noronha",
                "slug" => "fernando-de-noronha",
            ],
            [
                "state_id" => 16,
                "name" => "Ferreiros",
                "slug" => "ferreiros",
            ],
            [
                "state_id" => 16,
                "name" => "Flores",
                "slug" => "flores",
            ],
            [
                "state_id" => 16,
                "name" => "Floresta",
                "slug" => "floresta",
            ],
            [
                "state_id" => 16,
                "name" => "Frei Miguelinho",
                "slug" => "frei-miguelinho",
            ],
            [
                "state_id" => 16,
                "name" => "Gameleira",
                "slug" => "gameleira",
            ],
            [
                "state_id" => 16,
                "name" => "Garanhuns",
                "slug" => "garanhuns",
            ],
            [
                "state_id" => 16,
                "name" => "Glória do Goitá",
                "slug" => "gloria-do-goita",
            ],
            [
                "state_id" => 16,
                "name" => "Goiana",
                "slug" => "goiana",
            ],
            [
                "state_id" => 16,
                "name" => "Granito",
                "slug" => "granito",
            ],
            [
                "state_id" => 16,
                "name" => "Gravatá",
                "slug" => "gravata",
            ],
            [
                "state_id" => 16,
                "name" => "Iati",
                "slug" => "iati",
            ],
            [
                "state_id" => 16,
                "name" => "Ibimirim",
                "slug" => "ibimirim",
            ],
            [
                "state_id" => 16,
                "name" => "Ibirajuba",
                "slug" => "ibirajuba",
            ],
            [
                "state_id" => 16,
                "name" => "Igarassu",
                "slug" => "igarassu",
            ],
            [
                "state_id" => 16,
                "name" => "Iguaraci",
                "slug" => "iguaraci",
            ],
            [
                "state_id" => 16,
                "name" => "Ilha de Itamaracá",
                "slug" => "ilha-de-itamaraca",
            ],
            [
                "state_id" => 16,
                "name" => "Inajá",
                "slug" => "inaja",
            ],
            [
                "state_id" => 16,
                "name" => "Ingazeira",
                "slug" => "ingazeira",
            ],
            [
                "state_id" => 16,
                "name" => "Ipojuca",
                "slug" => "ipojuca",
            ],
            [
                "state_id" => 16,
                "name" => "Ipubi",
                "slug" => "ipubi",
            ],
            [
                "state_id" => 16,
                "name" => "Itacuruba",
                "slug" => "itacuruba",
            ],
            [
                "state_id" => 16,
                "name" => "Itaíba",
                "slug" => "itaiba",
            ],
            [
                "state_id" => 16,
                "name" => "Itambé",
                "slug" => "itambe",
            ],
            [
                "state_id" => 16,
                "name" => "Itapetim",
                "slug" => "itapetim",
            ],
            [
                "state_id" => 16,
                "name" => "Itapissuma",
                "slug" => "itapissuma",
            ],
            [
                "state_id" => 16,
                "name" => "Itaquitinga",
                "slug" => "itaquitinga",
            ],
            [
                "state_id" => 16,
                "name" => "Jaboatão dos Guararapes",
                "slug" => "jaboatao-dos-guararapes",
            ],
            [
                "state_id" => 16,
                "name" => "Jaqueira",
                "slug" => "jaqueira",
            ],
            [
                "state_id" => 16,
                "name" => "Jataúba",
                "slug" => "jatauba",
            ],
            [
                "state_id" => 16,
                "name" => "Jatobá",
                "slug" => "jatoba",
            ],
            [
                "state_id" => 16,
                "name" => "João Alfredo",
                "slug" => "joao-alfredo",
            ],
            [
                "state_id" => 16,
                "name" => "Joaquim Nabuco",
                "slug" => "joaquim-nabuco",
            ],
            [
                "state_id" => 16,
                "name" => "Jucati",
                "slug" => "jucati",
            ],
            [
                "state_id" => 16,
                "name" => "Jupi",
                "slug" => "jupi",
            ],
            [
                "state_id" => 16,
                "name" => "Jurema",
                "slug" => "jurema",
            ],
            [
                "state_id" => 16,
                "name" => "Lagoa do Carro",
                "slug" => "lagoa-do-carro",
            ],
            [
                "state_id" => 16,
                "name" => "Lagoa do Itaenga",
                "slug" => "lagoa-do-itaenga",
            ],
            [
                "state_id" => 16,
                "name" => "Lagoa do Ouro",
                "slug" => "lagoa-do-ouro",
            ],
            [
                "state_id" => 16,
                "name" => "Lagoa dos Gatos",
                "slug" => "lagoa-dos-gatos",
            ],
            [
                "state_id" => 16,
                "name" => "Lagoa Grande",
                "slug" => "lagoa-grande",
            ],
            [
                "state_id" => 16,
                "name" => "Lajedo",
                "slug" => "lajedo",
            ],
            [
                "state_id" => 16,
                "name" => "Limoeiro",
                "slug" => "limoeiro",
            ],
            [
                "state_id" => 16,
                "name" => "Macaparana",
                "slug" => "macaparana",
            ],
            [
                "state_id" => 16,
                "name" => "Machados",
                "slug" => "machados",
            ],
            [
                "state_id" => 16,
                "name" => "Manari",
                "slug" => "manari",
            ],
            [
                "state_id" => 16,
                "name" => "Maraial",
                "slug" => "maraial",
            ],
            [
                "state_id" => 16,
                "name" => "Mirandiba",
                "slug" => "mirandiba",
            ],
            [
                "state_id" => 16,
                "name" => "Moreilândia",
                "slug" => "moreilandia",
            ],
            [
                "state_id" => 16,
                "name" => "Moreno",
                "slug" => "moreno",
            ],
            [
                "state_id" => 16,
                "name" => "Nazaré da Mata",
                "slug" => "nazare-da-mata",
            ],
            [
                "state_id" => 16,
                "name" => "Olinda",
                "slug" => "olinda",
            ],
            [
                "state_id" => 16,
                "name" => "Orobó",
                "slug" => "orobo",
            ],
            [
                "state_id" => 16,
                "name" => "Orocó",
                "slug" => "oroco",
            ],
            [
                "state_id" => 16,
                "name" => "Ouricuri",
                "slug" => "ouricuri",
            ],
            [
                "state_id" => 16,
                "name" => "Palmares",
                "slug" => "palmares",
            ],
            [
                "state_id" => 16,
                "name" => "Palmeirina",
                "slug" => "palmeirina",
            ],
            [
                "state_id" => 16,
                "name" => "Panelas",
                "slug" => "panelas",
            ],
            [
                "state_id" => 16,
                "name" => "Paranatama",
                "slug" => "paranatama",
            ],
            [
                "state_id" => 16,
                "name" => "Parnamirim",
                "slug" => "parnamirim",
            ],
            [
                "state_id" => 16,
                "name" => "Passira",
                "slug" => "passira",
            ],
            [
                "state_id" => 16,
                "name" => "Paudalho",
                "slug" => "paudalho",
            ],
            [
                "state_id" => 16,
                "name" => "Paulista",
                "slug" => "paulista",
            ],
            [
                "state_id" => 16,
                "name" => "Pedra",
                "slug" => "pedra",
            ],
            [
                "state_id" => 16,
                "name" => "Pesqueira",
                "slug" => "pesqueira",
            ],
            [
                "state_id" => 16,
                "name" => "Petrolândia",
                "slug" => "petrolandia",
            ],
            [
                "state_id" => 16,
                "name" => "Petrolina",
                "slug" => "petrolina",
            ],
            [
                "state_id" => 16,
                "name" => "Poção",
                "slug" => "pocao",
            ],
            [
                "state_id" => 16,
                "name" => "Pombos",
                "slug" => "pombos",
            ],
            [
                "state_id" => 16,
                "name" => "Primavera",
                "slug" => "primavera",
            ],
            [
                "state_id" => 16,
                "name" => "Quipapá",
                "slug" => "quipapa",
            ],
            [
                "state_id" => 16,
                "name" => "Quixaba",
                "slug" => "quixaba",
            ],
            [
                "state_id" => 16,
                "name" => "Recife",
                "slug" => "recife",
            ],
            [
                "state_id" => 16,
                "name" => "Riacho das Almas",
                "slug" => "riacho-das-almas",
            ],
            [
                "state_id" => 16,
                "name" => "Ribeirão",
                "slug" => "ribeirao",
            ],
            [
                "state_id" => 16,
                "name" => "Rio Formoso",
                "slug" => "rio-formoso",
            ],
            [
                "state_id" => 16,
                "name" => "Sairé",
                "slug" => "saire",
            ],
            [
                "state_id" => 16,
                "name" => "Salgadinho",
                "slug" => "salgadinho",
            ],
            [
                "state_id" => 16,
                "name" => "Salgueiro",
                "slug" => "salgueiro",
            ],
            [
                "state_id" => 16,
                "name" => "Saloá",
                "slug" => "saloa",
            ],
            [
                "state_id" => 16,
                "name" => "Sanharó",
                "slug" => "sanharo",
            ],
            [
                "state_id" => 16,
                "name" => "Santa Cruz",
                "slug" => "santa-cruz",
            ],
            [
                "state_id" => 16,
                "name" => "Santa Cruz da Baixa Verde",
                "slug" => "santa-cruz-da-baixa-verde",
            ],
            [
                "state_id" => 16,
                "name" => "Santa Cruz do Capibaribe",
                "slug" => "santa-cruz-do-capibaribe",
            ],
            [
                "state_id" => 16,
                "name" => "Santa Filomena",
                "slug" => "santa-filomena",
            ],
            [
                "state_id" => 16,
                "name" => "Santa Maria da Boa Vista",
                "slug" => "santa-maria-da-boa-vista",
            ],
            [
                "state_id" => 16,
                "name" => "Santa Maria do Cambucá",
                "slug" => "santa-maria-do-cambuca",
            ],
            [
                "state_id" => 16,
                "name" => "Santa Terezinha",
                "slug" => "santa-terezinha",
            ],
            [
                "state_id" => 16,
                "name" => "São Benedito do Sul",
                "slug" => "sao-benedito-do-sul",
            ],
            [
                "state_id" => 16,
                "name" => "São Bento do Una",
                "slug" => "sao-bento-do-una",
            ],
            [
                "state_id" => 16,
                "name" => "São Caitano",
                "slug" => "sao-caitano",
            ],
            [
                "state_id" => 16,
                "name" => "São João",
                "slug" => "sao-joao",
            ],
            [
                "state_id" => 16,
                "name" => "São Joaquim do Monte",
                "slug" => "sao-joaquim-do-monte",
            ],
            [
                "state_id" => 16,
                "name" => "São José da Coroa Grande",
                "slug" => "sao-jose-da-coroa-grande",
            ],
            [
                "state_id" => 16,
                "name" => "São José do Belmonte",
                "slug" => "sao-jose-do-belmonte",
            ],
            [
                "state_id" => 16,
                "name" => "São José do Egito",
                "slug" => "sao-jose-do-egito",
            ],
            [
                "state_id" => 16,
                "name" => "São Lourenço da Mata",
                "slug" => "sao-lourenco-da-mata",
            ],
            [
                "state_id" => 16,
                "name" => "São Vicente Ferrer",
                "slug" => "sao-vicente-ferrer",
            ],
            [
                "state_id" => 16,
                "name" => "Serra Talhada",
                "slug" => "serra-talhada",
            ],
            [
                "state_id" => 16,
                "name" => "Serrita",
                "slug" => "serrita",
            ],
            [
                "state_id" => 16,
                "name" => "Sertânia",
                "slug" => "sertania",
            ],
            [
                "state_id" => 16,
                "name" => "Sirinhaém",
                "slug" => "sirinhaem",
            ],
            [
                "state_id" => 16,
                "name" => "Solidão",
                "slug" => "solidao",
            ],
            [
                "state_id" => 16,
                "name" => "Surubim",
                "slug" => "surubim",
            ],
            [
                "state_id" => 16,
                "name" => "Tabira",
                "slug" => "tabira",
            ],
            [
                "state_id" => 16,
                "name" => "Tacaimbó",
                "slug" => "tacaimbo",
            ],
            [
                "state_id" => 16,
                "name" => "Tacaratu",
                "slug" => "tacaratu",
            ],
            [
                "state_id" => 16,
                "name" => "Tamandaré",
                "slug" => "tamandare",
            ],
            [
                "state_id" => 16,
                "name" => "Taquaritinga do Norte",
                "slug" => "taquaritinga-do-norte",
            ],
            [
                "state_id" => 16,
                "name" => "Terezinha",
                "slug" => "terezinha",
            ],
            [
                "state_id" => 16,
                "name" => "Terra Nova",
                "slug" => "terra-nova",
            ],
            [
                "state_id" => 16,
                "name" => "Timbaúba",
                "slug" => "timbauba",
            ],
            [
                "state_id" => 16,
                "name" => "Toritama",
                "slug" => "toritama",
            ],
            [
                "state_id" => 16,
                "name" => "Tracunhaém",
                "slug" => "tracunhaem",
            ],
            [
                "state_id" => 16,
                "name" => "Trindade",
                "slug" => "trindade",
            ],
            [
                "state_id" => 16,
                "name" => "Triunfo",
                "slug" => "triunfo",
            ],
            [
                "state_id" => 16,
                "name" => "Tupanatinga",
                "slug" => "tupanatinga",
            ],
            [
                "state_id" => 16,
                "name" => "Tuparetama",
                "slug" => "tuparetama",
            ],
            [
                "state_id" => 16,
                "name" => "Venturosa",
                "slug" => "venturosa",
            ],
            [
                "state_id" => 16,
                "name" => "Verdejante",
                "slug" => "verdejante",
            ],
            [
                "state_id" => 16,
                "name" => "Vertente do Lério",
                "slug" => "vertente-do-lerio",
            ],
            [
                "state_id" => 16,
                "name" => "Vertentes",
                "slug" => "vertentes",
            ],
            [
                "state_id" => 16,
                "name" => "Vicência",
                "slug" => "vicencia",
            ],
            [
                "state_id" => 16,
                "name" => "Vitória de Santo Antão",
                "slug" => "vitoria-de-santo-antao",
            ],
            [
                "state_id" => 16,
                "name" => "Xexéu",
                "slug" => "xexeu",
            ],
            [
                "state_id" => 17,
                "name" => "Acauã",
                "slug" => "acaua",
            ],
            [
                "state_id" => 17,
                "name" => "Agricolândia",
                "slug" => "agricolandia",
            ],
            [
                "state_id" => 17,
                "name" => "Água Branca",
                "slug" => "agua-branca",
            ],
            [
                "state_id" => 17,
                "name" => "Alagoinha do Piauí",
                "slug" => "alagoinha-do-piaui",
            ],
            [
                "state_id" => 17,
                "name" => "Alegrete do Piauí",
                "slug" => "alegrete-do-piaui",
            ],
            [
                "state_id" => 17,
                "name" => "Alto Longá",
                "slug" => "alto-longa",
            ],
            [
                "state_id" => 17,
                "name" => "Altos",
                "slug" => "altos",
            ],
            [
                "state_id" => 17,
                "name" => "Alvorada do Gurguéia",
                "slug" => "alvorada-do-gurgueia",
            ],
            [
                "state_id" => 17,
                "name" => "Amarante",
                "slug" => "amarante",
            ],
            [
                "state_id" => 17,
                "name" => "Angical do Piauí",
                "slug" => "angical-do-piaui",
            ],
            [
                "state_id" => 17,
                "name" => "Anísio de Abreu",
                "slug" => "anisio-de-abreu",
            ],
            [
                "state_id" => 17,
                "name" => "Antônio Almeida",
                "slug" => "antonio-almeida",
            ],
            [
                "state_id" => 17,
                "name" => "Aroazes",
                "slug" => "aroazes",
            ],
            [
                "state_id" => 17,
                "name" => "Aroeiras do Itaim",
                "slug" => "aroeiras-do-itaim",
            ],
            [
                "state_id" => 17,
                "name" => "Arraial",
                "slug" => "arraial",
            ],
            [
                "state_id" => 17,
                "name" => "Assunção do Piauí",
                "slug" => "assuncao-do-piaui",
            ],
            [
                "state_id" => 17,
                "name" => "Avelino Lopes",
                "slug" => "avelino-lopes",
            ],
            [
                "state_id" => 17,
                "name" => "Baixa Grande do Ribeiro",
                "slug" => "baixa-grande-do-ribeiro",
            ],
            [
                "state_id" => 17,
                "name" => "Barra d`Alcântara",
                "slug" => "barra-dalcantara",
            ],
            [
                "state_id" => 17,
                "name" => "Barras",
                "slug" => "barras",
            ],
            [
                "state_id" => 17,
                "name" => "Barreiras do Piauí",
                "slug" => "barreiras-do-piaui",
            ],
            [
                "state_id" => 17,
                "name" => "Barro Duro",
                "slug" => "barro-duro",
            ],
            [
                "state_id" => 17,
                "name" => "Batalha",
                "slug" => "batalha",
            ],
            [
                "state_id" => 17,
                "name" => "Bela Vista do Piauí",
                "slug" => "bela-vista-do-piaui",
            ],
            [
                "state_id" => 17,
                "name" => "Belém do Piauí",
                "slug" => "belem-do-piaui",
            ],
            [
                "state_id" => 17,
                "name" => "Beneditinos",
                "slug" => "beneditinos",
            ],
            [
                "state_id" => 17,
                "name" => "Bertolínia",
                "slug" => "bertolinia",
            ],
            [
                "state_id" => 17,
                "name" => "Betânia do Piauí",
                "slug" => "betania-do-piaui",
            ],
            [
                "state_id" => 17,
                "name" => "Boa Hora",
                "slug" => "boa-hora",
            ],
            [
                "state_id" => 17,
                "name" => "Bocaina",
                "slug" => "bocaina",
            ],
            [
                "state_id" => 17,
                "name" => "Bom Jesus",
                "slug" => "bom-jesus",
            ],
            [
                "state_id" => 17,
                "name" => "Bom Princípio do Piauí",
                "slug" => "bom-principio-do-piaui",
            ],
            [
                "state_id" => 17,
                "name" => "Bonfim do Piauí",
                "slug" => "bonfim-do-piaui",
            ],
            [
                "state_id" => 17,
                "name" => "Boqueirão do Piauí",
                "slug" => "boqueirao-do-piaui",
            ],
            [
                "state_id" => 17,
                "name" => "Brasileira",
                "slug" => "brasileira",
            ],
            [
                "state_id" => 17,
                "name" => "Brejo do Piauí",
                "slug" => "brejo-do-piaui",
            ],
            [
                "state_id" => 17,
                "name" => "Buriti dos Lopes",
                "slug" => "buriti-dos-lopes",
            ],
            [
                "state_id" => 17,
                "name" => "Buriti dos Montes",
                "slug" => "buriti-dos-montes",
            ],
            [
                "state_id" => 17,
                "name" => "Cabeceiras do Piauí",
                "slug" => "cabeceiras-do-piaui",
            ],
            [
                "state_id" => 17,
                "name" => "Cajazeiras do Piauí",
                "slug" => "cajazeiras-do-piaui",
            ],
            [
                "state_id" => 17,
                "name" => "Cajueiro da Praia",
                "slug" => "cajueiro-da-praia",
            ],
            [
                "state_id" => 17,
                "name" => "Caldeirão Grande do Piauí",
                "slug" => "caldeirao-grande-do-piaui",
            ],
            [
                "state_id" => 17,
                "name" => "Campinas do Piauí",
                "slug" => "campinas-do-piaui",
            ],
            [
                "state_id" => 17,
                "name" => "Campo Alegre do Fidalgo",
                "slug" => "campo-alegre-do-fidalgo",
            ],
            [
                "state_id" => 17,
                "name" => "Campo Grande do Piauí",
                "slug" => "campo-grande-do-piaui",
            ],
            [
                "state_id" => 17,
                "name" => "Campo Largo do Piauí",
                "slug" => "campo-largo-do-piaui",
            ],
            [
                "state_id" => 17,
                "name" => "Campo Maior",
                "slug" => "campo-maior",
            ],
            [
                "state_id" => 17,
                "name" => "Canavieira",
                "slug" => "canavieira",
            ],
            [
                "state_id" => 17,
                "name" => "Canto do Buriti",
                "slug" => "canto-do-buriti",
            ],
            [
                "state_id" => 17,
                "name" => "Capitão de Campos",
                "slug" => "capitao-de-campos",
            ],
            [
                "state_id" => 17,
                "name" => "Capitão Gervásio Oliveira",
                "slug" => "capitao-gervasio-oliveira",
            ],
            [
                "state_id" => 17,
                "name" => "Caracol",
                "slug" => "caracol",
            ],
            [
                "state_id" => 17,
                "name" => "Caraúbas do Piauí",
                "slug" => "caraubas-do-piaui",
            ],
            [
                "state_id" => 17,
                "name" => "Caridade do Piauí",
                "slug" => "caridade-do-piaui",
            ],
            [
                "state_id" => 17,
                "name" => "Castelo do Piauí",
                "slug" => "castelo-do-piaui",
            ],
            [
                "state_id" => 17,
                "name" => "Caxingó",
                "slug" => "caxingo",
            ],
            [
                "state_id" => 17,
                "name" => "Cocal",
                "slug" => "cocal",
            ],
            [
                "state_id" => 17,
                "name" => "Cocal de Telha",
                "slug" => "cocal-de-telha",
            ],
            [
                "state_id" => 17,
                "name" => "Cocal dos Alves",
                "slug" => "cocal-dos-alves",
            ],
            [
                "state_id" => 17,
                "name" => "Coivaras",
                "slug" => "coivaras",
            ],
            [
                "state_id" => 17,
                "name" => "Colônia do Gurguéia",
                "slug" => "colonia-do-gurgueia",
            ],
            [
                "state_id" => 17,
                "name" => "Colônia do Piauí",
                "slug" => "colonia-do-piaui",
            ],
            [
                "state_id" => 17,
                "name" => "Conceição do Canindé",
                "slug" => "conceicao-do-caninde",
            ],
            [
                "state_id" => 17,
                "name" => "Coronel José Dias",
                "slug" => "coronel-jose-dias",
            ],
            [
                "state_id" => 17,
                "name" => "Corrente",
                "slug" => "corrente",
            ],
            [
                "state_id" => 17,
                "name" => "Cristalândia do Piauí",
                "slug" => "cristalandia-do-piaui",
            ],
            [
                "state_id" => 17,
                "name" => "Cristino Castro",
                "slug" => "cristino-castro",
            ],
            [
                "state_id" => 17,
                "name" => "Curimatá",
                "slug" => "curimata",
            ],
            [
                "state_id" => 17,
                "name" => "Currais",
                "slug" => "currais",
            ],
            [
                "state_id" => 17,
                "name" => "Curral Novo do Piauí",
                "slug" => "curral-novo-do-piaui",
            ],
            [
                "state_id" => 17,
                "name" => "Curralinhos",
                "slug" => "curralinhos",
            ],
            [
                "state_id" => 17,
                "name" => "Demerval Lobão",
                "slug" => "demerval-lobao",
            ],
            [
                "state_id" => 17,
                "name" => "Dirceu Arcoverde",
                "slug" => "dirceu-arcoverde",
            ],
            [
                "state_id" => 17,
                "name" => "Dom Expedito Lopes",
                "slug" => "dom-expedito-lopes",
            ],
            [
                "state_id" => 17,
                "name" => "Dom Inocêncio",
                "slug" => "dom-inocencio",
            ],
            [
                "state_id" => 17,
                "name" => "Domingos Mourão",
                "slug" => "domingos-mourao",
            ],
            [
                "state_id" => 17,
                "name" => "Elesbão Veloso",
                "slug" => "elesbao-veloso",
            ],
            [
                "state_id" => 17,
                "name" => "Eliseu Martins",
                "slug" => "eliseu-martins",
            ],
            [
                "state_id" => 17,
                "name" => "Esperantina",
                "slug" => "esperantina",
            ],
            [
                "state_id" => 17,
                "name" => "Fartura do Piauí",
                "slug" => "fartura-do-piaui",
            ],
            [
                "state_id" => 17,
                "name" => "Flores do Piauí",
                "slug" => "flores-do-piaui",
            ],
            [
                "state_id" => 17,
                "name" => "Floresta do Piauí",
                "slug" => "floresta-do-piaui",
            ],
            [
                "state_id" => 17,
                "name" => "Floriano",
                "slug" => "floriano",
            ],
            [
                "state_id" => 17,
                "name" => "Francinópolis",
                "slug" => "francinopolis",
            ],
            [
                "state_id" => 17,
                "name" => "Francisco Ayres",
                "slug" => "francisco-ayres",
            ],
            [
                "state_id" => 17,
                "name" => "Francisco Macedo",
                "slug" => "francisco-macedo",
            ],
            [
                "state_id" => 17,
                "name" => "Francisco Santos",
                "slug" => "francisco-santos",
            ],
            [
                "state_id" => 17,
                "name" => "Fronteiras",
                "slug" => "fronteiras",
            ],
            [
                "state_id" => 17,
                "name" => "Geminiano",
                "slug" => "geminiano",
            ],
            [
                "state_id" => 17,
                "name" => "Gilbués",
                "slug" => "gilbues",
            ],
            [
                "state_id" => 17,
                "name" => "Guadalupe",
                "slug" => "guadalupe",
            ],
            [
                "state_id" => 17,
                "name" => "Guaribas",
                "slug" => "guaribas",
            ],
            [
                "state_id" => 17,
                "name" => "Hugo Napoleão",
                "slug" => "hugo-napoleao",
            ],
            [
                "state_id" => 17,
                "name" => "Ilha Grande",
                "slug" => "ilha-grande",
            ],
            [
                "state_id" => 17,
                "name" => "Inhuma",
                "slug" => "inhuma",
            ],
            [
                "state_id" => 17,
                "name" => "Ipiranga do Piauí",
                "slug" => "ipiranga-do-piaui",
            ],
            [
                "state_id" => 17,
                "name" => "Isaías Coelho",
                "slug" => "isaias-coelho",
            ],
            [
                "state_id" => 17,
                "name" => "Itainópolis",
                "slug" => "itainopolis",
            ],
            [
                "state_id" => 17,
                "name" => "Itaueira",
                "slug" => "itaueira",
            ],
            [
                "state_id" => 17,
                "name" => "Jacobina do Piauí",
                "slug" => "jacobina-do-piaui",
            ],
            [
                "state_id" => 17,
                "name" => "Jaicós",
                "slug" => "jaicos",
            ],
            [
                "state_id" => 17,
                "name" => "Jardim do Mulato",
                "slug" => "jardim-do-mulato",
            ],
            [
                "state_id" => 17,
                "name" => "Jatobá do Piauí",
                "slug" => "jatoba-do-piaui",
            ],
            [
                "state_id" => 17,
                "name" => "Jerumenha",
                "slug" => "jerumenha",
            ],
            [
                "state_id" => 17,
                "name" => "João Costa",
                "slug" => "joao-costa",
            ],
            [
                "state_id" => 17,
                "name" => "Joaquim Pires",
                "slug" => "joaquim-pires",
            ],
            [
                "state_id" => 17,
                "name" => "Joca Marques",
                "slug" => "joca-marques",
            ],
            [
                "state_id" => 17,
                "name" => "José de Freitas",
                "slug" => "jose-de-freitas",
            ],
            [
                "state_id" => 17,
                "name" => "Juazeiro do Piauí",
                "slug" => "juazeiro-do-piaui",
            ],
            [
                "state_id" => 17,
                "name" => "Júlio Borges",
                "slug" => "julio-borges",
            ],
            [
                "state_id" => 17,
                "name" => "Jurema",
                "slug" => "jurema",
            ],
            [
                "state_id" => 17,
                "name" => "Lagoa Alegre",
                "slug" => "lagoa-alegre",
            ],
            [
                "state_id" => 17,
                "name" => "Lagoa de São Francisco",
                "slug" => "lagoa-de-sao-francisco",
            ],
            [
                "state_id" => 17,
                "name" => "Lagoa do Barro do Piauí",
                "slug" => "lagoa-do-barro-do-piaui",
            ],
            [
                "state_id" => 17,
                "name" => "Lagoa do Piauí",
                "slug" => "lagoa-do-piaui",
            ],
            [
                "state_id" => 17,
                "name" => "Lagoa do Sítio",
                "slug" => "lagoa-do-sitio",
            ],
            [
                "state_id" => 17,
                "name" => "Lagoinha do Piauí",
                "slug" => "lagoinha-do-piaui",
            ],
            [
                "state_id" => 17,
                "name" => "Landri Sales",
                "slug" => "landri-sales",
            ],
            [
                "state_id" => 17,
                "name" => "Luís Correia",
                "slug" => "luis-correia",
            ],
            [
                "state_id" => 17,
                "name" => "Luzilândia",
                "slug" => "luzilandia",
            ],
            [
                "state_id" => 17,
                "name" => "Madeiro",
                "slug" => "madeiro",
            ],
            [
                "state_id" => 17,
                "name" => "Manoel Emídio",
                "slug" => "manoel-emidio",
            ],
            [
                "state_id" => 17,
                "name" => "Marcolândia",
                "slug" => "marcolandia",
            ],
            [
                "state_id" => 17,
                "name" => "Marcos Parente",
                "slug" => "marcos-parente",
            ],
            [
                "state_id" => 17,
                "name" => "Massapê do Piauí",
                "slug" => "massape-do-piaui",
            ],
            [
                "state_id" => 17,
                "name" => "Matias Olímpio",
                "slug" => "matias-olimpio",
            ],
            [
                "state_id" => 17,
                "name" => "Miguel Alves",
                "slug" => "miguel-alves",
            ],
            [
                "state_id" => 17,
                "name" => "Miguel Leão",
                "slug" => "miguel-leao",
            ],
            [
                "state_id" => 17,
                "name" => "Milton Brandão",
                "slug" => "milton-brandao",
            ],
            [
                "state_id" => 17,
                "name" => "Monsenhor Gil",
                "slug" => "monsenhor-gil",
            ],
            [
                "state_id" => 17,
                "name" => "Monsenhor Hipólito",
                "slug" => "monsenhor-hipolito",
            ],
            [
                "state_id" => 17,
                "name" => "Monte Alegre do Piauí",
                "slug" => "monte-alegre-do-piaui",
            ],
            [
                "state_id" => 17,
                "name" => "Morro Cabeça no Tempo",
                "slug" => "morro-cabeca-no-tempo",
            ],
            [
                "state_id" => 17,
                "name" => "Morro do Chapéu do Piauí",
                "slug" => "morro-do-chapeu-do-piaui",
            ],
            [
                "state_id" => 17,
                "name" => "Murici dos Portelas",
                "slug" => "murici-dos-portelas",
            ],
            [
                "state_id" => 17,
                "name" => "Nazaré do Piauí",
                "slug" => "nazare-do-piaui",
            ],
            [
                "state_id" => 17,
                "name" => "Nossa Senhora de Nazaré",
                "slug" => "nossa-senhora-de-nazare",
            ],
            [
                "state_id" => 17,
                "name" => "Nossa Senhora dos Remédios",
                "slug" => "nossa-senhora-dos-remedios",
            ],
            [
                "state_id" => 17,
                "name" => "Nova Santa Rita",
                "slug" => "nova-santa-rita",
            ],
            [
                "state_id" => 17,
                "name" => "Novo Oriente do Piauí",
                "slug" => "novo-oriente-do-piaui",
            ],
            [
                "state_id" => 17,
                "name" => "Novo Santo Antônio",
                "slug" => "novo-santo-antonio",
            ],
            [
                "state_id" => 17,
                "name" => "Oeiras",
                "slug" => "oeiras",
            ],
            [
                "state_id" => 17,
                "name" => "Olho d`Água do Piauí",
                "slug" => "olho-dagua-do-piaui",
            ],
            [
                "state_id" => 17,
                "name" => "Padre Marcos",
                "slug" => "padre-marcos",
            ],
            [
                "state_id" => 17,
                "name" => "Paes Landim",
                "slug" => "paes-landim",
            ],
            [
                "state_id" => 17,
                "name" => "Pajeú do Piauí",
                "slug" => "pajeu-do-piaui",
            ],
            [
                "state_id" => 17,
                "name" => "Palmeira do Piauí",
                "slug" => "palmeira-do-piaui",
            ],
            [
                "state_id" => 17,
                "name" => "Palmeirais",
                "slug" => "palmeirais",
            ],
            [
                "state_id" => 17,
                "name" => "Paquetá",
                "slug" => "paqueta",
            ],
            [
                "state_id" => 17,
                "name" => "Parnaguá",
                "slug" => "parnagua",
            ],
            [
                "state_id" => 17,
                "name" => "Parnaíba",
                "slug" => "parnaiba",
            ],
            [
                "state_id" => 17,
                "name" => "Passagem Franca do Piauí",
                "slug" => "passagem-franca-do-piaui",
            ],
            [
                "state_id" => 17,
                "name" => "Patos do Piauí",
                "slug" => "patos-do-piaui",
            ],
            [
                "state_id" => 17,
                "name" => "Pau d`Arco do Piauí",
                "slug" => "pau-darco-do-piaui",
            ],
            [
                "state_id" => 17,
                "name" => "Paulistana",
                "slug" => "paulistana",
            ],
            [
                "state_id" => 17,
                "name" => "Pavussu",
                "slug" => "pavussu",
            ],
            [
                "state_id" => 17,
                "name" => "Pedro II",
                "slug" => "pedro-ii",
            ],
            [
                "state_id" => 17,
                "name" => "Pedro Laurentino",
                "slug" => "pedro-laurentino",
            ],
            [
                "state_id" => 17,
                "name" => "Picos",
                "slug" => "picos",
            ],
            [
                "state_id" => 17,
                "name" => "Pimenteiras",
                "slug" => "pimenteiras",
            ],
            [
                "state_id" => 17,
                "name" => "Pio IX",
                "slug" => "pio-ix",
            ],
            [
                "state_id" => 17,
                "name" => "Piracuruca",
                "slug" => "piracuruca",
            ],
            [
                "state_id" => 17,
                "name" => "Piripiri",
                "slug" => "piripiri",
            ],
            [
                "state_id" => 17,
                "name" => "Porto",
                "slug" => "porto",
            ],
            [
                "state_id" => 17,
                "name" => "Porto Alegre do Piauí",
                "slug" => "porto-alegre-do-piaui",
            ],
            [
                "state_id" => 17,
                "name" => "Prata do Piauí",
                "slug" => "prata-do-piaui",
            ],
            [
                "state_id" => 17,
                "name" => "Queimada Nova",
                "slug" => "queimada-nova",
            ],
            [
                "state_id" => 17,
                "name" => "Redenção do Gurguéia",
                "slug" => "redencao-do-gurgueia",
            ],
            [
                "state_id" => 17,
                "name" => "Regeneração",
                "slug" => "regeneracao",
            ],
            [
                "state_id" => 17,
                "name" => "Riacho Frio",
                "slug" => "riacho-frio",
            ],
            [
                "state_id" => 17,
                "name" => "Ribeira do Piauí",
                "slug" => "ribeira-do-piaui",
            ],
            [
                "state_id" => 17,
                "name" => "Ribeiro Gonçalves",
                "slug" => "ribeiro-goncalves",
            ],
            [
                "state_id" => 17,
                "name" => "Rio Grande do Piauí",
                "slug" => "rio-grande-do-piaui",
            ],
            [
                "state_id" => 17,
                "name" => "Santa Cruz do Piauí",
                "slug" => "santa-cruz-do-piaui",
            ],
            [
                "state_id" => 17,
                "name" => "Santa Cruz dos Milagres",
                "slug" => "santa-cruz-dos-milagres",
            ],
            [
                "state_id" => 17,
                "name" => "Santa Filomena",
                "slug" => "santa-filomena",
            ],
            [
                "state_id" => 17,
                "name" => "Santa Luz",
                "slug" => "santa-luz",
            ],
            [
                "state_id" => 17,
                "name" => "Santa Rosa do Piauí",
                "slug" => "santa-rosa-do-piaui",
            ],
            [
                "state_id" => 17,
                "name" => "Santana do Piauí",
                "slug" => "santana-do-piaui",
            ],
            [
                "state_id" => 17,
                "name" => "Santo Antônio de Lisboa",
                "slug" => "santo-antonio-de-lisboa",
            ],
            [
                "state_id" => 17,
                "name" => "Santo Antônio dos Milagres",
                "slug" => "santo-antonio-dos-milagres",
            ],
            [
                "state_id" => 17,
                "name" => "Santo Inácio do Piauí",
                "slug" => "santo-inacio-do-piaui",
            ],
            [
                "state_id" => 17,
                "name" => "São Braz do Piauí",
                "slug" => "sao-braz-do-piaui",
            ],
            [
                "state_id" => 17,
                "name" => "São Félix do Piauí",
                "slug" => "sao-felix-do-piaui",
            ],
            [
                "state_id" => 17,
                "name" => "São Francisco de Assis do Piauí",
                "slug" => "sao-francisco-de-assis-do-piaui",
            ],
            [
                "state_id" => 17,
                "name" => "São Francisco do Piauí",
                "slug" => "sao-francisco-do-piaui",
            ],
            [
                "state_id" => 17,
                "name" => "São Gonçalo do Gurguéia",
                "slug" => "sao-goncalo-do-gurgueia",
            ],
            [
                "state_id" => 17,
                "name" => "São Gonçalo do Piauí",
                "slug" => "sao-goncalo-do-piaui",
            ],
            [
                "state_id" => 17,
                "name" => "São João da Canabrava",
                "slug" => "sao-joao-da-canabrava",
            ],
            [
                "state_id" => 17,
                "name" => "São João da Fronteira",
                "slug" => "sao-joao-da-fronteira",
            ],
            [
                "state_id" => 17,
                "name" => "São João da Serra",
                "slug" => "sao-joao-da-serra",
            ],
            [
                "state_id" => 17,
                "name" => "São João da Varjota",
                "slug" => "sao-joao-da-varjota",
            ],
            [
                "state_id" => 17,
                "name" => "São João do Arraial",
                "slug" => "sao-joao-do-arraial",
            ],
            [
                "state_id" => 17,
                "name" => "São João do Piauí",
                "slug" => "sao-joao-do-piaui",
            ],
            [
                "state_id" => 17,
                "name" => "São José do Divino",
                "slug" => "sao-jose-do-divino",
            ],
            [
                "state_id" => 17,
                "name" => "São José do Peixe",
                "slug" => "sao-jose-do-peixe",
            ],
            [
                "state_id" => 17,
                "name" => "São José do Piauí",
                "slug" => "sao-jose-do-piaui",
            ],
            [
                "state_id" => 17,
                "name" => "São Julião",
                "slug" => "sao-juliao",
            ],
            [
                "state_id" => 17,
                "name" => "São Lourenço do Piauí",
                "slug" => "sao-lourenco-do-piaui",
            ],
            [
                "state_id" => 17,
                "name" => "São Luis do Piauí",
                "slug" => "sao-luis-do-piaui",
            ],
            [
                "state_id" => 17,
                "name" => "São Miguel da Baixa Grande",
                "slug" => "sao-miguel-da-baixa-grande",
            ],
            [
                "state_id" => 17,
                "name" => "São Miguel do Fidalgo",
                "slug" => "sao-miguel-do-fidalgo",
            ],
            [
                "state_id" => 17,
                "name" => "São Miguel do Tapuio",
                "slug" => "sao-miguel-do-tapuio",
            ],
            [
                "state_id" => 17,
                "name" => "São Pedro do Piauí",
                "slug" => "sao-pedro-do-piaui",
            ],
            [
                "state_id" => 17,
                "name" => "São Raimundo Nonato",
                "slug" => "sao-raimundo-nonato",
            ],
            [
                "state_id" => 17,
                "name" => "Sebastião Barros",
                "slug" => "sebastiao-barros",
            ],
            [
                "state_id" => 17,
                "name" => "Sebastião Leal",
                "slug" => "sebastiao-leal",
            ],
            [
                "state_id" => 17,
                "name" => "Sigefredo Pacheco",
                "slug" => "sigefredo-pacheco",
            ],
            [
                "state_id" => 17,
                "name" => "Simões",
                "slug" => "simoes",
            ],
            [
                "state_id" => 17,
                "name" => "Simplício Mendes",
                "slug" => "simplicio-mendes",
            ],
            [
                "state_id" => 17,
                "name" => "Socorro do Piauí",
                "slug" => "socorro-do-piaui",
            ],
            [
                "state_id" => 17,
                "name" => "Sussuapara",
                "slug" => "sussuapara",
            ],
            [
                "state_id" => 17,
                "name" => "Tamboril do Piauí",
                "slug" => "tamboril-do-piaui",
            ],
            [
                "state_id" => 17,
                "name" => "Tanque do Piauí",
                "slug" => "tanque-do-piaui",
            ],
            [
                "state_id" => 17,
                "name" => "Teresina",
                "slug" => "teresina",
            ],
            [
                "state_id" => 17,
                "name" => "União",
                "slug" => "uniao",
            ],
            [
                "state_id" => 17,
                "name" => "Uruçuí",
                "slug" => "urucui",
            ],
            [
                "state_id" => 17,
                "name" => "Valença do Piauí",
                "slug" => "valenca-do-piaui",
            ],
            [
                "state_id" => 17,
                "name" => "Várzea Branca",
                "slug" => "varzea-branca",
            ],
            [
                "state_id" => 17,
                "name" => "Várzea Grande",
                "slug" => "varzea-grande",
            ],
            [
                "state_id" => 17,
                "name" => "Vera Mendes",
                "slug" => "vera-mendes",
            ],
            [
                "state_id" => 17,
                "name" => "Vila Nova do Piauí",
                "slug" => "vila-nova-do-piaui",
            ],
            [
                "state_id" => 17,
                "name" => "Wall Ferraz",
                "slug" => "wall-ferraz",
            ],
            [
                "state_id" => 19,
                "name" => "Angra dos Reis",
                "slug" => "angra-dos-reis",
            ],
            [
                "state_id" => 19,
                "name" => "Aperibé",
                "slug" => "aperibe",
            ],
            [
                "state_id" => 19,
                "name" => "Araruama",
                "slug" => "araruama",
            ],
            [
                "state_id" => 19,
                "name" => "Areal",
                "slug" => "areal",
            ],
            [
                "state_id" => 19,
                "name" => "Armação dos Búzios",
                "slug" => "armacao-dos-buzios",
            ],
            [
                "state_id" => 19,
                "name" => "Arraial do Cabo",
                "slug" => "arraial-do-cabo",
            ],
            [
                "state_id" => 19,
                "name" => "Barra do Piraí",
                "slug" => "barra-do-pirai",
            ],
            [
                "state_id" => 19,
                "name" => "Barra Mansa",
                "slug" => "barra-mansa",
            ],
            [
                "state_id" => 19,
                "name" => "Belford Roxo",
                "slug" => "belford-roxo",
            ],
            [
                "state_id" => 19,
                "name" => "Bom Jardim",
                "slug" => "bom-jardim",
            ],
            [
                "state_id" => 19,
                "name" => "Bom Jesus do Itabapoana",
                "slug" => "bom-jesus-do-itabapoana",
            ],
            [
                "state_id" => 19,
                "name" => "Cabo Frio",
                "slug" => "cabo-frio",
            ],
            [
                "state_id" => 19,
                "name" => "Cachoeiras de Macacu",
                "slug" => "cachoeiras-de-macacu",
            ],
            [
                "state_id" => 19,
                "name" => "Cambuci",
                "slug" => "cambuci",
            ],
            [
                "state_id" => 19,
                "name" => "Campos dos Goytacazes",
                "slug" => "campos-dos-goytacazes",
            ],
            [
                "state_id" => 19,
                "name" => "Cantagalo",
                "slug" => "cantagalo",
            ],
            [
                "state_id" => 19,
                "name" => "Carapebus",
                "slug" => "carapebus",
            ],
            [
                "state_id" => 19,
                "name" => "Cardoso Moreira",
                "slug" => "cardoso-moreira",
            ],
            [
                "state_id" => 19,
                "name" => "Carmo",
                "slug" => "carmo",
            ],
            [
                "state_id" => 19,
                "name" => "Casimiro de Abreu",
                "slug" => "casimiro-de-abreu",
            ],
            [
                "state_id" => 19,
                "name" => "Comendador Levy Gasparian",
                "slug" => "comendador-levy-gasparian",
            ],
            [
                "state_id" => 19,
                "name" => "Conceição de Macabu",
                "slug" => "conceicao-de-macabu",
            ],
            [
                "state_id" => 19,
                "name" => "Cordeiro",
                "slug" => "cordeiro",
            ],
            [
                "state_id" => 19,
                "name" => "Duas Barras",
                "slug" => "duas-barras",
            ],
            [
                "state_id" => 19,
                "name" => "Duque de Caxias",
                "slug" => "duque-de-caxias",
            ],
            [
                "state_id" => 19,
                "name" => "Engenheiro Paulo de Frontin",
                "slug" => "engenheiro-paulo-de-frontin",
            ],
            [
                "state_id" => 19,
                "name" => "Guapimirim",
                "slug" => "guapimirim",
            ],
            [
                "state_id" => 19,
                "name" => "Iguaba Grande",
                "slug" => "iguaba-grande",
            ],
            [
                "state_id" => 19,
                "name" => "Itaboraí",
                "slug" => "itaborai",
            ],
            [
                "state_id" => 19,
                "name" => "Itaguaí",
                "slug" => "itaguai",
            ],
            [
                "state_id" => 19,
                "name" => "Italva",
                "slug" => "italva",
            ],
            [
                "state_id" => 19,
                "name" => "Itaocara",
                "slug" => "itaocara",
            ],
            [
                "state_id" => 19,
                "name" => "Itaperuna",
                "slug" => "itaperuna",
            ],
            [
                "state_id" => 19,
                "name" => "Itatiaia",
                "slug" => "itatiaia",
            ],
            [
                "state_id" => 19,
                "name" => "Japeri",
                "slug" => "japeri",
            ],
            [
                "state_id" => 19,
                "name" => "Laje do Muriaé",
                "slug" => "laje-do-muriae",
            ],
            [
                "state_id" => 19,
                "name" => "Macaé",
                "slug" => "macae",
            ],
            [
                "state_id" => 19,
                "name" => "Macuco",
                "slug" => "macuco",
            ],
            [
                "state_id" => 19,
                "name" => "Magé",
                "slug" => "mage",
            ],
            [
                "state_id" => 19,
                "name" => "Mangaratiba",
                "slug" => "mangaratiba",
            ],
            [
                "state_id" => 19,
                "name" => "Maricá",
                "slug" => "marica",
            ],
            [
                "state_id" => 19,
                "name" => "Mendes",
                "slug" => "mendes",
            ],
            [
                "state_id" => 19,
                "name" => "Mesquita",
                "slug" => "mesquita",
            ],
            [
                "state_id" => 19,
                "name" => "Miguel Pereira",
                "slug" => "miguel-pereira",
            ],
            [
                "state_id" => 19,
                "name" => "Miracema",
                "slug" => "miracema",
            ],
            [
                "state_id" => 19,
                "name" => "Natividade",
                "slug" => "natividade",
            ],
            [
                "state_id" => 19,
                "name" => "Nilópolis",
                "slug" => "nilopolis",
            ],
            [
                "state_id" => 19,
                "name" => "Niterói",
                "slug" => "niteroi",
            ],
            [
                "state_id" => 19,
                "name" => "Nova Friburgo",
                "slug" => "nova-friburgo",
            ],
            [
                "state_id" => 19,
                "name" => "Nova Iguaçu",
                "slug" => "nova-iguacu",
            ],
            [
                "state_id" => 19,
                "name" => "Paracambi",
                "slug" => "paracambi",
            ],
            [
                "state_id" => 19,
                "name" => "Paraíba do Sul",
                "slug" => "paraiba-do-sul",
            ],
            [
                "state_id" => 19,
                "name" => "Parati",
                "slug" => "parati",
            ],
            [
                "state_id" => 19,
                "name" => "Paty do Alferes",
                "slug" => "paty-do-alferes",
            ],
            [
                "state_id" => 19,
                "name" => "Petrópolis",
                "slug" => "petropolis",
            ],
            [
                "state_id" => 19,
                "name" => "Pinheiral",
                "slug" => "pinheiral",
            ],
            [
                "state_id" => 19,
                "name" => "Piraí",
                "slug" => "pirai",
            ],
            [
                "state_id" => 19,
                "name" => "Porciúncula",
                "slug" => "porciuncula",
            ],
            [
                "state_id" => 19,
                "name" => "Porto Real",
                "slug" => "porto-real",
            ],
            [
                "state_id" => 19,
                "name" => "Quatis",
                "slug" => "quatis",
            ],
            [
                "state_id" => 19,
                "name" => "Queimados",
                "slug" => "queimados",
            ],
            [
                "state_id" => 19,
                "name" => "Quissamã",
                "slug" => "quissama",
            ],
            [
                "state_id" => 19,
                "name" => "Resende",
                "slug" => "resende",
            ],
            [
                "state_id" => 19,
                "name" => "Rio Bonito",
                "slug" => "rio-bonito",
            ],
            [
                "state_id" => 19,
                "name" => "Rio Claro",
                "slug" => "rio-claro",
            ],
            [
                "state_id" => 19,
                "name" => "Rio das Flores",
                "slug" => "rio-das-flores",
            ],
            [
                "state_id" => 19,
                "name" => "Rio das Ostras",
                "slug" => "rio-das-ostras",
            ],
            [
                "state_id" => 19,
                "name" => "Rio de Janeiro",
                "slug" => "rio-de-janeiro",
            ],
            [
                "state_id" => 19,
                "name" => "Santa Maria Madalena",
                "slug" => "santa-maria-madalena",
            ],
            [
                "state_id" => 19,
                "name" => "Santo Antônio de Pádua",
                "slug" => "santo-antonio-de-padua",
            ],
            [
                "state_id" => 19,
                "name" => "São Fidélis",
                "slug" => "sao-fidelis",
            ],
            [
                "state_id" => 19,
                "name" => "São Francisco de Itabapoana",
                "slug" => "sao-francisco-de-itabapoana",
            ],
            [
                "state_id" => 19,
                "name" => "São Gonçalo",
                "slug" => "sao-goncalo",
            ],
            [
                "state_id" => 19,
                "name" => "São João da Barra",
                "slug" => "sao-joao-da-barra",
            ],
            [
                "state_id" => 19,
                "name" => "São João de Meriti",
                "slug" => "sao-joao-de-meriti",
            ],
            [
                "state_id" => 19,
                "name" => "São José de Ubá",
                "slug" => "sao-jose-de-uba",
            ],
            [
                "state_id" => 19,
                "name" => "São José do Vale do Rio Preto",
                "slug" => "sao-jose-do-vale-do-rio-preto",
            ],
            [
                "state_id" => 19,
                "name" => "São Pedro da Aldeia",
                "slug" => "sao-pedro-da-aldeia",
            ],
            [
                "state_id" => 19,
                "name" => "São Sebastião do Alto",
                "slug" => "sao-sebastiao-do-alto",
            ],
            [
                "state_id" => 19,
                "name" => "Sapucaia",
                "slug" => "sapucaia",
            ],
            [
                "state_id" => 19,
                "name" => "Saquarema",
                "slug" => "saquarema",
            ],
            [
                "state_id" => 19,
                "name" => "Seropédica",
                "slug" => "seropedica",
            ],
            [
                "state_id" => 19,
                "name" => "Silva Jardim",
                "slug" => "silva-jardim",
            ],
            [
                "state_id" => 19,
                "name" => "Sumidouro",
                "slug" => "sumidouro",
            ],
            [
                "state_id" => 19,
                "name" => "Tanguá",
                "slug" => "tangua",
            ],
            [
                "state_id" => 19,
                "name" => "Teresópolis",
                "slug" => "teresopolis",
            ],
            [
                "state_id" => 19,
                "name" => "Trajano de Morais",
                "slug" => "trajano-de-morais",
            ],
            [
                "state_id" => 19,
                "name" => "Três Rios",
                "slug" => "tres-rios",
            ],
            [
                "state_id" => 19,
                "name" => "Valença",
                "slug" => "valenca",
            ],
            [
                "state_id" => 19,
                "name" => "Varre-Sai",
                "slug" => "varre-sai",
            ],
            [
                "state_id" => 19,
                "name" => "Vassouras",
                "slug" => "vassouras",
            ],
            [
                "state_id" => 19,
                "name" => "Volta Redonda",
                "slug" => "volta-redonda",
            ],
            [
                "state_id" => 20,
                "name" => "Acari",
                "slug" => "acari",
            ],
            [
                "state_id" => 20,
                "name" => "Açu",
                "slug" => "acu",
            ],
            [
                "state_id" => 20,
                "name" => "Afonso Bezerra",
                "slug" => "afonso-bezerra",
            ],
            [
                "state_id" => 20,
                "name" => "Água Nova",
                "slug" => "agua-nova",
            ],
            [
                "state_id" => 20,
                "name" => "Alexandria",
                "slug" => "alexandria",
            ],
            [
                "state_id" => 20,
                "name" => "Almino Afonso",
                "slug" => "almino-afonso",
            ],
            [
                "state_id" => 20,
                "name" => "Alto do Rodrigues",
                "slug" => "alto-do-rodrigues",
            ],
            [
                "state_id" => 20,
                "name" => "Jardim de Angicos",
                "slug" => "jardim-de-angicos",
            ],
            [
                "state_id" => 20,
                "name" => "Antônio Martins",
                "slug" => "antonio-martins",
            ],
            [
                "state_id" => 20,
                "name" => "Apodi",
                "slug" => "apodi",
            ],
            [
                "state_id" => 20,
                "name" => "Areia Branca",
                "slug" => "areia-branca",
            ],
            [
                "state_id" => 20,
                "name" => "Arês",
                "slug" => "ares",
            ],
            [
                "state_id" => 20,
                "name" => "Augusto Severo",
                "slug" => "augusto-severo",
            ],
            [
                "state_id" => 20,
                "name" => "Baía Formosa",
                "slug" => "baia-formosa",
            ],
            [
                "state_id" => 20,
                "name" => "Baraúna",
                "slug" => "barauna",
            ],
            [
                "state_id" => 20,
                "name" => "Barcelona",
                "slug" => "barcelona",
            ],
            [
                "state_id" => 20,
                "name" => "Bento Fernandes",
                "slug" => "bento-fernandes",
            ],
            [
                "state_id" => 20,
                "name" => "Bodó",
                "slug" => "bodo",
            ],
            [
                "state_id" => 20,
                "name" => "Bom Jesus",
                "slug" => "bom-jesus",
            ],
            [
                "state_id" => 20,
                "name" => "Brejinho",
                "slug" => "brejinho",
            ],
            [
                "state_id" => 20,
                "name" => "Caiçara do Norte",
                "slug" => "caicara-do-norte",
            ],
            [
                "state_id" => 20,
                "name" => "Caiçara do Rio do Vento",
                "slug" => "caicara-do-rio-do-vento",
            ],
            [
                "state_id" => 20,
                "name" => "Caicó",
                "slug" => "caico",
            ],
            [
                "state_id" => 20,
                "name" => "Campo Redondo",
                "slug" => "campo-redondo",
            ],
            [
                "state_id" => 20,
                "name" => "Canguaretama",
                "slug" => "canguaretama",
            ],
            [
                "state_id" => 20,
                "name" => "Caraúbas",
                "slug" => "caraubas",
            ],
            [
                "state_id" => 20,
                "name" => "Carnaúba dos Dantas",
                "slug" => "carnauba-dos-dantas",
            ],
            [
                "state_id" => 20,
                "name" => "Carnaubais",
                "slug" => "carnaubais",
            ],
            [
                "state_id" => 20,
                "name" => "Ceará-Mirim",
                "slug" => "ceara-mirim",
            ],
            [
                "state_id" => 20,
                "name" => "Cerro Corá",
                "slug" => "cerro-cora",
            ],
            [
                "state_id" => 20,
                "name" => "Coronel Ezequiel",
                "slug" => "coronel-ezequiel",
            ],
            [
                "state_id" => 20,
                "name" => "Coronel João Pessoa",
                "slug" => "coronel-joao-pessoa",
            ],
            [
                "state_id" => 20,
                "name" => "Cruzeta",
                "slug" => "cruzeta",
            ],
            [
                "state_id" => 20,
                "name" => "Currais Novos",
                "slug" => "currais-novos",
            ],
            [
                "state_id" => 20,
                "name" => "Doutor Severiano",
                "slug" => "doutor-severiano",
            ],
            [
                "state_id" => 20,
                "name" => "Encanto",
                "slug" => "encanto",
            ],
            [
                "state_id" => 20,
                "name" => "Equador",
                "slug" => "equador",
            ],
            [
                "state_id" => 20,
                "name" => "Espírito Santo",
                "slug" => "espirito-santo",
            ],
            [
                "state_id" => 20,
                "name" => "Extremoz",
                "slug" => "extremoz",
            ],
            [
                "state_id" => 20,
                "name" => "Felipe Guerra",
                "slug" => "felipe-guerra",
            ],
            [
                "state_id" => 20,
                "name" => "Fernando Pedroza",
                "slug" => "fernando-pedroza",
            ],
            [
                "state_id" => 20,
                "name" => "Florânia",
                "slug" => "florania",
            ],
            [
                "state_id" => 20,
                "name" => "Francisco Dantas",
                "slug" => "francisco-dantas",
            ],
            [
                "state_id" => 20,
                "name" => "Frutuoso Gomes",
                "slug" => "frutuoso-gomes",
            ],
            [
                "state_id" => 20,
                "name" => "Galinhos",
                "slug" => "galinhos",
            ],
            [
                "state_id" => 20,
                "name" => "Goianinha",
                "slug" => "goianinha",
            ],
            [
                "state_id" => 20,
                "name" => "Governador Dix-Sept Rosado",
                "slug" => "governador-dix-sept-rosado",
            ],
            [
                "state_id" => 20,
                "name" => "Grossos",
                "slug" => "grossos",
            ],
            [
                "state_id" => 20,
                "name" => "Guamaré",
                "slug" => "guamare",
            ],
            [
                "state_id" => 20,
                "name" => "Ielmo Marinho",
                "slug" => "ielmo-marinho",
            ],
            [
                "state_id" => 20,
                "name" => "Ipanguaçu",
                "slug" => "ipanguacu",
            ],
            [
                "state_id" => 20,
                "name" => "Ipueira",
                "slug" => "ipueira",
            ],
            [
                "state_id" => 20,
                "name" => "Itajá",
                "slug" => "itaja",
            ],
            [
                "state_id" => 20,
                "name" => "Itaú",
                "slug" => "itau",
            ],
            [
                "state_id" => 20,
                "name" => "Jaçanã",
                "slug" => "jacana",
            ],
            [
                "state_id" => 20,
                "name" => "Jandaíra",
                "slug" => "jandaira",
            ],
            [
                "state_id" => 20,
                "name" => "Janduís",
                "slug" => "janduis",
            ],
            [
                "state_id" => 20,
                "name" => "Januário Cicco",
                "slug" => "januario-cicco",
            ],
            [
                "state_id" => 20,
                "name" => "Japi",
                "slug" => "japi",
            ],
            [
                "state_id" => 20,
                "name" => "Jardim de Piranhas",
                "slug" => "jardim-de-piranhas",
            ],
            [
                "state_id" => 20,
                "name" => "Jardim do Seridó",
                "slug" => "jardim-do-serido",
            ],
            [
                "state_id" => 20,
                "name" => "João Câmara",
                "slug" => "joao-camara",
            ],
            [
                "state_id" => 20,
                "name" => "João Dias",
                "slug" => "joao-dias",
            ],
            [
                "state_id" => 20,
                "name" => "José da Penha",
                "slug" => "jose-da-penha",
            ],
            [
                "state_id" => 20,
                "name" => "Jucurutu",
                "slug" => "jucurutu",
            ],
            [
                "state_id" => 20,
                "name" => "Jundiá",
                "slug" => "jundia",
            ],
            [
                "state_id" => 20,
                "name" => "Lagoa d`Anta",
                "slug" => "lagoa-danta",
            ],
            [
                "state_id" => 20,
                "name" => "Lagoa de Pedras",
                "slug" => "lagoa-de-pedras",
            ],
            [
                "state_id" => 20,
                "name" => "Lagoa de Velhos",
                "slug" => "lagoa-de-velhos",
            ],
            [
                "state_id" => 20,
                "name" => "Lagoa Nova",
                "slug" => "lagoa-nova",
            ],
            [
                "state_id" => 20,
                "name" => "Lagoa Salgada",
                "slug" => "lagoa-salgada",
            ],
            [
                "state_id" => 20,
                "name" => "Lajes",
                "slug" => "lajes",
            ],
            [
                "state_id" => 20,
                "name" => "Lajes Pintadas",
                "slug" => "lajes-pintadas",
            ],
            [
                "state_id" => 20,
                "name" => "Lucrécia",
                "slug" => "lucrecia",
            ],
            [
                "state_id" => 20,
                "name" => "Luís Gomes",
                "slug" => "luis-gomes",
            ],
            [
                "state_id" => 20,
                "name" => "Macaíba",
                "slug" => "macaiba",
            ],
            [
                "state_id" => 20,
                "name" => "Macau",
                "slug" => "macau",
            ],
            [
                "state_id" => 20,
                "name" => "Major Sales",
                "slug" => "major-sales",
            ],
            [
                "state_id" => 20,
                "name" => "Marcelino Vieira",
                "slug" => "marcelino-vieira",
            ],
            [
                "state_id" => 20,
                "name" => "Martins",
                "slug" => "martins",
            ],
            [
                "state_id" => 20,
                "name" => "Maxaranguape",
                "slug" => "maxaranguape",
            ],
            [
                "state_id" => 20,
                "name" => "Messias Targino",
                "slug" => "messias-targino",
            ],
            [
                "state_id" => 20,
                "name" => "Montanhas",
                "slug" => "montanhas",
            ],
            [
                "state_id" => 20,
                "name" => "Monte Alegre",
                "slug" => "monte-alegre",
            ],
            [
                "state_id" => 20,
                "name" => "Monte das Gameleiras",
                "slug" => "monte-das-gameleiras",
            ],
            [
                "state_id" => 20,
                "name" => "Mossoró",
                "slug" => "mossoro",
            ],
            [
                "state_id" => 20,
                "name" => "Natal",
                "slug" => "natal",
            ],
            [
                "state_id" => 20,
                "name" => "Nísia Floresta",
                "slug" => "nisia-floresta",
            ],
            [
                "state_id" => 20,
                "name" => "Nova Cruz",
                "slug" => "nova-cruz",
            ],
            [
                "state_id" => 20,
                "name" => "Olho-d`Água do Borges",
                "slug" => "olho-dagua-do-borges",
            ],
            [
                "state_id" => 20,
                "name" => "Ouro Branco",
                "slug" => "ouro-branco",
            ],
            [
                "state_id" => 20,
                "name" => "Paraná",
                "slug" => "parana",
            ],
            [
                "state_id" => 20,
                "name" => "Paraú",
                "slug" => "parau",
            ],
            [
                "state_id" => 20,
                "name" => "Parazinho",
                "slug" => "parazinho",
            ],
            [
                "state_id" => 20,
                "name" => "Parelhas",
                "slug" => "parelhas",
            ],
            [
                "state_id" => 20,
                "name" => "Parnamirim",
                "slug" => "parnamirim",
            ],
            [
                "state_id" => 20,
                "name" => "Passa e Fica",
                "slug" => "passa-e-fica",
            ],
            [
                "state_id" => 20,
                "name" => "Passagem",
                "slug" => "passagem",
            ],
            [
                "state_id" => 20,
                "name" => "Patu",
                "slug" => "patu",
            ],
            [
                "state_id" => 20,
                "name" => "Pau dos Ferros",
                "slug" => "pau-dos-ferros",
            ],
            [
                "state_id" => 20,
                "name" => "Pedra Grande",
                "slug" => "pedra-grande",
            ],
            [
                "state_id" => 20,
                "name" => "Pedra Preta",
                "slug" => "pedra-preta",
            ],
            [
                "state_id" => 20,
                "name" => "Pedro Avelino",
                "slug" => "pedro-avelino",
            ],
            [
                "state_id" => 20,
                "name" => "Pedro Velho",
                "slug" => "pedro-velho",
            ],
            [
                "state_id" => 20,
                "name" => "Pendências",
                "slug" => "pendencias",
            ],
            [
                "state_id" => 20,
                "name" => "Pilões",
                "slug" => "piloes",
            ],
            [
                "state_id" => 20,
                "name" => "Poço Branco",
                "slug" => "poco-branco",
            ],
            [
                "state_id" => 20,
                "name" => "Portalegre",
                "slug" => "portalegre",
            ],
            [
                "state_id" => 20,
                "name" => "Porto do Mangue",
                "slug" => "porto-do-mangue",
            ],
            [
                "state_id" => 20,
                "name" => "Presidente Juscelino",
                "slug" => "presidente-juscelino",
            ],
            [
                "state_id" => 20,
                "name" => "Pureza",
                "slug" => "pureza",
            ],
            [
                "state_id" => 20,
                "name" => "Rafael Fernandes",
                "slug" => "rafael-fernandes",
            ],
            [
                "state_id" => 20,
                "name" => "Rafael Godeiro",
                "slug" => "rafael-godeiro",
            ],
            [
                "state_id" => 20,
                "name" => "Riacho da Cruz",
                "slug" => "riacho-da-cruz",
            ],
            [
                "state_id" => 20,
                "name" => "Riacho de Santana",
                "slug" => "riacho-de-santana",
            ],
            [
                "state_id" => 20,
                "name" => "Riachuelo",
                "slug" => "riachuelo",
            ],
            [
                "state_id" => 20,
                "name" => "Rio do Fogo",
                "slug" => "rio-do-fogo",
            ],
            [
                "state_id" => 20,
                "name" => "Rodolfo Fernandes",
                "slug" => "rodolfo-fernandes",
            ],
            [
                "state_id" => 20,
                "name" => "Ruy Barbosa",
                "slug" => "ruy-barbosa",
            ],
            [
                "state_id" => 20,
                "name" => "Santa Cruz",
                "slug" => "santa-cruz",
            ],
            [
                "state_id" => 20,
                "name" => "Santa Maria",
                "slug" => "santa-maria",
            ],
            [
                "state_id" => 20,
                "name" => "Santana do Matos",
                "slug" => "santana-do-matos",
            ],
            [
                "state_id" => 20,
                "name" => "Santana do Seridó",
                "slug" => "santana-do-serido",
            ],
            [
                "state_id" => 20,
                "name" => "Santo Antônio",
                "slug" => "santo-antonio",
            ],
            [
                "state_id" => 20,
                "name" => "São Bento do Norte",
                "slug" => "sao-bento-do-norte",
            ],
            [
                "state_id" => 20,
                "name" => "São Bento do Trairí",
                "slug" => "sao-bento-do-trairi",
            ],
            [
                "state_id" => 20,
                "name" => "São Fernando",
                "slug" => "sao-fernando",
            ],
            [
                "state_id" => 20,
                "name" => "São Francisco do Oeste",
                "slug" => "sao-francisco-do-oeste",
            ],
            [
                "state_id" => 20,
                "name" => "São Gonçalo do Amarante",
                "slug" => "sao-goncalo-do-amarante",
            ],
            [
                "state_id" => 20,
                "name" => "São João do Sabugi",
                "slug" => "sao-joao-do-sabugi",
            ],
            [
                "state_id" => 20,
                "name" => "São José de Mipibu",
                "slug" => "sao-jose-de-mipibu",
            ],
            [
                "state_id" => 20,
                "name" => "São José do Campestre",
                "slug" => "sao-jose-do-campestre",
            ],
            [
                "state_id" => 20,
                "name" => "São José do Seridó",
                "slug" => "sao-jose-do-serido",
            ],
            [
                "state_id" => 20,
                "name" => "São Miguel",
                "slug" => "sao-miguel",
            ],
            [
                "state_id" => 20,
                "name" => "São Miguel do Gostoso",
                "slug" => "sao-miguel-do-gostoso",
            ],
            [
                "state_id" => 20,
                "name" => "São Paulo do Potengi",
                "slug" => "sao-paulo-do-potengi",
            ],
            [
                "state_id" => 20,
                "name" => "São Pedro",
                "slug" => "sao-pedro",
            ],
            [
                "state_id" => 20,
                "name" => "São Rafael",
                "slug" => "sao-rafael",
            ],
            [
                "state_id" => 20,
                "name" => "São Tomé",
                "slug" => "sao-tome",
            ],
            [
                "state_id" => 20,
                "name" => "São Vicente",
                "slug" => "sao-vicente",
            ],
            [
                "state_id" => 20,
                "name" => "Senador Elói de Souza",
                "slug" => "senador-eloi-de-souza",
            ],
            [
                "state_id" => 20,
                "name" => "Senador Georgino Avelino",
                "slug" => "senador-georgino-avelino",
            ],
            [
                "state_id" => 20,
                "name" => "Serra de São Bento",
                "slug" => "serra-de-sao-bento",
            ],
            [
                "state_id" => 20,
                "name" => "Serra do Mel",
                "slug" => "serra-do-mel",
            ],
            [
                "state_id" => 20,
                "name" => "Serra Negra do Norte",
                "slug" => "serra-negra-do-norte",
            ],
            [
                "state_id" => 20,
                "name" => "Serrinha",
                "slug" => "serrinha",
            ],
            [
                "state_id" => 20,
                "name" => "Serrinha dos Pintos",
                "slug" => "serrinha-dos-pintos",
            ],
            [
                "state_id" => 20,
                "name" => "Severiano Melo",
                "slug" => "severiano-melo",
            ],
            [
                "state_id" => 20,
                "name" => "Sítio Novo",
                "slug" => "sitio-novo",
            ],
            [
                "state_id" => 20,
                "name" => "Taboleiro Grande",
                "slug" => "taboleiro-grande",
            ],
            [
                "state_id" => 20,
                "name" => "Taipu",
                "slug" => "taipu",
            ],
            [
                "state_id" => 20,
                "name" => "Tangará",
                "slug" => "tangara",
            ],
            [
                "state_id" => 20,
                "name" => "Tenente Ananias",
                "slug" => "tenente-ananias",
            ],
            [
                "state_id" => 20,
                "name" => "Tenente Laurentino Cruz",
                "slug" => "tenente-laurentino-cruz",
            ],
            [
                "state_id" => 20,
                "name" => "Tibau",
                "slug" => "tibau",
            ],
            [
                "state_id" => 20,
                "name" => "Tibau do Sul",
                "slug" => "tibau-do-sul",
            ],
            [
                "state_id" => 20,
                "name" => "Timbaúba dos Batistas",
                "slug" => "timbauba-dos-batistas",
            ],
            [
                "state_id" => 20,
                "name" => "Touros",
                "slug" => "touros",
            ],
            [
                "state_id" => 20,
                "name" => "Triunfo Potiguar",
                "slug" => "triunfo-potiguar",
            ],
            [
                "state_id" => 20,
                "name" => "Umarizal",
                "slug" => "umarizal",
            ],
            [
                "state_id" => 20,
                "name" => "Upanema",
                "slug" => "upanema",
            ],
            [
                "state_id" => 20,
                "name" => "Várzea",
                "slug" => "varzea",
            ],
            [
                "state_id" => 20,
                "name" => "Venha-Ver",
                "slug" => "venha-ver",
            ],
            [
                "state_id" => 20,
                "name" => "Vera Cruz",
                "slug" => "vera-cruz",
            ],
            [
                "state_id" => 20,
                "name" => "Viçosa",
                "slug" => "vicosa",
            ],
            [
                "state_id" => 20,
                "name" => "Vila Flor",
                "slug" => "vila-flor",
            ],
            [
                "state_id" => 23,
                "name" => "Aceguá",
                "slug" => "acegua",
            ],
            [
                "state_id" => 23,
                "name" => "Água Santa",
                "slug" => "agua-santa",
            ],
            [
                "state_id" => 23,
                "name" => "Agudo",
                "slug" => "agudo",
            ],
            [
                "state_id" => 23,
                "name" => "Ajuricaba",
                "slug" => "ajuricaba",
            ],
            [
                "state_id" => 23,
                "name" => "Alecrim",
                "slug" => "alecrim",
            ],
            [
                "state_id" => 23,
                "name" => "Alegrete",
                "slug" => "alegrete",
            ],
            [
                "state_id" => 23,
                "name" => "Alegria",
                "slug" => "alegria",
            ],
            [
                "state_id" => 23,
                "name" => "Almirante Tamandaré do Sul",
                "slug" => "almirante-tamandare-do-sul",
            ],
            [
                "state_id" => 23,
                "name" => "Alpestre",
                "slug" => "alpestre",
            ],
            [
                "state_id" => 23,
                "name" => "Alto Alegre",
                "slug" => "alto-alegre",
            ],
            [
                "state_id" => 23,
                "name" => "Alto Feliz",
                "slug" => "alto-feliz",
            ],
            [
                "state_id" => 23,
                "name" => "Alvorada",
                "slug" => "alvorada",
            ],
            [
                "state_id" => 23,
                "name" => "Amaral Ferrador",
                "slug" => "amaral-ferrador",
            ],
            [
                "state_id" => 23,
                "name" => "Ametista do Sul",
                "slug" => "ametista-do-sul",
            ],
            [
                "state_id" => 23,
                "name" => "André da Rocha",
                "slug" => "andre-da-rocha",
            ],
            [
                "state_id" => 23,
                "name" => "Anta Gorda",
                "slug" => "anta-gorda",
            ],
            [
                "state_id" => 23,
                "name" => "Antônio Prado",
                "slug" => "antonio-prado",
            ],
            [
                "state_id" => 23,
                "name" => "Arambaré",
                "slug" => "arambare",
            ],
            [
                "state_id" => 23,
                "name" => "Araricá",
                "slug" => "ararica",
            ],
            [
                "state_id" => 23,
                "name" => "Aratiba",
                "slug" => "aratiba",
            ],
            [
                "state_id" => 23,
                "name" => "Arroio do Meio",
                "slug" => "arroio-do-meio",
            ],
            [
                "state_id" => 23,
                "name" => "Arroio do Padre",
                "slug" => "arroio-do-padre",
            ],
            [
                "state_id" => 23,
                "name" => "Arroio do Sal",
                "slug" => "arroio-do-sal",
            ],
            [
                "state_id" => 23,
                "name" => "Arroio do Tigre",
                "slug" => "arroio-do-tigre",
            ],
            [
                "state_id" => 23,
                "name" => "Arroio dos Ratos",
                "slug" => "arroio-dos-ratos",
            ],
            [
                "state_id" => 23,
                "name" => "Arroio Grande",
                "slug" => "arroio-grande",
            ],
            [
                "state_id" => 23,
                "name" => "Arvorezinha",
                "slug" => "arvorezinha",
            ],
            [
                "state_id" => 23,
                "name" => "Augusto Pestana",
                "slug" => "augusto-pestana",
            ],
            [
                "state_id" => 23,
                "name" => "Áurea",
                "slug" => "aurea",
            ],
            [
                "state_id" => 23,
                "name" => "Bagé",
                "slug" => "bage",
            ],
            [
                "state_id" => 23,
                "name" => "Balneário Pinhal",
                "slug" => "balneario-pinhal",
            ],
            [
                "state_id" => 23,
                "name" => "Barão",
                "slug" => "barao",
            ],
            [
                "state_id" => 23,
                "name" => "Barão de Cotegipe",
                "slug" => "barao-de-cotegipe",
            ],
            [
                "state_id" => 23,
                "name" => "Barão do Triunfo",
                "slug" => "barao-do-triunfo",
            ],
            [
                "state_id" => 23,
                "name" => "Barra do Guarita",
                "slug" => "barra-do-guarita",
            ],
            [
                "state_id" => 23,
                "name" => "Barra do Quaraí",
                "slug" => "barra-do-quarai",
            ],
            [
                "state_id" => 23,
                "name" => "Barra do Ribeiro",
                "slug" => "barra-do-ribeiro",
            ],
            [
                "state_id" => 23,
                "name" => "Barra do Rio Azul",
                "slug" => "barra-do-rio-azul",
            ],
            [
                "state_id" => 23,
                "name" => "Barra Funda",
                "slug" => "barra-funda",
            ],
            [
                "state_id" => 23,
                "name" => "Barracão",
                "slug" => "barracao",
            ],
            [
                "state_id" => 23,
                "name" => "Barros Cassal",
                "slug" => "barros-cassal",
            ],
            [
                "state_id" => 23,
                "name" => "Benjamin Constant do Sul",
                "slug" => "benjamin-constant-do-sul",
            ],
            [
                "state_id" => 23,
                "name" => "Bento Gonçalves",
                "slug" => "bento-goncalves",
            ],
            [
                "state_id" => 23,
                "name" => "Boa Vista das Missões",
                "slug" => "boa-vista-das-missoes",
            ],
            [
                "state_id" => 23,
                "name" => "Boa Vista do Buricá",
                "slug" => "boa-vista-do-burica",
            ],
            [
                "state_id" => 23,
                "name" => "Boa Vista do Cadeado",
                "slug" => "boa-vista-do-cadeado",
            ],
            [
                "state_id" => 23,
                "name" => "Boa Vista do Incra",
                "slug" => "boa-vista-do-incra",
            ],
            [
                "state_id" => 23,
                "name" => "Boa Vista do Sul",
                "slug" => "boa-vista-do-sul",
            ],
            [
                "state_id" => 23,
                "name" => "Bom Jesus",
                "slug" => "bom-jesus",
            ],
            [
                "state_id" => 23,
                "name" => "Bom Princípio",
                "slug" => "bom-principio",
            ],
            [
                "state_id" => 23,
                "name" => "Bom Progresso",
                "slug" => "bom-progresso",
            ],
            [
                "state_id" => 23,
                "name" => "Bom Retiro do Sul",
                "slug" => "bom-retiro-do-sul",
            ],
            [
                "state_id" => 23,
                "name" => "Boqueirão do Leão",
                "slug" => "boqueirao-do-leao",
            ],
            [
                "state_id" => 23,
                "name" => "Bossoroca",
                "slug" => "bossoroca",
            ],
            [
                "state_id" => 23,
                "name" => "Bozano",
                "slug" => "bozano",
            ],
            [
                "state_id" => 23,
                "name" => "Braga",
                "slug" => "braga",
            ],
            [
                "state_id" => 23,
                "name" => "Brochier",
                "slug" => "brochier",
            ],
            [
                "state_id" => 23,
                "name" => "Butiá",
                "slug" => "butia",
            ],
            [
                "state_id" => 23,
                "name" => "Caçapava do Sul",
                "slug" => "cacapava-do-sul",
            ],
            [
                "state_id" => 23,
                "name" => "Cacequi",
                "slug" => "cacequi",
            ],
            [
                "state_id" => 23,
                "name" => "Cachoeira do Sul",
                "slug" => "cachoeira-do-sul",
            ],
            [
                "state_id" => 23,
                "name" => "Cachoeirinha",
                "slug" => "cachoeirinha",
            ],
            [
                "state_id" => 23,
                "name" => "Cacique Doble",
                "slug" => "cacique-doble",
            ],
            [
                "state_id" => 23,
                "name" => "Caibaté",
                "slug" => "caibate",
            ],
            [
                "state_id" => 23,
                "name" => "Caiçara",
                "slug" => "caicara",
            ],
            [
                "state_id" => 23,
                "name" => "Camaquã",
                "slug" => "camaqua",
            ],
            [
                "state_id" => 23,
                "name" => "Camargo",
                "slug" => "camargo",
            ],
            [
                "state_id" => 23,
                "name" => "Cambará do Sul",
                "slug" => "cambara-do-sul",
            ],
            [
                "state_id" => 23,
                "name" => "Campestre da Serra",
                "slug" => "campestre-da-serra",
            ],
            [
                "state_id" => 23,
                "name" => "Campina das Missões",
                "slug" => "campina-das-missoes",
            ],
            [
                "state_id" => 23,
                "name" => "Campinas do Sul",
                "slug" => "campinas-do-sul",
            ],
            [
                "state_id" => 23,
                "name" => "Campo Bom",
                "slug" => "campo-bom",
            ],
            [
                "state_id" => 23,
                "name" => "Campo Novo",
                "slug" => "campo-novo",
            ],
            [
                "state_id" => 23,
                "name" => "Campos Borges",
                "slug" => "campos-borges",
            ],
            [
                "state_id" => 23,
                "name" => "Candelária",
                "slug" => "candelaria",
            ],
            [
                "state_id" => 23,
                "name" => "Cândido Godói",
                "slug" => "candido-godoi",
            ],
            [
                "state_id" => 23,
                "name" => "Candiota",
                "slug" => "candiota",
            ],
            [
                "state_id" => 23,
                "name" => "Canela",
                "slug" => "canela",
            ],
            [
                "state_id" => 23,
                "name" => "Canguçu",
                "slug" => "cangucu",
            ],
            [
                "state_id" => 23,
                "name" => "Canoas",
                "slug" => "canoas",
            ],
            [
                "state_id" => 23,
                "name" => "Canudos do Vale",
                "slug" => "canudos-do-vale",
            ],
            [
                "state_id" => 23,
                "name" => "Capão Bonito do Sul",
                "slug" => "capao-bonito-do-sul",
            ],
            [
                "state_id" => 23,
                "name" => "Capão da Canoa",
                "slug" => "capao-da-canoa",
            ],
            [
                "state_id" => 23,
                "name" => "Capão do Cipó",
                "slug" => "capao-do-cipo",
            ],
            [
                "state_id" => 23,
                "name" => "Capão do Leão",
                "slug" => "capao-do-leao",
            ],
            [
                "state_id" => 23,
                "name" => "Capela de Santana",
                "slug" => "capela-de-santana",
            ],
            [
                "state_id" => 23,
                "name" => "Capitão",
                "slug" => "capitao",
            ],
            [
                "state_id" => 23,
                "name" => "Capivari do Sul",
                "slug" => "capivari-do-sul",
            ],
            [
                "state_id" => 23,
                "name" => "Caraá",
                "slug" => "caraa",
            ],
            [
                "state_id" => 23,
                "name" => "Carazinho",
                "slug" => "carazinho",
            ],
            [
                "state_id" => 23,
                "name" => "Carlos Barbosa",
                "slug" => "carlos-barbosa",
            ],
            [
                "state_id" => 23,
                "name" => "Carlos Gomes",
                "slug" => "carlos-gomes",
            ],
            [
                "state_id" => 23,
                "name" => "Casca",
                "slug" => "casca",
            ],
            [
                "state_id" => 23,
                "name" => "Caseiros",
                "slug" => "caseiros",
            ],
            [
                "state_id" => 23,
                "name" => "Catuípe",
                "slug" => "catuipe",
            ],
            [
                "state_id" => 23,
                "name" => "Caxias do Sul",
                "slug" => "caxias-do-sul",
            ],
            [
                "state_id" => 23,
                "name" => "Centenário",
                "slug" => "centenario",
            ],
            [
                "state_id" => 23,
                "name" => "Cerrito",
                "slug" => "cerrito",
            ],
            [
                "state_id" => 23,
                "name" => "Cerro Branco",
                "slug" => "cerro-branco",
            ],
            [
                "state_id" => 23,
                "name" => "Cerro Grande",
                "slug" => "cerro-grande",
            ],
            [
                "state_id" => 23,
                "name" => "Cerro Grande do Sul",
                "slug" => "cerro-grande-do-sul",
            ],
            [
                "state_id" => 23,
                "name" => "Cerro Largo",
                "slug" => "cerro-largo",
            ],
            [
                "state_id" => 23,
                "name" => "Chapada",
                "slug" => "chapada",
            ],
            [
                "state_id" => 23,
                "name" => "Charqueadas",
                "slug" => "charqueadas",
            ],
            [
                "state_id" => 23,
                "name" => "Charrua",
                "slug" => "charrua",
            ],
            [
                "state_id" => 23,
                "name" => "Chiapetta",
                "slug" => "chiapetta",
            ],
            [
                "state_id" => 23,
                "name" => "Chuí",
                "slug" => "chui",
            ],
            [
                "state_id" => 23,
                "name" => "Chuvisca",
                "slug" => "chuvisca",
            ],
            [
                "state_id" => 23,
                "name" => "Cidreira",
                "slug" => "cidreira",
            ],
            [
                "state_id" => 23,
                "name" => "Ciríaco",
                "slug" => "ciriaco",
            ],
            [
                "state_id" => 23,
                "name" => "Colinas",
                "slug" => "colinas",
            ],
            [
                "state_id" => 23,
                "name" => "Colorado",
                "slug" => "colorado",
            ],
            [
                "state_id" => 23,
                "name" => "Condor",
                "slug" => "condor",
            ],
            [
                "state_id" => 23,
                "name" => "Constantina",
                "slug" => "constantina",
            ],
            [
                "state_id" => 23,
                "name" => "Coqueiro Baixo",
                "slug" => "coqueiro-baixo",
            ],
            [
                "state_id" => 23,
                "name" => "Coqueiros do Sul",
                "slug" => "coqueiros-do-sul",
            ],
            [
                "state_id" => 23,
                "name" => "Coronel Barros",
                "slug" => "coronel-barros",
            ],
            [
                "state_id" => 23,
                "name" => "Coronel Bicaco",
                "slug" => "coronel-bicaco",
            ],
            [
                "state_id" => 23,
                "name" => "Coronel Pilar",
                "slug" => "coronel-pilar",
            ],
            [
                "state_id" => 23,
                "name" => "Cotiporã",
                "slug" => "cotipora",
            ],
            [
                "state_id" => 23,
                "name" => "Coxilha",
                "slug" => "coxilha",
            ],
            [
                "state_id" => 23,
                "name" => "Crissiumal",
                "slug" => "crissiumal",
            ],
            [
                "state_id" => 23,
                "name" => "Cristal",
                "slug" => "cristal",
            ],
            [
                "state_id" => 23,
                "name" => "Cristal do Sul",
                "slug" => "cristal-do-sul",
            ],
            [
                "state_id" => 23,
                "name" => "Cruz Alta",
                "slug" => "cruz-alta",
            ],
            [
                "state_id" => 23,
                "name" => "Cruzaltense",
                "slug" => "cruzaltense",
            ],
            [
                "state_id" => 23,
                "name" => "Cruzeiro do Sul",
                "slug" => "cruzeiro-do-sul",
            ],
            [
                "state_id" => 23,
                "name" => "David Canabarro",
                "slug" => "david-canabarro",
            ],
            [
                "state_id" => 23,
                "name" => "Derrubadas",
                "slug" => "derrubadas",
            ],
            [
                "state_id" => 23,
                "name" => "Dezesseis de Novembro",
                "slug" => "dezesseis-de-novembro",
            ],
            [
                "state_id" => 23,
                "name" => "Dilermando de Aguiar",
                "slug" => "dilermando-de-aguiar",
            ],
            [
                "state_id" => 23,
                "name" => "Dois Irmãos",
                "slug" => "dois-irmaos",
            ],
            [
                "state_id" => 23,
                "name" => "Dois Irmãos das Missões",
                "slug" => "dois-irmaos-das-missoes",
            ],
            [
                "state_id" => 23,
                "name" => "Dois Lajeados",
                "slug" => "dois-lajeados",
            ],
            [
                "state_id" => 23,
                "name" => "Dom Feliciano",
                "slug" => "dom-feliciano",
            ],
            [
                "state_id" => 23,
                "name" => "Dom Pedrito",
                "slug" => "dom-pedrito",
            ],
            [
                "state_id" => 23,
                "name" => "Dom Pedro de Alcântara",
                "slug" => "dom-pedro-de-alcantara",
            ],
            [
                "state_id" => 23,
                "name" => "Dona Francisca",
                "slug" => "dona-francisca",
            ],
            [
                "state_id" => 23,
                "name" => "Doutor Maurício Cardoso",
                "slug" => "doutor-mauricio-cardoso",
            ],
            [
                "state_id" => 23,
                "name" => "Doutor Ricardo",
                "slug" => "doutor-ricardo",
            ],
            [
                "state_id" => 23,
                "name" => "Eldorado do Sul",
                "slug" => "eldorado-do-sul",
            ],
            [
                "state_id" => 23,
                "name" => "Encantado",
                "slug" => "encantado",
            ],
            [
                "state_id" => 23,
                "name" => "Encruzilhada do Sul",
                "slug" => "encruzilhada-do-sul",
            ],
            [
                "state_id" => 23,
                "name" => "Engenho Velho",
                "slug" => "engenho-velho",
            ],
            [
                "state_id" => 23,
                "name" => "Entre Rios do Sul",
                "slug" => "entre-rios-do-sul",
            ],
            [
                "state_id" => 23,
                "name" => "Entre-Ijuís",
                "slug" => "entre-ijuis",
            ],
            [
                "state_id" => 23,
                "name" => "Erebango",
                "slug" => "erebango",
            ],
            [
                "state_id" => 23,
                "name" => "Erechim",
                "slug" => "erechim",
            ],
            [
                "state_id" => 23,
                "name" => "Ernestina",
                "slug" => "ernestina",
            ],
            [
                "state_id" => 23,
                "name" => "Erval Grande",
                "slug" => "erval-grande",
            ],
            [
                "state_id" => 23,
                "name" => "Erval Seco",
                "slug" => "erval-seco",
            ],
            [
                "state_id" => 23,
                "name" => "Esmeralda",
                "slug" => "esmeralda",
            ],
            [
                "state_id" => 23,
                "name" => "Esperança do Sul",
                "slug" => "esperanca-do-sul",
            ],
            [
                "state_id" => 23,
                "name" => "Espumoso",
                "slug" => "espumoso",
            ],
            [
                "state_id" => 23,
                "name" => "Estação",
                "slug" => "estacao",
            ],
            [
                "state_id" => 23,
                "name" => "Estância Velha",
                "slug" => "estancia-velha",
            ],
            [
                "state_id" => 23,
                "name" => "Esteio",
                "slug" => "esteio",
            ],
            [
                "state_id" => 23,
                "name" => "Estrela",
                "slug" => "estrela",
            ],
            [
                "state_id" => 23,
                "name" => "Estrela Velha",
                "slug" => "estrela-velha",
            ],
            [
                "state_id" => 23,
                "name" => "Eugênio de Castro",
                "slug" => "eugenio-de-castro",
            ],
            [
                "state_id" => 23,
                "name" => "Fagundes Varela",
                "slug" => "fagundes-varela",
            ],
            [
                "state_id" => 23,
                "name" => "Farroupilha",
                "slug" => "farroupilha",
            ],
            [
                "state_id" => 23,
                "name" => "Faxinal do Soturno",
                "slug" => "faxinal-do-soturno",
            ],
            [
                "state_id" => 23,
                "name" => "Faxinalzinho",
                "slug" => "faxinalzinho",
            ],
            [
                "state_id" => 23,
                "name" => "Fazenda Vilanova",
                "slug" => "fazenda-vilanova",
            ],
            [
                "state_id" => 23,
                "name" => "Feliz",
                "slug" => "feliz",
            ],
            [
                "state_id" => 23,
                "name" => "Flores da Cunha",
                "slug" => "flores-da-cunha",
            ],
            [
                "state_id" => 23,
                "name" => "Floriano Peixoto",
                "slug" => "floriano-peixoto",
            ],
            [
                "state_id" => 23,
                "name" => "Fontoura Xavier",
                "slug" => "fontoura-xavier",
            ],
            [
                "state_id" => 23,
                "name" => "Formigueiro",
                "slug" => "formigueiro",
            ],
            [
                "state_id" => 23,
                "name" => "Forquetinha",
                "slug" => "forquetinha",
            ],
            [
                "state_id" => 23,
                "name" => "Fortaleza dos Valos",
                "slug" => "fortaleza-dos-valos",
            ],
            [
                "state_id" => 23,
                "name" => "Frederico Westphalen",
                "slug" => "frederico-westphalen",
            ],
            [
                "state_id" => 23,
                "name" => "Garibaldi",
                "slug" => "garibaldi",
            ],
            [
                "state_id" => 23,
                "name" => "Garruchos",
                "slug" => "garruchos",
            ],
            [
                "state_id" => 23,
                "name" => "Gaurama",
                "slug" => "gaurama",
            ],
            [
                "state_id" => 23,
                "name" => "General Câmara",
                "slug" => "general-camara",
            ],
            [
                "state_id" => 23,
                "name" => "Gentil",
                "slug" => "gentil",
            ],
            [
                "state_id" => 23,
                "name" => "Getúlio Vargas",
                "slug" => "getulio-vargas",
            ],
            [
                "state_id" => 23,
                "name" => "Giruá",
                "slug" => "girua",
            ],
            [
                "state_id" => 23,
                "name" => "Glorinha",
                "slug" => "glorinha",
            ],
            [
                "state_id" => 23,
                "name" => "Gramado",
                "slug" => "gramado",
            ],
            [
                "state_id" => 23,
                "name" => "Gramado dos Loureiros",
                "slug" => "gramado-dos-loureiros",
            ],
            [
                "state_id" => 23,
                "name" => "Gramado Xavier",
                "slug" => "gramado-xavier",
            ],
            [
                "state_id" => 23,
                "name" => "Gravataí",
                "slug" => "gravatai",
            ],
            [
                "state_id" => 23,
                "name" => "Guabiju",
                "slug" => "guabiju",
            ],
            [
                "state_id" => 23,
                "name" => "Guaíba",
                "slug" => "guaiba",
            ],
            [
                "state_id" => 23,
                "name" => "Guaporé",
                "slug" => "guapore",
            ],
            [
                "state_id" => 23,
                "name" => "Guarani das Missões",
                "slug" => "guarani-das-missoes",
            ],
            [
                "state_id" => 23,
                "name" => "Harmonia",
                "slug" => "harmonia",
            ],
            [
                "state_id" => 23,
                "name" => "Herval",
                "slug" => "herval",
            ],
            [
                "state_id" => 23,
                "name" => "Herveiras",
                "slug" => "herveiras",
            ],
            [
                "state_id" => 23,
                "name" => "Horizontina",
                "slug" => "horizontina",
            ],
            [
                "state_id" => 23,
                "name" => "Hulha Negra",
                "slug" => "hulha-negra",
            ],
            [
                "state_id" => 23,
                "name" => "Humaitá",
                "slug" => "humaita",
            ],
            [
                "state_id" => 23,
                "name" => "Ibarama",
                "slug" => "ibarama",
            ],
            [
                "state_id" => 23,
                "name" => "Ibiaçá",
                "slug" => "ibiaca",
            ],
            [
                "state_id" => 23,
                "name" => "Ibiraiaras",
                "slug" => "ibiraiaras",
            ],
            [
                "state_id" => 23,
                "name" => "Ibirapuitã",
                "slug" => "ibirapuita",
            ],
            [
                "state_id" => 23,
                "name" => "Ibirubá",
                "slug" => "ibiruba",
            ],
            [
                "state_id" => 23,
                "name" => "Igrejinha",
                "slug" => "igrejinha",
            ],
            [
                "state_id" => 23,
                "name" => "Ijuí",
                "slug" => "ijui",
            ],
            [
                "state_id" => 23,
                "name" => "Ilópolis",
                "slug" => "ilopolis",
            ],
            [
                "state_id" => 23,
                "name" => "Imbé",
                "slug" => "imbe",
            ],
            [
                "state_id" => 23,
                "name" => "Imigrante",
                "slug" => "imigrante",
            ],
            [
                "state_id" => 23,
                "name" => "Independência",
                "slug" => "independencia",
            ],
            [
                "state_id" => 23,
                "name" => "Inhacorá",
                "slug" => "inhacora",
            ],
            [
                "state_id" => 23,
                "name" => "Ipê",
                "slug" => "ipe",
            ],
            [
                "state_id" => 23,
                "name" => "Ipiranga do Sul",
                "slug" => "ipiranga-do-sul",
            ],
            [
                "state_id" => 23,
                "name" => "Iraí",
                "slug" => "irai",
            ],
            [
                "state_id" => 23,
                "name" => "Itaara",
                "slug" => "itaara",
            ],
            [
                "state_id" => 23,
                "name" => "Itacurubi",
                "slug" => "itacurubi",
            ],
            [
                "state_id" => 23,
                "name" => "Itapuca",
                "slug" => "itapuca",
            ],
            [
                "state_id" => 23,
                "name" => "Itaqui",
                "slug" => "itaqui",
            ],
            [
                "state_id" => 23,
                "name" => "Itati",
                "slug" => "itati",
            ],
            [
                "state_id" => 23,
                "name" => "Itatiba do Sul",
                "slug" => "itatiba-do-sul",
            ],
            [
                "state_id" => 23,
                "name" => "Ivorá",
                "slug" => "ivora",
            ],
            [
                "state_id" => 23,
                "name" => "Ivoti",
                "slug" => "ivoti",
            ],
            [
                "state_id" => 23,
                "name" => "Jaboticaba",
                "slug" => "jaboticaba",
            ],
            [
                "state_id" => 23,
                "name" => "Jacuizinho",
                "slug" => "jacuizinho",
            ],
            [
                "state_id" => 23,
                "name" => "Jacutinga",
                "slug" => "jacutinga",
            ],
            [
                "state_id" => 23,
                "name" => "Jaguarão",
                "slug" => "jaguarao",
            ],
            [
                "state_id" => 23,
                "name" => "Jaguari",
                "slug" => "jaguari",
            ],
            [
                "state_id" => 23,
                "name" => "Jaquirana",
                "slug" => "jaquirana",
            ],
            [
                "state_id" => 23,
                "name" => "Jari",
                "slug" => "jari",
            ],
            [
                "state_id" => 23,
                "name" => "Jóia",
                "slug" => "joia",
            ],
            [
                "state_id" => 23,
                "name" => "Júlio de Castilhos",
                "slug" => "julio-de-castilhos",
            ],
            [
                "state_id" => 23,
                "name" => "Lagoa Bonita do Sul",
                "slug" => "lagoa-bonita-do-sul",
            ],
            [
                "state_id" => 23,
                "name" => "Lagoa dos Três Cantos",
                "slug" => "lagoa-dos-tres-cantos",
            ],
            [
                "state_id" => 23,
                "name" => "Lagoa Vermelha",
                "slug" => "lagoa-vermelha",
            ],
            [
                "state_id" => 23,
                "name" => "Lagoão",
                "slug" => "lagoao",
            ],
            [
                "state_id" => 23,
                "name" => "Lajeado",
                "slug" => "lajeado",
            ],
            [
                "state_id" => 23,
                "name" => "Lajeado do Bugre",
                "slug" => "lajeado-do-bugre",
            ],
            [
                "state_id" => 23,
                "name" => "Lavras do Sul",
                "slug" => "lavras-do-sul",
            ],
            [
                "state_id" => 23,
                "name" => "Liberato Salzano",
                "slug" => "liberato-salzano",
            ],
            [
                "state_id" => 23,
                "name" => "Lindolfo Collor",
                "slug" => "lindolfo-collor",
            ],
            [
                "state_id" => 23,
                "name" => "Linha Nova",
                "slug" => "linha-nova",
            ],
            [
                "state_id" => 23,
                "name" => "Maçambara",
                "slug" => "macambara",
            ],
            [
                "state_id" => 23,
                "name" => "Machadinho",
                "slug" => "machadinho",
            ],
            [
                "state_id" => 23,
                "name" => "Mampituba",
                "slug" => "mampituba",
            ],
            [
                "state_id" => 23,
                "name" => "Manoel Viana",
                "slug" => "manoel-viana",
            ],
            [
                "state_id" => 23,
                "name" => "Maquiné",
                "slug" => "maquine",
            ],
            [
                "state_id" => 23,
                "name" => "Maratá",
                "slug" => "marata",
            ],
            [
                "state_id" => 23,
                "name" => "Marau",
                "slug" => "marau",
            ],
            [
                "state_id" => 23,
                "name" => "Marcelino Ramos",
                "slug" => "marcelino-ramos",
            ],
            [
                "state_id" => 23,
                "name" => "Mariana Pimentel",
                "slug" => "mariana-pimentel",
            ],
            [
                "state_id" => 23,
                "name" => "Mariano Moro",
                "slug" => "mariano-moro",
            ],
            [
                "state_id" => 23,
                "name" => "Marques de Souza",
                "slug" => "marques-de-souza",
            ],
            [
                "state_id" => 23,
                "name" => "Mata",
                "slug" => "mata",
            ],
            [
                "state_id" => 23,
                "name" => "Mato Castelhano",
                "slug" => "mato-castelhano",
            ],
            [
                "state_id" => 23,
                "name" => "Mato Leitão",
                "slug" => "mato-leitao",
            ],
            [
                "state_id" => 23,
                "name" => "Mato Queimado",
                "slug" => "mato-queimado",
            ],
            [
                "state_id" => 23,
                "name" => "Maximiliano de Almeida",
                "slug" => "maximiliano-de-almeida",
            ],
            [
                "state_id" => 23,
                "name" => "Minas do Leão",
                "slug" => "minas-do-leao",
            ],
            [
                "state_id" => 23,
                "name" => "Miraguaí",
                "slug" => "miraguai",
            ],
            [
                "state_id" => 23,
                "name" => "Montauri",
                "slug" => "montauri",
            ],
            [
                "state_id" => 23,
                "name" => "Monte Alegre dos Campos",
                "slug" => "monte-alegre-dos-campos",
            ],
            [
                "state_id" => 23,
                "name" => "Monte Belo do Sul",
                "slug" => "monte-belo-do-sul",
            ],
            [
                "state_id" => 23,
                "name" => "Montenegro",
                "slug" => "montenegro",
            ],
            [
                "state_id" => 23,
                "name" => "Mormaço",
                "slug" => "mormaco",
            ],
            [
                "state_id" => 23,
                "name" => "Morrinhos do Sul",
                "slug" => "morrinhos-do-sul",
            ],
            [
                "state_id" => 23,
                "name" => "Morro Redondo",
                "slug" => "morro-redondo",
            ],
            [
                "state_id" => 23,
                "name" => "Morro Reuter",
                "slug" => "morro-reuter",
            ],
            [
                "state_id" => 23,
                "name" => "Mostardas",
                "slug" => "mostardas",
            ],
            [
                "state_id" => 23,
                "name" => "Muçum",
                "slug" => "mucum",
            ],
            [
                "state_id" => 23,
                "name" => "Muitos Capões",
                "slug" => "muitos-capoes",
            ],
            [
                "state_id" => 23,
                "name" => "Muliterno",
                "slug" => "muliterno",
            ],
            [
                "state_id" => 23,
                "name" => "Não-Me-Toque",
                "slug" => "nao-me-toque",
            ],
            [
                "state_id" => 23,
                "name" => "Nicolau Vergueiro",
                "slug" => "nicolau-vergueiro",
            ],
            [
                "state_id" => 23,
                "name" => "Nonoai",
                "slug" => "nonoai",
            ],
            [
                "state_id" => 23,
                "name" => "Nova Alvorada",
                "slug" => "nova-alvorada",
            ],
            [
                "state_id" => 23,
                "name" => "Nova Araçá",
                "slug" => "nova-araca",
            ],
            [
                "state_id" => 23,
                "name" => "Nova Bassano",
                "slug" => "nova-bassano",
            ],
            [
                "state_id" => 23,
                "name" => "Nova Boa Vista",
                "slug" => "nova-boa-vista",
            ],
            [
                "state_id" => 23,
                "name" => "Nova Bréscia",
                "slug" => "nova-brescia",
            ],
            [
                "state_id" => 23,
                "name" => "Nova Candelária",
                "slug" => "nova-candelaria",
            ],
            [
                "state_id" => 23,
                "name" => "Nova Esperança do Sul",
                "slug" => "nova-esperanca-do-sul",
            ],
            [
                "state_id" => 23,
                "name" => "Nova Hartz",
                "slug" => "nova-hartz",
            ],
            [
                "state_id" => 23,
                "name" => "Nova Pádua",
                "slug" => "nova-padua",
            ],
            [
                "state_id" => 23,
                "name" => "Nova Palma",
                "slug" => "nova-palma",
            ],
            [
                "state_id" => 23,
                "name" => "Nova Petrópolis",
                "slug" => "nova-petropolis",
            ],
            [
                "state_id" => 23,
                "name" => "Nova Prata",
                "slug" => "nova-prata",
            ],
            [
                "state_id" => 23,
                "name" => "Nova Ramada",
                "slug" => "nova-ramada",
            ],
            [
                "state_id" => 23,
                "name" => "Nova Roma do Sul",
                "slug" => "nova-roma-do-sul",
            ],
            [
                "state_id" => 23,
                "name" => "Nova Santa Rita",
                "slug" => "nova-santa-rita",
            ],
            [
                "state_id" => 23,
                "name" => "Novo Barreiro",
                "slug" => "novo-barreiro",
            ],
            [
                "state_id" => 23,
                "name" => "Novo Cabrais",
                "slug" => "novo-cabrais",
            ],
            [
                "state_id" => 23,
                "name" => "Novo Hamburgo",
                "slug" => "novo-hamburgo",
            ],
            [
                "state_id" => 23,
                "name" => "Novo Machado",
                "slug" => "novo-machado",
            ],
            [
                "state_id" => 23,
                "name" => "Novo Tiradentes",
                "slug" => "novo-tiradentes",
            ],
            [
                "state_id" => 23,
                "name" => "Novo Xingu",
                "slug" => "novo-xingu",
            ],
            [
                "state_id" => 23,
                "name" => "Osório",
                "slug" => "osorio",
            ],
            [
                "state_id" => 23,
                "name" => "Paim Filho",
                "slug" => "paim-filho",
            ],
            [
                "state_id" => 23,
                "name" => "Palmares do Sul",
                "slug" => "palmares-do-sul",
            ],
            [
                "state_id" => 23,
                "name" => "Palmeira das Missões",
                "slug" => "palmeira-das-missoes",
            ],
            [
                "state_id" => 23,
                "name" => "Palmitinho",
                "slug" => "palmitinho",
            ],
            [
                "state_id" => 23,
                "name" => "Panambi",
                "slug" => "panambi",
            ],
            [
                "state_id" => 23,
                "name" => "Pantano Grande",
                "slug" => "pantano-grande",
            ],
            [
                "state_id" => 23,
                "name" => "Paraí",
                "slug" => "parai",
            ],
            [
                "state_id" => 23,
                "name" => "Paraíso do Sul",
                "slug" => "paraiso-do-sul",
            ],
            [
                "state_id" => 23,
                "name" => "Pareci Novo",
                "slug" => "pareci-novo",
            ],
            [
                "state_id" => 23,
                "name" => "Parobé",
                "slug" => "parobe",
            ],
            [
                "state_id" => 23,
                "name" => "Passa Sete",
                "slug" => "passa-sete",
            ],
            [
                "state_id" => 23,
                "name" => "Passo do Sobrado",
                "slug" => "passo-do-sobrado",
            ],
            [
                "state_id" => 23,
                "name" => "Passo Fundo",
                "slug" => "passo-fundo",
            ],
            [
                "state_id" => 23,
                "name" => "Paulo Bento",
                "slug" => "paulo-bento",
            ],
            [
                "state_id" => 23,
                "name" => "Paverama",
                "slug" => "paverama",
            ],
            [
                "state_id" => 23,
                "name" => "Pedras Altas",
                "slug" => "pedras-altas",
            ],
            [
                "state_id" => 23,
                "name" => "Pedro Osório",
                "slug" => "pedro-osorio",
            ],
            [
                "state_id" => 23,
                "name" => "Pejuçara",
                "slug" => "pejucara",
            ],
            [
                "state_id" => 23,
                "name" => "Pelotas",
                "slug" => "pelotas",
            ],
            [
                "state_id" => 23,
                "name" => "Picada Café",
                "slug" => "picada-cafe",
            ],
            [
                "state_id" => 23,
                "name" => "Pinhal",
                "slug" => "pinhal",
            ],
            [
                "state_id" => 23,
                "name" => "Pinhal da Serra",
                "slug" => "pinhal-da-serra",
            ],
            [
                "state_id" => 23,
                "name" => "Pinhal Grande",
                "slug" => "pinhal-grande",
            ],
            [
                "state_id" => 23,
                "name" => "Pinheirinho do Vale",
                "slug" => "pinheirinho-do-vale",
            ],
            [
                "state_id" => 23,
                "name" => "Pinheiro Machado",
                "slug" => "pinheiro-machado",
            ],
            [
                "state_id" => 23,
                "name" => "Pirapó",
                "slug" => "pirapo",
            ],
            [
                "state_id" => 23,
                "name" => "Piratini",
                "slug" => "piratini",
            ],
            [
                "state_id" => 23,
                "name" => "Planalto",
                "slug" => "planalto",
            ],
            [
                "state_id" => 23,
                "name" => "Poço das Antas",
                "slug" => "poco-das-antas",
            ],
            [
                "state_id" => 23,
                "name" => "Pontão",
                "slug" => "pontao",
            ],
            [
                "state_id" => 23,
                "name" => "Ponte Preta",
                "slug" => "ponte-preta",
            ],
            [
                "state_id" => 23,
                "name" => "Portão",
                "slug" => "portao",
            ],
            [
                "state_id" => 23,
                "name" => "Porto Alegre",
                "slug" => "porto-alegre",
            ],
            [
                "state_id" => 23,
                "name" => "Porto Lucena",
                "slug" => "porto-lucena",
            ],
            [
                "state_id" => 23,
                "name" => "Porto Mauá",
                "slug" => "porto-maua",
            ],
            [
                "state_id" => 23,
                "name" => "Porto Vera Cruz",
                "slug" => "porto-vera-cruz",
            ],
            [
                "state_id" => 23,
                "name" => "Porto Xavier",
                "slug" => "porto-xavier",
            ],
            [
                "state_id" => 23,
                "name" => "Pouso Novo",
                "slug" => "pouso-novo",
            ],
            [
                "state_id" => 23,
                "name" => "Presidente Lucena",
                "slug" => "presidente-lucena",
            ],
            [
                "state_id" => 23,
                "name" => "Progresso",
                "slug" => "progresso",
            ],
            [
                "state_id" => 23,
                "name" => "Protásio Alves",
                "slug" => "protasio-alves",
            ],
            [
                "state_id" => 23,
                "name" => "Putinga",
                "slug" => "putinga",
            ],
            [
                "state_id" => 23,
                "name" => "Quaraí",
                "slug" => "quarai",
            ],
            [
                "state_id" => 23,
                "name" => "Quatro Irmãos",
                "slug" => "quatro-irmaos",
            ],
            [
                "state_id" => 23,
                "name" => "Quevedos",
                "slug" => "quevedos",
            ],
            [
                "state_id" => 23,
                "name" => "Quinze de Novembro",
                "slug" => "quinze-de-novembro",
            ],
            [
                "state_id" => 23,
                "name" => "Redentora",
                "slug" => "redentora",
            ],
            [
                "state_id" => 23,
                "name" => "Relvado",
                "slug" => "relvado",
            ],
            [
                "state_id" => 23,
                "name" => "Restinga Seca",
                "slug" => "restinga-seca",
            ],
            [
                "state_id" => 23,
                "name" => "Rio dos Índios",
                "slug" => "rio-dos-indios",
            ],
            [
                "state_id" => 23,
                "name" => "Rio Grande",
                "slug" => "rio-grande",
            ],
            [
                "state_id" => 23,
                "name" => "Rio Pardo",
                "slug" => "rio-pardo",
            ],
            [
                "state_id" => 23,
                "name" => "Riozinho",
                "slug" => "riozinho",
            ],
            [
                "state_id" => 23,
                "name" => "Roca Sales",
                "slug" => "roca-sales",
            ],
            [
                "state_id" => 23,
                "name" => "Rodeio Bonito",
                "slug" => "rodeio-bonito",
            ],
            [
                "state_id" => 23,
                "name" => "Rolador",
                "slug" => "rolador",
            ],
            [
                "state_id" => 23,
                "name" => "Rolante",
                "slug" => "rolante",
            ],
            [
                "state_id" => 23,
                "name" => "Ronda Alta",
                "slug" => "ronda-alta",
            ],
            [
                "state_id" => 23,
                "name" => "Rondinha",
                "slug" => "rondinha",
            ],
            [
                "state_id" => 23,
                "name" => "Roque Gonzales",
                "slug" => "roque-gonzales",
            ],
            [
                "state_id" => 23,
                "name" => "Rosário do Sul",
                "slug" => "rosario-do-sul",
            ],
            [
                "state_id" => 23,
                "name" => "Sagrada Família",
                "slug" => "sagrada-familia",
            ],
            [
                "state_id" => 23,
                "name" => "Saldanha Marinho",
                "slug" => "saldanha-marinho",
            ],
            [
                "state_id" => 23,
                "name" => "Salto do Jacuí",
                "slug" => "salto-do-jacui",
            ],
            [
                "state_id" => 23,
                "name" => "Salvador das Missões",
                "slug" => "salvador-das-missoes",
            ],
            [
                "state_id" => 23,
                "name" => "Salvador do Sul",
                "slug" => "salvador-do-sul",
            ],
            [
                "state_id" => 23,
                "name" => "Sananduva",
                "slug" => "sananduva",
            ],
            [
                "state_id" => 23,
                "name" => "Santa Bárbara do Sul",
                "slug" => "santa-barbara-do-sul",
            ],
            [
                "state_id" => 23,
                "name" => "Santa Cecília do Sul",
                "slug" => "santa-cecilia-do-sul",
            ],
            [
                "state_id" => 23,
                "name" => "Santa Clara do Sul",
                "slug" => "santa-clara-do-sul",
            ],
            [
                "state_id" => 23,
                "name" => "Santa Cruz do Sul",
                "slug" => "santa-cruz-do-sul",
            ],
            [
                "state_id" => 23,
                "name" => "Santa Margarida do Sul",
                "slug" => "santa-margarida-do-sul",
            ],
            [
                "state_id" => 23,
                "name" => "Santa Maria",
                "slug" => "santa-maria",
            ],
            [
                "state_id" => 23,
                "name" => "Santa Maria do Herval",
                "slug" => "santa-maria-do-herval",
            ],
            [
                "state_id" => 23,
                "name" => "Santa Rosa",
                "slug" => "santa-rosa",
            ],
            [
                "state_id" => 23,
                "name" => "Santa Tereza",
                "slug" => "santa-tereza",
            ],
            [
                "state_id" => 23,
                "name" => "Santa Vitória do Palmar",
                "slug" => "santa-vitoria-do-palmar",
            ],
            [
                "state_id" => 23,
                "name" => "Santana da Boa Vista",
                "slug" => "santana-da-boa-vista",
            ],
            [
                "state_id" => 23,
                "name" => "Santana do Livramento",
                "slug" => "santana-do-livramento",
            ],
            [
                "state_id" => 23,
                "name" => "Santiago",
                "slug" => "santiago",
            ],
            [
                "state_id" => 23,
                "name" => "Santo Ângelo",
                "slug" => "santo-angelo",
            ],
            [
                "state_id" => 23,
                "name" => "Santo Antônio da Patrulha",
                "slug" => "santo-antonio-da-patrulha",
            ],
            [
                "state_id" => 23,
                "name" => "Santo Antônio das Missões",
                "slug" => "santo-antonio-das-missoes",
            ],
            [
                "state_id" => 23,
                "name" => "Santo Antônio do Palma",
                "slug" => "santo-antonio-do-palma",
            ],
            [
                "state_id" => 23,
                "name" => "Santo Antônio do Planalto",
                "slug" => "santo-antonio-do-planalto",
            ],
            [
                "state_id" => 23,
                "name" => "Santo Augusto",
                "slug" => "santo-augusto",
            ],
            [
                "state_id" => 23,
                "name" => "Santo Cristo",
                "slug" => "santo-cristo",
            ],
            [
                "state_id" => 23,
                "name" => "Santo Expedito do Sul",
                "slug" => "santo-expedito-do-sul",
            ],
            [
                "state_id" => 23,
                "name" => "São Borja",
                "slug" => "sao-borja",
            ],
            [
                "state_id" => 23,
                "name" => "São Domingos do Sul",
                "slug" => "sao-domingos-do-sul",
            ],
            [
                "state_id" => 23,
                "name" => "São Francisco de Assis",
                "slug" => "sao-francisco-de-assis",
            ],
            [
                "state_id" => 23,
                "name" => "São Francisco de Paula",
                "slug" => "sao-francisco-de-paula",
            ],
            [
                "state_id" => 23,
                "name" => "São Gabriel",
                "slug" => "sao-gabriel",
            ],
            [
                "state_id" => 23,
                "name" => "São Jerônimo",
                "slug" => "sao-jeronimo",
            ],
            [
                "state_id" => 23,
                "name" => "São João da Urtiga",
                "slug" => "sao-joao-da-urtiga",
            ],
            [
                "state_id" => 23,
                "name" => "São João do Polêsine",
                "slug" => "sao-joao-do-polesine",
            ],
            [
                "state_id" => 23,
                "name" => "São Jorge",
                "slug" => "sao-jorge",
            ],
            [
                "state_id" => 23,
                "name" => "São José das Missões",
                "slug" => "sao-jose-das-missoes",
            ],
            [
                "state_id" => 23,
                "name" => "São José do Herval",
                "slug" => "sao-jose-do-herval",
            ],
            [
                "state_id" => 23,
                "name" => "São José do Hortêncio",
                "slug" => "sao-jose-do-hortencio",
            ],
            [
                "state_id" => 23,
                "name" => "São José do Inhacorá",
                "slug" => "sao-jose-do-inhacora",
            ],
            [
                "state_id" => 23,
                "name" => "São José do Norte",
                "slug" => "sao-jose-do-norte",
            ],
            [
                "state_id" => 23,
                "name" => "São José do Ouro",
                "slug" => "sao-jose-do-ouro",
            ],
            [
                "state_id" => 23,
                "name" => "São José do Sul",
                "slug" => "sao-jose-do-sul",
            ],
            [
                "state_id" => 23,
                "name" => "São José dos Ausentes",
                "slug" => "sao-jose-dos-ausentes",
            ],
            [
                "state_id" => 23,
                "name" => "São Leopoldo",
                "slug" => "sao-leopoldo",
            ],
            [
                "state_id" => 23,
                "name" => "São Lourenço do Sul",
                "slug" => "sao-lourenco-do-sul",
            ],
            [
                "state_id" => 23,
                "name" => "São Luiz Gonzaga",
                "slug" => "sao-luiz-gonzaga",
            ],
            [
                "state_id" => 23,
                "name" => "São Marcos",
                "slug" => "sao-marcos",
            ],
            [
                "state_id" => 23,
                "name" => "São Martinho",
                "slug" => "sao-martinho",
            ],
            [
                "state_id" => 23,
                "name" => "São Martinho da Serra",
                "slug" => "sao-martinho-da-serra",
            ],
            [
                "state_id" => 23,
                "name" => "São Miguel das Missões",
                "slug" => "sao-miguel-das-missoes",
            ],
            [
                "state_id" => 23,
                "name" => "São Nicolau",
                "slug" => "sao-nicolau",
            ],
            [
                "state_id" => 23,
                "name" => "São Paulo das Missões",
                "slug" => "sao-paulo-das-missoes",
            ],
            [
                "state_id" => 23,
                "name" => "São Pedro da Serra",
                "slug" => "sao-pedro-da-serra",
            ],
            [
                "state_id" => 23,
                "name" => "São Pedro das Missões",
                "slug" => "sao-pedro-das-missoes",
            ],
            [
                "state_id" => 23,
                "name" => "São Pedro do Butiá",
                "slug" => "sao-pedro-do-butia",
            ],
            [
                "state_id" => 23,
                "name" => "São Pedro do Sul",
                "slug" => "sao-pedro-do-sul",
            ],
            [
                "state_id" => 23,
                "name" => "São Sebastião do Caí",
                "slug" => "sao-sebastiao-do-cai",
            ],
            [
                "state_id" => 23,
                "name" => "São Sepé",
                "slug" => "sao-sepe",
            ],
            [
                "state_id" => 23,
                "name" => "São Valentim",
                "slug" => "sao-valentim",
            ],
            [
                "state_id" => 23,
                "name" => "São Valentim do Sul",
                "slug" => "sao-valentim-do-sul",
            ],
            [
                "state_id" => 23,
                "name" => "São Valério do Sul",
                "slug" => "sao-valerio-do-sul",
            ],
            [
                "state_id" => 23,
                "name" => "São Vendelino",
                "slug" => "sao-vendelino",
            ],
            [
                "state_id" => 23,
                "name" => "São Vicente do Sul",
                "slug" => "sao-vicente-do-sul",
            ],
            [
                "state_id" => 23,
                "name" => "Sapiranga",
                "slug" => "sapiranga",
            ],
            [
                "state_id" => 23,
                "name" => "Sapucaia do Sul",
                "slug" => "sapucaia-do-sul",
            ],
            [
                "state_id" => 23,
                "name" => "Sarandi",
                "slug" => "sarandi",
            ],
            [
                "state_id" => 23,
                "name" => "Seberi",
                "slug" => "seberi",
            ],
            [
                "state_id" => 23,
                "name" => "Sede Nova",
                "slug" => "sede-nova",
            ],
            [
                "state_id" => 23,
                "name" => "Segredo",
                "slug" => "segredo",
            ],
            [
                "state_id" => 23,
                "name" => "Selbach",
                "slug" => "selbach",
            ],
            [
                "state_id" => 23,
                "name" => "Senador Salgado Filho",
                "slug" => "senador-salgado-filho",
            ],
            [
                "state_id" => 23,
                "name" => "Sentinela do Sul",
                "slug" => "sentinela-do-sul",
            ],
            [
                "state_id" => 23,
                "name" => "Serafina Corrêa",
                "slug" => "serafina-correa",
            ],
            [
                "state_id" => 23,
                "name" => "Sério",
                "slug" => "serio",
            ],
            [
                "state_id" => 23,
                "name" => "Sertão",
                "slug" => "sertao",
            ],
            [
                "state_id" => 23,
                "name" => "Sertão Santana",
                "slug" => "sertao-santana",
            ],
            [
                "state_id" => 23,
                "name" => "Sete de Setembro",
                "slug" => "sete-de-setembro",
            ],
            [
                "state_id" => 23,
                "name" => "Severiano de Almeida",
                "slug" => "severiano-de-almeida",
            ],
            [
                "state_id" => 23,
                "name" => "Silveira Martins",
                "slug" => "silveira-martins",
            ],
            [
                "state_id" => 23,
                "name" => "Sinimbu",
                "slug" => "sinimbu",
            ],
            [
                "state_id" => 23,
                "name" => "Sobradinho",
                "slug" => "sobradinho",
            ],
            [
                "state_id" => 23,
                "name" => "Soledade",
                "slug" => "soledade",
            ],
            [
                "state_id" => 23,
                "name" => "Tabaí",
                "slug" => "tabai",
            ],
            [
                "state_id" => 23,
                "name" => "Tapejara",
                "slug" => "tapejara",
            ],
            [
                "state_id" => 23,
                "name" => "Tapera",
                "slug" => "tapera",
            ],
            [
                "state_id" => 23,
                "name" => "Tapes",
                "slug" => "tapes",
            ],
            [
                "state_id" => 23,
                "name" => "Taquara",
                "slug" => "taquara",
            ],
            [
                "state_id" => 23,
                "name" => "Taquari",
                "slug" => "taquari",
            ],
            [
                "state_id" => 23,
                "name" => "Taquaruçu do Sul",
                "slug" => "taquarucu-do-sul",
            ],
            [
                "state_id" => 23,
                "name" => "Tavares",
                "slug" => "tavares",
            ],
            [
                "state_id" => 23,
                "name" => "Tenente Portela",
                "slug" => "tenente-portela",
            ],
            [
                "state_id" => 23,
                "name" => "Terra de Areia",
                "slug" => "terra-de-areia",
            ],
            [
                "state_id" => 23,
                "name" => "Teutônia",
                "slug" => "teutonia",
            ],
            [
                "state_id" => 23,
                "name" => "Tio Hugo",
                "slug" => "tio-hugo",
            ],
            [
                "state_id" => 23,
                "name" => "Tiradentes do Sul",
                "slug" => "tiradentes-do-sul",
            ],
            [
                "state_id" => 23,
                "name" => "Toropi",
                "slug" => "toropi",
            ],
            [
                "state_id" => 23,
                "name" => "Torres",
                "slug" => "torres",
            ],
            [
                "state_id" => 23,
                "name" => "Tramandaí",
                "slug" => "tramandai",
            ],
            [
                "state_id" => 23,
                "name" => "Travesseiro",
                "slug" => "travesseiro",
            ],
            [
                "state_id" => 23,
                "name" => "Três Arroios",
                "slug" => "tres-arroios",
            ],
            [
                "state_id" => 23,
                "name" => "Três Cachoeiras",
                "slug" => "tres-cachoeiras",
            ],
            [
                "state_id" => 23,
                "name" => "Três Coroas",
                "slug" => "tres-coroas",
            ],
            [
                "state_id" => 23,
                "name" => "Três de Maio",
                "slug" => "tres-de-maio",
            ],
            [
                "state_id" => 23,
                "name" => "Três Forquilhas",
                "slug" => "tres-forquilhas",
            ],
            [
                "state_id" => 23,
                "name" => "Três Palmeiras",
                "slug" => "tres-palmeiras",
            ],
            [
                "state_id" => 23,
                "name" => "Três Passos",
                "slug" => "tres-passos",
            ],
            [
                "state_id" => 23,
                "name" => "Trindade do Sul",
                "slug" => "trindade-do-sul",
            ],
            [
                "state_id" => 23,
                "name" => "Triunfo",
                "slug" => "triunfo",
            ],
            [
                "state_id" => 23,
                "name" => "Tucunduva",
                "slug" => "tucunduva",
            ],
            [
                "state_id" => 23,
                "name" => "Tunas",
                "slug" => "tunas",
            ],
            [
                "state_id" => 23,
                "name" => "Tupanci do Sul",
                "slug" => "tupanci-do-sul",
            ],
            [
                "state_id" => 23,
                "name" => "Tupanciretã",
                "slug" => "tupancireta",
            ],
            [
                "state_id" => 23,
                "name" => "Tupandi",
                "slug" => "tupandi",
            ],
            [
                "state_id" => 23,
                "name" => "Tuparendi",
                "slug" => "tuparendi",
            ],
            [
                "state_id" => 23,
                "name" => "Turuçu",
                "slug" => "turucu",
            ],
            [
                "state_id" => 23,
                "name" => "Ubiretama",
                "slug" => "ubiretama",
            ],
            [
                "state_id" => 23,
                "name" => "União da Serra",
                "slug" => "uniao-da-serra",
            ],
            [
                "state_id" => 23,
                "name" => "Unistalda",
                "slug" => "unistalda",
            ],
            [
                "state_id" => 23,
                "name" => "Uruguaiana",
                "slug" => "uruguaiana",
            ],
            [
                "state_id" => 23,
                "name" => "Vacaria",
                "slug" => "vacaria",
            ],
            [
                "state_id" => 23,
                "name" => "Vale do Sol",
                "slug" => "vale-do-sol",
            ],
            [
                "state_id" => 23,
                "name" => "Vale Real",
                "slug" => "vale-real",
            ],
            [
                "state_id" => 23,
                "name" => "Vale Verde",
                "slug" => "vale-verde",
            ],
            [
                "state_id" => 23,
                "name" => "Vanini",
                "slug" => "vanini",
            ],
            [
                "state_id" => 23,
                "name" => "Venâncio Aires",
                "slug" => "venancio-aires",
            ],
            [
                "state_id" => 23,
                "name" => "Vera Cruz",
                "slug" => "vera-cruz",
            ],
            [
                "state_id" => 23,
                "name" => "Veranópolis",
                "slug" => "veranopolis",
            ],
            [
                "state_id" => 23,
                "name" => "Vespasiano Correa",
                "slug" => "vespasiano-correa",
            ],
            [
                "state_id" => 23,
                "name" => "Viadutos",
                "slug" => "viadutos",
            ],
            [
                "state_id" => 23,
                "name" => "Viamão",
                "slug" => "viamao",
            ],
            [
                "state_id" => 23,
                "name" => "Vicente Dutra",
                "slug" => "vicente-dutra",
            ],
            [
                "state_id" => 23,
                "name" => "Victor Graeff",
                "slug" => "victor-graeff",
            ],
            [
                "state_id" => 23,
                "name" => "Vila Flores",
                "slug" => "vila-flores",
            ],
            [
                "state_id" => 23,
                "name" => "Vila Lângaro",
                "slug" => "vila-langaro",
            ],
            [
                "state_id" => 23,
                "name" => "Vila Maria",
                "slug" => "vila-maria",
            ],
            [
                "state_id" => 23,
                "name" => "Vila Nova do Sul",
                "slug" => "vila-nova-do-sul",
            ],
            [
                "state_id" => 23,
                "name" => "Vista Alegre",
                "slug" => "vista-alegre",
            ],
            [
                "state_id" => 23,
                "name" => "Vista Alegre do Prata",
                "slug" => "vista-alegre-do-prata",
            ],
            [
                "state_id" => 23,
                "name" => "Vista Gaúcha",
                "slug" => "vista-gaucha",
            ],
            [
                "state_id" => 23,
                "name" => "Vitória das Missões",
                "slug" => "vitoria-das-missoes",
            ],
            [
                "state_id" => 23,
                "name" => "Westfália",
                "slug" => "westfalia",
            ],
            [
                "state_id" => 23,
                "name" => "Xangri-lá",
                "slug" => "xangri-la",
            ],
            [
                "state_id" => 21,
                "name" => "Alta Floresta d`Oeste",
                "slug" => "alta-floresta-doeste",
            ],
            [
                "state_id" => 21,
                "name" => "Alto Alegre dos Parecis",
                "slug" => "alto-alegre-dos-parecis",
            ],
            [
                "state_id" => 21,
                "name" => "Alto Paraíso",
                "slug" => "alto-paraiso",
            ],
            [
                "state_id" => 21,
                "name" => "Alvorada d`Oeste",
                "slug" => "alvorada-doeste",
            ],
            [
                "state_id" => 21,
                "name" => "Ariquemes",
                "slug" => "ariquemes",
            ],
            [
                "state_id" => 21,
                "name" => "Buritis",
                "slug" => "buritis",
            ],
            [
                "state_id" => 21,
                "name" => "Cabixi",
                "slug" => "cabixi",
            ],
            [
                "state_id" => 21,
                "name" => "Cacaulândia",
                "slug" => "cacaulandia",
            ],
            [
                "state_id" => 21,
                "name" => "Cacoal",
                "slug" => "cacoal",
            ],
            [
                "state_id" => 21,
                "name" => "Campo Novo de Rondônia",
                "slug" => "campo-novo-de-rondonia",
            ],
            [
                "state_id" => 21,
                "name" => "Candeias do Jamari",
                "slug" => "candeias-do-jamari",
            ],
            [
                "state_id" => 21,
                "name" => "Castanheiras",
                "slug" => "castanheiras",
            ],
            [
                "state_id" => 21,
                "name" => "Cerejeiras",
                "slug" => "cerejeiras",
            ],
            [
                "state_id" => 21,
                "name" => "Chupinguaia",
                "slug" => "chupinguaia",
            ],
            [
                "state_id" => 21,
                "name" => "Colorado do Oeste",
                "slug" => "colorado-do-oeste",
            ],
            [
                "state_id" => 21,
                "name" => "Corumbiara",
                "slug" => "corumbiara",
            ],
            [
                "state_id" => 21,
                "name" => "Costa Marques",
                "slug" => "costa-marques",
            ],
            [
                "state_id" => 21,
                "name" => "Cujubim",
                "slug" => "cujubim",
            ],
            [
                "state_id" => 21,
                "name" => "Espigão d`Oeste",
                "slug" => "espigao-doeste",
            ],
            [
                "state_id" => 21,
                "name" => "Governador Jorge Teixeira",
                "slug" => "governador-jorge-teixeira",
            ],
            [
                "state_id" => 21,
                "name" => "Guajará-Mirim",
                "slug" => "guajara-mirim",
            ],
            [
                "state_id" => 21,
                "name" => "Itapuã do Oeste",
                "slug" => "itapua-do-oeste",
            ],
            [
                "state_id" => 21,
                "name" => "Jaru",
                "slug" => "jaru",
            ],
            [
                "state_id" => 21,
                "name" => "Ji-Paraná",
                "slug" => "ji-parana",
            ],
            [
                "state_id" => 21,
                "name" => "Machadinho d`Oeste",
                "slug" => "machadinho-doeste",
            ],
            [
                "state_id" => 21,
                "name" => "Ministro Andreazza",
                "slug" => "ministro-andreazza",
            ],
            [
                "state_id" => 21,
                "name" => "Mirante da Serra",
                "slug" => "mirante-da-serra",
            ],
            [
                "state_id" => 21,
                "name" => "Monte Negro",
                "slug" => "monte-negro",
            ],
            [
                "state_id" => 21,
                "name" => "Nova Brasilândia d`Oeste",
                "slug" => "nova-brasilandia-doeste",
            ],
            [
                "state_id" => 21,
                "name" => "Nova Mamoré",
                "slug" => "nova-mamore",
            ],
            [
                "state_id" => 21,
                "name" => "Nova União",
                "slug" => "nova-uniao",
            ],
            [
                "state_id" => 21,
                "name" => "Novo Horizonte do Oeste",
                "slug" => "novo-horizonte-do-oeste",
            ],
            [
                "state_id" => 21,
                "name" => "Ouro Preto do Oeste",
                "slug" => "ouro-preto-do-oeste",
            ],
            [
                "state_id" => 21,
                "name" => "Parecis",
                "slug" => "parecis",
            ],
            [
                "state_id" => 21,
                "name" => "Pimenta Bueno",
                "slug" => "pimenta-bueno",
            ],
            [
                "state_id" => 21,
                "name" => "Pimenteiras do Oeste",
                "slug" => "pimenteiras-do-oeste",
            ],
            [
                "state_id" => 21,
                "name" => "Porto Velho",
                "slug" => "porto-velho",
            ],
            [
                "state_id" => 21,
                "name" => "Presidente Médici",
                "slug" => "presidente-medici",
            ],
            [
                "state_id" => 21,
                "name" => "Primavera de Rondônia",
                "slug" => "primavera-de-rondonia",
            ],
            [
                "state_id" => 21,
                "name" => "Rio Crespo",
                "slug" => "rio-crespo",
            ],
            [
                "state_id" => 21,
                "name" => "Rolim de Moura",
                "slug" => "rolim-de-moura",
            ],
            [
                "state_id" => 21,
                "name" => "Santa Luzia d`Oeste",
                "slug" => "santa-luzia-doeste",
            ],
            [
                "state_id" => 21,
                "name" => "São Felipe d`Oeste",
                "slug" => "sao-felipe-doeste",
            ],
            [
                "state_id" => 21,
                "name" => "São Francisco do Guaporé",
                "slug" => "sao-francisco-do-guapore",
            ],
            [
                "state_id" => 21,
                "name" => "São Miguel do Guaporé",
                "slug" => "sao-miguel-do-guapore",
            ],
            [
                "state_id" => 21,
                "name" => "Seringueiras",
                "slug" => "seringueiras",
            ],
            [
                "state_id" => 21,
                "name" => "Teixeirópolis",
                "slug" => "teixeiropolis",
            ],
            [
                "state_id" => 21,
                "name" => "Theobroma",
                "slug" => "theobroma",
            ],
            [
                "state_id" => 21,
                "name" => "Urupá",
                "slug" => "urupa",
            ],
            [
                "state_id" => 21,
                "name" => "Vale do Anari",
                "slug" => "vale-do-anari",
            ],
            [
                "state_id" => 21,
                "name" => "Vale do Paraíso",
                "slug" => "vale-do-paraiso",
            ],
            [
                "state_id" => 21,
                "name" => "Vilhena",
                "slug" => "vilhena",
            ],
            [
                "state_id" => 22,
                "name" => "Alto Alegre",
                "slug" => "alto-alegre",
            ],
            [
                "state_id" => 22,
                "name" => "Amajari",
                "slug" => "amajari",
            ],
            [
                "state_id" => 22,
                "name" => "Boa Vista",
                "slug" => "boa-vista",
            ],
            [
                "state_id" => 22,
                "name" => "Bonfim",
                "slug" => "bonfim",
            ],
            [
                "state_id" => 22,
                "name" => "Cantá",
                "slug" => "canta",
            ],
            [
                "state_id" => 22,
                "name" => "Caracaraí",
                "slug" => "caracarai",
            ],
            [
                "state_id" => 22,
                "name" => "Caroebe",
                "slug" => "caroebe",
            ],
            [
                "state_id" => 22,
                "name" => "Iracema",
                "slug" => "iracema",
            ],
            [
                "state_id" => 22,
                "name" => "Mucajaí",
                "slug" => "mucajai",
            ],
            [
                "state_id" => 22,
                "name" => "Normandia",
                "slug" => "normandia",
            ],
            [
                "state_id" => 22,
                "name" => "Pacaraima",
                "slug" => "pacaraima",
            ],
            [
                "state_id" => 22,
                "name" => "Rorainópolis",
                "slug" => "rorainopolis",
            ],
            [
                "state_id" => 22,
                "name" => "São João da Baliza",
                "slug" => "sao-joao-da-baliza",
            ],
            [
                "state_id" => 22,
                "name" => "São Luiz",
                "slug" => "sao-luiz",
            ],
            [
                "state_id" => 22,
                "name" => "Uiramutã",
                "slug" => "uiramuta",
            ],
            [
                "state_id" => 24,
                "name" => "Abdon Batista",
                "slug" => "abdon-batista",
            ],
            [
                "state_id" => 24,
                "name" => "Abelardo Luz",
                "slug" => "abelardo-luz",
            ],
            [
                "state_id" => 24,
                "name" => "Agrolândia",
                "slug" => "agrolandia",
            ],
            [
                "state_id" => 24,
                "name" => "Agronômica",
                "slug" => "agronomica",
            ],
            [
                "state_id" => 24,
                "name" => "Água Doce",
                "slug" => "agua-doce",
            ],
            [
                "state_id" => 24,
                "name" => "Águas de Chapecó",
                "slug" => "aguas-de-chapeco",
            ],
            [
                "state_id" => 24,
                "name" => "Águas Frias",
                "slug" => "aguas-frias",
            ],
            [
                "state_id" => 24,
                "name" => "Águas Mornas",
                "slug" => "aguas-mornas",
            ],
            [
                "state_id" => 24,
                "name" => "Alfredo Wagner",
                "slug" => "alfredo-wagner",
            ],
            [
                "state_id" => 24,
                "name" => "Alto Bela Vista",
                "slug" => "alto-bela-vista",
            ],
            [
                "state_id" => 24,
                "name" => "Anchieta",
                "slug" => "anchieta",
            ],
            [
                "state_id" => 24,
                "name" => "Angelina",
                "slug" => "angelina",
            ],
            [
                "state_id" => 24,
                "name" => "Anita Garibaldi",
                "slug" => "anita-garibaldi",
            ],
            [
                "state_id" => 24,
                "name" => "Anitápolis",
                "slug" => "anitapolis",
            ],
            [
                "state_id" => 24,
                "name" => "Antônio Carlos",
                "slug" => "antonio-carlos",
            ],
            [
                "state_id" => 24,
                "name" => "Apiúna",
                "slug" => "apiuna",
            ],
            [
                "state_id" => 24,
                "name" => "Arabutã",
                "slug" => "arabuta",
            ],
            [
                "state_id" => 24,
                "name" => "Araquari",
                "slug" => "araquari",
            ],
            [
                "state_id" => 24,
                "name" => "Araranguá",
                "slug" => "ararangua",
            ],
            [
                "state_id" => 24,
                "name" => "Armazém",
                "slug" => "armazem",
            ],
            [
                "state_id" => 24,
                "name" => "Arroio Trinta",
                "slug" => "arroio-trinta",
            ],
            [
                "state_id" => 24,
                "name" => "Arvoredo",
                "slug" => "arvoredo",
            ],
            [
                "state_id" => 24,
                "name" => "Ascurra",
                "slug" => "ascurra",
            ],
            [
                "state_id" => 24,
                "name" => "Atalanta",
                "slug" => "atalanta",
            ],
            [
                "state_id" => 24,
                "name" => "Aurora",
                "slug" => "aurora",
            ],
            [
                "state_id" => 24,
                "name" => "Balneário Arroio do Silva",
                "slug" => "balneario-arroio-do-silva",
            ],
            [
                "state_id" => 24,
                "name" => "Balneário Barra do Sul",
                "slug" => "balneario-barra-do-sul",
            ],
            [
                "state_id" => 24,
                "name" => "Balneário Camboriú",
                "slug" => "balneario-camboriu",
            ],
            [
                "state_id" => 24,
                "name" => "Balneário Gaivota",
                "slug" => "balneario-gaivota",
            ],
            [
                "state_id" => 24,
                "name" => "Bandeirante",
                "slug" => "bandeirante",
            ],
            [
                "state_id" => 24,
                "name" => "Barra Bonita",
                "slug" => "barra-bonita",
            ],
            [
                "state_id" => 24,
                "name" => "Barra Velha",
                "slug" => "barra-velha",
            ],
            [
                "state_id" => 24,
                "name" => "Bela Vista do Toldo",
                "slug" => "bela-vista-do-toldo",
            ],
            [
                "state_id" => 24,
                "name" => "Belmonte",
                "slug" => "belmonte",
            ],
            [
                "state_id" => 24,
                "name" => "Benedito Novo",
                "slug" => "benedito-novo",
            ],
            [
                "state_id" => 24,
                "name" => "Biguaçu",
                "slug" => "biguacu",
            ],
            [
                "state_id" => 24,
                "name" => "Blumenau",
                "slug" => "blumenau",
            ],
            [
                "state_id" => 24,
                "name" => "Bocaina do Sul",
                "slug" => "bocaina-do-sul",
            ],
            [
                "state_id" => 24,
                "name" => "Bom Jardim da Serra",
                "slug" => "bom-jardim-da-serra",
            ],
            [
                "state_id" => 24,
                "name" => "Bom Jesus",
                "slug" => "bom-jesus",
            ],
            [
                "state_id" => 24,
                "name" => "Bom Jesus do Oeste",
                "slug" => "bom-jesus-do-oeste",
            ],
            [
                "state_id" => 24,
                "name" => "Bom Retiro",
                "slug" => "bom-retiro",
            ],
            [
                "state_id" => 24,
                "name" => "Bombinhas",
                "slug" => "bombinhas",
            ],
            [
                "state_id" => 24,
                "name" => "Botuverá",
                "slug" => "botuvera",
            ],
            [
                "state_id" => 24,
                "name" => "Braço do Norte",
                "slug" => "braco-do-norte",
            ],
            [
                "state_id" => 24,
                "name" => "Braço do Trombudo",
                "slug" => "braco-do-trombudo",
            ],
            [
                "state_id" => 24,
                "name" => "Brunópolis",
                "slug" => "brunopolis",
            ],
            [
                "state_id" => 24,
                "name" => "Brusque",
                "slug" => "brusque",
            ],
            [
                "state_id" => 24,
                "name" => "Caçador",
                "slug" => "cacador",
            ],
            [
                "state_id" => 24,
                "name" => "Caibi",
                "slug" => "caibi",
            ],
            [
                "state_id" => 24,
                "name" => "Calmon",
                "slug" => "calmon",
            ],
            [
                "state_id" => 24,
                "name" => "Camboriú",
                "slug" => "camboriu",
            ],
            [
                "state_id" => 24,
                "name" => "Campo Alegre",
                "slug" => "campo-alegre",
            ],
            [
                "state_id" => 24,
                "name" => "Campo Belo do Sul",
                "slug" => "campo-belo-do-sul",
            ],
            [
                "state_id" => 24,
                "name" => "Campo Erê",
                "slug" => "campo-ere",
            ],
            [
                "state_id" => 24,
                "name" => "Campos Novos",
                "slug" => "campos-novos",
            ],
            [
                "state_id" => 24,
                "name" => "Canelinha",
                "slug" => "canelinha",
            ],
            [
                "state_id" => 24,
                "name" => "Canoinhas",
                "slug" => "canoinhas",
            ],
            [
                "state_id" => 24,
                "name" => "Capão Alto",
                "slug" => "capao-alto",
            ],
            [
                "state_id" => 24,
                "name" => "Capinzal",
                "slug" => "capinzal",
            ],
            [
                "state_id" => 24,
                "name" => "Capivari de Baixo",
                "slug" => "capivari-de-baixo",
            ],
            [
                "state_id" => 24,
                "name" => "Catanduvas",
                "slug" => "catanduvas",
            ],
            [
                "state_id" => 24,
                "name" => "Caxambu do Sul",
                "slug" => "caxambu-do-sul",
            ],
            [
                "state_id" => 24,
                "name" => "Celso Ramos",
                "slug" => "celso-ramos",
            ],
            [
                "state_id" => 24,
                "name" => "Cerro Negro",
                "slug" => "cerro-negro",
            ],
            [
                "state_id" => 24,
                "name" => "Chapadão do Lageado",
                "slug" => "chapadao-do-lageado",
            ],
            [
                "state_id" => 24,
                "name" => "Chapecó",
                "slug" => "chapeco",
            ],
            [
                "state_id" => 24,
                "name" => "Cocal do Sul",
                "slug" => "cocal-do-sul",
            ],
            [
                "state_id" => 24,
                "name" => "Concórdia",
                "slug" => "concordia",
            ],
            [
                "state_id" => 24,
                "name" => "Cordilheira Alta",
                "slug" => "cordilheira-alta",
            ],
            [
                "state_id" => 24,
                "name" => "Coronel Freitas",
                "slug" => "coronel-freitas",
            ],
            [
                "state_id" => 24,
                "name" => "Coronel Martins",
                "slug" => "coronel-martins",
            ],
            [
                "state_id" => 24,
                "name" => "Correia Pinto",
                "slug" => "correia-pinto",
            ],
            [
                "state_id" => 24,
                "name" => "Corupá",
                "slug" => "corupa",
            ],
            [
                "state_id" => 24,
                "name" => "Criciúma",
                "slug" => "criciuma",
            ],
            [
                "state_id" => 24,
                "name" => "Cunha Porã",
                "slug" => "cunha-pora",
            ],
            [
                "state_id" => 24,
                "name" => "Cunhataí",
                "slug" => "cunhatai",
            ],
            [
                "state_id" => 24,
                "name" => "Curitibanos",
                "slug" => "curitibanos",
            ],
            [
                "state_id" => 24,
                "name" => "Descanso",
                "slug" => "descanso",
            ],
            [
                "state_id" => 24,
                "name" => "Dionísio Cerqueira",
                "slug" => "dionisio-cerqueira",
            ],
            [
                "state_id" => 24,
                "name" => "Dona Emma",
                "slug" => "dona-emma",
            ],
            [
                "state_id" => 24,
                "name" => "Doutor Pedrinho",
                "slug" => "doutor-pedrinho",
            ],
            [
                "state_id" => 24,
                "name" => "Entre Rios",
                "slug" => "entre-rios",
            ],
            [
                "state_id" => 24,
                "name" => "Ermo",
                "slug" => "ermo",
            ],
            [
                "state_id" => 24,
                "name" => "Erval Velho",
                "slug" => "erval-velho",
            ],
            [
                "state_id" => 24,
                "name" => "Faxinal dos Guedes",
                "slug" => "faxinal-dos-guedes",
            ],
            [
                "state_id" => 24,
                "name" => "Flor do Sertão",
                "slug" => "flor-do-sertao",
            ],
            [
                "state_id" => 24,
                "name" => "Florianópolis",
                "slug" => "florianopolis",
            ],
            [
                "state_id" => 24,
                "name" => "Formosa do Sul",
                "slug" => "formosa-do-sul",
            ],
            [
                "state_id" => 24,
                "name" => "Forquilhinha",
                "slug" => "forquilhinha",
            ],
            [
                "state_id" => 24,
                "name" => "Fraiburgo",
                "slug" => "fraiburgo",
            ],
            [
                "state_id" => 24,
                "name" => "Frei Rogério",
                "slug" => "frei-rogerio",
            ],
            [
                "state_id" => 24,
                "name" => "Galvão",
                "slug" => "galvao",
            ],
            [
                "state_id" => 24,
                "name" => "Garopaba",
                "slug" => "garopaba",
            ],
            [
                "state_id" => 24,
                "name" => "Garuva",
                "slug" => "garuva",
            ],
            [
                "state_id" => 24,
                "name" => "Gaspar",
                "slug" => "gaspar",
            ],
            [
                "state_id" => 24,
                "name" => "Governador Celso Ramos",
                "slug" => "governador-celso-ramos",
            ],
            [
                "state_id" => 24,
                "name" => "Grão Pará",
                "slug" => "grao-para",
            ],
            [
                "state_id" => 24,
                "name" => "Gravatal",
                "slug" => "gravatal",
            ],
            [
                "state_id" => 24,
                "name" => "Guabiruba",
                "slug" => "guabiruba",
            ],
            [
                "state_id" => 24,
                "name" => "Guaraciaba",
                "slug" => "guaraciaba",
            ],
            [
                "state_id" => 24,
                "name" => "Guaramirim",
                "slug" => "guaramirim",
            ],
            [
                "state_id" => 24,
                "name" => "Guarujá do Sul",
                "slug" => "guaruja-do-sul",
            ],
            [
                "state_id" => 24,
                "name" => "Guatambú",
                "slug" => "guatambu",
            ],
            [
                "state_id" => 24,
                "name" => "Herval d`Oeste",
                "slug" => "herval-doeste",
            ],
            [
                "state_id" => 24,
                "name" => "Ibiam",
                "slug" => "ibiam",
            ],
            [
                "state_id" => 24,
                "name" => "Ibicaré",
                "slug" => "ibicare",
            ],
            [
                "state_id" => 24,
                "name" => "Ibirama",
                "slug" => "ibirama",
            ],
            [
                "state_id" => 24,
                "name" => "Içara",
                "slug" => "icara",
            ],
            [
                "state_id" => 24,
                "name" => "Ilhota",
                "slug" => "ilhota",
            ],
            [
                "state_id" => 24,
                "name" => "Imaruí",
                "slug" => "imarui",
            ],
            [
                "state_id" => 24,
                "name" => "Imbituba",
                "slug" => "imbituba",
            ],
            [
                "state_id" => 24,
                "name" => "Imbuia",
                "slug" => "imbuia",
            ],
            [
                "state_id" => 24,
                "name" => "Indaial",
                "slug" => "indaial",
            ],
            [
                "state_id" => 24,
                "name" => "Iomerê",
                "slug" => "iomere",
            ],
            [
                "state_id" => 24,
                "name" => "Ipira",
                "slug" => "ipira",
            ],
            [
                "state_id" => 24,
                "name" => "Iporã do Oeste",
                "slug" => "ipora-do-oeste",
            ],
            [
                "state_id" => 24,
                "name" => "Ipuaçu",
                "slug" => "ipuacu",
            ],
            [
                "state_id" => 24,
                "name" => "Ipumirim",
                "slug" => "ipumirim",
            ],
            [
                "state_id" => 24,
                "name" => "Iraceminha",
                "slug" => "iraceminha",
            ],
            [
                "state_id" => 24,
                "name" => "Irani",
                "slug" => "irani",
            ],
            [
                "state_id" => 24,
                "name" => "Irati",
                "slug" => "irati",
            ],
            [
                "state_id" => 24,
                "name" => "Irineópolis",
                "slug" => "irineopolis",
            ],
            [
                "state_id" => 24,
                "name" => "Itá",
                "slug" => "ita",
            ],
            [
                "state_id" => 24,
                "name" => "Itaiópolis",
                "slug" => "itaiopolis",
            ],
            [
                "state_id" => 24,
                "name" => "Itajaí",
                "slug" => "itajai",
            ],
            [
                "state_id" => 24,
                "name" => "Itapema",
                "slug" => "itapema",
            ],
            [
                "state_id" => 24,
                "name" => "Itapiranga",
                "slug" => "itapiranga",
            ],
            [
                "state_id" => 24,
                "name" => "Itapoá",
                "slug" => "itapoa",
            ],
            [
                "state_id" => 24,
                "name" => "Ituporanga",
                "slug" => "ituporanga",
            ],
            [
                "state_id" => 24,
                "name" => "Jaborá",
                "slug" => "jabora",
            ],
            [
                "state_id" => 24,
                "name" => "Jacinto Machado",
                "slug" => "jacinto-machado",
            ],
            [
                "state_id" => 24,
                "name" => "Jaguaruna",
                "slug" => "jaguaruna",
            ],
            [
                "state_id" => 24,
                "name" => "Jaraguá do Sul",
                "slug" => "jaragua-do-sul",
            ],
            [
                "state_id" => 24,
                "name" => "Jardinópolis",
                "slug" => "jardinopolis",
            ],
            [
                "state_id" => 24,
                "name" => "Joaçaba",
                "slug" => "joacaba",
            ],
            [
                "state_id" => 24,
                "name" => "Joinville",
                "slug" => "joinville",
            ],
            [
                "state_id" => 24,
                "name" => "José Boiteux",
                "slug" => "jose-boiteux",
            ],
            [
                "state_id" => 24,
                "name" => "Jupiá",
                "slug" => "jupia",
            ],
            [
                "state_id" => 24,
                "name" => "Lacerdópolis",
                "slug" => "lacerdopolis",
            ],
            [
                "state_id" => 24,
                "name" => "Lages",
                "slug" => "lages",
            ],
            [
                "state_id" => 24,
                "name" => "Laguna",
                "slug" => "laguna",
            ],
            [
                "state_id" => 24,
                "name" => "Lajeado Grande",
                "slug" => "lajeado-grande",
            ],
            [
                "state_id" => 24,
                "name" => "Laurentino",
                "slug" => "laurentino",
            ],
            [
                "state_id" => 24,
                "name" => "Lauro Muller",
                "slug" => "lauro-muller",
            ],
            [
                "state_id" => 24,
                "name" => "Lebon Régis",
                "slug" => "lebon-regis",
            ],
            [
                "state_id" => 24,
                "name" => "Leoberto Leal",
                "slug" => "leoberto-leal",
            ],
            [
                "state_id" => 24,
                "name" => "Lindóia do Sul",
                "slug" => "lindoia-do-sul",
            ],
            [
                "state_id" => 24,
                "name" => "Lontras",
                "slug" => "lontras",
            ],
            [
                "state_id" => 24,
                "name" => "Luiz Alves",
                "slug" => "luiz-alves",
            ],
            [
                "state_id" => 24,
                "name" => "Luzerna",
                "slug" => "luzerna",
            ],
            [
                "state_id" => 24,
                "name" => "Macieira",
                "slug" => "macieira",
            ],
            [
                "state_id" => 24,
                "name" => "Mafra",
                "slug" => "mafra",
            ],
            [
                "state_id" => 24,
                "name" => "Major Gercino",
                "slug" => "major-gercino",
            ],
            [
                "state_id" => 24,
                "name" => "Major Vieira",
                "slug" => "major-vieira",
            ],
            [
                "state_id" => 24,
                "name" => "Maracajá",
                "slug" => "maracaja",
            ],
            [
                "state_id" => 24,
                "name" => "Maravilha",
                "slug" => "maravilha",
            ],
            [
                "state_id" => 24,
                "name" => "Marema",
                "slug" => "marema",
            ],
            [
                "state_id" => 24,
                "name" => "Massaranduba",
                "slug" => "massaranduba",
            ],
            [
                "state_id" => 24,
                "name" => "Matos Costa",
                "slug" => "matos-costa",
            ],
            [
                "state_id" => 24,
                "name" => "Meleiro",
                "slug" => "meleiro",
            ],
            [
                "state_id" => 24,
                "name" => "Mirim Doce",
                "slug" => "mirim-doce",
            ],
            [
                "state_id" => 24,
                "name" => "Modelo",
                "slug" => "modelo",
            ],
            [
                "state_id" => 24,
                "name" => "Mondaí",
                "slug" => "mondai",
            ],
            [
                "state_id" => 24,
                "name" => "Monte Carlo",
                "slug" => "monte-carlo",
            ],
            [
                "state_id" => 24,
                "name" => "Monte Castelo",
                "slug" => "monte-castelo",
            ],
            [
                "state_id" => 24,
                "name" => "Morro da Fumaça",
                "slug" => "morro-da-fumaca",
            ],
            [
                "state_id" => 24,
                "name" => "Morro Grande",
                "slug" => "morro-grande",
            ],
            [
                "state_id" => 24,
                "name" => "Navegantes",
                "slug" => "navegantes",
            ],
            [
                "state_id" => 24,
                "name" => "Nova Erechim",
                "slug" => "nova-erechim",
            ],
            [
                "state_id" => 24,
                "name" => "Nova Itaberaba",
                "slug" => "nova-itaberaba",
            ],
            [
                "state_id" => 24,
                "name" => "Nova Trento",
                "slug" => "nova-trento",
            ],
            [
                "state_id" => 24,
                "name" => "Nova Veneza",
                "slug" => "nova-veneza",
            ],
            [
                "state_id" => 24,
                "name" => "Novo Horizonte",
                "slug" => "novo-horizonte",
            ],
            [
                "state_id" => 24,
                "name" => "Orleans",
                "slug" => "orleans",
            ],
            [
                "state_id" => 24,
                "name" => "Otacílio Costa",
                "slug" => "otacilio-costa",
            ],
            [
                "state_id" => 24,
                "name" => "Ouro",
                "slug" => "ouro",
            ],
            [
                "state_id" => 24,
                "name" => "Ouro Verde",
                "slug" => "ouro-verde",
            ],
            [
                "state_id" => 24,
                "name" => "Paial",
                "slug" => "paial",
            ],
            [
                "state_id" => 24,
                "name" => "Painel",
                "slug" => "painel",
            ],
            [
                "state_id" => 24,
                "name" => "Palhoça",
                "slug" => "palhoca",
            ],
            [
                "state_id" => 24,
                "name" => "Palma Sola",
                "slug" => "palma-sola",
            ],
            [
                "state_id" => 24,
                "name" => "Palmeira",
                "slug" => "palmeira",
            ],
            [
                "state_id" => 24,
                "name" => "Palmitos",
                "slug" => "palmitos",
            ],
            [
                "state_id" => 24,
                "name" => "Papanduva",
                "slug" => "papanduva",
            ],
            [
                "state_id" => 24,
                "name" => "Paraíso",
                "slug" => "paraiso",
            ],
            [
                "state_id" => 24,
                "name" => "Passo de Torres",
                "slug" => "passo-de-torres",
            ],
            [
                "state_id" => 24,
                "name" => "Passos Maia",
                "slug" => "passos-maia",
            ],
            [
                "state_id" => 24,
                "name" => "Paulo Lopes",
                "slug" => "paulo-lopes",
            ],
            [
                "state_id" => 24,
                "name" => "Pedras Grandes",
                "slug" => "pedras-grandes",
            ],
            [
                "state_id" => 24,
                "name" => "Penha",
                "slug" => "penha",
            ],
            [
                "state_id" => 24,
                "name" => "Peritiba",
                "slug" => "peritiba",
            ],
            [
                "state_id" => 24,
                "name" => "Petrolândia",
                "slug" => "petrolandia",
            ],
            [
                "state_id" => 24,
                "name" => "Balneário Piçarras",
                "slug" => "balneario-picarras",
            ],
            [
                "state_id" => 24,
                "name" => "Pinhalzinho",
                "slug" => "pinhalzinho",
            ],
            [
                "state_id" => 24,
                "name" => "Pinheiro Preto",
                "slug" => "pinheiro-preto",
            ],
            [
                "state_id" => 24,
                "name" => "Piratuba",
                "slug" => "piratuba",
            ],
            [
                "state_id" => 24,
                "name" => "Planalto Alegre",
                "slug" => "planalto-alegre",
            ],
            [
                "state_id" => 24,
                "name" => "Pomerode",
                "slug" => "pomerode",
            ],
            [
                "state_id" => 24,
                "name" => "Ponte Alta",
                "slug" => "ponte-alta",
            ],
            [
                "state_id" => 24,
                "name" => "Ponte Alta do Norte",
                "slug" => "ponte-alta-do-norte",
            ],
            [
                "state_id" => 24,
                "name" => "Ponte Serrada",
                "slug" => "ponte-serrada",
            ],
            [
                "state_id" => 24,
                "name" => "Porto Belo",
                "slug" => "porto-belo",
            ],
            [
                "state_id" => 24,
                "name" => "Porto União",
                "slug" => "porto-uniao",
            ],
            [
                "state_id" => 24,
                "name" => "Pouso Redondo",
                "slug" => "pouso-redondo",
            ],
            [
                "state_id" => 24,
                "name" => "Praia Grande",
                "slug" => "praia-grande",
            ],
            [
                "state_id" => 24,
                "name" => "Presidente Getúlio",
                "slug" => "presidente-getulio",
            ],
            [
                "state_id" => 24,
                "name" => "Presidente Nereu",
                "slug" => "presidente-nereu",
            ],
            [
                "state_id" => 24,
                "name" => "Princesa",
                "slug" => "princesa",
            ],
            [
                "state_id" => 24,
                "name" => "Quilombo",
                "slug" => "quilombo",
            ],
            [
                "state_id" => 24,
                "name" => "Rancho Queimado",
                "slug" => "rancho-queimado",
            ],
            [
                "state_id" => 24,
                "name" => "Rio das Antas",
                "slug" => "rio-das-antas",
            ],
            [
                "state_id" => 24,
                "name" => "Rio do Campo",
                "slug" => "rio-do-campo",
            ],
            [
                "state_id" => 24,
                "name" => "Rio do Oeste",
                "slug" => "rio-do-oeste",
            ],
            [
                "state_id" => 24,
                "name" => "Rio do Sul",
                "slug" => "rio-do-sul",
            ],
            [
                "state_id" => 24,
                "name" => "Rio dos Cedros",
                "slug" => "rio-dos-cedros",
            ],
            [
                "state_id" => 24,
                "name" => "Rio Fortuna",
                "slug" => "rio-fortuna",
            ],
            [
                "state_id" => 24,
                "name" => "Rio Negrinho",
                "slug" => "rio-negrinho",
            ],
            [
                "state_id" => 24,
                "name" => "Rio Rufino",
                "slug" => "rio-rufino",
            ],
            [
                "state_id" => 24,
                "name" => "Riqueza",
                "slug" => "riqueza",
            ],
            [
                "state_id" => 24,
                "name" => "Rodeio",
                "slug" => "rodeio",
            ],
            [
                "state_id" => 24,
                "name" => "Romelândia",
                "slug" => "romelandia",
            ],
            [
                "state_id" => 24,
                "name" => "Salete",
                "slug" => "salete",
            ],
            [
                "state_id" => 24,
                "name" => "Saltinho",
                "slug" => "saltinho",
            ],
            [
                "state_id" => 24,
                "name" => "Salto Veloso",
                "slug" => "salto-veloso",
            ],
            [
                "state_id" => 24,
                "name" => "Sangão",
                "slug" => "sangao",
            ],
            [
                "state_id" => 24,
                "name" => "Santa Cecília",
                "slug" => "santa-cecilia",
            ],
            [
                "state_id" => 24,
                "name" => "Santa Helena",
                "slug" => "santa-helena",
            ],
            [
                "state_id" => 24,
                "name" => "Santa Rosa de Lima",
                "slug" => "santa-rosa-de-lima",
            ],
            [
                "state_id" => 24,
                "name" => "Santa Rosa do Sul",
                "slug" => "santa-rosa-do-sul",
            ],
            [
                "state_id" => 24,
                "name" => "Santa Terezinha",
                "slug" => "santa-terezinha",
            ],
            [
                "state_id" => 24,
                "name" => "Santa Terezinha do Progresso",
                "slug" => "santa-terezinha-do-progresso",
            ],
            [
                "state_id" => 24,
                "name" => "Santiago do Sul",
                "slug" => "santiago-do-sul",
            ],
            [
                "state_id" => 24,
                "name" => "Santo Amaro da Imperatriz",
                "slug" => "santo-amaro-da-imperatriz",
            ],
            [
                "state_id" => 24,
                "name" => "São Bento do Sul",
                "slug" => "sao-bento-do-sul",
            ],
            [
                "state_id" => 24,
                "name" => "São Bernardino",
                "slug" => "sao-bernardino",
            ],
            [
                "state_id" => 24,
                "name" => "São Bonifácio",
                "slug" => "sao-bonifacio",
            ],
            [
                "state_id" => 24,
                "name" => "São Carlos",
                "slug" => "sao-carlos",
            ],
            [
                "state_id" => 24,
                "name" => "São Cristovão do Sul",
                "slug" => "sao-cristovao-do-sul",
            ],
            [
                "state_id" => 24,
                "name" => "São Domingos",
                "slug" => "sao-domingos",
            ],
            [
                "state_id" => 24,
                "name" => "São Francisco do Sul",
                "slug" => "sao-francisco-do-sul",
            ],
            [
                "state_id" => 24,
                "name" => "São João Batista",
                "slug" => "sao-joao-batista",
            ],
            [
                "state_id" => 24,
                "name" => "São João do Itaperiú",
                "slug" => "sao-joao-do-itaperiu",
            ],
            [
                "state_id" => 24,
                "name" => "São João do Oeste",
                "slug" => "sao-joao-do-oeste",
            ],
            [
                "state_id" => 24,
                "name" => "São João do Sul",
                "slug" => "sao-joao-do-sul",
            ],
            [
                "state_id" => 24,
                "name" => "São Joaquim",
                "slug" => "sao-joaquim",
            ],
            [
                "state_id" => 24,
                "name" => "São José",
                "slug" => "sao-jose",
            ],
            [
                "state_id" => 24,
                "name" => "São José do Cedro",
                "slug" => "sao-jose-do-cedro",
            ],
            [
                "state_id" => 24,
                "name" => "São José do Cerrito",
                "slug" => "sao-jose-do-cerrito",
            ],
            [
                "state_id" => 24,
                "name" => "São Lourenço do Oeste",
                "slug" => "sao-lourenco-do-oeste",
            ],
            [
                "state_id" => 24,
                "name" => "São Ludgero",
                "slug" => "sao-ludgero",
            ],
            [
                "state_id" => 24,
                "name" => "São Martinho",
                "slug" => "sao-martinho",
            ],
            [
                "state_id" => 24,
                "name" => "São Miguel da Boa Vista",
                "slug" => "sao-miguel-da-boa-vista",
            ],
            [
                "state_id" => 24,
                "name" => "São Miguel do Oeste",
                "slug" => "sao-miguel-do-oeste",
            ],
            [
                "state_id" => 24,
                "name" => "São Pedro de Alcântara",
                "slug" => "sao-pedro-de-alcantara",
            ],
            [
                "state_id" => 24,
                "name" => "Saudades",
                "slug" => "saudades",
            ],
            [
                "state_id" => 24,
                "name" => "Schroeder",
                "slug" => "schroeder",
            ],
            [
                "state_id" => 24,
                "name" => "Seara",
                "slug" => "seara",
            ],
            [
                "state_id" => 24,
                "name" => "Serra Alta",
                "slug" => "serra-alta",
            ],
            [
                "state_id" => 24,
                "name" => "Siderópolis",
                "slug" => "sideropolis",
            ],
            [
                "state_id" => 24,
                "name" => "Sombrio",
                "slug" => "sombrio",
            ],
            [
                "state_id" => 24,
                "name" => "Sul Brasil",
                "slug" => "sul-brasil",
            ],
            [
                "state_id" => 24,
                "name" => "Taió",
                "slug" => "taio",
            ],
            [
                "state_id" => 24,
                "name" => "Tangará",
                "slug" => "tangara",
            ],
            [
                "state_id" => 24,
                "name" => "Tigrinhos",
                "slug" => "tigrinhos",
            ],
            [
                "state_id" => 24,
                "name" => "Tijucas",
                "slug" => "tijucas",
            ],
            [
                "state_id" => 24,
                "name" => "Timbé do Sul",
                "slug" => "timbe-do-sul",
            ],
            [
                "state_id" => 24,
                "name" => "Timbó",
                "slug" => "timbo",
            ],
            [
                "state_id" => 24,
                "name" => "Timbó Grande",
                "slug" => "timbo-grande",
            ],
            [
                "state_id" => 24,
                "name" => "Três Barras",
                "slug" => "tres-barras",
            ],
            [
                "state_id" => 24,
                "name" => "Treviso",
                "slug" => "treviso",
            ],
            [
                "state_id" => 24,
                "name" => "Treze de Maio",
                "slug" => "treze-de-maio",
            ],
            [
                "state_id" => 24,
                "name" => "Treze Tílias",
                "slug" => "treze-tilias",
            ],
            [
                "state_id" => 24,
                "name" => "Trombudo Central",
                "slug" => "trombudo-central",
            ],
            [
                "state_id" => 24,
                "name" => "Tubarão",
                "slug" => "tubarao",
            ],
            [
                "state_id" => 24,
                "name" => "Tunápolis",
                "slug" => "tunapolis",
            ],
            [
                "state_id" => 24,
                "name" => "Turvo",
                "slug" => "turvo",
            ],
            [
                "state_id" => 24,
                "name" => "União do Oeste",
                "slug" => "uniao-do-oeste",
            ],
            [
                "state_id" => 24,
                "name" => "Urubici",
                "slug" => "urubici",
            ],
            [
                "state_id" => 24,
                "name" => "Urupema",
                "slug" => "urupema",
            ],
            [
                "state_id" => 24,
                "name" => "Urussanga",
                "slug" => "urussanga",
            ],
            [
                "state_id" => 24,
                "name" => "Vargeão",
                "slug" => "vargeao",
            ],
            [
                "state_id" => 24,
                "name" => "Vargem",
                "slug" => "vargem",
            ],
            [
                "state_id" => 24,
                "name" => "Vargem Bonita",
                "slug" => "vargem-bonita",
            ],
            [
                "state_id" => 24,
                "name" => "Vidal Ramos",
                "slug" => "vidal-ramos",
            ],
            [
                "state_id" => 24,
                "name" => "Videira",
                "slug" => "videira",
            ],
            [
                "state_id" => 24,
                "name" => "Vitor Meireles",
                "slug" => "vitor-meireles",
            ],
            [
                "state_id" => 24,
                "name" => "Witmarsum",
                "slug" => "witmarsum",
            ],
            [
                "state_id" => 24,
                "name" => "Xanxerê",
                "slug" => "xanxere",
            ],
            [
                "state_id" => 24,
                "name" => "Xavantina",
                "slug" => "xavantina",
            ],
            [
                "state_id" => 24,
                "name" => "Xaxim",
                "slug" => "xaxim",
            ],
            [
                "state_id" => 24,
                "name" => "Zortéa",
                "slug" => "zortea",
            ],
            [
                "state_id" => 26,
                "name" => "Adamantina",
                "slug" => "adamantina",
            ],
            [
                "state_id" => 26,
                "name" => "Adolfo",
                "slug" => "adolfo",
            ],
            [
                "state_id" => 26,
                "name" => "Aguaí",
                "slug" => "aguai",
            ],
            [
                "state_id" => 26,
                "name" => "Águas da Prata",
                "slug" => "aguas-da-prata",
            ],
            [
                "state_id" => 26,
                "name" => "Águas de Lindóia",
                "slug" => "aguas-de-lindoia",
            ],
            [
                "state_id" => 26,
                "name" => "Águas de Santa Bárbara",
                "slug" => "aguas-de-santa-barbara",
            ],
            [
                "state_id" => 26,
                "name" => "Águas de São Pedro",
                "slug" => "aguas-de-sao-pedro",
            ],
            [
                "state_id" => 26,
                "name" => "Agudos",
                "slug" => "agudos",
            ],
            [
                "state_id" => 26,
                "name" => "Alambari",
                "slug" => "alambari",
            ],
            [
                "state_id" => 26,
                "name" => "Alfredo Marcondes",
                "slug" => "alfredo-marcondes",
            ],
            [
                "state_id" => 26,
                "name" => "Altair",
                "slug" => "altair",
            ],
            [
                "state_id" => 26,
                "name" => "Altinópolis",
                "slug" => "altinopolis",
            ],
            [
                "state_id" => 26,
                "name" => "Alto Alegre",
                "slug" => "alto-alegre",
            ],
            [
                "state_id" => 26,
                "name" => "Alumínio",
                "slug" => "aluminio",
            ],
            [
                "state_id" => 26,
                "name" => "Álvares Florence",
                "slug" => "alvares-florence",
            ],
            [
                "state_id" => 26,
                "name" => "Álvares Machado",
                "slug" => "alvares-machado",
            ],
            [
                "state_id" => 26,
                "name" => "Álvaro de Carvalho",
                "slug" => "alvaro-de-carvalho",
            ],
            [
                "state_id" => 26,
                "name" => "Alvinlândia",
                "slug" => "alvinlandia",
            ],
            [
                "state_id" => 26,
                "name" => "Americana",
                "slug" => "americana",
            ],
            [
                "state_id" => 26,
                "name" => "Américo Brasiliense",
                "slug" => "americo-brasiliense",
            ],
            [
                "state_id" => 26,
                "name" => "Américo de Campos",
                "slug" => "americo-de-campos",
            ],
            [
                "state_id" => 26,
                "name" => "Amparo",
                "slug" => "amparo",
            ],
            [
                "state_id" => 26,
                "name" => "Analândia",
                "slug" => "analandia",
            ],
            [
                "state_id" => 26,
                "name" => "Andradina",
                "slug" => "andradina",
            ],
            [
                "state_id" => 26,
                "name" => "Angatuba",
                "slug" => "angatuba",
            ],
            [
                "state_id" => 26,
                "name" => "Anhembi",
                "slug" => "anhembi",
            ],
            [
                "state_id" => 26,
                "name" => "Anhumas",
                "slug" => "anhumas",
            ],
            [
                "state_id" => 26,
                "name" => "Aparecida",
                "slug" => "aparecida",
            ],
            [
                "state_id" => 26,
                "name" => "Aparecida d`Oeste",
                "slug" => "aparecida-doeste",
            ],
            [
                "state_id" => 26,
                "name" => "Apiaí",
                "slug" => "apiai",
            ],
            [
                "state_id" => 26,
                "name" => "Araçariguama",
                "slug" => "aracariguama",
            ],
            [
                "state_id" => 26,
                "name" => "Araçatuba",
                "slug" => "aracatuba",
            ],
            [
                "state_id" => 26,
                "name" => "Araçoiaba da Serra",
                "slug" => "aracoiaba-da-serra",
            ],
            [
                "state_id" => 26,
                "name" => "Aramina",
                "slug" => "aramina",
            ],
            [
                "state_id" => 26,
                "name" => "Arandu",
                "slug" => "arandu",
            ],
            [
                "state_id" => 26,
                "name" => "Arapeí",
                "slug" => "arapei",
            ],
            [
                "state_id" => 26,
                "name" => "Araraquara",
                "slug" => "araraquara",
            ],
            [
                "state_id" => 26,
                "name" => "Araras",
                "slug" => "araras",
            ],
            [
                "state_id" => 26,
                "name" => "Arco-Íris",
                "slug" => "arco-iris",
            ],
            [
                "state_id" => 26,
                "name" => "Arealva",
                "slug" => "arealva",
            ],
            [
                "state_id" => 26,
                "name" => "Areias",
                "slug" => "areias",
            ],
            [
                "state_id" => 26,
                "name" => "Areiópolis",
                "slug" => "areiopolis",
            ],
            [
                "state_id" => 26,
                "name" => "Ariranha",
                "slug" => "ariranha",
            ],
            [
                "state_id" => 26,
                "name" => "Artur Nogueira",
                "slug" => "artur-nogueira",
            ],
            [
                "state_id" => 26,
                "name" => "Arujá",
                "slug" => "aruja",
            ],
            [
                "state_id" => 26,
                "name" => "Aspásia",
                "slug" => "aspasia",
            ],
            [
                "state_id" => 26,
                "name" => "Assis",
                "slug" => "assis",
            ],
            [
                "state_id" => 26,
                "name" => "Atibaia",
                "slug" => "atibaia",
            ],
            [
                "state_id" => 26,
                "name" => "Auriflama",
                "slug" => "auriflama",
            ],
            [
                "state_id" => 26,
                "name" => "Avaí",
                "slug" => "avai",
            ],
            [
                "state_id" => 26,
                "name" => "Avanhandava",
                "slug" => "avanhandava",
            ],
            [
                "state_id" => 26,
                "name" => "Avaré",
                "slug" => "avare",
            ],
            [
                "state_id" => 26,
                "name" => "Bady Bassitt",
                "slug" => "bady-bassitt",
            ],
            [
                "state_id" => 26,
                "name" => "Balbinos",
                "slug" => "balbinos",
            ],
            [
                "state_id" => 26,
                "name" => "Bálsamo",
                "slug" => "balsamo",
            ],
            [
                "state_id" => 26,
                "name" => "Bananal",
                "slug" => "bananal",
            ],
            [
                "state_id" => 26,
                "name" => "Barão de Antonina",
                "slug" => "barao-de-antonina",
            ],
            [
                "state_id" => 26,
                "name" => "Barbosa",
                "slug" => "barbosa",
            ],
            [
                "state_id" => 26,
                "name" => "Bariri",
                "slug" => "bariri",
            ],
            [
                "state_id" => 26,
                "name" => "Barra Bonita",
                "slug" => "barra-bonita",
            ],
            [
                "state_id" => 26,
                "name" => "Barra do Chapéu",
                "slug" => "barra-do-chapeu",
            ],
            [
                "state_id" => 26,
                "name" => "Barra do Turvo",
                "slug" => "barra-do-turvo",
            ],
            [
                "state_id" => 26,
                "name" => "Barretos",
                "slug" => "barretos",
            ],
            [
                "state_id" => 26,
                "name" => "Barrinha",
                "slug" => "barrinha",
            ],
            [
                "state_id" => 26,
                "name" => "Barueri",
                "slug" => "barueri",
            ],
            [
                "state_id" => 26,
                "name" => "Bastos",
                "slug" => "bastos",
            ],
            [
                "state_id" => 26,
                "name" => "Batatais",
                "slug" => "batatais",
            ],
            [
                "state_id" => 26,
                "name" => "Bauru",
                "slug" => "bauru",
            ],
            [
                "state_id" => 26,
                "name" => "Bebedouro",
                "slug" => "bebedouro",
            ],
            [
                "state_id" => 26,
                "name" => "Bento de Abreu",
                "slug" => "bento-de-abreu",
            ],
            [
                "state_id" => 26,
                "name" => "Bernardino de Campos",
                "slug" => "bernardino-de-campos",
            ],
            [
                "state_id" => 26,
                "name" => "Bertioga",
                "slug" => "bertioga",
            ],
            [
                "state_id" => 26,
                "name" => "Bilac",
                "slug" => "bilac",
            ],
            [
                "state_id" => 26,
                "name" => "Birigui",
                "slug" => "birigui",
            ],
            [
                "state_id" => 26,
                "name" => "Biritiba-Mirim",
                "slug" => "biritiba-mirim",
            ],
            [
                "state_id" => 26,
                "name" => "Boa Esperança do Sul",
                "slug" => "boa-esperanca-do-sul",
            ],
            [
                "state_id" => 26,
                "name" => "Bocaina",
                "slug" => "bocaina",
            ],
            [
                "state_id" => 26,
                "name" => "Bofete",
                "slug" => "bofete",
            ],
            [
                "state_id" => 26,
                "name" => "Boituva",
                "slug" => "boituva",
            ],
            [
                "state_id" => 26,
                "name" => "Bom Jesus dos Perdões",
                "slug" => "bom-jesus-dos-perdoes",
            ],
            [
                "state_id" => 26,
                "name" => "Bom Sucesso de Itararé",
                "slug" => "bom-sucesso-de-itarare",
            ],
            [
                "state_id" => 26,
                "name" => "Borá",
                "slug" => "bora",
            ],
            [
                "state_id" => 26,
                "name" => "Boracéia",
                "slug" => "boraceia",
            ],
            [
                "state_id" => 26,
                "name" => "Borborema",
                "slug" => "borborema",
            ],
            [
                "state_id" => 26,
                "name" => "Borebi",
                "slug" => "borebi",
            ],
            [
                "state_id" => 26,
                "name" => "Botucatu",
                "slug" => "botucatu",
            ],
            [
                "state_id" => 26,
                "name" => "Bragança Paulista",
                "slug" => "braganca-paulista",
            ],
            [
                "state_id" => 26,
                "name" => "Braúna",
                "slug" => "brauna",
            ],
            [
                "state_id" => 26,
                "name" => "Brejo Alegre",
                "slug" => "brejo-alegre",
            ],
            [
                "state_id" => 26,
                "name" => "Brodowski",
                "slug" => "brodowski",
            ],
            [
                "state_id" => 26,
                "name" => "Brotas",
                "slug" => "brotas",
            ],
            [
                "state_id" => 26,
                "name" => "Buri",
                "slug" => "buri",
            ],
            [
                "state_id" => 26,
                "name" => "Buritama",
                "slug" => "buritama",
            ],
            [
                "state_id" => 26,
                "name" => "Buritizal",
                "slug" => "buritizal",
            ],
            [
                "state_id" => 26,
                "name" => "Cabrália Paulista",
                "slug" => "cabralia-paulista",
            ],
            [
                "state_id" => 26,
                "name" => "Cabreúva",
                "slug" => "cabreuva",
            ],
            [
                "state_id" => 26,
                "name" => "Caçapava",
                "slug" => "cacapava",
            ],
            [
                "state_id" => 26,
                "name" => "Cachoeira Paulista",
                "slug" => "cachoeira-paulista",
            ],
            [
                "state_id" => 26,
                "name" => "Caconde",
                "slug" => "caconde",
            ],
            [
                "state_id" => 26,
                "name" => "Cafelândia",
                "slug" => "cafelandia",
            ],
            [
                "state_id" => 26,
                "name" => "Caiabu",
                "slug" => "caiabu",
            ],
            [
                "state_id" => 26,
                "name" => "Caieiras",
                "slug" => "caieiras",
            ],
            [
                "state_id" => 26,
                "name" => "Caiuá",
                "slug" => "caiua",
            ],
            [
                "state_id" => 26,
                "name" => "Cajamar",
                "slug" => "cajamar",
            ],
            [
                "state_id" => 26,
                "name" => "Cajati",
                "slug" => "cajati",
            ],
            [
                "state_id" => 26,
                "name" => "Cajobi",
                "slug" => "cajobi",
            ],
            [
                "state_id" => 26,
                "name" => "Cajuru",
                "slug" => "cajuru",
            ],
            [
                "state_id" => 26,
                "name" => "Campina do Monte Alegre",
                "slug" => "campina-do-monte-alegre",
            ],
            [
                "state_id" => 26,
                "name" => "Campinas",
                "slug" => "campinas",
            ],
            [
                "state_id" => 26,
                "name" => "Campo Limpo Paulista",
                "slug" => "campo-limpo-paulista",
            ],
            [
                "state_id" => 26,
                "name" => "Campos do Jordão",
                "slug" => "campos-do-jordao",
            ],
            [
                "state_id" => 26,
                "name" => "Campos Novos Paulista",
                "slug" => "campos-novos-paulista",
            ],
            [
                "state_id" => 26,
                "name" => "Cananéia",
                "slug" => "cananeia",
            ],
            [
                "state_id" => 26,
                "name" => "Canas",
                "slug" => "canas",
            ],
            [
                "state_id" => 26,
                "name" => "Cândido Mota",
                "slug" => "candido-mota",
            ],
            [
                "state_id" => 26,
                "name" => "Cândido Rodrigues",
                "slug" => "candido-rodrigues",
            ],
            [
                "state_id" => 26,
                "name" => "Canitar",
                "slug" => "canitar",
            ],
            [
                "state_id" => 26,
                "name" => "Capão Bonito",
                "slug" => "capao-bonito",
            ],
            [
                "state_id" => 26,
                "name" => "Capela do Alto",
                "slug" => "capela-do-alto",
            ],
            [
                "state_id" => 26,
                "name" => "Capivari",
                "slug" => "capivari",
            ],
            [
                "state_id" => 26,
                "name" => "Caraguatatuba",
                "slug" => "caraguatatuba",
            ],
            [
                "state_id" => 26,
                "name" => "Carapicuíba",
                "slug" => "carapicuiba",
            ],
            [
                "state_id" => 26,
                "name" => "Cardoso",
                "slug" => "cardoso",
            ],
            [
                "state_id" => 26,
                "name" => "Casa Branca",
                "slug" => "casa-branca",
            ],
            [
                "state_id" => 26,
                "name" => "Cássia dos Coqueiros",
                "slug" => "cassia-dos-coqueiros",
            ],
            [
                "state_id" => 26,
                "name" => "Castilho",
                "slug" => "castilho",
            ],
            [
                "state_id" => 26,
                "name" => "Catanduva",
                "slug" => "catanduva",
            ],
            [
                "state_id" => 26,
                "name" => "Catiguá",
                "slug" => "catigua",
            ],
            [
                "state_id" => 26,
                "name" => "Cedral",
                "slug" => "cedral",
            ],
            [
                "state_id" => 26,
                "name" => "Cerqueira César",
                "slug" => "cerqueira-cesar",
            ],
            [
                "state_id" => 26,
                "name" => "Cerquilho",
                "slug" => "cerquilho",
            ],
            [
                "state_id" => 26,
                "name" => "Cesário Lange",
                "slug" => "cesario-lange",
            ],
            [
                "state_id" => 26,
                "name" => "Charqueada",
                "slug" => "charqueada",
            ],
            [
                "state_id" => 26,
                "name" => "Chavantes",
                "slug" => "chavantes",
            ],
            [
                "state_id" => 26,
                "name" => "Clementina",
                "slug" => "clementina",
            ],
            [
                "state_id" => 26,
                "name" => "Colina",
                "slug" => "colina",
            ],
            [
                "state_id" => 26,
                "name" => "Colômbia",
                "slug" => "colombia",
            ],
            [
                "state_id" => 26,
                "name" => "Conchal",
                "slug" => "conchal",
            ],
            [
                "state_id" => 26,
                "name" => "Conchas",
                "slug" => "conchas",
            ],
            [
                "state_id" => 26,
                "name" => "Cordeirópolis",
                "slug" => "cordeiropolis",
            ],
            [
                "state_id" => 26,
                "name" => "Coroados",
                "slug" => "coroados",
            ],
            [
                "state_id" => 26,
                "name" => "Coronel Macedo",
                "slug" => "coronel-macedo",
            ],
            [
                "state_id" => 26,
                "name" => "Corumbataí",
                "slug" => "corumbatai",
            ],
            [
                "state_id" => 26,
                "name" => "Cosmópolis",
                "slug" => "cosmopolis",
            ],
            [
                "state_id" => 26,
                "name" => "Cosmorama",
                "slug" => "cosmorama",
            ],
            [
                "state_id" => 26,
                "name" => "Cotia",
                "slug" => "cotia",
            ],
            [
                "state_id" => 26,
                "name" => "Cravinhos",
                "slug" => "cravinhos",
            ],
            [
                "state_id" => 26,
                "name" => "Cristais Paulista",
                "slug" => "cristais-paulista",
            ],
            [
                "state_id" => 26,
                "name" => "Cruzália",
                "slug" => "cruzalia",
            ],
            [
                "state_id" => 26,
                "name" => "Cruzeiro",
                "slug" => "cruzeiro",
            ],
            [
                "state_id" => 26,
                "name" => "Cubatão",
                "slug" => "cubatao",
            ],
            [
                "state_id" => 26,
                "name" => "Cunha",
                "slug" => "cunha",
            ],
            [
                "state_id" => 26,
                "name" => "Descalvado",
                "slug" => "descalvado",
            ],
            [
                "state_id" => 26,
                "name" => "Diadema",
                "slug" => "diadema",
            ],
            [
                "state_id" => 26,
                "name" => "Dirce Reis",
                "slug" => "dirce-reis",
            ],
            [
                "state_id" => 26,
                "name" => "Divinolândia",
                "slug" => "divinolandia",
            ],
            [
                "state_id" => 26,
                "name" => "Dobrada",
                "slug" => "dobrada",
            ],
            [
                "state_id" => 26,
                "name" => "Dois Córregos",
                "slug" => "dois-corregos",
            ],
            [
                "state_id" => 26,
                "name" => "Dolcinópolis",
                "slug" => "dolcinopolis",
            ],
            [
                "state_id" => 26,
                "name" => "Dourado",
                "slug" => "dourado",
            ],
            [
                "state_id" => 26,
                "name" => "Dracena",
                "slug" => "dracena",
            ],
            [
                "state_id" => 26,
                "name" => "Duartina",
                "slug" => "duartina",
            ],
            [
                "state_id" => 26,
                "name" => "Dumont",
                "slug" => "dumont",
            ],
            [
                "state_id" => 26,
                "name" => "Echaporã",
                "slug" => "echapora",
            ],
            [
                "state_id" => 26,
                "name" => "Eldorado",
                "slug" => "eldorado",
            ],
            [
                "state_id" => 26,
                "name" => "Elias Fausto",
                "slug" => "elias-fausto",
            ],
            [
                "state_id" => 26,
                "name" => "Elisiário",
                "slug" => "elisiario",
            ],
            [
                "state_id" => 26,
                "name" => "Embaúba",
                "slug" => "embauba",
            ],
            [
                "state_id" => 26,
                "name" => "Embu",
                "slug" => "embu",
            ],
            [
                "state_id" => 26,
                "name" => "Embu-Guaçu",
                "slug" => "embu-guacu",
            ],
            [
                "state_id" => 26,
                "name" => "Emilianópolis",
                "slug" => "emilianopolis",
            ],
            [
                "state_id" => 26,
                "name" => "Engenheiro Coelho",
                "slug" => "engenheiro-coelho",
            ],
            [
                "state_id" => 26,
                "name" => "Espírito Santo do Pinhal",
                "slug" => "espirito-santo-do-pinhal",
            ],
            [
                "state_id" => 26,
                "name" => "Espírito Santo do Turvo",
                "slug" => "espirito-santo-do-turvo",
            ],
            [
                "state_id" => 26,
                "name" => "Estiva Gerbi",
                "slug" => "estiva-gerbi",
            ],
            [
                "state_id" => 26,
                "name" => "Estrela d`Oeste",
                "slug" => "estrela-doeste",
            ],
            [
                "state_id" => 26,
                "name" => "Estrela do Norte",
                "slug" => "estrela-do-norte",
            ],
            [
                "state_id" => 26,
                "name" => "Euclides da Cunha Paulista",
                "slug" => "euclides-da-cunha-paulista",
            ],
            [
                "state_id" => 26,
                "name" => "Fartura",
                "slug" => "fartura",
            ],
            [
                "state_id" => 26,
                "name" => "Fernando Prestes",
                "slug" => "fernando-prestes",
            ],
            [
                "state_id" => 26,
                "name" => "Fernandópolis",
                "slug" => "fernandopolis",
            ],
            [
                "state_id" => 26,
                "name" => "Fernão",
                "slug" => "fernao",
            ],
            [
                "state_id" => 26,
                "name" => "Ferraz de Vasconcelos",
                "slug" => "ferraz-de-vasconcelos",
            ],
            [
                "state_id" => 26,
                "name" => "Flora Rica",
                "slug" => "flora-rica",
            ],
            [
                "state_id" => 26,
                "name" => "Floreal",
                "slug" => "floreal",
            ],
            [
                "state_id" => 26,
                "name" => "Flórida Paulista",
                "slug" => "florida-paulista",
            ],
            [
                "state_id" => 26,
                "name" => "Florínia",
                "slug" => "florinia",
            ],
            [
                "state_id" => 26,
                "name" => "Franca",
                "slug" => "franca",
            ],
            [
                "state_id" => 26,
                "name" => "Francisco Morato",
                "slug" => "francisco-morato",
            ],
            [
                "state_id" => 26,
                "name" => "Franco da Rocha",
                "slug" => "franco-da-rocha",
            ],
            [
                "state_id" => 26,
                "name" => "Gabriel Monteiro",
                "slug" => "gabriel-monteiro",
            ],
            [
                "state_id" => 26,
                "name" => "Gália",
                "slug" => "galia",
            ],
            [
                "state_id" => 26,
                "name" => "Garça",
                "slug" => "garca",
            ],
            [
                "state_id" => 26,
                "name" => "Gastão Vidigal",
                "slug" => "gastao-vidigal",
            ],
            [
                "state_id" => 26,
                "name" => "Gavião Peixoto",
                "slug" => "gaviao-peixoto",
            ],
            [
                "state_id" => 26,
                "name" => "General Salgado",
                "slug" => "general-salgado",
            ],
            [
                "state_id" => 26,
                "name" => "Getulina",
                "slug" => "getulina",
            ],
            [
                "state_id" => 26,
                "name" => "Glicério",
                "slug" => "glicerio",
            ],
            [
                "state_id" => 26,
                "name" => "Guaiçara",
                "slug" => "guaicara",
            ],
            [
                "state_id" => 26,
                "name" => "Guaimbê",
                "slug" => "guaimbe",
            ],
            [
                "state_id" => 26,
                "name" => "Guaíra",
                "slug" => "guaira",
            ],
            [
                "state_id" => 26,
                "name" => "Guapiaçu",
                "slug" => "guapiacu",
            ],
            [
                "state_id" => 26,
                "name" => "Guapiara",
                "slug" => "guapiara",
            ],
            [
                "state_id" => 26,
                "name" => "Guará",
                "slug" => "guara",
            ],
            [
                "state_id" => 26,
                "name" => "Guaraçaí",
                "slug" => "guaracai",
            ],
            [
                "state_id" => 26,
                "name" => "Guaraci",
                "slug" => "guaraci",
            ],
            [
                "state_id" => 26,
                "name" => "Guarani d`Oeste",
                "slug" => "guarani-doeste",
            ],
            [
                "state_id" => 26,
                "name" => "Guarantã",
                "slug" => "guaranta",
            ],
            [
                "state_id" => 26,
                "name" => "Guararapes",
                "slug" => "guararapes",
            ],
            [
                "state_id" => 26,
                "name" => "Guararema",
                "slug" => "guararema",
            ],
            [
                "state_id" => 26,
                "name" => "Guaratinguetá",
                "slug" => "guaratingueta",
            ],
            [
                "state_id" => 26,
                "name" => "Guareí",
                "slug" => "guarei",
            ],
            [
                "state_id" => 26,
                "name" => "Guariba",
                "slug" => "guariba",
            ],
            [
                "state_id" => 26,
                "name" => "Guarujá",
                "slug" => "guaruja",
            ],
            [
                "state_id" => 26,
                "name" => "Guarulhos",
                "slug" => "guarulhos",
            ],
            [
                "state_id" => 26,
                "name" => "Guatapará",
                "slug" => "guatapara",
            ],
            [
                "state_id" => 26,
                "name" => "Guzolândia",
                "slug" => "guzolandia",
            ],
            [
                "state_id" => 26,
                "name" => "Herculândia",
                "slug" => "herculandia",
            ],
            [
                "state_id" => 26,
                "name" => "Holambra",
                "slug" => "holambra",
            ],
            [
                "state_id" => 26,
                "name" => "Hortolândia",
                "slug" => "hortolandia",
            ],
            [
                "state_id" => 26,
                "name" => "Iacanga",
                "slug" => "iacanga",
            ],
            [
                "state_id" => 26,
                "name" => "Iacri",
                "slug" => "iacri",
            ],
            [
                "state_id" => 26,
                "name" => "Iaras",
                "slug" => "iaras",
            ],
            [
                "state_id" => 26,
                "name" => "Ibaté",
                "slug" => "ibate",
            ],
            [
                "state_id" => 26,
                "name" => "Ibirá",
                "slug" => "ibira",
            ],
            [
                "state_id" => 26,
                "name" => "Ibirarema",
                "slug" => "ibirarema",
            ],
            [
                "state_id" => 26,
                "name" => "Ibitinga",
                "slug" => "ibitinga",
            ],
            [
                "state_id" => 26,
                "name" => "Ibiúna",
                "slug" => "ibiuna",
            ],
            [
                "state_id" => 26,
                "name" => "Icém",
                "slug" => "icem",
            ],
            [
                "state_id" => 26,
                "name" => "Iepê",
                "slug" => "iepe",
            ],
            [
                "state_id" => 26,
                "name" => "Igaraçu do Tietê",
                "slug" => "igaracu-do-tiete",
            ],
            [
                "state_id" => 26,
                "name" => "Igarapava",
                "slug" => "igarapava",
            ],
            [
                "state_id" => 26,
                "name" => "Igaratá",
                "slug" => "igarata",
            ],
            [
                "state_id" => 26,
                "name" => "Iguape",
                "slug" => "iguape",
            ],
            [
                "state_id" => 26,
                "name" => "Ilha Comprida",
                "slug" => "ilha-comprida",
            ],
            [
                "state_id" => 26,
                "name" => "Ilha Solteira",
                "slug" => "ilha-solteira",
            ],
            [
                "state_id" => 26,
                "name" => "Ilhabela",
                "slug" => "ilhabela",
            ],
            [
                "state_id" => 26,
                "name" => "Indaiatuba",
                "slug" => "indaiatuba",
            ],
            [
                "state_id" => 26,
                "name" => "Indiana",
                "slug" => "indiana",
            ],
            [
                "state_id" => 26,
                "name" => "Indiaporã",
                "slug" => "indiapora",
            ],
            [
                "state_id" => 26,
                "name" => "Inúbia Paulista",
                "slug" => "inubia-paulista",
            ],
            [
                "state_id" => 26,
                "name" => "Ipaussu",
                "slug" => "ipaussu",
            ],
            [
                "state_id" => 26,
                "name" => "Iperó",
                "slug" => "ipero",
            ],
            [
                "state_id" => 26,
                "name" => "Ipeúna",
                "slug" => "ipeuna",
            ],
            [
                "state_id" => 26,
                "name" => "Ipiguá",
                "slug" => "ipigua",
            ],
            [
                "state_id" => 26,
                "name" => "Iporanga",
                "slug" => "iporanga",
            ],
            [
                "state_id" => 26,
                "name" => "Ipuã",
                "slug" => "ipua",
            ],
            [
                "state_id" => 26,
                "name" => "Iracemápolis",
                "slug" => "iracemapolis",
            ],
            [
                "state_id" => 26,
                "name" => "Irapuã",
                "slug" => "irapua",
            ],
            [
                "state_id" => 26,
                "name" => "Irapuru",
                "slug" => "irapuru",
            ],
            [
                "state_id" => 26,
                "name" => "Itaberá",
                "slug" => "itabera",
            ],
            [
                "state_id" => 26,
                "name" => "Itaí",
                "slug" => "itai",
            ],
            [
                "state_id" => 26,
                "name" => "Itajobi",
                "slug" => "itajobi",
            ],
            [
                "state_id" => 26,
                "name" => "Itaju",
                "slug" => "itaju",
            ],
            [
                "state_id" => 26,
                "name" => "Itanhaém",
                "slug" => "itanhaem",
            ],
            [
                "state_id" => 26,
                "name" => "Itaóca",
                "slug" => "itaoca",
            ],
            [
                "state_id" => 26,
                "name" => "Itapecerica da Serra",
                "slug" => "itapecerica-da-serra",
            ],
            [
                "state_id" => 26,
                "name" => "Itapetininga",
                "slug" => "itapetininga",
            ],
            [
                "state_id" => 26,
                "name" => "Itapeva",
                "slug" => "itapeva",
            ],
            [
                "state_id" => 26,
                "name" => "Itapevi",
                "slug" => "itapevi",
            ],
            [
                "state_id" => 26,
                "name" => "Itapira",
                "slug" => "itapira",
            ],
            [
                "state_id" => 26,
                "name" => "Itapirapuã Paulista",
                "slug" => "itapirapua-paulista",
            ],
            [
                "state_id" => 26,
                "name" => "Itápolis",
                "slug" => "itapolis",
            ],
            [
                "state_id" => 26,
                "name" => "Itaporanga",
                "slug" => "itaporanga",
            ],
            [
                "state_id" => 26,
                "name" => "Itapuí",
                "slug" => "itapui",
            ],
            [
                "state_id" => 26,
                "name" => "Itapura",
                "slug" => "itapura",
            ],
            [
                "state_id" => 26,
                "name" => "Itaquaquecetuba",
                "slug" => "itaquaquecetuba",
            ],
            [
                "state_id" => 26,
                "name" => "Itararé",
                "slug" => "itarare",
            ],
            [
                "state_id" => 26,
                "name" => "Itariri",
                "slug" => "itariri",
            ],
            [
                "state_id" => 26,
                "name" => "Itatiba",
                "slug" => "itatiba",
            ],
            [
                "state_id" => 26,
                "name" => "Itatinga",
                "slug" => "itatinga",
            ],
            [
                "state_id" => 26,
                "name" => "Itirapina",
                "slug" => "itirapina",
            ],
            [
                "state_id" => 26,
                "name" => "Itirapuã",
                "slug" => "itirapua",
            ],
            [
                "state_id" => 26,
                "name" => "Itobi",
                "slug" => "itobi",
            ],
            [
                "state_id" => 26,
                "name" => "Itu",
                "slug" => "itu",
            ],
            [
                "state_id" => 26,
                "name" => "Itupeva",
                "slug" => "itupeva",
            ],
            [
                "state_id" => 26,
                "name" => "Ituverava",
                "slug" => "ituverava",
            ],
            [
                "state_id" => 26,
                "name" => "Jaborandi",
                "slug" => "jaborandi",
            ],
            [
                "state_id" => 26,
                "name" => "Jaboticabal",
                "slug" => "jaboticabal",
            ],
            [
                "state_id" => 26,
                "name" => "Jacareí",
                "slug" => "jacarei",
            ],
            [
                "state_id" => 26,
                "name" => "Jaci",
                "slug" => "jaci",
            ],
            [
                "state_id" => 26,
                "name" => "Jacupiranga",
                "slug" => "jacupiranga",
            ],
            [
                "state_id" => 26,
                "name" => "Jaguariúna",
                "slug" => "jaguariuna",
            ],
            [
                "state_id" => 26,
                "name" => "Jales",
                "slug" => "jales",
            ],
            [
                "state_id" => 26,
                "name" => "Jambeiro",
                "slug" => "jambeiro",
            ],
            [
                "state_id" => 26,
                "name" => "Jandira",
                "slug" => "jandira",
            ],
            [
                "state_id" => 26,
                "name" => "Jardinópolis",
                "slug" => "jardinopolis",
            ],
            [
                "state_id" => 26,
                "name" => "Jarinu",
                "slug" => "jarinu",
            ],
            [
                "state_id" => 26,
                "name" => "Jaú",
                "slug" => "jau",
            ],
            [
                "state_id" => 26,
                "name" => "Jeriquara",
                "slug" => "jeriquara",
            ],
            [
                "state_id" => 26,
                "name" => "Joanópolis",
                "slug" => "joanopolis",
            ],
            [
                "state_id" => 26,
                "name" => "João Ramalho",
                "slug" => "joao-ramalho",
            ],
            [
                "state_id" => 26,
                "name" => "José Bonifácio",
                "slug" => "jose-bonifacio",
            ],
            [
                "state_id" => 26,
                "name" => "Júlio Mesquita",
                "slug" => "julio-mesquita",
            ],
            [
                "state_id" => 26,
                "name" => "Jumirim",
                "slug" => "jumirim",
            ],
            [
                "state_id" => 26,
                "name" => "Jundiaí",
                "slug" => "jundiai",
            ],
            [
                "state_id" => 26,
                "name" => "Junqueirópolis",
                "slug" => "junqueiropolis",
            ],
            [
                "state_id" => 26,
                "name" => "Juquiá",
                "slug" => "juquia",
            ],
            [
                "state_id" => 26,
                "name" => "Juquitiba",
                "slug" => "juquitiba",
            ],
            [
                "state_id" => 26,
                "name" => "Lagoinha",
                "slug" => "lagoinha",
            ],
            [
                "state_id" => 26,
                "name" => "Laranjal Paulista",
                "slug" => "laranjal-paulista",
            ],
            [
                "state_id" => 26,
                "name" => "Lavínia",
                "slug" => "lavinia",
            ],
            [
                "state_id" => 26,
                "name" => "Lavrinhas",
                "slug" => "lavrinhas",
            ],
            [
                "state_id" => 26,
                "name" => "Leme",
                "slug" => "leme",
            ],
            [
                "state_id" => 26,
                "name" => "Lençóis Paulista",
                "slug" => "lencois-paulista",
            ],
            [
                "state_id" => 26,
                "name" => "Limeira",
                "slug" => "limeira",
            ],
            [
                "state_id" => 26,
                "name" => "Lindóia",
                "slug" => "lindoia",
            ],
            [
                "state_id" => 26,
                "name" => "Lins",
                "slug" => "lins",
            ],
            [
                "state_id" => 26,
                "name" => "Lorena",
                "slug" => "lorena",
            ],
            [
                "state_id" => 26,
                "name" => "Lourdes",
                "slug" => "lourdes",
            ],
            [
                "state_id" => 26,
                "name" => "Louveira",
                "slug" => "louveira",
            ],
            [
                "state_id" => 26,
                "name" => "Lucélia",
                "slug" => "lucelia",
            ],
            [
                "state_id" => 26,
                "name" => "Lucianópolis",
                "slug" => "lucianopolis",
            ],
            [
                "state_id" => 26,
                "name" => "Luís Antônio",
                "slug" => "luis-antonio",
            ],
            [
                "state_id" => 26,
                "name" => "Luiziânia",
                "slug" => "luiziania",
            ],
            [
                "state_id" => 26,
                "name" => "Lupércio",
                "slug" => "lupercio",
            ],
            [
                "state_id" => 26,
                "name" => "Lutécia",
                "slug" => "lutecia",
            ],
            [
                "state_id" => 26,
                "name" => "Macatuba",
                "slug" => "macatuba",
            ],
            [
                "state_id" => 26,
                "name" => "Macaubal",
                "slug" => "macaubal",
            ],
            [
                "state_id" => 26,
                "name" => "Macedônia",
                "slug" => "macedonia",
            ],
            [
                "state_id" => 26,
                "name" => "Magda",
                "slug" => "magda",
            ],
            [
                "state_id" => 26,
                "name" => "Mairinque",
                "slug" => "mairinque",
            ],
            [
                "state_id" => 26,
                "name" => "Mairiporã",
                "slug" => "mairipora",
            ],
            [
                "state_id" => 26,
                "name" => "Manduri",
                "slug" => "manduri",
            ],
            [
                "state_id" => 26,
                "name" => "Marabá Paulista",
                "slug" => "maraba-paulista",
            ],
            [
                "state_id" => 26,
                "name" => "Maracaí",
                "slug" => "maracai",
            ],
            [
                "state_id" => 26,
                "name" => "Marapoama",
                "slug" => "marapoama",
            ],
            [
                "state_id" => 26,
                "name" => "Mariápolis",
                "slug" => "mariapolis",
            ],
            [
                "state_id" => 26,
                "name" => "Marília",
                "slug" => "marilia",
            ],
            [
                "state_id" => 26,
                "name" => "Marinópolis",
                "slug" => "marinopolis",
            ],
            [
                "state_id" => 26,
                "name" => "Martinópolis",
                "slug" => "martinopolis",
            ],
            [
                "state_id" => 26,
                "name" => "Matão",
                "slug" => "matao",
            ],
            [
                "state_id" => 26,
                "name" => "Mauá",
                "slug" => "maua",
            ],
            [
                "state_id" => 26,
                "name" => "Mendonça",
                "slug" => "mendonca",
            ],
            [
                "state_id" => 26,
                "name" => "Meridiano",
                "slug" => "meridiano",
            ],
            [
                "state_id" => 26,
                "name" => "Mesópolis",
                "slug" => "mesopolis",
            ],
            [
                "state_id" => 26,
                "name" => "Miguelópolis",
                "slug" => "miguelopolis",
            ],
            [
                "state_id" => 26,
                "name" => "Mineiros do Tietê",
                "slug" => "mineiros-do-tiete",
            ],
            [
                "state_id" => 26,
                "name" => "Mira Estrela",
                "slug" => "mira-estrela",
            ],
            [
                "state_id" => 26,
                "name" => "Miracatu",
                "slug" => "miracatu",
            ],
            [
                "state_id" => 26,
                "name" => "Mirandópolis",
                "slug" => "mirandopolis",
            ],
            [
                "state_id" => 26,
                "name" => "Mirante do Paranapanema",
                "slug" => "mirante-do-paranapanema",
            ],
            [
                "state_id" => 26,
                "name" => "Mirassol",
                "slug" => "mirassol",
            ],
            [
                "state_id" => 26,
                "name" => "Mirassolândia",
                "slug" => "mirassolandia",
            ],
            [
                "state_id" => 26,
                "name" => "Mococa",
                "slug" => "mococa",
            ],
            [
                "state_id" => 26,
                "name" => "Mogi das Cruzes",
                "slug" => "mogi-das-cruzes",
            ],
            [
                "state_id" => 26,
                "name" => "Mogi Guaçu",
                "slug" => "mogi-guacu",
            ],
            [
                "state_id" => 26,
                "name" => "Mogi Mirim",
                "slug" => "mogi-mirim",
            ],
            [
                "state_id" => 26,
                "name" => "Mombuca",
                "slug" => "mombuca",
            ],
            [
                "state_id" => 26,
                "name" => "Monções",
                "slug" => "moncoes",
            ],
            [
                "state_id" => 26,
                "name" => "Mongaguá",
                "slug" => "mongagua",
            ],
            [
                "state_id" => 26,
                "name" => "Monte Alegre do Sul",
                "slug" => "monte-alegre-do-sul",
            ],
            [
                "state_id" => 26,
                "name" => "Monte Alto",
                "slug" => "monte-alto",
            ],
            [
                "state_id" => 26,
                "name" => "Monte Aprazível",
                "slug" => "monte-aprazivel",
            ],
            [
                "state_id" => 26,
                "name" => "Monte Azul Paulista",
                "slug" => "monte-azul-paulista",
            ],
            [
                "state_id" => 26,
                "name" => "Monte Castelo",
                "slug" => "monte-castelo",
            ],
            [
                "state_id" => 26,
                "name" => "Monte Mor",
                "slug" => "monte-mor",
            ],
            [
                "state_id" => 26,
                "name" => "Monteiro Lobato",
                "slug" => "monteiro-lobato",
            ],
            [
                "state_id" => 26,
                "name" => "Morro Agudo",
                "slug" => "morro-agudo",
            ],
            [
                "state_id" => 26,
                "name" => "Morungaba",
                "slug" => "morungaba",
            ],
            [
                "state_id" => 26,
                "name" => "Motuca",
                "slug" => "motuca",
            ],
            [
                "state_id" => 26,
                "name" => "Murutinga do Sul",
                "slug" => "murutinga-do-sul",
            ],
            [
                "state_id" => 26,
                "name" => "Nantes",
                "slug" => "nantes",
            ],
            [
                "state_id" => 26,
                "name" => "Narandiba",
                "slug" => "narandiba",
            ],
            [
                "state_id" => 26,
                "name" => "Natividade da Serra",
                "slug" => "natividade-da-serra",
            ],
            [
                "state_id" => 26,
                "name" => "Nazaré Paulista",
                "slug" => "nazare-paulista",
            ],
            [
                "state_id" => 26,
                "name" => "Neves Paulista",
                "slug" => "neves-paulista",
            ],
            [
                "state_id" => 26,
                "name" => "Nhandeara",
                "slug" => "nhandeara",
            ],
            [
                "state_id" => 26,
                "name" => "Nipoã",
                "slug" => "nipoa",
            ],
            [
                "state_id" => 26,
                "name" => "Nova Aliança",
                "slug" => "nova-alianca",
            ],
            [
                "state_id" => 26,
                "name" => "Nova Campina",
                "slug" => "nova-campina",
            ],
            [
                "state_id" => 26,
                "name" => "Nova Canaã Paulista",
                "slug" => "nova-canaa-paulista",
            ],
            [
                "state_id" => 26,
                "name" => "Nova Castilho",
                "slug" => "nova-castilho",
            ],
            [
                "state_id" => 26,
                "name" => "Nova Europa",
                "slug" => "nova-europa",
            ],
            [
                "state_id" => 26,
                "name" => "Nova Granada",
                "slug" => "nova-granada",
            ],
            [
                "state_id" => 26,
                "name" => "Nova Guataporanga",
                "slug" => "nova-guataporanga",
            ],
            [
                "state_id" => 26,
                "name" => "Nova Independência",
                "slug" => "nova-independencia",
            ],
            [
                "state_id" => 26,
                "name" => "Nova Luzitânia",
                "slug" => "nova-luzitania",
            ],
            [
                "state_id" => 26,
                "name" => "Nova Odessa",
                "slug" => "nova-odessa",
            ],
            [
                "state_id" => 26,
                "name" => "Novais",
                "slug" => "novais",
            ],
            [
                "state_id" => 26,
                "name" => "Novo Horizonte",
                "slug" => "novo-horizonte",
            ],
            [
                "state_id" => 26,
                "name" => "Nuporanga",
                "slug" => "nuporanga",
            ],
            [
                "state_id" => 26,
                "name" => "Ocauçu",
                "slug" => "ocaucu",
            ],
            [
                "state_id" => 26,
                "name" => "Óleo",
                "slug" => "oleo",
            ],
            [
                "state_id" => 26,
                "name" => "Olímpia",
                "slug" => "olimpia",
            ],
            [
                "state_id" => 26,
                "name" => "Onda Verde",
                "slug" => "onda-verde",
            ],
            [
                "state_id" => 26,
                "name" => "Oriente",
                "slug" => "oriente",
            ],
            [
                "state_id" => 26,
                "name" => "Orindiúva",
                "slug" => "orindiuva",
            ],
            [
                "state_id" => 26,
                "name" => "Orlândia",
                "slug" => "orlandia",
            ],
            [
                "state_id" => 26,
                "name" => "Osasco",
                "slug" => "osasco",
            ],
            [
                "state_id" => 26,
                "name" => "Oscar Bressane",
                "slug" => "oscar-bressane",
            ],
            [
                "state_id" => 26,
                "name" => "Osvaldo Cruz",
                "slug" => "osvaldo-cruz",
            ],
            [
                "state_id" => 26,
                "name" => "Ourinhos",
                "slug" => "ourinhos",
            ],
            [
                "state_id" => 26,
                "name" => "Ouro Verde",
                "slug" => "ouro-verde",
            ],
            [
                "state_id" => 26,
                "name" => "Ouroeste",
                "slug" => "ouroeste",
            ],
            [
                "state_id" => 26,
                "name" => "Pacaembu",
                "slug" => "pacaembu",
            ],
            [
                "state_id" => 26,
                "name" => "Palestina",
                "slug" => "palestina",
            ],
            [
                "state_id" => 26,
                "name" => "Palmares Paulista",
                "slug" => "palmares-paulista",
            ],
            [
                "state_id" => 26,
                "name" => "Palmeira d`Oeste",
                "slug" => "palmeira-doeste",
            ],
            [
                "state_id" => 26,
                "name" => "Palmital",
                "slug" => "palmital",
            ],
            [
                "state_id" => 26,
                "name" => "Panorama",
                "slug" => "panorama",
            ],
            [
                "state_id" => 26,
                "name" => "Paraguaçu Paulista",
                "slug" => "paraguacu-paulista",
            ],
            [
                "state_id" => 26,
                "name" => "Paraibuna",
                "slug" => "paraibuna",
            ],
            [
                "state_id" => 26,
                "name" => "Paraíso",
                "slug" => "paraiso",
            ],
            [
                "state_id" => 26,
                "name" => "Paranapanema",
                "slug" => "paranapanema",
            ],
            [
                "state_id" => 26,
                "name" => "Paranapuã",
                "slug" => "paranapua",
            ],
            [
                "state_id" => 26,
                "name" => "Parapuã",
                "slug" => "parapua",
            ],
            [
                "state_id" => 26,
                "name" => "Pardinho",
                "slug" => "pardinho",
            ],
            [
                "state_id" => 26,
                "name" => "Pariquera-Açu",
                "slug" => "pariquera-acu",
            ],
            [
                "state_id" => 26,
                "name" => "Parisi",
                "slug" => "parisi",
            ],
            [
                "state_id" => 26,
                "name" => "Patrocínio Paulista",
                "slug" => "patrocinio-paulista",
            ],
            [
                "state_id" => 26,
                "name" => "Paulicéia",
                "slug" => "pauliceia",
            ],
            [
                "state_id" => 26,
                "name" => "Paulínia",
                "slug" => "paulinia",
            ],
            [
                "state_id" => 26,
                "name" => "Paulistânia",
                "slug" => "paulistania",
            ],
            [
                "state_id" => 26,
                "name" => "Paulo de Faria",
                "slug" => "paulo-de-faria",
            ],
            [
                "state_id" => 26,
                "name" => "Pederneiras",
                "slug" => "pederneiras",
            ],
            [
                "state_id" => 26,
                "name" => "Pedra Bela",
                "slug" => "pedra-bela",
            ],
            [
                "state_id" => 26,
                "name" => "Pedranópolis",
                "slug" => "pedranopolis",
            ],
            [
                "state_id" => 26,
                "name" => "Pedregulho",
                "slug" => "pedregulho",
            ],
            [
                "state_id" => 26,
                "name" => "Pedreira",
                "slug" => "pedreira",
            ],
            [
                "state_id" => 26,
                "name" => "Pedrinhas Paulista",
                "slug" => "pedrinhas-paulista",
            ],
            [
                "state_id" => 26,
                "name" => "Pedro de Toledo",
                "slug" => "pedro-de-toledo",
            ],
            [
                "state_id" => 26,
                "name" => "Penápolis",
                "slug" => "penapolis",
            ],
            [
                "state_id" => 26,
                "name" => "Pereira Barreto",
                "slug" => "pereira-barreto",
            ],
            [
                "state_id" => 26,
                "name" => "Pereiras",
                "slug" => "pereiras",
            ],
            [
                "state_id" => 26,
                "name" => "Peruíbe",
                "slug" => "peruibe",
            ],
            [
                "state_id" => 26,
                "name" => "Piacatu",
                "slug" => "piacatu",
            ],
            [
                "state_id" => 26,
                "name" => "Piedade",
                "slug" => "piedade",
            ],
            [
                "state_id" => 26,
                "name" => "Pilar do Sul",
                "slug" => "pilar-do-sul",
            ],
            [
                "state_id" => 26,
                "name" => "Pindamonhangaba",
                "slug" => "pindamonhangaba",
            ],
            [
                "state_id" => 26,
                "name" => "Pindorama",
                "slug" => "pindorama",
            ],
            [
                "state_id" => 26,
                "name" => "Pinhalzinho",
                "slug" => "pinhalzinho",
            ],
            [
                "state_id" => 26,
                "name" => "Piquerobi",
                "slug" => "piquerobi",
            ],
            [
                "state_id" => 26,
                "name" => "Piquete",
                "slug" => "piquete",
            ],
            [
                "state_id" => 26,
                "name" => "Piracaia",
                "slug" => "piracaia",
            ],
            [
                "state_id" => 26,
                "name" => "Piracicaba",
                "slug" => "piracicaba",
            ],
            [
                "state_id" => 26,
                "name" => "Piraju",
                "slug" => "piraju",
            ],
            [
                "state_id" => 26,
                "name" => "Pirajuí",
                "slug" => "pirajui",
            ],
            [
                "state_id" => 26,
                "name" => "Pirangi",
                "slug" => "pirangi",
            ],
            [
                "state_id" => 26,
                "name" => "Pirapora do Bom Jesus",
                "slug" => "pirapora-do-bom-jesus",
            ],
            [
                "state_id" => 26,
                "name" => "Pirapozinho",
                "slug" => "pirapozinho",
            ],
            [
                "state_id" => 26,
                "name" => "Pirassununga",
                "slug" => "pirassununga",
            ],
            [
                "state_id" => 26,
                "name" => "Piratininga",
                "slug" => "piratininga",
            ],
            [
                "state_id" => 26,
                "name" => "Pitangueiras",
                "slug" => "pitangueiras",
            ],
            [
                "state_id" => 26,
                "name" => "Planalto",
                "slug" => "planalto",
            ],
            [
                "state_id" => 26,
                "name" => "Platina",
                "slug" => "platina",
            ],
            [
                "state_id" => 26,
                "name" => "Poá",
                "slug" => "poa",
            ],
            [
                "state_id" => 26,
                "name" => "Poloni",
                "slug" => "poloni",
            ],
            [
                "state_id" => 26,
                "name" => "Pompéia",
                "slug" => "pompeia",
            ],
            [
                "state_id" => 26,
                "name" => "Pongaí",
                "slug" => "pongai",
            ],
            [
                "state_id" => 26,
                "name" => "Pontal",
                "slug" => "pontal",
            ],
            [
                "state_id" => 26,
                "name" => "Pontalinda",
                "slug" => "pontalinda",
            ],
            [
                "state_id" => 26,
                "name" => "Pontes Gestal",
                "slug" => "pontes-gestal",
            ],
            [
                "state_id" => 26,
                "name" => "Populina",
                "slug" => "populina",
            ],
            [
                "state_id" => 26,
                "name" => "Porangaba",
                "slug" => "porangaba",
            ],
            [
                "state_id" => 26,
                "name" => "Porto Feliz",
                "slug" => "porto-feliz",
            ],
            [
                "state_id" => 26,
                "name" => "Porto Ferreira",
                "slug" => "porto-ferreira",
            ],
            [
                "state_id" => 26,
                "name" => "Potim",
                "slug" => "potim",
            ],
            [
                "state_id" => 26,
                "name" => "Potirendaba",
                "slug" => "potirendaba",
            ],
            [
                "state_id" => 26,
                "name" => "Pracinha",
                "slug" => "pracinha",
            ],
            [
                "state_id" => 26,
                "name" => "Pradópolis",
                "slug" => "pradopolis",
            ],
            [
                "state_id" => 26,
                "name" => "Praia Grande",
                "slug" => "praia-grande",
            ],
            [
                "state_id" => 26,
                "name" => "Pratânia",
                "slug" => "pratania",
            ],
            [
                "state_id" => 26,
                "name" => "Presidente Alves",
                "slug" => "presidente-alves",
            ],
            [
                "state_id" => 26,
                "name" => "Presidente Bernardes",
                "slug" => "presidente-bernardes",
            ],
            [
                "state_id" => 26,
                "name" => "Presidente Epitácio",
                "slug" => "presidente-epitacio",
            ],
            [
                "state_id" => 26,
                "name" => "Presidente Prudente",
                "slug" => "presidente-prudente",
            ],
            [
                "state_id" => 26,
                "name" => "Presidente Venceslau",
                "slug" => "presidente-venceslau",
            ],
            [
                "state_id" => 26,
                "name" => "Promissão",
                "slug" => "promissao",
            ],
            [
                "state_id" => 26,
                "name" => "Quadra",
                "slug" => "quadra",
            ],
            [
                "state_id" => 26,
                "name" => "Quatá",
                "slug" => "quata",
            ],
            [
                "state_id" => 26,
                "name" => "Queiroz",
                "slug" => "queiroz",
            ],
            [
                "state_id" => 26,
                "name" => "Queluz",
                "slug" => "queluz",
            ],
            [
                "state_id" => 26,
                "name" => "Quintana",
                "slug" => "quintana",
            ],
            [
                "state_id" => 26,
                "name" => "Rafard",
                "slug" => "rafard",
            ],
            [
                "state_id" => 26,
                "name" => "Rancharia",
                "slug" => "rancharia",
            ],
            [
                "state_id" => 26,
                "name" => "Redenção da Serra",
                "slug" => "redencao-da-serra",
            ],
            [
                "state_id" => 26,
                "name" => "Regente Feijó",
                "slug" => "regente-feijo",
            ],
            [
                "state_id" => 26,
                "name" => "Reginópolis",
                "slug" => "reginopolis",
            ],
            [
                "state_id" => 26,
                "name" => "Registro",
                "slug" => "registro",
            ],
            [
                "state_id" => 26,
                "name" => "Restinga",
                "slug" => "restinga",
            ],
            [
                "state_id" => 26,
                "name" => "Ribeira",
                "slug" => "ribeira",
            ],
            [
                "state_id" => 26,
                "name" => "Ribeirão Bonito",
                "slug" => "ribeirao-bonito",
            ],
            [
                "state_id" => 26,
                "name" => "Ribeirão Branco",
                "slug" => "ribeirao-branco",
            ],
            [
                "state_id" => 26,
                "name" => "Ribeirão Corrente",
                "slug" => "ribeirao-corrente",
            ],
            [
                "state_id" => 26,
                "name" => "Ribeirão do Sul",
                "slug" => "ribeirao-do-sul",
            ],
            [
                "state_id" => 26,
                "name" => "Ribeirão dos Índios",
                "slug" => "ribeirao-dos-indios",
            ],
            [
                "state_id" => 26,
                "name" => "Ribeirão Grande",
                "slug" => "ribeirao-grande",
            ],
            [
                "state_id" => 26,
                "name" => "Ribeirão Pires",
                "slug" => "ribeirao-pires",
            ],
            [
                "state_id" => 26,
                "name" => "Ribeirão Preto",
                "slug" => "ribeirao-preto",
            ],
            [
                "state_id" => 26,
                "name" => "Rifaina",
                "slug" => "rifaina",
            ],
            [
                "state_id" => 26,
                "name" => "Rincão",
                "slug" => "rincao",
            ],
            [
                "state_id" => 26,
                "name" => "Rinópolis",
                "slug" => "rinopolis",
            ],
            [
                "state_id" => 26,
                "name" => "Rio Claro",
                "slug" => "rio-claro",
            ],
            [
                "state_id" => 26,
                "name" => "Rio das Pedras",
                "slug" => "rio-das-pedras",
            ],
            [
                "state_id" => 26,
                "name" => "Rio Grande da Serra",
                "slug" => "rio-grande-da-serra",
            ],
            [
                "state_id" => 26,
                "name" => "Riolândia",
                "slug" => "riolandia",
            ],
            [
                "state_id" => 26,
                "name" => "Riversul",
                "slug" => "riversul",
            ],
            [
                "state_id" => 26,
                "name" => "Rosana",
                "slug" => "rosana",
            ],
            [
                "state_id" => 26,
                "name" => "Roseira",
                "slug" => "roseira",
            ],
            [
                "state_id" => 26,
                "name" => "Rubiácea",
                "slug" => "rubiacea",
            ],
            [
                "state_id" => 26,
                "name" => "Rubinéia",
                "slug" => "rubineia",
            ],
            [
                "state_id" => 26,
                "name" => "Sabino",
                "slug" => "sabino",
            ],
            [
                "state_id" => 26,
                "name" => "Sagres",
                "slug" => "sagres",
            ],
            [
                "state_id" => 26,
                "name" => "Sales",
                "slug" => "sales",
            ],
            [
                "state_id" => 26,
                "name" => "Sales Oliveira",
                "slug" => "sales-oliveira",
            ],
            [
                "state_id" => 26,
                "name" => "Salesópolis",
                "slug" => "salesopolis",
            ],
            [
                "state_id" => 26,
                "name" => "Salmourão",
                "slug" => "salmourao",
            ],
            [
                "state_id" => 26,
                "name" => "Saltinho",
                "slug" => "saltinho",
            ],
            [
                "state_id" => 26,
                "name" => "Salto",
                "slug" => "salto",
            ],
            [
                "state_id" => 26,
                "name" => "Salto de Pirapora",
                "slug" => "salto-de-pirapora",
            ],
            [
                "state_id" => 26,
                "name" => "Salto Grande",
                "slug" => "salto-grande",
            ],
            [
                "state_id" => 26,
                "name" => "Sandovalina",
                "slug" => "sandovalina",
            ],
            [
                "state_id" => 26,
                "name" => "Santa Adélia",
                "slug" => "santa-adelia",
            ],
            [
                "state_id" => 26,
                "name" => "Santa Albertina",
                "slug" => "santa-albertina",
            ],
            [
                "state_id" => 26,
                "name" => "Santa Bárbara d`Oeste",
                "slug" => "santa-barbara-doeste",
            ],
            [
                "state_id" => 26,
                "name" => "Santa Branca",
                "slug" => "santa-branca",
            ],
            [
                "state_id" => 26,
                "name" => "Santa Clara d`Oeste",
                "slug" => "santa-clara-doeste",
            ],
            [
                "state_id" => 26,
                "name" => "Santa Cruz da Conceição",
                "slug" => "santa-cruz-da-conceicao",
            ],
            [
                "state_id" => 26,
                "name" => "Santa Cruz da Esperança",
                "slug" => "santa-cruz-da-esperanca",
            ],
            [
                "state_id" => 26,
                "name" => "Santa Cruz das Palmeiras",
                "slug" => "santa-cruz-das-palmeiras",
            ],
            [
                "state_id" => 26,
                "name" => "Santa Cruz do Rio Pardo",
                "slug" => "santa-cruz-do-rio-pardo",
            ],
            [
                "state_id" => 26,
                "name" => "Santa Ernestina",
                "slug" => "santa-ernestina",
            ],
            [
                "state_id" => 26,
                "name" => "Santa Fé do Sul",
                "slug" => "santa-fe-do-sul",
            ],
            [
                "state_id" => 26,
                "name" => "Santa Gertrudes",
                "slug" => "santa-gertrudes",
            ],
            [
                "state_id" => 26,
                "name" => "Santa Isabel",
                "slug" => "santa-isabel",
            ],
            [
                "state_id" => 26,
                "name" => "Santa Lúcia",
                "slug" => "santa-lucia",
            ],
            [
                "state_id" => 26,
                "name" => "Santa Maria da Serra",
                "slug" => "santa-maria-da-serra",
            ],
            [
                "state_id" => 26,
                "name" => "Santa Mercedes",
                "slug" => "santa-mercedes",
            ],
            [
                "state_id" => 26,
                "name" => "Santa Rita d`Oeste",
                "slug" => "santa-rita-doeste",
            ],
            [
                "state_id" => 26,
                "name" => "Santa Rita do Passa Quatro",
                "slug" => "santa-rita-do-passa-quatro",
            ],
            [
                "state_id" => 26,
                "name" => "Santa Rosa de Viterbo",
                "slug" => "santa-rosa-de-viterbo",
            ],
            [
                "state_id" => 26,
                "name" => "Santa Salete",
                "slug" => "santa-salete",
            ],
            [
                "state_id" => 26,
                "name" => "Santana da Ponte Pensa",
                "slug" => "santana-da-ponte-pensa",
            ],
            [
                "state_id" => 26,
                "name" => "Santana de Parnaíba",
                "slug" => "santana-de-parnaiba",
            ],
            [
                "state_id" => 26,
                "name" => "Santo Anastácio",
                "slug" => "santo-anastacio",
            ],
            [
                "state_id" => 26,
                "name" => "Santo André",
                "slug" => "santo-andre",
            ],
            [
                "state_id" => 26,
                "name" => "Santo Antônio da Alegria",
                "slug" => "santo-antonio-da-alegria",
            ],
            [
                "state_id" => 26,
                "name" => "Santo Antônio de Posse",
                "slug" => "santo-antonio-de-posse",
            ],
            [
                "state_id" => 26,
                "name" => "Santo Antônio do Aracanguá",
                "slug" => "santo-antonio-do-aracangua",
            ],
            [
                "state_id" => 26,
                "name" => "Santo Antônio do Jardim",
                "slug" => "santo-antonio-do-jardim",
            ],
            [
                "state_id" => 26,
                "name" => "Santo Antônio do Pinhal",
                "slug" => "santo-antonio-do-pinhal",
            ],
            [
                "state_id" => 26,
                "name" => "Santo Expedito",
                "slug" => "santo-expedito",
            ],
            [
                "state_id" => 26,
                "name" => "Santópolis do Aguapeí",
                "slug" => "santopolis-do-aguapei",
            ],
            [
                "state_id" => 26,
                "name" => "Santos",
                "slug" => "santos",
            ],
            [
                "state_id" => 26,
                "name" => "São Bento do Sapucaí",
                "slug" => "sao-bento-do-sapucai",
            ],
            [
                "state_id" => 26,
                "name" => "São Bernardo do Campo",
                "slug" => "sao-bernardo-do-campo",
            ],
            [
                "state_id" => 26,
                "name" => "São Caetano do Sul",
                "slug" => "sao-caetano-do-sul",
            ],
            [
                "state_id" => 26,
                "name" => "São Carlos",
                "slug" => "sao-carlos",
            ],
            [
                "state_id" => 26,
                "name" => "São Francisco",
                "slug" => "sao-francisco",
            ],
            [
                "state_id" => 26,
                "name" => "São João da Boa Vista",
                "slug" => "sao-joao-da-boa-vista",
            ],
            [
                "state_id" => 26,
                "name" => "São João das Duas Pontes",
                "slug" => "sao-joao-das-duas-pontes",
            ],
            [
                "state_id" => 26,
                "name" => "São João de Iracema",
                "slug" => "sao-joao-de-iracema",
            ],
            [
                "state_id" => 26,
                "name" => "São João do Pau d`Alho",
                "slug" => "sao-joao-do-pau-dalho",
            ],
            [
                "state_id" => 26,
                "name" => "São Joaquim da Barra",
                "slug" => "sao-joaquim-da-barra",
            ],
            [
                "state_id" => 26,
                "name" => "São José da Bela Vista",
                "slug" => "sao-jose-da-bela-vista",
            ],
            [
                "state_id" => 26,
                "name" => "São José do Barreiro",
                "slug" => "sao-jose-do-barreiro",
            ],
            [
                "state_id" => 26,
                "name" => "São José do Rio Pardo",
                "slug" => "sao-jose-do-rio-pardo",
            ],
            [
                "state_id" => 26,
                "name" => "São José do Rio Preto",
                "slug" => "sao-jose-do-rio-preto",
            ],
            [
                "state_id" => 26,
                "name" => "São José dos Campos",
                "slug" => "sao-jose-dos-campos",
            ],
            [
                "state_id" => 26,
                "name" => "São Lourenço da Serra",
                "slug" => "sao-lourenco-da-serra",
            ],
            [
                "state_id" => 26,
                "name" => "São Luís do Paraitinga",
                "slug" => "sao-luis-do-paraitinga",
            ],
            [
                "state_id" => 26,
                "name" => "São Manuel",
                "slug" => "sao-manuel",
            ],
            [
                "state_id" => 26,
                "name" => "São Miguel Arcanjo",
                "slug" => "sao-miguel-arcanjo",
            ],
            [
                "state_id" => 26,
                "name" => "São Paulo",
                "slug" => "sao-paulo",
            ],
            [
                "state_id" => 26,
                "name" => "São Pedro",
                "slug" => "sao-pedro",
            ],
            [
                "state_id" => 26,
                "name" => "São Pedro do Turvo",
                "slug" => "sao-pedro-do-turvo",
            ],
            [
                "state_id" => 26,
                "name" => "São Roque",
                "slug" => "sao-roque",
            ],
            [
                "state_id" => 26,
                "name" => "São Sebastião",
                "slug" => "sao-sebastiao",
            ],
            [
                "state_id" => 26,
                "name" => "São Sebastião da Grama",
                "slug" => "sao-sebastiao-da-grama",
            ],
            [
                "state_id" => 26,
                "name" => "São Simão",
                "slug" => "sao-simao",
            ],
            [
                "state_id" => 26,
                "name" => "São Vicente",
                "slug" => "sao-vicente",
            ],
            [
                "state_id" => 26,
                "name" => "Sarapuí",
                "slug" => "sarapui",
            ],
            [
                "state_id" => 26,
                "name" => "Sarutaiá",
                "slug" => "sarutaia",
            ],
            [
                "state_id" => 26,
                "name" => "Sebastianópolis do Sul",
                "slug" => "sebastianopolis-do-sul",
            ],
            [
                "state_id" => 26,
                "name" => "Serra Azul",
                "slug" => "serra-azul",
            ],
            [
                "state_id" => 26,
                "name" => "Serra Negra",
                "slug" => "serra-negra",
            ],
            [
                "state_id" => 26,
                "name" => "Serrana",
                "slug" => "serrana",
            ],
            [
                "state_id" => 26,
                "name" => "Sertãozinho",
                "slug" => "sertaozinho",
            ],
            [
                "state_id" => 26,
                "name" => "Sete Barras",
                "slug" => "sete-barras",
            ],
            [
                "state_id" => 26,
                "name" => "Severínia",
                "slug" => "severinia",
            ],
            [
                "state_id" => 26,
                "name" => "Silveiras",
                "slug" => "silveiras",
            ],
            [
                "state_id" => 26,
                "name" => "Socorro",
                "slug" => "socorro",
            ],
            [
                "state_id" => 26,
                "name" => "Sorocaba",
                "slug" => "sorocaba",
            ],
            [
                "state_id" => 26,
                "name" => "Sud Mennucci",
                "slug" => "sud-mennucci",
            ],
            [
                "state_id" => 26,
                "name" => "Sumaré",
                "slug" => "sumare",
            ],
            [
                "state_id" => 26,
                "name" => "Suzanápolis",
                "slug" => "suzanapolis",
            ],
            [
                "state_id" => 26,
                "name" => "Suzano",
                "slug" => "suzano",
            ],
            [
                "state_id" => 26,
                "name" => "Tabapuã",
                "slug" => "tabapua",
            ],
            [
                "state_id" => 26,
                "name" => "Tabatinga",
                "slug" => "tabatinga",
            ],
            [
                "state_id" => 26,
                "name" => "Taboão da Serra",
                "slug" => "taboao-da-serra",
            ],
            [
                "state_id" => 26,
                "name" => "Taciba",
                "slug" => "taciba",
            ],
            [
                "state_id" => 26,
                "name" => "Taguaí",
                "slug" => "taguai",
            ],
            [
                "state_id" => 26,
                "name" => "Taiaçu",
                "slug" => "taiacu",
            ],
            [
                "state_id" => 26,
                "name" => "Taiúva",
                "slug" => "taiuva",
            ],
            [
                "state_id" => 26,
                "name" => "Tambaú",
                "slug" => "tambau",
            ],
            [
                "state_id" => 26,
                "name" => "Tanabi",
                "slug" => "tanabi",
            ],
            [
                "state_id" => 26,
                "name" => "Tapiraí",
                "slug" => "tapirai",
            ],
            [
                "state_id" => 26,
                "name" => "Tapiratiba",
                "slug" => "tapiratiba",
            ],
            [
                "state_id" => 26,
                "name" => "Taquaral",
                "slug" => "taquaral",
            ],
            [
                "state_id" => 26,
                "name" => "Taquaritinga",
                "slug" => "taquaritinga",
            ],
            [
                "state_id" => 26,
                "name" => "Taquarituba",
                "slug" => "taquarituba",
            ],
            [
                "state_id" => 26,
                "name" => "Taquarivaí",
                "slug" => "taquarivai",
            ],
            [
                "state_id" => 26,
                "name" => "Tarabai",
                "slug" => "tarabai",
            ],
            [
                "state_id" => 26,
                "name" => "Tarumã",
                "slug" => "taruma",
            ],
            [
                "state_id" => 26,
                "name" => "Tatuí",
                "slug" => "tatui",
            ],
            [
                "state_id" => 26,
                "name" => "Taubaté",
                "slug" => "taubate",
            ],
            [
                "state_id" => 26,
                "name" => "Tejupá",
                "slug" => "tejupa",
            ],
            [
                "state_id" => 26,
                "name" => "Teodoro Sampaio",
                "slug" => "teodoro-sampaio",
            ],
            [
                "state_id" => 26,
                "name" => "Terra Roxa",
                "slug" => "terra-roxa",
            ],
            [
                "state_id" => 26,
                "name" => "Tietê",
                "slug" => "tiete",
            ],
            [
                "state_id" => 26,
                "name" => "Timburi",
                "slug" => "timburi",
            ],
            [
                "state_id" => 26,
                "name" => "Torre de Pedra",
                "slug" => "torre-de-pedra",
            ],
            [
                "state_id" => 26,
                "name" => "Torrinha",
                "slug" => "torrinha",
            ],
            [
                "state_id" => 26,
                "name" => "Trabiju",
                "slug" => "trabiju",
            ],
            [
                "state_id" => 26,
                "name" => "Tremembé",
                "slug" => "tremembe",
            ],
            [
                "state_id" => 26,
                "name" => "Três Fronteiras",
                "slug" => "tres-fronteiras",
            ],
            [
                "state_id" => 26,
                "name" => "Tuiuti",
                "slug" => "tuiuti",
            ],
            [
                "state_id" => 26,
                "name" => "Tupã",
                "slug" => "tupa",
            ],
            [
                "state_id" => 26,
                "name" => "Tupi Paulista",
                "slug" => "tupi-paulista",
            ],
            [
                "state_id" => 26,
                "name" => "Turiúba",
                "slug" => "turiuba",
            ],
            [
                "state_id" => 26,
                "name" => "Turmalina",
                "slug" => "turmalina",
            ],
            [
                "state_id" => 26,
                "name" => "Ubarana",
                "slug" => "ubarana",
            ],
            [
                "state_id" => 26,
                "name" => "Ubatuba",
                "slug" => "ubatuba",
            ],
            [
                "state_id" => 26,
                "name" => "Ubirajara",
                "slug" => "ubirajara",
            ],
            [
                "state_id" => 26,
                "name" => "Uchoa",
                "slug" => "uchoa",
            ],
            [
                "state_id" => 26,
                "name" => "União Paulista",
                "slug" => "uniao-paulista",
            ],
            [
                "state_id" => 26,
                "name" => "Urânia",
                "slug" => "urania",
            ],
            [
                "state_id" => 26,
                "name" => "Uru",
                "slug" => "uru",
            ],
            [
                "state_id" => 26,
                "name" => "Urupês",
                "slug" => "urupes",
            ],
            [
                "state_id" => 26,
                "name" => "Valentim Gentil",
                "slug" => "valentim-gentil",
            ],
            [
                "state_id" => 26,
                "name" => "Valinhos",
                "slug" => "valinhos",
            ],
            [
                "state_id" => 26,
                "name" => "Valparaíso",
                "slug" => "valparaiso",
            ],
            [
                "state_id" => 26,
                "name" => "Vargem",
                "slug" => "vargem",
            ],
            [
                "state_id" => 26,
                "name" => "Vargem Grande do Sul",
                "slug" => "vargem-grande-do-sul",
            ],
            [
                "state_id" => 26,
                "name" => "Vargem Grande Paulista",
                "slug" => "vargem-grande-paulista",
            ],
            [
                "state_id" => 26,
                "name" => "Várzea Paulista",
                "slug" => "varzea-paulista",
            ],
            [
                "state_id" => 26,
                "name" => "Vera Cruz",
                "slug" => "vera-cruz",
            ],
            [
                "state_id" => 26,
                "name" => "Vinhedo",
                "slug" => "vinhedo",
            ],
            [
                "state_id" => 26,
                "name" => "Viradouro",
                "slug" => "viradouro",
            ],
            [
                "state_id" => 26,
                "name" => "Vista Alegre do Alto",
                "slug" => "vista-alegre-do-alto",
            ],
            [
                "state_id" => 26,
                "name" => "Vitória Brasil",
                "slug" => "vitoria-brasil",
            ],
            [
                "state_id" => 26,
                "name" => "Votorantim",
                "slug" => "votorantim",
            ],
            [
                "state_id" => 26,
                "name" => "Votuporanga",
                "slug" => "votuporanga",
            ],
            [
                "state_id" => 26,
                "name" => "Zacarias",
                "slug" => "zacarias",
            ],
            [
                "state_id" => 25,
                "name" => "Amparo de São Francisco",
                "slug" => "amparo-de-sao-francisco",
            ],
            [
                "state_id" => 25,
                "name" => "Aquidabã",
                "slug" => "aquidaba",
            ],
            [
                "state_id" => 25,
                "name" => "Aracaju",
                "slug" => "aracaju",
            ],
            [
                "state_id" => 25,
                "name" => "Arauá",
                "slug" => "araua",
            ],
            [
                "state_id" => 25,
                "name" => "Areia Branca",
                "slug" => "areia-branca",
            ],
            [
                "state_id" => 25,
                "name" => "Barra dos Coqueiros",
                "slug" => "barra-dos-coqueiros",
            ],
            [
                "state_id" => 25,
                "name" => "Boquim",
                "slug" => "boquim",
            ],
            [
                "state_id" => 25,
                "name" => "Brejo Grande",
                "slug" => "brejo-grande",
            ],
            [
                "state_id" => 25,
                "name" => "Campo do Brito",
                "slug" => "campo-do-brito",
            ],
            [
                "state_id" => 25,
                "name" => "Canhoba",
                "slug" => "canhoba",
            ],
            [
                "state_id" => 25,
                "name" => "Canindé de São Francisco",
                "slug" => "caninde-de-sao-francisco",
            ],
            [
                "state_id" => 25,
                "name" => "Capela",
                "slug" => "capela",
            ],
            [
                "state_id" => 25,
                "name" => "Carira",
                "slug" => "carira",
            ],
            [
                "state_id" => 25,
                "name" => "Carmópolis",
                "slug" => "carmopolis",
            ],
            [
                "state_id" => 25,
                "name" => "Cedro de São João",
                "slug" => "cedro-de-sao-joao",
            ],
            [
                "state_id" => 25,
                "name" => "Cristinápolis",
                "slug" => "cristinapolis",
            ],
            [
                "state_id" => 25,
                "name" => "Cumbe",
                "slug" => "cumbe",
            ],
            [
                "state_id" => 25,
                "name" => "Divina Pastora",
                "slug" => "divina-pastora",
            ],
            [
                "state_id" => 25,
                "name" => "Estância",
                "slug" => "estancia",
            ],
            [
                "state_id" => 25,
                "name" => "Feira Nova",
                "slug" => "feira-nova",
            ],
            [
                "state_id" => 25,
                "name" => "Frei Paulo",
                "slug" => "frei-paulo",
            ],
            [
                "state_id" => 25,
                "name" => "Gararu",
                "slug" => "gararu",
            ],
            [
                "state_id" => 25,
                "name" => "General Maynard",
                "slug" => "general-maynard",
            ],
            [
                "state_id" => 25,
                "name" => "Gracho Cardoso",
                "slug" => "gracho-cardoso",
            ],
            [
                "state_id" => 25,
                "name" => "Ilha das Flores",
                "slug" => "ilha-das-flores",
            ],
            [
                "state_id" => 25,
                "name" => "Indiaroba",
                "slug" => "indiaroba",
            ],
            [
                "state_id" => 25,
                "name" => "Itabaiana",
                "slug" => "itabaiana",
            ],
            [
                "state_id" => 25,
                "name" => "Itabaianinha",
                "slug" => "itabaianinha",
            ],
            [
                "state_id" => 25,
                "name" => "Itabi",
                "slug" => "itabi",
            ],
            [
                "state_id" => 25,
                "name" => "Itaporanga d`Ajuda",
                "slug" => "itaporanga-dajuda",
            ],
            [
                "state_id" => 25,
                "name" => "Japaratuba",
                "slug" => "japaratuba",
            ],
            [
                "state_id" => 25,
                "name" => "Japoatã",
                "slug" => "japoata",
            ],
            [
                "state_id" => 25,
                "name" => "Lagarto",
                "slug" => "lagarto",
            ],
            [
                "state_id" => 25,
                "name" => "Laranjeiras",
                "slug" => "laranjeiras",
            ],
            [
                "state_id" => 25,
                "name" => "Macambira",
                "slug" => "macambira",
            ],
            [
                "state_id" => 25,
                "name" => "Malhada dos Bois",
                "slug" => "malhada-dos-bois",
            ],
            [
                "state_id" => 25,
                "name" => "Malhador",
                "slug" => "malhador",
            ],
            [
                "state_id" => 25,
                "name" => "Maruim",
                "slug" => "maruim",
            ],
            [
                "state_id" => 25,
                "name" => "Moita Bonita",
                "slug" => "moita-bonita",
            ],
            [
                "state_id" => 25,
                "name" => "Monte Alegre de Sergipe",
                "slug" => "monte-alegre-de-sergipe",
            ],
            [
                "state_id" => 25,
                "name" => "Muribeca",
                "slug" => "muribeca",
            ],
            [
                "state_id" => 25,
                "name" => "Neópolis",
                "slug" => "neopolis",
            ],
            [
                "state_id" => 25,
                "name" => "Nossa Senhora Aparecida",
                "slug" => "nossa-senhora-aparecida",
            ],
            [
                "state_id" => 25,
                "name" => "Nossa Senhora da Glória",
                "slug" => "nossa-senhora-da-gloria",
            ],
            [
                "state_id" => 25,
                "name" => "Nossa Senhora das Dores",
                "slug" => "nossa-senhora-das-dores",
            ],
            [
                "state_id" => 25,
                "name" => "Nossa Senhora de Lourdes",
                "slug" => "nossa-senhora-de-lourdes",
            ],
            [
                "state_id" => 25,
                "name" => "Nossa Senhora do Socorro",
                "slug" => "nossa-senhora-do-socorro",
            ],
            [
                "state_id" => 25,
                "name" => "Pacatuba",
                "slug" => "pacatuba",
            ],
            [
                "state_id" => 25,
                "name" => "Pedra Mole",
                "slug" => "pedra-mole",
            ],
            [
                "state_id" => 25,
                "name" => "Pedrinhas",
                "slug" => "pedrinhas",
            ],
            [
                "state_id" => 25,
                "name" => "Pinhão",
                "slug" => "pinhao",
            ],
            [
                "state_id" => 25,
                "name" => "Pirambu",
                "slug" => "pirambu",
            ],
            [
                "state_id" => 25,
                "name" => "Poço Redondo",
                "slug" => "poco-redondo",
            ],
            [
                "state_id" => 25,
                "name" => "Poço Verde",
                "slug" => "poco-verde",
            ],
            [
                "state_id" => 25,
                "name" => "Porto da Folha",
                "slug" => "porto-da-folha",
            ],
            [
                "state_id" => 25,
                "name" => "Propriá",
                "slug" => "propria",
            ],
            [
                "state_id" => 25,
                "name" => "Riachão do Dantas",
                "slug" => "riachao-do-dantas",
            ],
            [
                "state_id" => 25,
                "name" => "Riachuelo",
                "slug" => "riachuelo",
            ],
            [
                "state_id" => 25,
                "name" => "Ribeirópolis",
                "slug" => "ribeiropolis",
            ],
            [
                "state_id" => 25,
                "name" => "Rosário do Catete",
                "slug" => "rosario-do-catete",
            ],
            [
                "state_id" => 25,
                "name" => "Salgado",
                "slug" => "salgado",
            ],
            [
                "state_id" => 25,
                "name" => "Santa Luzia do Itanhy",
                "slug" => "santa-luzia-do-itanhy",
            ],
            [
                "state_id" => 25,
                "name" => "Santa Rosa de Lima",
                "slug" => "santa-rosa-de-lima",
            ],
            [
                "state_id" => 25,
                "name" => "Santana do São Francisco",
                "slug" => "santana-do-sao-francisco",
            ],
            [
                "state_id" => 25,
                "name" => "Santo Amaro das Brotas",
                "slug" => "santo-amaro-das-brotas",
            ],
            [
                "state_id" => 25,
                "name" => "São Cristóvão",
                "slug" => "sao-cristovao",
            ],
            [
                "state_id" => 25,
                "name" => "São Domingos",
                "slug" => "sao-domingos",
            ],
            [
                "state_id" => 25,
                "name" => "São Francisco",
                "slug" => "sao-francisco",
            ],
            [
                "state_id" => 25,
                "name" => "São Miguel do Aleixo",
                "slug" => "sao-miguel-do-aleixo",
            ],
            [
                "state_id" => 25,
                "name" => "Simão Dias",
                "slug" => "simao-dias",
            ],
            [
                "state_id" => 25,
                "name" => "Siriri",
                "slug" => "siriri",
            ],
            [
                "state_id" => 25,
                "name" => "Telha",
                "slug" => "telha",
            ],
            [
                "state_id" => 25,
                "name" => "Tobias Barreto",
                "slug" => "tobias-barreto",
            ],
            [
                "state_id" => 25,
                "name" => "Tomar do Geru",
                "slug" => "tomar-do-geru",
            ],
            [
                "state_id" => 25,
                "name" => "Umbaúba",
                "slug" => "umbauba",
            ],
            [
                "state_id" => 27,
                "name" => "Abreulândia",
                "slug" => "abreulandia",
            ],
            [
                "state_id" => 27,
                "name" => "Aguiarnópolis",
                "slug" => "aguiarnopolis",
            ],
            [
                "state_id" => 27,
                "name" => "Aliança do Tocantins",
                "slug" => "alianca-do-tocantins",
            ],
            [
                "state_id" => 27,
                "name" => "Almas",
                "slug" => "almas",
            ],
            [
                "state_id" => 27,
                "name" => "Alvorada",
                "slug" => "alvorada",
            ],
            [
                "state_id" => 27,
                "name" => "Ananás",
                "slug" => "ananas",
            ],
            [
                "state_id" => 27,
                "name" => "Angico",
                "slug" => "angico",
            ],
            [
                "state_id" => 27,
                "name" => "Aparecida do Rio Negro",
                "slug" => "aparecida-do-rio-negro",
            ],
            [
                "state_id" => 27,
                "name" => "Aragominas",
                "slug" => "aragominas",
            ],
            [
                "state_id" => 27,
                "name" => "Araguacema",
                "slug" => "araguacema",
            ],
            [
                "state_id" => 27,
                "name" => "Araguaçu",
                "slug" => "araguacu",
            ],
            [
                "state_id" => 27,
                "name" => "Araguaína",
                "slug" => "araguaina",
            ],
            [
                "state_id" => 27,
                "name" => "Araguanã",
                "slug" => "araguana",
            ],
            [
                "state_id" => 27,
                "name" => "Araguatins",
                "slug" => "araguatins",
            ],
            [
                "state_id" => 27,
                "name" => "Arapoema",
                "slug" => "arapoema",
            ],
            [
                "state_id" => 27,
                "name" => "Arraias",
                "slug" => "arraias",
            ],
            [
                "state_id" => 27,
                "name" => "Augustinópolis",
                "slug" => "augustinopolis",
            ],
            [
                "state_id" => 27,
                "name" => "Aurora do Tocantins",
                "slug" => "aurora-do-tocantins",
            ],
            [
                "state_id" => 27,
                "name" => "Axixá do Tocantins",
                "slug" => "axixa-do-tocantins",
            ],
            [
                "state_id" => 27,
                "name" => "Babaçulândia",
                "slug" => "babaculandia",
            ],
            [
                "state_id" => 27,
                "name" => "Bandeirantes do Tocantins",
                "slug" => "bandeirantes-do-tocantins",
            ],
            [
                "state_id" => 27,
                "name" => "Barra do Ouro",
                "slug" => "barra-do-ouro",
            ],
            [
                "state_id" => 27,
                "name" => "Barrolândia",
                "slug" => "barrolandia",
            ],
            [
                "state_id" => 27,
                "name" => "Bernardo Sayão",
                "slug" => "bernardo-sayao",
            ],
            [
                "state_id" => 27,
                "name" => "Bom Jesus do Tocantins",
                "slug" => "bom-jesus-do-tocantins",
            ],
            [
                "state_id" => 27,
                "name" => "Brasilândia do Tocantins",
                "slug" => "brasilandia-do-tocantins",
            ],
            [
                "state_id" => 27,
                "name" => "Brejinho de Nazaré",
                "slug" => "brejinho-de-nazare",
            ],
            [
                "state_id" => 27,
                "name" => "Buriti do Tocantins",
                "slug" => "buriti-do-tocantins",
            ],
            [
                "state_id" => 27,
                "name" => "Cachoeirinha",
                "slug" => "cachoeirinha",
            ],
            [
                "state_id" => 27,
                "name" => "Campos Lindos",
                "slug" => "campos-lindos",
            ],
            [
                "state_id" => 27,
                "name" => "Cariri do Tocantins",
                "slug" => "cariri-do-tocantins",
            ],
            [
                "state_id" => 27,
                "name" => "Carmolândia",
                "slug" => "carmolandia",
            ],
            [
                "state_id" => 27,
                "name" => "Carrasco Bonito",
                "slug" => "carrasco-bonito",
            ],
            [
                "state_id" => 27,
                "name" => "Caseara",
                "slug" => "caseara",
            ],
            [
                "state_id" => 27,
                "name" => "Centenário",
                "slug" => "centenario",
            ],
            [
                "state_id" => 27,
                "name" => "Chapada da Natividade",
                "slug" => "chapada-da-natividade",
            ],
            [
                "state_id" => 27,
                "name" => "Chapada de Areia",
                "slug" => "chapada-de-areia",
            ],
            [
                "state_id" => 27,
                "name" => "Colinas do Tocantins",
                "slug" => "colinas-do-tocantins",
            ],
            [
                "state_id" => 27,
                "name" => "Colméia",
                "slug" => "colmeia",
            ],
            [
                "state_id" => 27,
                "name" => "Combinado",
                "slug" => "combinado",
            ],
            [
                "state_id" => 27,
                "name" => "Conceição do Tocantins",
                "slug" => "conceicao-do-tocantins",
            ],
            [
                "state_id" => 27,
                "name" => "Couto de Magalhães",
                "slug" => "couto-de-magalhaes",
            ],
            [
                "state_id" => 27,
                "name" => "Cristalândia",
                "slug" => "cristalandia",
            ],
            [
                "state_id" => 27,
                "name" => "Crixás do Tocantins",
                "slug" => "crixas-do-tocantins",
            ],
            [
                "state_id" => 27,
                "name" => "Darcinópolis",
                "slug" => "darcinopolis",
            ],
            [
                "state_id" => 27,
                "name" => "Dianópolis",
                "slug" => "dianopolis",
            ],
            [
                "state_id" => 27,
                "name" => "Divinópolis do Tocantins",
                "slug" => "divinopolis-do-tocantins",
            ],
            [
                "state_id" => 27,
                "name" => "Dois Irmãos do Tocantins",
                "slug" => "dois-irmaos-do-tocantins",
            ],
            [
                "state_id" => 27,
                "name" => "Dueré",
                "slug" => "duere",
            ],
            [
                "state_id" => 27,
                "name" => "Esperantina",
                "slug" => "esperantina",
            ],
            [
                "state_id" => 27,
                "name" => "Fátima",
                "slug" => "fatima",
            ],
            [
                "state_id" => 27,
                "name" => "Figueirópolis",
                "slug" => "figueiropolis",
            ],
            [
                "state_id" => 27,
                "name" => "Filadélfia",
                "slug" => "filadelfia",
            ],
            [
                "state_id" => 27,
                "name" => "Formoso do Araguaia",
                "slug" => "formoso-do-araguaia",
            ],
            [
                "state_id" => 27,
                "name" => "Fortaleza do Tabocão",
                "slug" => "fortaleza-do-tabocao",
            ],
            [
                "state_id" => 27,
                "name" => "Goianorte",
                "slug" => "goianorte",
            ],
            [
                "state_id" => 27,
                "name" => "Goiatins",
                "slug" => "goiatins",
            ],
            [
                "state_id" => 27,
                "name" => "Guaraí",
                "slug" => "guarai",
            ],
            [
                "state_id" => 27,
                "name" => "Gurupi",
                "slug" => "gurupi",
            ],
            [
                "state_id" => 27,
                "name" => "Ipueiras",
                "slug" => "ipueiras",
            ],
            [
                "state_id" => 27,
                "name" => "Itacajá",
                "slug" => "itacaja",
            ],
            [
                "state_id" => 27,
                "name" => "Itaguatins",
                "slug" => "itaguatins",
            ],
            [
                "state_id" => 27,
                "name" => "Itapiratins",
                "slug" => "itapiratins",
            ],
            [
                "state_id" => 27,
                "name" => "Itaporã do Tocantins",
                "slug" => "itapora-do-tocantins",
            ],
            [
                "state_id" => 27,
                "name" => "Jaú do Tocantins",
                "slug" => "jau-do-tocantins",
            ],
            [
                "state_id" => 27,
                "name" => "Juarina",
                "slug" => "juarina",
            ],
            [
                "state_id" => 27,
                "name" => "Lagoa da Confusão",
                "slug" => "lagoa-da-confusao",
            ],
            [
                "state_id" => 27,
                "name" => "Lagoa do Tocantins",
                "slug" => "lagoa-do-tocantins",
            ],
            [
                "state_id" => 27,
                "name" => "Lajeado",
                "slug" => "lajeado",
            ],
            [
                "state_id" => 27,
                "name" => "Lavandeira",
                "slug" => "lavandeira",
            ],
            [
                "state_id" => 27,
                "name" => "Lizarda",
                "slug" => "lizarda",
            ],
            [
                "state_id" => 27,
                "name" => "Luzinópolis",
                "slug" => "luzinopolis",
            ],
            [
                "state_id" => 27,
                "name" => "Marianópolis do Tocantins",
                "slug" => "marianopolis-do-tocantins",
            ],
            [
                "state_id" => 27,
                "name" => "Mateiros",
                "slug" => "mateiros",
            ],
            [
                "state_id" => 27,
                "name" => "Maurilândia do Tocantins",
                "slug" => "maurilandia-do-tocantins",
            ],
            [
                "state_id" => 27,
                "name" => "Miracema do Tocantins",
                "slug" => "miracema-do-tocantins",
            ],
            [
                "state_id" => 27,
                "name" => "Miranorte",
                "slug" => "miranorte",
            ],
            [
                "state_id" => 27,
                "name" => "Monte do Carmo",
                "slug" => "monte-do-carmo",
            ],
            [
                "state_id" => 27,
                "name" => "Monte Santo do Tocantins",
                "slug" => "monte-santo-do-tocantins",
            ],
            [
                "state_id" => 27,
                "name" => "Muricilândia",
                "slug" => "muricilandia",
            ],
            [
                "state_id" => 27,
                "name" => "Natividade",
                "slug" => "natividade",
            ],
            [
                "state_id" => 27,
                "name" => "Nazaré",
                "slug" => "nazare",
            ],
            [
                "state_id" => 27,
                "name" => "Nova Olinda",
                "slug" => "nova-olinda",
            ],
            [
                "state_id" => 27,
                "name" => "Nova Rosalândia",
                "slug" => "nova-rosalandia",
            ],
            [
                "state_id" => 27,
                "name" => "Novo Acordo",
                "slug" => "novo-acordo",
            ],
            [
                "state_id" => 27,
                "name" => "Novo Alegre",
                "slug" => "novo-alegre",
            ],
            [
                "state_id" => 27,
                "name" => "Novo Jardim",
                "slug" => "novo-jardim",
            ],
            [
                "state_id" => 27,
                "name" => "Oliveira de Fátima",
                "slug" => "oliveira-de-fatima",
            ],
            [
                "state_id" => 27,
                "name" => "Palmas",
                "slug" => "palmas",
            ],
            [
                "state_id" => 27,
                "name" => "Palmeirante",
                "slug" => "palmeirante",
            ],
            [
                "state_id" => 27,
                "name" => "Palmeiras do Tocantins",
                "slug" => "palmeiras-do-tocantins",
            ],
            [
                "state_id" => 27,
                "name" => "Palmeirópolis",
                "slug" => "palmeiropolis",
            ],
            [
                "state_id" => 27,
                "name" => "Paraíso do Tocantins",
                "slug" => "paraiso-do-tocantins",
            ],
            [
                "state_id" => 27,
                "name" => "Paranã",
                "slug" => "parana",
            ],
            [
                "state_id" => 27,
                "name" => "Pau d`Arco",
                "slug" => "pau-darco",
            ],
            [
                "state_id" => 27,
                "name" => "Pedro Afonso",
                "slug" => "pedro-afonso",
            ],
            [
                "state_id" => 27,
                "name" => "Peixe",
                "slug" => "peixe",
            ],
            [
                "state_id" => 27,
                "name" => "Pequizeiro",
                "slug" => "pequizeiro",
            ],
            [
                "state_id" => 27,
                "name" => "Pindorama do Tocantins",
                "slug" => "pindorama-do-tocantins",
            ],
            [
                "state_id" => 27,
                "name" => "Piraquê",
                "slug" => "piraque",
            ],
            [
                "state_id" => 27,
                "name" => "Pium",
                "slug" => "pium",
            ],
            [
                "state_id" => 27,
                "name" => "Ponte Alta do Bom Jesus",
                "slug" => "ponte-alta-do-bom-jesus",
            ],
            [
                "state_id" => 27,
                "name" => "Ponte Alta do Tocantins",
                "slug" => "ponte-alta-do-tocantins",
            ],
            [
                "state_id" => 27,
                "name" => "Porto Alegre do Tocantins",
                "slug" => "porto-alegre-do-tocantins",
            ],
            [
                "state_id" => 27,
                "name" => "Porto Nacional",
                "slug" => "porto-nacional",
            ],
            [
                "state_id" => 27,
                "name" => "Praia Norte",
                "slug" => "praia-norte",
            ],
            [
                "state_id" => 27,
                "name" => "Presidente Kennedy",
                "slug" => "presidente-kennedy",
            ],
            [
                "state_id" => 27,
                "name" => "Pugmil",
                "slug" => "pugmil",
            ],
            [
                "state_id" => 27,
                "name" => "Recursolândia",
                "slug" => "recursolandia",
            ],
            [
                "state_id" => 27,
                "name" => "Riachinho",
                "slug" => "riachinho",
            ],
            [
                "state_id" => 27,
                "name" => "Rio da Conceição",
                "slug" => "rio-da-conceicao",
            ],
            [
                "state_id" => 27,
                "name" => "Rio dos Bois",
                "slug" => "rio-dos-bois",
            ],
            [
                "state_id" => 27,
                "name" => "Rio Sono",
                "slug" => "rio-sono",
            ],
            [
                "state_id" => 27,
                "name" => "Sampaio",
                "slug" => "sampaio",
            ],
            [
                "state_id" => 27,
                "name" => "Sandolândia",
                "slug" => "sandolandia",
            ],
            [
                "state_id" => 27,
                "name" => "Santa Fé do Araguaia",
                "slug" => "santa-fe-do-araguaia",
            ],
            [
                "state_id" => 27,
                "name" => "Santa Maria do Tocantins",
                "slug" => "santa-maria-do-tocantins",
            ],
            [
                "state_id" => 27,
                "name" => "Santa Rita do Tocantins",
                "slug" => "santa-rita-do-tocantins",
            ],
            [
                "state_id" => 27,
                "name" => "Santa Rosa do Tocantins",
                "slug" => "santa-rosa-do-tocantins",
            ],
            [
                "state_id" => 27,
                "name" => "Santa Tereza do Tocantins",
                "slug" => "santa-tereza-do-tocantins",
            ],
            [
                "state_id" => 27,
                "name" => "Santa Terezinha do Tocantins",
                "slug" => "santa-terezinha-do-tocantins",
            ],
            [
                "state_id" => 27,
                "name" => "São Bento do Tocantins",
                "slug" => "sao-bento-do-tocantins",
            ],
            [
                "state_id" => 27,
                "name" => "São Félix do Tocantins",
                "slug" => "sao-felix-do-tocantins",
            ],
            [
                "state_id" => 27,
                "name" => "São Miguel do Tocantins",
                "slug" => "sao-miguel-do-tocantins",
            ],
            [
                "state_id" => 27,
                "name" => "São Salvador do Tocantins",
                "slug" => "sao-salvador-do-tocantins",
            ],
            [
                "state_id" => 27,
                "name" => "São Sebastião do Tocantins",
                "slug" => "sao-sebastiao-do-tocantins",
            ],
            [
                "state_id" => 27,
                "name" => "São Valério da Natividade",
                "slug" => "sao-valerio-da-natividade",
            ],
            [
                "state_id" => 27,
                "name" => "Silvanópolis",
                "slug" => "silvanopolis",
            ],
            [
                "state_id" => 27,
                "name" => "Sítio Novo do Tocantins",
                "slug" => "sitio-novo-do-tocantins",
            ],
            [
                "state_id" => 27,
                "name" => "Sucupira",
                "slug" => "sucupira",
            ],
            [
                "state_id" => 27,
                "name" => "Taguatinga",
                "slug" => "taguatinga",
            ],
            [
                "state_id" => 27,
                "name" => "Taipas do Tocantins",
                "slug" => "taipas-do-tocantins",
            ],
            [
                "state_id" => 27,
                "name" => "Talismã",
                "slug" => "talisma",
            ],
            [
                "state_id" => 27,
                "name" => "Tocantínia",
                "slug" => "tocantinia",
            ],
            [
                "state_id" => 27,
                "name" => "Tocantinópolis",
                "slug" => "tocantinopolis",
            ],
            [
                "state_id" => 27,
                "name" => "Tupirama",
                "slug" => "tupirama",
            ],
            [
                "state_id" => 27,
                "name" => "Tupiratins",
                "slug" => "tupiratins",
            ],
            [
                "state_id" => 27,
                "name" => "Wanderlândia",
                "slug" => "wanderlandia",
            ],
            [
                "state_id" => 27,
                "name" => "Xambioá",
                "slug" => "xambioa",
            ],
            [
                "state_id" => 7,
                "name" => "Gama",
                "slug" => "gama",
            ],
            [
                "state_id" => 7,
                "name" => "Taguatinga",
                "slug" => "taguatinga",
            ],
            [
                "state_id" => 7,
                "name" => "Brazlândia",
                "slug" => "brazlandia",
            ],
            [
                "state_id" => 7,
                "name" => "Sobradinho",
                "slug" => "sobradinho",
            ],
            [
                "state_id" => 7,
                "name" => "Planaltina",
                "slug" => "planaltina",
            ],
            [
                "state_id" => 7,
                "name" => "Paranoá",
                "slug" => "paranoa",
            ],
            [
                "state_id" => 7,
                "name" => "Núcleo Bandeirante",
                "slug" => "nucleo-bandeirante",
            ],
            [
                "state_id" => 7,
                "name" => "Ceilândia",
                "slug" => "ceilandia",
            ],
            [
                "state_id" => 7,
                "name" => "Guará",
                "slug" => "guara",
            ],
            [
                "state_id" => 7,
                "name" => "Cruzeiro",
                "slug" => "cruzeiro",
            ],
            [
                "state_id" => 7,
                "name" => "Samambaia",
                "slug" => "samambaia",
            ],
            [
                "state_id" => 7,
                "name" => "Santa Maria",
                "slug" => "santa-maria",
            ],
            [
                "state_id" => 7,
                "name" => "São Sebastião",
                "slug" => "sao-sebastiao",
            ],
            [
                "state_id" => 7,
                "name" => "Lago Sul",
                "slug" => "lago-sul",
            ],
            [
                "state_id" => 7,
                "name" => "Riacho Fundo",
                "slug" => "riacho-fundo",
            ],
            [
                "state_id" => 7,
                "name" => "Lago Norte",
                "slug" => "lago-norte",
            ],
            [
                "state_id" => 7,
                "name" => "Candangolândia",
                "slug" => "candangolandia",
            ],
            [
                "state_id" => 7,
                "name" => "Águas Claras",
                "slug" => "aguas-claras",
            ],
            [
                "state_id" => 7,
                "name" => "Riacho Fundo II",
                "slug" => "riacho-fundo-ii",
            ],
            [
                "state_id" => 7,
                "name" => "Sudoeste/Octogonal",
                "slug" => "sudoesteoctogonal",
            ],
            [
                "state_id" => 7,
                "name" => "Varjão",
                "slug" => "varjao",
            ],
            [
                "state_id" => 7,
                "name" => "Park Way",
                "slug" => "park-way",
            ],
            [
                "state_id" => 7,
                "name" => "SCIA",
                "slug" => "scia",
            ],
            [
                "state_id" => 7,
                "name" => "Sobradinho II",
                "slug" => "sobradinho-ii",
            ],
            [
                "state_id" => 7,
                "name" => "Itapoã",
                "slug" => "itapoa",
            ],
            [
                "state_id" => 7,
                "name" => "SIA",
                "slug" => "sia",
            ],
            [
                "state_id" => 7,
                "name" => "Vicente Pires",
                "slug" => "vicente-pires",
            ],
            [
                "state_id" => 7,
                "name" => "Fercal",
                "slug" => "fercal",
            ],
            [
                "state_id" => 7,
                "name" => "Recanto das Emas",
                "slug" => "recanto-das-emas",
            ],
            [
                "state_id" => 7,
                "name" => "Jardim Botânico",
                "slug" => "jardim-botanico",
            ],
            [
                "state_id" => 17,
                "name" => "Nazária",
                "slug" => "nazaria",
            ],
            [
                "state_id" => 12,
                "name" => "Paraíso das Águas",
                "slug" => "paraiso-das-aguas",
            ],
            [
                "state_id" => 23,
                "name" => "Pinto Bandeira",
                "slug" => "pinto-bandeira",
            ],
            [
                "state_id" => 24,
                "name" => "Balneário Rincão",
                "slug" => "balneario-rincao",
            ],
            [
                "state_id" => 24,
                "name" => "Pescaria Brava",
                "slug" => "pescaria-brava",
            ],
            [
                "state_id" => null,
                "name" => "Exterior",
                "slug" => "exterior",
            ],
        ];
    }
}
