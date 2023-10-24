<?php
    if(isset($_FILES) && isset($_FILES["img_1"]) ){
        for($i=0; $i< count($_FILES); $i++){
            $file = $_FILES["img_".($i+1)];
            move_uploaded_file($file["tmp_name"], "../buoi3/uploads/".$file["name"] );
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .btn-add{
            padding: 10px;
            border: 1px solid;
            width: 50px;
            margin: 10px;
            text-align: center;
        }
    </style>
</head>
<body>
    <form method="post" enctype="multipart/form-data" action="">
        <div class="input-file">
            <input type="file" style="display:block; margin-bottom:10px;">
        </div>
        <div role="button" class="btn-add">
            <div>+</div>
        </div>
        <button>Submit</button>
    </form>

    <script>
        let addFile = document.querySelector(".btn-add");
        addFile.addEventListener("click", function(){
            let inputFile = document.querySelector(".input-file");
            let firstChild = document.querySelector("input:first-child");
            let inputFileClone = firstChild.cloneNode(true);
            inputFile.appendChild(inputFileClone);

            let fileNodes = inputFile.getElementsByTagName("input");
            for(let i=0; i< fileNodes.length; i++){
                fileNodes[i].setAttribute("name", "img_"+parseInt(i+1));
            }
        })
    </script>
</body>
</html>