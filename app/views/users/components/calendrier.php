<!DOCTYPE html>
<html lang="fr">

<head>
   <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />

   <style>
      @import url("https://fonts.googleapis.com/css2?family=Noto+Serif:wght@700&family=Roboto:wght@400;700&display=swap");

      :root {
         --background: #fbfcfb;
         --primary: #93be76;
         --primary-dark: #6e9b59;
         --secondary: #4d3c38;
         --accent: #f89a48;
         --text-primary: #050315;
         --text-secondary: #fbfcfb;
      }
      </style>
</head>

<div class="flex items-center justify-center w-screen h-screen font-medium">
	<div class="flex flex-grow items-center justify-center h-full">
		<div class="max-w-full p-8 bg-white rounded-lg shadow-lg w-96">
                  <div class="md:p-8 p-5 dark:bg-gray-800 bg-white rounded-t">
                     <div class="px-4 flex items-center justify-between">
                        <span tabindex="0"
                           class="focus:outline-none text-base font-bold dark:text-gray-100 text-gray-800">October
                           2020</span>
                        <div class="flex items-center">
                           <button aria-label="calendar backward"
                              class="focus:text-gray-400 hover:text-gray-400 text-gray-800 dark:text-gray-100">
                              <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-chevron-left"
                                 width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                 fill="none" stroke-linecap="round" stroke-linejoin="round">
                                 <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                 <polyline points="15 6 9 12 15 18" />
                              </svg>
                           </button>
                           <button aria-label="calendar forward"
                              class="focus:text-gray-400 hover:text-gray-400 ml-3 text-gray-800 dark:text-gray-100">
                              <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-chevron-right"
                                 width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                 fill="none" stroke-linecap="round" stroke-linejoin="round">
                                 <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                 <polyline points="9 6 15 12 9 18" />
                              </svg>
                           </button>
                        </div>
                     </div>
                     <div class="flex items-center justify-between pt-12 overflow-x-auto">
                        <table class="w-full">
                           <thead>
                              <tr>
                                 <th>
                                    <div class="w-full flex justify-center">
                                       <p class="text-base font-medium text-center text-gray-800 dark:text-gray-100">
                                          Lu
                                       </p>
                                    </div>
                                 </th>
                                 <th>
                                    <div class="w-full flex justify-center">
                                       <p class="text-base font-medium text-center text-gray-800 dark:text-gray-100">
                                          Ma
                                       </p>
                                    </div>
                                 </th>
                                 <th>
                                    <div class="w-full flex justify-center">
                                       <p class="text-base font-medium text-center text-gray-800 dark:text-gray-100">
                                          Me
                                       </p>
                                    </div>
                                 </th>
                                 <th>
                                    <div class="w-full flex justify-center">
                                       <p class="text-base font-medium text-center text-gray-800 dark:text-gray-100">
                                          Je
                                       </p>
                                    </div>
                                 </th>
                                 <th>
                                    <div class="w-full flex justify-center">
                                       <p class="text-base font-medium text-center text-gray-800 dark:text-gray-100">
                                          Ve
                                       </p>
                                    </div>
                                 </th>
                                 <th>
                                    <div class="w-full flex justify-center">
                                       <p class="text-base font-medium text-center text-gray-800 dark:text-gray-100">
                                          Sa
                                       </p>
                                    </div>
                                 </th>
                                 <th>
                                    <div class="w-full flex justify-center">
                                       <p class="text-base font-medium text-center text-gray-800 dark:text-gray-100">
                                          Di
                                       </p>
                                    </div>
                                 </th>
                              </tr>
                           </thead>
                           <tbody>
                              <tr>
                                 <td class="pt-6">
                                    <div class="px-2 py-2 cursor-pointer flex w-full justify-center"></div>
                                 </td>
                                 <td class="pt-6">
                                    <div class="px-2 py-2 cursor-pointer flex w-full justify-center"></div>
                                 </td>
                                 <td>
                                    <div class="px-2 py-2 cursor-pointer flex w-full justify-center"></div>
                                 </td>
                                 <td class="pt-6">
                                    <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                       <p class="text-base text-gray-500 dark:text-gray-100 font-medium">
                                          1
                                       </p>
                                    </div>
                                 </td>
                                 <td class="pt-6">
                                    <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                       <p class="text-base text-gray-500 dark:text-gray-100 font-medium">
                                          2
                                       </p>
                                    </div>
                                 </td>
                                 <td class="pt-6">
                                    <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                       <p class="text-base text-gray-500 dark:text-gray-100">
                                          3
                                       </p>
                                    </div>
                                 </td>
                                 <td class="pt-6">
                                    <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                       <p class="text-base text-gray-500 dark:text-gray-100">
                                          4
                                       </p>
                                    </div>
                                 </td>
                              </tr>
                              <tr>
                                 <td>
                                    <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                       <p class="text-base text-gray-500 dark:text-gray-100 font-medium">
                                          5
                                       </p>
                                    </div>
                                 </td>
                                 <td>
                                    <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                       <p class="text-base text-gray-500 dark:text-gray-100 font-medium">
                                          6
                                       </p>
                                    </div>
                                 </td>
                                 <td>
                                    <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                       <p class="text-base text-gray-500 dark:text-gray-100 font-medium">
                                          7
                                       </p>
                                    </div>
                                 </td>
                                 <td>
                                    <div class="w-full h-full">
                                       <div class="flex items-center justify-center w-full rounded-full cursor-pointer">
                                          <a role="link" tabindex="0"
                                             class="focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 focus:bg-indigo-500 hover:bg-indigo-500 text-base w-8 h-8 flex items-center justify-center font-medium text-white bg-indigo-700 rounded-full">8</a>
                                       </div>
                                    </div>
                                 </td>
                                 <td>
                                    <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                       <p class="text-base text-gray-500 dark:text-gray-100 font-medium">
                                          9
                                       </p>
                                    </div>
                                 </td>
                                 <td>
                                    <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                       <p class="text-base text-gray-500 dark:text-gray-100">
                                          10
                                       </p>
                                    </div>
                                 </td>
                                 <td>
                                    <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                       <p class="text-base text-gray-500 dark:text-gray-100">
                                          11
                                       </p>
                                    </div>
                                 </td>
                              </tr>
                              <tr>
                                 <td>
                                    <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                       <p class="text-base text-gray-500 dark:text-gray-100 font-medium">
                                          12
                                       </p>
                                    </div>
                                 </td>
                                 <td>
                                    <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                       <p class="text-base text-gray-500 dark:text-gray-100 font-medium">
                                          13
                                       </p>
                                    </div>
                                 </td>
                                 <td>
                                    <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                       <p class="text-base text-gray-500 dark:text-gray-100 font-medium">
                                          14
                                       </p>
                                    </div>
                                 </td>
                                 <td>
                                    <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                       <p class="text-base text-gray-500 dark:text-gray-100 font-medium">
                                          15
                                       </p>
                                    </div>
                                 </td>
                                 <td>
                                    <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                       <p class="text-base text-gray-500 dark:text-gray-100 font-medium">
                                          16
                                       </p>
                                    </div>
                                 </td>
                                 <td>
                                    <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                       <p class="text-base text-gray-500 dark:text-gray-100">
                                          17
                                       </p>
                                    </div>
                                 </td>
                                 <td>
                                    <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                       <p class="text-base text-gray-500 dark:text-gray-100">
                                          18
                                       </p>
                                    </div>
                                 </td>
                              </tr>
                              <tr>
                                 <td>
                                    <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                       <p class="text-base text-gray-500 dark:text-gray-100 font-medium">
                                          19
                                       </p>
                                    </div>
                                 </td>
                                 <td>
                                    <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                       <p class="text-base text-gray-500 dark:text-gray-100 font-medium">
                                          20
                                       </p>
                                    </div>
                                 </td>
                                 <td>
                                    <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                       <p class="text-base text-gray-500 dark:text-gray-100 font-medium">
                                          21
                                       </p>
                                    </div>
                                 </td>
                                 <td>
                                    <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                       <p class="text-base text-gray-500 dark:text-gray-100 font-medium">
                                          22
                                       </p>
                                    </div>
                                 </td>
                                 <td>
                                    <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                       <p class="text-base text-gray-500 dark:text-gray-100 font-medium">
                                          23
                                       </p>
                                    </div>
                                 </td>
                                 <td>
                                    <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                       <p class="text-base text-gray-500 dark:text-gray-100">
                                          24
                                       </p>
                                    </div>
                                 </td>
                                 <td>
                                    <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                       <p class="text-base text-gray-500 dark:text-gray-100">
                                          25
                                       </p>
                                    </div>
                                 </td>
                              </tr>
                              <tr>
                                 <td>
                                    <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                       <p class="text-base text-gray-500 dark:text-gray-100 font-medium">
                                          26
                                       </p>
                                    </div>
                                 </td>
                                 <td>
                                    <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                       <p class="text-base text-gray-500 dark:text-gray-100 font-medium">
                                          27
                                       </p>
                                    </div>
                                 </td>
                                 <td>
                                    <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                       <p class="text-base text-gray-500 dark:text-gray-100 font-medium">
                                          28
                                       </p>
                                    </div>
                                 </td>
                                 <td>
                                    <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                       <p class="text-base text-gray-500 dark:text-gray-100 font-medium">
                                          29
                                       </p>
                                    </div>
                                 </td>
                                 <td>
                                    <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                       <p class="text-base text-gray-500 dark:text-gray-100 font-medium">
                                          30
                                       </p>
                                    </div>
                                 </td>
                              </tr>
                           </tbody>
                        </table>
                     </div>
                  </div>
                  <div class="md:py-8 py-5 md:px-16 px-5 dark:bg-gray-700 bg-gray-50 rounded-b">
                     <div class="px-4">
                        <div class="border-b pb-4 border-gray-400 border-dashed">
                           <p class="text-xs font-light leading-3 text-gray-500 dark:text-gray-300">
                              9:00 AM
                           </p>
                           <a tabindex="0"
                              class="focus:outline-none text-lg font-medium leading-5 text-gray-800 dark:text-gray-100 mt-2">Breakfast</a>
                           <p class="text-sm pt-2 leading-4 leading-none text-gray-600 dark:text-gray-300">
                              repas
                           </p>
                        </div>
                        <div class="border-b pb-4 border-gray-400 border-dashed pt-5">
                           <p class="text-xs font-light leading-3 text-gray-500 dark:text-gray-300">
                              12:00 PM
                           </p>
                           <a tabindex="0"
                              class="focus:outline-none text-lg font-medium leading-5 text-gray-800 dark:text-gray-100 mt-2">Lunch</a>
                              <p class="text-sm pt-2 leading-4 leading-none text-gray-600 dark:text-gray-300">
                                 repas                           </p>
                        </div>
                        <div class="border-b pb-4 border-gray-400 border-dashed pt-5">
                           <p class="text-xs font-light leading-3 text-gray-500 dark:text-gray-300">
                              8:00 PM
                           </p>
                           <a tabindex="0"
                              class="focus:outline-none text-lg font-medium leading-5 text-gray-800 dark:text-gray-100 mt-2">Dinner</a>
                           <p class="text-sm pt-2 leading-4 leading-none text-gray-600 dark:text-gray-300">
                              repas                           </p>
                        </div>
                     </div>
                  </div>
               </div>
      </div>
   </div>
</div>