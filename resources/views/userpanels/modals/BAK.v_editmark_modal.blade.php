<!-- Modal: EditProfile / edit profile modal -->
<div class="modal fade" id="editMarkModal" data-bs-backdrop="false" tabindex="-1">
    <div class="modal-dialog modal-lg modal-simple modal-edit-user modal-dialog-scrollable modal-dialog-centered">
        <div class="modal-content p-3 p-md-5">
            <div class="modal-body py-3 py-md-0">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="text-center mb-4">
                    <h3 class="mb-2">Edit Mark Information</h3>
                    {{-- <p class="pt-1">Updating user details will receive a privacy audit.</p> --}}
                </div>
                {{-- <form id="editUserForm" class="row g-4 needs-validation" onsubmit="return false" novalidate> --}}
                {{-- <form id="editUserForm" class="row g-4 needs-validation" onsubmit="return false" novalidate> --}}
                <form id="editUserForm" class="row g-4 needs-validation" novalidate>
                    <div class="col-12 col-md-6">
                        <div class="form-floating form-floating-outline">
                            <input type="text" id="modalEditLatitude" name="modalEditLatitude" class="form-control"
                                placeholder="latitude" required />
                            <label for="modalEditLatitude">Latitude</label>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-floating form-floating-outline">
                            <input type="text" id="modalEditLongitude" name="modalEditLongitude" class="form-control"
                                placeholder="longitude" required />
                            <label for="modalEditLongitude">Logitude</label>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-floating form-floating-outline">
                            <input type="text" id="modalEditInstitutionName" name="modalEditInstitutionName"
                                class="form-control" placeholder="institution name" required />
                            <label for="modalEditInstitutionName">Institution Name</label>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-floating form-floating-outline">
                            <input type="text" id="modalEditNPSN" name="modalEditNPSN" class="form-control"
                                placeholder="npsn" required />
                            <label for="modalEditNPSN">NPSN</label>
                        </div>
                    </div>
                    {{-- <div class="col-12 col-md-6">
                        <div class="form-floating form-floating-outline">
                            <select id="modalEditUserStatus" name="modalEditUserStatus" class="form-select"
                                aria-label="Default select example">
                                <option selected>Status</option>
                                <option value="1">Active</option>
                                <option value="2">Inactive</option>
                                <option value="3">Suspended</option>
                            </select>
                            <label for="modalEditUserStatus">Status</label>
                        </div>
                    </div> --}}
                    <div class="col-12">
                        <div class="form-floating form-floating-outline">
                            <input type="text" id="modalEditAddress" name="modalEditAddress"
                                class="form-control modal-edit-tax-id" placeholder="institution address" required />
                            <label for="modalEditAddress">Address</label>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-floating form-floating-outline mb-4">
                            <input type="file" class="form-control" id="modalEditLogo" name="modalEditLogo"
                                required />
                            <label for="modalEditLogo">Logo</label>
                        </div>
                        {{-- <div id="modalEditLogoPreview" class="position-relative" data-bs-target="#modalEditLogoPopUp"></div> --}}
                        {{-- <div id="modalEditLogoPreview" class="position-relative"></div> --}}


                        <div class="form-floating form-floating-outline mb-4">
                            <div id="modalEditLogoPreview" class="logo-preview-container">
                                <!-- Initial Image -->
                                {{-- the img (commented was appended from the js i mean !!) --}}
                                {{-- <img src="{{ imgLogo }}" class="logo-preview"
                                    style="width: 48px; height: 48px;" /> --}}

                                <!-- Magnifying Icon (Added on hover) -->
                                {{-- <i class="mdi mdi-magnify magnify-icon"></i> --}}
                            </div>
                        </div>

                        <script>
                            var modalEditLogoPreview = document.getElementById('modalEditLogoPreview');

                            // Add magnifying icon on hover
                            modalEditLogoPreview.addEventListener('mouseenter', function() {
                                var zoomIcon = document.createElement('i');
                                zoomIcon.classList.add('mdi', 'mdi-magnify', 'magnify-icon');
                                modalEditLogoPreview.appendChild(zoomIcon);
                            });

                            // Remove magnifying icon on hover out
                            modalEditLogoPreview.addEventListener('mouseleave', function() {
                                var zoomIcon = modalEditLogoPreview.querySelector('.magnify-icon');
                                if (zoomIcon) {
                                    zoomIcon.remove();
                                }
                            });

                            // Add click event listener to open the image in a Bootstrap 5 image modal
                            modalEditLogoPreview.addEventListener('click', function() {
                                var modalImage = new bootstrap.Modal(document.getElementById('modalEditLogoPopUp'));
                                var modalImageContent = document.getElementById('modalImageContent');
                                modalImageContent.src = modalEditLogoPreview.querySelector('.logo-preview').src;
                                modalImage.show();
                            });
                        </script>
                    </div>


                    <div class="col-12">
                        <div class="input-group input-group-merge">
                            <div class="form-floating form-floating-outline mb-4">
                                <input type="file" class="form-control" id="modalEditImages" name="modalEditImages"
                                    required />
                                <label for="modalEditImages">Images</label>
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
                        <div class="form-floating form-floating-outline mb-4">
                            <div class="swiper-container overflow-hidden">
                                <div class="swiper-wrapper" id="swiperImagesContainer">
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

                        <script>
                            // Add event listeners to dynamically generated images
                            document.getElementById('swiperImagesContainer').addEventListener('mouseenter', function(event) {
                                var zoomIcon = document.createElement('i');
                                zoomIcon.classList.add('mdi', 'mdi-magnify', 'magnify-icon');
                                event.target.appendChild(zoomIcon);
                            });

                            document.getElementById('swiperImagesContainer').addEventListener('mouseleave', function(event) {
                                var zoomIcon = event.target.querySelector('.magnify-icon');
                                if (zoomIcon) {
                                    zoomIcon.remove();
                                }
                            });


                            // Add event listeners to dynamically generated images
                            document.getElementById('swiperImagesContainer').addEventListener('click', function(event) {
                                var modalImage = new bootstrap.Modal(document.getElementById('modalEditLogoPopUp'));
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
                    {{-- <div class="col-12 col-md-6">
                        <div class="input-group input-group-merge">
                            <span class="input-group-text">US (+1)</span>
                            <div class="form-floating form-floating-outline">
                                <input type="text" id="modalEditUserPhone" name="modalEditUserPhone"
                                    class="form-control phone-number-mask" placeholder="202 555 0111" required />
                                <label for="modalEditUserPhone">Phone Number</label>
                            </div>
                        </div>
                    </div> --}}
                    {{-- <div class="col-12 col-md-6">
                        <div class="form-floating form-floating-outline">
                            <select id="modalEditUserLanguage" name="modalEditUserLanguage" class="select2 form-select"
                                multiple>
                                <option value="">Select</option>
                                <option value="english" selected>English</option>
                                <option value="spanish">Spanish</option>
                                <option value="french">French</option>
                                <option value="german">German</option>
                                <option value="dutch">Dutch</option>
                                <option value="hebrew">Hebrew</option>
                                <option value="sanskrit">Sanskrit</option>
                                <option value="hindi">Hindi</option>
                            </select>
                            <label for="modalEditUserLanguage">Language</label>
                        </div>
                    </div> --}}
                    {{-- <div class="col-12 col-md-6">
                        <div class="form-floating form-floating-outline">
                            <select id="modalEditUserCountry" name="modalEditUserCountry" class="select2 form-select"
                                data-allow-clear="true">
                                <option value="">Select</option>
                                <option value="Australia">Australia</option>
                                <option value="Bangladesh">Bangladesh</option>
                                <option value="Belarus">Belarus</option>
                                <option value="Brazil">Brazil</option>
                                <option value="Canada">Canada</option>
                                <option value="China">China</option>
                                <option value="France">France</option>
                                <option value="Germany">Germany</option>
                                <option value="India">India</option>
                                <option value="Indonesia">Indonesia</option>
                                <option value="Israel">Israel</option>
                                <option value="Italy">Italy</option>
                                <option value="Japan">Japan</option>
                                <option value="Korea">Korea, Republic of</option>
                                <option value="Mexico">Mexico</option>
                                <option value="Philippines">Philippines</option>
                                <option value="Russia">Russian Federation</option>
                                <option value="South Africa">South Africa</option>
                                <option value="Thailand">Thailand</option>
                                <option value="Turkey">Turkey</option>
                                <option value="Ukraine">Ukraine</option>
                                <option value="United Arab Emirates">United Arab Emirates</option>
                                <option value="United Kingdom">United Kingdom</option>
                                <option value="United States">United States</option>
                            </select>
                            <label for="modalEditUserCountry">Country</label>
                        </div>
                    </div> --}}
                    <div class="col-12 mb-3">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="bs-validation-checkbox" required />
                            <label class="form-check-label" for="bs-validation-checkbox">Proceced to save</label>
                            <div class="invalid-feedback">You must agree before submitting.</div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <div class="col-12 text-center">
                            <div class="d-flex flex-col justify-content-end">
                                <button class="modal-mark-cancel-btn btn btn-primary me-2" data-bs-dismiss="modal"
                                    onclick="closeModal()">Cancel</button>
                                <button class="modal-mark-remove-btn btn btn-secondary me-2"
                                    onclick="closeModal()">Remove</button>
                                <button class="modal-mark-save-btn btn btn-success me-2" type="submit"
                                    onclick="closeModal()">Save</button>
                            </div>
                        </div>
                    </div>


                </form>
            </div>



        </div>
    </div>
</div>

<div class="modal fade" id="modalEditLogoPopUp" data-bs-backdrop="false" tabindex="-1"
    style="z-index: 1104 !important">
    <div class="modal-dialog modal-sm modal-simple modal-edit-user modal-dialog-centered">
        <div class="modal-content p-3 p-md-5">
            <div class="modal-body py-3 py-md-0 d-flex align-content-around justify-content-around">
                <button type="button" class="btn-close" aria-label="Close"
                    onclick="close_modalEditLogoPopUp()"></button>
                <img id="modalImageContent" class="align-self-center" src="" alt="Modal Image"
                    style="width: 148px;">
            </div>
        </div>
    </div>
</div>

<script>
    function close_modalEditLogoPopUp() {
        var modalEditLogoPopUp = document.getElementById('modalEditLogoPopUp');
        modalEditLogoPopUp.style.display = 'none';
    }
</script>

<!-- / CONTENT: EDIT PROFILE -->
