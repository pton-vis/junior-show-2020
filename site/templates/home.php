<?php snippet('header'); ?>

<div class="col-sm-12 col-md-10 offset-md-1 col-lg-8 offset-lg-2 center">
  <img class="window-expanded" src="<?= $site->url(); ?>/assets/img/zoom-call-expanded.png" alt="">
  <img class="window-neutral" src="<?= $site->url(); ?>/assets/img/zoom-call.png" alt="">

  <div class="col-sm-3 offset-sm-9 p-list">
    <?php
      $studentList = $site->index()->filterBy('intendedTemplate', 'student')->listed();
      function studentSort($a, $b) {
        $aExploded = explode(' ', $a['content']['title']);
        $bExploded = explode(' ', $b['content']['title']);
        return end($aExploded) <=> end($bExploded);
      }
      $sLA = $studentList->toArray();
      usort($sLA, 'studentSort');
    ?>
    <?php foreach($sLA as $student): ?>
      <div class="p-container">
        <?php
          $url = $student['url'];
          if ($student['content']['go_direct'] == true) {
            $url = $student['content']['url_url'];
          }
        ?>
        <a href="<?= $url; ?>" class="p-link">
          <p><?= $student['content']['title']; ?></p>
        </a>
      </div>
    <?php endforeach; ?>
  </div>
  <button class="p-button"></button>
</div>

<?php snippet('footer'); ?>
