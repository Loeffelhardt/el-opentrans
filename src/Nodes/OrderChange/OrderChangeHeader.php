<?php

declare(strict_types=1);

namespace Naugrim\OpenTrans\Nodes\OrderChange;

use JMS\Serializer\Annotation as Serializer;
use Naugrim\BMEcat\Nodes\Contracts\NodeInterface;
use Naugrim\OpenTrans\Nodes\Concerns\HasControlInfo;

/**
 * @Serializer\AccessorOrder("custom", custom = {"controlInfo", "info"})
 */
class OrderChangeHeader implements NodeInterface
{
    use HasControlInfo;

    /**
     * @Serializer\Expose
     * @Serializer\Type("Naugrim\OpenTrans\Nodes\OrderChange\OrderChangeInfo")
     * @Serializer\SerializedName("ORDERCHANGE_INFO")
     * @Serializer\XmlElement(cdata=false, namespace="http://www.opentrans.org/XMLSchema/2.1")
     *
     * @var OrderChangeInfo
     */
    protected $orderChangeInfo;

    public function getOrderChangeInfo(): OrderChangeInfo
    {
        return $this->orderChangeInfo;
    }

    public function setOrderChangeInfo(OrderChangeInfo $orderChangeInfo): self
    {
        $this->orderChangeInfo = $orderChangeInfo;

        return $this;
    }
}
