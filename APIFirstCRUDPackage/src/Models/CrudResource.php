<?php

namespace Saifkamal\ApiFirstCrudPackage\Models;

use Illuminate\Database\Eloquent\Model;

class CrudResource extends Model{
    protected $fillable = ['name','content'];
}