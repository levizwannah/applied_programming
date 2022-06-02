<?php
   # checks if the user is logged in
   # if not, redirect them to the login page.
   require(__DIR__. "/logic/auth.inc.php");
   
?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>MyTodos</title>

   <!-- CSS -->
   <link rel="stylesheet" href="./css/main.css">

   <!-- FA -->
   <script src="https://kit.fontawesome.com/e307a20384.js" crossorigin="anonymous"></script>
</head>

<body>

   <div class="popup popup-new-group" data-popid="popup-new-group">
      <div class="popup-shadow">
         <form class="popup-content" action="#">
            <div class="popup-header">
               New group
            </div>
            <div class="popup-body">
               <input type="text" name="group-name" class="width-100" placeholder="Group name" id="group-name-add">
            </div>
            <div class="popup-footer">
               <button class="btn btn-popup-cancel" type="reset" role="popup-close">Cancel</button>
               <button class="btn btn-popup-cta" type="submit" id="add-group-btn">Create group</button>
            </div>
         </form>
      </div>
   </div>

   <header id="header" class="header">
      <div class="container">
         <div class="flex-row justify-between align-center">
            <div class="logo-wrapper">
               <a href="index.php" class="logo">MyTodos</a>
            </div>

            <nav class="nav">
               <div class="flex-row">
                  <button class="btn-transparent text-uppercase">Logout</button>
               </div>
            </nav>
         </div>
      </div>
   </header>

   <main id="main-content" class="main-content">
      <div class="container">

         <ul class="todo-groups">
            <li>
               <a class="group-item flex-row" href="./html/todos.php">
                  <div class="icon">
                     <i class="fa-solid fa-list"></i>
                  </div>
                  <div class="content flex-grow-1">
                     Today
                  </div>
                  <div class="items-count">
                     5
                  </div>
               </a>
            </li>

            <li>
               <a class="group-item flex-row" href="#">
                  <div class="icon">
                     <i class="fa-solid fa-list"></i>
                  </div>
                  <div class="content flex-grow-1">
                     Tomorrow
                  </div>
                  <div class="items-count">
                     3
                  </div>
               </a>
            </li>

            <li>
               <a class="group-item flex-row" href="#">
                  <div class="icon">
                     <i class="fa-solid fa-list"></i>
                  </div>
                  <div class="content flex-grow-1">
                     Shopping list 2022-06-04
                  </div>
                  <div class="items-count">
                     10
                  </div>
               </a>
            </li>
         </ul>

         <button class="btn-new-list btn-transparent" role="popup-new-group">
            <div class="container">
               <div class="content flex-row align-center">
                  <div class="icon">
                     <i class="fa-solid fa-plus"></i>
                  </div>
                  <div class="text">
                     New group
                  </div>
               </div>
            </div>
         </button>
      </div>
   </main>

   <footer>
      <script src="./js/dom/popup.js"></script>
      <script src="./js/util.js"></script>
      <script src="./js/add_group.js"></script>
   </footer>

</body>

</html>