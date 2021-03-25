
@extends('layouts.menuadmin')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">ข้อมูลรายการหนังสือ</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">ลำดับ</th>
                            <th scope="col">รายการ</th>
                            <th scope="col">วันทีสร้าง</th>
                            <th scope="col">action</th>

                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                                @foreach ($cats as $cat )


    <th scope="row">{{$cat->id}}</th>
                            <td> <a href="#">{{$cat->name }}</a></td>
                            <td>{{ $cat->created_at }}</td>
                            <td>
                                <a  class="btn btn-primary" href="{{ route('category.edit',$cat->id) }}">แก้ไข</a>
                                <a  class="btn btn-danger"href="">ลบ</a>
                            </td>
                          </tr>
                         @endforeach
                        </tbody>
                      </table>


                     {!! $cats->links() !!} <!-- ให้ทำการแบ่งทุกๆ 5 แถว-->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
