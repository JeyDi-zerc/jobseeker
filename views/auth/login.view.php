<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
      integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.7/dist/tailwind.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="public/css/style.css" />
    <title>Prosple - Login</title>
  </head>
  <body class="min-h-screen flex items-center justify-center bg-gray-50">
    <div class="w-full max-w-6xl px-4">
      <div class="flex flex-col md:flex-row gap-12 items-center justify-center">
        <!-- Left Side - Branding -->
        <div class="flex-1 text-center md:text-left md:pr-8">
          <h1 class="text-5xl font-extrabold mb-4 text-blue-900"><a href="/" class="text-blue-900">Prosple</a></h1>
          <p class="text-2xl font-semibold text-gray-900 mb-6">
            Connect with opportunities and build your career.
          </p>
          <div class="hidden md:block text-gray-700">
            <p class="text-lg mb-4">Find the perfect job that matches your skills and ambitions.</p>
          </div>
        </div>

        <!-- Right Side - Login Form -->
        <div class="w-full md:flex-1 md:max-w-md">
          <div class="bg-white rounded-lg shadow p-8">
            <h2 class="text-2xl font-bold mb-6 text-gray-900">Log in to Prosple</h2>
            
            <form method="POST" class="space-y-4">
              <div>
                <input
                  type="email"
                  name="email"
                  placeholder="Email or mobile number"
                  class="w-full px-4 py-3 rounded-md focus:outline-none transition form-input"
                  required
                />
              </div>

              <div>
                <input
                  type="password"
                  name="password"
                  placeholder="Password"
                  class="w-full px-4 py-3 rounded-md focus:outline-none transition form-input"
                  required
                />
              </div>

              <button
                type="submit"
                class="w-full font-bold py-3 px-4 rounded-md text-white text-lg transition bg-gradient-to-r from-blue-800 to-yellow-500 hover:from-blue-700 hover:to-yellow-600 shadow-md transform hover:-translate-y-0.5"
              >
                Log in
              </button>
            </form>

            <div class="text-center my-4 auth-link-section">
              <a href="#" class="text-sm font-semibold">Forgot password?</a>
            </div>

            <div class="border-t mt-6 pt-6">
              <a href="/register" class="block w-full text-center py-3 rounded-md bg-white border border-gray-200 font-semibold text-gray-800 hover:bg-gray-50">Create new account</a>

              <div class="flex gap-3 justify-center mt-4">
                <button type="button" onclick="history.back();" class="px-4 py-2 rounded-md border text-blue-800">Go back</button>
                <a href="/" class="px-4 py-2 rounded-md bg-blue-800 text-white">Home</a>
              </div>
            </div>

            <div class="text-center mt-6 text-xs text-gray-600 auth-footer">
              <p>© 2026 Prosple. All rights reserved.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
