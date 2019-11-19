<?php

namespace Ace\ArgumentPattern\Model\Reader\Parser;

use Ace\ArgumentPattern\Api\ParserInterface;

class Xml implements ParserInterface
{


    public function getParserName()
    {
        echo "Xml parser";
    }
}
