<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kunjungan extends Model
{
    use HasFactory;

    /**
     * Nama tabel yang terkait dengan model.
     *
     * @var string
     */
    protected $table = 'kunjungans';

    /**
     * Kolom yang dapat diisi secara massal.
     *
     * @var array
     */
    protected $fillable = [
        'ip_address',
        'user_agent',
        'referrer',
        'page_url',
        'visit_time',
        'device_type',
        'browser',
        'os',
        'country',
        'city'
    ];

    /**
     * Tipe data kolom yang harus di-cast.
     *
     * @var array
     */
    protected $casts = [
        'visit_time' => 'datetime:Y-m-d H:i:s',
    ];

    /**
     * Nilai default untuk atribut model.
     *
     * @var array
     */
    protected $attributes = [
        'device_type' => 'desktop',
    ];
}