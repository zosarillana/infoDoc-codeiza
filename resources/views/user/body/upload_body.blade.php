  <div class="bg-gray-50 rounded-md shadow dark:border md:mt-0 sm:max-w-xl xl:p-0 dark:bg-gray-800 dark:border-gray-800">
      <div class="p-6 space-y-4 md:space-y-6 sm:p-8">

          <p class="text-sm font-light text-gray-500 dark:text-gray-400">
              Fill in the fields and select a file to upload.
          </p>
          <form class="space-y-4 md:space-y-6" action="#">
              <div>
                  <label for="document_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Document
                      name</label>
                  <input type="document_name" name="document_name" id="document_name"
                      class="bg-white border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                      placeholder="document name" required="">
              </div>
              <label class="form-control w-full ">
                  <div class="label">
                      <span class="label-text">Pick a file</span>
                      <span class="label-text-alt">File name</span>
                  </div>
                  <input type="file" class="file-input file-input-bordered w-full" />

              </label>
              <button
                  class="btn
                                    btn-block border-none text-gray-50 bg-green-500 hover:bg-green-900">Sign
                  in</button>

          </form>
      </div>
