<?php

it('return a successful response', function () {
    visit('/')->assertSee('welcome');

});
