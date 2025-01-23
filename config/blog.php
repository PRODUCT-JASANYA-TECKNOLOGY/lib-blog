<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Blog Title
    |--------------------------------------------------------------------------
    |
    | Title yang akan digunakan sebagai default untuk blog. Anda dapat mengganti
    | nilai ini untuk setiap postingan jika diperlukan.
    |
    */
    'default_title' => 'My Blog',

    /*
    |--------------------------------------------------------------------------
    | Pagination Settings
    |--------------------------------------------------------------------------
    |
    | Konfigurasi untuk jumlah postingan yang ditampilkan per halaman.
    |
    */
    'pagination' => [
        'posts_per_page' => 10,
    ],

    /*
    |--------------------------------------------------------------------------
    | Upload Settings
    |--------------------------------------------------------------------------
    |
    | Konfigurasi untuk file atau gambar yang diunggah melalui sistem blog.
    | Anda dapat mengatur lokasi penyimpanan dan ukuran maksimum file.
    |
    */
    'uploads' => [
        'storage' => 'public', // Bisa 'local', 'public', atau 's3'
        'path' => 'blog/images',
        'max_file_size' => 2048, // dalam kilobyte (KB)
    ],

    /*
    |--------------------------------------------------------------------------
    | Default Author
    |--------------------------------------------------------------------------
    |
    | Nama penulis default jika postingan blog tidak memiliki penulis.
    |
    */
    'default_author' => 'Admin',

    /*
    |--------------------------------------------------------------------------
    | Slug Options
    |--------------------------------------------------------------------------
    |
    | Apakah slug secara otomatis dibuat dari judul, dan apakah slug harus unik.
    |
    */
    'slug' => [
        'auto_generate' => true,
        'unique' => true,
    ],

    /*
    |--------------------------------------------------------------------------
    | Middleware
    |--------------------------------------------------------------------------
    |
    | Middleware yang akan digunakan untuk rute blog. Anda dapat mengubah ini
    | untuk menambahkan otentikasi atau pembatasan akses lainnya.
    |
    */
    'middleware' => [
        'web',
    ],

];
