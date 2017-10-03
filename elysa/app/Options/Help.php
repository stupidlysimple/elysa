<?php
/**
 * Created by PhpStorm.
 * User: farizluqman
 * Date: 02/10/2017
 * Time: 8:58 AM
 */

namespace Core\Options;

use Core\Elysa;
use Core\Helper\Colors as Colors;

/**
 * Class HelpAction
 * @package Core\Actions
 */
class Help
{
    public static function displayHelp()
    {
        // Create new Colors class
        $c = new Colors();

        // Generated at:
        // http://patorjk.com/software/taag/#p=display&f=Small%20Slant&t=StupidlySimple
        echo '
        ______            _    ____     _____            __   
       / __/ /___ _____  (_)__/ / /_ __/ __(_)_ _  ___  / /__ 
      _\ \/ __/ // / _ \/ / _  / / // /\ \/ /  \' \/ _ \/ / -_)
     /___/\__/\_,_/ .__/_/\_,_/_/\_, /___/_/_/_/_/ .__/_/\__/ 
                 /_/            /___/           /_/           

        ';

        echo $c->gcs("Elysa", "green");
        echo $c->gcs(" version ", "");
        echo $c->gcs("0.1.1", "yellow");
        echo $c->gcs(" for ", "", "");
        echo $c->gcs("StupidlySimple Framework", "green", "") . "\n";
        echo "\t\t\t(Platform: " . Elysa::getOperatingSystem() . ")\n\n";

        echo $c->gcs("Usage:", "yellow", "") . "\n";
        echo "  [options]\n";
        echo "  [options] command [arguments]\n";
        echo "  [options] [arguments] command [arguments]\n";

        echo "\n";

        echo $c->gcs("Options:", "yellow") . "\n";
        echo $c->gcs("  --developer", "green");
        echo " (-d) \tTurn on developer options. \n";
        echo $c->gcs("  --force-yes", "green");
        echo " (-y) \tOverride all confirmations. \n";
        echo $c->gcs("  --help", "green");
        echo " (-h) \t\tDisplay this information. \n";
        echo $c->gcs("  --quiet", "green");
        echo " (-q) \t\tQuiet mode or to display no output on the console. \n";
        echo $c->gcs("  --set-version", "green");
        echo " (-v) \tTo override the framework version (for older versions < 0.5). \n";
        echo $c->gcs("  --verbosity", "green");
        echo " (-o) \tTo set the verbosity of Elysa. \n";

        echo "\n";

        echo $c->gcs("Available Commands:", "yellow") . "\n";

        echo $c->gcs("For new installation\n", "");

        echo $c->gcs("  install\t\t", "green");
        echo "Install StupidlySimple Framework using Composer\n";

        echo "\n";

        echo $c->gcs("For existing installation\n", "");

        echo $c->gcs("  update\t\t", "green");
        echo "Update the composer.lock, and all framework dependencies to the \n\t\t\tlatest version\n";
        echo $c->gcs("  upgrade\t\t", "green");
        echo "Upgrade the framework to the latest version (use with --set-version\n\t\t\tor -v for version < 0.5)\n";
        echo $c->gcs("  database\t\t", "green");
        echo "Create or manage the database \n";
        echo $c->gcs("  controller\t\t", "green");
        echo "Create or manage the Controller \n";
        echo $c->gcs("  model\t\t\t", "green");
        echo "Create or manage the Model \n";
        echo $c->gcs("  service\t\t", "green");
        echo "Create or manage the Service \n";
    }
}