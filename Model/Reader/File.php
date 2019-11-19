<?php

namespace Ace\ArgumentPattern\Model\Reader;

use Ace\ArgumentPattern\Api\ReaderInterface;

class File implements ReaderInterface
{


    /**
     * @var \Ace\ArgumentPattern\Api\ParserInterface
     */
    private $parser;

    public function __construct (\Ace\ArgumentPattern\Api\ParserInterface $parser)
    {
        $this->parser = $parser;
    }

    /**
     * Archive the read data
     */
    public function archive ()
    {
        echo "file archive";

    }

    /**
     * Read import data
     *
     * @return array
     */
    public function read ()
    {
        echo "file read";
    }
}
