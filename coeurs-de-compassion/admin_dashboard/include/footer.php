</div>
<script>
        
        document.addEventListener("DOMContentLoaded", function() {
            // Get the current page's URL path
            const path = window.location.pathname;
            const page = path.split("/").pop(); // Get the file name from the URL

            // Get the stored active link from localStorage if any
            const activeLink = localStorage.getItem('activeLink');

            // Function to handle menu item clicks
            function handleMenuClick(event) {
                // Remove the 'side-menu--active' class from all menu items
                const menuItems = document.querySelectorAll('.side-menu');
                menuItems.forEach(item => item.classList.remove('side-menu--active'));

                // Add the 'side-menu--active' class to the clicked item
                event.currentTarget.classList.add('side-menu--active');

                // Store the active link in localStorage
                const link = event.currentTarget.getAttribute('data-link');
                localStorage.setItem('activeLink', link);
            }

            // Attach the click event handler to all menu items
            const menuLinks = document.querySelectorAll('.side-menu');
            menuLinks.forEach(link => {
                link.addEventListener('click', handleMenuClick);

                // Set the active class based on the current URL or localStorage
                if (link.getAttribute('href') === page) {
                    link.classList.add('side-menu--active');
                } else if (link.getAttribute('data-link') === activeLink) {
                    link.classList.add('side-menu--active');
                }
            });
        });
    </script>
<script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js"></script>
        <script src="dist/js/app.js"></script>
        <!-- END: JS Assets-->
    </body>
</html>