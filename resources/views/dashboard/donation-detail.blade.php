@extends('layouts.admin-app')

@section('title')
Order Detail | ConceptX
@endsection

@section('content')

<div id="renewed-driver" class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-body">

        <h1 style="text-align:left;" id="edit-license-type">Order and Payment Detail</h1>

        <p>Name: {{$donation_detail->customer_name}}</p>
        <hr>

        <p>Gender: {{$donation_detail->gender}}</p>
        <hr>

        <p>NRC: {{$donation_detail->nrc1}}</p>
        <hr>

        <p>Grade: {{$donation_detail->grade}}</p>
        <hr>

        <p>Address: {{$donation_detail->address}}</p>
        <hr>

        <p>Mail: {{$donation_detail->email}}</p>
        <hr>

        <p>Order ID: {{$donation_detail->order_id}}</p>
        <hr>

        <p>Amount: {{$donation_detail->amount}}</p>
        <hr>

        <p>Courses: {{$donation_detail->product_name}}</p>
        <hr>

        <p>Payment status: {{$donation_detail->transaction_status}}</p>
        <hr>

        @if($donation_detail->remark !== null)
        <p>Remark: {{$donation_detail->remark}}</p>
        <hr>
        @endif
      </div>
    </div>
  </div>
</div>


@endsection

@section('scripts')

@endsection