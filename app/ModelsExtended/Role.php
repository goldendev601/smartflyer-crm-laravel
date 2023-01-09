<?php

namespace App\ModelsExtended;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class Role extends \App\Models\Role
{
    protected $guarded = ['*'];

    /**
     * + Users ==> Admin
    --> Only for Smartflyer Employees
    --> Smartinet
     */
    public const Super_Admin = 1;

    /**
     * + Users  ==> Travel Advisors ==> Agents
    --> Same as Agents on Wordpress
     */
    public const TravelAdvisors = 2;

    /**
     * + Users ==> Partners ==> Only specific form
     */
    public const Partners = 3;

    /**
     * @param int $id
     * @return Role|Builder|Model|object|null
     */
    public static function getById(int $id)
    {
        return self::find($id);
    }
}
