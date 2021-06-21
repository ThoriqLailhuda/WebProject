@extends('template.sidebar')

@section('content')

{{$jumlah_pembayaran}}
<a href="{{url('proses_bayar')}}/{{$id_bayar}}">Bayar</a>

@endsection