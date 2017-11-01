<?php

namespace DOOP\Modules\Process;

use DOOP\Modules\Contracts\RunableInterface;
use DOOP\Modules\Repository;

class Runner implements RunableInterface
{
    /**
     * The module instance.
     *
     * @var \DOOP\Modules\Repository
     */
    protected $module;

    /**
     * The constructor.
     *
     * @param \DOOP\Modules\Repository $module
     */
    public function __construct(Repository $module)
    {
        $this->module = $module;
    }

    /**
     * Run the given command.
     *
     * @param string $command
     */
    public function run($command)
    {
        passthru($command);
    }
}
