    function toggleSidebar() {
      const sidebar = document.getElementById('sidebar');
      sidebar.classList.toggle('collapsed');
    }

    function showContent(section) {
        const mainTitle = document.getElementById('main-title');
        const dashboardContent = document.getElementById('dashboard-content');
      
        switch (section) {
          case 'orders':
            mainTitle.textContent = 'My Orders';
            dashboardContent.innerHTML = '<h3>Order Summary</h3><p>Here is a summary of your recent orders...</p>';
            break;
          case 'invoices':
            mainTitle.textContent = 'My Invoices';
            dashboardContent.innerHTML = '<h3>Invoice Details</h3><p>View your outstanding and paid invoices here...</p>';
            break;
          case 'contact':
            mainTitle.textContent = 'Contact Us';
            dashboardContent.innerHTML = '<h3>Get in Touch</h3><p>Please find our contact information below...</p>';
            break;
          default:
            mainTitle.textContent = 'Dashboard Overview';
            dashboardContent.innerHTML = '<p>Welcome to your dashboard!</p>';
            break;
        }
      
        // 🛠️ Auto-close sidebar on mobile
        if (window.innerWidth <= 768) {
          document.getElementById('sidebar').classList.remove('collapsed');
        }
      }
      
