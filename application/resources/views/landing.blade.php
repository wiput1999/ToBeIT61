{{--Landing--}}
@extends('layouts.layout')
@section('content')

    <div class="landing">

        {{-- Home --}}

        <div class="_home section" id="home">
            <img src="{{ asset('/images/home_logo_re.png') }}" />
        </div>
        <hr />



        {{-- About --}}
        <div class="_about" id="about">
            <div class="layout-box">
                <div class="layout-title">
                    <span class="head">ABOUT</span> | เกี่ยวกับโครงการ
                </div>
                <div class="layout-content">
                    <p class="textbox">
                        โครงการTobeIT’61 คือค่ายติวที่จะพาน้องๆไปรู้จักกับคณะเทคโนโลยีสารสนเทศ ลาดกระบังให้มากขึ้น ทั้งเนื้อหาสาระเตรียมตัวสำหรับการสอบเข้าทางด้านไอทีอย่างตรงจุด จากพวกพี่ๆภายในคณะโดย เราจะมีการจำลองการสอบ, การสัมภาษณ์ และการแนะนำการทำportfolioสำหรับน้องๆที่มาภายในงาน พร้อมทั้งสัมผัสบรรยากาศการเรียน และความอบอุ่นภายในคณะ โดยโครงการนี้ถูกจัดตั้งโดยคณะเทคโนโลยีสารสนเทศ สถาบันเทคโนโลยีพระจอมเกล้าเจ้าคุณทหารลาดกระบัง
                    </p>
                </div>
                <div class="layout-footer">
                    <br />

                    <a href="{{ URL('/signup') }}" class="download" style="text-align: center;">
                        <i class="fa fa-id-card-o" aria-hidden="true"></i>
                        ลงทะเบียน!
                    </a>
                </div>
            </div>
        </div>
        <hr />



        {{-- Schdule --}}

        <div class="_schedule" id="schedule">
            <div class="layout-box">
                {{-- กิจกรรม --}}
                <div class="layout-title">
                    <span class="head">SCHEDULE</span> | กำหนดการรับสมัคร
                </div>
                <div class="layout-content schedule">
                    <div class="row">
                        <div class="col col-5">
                            <strong>วันเวลา</strong> <hr class="small"/>
                        </div>
                        <div class="col col-7">
                            <strong>กิจกรรม</strong> <hr class="small"/>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col col-5">
                            14 ตุลาคม 2560
                        </div>
                        <div class="col col-7">
                            เปิดการลงทะเบียนกิจกรรม ToBeIT61 โดยสามารถลงทะเบียนได้ที่ลิงค์นี้เลย <a href="{{ URL('/signup') }}">ลงทะเบียน</a> <hr class="small"/>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col col-5">
                            25 ตุลาคม 2560
                        </div>
                        <div class="col col-7">
                            ปิดการลงลงทะเบียนกิจกรรม ToBeIT61 <hr class="small"/>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col col-5">
                            28 ตุลาคม 2560
                        </div>
                        <div class="col col-7">
                            กิจกรรม ToBeIT61 วันแรก <hr class="small"/>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col col-5">
                            29 ตุลาคม 2560
                        </div>
                        <div class="col col-7">
                            กิจกรรม ToBeIT61 Pre Examination
                        </div>
                    </div>

                    <div class="row">
                        <div class="col col-5">
                            &nbsp; <hr class="hr2 small"/>
                        </div>
                        <div class="col col-7">
                            กิจกรรม ToBeIT61 วันสุดท้าย <hr class="hr2 small"/>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <br /><span class="req">*</span> เวลาติวทุกวัน เริ่ม 8.30 นาฬิกา จนถึง 16.30 นาฬิกา
                        </div>
                    </div>


                    <br />
                    {{-- <hr class="radius"/> --}}
                </div>


                <br />

                {{-- วิชาเรียน --}}
                <div class="layout-title">
                    <span class="head">SCHEDULE</span> | กำหนดการวิชาเรียน
                </div>
                <div class="layout-content schedule">
                    <div class="row">
                        <div class="col col-5">
                            <strong>วันเวลา</strong> <hr class="small"/>
                        </div>
                        <div class="col col-7">
                            <strong>วิชาเรียน</strong> <hr class="small"/>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col col-5">
                            28 ตุลาคม 2560
                        </div>
                        <div class="col col-7">
                            Logic (P’Gun, P’Khing, P'Dew, P'Nut) <hr class="small"/>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col col-5">
                            29 ตุลาคม 2560 <hr class="small"/>
                        </div>
                        <div class="col col-7">
                            Flowchart (P’Cartoon, P’Fluke, P'Pee, P'Diff) <hr class="small"/>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <br /><span class="req">*</span> เวลาติวทุกวัน เริ่ม 8.30 นาฬิกา จนถึง 16.30 นาฬิกา
                        </div>
                    </div>
                    <br />
                </div>
            </div>
        </div>
        <hr />



        {{-- Course --}}

        <div class="_course section" id="course">
            <div class="layout-box">
                <div class="layout-title">
                    <span class="head">COURSE INFO </span>| รายละเอียดการสอน
                </div>



                <div class="row gutters">
                    <div class="col col-6">
                        <br />
                        <abbr title="Flow chart">
                            <img src="{{ asset('images/course_01.png')}}" />
                        </abbr>
                        <br /><br /><hr  class="hr2 small"/><br/>

                        <div class="textbox">
                            ในการแก้ปัญหาต่างๆ โดยการใช้คอมพิวเตอร์ การจัดลำดับขั้นตอนการทำงานและเงื่อนไขต่างๆ ในการแก้ปัญหา โดยการเปลี่ยนข้อมูลนำเข้าของปัญหา (input) ออกมาเป็นผลลัพธ์ (output) เป็นทักษะที่สำคัญอันหนึ่งที่จะนำไปสู่การใช้งานคอมพิวเตอร์ในการแก้ปัญหาได้อย่างมีประสิทธิภาพ ซึ่งการจัดลำดับขั้นการทำงานดังกล่าวนั้นจะสามารถนำมาเขียนเป็นโปรแกรมคอมพิวเตอร์ได้ต่อไป
                            <br />
                        </div>

                        <div style="text-align: left; line-height: 1.8;">

                            <br />
                            <br />

                            <i class="fa fa-address-book" aria-hidden="true"></i> พี่ประจำวิชา <br />
                            - พี่การ์ตูน (P’Cartoon) <br />
                            - พี่ฟลุ๊ค (P’Fluke) <br />
                            - พี่พี (P’Pee) <br />
                            - พี่ดิฟ (P’Diff) <br />
                            <br/><hr  class="hr2 small"/>
                        </div>

                        <div>
                            <a href="" class='download' disabled=""><i class="fa fa-book" aria-hidden="true"></i> Coming Soon</a>
                        </div>
                        <br />
                    </div>


                    <div class="col col-6">

                        {{-- <br />
                        <div class="download">
                            คิดวิเคราะห์ เชิงประยุกค์
                        </div> --}}

                        <br />
                        <abbr title="คิดวิเคราะห์ เชิงประยุกค์">
                            <img src="{{asset('images/course_02.png')}}" />
                        </abbr>
                        <br /><br /><hr  class="hr2 small"/><br/>


                        <div class="textbox">
                            เป็น ทักษะในการคิดแก้ปัญหาทางคอมพิวเตอร์ มีลักษณะเฉพาะแง่ที่ว่าเป็นทักษะในการหาคำตอบหรือวิธีแก้ปัญหา (Problem Solving Skills) โดยเครื่องมือที่ใช้แก้ปัญหาคือคอมพิวเตอร์  CTS เป็นทักษะที่ถือว่ามีความสำคัญต่อการเรียนรู้และประกอบอาชีพที่เกี่ยวข้องกับการประยุกต์ใช้เทคโนโลยีสารสนเทศ ไม่ว่าจะเป็น นักพัฒนาซอฟต์แวร์ นักระบบเครือข่ายคอมพิวเตอร์ หรือนักไอทีที่ต้องให้คอมพิวเตอร์เป็นเครื่องมือในการทำงาน CTS ทำให้เราเข้าใจปัญหาและค้นหาวิธีแก้ปัญหาได้อย่างเป็นระบบ และสามารถนำเสนอได้อย่างถูกวิธี
                            <br/>
                        </div>

                        <div style="text-align: left; line-height: 1.8;">

                            <br />
                            {{-- <hr class="hr2 small"/> --}}
                            <br/>

                            <i class="fa fa-address-book" aria-hidden="true"></i> พี่ประจำวิชา <br />
                            - พี่กรรณ (P’Gun) <br />
                            - พี่ขิง (P’Khing) <br />
                            - พี่ดิว (P’Dew) <br />
                            - พี่ณัฏฐ์ (P’Nut) <br />
                            <br /><hr class="hr2 small"/>
                        </div>

                        <div>
                            <a href="" class='download' disabled><i class="fa fa-book" aria-hidden="true"></i> Coming Soon</a>
                        </div>

                        <br />
                        {{-- <hr class="radius"/> --}}
                    </div>
                </div>
            </div>
        </div>
        <hr />



        {{-- Transport --}}
        <div class="_transport section" id="transport">
            <div class="layout-box">
                <div class="layout-title">
                    <span class="head">TRANSPORT</span> | แผนที่การเดินทาง
                </div>
                <div class="layout-content">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3875.7966510493134!2d100.7812803055325!3d13.7307578352925!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0000000000000000%3A0xd2850fd9ee87f249!2sFaculty+of+Information+Technology!5e0!3m2!1sen!2sth!4v1450164792173" width="100%" height="500" frameborder="0" style="border:0" allowfullscreen=""></iframe>

                    <br /><br />
                    {{-- <hr class="hr2 radius" /> --}}
                    <br />

                    <div class="layout-title" style="text-align:left; padding: 10px;">
                        <i class="fa fa-subway" aria-hidden="true"></i> AIRPORT RAIL LINK
                    </div>
                    <div class="layout-content">
                        <div class="textbox">
                            จากสถานีพญาไท ผ่านสถานีราชปรารภ มักกะสัน รามคำแหง หัวหมาก บ้านทับช้าง ใช้เวลาประมาณ 30 นาทีลงที่สถานีลาดกระบังแล้วต่อรถไฟที่สถานีรถไฟลาดกระบัง หรือต่อรถสองแถวสาย 777 (เขียนว่าเข้าเทคโนฯ)
                        </div>
                    </div>

                    <br />

                    <div class="layout-title" style="text-align:left; padding: 10px;">
                        <i class="fa fa-bus" aria-hidden="true"></i> SONGTAW
                    </div>
                    <div class="layout-content">
                        <div class="textbox">
                            <ul>
                                <li>- วงกลมวนซ้ายแอร์พอร์ตลิงค์ 7 บาท 5.00-22.00 15 นาที</li>
                                <li>- หัวตะเข้ – เทคโน – หนองจอก	7 บาท 5.00-22.00 10 นาที</li>
                                <li>- หัวตะเข้ – เทคโน – ฮอนด้า 7 บาท 5.00-22.00 10 นาที</li>
                                <li>- วัดราชโกษา – เทคโน – ร่มเกล้า 7 บาท 5.00-20.00 20 นาที</li>
                                <li>- หัวตะเข้ – เทคโน – วัดอุทัย 10 บาท 5.00-17.30 40 นาที</li>
                                <li>- หัวตะเข้ – เทคโน – บึงบัว 10 บาท 5.00-17.30 30 นาที</li>
                            </ul>
                        </div>
                    </div>

                    <br />

                    <div class="layout-title" style="text-align:left; padding: 10px;">
                        <i class="fa fa-bus" aria-hidden="true"></i> VAN
                    </div>
                    <div class="layout-content">
                        <div class="textbox">
                            <ul>
                                <li>รถตู้ด่วนพิเศษ</li>
                                <li>
                                    <ul>
                                        <li>- หมอชิตใหม่ - พระจอมเกล้าลาดกระบัง (ทางด่วน)</li>
                                        <li>- อนุสาวรีย์ชัย - พระจอมเกล้าลาดกระบัง (ทางด่วน)</li>
                                        <li>- รังสิตฟิวเจอร์ - พระจอมเกล้าลาดกระบัง (ทางด่วน)</li>
                                        <li>- แฮปปี้แลนด์ - พระจอมเกล้าลาดกระบัง (ทางด่วน)</li>
                                    </ul>
                                </li>
                                <li>รถตู้ประจำทาง</li>
                                <li>
                                    <ul>
                                        <li>- หัวตะเข้ – หนองจอก</li>
                                        <li>- มีนบุรี – บึงบัว – หัวตะเข้</li>
                                        <li>- มีนบุรี – นิคม – หัวตะเข้</li>
                                        <li>- หัวตะเข้ – ซีคอนสแควร์<span class="req">*</span></li>
                                        <li>- หัวตะเข้ – บางพลี<span class="req">*</span></li>
                                        <li><span class="req">*</span> ลงที่หน้าตลาดหัวตะเข้ รถไม่ได้เข้ามาภายในสถาบัน</li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <br />

                    <div class="layout-title" style="text-align:left; padding: 10px;">
                        <i class="fa fa-car" aria-hidden="true"></i> CAR
                    </div>
                    <div class="layout-content">
                        <div class="textbox">
                            <ul>
                                <li>
                                    - เริ่มจากเส้นทางถนนศรีนครินทร์ที่แยกอ่อนนุช เข้าถนนอ่อนนุช (สุขุมวิท77) ระยะทางประมาณ 16 กม. แยกเข้าถนนฉลองกรุง
                                    {{-- <hr class="hr2 small radius"/> --}}
                                </li>
                                <li>
                                    - เริ่มจากเส้นทางตลาดมีนบุรี เข้าถนนสุวินทวงศ์ ถนนคุ้มเกล้า หรือถนนฉลองกรุง
                                    {{-- <hr class="hr2 small radius"/> --}}
                                </li>
                                <li>
                                    - จากกรุงเทพฯ ใช้เส้นทางด่วนพิเศษ กรุงเทพฯ–ชลบุรี (มอเตอร์เวย์)
                                    {{-- <hr class="hr2 small radius"/> --}}
                                    <ul>
                                        <li>
                                            -> ออกจากมอเตอร์เวย์ที่จุดกลับรถใต้สะพานเล็กๆ ให้เลยทางออกสุวรรณภูมิมาก่อน
                                        </li>
                                        <li>
                                            -> ให้สังเกตอาคารเรียนคณะเทคโนโลยีสารสนเทศ จะเป็นอาคารเรียน 6 ชั้นติดกระจก หากเลยมาแล้วให้ชิดซ้าย ใต้สะพาน เลยไปประมาณ 800 เมตร จะมีทางออกเล็กๆ ให้กลับรถ จากนั้นเลี้ยวขวา เมื่อถึงใต้สะพานแล้วให้เลี้ยวซ้าย
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    - เริ่มจากชลบุรี ใช้เส้นทางด่วนพิเศษ กรุงเทพฯ–ชลบุรี(มอเตอร์เวย์) ออกจากมอเตอร์เวย์ที่ทางเข้าสนามบินสุวรรณภูมิ ทางเบี่ยงถนนคู่ขนานมอเตอร์เวย์ ถนนฉลองกรุง
                                </li>
                            </ul>
                        </div>
                    </div>

                    <br />

                    <div class="layout-title" style="text-align:left; padding: 10px;">
                        <i class="fa fa-train" aria-hidden="true"></i> TRAIN
                    </div>
                    <div class="layout-content">
                        <div class="textbox">
                            <ul>
                                <li>สายตะวันออก : สถานีต้นทางกรุงเทพฯ(หัวลำโพง) ผ่าน ยมราช อุรุพงศ์ พญาไท มักกะสัน อโศก คลองตัน สุขุมวิท71 หัวหมาก บ้านทับช้าง ซอยวัดลานบุญ ลาดกระบัง พระจอมเกล้า ปลายทางสถานีหัวตะเข้</li>
                                <li>ขบวนจากกรุงเทพ (หัวลำโพง)</li>
                                <li>
                                    <ul>
                                        <li>- 379 (กรุงเทพ - หัวตะเข้) ถึงหัวตะเข้ 05.10 <span class="req">*</span>วันจันทร์-ศุกร์</li>
                                        <li>- 275 (กรุงเทพ - อรัญประเทศ) ถึงหัวตะเข้ 07.02</li>
                                        <li>- 283 (กรุงเทพ - บ้านพลูตาหลวง) ถึงหัวตะเข้ 08.13 <span class="req">*</span>วันจันทร์-ศุกร์</li>
                                        <li>- 285 (กรุงเทพ - ชุมทางฉะเชิงเทรา) ถึงหัวตะเข้ 08.13 <span class="req">*</span>วันเสาร์-อาทิตย์-วันหยุดพิเศษ</li>
                                        <li>- 281 (กรุงเทพ - กบินทร์บุรี) ถึงหัวตะเข้ 08.56</li>
                                    </ul>
                                </li>
                                <li>ขบวนออกจากชุมทางฉะเชิงเทรา</li>
                                <li>
                                    <ul>
                                        <li>- 384 (ชุมทางฉะเชิงเทรา – กรุงเทพ) ถึงหัวตะเข้ 06.25 <span class="req">*</span>วันจันทร์-ศุกร์</li>
                                        <li>- 372 (ปราจีนบุรี – กรุงเทพ) ถึงหัวตะเข้ 06.59</li>
                                        <li>- 388 (ชุมทางฉะเชิงเทรา – กรุงเทพ) ถึงหัวตะเข้ 07.34</li>
                                        <li>- 278 (กบินทร์บุรี – กรุงเทพ) ถึงหัวตะเข้ 09.09</li>
                                    </ul>
                                </li>
                                <li>ขบวนออกจากรังสิต</li>
                                <li>
                                    <ul>
                                        <li>376 (รังสิต - หัวตะเข้) ออกรังสิต 05.35 ถึงหัวตะเข้ 07.40 <span class="req">*</span>รถขบวนนี้ไม่เข้าหัวลำโพง และไม่มีบริการวันเสาร์ อาทิตย์ วันหยุดพิเศษ</li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <br />

                    <div class="layout-title" style="text-align:left; padding: 10px;">
                        <i class="fa fa-plane" aria-hidden="true"></i> SUVARNABHUMI AIRPORT BUS TERMINAL
                    </div>
                    <div class="layout-content">
                        <div class="textbox">
                            <ul>
                                <li>รถตู้</li>
                                <li>
                                    <ul>
                                        <li>- 549 มีนบุรี – สุวรรณภูมิ</li>
                                        <li>- 552 อ่อนนุช - สุวรรณภูมิ</li>
                                        <li>- 552A ปากน้ำ – สุวรรณภูมิ (เฉพาะเช้า-เย็น)</li>
                                        <li>- 554 สะพานใหม่ – สุวรรณภูมิ (เฉพาะเช้า-เย็น)</li>
                                        <li>- 555 สุวรรณภูมิ - ดอนเมือง</li>
                                        <li>- 559 สุวรรณภูมิ – รังสิตฟิวเจอร์</li>
                                    </ul>
                                </li>
                                <li>รถเมล์</li>
                                <li>
                                    <ul>
                                        <li>- 554 รังสิต – สุวรรณภูมิ (ทางด่วนลงรามอินทรา)</li>
                                        <li>- 555 รังสิต – สุวรรณภูมิ (ทางด่วนลงดินแดง)</li>
                                        <li>- 558 พระราม 2 - สุวรรณภูมิ (ทางด่วนลงสุขสวัสดิ์)</li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div>
                        <br />
                        <a href="{{ url('/documents/transport.pdf') }}" class='download'><i class="fa fa-book" aria-hidden="true"></i> ดาวน์โหลดเอกสารคู่มือการเดินทาง</a>
                    </div>
                </div>
            </div>
        </div>



        {{-- Photo --}}

        <div class="_photos" id="photos">
            <div class="layout-box">
                <div class="layout-title">
                    <span class="head">PHOTOS</span> | ภาพกิจกรรม
                </div>
                <div class="Wallop">
                      <div class="Wallop-list">
                          <div class="Wallop-item"><img src="{{asset('images/photos/01.jpg')}}"></div>
                          <div class="Wallop-item"><img src="{{asset('images/photos/02.jpg')}}"></div>
                          <div class="Wallop-item"><img src="{{asset('images/photos/03.jpg')}}"></div>
                          <div class="Wallop-item"><img src="{{asset('images/photos/04.jpg')}}"></div>
                          <div class="Wallop-item"><img src="{{asset('images/photos/05.jpg')}}"></div>
                          <div class="Wallop-item"><img src="{{asset('images/photos/06.jpg')}}"></div>
                          <div class="Wallop-item"><img src="{{asset('images/photos/07.jpg')}}"></div>
                          <div class="Wallop-item"><img src="{{asset('images/photos/08.jpg')}}"></div>
                          <div class="Wallop-item"><img src="{{asset('images/photos/09.jpg')}}"></div>
                          <div class="Wallop-item"><img src="{{asset('images/photos/10.jpg')}}"></div>
                      </div>

                      <button class="arrow fa fa-angle-left Wallop-buttonPrevious"></button>
                      <button class="arrow fa fa-angle-right Wallop-buttonNext"></button>
                </div>

                <script src="{{ mix('/2017/js/Wallop.min.js') }}"></script>
                <script>
                  // New instance of Wallop
                  var slider = document.querySelector('.Wallop');
                  var Wallop = new Wallop(slider);
                </script>

                <br /><hr class="hr2"/>
            </div>

        </div>
        <hr />



        {{-- Faq --}}

        <div class="_faq section" id="faq">
            <div class="layout-box">
                <div class="layout-title">
                    <span class="head">FAQ</span> คำถามที่พบบ่อย
                </div>
                <br />
                <div class="layout-content">
                    <p>Q: จัดติววันไหน ช่วงเวลากี่โมง</p> <br />
                    <p>A: สามารถดูข้อมูลกำหนดการต่าง ๆ ได้ที่ลิงค์นี้เลยครับ <a href="#schedule">กำหนดการ</a></p>
                </div>
                <br />
                <div class="layout-content">
                    <p>Q: ปวช. สมัครได้มั้ย สอบได้มั้ย</p> <br />
                    <p>A: ได้ครับ เพราะคณะของเรารับทั้งนักเรียนจากทั้งมัธยม และปวช. เลยครับ</p>
                </div>
                <br />
                <div class="layout-content">
                    <p>Q: ศิลป์ภาษา สมัครได้มั้ย รับหรือเปล่า ในใบสมัครให้กรอก หน่วยกิตที่เรียน วิทย์ กับคณิตด้วย จะมีผลอะไรกับการสมัครหรือเปล่า</p> <br />
                    <p>A: ไม่มีผลครับ น้อง ๆ สามารถสมัครได้ตามปกติเลย</p>
                </div>
                <br />
                <div class="layout-content">
                    <p>Q: ต้องเตรียมเอกสารการสมัครหรือไม่ เสียค่าใช้จ่ายอะไรไหม</p> <br />
                    <p>A: ระบบการสมัครเป็นแบบออนไลน์ ไม่ต้องส่งเอกสารใด ๆ มา โครงการนี้ฟรี! ไม่เสียค่าใช้จ่ายจ้า</p>
                </div>
                <br />
                <div class="layout-content">
                    <p>Q: การมาร่วมงานต้องเตรียมตัวอะไรมาบ้างไหม และแต่งกายอย่างไร</p> <br />
                    <p>A: อยากให้น้อง ๆ ทุกคนเตรียมสมุดปากกา หรืออุปกรณ์เครื่องเขียนมาช่วยในการจดบันทึก และการแต่งกายให้เป็นการแต่งกายแบบสุภาพ กางเกงขายาว และห้ามใส่รองเท้าแตะ</p>
                </div>
            </div>
        </div>
        <hr />



        {{-- Footer --}}
        <div class="_footer">
            <div class="layout-box">

                <div class="row around">
                    <div class="col" style="text-align: left; line-height: 1.8;">
                        <i class="fa fa-phone" aria-hidden="true"> </i>  พี่เซนท์: 086 - 086 - 4192 <br />
                        <i class="fa fa-phone" aria-hidden="true"> </i>  พี่หมี: 086 - 058 - 0919 <br />
                    </div>
                    <div class="col" style="text-align: left; line-height: 1.8;">
                        <a href="https://www.facebook.com/tobeitkmitl/" target="_blank"><i class="fa fa-newspaper-o" aria-hidden="true"></i> เพจ ToBeIT บน Facebook</a> <br />
                        <a href="https://www.facebook.com/groups/kmitltobeit/" target="_blank"><i class="fa fa-users" aria-hidden="true"></i> กลุ่ม ToBeIT@KMITL บน Facebook</a> <br />
                        {{--<a href="#"><i class="fa fa-weixin" aria-hidden="true"></i> ส่งข้อความผ่าน Facebook</a> <br />--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
