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
                        .form-floating.form-control{
                            height: fit-content !important;
                        }
                    </style>
                    <div class="col-12">
                        <div class="form-floating form-floating-outline form-control">
                            <div class="mb-2">
                                <label id="modalViewLogo" name="modalViewLogo" for="modalViewLogoPreview" disabled>Logo</label>
                            </div>
                            <div id="modalViewLogoPreview" class="logo-preview-container mb-2">
                                <!-- Initial Image -->
                            </div>
                        </div>

                        <script>
                            var modalLogoPreview = document.getElementById('modalViewLogoPreview');

                            // Add magnifying icon on hover
                            modalLogoPreview.addEventListener('mouseenter', function() {
                                var zoomIcon = document.createElement('i');
                                zoomIcon.classList.add('mdi', 'mdi-magnify', 'magnify-icon');
                                modalLogoPreview.appendChild(zoomIcon);
                            });

                            // Remove magnifying icon on hover out
                            modalLogoPreview.addEventListener('mouseleave', function() {
                                var zoomIcon = modalLogoPreview.querySelector('.magnify-icon');
                                if (zoomIcon) {
                                    zoomIcon.remove();
                                }
                            });

                            // Add click event listener to open the image in a Bootstrap 5 image modal
                            modalLogoPreview.addEventListener('click', function() {
                                var modalImage = new bootstrap.Modal(document.getElementById('modalLogoPopUp'));
                                var modalImageContent = document.getElementById('modalImageContent');
                                modalImageContent.src = modalLogoPreview.querySelector('.logo-preview').src;
                                modalImage.show();
                            });
                        </script>

                    </div>


                    <div class="col-12">
                        <div class="input-group input-group-merge form-control">
                            <div class="form-floating form-floating-outline mb-2">
                                <div >
                                </div>
                                <div for="modalViewImages" class="mb-2" id="modalViewImages"
                                    name="modalViewImages" disabled>Images</div>
                                <div class="form-floating form-floating-outline">
                                    <div class="swiper-container overflow-hidden">
                                        <div class="swiper-wrapper" id="swiperImagesContainerView">
                                            <!-- Slides will be dynamically generated here -->
                                        </div>

                                        <!-- Navigation buttons -->
                                        <div class="swiper-button-next swiper-images-btn-next">
                                            <i class="mdi mdi-chevron-right"></i>
                                        </div>
                                        <div class="swiper-button-prev swiper-images-btn-prev">
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
                                var modalImage = new bootstrap.Modal(document.getElementById('modalLogoPopUp'));
                                var modalImageContent = document.getElementById('modalImageContent');

                                var clickedImage = event.target.closest('img');
                                if (clickedImage) {
                                    var clickedImageUrl = clickedImage.src;
                                    modalImageContent.src = clickedImageUrl;
                                    modalImage.show();
                                }
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

<div class="modal fade" id="modalLogoPopUp" data-bs-backdrop="false" tabindex="-1" style="z-index: 1105 !important">
    <div class="modal-dialog modal-md modal-simple modal-edit-user modal-dialog-centered">
        <div class="modal-content p-3 p-md-5">
            <div class="modal-body py-3 py-md-0 d-flex align-content-around justify-content-around">
                <button type="button" class="btn-close" aria-label="Close" data-bs-dismiss="modal" id="close_modalLogoPopUp"></button>
                <img id="modalImageContent" class="align-self-center col-12 col-lg-6 col-md-12" src=""
                    alt="Modal Image">
            </div>
        </div>
    </div>
</div>

<script>
    const viewMarkModal = document.getElementById('close_modalViewMarkModal');
    viewMarkModal.addEventListener('click', function(event) {
        event.preventDefault(); // Prevent form submission
        $('#viewMarkModal').modal('hide');
    });


    // const modalViewLogoPopUp = document.getElementById('close_modalLogoPopUp');
    // modalViewLogoPopUp.addEventListener('click', function(event) {
    //     event.preventDefault(); // Prevent form submission
    //     $('#modalLogoPopUp').modal('hide');
    // });
</script>

<!-- / CONTENT: EDIT PROFILE -->
