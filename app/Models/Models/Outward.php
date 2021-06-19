<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Outward extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $table="outwards";

    public function category()
    {
        return $this->belongsTo(Category::class,'category_id');
    }

    public function vendor()
    {
        return $this->belongsTo(Vendor::class,'vendor_id');
    }

    public function partner()
    {
        return $this->belongsTo(Partner::class,'partner_id');
    }

    public function inward()
    {
        return $this->belongsTo(Inward::class,'inward_id');
    }
}

