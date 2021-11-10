<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $book = new Book();
        $book->name = 'Harry Potter en de steen de Wijzen';
        $book->price = '25.0';
        $book->auteur = 'JK Rowling';
        $book->pages = '120';
        $book->save();

        $book = new Book();
        $book->name = 'Hitchhikers guide tot he Universe';
        $book->price = '0';
        $book->auteur = 'Douglas Adams';
        $book->pages = '120';
        $book->save();

        $book = new Book();
        $book->name = 'Oorlog en Vrede';
        $book->price = '0';
        $book->auteur = 'Tolsjoy';
        $book->pages = '120';
        $book->save();

        $book = new Book();
        $book->name = 'Moonraker';
        $book->price = '0';
        $book->auteur = 'Ian Fleming';
        $book->pages = '120';
        $book->save();

        $book = new Book();
        $book->name = 'Dr No';
        $book->price = '0';
        $book->auteur = 'Ian Fleming';
        $book->pages = '120';
        $book->save();

        $book = new Book();
        $book->name = 'Turks Fruit';
        $book->price = '0';
        $book->auteur = 'Jan Wolkers';
        $book->pages = '120';
        $book->save();

        $book = new Book();
        $book->name = 'Wurgtechnieken';
        $book->price = '0';
        $book->auteur = 'Ward Ruislink';
        $book->pages = '120';
        $book->save();
    }
}
