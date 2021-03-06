<!-- -*-html-helper-*- -->

<div class="panel-display panel-twocol-30-70-stacked clear-block" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
  <div class="panel-panel line">
    <div class="panel-panel unit panel-header lastUnit">
      <?php print $content['header']; ?>
    </div>
  </div>

  <div class="panel-panel line">
    <div class="panel-panel unit panel-top lastUnit">
      <?php print $content['top']; ?>
    </div>
  </div>

  <div class="panel-panel line">
    <div class="panel-panel unit panel-col-thirty firstUnit">
      <div class="inside">
        <?php print $content['left']; ?>
      </div>
    </div>

    <div class="panel-panel panel-col-seventy lastUnit">
      <div class="inside">
        <?php print $content['right']; ?>
      </div>
    </div>
  </div>

  <div class="panel-panel panel-line">
    <div class="panel-panel unit panel-footer lastUnit">
      <?php print $content['footer']; ?>
    </div>
  </div>
</div>
