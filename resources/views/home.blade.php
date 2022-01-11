<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>La Via del Jedi</title>
    <meta name="description" content="Una semplice API per la visualizzazion casuale di citazioni di Star Wars" />
    <meta name="keywords" content="" />
    <link rel="icon" href="public/images/ordine_jedi_icon.png">


    <!-- <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css"/> -->
    <link rel="stylesheet" href="public/assets/css/tailwind.min.css"/>
    <!--Replace with your tailwind.css once created-->
    <!-- <link href="https://unpkg.com/@tailwindcss/custom-forms/dist/custom-forms.min.css" rel="stylesheet" /> -->
    <link href="public/assets/css/custom-forms.min.css" rel="stylesheet" />

    <style>
      @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap");

      html {
        font-family: "Poppins", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
      }
    </style>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
  </head>

  <body 
    x-data="{ utilizzo: false, info: false}"
    class="leading-normal tracking-normal text-indigo-400 m-6 bg-cover bg-fixed" style="background-image: url('public/header.png');">
    <div class="h-full">
      <!--Nav-->
      <div class="w-full container mx-auto">
        <div class="w-full flex items-center justify-between">
<!--           <a class="flex items-center text-indigo-400 no-underline hover:no-underline font-bold text-2xl lg:text-4xl" href="#">
            Rain<span class="bg-clip-text text-transparent bg-gradient-to-r from-green-400 via-pink-500 to-purple-500">blur</span>
          </a> -->
         <a class="flex items-center text-indigo-400 no-underline hover:no-underline font-bold text-2xl lg:text-4xl" href="#">
          La via del Jedi
         </a>

         <button
            class="bg-indigo-900 font-semibold text-white p-2 w-32 rounded-full hover:bg-indigo-800 focus:outline-none focus:ring shadow-lg hover:shadow-none transition-all duration-300 m-2"
            @click="utilizzo = true"
          >
            Utilizzo
          </button>
          <button
            class="bg-indigo-900 font-semibold text-white p-2 w-32 rounded-full hover:bg-indigo-800 focus:outline-none focus:ring shadow-lg hover:shadow-none transition-all duration-300 m-2"
            @click="info = true"
          >
            Info
          </button>


          <div class="flex w-1/2 justify-end content-center">
<!--             <a class="inline-block text-blue-300 no-underline hover:text-pink-500 hover:text-underline text-center h-10 p-2 md:h-auto md:p-4 transform hover:scale-125 duration-300 ease-in-out" href="https://twitter.com/intent/tweet?url=#">
              <svg class="fill-current h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                <path
                  d="M30.063 7.313c-.813 1.125-1.75 2.125-2.875 2.938v.75c0 1.563-.188 3.125-.688 4.625a15.088 15.088 0 0 1-2.063 4.438c-.875 1.438-2 2.688-3.25 3.813a15.015 15.015 0 0 1-4.625 2.563c-1.813.688-3.75 1-5.75 1-3.25 0-6.188-.875-8.875-2.625.438.063.875.125 1.375.125 2.688 0 5.063-.875 7.188-2.5-1.25 0-2.375-.375-3.375-1.125s-1.688-1.688-2.063-2.875c.438.063.813.125 1.125.125.5 0 1-.063 1.5-.25-1.313-.25-2.438-.938-3.313-1.938a5.673 5.673 0 0 1-1.313-3.688v-.063c.813.438 1.688.688 2.625.688a5.228 5.228 0 0 1-1.875-2c-.5-.875-.688-1.813-.688-2.75 0-1.063.25-2.063.75-2.938 1.438 1.75 3.188 3.188 5.25 4.25s4.313 1.688 6.688 1.813a5.579 5.579 0 0 1 1.5-5.438c1.125-1.125 2.5-1.688 4.125-1.688s3.063.625 4.188 1.813a11.48 11.48 0 0 0 3.688-1.375c-.438 1.375-1.313 2.438-2.563 3.188 1.125-.125 2.188-.438 3.313-.875z"
                ></path>
              </svg>
            </a> -->
