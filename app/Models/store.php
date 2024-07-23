<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class store extends Model
{
    use HasFactory;
    protected $fillable =
    [
        'Name'=>'LG mobile',
        'Description'=>'smart-phone with 4gh ram',
        'Price'=>'2000',
        'image'=>'https://www.google.com/imgres?q=mobile%20phone%20img&imgurl=https%3A%2F%2Fimg.lovepik.com%2Ffree-png%2F20210928%2Flovepik-mobile-phone-png-image_401663651_wh1200.png&imgrefurl=https%3A%2F%2Flovepik.com%2Fimage-401663651%2Fmobile-phone.html&docid=AoKlY1mjuTtGeM&tbnid=VEkCKeAK4HZXHM&vet=12ahUKEwiw-sK0vLqHAxX9A9sEHakIA5kQM3oECF8QAA..i&w=1200&h=834&hcb=2&ved=2ahUKEwiw-sK0vLqHAxX9A9sEHakIA5kQM3oECF8QAA'
    ];
}
