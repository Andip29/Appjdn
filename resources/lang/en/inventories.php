<?php
/*
language : English
*/
return [
    'title' => [
        'index' => 'Inventories',
        'create' => 'Add Inventory',
        'edit' => 'Edit Inventory',
    ],
    'form_control' => [
        'input' => [
            'name' => [
                'label' => 'Name',
                'placeholder' => 'Enter name',
                'attribute' => 'name'
            ],
            'stok' => [
                'label' => 'Stok',
                'placeholder' => 'Enter Stok',
                'attribute' => 'stok'
            ],
            'suplier' => [
                'label' => 'Suplier',
                'placeholder' => 'Enter suplier',
                'attribute' => 'suplier'
            ],
            'location' => [
                'label' => 'Location',
                'placeholder' => 'Gudang 1',
                'attribute' => 'location'
            ],
            'search' => [
                'label' => 'Search',
                'placeholder' => 'Search for Invetories',
                'attribute' => 'search'
            ]
        ],
    ],
    'label' => [
        'no_data' => [
            'fetch' => "Inventories Not Yet Available!",
            'search' => ":keyword inventories not found",
            ]
    ],
    'button' => [
        'create' => [
            'value' => 'Add'
        ],
        'save' => [
            'value' => 'Save'
        ],
        'edit' => [
            'value' => 'Edit'
        ],
        'delete' => [
            'value' => 'Delete'
        ],
        'cancel' => [
            'value' => 'Cancel'
        ],
        'back' => [
            'value' => 'Back'
        ],
    ],
    'alert' => [
        'create' => [
            'title' => 'Add inventory',
            'message' => [
                'success' => "Inventory saved successfully.",
                'error' => "An error occurred while saving the inventory. :error"
            ]
        ],
        'update' => [
            'title' => 'Edit inventory',
            'message' => [
                'success' => "Inventory updated successfully.",
                'error' => "An error occurred while updating the inventory. :error"
            ]
        ],
        'delete' => [
            'title' => 'Delete inventory',
            'message' => [
                'confirm' => "Are you sure you want to delete the :name inventory?",
                'success' => "Inventories deleted successfully.",
                'error' => "An error occurred while deleting the inventory. :error",
                'warning' => "Sorry, the :name inventory cannot be deleted. Because it's still in use.",
            ]
        ],
    ]
];
