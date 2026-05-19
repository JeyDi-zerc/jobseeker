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
    <title>Prosple - Register</title>
  </head>
  <body class="min-h-screen flex items-center justify-center bg-gray-50">
    <div class="w-full max-w-6xl px-4">
      <div class="grid md:grid-cols-2 gap-8 items-center">
        <div class="px-6">
          <h1 class="text-4xl font-extrabold text-blue-900 mb-4"><a href="/">Prosple</a></h1>
          <p class="text-2xl font-semibold text-gray-900 mb-4">Discover jobs with a brighter new look.</p>
          <p class="text-gray-700 hidden md:block">Create your account to access curated job matches and career tools.</p>
        </div>

        <div class="w-full max-w-md mx-auto">
          <div class="bg-white rounded-lg shadow p-8">
            <h2 class="text-2xl font-bold mb-4">Create account</h2>

            <form method="POST" class="space-y-3">
              <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <input
                  type="text"
                  name="name"
                  placeholder="Full Name"
                  class="w-full px-5 py-4 rounded-lg border-2 border-gray-200 text-base placeholder-gray-400 bg-white focus:outline-none focus:ring-4 focus:ring-blue-100 focus:border-blue-800 shadow-sm transition"
                  required
                />
                <input
                  type="email"
                  name="email"
                  placeholder="Email Address"
                  class="w-full px-5 py-4 rounded-lg border-2 border-gray-200 text-base placeholder-gray-400 bg-white focus:outline-none focus:ring-4 focus:ring-blue-100 focus:border-blue-800 shadow-sm transition"
                  required
                />
              </div>

              <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <input
                  type="text"
                  name="city"
                  placeholder="City"
                  class="w-full px-5 py-4 rounded-lg border-2 border-gray-200 text-base placeholder-gray-400 bg-white focus:outline-none focus:ring-4 focus:ring-blue-100 focus:border-blue-800 shadow-sm transition"
                  required
                />
                <input
                  type="text"
                  name="state"
                  placeholder="State"
                  class="w-full px-5 py-4 rounded-lg border-2 border-gray-200 text-base placeholder-gray-400 bg-white focus:outline-none focus:ring-4 focus:ring-blue-100 focus:border-blue-800 shadow-sm transition"
                  required
                />
              </div>

              <input
                type="password"
                name="password"
                placeholder="Password"
                class="w-full px-5 py-4 rounded-lg border-2 border-gray-200 text-base placeholder-gray-400 bg-white focus:outline-none focus:ring-4 focus:ring-blue-100 focus:border-blue-800 shadow-sm transition mt-2"
                required
              />

              <input
                type="password"
                name="password_confirmation"
                placeholder="Confirm Password"
                class="w-full px-5 py-4 rounded-lg border-2 border-gray-200 text-base placeholder-gray-400 bg-white focus:outline-none focus:ring-4 focus:ring-blue-100 focus:border-blue-800 shadow-sm transition mt-2"
                required
              />

              <button type="submit" class="w-full py-3 rounded-md font-bold text-white bg-gradient-to-r from-yellow-500 to-blue-800 hover:from-yellow-400 hover:to-blue-700 shadow-md text-base">
                Create Account
              </button>
            </form>

            <div class="mt-4 flex gap-3 justify-center">
              <button type="button" onclick="history.back();" class="px-4 py-2 rounded-md border text-blue-800">Go back</button>
              <a href="/" class="px-4 py-2 rounded-md bg-blue-800 text-white">Home</a>
            </div>

            <div class="text-center mt-4 text-sm text-gray-600">
              Already have an account? <a href="/login" class="font-semibold text-blue-800">Log in</a>
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
