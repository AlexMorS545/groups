<?php

$offices = [
    'Отдел_А' => [
        [
            'contractor' => 'Контрагент 1',
            'amount' => '100'
        ]
    ],
    'Отдел_Б' => [
        [
            'contractor' => 'Контрагент 2',
            'amount' => '150'
        ],
        [
            'contractor' => 'Контрагент 3',
            'amount' => '200'
        ],
    ],
    'Отдел_В' => [],
    'Отдел_Г' => [
        [
            'contractor' => 'Контрагент 4',
            'amount' => '250'
        ],
        [
            'contractor' => 'Контрагент 5',
            'amount' => '300'
        ],
        [
            'contractor' => 'Контрагент 6',
            'amount' => '350'
        ],
        [
            'contractor' => 'Контрагент 7',
            'amount' => '400'
        ],
    ],
    'Отдел_Д' => [
        [
            'contractor' => 'Контрагент 8',
            'amount' => '450'
        ],
        [
            'contractor' => 'Контрагент 9',
            'amount' => '500'
        ],
        [
            'contractor' => 'Контрагент 10',
            'amount' => '50'
        ],
    ],
];

if ($_GET['is_ajax'])
    echo json_encode($offices);
