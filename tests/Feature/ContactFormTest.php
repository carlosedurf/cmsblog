<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ContactFormTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testIfExitsFieldsInPage()
    {
        $this
            ->get( route('site.contact') )
            ->assertStatus(200)
            ->assertSee('Nome completo')
            ->assertSee('Email')
            ->assertSee('Mensagem')
            ->assertSee('Enviar mensagem');
    }

    public function testIfSuccessSubmitContact()
    {
        $data = [
            'name'      =>  'Fulano',
            'email'     =>  'fulano@mail.com',
            'message'   =>  'Parabens pelo website',
        ];

        $this
            ->post( route('site.contact.form'), $data )
            ->assertStatus(200);
    }

}
