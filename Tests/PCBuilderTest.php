<?php

namespace Tests;

use App\Builder\DesktopBuilder\Order;
use App\Builder\DesktopBuilder\Master;
use App\Builder\DesktopBuilder\PCBuilder;
use App\Builder\DesktopBuilder\Hardware\Cpu;
use App\Builder\DesktopBuilder\Hardware\Gpu;
use App\Builder\DesktopBuilder\Hardware\Ram;
use App\Builder\DesktopBuilder\Hardware\Ssd;
use App\Builder\DesktopBuilder\Hardware\Hdd;
use App\Builder\DesktopBuilder\Hardware\MotherBoard;
use App\Builder\DesktopBuilder\Interfaces\MasterInterface;
use App\Builder\DesktopBuilder\Interfaces\ComputerInterface;

use PHPUnit\Framework\TestCase;

class PCBuilderTest extends TestCase
{
    /**
     * @var MasterInterface
     */
    private $master;

    /**
     * @var ComputerInterface
     */
    private $desktop;

    protected function setUp(): void
    {
        $this->master = new Master();
        $this->master->setBuilder(new PCBuilder());
        $this->master->getBuilder()
            ->setPart(new Motherboard(Order::MB))
            ->setPart(new Cpu(Order::CPU))
            ->setPart(new Ram(Order::RAM))
            ->setPart(new Gpu(Order::GPU))
            ->setPart(new Ssd(Order::SSD))
            ->setPart(new Hdd(Order::HDD));

        $this->desktop = $this->master->build();
    }

    public function testInstance()
    {
        $this->assertInstanceOf(ComputerInterface::class, $this->desktop);
    }

    public function testParts()                                     
    {
        $this->assertEquals(Order::MB, $this->desktop->getComponent(MotherBoard::class)->getValue());
        $this->assertEquals(Order::CPU, $this->desktop->getComponent(Cpu::class)->getValue());
        $this->assertEquals(Order::RAM, $this->desktop->getComponent(Ram::class)->getValue());
        $this->assertEquals(Order::GPU, $this->desktop->getComponent(Gpu::class)->getValue());
        $this->assertEquals(Order::SSD, $this->desktop->getComponent(Ssd::class)->getValue());
        $this->assertEquals(Order::HDD, $this->desktop->getComponent(Hdd::class)->getValue());
    }                                                                            
}