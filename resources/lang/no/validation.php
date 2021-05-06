<?php

return [
    'accepted'         => ':attribute må være akseptert.',
    'active_url'       => ':attribute er ikke en gyldig URL.',
    'after'            => ':attribute må være en dato etter :date.',
    'after_or_equal'   => ':attribute må være en dato etter :date eller lik :date',
    'alpha'            => ':attribute må bare inneholde bokstaver.',
    'alpha_dash'       => ':attribute kan kun inneholde bokstaver, tall og bindestreker.',
    'alpha_num'        => ':attribute kan kun inneholde bokstaver og tall.',
    'latin'            => 'The :attribute may only contain ISO basic Latin alphabet letters.',
    'latin_dash_space' => 'The :attribute may only contain ISO basic Latin alphabet letters, numbers, dashes, hyphens and spaces.',
    'array'            => ':attribute må være en matrise (array).',
    'before'           => ':attribute må være en dato før :date.',
    'before_or_equal'  => ':attribute må være en dato før :date eller lik :date',
    'between'          => [
        'numeric' => ':attribute må være mellom :min og :max.',
        'file'    => ':attribute må være mellom :min og :max kilobytes.',
        'string'  => ':attribute må være mellom :min og :max bokstaver.',
        'array'   => ':attribute må ha mellom :min og :max elementer.',
    ],
    'boolean'        => ':attribute feltet må være sant eller usant',
    'confirmed'      => ':attribute bekreftelsesfeltet er ikke likt.',
    'date'           => ':attribute er ikke en gyldig dato.',
    'date_equals'    => ':attribute må være lik :date.',
    'date_format'    => ':attribute er ikke av formatet :format.',
    'different'      => ':attribute og :other må være forskjellig.',
    'digits'         => ':attribute må være :digits siffer.',
    'digits_between' => ':attribute må være mellom :min og :max siffer.',
    'dimensions'     => ':attribute har ugyldige bilde dimensjoner.',
    'distinct'       => ':attribute feltet har en duplikat verdi.',
    'email'          => ':attribute må være en gyldig epostadresse.',
    'ends_with'      => 'The :attribute must end with one of the following: :values.',
    'exists'         => ':attribute feltet som er valgt er ugyldig.',
    'file'           => ':attribute må være en fil.',
    'filled'         => ':attribute feltet er påkrevd.',
    'gt'             => [
        'numeric' => 'The :attribute must be greater than :value.',
        'file'    => 'The :attribute must be greater than :value kilobytes.',
        'string'  => 'The :attribute must be greater than :value characters.',
        'array'   => 'The :attribute must have more than :value items.',
    ],
    'gte' => [
        'numeric' => 'The :attribute must be greater than or equal :value.',
        'file'    => 'The :attribute must be greater than or equal :value kilobytes.',
        'string'  => 'The :attribute must be greater than or equal :value characters.',
        'array'   => 'The :attribute must have :value items or more.',
    ],
    'image'    => ':attribute feltet må være ett bilde.',
    'in'       => 'Det valgte feltet :attribute er ugyldig.',
    'in_array' => 'Feltet :attribute eksisterer ikke i :other',
    'integer'  => ':attribute må være ett heltall.',
    'ip'       => ':attribute må være en gyldig IP adresse.',
    'ipv4'     => 'The :attribute must be a valid IPv4 address.',
    'ipv6'     => 'The :attribute must be a valid IPv6 address.',
    'json'     => ':attribute må være en gyldig JSON tekst.',
    'lt'       => [
        'numeric' => 'The :attribute must be less than :value.',
        'file'    => 'The :attribute must be less than :value kilobytes.',
        'string'  => 'The :attribute must be less than :value characters.',
        'array'   => 'The :attribute must have less than :value items.',
    ],
    'lte' => [
        'numeric' => 'The :attribute must be less than or equal :value.',
        'file'    => 'The :attribute must be less than or equal :value kilobytes.',
        'string'  => 'The :attribute must be less than or equal :value characters.',
        'array'   => 'The :attribute must not have more than :value items.',
    ],
    'max' => [
        'numeric' => ':attribute kan ikke være større enn :max.',
        'file'    => ':attribute kan ikke være større enn :max kilobytes.',
        'string'  => ':attribute kan ikke være større enn :max karakterer.',
        'array'   => ':attribute kan ikke ha mer enn :max elementer.',
    ],
    'mimes'     => ':attribute må være en fil av typen :type :values.',
    'mimetypes' => 'The :attribute must be a file of type: :values.',
    'min'       => [
        'numeric' => ':attribute må være minst :min',
        'file'    => ':attribute må være minst :min kilobytes.',
        'string'  => ':attribute må være minst :min karakterer.',
        'array'   => ':attribute må ha minst :min elementer.',
    ],
    'not_in'               => 'Valgte :attribute er ikke gyldig.',
    'not_regex'            => 'The :attribute format is invalid.',
    'numeric'              => ':attribute må være ett nummer.',
    'password'             => 'The password is incorrect.',
    'present'              => ':attribute feltet må være utfyllt.',
    'regex'                => ':attribute formatet er ikke gyldig.',
    'required'             => ':attribute feltet er påkrevd.',
    'required_if'          => ':attribute feltet er påkrevd når :other er :value.',
    'required_unless'      => ':attribute feltet er påkrevd hvis ikke :other er i :values.',
    'required_with'        => ':attribute er påkrevd når :values er satt.',
    'required_with_all'    => ':attribute feltet er påkrevd når :values er satt.',
    'required_without'     => ':attribute feltet er påkrevd når :values ikke er satt.',
    'required_without_all' => ':attribute feltet er påkrevd når ingen av :values er tilstede.',
    'same'                 => ':attribute og :other må være lik.',
    'size'                 => [
        'numeric' => ':attribute må være :size.',
        'file'    => ':attribute må være :size kilobytes.',
        'string'  => ':attribute må være :size karakterer.',
        'array'   => ':attribute må inneholde :size elementer.',
    ],
    'starts_with' => 'The :attribute must start with one of the following: :values.',
    'string'      => ':attribute må være tekst.',
    'timezone'    => ':attribute må være en gyldig sone.',
    'unique'      => ':attribute er allerede tatt.',
    'uploaded'    => 'The :attribute failed to upload.',
    'url'         => ':attribute formatet er ugyldig.',
    'uuid'        => 'The :attribute must be a valid UUID.',
    'custom'      => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],
    'reserved_word'                  => 'The :attribute contains reserved word',
    'dont_allow_first_letter_number' => 'The \":input\" field can\'t have first letter as a number',
    'exceeds_maximum_number'         => 'The :attribute exceeds maximum model length',
    'db_column'                      => 'The :attribute may only contain ISO basic Latin alphabet letters, numbers, dash and cannot start with number.',
    'attributes'                     => [],
];
