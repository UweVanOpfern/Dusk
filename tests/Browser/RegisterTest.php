<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class RegisterTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/register')// Homepage
                    ->assertSee('Register')//On Register check if you find word Laravel
                    ->type('name','Van Opfern')
                    ->type('email','opfern@gmail.com')
                    ->type('password','secret')
                    ->type('password_confirmation','secret')
                    ->press('Register')
                    ->assertPathIs('/home');
        });
    }
}
