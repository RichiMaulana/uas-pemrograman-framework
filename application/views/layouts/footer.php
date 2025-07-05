        </div>
      </div>

      <!-- <script>
        // Toggle sidebar
        document.getElementById('toggle-sidebar').addEventListener('click', function() {
            const sidebar = document.getElementById('sidebar');
            const content = document.getElementById('content');
            
            sidebar.classList.toggle('sidebar-collapsed');
            content.classList.toggle('content-expanded');
            
            // Change icon and text
            const icon = this.querySelector('i');
            const text = this.querySelector('.menu-text');
            
            if (sidebar.classList.contains('sidebar-collapsed')) {
                icon.classList.remove('fa-chevron-left');
                icon.classList.add('fa-chevron-right');
                text.textContent = 'Expand';
            } else {
                icon.classList.remove('fa-chevron-right');
                icon.classList.add('fa-chevron-left');
                text.textContent = 'Collapse';
            }
        });
        
        // Menu navigation
        const menuItems = ['dashboard', 'customers', 'goods', 'sales', 'delivery'];
        
        menuItems.forEach(item => {
            const menuElement = document.getElementById(`${item}-menu`);
            const contentElement = document.getElementById(`${item}-content`);
            
            menuElement.addEventListener('click', function(e) {
                e.preventDefault();
                
                // Remove active class from all menus
                menuItems.forEach(menu => {
                    document.getElementById(`${menu}-menu`).classList.remove('active-menu');
                    document.getElementById(`${menu}-content`).classList.add('hidden');
                });
                
                // Add active class to clicked menu
                this.classList.add('active-menu');
                contentElement.classList.remove('hidden');
                
                // Update page title
                const titleMap = {
                    'dashboard': 'Dashboard',
                    'customers': 'Customers',
                    'goods': 'Goods Inventory',
                    'sales': 'Sales Transactions',
                    'delivery': 'Delivery Orders'
                };
                
                document.getElementById('page-title').textContent = titleMap[item];
            });
        });
        
        // Set dashboard as active by default
        document.getElementById('dashboard-menu').classList.add('active-menu');
        document.getElementById('dashboard-content').classList.remove('hidden');
    </script> -->

      <script>
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