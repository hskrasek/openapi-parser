<?php declare(strict_types=1);

namespace HSkrasek\OpenAPI\Specification\Info;

class Contact
{
    /**
     * @var null|string
     */
    private $name;

    /**
     * @var null|string
     */
    private $url;

    /**
     * @var null|string
     */
    private $email;

    public function __construct(?string $name = null, ?string $url = null, ?string $email = null)
    {
        $this->name = $name;
        $this->url = $url;
        $this->email = $email;
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

    /**
     * @return null|string
     */
    public function email(): ?string
    {
        return $this->email;
    }
}
