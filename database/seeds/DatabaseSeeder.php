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
        'pescodigo'=>'4115570',
        'pnome'=>'DENIS VIEIRA VANONI',
        'saram'=>'4115570',
        'cpf'=>'00470162139',
        'banco'=>'4115570',
        'servico'=>'Teste de envio para o banco de dados1133410'
      ]);
    }

}