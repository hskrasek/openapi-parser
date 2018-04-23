<?php declare(strict_types=1);

namespace HSkrasek\OpenAPI\Specification;

use HSkrasek\OpenAPI\Specification\Info\Contact;
use HSkrasek\OpenAPI\Specification\Info\License;

class Info
{
    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $version;

    /**
     * @var null|string
     */
    private $description;

    /**
     * @var null|string
     */
    private $termsOfService;

    /**
     * @var Contact
     */
    private $contact;

    /**
     * @var License
     */
    private $license;

    public function __construct(
        string $title,
        ?string $description,
        ?string $termsOfService,
        Contact $contact,
        License $license,
        string $version
    ) {
        $this->title = $title;
        $this->version = $version;
        $this->description = $description;
        $this->termsOfService = $termsOfService;
        $this->contact = $contact;
        $this->license = $license;
    }

    /**
     * @return string
     */
    public function title(): string
    {
        return $this->title;
    }

    /**
     * @return string
     */
    public function version(): string
    {
        return $this->version;
    }

    /**
     * @return null|string
     */
    public function description(): ?string
    {
        return $this->description;
    }

    /**
     * @return null|string
     */
    public function termsOfService(): ?string
    {
        return $this->termsOfService;
    }

    /**
     * @return Contact
     */
    public function contact(): ?Contact
    {
        return $this->contact;
    }

    /**
     * @return License
     */
    public function license(): ?License
    {
        return $this->license;
    }
}
