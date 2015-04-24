<?php

/*
 * This file is part of the ONGR package.
 *
 * (c) NFQ Technologies UAB <info@nfq.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace ONGR\ConnectionsBundle\Document;

use ONGR\ElasticsearchBundle\Annotation as ES;
use ONGR\ElasticsearchBundle\Document\AbstractDocument;

/**
 * Represents key / value pair, key is also document id.
 *
 * @ES\Document(type="pair")
 */
class Pair extends AbstractDocument
{
    /**
     * @var string Serialized stored value.
     *
     * @ES\Property(name="value", type="string", searchAnalyzer="standard")
     */
    private $value;

    /**
     * @return string
     */
    public function getValue()
    {
        return unserialize($this->value);
    }

    /**
     * @param string $value
     */
    public function setValue($value)
    {
        $this->value = serialize($value);
    }
}
