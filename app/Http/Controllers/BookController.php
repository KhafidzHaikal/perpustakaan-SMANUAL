<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use App\Models\Book;
use App\Models\Petugas;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class BookController extends Controller
{
    public function viewDaftarBuku(Request $request)
    {
        $user = $request->user();
        $buku = Book::get();

        if ($user->peran == 'admin') {
            return view('admin.daftar_buku', compact('user', 'buku'));
        } else {
            return view('user.daftar_buku', compact('user', 'buku'));
        }
    }

    public function viewTambahBuku(Request $request)
    {
        return view('admin.tambah_buku');
    }

    public function viewEditBuku(Request $request, $id)
    {
        $buku = Book::where('id', $id)->first();
        return view('admin.edit_buku', compact('buku'));
    }

    public function tambahBuku(Request $request)
    {
        $buku = new Book();
        $buku->user_id = $request->user()->id;
        $buku->nama_buku = $request->nama_buku;
        $buku->pengarang = $request->pengarang;
        $buku->penerbit = $request->penerbit;
        $buku->tahun_terbit = $request->tahun_terbit;

        try {
            $buku->save();
            return redirect()->route('view.buku');
        } catch (\Throwable $th) {
            return back()->withInput($request->only('nama_buku', 'pengarang', 'penerbit', 'tahun_terbit'))->with('error', 'Gagal menambahkan buku');
        }
    }

    public function editBuku(Request $request, $id)
    {
        $buku = Book::where('id', $id)->first();

        $updateBuku = DB::transaction(function () use ($request, $buku) {
            $buku->update([
                'nama_buku' => $request->nama_buku,
                'pengarang' => $request->pengarang,
                'penerbit' => $request->penerbit,
                'tahun_terbit' => $request->tahun_terbit,
            ]);
        });

        return redirect()->route('view.buku');
    }

    public function hapusBuku(Request $request, $id)
    {
        $user = $request->user();
        $buku = Book::where('id', $id)->where('user_id', $user->id)->first();

        try {
            $buku->delete();
            return back()->with('success', 'Berhasil menghapus buku');
        } catch (\Throwable $th) {
            return back()->with('error', 'Gagal menghapus buku');
        }
    }

    public function viewPinjamBuku(Request $request)
    {
        $user = $request->user();
        $buku = Book::get();

        if ($user->peran == 'admin') {
            return view('admin.peminjaman_buku', compact('user', 'buku'));
        } else {
            return view('user.peminjaman_buku', compact('user', 'buku'));
        }
    }
}