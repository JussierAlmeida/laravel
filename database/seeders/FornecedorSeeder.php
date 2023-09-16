<?php

namespace Database\Seeders;

use App\Models\Fornecedor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FornecedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $fornecedor = new Fornecedor();
        $fornecedor-> nome = 'fornecedor 100';
        $fornecedor-> uf = 'CE';
        $fornecedor-> site = 'fornecedor100.com';
        $fornecedor-> email = 'fornecedor@100';
        $fornecedor->save();

        Fornecedor::create([
            'nome' => 'Fornecedor 200',
            'site' => 'fornecedor200.com',
            'uf' => 'RS',
            'email'=> 'fornecedor@200'
        ]);

        //insert
        BD::table('fornecedores')->insert([
            'nome' => 'Fornecedor 300',
            'site' => 'fornecedor300.com',
            'uf' => 'RS',
            'email'=> 'fornecedor@300'

        ]);




    }
}
