<?php

beforeEach(function () {
    $this->userRepository =2;
});

test('example', function () {
    expect($this->userRepository )->toBeInt();
});
