<?php
/**
 * @author: liuchg
 *
 */

namespace App\Console\Commonds;


use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class GenerateModelAnnotation33 extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'GMA {tableName}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '生成模型property注释,使得IDE有模型属性提示!';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        //
        $tableName  = $this->argument('tableName');
        $dbName     = config('database');
        $columns    = DB::select("
SELECT COLUMN_NAME, DATA_TYPE , COLUMN_COMMENT
FROM INFORMATION_SCHEMA.COLUMNS
WHERE table_name = '{$tableName}'
AND table_schema = '{$dbName['connections']['mysql']['database']}'");
        $annotation = "";
        foreach ($columns as $column) {
            $type = 'string';
            if (in_array($column->DATA_TYPE, ['int', 'tinyint', 'smallint', 'mediumint', 'bigint'])) {
                $type = 'int';
            } elseif (in_array($column->DATA_TYPE, ['float', 'double', 'decimal'])) {
                $type = 'float';
            }
            $columnName = $column->COLUMN_NAME;
            if (in_array($columnName, ['created_at', 'updated_at', 'deleted_at'])) {
                $type = '\\Carbon\\Carbon';
            }
            $columnComment = $column->COLUMN_COMMENT;
            $annotation    .= sprintf("\n * @property   %s  \$%s  %s", $type, $columnName, $columnComment);
        }
        $annotation .= "\n";
        echo($annotation);
//        file_put_contents('annotation',$annotation);
    }
}
