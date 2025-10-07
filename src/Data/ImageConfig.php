<?php

declare(strict_types=1);

namespace Gemini\Data;

use Gemini\Contracts\Arrayable;

final class ImageConfig implements Arrayable
{
    public function __construct(
        public readonly ?string $aspectRatio
    ) {}

    /**
     * @param  array{aspectRatio?: string}  $attributes
     */
    public static function from(array $attributes): self
    {
        return new self(
            aspectRatio: $attributes['aspectRatio'] ?? null,
        );
    }

    public function toArray(): array
    {
        return [
            'aspectRatio' => $this->aspectRatio,
        ];
    }
}
