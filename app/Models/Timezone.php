<?php
  
namespace App\Models;
  
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
  
class Timezone extends Model
{
    use HasFactory;
    protected $tables=  'timezones';

    protected $fillable = [
        'zone_name', 'country_code','abbreviation','time_start','gmt_offset','dst'
    ];

}