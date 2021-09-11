<main>
<div class="container">
            <div class="panel">
               <div class="container">
                   <h1 class="title">Add new article</h1>
                   <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" class="article__input" method="POST" enctype="multipart/form-data">
                       <input type="file" class="cover_img" name="cover_img" id="cover_img"><br />
                       <input type="text" class="article__name__input" name="article__name__input" placeholder="Article name"><br />
                       <label for="article__description" class="article__description__label" name="article__description__label">Description</label><br />
                       <textarea name="article__description" id="" class="article__description" cols="30" rows="5"></textarea><br />
                       <select name="article__category" id="">
                           <option value="Programming" name="programming__category">Programming</option>
                           <option value="Ui Design" name="ui__design__category">Ui Design</option>
                           <option value="Networking" name="networking__category">Networking</option>
                       </select><br />
                       <textarea class="text__editor" name="text__editor" id="text__editor" rows="10" cols="80"></textarea><br />
                       <input type="submit" class="publish__button" value="Publish" name="publish__button">
                   </form>
               </div>
            </div>