<template>
<div class="container mt-5">
    <div class="row mt-5">
      <div class="col-12 mt-5">
        <p class="fs-1 text-primary text-center mt-5">
          Ti servono <b>Informazioni?</b>
        </p>
        <p class="fs-4 text-primary text-center">
            Contattaci tramite questo apposito form
        </p>
      </div>
    </div>
  </div>

  <div class="col-12 col-md-10 offset-md-3">
    <div class="md:grid md:grid-cols-3">
      <div class="mt-5 md:mt-0 md:col-span-2">
        <form action="#" method="POST">
          <div class="overflow-hidden sm:rounded-md">
            <div class="px-4 py-5 bg-white sm:p-6">
              <div class="grid grid-cols-6 gap-6">
                <div class="col-span-6 sm:col-span-3">
                  <label
                    for="first_name"
                    class="block text-sm font-medium text-primary fs-6"
                    >Nome</label
                  >
                  <input
                    type="text"
                    name="first_name"
                    id="first_name"
                    autocomplete="given-name"
                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                  />
                </div>

                <div class="col-span-6 sm:col-span-3">
                  <label
                    for="last_name"
                    class="block text-sm font-medium text-primary fs-6"
                    >Cognome</label
                  >
                  <input
                    type="text"
                    name="last_name"
                    id="last_name"
                    autocomplete="family-name"
                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                  />
                </div>

                <div class="col-span-6 sm:col-span-4">
                  <label
                    for="email_address"
                    class="block text-sm font-medium text-primary fs-6"
                    >Indirizzo Email</label
                  >
                  <input
                    type="text"
                    name="email_address"
                    id="email_address"
                    autocomplete="email"
                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                  />
                </div>

                <div class="col-span-6 sm:col-span-3">
                  <label
                    for="country"
                    class="block text-sm font-medium text-primary fs-6"
                    >Stato / Regione</label
                  >
                  <select
                    id="country"
                    name="country"
                    autocomplete="country"
                    class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                  >
                    <option>Italia</option>
                    <option>United States</option>
                    <option>Canada</option>
                    <option>Mexico</option>
                  </select>
                </div>

                <div class="col-span-6">
                  <label
                    for="street_address"
                    class="block text-sm font-medium text-primary fs-6"
                    >Chiedi qui le info che ti occorrono (preventivi,info sui tempi,info sui servizi)</label
                  >
                  <input
                    type="text"
                    name="street_address"
                    id="street_address"
                    autocomplete="street-address"
                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                  />
                </div>

                <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                  <label
                    for="city"
                    class="block text-sm font-medium text-primary fs-6"
                    >Città</label
                  >
                  <input
                    type="text"
                    name="city"
                    id="city"
                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                  />
                </div>

                <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                  <label
                    for="state"
                    class="block text-sm font-medium text-primary fs-6"
                    >Stato / Provincia</label
                  >
                  <input
                    type="text"
                    name="state"
                    id="state"
                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                  />
                </div>

                <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                  <label
                    for="postal_code"
                    class="block text-sm font-medium text-primary fs-6"
                    >ZIP / Codice Postale</label
                  >
                  <input
                    type="text"
                    name="postal_code"
                    id="postal_code"
                    autocomplete="postal-code"
                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                  />
                </div>
              </div>
            </div>
            <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
              <button
                type="submit"
                class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-primary bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
              >
                Save
              </button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

  <div class="hidden sm:block" aria-hidden="true">
    <div class="py-5">
      <div class="border-t border-gray-200" />
    </div>
  </div>
</template>

<script>
export default {};
</script>

<style>
</style>