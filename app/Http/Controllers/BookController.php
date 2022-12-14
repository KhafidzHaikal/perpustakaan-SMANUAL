<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use App\Models\Book;
use App\Models\Peminjaman;
use App\Models\Petugas;
use App\Models\User;
use Carbon\Carbon;
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
        $user = $request->user();
        return view('admin.tambah_buku', compact('user'));
    }

    public function viewEditBuku(Request $request, $id)
    {
        $user = $request->user();
        $buku = Book::where('id', $id)->first();
        return view('admin.edit_buku', compact('buku', 'user'));
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
        $peminjaman = Peminjaman::get();


        if ($user->peran == 'admin') {
            return view('admin.peminjaman_buku', compact('user', 'peminjaman'));
        } else {
            $peminjaman = Peminjaman::where('user_id', $request->user()->id)->get();
            return view('user.peminjaman_buku', compact('user', 'peminjaman'));
        }
    }

    public function pinjamBuku(Request $request, $id)
    {
        $user = $request->user();
        $buku = Book::where('id', $id)->first();

        $peminjaman = new Peminjaman();
        $peminjaman->user_id = $user->id;
        $peminjaman->book_id = $buku->id;
        $peminjaman->tanggal_peminjaman = Carbon::now();
        $peminjaman->tanggal_pengembalian = Carbon::now()->addDays(7);
        $peminjaman->denda = 0;

        try {
            $peminjaman->save();
            return redirect()->route('view.pinjam.buku');
        } catch (\Throwable $th) {
            return back()->with('error', 'Gagal Meminjam Buku');
        }
    }

    public function viewPengembalianBuku(Request $request)
    {
        $user = $request->user();
        // $peminjaman = Peminjaman::get();


        if ($user->peran == 'admin') {
            return view('admin.pengembalian_buku', compact('user'));
        } else {
            return view('user.pengembalian_buku', compact('user'));
        }
    }
}