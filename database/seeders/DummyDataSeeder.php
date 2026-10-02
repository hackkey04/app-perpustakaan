<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\Category;
use App\Models\Member;
use Illuminate\Database\Seeder;

class DummyDataSeeder extends Seeder
{
    public function run(): void
    {
        $data = array (
  'kategori' => 
  array (
    0 => 
    array (
      'nama_kategori' => 'Fiksi Sastra',
      'deskripsi' => 'Diperbarui.',
    ),
    1 => 
    array (
      'nama_kategori' => 'Fiksi',
      'deskripsi' => 'Kategori Fiksi',
    ),
    2 => 
    array (
      'nama_kategori' => 'Teknologi',
      'deskripsi' => 'Kategori Teknologi',
    ),
    3 => 
    array (
      'nama_kategori' => 'Sejarah',
      'deskripsi' => 'Kategori Sejarah',
    ),
    4 => 
    array (
      'nama_kategori' => 'Sains',
      'deskripsi' => 'Kategori Sains',
    ),
    5 => 
    array (
      'nama_kategori' => 'Komik',
      'deskripsi' => 'Kategori Komik',
    ),
    6 => 
    array (
      'nama_kategori' => 'Religi',
      'deskripsi' => 'Kategori Religi',
    ),
    7 => 
    array (
      'nama_kategori' => 'Ekonomi',
      'deskripsi' => 'Kategori Ekonomi',
    ),
    8 => 
    array (
      'nama_kategori' => 'Psikologi',
      'deskripsi' => 'Kategori Psikologi',
    ),
    9 => 
    array (
      'nama_kategori' => 'Filsafat',
      'deskripsi' => 'Kategori Filsafat',
    ),
    10 => 
    array (
      'nama_kategori' => 'Seni',
      'deskripsi' => 'Kategori Seni',
    ),
    11 => 
    array (
      'nama_kategori' => 'Kesehatan',
      'deskripsi' => 'Kategori Kesehatan',
    ),
    12 => 
    array (
      'nama_kategori' => 'Pendidikan',
      'deskripsi' => 'Kategori Pendidikan',
    ),
    13 => 
    array (
      'nama_kategori' => 'a',
      'deskripsi' => NULL,
    ),
  ),
  'buku' => 
  array (
    0 => 
    array (
      'judul' => 'Bumi Manusia',
      'penulis' => 'Pramoedya Ananta Toer',
      'penerbit' => 'Hasta Mitra',
      'tahun_terbit' => 1980,
      'isbn' => '9789794330746',
      'stok' => 3,
      'category_id' => 2,
      'sampul' => NULL,
    ),
    1 => 
    array (
      'judul' => 'Clean Code',
      'penulis' => 'Robert C. Martin',
      'penerbit' => 'Prentice Hall',
      'tahun_terbit' => 2008,
      'isbn' => '9780132350884',
      'stok' => 7,
      'category_id' => 3,
      'sampul' => NULL,
    ),
    2 => 
    array (
      'judul' => 'Sapiens',
      'penulis' => 'Yuval Noah Harari',
      'penerbit' => 'Harper',
      'tahun_terbit' => 2011,
      'isbn' => '9780062316097',
      'stok' => 4,
      'category_id' => 7,
      'sampul' => NULL,
    ),
    3 => 
    array (
      'judul' => 'The Hobbit',
      'penulis' => 'J.R.R. Tolkien',
      'penerbit' => 'Allen & Unwin',
      'tahun_terbit' => 1937,
      'isbn' => '9780547928227',
      'stok' => 6,
      'category_id' => 6,
      'sampul' => NULL,
    ),
    4 => 
    array (
      'judul' => 'Filosofi Tergapang-Gapang',
      'penulis' => 'Andrea Hirata',
      'penerbit' => 'Kompas',
      'tahun_terbit' => 2012,
      'isbn' => '9789797096663',
      'stok' => 2,
      'category_id' => 2,
      'sampul' => NULL,
    ),
    5 => 
    array (
      'judul' => 'Pemrograman Web Laravel',
      'penulis' => 'Ade Irma Suryani',
      'penerbit' => 'Indeks',
      'tahun_terbit' => 2020,
      'isbn' => '9786026477554',
      'stok' => 8,
      'category_id' => 3,
      'sampul' => NULL,
    ),
    6 => 
    array (
      'judul' => 'Sejarah Indonesia Modern',
      'penulis' => 'M.C. Ricklefs',
      'penerbit' => 'Kanisius',
      'tahun_terbit' => 2001,
      'isbn' => '9789791741552',
      'stok' => 3,
      'category_id' => 4,
      'sampul' => NULL,
    ),
    7 => 
    array (
      'judul' => 'Negeri 5 Menara',
      'penulis' => 'Ahmad Fuadi',
      'penerbit' => 'Gramedia Pustaka',
      'tahun_terbit' => 2009,
      'isbn' => '9789792245899',
      'stok' => 5,
      'category_id' => 2,
      'sampul' => NULL,
    ),
    8 => 
    array (
      'judul' => 'Dasar-Dasar JavaScript',
      'penulis' => 'Nathan Sebhastian',
      'penerbit' => 'Elex Media',
      'tahun_terbit' => 2021,
      'isbn' => '9786020639215',
      'stok' => 9,
      'category_id' => 3,
      'sampul' => NULL,
    ),
    9 => 
    array (
      'judul' => 'Ensiklopedia Sains Anak',
      'penulis' => 'Tim Kompas',
      'penerbit' => 'Kompas',
      'tahun_terbit' => 2015,
      'isbn' => '9789797099991',
      'stok' => 4,
      'category_id' => 5,
      'sampul' => NULL,
    ),
    10 => 
    array (
      'judul' => 'Dilan: Dia adalah Dilanku dari Bandung',
      'penulis' => 'Pidi Baiq',
      'penerbit' => 'Bentang Pustaka',
      'tahun_terbit' => 2014,
      'isbn' => '9786027870833',
      'stok' => 6,
      'category_id' => 2,
      'sampul' => NULL,
    ),
    11 => 
    array (
      'judul' => 'Laskar Pelangi',
      'penulis' => 'Andrea Hirata',
      'penerbit' => 'Bentang Pustaka',
      'tahun_terbit' => 2005,
      'isbn' => '5',
      'stok' => 2,
      'category_id' => 1,
      'sampul' => NULL,
    ),
  ),
  'anggota' => 
  array (
    0 => 
    array (
      'nama' => 'Siti Aminah',
      'nim' => '2310501001',
      'email' => 'siti.aminah@pens.ac.id',
      'nomor_telepon' => '081234567890',
      'alamat' => 'Jl. Ketintang Surabaya',
      'status' => 'aktif',
    ),
    1 => 
    array (
      'nama' => 'Budi Santoso',
      'nim' => '2310501002',
      'email' => 'budi@pens.ac.id',
      'nomor_telepon' => '081298765432',
      'alamat' => 'Sidoarjo',
      'status' => 'aktif',
    ),
    2 => 
    array (
      'nama' => 'Dewi Lestari',
      'nim' => '2310501003',
      'email' => 'dewi.lestari@pens.ac.id',
      'nomor_telepon' => '081211122233',
      'alamat' => 'Jl. Ketintang No.1 Surabaya',
      'status' => 'aktif',
    ),
    3 => 
    array (
      'nama' => 'Agus Prasetyo',
      'nim' => '2310501004',
      'email' => 'agus.prasetyo@pens.ac.id',
      'nomor_telepon' => '081222233344',
      'alamat' => 'Jl. Rungkut Asri No.5 Surabaya',
      'status' => 'aktif',
    ),
    4 => 
    array (
      'nama' => 'Rina Wulandari',
      'nim' => '2310501005',
      'email' => 'rina.wulandari@pens.ac.id',
      'nomor_telepon' => '081233344455',
      'alamat' => 'Jl. Dharmahusada No.9 Surabaya',
      'status' => 'nonaktif',
    ),
    5 => 
    array (
      'nama' => 'Bambang Sutrisno',
      'nim' => '2310501006',
      'email' => 'bambang.s@pens.ac.id',
      'nomor_telepon' => '081244455566',
      'alamat' => 'Jl. Mulyorejo No.12 Surabaya',
      'status' => 'aktif',
    ),
    6 => 
    array (
      'nama' => 'Sari Rahayu',
      'nim' => '2310501007',
      'email' => 'sari.rahayu@pens.ac.id',
      'nomor_telepon' => '081255566677',
      'alamat' => 'Jl. Kenjeran No.3 Surabaya',
      'status' => 'aktif',
    ),
    7 => 
    array (
      'nama' => 'Dian Permata',
      'nim' => '2310501008',
      'email' => 'dian.permata@pens.ac.id',
      'nomor_telepon' => '081266677788',
      'alamat' => 'Jl. Ngagel Jaya No.7 Surabaya',
      'status' => 'aktif',
    ),
    8 => 
    array (
      'nama' => 'Fajar Nugroho',
      'nim' => '2310501009',
      'email' => 'fajar.nugroho@pens.ac.id',
      'nomor_telepon' => '081277788899',
      'alamat' => 'Jl. Sukolilo No.4 Surabaya',
      'status' => 'nonaktif',
    ),
    9 => 
    array (
      'nama' => 'Maya Safitri',
      'nim' => '2310501010',
      'email' => 'maya.safitri@pens.ac.id',
      'nomor_telepon' => '081288899900',
      'alamat' => 'Jl. Ketintang Baru No.8 Surabaya',
      'status' => 'aktif',
    ),
    10 => 
    array (
      'nama' => 'Rizky Ramadhan',
      'nim' => '2310501011',
      'email' => 'rizky.ramadhan@pens.ac.id',
      'nomor_telepon' => '081299900011',
      'alamat' => 'Jl. Kutisari No.6 Surabaya',
      'status' => 'aktif',
    ),
    11 => 
    array (
      'nama' => 'Haryanto',
      'nim' => '0293802',
      'email' => 'laskdjsa@gmail.com',
      'nomor_telepon' => '0852231342',
      'alamat' => 'Pakis',
      'status' => 'nonaktif',
    ),
    12 => 
    array (
      'nama' => 'Andrew',
      'nim' => '9128319',
      'email' => 'budi@irigasi.com',
      'nomor_telepon' => '12329183',
      'alamat' => 'Misisipi',
      'status' => 'nonaktif',
    ),
  ),
);

        foreach ($data["kategori"] as $row) Category::create($row);
        foreach ($data["buku"] as $row) Book::create($row);
        foreach ($data["anggota"] as $row) Member::create($row);
    }
}
