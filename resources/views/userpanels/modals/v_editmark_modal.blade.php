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
                            <input type="text" id="modalEditLatitudes" name="modalEditLatitudes" class="form-control"
                                placeholder="latitude" required />
                            <label for="modalEditLatitudes">Latitude</label>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-floating form-floating-outline">
                            <input type="text" id="modalEditLogitude" name="modalEditLogitude" class="form-control"
                                placeholder="longitude" required />
                            <label for="modalEditLogitude">Logitude</label>
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

                    </div>
                    <div class="col-12">
                        <div class="input-group input-group-merge">
                            <div class="form-floating form-floating-outline mb-4">
                                <input type="file" class="form-control" id="modalEditImages" name="modalEditImages"
                                    required />
                                <label for="modalEditImages">Images</label>
                                {{-- <div class="card border-1">
                                    <label class="card-header" for="modalEditImages">Images</label>
                                    <div class="card-body">
                                        <form action="/upload" class="dropzone needsclick" id="dropzone-multi">
                                            <div class="dz-message needsclick">
                                                Drop files here or click to upload
                                                <span class="note needsclick">(This is just a demo dropzone. Selected
                                                    files are
                                                    <span class="fw-medium">not</span> actually uploaded.)</span>
                                            </div>
                                            <div class="fallback">
                                                <input name="file" type="file" id="modalEditImages"
                                                    name="modalEditImages" required />
                                            </div>
                                        </form>
                                    </div>
                                </div> --}}
                            </div>

                        </div>



                    </div>
                    <div class="col-12 col-md-6">
                        <div class="input-group input-group-merge">
                            <span class="input-group-text">US (+1)</span>
                            <div class="form-floating form-floating-outline">
                                <input type="text" id="modalEditUserPhone" name="modalEditUserPhone"
                                    class="form-control phone-number-mask" placeholder="202 555 0111" required />
                                <label for="modalEditUserPhone">Phone Number</label>
                            </div>
                        </div>
                    </div>
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
                            <label class="form-check-label" for="bs-validation-checkbox">Agree to our terms and
                                conditions</label>
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


<!-- / CONTENT: EDIT PROFILE -->
