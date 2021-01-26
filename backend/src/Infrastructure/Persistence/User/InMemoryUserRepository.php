<?php
declare(strict_types=1);

namespace App\Infrastructure\Persistence\User;

use App\Domain\User\User;
use App\Domain\User\UserNotFoundException;
use App\Domain\User\UserRepository;

class InMemoryUserRepository implements UserRepository
{
    /**
     * @var User[]
     */
    private $users;

    /**
     * InMemoryUserRepository constructor.
     *
     * @param array|null $users
     */
    public function __construct(array $users = null)
    {
        $this->users = $users ?? [
            1 => new User(1, 'bill.gates', 'Bill', 'R2F0ZXM='),
            2 => new User(2, 'steve.jobs', 'Steve', 'Sm9icw=='),
            3 => new User(3, 'mark.zuckerberg', 'Mark', 'WnVja2VyYmVyZw=='),
            4 => new User(4, 'evan.spiegel', 'Evan', 'U3BpZWdlbA=='),
            5 => new User(5, 'jack.dorsey', 'Jack', 'RG9yc2V5'),
            6 => new User(6, 'john.doe', 'John', 'VHJ5SGFyZGVyIQ=='),
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function findAll(): array
    {   
        return array_values(array_slice($this->users,0,5));
    }

    /**
     * {@inheritdoc}
     */
    public function findUserOfId(int $id): User
    {
        if (!isset($this->users[$id])) {
            throw new UserNotFoundException();
        }

        return $this->users[$id];
    }
}
