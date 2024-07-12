<x-layout>
    <x-slot:card_title>Dashboard {{ ucfirst(Auth::user()->role ?? 'member') }}</x-slot>
    <h3>Selamat Datang Dashboard {{ ucfirst(Auth::user()->name ?? '' ) }}!</h3>
    <p>Ini adalah halaman Dashboard {{ ucfirst(Auth::user()->role ?? 'member') }}</p>
</x-layout>
