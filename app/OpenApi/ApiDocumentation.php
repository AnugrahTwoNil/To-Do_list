<?php
 namespace App\OpenApi;
 use OpenApi\Attributes as OA;
 #[OA\Info(
    title: 'Todo API',
    version: '1.0.0',
    description: 'API documentation for the TodoList application.',
    )]
#[OA\Server(
    url: 'http://localhost:8000/api',
    description: 'Local development server',
    )]
class ApiDocumentation
{
    // This class is used to generate OpenAPI documentation for the Todo API.
}