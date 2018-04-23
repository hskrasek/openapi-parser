<?php declare(strict_types=1);

namespace HSkrasek\OpenAPI\Specification\Info;

class License
{
    /**
     * @var null|string
     */
    private $name;

    /**
     * @var null|string
     */
    private $url;

    public function __construct(?string $name = null, ?string $url = null)
    {
        $this->name = $name;
        $this->url = $url;
    }

    /**
     * @return null|string
     */
    public function name(): ?string
    {
        return $this->name;
    }

    /**
     * @return null|string
     */
    public function url(): ?string
    {
        return $this->url;
    }
}