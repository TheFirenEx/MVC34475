<?php

namespace Models\Repositories;

use PDO;
use Models\Model;
use PDOException;
use Models\Category;
use Exceptions\DatabaseException;
use Models\Repositories\Repository;

class CategoriesRepository extends Repository
{
    protected $table = 'categories';

    public function create(array $arguments): Category
    {
        return new Category($arguments);
    }

    public function insert(Model $model): int
    {
        // TODO: zapisywanie kategorii do bazy
        return -1;
    }
}
