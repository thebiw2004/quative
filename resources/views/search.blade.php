@extends('layouts.app')
@section('assets')
   <link rel="stylesheet" href="css/style_match.css">
   <link rel="stylesheet" href="{{asset('css/flatpickr.min.css')}}">
@endsection

@section('content')
<section class="content">
<div class="container modal-lg mt_ex">
    <div class="text-center p-5">
        <h1><span class="_hilight" style="font-family: chonburi;">กรอกข้อมูลตามที่กำหนด</span></h1>
        <p>
            กรอกข้อมูลให้ครบถ้วนเพื่อที่เราจะได้หานักออกแบบที่<br>
            ใช่ที่สุดสำหรับคุณ
        </p>
    </div>
    <div class="row">
        <div class="col-12 col-md-12 p-3 mb-5 rounded ">
            <form class="  msform modal-lg  rounded-ex" action="/search/create/store1" method="post" enctype="multipart/form-data" style=" box-shadow: 5px 1px 20px 1px rgba(144, 74, 232,.15);">
                {{ csrf_field() }}

                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <div class="rec" >
                        <div class="row">
                            <div class="col-3" style="margin-left: 50px; margin-top: 20px;">
                                <image id="profileImage" class="rounded-circle" src="https://picsum.photos/140" />
                            </div>
                            <div class="col-3 align-items-center" style="margin-top: 40px;">
                                <div class="fill">
                                    <h1 class="titlename">{{$users->name}}</h1>
                                    <p>Entrepreneur</p>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="container p-5">
                        <h2 class="selectfillter" >เลือกประเภทผลิตภัณฑ์ที่ต้องการจะออกแบบ</h2>
                        <div class="row">
                            <div class="col-9">
                                <div class="form-group">
                                    <input style="border-width: 2px;" type="text" class="detaill-select " name="categories" plachholder="sadas" id="output">
                                    <input style="display: none;" type="text"  name="categories_id" plachholder="sadas" id="output2">
                                </div>
                            </div>
                            <div class="col-3 text-right">
                                <button type="button" class="btn _primary-btn btn-block " data-toggle="modal" data-target=".bd-example-modal-lg">เลือก</button>
                            </div>
                        </div>
                        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-xl" role="document" style="    max-width: 1140px;">

                                <div class="modal-content p-5 mb-5 form-match rounded-ex">

                                    <form>
                                        <div class="tab-content" id="myTabContent">
                                            <button type="button" class="close" style="    font-size: 3.5rem;" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                            <div class="form-group">
                                                <h1 ><span class="_hilight">เลือกประเภเทการออกแบบ</span></h1>

                                                <div class="row">
                                                    <div class="col-6 rounded-ex p-5" style="border: #C4C4C4 solid 1px; background: #F9F9F9;">
                                                        <div class="list-group" id="list-tab" role="tablist">
                                                            <h4>แนวทางการออกแบบ</h4>
                                                            <div class="mt-3 ">
                                                                <div>
                                                                    <ul class="nav nav-tabs card-header-tabs d-block" id="myTab" role="tablist">
                                                                        <li class="nav-item">
                                                                            <a class="btn _primary-drop m-1" id="one-tab" data-toggle="tab" href="#one" role="tab" aria-controls="One" aria-selected="true">บรรจุภัณฑ์ประเภท กล่อง</a>
                                                                        </li>
                                                                        <li class="nav-item">
                                                                            <a class="btn _primary-drop m-1" id="two-tab" data-toggle="tab" href="#two" role="tab" aria-controls="Two" aria-selected="false">บรรจุภัณฑ์ประเภท แก้ว</a>
                                                                        </li>
                                                                        <li class="nav-item">
                                                                            <a class="btn _primary-drop m-1" id="three-tab" data-toggle="tab" href="#three" role="tab" aria-controls="Three" aria-selected="false">บรรจุภัณฑ์ประเภท ขวด</a>
                                                                        </li>
                                                                        <li class="nav-item">
                                                                            <a class="btn _primary-drop m-1" id="four-tab" data-toggle="tab" href="#four" role="tab" aria-controls="four" aria-selected="false">บรรจุภัณฑ์ประเภท ถุง</a>
                                                                        </li>
                                                                        <li class="nav-item">
                                                                            <a class="btn _primary-drop m-1" id="five-tab" data-toggle="tab" href="#five" role="tab" aria-controls="five" aria-selected="false">บรรจุภัณฑ์ประเภท กระป๋อง</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="col-6">
                                                        <div class="tab-content" id="nav-tabContent">
                                                            <h4>แนวทางการออกแบบ</h4>
                                                            <div class="tab-pane fade show active p-3" id="one" role="tabpanel" aria-labelledby="one-tab">
                                                                <h5>เลือกรายละเอียด</h5>
                                                                <div class="row">

                                                                    @foreach ($cats as $cat)
                                                                        @if ($cat->kindID == 1)

                                                                            <div class="col-6 p-3">
                                                                                <button class="card" type="button" value="{{$cat->id}}" name="cat" onclick="addCart('{{$cat->name}}'),addID('{{$cat->id}}')"  data-dismiss="modal">
                                                                                    <img class="card-img-top" src="{{$cat->catsPic}}">
                                                                                    <div class="card-body">
                                                                                        <h4 class="card-title"> {{$cat->name}}</h4>
                                                                                        <small class="card-text">{{$cat->size}}</small>


                                                                                    </div>
                                                                                </button>
                                                                            </div>
                                                                        @endif
                                                                    @endforeach


                                                                </div>
                                                            </div>
                                                            <div class="tab-pane fade p-3" id="two" role="tabpanel" aria-labelledby="two-tab">
                                                                <h5>เลือกรายละเอียด</h5>
                                                                <div class="row">
                                                                    @foreach ($cats as $cat)
                                                                        @if ($cat->kindID == 2)
                                                                            <div class="col-6 p-3">
                                                                                <button class="card" type="button" value="{{$cat->id}}" name="cat" onclick="addCart('{{$cat->name}}'),addID('{{$cat->id}}')"  data-dismiss="modal">
                                                                                    <img class="card-img-top" src="{{$cat->catsPic}}">
                                                                                    <div class="card-body">
                                                                                        <h4 class="card-title"> {{$cat->name}}</h4>
                                                                                        <small class="card-text">{{$cat->size}}</small>


                                                                                    </div>
                                                                                </button>
                                                                            </div>
                                                                        @endif
                                                                    @endforeach
                                                                </div>
                                                            </div>
                                                            <div class="tab-pane fade p-3" id="three" role="tabpanel" aria-labelledby="three-tab">
                                                                <h5>เลือกรายละเอียด</h5>
                                                                <div class="row">

                                                                    @foreach ($cats as $cat)
                                                                        @if ($cat->kindID == 3)

                                                                            <div class="col-6 p-3">
                                                                                <button class="card" type="button" value="{{$cat->id}}" name="cat" onclick="addCart('{{$cat->name}}'),addID('{{$cat->id}}')"  data-dismiss="modal">
                                                                                    <img class="card-img-top" src="{{$cat->catsPic}}">
                                                                                    <div class="card-body">
                                                                                        <h4 class="card-title"> {{$cat->name}}</h4>
                                                                                        <small class="card-text">{{$cat->size}}</small>


                                                                                    </div>
                                                                                </button>
                                                                            </div>
                                                                        @endif
                                                                    @endforeach


                                                                </div>
                                                            </div>
                                                            <div class="tab-pane fade p-3" id="four" role="tabpanel" aria-labelledby="four-tab">
                                                                <h5>เลือกรายละเอียด</h5>
                                                                <div class="row">
                                                                    @foreach ($cats as $cat)
                                                                        @if ($cat->kindID == 4)

                                                                            <div class="col-6 p-3">
                                                                                <button class="card" type="button" value="{{$cat->id}}" name="cat" onclick="addCart('{{$cat->name}}'),addID('{{$cat->id}}')"  data-dismiss="modal">
                                                                                    <img class="card-img-top" src="{{$cat->catsPic}}">
                                                                                    <div class="card-body">
                                                                                        <h4 class="card-title"> {{$cat->name}}</h4>
                                                                                        <small class="card-text">{{$cat->size}}</small>


                                                                                    </div>
                                                                                </button>
                                                                            </div>
                                                                        @endif
                                                                    @endforeach


                                                                </div>
                                                            </div>
                                                            <div class="tab-pane fade p-3" id="five" role="tabpanel" aria-labelledby="five-tab">
                                                                <h5>เลือกรายละเอียด</h5>
                                                                <div class="row">

                                                                    @foreach ($cats as $cat)
                                                                        @if ($cat->kindID == 5)

                                                                            <div class="col-6 p-3">
                                                                                <button class="card" type="button" value="{{$cat->id}}" name="cat" onclick="addCart('{{$cat->name}}'),addID('{{$cat->id}}')"  data-dismiss="modal">
                                                                                    <img class="card-img-top" src="{{$cat->catsPic}}">
                                                                                    <div class="card-body">
                                                                                        <h4 class="card-title"> {{$cat->name}}</h4>
                                                                                        <small class="card-text">{{$cat->size}}</small>


                                                                                    </div>
                                                                                </button>
                                                                            </div>
                                                                        @endif
                                                                    @endforeach


                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>



                        <div class="form-group">
                            <h2 class="selectfillter  pt-5">สไตล์งานที่ต้องการ</h2>



                            <div class="container text-center">
                                <div class="row justify-content-center">


                                    @foreach ($tags as $tag)


                        </p>
                    </div>
                    <div class="col-6 ">
                        <h2 class="selectfillter">เบอร์โทรศัพท์</h2>
                        <input type="text" class="form-control" name="phone" placeholder="ex. 029067726" aria-label="Username" aria-describedby="basic-addon1">
                        <p>
                            กรอกเบอร์โทรศัพท์เพื่อเราแจ้งข่าวสารล่วงหน้า
                        </p>
                    </div>
                </div>
                <h2 class="selectfillter  pt-5">สิ่งที่ต้องการจะบอกเป็นพิเศษ</h2>
                <textarea class="form-control" name="requirement" placeholder="ex. need less is more" aria-label="With textarea"></textarea>
                <h2 class="selectfillter  pt-5">งบประมาณที่ต้องการจ้างงานออกแบบในครั้งนี้</h2>
                <p>
                    *ระบบจะค้นหาจากราคาที่ใกล้มากที่สุดจากกลุ่มนักออกแบบ*
                </p>
                <!-- <input style="border-width: 2px;" type="number" class="detaill-select mt-5 mb-5" name="FirstName" plachholder="บรรจุภัณฑ์ประเภทกล่อง"> -->
                <select name="pricerate"  name="pricerate" class="detaill-select form-control mt-5 mb-5">
                    <option value="2900">งานออกแบบฉลากติดสินค้าหน้าเดียว 
                                        <span style="text-color: #ff3957;">ราคา ฿2,900</span> 
                    </option>
                    <option value="4500">ออกแบบกล่องแพคเกจ  
                                        <span style="text-color: #ff3957;">ราคา ฿4,500 </span> 
                    </option>
                    <option value="7900">ออกแบบฉลากติดสินค้า พร้อม กล่องแพคเกจ
                                        <span style="text-color: #ff3957;"> ราคา ฿7,900</span> 
                    </option>
                </select>


                <h1 class="text-center _hilight p-5 ">
                เลือกผลิตภัณฑ์ที่มีความใกล้เคียง<br>
                กับแบบที่คุณต้องการ
            </h1>
            <div class="col-12 col-sm-12 p-3 mb-5 bg-white rounded ">
                <div class="waterfall ">
                    <div class="container">
                        <div class="row  ">                           
                             @foreach ($refs as $ref)
                            <div class="col-12 col-sm-4 ">
                                <div class="form-check item rounded p-3 p-3 ">
                    
                                        <input class="single-checkbox" type="checkbox" id="myCheckbox1" value="{{$ref->id}}" name="reference[]">
                                        <!-- <label class="single-checkbox" for="myCheckbox1"> -->
                                        <img style="display:block;" width="" src="{{$ref->img}}" /></label>
                           
                                </div>
                              
                                <!-- <div class="item rounded p-3 p-3">
                                    <img src="https://picsum.photos/360" class="rounded" alt="">
                                </div>
                            </div>

                        </div>
                        <h2 class="selectfillter  pt-5">วันที่ต้องการ</h2>
                        <div class="row">
                            <div class="col-6">
                                <input type="date" id="basicDate"  name="finishdate" placeholder="MM/DD/YY" data-input>
                            </div>
                        </div>
                        <div class="row  pt-5">
                            <div class="col-6 ">
                                <h2 class="selectfillter ">อีเมล์</h2>
                                <input type="text" class="form-control" name="email" placeholder="ex. abc@hotmail.com" aria-label="Username" aria-describedby="basic-addon1">
                                <p>
                                    กรอกอีเมล์ที่ต้องการแจ้งเตือน
                                </p>
                            </div>
                            <div class="col-6 ">
                                <h2 class="selectfillter">เบอร์โทรศัพท์</h2>
                                <input type="text" class="form-control" name="phone" placeholder="ex. 029067726" aria-label="Username" aria-describedby="basic-addon1">
                                <p>
                                    กรอกเบอร์โทรศัพท์เพื่อเราแจ้งข่าวสารล่วงหน้า
                                </p>
                            </div>
                        </div>
                        <h2 class="selectfillter  pt-5">สิ่งที่ต้องการจะบอกเป็นพิเศษ</h2>
                        <textarea class="form-control" name="requirement" placeholder="ex. need less is more" aria-label="With textarea"></textarea>
                        <h2 class="selectfillter  pt-5">งบประมาณที่ต้องการจ้างงานออกแบบในครั้งนี้</h2>
                        <p>
                            *ระบบจะค้นหาจากราคาที่ใกล้มากที่สุดจากกลุ่มนักออกแบบ*
                        </p>
                        <!-- <input style="border-width: 2px;" type="number" class="detaill-select mt-5 mb-5" name="FirstName" plachholder="บรรจุภัณฑ์ประเภทกล่อง"> -->
                        <select name="pricerate"  name="pricerate" class="detaill-select form-control mt-5 mb-5">
                            <option value="2600">งานออกแบบฉลากติดสินค้าหน้าเดียว
                                <span style="text-color: #ff3957;">ราคา ฿2,900</span>
                            </option>
                        </select>


                        <h1 class="text-center _hilight p-5 ">
                            เลือกผลิตภัณฑ์ที่มีความใกล้เคียง<br>
                            กับแบบที่คุณต้องการ
                        </h1>
                        <div class="col-12 col-sm-12 p-3 mb-5 bg-white rounded ">
                            <div class="waterfall ">
                                <div class="container">
                                    <div class="row  ">
                                        @foreach ($refs as $ref)
                                            <div class="col-12 col-sm-4 ">
                                                <div class="form-check item rounded p-3 p-3 ">
                                                    <label class="_area">

                                                    <input  type="checkbox"  id="myCheckbox1" value="{{$ref->id}}" name="reference[]">
                                                    <span class="checkmark"></span>
                                                    </label>

                                                    <!-- <label class="single-checkbox" for="myCheckbox1"> -->
                                                    <img class="rounded" style="display:block;" width="" src="{{$ref->img}}" />


                                                </div>

                                                <!-- <div class="item rounded p-3 p-3">
                                                    <img src="https://picsum.photos/360" class="rounded" alt="">
                                                </div>
                                                <div class="item rounded p-3 p-3">
                                                    <img src="https://picsum.photos/360" class="rounded" alt="">
                                                </div> -->
                                            </div>
                                    @endforeach

                                    <!-- <div class="col-12 col-md-4">
                                <div class="item rounded p-3">
                                    <img src="https://picsum.photos/360" class="rounded" alt="">
                                </div>
                                <div class="item rounded p-3">
                                    <img src="https://picsum.photos/360" class="rounded" alt="">
                                </div>
                                <div class="item rounded p-3">
                                    <img src="https://picsum.photos/360" class="rounded" alt="">
                                </div>
                            </div>
                            <div class="col-md-4  col-sm-12">
                                <div class="item rounded p-3">
                                    <img src="https://picsum.photos/360" class="rounded" alt="">
                                </div>
                                <div class="item rounded p-3">
                                    <img src="https://picsum.photos/360" class="rounded" alt="">
                                </div>
                                <div class="item rounded p-3">
                                    <img src="https://picsum.photos/360" class="rounded" alt="">
                                </div>
                            </div> -->
                                    </div>

                                </div>

                            </div>
                        </div>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <button type="submit" class="btn btn-block " style="background-color:#904ae8; color:white;margin-top: 20px;"  >
                            บันทึกข้อมูล
                        </button>
                    </div>


            </form>
        </div>
    </div>
</div>
</section>

@endsection

<script>
    function addCart(v){
        document.getElementById('output').value = v
        console.log(v);
        return false;
    }
</script>
<script>
    function addID(v){
        document.getElementById('output2').value = v
        console.log(v);
        return false;
    }
</script>
<script>
    function addRef([v]){
        document.getElementById('output3').value = v
        console.log(v);
        return false;
    }
</script>
<script>
    var limit = 3;
    $('input.single-checkbox').on('change', function(evt) {
    if($(this).siblings(':checked').length >= limit) {
        this.checked = false;
    }
    });
</script>
<script src="{{asset('js/flatpickr.js')}}"></script>
