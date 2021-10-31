<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class userTest extends TestCase
{
    use RefreshDatabase;
    /** @test */
    public function some_user_test()
    {
        $user1 = User::create([
            'name' => 'Jdoe',
            'email' => 'JD@example.com',
            'password' => 'password',
        ]);

        $user2 = User::create([
            'name' => 'Janedoe',
            'email' => 'JaneD@example.com',
            'password' => 'password',
        ]);

        $this->assertTrue($user1->name != $user2->name);
        $this->assertCount(2, User::all());
        dump(DB::getDatabaseName());
    }
    
}
