<!DOCTYPE html>
<html>
  <head>
    <title>Parcel Sandbox</title>
    <meta charset="UTF-8" />
    <link
      href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css"
      rel="stylesheet"
    />
    <script
      src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"
      defer
    ></script>
    <style>
      .active {
        color: red;
      }
    </style>
  </head>

  <body class="max-w-2xl mx-auto p-4">
    <div
      class="relative z-10"
      x-data="{
        open: false
    }"
      x-cloak
    >
      <div>
        <button
          @click="open = true"
          class="ml-4 inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"
        >
          <span x-text="open ? 'Close' : 'Open'"></span>
        </button>
      </div>
      <div x-show="open">
        <div>
          <div class="fixed inset-0 overflow-hidden">
            <div class="absolute inset-0 overflow-hidden">
              <div
                class="pointer-events-none fixed inset-y-0 right-0 flex max-w-full pl-10 sm:pl-16"
              >
                <div class="pointer-events-auto w-screen max-w-md">
                  <form
                    class="flex h-full flex-col divide-y divide-gray-200 bg-white shadow-xl"
                  >
                    <div class="py-6 px-4 sm:px-6">
                      <div class="flex items-center justify-between">
                        <h2 class="text-lg font-medium">Title</h2>
                        <div class="ml-3 flex h-7 items-center">
                          <button
                            type="button"
                            class="rounded-md text-indigo-200 hover:text-indigo-300 focus:outline-none focus:ring-2 focus:ring-white"
                            x-on:click="open=false"
                          >
                            <span class="sr-only">Close panel</span>
                            <div class="h-6 w-6 text-xl">&times;</div>
                          </button>
                        </div>
                      </div>
                    </div>
                    <div class="h-0 flex-1 overflow-y-auto">
                      <div class="flex flex-1 flex-col justify-between">
                        <div class="p-4 sm:p-6">
                          <div>
                            <div
                              class="max-w-lg flex justify-center px-6 pt-5 pb-6 border-2 rounded-md"
                            >
                              <div class="space-y-1 text-center">
                                <div class="flex text-sm text-gray-600">
                                  Content
                                </div>
                                <p class="text-xs text-gray-500">
                                  Some text (optional)
                                </p>
                              </div>
                            </div>
                          </div>
                          <!-- other contents -->
                        </div>
                      </div>
                    </div>

                    <div>
                      <div class="flex flex-shrink-0 justify-end px-4 py-4">
                        <button
                          type="submit"
                          class="ml-4 inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"
                        >
                          Import
                        </button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
