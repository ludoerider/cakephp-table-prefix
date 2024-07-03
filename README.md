# cakephp-table-prefix
Ttable or database prefix for CakePHP 5


## Implement :
In Model\Table directory, Replace class "Table" by "PrefixedTable", and add "use App\Util\PrefixedTable;"

```
use App\Util\PrefixedTable;

class ArticlesTable extends PrefixedTable /*Table*/
{
  ...
}
```
