<?php
namespace Core\Options;

use Core\Elysa;
use Core\Helper\Colors;

/**
 * Class Verbosity
 * @package Core\Options
 */
class Verbosity
{
    /**
     * @param $level
     * @return bool
     */
    public static function setVerbosity($level = " ")
    {
        $c = new Colors();
        switch ($level) {
            case '1':
            case '2':
            case '3':
                echo "Setting verbosity to level " . $level . "\n\n";
                return true;
            default:
                if ($level == '') {
                    $level = 'N/A';
                }
                echo "\n" . $c->gcs("\t\t\t\t\t\t\t\t\t\t\t\t", "black", "red");
                echo "\n" . $c->gcs("\t\t\t\tError: Unknown verbosity level " . $level . "\t\t\t\t", "black", "red");
                echo "\n" . $c->gcs("\t\t\t\t\t\t\t\t\t\t\t\t", "black", "red") . "\n\n";
                self::displayVerbosityHelp();
                return false;
        }
    }

    private static function displayVerbosityHelp()
    {
        $c = new Colors();
        echo $c->gcs("Usage:", "yellow") . "\n";
        echo "  -o (or --verbosity) <1-3>\n";

        echo "\n";

        echo $c->gcs("Description:", "yellow") . "\n";
        echo "  Sets the verbosity of messages (1: normal, 2: medium, 3: high)\n\n";
    }

}