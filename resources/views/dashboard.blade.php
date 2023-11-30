@extends('layout.adminlayout')
@section('master-admin')
    <div class="card p-3" style="overflow: auto">
        @php
            $data = DB::table('member')->get();
        @endphp
        <div class="table-responsive-lg">
            <table class="table table-striped table-responsive-lg">
                <thead>
                    <tr class="text-center">
                        <th>S/No.</th>
                        <th style="min-width: 120px">Full Name</th>
                        <th style="min-width: 120px">Email Address</th>
                        <th style="min-width: 120px">Phone No.</th>
                        <th style="min-width: 70px">Gender</th>
                        <th style="min-width: 120px">Status</th>
                        <th style="min-width: 120px">Amount Paid</th>
                        <th style="min-width: 120px">Transaction Id</th>
                        <th style="min-width: 120px">Reference Id</th>
                        <th style="min-width: 120px">Date Register</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $index => $item)
                        <tr class="text-center">
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $item->full_name }}</td>
                            <td>{{ $item->email }}</td>
                            <td>{{ $item->phone_no }}</td>
                            <td style="text-transform: capitalize">{{ $item->gender }}</td>
                            <td>{{ $item->status }}</td>
                            <td>N{{ $item->amount }}.00</td>
                            <td>{{ $item->transaction_id }}</td>
                            <td>{{ $item->reference_id }}</td>
                            <td>{{ $item->created_at }}</td>
                        </tr>
                    @endforeach


                </tbody>
            </table>
        </div>
    </div>
@endsection
