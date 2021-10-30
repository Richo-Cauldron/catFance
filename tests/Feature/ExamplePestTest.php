<?php

it('examplepesttest', function () {
    $response = $this->get('/');

    $response->assertStatus(200);
});
