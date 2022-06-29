<?php

include __DIR__ . '/db.php';

// mettere la funzione header sempre prima del primo echo o dell'HTML
header('Content-Type: application/json');

echo json_encode($data);
