<?php
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $data = [
        [
            "nama" => "Nike Air Max 270",
            "harga" => "Rp. 1.000.000",
            "deskripsi" => "Sepatu Nike Air Max 270 dengan desain yang stylish dan nyaman untuk dipakai sehari-hari.",
            "warna" => "Hitam",
            "ukuran" => "42",
            "stok" => 50,
            "gambar" => "assets/images/Green 1.png",
        ],
        [
            "nama" => "Nike React Element",
            "harga" => "Rp. 1.200.000",
            "deskripsi" => "Sepatu Nike React Element dengan teknologi React untuk kenyamanan maksimal.",
            "warna" => "Putih",
            "ukuran" => "40",
            "stok" => 30,
            "gambar" => "assets/images/nike main.png",
        ],
        [
            "nama" => "Nike Air Zoom Pegasus",
            "harga" => "Rp. 1.150.000",
            "deskripsi" => "Sepatu Nike Air Zoom Pegasus dengan teknologi Zoom Air untuk respons yang cepat.",
            "warna" => "Abu-abu",
            "ukuran" => "41",
            "stok" => 35,
            "gambar" => "assets/images/Yellow Shoe.png",
        ],

        [
            "nama" => "Nike Free Run",
            "harga" => "Rp. 1.300.000",
            "deskripsi" => "Sepatu Nike Free Run dengan desain ringan dan cocok untuk lari jarak jauh.",
            "warna" => "Merah",
            "ukuran" => "39",
            "stok" => 40,
            "gambar" => "assets/images/toppng.png",
        ],

        [
            "nama" => "Nike Air Force 1",
            "harga" => "Rp. 900.000",
            "deskripsi" => "Sepatu Nike Air Force 1 dengan desain klasik dan bahan berkualitas tinggi.",
            "warna" => "Biru",
            "ukuran" => "38",
            "stok" => 25,
            "gambar" => "assets/images/Shoe 1.png",
        ],
    ];
    return view('home', ["title" => "Home Product", "data" => $data]);
});

Route::get("/product/{nama}", function($nama) {
    $data = [
    [
        "nama" => "Nike Air Max 270",
        "harga" => "Rp. 1.000.000",
        "deskripsi" => "Sepatu Nike Air Max 270 dengan desain yang stylish dan nyaman untuk dipakai sehari-hari.",
        "warna" => "Hitam",
        "ukuran" => ["42", "41", "43", "39", "40"],  // 5 Ukuran
        "stok" => 50,
        "gambar" => "assets/images/Green 1.png",
        "rating" => 4.5,
        "perusahaan" => "Nike Inc.",
    ],
    [
        "nama" => "Nike React Element",
        "harga" => "Rp. 1.200.000",
        "deskripsi" => "Sepatu Nike React Element dengan teknologi React untuk kenyamanan maksimal.",
        "warna" => "Putih",
        "ukuran" => ["40", "39", "38", "37", "36"],  // 5 Ukuran
        "stok" => 30,
        "gambar" => "assets/images/nike main.png",
        "rating" => 4.0,
        "perusahaan" => "Nike Inc.",
    ],
    [
        "nama" => "Nike Air Zoom Pegasus",
        "harga" => "Rp. 1.150.000",
        "deskripsi" => "Sepatu Nike Air Zoom Pegasus dengan teknologi Zoom Air untuk respons yang cepat.",
        "warna" => "Abu-abu",
        "ukuran" => ["41", "40", "42", "38", "39"],  // 5 Ukuran
        "stok" => 35,
        "gambar" => "assets/images/Yellow Shoe.png",
        "rating" => 4.2,
        "perusahaan" => "Nike Inc.",
    ],
    [
        "nama" => "Nike Free Run",
        "harga" => "Rp. 1.300.000",
        "deskripsi" => "Sepatu Nike Free Run dengan desain ringan dan cocok untuk lari jarak jauh.",
        "warna" => "Merah",
        "ukuran" => ["39", "38", "40", "41", "42"],  // 5 Ukuran
        "stok" => 40,
        "gambar" => "assets/images/toppng.png",
        "rating" => 4.7,
        "perusahaan" => "Nike Inc.",
    ],
    [
        "nama" => "Nike Air Force 1",
        "harga" => "Rp. 900.000",
        "deskripsi" => "Sepatu Nike Air Force 1 dengan desain klasik dan bahan berkualitas tinggi.",
        "warna" => "Biru",
        "ukuran" => ["38", "39", "37", "36", "35"],  // 5 Ukuran
        "stok" => 25,
        "gambar" => "assets/images/Shoe 1.png",
        "rating" => 4.3,
        "perusahaan" => "Nike Inc.",
    ],
];
    $brg = [];
    foreach($data as $dat) {
        if($dat["nama"] === $nama) {
            $brg = $dat;
        }
    }
    return view('barang', ['title' => "Product Detail", "data" => $brg]);
});