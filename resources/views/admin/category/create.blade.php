@extends('layouts.menuadmin')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">เพิ่มcategory</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="{{ route('category.store') }}" method="POST">
                        @csrf

                        <label>ชื่อรายการ</label>
                        <input type="text" name="name" value="">

                        <button type="submit" class="btn btn-primary">เพิ่ม</button>
                        <button type="reset" class="btn btn-danger">ยกเลิก</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
