<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Car extends Model
{
    use Sortable;
    public $timestamps = null;

    protected $fillable = ['Marke', 'Gamybos_metai', 'Savininko_vardas'];

    public $sortable = ['Marke', 'Gamybos_metai', 'Savininko_vardas'];

}
