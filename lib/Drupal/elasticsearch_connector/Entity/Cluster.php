<?php

/**
 * @file
 * Definition of Drupal\elasticsearch_connector\Entity\Cluster.
 */

namespace Drupal\elasticsearch_connector\Entity;

use Drupal\Core\Config\Entity\ConfigEntityBase;
use Drupal\Core\Entity\EntityStorageInterface;
use Drupal\elasticsearch_connector\ClusterStorageInterface;
use Drupal\views_ui\ViewListBuilder;
use Drupal\node\NodeTypeListBuilder;

/**
 * Defines a View configuration entity class.
 *
 * @ConfigEntityType(
 *   id = "elasticsearch_connector_cluster",
 *   label = @Translation("Elasticsearch Cluster"),
 *   controllers = {
 *     "access" = "Drupal\elasticsearch_connector\ClusterAccessController",
 *     "form" = {
 *       "add" = "Drupal\elasticsearch_connector\ClusterForm",
 *       "edit" = "Drupal\elasticsearch_connector\ClusterForm",
 *       "delete" = "Drupal\node\Form\NodeTypeDeleteConfirm"
 *     },
 *     "list_builder" = "Drupal\elasticsearch_connector\ClusterListBuilder",
 *   },
 *   links = {
 *     "add-form" = "elasticsearch_connector.add",
 *     "edit-form" = "node.page_edit",
 *     "version-history" = "node.revision_overview",
 *     "admin-form" = "node.type_edit"
 *   },
 *   admin_permission = "administer elasticsearch connector",
 *   entity_keys = {
 *     "id" = "id",
 *     "label" = "label",
 *     "status" = "status"
 *   }
 * )
 */
class Cluster extends ConfigEntityBase implements ClusterStorageInterface {
  /**
  * The cluster machine name.
  *
  * @var string
  */
  public $id;

  /**
   * The human-readable name of the cluster entity.
   *
   * @var string
   */
  public $label;

  /**
   * Status.
   *
   * @var string
   */
  public $status;

  /**
   * The cluster description.
   *
   * @var string
   */
  public $description;

  /**
   * The locked status of this menu.
   *
   * @var bool
   */
  protected $locked = FALSE;
}
