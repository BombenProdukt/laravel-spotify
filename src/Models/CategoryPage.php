<?php

declare(strict_types=1);

namespace BombenProdukt\Spotify\Models;

use Spatie\LaravelData\Attributes\DataCollectionOf;
use Spatie\LaravelData\DataCollection;

final class CategoryPage extends AbstractLengthAwarePage
{
    #[DataCollectionOf(Category::class)]
    public DataCollection $items;
}
