<?php

declare(strict_types=1);

namespace App;

interface User
{
    public const EMAIL = 'vasconcelosvidal@gmail.com';
    public const PASSWORD = 'rapadurainrussas';
    public const ADMIN = true;

    public function toEmail(): string;
    public function toAdmin(): bool;
}