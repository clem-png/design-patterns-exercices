<?php

namespace App;

use SplObserver;
use SplSubject;

class MusicBand implements SplSubject
{
    private $observers = [];
    private $detachedObservers = [];

    public function __construct(
        private string $name,
        private array $concerts = []
    ) {}

    public function addNewConcertDate(string $date, string $location): void
    {
        $this->concerts[] = [
            'date' => $date,
            'location' => $location
        ];
        $this->notify();
    }

    public function attach(SplObserver $observer): void 
    {
        $this->observers[spl_object_hash($observer)] = $observer;
        unset($this->detachedObservers[spl_object_hash($observer)]);
    }

    public function detach(SplObserver $observer): void 
    {
        unset($this->observers[spl_object_hash($observer)]);
    }

    public function notify(): void
    {
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getConcerts(): array
    {
        return $this->concerts;
    }
}

