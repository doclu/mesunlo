<?php if (!defined('THINK_PATH')) exit();?> <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>Document</title>
     <style>
         .main{
             width:300px;
             height: 300px;
         }
         .main img{
             width: 100%;
         }
     </style>
 </head>
 <body>
     <div class='main'>
            <img src="<?php echo ($url); ?>" alt="">
     </div>
    <div>
        <h2><?php echo ($title); ?></h2>
        <span><?php echo ($price); ?></span>
    </div>         
 </body>
 </html>