<?php

namespace Drupal\phplay\Plugin\Layout;

use Drupal\formatage_models\Plugin\Layout\Sections\FormatageModelsSection;


/**
 * A very advanced custom layout.
 *
 * @Layout(
 *   id = "layout",
 *   label = @Translation("Footer"),
 *   category = @Translation("Footers"),
 *   template = "templates/footer",
 *   library = "new_layout/lib_design",
 *   regions = {
 *     "element" = {
 *       "label" = @Translation("link_element"),
 *     },
 *     
 *   }
 * )
 */

class MyFooter extends FormatageModelsSection{
  
}
?>