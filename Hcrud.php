<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Heshan.css">
    <script src="Heshan.js"></script>
    <title>Dashboard</title>
</head>
<body>
    <div class="sidebar">
        <div class="profile">
            <div class="profile-picture">
                <img src="profile-picture.jpg" alt="Profile Picture">
            </div>
            <h3>Heshan P</h3>
            <p>Manager</p>
        </div>
        <ul class="menu">
            <li><a href="#" onclick="loadContent('settings')">Profile Settings</a></li>
            <li><a href="#" onclick="loadContent('user')">User Management</a></li>
            <li><a href="#" onclick="loadContent('lecturer')">Lecturer Management</a></li>
            <li><a href="#" onclick="loadContent('financial')">Financial Management</a></li>
            <li><a href="#" onclick="loadContent('help')">Help and Support</a></li>
            <li><a href="#" onclick="logout()">Logout</a></li>
        </ul>
    </div>
    <div class="content" id="content">
        <!-- Content Goes Here -->
        <h1 style="color: white;">Heshan Perera</h1>
        <p>Select an option from the menu to get started.</p>
    </div>
    <div id="contentload">
        <!-- Content loaded dynamically will appear here -->
    </div>
</body>
</html>
