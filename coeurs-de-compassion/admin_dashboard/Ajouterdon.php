<?php include 'include/header.php' ?>
        <h2 class="intro-y text-lg font-medium mt-10">
            <i class='bx bx-donate-heart'></i> Ajouter un don
        </h2>
        
            <form class="validate-form don-form " >
                <div> <label class="flex flex-col sm:flex-row"> Nom: <span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-gray-600"></span> </label> <input type="text" name="name" class="input w-2/3 border mt-2 " placeholder="Nom" minlength="2" required> </div>
                <div> <label class="flex flex-col sm:flex-row"> Prénom: <span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-gray-600"></span> </label> <input type="text" name="Prénom" class="input w-2/3 border mt-2 " placeholder="Prénom" minlength="2" required> </div>
                <div> <label class="flex flex-col sm:flex-row"> Tél: <span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-gray-600"></span> </label> <input type="text" name="Tél" class="input w-2/3  border mt-2 " placeholder="Tél" minlength="2" required> </div>
                <div class="mt-3"> <label class="flex flex-col sm:flex-row"> Email: <span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-gray-600"></span> </label> <input type="email" name="email" class="input w-2/3  border mt-2 " placeholder="example@gmail.com" required> </div>
                <div> <label class="flex flex-col sm:flex-row"> Montant: <span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-gray-600"></span> </label> <input type="text" name="Montant" class="input w-2/3  border mt-2 " placeholder="Montant" minlength="2" required> </div>
                <div> <label class="flex flex-col sm:flex-row"> Motif:<span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-gray-600"></span> </label> <input type="text" name="Motif" class="input w-2/3 border mt-2 " placeholder="Motif" minlength="2" required> </div>
                <div> <label class="flex flex-col sm:flex-row"> Date:<span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-gray-600"></span> </label>   <input class="datepicker input w-2/3 border block "> 
            </form>
            
               <button class="button w-44 mr-1 mb-2 bg-theme-9 text-white btnv">Ajouter un don </button>
               <?php include 'include/footer.php' ?>