<?php

declare(strict_types=1);

namespace Tests\Feature\Reference;

use BombenProdukt\Spotify\Models\CurrentlyPlaying;
use BombenProdukt\Spotify\Models\Device;
use BombenProdukt\Spotify\Models\PlayerState;
use BombenProdukt\Spotify\Models\Queue;
use BombenProdukt\Spotify\Models\RecentlyPlayedTrack;
use BombenProdukt\Spotify\Models\RecentlyPlayedTrackPage;
use BombenProdukt\Spotify\Reference\Player;

test('state', function (): void {
    $actual = fakeOkFromFixture(Player::class, 'player/get-information-about-the-users-current-playback')->state();

    expect($actual)->toBeInstanceOf(PlayerState::class);
});

test('devices', function (): void {
    $actual = fakeOkFromFixture(Player::class, 'player/get-a-users-available-devices')->devices();

    expect($actual)->toBeDataCollection(Device::class);
});

test('currentlyPlaying', function (): void {
    $actual = fakeOkFromFixture(Player::class, 'player/get-the-users-currently-playing-track')->currentlyPlaying();

    expect($actual)->toBeInstanceOf(CurrentlyPlaying::class);
});

test('recentlyPlayed', function (): void {
    $actual = fakeOkFromFixture(Player::class, 'player/get-recently-played')->recentlyPlayed();

    expect($actual)->toBePage(RecentlyPlayedTrackPage::class, RecentlyPlayedTrack::class);
});

test('queue', function (): void {
    $actual = fakeOkFromFixture(Player::class, 'player/get-queue')->queue();

    expect($actual)->toBeInstanceOf(Queue::class);
});
