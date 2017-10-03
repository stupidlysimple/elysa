<?php
namespace Core\Commands;

use Core\Helper\Colors;


/**
 * Class Controller
 * @package Core\Commands
 */
class Controller
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
            case 'create':
                // do something
                $success = true;
                self::displayCreateHelp();
                break;
            case 'rename':
                // do something
                $success = true;
                self::displayRenameHelp();
                break;
            case 'delete':
                // do something
                $success = true;
                self::displayDeleteHelp();
                break;
        }

        if (! $success) {
            self::displayControllerHelp();
        }

        return true;
    }

    public static function displayRenameHelp()
    {
        $c = new Colors();
        echo $c->gcs("Usage:", "yellow") . "\n";
        echo "  controller rename <old_name> <new_name>\n";

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

    public static function displayCreateHelp()
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

    public static function displayDeleteHelp()
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

    public static function displayControllerHelp()
    {
        $c = new Colors();
        echo $c->gcs("Usage:", "yellow") . "\n";
        echo "  controller command [arguments]\n";

        echo "\n";

        echo $c->gcs("Available Commands:", "yellow") . "\n";

        echo $c->gcs("  create\t", "green");
        echo "Create a new controller\n";

        echo $c->gcs("  rename\t", "green");
        echo "Rename an existing controller\n";

        echo $c->gcs("  delete\t", "green");
        echo "Delete an existing controller\n";

        echo "\n";

        echo $c->gcs("Description:", "yellow") . "\n";
        echo "  Create, rename or delete Controllers in the framework\n\n";
    }
}