@extends('website')
@section('content')
<section>
  <div class="page-header min-vh-100">
    <div class="container">
      <div class="row">
        <div class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 start-0 text-center justify-content-center flex-column">
          <div style="border: 2 solid black;">

            <div class="position-relative h-0 m-3 px-5 border-radius-lg d-flex flex-column justify-content-center" style="background-image: url('../img/default.jpg'); background-size: cover;" loading="lazy">
              {{-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3944.0102058097978!2d116.24677847393693!3d-8.690578288518891!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dcdb1d4f59edecd%3A0x1d00dd19727bddc4!2sDiskominfo%20Lombok%20Tengah!5e0!3m2!1sid!2sid!4v1709489565271!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> --}}
            </div>
          </div>
        </div>
        <div style="margin-top: 50px;"></div>
          <div class="card d-flex blur justify-content-center shadow-lg my-sm-0 my-sm-6 mt-8 mb-5">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
              <div class="bg-gradient-info shadow-info border-radius-lg p-3">
                <h3 class="text-white text-primary mb-0">All Post</h3>
              </div>
            </div>
            <div class="card-body">
              {{-- <p class="pb-3">
                For further questions, including partnership opportunities, please email hello@creative-tim.com
                or contact using our contact form.
              </p> --}}
              <h3 class="">
                <button class="btn btn- btn-sm">post
                  <span class=" badge rounded-pill bg-gradient-danger">
                  new
                {{-- <span class="visually-hidden">unread messages</span> --}}
                  </span>
                </button>
              </h3>
              <div class="card-header d-flex p-0 position-relative">
             
                <a class="d-block blur-shadow-image mx-3">
                  <img src="{{ $post && Storage::exists('public/posts/'.$post->image) ? Storage::url('public/posts/'.$post->image) : asset('../img/default.jpg') }}" alt="img-blur-shadow" class="img-fluid shadow border-radius-lg " loading="lazy" style="width: 500px;" >
                </a>
                <div class="mt-3" style="width: 50%">
                  <b>{{ $post->title ?? "Title defaul"}}</b>
                  <p>{{ $post->content ?? "Content default"}}</p>
                  <p>{{ $post->created_at ?? "tanggal default" }}</p>
                </div>
              </div>
              <hr>
              <section class="py-3"id="post">
                <div class="container">
                  <div class="row">
                    <div class="col-lg-6">
                     
                      <h3 class="mb-5">Lates Posts<button class="btn btn- btn-sm">
                          <span class=" badge rounded-pill bg-gradient-danger">
                          99+
                        {{-- <span class="visually-hidden">unread messages</span> --}}
                          </span>
                        </button>
                      </h3>
                    </div>
                  </div>
                  <div class="row">

                    {{-- image --}}
                    @foreach ($posts as $post)
                    <div class="col-lg-3 col-sm-6">
                      <div class="card card-plain">
                        <div class="card-header p-0 position-relative">
                          <a class="d-block blur-shadow-image">
                            <img src="{{ Storage::url('public/posts/'.$post->image) }}" alt="img-blur-shadow" class="img-fluid shadow border-radius-lg" loading="lazy">
                          </a>
                        </div>
                        <div class="card-body px-0">
                          <h5>
                            <a href="javascript:;" class="text-dark font-weight-bold">{{ $post->title }}</a>
                          </h5>
                          <p>
                            {{ Str::limit($post->content,80) }}
                          </p>
                          <a href="javascript:;" class="text-info text-sm icon-move-right">Read More
                            <i class="fas fa-arrow-right text-xs ms-1"></i>
                          </a>
                        </div>
                      </div>
                    </div>
                    @endforeach

                    @foreach ($oldPost as $old)
                    <div class="col-lg-3 col-md-12 col-12">
                      <div class="card card-blog card-background cursor-pointer">
                        <div class="full-background" style="background-image: url('{{ Storage::url("public/posts/".$old->image) }}')" loading="lazy"></div>
                        <div class="card-body">
                          <div class="content-left text-start my-auto py-4">
                            <h2 class="card-title text-white">{{ $old->title }}</h2>
                            <p class="card-description text-white">Rather than worrying about switching offices every couple years, you stay in the same place.</p>
                            <a href="javascript:;" class="text-white text-sm icon-move-right">Read More
                              <i class="fas fa-arrow-right text-xs ms-1"></i>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                    @endforeach
                  </div>
                </div>
                
              </section>
              {{ $posts->links() }}
            </div>
          </div>
      </div>
    </div>
  </div>
</section>
@endsection