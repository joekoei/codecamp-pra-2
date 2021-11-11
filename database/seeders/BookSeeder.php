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
        $book->price = '12,50';
        $book->auteur = 'JK Rowling';
        $book->pages = '258';
        $book->save();

        $book = new Book();
        $book->name = 'Hitchhikers guide tot he Universe';
        $book->price = '19,90';
        $book->auteur = 'Douglas Adams';
        $book->pages = '336';
        $book->save();

        $book = new Book();
        $book->name = 'Oorlog en Vrede';
        $book->price = '37,50';
        $book->auteur = 'Tolsjoy';
        $book->pages = '1624';
        $book->save();

        $book = new Book();
        $book->name = 'Moonraker';
        $book->price = '14,99';
        $book->auteur = 'Ian Fleming';
        $book->pages = '245';
        $book->save();

        $book = new Book();
        $book->name = 'Dr No';
        $book->price = '15,00';
        $book->auteur = 'Ian Fleming';
        $book->pages = '286';
        $book->save();

        $book = new Book();
        $book->name = 'Turks Fruit';
        $book->price = '9,99';
        $book->auteur = 'Jan Wolkers';
        $book->pages = '192';
        $book->save();

        $book = new Book();
        $book->name = 'Wurgtechnieken';
        $book->price = '13.99';
        $book->auteur = 'Ward Ruyslink';
        $book->pages = '205';
        $book->save();

        $book = new Book();
        $book->name =  'The Lord of the Rings';
        $book->price = '29,99';
        $book->auteur = 'J.R.R. Tolkien';
        $book->pages = '480';
        $book->save();

        $book = new Book();
        $book->name =  'The Little Prince';
        $book->price = '9,95';
        $book->auteur = 'Antoine de Saint-Exupéry';
        $book->pages = '120';
        $book->save();

        $book = new Book();
        $book->name =  'Charlie and the Chocolate Factory';
        $book->price = '7,99';
        $book->auteur = 'Roald Dahl';
        $book->pages = '192';
        $book->save();
    }
}
