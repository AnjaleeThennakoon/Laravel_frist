<?php

//test('the application returns a successful response', function () {
//    $response = $this->get('/');
//
//    $response->assertStatus(200);
//});


use App\Models\User;

it('registers a user', function () {
    visit('/register')
        ->fill('name','bob ')
        ->fill('email','jane@gmail.com')
        ->fill('password','12345678')
        ->press('@register-button')
        ->assertPathis('/ideas');


    expect(User::where('email','jane@example.com')->exists())->toBe(true);

    $this->assertAuthenticated();

});
