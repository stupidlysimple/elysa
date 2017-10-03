<?php
namespace Core;

use Core\Helper\ArgsIdentifier as Identifier;
use Core\Helper\Colors;
use Core\Helper\System;

/**
 * Class Elysa
 */
class Elysa
{
    private static $operatingSystem = "UNKNOWN";
    private $halt = false;

    /**
     * @return string
     */
    public static function getOperatingSystem()
    {
        return self::$operatingSystem;
    }

    /**
     * Elysa constructor.
     */
    public function __construct()
    {
        self::$operatingSystem = System::getOS();
    }

    /**
     * @param $argc
     * @param $argv
     */
    public function parse($argc, $argv)
    {
        for ($i = 0; $i < $argc; $i++) {
            $is_option = Identifier::isOption($argv[$i]);
            if ($is_option) {
                $this->applyOption($argv[$i], $argv[$i + 1]);
            } else {
                $this->applyCommand($argv[$i], $argv, $i);
            }

            if ($this->halt) {
                die();
            }
        }

        if (!$this->halt) {
            Options\Help::displayHelp();
        }
    }

    /**
     * @param bool $halt
     */
    public function setHalt($halt = true)
    {
        $this->halt = $halt;
    }

    /**
     * @param $arg
     * @param $nextArg
     */
    private function applyOption($arg, $nextArg)
    {
        switch ($arg) {
            case '-v':
            case '--set-version':
                echo "Set version \n";
                return;
            case '-h':
            case '--help':
                Options\Help::displayHelp();
                $this->setHalt();
                return;
            case '-q':
            case '--quiet':
                // enable quiet mode
                return;
            case '-o':
            case '--verbosity':
                $success = Options\Verbosity::setVerbosity($nextArg);
                if (!$success) {
                    $this->setHalt();
                }
                return;
            default:
                $c = new Colors();
                echo "\n" . $c->gcs("\tUnknown option " . $arg . "\t\t", "black", "red") . "\n\n";
                Options\Help::displayHelp();
                $this->setHalt();
        }
    }

    /**
     * @param $arg
     * @param $argv
     * @param $i
     */
    private function applyCommand($arg, $argv, $i)
    {
        switch ($arg) {
            case 'controller':
            case 'Controller':
                Commands\Controller::applyCommand($argv[$i + 1], $argv, $i + 1);
                $this->setHalt();
                break;
            case 'model':
            case 'Model':
                Commands\Model::applyCommand($argv[$i + 1], $argv, $i + 1);
                break;
        }
    }
}