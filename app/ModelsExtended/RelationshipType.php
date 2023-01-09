<?php

namespace App\ModelsExtended;

class RelationshipType extends \App\Models\RelationshipType
{
    public const Spouse = 1;
    public const Sibling = 2;
    public const Son = 3;
    public const Daughter = 4;
    public const Father = 5;
    public const Mother = 6;
    public const Family = 7;
    public const Friend = 8;
    public const Co_Worker = 9;
    public const Other = 10;
}