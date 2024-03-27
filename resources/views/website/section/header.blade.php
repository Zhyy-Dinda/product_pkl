<style>
  .facebook{
    color: rgb(255, 255, 255);
  }
  .facebook:hover{
    color: rgb(15, 159, 255);
    scale: 106%;

  }
  .instagram{
    color: rgb(255, 255, 255);
  }
  .instagram:hover{
    color: rgb(255, 15, 163);
    scale: 106%;
  }
  .youtube{
    color: rgb(255, 255, 255);
  }
  .youtube:hover{
    scale: 106%;
    color: rgb(255, 15, 15);

  }
  
  .link{
    color: rgb(255, 255, 255);
  }
  .link:hover{
    scale: 106%;
    color: rgb(15, 79, 255);

  }
</style>
@forelse ($header as $dt)    
<header id="header">
  <div class="page-header min-height-500" style="background-image: url('{{ Storage::url("public/header/".$dt->image) }}'); top : 55px;" loading="lazy">
    <span class="mask bg-gradient-dark opacity-5"></span>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 text-center mx-auto my-auto">
          <h1 class="text-white">{{ $dt->title }}</h1>
          <p class="lead mb-3 text-white opacity-8">{!! Str::limit($dt->content,140) !!} <a href="javascript:;" class="text-info text-sm icon-move-right">Show
            <i class="fas fa-arrow-right text-xs ms-1"></i></a></p>
          <div class="d-flex justify-content-center mb-10">
            <a target="_blank" href="https://www.facebook.com/diskominfolomboktengahkab?_rdc=1&_rdr" class="facebook" data-bs-toggle="tooltip" data-bs-placement="top" title="diskominfolomboktengah Facebook"><i class="fab  fa-facebook text-lg  me-4 facebook"></i></a>
            <a target="_blank" href="https://www.instagram.com/diskominfolomboktengah/" class="instagram" data-bs-toggle="tooltip" data-bs-placement="top" title="diskominfolomboktengah Instagram"><i class="fab fa-instagram text-lg instagram me-4"></i></a>
            <a target="_blank" href="https://www.youtube.com/channel/UCWztyVHbeKnvGzT20kc779g" class="youtube" data-bs-toggle="tooltip" data-bs-placement="top" title="diskominfolomboktengah youtube"><i class="fab fa-youtube text-lg youtube me-4"></i></a>
            <a target="_blank" href="https://diskominfo.lomboktengahkab.go.id/" class="link" data-bs-toggle="tooltip" data-bs-placement="top" title="website diskominfolomboktengah"><i class="fa fa-link aria-hidden="true text-lg youtube me-4"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>
@empty    
<header>
  <div class="page-header min-height-400" style="background-image: url('../img/default_bg.jpg'); top : -34px;" loading="lazy">
    <span class="mask bg-gradient-dark opacity-8"></span>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 text-center mx-auto my-auto">
          <h1 class="text-white"></h1>
          <p class="lead mb-4 text-white opacity-8">We’re constantly trying to express ourselves and actualize our dreams. If you have the opportunity to play this game</p>
          <div class="d-flex justify-content-center">
            <a target="_blank" href="https://www.facebook.com/diskominfolomboktengahkab?_rdc=1&_rdr" class="facebook" data-bs-toggle="tooltip" data-bs-placement="top" title="diskominfolomboktengah Facebook"><i class="fab  fa-facebook text-lg  me-4 facebook"></i></a>
            <a target="_blank" href="https://www.instagram.com/diskominfolomboktengah/" class="instagram" data-bs-toggle="tooltip" data-bs-placement="top" title="diskominfolomboktengah Instagram"><i class="fab fa-instagram text-lg instagram me-4"></i></a>
            <a target="_blank" href="https://www.youtube.com/channel/UCWztyVHbeKnvGzT20kc779g" class="youtube" data-bs-toggle="tooltip" data-bs-placement="top" title="diskominfolomboktengah youtube"><i class="fab fa-youtube text-lg youtube me-4"></i></a>
            <a target="_blank" href="https://diskominfo.lomboktengahkab.go.id/" class="link" data-bs-toggle="tooltip" data-bs-placement="top" title="website diskominfolomboktengah"><i class="fa fa-link aria-hidden="true text-lg youtube me-4"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>
@endforelse