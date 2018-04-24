<?php declare(strict_types=1);

namespace HSkrasek\OpenAPI;

use HSkrasek\OpenAPI\Specification\Info;

class Specification
{
    /**
     * @var string
     */
    private $version;

    /**
     * @var Info
     */
    private $info;

    /**
     * @var array
     */
    private $servers;

    public function __construct(string $version, Info $info, array $servers)
    {
        $this->version = $version;
        $this->info = $info;
        $this->servers = $servers;
    }

    public function version(): string
    {
        return $this->version;
    }

    public function info(): Info
    {
        return $this->info;
    }

    public function servers(): array
    {
        return $this->servers;
    }
}