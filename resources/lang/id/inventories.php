<?php
/*
language : English
*/
return [
    'title' => [
        'index' => 'Inventori',
        'create' => 'Tambah Inventori',
        'edit' => 'Edit Inventori',
    ],
    'form_control' => [
        'input' => [
            'name' => [
                'label' => 'Nama',
                'placeholder' => 'Masukan Nama',
                'attribute' => 'nama'
            ],
            'stok' => [
                'label' => 'jumlah',
                'placeholder' => 'masukan jumlah',
                'attribute' => 'jumlah'
            ],
            'suplier' => [
                'label' => 'suplier',
                'placeholder' => 'Masukan suplier',
                'attribute' => 'suplier'
            ],
            'location' => [
                'label' => 'lokasi',
                'placeholder' => 'Gudang 1',
                'attribute' => 'lokasi'
            ],
            'search' => [
                'label' => 'Pencarian',
                'placeholder' => 'Pencarian untuk inventori',
                'attribute' => 'pencarian'
            ]
        ],
    ],
    'label' => [
        'no_data' => [
            'fetch' => 'Inventori Belum Tersedia!',
            'search' => "inventori :keyword tidak ditemukan",
            ]
    ],
    'button' => [
        'create' => [
            'value' => 'Tambah'
        ],
        'save' => [
            'value' => 'Simpan'
        ],
        'edit' => [
            'value' => 'Ubah'
        ],
        'delete' => [
            'value' => 'Hapus'
        ],
        'cancel' => [
            'value' => 'Batal'
        ],
        'back' => [
            'value' => 'Kembali'
        ],
    ],
    'alert' => [
        'create' => [
            'title' => "Tambah inventori",
            'message' => [
                'success' => "Inventori berhasil disimpan.",
                'error' => "Terjadi kesalahan saat menyimpan inventori. :error"
            ]
        ],
        'update' => [
            'title' => 'Ubah inventori',
            'message' => [
                'success' => "Inventori berhasil diperbaharui.",
                'error' => "Terjadi kesalahan saat perbarui inventori. :error"
            ]
        ],
        'delete' => [
            'title' => 'Hapus inventori',
            'message' => [
                'confirm' => "Yakin akan menghapus inventori :name ?",
                'success' => "Inventori berhasil dihapus",
                'error' => "Terjadi kesalahan saat menghapus inventori. :error",
                'warning' => "Maaf, inventori :name belum dapat dihapus. Karena masih digunakan.",
            ]
        ],
    ]
];
