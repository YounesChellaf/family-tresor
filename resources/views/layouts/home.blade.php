@extends('master')

@section('content')
    <div class="site-blocks-cover" style=" text-align: right ; margin-top: -4%">
        <div class="container">
            <div class="row align-items-center justify-content-center">

                <div class="col-md-12" style="position: relative;" data-aos="fade-up">

                    <img src="{{asset('assets/images/family.jpg')}}" alt="Image" class="img-fluid img-absolute" width="500">

                    <div class="row mb-4" >
                        <div class="col-lg-6 mr-auto" dir="rtl">
                            <h1>عائلة الهجــــاري</h1>
                            <p class="mb-5">
                                أيها الأحبة الكرام إيماناً منا بأهمية زيادة روابط عائلتنا الكريمة أسسنا هذا الموقع ليكون ميداناً لأفرادها في كل مكان يتواصلون من خلاله فيقرب البعيد ويزيد قرب القريب ويشاركونهم أفراحهم ويشاطرونهم أتراحهم.
                            </p>
                            <div>
                                <a href="{{route('family_ratios')}}" class="btn btn-outline-dark mr-2 mb-2" style="border-radius: 0%">المزيد من التفاصيل عن العائلة</a>
                            </div>
                        </div>


                    </div>

                </div>
            </div>
        </div>
    </div>


    {{--<div class="site-section bg-light" id="features-section">--}}
        {{--<div class="container">--}}
            {{--<div class="row mb-5">--}}
                {{--<div class="col-12 text-center">--}}
                    {{--<h2 class="section-title mb-3">Features</h2>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="row align-items-stretch">--}}
                {{--<div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up">--}}

                    {{--<div class="unit-4 d-block">--}}
                        {{--<div class="unit-4-icon mb-3">--}}
                            {{--<span class="icon-wrap"><span class="text-primary icon-autorenew"></span></span>--}}
                        {{--</div>--}}
                        {{--<div>--}}
                            {{--<h3>Business Consulting</h3>--}}
                            {{--<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae eligendi at.</p>--}}
                            {{--<p><a href="#">Learn More</a></p>--}}
                        {{--</div>--}}
                    {{--</div>--}}

                {{--</div>--}}
                {{--<div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up">--}}

                    {{--<div class="unit-4 d-block">--}}
                        {{--<div class="unit-4-icon mb-3">--}}
                            {{--<span class="icon-wrap"><span class="text-primary icon-store_mall_directory"></span></span>--}}
                        {{--</div>--}}
                        {{--<div>--}}
                            {{--<h3>Market Analysis</h3>--}}
                            {{--<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae eligendi at.</p>--}}
                            {{--<p><a href="#">Learn More</a></p>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" >--}}
                    {{--<div class="unit-4 d-block">--}}
                        {{--<div class="unit-4-icon mb-3">--}}
                            {{--<span class="icon-wrap"><span class="text-primary icon-shopping_basket"></span></span>--}}
                        {{--</div>--}}
                        {{--<div>--}}
                            {{--<h3>User Monitoring</h3>--}}
                            {{--<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae eligendi at.</p>--}}
                            {{--<p><a href="#">Learn More</a></p>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}


                {{--<div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up">--}}
                    {{--<div class="unit-4 d-block">--}}
                        {{--<div class="unit-4-icon mb-3">--}}
                            {{--<span class="icon-wrap"><span class="text-primary icon-settings_backup_restore"></span></span>--}}
                        {{--</div>--}}
                        {{--<div>--}}
                            {{--<h3>Insurance Consulting</h3>--}}
                            {{--<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae eligendi at.</p>--}}
                            {{--<p><a href="#">Learn More</a></p>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}

                {{--<div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up">--}}
                    {{--<div class="unit-4 d-block">--}}
                        {{--<div class="unit-4-icon mb-3">--}}
                            {{--<span class="icon-wrap"><span class="text-primary icon-sentiment_satisfied"></span></span>--}}
                        {{--</div>--}}
                        {{--<div>--}}
                            {{--<h3>Customer Satistified</h3>--}}
                            {{--<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae eligendi at.</p>--}}
                            {{--<p><a href="#">Learn More</a></p>--}}
                        {{--</div>--}}
                    {{--</div>--}}


                {{--</div>--}}

                {{--<div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up">--}}
                    {{--<div class="unit-4 d-block">--}}
                        {{--<div class="unit-4-icon mb-3">--}}
                            {{--<span class="icon-wrap"><span class="text-primary icon-power"></span></span>--}}
                        {{--</div>--}}
                        {{--<div>--}}
                            {{--<h3>Plug &amp; Play</h3>--}}
                            {{--<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae eligendi at.</p>--}}
                            {{--<p><a href="#">Learn More</a></p>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}

            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}

    {{--<div class="feature-big">--}}
        {{--<div class="container">--}}
            {{--<div class="row mb-5 site-section border-bottom">--}}
                {{--<div class="col-lg-7">--}}
                    {{--<img src="images/do_ui_kit_download_cta_floating_devices-2x.png" alt="Image" class="img-fluid">--}}
                {{--</div>--}}
                {{--<div class="col-lg-5 pl-lg-5 ml-auto mt-md-5">--}}
                    {{--<h2 class="text-black">Create interactive prototypes</h2>--}}
                    {{--<p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem neque nisi architecto autem molestias corrupti officia veniam.</p>--}}
                    {{--<ul class="ul-check mb-5 list-unstyled success">--}}
                        {{--<li>Adipisci excepturi aliquam</li>--}}
                        {{--<li>Deleniti labore reiciendis</li>--}}
                    {{--</ul>--}}
                    {{--<div class="author-box">--}}
                        {{--<div class="d-flex mb-4">--}}
                            {{--<div class="mr-3">--}}
                                {{--<img src="images/person_1.jpg" alt="Image" class="img-fluid rounded-circle">--}}
                            {{--</div>--}}
                            {{--<div class="mr-auto text-black">--}}
                                {{--<strong class="font-weight-bold mb-0">Amalia G.</strong> <br>--}}
                                {{--Co-Founder, XYZ Inc.--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<blockquote>&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus vitae ipsa asperiores inventore aperiam iure?&rdquo;</blockquote>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}

            {{--<div class="mt-5 row mb-5 site-section ">--}}
                {{--<div class="col-lg-7 order-1 order-lg-2">--}}
                    {{--<img src="images/do_ui_kit_hero_floating_devices-2x.png" alt="Image" class="img-fluid">--}}
                {{--</div>--}}
                {{--<div class="col-lg-5 pr-lg-5 mr-auto mt-5 order-2 order-lg-1">--}}
                    {{--<h2 class="text-black">Create interactive prototypes</h2>--}}
                    {{--<p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem neque nisi architecto autem molestias corrupti officia veniam</p>--}}
                    {{--<ul class="ul-check mb-5 list-unstyled success">--}}
                        {{--<li>Laborum enim quasi at modi</li>--}}
                        {{--<li>Ad at tempore</li>--}}
                    {{--</ul>--}}


                    {{--<div class="author-box">--}}
                        {{--<div class="d-flex mb-4">--}}
                            {{--<div class="mr-3">--}}
                                {{--<img src="images/person_4.jpg" alt="Image" class="img-fluid rounded-circle">--}}
                            {{--</div>--}}
                            {{--<div class="mr-auto text-black">--}}
                                {{--<strong class="font-weight-bold mb-0">Darren K.</strong> <br>--}}
                                {{--Co-Founder, XYZ Inc.--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<blockquote>&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus vitae ipsa asperiores inventore aperiam iure?&rdquo;</blockquote>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}


    <div class="site-section bg-light" id="about-section" style="text-align: right" >
        <div class="container">
            <div class="row mb-5">
                <div class="col-12 text-center">
                    {{--<h2 class="section-title mb-3">عـــــن مديــنتنا</h2>--}}
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-lg-6">
                    {{--<img src="{{asset('assets/images/about_1.jpg')}}" alt="Image" class="img-fluid mb-5 mb-lg-0 rounded shadow">--}}
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d466380.9694771072!2d37.84700112181078!3d24.04512007679874!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x15b9060be2a84147%3A0xc294f09f5a959010!2sYanbu%20Saudi%20Arabia!5e0!3m2!1sen!2sdz!4v1580319199017!5m2!1sen!2sdz" width="500" height="400" frameborder="0" style="border:2px solid #c2c2c2;" allowfullscreen=""></iframe>
                </div>
                <div class="col-lg-6 ml-auto pl-lg-5">
                    <h2 class="text-black mb-4">عن يـنبـع</h2>
                    <p class="mb-4">
                        نبع هي محافظة من محافظات منطقة المدينة المنورة في المملكة العربية السعودية وتقع على ساحل البحر الأحمر في إقليم تهامة تبعد حوالي 200 كم غرب المدينة المنورة و 125 كم جنوب مدينة أملج و 300 كم شمال مدينة جدة. ويقدّر عدد سكانها بـحوالي 500 ألف نسمة. وتعتبر ثاني أكبر مدينة على البحر الأحمر بعد مدينة جدة وتقسم المدينة إلى 3 مدن: ينبع البحر ، وينبع النخل ، وينبع الصناعية. وتلقب بلؤلؤة البحر الأحمر.
                    </p>
                    <p class="mb-4">
                        ينبع هي إحدى مدن المملكة العربية السعودية، وتقع في غرب الجزيرة العربية على الضفة الشرقية للبحر الأحمر التي يبلغ طولها ضمن حدود المملكة العربية السعودية 1800 كم
                    </p>
                    <p><a href="https://ar.wikipedia.org/wiki/%D9%8A%D9%86%D8%A8%D8%B9" target="_blank" class="btn btn-outline-dark" style="border-radius: 0%">استكشــف اكثـر</a></p>
                </div>
            </div>

        </div>
    </div>


    {{--<div class="site-section testimonial-wrap" id="testimonials-section">--}}
        {{--<div class="container">--}}
            {{--<div class="row mb-5">--}}
                {{--<div class="col-12 text-center">--}}
                    {{--<h2 class="section-title mb-3">صـــــور مختارة</h2>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<div class="slide-one-item home-slider owl-carousel">--}}
            {{--<div>--}}
                {{--<div class="testimonial">--}}
                    {{--<figure class="row  ">--}}
                       {{--<img src="{{asset('assets/images/family.jpg')}}" alt="Image" class="img-fluid mb-3 shadow">--}}
                      {{--<img src="{{asset('assets/images/family.jpg')}}" alt="Image" class=" img-fluid mb-3 shadow">--}}
                    {{--</figure>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div>--}}
                {{--<div class="testimonial">--}}
                    {{--<figure class="row  ">--}}
                        {{--<img src="{{asset('assets/images/family.jpg')}}" alt="Image" class="img-fluid mb-3 shadow">--}}
                        {{--<img src="{{asset('assets/images/family.jpg')}}" alt="Image" class=" img-fluid mb-3 shadow">--}}
                    {{--</figure>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div>--}}
                {{--<div class="testimonial">--}}
                    {{--<figure class="row  ">--}}
                        {{--<img src="{{asset('assets/images/family.jpg')}}" alt="Image" class="img-fluid mb-3 shadow">--}}
                        {{--<img src="{{asset('assets/images/family.jpg')}}" alt="Image" class=" img-fluid mb-3 shadow">--}}
                    {{--</figure>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}

    {{--</div>--}}
    {{--<div class="site-section bg-light" id="contact-section">--}}
        {{--<div class="container">--}}
            {{--<div class="row mb-5">--}}
                {{--<div class="col-12 text-center">--}}
                    {{--<h2 class="section-title mb-3">Get In Touch</h2>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="row justify-content-center">--}}
                {{--<div class="col-lg-7 mb-5">--}}



                    {{--<form action="#" class="p-5 bg-white">--}}

                        {{--<h2 class="h4 text-black mb-5">Contact Form</h2>--}}

                        {{--<div class="row form-group">--}}
                            {{--<div class="col-md-6 mb-3 mb-md-0">--}}
                                {{--<label class="text-black" for="fname">First Name</label>--}}
                                {{--<input type="text" id="fname" class="form-control rounded-0">--}}
                            {{--</div>--}}
                            {{--<div class="col-md-6">--}}
                                {{--<label class="text-black" for="lname">Last Name</label>--}}
                                {{--<input type="text" id="lname" class="form-control rounded-0">--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="row form-group">--}}

                            {{--<div class="col-md-12">--}}
                                {{--<label class="text-black" for="email">Email</label>--}}
                                {{--<input type="email" id="email" class="form-control rounded-0">--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="row form-group">--}}

                            {{--<div class="col-md-12">--}}
                                {{--<label class="text-black" for="subject">Subject</label>--}}
                                {{--<input type="subject" id="subject" class="form-control rounded-0">--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="row form-group">--}}
                            {{--<div class="col-md-12">--}}
                                {{--<label class="text-black" for="message">Message</label>--}}
                                {{--<textarea name="message" id="message" cols="30" rows="7" class="form-control rounded-0" placeholder="Write your notes or questions here..."></textarea>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="row form-group">--}}
                            {{--<div class="col-md-12">--}}
                                {{--<input type="submit" value="Send Message" class="btn btn-primary mr-2 mb-2">--}}
                            {{--</div>--}}
                        {{--</div>--}}


                    {{--</form>--}}
                {{--</div>--}}

            {{--</div>--}}

        {{--</div>--}}
    {{--</div>--}}
    <div class="site-section " id="blog-section" dir="rtl" style="text-align: right">
        <div class="container">
            <div class="row">
                {{--<div class="col-md-6 col-lg-4 mb-4 mb-lg-4">--}}
                    {{--<div class="h-entry">--}}
                        {{--<h2>جوال تواصل</h2>--}}
                        {{--<img src="{{asset('assets/images/phone.png')}}" class="img-fluid" alt="">--}}
                    {{--</div>--}}
                {{--</div>--}}

                <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
                    <div class="h-entry">
                        <h2>معلـــومات التواصـــل</h2>
                        <h2>البريـــد الالكترونــي</h2>
                        <p>{{\App\General::first()->email}}</p>
                        <h2>الهاتف المحمـــــول</h2>
                        <p>{{\App\General::first()->phone_number}}</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
                    <div class="h-entry">
                        <h2>الأقربون أولى بالمعروف</h2>
                        <h2>حساب الصندوق على مصرف الراجحي</h2>
                        <p>{{\App\General::first()->first_bank}}</p>
                        <h2>حساب الصندوق على مصرف الراجحي</h2>
                        <p>{{\App\General::first()->second_bank}}</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
                    <div class="h-entry">
                        <h2>إشتراكات الصندوق</h2>
                        <p>
                            الصندوق يحتاج إلى 180 ألف ريال سنويا على أقل تقدير ليعمل بشكل فعال ومستمر وكلما زاد المبلغ كلما كان الأداء والإنجازات أسرع وأفضل.
                        </p>
                        <p>
                            50 ريال شهريا منك لحساب صندوق الأسرة أو 600 ريال سنويا (قبل حفل المعايدة) سيكون بإذن الله له الأثر العظيم على أقاربك وأحبابك.
                        </p>
                    </div>
                </div>


            </div>
        </div>
    </div>

    @endsection