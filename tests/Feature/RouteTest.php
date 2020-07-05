<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RouteTest extends TestCase
{

    public function testMain()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function testNewsPageFailed()
    {
        $response = $this->get('/news');

        $response->assertStatus(404);
    }

    public function testAbout()
    {
        $response = $this->get('/about');

        $response->assertStatus(200);
    }

    public function testNewsAdd()
    {
        $response = $this->get('/news/add');

        $response->assertHeader('Content-Type', 'text/html; charset=UTF-8');
    }

    public function testNewsUnavailableNews()
    {
        $response = $this->get('/news/item/1000');

        $response->assertStatus(500);
    }

    public function testNewsSave()
    {
        $response = $this->post('/news/save', [

        ]);

        $response->assertStatus(302);
    }

    public function testNewsEdit()
    {
        $response = $this->get('/news/edit/1');

        $response->assertStatus(200);
    }

    public function testCategories()
    {
        $response = $this->get('/categories');

        $response->assertStatus(200);
    }

    public function testCategoryView()
    {
        $response = $this->get('/categories/view/1');

        $response->assertStatus(200);
    }

    public function testCategoryEdit()
    {
        $response = $this->get('/categories/edit/2');

        $response->assertStatus(500);
    }

    public function testContact()
    {
        $response = $this->get('/contact');

        $response->assertStatus(200);
    }

    public function testOrder()
    {
        $response = $this->get('/order');

        $response->assertStatus(200);
    }
}
