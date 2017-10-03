<?php
namespace Core\Helper;

/**
 * Class ArgsIdentifier
 * @package Core\Helper
 */
class ArgsIdentifier
{
    /**
     * Returns true if the first argument is an option or false if otherwise
     *
     * @param $first
     * @return bool
     */
    public static function isOption($first)
    {
        if (strpos($first, '-') !== false || strpos($first, '--') !== false) {
            return true;
        } else {
            return false;
        }
    }
}