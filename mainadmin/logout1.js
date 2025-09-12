function logout() {
    // Display the confirmation dialog
    var result = confirm("Are you sure you want to log out?");
    
    // If user clicks OK, redirect to fp.html
    if (result) {
        window.location.href = "farminlogin.php";
    }
    // If user clicks Cancel or closes the dialog, do nothing (stay on current page)
}