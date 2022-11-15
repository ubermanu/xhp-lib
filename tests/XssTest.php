<?php

namespace PhpLang\XhpLib\Tests;

class XssTest extends \PHPUnit\Framework\TestCase
{
    public function testEscape()
    {
        $evil = '"><script>alert(1);</script>';
        $this->assertEquals('<p>&quot;&gt;&lt;script&gt;alert(1);&lt;/script&gt;</p>', (string)<p>{$evil}</p>);
        $this->assertEquals('<p id="&quot;&gt;&lt;script&gt;alert(1);&lt;/script&gt;"></p>', (string)<p id={$evil} />);
    }
}
