@extends('layouts.menuadmin')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">แก้ไขcategory</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                       @foreach ($cats as $cat )

                        @endforeach

                    <form action="{{route('category.update',$cat->id) }}" method="POST">


                        @csrf
                        @method('PUT')
                        <label>ชื่อรายการ</label>




                        <input type="text" name="" value="{{$cat->name}}">

                        <button type="submit" class="btn btn-success">แก้ไข</button>
                        <button type="reset" class="btn btn-danger">ยกเลิก</button>
                    </form>


                </div>


h´llo
            </div>
        </div>
    </div>
</div>
@endsection
