<?php

namespace Models\Repositories;

use PDO;
use Models\Model;
use PDOException;
use Models\Product;
use Exceptions\DatabaseException;
use Models\Repositories\Repository;

class ProductsRepository extends Repository
{
    protected $table = 'products';

    public function create(array $arguments): Product
    {
        return new Product($arguments);
    }

    public function insert(Model $model): int
    {
        if (!$model instanceof Product) {
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
