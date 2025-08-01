<?php

namespace PowerComponents\LivewirePowerGrid\Components\Filters\Builders;

use Closure;
use Illuminate\Database\Eloquent\Builder as EloquentBuilder;
use Illuminate\Database\Query\Builder as QueryBuilder;
use Illuminate\Support\{Carbon, Collection};

class DatePicker extends BuilderBase
{
    public function builder(EloquentBuilder|QueryBuilder $builder, string $field, int|array|string|null $values): void
    {
        if (gettype($values) !== 'array') {
            return;
        }

        if (!isset($values['start']) && !isset($values['end'])) {
            return;
        }

        /** @var array $values */
        [$startDate, $endDate] = [
            0 => Carbon::parse($values['start'])->format('Y-m-d H:i:s'),
            1 => Carbon::parse($values['end'])->format('Y-m-d H:i:s'),
        ];

        if (data_get($this->filterBase, 'builder')) {
            /** @var Closure $closure */
            $closure = data_get($this->filterBase, 'builder');

            $closure($builder, $values);

            return;
        }

        $builder->whereBetween($field, [$startDate, $endDate]);
    }

    public function collection(Collection $collection, string $field, int|array|string|null $values): Collection
    {
        if (!isset($values['start']) && !isset($values['end'])) {
            return $collection;
        }

        /** @var array $values */
        [$startDate, $endDate] = [
            0 => Carbon::parse($values[0])->format('Y-m-d'),
            1 => Carbon::parse($values[1])->format('Y-m-d'),
        ];

        if (data_get($this->filterBase, 'collection')) {
            /** @var Closure $closure */
            $closure = data_get($this->filterBase, 'collection');

            return $closure($collection, $values);
        }

        return $collection->whereBetween($field, [$startDate, $endDate]);
    }
}
