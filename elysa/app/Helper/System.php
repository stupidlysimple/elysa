<?php
/**
 * Created by PhpStorm.
 * User: farizluqman
 * Date: 02/10/2017
 * Time: 11:10 PM
 */

namespace Core\Helper;

/**
 * Class System
 * @package Core\Helper
 */
class System {

    const OS_UNKNOWN = "UNKNOWN";
    const OS_WIN = "WIN";
    const OS_LINUX = "LINUX";
    const OS_OSX = "OSX";

    /**
     * @return int
     */
    static public function getOS() {
        switch (true) {
            case stristr(PHP_OS, 'DAR'): return self::OS_OSX;
            case stristr(PHP_OS, 'WIN'): return self::OS_WIN;
            case stristr(PHP_OS, 'LINUX'): return self::OS_LINUX;
            default : return self::OS_UNKNOWN;
        }
    }

}