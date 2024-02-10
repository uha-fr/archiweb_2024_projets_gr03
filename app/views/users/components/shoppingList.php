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

      input[type=checkbox]:checked+label span:first-of-type {
         background-color: var(--primary-dark);
         border-color: var(--primary);
         color: #fff;
      }

      input[type=checkbox]:checked+label span:nth-of-type(2) {
         text-decoration: line-through;
         color: #9CA3AF;
      }
      </style>
</head>

<div class="flex items-center justify-center w-screen h-screen font-medium">
	<div class="flex flex-grow items-center justify-center h-full text-gray-600">
		<div class="max-w-full p-8 bg-white rounded-lg shadow-lg w-96">
			<div class="flex items-center mb-6">
                <svg class="h-8 w-8 text-indigo-500 stroke-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                    <path d="M253.3 35.1c6.1-11.8 1.5-26.3-10.2-32.4s-26.3-1.5-32.4 10.2L117.6 192H32c-17.7 0-32 14.3-32 32s14.3 32 32 32L83.9 463.5C91 492 116.6 512 146 512H430c29.4 0 55-20 62.1-48.5L544 256c17.7 0 32-14.3 32-32s-14.3-32-32-32H458.4L365.3 12.9C359.2 1.2 344.7-3.4 332.9 2.7s-16.3 20.6-10.2 32.4L404.3 192H171.7L253.3 35.1zM192 304v96c0 8.8-7.2 16-16 16s-16-7.2-16-16V304c0-8.8 7.2-16 16-16s16 7.2 16 16zm96-16c8.8 0 16 7.2 16 16v96c0 8.8-7.2 16-16 16s-16-7.2-16-16V304c0-8.8 7.2-16 16-16zm128 16v96c0 8.8-7.2 16-16 16s-16-7.2-16-16V304c0-8.8 7.2-16 16-16s16 7.2 16 16z"/></svg>
				<h4 class="font-semibold ml-3 text-lg">Liste de courses</h4>
			</div>
            <div>
				<input class="hidden" type="checkbox" id="task_1">
				<label class="flex items-center h-10 px-2 rounded cursor-pointer hover:bg-gray-100" for="task_1">
					<span class="flex items-center justify-center w-5 h-5 text-transparent border-2 border-gray-300 rounded-full">
						<svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
							<path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
						</svg>
					</span>
					<span class="ml-4 text-sm">3 oignons</span>
				</label>	
			</div>
			<div>
				<input class="hidden" type="checkbox" id="task_2">
				<label class="flex items-center h-10 px-2 rounded cursor-pointer hover:bg-gray-100" for="task_2">
					<span class="flex items-center justify-center w-5 h-5 text-transparent border-2 border-gray-300 rounded-full">
						<svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
							<path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
						</svg>
					</span>
					<span class="ml-4 text-sm">3 oignons</span>
				</label>	
			</div>
			<button class="flex items-center w-full h-8 px-2 mt-2 text-sm font-medium rounded">
				<svg class="w-5 h-5 text-gray-400 fill-current" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
					<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
				</svg>
				<input class="flex-grow h-8 ml-4 bg-transparent focus:outline-none font-medium" type="text" placeholder="add a new task">
			</button>
		</div>
	</div>
</div>