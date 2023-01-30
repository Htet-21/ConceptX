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
                    <label>Student's name <span style="color: red !important; display: inline; float: none;">*</span></label>
                    <input placeholder="Fill student's name" name="customer_name" type="text" class="form-control" />
                    <!-- Error -->
                    @if ($errors->has('customer_name'))
                    <div class="alert alert-danger">
                        {{ $errors->first('customer_name') }}
                    </div>
                    @endif
                </div>

                <div class="form-group">
                    <label>Gender <span style="color: red !important; display: inline; float: none;">*</span></label>
                    <input placeholder="Fill student's gender" name="customer_name" type="text" class="form-control" />
                    <!-- Error -->
                    @if ($errors->has('customer_name'))
                    <div class="alert alert-danger">
                        {{ $errors->first('customer_name') }}
                    </div>
                    @endif
                </div>

                <div class="form-group">
                    <label>Date of Birth <span style="color: red !important; display: inline; float: none;">*</span></label>
                    <input placeholder="Fill your date of birth" name="customer_name" type="text" class="form-control" />
                    <!-- Error -->
                    @if ($errors->has('customer_name'))
                    <div class="alert alert-danger">
                        {{ $errors->first('customer_name') }}
                    </div>
                    @endif
                </div>

                <div class="form-group">
                    <label>Are You CIS student?<span style="color: red !important; display: inline; float: none;">*</span></label>
                    <select id="payment-type" name="product_name" class="form-control">
                        <option value="Financial Literacy 101">Yes</option>
                        <option value="Selling Secrets Book">No</option>
                    </select>

                    @if ($errors->has('product_name'))
                    <div class="alert alert-danger">
                        {{ $errors->first('product_name') }}
                    </div>
                    @endif
                </div>

                <div class="form-group">
                    <label>Student's previous grade (COVID-19 မဖြစ်ခင်ကာလတွင် ကျောင်းသားအောင်ခဲ့သောအတန်းကိုရွေးပေးရန်)<span style="color: red !important; display: inline; float: none;">*</span></label>
                    <select id="payment-type" name="product_name" class="form-control">
                        <option value="KG">KG(Pre-primary)</option>
                        <option value="Grade 1">Grade 1(Primary 1)</option>
                        <option value="Grade 2">Grade 2(Primary 2)</option>
                        <option value="Grade 3">Grade 3(Primary 3)</option>
                        <option value="Grade 4">Grade 4(Primary 4)</option>
                        <option value="Grade 5">Grade 5(Primary 5)</option>
                        <option value="Grade 6">Grade 6(Primary 6)</option>
                        <option value="Grade 7">Grade 7(Sec 1)</option>
                        <option value="Grade 8">Grade 8(Sec 2)</option>
                        <option value="Grade 9">Grade 9(Sec 3)</option>
                        <option value="Grade 10">Grade 10(စနစ်သစ် ဆယ်တန်း) (Sec 4)</option>
                        <option value="Grade 11">Grade 11(‌သင်ရိုးဟောင်း ဆယ်တန်း)</option>
                    </select>

                    @if ($errors->has('product_name'))
                    <div class="alert alert-danger">
                        {{ $errors->first('product_name') }}
                    </div>
                    @endif
                </div>

                <div class="form-group">
                    <label>Mail <span style="color: red !important; display: inline; float: none;">*</span></label>
                    <input placeholder="Fill your email" name="email" type="email" class="form-control" />
                    @if ($errors->has('email'))
                    <div class="alert alert-danger">
                        {{ $errors->first('email') }}
                    </div>
                    @endif
                </div>

                <div class="form-group">
                    <label>phone number<span style="color: red !important; display: inline; float: none;">*</span></label>
                    <input placeholder="Fill your phone number" name="email" type="email" class="form-control" />
                    @if ($errors->has('email'))
                    <div class="alert alert-danger">
                        {{ $errors->first('email') }}
                    </div>
                    @endif
                </div>

                <div class="form-group">
                    <label>Mother's name<span style="color: red !important; display: inline; float: none;">*</span></label>
                    <input placeholder="Fill student's mother's name" name="email" type="email" class="form-control" />
                    @if ($errors->has('customer_name'))
                    <div class="alert alert-danger">
                        {{ $errors->first('customer_name') }}
                    </div>
                    @endif
                </div>

                <div class="form-group">
                    <label>Mother's NRC <span style="color: red !important; display: inline; float: none;">*</span></label>
                    <input placeholder="Fill student's mother's NRC" name="email" type="email" class="form-control" />
                    @if ($errors->has('email'))
                    <div class="alert alert-danger">
                        {{ $errors->first('email') }}
                    </div>
                    @endif
                </div>

                <div class="form-group">
                    <label>Father's name<span style="color: red !important; display: inline; float: none;">*</span></label>
                    <input placeholder="Fill student's father's name" name="email" type="email" class="form-control" />
                    @if ($errors->has('email'))
                    <div class="alert alert-danger">
                        {{ $errors->first('email') }}
                    </div>
                    @endif
                </div>

                <div class="form-group">
                    <label>Father's NRC <span style="color: red !important; display: inline; float: none;">*</span></label>
                    <input placeholder="Fill student's father's NRC" name="email" type="email" class="form-control" />
                    @if ($errors->has('email'))
                    <div class="alert alert-danger">
                        {{ $errors->first('email') }}
                    </div>
                    @endif
                </div>

                <div class="form-group">
                    <label>Parents' occupation (မိဘအလုပ်အကိုင်) <span style="color: red !important; display: inline; float: none;">*</span></label>
                    <input placeholder="Fill student's parents' occupation" name="email" type="email" class="form-control" />
                    @if ($errors->has('email'))
                    <div class="alert alert-danger">
                        {{ $errors->first('email') }}
                    </div>
                    @endif
                </div>

                <div class="form-group">
                    <label>How many siblings does the student have? <br> (မွေးချင်းဘယ်နှစ်ယောက် ရှိသနည်း)</label>
                    <input placeholder="Fill number of student's siblings" name="email" type="email" class="form-control" />
                </div>

                <div class="form-group">
                    <label>Please write the name and age of the student's siblings. <br> (မွေးချင်းအမည် နှင့် အသက်)</label>
                    <input placeholder="Fill name and age of the student's siblings." name="email" type="email" class="form-control" />
                </div>

                <div class="form-group">
                    <label>Student's guardian phone number <br> (အုပ်ထိန်းသူဖုန်းနံပါတ်) <span style="color: red !important; display: inline; float: none;">*</span></label>
                    <input placeholder="Fill student's guardian phone number" name="email" type="email" class="form-control" />
                    @if ($errors->has('email'))
                    <div class="alert alert-danger">
                        {{ $errors->first('email') }}
                    </div>
                    @endif
                </div>

                <div class="form-group">
                    <label>Viber phone number <br> (အမြဲအသုံးပြုသော Viber ဖုန်းနံပါတ်ထည့်ပေးရန်) <span style="color: red !important; display: inline; float: none;">*</span></label>
                    <input placeholder="Fill student's guardian phone number" name="email" type="email" class="form-control" />
                    @if ($errors->has('email'))
                    <div class="alert alert-danger">
                        {{ $errors->first('email') }}
                    </div>
                    @endif
                </div>

                <div class="form-group">
                    <label>States / Regions<span style="color: red !important; display: inline; float: none;">*</span></label>
                    <select id="payment-type" name="product_name" class="form-control">
                        <option value="KG">Yangon</option>
                        <option value="Mandalay">Mandalay</option>
                        <option value="Ayeyarwaddy">Ayeyarwaddy</option>
                        <option value="Bago">Bago</option>
                        <option value="Sagaing">Sagaing</option>
                        <option value="Magway">Magway</option>
                        <option value="Tanintharyi">Tanintharyi</option>
                        <option value="Kayin">Kayin</option>
                        <option value="Kayah">Kayah</option>
                        <option value="Kachin">Kachin</option>
                        <option value="Chin">Chin</option>
                        <option value="Mon">Mon</option>
                        <option value="Rakhine">Rakhine</option>
                        <option value="Naypyidaw territory">Naypyidaw territory</option>
                    </select>

                    @if ($errors->has('product_name'))
                    <div class="alert alert-danger">
                        {{ $errors->first('product_name') }}
                    </div>
                    @endif
                </div>

                <div class="form-group">
                    <label>Address (အိမ်လိပ်စာထည့်ပေးရန်) <span style="color: red !important; display: inline; float: none;">*</span></label>
                    <input placeholder="Fill address" name="email" type="email" class="form-control" />
                    @if ($errors->has('email'))
                    <div class="alert alert-danger">
                        {{ $errors->first('email') }}
                    </div>
                    @endif
                </div>

                <br />

                <!-- <div class="form-group">
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
                </div> -->

                <!-- <div class="form-group">
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
                </div> -->

                <div class="form-group">
                    <label>Amount <span style="color: red !important; display: inline; float: none;">*</span></label>
                    <input placeholder="enter amount" name="amount" type="text" class="form-control"/>
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