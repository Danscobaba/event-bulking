@extends('layout.adminlayout')
@section('master-admin')
    @php
        $data = DB::table('payment_settings')
            ->where('id', 1)
            ->first();

    @endphp
    <div class="card" style="height: 80vh; display:flex; align-items:center;">
        <div class="form">
            @if (session()->has('error'))
            <div class="alert alert-danger text-center error" role="alert">
               {{session()->get('error')}}
            </div>

            @endif
            @if (session()->has('success'))
            <div class="alert alert-success text-center error" role="alert">
               {{session()->get('success')}}
            </div>

            @endif

            <form  action="{{url('admin/update_payment')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="">Public Key</label>
                    <input type="text" class="custom-input" name="public_key" value="{{ $data->public_key }}"
                        id="">
                </div>
                <div class="form-group">
                    <label for="">Secret Key</label>
                    <input type="text" class="custom-input" name="secret_key" value="{{ $data->secret_key }}"
                        id="">
                </div>
                <div class="form-group">
                    <button type="submit" id="submit_btn" class="submit-btn">Update</button>
                </div>
            </form>
        </div>

    </div>
@endsection
