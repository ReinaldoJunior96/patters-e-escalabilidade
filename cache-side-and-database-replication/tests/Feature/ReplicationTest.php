<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Tests\TestCase;

class ReplicationTest extends TestCase
{
   /**
    * Testa se a replicação está funcionando entre master e slaves.
    */
   public function test_user_replication_from_master_to_slave()
   {
      // Cria 5 usuários no banco master (escrita)
      User::factory()->count(5)->create();

      // Aguarda replicação (pode ser necessário em ambiente local)
      sleep(2);

      // Leitura padrão (Laravel já faz o balanceamento para os slaves)
      $usersFromSlave = DB::table('users')->get();

      $this->assertGreaterThanOrEqual(5, $usersFromSlave->count(), 'Os usuários não foram replicados para o slave.');
   }
}
