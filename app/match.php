<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class match extends Model
{
    //Table Name
        protected $table='matches';
    //Primary Key
        public $primaryKey='id';
    //TimeStamps
        protected $timeStamps = true;
}
