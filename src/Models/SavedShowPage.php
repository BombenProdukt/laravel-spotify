<?php

declare(strict_types=1);

namespace BombenProdukt\Spotify\Models;

use Spatie\LaravelData\Attributes\DataCollectionOf;
use Spatie\LaravelData\DataCollection;

final class SavedShowPage extends AbstractLengthAwarePage
{
    #[DataCollectionOf(SavedShow::class)]
    public DataCollection $items;
}
