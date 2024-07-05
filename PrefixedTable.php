<?php
namespace App\Util;

use Cake\ORM\Table;

class PrefixedTable extends Table
{
    protected $tablePrefix = null;

    public function initialize(array $options): void
    {
        parent::initialize($options);

        $this->tablePrefix = $this->getConnection()->config()['table_prefix'] ?? null;
    }

    public function setTable(string $table)
    {
        if (null !== $this->tablePrefix) {
            $table = $this->tablePrefix . $table;
        }

        return parent::setTable($table);
    }
}
