<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Apartment extends Model
{
    protected $primaryKey = 'apt_id';

    //protected $dateFormat = "M d, Y";
    protected $fillable = ['apt_id','bldg','unit','layout','floorplan','description','special','date_avail','updated_at'];
    protected $guarded = ['_token'];

}
