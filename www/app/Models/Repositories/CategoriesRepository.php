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
        if (!$model instanceof Category) {
            return -1;
        }
        try {
            $query = 'INSERT INTO `' . $this->table . '`';
            $query .= '(`name`)';
            $query .= ' VALUES (:name)';
            $stmt = $this->handle->getHandle()->prepare($query);
            $stmt->bindValue(
                ':name',
                $model->name,
                PDO::PARAM_STR
            );
            if ($stmt->execute()) {
                return $this->handle->getHandle()
                    ->lastInsertId();
            }
            return -1;
        } catch (PDOException $e) {
            throw new DatabaseException($e);
        }
    }
}
