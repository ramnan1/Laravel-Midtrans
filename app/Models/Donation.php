<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function setStatusPending()
    {
      $this->attributes['status'] = 'pending';
      self::save();
    }
    
    public function setStatusSuccess()
    {
      $this->attributes['status'] = 'succcess';
      self::save();
    }
    
    public function setStatusFailed()
    {
      $this->attributes['status'] = 'failed';
      self::save();
    }

    public function setStatusExpired()
    {
      $this->attributes['status'] = 'expired';
      self::save();
      
    }
  }
