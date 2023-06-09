<?php

declare(strict_types=1);

namespace BombenProdukt\Spotify\Models;

use Spatie\LaravelData\Attributes\DataCollectionOf;
use Spatie\LaravelData\DataCollection;

final class SavedAlbumPage extends AbstractLengthAwarePage
{
    #[DataCollectionOf(SavedAlbum::class)]
    public DataCollection $items;
}
