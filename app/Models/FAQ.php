<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class FAQ
 * 
 * @property int $id
 * @property string|null $question
 * @property string|null $answer
 * 
 *
 * @package App\Models
 */
class FAQ extends Model
{
    use HasFactory;

    protected $table = 'faqs';

    protected $fillable = [
        'question',
        'answer',
    ];

}
