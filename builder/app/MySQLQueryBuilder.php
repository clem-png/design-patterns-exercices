<?php

namespace App;

class MySqlQueryBuilder implements QueryBuilderInterface
{
    protected $query = [];

    public function select(array $fields): self
    {
        $this->query['select'] = $fields;
        return $this;
    }

    public function from(string $table): self
    {
        $this->query['from'] = $table;
        return $this;
    }

    public function where(string $condition): self
    {
        $this->query['where'][] = $condition;
        return $this;
    }

    public function limit(int $limit): self
    {
        $this->query['limit'] = $limit;
        return $this;
    }

    public function getSQL(): string
    {
        $sql = "SELECT " . implode(', ', $this->query['select'] ?? ['*']);
        $sql .= " FROM " . ($this->query['from'] ?? '');
        
        if (!empty($this->query['where'])) {
            $sql .= " WHERE " . implode(' AND ', $this->query['where']);
        }
        
        if (isset($this->query['limit'])) {
            $sql .= " LIMIT " . $this->query['limit'];
        }
        
        return $sql;
    }
}