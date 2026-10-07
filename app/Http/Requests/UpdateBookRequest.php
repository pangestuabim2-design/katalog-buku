<?php
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateBookRequest extends FormRequest
{
    public function authorize(): bool { return true; }

    public function rules(): array
    {
        return [
            'title' => ['required','string','max:255'],
            'isbn' => ['nullable','string','max:20', Rule::unique('books','isbn')->ignore($this->route('book'))],
            'author' => ['required','string','max:150'],
            'publisher' => ['nullable','string','max:150'],
            'published_year' => ['nullable','integer','min:1900','max:'.date('Y')],
            'price' => ['required','numeric','min:0'],
            'stock' => ['required','integer','min:0'],
            'description' => ['nullable','string'],
        ];
    }
    public function messages(): array
    {
        return [
            'required' => ':attribute wajib diisi.',
            'isbn.unique' => 'ISBN sudah digunakan.',
        ];
    }
    public function attributes(): array
    {
        return [
            'title'=>'judul','isbn'=>'ISBN','author'=>'penulis','publisher'=>'penerbit',
            'published_year'=>'tahun terbit','price'=>'harga','stock'=>'stok','description'=>'deskripsi',
        ];
    }
}