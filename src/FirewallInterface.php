<?php
/**
 * This file is part of SHIELDFY Web Application Firewall Detector.
 * (c) 2016 SHIELDFY, All rights reserved.
 *
 * The code provided was developed by Matthias "Nihylum" Kaschubowski
 *
 * The applied license is stored at the root directory of this package.
 */
namespace Shieldfy;

/**
 * General Firewall Interface.
 *
 * @package shieldfy.waf-detector
 *
 * @author  Matthias Kaschubowski <nihylum@gmail.com>
 */
interface FirewallInterface
{
    /**
     * returns the name of the firewall.
     *
     * @return string
     */
    public function getName();

    /**
     * detects whether the provided headers and body string does match the firewall identification rules or not.
     *
     * @param string[] $headers
     * @param string   $bodyString
     * @param string   $url
     *
     * @return bool
     */
    public function detect(array $headers, $bodyString, $url);
}
