<?php
namespace Olive\Tools;

use Olive\Tools;

class Packages
{
    public static function getPackages($path)
    {
        $db = $path . '/composer/installed.json';
        if (is_dir($path) and file_exists($db)) {
            return Tools::getJsonFile($db);
        }

        return [];
    }
}
