<?php
declare(strict_types=1);

namespace Yushenkov\PackageTest;

use Doctrine\Migrations\Tools\Console\Command\MigrateCommand;

class Helper
{
    public function hello()
    {
        echo MigrateCommand::class;
    }
}