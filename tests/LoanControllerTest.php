<?php

namespace Tests\Unit;

use Tests\TestCase;
use vendor\Illuminate\Contracts\Foundation\Testing\RefreshDatabase;
use App\Models\Loan;
//use Illuminate\Foundation\Testing\TestCase;

class LoanControllerTest extends TestCase
{
    //use RefreshDatabase;

    public function testIndex(): void
    {
        // Создание нескольких тестовых объектов Loan
        $loans = Loan::factory()->count(3)->create();

        // Выполнение GET запроса на /loans
        $response = $this->get('/loans');

        // Проверка статус кода ответа
        $response->assertStatus(200);

        // Проверка, что возвращены все объекты Loan
        $response->assertJsonCount(3);
    }

    public function testStore()
    {
        // Подготовка данных для создания нового объекта Loan
        $loanData = [
            'amount' => 1000,
            'term' => 12,
            // Добавьте сюда остальные поля, которые ожидает ваш метод store
        ];

        // Выполнение POST запроса на /loans с данными для создания нового объекта
        $response = $this->post('/loans', $loanData);

        // Проверка статус кода ответа
        $response->assertStatus(201);

        // Проверка, что объект Loan был создан
        $this->assertDatabaseHas('loans', $loanData);
    }

    public function testShow()
    {
        // Создание тестового объекта Loan
        $loan = Loan::factory()->create();

        // Выполнение GET запроса на /loans/{id}, где {id} - идентификатор созданного объекта
        $response = $this->get('/loans/' . $loan->id);

        // Проверка статус кода ответа
        $response->assertStatus(200);

        // Проверка, что возвращенный объект Loan соответствует созданному
        $response->assertJson($loan->toArray());
    }

    public function testUpdate()
    {
        // Создание тестового объекта Loan
        $loan = Loan::factory()->create();

        // Новые данные для обновления объекта Loan
        $newData = [
            'amount' => 2000,
            'term' => 24,
            // Добавьте сюда остальные поля, которые ожидает ваш метод update
        ];

        // Выполнение PUT запроса на /loans/{id} с новыми данными
        $response = $this->put('/loans/' . $loan->id, $newData);

        // Проверка статус кода ответа
        $response->assertStatus(200);

        // Обновление данных тестового объекта Loan
        $loan->refresh();

        // Проверка, что данные объекта Loan были обновлены
        $this->assertEquals($newData['amount'], $loan->amount);
        $this->assertEquals($newData['term'], $loan->term);
        // Проверьте остальные поля
    }

    public function testDestroy()
    {
        // Создание тестового объекта Loan
        $loan = Loan::factory()->create();

        // Выполнение DELETE запроса на /loans/{id} для удаления объекта
        $response = $this->delete('/loans/' . $loan->id);

        // Проверка статус кода ответа
        $response->assertStatus(204);

        // Проверка, что объект Loan был удален из базы данных
        $this->assertDatabaseMissing('loans', ['id' => $loan->id]);
    }
}
