<?php

declare(strict_types=1);

namespace BombenProdukt\Spotify\Models;

use Spatie\LaravelData\Data;

final class RecentlyPlayedTrack extends Data
{
    public Track $track;

    public string $played_at;

    public Context $context;
}
