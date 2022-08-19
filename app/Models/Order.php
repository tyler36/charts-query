<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    /**
     * Summary of scopeGroupByMonth
     * @param Builder $query
     * @return \Illuminate\Support\Collection
     */
    public function scopeGroupByMonth(Builder $query)
    {
        return $query
            ->selectRaw('strftime("%m", created_at) as month')
            ->selectRaw('count(*) as count')
            ->groupBy('month')
            ->orderBy('month')
            ->pluck('count', 'month')
            ->values()
            ->toArray();
    }
}
