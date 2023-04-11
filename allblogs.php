<ul>
                            <?php
                            $select_servicem2 = "SELECT * FROM blog_main ORDER BY id DESC";
                            $res_servicem2 = mysqli_query($conn, $select_servicem2);
                            while($row_servicem2 = mysqli_fetch_assoc($res_servicem2)) { ?>
                                <li><a href="blog-main.php?id=<?php echo $row_servicem2['id']; ?>"><?php echo $row_servicem2['title'] ?></a></li>
                            <?php  } ?>
                        </ul>