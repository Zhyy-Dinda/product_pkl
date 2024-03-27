@extends('website')
@section('content')
<section>
  <div class="page-header min-vh-100">
    <div class="container">
      <div class="row">
        <div class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 start-0 text-center justify-content-center flex-column">
          <div style="border: 2 solid black;">
            <h3 class="text-info">Hubungi Kami</h3>
            <p>Lokasi MataramKota-CSIRT</p>
            <p>Jln. Flamboyan No. 1 Gedung selatan Kantor Walikota Mataram
            </p>
            <div class="position-relative h-0 m-3 px-5 border-radius-lg d-flex flex-column justify-content-center" style="background-image: url('../assets/img/illustrations/illustration-signin.jp'); background-size: cover;" loading="lazy">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3944.0102058097978!2d116.24677847393693!3d-8.690578288518891!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dcdb1d4f59edecd%3A0x1d00dd19727bddc4!2sDiskominfo%20Lombok%20Tengah!5e0!3m2!1sid!2sid!4v1709489565271!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
          </div>
        </div>
        <div style="margin-top: 50px;"></div>
        <div class="col-xl-5 col-lg-6 col-md-7 d-flex flex-column ms-auto me-auto ms-lg-auto me-lg-5">
          <div class="card d-flex blur justify-content-center shadow-lg my-sm-0 my-sm-6 mt-8 mb-5">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
              <div class="bg-gradient-info shadow-info border-radius-lg p-3">
                <h3 class="text-white text-info mb-0">Contact us</h3>
              </div>
            </div>
            <div class="card-body">
              <p class="pb-3">
                For further questions, including partnership opportunities, please email hello@creative-tim.com
                or contact using our contact form.
              </p>
              <form action="kontak_web" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="card-body p-0 my-3">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="input-group input-group-static mb-4">
                        <label>Full Name</label>
                        <input type="text" name="name" value="{{ old('name') }}"class="form-control" placeholder="Full Name">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="input-group input-group-static mb-4">
                        <label>tlpn / WA</label>
                        <input type="number" name="tlpn" value="{{ old('tlpn') }}"class="form-control" placeholder="Telpon Whatsapp ">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="input-group input-group-static mb-4">
                        <label>Alamat</label>
                        <input type="text" name="alamat" value="{{ old('alamat') }}"class="form-control" placeholder=" Alamat">
                      </div>
                    </div>
                    <div class="col-md-6 ps-md-2">
                      <div class="input-group input-group-static mb-4">
                        <label>Email</label>
                        <input type="email" name="email" value="{{ old('email') }}" class="form-control" placeholder="Email">
                      </div>
                    </div>
                  </div>
                  <div class="form-group mb-0 mt-md-0 mt-4">
                    <div class="input-group input-group-static mb-4">
                      <label>Pesan yang ingin anda sampaikan?</label>
                      <textarea name="message" name="message" class="form-control" id="message" rows="6" placeholder="Jelaskan masalah Anda setidaknya dalam 3 paragrap">{{ old('message') }}</textarea>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 text-center">
                      <button type="submit" class="btn bg-gradient-info mt-3 mb-0">Send Message</button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection