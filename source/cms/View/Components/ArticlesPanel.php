<div class="panel">
                <?php
                 $readArticle = new Articles();
                 //var_dump($CRUD->post());
                 $data = $readArticle->readArticle();
                 foreach ($data as $row){?>
                 <div class="display__article">
                    <div class="container">
                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="GET">
                        <div class="wrapper">
                        <input type="hidden" class="card__id" name="card__id" value="<?=$row['id'];?>"/>
                        <table>
                            <tr>
                                <th>Article</th>
                                
                                <th>category</th>
                            </tr>
                            <tr>
                                <td class="card__title"><?=$row['title']?></td>
                                <td class=""><?=$row['category']?></td>
                            </tr>
                        </table>
                        <div class="inputs">
                        <input type="submit" class="edit__btn" value="Edit">
                        <input type="submit" name="delete__btn" class="delete" value="Delete">
                        </div>
                        </form>
                        </div>
                    </div>
                </div>
                    <?php
                 }
                ?>
            </div>
        </div>
</div>