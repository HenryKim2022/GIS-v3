<!-- Modal: EditProfile / edit profile modal -->
<div class="modal fade" id="viewMarkModal" data-bs-backdrop="false" tabindex="-1" style="z-index: 1104 !important;">
    <div class="modal-dialog modal-lg modal-simple modal-edit-user modal-dialog-scrollable modal-dialog-centered">
        <div class="modal-content p-3 p-md-1 pt-md-5">
            <div class="modal-body py-3 py-md-0">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="text-center mb-4">
                    <h3 class="mb-2">View Mark Information</h3>
                </div>
                <form id="viewUserForm" class="row g-2">
                    <div class="col-6 col-md-6">
                        <div class="form-floating form-floating-outline">
                            <input type="text" id="modalViewLatitude" name="modalViewLatitude" class="form-control"
                                placeholder="latitude" disabled />
                            <label for="modalViewLatitude">Latitude</label>
                        </div>
                    </div>
                    <div class="col-6 col-md-6">
                        <div class="form-floating form-floating-outline">
                            <input type="text" id="modalViewLongitude" name="modalViewLongitude" class="form-control"
                                placeholder="longitude" disabled />
                            <label for="modalViewLongitude">Logitude</label>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 col-md-12">
                        <div class="form-floating form-floating-outline">
                            <input type="text" id="modalViewInstitutionName" name="modalViewInstitutionName"
                                class="form-control" placeholder="institution name" disabled />
                            <label for="modalViewInstitutionName">Institution Name</label>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 col-md-12">
                        <div class="form-floating form-floating-outline">
                            <input type="text" id="modalViewNPSN" name="modalViewNPSN" class="form-control"
                                placeholder="npsn" disabled />
                            <label for="modalViewNPSN">NPSN</label>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-floating form-floating-outline">
                            <input type="text" id="modalViewAddress" name="modalViewAddress"
                                class="form-control modal-edit-tax-id" placeholder="institution address" disabled />
                            <label for="modalViewAddress">Address</label>
                        </div>
                    </div>
                    <style>
                        .form-floating.form-control {
                            height: fit-content !important;
                        }
                    </style>
                    <div class="col-12 col-lg-3 col-md-12">
                        <div class="form-floating form-floating-outline form-control">
                            <div class="mb-2">
                                <label for="modalViewLogoPreview" disabled>Logo</label>
                                <div id="modalViewLogoPreview"
                                    name="modalViewLogoPreview"
                                    class="logo-view-preview-container mb-2 d-flex justify-content-center">
                                    <!-- Initial Image -->
                                </div>
                            </div>
                        </div>

                        <script>
                            var modalViewLogoPreview = document.getElementById('modalViewLogoPreview');

                            // Add magnifying icon on hover
                            modalViewLogoPreview.addEventListener('mouseenter', function() {
                                var zoomIcon = document.createElement('i');
                                zoomIcon.classList.add('mdi', 'mdi-magnify', 'magnify-icon');
                                zoomIcon.style.position = 'absolute';
                                zoomIcon.style.top = '50%';
                                zoomIcon.style.left = '50%';
                                zoomIcon.style.transform = 'translate(-50%, -26%)';
                                zoomIcon.style.display = 'flex';
                                zoomIcon.style.justifyContent = 'center';
                                zoomIcon.style.alignItems = 'center';
                                zoomIcon.style.fontSize = '24px';
                                zoomIcon.style.color = 'white';
                                zoomIcon.style.backgroundColor = 'rgba(0, 0, 0, 0.5)';
                                zoomIcon.style.borderRadius = '50%';
                                zoomIcon.style.padding = '8px';
                                zoomIcon.style.zIndex = '1';
                                modalViewLogoPreview.appendChild(zoomIcon);
                            });

                            // Remove magnifying icon on hover out
                            modalViewLogoPreview.addEventListener('mouseleave', function() {
                                var zoomIcon = modalViewLogoPreview.querySelector('.magnify-icon');
                                if (zoomIcon) {
                                    zoomIcon.remove();
                                }
                            });

                            // Add click event listener to open the image in a Bootstrap 5 image modal
                            modalViewLogoPreview.addEventListener('click', function() {
                                var modalViewLogoPopUp = new bootstrap.Modal(document.getElementById('modalViewLogoPopUp'));
                                var modalViewZoomImageContent = document.getElementById('modalViewZoomImageContent');
                                modalViewZoomImageContent.src = modalViewLogoPreview.querySelector('.logo-preview').src;
                                modalViewLogoPopUp.show();
                            });
                        </script>

                    </div>


                    {{-- <div class="col-12 col-lg-12 col-md-12">
                        <div class="input-group input-group-merge">
                            <div class="form-floating form-control form-floating-outline mb-2">
                                <div for="modalViewImages" class="mb-2" id="modalViewImages" name="modalViewImages"
                                    disabled>Images</div>
                                  <div class="form-floating form-floating-outline">
                                    <div id="carouselExampleDark"
                                        class="carousel carousel-dark slide carousel-fade overflow-hidden"
                                        data-bs-ride="carousel">
                                        <div class="carousel-indicators mb-0" id="caro_indicators">
                                            //-- Slides Indicator --
                                        </div>
                                        <div class="carousel-inner" id="caro_items">
                                            //-- div.carousel-item --
                                        </div>
                                        <a class="carousel-control-prev" href="#carouselExampleDark" role="button"
                                            data-bs-slide="prev">
                                            <span class="mdi mdi-chevron-left" aria-hidden="true"></span>
                                            <span class="visually-hidden">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" href="#carouselExampleDark" role="button"
                                            data-bs-slide="next">
                                            <span class="mdi mdi-chevron-right" aria-hidden="true"></span>
                                            <span class="visually-hidden">Next</span>
                                        </a>
                                    </div>
                                </div>
                                <script>
                                    window.addEventListener('load', function() {
                                        var modal = document.getElementById('modalViewLogoPopUp');
                                        modal.addEventListener('shown.bs.modal', function() {
                                            var carouselItems = modal.querySelectorAll('.carousel .carousel-item img');

                                            carouselItems.forEach(function(imgElement) {
                                                imgElement.addEventListener('mouseover', function(event) {
                                                    event.preventDefault(); // Prevent the default behavior of the event
                                                    event.stopPropagation(); // Stop the event propagation

                                                    const imgId = this.id; // Get the ID of the img element
                                                    // Use the imgId variable as needed
                                                    const modalViewZoomImageContent = document.getElementById('modalViewZoomImageContent');
                                                    modalViewZoomImageContent.src = this.src;
                                                });
                                            });
                                        });
                                    });
                                </script>


                            </div>




                        </div>



                        {{-- <style>
                            .swiper-button-next::after,
                            .swiper-button-prev::after {
                                font-family: 'Material Design Icons';
                                font-size: 16px;
                                font-weight: normal;
                                content: '\e5cc';
                            }

                            .swiper-button-prev::after {
                                content: '\e5cb';
                            }
                        </style> --}}


                        {{-- <script>
                            // Add event listeners to dynamically generated images
                            document.getElementById('swiperImagesContainerView').addEventListener('click', function(event) {
                                // var modalImagesPreview = document.getElementById('swiperImagesContainerView');
                                var modalViewImage = new bootstrap.Modal(document.getElementById('modalViewLogoPopUp'));
                                var modalViewZoomImageContent = document.getElementById('modalViewZoomImageContent');

                                var clickedImage = event.target.closest('img');
                                if (clickedImage) {
                                    var clickedImageUrl = clickedImage.src;
                                    modalViewZoomImageContent.src = clickedImageUrl;
                                    modalViewImage.show();
                                }
                            });

                            // Get the swiperNavs
                            var swiperNavs = document.getElementById('swiperImagesContainerView');
                            swiperNavs.addEventListener('change', function(event) {
                                event.stopPropagation(); // Stop the event from bubbling up
                            });
                        </script>
                    </div> --}}



                    <div class="col-12 col-lg-9 col-md-12">
                        <div class="input-group input-group-merge">
                            <div class="form-floating form-control form-floating-outline mb-2">
                                {{-- <div class="form-control">

                                </div> --}}
                                <div for="modalViewImages" class="mb-2" id="modalViewImages" name="modalViewImages"
                                    disabled>Images</div>
                                <div class="form-floating form-floating-outline">
                                    <div class="swiper-container overflow-hidden">
                                        <div class="swiper-wrapper" id="swiperImagesContainerView">
                                            <!-- Slides will be dynamically generated here -->
                                        </div>

                                        <!-- Navigation buttons -->
                                        <div class="swiper-nav swiper-button-next swiper-images-btn-next">
                                            <i class="mdi mdi-chevron-right"></i>
                                        </div>
                                        <div class="swiper-nav swiper-button-prev swiper-images-btn-prev">
                                            <i class="mdi mdi-chevron-left"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>




                        </div>


                        <style>
                            .swiper-button-next::after,
                            .swiper-button-prev::after {
                                font-family: 'Material Design Icons';
                                font-size: 16px;
                                font-weight: normal;
                                content: '\e5cc';
                            }

                            .swiper-button-prev::after {
                                content: '\e5cb';
                            }
                        </style>


                        <script>
                            // Add event listeners to dynamically generated images
                            document.getElementById('swiperImagesContainerView').addEventListener('click', function(event) {
                                // var modalImagesPreview = document.getElementById('swiperImagesContainerView');
                                var modalViewImage = new bootstrap.Modal(document.getElementById('modalViewLogoPopUp'));
                                var modalViewZoomImageContent = document.getElementById('modalViewZoomImageContent');

                                var clickedImage = event.target.closest('img');
                                if (clickedImage) {
                                    var clickedImageUrl = clickedImage.src;
                                    modalViewZoomImageContent.src = clickedImageUrl;
                                    modalViewImage.show();
                                }
                            });

                            // Get the swiperNavs
                            var swiperNavs = document.getElementById('swiperImagesContainerView');
                            swiperNavs.addEventListener('change', function(event) {
                                event.stopPropagation(); // Stop the event from bubbling up
                            });
                        </script>
                    </div>



                    <div class="col-12">
                        <div class="form-floating form-floating-outline">
                            <input type="text" id="modalViewLastUpdate" name="modalViewLastUpdate"
                                class="form-control" placeholder="last update" disabled />
                            <label for="modalViewLastUpdate">Last update</label>
                        </div>
                    </div>

                    <div class="modal-footer p-0 pl-4 pt-4 pb-4">
                        <div class="col-12 text-center">
                            <div class="d-flex flex-col justify-content-end">
                                <button class="modal-view-mark-cancel-btn btn btn-primary" data-bs-dismiss="modal"
                                    id="close_modalViewMarkModal">Close</button>

                            </div>
                        </div>
                    </div>


                </form>
            </div>



        </div>
    </div>
</div>

<div class="modal fade" id="modalViewLogoPopUp" data-bs-backdrop="false" tabindex="-1"
    style="z-index: 1105 !important">
    <div class="modal-dialog modal-md modal-simple modal-edit-user modal-dialog-centered">
        <div class="modal-content p-3 p-md-5">
            <div class="modal-body py-3 py-md-0 d-flex align-content-around justify-content-around">
                <button type="button" class="btn-close" aria-label="Close" data-bs-dismiss="modal"
                    id="close_modalViewLogoPopUp"></button>
                <img id="modalViewZoomImageContent" class="align-self-center col-12 col-lg-6 col-md-12"
                    alt="Modal Image">
            </div>
        </div>
    </div>
</div>




<script>
    const viewMarkModal = document.getElementById('viewMarkModal');
    viewMarkModal.addEventListener('click', function(event) {
        event.preventDefault(); // Prevent autoscroll & prevent leaflet auto-exit fullscreen
    });



    // Get the modal inputs
    var modalInputs = document.querySelectorAll('.form-floating');
    modalInputs.forEach(function(input) {
        input.addEventListener('click', function(event) {
            event.stopPropagation(); // Stop the event from bubbling up
        });

        input.addEventListener('change', function(event) {
            event.stopPropagation(); // Stop the event from bubbling up
        });
    });

    // Get the modal buttons
    var modalButtons = document.querySelectorAll('button');
    modalButtons.forEach(function(button) {
        button.addEventListener('click', function(event) {
            event.stopPropagation(); // Stop the event from bubbling up
            event.preventDefault();
        });

        button.addEventListener('change', function(event) {
            event.stopPropagation(); // Stop the event from bubbling up
        });
    });




    // const viewMarkModalCloseBtn = document.getElementById('close_modalViewMarkModal');
    // viewMarkModalCloseBtn.addEventListener('click', function(event) {
    //     event.preventDefault(); // Prevent form submission
    //     $('#viewMarkModal').modal('hide');
    // });


    // const modalViewLogoPopUp = document.getElementById('close_modalViewLogoPopUp');
    // modalViewLogoPopUp.addEventListener('click', function(event) {
    //     event.preventDefault(); // Prevent form submission
    //     $('#modalViewLogoPopUp').modal('hide');
    // });
</script>

{{--
<script>
    document.addEventListener('DOMContentLoaded', function() {
        let swiperInstance;

        function initSwiper() {
            swiperInstance = new Swiper('.swiper-container', {
                // Configuration options
                slidesPerView: 1,
                spaceBetween: 1,
                loop: true,
                navigation: {
                    nextEl: '.swiper-images-btn-next',
                    prevEl: '.swiper-images-btn-prev',
                },
                breakpoints: {
                    // When the viewport width is less than or equal to 640px
                    640: {
                        slidesPerView: 1,
                        spaceBetween: 1,
                    },
                    // When the viewport width is greater than 640px and less than or equal to 1024px
                    1024: {
                        slidesPerView: 1,
                        spaceBetween: 2,
                    },
                    // When the viewport width is greater than 1024px
                    1024: {
                        slidesPerView: 1,
                        spaceBetween: 3,
                    },
                },
                observer: true,
                observeParents: true,
                observeSlideChildren: true,
            });

            // Get the modal swiper-navs
            // var nextBtn = document.querySelector('.swiper-images-btn-next');
            // nextBtn.addEventListener('click', function (event) {
            //     event.stopPropagation(); // Stop the event from bubbling up
            //     swiperInstance.slideNext();
            // });

            // var prevBtn = document.querySelector('.swiper-images-btn-prev');
            // prevBtn.addEventListener('click', function (event) {
            //     event.stopPropagation(); // Stop the event from bubbling up
            //     swiperInstance.slidePrev();
            // });

            var nextBtn = document.querySelector('.swiper-images-btn-next');
            var prevBtn = document.querySelector('.swiper-images-btn-prev');

            // Use the separate event handler functions
            nextBtn.addEventListener('click', swiperNextClickHandler);
            prevBtn.addEventListener('click', swiperPrevClickHandler);
        }

        function swiperNextClickHandler(event) {
            event.stopPropagation(); // Stop the event from bubbling up
            swiperInstance.slideNext();
        }

        function swiperPrevClickHandler(event) {
            event.stopPropagation(); // Stop the event from bubbling up
            swiperInstance.slidePrev();
        }

        modalListener("viewMarkModal");

        function modalListener(modalGeneralID) {
            var modal = document.getElementById(modalGeneralID);
            modal.addEventListener('show.bs.modal', function() {
                initSwiper();
            });
            modal.addEventListener('hide.bs.modal', function() {
                swiperInstance.destroy();
                // Remove event listeners for the Swiper navigation buttons
                var nextBtn = document.querySelector('.swiper-images-btn-next');
                var prevBtn = document.querySelector('.swiper-images-btn-prev');
                nextBtn.removeEventListener('click', swiperNextClickHandler);
                prevBtn.removeEventListener('click', swiperPrevClickHandler);
            });
        }
    });
</script>
 --}}


<!-- / CONTENT: EDIT PROFILE -->
