<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Property Tax System - Login</title>

    <link rel="shortcut icon" type="image/png" href="assets/images/logos/favicon.png" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap');
    </style>

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <!-- Custom styles for this template -->
</head>

<body class="mb-48">

    <br>

    <!--  Body Wrapper -->

    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        <div
            class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
            <div class="d-flex align-items-center justify-content-center w-100">
                <div class="row justify-content-center w-100">
                    <div class="col-md-8 col-lg-6 col-xxl-3">
                        <div class="card mb-0">
                            <div class="card-body">
                                <div class="container content-center">

                                    <h2 class="my-4 text-center">Registration Form</h2>
                                    <p class="text-center">Fields with red asterisks (<span class="required">*</span>)
                                        are required fields. </p>

                                    <form action="{{ route('applicant.register') }}" method="POST"
                                        id="registrationForm" x-data="{
                                            region: null,
                                            province: null,
                                            city: null,
                                            barangay: null,
                                            provinces: [],
                                            cities: [],
                                            barangays: [],


                                            onRegionChange(event) {
                                                let regionId = event.target.value;
                                                if (event.target.value < 10) {
                                                    regionId = String(event.target.value).padStart(2, '0');
                                                }
                                                console.log(`Selected region: ${event.target.value}`);
                                                axios.get(`/regions/${regionId}`).then(res => {

                                                    this.provinces = res.data;
                                                    console.log('fetched provinces', this.provinces)

                                                }).catch(error => {
                                                    console.error('Error fetching provinces:', error);
                                                });
                                            },

                                            onProvinceChange(event) {
                                                const provinceId = event.target.value;
                                                console.log(`Province Selected: ${provinceId}`)

                                                // Fetch cities based on the selected province CODE
                                                axios.get(`/provinces/${provinceId}`).then(res => {
                                                    this.cities = res.data;
                                                    console.log('fetched cities', this.cities);
                                                }).catch(error => {
                                                    console.error('Error fetching cities:', error);
                                                });
                                            },

                                            onCityChange(event) {
                                                const cityId = event.target.value;
                                                console.log(`Province Selected: ${cityId}`)
                                                // Fetch barangays based on the selected city CODE
                                                axios.get(`/cities/${cityId}`).then(res => {
                                                    this.barangays = res.data;
                                                    console.log('fetched barangays', this.barangays);
                                                }).catch(error => {
                                                    console.error('Error fetching barangays:', error);
                                                });
                                            }

                                        }" enctype="multipart/form-data">
                                        @csrf

                                        <div class="row">

                                            <!-- Personal Information Section -->
                                            <div class="col-md-6">
                                                <h4 class="mb-3">Personal Information</h4>

                                                <!-- First Name -->
                                                <div class="mb-3">
                                                    <label for="first_name" class="form-label">First Name<span
                                                            class="required">
                                                            *</span></label>
                                                    <input type="text" class="form-control" id="first_name"
                                                        name="first_name" required>
                                                    @error('first_name')
                                                        <div class="text-sm text-red-600">{{ $message }}</div>
                                                    @enderror
                                                </div>

                                                <!-- Last Name -->
                                                <div class="mb-3">
                                                    <label for="last_name" class="form-label">Last Name<span
                                                            class="required">
                                                            *</span></label>
                                                    <input type="text" class="form-control" id="last_name"
                                                        name="last_name" required>
                                                    @error('last_name')
                                                        <div class="text-sm text-red-600">{{ $message }}</div>
                                                    @enderror
                                                </div>

                                                <!-- Middle Name -->
                                                <div class="mb-3">
                                                    <label for="middle_name" class="form-label">Middle Name</label>
                                                    <input type="text" class="form-control" id="middle_name"
                                                        name="middle_name">
                                                    @error('middle_name')
                                                        <div class="text-sm text-red-600">{{ $message }}</div>
                                                    @enderror
                                                </div>

                                                <!-- Sex -->
                                                <div class="mb-3">
                                                    <label for="sex" class="form-label">Sex<span class="required">
                                                            *</span></label>
                                                    <select class="form-control" id="sex" name="sex" required>
                                                        <option value="">Select Sex</option>
                                                        <option value="Male">Male</option>
                                                        <option value="Female">Female</option>
                                                    </select>
                                                    @error('sex')
                                                        <div class="text-sm text-red-600">{{ $message }}</div>
                                                    @enderror
                                                </div>

                                                <!-- Date of Birth -->
                                                <div class="mb-3">
                                                    <label for="dob" class="form-label">Date of Birth<span
                                                            class="required">
                                                            *</span></label>
                                                    <input type="date" class="form-control" id="dob"
                                                        name="dob" required>
                                                    @error('dob')
                                                        <div class="text-sm text-red-600">{{ $message }}</div>
                                                    @enderror
                                                </div>

                                            </div>

                                            <!-- Address Information Section -->
                                            <div class="col-md-6">
                                                <h4 class="mb-3">Address Information</h4>

                                                <!-- Region -->
                                                <div class="mb-3">
                                                    <label for="region_code" class="form-label">Region<span
                                                            class="required">
                                                            *</span></label>
                                                    <select class="form-control" id="region_code" name="region_code"
                                                        required x-model="region" x-on:change="onRegionChange">
                                                        <option value="">Select Region</option>

                                                        @foreach ($regions as $region)
                                                            <option :value="{{ $region->region_code }}">
                                                                {{ $region->region_description }}</option>
                                                        @endforeach

                                                    </select>
                                                    @error('region_code')
                                                        <div class="text-sm text-red-600">{{ $message }}</div>
                                                    @enderror
                                                </div>

                                                <!-- Province -->
                                                <div class="mb-3" x-show="true">
                                                    <label for="province_code" class="form-label">Province<span
                                                            class="required">
                                                            *</span></label>
                                                    <select class="form-control" id="province_code"
                                                        name="province_code" x-on:change="onProvinceChange">
                                                        <option value="">Select Province</option>
                                                        <template x-for="province in provinces" :key="province.id">
                                                            <option x-bind:value="province.province_code"
                                                                x-text="province.province_description">
                                                            </option>
                                                        </template>
                                                    </select>
                                                    @error('province_code')
                                                        <div class="text-sm text-red-600">{{ $message }}</div>
                                                    @enderror
                                                </div>

                                                <!-- City/Municipality -->
                                                <div class="mb-3">
                                                    <label for="city_municipality_code"
                                                        class="form-label">City/Municipality<span class="required">
                                                            *</span></label>
                                                    <select class="form-control" id="city_municipality_code"
                                                        name="city_municipality_code" x-on:change="onCityChange"
                                                        required>
                                                        <option value="">Select
                                                            City/Municipality</option>
                                                        <template x-for="city in cities" :key="city.id">
                                                            <option x-bind:value="city.city_municipality_code"
                                                                x-text="city.city_municipality_description"></option>
                                                        </template>
                                                    </select>
                                                    @error('city_municipality_code')
                                                        <div class="text-sm text-red-600">{{ $message }}</div>
                                                    @enderror
                                                </div>

                                                <!-- Barangay -->
                                                <div class="mb-3">
                                                    <label for="barangay_code" class="form-label">Barangay<span
                                                            class="required">
                                                            *</span></label>
                                                    <select class="form-control" id="barangay_code"
                                                        name="barangay_code" required>
                                                        <option value="">Select
                                                            Barangay</option>
                                                        <template x-for="barangay in barangays" :key="barangay.id">
                                                            <option x-bind:value="barangay.barangay_code"
                                                                x-text="barangay.barangay_description">
                                                            </option>
                                                        </template>
                                                    </select>
                                                    @error('barangay_code')
                                                        <div class="text-sm text-red-600">{{ $message }}</div>
                                                    @enderror
                                                </div>

                                                <!-- House Number/Street -->
                                                <div class="mb-3">
                                                    <label for="house_number" class="form-label">House No./
                                                        Street</label>
                                                    <input type="text" class="form-control" id="house_number"
                                                        name="house_number" required>
                                                    @error('house_number')
                                                        <div class="text-sm text-red-600">{{ $message }}</div>
                                                    @enderror
                                                </div>

                                            </div>


                                            <!-- Account Information Section -->
                                            <div class="col-md-6">
                                                <h4 class="mb-3">Account Information</h4>

                                                <!-- Password -->
                                                <div class="mb-3">
                                                    <label for="password" class="form-label">Password<span
                                                            class="required">
                                                            *</span></label>
                                                    <input type="password" class="form-control" id="password"
                                                        name="password" required>
                                                    @error('password')
                                                        <div class="text-sm text-red-600">{{ $message }}</div>
                                                    @enderror
                                                </div>

                                                <div class="mb-3">
                                                    <label for="password_confirmation" class="form-label">Confirm
                                                        Password<span class="required">
                                                            *</span></label>
                                                    <input type="password" class="form-control"
                                                        id="password_confirmation" name="password_confirmation"
                                                        required>
                                                    @error('password_confirmation')
                                                        <div class="text-sm text-red-600">{{ $message }}</div>
                                                    @enderror
                                                </div>

                                                <div class="mb-3">
                                                    <label for="user_type" class="form-label">User Type<span
                                                            class="required">
                                                            *</span></label>
                                                    <select class="form-control" id="user_type" name="user_type"
                                                        required>
                                                        <option value="">Select User Type</option>
                                                        <option value="admin">Admin</option>
                                                        <option value="treasurer">Treasurer</option>
                                                        <option value="staff">Staff</option>
                                                        <option value="applicant">Applicant</option>
                                                    </select>
                                                    @error('user_type')
                                                        <div class="text-sm text-red-600">{{ $message }}</div>
                                                    @enderror
                                                </div>

                                            </div>

                                            <!-- Contact Information  Section -->
                                            <div class="col-md-6">
                                                <h4 class="mb-3">Contact Information</h4>

                                                <!-- Phone Number -->
                                                <div class="mb-3">
                                                    <label for="phone_number" class="form-label">Phone Number<span
                                                            class="required">
                                                            *</span></label>
                                                    <input type="tel" class="form-control" id="phone_number"
                                                        name="phone_number" required>
                                                    @error('phone_number')
                                                        <div class="text-sm text-red-600">{{ $message }}</div>
                                                    @enderror
                                                </div>

                                                <!-- Email -->
                                                <div class="mb-3">
                                                    <label for="email" class="form-label">Email<span
                                                            class="required">
                                                            *</span></label>
                                                    <input type="email" class="form-control" id="email"
                                                        name="email" required>
                                                    @error('email')
                                                        <div class="text-sm text-red-600">{{ $message }}</div>
                                                    @enderror
                                                </div>

                                            </div>

                                            <!-- Document Upload Section -->
                                            <div class="col-md-12">
                                                <h4 class="mb-3">Document Uploads</h4>

                                                <!-- Valid ID -->
                                                <div class="mb-3">
                                                    <label for="valid_id" class="form-label">Upload Valid ID<span
                                                            class="required">
                                                            *</span></label>
                                                    <input type="file" class="form-control-file" id="valid_id"
                                                        name="valid_id" accept=".jpg, .jpeg, .png, .pdf" required>
                                                    @error('valid_id')
                                                        <div class="text-sm text-red-600">{{ $message }}</div>
                                                    @enderror
                                                </div>

                                                <!-- Documnets -->
                                                <div class="mb-3">
                                                    <label for="documents" class="form-label">Upload
                                                        Documents<span class="required">
                                                            *</span></label>
                                                    <input type="file" class="form-control-file" id="documents"
                                                        name="documents" accept=".jpg, .jpeg, .png, .pdf, .doc, .docx"
                                                        required>
                                                    @error('documents')
                                                        <div class="text-sm text-red-600">{{ $message }}</div>
                                                    @enderror
                                                </div>

                                                <!-- Terms and Conditions -->
                                                <div class="form-group">
                                                    <input type="checkbox" id="terms_conditions"
                                                        name="terms_conditions" required>
                                                    <label for="terms_conditions" class="form-label">I agree to
                                                        the Terms and
                                                        Conditions<span class="required"> *</span></label>

                                                </div>

                                                <!-- Data Privacy Policy -->
                                                <div class="form-group">
                                                    <input type="checkbox" id="data_privacy" name="data_privacy"
                                                        required>
                                                    <label for="data_privacy" class="form-label">I agree to the
                                                        Data Privacy Agreement
                                                        Notice<span class="required"> *</span></label>

                                                </div>

                                                <div class="d-flex justify-content-between mt-4 gap-2">
                                                    <!-- Back Button -->
                                                    <button type="button" onclick="history.back()"
                                                        class="btn btn-primary w-50 rounded-2">Back</button>

                                                    <!-- Submit Button -->
                                                    <button type="submit"
                                                        class="btn btn-primary w-50 rounded-2">Submit</button>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                                </form>


                                <script src="//unpkg.com/alpinejs" defer></script>
                                <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <br>
    @include('includes.footer')
</body>

</html>
