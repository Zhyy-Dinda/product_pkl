<div class="container">
    <div class="row">
        <div class="col-sm-4">
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="row">
                            <div class="card z-index-0  fadeIn3 fadeInBottom">
                                <div class="card-header p-0 position-relative mt-n4 mx-3 mt-5 z-index-2">
                                    <div class="bg-gradient-info shadow-info border-radius-lg py-3 pe-1">
                                        <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Sign in</h4>
                                        <div class="row mt-3">
                                            <div class="col-2 text-center ms-auto">
                                                <a class="btn btn-link px-3" href="javascript:;">
                                                    <i class="fa fa-facebook text-white text-lg"></i>
                                                </a>
                                            </div>
                                            <div class="col-2 text-center px-1">
                                                <a class="btn btn-link px-3" href="javascript:;">
                                                    <i class="fa fa-github text-white text-lg"></i>
                                                </a>
                                            </div>
                                            <div class="col-2 text-center me-auto">
                                                <a class="btn btn-link px-3" href="javascript:;">
                                                    <i class="fa fa-google text-white text-lg"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                {{-- form --}}
                                <div class="card-body">
                                    @error('loginErro')
                                      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="alert alert-danger">
                                            <h4>Gagal login</h3>
                                                <p>{{ $message }}</p>
                                            </h4>
                                        </div>
                                        </div>
                                    @enderror
                                    <form method="post" action="{{ route('login') }}" role="form" class="text-start">
                                        @csrf
                                        <div class="input-group input-group-outline my-3">
                                            <label class="form-label">Email</label>
                                            <input type="email" name="email" class="form-control"
                                                data-toggle="tooltip" data-placement="top" title="Your Email">
                                        </div>
                                        @error('email')
                                            <div class="alert alert-danger">
                                                <small>{{ $message }}</small>
                                            </div>
                                        @enderror
                                        <div class="input-group input-group-outline mb-3">
                                            <label class="form-label">Password</label>
                                            <input type="password" name="password" class="form-control"
                                                data-toggle="tooltip" data-placement="top" title="Your Passeord">
                                        </div>
                                        @error('password')
                                            <div class="alert alert-danger">
                                                <small>{{ $message }}</small>
                                            </div>
                                        @enderror
                                        <div class="text-center">
                                            <button type="submit" class="btn bg-gradient-info w-100 my-4 mb-2">Sign
                                                in</button>
                                            <p class="mt-4 text-sm text-center">
                                                Don't have an account?
                                            </p>
                                            <a href="#register" data-bs-toggle="modal" data-bs-target="#register" class="btn btn-sm  bg-gradient-success icon-move-left"><i class="fas fa-arrow-left text-xs ms-1"></i>regist</a>
                                            <a type="button" class="btn bg-gradient-danger btn-sm icon-move-right" data-bs-dismiss="modal">Close <i class="fas fa-arrow-right text-xs ms-1"></i></a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
