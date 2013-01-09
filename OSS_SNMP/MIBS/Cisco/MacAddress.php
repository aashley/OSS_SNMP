<?php

namespace OSS_SNMP\MIBS\Cisco;

use OSS_SNMP\MIB;

class MacAddress extends MIB
{
    const OID_ADDRESS = '.1.3.6.1.2.1.17.4.3.1.1';

    public function addresses()
    {
        return $this->getSNMP()->walkMacAddress(self::OID_ADDRESS);
    }
}
