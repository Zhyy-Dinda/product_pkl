@extends('website')
@section('content')
<section>
    <div class="page-header min-vh-100">
      <div class="container">
        <div class="row">
          <div class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 start-0 text-center justify-content-center flex-column">
            <div style="border: 2 solid black;">

              <div class="position-relative h-0 m-3 px-5 border-radius-lg d-flex flex-column justify-content-center" style="background-image: url('../assets/img/illustrations/illustration-signin.jp'); background-size: cover;" loading="lazy">
                {{-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3944.0102058097978!2d116.24677847393693!3d-8.690578288518891!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dcdb1d4f59edecd%3A0x1d00dd19727bddc4!2sDiskominfo%20Lombok%20Tengah!5e0!3m2!1sid!2sid!4v1709489565271!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> --}}
              </div>
            </div>
          </div>
          <div style="margin-top: 50px;"></div>
            <div class="card d-flex blur justify-content-center shadow-lg my-sm-0 my-sm-6 mt-8 mb-5">
              <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
                <div class="bg-gradient-info shadow-info border-radius-lg p-3">
                  <h3 class="text-white text-primary mb-0">Profile PerayaKota CSIRT</h3>
                </div>
              </div>
              <div class="card-body">
                <img src="{{ $profile && Storage::exists('public/profile/'.$profile->image) ? Storage::url('public/profile/'.$profile->image) : asset('image/kantor_bupati.jpg')}}" width="300" style="border-radius:12px;" class="mb-3">
                <p class="pb-3">
                  For further questions, including partnership opportunities, please email hello@creative-tim.com
                  or contact using our contact form.
                </p>
                <P>“(Ingatlah) Kechilafan Satu Orang Sahaja Tjukup Sudah Menjebabkan Keruntuhan Negara” MAYJEN TNI DR. ROEBIONO KERTOPATI
                    Pemerintah Kota mataram - Computer Security Incident Response Team ( MataramKota-CSIRT). 
                    
                    Bertanggung Jawab sebagai ketua MataramKota-CSIRT adalah Kepala Dinas Komunikasi dan Informatika Kota Mataram. 
                    
                    Anggota Tim dari MataramKota-CSIRT adalah beberapa staf yang ada pada Dinas Komunikasi dan Informatika Kota Mataram dan beberapa Pranata Komputer di lingkungan Pemerintah Kota Mataram. Dalam Pembentukannya, MataramKota-CSIRT mengemban misi : 
                    
                    a. Menciptakan Keamanan Siber pada Pemerintah Kota Mataram; 
                    
                    b. Membangun Kapasitas Sumber Daya Keamanan Siber pada Pemerintah Kota Mataram. Konstituen MataramKota-CSIRT yaitu Instansi Pemerintah pengguna TIK di lingkungan Kota Mataram.</P>
              </div>
            </div>
        </div>
      </div>
    </div>
  </section>
@endsection