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

    public function __construct(string $version, Info $info)
    {
        $this->version = $version;
        $this->info = $info;
    }

    public function version(): string
    {
        return $this->version;
    }

    public function info(): Info
    {
        return $this->info;
    }
}