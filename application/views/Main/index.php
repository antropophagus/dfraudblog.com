<div class="antroslider">
  <div class="antroslider_window">
       <button title="Следующий слайд" class="button_next"><i class="fas fa-angle-right fa-3x"></i></button>
       <button title="Предыдущий слайд" class="button_prev"><i class="fas fa-angle-left fa-3x"></i></button>
       <ul class="buttons_slides">
       </ul>
     <div class="slides">
          <? foreach ($slides as $slide) {
            echo '<a href="/state/'.$slide["state_id"].'" title="'.$slide["title"].'" class="antroslider_image"><div class="antroslider_image_image"><h1>'.$slide["title"].'</h1><p>'.$slide["text"].'</p><img src="/public/images/'.$slide["image"].'" alt="" ></div></a>';
          } ?>
     </div>
  </div>
</div>
