<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'statusenabled', 'name', 'phone', 'alamat', 'alamatmaps', 'date', 'time', 'notes', 'statusbookings', 'totalharga',
    ];

    public function statusBooking()
    {
        return $this->belongsTo(StatusBooking::class, 'statusbookings', 'id');
    }


    public function serviceTypes()
    {
        return $this->belongsToMany(ServiceType::class, 'booking_service', 'booking_id', 'service_type_id');
    }

    public function additionalTypes()
    {
        return $this->belongsToMany(AdditionalType::class, 'booking_additional', 'booking_id', 'additional_type_id');
    }

}