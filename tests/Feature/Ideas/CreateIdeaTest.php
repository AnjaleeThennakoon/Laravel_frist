<?php

test('guests are redirected to login from the create idea page', function () {
    $response = $this->get(route('ideas.create'));

    $response->assertRedirect(route('login'));
});