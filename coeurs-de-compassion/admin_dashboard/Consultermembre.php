<?php include 'include/header.php' ?>
        <h2 class="intro-y text-lg font-medium mt-10">
            <i class='bx bx-male'></i> Les information du Membre
        </h2>
        <div class="mt-3 dvm" >
            <label> Image</label>
            <div class="border-2 border-dashed rounded-md mt-3 pt-4">
                <div class="flex flex-wrap px-4">
                    <div class="w-24 h-24 relative image-fit mb-5 mr-5 cursor-pointer zoom-in">
                        <img class="rounded-md" alt="Midone Tailwind HTML Admin Template" src="dist/images/preview-4.jpg">
                        
                    </div>
                </div>   
            </div>
        </div>
         <!-- BEGIN: Personal Information -->
         
         <form class="validate-form mem-form " >
            <div> <label class="flex flex-col sm:flex-row"> Nom: <span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-gray-600"></span> </label> <input type="text" name="name" class="input w-2/3 border mt-2 " placeholder="Nom" value="Ahkouk"   required> </div>
            <div> <label class="flex flex-col sm:flex-row"> Prénom: <span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-gray-600"></span> </label> <input type="text" name="Prénom" class="input w-2/3 border mt-2 " placeholder="Prénom" value="Walid" required> </div>
            <div> <label class="flex flex-col sm:flex-row"> Cin: <span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-gray-600"></span> </label> <input type="text" name="Cin" class="input w-2/3 border mt-2 " placeholder="Cin" value="P378549" required> </div>
            <div> <label class="flex flex-col sm:flex-row"> Date de naissance: <span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-gray-600"></span> </label> <input type="text" name="Date de naissance" class="input w-2/3 border mt-2 " placeholder="Date de naissance" value="16/11/2002" required> </div>
            <div> <label class="flex flex-col sm:flex-row"> Lieu de naissance: <span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-gray-600"></span> </label> <input type="text" name="Lieu de naissance" class="input w-2/3 border mt-2 " placeholder="Lieu de naissance" value="Ouarzazate" required> </div>
            <div> <label class="flex flex-col sm:flex-row"> Email: <span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-gray-600"></span> </label> <input type="Email" name="Email" class="input w-2/3 border mt-2 " placeholder="Email" value="walid@gmail.com" required> </div>
            <div> <label class="flex flex-col sm:flex-row"> Tel: <span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-gray-600"></span> </label> <input type="tel" name="Tel" class="input w-2/3 border mt-2 " placeholder="Tel" value="0678984567" required> </div>
            <div> <label class="flex flex-col sm:flex-row"> Niveau scolaire: <span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-gray-600"></span> </label> <input type="text" name=" Niveau scolaire" class="input w-2/3 border mt-2 " placeholder=" Niveau scolaire" value="Bac+3" required> </div>
            <div> <label class="flex flex-col sm:flex-row"> Spécialité: <span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-gray-600"></span> </label> <input type="text" name="Spécialité" class="input w-2/3 border mt-2 " placeholder="Spécialité" value="Informatique" required> </div>
            <div> <label class="flex flex-col sm:flex-row"> Status: <span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-gray-600"></span> </label> <input type="text" name="Status" class="input w-2/3 border mt-2 " placeholder="Status" value="Active" required> </div>
            
        </form> 
        <form class="validate-form area-form " >
        <label for="w3review">Centre d'intérêts:</label>

        <textarea id="w3review" name="w3review" rows="4" cols="50">
        
        </textarea>
       </form>

       <form class="validate-form areat-form " >
        <label for="w3review">Activités à s'engager à l'association:</label>

        <textarea id="w3review" name="w3review" rows="4" cols="50">
       
        </textarea>
        </form>

        <form class="validate-form areat-form " >
            <label for="w3review">Objectifs personnelles:</label>
    
            <textarea id="w3review" name="w3review" rows="4" cols="50">
           
            </textarea>
            <input class="button w-44 mr-1 mb-2 bg-theme-9 text-white btnm " type="button" onclick="location.href='Membre.php';" value="retour"/>
            </form>


            

        <?php include 'include/footer.php' ?>