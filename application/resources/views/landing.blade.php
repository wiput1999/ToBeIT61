<!--
88                                             88  88
88                                             88  ""
88                                             88
88           ,adPPYYba,  8b,dPPYba,    ,adPPYb,88  88  8b,dPPYba,    ,adPPYb,d8
88           ""     `Y8  88P'   `"8a  a8"    `Y88  88  88P'   `"8a  a8"    `Y88
88           ,adPPPPP88  88       88  8b       88  88  88       88  8b       88
88           88,    ,88  88       88  "8a,   ,d88  88  88       88  "8a,   ,d88
88888888888  `"8bbdP"Y8  88       88   `"8bbdP"Y8  88  88       88   `"YbbdP"Y8
                                                                     aa,    ,88
                                                                      "Y8bbdP"
-->


@extends('layouts.layout')
@section('content')

    <div class="landing">


        {{-- Texutre Fixed --}}
        <span class="fixed">
            {{HTML::image('image/mushroom.png')}}
        </span>


        {{--
        88        88
        88        88
        88        88
        88aaaaaaaa88   ,adPPYba,   88,dPYba,,adPYba,    ,adPPYba,
        88""""""""88  a8"     "8a  88P'   "88"    "8a  a8P_____88
        88        88  8b       d8  88      88      88  8PP"""""""
        88        88  "8a,   ,a8"  88      88      88  "8b,   ,aa
        88        88   `"YbbdP"'   88      88      88   `"Ybbd8"' --}}

        <div class="_home section" id="home">
            {{HTML::image('image/home_logo.png')}}
            <div class="box Alice" style="overflow:visible;">
                ToBe<font color="3998f1">IT</font>61<br />
                <span class="AengAei">At KMITL</span>
            </div>
        </div>
        <hr />



        {{--
               db         88
              d88b        88                                       ,d
             d8'`8b       88                                       88
            d8'  `8b      88,dPPYba,    ,adPPYba,   88       88  MM88MMM
           d8YaaaaY8b     88P'    "8a  a8"     "8a  88       88    88
          d8""""""""8b    88       d8  8b       d8  88       88    88
         d8'        `8b   88b,   ,a8"  "8a,   ,a8"  "8a,   ,a88    88,
        d8'          `8b  8Y"Ybbd8"'    `"YbbdP"'    `"YbbdP'Y8    "Y888--}}

        <div class="_about" id="about">

            <span class="texture">
                {{HTML::image('image/texture_01.png')}}
            </span>
            <div class="layout-box">
                <div class="layout-title">
                    <span class="head">ABOUT</span> | เกี่ยวกับโครงการ
                </div>
                <div class="layout-content">
                    <p class="textbox">
                        โครงการ ToBeIT คือค่ายติวที่จะพาน้องๆ มารู้จักเกี่ยวกับไอทีให้มากขึ้น ซึ่งโครงการนี้จะสอนน้อง ๆ เกี่ยวกับหลักการทางด้านไอทีต่าง ๆ ไม่ว่าจะเป็น ฮาร์ดแวร์ ซอฟต์แวร์ ระบบฐานข้อมูล และพื้นฐานทางด้านไอที โดยที่กล่าวมาในข้างต้นนั้นจะมีพี่ ๆ คอยสอนน้องตลอดโครงการ น้อง ๆ สามารถนำความรู้ที่ได้จากโครงการไปต่อยอดได้ในหลายแขนงหรือในด้านต่าง ๆ โดยที่โครงการนี้ถูกจัดตั้งโดย คณะเทคโนโลยีสารสนเทศ สถาบันเทคโนโลยีพระจอมเกล้าเจ้าคุณทหารลาดกระบัง
                    </p>
                </div>
                <div class="layout-footer">
                    <br /><hr class="hr2 radius"/>
                </div>
            </div>
        </div>
        <hr />



        {{--
         ad88888ba               88                                88               88
        d8"     "8b              88                                88               88
        Y8,                      88                                88               88
        `Y8aaaaa,     ,adPPYba,  88,dPPYba,    ,adPPYba,   ,adPPYb,88  88       88  88   ,adPPYba,
          `"""""8b,  a8"     ""  88P'    "8a  a8P_____88  a8"    `Y88  88       88  88  a8P_____88
                `8b  8b          88       88  8PP"""""""  8b       88  88       88  88  8PP"""""""
        Y8a     a8P  "8a,   ,aa  88       88  "8b,   ,aa  "8a,   ,d88  "8a,   ,a88  88  "8b,   ,aa
         "Y88888P"    `"Ybbd8"'  88       88   `"Ybbd8"'   `"8bbdP"Y8   `"YbbdP'Y8  88   `"Ybbd8"' --}}

        <div class="_schedule" id="schedule">
            <span class="texture">
                {{HTML::image('image/texture_02.png')}}
            </span>
            <div class="layout-box">
                {{-- กิจกรรม --}}
                <div class="layout-title">
                    <span class="head">SCHEDULE</span> | กำหนดการกิจกรรม
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
                            26 ธันวาคม 2558
                        </div>
                        <div class="col col-7">
                            เปิดการลงทะเบียนกิจกรรม ToBeIT59 โดยสามารถลงทะเบียนได้ที่ลิงค์นี้เลย <a href="/signup">ลงทะเบียน</a> <hr class="small"/>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col col-5">
                            15 มกราคม 2559
                        </div>
                        <div class="col col-7">
                            ปิดการลงลงทะเบียนกิจกรรม ToBeIT59 <hr class="small"/>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col col-5">
                            16 มกราคม 2559
                        </div>
                        <div class="col col-7">
                            เปิดติว ToBeIT59 วันเเรก <hr class="small"/>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col col-5">
                            30 มกราคม 2559
                        </div>
                        <div class="col col-7">
                            สอบ Quiz <hr class="small"/>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col col-5">
                            31 มกราคม 2559 <hr class="hr2 small"/>
                        </div>
                        <div class="col col-7">
                            ติว ToBeIT59 วันสุดท้าย <hr class="hr2 small"/>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <span class="req">*</span> เวลาติวทุกวัน เริ่ม 8.30 นาฬิกา จนถึง 16.30 นาฬิกา
                        </div>
                    </div>


                    <br /><hr class="radius"/>
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
                            26 ธันวาคม 2558
                        </div>
                        <div class="col col-7">
                            Hardware (P’บอสแบ๊ะ, P’ฟรอย) <br />
                            Hardware (P’บอสแบ๊ะ, P’ฟรอย) <hr class="small"/>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col col-5">
                            17 มกราคม 2559
                        </div>
                        <div class="col col-7">
                            Muti & Web (P’จาบอน, P’เบ็นซ์) <br />
                            Network (P’กรณ์, P’เอิร์ธ) <hr class="small"/>

                        </div>
                    </div>

                    <div class="row">
                        <div class="col col-5">
                            23 มกราคม 2559
                        </div>
                        <div class="col col-7">
                            Database (P’ชิน, P’โอปอ) <br />
                            Programming (P’โอ๊ต, P’โอ๊ต) <hr class="small"/>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col col-5">
                            24 มกราคม 2559
                        </div>
                        <div class="col col-7">
                            Logic (P’แทท, P’เจม) <br />
                            Algolithm & ปัญหาเชาว์ (P’จ๊าบ, P’ท็อป) <hr class="small"/>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col col-5">
                            30 มกราคม 2559 <br /><hr class="hr2 small"/>
                        </div>
                        <div class="col col-7">
                            Math (P’แบงค์, P’กลอย) & Quiz<br />

                            <hr class="hr2 small"/>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <br /><span class="req">*</span> เวลาติวทุกวัน เริ่ม 8.30 นาฬิกา จนถึง 16.30 นาฬิกา
                        </div>
                    </div>


                    <br /><hr class="radius"/>
                </div>

                <div class="layout-footer">
                    <br /><hr class="hr2 radius"/>
                </div>
            </div>
        </div>
        <hr />



        {{--
          ,ad8888ba,
         d8"'    `"8b
        d8'
        88              ,adPPYba,   88       88  8b,dPPYba,  ,adPPYba,   ,adPPYba,
        88             a8"     "8a  88       88  88P'   "Y8  I8[    ""  a8P_____88
        Y8,            8b       d8  88       88  88           `"Y8ba,   8PP"""""""
         Y8a.    .a8P  "8a,   ,a8"  "8a,   ,a88  88          aa    ]8I  "8b,   ,aa
          `"Y8888Y"'    `"YbbdP"'    `"YbbdP'Y8  88          `"YbbdP"'   `"Ybbd8"' --}}

        <div class="_course section" id="course">
            <span class="texture">
                {{HTML::image('image/texture_03.png')}}
            </span>

            <div class="layout-box">
                <div class="layout-title">
                    <span class="head">COURSE INFO </span>| รายละเอียดการสอน
                </div>



                <div class="row gutters">
                    <div class="col col-6">

                        <br />
                        <div class="download">
                            Flow chart
                        </div>

                        <br />
                        <abbr title="Flow chart">
                            {{HTML::image('image/course_01.png')}}
                        </abbr>
                        <br /><br /><hr  class="hr2 small"/><br/>

                        <div class="textbox">
                            ในวิชา hardware น้องทุกคนจะได้เรียนเกี่ยวกับส่วนประกอบของคอมพิวเตอร์ว่าคอมพิวเตอร์ที่เราใช้นั้น มีส่วนประกอบอะไรบ้าง ทำงานยังไง แล้วส่วนประกอบส่วนไหนทำหน้าที่อะไร และทำงานกับส่วนอื่นส่วนไหนบ้าง น้องที่มาเรียนจะสามารถนำความรู้ที่พี่สอนนี้ไปใช้ในการใช้กับวิชาคอมพิวเตอร์พื้นฐานได้ และสามารถนำไปชำแหละคอมที่บ้านได้ (แต่ระวังประกอบกลับไม่ได้นะ ฮา)
                            <br />
                        </div>

                        <div style="text-align: left; line-height: 1.8;">
                            <br />
                            <hr  class="hr2 small"/><br/>
                            <i class="fa fa-address-book" aria-hidden="true"></i> พี่ประจำวิชา <br />
                            - พี่บอส (P’BossWaran) <br />
                            - พี่ฟรอย (P’Foy) <br />
                            <br/><hr  class="hr2 small"/>
                        </div>

                        <div>
                            <a href="#download1" class='download'><i class="fa fa-book" aria-hidden="true"></i> ดาวน์โหลดเอกสาร</a>
                        </div>

                        <br /><hr class="radius"/>
                    </div>


                    <div class="col col-6">

                        <br />
                        <div class="download">
                            คิดวิเคราะห์ เชิงประยุกค์
                        </div>

                        <br />
                        <abbr title="คิดวิเคราะห์ เชิงประยุกค์">
                            {{HTML::image('image/course_02.png')}}
                        </abbr>
                        <br /><br /><hr  class="hr2 small"/><br/>


                        <div class="textbox">
                            ไม่รู้ว่าน้องๆเคยสังเกตหรือเปล่าว่า โปรแกรมที่น้องๆกำลังใช้งานอยู่นี้ มันคือซอฟต์แวร์ประเภทไหน ก่อนจะได้มาซึ่งซอฟต์แวร์นั้น ต้องผ่านกระบวนการอะไรมาก่อนบ้าง ถึงออกมาเป็นซอฟต์แวร์ให้เราใช้กัน สำหรับวิชา Software นี้ น้องๆจะได้รู้ถึงการได้มาของซอฟต์แวร์ และ ซอฟต์แวร์ประเภทต่างๆ รวมทั้งเรื่องลิขสิทธิ์ของซอฟต์แวร์นอกจากนี้ในปัจจุบัน การใช้เทคโนโลยีนั้นยิ่งเปิดกว้างมากขึ้น มีผู้คนเข้าถึงได้มากยิ่งขึ้น มีความเจริญมากยิ่งขึ้น แต่สิ่งที่ตามมาคือ ผู้คนที่ขาดหลักธรรม ขาดจิตสำนึกในการใช้เทคโนโลยี ย่อมเกิดปัญหาให้แก่ผู้คนทั่วไป วิชา Ethics นี้จะมาพูดถึงกฏและข้อระเบียบต่างๆในการใช้เทคโนโลยี อาชญากรรมคอมพิวเตอร์ และวิธีการรักษาคอมพิวเตอร์ของน้องๆให้ปลอดภัยจากสิ่งเหล่านั้น รับรองว่าพี่ๆทำให้มันเข้าใจง่ายไม่ซับซ้อนแน่นอน แล้วมาติว TobeIT'59 กันเยอะๆเลยน้าา
                            <br />
                        </div>

                        <div style="text-align: left; line-height: 1.8;">
                            <br />
                            <hr  class="hr2 small"/><br/>
                            <i class="fa fa-address-book" aria-hidden="true"></i> พี่ประจำวิชา <br />
                            - พี่เจเจ (P’JayJay) <br />
                            - พี่ดิว (P’Dew) <br />
                            <br /><hr class="hr2 small"/>
                        </div>

                        <div>
                            <a href="#download2" class='download'><i class="fa fa-book" aria-hidden="true"></i> ดาวน์โหลดเอกสาร</a>
                        </div>

                        <br /><hr class="radius"/>
                    </div>
                </div>
            </div>
        </div>
        <hr />



        {{--
        888888888888
             88                                                                                          ,d
             88                                                                                          88
             88  8b,dPPYba,  ,adPPYYba,  8b,dPPYba,   ,adPPYba,  8b,dPPYba,    ,adPPYba,   8b,dPPYba,  MM88MMM
             88  88P'   "Y8  ""     `Y8  88P'   `"8a  I8[    ""  88P'    "8a  a8"     "8a  88P'   "Y8    88
             88  88          ,adPPPPP88  88       88   `"Y8ba,   88       d8  8b       d8  88            88
             88  88          88,    ,88  88       88  aa    ]8I  88b,   ,a8"  "8a,   ,a8"  88            88,
             88  88          `"8bbdP"Y8  88       88  `"YbbdP"'  88`YbbdP"'    `"YbbdP"'   88            "Y888
                                                                 88
                                                                 88 --}}
        <div class="_transport section" id="transport">
            <div class="layout-box">
                <div class="layout-title">
                    <span class="head">TRANSPORT</span> | แผนที่การเดินทาง
                </div>
                <div class="layout-content">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3875.7966510493134!2d100.7812803055325!3d13.7307578352925!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0000000000000000%3A0xd2850fd9ee87f249!2sFaculty+of+Information+Technology!5e0!3m2!1sen!2sth!4v1450164792173" width="100%" height="500" frameborder="0" style="border:0" allowfullscreen=""></iframe>

                    <br /><br /><hr class="hr2 radius" /><br />
                    <div class="layout-title" style="text-align:left; padding: 10px;">
                        <i class="fa fa-subway" aria-hidden="true"></i> AIRPORT RAIL LINK
                    </div>
                    <div class="layout-content">
                        <div class="textbox">
                            จากสถานีพญาไท ผ่านสถานีราชปรารภ มักกะสัน รามคำแหง หัวหมาก บ้านทับช้าง ใช้เวลาประมาณ 20 นาทีลงที่สถานีลาดกระบังแล้วต่อรถไฟที่สถานีรถไฟลาดกระบัง
                        </div>
                    </div>

                    <br />

                    <div class="layout-title" style="text-align:left; padding: 10px;">
                        <i class="fa fa-bus" aria-hidden="true"></i> VAN
                    </div>
                    <div class="layout-content">
                        <div class="textbox">
                            รถตู้โดยสารปรับอากาศ หมอชิตใหม่-อนุสาวรีย์–พระจอมเกล้าลาดกระบัง(ทางด่วน) ขึ้นรถบริเวณใต้ทางด่วนทางทิศเหนือของอนุสาวรีย์ชัยสมรภูมิ ค่าโดยสาร 40 บาท ใช้เวลาประมาณ 30-40 นาที
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
                                    <hr class="hr2 small radius"/>
                                </li>
                                <li>
                                    - เริ่มจากเส้นทางตลาดมีนบุรี เข้าถนนสุวินทวงศ์ ถนนบึงบัว ถนนฉลองกรุง
                                    <hr class="hr2 small radius"/>
                                </li>
                                <li>
                                    - จากกรุงเทพฯ ใช้เส้นทางด่วนพิเศษ กรุงเทพฯ–ชลบุรี (มอเตอร์เวย์)
                                    <hr class="hr2 small radius"/>
                                    <ul>
                                        <li>
                                            -> ออกจากมอเตอร์เวย์ที่ถนนร่มเกล้า ถนนอ่อนนุช ถนนฉลองกรุง
                                        </li>
                                        <li>
                                            -> ยูเทิร์นกลับรถที่สถานีขนส่งสินค้า ออกจากมอเตอร์เวย์ที่ทางเข้าสนามบินสุวรรณภูมิ ทางเบียงถนนคู่ขนานมอเตอร์เวย์ ถนนฉลองกรุง (เส้นทางแนะนำ เลี่ยงรถติด) [ชมวิดิทัศน์วิธีการเดินทาง]
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <hr class="hr2 small radius"/>
                                    - จากชลบุรี ใช้เส้นทางด่วนพิเศษ กรุงเทพฯ–ชลบุรี(มอเตอร์เวย์) ออกจากมอเตอร์เวย์ที่ทางเข้าสนามบินสุวรรณภูมิ ทางเบี่ยงถนนคู่ขนานมอเตอร์เวย์ ถนนฉลองกรุง
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
                            สายตะวันออก : สถานีต้นทางกรุงเทพฯ(หัวลำโพง)ผ่าน พญาไท ราชปรารภ มักกะสัน อโศก คลองตัน หัวหมาก บ้านทับช้าง ลาดกระบัง สถานีปลายทางป้ายหยุดรถไฟพระจอมเกล้า หรือสถานีหัวตะเข้
                            <br />
                            *แนะนำให้มาขบวน 275 และ 283
                            <hr class="hr2 small radius"/>
                            สายชานเมือง (รังสิต-หัวตะเข้) : สถานีต้นทางรังสิตผ่าน ดอนเมือง การเคหะกม.19 หลักสี่ ทุ่งสองห้อง ตลาดใหม่ดอนเมือง บางเขน นิคมรถไฟกม.11 ชุมทางบางซื่อ ประดิพัทธ์ สามเสน โรงพยาบาลรามาธิบดี อุรุพงษ์ พญาไทย ราชปรารภ มักกะสัน อโศก คลองตัน สุขุมวิท71 หัวหมาก บ้านทับช้าง ซอยวัดลานบุญ ลาดกระบัง สถานีปลายทางป้ายหยุดรถไฟพระจอมเกล้า หรือสถานีหัวตะเข้
                            <br />
                            *รถไฟขบวน 376 ออกจากรังสิตเวลา 05.35 น. ถึงหัวตะเข้เวลา 07.40 น.โดยประมาณ (รถขบวนนี้ไม่เข้าหัวลำโพง)
                            <hr class="hr2 small radius"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr />



        {{--
        88888888ba   88
        88      "8b  88                         ,d
        88      ,8P  88                         88
        88aaaaaa8P'  88,dPPYba,    ,adPPYba,  MM88MMM  ,adPPYba,   ,adPPYba,
        88""""""'    88P'    "8a  a8"     "8a   88    a8"     "8a  I8[    ""
        88           88       88  8b       d8   88    8b       d8   `"Y8ba,
        88           88       88  "8a,   ,a8"   88,   "8a,   ,a8"  aa    ]8I
        88           88       88   `"YbbdP"'    "Y888  `"YbbdP"'   `"YbbdP"' --}}

        <div class="_photos" id="photos">
            <div class="layout-box">
                <div class="layout-title">
                    <span class="head">PHOTOS</span> | ภาพกิจกรรม
                </div>
                <div class="slider">
                    <div class="slider-wrap">
                        <div class="arrow">
                            <i class="fa fa-angle-left" aria-hidden="true" class="prev" onclick="slider('prev')"></i>
                            <i class="fa fa-angle-right" aria-hidden="true" class="next" onclick="slider('next')"></i>
                        </div>
                        <img id="1" src="{{asset('image/photos/01.png')}}" class="active" />
                        <img id="2" src="{{asset('image/photos/02.png')}}" />
                        <img id="3" src="{{asset('image/photos/03.png')}}" />
                        <img id="4" src="{{asset('image/photos/04.png')}}" />
                        <img id="5" src="{{asset('image/photos/05.png')}}" />
                        <img id="6" src="{{asset('image/photos/06.png')}}" />
                        <img id="7" src="{{asset('image/photos/07.png')}}" />
                        <img id="8" src="{{asset('image/photos/08.png')}}" />
                        <img id="9" src="{{asset('image/photos/09.png')}}" />
                        <img id="10" src="{{asset('image/photos/10.png')}}" />
                    </div>
                </div>
                <br /><hr class="hr2"/>
            </div>

        </div>
        <hr />



        {{--
        88888888888  db         ,ad8888ba,
        88          d88b       d8"'    `"8b
        88         d8'`8b     d8'        `8b
        88aaaaa   d8'  `8b    88          88
        88"""""  d8YaaaaY8b   88          88
        88      d8""""""""8b  Y8,    "88,,8P
        88     d8'        `8b  Y8a.    Y88P
        88    d8'          `8b  `"Y8888Y"Y8a --}}

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



        {{-- /**
         	 * Block comment
         	 *
         	 * @param type
         	 * @return void

        88888888888
        88                                  ,d
        88                                  88
        88aaaaa   ,adPPYba,    ,adPPYba,  MM88MMM  ,adPPYba,  8b,dPPYba,
        88"""""  a8"     "8a  a8"     "8a   88    a8P_____88  88P'   "Y8
        88       8b       d8  8b       d8   88    8PP"""""""  88
        88       "8a,   ,a8"  "8a,   ,a8"   88,   "8b,   ,aa  88
        88        `"YbbdP"'    `"YbbdP"'    "Y888  `"Ybbd8"'  88
        */
        	 --}}
        <div class="_footer">
            <div class="layout-box">

                <div class="row around">
                    <div class="col" style="text-align: left; line-height: 1.8;">
                        <i class="fa fa-phone" aria-hidden="true"> </i>  พี่มิลค์กี้: 085 - 161 - 7623 <br />
                        <i class="fa fa-phone" aria-hidden="true"> </i>  พี่แพร: 082 - 792 - 0845 <br />
                    </div>
                    <div class="col" style="text-align: left; line-height: 1.8;">
                        <a href="#"><i class="fa fa-newspaper-o" aria-hidden="true"></i> เพจ ToBeIT บน Facebook</a> <br />
                        <a href="#"><i class="fa fa-users" aria-hidden="true"></i> กลุ่ม ToBeIT@KMITL บน Facebook</a> <br />
                        <a href="#"><i class="fa fa-weixin" aria-hidden="true"></i> ส่งข้อความผ่าน Facebook</a> <br />
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
