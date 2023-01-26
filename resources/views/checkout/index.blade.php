@extends('layouts.main-app')

@section('content')

<div class="row">
    <div class="col-md-12">
        
        <div id="yttc-form-div">
            <h1 id="yttc-title">ConceptX Paymentform</h1>
            <br>

            @if(session()->has('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div>
            @endif

            <form method="POST" action="/checkout/new">

                @csrf

                <div class="form-group">
                    <h2>Personal Information</h2>
                </div>

                <div class="form-group">
                    <label>Name <span style="color: red !important; display: inline; float: none;">*</span></label>
                    <input placeholder="eg. Aung Aung" name="customer_name" type="text" class="form-control" />
                    <!-- Error -->
                    @if ($errors->has('customer_name'))
                    <div class="alert alert-danger">
                        {{ $errors->first('customer_name') }}
                    </div>
                    @endif
                </div>

                <div class="form-group">
                    <label>Gender <span style="color: red !important; display: inline; float: none;">*</span></label>
                    <input placeholder="eg. Aung Aung" name="customer_name" type="text" class="form-control" />
                    <!-- Error -->
                    @if ($errors->has('customer_name'))
                    <div class="alert alert-danger">
                        {{ $errors->first('customer_name') }}
                    </div>
                    @endif
                </div>

                <div class="form-group">
                    <label>Date of Birth <span style="color: red !important; display: inline; float: none;">*</span></label>
                    <input placeholder="eg. Aung Aung" name="customer_name" type="text" class="form-control" />
                    <!-- Error -->
                    @if ($errors->has('customer_name'))
                    <div class="alert alert-danger">
                        {{ $errors->first('customer_name') }}
                    </div>
                    @endif
                </div>

                <div class="form-group">
                <p>Are you CIS student? <span style="color: red !important; display: inline; float: none;">*</span></p>
                <input type="radio" id="mmk" name="currency" value="MMK" checked>
                <label for="mmk">YES</label><br>
                <input type="radio" id="usd" name="currency" value="USD">
                <label for="usd">NO</label><br>
                    @if ($errors->has('currency'))
                    <div class="alert alert-danger">
                        {{ $errors->first('currency') }}
                    </div>
                    @endif
                </div>

                <div class="form-group">
                    <label>Mail <span style="color: red !important; display: inline; float: none;">*</span></label>
                    <input placeholder="eg. info@gmail.com" name="email" type="email" class="form-control" />
                    @if ($errors->has('email'))
                    <div class="alert alert-danger">
                        {{ $errors->first('email') }}
                    </div>
                    @endif
                </div>

                <br />

                <div class="form-group">
                    <h2>Order Details</h2>
                </div>

                <div class="form-group">
                    <label>Courses <span style="color: red !important; display: inline; float: none;">*</span></label>
                    <select id="payment-type" name="product_name" class="form-control">
                        <option value="Financial Literacy 101">Financial Literacy 101</option>
                        <option value="Selling Secrets Book">Selling Secrets Book</option>
                        <option value="Paing VIP Mentoring Program">Paing VIP Mentoring Program</option>
                        <option value="25 Concepts Presentation and Financial Planning">25 Concepts Presentation and Financial Planning</option>
                        <option value="Wealth Goals 2022">Wealth Goals 2022</option>
                        <option value="Investing in Crypto">Investing in Crypto</option>
                        <option value="Professional Speaker Paid Training">Professional Speaker Paid Training</option>
                    </select>

                    @if ($errors->has('product_name'))
                    <div class="alert alert-danger">
                        {{ $errors->first('product_name') }}
                    </div>
                    @endif
                </div>

                <div class="form-group">
                <p>Please select currency <span style="color: red !important; display: inline; float: none;">*</span></p>
                <input type="radio" id="mmk" name="currency" value="MMK" checked>
                <label for="mmk">MMK</label><br>
                <input type="radio" id="usd" name="currency" value="USD">
                <label for="usd">USD</label><br>
                    @if ($errors->has('currency'))
                    <div class="alert alert-danger">
                        {{ $errors->first('currency') }}
                    </div>
                    @endif
                </div>

                <div class="form-group">
                    <label>Amount <span style="color: red !important; display: inline; float: none;">*</span></label>
                    <input placeholder="eg. 358200" name="amount" type="text" class="form-control"/>
                    @if ($errors->has('amount'))
                    <div class="alert alert-danger">
                        {{ $errors->first('amount') }}
                    </div>
                    @endif
                </div>

                <div class="form-group">
                    <label>Remark</label>
                    <input placeholder="Your remark" name="remark" type="text" class="form-control" />
                    <!-- Error -->
                    @if ($errors->has('remark'))
                    <div class="alert alert-danger">
                        {{ $errors->first('remark') }}
                    </div>
                    @endif
                </div>

                <div class="form-group">
                    <button type="submit" id="submit-btn">Checkout</button>
                </div>

            </form>
        </div>
    </div>
</div>


@endsection
@section('scripts')
@endsection