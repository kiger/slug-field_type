<?php

return [
    'type'    => [
        'type'     => 'anomaly.field_type.select',
        'required' => true,
        'config'   => [
            'options' => [
                '-' => 'foo-bar-baz',
                '_' => 'foo_bar_baz'
            ]
        ]
    ],
    'slugify' => [
        'type' => 'anomaly.field_type.text'
    ],
    'min'     => [
        'type' => 'anomaly.field_type.integer'
    ],
    'max'     => [
        'type' => 'anomaly.field_type.integer'
    ]
];
