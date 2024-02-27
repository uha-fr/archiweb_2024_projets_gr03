<body class="relative">
    <?php
include "components/sidebar.php";
?>

    <div class="lg:ml-[300px] relative h-full max-h-screen rounded-xl transition-all duration-200 pb-10">


        <!-- --------------------Header-------------------- -->
        <div class="
            bg-[linear-gradient(to_bottom,rgba(0,0,0,0.8),rgba(0,0,0,0.9)),url('https://images.pexels.com/photos/1109197/pexels-photo-1109197.jpeg')]
            bg-cover
            bg-no-repeat
            bg-center
            p-10
            pb-20
            md:p-20

            relative">
            <div class="recipe-header-info flex flex-col md:flex-row items-center space-y-4 md:space-x-4">
                <div class="recipe-header-img w-[300px] md:w-[500px] h-[200px] object-cover shadow-[0_0px_30px_-10px_rgba(255,255,255,0.3)] ">
                    <img src="https://images.pexels.com/photos/1109197/pexels-photo-1109197.jpeg" alt="" class="w-full h-full object-cover rounded-xl">
                </div>
                <div class="recipe-header-details">
                    <div class="recipe-title text-white text-3xl mb-3">Mathi Mulakitathu</div>
                    <div class="recipe-desc text-slate-300">Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore quasi optio, dolore necessitatibus quod deleniti debitis nam voluptate delectus repellat!</div>

                </div>
            </div>
            <div class="recipe-header-time bg-white px-5 py-3 w-[80%]  md:w-1/2 absolute bottom-[-5%] md:bottom-[-10%] left-1/2 -translate-x-1/2 rounded-xl shadow-2xl grid grid-cols-3 divide-x-2 	">
                <div class="time flex items-center space-x-3 px-2 md:px-3">
                    <i class="fa-regular fa-knife-kitchen text-2xl md:text-3xl text-gray-700"></i>
                    <div class="leading-tight">
                        <p class="text-[10px] md:text-xs text-gray-400">Prep Time</p>
                        <p class="text-md md:text-xl">10 mins</p>
                    </div>
                </div>
                <div class="time flex items-center space-x-3 px-2 md:px-3">
                    <i class="fa-regular fa-oven text-2xl md:text-3xl text-gray-700"></i>
                    <div class="leading-tight">
                        <p class="text-[10px] md:text-xs text-gray-400">Prep Time</p>
                        <p class="text-md md:text-xl">10 mins</p>
                    </div>
                </div>
                <div class="time flex  items-center space-x-3 px-2 md:px-3">
                    <i class="fa-regular fa-clock text-2xl md:text-3xl text-gray-700"></i>
                    <div class="leading-tight">
                        <p class="text-[10px] md:text-xs text-gray-400">Prep Time</p>
                        <p class="text-md md:text-xl">10 mins</p>
                    </div>
                </div>


            </div>
        </div>
        <!-- --------------------Header-------------------- -->


        <!-- --------------------Recipe Content-------------------- -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-10 m-20 pb-10">

            <div class="ingredients order-2 md:order-1">
                <p class="text-3xl font-bold mb-5 text-[#121D31]">Ingredients</p>

                <div class=" flex flex-col space-y-4">
                    <a href="#" class="flex items-center space-x-3 w-full">
                        <div class="w-12 h-12 rounded border-[1px] border-gray-300 p-1">
                            <img class="w-full h-full object-cover" src="https://www.provisioneronline.com/ext/resources/images/Responsive-Default-Images/meat-science-review.jpg?1607975249" alt="">
                        </div>
                        <div class="flex items-center justify-between w-full">
                            <p class="text-xl ">Meat</p>
                            <p class="text-lg" >150 g</p>
                        </div>
                    </a>
                    <a href="#" class="flex items-center space-x-3 w-full">
                        <div class="w-12 h-12 rounded border-[1px] border-gray-300 p-1">
                            <img class="w-full h-full object-cover" src="https://produits.bienmanger.com/36700-0w470h470_Organic_Red_Onion_From_Italy.jpg" alt="">
                        </div>
                        <div class="flex items-center justify-between w-full">
                            <p class="text-xl ">Onion</p>
                            <p class="text-lg" >2 pcs</p>
                        </div>
                    </a>
                    
                </div>

            </div>
            <div class="nutrition order-1 md:order-2">
                <p class="text-3xl font-bold mb-5 text-[#121D31]">Nutrition</p>

                <div class="grid grid-cols-2 md:grid-cols-4 gap-2">

                    <div class="bg-gray-100 rounded-xl flex flex-col items-center justify-center p-5">
                        <p class="text-lg font-bold text-gray-700">1624 Kcal</p>
                        <p class="relative before:content-[''] before:block before:h-2 before:w-2 before:bg-[#0D0C22] before:rounded-full before:absolute before:left-[-0.75rem] before:top-1/2 before:-translate-y-1/2 ">Calories</p>
                    </div>
                    <div class="bg-gray-100 rounded-xl flex flex-col items-center justify-center p-5">
                        <p class="text-lg font-bold text-gray-700">51 g</p>
                        <p class="relative before:content-[''] before:block before:h-2 before:w-2 before:bg-[#F3A99C] before:rounded-full before:absolute before:left-[-0.75rem] before:top-1/2 before:-translate-y-1/2 ">Carbs</p>
                    </div>
                    <div class="bg-gray-100 rounded-xl flex flex-col items-center justify-center p-5">
                        <p class="text-lg font-bold text-gray-700">11.4 g</p>
                        <p class="relative before:content-[''] before:block before:h-2 before:w-2 before:bg-[#4F5E35] before:rounded-full before:absolute before:left-[-0.75rem] before:top-1/2 before:-translate-y-1/2 ">Fat</p>
                    </div>
                    <div class="bg-gray-100 rounded-xl flex flex-col items-center justify-center p-5">
                        <p class="text-lg font-bold text-gray-700">42.9 g</p>
                        <p class="relative before:content-[''] before:block before:h-2 before:w-2 before:bg-[#FBC85F] before:rounded-full before:absolute before:left-[-0.75rem] before:top-1/2 before:-translate-y-1/2 ">Protein</p>
                    </div>

                </div>
            </div>
            <div class="steps order-3">
                <p class="text-3xl font-bold mb-5 text-[#121D31]">Etapes</p>

                <div class="space-y-6 border-l-2 border-dashed ml-8">
                    <div class="relative w-full">
                        <p class="absolute -top-0.5 z-10 -ml-3.5 h-7 w-7 rounded-full text-white reounded-full bg-[#D9C7BA] text-center">1</p>
                        <div class="ml-6">
                            <h4 class="font-bold text-[#D9C7BA]">Ajouter quelque chose</h4>
                            <p class="mt-2 max-w-screen-sm text-sm text-gray-500">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatem hic eos quod incidunt sed rerum sunt a nostrum magni esse!</p>
                        </div>
                    </div>
                    
                </div>
                <div class="space-y-6 border-l-2 border-dashed ml-8 mt-2">
                    <div class="relative w-full">
                        <p class="absolute -top-0.5 z-10 -ml-3.5 h-7 w-7 rounded-full text-white reounded-full bg-[#D9C7BA] text-center">2</p>
                        <div class="ml-6">
                            <h4 class="font-bold text-[#D9C7BA]">Ajouter quelque chose</h4>
                            <p class="mt-2 max-w-screen-sm text-sm text-gray-500">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatem hic eos quod incidunt sed rerum sunt a nostrum magni esse!</p>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>

    </div>
