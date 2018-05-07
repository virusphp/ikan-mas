@extends('layouts.app')

@section('content')
@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif


<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">Home</li>
        </ol>
    </nav>
    <div class="row justify-content-center">
        {{--  Master  --}}
        <div class="col-md-3">
            <div class="card">
                <div class="card-header">Master</div>

                <div class="card-body">
                    <div class="daftar-menu">
                        <a class="a-menu" href="#">
                            <img class="logo-menu" src="{{ asset('img/barang.png')  }}" alt="">
                            Barang
                        </a>
                    </div>
                    <div class="daftar-menu">
                        <a class="a-menu" href="#">
                            <img class="logo-menu" src="{{ asset('img/kualitas.png')  }}" alt="">
                            Kualitas
                        </a>
                    </div>
                </div>
            </div>
        </div>
        {{--  Transaksi  --}}
        <div class="col-md-3">
            <div class="card">
                <div class="card-header">Transaksi</div>

                <div class="card-body text-center">
                    <div class="daftar-menu">
                        <a class="a-menu" href="#">
                            <img class="logo-menu" src="{{ asset('img/jual.png')  }}" alt="">
                            Jual
                        </a>
                    </div>
                    <div class="daftar-menu">
                        <a class="a-menu" href="#">
                            <img class="logo-menu" src="{{ asset('img/beli.png')  }}" alt="">
                            Beli
                        </a>
                    </div>
                </div>
            </div>
        </div>
        {{--  Master  --}}
        <div class="col-md-3">
            <div class="card">
                <div class="card-header">Stok Barang</div>

                <div class="card-body text-center">
                    <div class="daftar-menu">
                        <a class="a-menu" href="#">
                            <img class="logo-menu" src="{{ asset('img/etalase.png')  }}" alt="">
                            Stok Depan
                        </a>
                    </div>
                    <div class="daftar-menu">
                        <a class="a-menu" href="#">
                            <img class="logo-menu" src="{{ asset('img/stok.png')  }}" alt="">
                            Stok Gudang
                        </a>
                    </div>
                </div>
            </div>
        </div>
        {{--  Master  --}}
        <div class="col-md-3">
            <div class="card">
                <div class="card-header">Laporan</div>

                <div class="card-body text-center">
                    <div class="daftar-menu">
                        <a class="a-menu" href="#">
                            <img class="logo-menu" src="{{ asset('img/report-penjualan.png')  }}" alt="">
                            Kualitas
                        </a>
                    </div>
                    <div class="daftar-menu">
                        <a class="a-menu" href="#">
                            <img class="logo-menu" src="{{ asset('img/report-pembelian.png')  }}" alt="">
                            Kualitas
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
