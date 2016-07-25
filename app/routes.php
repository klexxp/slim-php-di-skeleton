<?php

$app->group('/app', function () {

    $this->map(['GET', 'POST'], '', ['App\Controller\AppController', 'all']);
});
