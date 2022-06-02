<?php

declare(strict_types=1);

namespace Drupal\se_purchase_order\EventSubscriber;

use Drupal\core_event_dispatcher\Event\Entity\EntityCreateEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * Class PurchaseOrderInsertSubscriber.
 *
 * On inserting a purchase order, do things.
 *
 * @package Drupal\se_purchase_order\EventSubscriber
 */
class PurchaseOrderSubscriber implements EventSubscriberInterface {

  /**
   * {@inheritdoc}
   */
  public static function getSubscribedEvents(): array {
    return [
      // Disabled atm.
      // HookEventDispatcherInterface::ENTITY_CREATE => 'purchaseOrderInsert',.
    ];
  }

  /**
   * When a purchase order is saved, process its event.
   *
   * @param \Drupal\core_event_dispatcher\Event\Entity\EntityCreateEvent $event
   *   The event we are working with.
   */
  public function purchaseOrderInsert(EntityCreateEvent $event): void {
    $entity = $event->getEntity();

    if ($entity->getEntityTypeId() !== 'se_purchase_order') {
      return;
    }

    // @todo Anything to do here?
  }

}
