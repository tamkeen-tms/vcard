<?php

namespace JeroenDesloovere\VCard\Property;

use JeroenDesloovere\VCard\Formatter\Property\AnniversaryFormatter;
use JeroenDesloovere\VCard\Formatter\Property\NodeFormatterInterface;
use JeroenDesloovere\VCard\Parser\Property\AnniversaryParser;
use JeroenDesloovere\VCard\Parser\Property\NodeParserInterface;
use JeroenDesloovere\VCard\Property\Value\DateTimeValue;

final class Anniversary extends DateTimeValue implements PropertyInterface, SimpleNodeInterface
{
    public function getFormatter(): NodeFormatterInterface
    {
        return new AnniversaryFormatter($this);
    }

    public static function getNode(): string
    {
        return 'ANNIVERSARY';
    }

    public static function getParser(): NodeParserInterface
    {
        return new AnniversaryParser();
    }

    public function isAllowedMultipleTimes(): bool
    {
        return false;
    }
}
