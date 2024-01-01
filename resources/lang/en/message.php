<?php
/*
language : English
*/
return [
    'title' => [
        'index' => 'Message',
        'send' => 'Form Send Message',
    ],
    'form_control' => [
        'input' => [
            'number' => [
                'label' => 'Input Number',
                'placeholder' => '08xxxxxxxx',
                'attribute' => 'Number'
            ],
            'message' => [
                'label' => 'Input Message',
                'placeholder' => 'Test send message',
                'attribute' => 'Message'
            ],
        ],
    ],
    'button' => [
        'send' => [
            'value' => 'Send Message'
        ]
    ],
    'alert' => [
        'create' => [
            'title' => 'Add role',
            'message' => [
                'success' => "Roles saved successfully.",
                'error' => "An error occurred while saving the role. :error"
            ]
    ]
    ]
];
