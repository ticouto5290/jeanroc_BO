<?php

/*
 * This file is part of the API Platform project.
 *
 * (c) Kévin Dunglas <dunglas@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace ApiPlatform\Doctrine\Common\Filter;

/**
 * Interface for filtering the collection by given properties.
 *
 * @author Kévin Dunglas <dunglas@gmail.com>
 * @author Alan Poulain <contact@alanpoulain.eu>
 */
interface SearchFilterInterface
{
    /**
     * @var string Exact matching
     */
    public const STRATEGY_EXACT = 'exact';

    /**
     * @var string Exact matching case-insensitive
     */
    public const STRATEGY_IEXACT = 'iexact';

    /**
     * @var string The value must be contained in the field
     */
    public const STRATEGY_PARTIAL = 'partial';

    /**
     * @var string The value must be contained in the field case-insensitive
     */
    public const STRATEGY_IPARTIAL = 'ipartial';

    /**
     * @var string Finds fields that are starting with the value
     */
    public const STRATEGY_START = 'start';

    /**
     * @var string Finds fields that are starting with the value case-insensitive
     */
    public const STRATEGY_ISTART = 'istart';

    /**
     * @var string Finds fields that are ending with the value
     */
    public const STRATEGY_END = 'end';

    /**
     * @var string Finds fields that are ending with the value case-insensitive
     */
    public const STRATEGY_IEND = 'iend';

    /**
     * @var string Finds fields that are starting with the word
     */
    public const STRATEGY_WORD_START = 'word_start';

    /**
     * @var string Finds fields that are starting with the word case-insensitive
     */
    public const STRATEGY_IWORD_START = 'iword_start';
}
