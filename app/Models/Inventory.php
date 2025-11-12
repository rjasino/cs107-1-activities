<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Inventory extends Model
{
    use HasFactory;

    protected $table = 'inventory';

    protected $fillable = [
        'product_id',
        'quantity_in_stock',
        'reorder_level',
        'maximum_stock_level',
        'location',
    ];

    protected $casts = [
        'quantity_in_stock' => 'integer',
        'reorder_level' => 'integer',
        'maximum_stock_level' => 'integer',
    ];

    /**
     * Get the product that owns the inventory.
     */
    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
}
