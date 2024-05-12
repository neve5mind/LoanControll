<?php

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\Loan;
use App\Http\Controllers\LoanController;
use Database\Factories\LoanFactory;
use Illuminate\Http\Request;


class LoanTest extends TestCase
{



    public function testIndex()
    {
        $response = $this->get('/loans');
        
        $this->seeJsonEquals([
            [
            "id"=> 1,
            "amount"=> "1000.00",
            "interest_rate"=> "5.00",
            "term"=> 12,
            "issued_at"=> "2024-05-08",
            "status"=> "active",
            "created_at"=> "2024-05-08T10:54:19.000000Z",
            "updated_at"=> "2024-05-08T10:54:19.000000Z"
            ]
        ]);

        $this->assertEquals(200, $this->response->status());
            
    }
    
    public function testStore()
    {
        $response = $this->post('/loans', [
            'amount' => 2000,
            'interest_rate' => 10,
            'term' => 11,
            'issued_at' => '2024-05-08',
            'status' => 'active'
        ]);

        $this->seeJsonEquals([
            "id"=> 8,
            "amount"=> 2000,
            "interest_rate"=> 10,
            "term"=> 11,
            "issued_at"=> "2024-05-08",
            "status"=> "active",
        ]);

        $this->assertEquals(200, $this->response->status());
    }

    
    public function testShow()
    {
        $response = $this->get('/loans/1');

        $this->seeJsonEquals([
            "id"=> 1,
            "amount"=> "1000.00",
            "interest_rate"=> "5.00",
            "term"=> 12,
            "issued_at"=> "2024-05-08",
            "status"=> "active",
            "created_at"=> "2024-05-08T10:54:19.000000Z",
            "updated_at"=> "2024-05-08T10:54:19.000000Z"
        ]);

        $this->assertEquals(200, $this->response->status());
    }

    
    public function testUpdate()
    {
        $response = $this->put('/loans/1', [
            'amount' => 2000,
            'interest_rate' => 10,
            'term' => 11,
            'issued_at' => '2024-05-08',
            'status' => 'active'
        ]);

        $this->seeJsonEquals([
            "id"=> 1,
            "amount"=> 2000,
            "interest_rate"=> 10,
            "term"=> 11,
            "issued_at"=> "2024-05-08",
            "status"=> "active",
            "created_at"=> "2024-05-08T10:54:19.000000Z",
            "updated_at"=> "2024-05-08T10:54:19.000000Z"
        ]);
    }

    
    public function testDestroy()
    {
        $response = $this->delete('/loans/5');

        $this->assertEquals(200, $this->response->status());
    }
      
} 