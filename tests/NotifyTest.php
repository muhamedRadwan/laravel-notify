<?php

namespace Tylercd100\Notify\Tests;

use Tylercd100\Notify\Drivers\FromConfig as Notify;
use Tylercd100\Notify\Drivers\HipChat;
use Tylercd100\Notify\Drivers\Pushover;
use Tylercd100\Notify\Drivers\Slack;
use Tylercd100\Notify\Facades\HipChat as HipChatFacade;
use Tylercd100\Notify\Facades\Notify as NotifyFacade;
use Tylercd100\Notify\Facades\Pushover as PushoverFacade;
use Tylercd100\Notify\Facades\Slack as SlackFacade;

class NotifyTest extends TestCase
{
    public function testPushoverFacade(){
        $obj = PushoverFacade::getFacadeRoot();
        $this->assertInstanceOf(Pushover::class,$obj);
    }

    public function testHipChatFacade(){
        $obj = HipChatFacade::getFacadeRoot();
        $this->assertInstanceOf(HipChat::class,$obj);
    }

    public function testSlackFacade(){
        $obj = SlackFacade::getFacadeRoot();
        $this->assertInstanceOf(Slack::class,$obj);
    }

    public function testNotifyFacade(){
        $obj = NotifyFacade::getFacadeRoot();
        $this->assertInstanceOf(Notify::class,$obj);
    }
}