<?php declare(strict_types=1);

namespace HSkrasek\OpenAPI\Parser;

use HSkrasek\OpenAPI\Specification\Server;

class ServersParser extends AbstractParser implements ParserInterface
{
    /**
     * @inheritDoc
     */
    public function __invoke(?array $data): array
    {
        return array_map(function (array $server) {
            return new Server(
                $server['url'],
                $server['description'] ?? null
            );
        }, $data);
    }
}