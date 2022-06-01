<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>MyTodos</title>

   <!-- CSS -->
   <link rel="stylesheet" href="../css/main.css">

   <!-- FA -->
   <script src="https://kit.fontawesome.com/e307a20384.js" crossorigin="anonymous"></script>
</head>

<body>

   <div class="popup popup-new-todo" data-popid="popup-new-todo">
      <div class="popup-shadow">
         <form class="popup-content" action="#">
            <div class="popup-header">
               New task
            </div>
            <div class="popup-body">
               <input type="text" name="todo-input" class="width-100" placeholder="Task">
            </div>
            <div class="popup-footer">
               <button class="btn btn-popup-cancel" type="reset" role="popup-close">Cancel</button>
               <button class="btn btn-popup-cta" type="submit">Create task</button>
            </div>
         </form>
      </div>
   </div>

   <header id="header" class="header">
      <div class="container">
         <div class="flex-row justify-between align-center">
            <button class="btn-back btn-transparent">
               <i class="fa-solid fa-arrow-left"></i>
            </button>

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
         <h5 class="group-active text-uppercase">
            Today
         </h5>

         <ul class="todo-list">
            <li class="todo-item flex-row align-start">
               <div class="check">
                  <input type="checkbox" name="todo-status">
               </div>
               <div class="content flex-grow-1">
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione fuga sequi voluptatem. Ad, itaque voluptatum.</p>
               </div>
               <div class="todo-options">
                  <button class="btn-transparent" role="toggle-options">
                     <i class="fa-solid fa-ellipsis-vertical"></i>
                  </button>

                  <ul class="option-list">
                     <li>
                        <a href="#" class="option-item flex-row">
                           <div class="icon"><i class="fa-regular fa-pen-to-square"></i></div>
                           <div class="text">Update</div>
                        </a>
                     </li>
                     <li>
                        <a href="#" class="option-item flex-row">
                           <div class="icon"><i class="fa-regular fa-trash-can"></i></div>
                           <div class="text">Delete</div>
                        </a>
                     </li>
                  </ul>
               </div>
            </li>

            <li class="todo-item flex-row align-start">
               <div class="check">
                  <input type="checkbox" name="todo-status">
               </div>
               <div class="content flex-grow-1">
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione fuga sequi voluptatem. Ad, itaque voluptatum.</p>
               </div>
               <div class="todo-options">
                  <button class="btn-transparent" role="toggle-options">
                     <i class="fa-solid fa-ellipsis-vertical"></i>
                  </button>

                  <ul class="option-list">
                     <li>
                        <a href="#" class="option-item flex-row">
                           <div class="icon"><i class="fa-regular fa-pen-to-square"></i></div>
                           <div class="text">Update</div>
                        </a>
                     </li>
                     <li>
                        <a href="#" class="option-item flex-row">
                           <div class="icon"><i class="fa-regular fa-trash-can"></i></div>
                           <div class="text">Delete</div>
                        </a>
                     </li>
                  </ul>
               </div>
            </li>

            <li class="todo-item flex-row align-start">
               <div class="check">
                  <input type="checkbox" name="todo-status">
               </div>
               <div class="content flex-grow-1">
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione fuga sequi voluptatem. Ad, itaque voluptatum.</p>
               </div>
               <div class="todo-options">
                  <button class="btn-transparent" role="toggle-options">
                     <i class="fa-solid fa-ellipsis-vertical"></i>
                  </button>

                  <ul class="option-list">
                     <li>
                        <a href="#" class="option-item flex-row">
                           <div class="icon"><i class="fa-regular fa-pen-to-square"></i></div>
                           <div class="text">Update</div>
                        </a>
                     </li>
                     <li>
                        <a href="#" class="option-item flex-row">
                           <div class="icon"><i class="fa-regular fa-trash-can"></i></div>
                           <div class="text">Delete</div>
                        </a>
                     </li>
                  </ul>
               </div>
            </li>
         </ul>
      </div>
   </main>

   <button class="btn-floating btn-cta" role="popup-new-todo">
      <i class="fa-solid fa-plus"></i>
   </button>


   <footer>
      <script src="../js/dom/popup.js"></script>
      <script src="../js/dom/todos.js"></script>
   </footer>

</body>

</html>