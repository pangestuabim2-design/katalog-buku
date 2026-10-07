<?php
namespace Tests\Feature;

use App\Models\Book;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class BookCrudTest extends TestCase
{
    use RefreshDatabase;

    public function test_book_index_can_be_displayed(): void
    {
        Book::factory()->count(3)->create();
        $this->get(route('books.index'))->assertOk()->assertSee('Daftar Buku');
    }

    public function test_book_can_be_created(): void
    {
        $payload = [
            'title' => 'Pemrograman Laravel 13',
            'isbn' => '9781234567890',
            'author' => 'Penulis Contoh',
            'publisher' => 'Penerbit Kampus',
            'published_year' => 2026,
            'price' => 125000,
            'stock' => 10,
            'description' => 'Deskripsi buku.',
        ];

        $response = $this->post(route('books.store'), $payload);
        $response->assertRedirect(route('books.index'));
        $this->assertDatabaseHas('books', ['isbn' => '9781234567890']);
    }

    public function test_invalid_input_fails_validation(): void
    {
        $response = $this->post(route('books.store'), ['title' => '']);
        $response->assertSessionHasErrors(['title', 'author', 'price', 'stock']);
    }

    public function test_book_can_be_updated(): void
    {
        $book = Book::factory()->create();
        $response = $this->put(route('books.update', $book), [
            'title' => 'Judul Baru',
            'author' => $book->author,
            'price' => $book->price,
            'stock' => $book->stock,
        ]);
        $response->assertRedirect(route('books.index'));
        $this->assertDatabaseHas('books', ['id' => $book->id, 'title' => 'Judul Baru']);
    }

    public function test_book_can_be_deleted(): void
    {
        $book = Book::factory()->create(['stock' => 5]);
        $response = $this->delete(route('books.destroy', $book));
        $response->assertRedirect(route('books.index'));
        $this->assertDatabaseMissing('books', ['id' => $book->id]);
    }

    public function test_book_search_works(): void
    {
        Book::factory()->create(['title' => 'Laravel Abim Spesial']);
        Book::factory()->create(['title' => 'Buku Lain']);
        $this->get(route('books.index', ['q' => 'Abim']))->assertSee('Laravel Abim Spesial')->assertDontSee('Buku Lain');
    }
}