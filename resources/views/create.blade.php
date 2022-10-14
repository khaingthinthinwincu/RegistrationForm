<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Registration Form using Tailwind CSS </title>
    
        @vite("resources/css/app.css")
        @vite("dist/styles.css")

    </head>
    <body class="antialised ">
        <div class="flex w-full min-h-screen justify-center items-center" style="background-image:url('../img/bg.jpg');">
            <div class = "flex bg-gray-100 flex-col rounded-xl md:space-x-6 space-y-6 md:space-y-0  w-full max-w-4xl p-8 rounded-xl shadow-lg text-gray-900 md:flex-row mt-5">

                <!-- information -->
                <div class="flex flex-col space-y-8  items-center self-center" >
                    <img class="p-20 pt-4 pb-10" src="../img/signin-image.jpg" alt="">
                    <h1 class="font-bold text-blue-600 text-4xl tracking-wide align-middle">New Here?</h1>
                    <p class="flex justify-items-center pb-5 pt-2 text-sm ">
                        Sign up and discover a great amount of new opportunities!    
                    </p>                    
                    <p class="text-xs my-2">I am already Registered! <a href="#" class="text-blue-600">Login</a></p> 
                </div>

            <!-- Registration form -->
            <div class="text-gray-600  md:w-1/2 ">
                <form action="{{ route('registers.store') }}" class="flex flex-col space-y-4" method="post" name="regForm">
                    @csrf
                    <!-- name -->
                    <div class="my-4 border-b-2 focus-within:border-blue-500">
                        <label for="" class="text-sm text-blue-800 font-bold">Full Name</label>
                        <input type="text" name="name" id="name" onkeyup="checkForm()" required placeholder="Enter Your Name" class="ring-1 ring-gray-300 w-full rounded-xl px-4 py-2 mt-2 outline-none focus: ring-2 focus: ring-teal-600 block py-2.5 px-0 w-full text-sm text-black border-0 border-b-2 border-blue-600 appearance-none bg-transparent dark:text-white dark:border-white focus:outline-none focus:ring-0 focus:border-white peer">
                    </div>
                    <!-- ph no -->
                    <div class="my-4 border-b-2 focus-within:border-blue-500">
                        <label for="" class="text-sm text-blue-800 font-bold">Phone Number</label>
                        <input type="text" name="phone" id="phone" onkeyup="checkForm()" required placeholder="Enter Your Phone Number" required onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))" required maxlength="12" class="ring-1 ring-gray-300 w-full rounded-xl px-4 py-2 mt-2 outline-none focus: ring-2 focus: ring-teal-600 block py-2.5 px-0 w-full text-sm text-black border-0 border-b-2 border-blue-600 appearance-none bg-transparent dark:text-white dark:border-white focus:outline-none focus:ring-0 focus:border-white peer">
                    </div>
                    <!-- dob -->
                    <div>
                        <label for="" class="text-sm text-blue-800 font-bold">Date of Birth</label>
                        <input type="date" name="dob" id="dob" onkeyup="checkForm()" required class="ring-1 ring-gray-300 w-full rounded-xl px-4 py-2 mt-2 outline-none focus: ring-2 focus: ring-teal-600 block py-2.5 px-0 w-full text-sm text-black border-0 border-b-2 border-blue-600 appearance-none bg-transparent dark:text-white dark:border-white focus:outline-none focus:ring-0 focus:border-white peer">
                    </div>
                    <!-- gender -->
                    <div>
                        <label for="" class="text-sm text-blue-800 font-bold">Gender</label><br>
                        <input type="radio" onkeyup="checkForm()" id="gender" checked name="gender" value="male" class="text-sm mx-1" required ><label for="male">Male</label>
                        <input type="radio" onkeyup="checkForm()" id="gender" name="gender" value="female" class="text-sm mx-1" required ><label for="female">Female</label>
                        <input type="radio" onkeyup="checkForm()" id="gender" name="gender" value="other" class="text-sm mx-1" required ><label for="custom">Other</label>
                    </div>
                    <!-- nrc -->
                    <label for="nrc_dropdown" class="text-sm text-blue-800 font-bold">NRC</label>
                    <div class="flex justify-between" id="nrc">
                        <select name="regionNo" id="regionNo" onKeyup="checkForm()" class="block py-2.5 px-0 w-1/6 text-sm text-black border-1 ring-1 ring-gray-300 rounded-md border-b-2 border-blue-600 bg-transparent dark:text-white dark:border-white focus:outline-none focus:ring-0 focus:border-white peer" >
                            <option selected value="">Region</option>
                                @foreach($region as $data)
                                <option value="{{ $data }}">{{ $data }}</option>
                                @endforeach
                        </select>
                        <div><span class="block py-2.5 px-0 w-1/6 text-sm text-black border-0 border-b-2 border-blue-600 appearance-none bg-transparent dark:text-white dark:border-white focus:outline-none focus:ring-0 focus:border-white peer" >/</span></div>
                        <select id="regionName" name="regionName" onkeyup="checkForm()" class="form-control block py-2.5 px-0 w-1/5 text-sm text-black border-1 ring-1 ring-gray-300 rounded-md  border-b-2 border-blue-600 bg-transparent dark:text-white dark:border-white focus:outline-none focus:ring-0 focus:border-white peer">
                            <option selected value="">Code</option> 
                        </select>
                        <select id="citizen" onkeyup="checkForm()" name="citizen" class="block py-2.5 px-0 w-1/7 text-sm text-black border-1 ring-1 ring-gray-300 rounded-md border-b-2 border-blue-600 bg-transparent dark:text-white dark:border-white focus:outline-none focus:ring-0 focus:border-white peer" >
                            <option selected value="(C)">(C)</option>
                            <option value="(N)">(N)</option>
                        </select>
                        <input type="text" name="no" onkeyup="checkForm()" id="no" onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))" maxlength="6" placeholder="123456" class="block py-2.5 px-0 w-2/6 text-sm text-black border-1 ring-1 ring-gray-300 rounded-md border-b-2 border-blue-600 appearance-none bg-transparent dark:text-white dark:border-white focus:outline-none focus:ring-0 focus:border-white peer" >
                    </div>
                        
                    <!-- marriage status -->
                    <div class="w-full">  
                        <label for="toggleB" class="flex items-center cursor-pointer">
                            <div class="text-sm w-2/6 text-blue-800 font-bold" id="status" >Married</div>
                            <!-- toggle -->
                            
                            <div class="relative">
                                <!-- input -->
                                <input type="checkbox" onkeyup="checkForm()" onclick="switchName()" name="marriage" id="toggleB" class="sr-only">
                                <!-- line -->
                                <div class="block bg-gray-300 w-11 h-6 rounded-full"></div>
                                <!-- dot -->
                                <div class="dot absolute left-1 top-1 bg-white w-4 h-4 rounded-full transition"></div>
                            </div>
                        </label>
                    </div>
                    <!-- township -->
                    <div class="my-4 border-b-2 focus-within:border-blue-500">
                        <label for="" class="text-sm text-blue-800 font-bold">Township</label>
                        <input type="text" name="township" id="township" onkeyup="checkForm()" required placeholder="Enter Your Township" class="ring-1 ring-gray-300 w-full rounded-xl px-4 py-2 mt-2 outline-none focus: ring-2 focus: ring-teal-600 block py-2.5 px-0 w-full text-sm text-black border-0 border-b-2 border-blue-600 appearance-none bg-transparent dark:text-white dark:border-white focus:outline-none focus:ring-0 focus:border-white peer">
                    </div>
                    <!-- Biography -->
                    <div class="my-4 border-b-2 focus-within:border-blue-500">
                        <label for="" class="text-sm text-blue-800 font-bold">Advice More Services</label>
                        <input type="checkbox" id="check" onclick="Bio()" class="w-1/6">
                        <textarea name="biography" id="biography" style="display:none;" value="" onkeyup="checkForm()" rows="3" placeholder="Enter Your Biography" class="ring-1 ring-gray-300 w-full rounded-xl px-4 py-2 mt-2 outline-none focus: ring-2 focus: ring-teal-600 block py-2.5 px-0 w-full text-sm text-black border-0 border-b-2 border-blue-600 appearance-none bg-transparent dark:text-white dark:border-white focus:outline-none focus:ring-0 focus:border-white peer"></textarea>
                    </div>
                    <!-- Register -->
                    <button type="submit" disabled="disabled" id="submitBtn" class="inline-block self-end bg-blue-700 text-white font-bold rounded-lg px-6 py-2 uppercase text-sm" >register</button>
                </form>
            </div>
        </div> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script>
            $(document).ready(function () {
            $('#regionNo').on('change', function () {
                var idNRC = this.value;
                $("#regionName").html('');
                    $.ajax({
                        url: "{{url('api/nrc')}}",
                        type: "POST",
                        data: {
                            region_id:idNRC,
                            _token: '{{csrf_token()}}'
                        },
                        dataType: 'json',
                        success: function (result) {
                            $('#regionName').html('<option value="">Code</option>');
                            $.each(result.names, function (key, value) {
                                $("#regionName").append('<option value="' + value
                                    + '">' + value + '</option>');
                            });
                        }
                    });
                });                
            });
        </script>

        <script type="text/javascript" language="javascript">
            function checkForm()
            {                
                var res = document.forms["regForm"].elements;
                var cansubmit = true;
                
                for (var i = 1; i < res.length-3; i++) {
                    if (res[i].value.length == 0) 
                    cansubmit = false;
                    
                }
                if (cansubmit) {
                    document.getElementById('submitBtn').disabled = false;
                }
            }

            var toggle = document.getElementById("toggleB");
            var status_name = document.getElementById("status");
            function switchName(){
                if(toggle.checked == true){
                    status_name.innerText = "Single";
                }else
                    status_name.innerText = "Married";
            }
        </script> 

        <script>
            function Bio(){
                var check = document.getElementById("check");
                var biography = document.getElementById("biography");
                if(check.checked == true){
                    biography.style.display = "block";
                }
                else {
                    biography.style.display = "none";
                }
            }
        </script>

    </body>
</html>
