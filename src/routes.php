<?php

return [
    '~^articles/(\d+)$~' => [\MyProject\controller\ArticlesController::class, 'view'],
    '~^articles/(\d+)/edit$~' => [\MyProject\controller\ArticlesController::class, 'edit'],
    '~^articles/add$~' => [\MyProject\controller\ArticlesController::class, 'add'],
    '~^users/register$~' => [\MyProject\controller\UsersController::class, 'signUp'],
    '~^$~' => [\MyProject\controller\MainController::class, 'main'],

];

?>