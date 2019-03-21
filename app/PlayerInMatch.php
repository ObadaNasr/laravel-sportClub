<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PlayerInMatch extends Model
{
    protected $table='player_in_match';
    public $primaryKey='id';
    protected $timeStamps=true;
}
