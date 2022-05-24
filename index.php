<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>MyTodos</title>

   <!-- CSS -->
   <link rel="stylesheet" href="./css/main.css">
</head>

<body>

   <header id="header" class="header">
      <div class="container">
         <div class="flex-row justify-between align-center">
            <div class="logo-wrapper">
               <a href="index.php" class="logo">MyTodos</a>
            </div>

            <nav class="nav">
               <div class="flex-row">
                  <button class="btn btn-cta">Logout</button>
               </div>
            </nav>
         </div>
      </div>
   </header>

   <main id="main-content" class="main-content">
      <div class="container">
         <form action="#" class="add-task-form">
            <input type="text" name="todo-input" id="todo-input">
            <button type="submit" class="btn btn-cta">Add</button>
         </form>

         <ul class="todo-list">
            <li class="todo-item">
               <div class="content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione fuga sequi voluptatem. Ad, itaque voluptatum.</div>
               <div class="todo-options">
                  <button class="btn btn-cta">Update</button>
                  <button class="btn btn-danger">Delete</button>
               </div>
            </li>

            <li class="todo-item">
               <div class="content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione fuga sequi voluptatem. Ad, itaque voluptatum.</div>
               <div class="todo-options">
                  <button class="btn btn-cta">Update</button>
                  <button class="btn btn-danger">Delete</button>
               </div>
            </li>
            
            <li class="todo-item">
               <div class="content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione fuga sequi voluptatem. Ad, itaque voluptatum.</div>
               <div class="todo-options">
                  <button class="btn btn-cta">Update</button>
                  <button class="btn btn-danger">Delete</button>
               </div>
            </li>
         </ul>
      </div>
   </main>

</body>

</html>