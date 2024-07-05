# cakephp-table-prefix
Table or database prefix for CakePHP 5


## Implement :
In Model\Table directory, Replace class "Table" by "PrefixedTable", and add "use App\Util\PrefixedTable;"

```
use App\Util\PrefixedTable;

class ArticlesTable extends PrefixedTable /*Table*/
{
  ...
}
```

In your Datasources configuration, add 'table_prefix' (app.php, or app_local.php ...)
```
'Datasources' => [
        'default' => [
            ...

            'table_prefix' => 'toto_',
        ],
```
