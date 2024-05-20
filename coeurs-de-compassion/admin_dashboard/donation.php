<?php include 'include/header.php';
include_once 'C:\xampp\htdocs\nnn\ppfe\coeurs-de-compassion\Models\UI\donationModel.php';
include_once 'C:\xampp\htdocs\nnn\ppfe\coeurs-de-compassion\Controllers\UI\donationController.php';

$compte = new donation();
$listcompte = donation::getAll();

?>


<h2 class="intro-y text-lg font-medium mt-10">
    <i class='bx bx-donate-heart'></i> Don/Donateur
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
                <th class="whitespace-no-wrap">ID Don</th>
                <th class="whitespace-no-wrap">NOM</th>
                <th class="text-center whitespace-no-wrap">PRénom</th>
                <th class="text-center whitespace-no-wrap">Date</th>
                <th class="text-center whitespace-no-wrap">Montant</th>
                <th class="text-center whitespace-no-wrap">Email</th>
                <th class="text-center whitespace-no-wrap">ACTIONS</th>

            </tr>
        </thead>
        <tbody>
            <?php foreach ($listcompte as $c) { ?>

                <tr class="intro-x">
                    <td><?php echo $c['donation']->getIdDon(); ?></td>

                    <td><?php echo $c['donor']->getLastn(); ?></td>
                    <td class="text-center"><?php echo $c['donor']->getFirstn(); ?></td>
                    <td class="text-center"> <?php echo $c['donation']->getDate(); ?> </td>
                    <td class="text-center"><?php echo $c['donation']->getDonValue(); ?> </td>
                    <td class="text-center"><?php echo $c['donor']->getEmail(); ?> </td>
                    <td class="table-report__action w-56">
                        <div class="flex justify-center items-center">
                            <a class="flex items-center mr-3" href="#"> <i data-feather="check-square" class="w-4 h-4 mr-1"></i> Edit </a>
                            <a class="flex items-center text-theme-6" href="#" data-toggle="modal" data-target="#delete-confirmation-modal<?php echo $c['donation']->getIdDon(); ?>"> <i data-feather="trash-2" class="w-4 h-4 mr-1"></i> Delete </a>
                        </div>
                    </td>
                </tr>
                <!-- BEGIN: Delete Confirmation Modal -->
                <div id="delete-confirmation-modal<?php echo $c['donation']->getIdDon(); ?>" class="modal">
                    <div class="modal__content">
                        <form method="POST">
                            <div class="p-5 text-center">
                                <input type="hidden" name="iddon" value="<?php echo $c['donation']->getIdDon(); ?>">
                                <div class="text-3xl mt-5">Are you sure?</div>
                                <div class="text-gray-600 mt-2">Do you really want to delete these records? This process cannot be undone.</div>
                            </div>
                            <div class="px-5 pb-8 text-center">
                                <button type="button" data-dismiss="modal" class="button w-24 border text-gray-700 mr-1">Cancel</button>
                                <input type="submit" name="btn-delete" class="button w-24 bg-theme-6 text-white" value="Delete">
                            </div>
                        </form>

                    </div>
                </div>

            <?php } ?>


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


<!-- END: Delete Confirmation Modal -->
<div class="ajouter">
    <a href="Ajouterdon.php"><button class="button w-24 mr-1 mb-2 bg-theme-9 text-white">Ajouter un don</button></a>

</div>

<?php include 'include/footer.php' ?>