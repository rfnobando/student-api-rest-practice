<?php

namespace App\Filters;
use Illuminate\Http\Request;

class StudentFilter extends ApiFilter
{
    protected $safeParams = [
        'firstName' => ['eq'],
        'lastName' => ['eq'],
        'email' => ['eq'],
        'dateOfBirth' => ['eq'],
        'address' => ['eq'],
        'phoneNumber' => ['eq'],
        'gender' => ['eq'],
        'country' => ['eq'],
        'city' => ['eq'],
        'zipcode' => ['eq']
    ];

    protected $columnMap = [
        'firstName' => 'first_name',
        'lastName' => 'last_name',
        'dateOfBirth' => 'date_of_birth',
        'phoneNumber' => 'phone_number',
    ];

    protected $operatorMap = [
        'eq' => '=',
        'lt' => '<',
        'lte' => '<=',
        'gt' => '>',
        'gte' => '>='
    ];
}