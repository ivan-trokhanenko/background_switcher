<?php

namespace Drupal\background_switcher\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'Background Switcher' block.
 *
 * @Block(
 *  id = "background_switcher",
 *  admin_label = @Translation("Background Switcher"),
 * )
 */
class BackgroundSwitcherBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function defaultConfiguration() {
    return [
      'label' => 'Background Switcher',
      'label_display' => FALSE,
    ];
  }

  /**
   * {@inheritdoc}
   */
  public function build() {
    return [
      '#theme' => 'background_switcher',
      '#attached' => [
        'library' => [
          'background_switcher/background_switcher',
        ],
      ],
    ];
  }

}
