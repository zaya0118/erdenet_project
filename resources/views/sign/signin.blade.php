<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/tailwind.css" />
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.4.5/dist/flowbite.min.css"/>
    <link rel="stylesheet" href="https://kit-pro.fontawesome.com/releases/v5.15.1/css/pro.min.css" />
    <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">
    <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">
    <title>Нэвтрэх</title>
</head>
<body>
    <section class="min-h-screen bg-blue-50">
        <div class="w-full lg:w-4/12 px-4 mx-auto pt-48">
            <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-blue-200 border-0">
                <div class="rounded-t mb-0 px-6 py-6">
                    <div class="text-center">
                        <h2 class="text-center text-4xl font-extrabold text-blue-800">Sign in</h2>
                    </div>
                    <!-- <div class="btn-wrapper text-center">
                        <button class="bg-white active:bg-blue-50 text-blue-700 font-normal px-4 py-2 rounded outline-none focus:outline-none mr-2 mb-1 uppercase shadow hover:shadow-md inline-flex items-center font-bold text-xs ease-linear transition-all duration-150" type="button">
                        <img alt="..." class="w-5 mr-1" src="https://demos.creative-tim.com/notus-js/assets/img/github.svg">Facebook</button>
                        <button class="bg-white active:bg-blue-50 text-blue-700 font-normal px-4 py-2 rounded outline-none focus:outline-none mr-1 mb-1 uppercase shadow hover:shadow-md inline-flex items-center font-bold text-xs ease-linear transition-all duration-150" type="button">
                        <img alt="..." class="w-5 mr-1" src="https://demos.creative-tim.com/notus-js/assets/img/google.svg">Google</button>
                    </div> -->
                </div>
                <div class="flex-auto px-4 lg:px-10 py-10 pt-0">
                    <!-- <div class="text-blue-400 text-center mb-3 font-bold">
                        <small>Or sign in with credentials</small>
                    </div> -->
                    <form>
                        <div class="relative w-full mb-3">
                            <label class="block uppercase text-gray-700 text-xs font-bold mb-2" htmlfor="grid-password">Email</label>
                            <input type="email" class="border-0 px-3 py-3 placeholder-blue-300 text-blue-600 bg-white rounded text-sm shadow w-full ease-linear transition-all duration-150" placeholder="Email">
                        </div>

                        <div class="relative w-full mb-3">
                            <label class="block uppercase text-gray-700 text-xs font-bold mb-2" htmlfor="grid-password">Password</label>
                            <input type="password" class="border-0 px-3 py-3 placeholder-blue-300 text-blue-600 bg-white rounded text-sm shadow w-full ease-linear transition-all duration-150" placeholder="Password">
                        </div>

                        <div class="mt-6 flex items-center justify-between">
                            <div class="flex items-center">
                                <input id="rememberme" type="checkbox" class="form-checkbox border-0 rounded text-blue-700 ml-1 w-5 h-5 ease-linear transition-all duration-150">
                                <label for="remember_me" class="ml-2 text-sm font-semibold text-gray-700"> Remember me </label>
                            </div>
                            <a href="#" class="ml-2 text-sm font-semibold text-gray-700"> Forgot your password? </a>
                        </div>

                        <div class="text-center mt-6">
                            <a href="/admin_home" class="bg-blue-800 text-white active:bg-blue-600 text-sm font-bold uppercase px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 w-full ease-linear transition-all duration-150" type="button">
                                Sign in
                            </a>
                        </div>
                        <div class="mt-6 text-center">
                            <a href="/signup" class="underline ml-2 font-semibold text-gray-700">Sign up for an account</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>
</html>