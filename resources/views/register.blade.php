<!DOCTYPE html>
<html lang="en">

{{-- <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Property Tax System - Login</title>
    <link rel="shortcut icon" type="image/png" href="assets/images/logos/favicon.png" />
    <link rel="stylesheet" href="assets/css/styles.min.css" />
</head> --}}

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Property Tax System - Login</title>

    <link rel="shortcut icon" type="image/png" href="assets/images/logos/favicon.png" />

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <!-- Custom styles for this template -->
</head>

<body>
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
                                <div class="container">
                                    <h2>Registration Form</h2>

                                    <form action="{{ route('applicant.register') }}" method="POST"
                                        id="registrationForm" x-data="{
                                            region: null,
                                            province: null,
                                            city: null,
                                            barangay: null,
                                            provinces: [],
                                            cities: [],
                                            barangays: [],

         
             onRegionChange(event)  {
             let regionId = event.target.value;
             if(event.target.value < 10){
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

                                        }"  enctype="multipart/form-data">
                                        @csrf
                                        <br>
                                        <div class="form-group">
                                            <label for="first_name">First Name</label>
                                            <input type="text" class="form-control" id="first_name" name="first_name"
                                                required>
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <label for="last_name">Last Name</label>
                                            <input type="text" class="form-control" id="last_name" name="last_name"
                                                required>
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <label for="middle_name">Middle Name</label>
                                            <input type="text" class="form-control" id="middle_name"
                                                name="middle_name">
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <label for="sex">Sex</label>
                                            <select class="form-control" id="sex" name="sex" required>
                                                <option value="">Select Sex</option>
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                            </select>
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <label for="dob">Date of Birth</label>
                                            <input type="date" class="form-control" id="dob" name="dob"
                                                required>
                                        </div>
                                        <br>

                                        <!-- Current Address -->
                                        <h5>Address</h5>
                                        <div class="form-group">
                                            <label for="region_id">Region</label>
                                            <select class="form-control" id="region_id" name="region_id" required
                                                x-model="region" x-on:change="onRegionChange">
                                                <option value="">Select Region</option>

                                              @foreach ($regions as $region)
                                              <option :value="{{ $region->region_code }}">{{ $region->region_description }}</option>

                                              @endforeach

                                            </select>
                                        </div>
                                        <br>
                                        <div class="form-group" x-show="provinces.length > 0">
                                            <label for="province_id">Province</label>
                                            <select class="form-control" id="province_id" name="province_id" x-on:change="onProvinceChange">
                                                <template x-for="province in provinces" :key="province.id">
                                                    <option x-bind:value="province.province_code" x-text="province.province_description"></option>
                                                </template>
                                            </select>
                                        </div>
                                        
                                        <br>
                                        <div class="form-group">
                                            <label for="city_id">Municipality</label>
                                            <select class="form-control" id="city_id" name="city_id" x-on:change="onCityChange" required>
                                                <template x-for="city in cities" :key="city.id">
                                                    <option x-bind:value="city.city_municipality_code" x-text="city.city_municipality_description"></option>
                                                </template>
                                            </select>
                                        </div>
                                        <br>
                                        <div class="form-group" >
                                            <label for="barangay_id">Barangay</label>
                                            <select class="form-control" id="barangay_id" name="barangay_id" required>
                                                <template x-for="barangay in barangays" :key="barangay.id">
                                                    <option x-bind:value="barangay.barangay_code" x-text="barangay.barangay_description"></option>
                                                </template>
                                            </select>
                                        </div>
                                        
                                        <br>
                                        <div class="form-group">
                                            <label for="permanent_address">House No./ Street</label>
                                            <input type="text" class="form-control" id="permanent_address"
                                                name="permanent_address" required>
                                        </div>
                                        <br>

                                        <div class="form-group">
                                            <label for="phone_number">Phone Number</label>
                                            <input type="tel" class="form-control" id="phone_number"
                                                name="phone_number" required>
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="email" class="form-control" id="email" name="email"
                                                required>
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <label for="password">Password</label>
                                            <input type="password" class="form-control" id="password"
                                                name="password" required>
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <label for="user_type">User Type</label>
                                            <select class="form-control" id="user_type" name="user_type" required>
                                                <option value="">Select User Type</option>
                                                <option value="admin">Admin</option>
                                                <option value="treasurer">Treasurer</option>
                                                <option value="staff">Staff</option>
                                                <option value="applicant">Applicant</option>
                                            </select>
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <label for="valid_id">Upload Valid ID</label>
                                            <input type="file" class="form-control-file" id="valid_id"
                                                name="valid_id" accept=".jpg, .jpeg, .png, .pdf" required>
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <label for="documents">Upload Documents</label>
                                            <input type="file" class="form-control-file" id="documents"
                                                name="documents" accept=".jpg, .jpeg, .png, .pdf, .doc, .docx"
                                                required>
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <input type="checkbox" id="terms_conditions" name="terms_conditions"
                                                required>
                                            <label for="terms_conditions">I agree to the Terms and Conditions</label>
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <input type="checkbox" id="data_privacy" name="data_privacy" required>
                                            <label for="data_privacy">I agree to the Data Privacy Agreement
                                                Notice</label>
                                        </div>
                                        <br>
                                        <button type="submit"
                                            class="btn btn-secondary w-100 py-8 fs-4 mb-4 rounded-2">Submit</button>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="//unpkg.com/alpinejs" defer></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script></script>

</body>

</html>
