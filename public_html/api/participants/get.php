<?php

require '../../../bootloader.php';

$response = new \Core\Api\Response();

$model = new App\Participants\Model();

$conditions = $_POST ?? [];

$participants = $model->get($conditions);
if ($participants !== false) {
    foreach ($participants as $person) {
        $response->addData($person->getData());
    }
} else {
    $response->addError('Could not pull data from database!');
}

$response->print();