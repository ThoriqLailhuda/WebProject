@extends('template.sidebar')

@section('content')

<div class="container">

<form action="{{url('daftar_kunjungan')}}" method="post" required>
                                {{csrf_field()}}
                                Id
                                <input type="text" class="form-control" name="id" required>
                                Id BHP
                                <input type="text" class="form-control" name="id_bhp" required>
                                Harga
                                <input type="int" class="form-control" name="harga" required>
                                Jumlah
                                <input type="int" class="form-control" name="jml" required>
                                Create by 
                                <input type="text" class="form-control" name="cretae_by" required>
                                Create add
                                <input type="text" class="form-control" name="create_add" required>
                                Edited by
                                <input type="text" class="form-control" name="edit_by" required>
                                Edited Add
                                <input type="text" class="form-control" name="edit_add" required>

                                <br>
                                <input type="SUBMIT" class="btn btn-primary">   

                                </form>
</div>
@endsection