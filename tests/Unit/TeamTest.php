<?php

namespace Tests\Unit;

use App\Models\Team;
use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use PHPUnit\Framework\TestCase;
use Tests\CreatesApplication;

class TeamTest extends TestCase
{
    use DatabaseTransactions,CreatesApplication;


//     /** @test */
//     public function a_team_has_a_name()
//     {
//         $team = new Team(['name' => 'Acme']);

//         $this->assertEquals('Acme', $team->name);
//     }

//     /** @test */
//     public function a_team_can_add_members()
//     {

//         $team = Team::factory()->create();

//         $user = User::factory()->create();
//         $user2 = User::factory()->create();

//         $team->add($user);
//         $team->add($user2);

//         $this->assertEquals(2, $team->count());
//     }

//     /** @test */
//     public function a_team_has_a_maximum_size()
//     {
//         $team = Team::factory()->create(['size' => 2]);

//         $user = User::factory()->create();
//         $user2 = User::factory()->create();
//         $team->add($user);
//         $team->add($user2);
//         $this->assertEquals(2, $team->count());

//         $this->expectExceptionMessage('Expected Exception Message');
//         $user3 = User::factory()->create();
//         $team->add($user3);
//     }

//     /** @test */
//     public function a_team_can_add_multiple_members_at_once(){

//         $team = Team::factory()->create();

//         $users = User::factory(1)->create();
//         $team->add($users);
//         $this->assertEquals(2, $team->count());

//     }

//     /** @test */
//     public function a_team_can_remove_a_member()
//     {
//         $team = Team::factory()->create(['size' => 2]);
//         $users = User::factory(2)->create();
//         $team->add($users);
//         $team->remove( $users[0]);
//         $this->assertEquals(1,$team->count());
//     }

//     /** @test */
// public function a_tem_can_remove_more_than_one_member_at_once()
// {
//     $team = Team::factory()->create(['size' => 3]);
//     $users = User::factory(3)->create();
//     $team->add($users);

//     $team->remove( $users->slice(0,2));
//     $this->assertEquals(1,$team->count());

// }

//     /** @test */
//     public function a_team_can_remove_all_members_at_members_at_once(){
//         $team = Team::factory()->create(['size' => 2]);
//         $users = User::factory(2)->create();
//         $team->add($users);
//         $team->remove();
//         $this->assertEquals(0,$team->count());

//     }
}
