<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PT Mentari Pagi - Transaction Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .sidebar {
            transition: all 0.3s ease;
        }
        .sidebar-collapsed {
            width: 80px;
        }
        .sidebar-collapsed .menu-text {
            display: none;
        }
        .sidebar-collapsed .logo-text {
            display: none;
        }
        .sidebar-collapsed .menu-item {
            justify-content: center;
        }
        .content {
            transition: all 0.3s ease;
        }
        .content-expanded {
            margin-left: 80px;
        }
        .active-menu {
            background-color: #3b82f6;
            color: white !important;
        }
        .active-menu:hover {
            background-color: #3b82f6 !important;
        }
    </style>
</head>
<body class="bg-gray-100">
    <div class="flex h-screen overflow-hidden">
        <!-- Sidebar -->
        <div id="sidebar" class="sidebar bg-blue-800 text-white w-64 h-full fixed shadow-lg">
            <div class="p-4 flex items-center border-b border-blue-700">
                <div class="bg-white p-2 rounded-lg">
                    <i class="fas fa-sun text-yellow-400 text-2xl"></i>
                </div>
                <div class="ml-3">
                    <h1 class="logo-text font-bold text-xl">PT Mentari Pagi</h1>
                    <p class="logo-text text-xs text-blue-200">Dashboard Transaksi</p>
                </div>
            </div>
            
            <div class="p-4 border-b border-blue-700 flex items-center">
                <div class="w-10 h-10 rounded-full bg-blue-600 flex items-center justify-center">
                    <i class="fas fa-user"></i>
                </div>
                <div class="ml-3 logo-text">
                    <p class="font-medium">Admin User</p>
                    <p class="text-xs text-blue-200">Super Admin</p>
                </div>
            </div>
            
            <nav class="mt-4">
                <ul>
                    <li>
                        <a href="/dashboard" id="dashboard-menu" class="menu-item flex items-center p-3 hover:bg-blue-700 rounded-lg mx-2">
                            <i class="fas fa-tachometer-alt"></i>
                            <span class="menu-text ml-3">Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="/pelanggan" id="pelanggan-menu" class="menu-item flex items-center p-3 hover:bg-blue-700 rounded-lg mx-2">
                            <i class="fas fa-users"></i>
                            <span class="menu-text ml-3">Pelanggan</span>
                        </a>
                    </li>
                    <li>
                        <a href="/barang" id="barang-menu" class="menu-item flex items-center p-3 hover:bg-blue-700 rounded-lg mx-2">
                            <i class="fas fa-boxes"></i>
                            <span class="menu-text ml-3">Barang</span>
                        </a>
                    </li>
                    <li>
                        <a href="/transaksi" id="transaksi-menu" class="menu-item flex items-center p-3 hover:bg-blue-700 rounded-lg mx-2">
                            <i class="fas fa-shopping-cart"></i>
                            <span class="menu-text ml-3">Transaksi</span>
                        </a>
                    </li>
                    <li>
                        <a href="/pengiriman" id="delivery-menu" class="menu-item flex items-center p-3 hover:bg-blue-700 rounded-lg mx-2">
                            <i class="fas fa-truck"></i>
                            <span class="menu-text ml-3">Delivery Orders</span>
                        </a>
                    </li>
                </ul>
            </nav>
            
            <div class="absolute bottom-0 w-full p-4 border-t border-blue-700">
                <button id="toggle-sidebar" class="w-full flex items-center justify-center p-2 hover:bg-blue-700 rounded-lg hidden" >
                    <i class="fas fa-chevron-left"></i>
                    <span class="menu-text ml-2">Collapse</span>
                </button>
            </div>
        </div>
        
        <!-- Main Content -->
        <div id="content" class="content flex-1 ml-64 overflow-auto">
        <!-- Top Navigation -->
          <header class="bg-white shadow-sm p-4 flex justify-between items-center sticky top-0 z-10">
            <h2 class="text-xl font-semibold text-gray-800" id="page-title"><?php echo $page_title; ?></h2>
            <div class="flex items-center space-x-4">
              <div class="relative">
                <i class="fas fa-search absolute left-3 top-2.5 text-gray-400"></i>
                <input type="text" placeholder="Search..." class="pl-10 pr-4 py-2 rounded-full border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500">
              </div>
              <div class="relative">
                <i class="fas fa-bell text-gray-600 cursor-pointer hover:text-blue-600"></i>
                <span class="absolute -top-1 -right-1 bg-red-500 text-white text-xs rounded-full w-4 h-4 flex items-center justify-center">3</span>
              </div>
              <div class="flex items-center">
                <img src="https://randomuser.me/api/portraits/men/1.jpg" alt="Profile" class="w-8 h-8 rounded-full">
              </div>
            </div>
          </header>