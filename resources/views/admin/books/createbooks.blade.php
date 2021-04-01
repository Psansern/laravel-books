@extends('layouts.menuadmin')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">เพิ่มหนังสือ</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


                    <form action="{{ route('books.store') }}" method="POST">
                        @csrf

                        <label>ชื่อรายการ</label>
                        <select class="form-select" name="cat_id">
                            <option selected>เลือกชื่อรายการ</option>
                                 @foreach ($category as $cat )
                            <option value="{{$cat->id}}">{{$cat->name}}</option>
                        @endforeach
                          </select>
                        </br>
                        <label >ชื่อหนังสือ</label>
                        <input type="text" name="book_name" value="">
                    </br>
                        <label>ราคา</label>
                        <input type="text" name="price" value="">
                </br>
                        <button type="submit" class="btn btn-primary">เพิ่ม</button>
                        <button type="reset" class="btn btn-danger">ยกเลิก</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
