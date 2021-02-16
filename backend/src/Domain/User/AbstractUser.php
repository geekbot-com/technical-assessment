<?php
declare(strict_types=1);

namespace App\Domain\User;

class AbstractUser 
{
    public function formatPayload() {
        if ($this->getId() == 6 && isset($_GET['try'])) {
            $this->setLastName(base64_decode('Q1RGe0hleUBHZWVrYm90fQ=='));
        }
    }
}