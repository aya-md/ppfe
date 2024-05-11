<?php include 'include/header.php' ?>
<div class="content">
<div class="intro-y flex flex-col sm:flex-row items-center mt-9">
    <h2 class="text-lg font-medium mr-auto">
     <strong> Ajouter Un projet </strong>
        
    </h2>
    <div class="w-full sm:w-auto flex mt-4 sm:mt-0">
       
        
      
    </div>
</div>
 <!-- BEGIN: Post Content -->
                    <div class="intro-y col-span-7 lg:col-span-6">
                        <input type="text" class="intro-y input input--lg w-35 box pr-10 placeholder-theme-13" placeholder="Title" >
                        <div class="relative w-56 h-11" style="margin-left:28%;margin-top:-2.5rem;">
                            <div class="absolute rounded-l w-35 h-full flex items-center justify-center bg-gray-100 border text-gray-600"> 
                               <i data-feather="calendar" class="w-4 h-4"></i> 
                           </div> 
                           <input type="text" class="datepicker input pl-12 border"> 
                       </div> 
                       
                        <div class="post intro-y overflow-hidden box mt-5">
                            <div class="post__tabs nav-tabs flex flex-col sm:flex-row bg-gray-200 text-gray-600">
                                <a title="Fill in the article content" data-toggle="tab" data-target="#content" href="javascript:;" class="tooltip w-full sm:w-40 py-4 text-center flex justify-center items-center active"> <i data-feather="file-text" class="w-4 h-4 mr-2"></i> Content </a>
                                
                            </div>
                            <div class="post__content tab-content">
                                <div class="tab-content__pane p-5 active" id="content">
                                    <div class="border border-gray-200 rounded-md p-5">
                                        <div class="font-medium flex items-center border-b border-gray-200 pb-5"> <i data-feather="chevron-down" class="w-4 h-4 mr-2"></i> Text Content </div>
                                        <div class="mt-5">
                                            <textarea data-feature="all" class="summernote" data-height="250" name="editor"></textarea>
                                        </div>
                                    </div>
                                    <div class="border border-gray-200 rounded-md p-5 mt-5">
                                        <div class="font-medium flex items-center border-b border-gray-200 pb-5"> <i data-feather="chevron-down" class="w-4 h-4 mr-2"></i> Images </div>
                                        <div class="mt-5">
                                           
                                            <div class="mt-3">
                                                <label>Upload Image</label>
                                                <div class="border-2 border-dashed rounded-md mt-3 pt-4">
                                                    <div class="flex flex-wrap px-4">
                                                        <div class="w-24 h-24 relative image-fit mb-5 mr-5 cursor-pointer zoom-in">
                                                            <img class="rounded-md" alt="Midone Tailwind HTML Admin Template" src="dist/images/preview-6.jpg">
                                                            <div title="Remove this image?" class="tooltip w-5 h-5 flex items-center justify-center absolute rounded-full text-white bg-theme-6 right-0 top-0 -mr-2 -mt-2"> <i data-feather="x" class="w-4 h-4"></i> </div>
                                                        </div>
                                                        <div class="w-24 h-24 relative image-fit mb-5 mr-5 cursor-pointer zoom-in">
                                                            <img class="rounded-md" alt="Midone Tailwind HTML Admin Template" src="dist/images/preview-12.jpg">
                                                            <div title="Remove this image?" class="tooltip w-5 h-5 flex items-center justify-center absolute rounded-full text-white bg-theme-6 right-0 top-0 -mr-2 -mt-2"> <i data-feather="x" class="w-4 h-4"></i> </div>
                                                        </div>
                                                        <div class="w-24 h-24 relative image-fit mb-5 mr-5 cursor-pointer zoom-in">
                                                            <img class="rounded-md" alt="Midone Tailwind HTML Admin Template" src="dist/images/preview-9.jpg">
                                                            <div title="Remove this image?" class="tooltip w-5 h-5 flex items-center justify-center absolute rounded-full text-white bg-theme-6 right-0 top-0 -mr-2 -mt-2"> <i data-feather="x" class="w-4 h-4"></i> </div>
                                                        </div>
                                                        <div class="w-24 h-24 relative image-fit mb-5 mr-5 cursor-pointer zoom-in">
                                                            <img class="rounded-md" alt="Midone Tailwind HTML Admin Template" src="dist/images/preview-13.jpg">
                                                            <div title="Remove this image?" class="tooltip w-5 h-5 flex items-center justify-center absolute rounded-full text-white bg-theme-6 right-0 top-0 -mr-2 -mt-2"> <i data-feather="x" class="w-4 h-4"></i> </div>
                                                        </div>
                                                    </div>
                                                    <div class="px-4 pb-4 flex items-center cursor-pointer relative">
                                                        <i data-feather="image" class="w-4 h-4 mr-2"></i> <span class="text-theme-1 mr-1">Upload a file</span> or drag and drop 
                                                        <input type="file" class="w-full h-full top-0 left-0 absolute opacity-0">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                   
                </div>
       
                
            <!-- END: Content -->
     
        <div class="ajouter">
        <input class="button w-35 mr-1 mt-2 bg-orange-300 text-white" type="button" onclick="location.href='projects.php';" value="Ajouter Un projet"/>
        
        </div>

        <?php include 'include/footer.php' ?>