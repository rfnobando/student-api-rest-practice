<?php

namespace App\Filters;
use Illuminate\Http\Request;

class GradeFilter extends ApiFilter
{
    protected $safeParams = [
        'studentId' => ['eq', 'lt', 'gt'],
        'subject' => ['eq'],
        'value' => ['eq', 'lt', 'gt'],
        'date' => ['eq']
    ];

    protected $columnMap = [
        'studentId' => 'student_id'
    ];

    protected $operatorMap = [
        'eq' => '=',
        'lt' => '<',
        'lte' => '<=',
        'gt' => '>',
        'gte' => '>='
    ];
}