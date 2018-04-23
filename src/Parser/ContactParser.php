<?php declare(strict_types=1);

namespace HSkrasek\OpenAPI\Parser;

use HSkrasek\OpenAPI\Specification\Info\Contact;

class ContactParser implements ParserInterface
{
    /**
     * @inheritDoc
     */
    public function __invoke(?array $data): Contact
    {
        return new Contact(
            $data['name'] ?? null,
            $data['url'] ?? null,
            $data['email'] ?? null
        );
    }
}