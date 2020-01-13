<div class="sideBar">
  <label>Theme</label>
  <br />
  <select>
    <?php
    $optionHTML = "";
    foreach($themes as $theme) {
    $optionHTML .= "<option value='$theme[themeCode]'>$theme[themeName]</option>";
    }
    echo $optionHTML;
    ?>
  </select>
  <br />
  <label>Search name</label>
  <br />
  <input type="text">
  <br />
</div>