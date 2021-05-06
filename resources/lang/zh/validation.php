<?php

return [
    'accepted'         => ':attribute必須被接受',
    'active_url'       => ':attribute不是有效的連結',
    'after'            => ':attribute必須是:date之後的時間',
    'after_or_equal'   => 'The :attribute must be a date after or equal to :date.',
    'alpha'            => ':attribute只包含字母',
    'alpha_dash'       => ':attribute只包含字母、數字以及底線',
    'alpha_num'        => ':attribute只包含字母以及數字',
    'latin'            => 'The :attribute may only contain ISO basic Latin alphabet letters.',
    'latin_dash_space' => 'The :attribute may only contain ISO basic Latin alphabet letters, numbers, dashes, hyphens and spaces.',
    'array'            => ':attribute必須是陣列',
    'before'           => ':attribute必須是:date之前的時間',
    'before_or_equal'  => 'The :attribute must be a date before or equal to :date.',
    'between'          => [
        'numeric' => ':attribute必須介於:min和:max之間',
        'file'    => ':attribute必須介於:min千和:max千之間',
        'string'  => ':attribute必須介於:min和:max個字之間',
        'array'   => ':attribute必須介於:min和:max個項目之間',
    ],
    'boolean'        => ':attribute必須是真或假',
    'confirmed'      => ':attribute 驗證不符',
    'date'           => ':attribute並不是正確的日期',
    'date_equals'    => 'The :attribute must be a date equal to :date.',
    'date_format'    => ':attribute並乎合:format的格式要求',
    'different'      => ':attribute和:other 必須是不一樣的',
    'digits'         => ':attribute必須是:digits位數',
    'digits_between' => ':attribute必須介於:min位數和:max位數之間',
    'dimensions'     => ':attribute存在錯誤的圖片尺寸',
    'distinct'       => ':attribute必須是雙數',
    'email'          => ':attribute必須是個有效的電子郵件',
    'ends_with'      => 'The :attribute must end with one of the following: :values.',
    'exists'         => '選取的:attribute無效',
    'file'           => ':attribute必須是個檔案',
    'filled'         => ':attribute必須填寫',
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
    'image'    => ':attribute必須是圖片',
    'in'       => '選取的:attribute無效',
    'in_array' => ':attribute屬性在 :other裡不存在',
    'integer'  => ':attribute必須是整數',
    'ip'       => ':attribute必須是有效的IP地址',
    'ipv4'     => 'The :attribute must be a valid IPv4 address.',
    'ipv6'     => 'The :attribute must be a valid IPv6 address.',
    'json'     => ':attribute必須是有效的JSON字串',
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
        'numeric' => ':attribute不能比 :max大',
        'file'    => ':attribute不能比:max千大',
        'string'  => ':attribute不能比:max個字大',
        'array'   => ':attribute不能大於:max項',
    ],
    'mimes'     => ':attribute 必須是： :values類型的檔案',
    'mimetypes' => 'The :attribute must be a file of type: :values.',
    'min'       => [
        'numeric' => ':attribute必須至少 :min',
        'file'    => ':attribute必須至少 :min千',
        'string'  => ':attribute必須至少 :min個字',
        'array'   => ':attribute必須至少:min項',
    ],
    'not_in'               => '所選的:attribute是無效的',
    'not_regex'            => ':attribute格式無效',
    'numeric'              => ':attribute必須是個數字',
    'password'             => '密碼錯誤',
    'present'              => ':attribute的值域必須是現在的',
    'regex'                => ':attribute的格式是失效的',
    'required'             => ':attribute值域是必須的',
    'required_if'          => '當:other是:value，:attribute的值域是必須的',
    'required_unless'      => '除非:other是在:values裡，則:attribute的值域是必須的',
    'required_with'        => '當:values是現在:attribute的值是必須的',
    'required_with_all'    => '當:values是現在:attribute的值是必須的',
    'required_without'     => '當:values不是現在:attribute的值是必須的',
    'required_without_all' => '當沒有:values是現在:attribute的值是必須的',
    'same'                 => ':attribute和:other 必須是相符的',
    'size'                 => [
        'numeric' => ':attribute一定是:size的大小',
        'file'    => ':attribute一定是:size千的大小',
        'string'  => ':attribute一定是:size大小的字',
        'array'   => ':attribute必須包含:size大小的項目',
    ],
    'starts_with' => 'The :attribute must start with one of the following: :values.',
    'string'      => ':attribute必須是一串字串',
    'timezone'    => ':attribute必須是一個有效的範圍',
    'unique'      => ':attribute已經被取用',
    'uploaded'    => ':attribute上傳失敗',
    'url'         => ':attribute的格式是無效的',
    'uuid'        => ':attribute必須是組合法ID',
    'custom'      => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],
    'reserved_word'                  => ':attribute含保留字',
    'dont_allow_first_letter_number' => 'The \":input\" field can\'t have first letter as a number',
    'exceeds_maximum_number'         => 'The :attribute exceeds maximum model length',
    'db_column'                      => 'The :attribute may only contain ISO basic Latin alphabet letters, numbers, dash and cannot start with number.',
    'attributes'                     => [],
];
