<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
      $title = "Register";
      include "./partials/head.php";
    ?>
  </head>

  <body class="bg-gray-900 text-white flex flex-col min-h-screen items-center">

    <section class="bg-white">
      <div class="lg:grid lg:min-h-screen lg:grid-cols-12">
        <section class="relative flex h-32 items-end bg-gray-900 lg:col-span-5 lg:h-full xl:col-span-6">
          <img
            alt=""
            src="/img/brand/random_popcorn_2.avif"
            class="absolute inset-0 h-full w-full object-cover opacity-80"
          />

          <a href="/" class="absolute left-0 top-0 bg-gray-900 rounded-full ml-4 mt-4 w-8 h-8 flex justify-center items-center">
            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline-block size-5 text-white" viewBox="0 0 16 16">
                <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z"></path>
            </svg>
          </a>

          <div class="hidden lg:relative lg:block lg:p-12">
            <a class="block text-white" href="#">
              <span class="sr-only">Home</span>
              <svg
                class="h-8 sm:h-10"
                viewBox="0 0 28 24"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M14 1C6.83 1 1 6.83 1 14s5.83 13 13 13 13-5.83 13-13S21.17 1 14 1zm0 2c6.08 0 11 4.92 11 11s-4.92 11-11 11S3 20.08 3 14 7.92 3 14 3zm-5.5 7a1.5 1.5 0 11-.001-2.999A1.5 1.5 0 018.5 10zm0 6a1.5 1.5 0 11-.001-2.999A1.5 1.5 0 018.5 16zm6.5-8.5a1.5 1.5 0 11-.001-2.999A1.5 1.5 0 0115 7.5zm-3.5 4.5a1.5 1.5 0 11-.001-2.999A1.5 1.5 0 0111.5 12zm3.5 1.5a1.5 1.5 0 11-.001-2.999A1.5 1.5 0 0115 13.5zm-3.5 4.5a1.5 1.5 0 11-.001-2.999A1.5 1.5 0 0111.5 18zM19.5 16a1.5 1.5 0 11-.001-2.999A1.5 1.5 0 0119.5 16zm0-6a1.5 1.5 0 11-.001-2.999A1.5 1.5 0 0119.5 10z"
                  fill="currentColor"
                />
              </svg>
            </a>

            <h2 class="mt-6 text-2xl font-bold text-white sm:text-3xl md:text-4xl">
              Welcome to 😎 Movvs
            </h2>

            <p class="mt-4 leading-relaxed text-white/90">
              Join now to access information about movies and TV shows. Sign up for free today!
            </p>
          </div>
        </section>

        <main
          class="flex items-center justify-center px-8 py-8 sm:px-12 lg:col-span-7 lg:px-16 lg:py-12 xl:col-span-6"
        >
          <div class="max-w-xl lg:max-w-3xl">
            <div class="relative -mt-16 block lg:hidden">
              <a
                class="inline-flex size-16 items-center justify-center rounded-full bg-white text-blue-600 sm:size-20"
                href="#"
              >
                <span class="sr-only">Home</span>
                <svg
                  class="h-8 sm:h-10"
                  viewBox="0 0 28 24"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M14 1C7.92 1 3 5.92 3 12C3 18.08 7.92 23 14 23C20.08 23 25 18.08 25 12C25 5.92 20.08 1 14 1ZM14 21C8.48 21 4 16.52 4 11C4 5.48 8.48 1 14 1C19.52 1 24 5.48 24 11C24 16.52 19.52 21 14 21ZM14 3.5C13.17 3.5 12.5 4.17 12.5 5C12.5 5.83 13.17 6.5 14 6.5C14.83 6.5 15.5 5.83 15.5 5C15.5 4.17 14.83 3.5 14 3.5ZM8.5 8C7.67 8 7 8.67 7 9.5C7 10.33 7.67 11 8.5 11C9.33 11 10 10.33 10 9.5C10 8.67 9.33 8 8.5 8ZM19.5 8C18.67 8 18 8.67 18 9.5C18 10.33 18.67 11 19.5 11C20.33 11 21 10.33 21 9.5C21 8.67 20.33 8 19.5 8ZM14 16C13.17 16 12.5 16.67 12.5 17.5C12.5 18.33 13.17 19 14 19C14.83 19 15.5 18.33 15.5 17.5C15.5 16.67 14.83 16 14 16ZM8.5 17C7.67 17 7 17.67 7 18.5C7 19.33 7.67 20 8.5 20C9.33 20 10 19.33 10 18.5C10 17.67 9.33 17 8.5 17ZM19.5 17C18.67 17 18 17.67 18 18.5C18 19.33 18.67 20 19.5 20C20.33 20 21 19.33 21 18.5C21 17.67 20.33 17 19.5 17Z"
                    fill="currentColor"
                  />
                </svg>
              </a>

              <h1 class="mt-2 text-2xl font-bold text-gray-900 sm:text-3xl md:text-4xl">
                Welcome to 😎 Movvs
              </h1>

              <p class="mt-4 leading-relaxed text-gray-500">
                Join now to access information about movies and TV shows. Sign up for free today!
              </p>
            </div>

            <form action="./handlers/register.php" method="POST" class="mt-8 grid grid-cols-6 gap-6">
              <div class="col-span-6 sm:col-span-3">
                <label for="FirstName" class="block text-sm font-medium text-gray-700">
                  First Name
                </label>

                <input
                  required
                  type="text"
                  id="FirstName"
                  name="firstname"
                  class="mt-1 w-full rounded-md border-gray-200 bg-white text-sm text-gray-700 shadow-sm"
                />
              </div>

              <div class="col-span-6 sm:col-span-3">
                <label for="LastName" class="block text-sm font-medium text-gray-700">
                  Last Name
                </label>

                <input
                  required
                  type="text"
                  id="LastName"
                  name="lastname"
                  class="mt-1 w-full rounded-md border-gray-200 bg-white text-sm text-gray-700 shadow-sm"
                />
              </div>

              <div class="col-span-6 sm:col-span-3">
                <label for="Email" class="block text-sm font-medium text-gray-700"> Email </label>

                <input
                  required
                  type="email"
                  id="Email"
                  name="email"
                  class="mt-1 w-full rounded-md border-gray-200 bg-white text-sm text-gray-700 shadow-sm"
                />
                <span id="email_info_span" class="block text-xs"></span>
              </div>

              <div class="relative col-span-6 sm:col-span-3">
                <label for="Username" class="block text-sm font-medium text-gray-700"> Username </label>

                <input
                  required
                  type="text"
                  id="Username"
                  name="username"
                  class="mt-1 w-full rounded-md border-gray-200 bg-white text-sm text-gray-700 shadow-sm"
                />
                <span id="username_info_span" class="block text-xs"></span>
              </div>

              <div class="col-span-6 sm:col-span-3">
                <label for="Password" class="block text-sm font-medium text-gray-700"> Password </label>

                <input
                  required
                  type="password"
                  id="Password"
                  name="password"
                  class="mt-1 w-full rounded-md border-gray-200 bg-white text-sm text-gray-700 shadow-sm"
                />
              </div>

              <div class="col-span-6 sm:col-span-3">
                <label for="PasswordConfirmation" class="block text-sm font-medium text-gray-700">
                  Password Confirmation
                </label>

                <input
                  required
                  type="password"
                  id="PasswordConfirmation"
                  name="password_confirmation"
                  class="mt-1 w-full rounded-md border-gray-200 bg-white text-sm text-gray-700 shadow-sm"
                />
              </div>
              <div class="col-span-6 -mt-5">
                <span id="passsword_match_span" class="text-center block text-xs"></span>
              </div>

              <div class="col-span-6 -mt-5">
                <label for="FavoriteFranchise" class="block text-sm font-medium text-gray-700">
                  Favorite Franchise
                </label>

                <input
                  required
                  type="text"
                  id="FavoriteFranchise"
                  name="favorite"
                  class="mt-1 w-full rounded-md border-gray-200 bg-white text-sm text-gray-700 shadow-sm"
                />
              </div>

              <!-- set alert here -->
              <?php 
                alertMessage();
              ?>

              <div class="col-span-6">
                <p class="text-sm text-gray-500">
                  By creating an account, you agree to my arbituary
                  <a href="#" title="Don't bother clicking" class="text-gray-700 underline"> terms and conditions </a>
                  and
                  <a href="#" title="Don't bother clicking" class="text-gray-700 underline">privacy policy</a> (I won't tell you though). 🤞
                </p>
              </div>

              <div class="col-span-6 sm:flex sm:items-center sm:gap-4">
                <button
                  type="submit"
                  name="registerbutton"
                  class="inline-block shrink-0 rounded-md border border-blue-600 bg-blue-600 px-12 py-3 text-sm font-medium text-white transition hover:bg-transparent hover:text-blue-600 focus:outline-none focus:ring active:text-blue-500"
                >
                  Create an account
                </button>

                <p class="mt-4 text-sm text-gray-500 sm:mt-0">
                  Already have an account?
                  <a href="/login.php" class="text-gray-700 underline">Login</a>.
                </p>
              </div>
            </form>


          </div>
        </main>
      </div>
    </section>
    
    <script src="js/registrationValidation.js" defer type="module"></script>
  </body>
</html>