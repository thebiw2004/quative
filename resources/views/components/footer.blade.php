

    <!-- Footer Links -->
    <div class="container text-center text-lg-left " >

        <!-- Grid row -->
        <div class="row justify-content-center p-5">

            <!-- Grid column -->

            <!-- Grid column -->

        

            <!-- Grid column -->
           <div class="col-12 col-lg-8">
               <div class="text-left">

                   <!-- Links -->
                   <!-- <h5 class="text-uppercase"></h5> -->

                   <ul class="list-unstyled mx-auto">
                       <li>
                           <a  href="{{ url('/') }}"><img src="https://sv1.picz.in.th/images/2020/02/01/RyM1Aa.png" class="d-none d-lg-block" width="50" height="50" alt=""></a>
                           
                       </li>
                       <li>
                           <a href="/" class="_hilight text-center text-lg-left"><h3>Quative</h3></a>
                       </li>
                           <li>
                               <p class="_hilight d-none d-lg-block" >
                                   เป็นเว็บไซต์ที่จะเข้ามาเพื่อแก้ไขปัญหาสำหรับผู้ใช้เพื่อพัฒนาผลิตภัณฑ์ไทย <br>
                                   โดยนักออกแบบสร้างสรรค์ พัฒนาฝืมือ และช่วยเหลือกลุ่มสินค้า
                               </p>
                           </li>



                   </ul>

               </div>
           </div>
            <div class="col-12 offset-lg-2 col-lg-2">
                <ul class="list-unstyled mx-auto">
                    <li>
                        <p class="_hilight">Site Navigation</p>
                        <hr>
                    </li>
                    @if(Auth::guest())

                    @elseif (auth()->user()->role == '0')
                    <li>
                        <a href="#"  class="_hilight">ค้นหานักออกแบบ</a>
                    </li>
                    @else

                    @endif
                    
                        <li>
                            <a href="#!" class="_hilight">ผลงานนักออกแบบ</a>
                        </li>
                        <li>
                            <a href="#!" class="_hilight">พรีวิวโลโก้</a>
                        </li>
                </ul>
            </div>
            
            <!-- Grid column -->

            <!-- Grid column -->

            <!-- Grid column -->

        </div>
        <!-- Grid row -->

    </div>
    <!-- Footer Links -->

    <!-- Copyright -->
    
    <!-- Copyright -->