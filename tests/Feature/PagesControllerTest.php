<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PagesControllerTest extends TestCase
{
     /** 
     * @test 
     */ 
    public function it_returns_register_page() 
    { 
        $response = $this->get(route('register')); 
        $response->assertSuccessful(); 
        $response->assertViewIs('auth.register'); 
    } 

     /** 
     * @test 
     */ 
    public function it_returns_login_page() 
    { 
        $response = $this->get(route('login')); 
        $response->assertSuccessful(); 
        $response->assertViewIs('auth.login'); 
    } 


}
