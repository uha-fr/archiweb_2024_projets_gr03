

<?php
$userDetails = $data['userDetails'];
?>

<nav class="bg-[#4D3C38] py-6 px-4 group/sidebar flex flex-col shrink-0 lg:w-[300px] w-[250px] transition-all duration-300 ease-in-out lg:translate-x-0 m-0 fixed z-40 inset-y-0 left-0 lg:bg-light/30 bg-light border-r border-r-dashed border-r-neutral-200 sidenav fixed-start loopple-fixed-start -translate-x-full      
 ">



<div class="flex flex-wrap items-center cursor-pointer">
        <img src='<?php echo IMG_LOAD . '/profile/' . $userDetails["image"]?>' class="w-10 h-10 rounded-full object-cover	  border-2 border-white" />
        <div class="ml-4">
          <p class="text-sm text-white"><?php echo (strtoupper($userDetails['lastname']) ." ". ucfirst($userDetails['firstname'])) ?></p>
          <p class="text-xs text-gray-300 mt-1"><?php echo $userDetails['email'] ?></p>
        </div>
      </div>
      <ul class="space-y-3 mt-10">
      <li>
          <a href="<?php echo BASE_URL."dashboard" ?>" class="text-white text-sm flex items-center hover:bg-[#755f5a] rounded px-4 py-2 transition-all">
            <i class="fa-light fa-house mr-4 text-base"></i>
            <span>Home</span>
          </a>
        </li>
          <a href="<?php echo BASE_URL."dashboard/recipes" ?>" class="text-white text-sm flex items-center hover:bg-[#755f5a] rounded px-4 py-2 transition-all">
            <i class="fa-light fa-pot-food  mr-4 text-base"></i>
            <span>Recipes</span>
          </a>
        </li>
        
        <li>
          <a href="<?php echo BASE_URL."dashboard/nutritionnists" ?>" class="text-white text-sm flex items-center hover:bg-[#755f5a] rounded px-4 py-2 transition-all">
            <i class="fa-light fa-user-chef  mr-4 text-base"></i>
            <span>Nutritionists</span>
          </a>
        </li>
        
        
        <li>
          <a href="<?php echo BASE_URL."dashboard/tracker" ?>" class="text-white text-sm flex items-center hover:bg-[#755f5a] rounded px-4 py-2 transition-all">
            <i class="fa-light fa-star mr-4 text-base"></i>
            <span>Nutrional tracker</span>
          </a>
        </li>
        <li>
          <a href="<?php echo BASE_URL."dashboard/mealPlan" ?>" class="text-white text-sm flex items-center hover:bg-[#755f5a] rounded px-4 py-2 transition-all">
            <i class="fa-light fa-calendar mr-4 text-base"></i>
            <span>Meal plan</span>
          </a>
        </li>
        
        
        <li>
          <a href="<?php echo BASE_URL."dashboard/updateprofile" ?>" class="text-white text-sm flex items-center hover:bg-[#755f5a] rounded px-4 py-3 transition-all">
            <i class="fa-light fa-user mr-4 text-base"></i>

            <span>Profile</span>
          </a>
        </li>
      </ul>

      <a href="<?php echo BASE_URL."dashboard/logout" ?>" class="text-white text-sm flex items-center hover:bg-[#755f5a] rounded px-4 py-3 transition-all my-20">

        <i class="fa-light fa-right-from-bracket mr-3 text-lg"></i>
            <span>Log out</span>
      </a>
    </nav>

    <div class="absolute right-5 top-4 z-10 lg:hidden flex items-center sm:ml-2 ml-auto">
       <a href="javascript:void(0)" class="flex items-center justify-center w-12 h-12 text-base font-medium leading-normal text-center align-middle transition-colors duration-150 ease-in-out bg-transparent border border-solid shadow-none cursor-pointer rounded-2xl text-stone-500 border-stone-200 hover:text-primary active:text-primary focus:text-primary"
        onclick="(function(){document.querySelector('.group\\/sidebar').classList.toggle('-translate-x-full');})();"> 
        <i class="fa-regular fa-bars"></i>
     </a> </div>
