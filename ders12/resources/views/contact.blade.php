@extends('layouts.app')
@section('title') İletişim @endsection

@section('content')
    <div class="page-heading header-text">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>İletişim</h1>
                    <span>Aşağıdaki bilgilerden bizlere ulaşabilirsiniz</span>
                </div>
            </div>
        </div>
    </div>

    <div class="contact-information">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="contact-item">
                        <i class="fa fa-phone"></i>
                        <h4>Telefon</h4>
                        <p>Vivamus ut tellus mi. Nulla nec cursus elit, id vulputate nec cursus augue.</p>
                        <a href="#">090-080-0760</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="contact-item">
                        <i class="fa fa-envelope"></i>
                        <h4>E-Posta</h4>
                        <p>Vivamus ut tellus mi. Nulla nec cursus elit, id vulputate nec cursus augue.</p>
                        <a href="#">info@company.com</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="contact-item">
                        <i class="fa fa-map-marker"></i>
                        <h4>Adres</h4>
                        <p>1020 New Mountain Street<br>Forest Park, FP 11220</p>
                        <a href="#">View on Google Maps</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="callback-form contact-us">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>Bize <em>mesaj gönder</em></h2>
                        <span>Aşağıdaki formu kullanabilirsiniz.</span>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="contact-form">
                        <form id="contact" action="" method="get">
                            @csrf
                            <div class="row">
                                <div class="col-lg-4 col-md-12 col-sm-12">
                                    <fieldset>
                                        <input name="name" type="text" class="form-control" id="name"
                                            placeholder="Adınız Soyadınız" required="">
                                    </fieldset>
                                </div>
                                <div class="col-lg-4 col-md-12 col-sm-12">
                                    <fieldset>
                                        <input name="email" type="text" class="form-control" id="email"
                                            pattern="[^ @]*@[^ @]*" placeholder="E-Posta Adresiniz" required="">
                                    </fieldset>
                                </div>
                                <div class="col-lg-4 col-md-12 col-sm-12">
                                    <fieldset>
                                        <input name="subject" type="text" class="form-control" id="subject"
                                            placeholder="Konu" required="">
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset>
                                        <textarea name="message" rows="6" class="form-control" id="message" placeholder="Mesajınız" required=""></textarea>
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset>
                                        <button type="submit" id="form-submit" class="filled-button">Gönder</button>
                                    </fieldset>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="map">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12715.85557947168!2d38.8007332!3d37.177329!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x15347186ce128091%3A0x59f56cf83447609d!2zQXl6YXNvZnQgWWF6xLFsxLFtIEJpbGnFn2ltIERvbmFuxLFtIFNhbi4gVGljLiBMdGQuIMWedGku!5e0!3m2!1str!2str!4v1703425371528!5m2!1str!2str"
            width="100%" height="500px" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
@endsection
