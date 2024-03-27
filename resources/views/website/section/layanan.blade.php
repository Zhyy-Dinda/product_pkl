@extends('website')
@section('content')
<section>
    <div class="page-header min-vh-100">
        <div class="container">
            <div class="row">
                <div
                    class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 start-0 text-center justify-content-center flex-column">
                    <div style="border: 2 solid black;">

                        <div class="position-relative h-0 m-3 px-5 border-radius-lg d-flex flex-column justify-content-center"
                            style="background-image: url('../assets/img/illustrations/illustration-signin.jp'); background-size: cover;"
                            loading="lazy">
                            {{-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3944.0102058097978!2d116.24677847393693!3d-8.690578288518891!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dcdb1d4f59edecd%3A0x1d00dd19727bddc4!2sDiskominfo%20Lombok%20Tengah!5e0!3m2!1sid!2sid!4v1709489565271!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> --}}
                        </div>
                    </div>
                </div>
                <div style="margin-top: 50px;"></div>
                <div class="card d-flex blur justify-content-center shadow-lg my-sm-0 my-sm-6 mt-8 mb-5">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
                        <div class="bg-gradient-info shadow-info border-radius-lg p-3">
                            <h3 class="text-white text-primary mb-0">Layanan PerayaKota CSIRT</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <p class="pb-3">
                            For further questions, including partnership opportunities, please email
                            hello@creative-tim.com
                            or contact using our contact form.
                        </p>
                        <article class="my-3 fs-6">
                            <div><strong>Layanan Utama</strong><br>a) Pemberian peringatan terkait keamanan
                                siber<br>b) Penanganan insiden siber<br><br><strong>Layanan Tambahan </strong><br>a)
                                Penanganan kerawanan sistem elektronik <br>b) Pemberitahuan hasil pengamatan potensi
                                ancaman <br>c) Pendeteksian serangan <br>d) Analisis risiko keamanan siber <br>e)
                                Konsultasi terkait kesiapan penanganan insiden siber <br>f) Pembangunan kesadaran
                                dan kepedulian terhadap keamanan siber <br><br>Untuk pelaporan mengenai insiden
                                siber yang terjadi, tim MataramKota-CSIRT telah membuat mekanisme pelaporan
                                melalui:<br><br>&nbsp; &nbsp; <em>Agent CSIRT Perangkat Daerah</em> dapat melalui
                                aplikasi <a
                                    href="https://aduancsirt.mataramkota.go.id">https://aduancsirt.mataramkota.go.id</a>
                                <br><br>&nbsp; &nbsp; Selain Agent CSIRT dapat melaporkan insiden siber melalui
                                email <strong><em>csirt[at]mataramkota.go.id</em></strong> dengan melampirkan
                                sekurang-kurangnya :&nbsp;<br>&nbsp; &nbsp; &nbsp; &nbsp;a. Foto/scan kartu
                                identitas&nbsp;<br>&nbsp; &nbsp; &nbsp; &nbsp;b. Bukti insiden berupa foto atau
                                screenshoot atau log file yang ditemukan&nbsp;<br>&nbsp; &nbsp; &nbsp; &nbsp;c. Atau
                                sesuai dengan ketentuan lain yang berlaku&nbsp;<br><br>Silahkan hubungi kami untuk
                                melakukan aduan siber sesuai dengan prosedur pelaporan insiden.&nbsp;<br><br></div>
                            <blockquote><strong>Prosedur Aduan Siber<br></strong><br>1.&nbsp; Penerimaan aduan
                                insiden siber melalui surel csirt@mataramkota.go.id.<br>2.&nbsp; Pencatatan aduan
                                insiden siber baik identitas pelapor disertai data dukung dan bukti terjadinya
                                insiden siber.<br>3.&nbsp; Notifikasi penerimaan aduan insiden siber.<br>4.&nbsp;
                                Verifikasi aduan insiden siber.<br>5.&nbsp; Observasi dan investigasi aduan insiden
                                siber.<br>6.&nbsp; Pemberian rekomendasi cara penanggulanangan insiden
                                siber.<br>7.&nbsp; Jika administrator IT/pemilik aset tidak dapat menyelesaikan
                                insiden siber dapat meminta BSSN untuk dapat membantu menindaklanjuti aduan insiden
                                siber<br><br></blockquote>
                            <div><br></div>
                            <blockquote><a
                                    href="https://csirt.mataramkota.go.id/storage/image-property/Alur%20Aduan%20Siber%20CSIRT%20Mataram.jpg">https://csirt.mataramkota.go.id/storage/image-property/Alur%20Aduan%20Siber%20CSIRT%20Mataram.jpg</a>
                            </blockquote>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection