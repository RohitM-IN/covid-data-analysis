<?php

return [
    'accepted'         => ':attribute зөвшөөрөгдсөн байх ёстой',
    'active_url'       => ':attribute нь буруу URL байна',
    'after'            => ':attribute нь :date хугацааны дараа байх ёстой',
    'after_or_equal'   => 'The :attribute must be a date after or equal to :date.',
    'alpha'            => ':attribute нь зөвхөн захиаг агуулна',
    'alpha_dash'       => ':attribute нь зөвхөн үсэг, тоо, зураас агуулж болно.',
    'alpha_num'        => ':attribute нь зөвхөн үсэг болон тоо агуулж болно.',
    'latin'            => 'The :attribute may only contain ISO basic Latin alphabet letters.',
    'latin_dash_space' => 'The :attribute may only contain ISO basic Latin alphabet letters, numbers, dashes, hyphens and spaces.',
    'array'            => ':attribute массив байх ёстой',
    'before'           => ':attribute нь :date-ээс өмнө байх ёстой',
    'before_or_equal'  => 'The :attribute must be a date before or equal to :date.',
    'between'          => [
        'numeric' => ':attribute нь :min ба :max утгын хооронд байх ёстой',
        'file'    => ':attribute нь :min ба :min килобайтын хооронд байх ёстой',
        'string'  => ':attribute нь :min ба :max тэмдэгтийн хооронд байх ёстой',
        'array'   => ':attribute нь :min ба :max тэмдэгтийн хооронд байх ёстой',
    ],
    'boolean'        => ':attribute талбар нь үнэн эсвэл худал утгатай байх ёстой',
    'confirmed'      => ':attribute нь тохирохгүй байна',
    'date'           => ':attribute зөв хугацаа байх ёстой',
    'date_equals'    => 'The :attribute must be a date equal to :date.',
    'date_format'    => ':attribute нь :format-тай тохирохгүй байна',
    'different'      => ':attribute нь :other-оос өөр байх ёстой',
    'digits'         => ':attribute нь :digit байх ёстой',
    'digits_between' => ':attribute нь :min ба :max хооронд цифр байх ёстой',
    'dimensions'     => ' :attribute нь зургын буруу хэмжээстэй байна',
    'distinct'       => ' :attribute талбар нь давхар утгатай байна',
    'email'          => ' :attribute нь зөв и-мэйл байх ёстой',
    'ends_with'      => 'The :attribute must end with one of the following: :values.',
    'exists'         => 'Сонгосон  :attribute нь буруу байна',
    'file'           => ':attribute нь файл байх ёстой',
    'filled'         => ' :attribute талбар шаардлагатай',
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
    'image'    => ':attribute нь зураг байх ёстой',
    'in'       => 'Сонгосон  :attribute нь буруу байна',
    'in_array' => ':attribute нь ',
    'integer'  => ':attribute нь бүхэл тоо байх ёстой',
    'ip'       => ':attribute нь IP хаяг байх ёстой',
    'ipv4'     => 'The :attribute must be a valid IPv4 address.',
    'ipv6'     => 'The :attribute must be a valid IPv6 address.',
    'json'     => ':attribute нь JSON string байна',
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
        'numeric' => ':attribute нь  :max-с  ихгүй байж болно',
        'file'    => 'The :attribute may not be greater than :max kilobytes.',
        'string'  => ':attribute нь  :max-с тэмдэгтүүдээс илүү байж болохгүй.',
        'array'   => 'The :attribute may not have more than :max items.',
    ],
    'mimes'     => ':attribute нь файлын төрөл байх ёстой:',
    'mimetypes' => 'The :attribute must be a file of type: :values.',
    'min'       => [
        'numeric' => ':attribute нь хамгийн багадаа :min байна',
        'file'    => ':attribute нь :min килобайт байх ёстой.',
        'string'  => ':attribute нь :min тэмдэгт байх ёстой.',
        'array'   => 'The :attribute must have at least :min items.',
    ],
    'not_in'               => 'Сонгосон  :attribute буруу байна',
    'not_regex'            => 'The :attribute format is invalid.',
    'numeric'              => ' :attribute тоо байх ёстой',
    'password'             => 'The password is incorrect.',
    'present'              => ':attribute талбар байх ёстой.',
    'regex'                => ' :attribute формат буруу байна',
    'required'             => ' :attribute талбар шаардлагатай',
    'required_if'          => ':other  талбарын утга :value байх үед  :attribute талбарыг заавал оруулах шаардлагатай',
    'required_unless'      => 'The :attribute field is required unless :other is in :values.',
    'required_with'        => 'The :attribute field is required when :values is present.',
    'required_with_all'    => ':attribute байгаа үед :values талбар шаардлагатай.',
    'required_without'     => ':attribute байгаа үед :values талбар шаардлагагүй',
    'required_without_all' => 'The :attribute field is required when none of :values are present.',
    'same'                 => ':attribute болон :other тохирох ёстой',
    'size'                 => [
        'numeric' => ':attribute нь :size  байх ёстой',
        'file'    => ':attribute нь :size килобайт байх ёстой',
        'string'  => ':attribute нь :size  тэмдэгтүүд байх ёстой.',
        'array'   => ' :attribute нь :size-ийг агуулах ёстой',
    ],
    'starts_with' => 'The :attribute must start with one of the following: :values.',
    'string'      => ':attribute тэмдэгт байх ёстой',
    'timezone'    => ':attribute зөв цагийн бүсд байх ёстой',
    'unique'      => ':attribute аль хэдийн хэрэглэгдэж байна',
    'uploaded'    => 'The :attribute failed to upload.',
    'url'         => ':attribute формат буруу ',
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
