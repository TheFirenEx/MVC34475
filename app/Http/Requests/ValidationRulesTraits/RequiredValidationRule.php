<?php

namespace Http\Requests\ValidationRulesTraits;

/**
 * Reguła walidacji - pole wymagane
 */
trait RequiredValidationRule
{
    public function requiredValidationRule(
        ?string $value,
        ?string $name
    ): array {
        if ($value !== null && \strlen($value) > 0) {
            return [];
        }
        // TODO: tłumaczenia nazw pól
        return [
            'Pole ' . $name . ' jest wymagane'
        ];
    }
}
