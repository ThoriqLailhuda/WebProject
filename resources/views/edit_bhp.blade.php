@extends('template.sidebar')

@section('content')

<div class="container">

<form action="{{url('update_bhp', $bhp->id)}}" method="post" required>
                                {{csrf_field()}}
                                Id
                                <input type="text" class="form-control" name="id" value="{{$bhp->id}}" required>
                                Id BHP
                                <input type="text" class="form-control" name="id_bhp" value="{{$bhp->id_bhp}}" required>
                                Harga
                                <input type="text" class="form-control" name="harga" value="{{$bhp->harga}}" required>
                                Jumlah
                                <input type="text" class="form-control" name="jml" value="{{$bhp->jml}}" required>
                                Edited by
                                <input type="text" class="form-control" name="edited_by" required>
                                Edited at
                                <input type="date" class="form-control" name="edited_at" required>
                                <br>
                                <input type="SUBMIT" class="btn btn-primary">   
                                </form>
</div>
@endsection