<?php

namespace App\OpenApi;

use OpenApi\Attributes as OA;

#[OA\Info(
    title: 'Dokumentasi API Todo-List',
    version: '1.0.0',
    description: 'Dokumentasi API untuk aplikasi todo-list sederhana.'
)]
#[OA\Server(
    url: 'http://localhost:8000',
    description: 'Local server'
)]
class ApiDocumentation
{
    #[OA\Post(
        path: '/api/register',
        summary: 'Register a new user',
        tags: ['Auth'],
        responses: [new OA\Response(response: 201, description: 'User registered')]
    )]
    public function register() {}

    #[OA\Post(
        path: '/api/login',
        summary: 'Login',
        tags: ['Auth'],
        responses: [new OA\Response(response: 200, description: 'Login successful')]
    )]
    public function login() {}

    #[OA\Post(
        path: '/api/logout',
        summary: 'Logout',
        tags: ['Auth'],
        responses: [new OA\Response(response: 200, description: 'Logged out')]
    )]
    public function logout() {}

    #[OA\Get(
        path: '/api/profile',
        summary: 'Get current user profile',
        tags: ['Auth'],
        responses: [new OA\Response(response: 200, description: 'OK')]
    )]
    public function profile() {}
}