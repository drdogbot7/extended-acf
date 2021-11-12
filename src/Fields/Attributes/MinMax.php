<?php

/**
 * Copyright (c) Vincent Klaiber.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @see https://github.com/wordplate/extended-acf
 */

declare(strict_types=1);

namespace WordPlate\Acf\Fields\Attributes;

trait MinMax
{
    public function max(int $max): static
    {
        $this->config->set('max', $max);

        return $this;
    }

    public function min(int $min): static
    {
        $this->config->set('min', $min);

        return $this;
    }
}
