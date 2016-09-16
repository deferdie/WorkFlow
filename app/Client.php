<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = ['user_id', 'company_id', 'client_business_name', 'client_contact_name', 'client_contact_email', 'client_contact_number'];
}
