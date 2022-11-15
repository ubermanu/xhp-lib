<?php

namespace PhpLang\XhpLib\Tests;

class HtmlTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @covers
     * @return void
     */
    public function testA()
    {
        $this->assertEquals('<a></a>', (string)<a/>);
        $this->assertEquals('<a download="foo"></a>', (string)<a download="foo"/>);
        $this->assertEquals('<a href="/index.html"></a>', (string)<a href="/index.html"/>);
        $this->assertEquals('<a hreflang="en"></a>', (string)<a hreflang="en"/>);
        $this->assertEquals('<a media="screen"></a>', (string)<a media="screen"/>);
        $this->assertEquals('<a rel="nofollow"></a>', (string)<a rel="nofollow"/>);
        $this->assertEquals('<a target="_blank"></a>', (string)<a target="_blank"/>);
        $this->assertEquals('<a type="text/html"></a>', (string)<a type="text/html"/>);
        $this->assertEquals('<a name="home"></a>', (string)<a name="home"/>);

        $a = <a name="home"
                href="/index.html"
                hreflang="en"
                media="screen"
                rel="nofollow"
                target="_blank"
                type="text/html">Home</a>;
        $this->assertEquals('<a name="home" href="/index.html" hreflang="en" media="screen" ' .
            'rel="nofollow" target="_blank" type="text/html">Home</a>', (string)$a);
    }

    /**
     * @covers
     * @return void
     */
    public function testP()
    {
        $this->assertEquals('<p></p>', (string)<p/>);
        $this->assertEquals('<p>Hello</p>', (string)<p>Hello</p>);
        $this->assertEquals('<p>Hello <b>World</b></p>', (string)<p>Hello <b>World</b></p>);

        $p = <p/>;
        $p->appendChild(<x:frag><b>Hello</b>World</x:frag>);
        $this->assertEquals('<p><b>Hello</b>World</p>', (string)$p);
    }
}
