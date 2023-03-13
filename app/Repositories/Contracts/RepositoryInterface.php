<?php

namespace App\Repositories\Contracts;

/**
 * Interface BaseRepositoryInterface
 *
 * @package App\Repositories
 */
interface RepositoryInterface
{
    /**
     * Find all records that match a given conditions
     *
     * @param array $conditions
     *
     * @return Model[]
     */
    public function find(array $conditions = []);

    /**
     * Create specific record that matches a given conditions
     *
     * @param array $conditions
     *
     * @return Model
     */
    public function create(array $conditions);
}
