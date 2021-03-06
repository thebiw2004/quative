@extends('layouts.app')
@section('assets')
    
@endsection
@section('content')
<section class="showpayment">
    <div class="container bg-white mt-5 shadow-sm ">
        <div class="text-center pt-5  ">
            <h1 class="_hilight">ชำระเงิน</h1>
            <h4 class="_gray">ใบรหัสการจ้างงาน No. W{{$jobs->id}}</h4>
            {{-- <h4>ใบรหัสการจ้างงาน No. W0{{$jobs->id}}</h4> --}}
           
        </div>
       <div class="container">
        <div class="form-row pl-pr-lg-_ex  mt-5">
          <div class="form-group col-md-12">
            <h4 class="font-weight-bold mb-4">รายละเอียดการการชำระเงิน</h4>
            <div class=" text-left bg-white p-3 shadow-sm mb-5 border rounded">
                <h5 class="font-weight-bold">สรุปการชำระเงิน</h5>
                <hr>
            <div class="row">
                <div class="col-md-6">
                  @if ($jobs->package !== NULL)
                  <p>{{$jobs->package}}</p>

                  @else 
                  <p>แพ็คเกจ</p>

                  @endif
                  {{-- <p>{{$jobs->package}}</p> --}}
                  <p>ระยะเวลา</p>

                </div>
                <div class="col-md-6">
                  <p>{{number_format($jobs->package_price)}} บาท</p>
                  <p>{{number_format($jobs->dateextra_price)}} บาท</p>
                </div>
             <hr>
            </div> 
            <hr>
           <div class="row">
            
            <div class="col-md-6">
              <h5>รวมทั้งสิ้น</h5>
            </div>
            <div class="col-md-6">
              <p class="_hilight">{{number_format($jobs->pricerate)}} บาท</p>
            </div>
           </div>
            </div>
            {{-- 2  --}}
            <h4 class="font-weight-bold">ข้อมูลบัญชีของธนาคาร</h4>
            <p class="mb-3">ชำระเงินโดยการโอนเงินผ่านธนาคารนี้</p>
            <div class="container">
              <div class="row text-center show-payment shadow-sm mb-5">
                <div class="col-md-1">
                  <img src="../photo/kbank.jpg" alt="">
                </div>
                <p class="col-md-3">ธนาคารกสิกรไทย</p> 
                <p class="col-md-4">123-4-56789-0</p> 
                <p class="col-md-4">บริษัท ควอลทีฟ จำกัด</p> 
                <div class="mt-5"></div>
                <div class="col-md-1">
                  <img src="../photo/ktb.jpg" alt="">
                </div>
                <p class="col-md-3">ธนาคารกสิกรไทย</p> 
                <p class="col-md-4">123-4-56789-0</p> 
                <p class="col-md-4">บริษัท ควอลทีฟ จำกัด</p> 
               
              </div>
            </div>
            <div class="row pb-5">


              <div class="col-6 col-md-3 offset-md-3">
                <a href="{{ route('job.show', $jobs->token) }}" class="btn btn-outline-dark text-center mb-5 btn-lg btn-block">ยกเลิก</a>
              </div>
              <div class="col-6 col-md-6 ">
                <a href="{{ route('job.payment', $jobs->token) }}">
                <button type="submit" class="btn _primary-black text-center mb-5 btn-lg btn-block  d-none d-md-block">อัพโหลดหลักฐานการชำระเงิน</button>
              </a>
                <a href="{{ route('job.payment', $jobs->token) }}">
                  <button type="submit" class="btn _primary-black text-center mb-5 btn-lg btn-block d-md-none">อัพโหลด</button>
                  </a>
          
              </div>
              
            </div>
           
           
          </div>
        </div>
       </div>
    </div>
</section>
@endsection