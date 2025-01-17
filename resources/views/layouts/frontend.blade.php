 <!doctype html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Indux Marketing Agency</title>
        <link rel="shortcut icon" href="{{asset('frontend/assets/images/fav.png')}}" type="image/x-icon">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">
        <link rel="shortcut icon" href="{{asset('frontend/assets/images/fav.jpg')}}">
        <link rel="stylesheet" href="{{asset('frontend/assets/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
        <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/style.css')}}" />
    </head>
    <body>
        
        {{-- Header --}}
        @include('include.frontend.header')
        {{-- End Header --}}
        
        <div class="container-xl big-padding">
            <div class="row section-title">
                <h2 class="fs-4">Organization - The Master Brand Company</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras eleifend arcu et sem elementum faucibus. Vestibulum faucibus eleifend dolor, id luctus libero. Suspendisse commodo, orci eu mattis mattis, ante ligula porta tortor, ut scelerisque massa risus a quam.</p>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="text-white text-center mb-4 votcard shadow-md bg-white p-4 pt-5">
                        <img class="rounded-pill shadow-md p-2" src="{{asset('frontend/assets/images/testimonial/member-01.jpg')}}" alt="">
                        <h4 class="mt-3 fs-5 mb-1 fw-bold">James Anderson</h4>
                        <h6 class="fs-7">Runnung to Be: <span class="text-primary fw-bold">President</span></h6>
                        <p class="text-dark mt-3 mb-3 fs-8">Aliquam utrum nibh rutrum nibh vitae tortor dapibus egestas. Cras condimentum dapibus tellus vel semper. Quisque vel dui molestie est auctor utrum nibh porttitor.</p>
                        <button data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-primary fw-bolder fs-8">View Manifesto</button>
                        <button class="btn btn-danger fw-bolder px-4 ms-2 fs-8">Vote</button>
                    </div>
                </div>
                 <div class="col-lg-4 col-md-6">
                    <div class="text-white text-center mb-4 votcard shadow-md bg-white p-4 pt-5">
                        <img class="rounded-pill shadow-md p-2" src="{{asset('frontend/assets/images/testimonial/member-02.jpg')}}" alt="">
                        <h4 class="mt-3 fs-5 mb-1 fw-bold">Arun Kumar</h4>
                        <h6 class="fs-7">Runnung to Be: <span class="text-primary fw-bold">President</span></h6>
                        <p class="text-dark mt-3 mb-3 fs-8">Aliquam utrum nibh rutrum nibh vitae tortor dapibus egestas. Cras condimentum dapibus tellus vel semper. Quisque vel dui molestie est auctor utrum nibh porttitor.</p>
                        <button data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-primary fw-bolder fs-8">View Manifesto</button>
                        <button class="btn btn-danger fw-bolder px-4 ms-2 fs-8">Vote</button>
                    </div>
                </div>
                 <div class="col-lg-4 col-md-6">
                    <div class="text-white text-center mb-4 votcard shadow-md bg-white p-4 pt-5">
                        <img class="rounded-pill shadow-md p-2" src="{{asset('frontend/assets/images/testimonial/member-03.jpg')}}" alt="">
                        <h4 class="mt-3 fs-5 mb-1 fw-bold">Pream Nath</h4>
                        <h6 class="fs-7">Runnung to Be: <span class="text-primary fw-bold">President</span></h6>
                        <p class="text-dark mt-3 mb-3 fs-8">Aliquam utrum nibh rutrum nibh vitae tortor dapibus egestas. Cras condimentum dapibus tellus vel semper. Quisque vel dui molestie est auctor utrum nibh porttitor.</p>
                        <button data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-primary fw-bolder fs-8">View Manifesto</button>
                        <button class="btn btn-danger fw-bolder px-4 ms-2 fs-8">Vote</button>
                    </div>
                </div>
                
                 <div class="col-lg-4 col-md-6">
                    <div class="text-white text-center mb-4 votcard shadow-md bg-white p-4 pt-5">
                        <img class="rounded-pill shadow-md p-2" src="{{asset('frontend/assets/images/testimonial/member-04.jpg')}}" alt="">
                        <h4 class="mt-3 fs-5 mb-1 fw-bold">Reena Anath</h4>
                        <h6 class="fs-7">Runnung to Be: <span class="text-primary fw-bold">President</span></h6>
                        <p class="text-dark mt-3 mb-3 fs-8">Aliquam utrum nibh rutrum nibh vitae tortor dapibus egestas. Cras condimentum dapibus tellus vel semper. Quisque vel dui molestie est auctor utrum nibh porttitor.</p>
                        <button data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-primary fw-bolder fs-8">View Manifesto</button>
                        <button class="btn btn-danger fw-bolder px-4 ms-2 fs-8">Vote</button>
                    </div>
                </div>
                
                 <div class="col-lg-4 col-md-6">
                    <div class="text-white text-center mb-4 votcard shadow-md bg-white p-4 pt-5">
                        <img class="rounded-pill shadow-md p-2" src="{{asset('frontend/assets/images/testimonial//member-05.png')}}" alt="">
                        <h4 class="mt-3 fs-5 mb-1 fw-bold">Allen Shory</h4>
                        <h6 class="fs-7">Runnung to Be: <span class="text-primary fw-bold">President</span></h6>
                        <p class="text-dark mt-3 mb-3 fs-8">Aliquam utrum nibh rutrum nibh vitae tortor dapibus egestas. Cras condimentum dapibus tellus vel semper. Quisque vel dui molestie est auctor utrum nibh porttitor.</p>
                        <button data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-primary fw-bolder fs-8">View Manifesto</button>
                        <button class="btn btn-danger fw-bolder px-4 ms-2 fs-8">Vote</button>
                    </div>
                </div>
                
                 <div class="col-lg-4 col-md-6">
                    <div class="text-white text-center mb-4 votcard shadow-md bg-white p-4 pt-5">
                        <img class="rounded-pill shadow-md p-2" src="{{asset('frontend/assets/images/testimonial/member-06.png')}}" alt="">
                        <h4 class="mt-3 fs-5 mb-1 fw-bold">Vimal kumar</h4>
                        <h6 class="fs-7">Runnung to Be: <span class="text-primary fw-bold">President</span></h6>
                        <p class="text-dark mt-3 mb-3 fs-8">Aliquam utrum nibh rutrum nibh vitae tortor dapibus egestas. Cras condimentum dapibus tellus vel semper. Quisque vel dui molestie est auctor utrum nibh porttitor.</p>
                        <button data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-primary fw-bolder fs-8">View Manifesto</button>
                        <button class="btn btn-danger fw-bolder px-4 ms-2 fs-8">Vote</button>
                    </div>
                </div>
            </div>
        </div>
        
       {{-- Footer --}}
       @include('include.frontend.footer')
       {{-- End Footer --}}
        
        
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-6 fw-bold fs-5" id="exampleModalLabel">View Manifesto</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <ul class="molist">
                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eu nibh et felis interdum accumsan. Pellentesque elit odio, interdum quis ante in, varius rhoncus orci.</li>
                    <li>Etiam laoreet dapibus ante at mollis. Morbi lobortis ultricies risus, in faucibus est blandit eu. Nunc nec imperdiet elit.</li>
                    <li>Praesent eget massa finibus, placerat tortor sed, pretium justo. Aenean et lectus accumsan, tincidunt metus sit amet, laoreet nunc.</li>
                    <li>In et tincidunt est. Sed neque sapien, ultricies a orci et, fringilla egestas nibh. Sed luctus eros et erat suscipit fermentum.</li>
                    <li>Cras blandit orci quis purus placerat tincidunt. Nunc ullamcorper iaculis nibh, sed dapibus dui lobortis nec.</li>
                    <li>Sed tristique ante ac rhoncus facilisis. Maecenas hendrerit velit a interdum convallis. Vivamus tempus eu justo nec rutrum. Praesent sollicitudin interdum nisl, at sollicitudin justo interdum vel</li>
                    <li>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nunc eget orci maximus, tincidunt nulla molestie, porta nisi. Integer fringilla lorem at lacinia iaculis. </li>
                    <li>Maecenas tempus libero laoreet est facilisis, vitae iaculis dui eleifend. Proin eget magna vitae diam dictum interdum at at nulla. Fusce eu porttitor felis. Aenean pretium lacinia nunc ut convallis.</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
   
   
    </body>
    <script src="{{asset('frontend/assets/js/jquery-3.2.1.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/popper.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('frontend/assets/plugins/scroll-fixed/jquery-scrolltofixed-min.js')}}"></script>
    <script src="{{asset('frontend/assets/plugins/testimonial/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/script.js')}}"></script>

</html>