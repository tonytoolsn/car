<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable=['name','phone','email','pattern','rent','deposit','place','fawdays','usedate','returndate','remark','orderstatus','adminremark','men_name','mem_phone','mem_email'];
}
