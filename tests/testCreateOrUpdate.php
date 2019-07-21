<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class UserTest extends TestCase
{
    
    
    public function CreateOrUpdateTest()
    {
	    $data = [
		    'role'==> 'CUSTOMER_ROLE_ID',
			'name' ==>'Mokhtar',
            'company_id'==> '',
            'department_id'=>= '',
            'email'==>'sidi@gmail.com',
           'dob_or_orgid'==>'',
            'phone'==>'002253693',
            'mobile'==>'00000000'
        ];
      
        $UserRepo = new UserRepository(new User);
        $user = $UserRepo->createCarousel(null,$data);
      
        $this->assertInstanceOf(User::class, $User);
        $this->assertEquals($data['role'], $User->role);
		$this->assertEquals($data['name'], $User->name);
		$this->assertEquals($data['company_id'], $User->company_id);
		$this->assertEquals($data['department_id'], $User->department_id);
		$this->assertEquals($data['email'], $User->email);
		$this->assertEquals($data['dob_or_orgid'], $User->dob_or_orgid);
		$this->assertEquals($data['phone'], $User->phone);
		$this->assertEquals($data['mobile'], $User->mobile);
		
	   // UserRepository
        $this->assertTrue(true);
    }
} 	

?>
