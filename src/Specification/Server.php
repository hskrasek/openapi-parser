<?php declare(strict_types=1);

namespace HSkrasek\OpenAPI\Specification;

class Server
{
    /**
     * @var string
     */
    private $url;

    /**
     * @var null|string
     */
    private $description;

    public function __construct(string $url, ?string $description)
    {
        $this->url = $url;
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function url(): string
    {
        return $this->url;
    }

    /**
     * @return null|string
     */
    public function description(): ?string
    {
        return $this->description;
    }
}