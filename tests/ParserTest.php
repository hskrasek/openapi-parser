<?php declare(strict_types=1);

namespace HSkrasek\OpenAPI\Tests;

use HSkrasek\OpenAPI\Parser;
use HSkrasek\OpenAPI\Specification;
use PHPUnit\Framework\TestCase;

class ParserTest extends TestCase
{
    /**
     * @var Parser
     */
    private $parser;

    /**
     * @inheritDoc
     */
    protected function setUp(): void
    {
        parent::setUp();
        $this->parser = new Parser;
    }

    public function testItParsesSpecifications(): void
    {
        $specification = $this->parser->parse(__DIR__ . '/stubs/petstore.yml');

        self::assertInstanceOf(Specification::class, $specification);
        self::assertSame('3.0.1', $specification->version());
        self::assertInstanceOf(Specification\Info::class, $specification->info());
    }

    public function testItParsesSpecificationInfo(): void
    {
        $specification = $this->parser->parse(__DIR__ . '/stubs/petstore.yml');

        $info = $specification->info();

        self::assertInstanceOf(Specification\Info::class, $info);
        self::assertSame('Swagger Petstore', $info->title());
        self::assertSame('1.0.0', $info->version());
        self::assertNull($info->description());
        self::assertNull($info->termsOfService());

        self::assertInstanceOf(Specification\Info\License::class, $info->license());
        self::assertSame('MIT', $info->license()->name());
        self::assertNull($info->license()->url());

        self::assertInstanceOf(Specification\Info\Contact::class, $info->contact());
        self::assertNull($info->contact()->name());
        self::assertNull($info->contact()->url());
        self::assertNull($info->contact()->email());
    }
}
