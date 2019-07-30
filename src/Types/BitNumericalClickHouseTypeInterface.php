<?php
declare(strict_types = 1);

/*
 * This file is part of the FODDBALClickHouse package -- Doctrine DBAL library
 * for ClickHouse (a column-oriented DBMS for OLAP <https://clickhouse.yandex/>)
 *
 * (c) FriendsOfDoctrine <https://github.com/FriendsOfDoctrine/>.
 *
 * For the full copyright and license inflormation, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace FOD\DBALClickHouse\Types;

/**
 * Numerical types bits.
 */
interface BitNumericalClickHouseTypeInterface extends NumericalClickHouseTypeInterface
{
    public const EIGHT_BIT      = 8;
    public const SIXTEEN_BIT    = 16;
    public const THIRTY_TWO_BIT = 32;
    public const SIXTY_FOUR_BIT = 64;

    public const SCALE_BIT_MAP = [
        self::EIGHT_BIT      => self::EIGHT_BIT,
        self::SIXTEEN_BIT    => self::SIXTEEN_BIT,
        self::THIRTY_TWO_BIT => self::THIRTY_TWO_BIT,
        self::SIXTY_FOUR_BIT => self::SIXTY_FOUR_BIT
    ];

    public const DEFAULT_BITS = self::THIRTY_TWO_BIT;

    /**
     * Get bit amount.
     *
     * @return int
     */
    public function getBits(): int;
}
