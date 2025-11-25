<?php

declare(strict_types=1);

namespace Gemini\Data;

use Gemini\Contracts\Arrayable;

/**
 * Config for image generation features.
 *
 * https://ai.google.dev/api/generate-content#ImageConfig
 */
final class ImageConfig implements Arrayable
{
    public function __construct(
        public readonly ?string $aspectRatio,
        public readonly ?string $imageSize,
    ) {
    }

    /**
     * @param array{aspectRatio?: string, imageSize?: string} $attributes
     */
    public static function from(array $attributes): self
    {
        return new self(
            aspectRatio: $attributes['aspectRatio'] ?? null,
            imageSize: $attributes['imageSize'] ?? null,
        );
    }

    public function toArray(): array
    {
        return [
            'aspectRatio' => $this->aspectRatio,
            'imageSize' => $this->imageSize
        ];
    }
}
