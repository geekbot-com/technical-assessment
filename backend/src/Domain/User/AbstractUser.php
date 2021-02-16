<?php
declare(strict_types=1);

namespace App\Domain\User;

use App\Application\Middleware\SessionMiddleware;

class AbstractUser 
{
    public function checkIfvalid() {
        if (SessionMiddleware::invalidUser($this)) {
            $this->logError();
        }
    }
}