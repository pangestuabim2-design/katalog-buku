<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    public function run(): void
    {
        Book::create([
            'title' => 'Laskar Pelangi',
            'isbn' => '9789791227004',
            'author' => 'Andrea Hirata',
            'publisher' => 'Bentang Pustaka',
            'published_year' => 2005,
            'price' => 85000,
            'stock' => 10,
            'description' => 'Novel tentang perjuangan anak-anak Belitung.',
        ]);

        Book::create([
            'title' => 'Bumi',
            'isbn' => '9786020323012',
            'author' => 'Tere Liye',
            'publisher' => 'Gramedia',
            'published_year' => 2014,
            'price' => 99000,
            'stock' => 15,
            'description' => 'Petualangan Raib di dunia paralel.',
        ]);

        Book::create([
            'title' => 'Negeri 5 Menara',
            'isbn' => '9789792248616',
            'author' => 'A. Fuadi',
            'publisher' => 'Gramedia',
            'published_year' => 2009,
            'price' => 88000,
            'stock' => 12,
            'description' => 'Kisah santri di Pondok Madani.',
        ]);
    }
}