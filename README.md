en
-----------
# LoanController

The `LoanController.php` is a part of our application responsible for handling all the operations related to loans.

## Methods

### create()

This method is used to create a new loan. It validates the request data and creates a new loan in the database.

### update()

This method is used to update an existing loan. It validates the request data and updates the specified loan in the database.

### delete()

This method is used to delete a loan. It removes the specified loan from the database.

### index()

This method is used to list all loans. It retrieves all loans from the database and returns them in a response.

### show()

This method is used to display a specific loan. It retrieves the specified loan from the database and returns it in a response.

## Usage

To use this controller, you need to send a HTTP request to the appropriate endpoint with the necessary parameters. For example, to create a new loan, you would send a POST request to `/loans` with the loan data in the request body.

## Testing

We have unit tests for all methods in this controller. You can run these tests using the following command:

```bash
php artisan test or vendor/bin/phpunit 

## Start the server 
php -S localhost:8000 -t public

ru
----------------

# LoanController

`LoanController.php` - это часть нашего приложения, отвечающая за обработку всех операций, связанных с кредитами.

## Методы

### create()

Этот метод используется для создания нового кредита. Он проверяет данные запроса и создает новый кредит в базе данных.

### update()

Этот метод используется для обновления существующего кредита. Он проверяет данные запроса и обновляет указанный кредит в базе данных.

### delete()

Этот метод используется для удаления кредита. Он удаляет указанный кредит из базы данных.

### index()

Этот метод используется для вывода списка всех кредитов. Он извлекает все кредиты из базы данных и возвращает их в ответе.

### show()

Этот метод используется для отображения конкретного кредита. Он извлекает указанный кредит из базы данных и возвращает его в ответе.

## Использование

Для использования этого контроллера вам нужно отправить HTTP-запрос на соответствующий конечный точке с необходимыми параметрами. Например, чтобы создать новый кредит, вы должны отправить POST-запрос на `/loans` с данными кредита в теле запроса.

## Тестирование

У нас есть модульные тесты для всех методов этого контроллера. Вы можете запустить эти тесты с помощью следующей команды:

```bash
php artisan test или vendor/bin/phpunit