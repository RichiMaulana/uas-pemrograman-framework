        </div>
      </div>

    <script>
        window.addEventListener('DOMContentLoaded', () => {
            const active_menu = "<?= $active_menu ?>";
            const menuElement = document.getElementById(`${active_menu}-menu`);
            if (menuElement) {
                menuElement.classList.add('active-menu');
            }
        });

        function toggleDropdown(button) {
            const dropdown = button.nextElementSibling;
            dropdown.classList.toggle('hidden');
        }

        // Optional: Close dropdown when clicking outside
        document.addEventListener('click', function(event) {
            document.querySelectorAll('.dropdown-content').forEach(function(dropdown) {
                if (!dropdown.contains(event.target) && !dropdown.previousElementSibling.contains(event.target)) {
                    dropdown.classList.add('hidden');
                }
            });
        });
    </script>
    </body>

</html>