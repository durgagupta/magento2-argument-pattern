<?php

namespace Ace\ArgumentPattern\Model\Reader\Parser;

use Ace\ArgumentPattern\Api\ParserInterface;

class Yaml implements ParserInterface
{


    public function getParserName()
    {
        echo "json parser";
    }
}
