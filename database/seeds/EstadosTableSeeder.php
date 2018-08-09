<?php

use Illuminate\Database\Seeder;

class EstadosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = date("Y-m-d H:i:s");
        DB::table("estados")->insert([
            [
                "id" => 11,
                "nome" => "Rondônia",
                "abreviatura" => "RO",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "id" => 12,
                "nome" => "Acre",
                "abreviatura" => "AC",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "id" => 13,
                "nome" => "Amazonas",
                "abreviatura" => "AM",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "id" => 14,
                "nome" => "Roraima",
                "abreviatura" => "RR",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "id" => 15,
                "nome" => "Pará",
                "abreviatura" => "PA",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "id" => 16,
                "nome" => "Amapá",
                "abreviatura" => "AP",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "id" => 17,
                "nome" => "Tocantins",
                "abreviatura" => "TO",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "id" => 21,
                "nome" => "Maranhão",
                "abreviatura" => "MA",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "id" => 22,
                "nome" => "Piauí",
                "abreviatura" => "PI",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "id" => 23,
                "nome" => "Ceará",
                "abreviatura" => "CE",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "id" => 24,
                "nome" => "Rio Grande do Norte",
                "abreviatura" => "RN",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "id" => 25,
                "nome" => "Paraíba",
                "abreviatura" => "PB",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "id" => 26,
                "nome" => "Pernambuco",
                "abreviatura" => "PE",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "id" => 27,
                "nome" => "Alagoas",
                "abreviatura" => "AL",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "id" => 28,
                "nome" => "Sergipe",
                "abreviatura" => "SE",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "id" => 29,
                "nome" => "Bahia",
                "abreviatura" => "BA",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "id" => 31,
                "nome" => "Minas Gerais",
                "abreviatura" => "MG",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "id" => 32,
                "nome" => "Espírito Santo",
                "abreviatura" => "ES",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "id" => 33,
                "nome" => "Rio de Janeiro",
                "abreviatura" => "RJ",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "id" => 35,
                "nome" => "São Paulo",
                "abreviatura" => "SP",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "id" => 41,
                "nome" => "Paraná",
                "abreviatura" => "PR",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "id" => 42,
                "nome" => "Santa Catarina",
                "abreviatura" => "SC",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "id" => 43,
                "nome" => "Rio Grande do Sul",
                "abreviatura" => "RS",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "id" => 50,
                "nome" => "Mato Grosso do Sul",
                "abreviatura" => "MS",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "id" => 51,
                "nome" => "Mato Grosso",
                "abreviatura" => "MT",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "id" => 52,
                "nome" => "Goiás",
                "abreviatura" => "GO",
                "created_at" => $now,
                "updated_at" => $now,
            ], [
                "id" => 53,
                "nome" => "Distrito Federal",
                "abreviatura" => "DF",
                "created_at" => $now,
                "updated_at" => $now,
            ],
        ]);
    }
}