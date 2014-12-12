<?php

/*
 * This file is part of the ONGR package.
 *
 * (c) NFQ Technologies UAB <info@nfq.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace ONGR\ConnectionsBundle\Import;

use ONGR\ConnectionsBundle\Pipeline\AbstractPipelineExecuteService;

/**
 * ImportService class - creates pipeline for the import process and executes it.
 */
class ImportService extends AbstractPipelineExecuteService
{
    /**
     * Runs import process.
     *
     * @param string $target
     *
     * @return void
     */
    public function import($target = null)
    {
        $this->executePipeline('import.', $target);
    }
}
