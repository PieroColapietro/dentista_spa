<template>
<div class="container mt-5">
    <div class="row mt-5">
      <div class="col-12 mt-5">
        <p class="fs-1 text-main text-center mt-5">
          Ti servono <b>Informazioni?</b>
        </p>
        <p class="fs-4 text-main text-center">
            Contattaci tramite questo apposito form
        </p>
      </div>
    </div>
  </div>

  <div class="col-12 col-md-10 offset-md-3">
    <div class="md:grid md:grid-cols-3">
      <div class="mt-5 md:mt-0 md:col-span-2">
        <form
          id="contatti-form"
          @submit="checkForm"
          action=""
          method=""
          class="contatti-form"
        >
          <div class="overflow-hidden sm:rounded-md">
            <div class="px-4 py-5 bg-white sm:p-6">
              <div class="grid grid-cols-6 gap-6">
                <div class="col-span-6 sm:col-span-3">
                  <label
                    for="name"
                    class="block text-sm font-medium text-main fs-6"
                    >Nome</label
                  >
                  <input
                    type="text"
                    name="name"
                    id="name"
                    autocomplete="given-name"
                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                  />
                </div>

                <div class="col-span-6 sm:col-span-3">
                  <label
                    for="last_name"
                    class="block text-sm font-medium text-main fs-6"
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
                    for="email"
                    class="block text-sm font-medium text-main fs-6"
                    >Indirizzo Email</label
                  >
                  <input
                    type="text"
                    name="email"
                    id="email"
                    autocomplete="email"
                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                  />
                </div>

                <div class="col-span-6">
                  <label
                    for="street"
                    class="block text-sm font-medium text-main fs-6"
                    >Chiedi qui le info che ti occorrono (preventivi,info sui tempi,info sui servizi)</label
                  >
                  <input
                    type="text"
                    name="street"
                    id="street"
                    autocomplete="street-address"
                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                  />
                </div>

                <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                  <label
                    for="city"
                    class="block text-sm font-medium text-main fs-6"
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
                    class="block text-sm font-medium text-main fs-6"
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
                    class="block text-sm font-medium text-main fs-6"
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
                class="submit inline-flex justify-center py-2 px-4 btn btn-form"
                value="Submit"
                @click="submit"
              >
                Invia
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