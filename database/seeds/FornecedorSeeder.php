<?php

use Illuminate\Database\Seeder;
use App\Fornecedor;

class FornecedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // instanciando o objeto
        $fornecedor = new Fornecedor();
        $fornecedor->nome = 'Fornecedor 100';
        $fornecedor->site = 'fornecedor100.com.br';
        $fornecedor->uf = 'ce';
        $fornecedor->email = 'contato@fornecedor100.com.br';
        $fornecedor->save();

        // o metodo create (atenção ao metodo fillable)
        Fornecedor::create([
            'nome'=>'Fornecedor 200',
            'site' => ''
        ]);
    }
}
