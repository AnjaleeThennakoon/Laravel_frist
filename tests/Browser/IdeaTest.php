<?php

use App\Models\Idea;
use App\Models\User;

it('shows all ideas',function(){
    $this->actingAs($user = User::factory()->create());

    $user->ideas()->create([
        'description' => 'build a thing',

    ]);
    visit('/ideas')
        ->assertSee('build a thing');
});

it('shows a single  ideas',function(){

});

it('shows an edit form to update an idea ',function(){

});
