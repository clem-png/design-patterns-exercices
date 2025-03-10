<?php

namespace App;

class LiteralBuilder implements QueryBuilderInterface
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
        $literal = "Je sélectionne ";
        $literal .= empty($this->query['select']) ? "tous les champs" : "les champs " . implode(', ', $this->query['select']);
        $literal .= " de la table " . ($this->query['from'] ?? '');
        
        if (!empty($this->query['where'])) {
            $literal .= " où " . implode(' et ', $this->query['where']);
        }
        
        if (isset($this->query['limit'])) {
            $literal .= " avec une limite de " . $this->query['limit'] . " résultats";
        }
        
        return $literal . ".";
    }
}