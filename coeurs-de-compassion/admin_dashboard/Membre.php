<?php include 'include/header.php';
include_once 'C:\xampp\htdocs\nnn\ppfe\coeurs-de-compassion\Models\UI\joinusModel.php';
include 'C:\xampp\htdocs\nnn\ppfe\coeurs-de-compassion\Controllers\UI\joinusController.php';

$compte = new member();
$list = member::getAll();

?>
<h2 class="intro-y text-lg font-medium mt-10">
    <i class='bx bx-male'></i> Membre
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
                <th class="whitespace-no-wrap">ID MEMBRE</th>
                <th class="whitespace-no-wrap">FULL NAME</th>
                <th class="text-center whitespace-no-wrap">STATUS</th>
                <th class="text-center whitespace-no-wrap">ACTIONS</th>

            </tr>
        </thead>
        <tbody>
            <?php foreach ($list as $l) {   ?>
                <tr class="intro-x">
                    <td><?php echo $l['member']->getIdmember(); ?></td>





                    <td><?php echo $l['member']->getFullName(); ?></td>
                    <td class="w-40">
                        <div class="flex items-center justify-center text-theme-6"> <i data-feather="check-square" class="w-4 h-4 mr-2"></i> <?php echo $l['member']->getStatus(); ?> </div>
                    </td>
                    <td class="table-report__action w-56">
                        <div class="flex justify-center items-center">
                            <a class="flex items-center mr-3" href="Consultermembre.php"> <i class='bx bx-low-vision'></i> Consulter </a>
                            <a class="flex items-center mr-3" href="javascript:;"> <i data-feather="check-square" class="w-4 h-4 mr-1"></i> Edit </a>
                            <a class="flex items-center text-theme-6" href="javascript:;" data-toggle="modal" data-target="#delete-confirmation-modal<?php echo $l['member']->getIdmember(); ?>"> <i data-feather="trash-2" class="w-4 h-4 mr-1"></i> Delete </a>
                        </div>
                    </td>
                </tr>

                <div class="modal" id="delete-confirmation-modal<?php echo $l['member']->getIdmember(); ?>">
                    <div class="modal__content">
                        <form method="POST">
                            <div class="p-5 text-center">
                                <input type="hidden" name="idmember" value="<?php echo $l['member']->getIdmember(); ?>">
                                <i data-feather="x-circle" class="w-16 h-16 text-theme-6 mx-auto mt-3"></i>
                                <div class="text-3xl mt-5">Are you sure?</div>
                                <div class="text-gray-600 mt-2">Do you really want to delete these records? This process cannot be undone.</div>
                            </div>
                            <div class="px-5 pb-8 text-center">
                                <button type="button" data-dismiss="modal" class="button w-24 border text-gray-700 mr-1">Cancel</button>
                                <button type="submit" name="btn-delete" class="button w-24 bg-theme-6 text-white">Delete</button>
                            </div>
                        </form>
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
<div class="grid grid-cols-12 gap-6 mt-5">
    <div class="intro-y col-span-12 flex flex-wrap sm:flex-no-wrap items-center mt-2">
        <div class="dropdown relative plus">
            <button class="dropdown-toggle button px-2 box text-gray-700">
                <span class="w-5 h-5 flex items-center justify-center"> <i class="w-4 h-4" data-feather="plus"></i> </span>
            </button>
            <div class="dropdown-box mt-10 absolute w-40 top-0 left-0 z-20">
                <div class="dropdown-box__content box p-2">

                    <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md"> <i data-feather="file-text" class="w-4 h-4 mr-2"></i> Export to Excel </a>
                    <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md"> <i data-feather="file-text" class="w-4 h-4 mr-2"></i> Export to PDF </a>
                </div>
            </div>
        </div>


    </div>
</div>



<!-- BEGIN: Delete Confirmation Modal -->

<!-- END: Delete Confirmation Modal -->

<?php include 'include/footer.php' ?>