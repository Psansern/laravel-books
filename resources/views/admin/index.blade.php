
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

                          </tr>
                        </thead>
                        <tbody>
                          <tr>

    <th scope="row"></th>
                            <td></td>





                          </tr>

                        </tbody>
                      </table>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
