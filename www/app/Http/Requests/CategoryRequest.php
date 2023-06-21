<?php

namespace Http\Requests;

use Http\Requests\ValidationRulesTraits\RequiredValidationRule;

class CategoryRequest extends Request
{
    use RequiredValidationRule;
    
    protected $rules = [
        'category_name' => 'required'
    ];
}