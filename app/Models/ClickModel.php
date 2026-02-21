<?php

namespace App\Models;

use CodeIgniter\Model;

class ClickModel extends Model
{
 protected $table = 'clicks';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'user_id',
        'count'
    ];
}