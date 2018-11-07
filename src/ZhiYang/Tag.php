<?php namespace ZhiYang;

/**
 * author: LiZhiYang
 * email: zhiyanglee@foxmail.com
 */

class Tag
{
    const ttcf = 1953784678;

    // required tables
    const cmap = 1668112752;
    const head = 1751474532;
    const hhea = 1751672161;
    const hmtx = 1752003704;
    const maxp = 1835104368;
    const name = 1851878757;
    const OS_2 = 1330851634;
    const post = 1886352244;

    // truetype outline tables
    const cvt  = 1668707360;
    const fpgm = 1718642541;
    const glyf = 1735162214;
    const loca = 1819239265;
    const prep = 1886545264;

    // postscript outline tables
    const CFF = 1128678944;
    const VORG = 1448038983;

    // opentype bitmap glyph outlines
    const EBDT = 1161970772;
    const EBLC = 1161972803;
    const EBSC = 1161974595;

    // advanced typographic features
    const BASE = 1111577413;
    const GDEF = 1195656518;
    const GPOS = 1196445523;
    const GSUB = 1196643650;
    const JSTF = 1246975046;

    // other
    const DSIG = 1146308935;
    const gasp = 1734439792;
    const hdmx = 1751412088;
    const kern = 1801810542;
    const LTSH = 1280594760;
    const PCLT = 1346587732;
    const VDMX = 1447316824;
    const vhea = 1986553185;
    const vmtx = 1986884728;

    const READABLE_NAME = [
        self::ttcf => 'ttcf',

        self::cmap => 'cmap',
        self::head => 'head',
        self::hhea => 'hhea',
        self::hmtx => 'hmtx',
        self::maxp => 'maxp',
        self::name => 'name',
        self::OS_2 => 'OS/2',
        self::post => 'post',

        self::cvt  => 'cvt',
        self::fpgm => 'fpgm',
        self::glyf => 'glyf',
        self::loca => 'loca',
        self::prep => 'prep',

        self::CFF  => 'CFF',
        self::VORG => 'VORG',

        self::EBDT => 'EBDT',
        self::EBLC => 'EBLC',
        self::EBSC => 'EBSC',

        self::BASE => 'BASE',
        self::GDEF => 'GDEF',
        self::GPOS => 'GPOS',
        self::GSUB => 'GSUB',
        self::JSTF => 'JSTF',

        self::DSIG => 'DSIG',
        self::gasp => 'gasp',
        self::hdmx => 'hdmx',
        self::kern => 'kern',
        self::LTSH => 'LTSH',
        self::PCLT => 'PCLT',
        self::VDMX => 'VDMX',
        self::vhea => 'vhea',
        self::vmtx => 'vmtx',
    ];

    public static function getReadableName($tag)
    {
        if (isset(self::READABLE_NAME[$tag])) {
            return self::READABLE_NAME[$tag];
        } else {
            return '';
        }
    }
}