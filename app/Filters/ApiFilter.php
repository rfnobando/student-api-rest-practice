<?php

namespace App\Filters;
use Illuminate\Http\Request;

class ApiFilter
{
    protected $safeParams = [];
    protected $columnMap = [];
    protected $operatorMap = [];
}