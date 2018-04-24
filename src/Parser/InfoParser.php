<?php declare(strict_types=1);

namespace HSkrasek\OpenAPI\Parser;

use HSkrasek\OpenAPI\Specification\Info;

class InfoParser extends AbstractParser implements ParserInterface
{
    public function __construct()
    {
        $this->parsers = [
            'contact' => new ContactParser,
            'license' => new LicenseParser,
        ];
    }

    /**
     * @inheritDoc
     */
    public function __invoke(?array $data): Info
    {
        $data = $this->mapDataToParsers($data);

        return new Info(
            $data['title'],
            $data['description'] ?? null,
            $data['termsOfService'] ?? null,
            $data['contact'] ?? null,
            $data['license'] ?? null,
            $data['version']
        );
    }
}