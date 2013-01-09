<?php

namespace OSS_SNMP\MIBS\Cisco;

use OSS_SNMP\MIB;

class MacAddress extends MIB
{
    const OID_ADDRESS = '.1.3.6.1.2.1.17.4.3.1.1';
    const OID_PORTS = '.1.3.6.1.2.1.17.4.3.1.2';
    const OID_BRIDGE = '.1.3.6.1.2.1.17.1.4.1.2';

    public function addresses()
    {
        return $this->getSNMP()->walkMacAddress(self::OID_ADDRESS);
    }

    public function ports()
    {
        return $this->getSNMP()->walkMacAddress(self::OID_PORTS);
    }

    public function bridgePorts()
    {
        return $this->getSNMP()->walk1d(self::OID_BRIDGE);
    }
}
