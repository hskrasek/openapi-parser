<?php declare(strict_types=1);

namespace HSkrasek\OpenAPI\Parser;

use HSkrasek\OpenAPI\Specification\Info\License;

class LicenseParser implements ParserInterface
{
    /**
     * @inheritDoc
     */
    public function __invoke(?array $data): License
    {
        return new License(
            $data['name'] ?? null,
            $data['url'] ?? null
        );
    }
}