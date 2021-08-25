<?php

use function Pest\Faker\faker;

it('generates a name using faker', function () {
    $name = faker()->name;

    // Same as:
    $name = $this->faker()->name;

    assertIsString($name);
});