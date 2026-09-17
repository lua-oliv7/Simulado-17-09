<?php

namespace Database\Seeders;

use App\Models\Produto;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //Usuario
        User::create([
            'name' => 'Admin',
            'email' => 'admin@senai.br',
            'password' => Hash::make('123'),
        ]);

        //Produto
        Produto::create([
            'nome' => 'Tinta Acríclica',
            'valor' => 25.00,
            'qtd_estoque' => 10,
            'qtd_minima' => 5,
            'prazo_validade' => '2027/06/25',
            'cor' => 'Vermelha',
            'textura' => '',
            'peso' => 2,
            'unidade_medida' => 'Litros'
        ]);

        Produto::create([
            'nome' => 'Argamassa',
            'valor' => 67.90,
            'qtd_estoque' => 3,
            'qtd_minima' => 3,
            'prazo_validade' => '2027/03/14',
            'cor' => 'Vermelha',
            'textura' => '',
            'peso' => 2,
            'unidade_medida' => 'Litros'
        ]);

        Produto::create([
            'nome' => 'Cimento',
            'valor' => 98.76,
            'qtd_estoque' => 4,
            'qtd_minima' => 8,
            'prazo_validade' => '2027/09/02',
            'cor' => 'Cinza',
            'textura' => '',
            'peso' => 2,
            'unidade_medida' => 'Litros'
        ]);
    }
}