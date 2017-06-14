<?php

use Illuminate\Database\Seeder;
use App\Os;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run()
         {
             $this->call(oSTableSeeder::class);
         }
}
class OsTableSeeder extends Seeder{
    public function run(){

      Os::create([
        'pescodigo'=>'234234',
        'pnome'=>'DENIS VIEIRA VANONI',
        'saram'=>'234234',
        'cpf'=>'08800033312',
        'banco'=>'334',
        'servico'=>'Teste de envio para o banco de eeeee',
        'om'=>'GAP-CG'
      ]);
    }

}
