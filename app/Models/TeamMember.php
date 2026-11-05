<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TeamMember extends Model
{
    public const GROUPS = [
        'board' => 'Board of directors',
        'management' => 'Management',
    ];

    protected $fillable = [
        'group',
        'name',
        'role',
        'title',
        'bio',
        'image',
        'sort_order',
    ];
}
