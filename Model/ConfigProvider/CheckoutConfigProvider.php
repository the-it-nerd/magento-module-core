<?php

declare(strict_types=1);

namespace TheITNerd\Core\Model\ConfigProvider;

use Magento\Checkout\Model\ConfigProviderInterface;
use Magento\Directory\Model\RegionProvider as DirectoryRegionProvider;

class CheckoutConfigProvider implements ConfigProviderInterface
{
    /**
     * @param DirectoryRegionProvider $directoryRegionProvider
     */
    public function __construct(
        private readonly DirectoryRegionProvider $directoryRegionProvider
    ) {}
    /**
     * @return string[]
     */
    public function getConfig(): array
    {
        return [
            'regionJson' => $this->getRegionJson()
        ];
    }
    /**
     * @return string|null
     */
    private function getRegionJson(): ?string
    {
        return $this->directoryRegionProvider->getRegionJson();
    }
}