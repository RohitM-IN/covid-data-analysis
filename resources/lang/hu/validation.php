<?php

return [
    'accepted'         => ':attribute elfogadása kötelező.',
    'active_url'       => ':attribute nem érvényes webcím.',
    'after'            => 'A(z) :attribute dátumának később kell lennie, mint :date.',
    'after_or_equal'   => 'A(z) :attribute dátumának meg kell egyeznie vagy későbbinek kell lennie, mint :date',
    'alpha'            => 'A(z) :attribute csak betűket tartalmazhat.',
    'alpha_dash'       => 'A(z) :attribute csak betűket, számokat és  kötőjelet tartalmazhat.',
    'alpha_num'        => 'A(z) :attribute csak betűket és számokat tartalmazhat.',
    'latin'            => 'A(z) :attribute kizárólag a latin ábécé betűit tartalmazhatja.',
    'latin_dash_space' => 'A(z) :attribute csak ISO alapszintű latin ábécé betűket, számokat, kötőjeleket, kötőjeleket és szóközöket tartalmazhat.',
    'array'            => 'A(z) :attribute -nak tömbnek kell lennie.',
    'before'           => 'A(z) :attribute dátumának korábban kell lennie, mint :date.',
    'before_or_equal'  => 'A(z) :attribute dátumának meg kell egyeznie vagy korábbinak kell lennie, mint :date',
    'between'          => [
        'numeric' => 'A(z) :attribute -nak a kettő között kell lennie: :min és :max.',
        'file'    => 'A(z) :attribute -nak a kettő között kell lennie: :min és :max kilóbájt.',
        'string'  => 'A(z) :attribute -nak a kettő között kell lennie: :min és :max karakter.',
        'array'   => 'A(z) :attribute -nak a kettő között kell lennie: :min és :max darab.',
    ],
    'boolean'        => 'A(z) :attribute mezőnek igaznak vagy hamisnak kell lennie.',
    'confirmed'      => 'A(z) :attribute megerősítése nem egyezik.',
    'date'           => 'A(z) :attribute nem érvényes dátum.',
    'date_equals'    => 'A(z) :attribute dátumnak kell lennie, amely egyenlő :date.',
    'date_format'    => 'A(z) :attribute formátuma nem egyezik ezzel: :format.',
    'different'      => 'A(z) :attribute -nak és a(z) :other -nak különböznie kell.',
    'digits'         => 'A(z) :attribute -nak :digits számjegyből kell állnia.',
    'digits_between' => 'A(z) :attribute -nak a kettő között kell lennie: :min és :max számjegy.',
    'dimensions'     => 'A(z) :attribute -nak érvénytelen képméretei vannak.',
    'distinct'       => 'A(z) :attribute -nak duplikált értéke van.',
    'email'          => 'A(z) :attribute -nak érvényes email címnek kell lennie.',
    'ends_with'      => 'A(z) :attribute -nak a következők egyikével kell végződnie: :values.',
    'exists'         => 'A kiválasztott :attribute érvénytelen.',
    'file'           => 'A(z) :attribute -nak fájlnak kell lennie.',
    'filled'         => 'A(z) :attribute mező kötelező.',
    'gt'             => [
        'numeric' => 'A(z) :attribute nagyobb kell, hogy legyen mint :value',
        'file'    => 'A(z) :attribute nagyobb kell, hogy legyen :value kilobyte-nál.',
        'string'  => 'A(z) :attribute hosszabb kell, hogy legyen :value karakternél.',
        'array'   => 'A(z) :attribute listának több mint  :value tétellel kell rendelkeznie.',
    ],
    'gte' => [
        'numeric' => 'A(z) :attribute meg kell, hogy egyezzen vagy nagyobb kell, hogy legyen mint :value',
        'file'    => 'A(z) :attribute mérete meg kell, hogy egyezzen vagy nagyobb kell, hogy legyen :value kilobyte-nál.',
        'string'  => 'A(z) :attribute meg kell, hogy egyezzen vagy hosszabb kell, hogy legyen :value karakternél.',
        'array'   => 'A(z) :attribute listának :value vagy több tétellel kell rendelkeznie.',
    ],
    'image'    => 'A(z) :attribute -nak képnek kell lennie.',
    'in'       => 'A kiválasztott :attribute érvénytelen.',
    'in_array' => 'A(z) :attribute mező nem létezik az :other -ben.',
    'integer'  => 'A(z) :attribute -nak integernek kell lennie.',
    'ip'       => 'A(z) :attribute -nak IP címnek kell lennie.',
    'ipv4'     => 'A(z) :attribute egy érvényes IPv4 cím kell, hogy legyen.',
    'ipv6'     => 'A(z) :attribute egy érvényes IPv6 cím kell, hogy legyen.',
    'json'     => 'A(z) :attribute -nak JSON stringnek kell lennie.',
    'lt'       => [
        'numeric' => 'A(z) :attribute kisebb kell, hogy legyen mint :value',
        'file'    => 'A(z) :attribute kisebb kell, hogy legyen :value kilobyte-nál.',
        'string'  => 'A(z) :attribute rövidebb kell, hogy legyen :value karakternél.',
        'array'   => 'A(z) :attribute listának kevesebb mint  :value tétellel kell rendelkeznie.',
    ],
    'lte' => [
        'numeric' => 'A(z) :attribute meg kell, hogy egyezzen vagy kisebb kell, hogy legyen mint :value',
        'file'    => 'A(z) :attribute mérete meg kell, hogy egyezzen vagy kisebb kell, hogy legyen :value kilobyte-nál.',
        'string'  => 'A(z) :attribute meg kell, hogy egyezzen vagy rövidebb kell, hogy legyen :value karakternél.',
        'array'   => 'A(z) :attribute listának nem lehet több mint  :value tétele.',
    ],
    'max' => [
        'numeric' => 'A(z) :attribute nem lehet nagyobb, mint :max.',
        'file'    => 'A(z) :attribute nem lehet nagyobb, mint :max kilóbájt.',
        'string'  => 'A(z) :attribute nem lehet nagyobb, mint :max karakter.',
        'array'   => 'A(z) :attribute nem lehet nagyobb, mint :max. elem.',
    ],
    'mimes'     => 'A(z) :attribute -nak az alábbi fájltípusok jók: values.',
    'mimetypes' => 'A(z) :attribute -nak az alábbi fájltípusok jók: values.',
    'min'       => [
        'numeric' => 'A(z) :attribute -nak legalább ennyinek kell lennie: min.',
        'file'    => 'A(z) :attribute -nak legalább ennyinek kell lennie: min kilóbájt.',
        'string'  => 'A(z) :attribute -nak legalább ennyinek kell lennie: min karakter.',
        'array'   => 'A(z) :attribute -nak legalább ennyinek kell lennie: min elem.',
    ],
    'not_in'               => 'A kiválasztott :attribute érvénytelen.',
    'not_regex'            => 'A(z) :attribute formátuma érvénytelen.',
    'numeric'              => 'A(z) :attribute -nak számnak kell lennie.',
    'password'             => 'Helytelen jelszó.',
    'present'              => 'A(z) :attribute mezőre szükség van.',
    'regex'                => 'A(z) :attribute formátuma érvénytelen.',
    'required'             => 'A(z) :attribute mező kötelező.',
    'required_if'          => 'A(z) :attribute mező kötelező, amikor a(z) :other értéke :value.',
    'required_unless'      => 'A(z) :attribute -nak mező kötelező, kivéve ha a(z) :other értéke :values.',
    'required_with'        => 'A(z) :attribute -nak mező kötelező, amikor :values létezik.',
    'required_with_all'    => 'A(z) :attribute -nak mező kötelező, amikor :values létezik.',
    'required_without'     => 'A(z) :attribute -nak mező kötelező, amikor :values nem létezik.',
    'required_without_all' => 'A(z) :attribute -nak mező kötelező, amikor egyik :values sem létezik.',
    'same'                 => 'A(z) :attribute és a(z) :other egyezniük kell.',
    'size'                 => [
        'numeric' => 'A(z) :attribute -nak ekkorának kell lennie: :size.',
        'file'    => 'A(z) :attribute -nak :size kilóbájtnak kell lennie.',
        'string'  => 'A(z) :attribute -nak :size karakterből kell állnia.',
        'array'   => 'A(z) :attribute -nak :size eleme lehet.',
    ],
    'starts_with' => 'A(z) :attribute-nak :values valamelyikével kell kezdődnie',
    'string'      => 'A(z) :attribute -nak stringnek kell lennie.',
    'timezone'    => 'A(z) :attribute -nak érvényes zónának kell lennie.',
    'unique'      => 'A(z) :attribute már foglalt.',
    'uploaded'    => 'A(z) :attribute feltöltése nem sikerült.',
    'url'         => 'A(z) :attribute formátuma érvénytelen.',
    'uuid'        => 'A(z) :attribute-nak érvényes UUID-nek kell lennie',
    'custom'      => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],
    'reserved_word'                  => 'A(z) :attribute fentartott (tiltott) szavakat tartalmaz',
    'dont_allow_first_letter_number' => 'A(z) \":input\" mező értékének első karaktere nem lehet szám.',
    'exceeds_maximum_number'         => 'A(z) :attribute meghaladja a modell maximális hosszát',
    'db_column'                      => 'A(z) :attribute csak ISO alapszintű latin ábécé betűket, számokat, kötőjelet tartalmazhat, és nem kezdődhet számmal.',
    'attributes'                     => [],
];
