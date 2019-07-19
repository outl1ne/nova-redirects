<?php

namespace OptimistDigital\NovaRedirects\Models;

use Illuminate\Database\Eloquent\Model;

class Redirect extends Model
{
    protected $table = 'nova_redirects';

    protected $fillable = [
        'from_url',
        'to_url',
        'status_code',
    ];
}
