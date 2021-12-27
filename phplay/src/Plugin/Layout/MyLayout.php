<?php

namespace Drupal\phplay\Plugin\Layout;

use Drupal\formatage_models\Plugin\Layout\Sections\FormatageModelsSection;


/**
 * A very advanced custom layout.
 *
 * @Layout(
 *   id = "layout",
 *   label = @Translation("My Layout"),
 *   category = @Translation("My Layouts"),
 *   template = "templates/layout",
 *   library = "layout_builder/my_layout_library",
 *   regions = {
 *     "images" = {
 *       "label" = @Translation("set_image"),
 *     },
 *     
 *   }
 * )
 */

class MyLayout extends FormatageModelsSection{
  
}
?>