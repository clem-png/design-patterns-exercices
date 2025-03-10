<?php

namespace App;

use SplObserver;
use SplSubject;

class User implements SplObserver
{
    private $notified = false;

    public function __construct(
        private string $name
    ) {}

    public function isNotified(): bool
    {
        return $this->notified;
    }

    public function update(SplSubject $subject): void
    {
        $this->notified = true;
    }

    public function getName(): string
    {
        return $this->name;
    }
}