<!--             <a
              class="inline-block text-blue-300 no-underline hover:text-pink-500 hover:text-underline text-center h-10 p-2 md:h-auto md:p-4 transform hover:scale-125 duration-300 ease-in-out"
              href="https://www.facebook.com/sharer/sharer.php?u=#"
            >
              <svg class="fill-current h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                <path d="M19 6h5V0h-5c-3.86 0-7 3.14-7 7v3H8v6h4v16h6V16h5l1-6h-6V7c0-.542.458-1 1-1z"></path>
              </svg>
            </a> -->
          </div>
        </div>
      </div>

      <!--Main-->
      <div class="container pt-24 md:pt-36 mx-auto flex flex-wrap flex-col md:flex-row items-center">
        <!--Left Col-->
        <div class="flex flex-col w-full xl:w-2/5 justify-center lg:items-start overflow-y-hidden">
          <h1 class="my-4 text-3xl md:text-5xl text-white opacity-75 font-bold leading-tight text-center md:text-left">
            May
            <span class="bg-clip-text text-transparent bg-gradient-to-r from-green-400 via-pink-500 to-purple-500">
              the Jedi Api
            </span>
            be with you!
          </h1>
          <p class="leading-normal text-base md:text-2xl mb-8 text-center md:text-left">
            Una semplice Api per ottenere la tua citazione quotidiana dal mondo di Star Wars
          </p>

          <!-- <form class="bg-gray-900 opacity-75 w-full shadow-lg rounded-lg px-8 pt-6 pb-8 mb-4">
            <div class="mb-4">
              <label class="block text-blue-300 py-2 font-bold mb-2" for="emailaddress">
                Signup for our newsletter
              </label>
              <input
                class="shadow appearance-none border rounded w-full p-3 text-gray-700 leading-tight focus:ring transform transition hover:scale-105 duration-300 ease-in-out"
                id="emailaddress"
                type="text"
                placeholder="you@somewhere.com"
              />
            </div>

            <div class="flex items-center justify-between pt-4">
              <button
                class="bg-gradient-to-r from-purple-800 to-green-500 hover:from-pink-500 hover:to-green-500 text-white font-bold py-2 px-4 rounded focus:ring transform transition hover:scale-105 duration-300 ease-in-out"
                type="button"
              >
                Sign Up
              </button>
            </div>
          </form> -->
        </div>

        <!--Right Col-->
        <div class="w-full xl:w-3/5 p-12 overflow-hidden">
          <img class="mx-auto w-full md:w-4/5 transform -rotate-6 transition hover:scale-105 duration-700 ease-in-out hover:rotate-6" src="public/images/Star_Wars_Logo.svg" />
        </div>


        <div class="mx-auto md:pt-16">
          <p class="text-blue-400 font-bold pb-8 lg:pb-6 text-center">
            Utilizzo:
          </p>

          <div class="flex w-full justify-center md:justify-start pb-24 lg:pb-0 fade-in">
            <!-- <img src="App Store.svg" class="h-12 pr-12 transform hover:scale-125 duration-300 ease-in-out" /> -->
            <!-- <img src="images/laviadellojedi.it.jpg" width="400" height="200" class="h-12 transform hover:scale-125 duration-300 ease-in-out" /> -->
            <p class="leading-normal text-base md:text-2xl mb-8 text-center md:text-center">
                Per recuperare tutte le citazioni
                <br>
                <code class="inline-block">
                    <button
                      class="bg-gradient-to-r from-purple-800 to-green-500 hover:from-pink-500 hover:to-green-500 text-white font-bold py-2 px-4 rounded focus:ring transform transition hover:scale-105 duration-300 ease-in-out"
                      type="button"
                    >
                    GET
                    </button> 
                    {{$basepath}}api/v1/quotes
                </code>
            </p>
 
          </div>

            <div class="flex w-full justify-center md:justify-start pb-24 lg:pb-0 fade-in">
                <p class="leading-normal text-base md:text-2xl mb-8 text-center md:text-center">
                    Per recuperare una citazione casuale
                    <br>
                    <code>
                    <button
                      class="bg-gradient-to-r from-purple-800 to-green-500 hover:from-pink-500 hover:to-green-500 text-white font-bold py-2 px-4 rounded focus:ring transform transition hover:scale-105 duration-300 ease-in-out"
                      type="button"
                    >
                    GET
                    </button> 
                    {{$basepath}}api/v1/quotes/random
                    </code>
                </p>
            </div>
        </div>

        <!--Footer-->
        <div class="w-full pt-16 pb-6 text-sm text-center md:text-left fade-in">
          <a class="text-gray-500 no-underline hover:no-underline" href="https://stefanosponsillo.net" target="_blank">Per il progetto: &copy; 2022</a>
          - by
          <a class="text-gray-500 no-underline hover:no-underline" href="https://stefanosponsillo.net" target="_blank">Stefano Sponsillo</a>
           <br />
          <a class="text-gray-500 no-underline hover:no-underline" href="#" target="_blank">Per il Template: &copy; App 2020</a>
          - by
          <a class="text-gray-500 no-underline hover:no-underline" href="https://www.tailwindtoolbox.com">TailwindToolbox.com</a>
        </div>
      </div>
    </div>


    <!-- inizio modal utilizzo  -->
    <div
      class="fixed inset-0 w-full h-full z-20 bg-black bg-opacity-50 duration-300 overflow-y-auto"
      x-show="utilizzo"
      x-transition:enter="transition duration-300"
      x-transition:enter-start="opacity-0"
      x-transition:enter-end="opacity-100"
      x-transition:leave="transition duration-300"
      x-transition:leave-start="opacity-100"
      x-transition:leave-end="opacity-0"
    >
      <div class="relative sm:w-3/4 md:w-1/2 lg:w-1/3 mx-2 sm:mx-auto my-10 opacity-100">
        <div
          class="relative bg-white shadow-lg rounded-md text-gray-900 z-20"
          @click.away="utilizzo = false"
          x-show="utilizzo"
          x-transition:enter="transition transform duration-300"
          x-transition:enter-start="scale-0"
          x-transition:enter-end="scale-100"
          x-transition:leave="transition transform duration-300"
          x-transition:leave-start="scale-100"
          x-transition:leave-end="scale-0"
        >
          <header class="flex items-center justify-between p-2">
            <h2 class="font-semibold">Utilizzo</h2>
            <button class="focus:outline-none p-2" @click="utilizzo = false">
              <svg class="fill-current" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
                <path
                  d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"
                ></path>
              </svg>
            </button>
          </header>
          <main class="p-2 text-center">
              <div class="mx-auto">
                <p class="text-blue-400 font-bold pb-8 lg:pb-6 text-center">
                  REQUEST:
                </p>
                <p class="leading-normal text-base md:text-1xl mb-8">
                    Per recuperare tutte le citazioni
                    <br>
                    <code class="inline-block">
                        {
                          "method" : "GET",
                          "path"   : "https://laviadeljedi.it/api/v1/quotes"
                        }
                    </code>
                </p>

                <p class="leading-normal text-base md:text-1xl mb-8">
                    Per recuperare una citazione casuale
                    <br>
                    <code>
                        {
                          "method" : "GET",
                          "path"   : "https://laviadeljedi.it/api/v1/quotes/random"
                        }
                    </code>
                </p>

              </div>
              <div class="mx-auto">
                <p class="text-blue-400 font-bold pb-8 lg:pb-6 text-center">
                  RESPONSE:
                </p>
                <p class="leading-normal text-base md:text-1xl mb-8">

                    <code class="inline-block">
                      {
                        "success": "true",
                        "message": "",
                        "data": {
                            "nome": "Obi-Wan Kenobi",
                            "film": "Una nuova speranza",
                            "anno": "0000-00-00",
                            "quote": "Questi non sono i droidi che state cercando"
                        }
                      }
                    </code>
                </p>

              </div>
          </main>
          <footer class="flex justify-center p-2">
            <button
              class="bg-red-600 font-semibold text-white p-2 w-32 rounded-full hover:bg-red-700 focus:outline-none focus:ring shadow-lg hover:shadow-none transition-all duration-300"
              @click="utilizzo = false"
            >
              Chiudi
            </button>
          </footer>
        </div>
      </div>
    </div>
    <!-- fine modal utilizzo  -->


    <!-- inizio modal info  -->
    <div
      class="fixed inset-0 w-full h-full z-20 bg-black bg-opacity-50 duration-300 overflow-y-auto"
      x-show="info"
      x-transition:enter="transition duration-300"
      x-transition:enter-start="opacity-0"
      x-transition:enter-end="opacity-100"
      x-transition:leave="transition duration-300"
      x-transition:leave-start="opacity-100"
      x-transition:leave-end="opacity-0"
    >
      <div class="relative sm:w-3/4 md:w-1/2 lg:w-1/3 mx-2 sm:mx-auto my-10 opacity-100">
        <div
          class="relative bg-white shadow-lg rounded-md text-gray-900 z-20"
          @click.away="info = false"
          x-show="info"
          x-transition:enter="transition transform duration-300"
          x-transition:enter-start="scale-0"
          x-transition:enter-end="scale-100"
          x-transition:leave="transition transform duration-300"
          x-transition:leave-start="scale-100"
          x-transition:leave-end="scale-0"
        >
          <header class="flex items-center justify-between p-2">
            <h2 class="font-semibold">Info</h2>
            <button class="focus:outline-none p-2" @click="info = false">
              <svg class="fill-current" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
                <path
                  d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"
                ></path>
              </svg>
            </button>
          </header>
          <main class="p-2 text-center">
              <div class="mx-auto">
                <p class="text-blue-400 font-bold pb-8 lg:pb-6 text-center">
                  Utilizzo del marchio:
                </p>
                <p class="leading-normal text-base md:text-1xl mb-8">
                Tutti i marchi utilizzati in questo progetto appartengono ai rispettivi proprietari
                </p>
                <p class="leading-normal text-base md:text-1xl mb-8">
                Questo progetto è GRATUITO e liberamente accessibile.
                </p>

              </div>
              <div class="mx-auto">
                <p class="text-blue-400 font-bold pb-8 lg:pb-6 text-center">
                  Sul progetto:
                </p>
                <p class="leading-normal text-base md:text-1xl mb-8">
                  Lo scopo del progetto è quello di mettere a disposizione di tutti le migliori citazioni dell'universo di
                      Star Wars, in maniera gratuita.
                </p>
                <p class="leading-normal text-base md:text-1xl mb-8">
                  Questi film hanno da dire molto sulla natura dell'uomo e su ciò che è in grado di fare.<br>
                  Ed insegnano le conseguenze di ogni azione intrapresa.
                </p>
                <h3>Sta ad ognuno di noi fare la scelta giusta.</h3>
                <hr>
                <p class="leading-normal text-base md:text-1xl mb-8">
                  Il sito web non utilizza nessun cookie, ne statistico ne di sistema.<br>
                  Non salva dati personali e non analizza il comportamento degli utenti.
                </p>
              </div>
          </main>
          <footer class="flex justify-center p-2">
            <button
              class="bg-red-600 font-semibold text-white p-2 w-32 rounded-full hover:bg-red-700 focus:outline-none focus:ring shadow-lg hover:shadow-none transition-all duration-300"
              @click="info = false"
            >
              Chiudi
            </button>
          </footer>
        </div>
      </div>
    </div>
    <!-- fine modal info  -->





  </body>
</html>
