<?php include 'include/header.php' ?>

<h2 class="intro-y text-lg font-medium mt-10">
            <i class='bx bx-donate-heart'></i> Activités
        </h2>
        <div class="grid grid-cols-12 gap-6 mt-5 ">
            <div class="w-56 relative text-gray-700">
                <input type="text" class="input w-56 box pr-10 placeholder-theme-13 search" placeholder="Search...">
                <i class="w-4 h-4 absolute my-auto inset-y-0 mr-3 right-0 icnsearch" data-feather="search"></i> 
            </div>
        </div>
                     <!-- BEGIN: Data List -->
                     <div class="intro-y col-span-12 overflow-auto lg:overflow-visible">
                        <table class="table table-report -mt-2">
                            <thead>
                                <tr>
                                    <th class="whitespace-no-wrap">ID Activities</th>
                                    <th class="whitespace-no-wrap">Titre</th>
                                    <th class="text-center whitespace-no-wrap">Categorie</th>
                                    <th class="text-center whitespace-no-wrap">Date</th>
                                   
                                    <th class="text-center whitespace-no-wrap">ACTIONS</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="intro-x">
                                    <td >1</td>
                                        
                                    </td>
                                    
                                    <td >titre1</td>
                                    
                                    <td class="text-center">####</td>
                                    <td class="text-center"> <input class="datepicker input w-56 border block mx-auto"> </td>
                                    
                                    <td class="table-report__action w-56">
                                        <div class="flex justify-center items-center">
                                            
                                            <a class="flex items-center mr-3" href="javascript:;"> <i data-feather="check-square" class="w-4 h-4 mr-1"></i> Edit </a>
                                            <a class="flex items-center text-theme-6" href="javascript:;" data-toggle="modal" data-target="#delete-confirmation-modal"> <i data-feather="trash-2" class="w-4 h-4 mr-1"></i> Delete </a>
                                        </div>
                                    </td>
                              </tr>

                              <tr class="intro-x">
                                <td >2</td>
                                    
                                </td>
                                
                                <td >Titre2</td>
                                
                                <td class="text-center">####</td>
                                <td class="text-center"> <input class="datepicker input w-56 border block mx-auto"> </td>
                                
                                <td class="table-report__action w-56">
                                    <div class="flex justify-center items-center">
                                        
                                        <a class="flex items-center mr-3" href="javascript:;"> <i data-feather="check-square" class="w-4 h-4 mr-1"></i> Edit </a>
                                        <a class="flex items-center text-theme-6" href="javascript:;" data-toggle="modal" data-target="#delete-confirmation-modal"> <i data-feather="trash-2" class="w-4 h-4 mr-1"></i> Delete </a>
                                    </div>
                                </td>
                          </tr>
                          <tr class="intro-x">
                            <td >3</td>
                                
                            </td>
                            
                            <td >titre3</td>
                            
                            <td class="text-center">####</td>
                            <td class="text-center"> <input class="datepicker input w-56 border block mx-auto"> </td>
                            
                            <td class="table-report__action w-56">
                                <div class="flex justify-center items-center">
                                    
                                    <a class="flex items-center mr-3" href="javascript:;"> <i data-feather="check-square" class="w-4 h-4 mr-1"></i> Edit </a>
                                    <a class="flex items-center text-theme-6" href="javascript:;" data-toggle="modal" data-target="#delete-confirmation-modal"> <i data-feather="trash-2" class="w-4 h-4 mr-1"></i> Delete </a>
                                </div>
                            </td>
                      </tr>
                      <tr class="intro-x">
                        <td >4</td>
                            
                        </td>
                        
                        <td >titre4</td>
                        
                        <td class="text-center">####</td>
                        <td class="text-center"> <input class="datepicker input w-56 border block mx-auto"> </td>
                        
                        <td class="table-report__action w-56">
                            <div class="flex justify-center items-center">
                                
                                <a class="flex items-center mr-3" href="javascript:;"> <i data-feather="check-square" class="w-4 h-4 mr-1"></i> Edit </a>
                                <a class="flex items-center text-theme-6" href="javascript:;" data-toggle="modal" data-target="#delete-confirmation-modal"> <i data-feather="trash-2" class="w-4 h-4 mr-1"></i> Delete </a>
                            </div>
                        </td>
                  </tr>
                                
                                
                               
                                
                            </tbody>
                        </table>
                    </div>
                    <!-- END: Data List -->
        <!-- BEGIN: Pagination -->
        <div class="intro-y col-span-12 flex flex-wrap sm:flex-row sm:flex-no-wrap items-center">
            <ul class="pagination">
                <li>
                    <a class="pagination__link" href=""> <i class="w-4 h-4" data-feather="chevrons-left"></i> </a>
                </li>
                <li>
                    <a class="pagination__link" href=""> <i class="w-4 h-4" data-feather="chevron-left"></i> </a>
                </li>
                <li> <a class="pagination__link" href="">...</a> </li>
                <li> <a class="pagination__link" href="">1</a> </li>
                <li> <a class="pagination__link pagination__link--active" href="">2</a> </li>
                <li> <a class="pagination__link" href="">3</a> </li>
                <li> <a class="pagination__link" href="">...</a> </li>
                <li>
                    <a class="pagination__link" href=""> <i class="w-4 h-4" data-feather="chevron-right"></i> </a>
                </li>
                <li>
                    <a class="pagination__link" href=""> <i class="w-4 h-4" data-feather="chevrons-right"></i> </a>
                </li>
            </ul>
            <select class="w-20 input box mt-3 sm:mt-0">
                <option>10</option>
                <option>25</option>
                <option>35</option>
                <option>50</option>
            </select>
        </div>
        <!-- END: Pagination -->
         <!-- BEGIN: Delete Confirmation Modal -->
         <div class="modal" id="delete-confirmation-modal">
            <div class="modal__content">
                <div class="p-5 text-center">
                    <i data-feather="x-circle" class="w-16 h-16 text-theme-6 mx-auto mt-3"></i> 
                    <div class="text-3xl mt-5">Are you sure?</div>
                    <div class="text-gray-600 mt-2">Do you really want to delete these records? This process cannot be undone.</div>
                </div>
                <div class="px-5 pb-8 text-center">
                    <button type="button" data-dismiss="modal" class="button w-24 border text-gray-700 mr-1">Cancel</button>
                    <button type="button" class="button w-24 bg-theme-6 text-white">Delete</button>
                </div>
            </div>
        </div>
        <!-- END: Delete Confirmation Modal -->
<div class="ajouter">
    
    <button class="button w-35 mr-1 mt-3 button  bg-orange-300  text-white"><a href="ajouteract.php">Ajouter Une Activites</a></button>

</div>
</div>

<?php include 'include/footer.php' ?>
