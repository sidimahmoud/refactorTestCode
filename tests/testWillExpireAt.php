<?php

use App\TeHelper;
use Carbon\Carbon;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class PostTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }
    /** @test */
    public function testTeHelperWillExpireAt(){
        $due_time= Carbon::now();
        $start_time= Carbon::now()->subWeek();
        $helper = new TeHelper();
        $result=$helper->willExpireAt($due_time,$start_time);
        $testHours= Carbon::now()->subHours(48)->format('Y-m-d H:i:s');;
        $this->assertSame(
            $testHours,
            $result
        );
    }
     /** @test */
    public function test(){ 

    }
}
