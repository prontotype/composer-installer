<?php namespace Prontotype\Composer;

use Composer\Package\PackageInterface;
use Composer\Installer\LibraryInstaller;

class Installer extends LibraryInstaller
{
    public function getPackageBasePath(PackageInterface $package)
    {
        return $this->vendorDir . '/prontotype/plugins/' . $package->getPrettyName();
    }

    public function supports($packageType)
    {
        return 'prontotype-plugin' === $packageType;
    }
}