# EcommerceAdminDashboad_SoftwareEngineering
New ecommerce dashboard for software engineering

!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! TAKE NOTE !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! TAKE NOTE !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
---------------------------------------------------------------------------------------------------
--------------------------ISSUES: NAWAWALA ANG CSS FILES AT IMAGES FOLDER--------------------------
---------------------------------------------------------------------------------------------------
Solution No 1: Sa Nawawalang CSS
  Just remove the extra slash(/) on each link & script.

  Not remove:
    <link rel="stylesheet" href="/css/layout/style.css">
    <script src="/javascripts/sript.js"></script>
  
  Removed:
    <link rel="stylesheet" href="css/layout/style.css">
    <script src="javascripts/sript.js"></script>
  
  Just do this in every link and script on the html files.

---------------------------------------------------------------------------------------------------

Solution No 2: Sa Nawawalang Background in Login and Sign Up Pages.
  Just add the name of the folder in the path of images folder in css files  of login and sign up.

  Not add:
    background-image: url("/images/login_bg.jpg");
    
  Add:
    background-image: url("/EcommerceAdminDashboad_SoftwareEngineering-main/images/login_bg.jpg");
    
---------------------------------------------------------------------------------------------------
  
  
