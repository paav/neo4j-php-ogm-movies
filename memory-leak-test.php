<?php

// list-persons.php

require_once 'bootstrap.php';

$personsRepository = $entityManager->getRepository(\Demo\Person::class);

const ITERATIONS_COUNT = 100000;
$i = 0;
echo sprintf("Initial memory usage: %s\n", memory_get_usage());

do {
    $person = $personsRepository->find(1);
    $i++;
} while ($i < ITERATIONS_COUNT);

echo sprintf("Memory usage after %d iterations: %s\n", ITERATIONS_COUNT, memory_get_usage());