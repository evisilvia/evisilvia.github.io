<?php 
  // $link_0= $links['link_0'];
  // $link_1= $links['link_1'];
  // $link_2= $links['link_2'];
  // $link_3= $links['link_3'];
?>
<div class="page-head">
              <!-- <h2 class="page-head-title">Home</h2> -->
              <ol class="breadcrumb page-head-nav">
                <li><a href="#"><?=$pages['page_1'];?></a></li>
                <?php if(isset($pages['page_2'])) : ?>
                  <li><a href="#"><?=$pages['page_2']?></a></li>
                    <?php if(isset($pages['page_3'])) : ?>
                      <li class="active"><a href=""><?=$pages['page_3']?></a></li>
                    <?php endif; ?>
                <?php endif; ?>
              </ol>
</div>