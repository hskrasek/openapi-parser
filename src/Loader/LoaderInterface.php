<?php declare(strict_types=1);

namespace HSkrasek\OpenAPI\Loader;

interface LoaderInterface
{
    /**
     * Loads the file at the provided path.
     *
     * @param string $path
     *
     * @return array
     */
    public function load(string $path): array;
}