<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Shipp extends Model
{
    protected $fillable = [
        'id',
        'senders_name',
        'company_location',
        'code',
        'company_email',
        'receivers_name',
        'receiver_location',
        'zip_code',
        'receiver_email',
        'package',
        'destination',
        'carier',
        'type_of_shippment',
        'weight',
        'shipment_mode',
        'carrier_No',
        'product',
        'qty',
        'payment_mode',
        'comment',
        'delivery_date',
        'delivery_time',
        'pick_up_date',
        'pick_up_time',
        'date',
        'time',
        'location',
        'status',
        'remark',
        'updated_by',
        'Tracking_number'
    ];
}
