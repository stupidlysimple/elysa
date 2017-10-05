<?php
/**
 * StupidlySimple - A PHP Framework For Lazy Developers
 *
 * @package        StupidlySimple
 * @author        Fariz Luqman <fariz.fnb@gmail.com>
 * @copyright    2017 Fariz Luqman
 * @license        MIT
 * @link        https://stupidlysimple.github.io/
 */
namespace Core\Commands;

use Core\Helper\Colors;


/**
 * Class Controller
 * @package Core\Commands
 */
class Database
{
    /**
     * @param $arg
     * @param $argv
     * @param $i
     * @return bool
     */
    public static function applyCommand($arg, $argv, $i)
    {
        $success = false;

        switch ($arg) {
            case 'configure:database':
                // do something
                $success = true;
                self::showConfigureHelp();
                break;
            case 'create:database':
                // do something
                $success = true;
                self::showCreateHelp();
                break;
            case 'delete:database':
                // do something
                $success = true;
                self::showDeleteHelp();
                break;
        }

        if (! $success) {
            self::showDatabaseHelp();
        }

        return true;
    }

    /**
     *
     */
    public static function showConfigureHelp()
    {
        $c = new Colors();
        echo $c->gcs("Usage:", "yellow") . "\n";
        echo "  configure:database [options]\n";
        echo "  database configure:database [options]\n";

        echo "\n";

        echo $c->gcs("Options:", "yellow") . "\n";
        echo $c->gcs("  --enable=<value>", "green");
        echo "\t\tEnable or disable the database (Value: true or 1, false or 0)\n";

        echo $c->gcs("  --set-host=<value>", "green");
        echo "\t\tSet the host (Value: localhost, etc..)\n";

        echo $c->gcs("  --set-driver=<value>", "green");
        echo "\t\tSet the driver (Value: mysql, sqlsrv, postgresql, sqlite)\n";

        echo $c->gcs("  --set-database=<value>", "green");
        echo "\tSet the database name (Value: your database name)\n";

        echo $c->gcs("  --set-username=<value>", "green");
        echo "\tSet the database username (Value: your username)\n";

        echo $c->gcs("  --set-password=<value>", "green");
        echo "\tSet the database password (Value: your password)\n";

        echo $c->gcs("  --set-charset=<value>", "green");
        echo "\t\tSet the database charset (Value: utf8, etc..)\n";

        echo $c->gcs("  --set-collation=<value>", "green");
        echo "\tSet the database collation (Value: utf8_unicode_ci, etc..)\n";

        echo $c->gcs("  --set-prefix=<value>", "green");
        echo "\t\tSet the database prefix (Value: prefix_, etc..)\n";

        echo "\n";

        echo $c->gcs("Description:", "yellow") . "\n";
        echo "  Changes the value in the config/database.php file\n\n";
    }

    /**
     *
     */
    public static function showCreateHelp()
    {
        $c = new Colors();
        echo $c->gcs("Usage:", "yellow") . "\n";
        echo "  controller create <name>\n";

        echo "\n";

        echo $c->gcs("Options:", "yellow") . "\n";
        echo $c->gcs("  --no-dump-autoload", "green");
        echo " (-n) \tDon't issue the \"composer dump-autoload\" command. \n";

        echo "\n";

        echo $c->gcs("Description:", "yellow") . "\n";
        echo "  Create Controllers in the framework\n\n";
    }

    /**
     *
     */
    public static function showDeleteHelp()
    {
        $c = new Colors();
        echo $c->gcs("Usage:", "yellow") . "\n";
        echo "  controller delete <name>\n";

        echo "\n";

        echo $c->gcs("Options:", "yellow") . "\n";
        echo $c->gcs("  --force-yes", "green");
        echo " (-y) \t\tOverride all confirmations. \n";
        echo $c->gcs("  --no-dump-autoload", "green");
        echo " (-n) \tDon't issue the \"composer dump-autoload\" command. \n";

        echo "\n";

        echo $c->gcs("Description:", "yellow") . "\n";
        echo "  Delete Controllers in the framework\n\n";
    }

    /**
     *
     */
    public static function showImportHelp()
    {
        $c = new Colors();
        echo $c->gcs("Usage:", "yellow") . "\n";
        echo "  controller set <old_name> <new_name>\n";

        echo "\n";

        echo $c->gcs("Options:", "yellow") . "\n";
        echo $c->gcs("  --force-yes", "green");
        echo " (-y) \t\tOverride all confirmations. \n";
        echo $c->gcs("  --no-dump-autoload", "green");
        echo " (-n) \tDon't issue the \"composer dump-autoload\" command. \n";

        echo "\n";

        echo $c->gcs("Description:", "yellow") . "\n";
        echo "  Rename Controllers in the framework\n\n";
    }

    /**
     *
     */
    public static function showDatabaseHelp()
    {
        $c = new Colors();
        echo $c->gcs("Usage:", "yellow") . "\n";
        echo "  database command [arguments]\n";

        echo "\n";

        echo $c->gcs("Available Commands:", "yellow") . "\n";
        echo $c->gcs("Database\n", "");
        echo $c->gcs("  configure:database\t", "green");
        echo "Configure database settings (config/database.php)\n";
        echo $c->gcs("  create:database\t", "green");
        echo "Create a new database\n";
        echo $c->gcs("  delete:database\t", "green");
        echo "Delete an existing database\n";
        echo $c->gcs("  import:database\t", "green");
        echo "Import to an existing database\n";


        echo "\n";

        echo $c->gcs("Migration\n", "");
         echo $c->gcs("  apply:migration\t", "green");
        echo "Apply database migrations\n";
        echo $c->gcs("  create:migration\t", "green");
        echo "Create a database migration\n";
        echo $c->gcs("  delete:migration\t", "green");
        echo "Delete a database migration\n";
        echo $c->gcs("  undo:migration\t", "green");
        echo "Undo database migrations\n";



        echo "\n";

        echo $c->gcs("Description:", "yellow") . "\n";
        echo "  Create, rename or delete Controllers in the framework\n\n";
    }
}