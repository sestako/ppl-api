<?php

declare(strict_types=1);

namespace PTB\PPLApi\Shipment\Enum;

enum ShipmentTypeEnum: string
{
	case SMART_WITHOUT_COD = "SMAR";
	case SMART_WITH_COD = "SMAD";
	case PRIVATE_WITHOUT_COD = "PRIV";
	case PRIVATE_WITH_COD = "PRID";
}
