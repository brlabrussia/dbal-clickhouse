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
 * Array(Float64) Type
 */
class ArrayFloat64Type extends AbstractArrayType implements BitNumericalClickHouseTypeInterface
{
    /**
     * @inheritdoc
     */
    public function getBits(): int
    {
        return BitNumericalClickHouseTypeInterface::SIXTY_FOUR_BIT;
    }

    /**
     * @inheritdoc
     */
    public function getBaseClickHouseType(): string
    {
        return NumericalClickHouseTypeInterface::TYPE_FLOAT;
    }
}
