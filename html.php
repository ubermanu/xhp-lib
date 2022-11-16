<?php

use Ubermanu\XhpLib\Api;

// Here is a list of all the current HTML tags.
// No strict validation is made upon the attribute values.

class xhp_a extends Api\HTMLElement
{
    protected $tagName = 'a';
}

class xhp_abbr extends Api\HTMLElement
{
    protected $tagName = 'abbr';
}

class xhp_address extends Api\HTMLElement
{
    protected $tagName = 'address';
}

class xhp_area extends Api\HTMLElement
{
    protected $tagName = 'area';
    protected $omitEndTag = true;
}

class xhp_article extends Api\HTMLElement
{
    protected $tagName = 'article';
}

class xhp_aside extends Api\HTMLElement
{
    protected $tagName = 'aside';
}

class xhp_audio extends Api\HTMLElement
{
    protected $tagName = 'audio';
}

class xhp_b extends Api\HTMLElement
{
    protected $tagName = 'b';
}

class xhp_base extends Api\HTMLElement
{
    protected $tagName = 'base';
    protected $omitEndTag = true;
}

class xhp_bdi extends Api\HTMLElement
{
    protected $tagName = 'bdi';
}

class xhp_bdo extends Api\HTMLElement
{
    protected $tagName = 'bdo';
}

class xhp_blockquote extends Api\HTMLElement
{
    protected $tagName = 'blockquote';
}

class xhp_body extends Api\HTMLElement
{
    protected $tagName = 'body';
}

class xhp_br extends Api\HTMLElement
{
    protected $tagName = 'br';
    protected $omitEndTag = true;
}

class xhp_button extends Api\HTMLElement
{
    protected $tagName = 'button';
}

class xhp_caption extends Api\HTMLElement
{
    protected $tagName = 'caption';
}

class xhp_canvas extends Api\HTMLElement
{
    protected $tagName = 'canvas';
}

class xhp_cite extends Api\HTMLElement
{
    protected $tagName = 'cite';
}

class xhp_code extends Api\HTMLElement
{
    protected $tagName = 'code';
}

class xhp_col extends Api\HTMLElement
{
    protected $tagName = 'col';
    protected $omitEndTag = true;
}

class xhp_colgroup extends Api\HTMLElement
{
    protected $tagName = 'colgroup';
}

class xhp_data extends Api\HTMLElement
{
    protected $tagName = 'data';
}

class xhp_datalist extends Api\HTMLElement
{
    protected $tagName = 'datalist';
}

class xhp_dd extends Api\HTMLElement
{
    protected $tagName = 'dd';
}

class xhp_del extends Api\HTMLElement
{
    protected $tagName = 'del';
}

class xhp_details extends Api\HTMLElement
{
    protected $tagName = 'details';
}

class xhp_dialog extends Api\HTMLElement
{
    protected $tagName = 'dialog';
}

class xhp_div extends Api\HTMLElement
{
    protected $tagName = 'div';
}

class xhp_dfn extends Api\HTMLElement
{
    protected $tagName = 'dfn';
}

class xhp_dl extends Api\HTMLElement
{
    protected $tagName = 'dl';
}

class xhp_dt extends Api\HTMLElement
{
    protected $tagName = 'dt';
}

class xhp_em extends Api\HTMLElement
{
    protected $tagName = 'em';
}

class xhp_embed extends Api\HTMLElement
{
    protected $tagName = 'embed';
    protected $omitEndTag = true;
}

class xhp_fieldset extends Api\HTMLElement
{
    protected $tagName = 'fieldset';
}

class xhp_figcaption extends Api\HTMLElement
{
    protected $tagName = 'figcaption';
}

class xhp_figure extends Api\HTMLElement
{
    protected $tagName = 'figure';
}

class xhp_footer extends Api\HTMLElement
{
    protected $tagName = 'footer';
}

class xhp_form extends Api\HTMLElement
{
    protected $tagName = 'form';
}

class xhp_h1 extends Api\HTMLElement
{
    protected $tagName = 'h1';
}

class xhp_h2 extends Api\HTMLElement
{
    protected $tagName = 'h2';
}

class xhp_h3 extends Api\HTMLElement
{
    protected $tagName = 'h3';
}

class xhp_h4 extends Api\HTMLElement
{
    protected $tagName = 'h4';
}

class xhp_h5 extends Api\HTMLElement
{
    protected $tagName = 'h5';
}

class xhp_h6 extends Api\HTMLElement
{
    protected $tagName = 'h6';
}

class xhp_head extends Api\HTMLElement
{
    protected $tagName = 'head';
}

class xhp_header extends Api\HTMLElement
{
    protected $tagName = 'header';
}

class xhp_hgroup extends Api\HTMLElement
{
    protected $tagName = 'hgroup';
}

class xhp_hr extends Api\HTMLElement
{
    protected $tagName = 'hr';
    protected $omitEndTag = true;
}

class xhp_html extends Api\HTMLElement
{
    protected $tagName = 'html';
}

class xhp_i extends Api\HTMLElement
{
    protected $tagName = 'i';
}

class xhp_iframe extends Api\HTMLElement
{
    protected $tagName = 'iframe';
}

class xhp_img extends Api\HTMLElement
{
    protected $tagName = 'img';
    protected $omitEndTag = true;
}

class xhp_input extends Api\HTMLElement
{
    protected $tagName = 'input';
    protected $omitEndTag = true;
}

class xhp_ins extends Api\HTMLElement
{
    protected $tagName = 'ins';
}

class xhp_keygen extends Api\HTMLElement
{
    protected $tagName = 'keygen';
}

class xhp_kbd extends Api\HTMLElement
{
    protected $tagName = 'kbd';
}

class xhp_label extends Api\HTMLElement
{
    protected $tagName = 'label';
}

class xhp_legend extends Api\HTMLElement
{
    protected $tagName = 'legend';
}

class xhp_li extends Api\HTMLElement
{
    protected $tagName = 'li';
}

class xhp_link extends Api\HTMLElement
{
    protected $tagName = 'link';
    protected $omitEndTag = true;
}

class xhp_main extends Api\HTMLElement
{
    protected $tagName = 'main';
}

class xhp_map extends Api\HTMLElement
{
    protected $tagName = 'map';
}

class xhp_mark extends Api\HTMLElement
{
    protected $tagName = 'mark';
}

class xhp_menu extends Api\HTMLElement
{
    protected $tagName = 'menu';
}

class xhp_menuitem extends Api\HTMLElement
{
    protected $tagName = 'menuitem';
}

class xhp_meta extends Api\HTMLElement
{
    protected $tagName = 'meta';
    protected $omitEndTag = true;
}

class xhp_meter extends Api\HTMLElement
{
    protected $tagName = 'meter';
}

class xhp_nav extends Api\HTMLElement
{
    protected $tagName = 'nav';
}

class xhp_noscript extends Api\HTMLElement
{
    protected $tagName = 'noscript';
}

class xhp_object extends Api\HTMLElement
{
    protected $tagName = 'object';
}

class xhp_ol extends Api\HTMLElement
{
    protected $tagName = 'ol';
}

class xhp_optgroup extends Api\HTMLElement
{
    protected $tagName = 'optgroup';
}

class xhp_option extends Api\HTMLElement
{
    protected $tagName = 'option';
}

class xhp_output extends Api\HTMLElement
{
    protected $tagName = 'output';
}

class xhp_p extends Api\HTMLElement
{
    protected $tagName = 'p';
}

class xhp_param extends Api\HTMLElement
{
    protected $tagName = 'param';
    protected $omitEndTag = true;
}

class xhp_pre extends Api\HTMLElement
{
    protected $tagName = 'pre';
}

class xhp_progress extends Api\HTMLElement
{
    protected $tagName = 'progress';
}

class xhp_q extends Api\HTMLElement
{
    protected $tagName = 'q';
}

class xhp_rb extends Api\HTMLElement
{
    protected $tagName = 'rb';
}

class xhp_rp extends Api\HTMLElement
{
    protected $tagName = 'rp';
}

class xhp_rt extends Api\HTMLElement
{
    protected $tagName = 'rt';
}

class xhp_rtc extends Api\HTMLElement
{
    protected $tagName = 'rtc';
}

class xhp_ruby extends Api\HTMLElement
{
    protected $tagName = 'ruby';
}

class xhp_s extends Api\HTMLElement
{
    protected $tagName = 's';
}

class xhp_samp extends Api\HTMLElement
{
    protected $tagName = 'samp';
}

class xhp_script extends Api\HTMLElement
{
    protected $tagName = 'script';
}

class xhp_section extends Api\HTMLElement
{
    protected $tagName = 'section';
}

class xhp_select extends Api\HTMLElement
{
    protected $tagName = 'select';
}

class xhp_small extends Api\HTMLElement
{
    protected $tagName = 'small';
}

class xhp_source extends Api\HTMLElement
{
    protected $tagName = 'source';
    protected $omitEndTag = true;
}

class xhp_span extends Api\HTMLElement
{
    protected $tagName = 'span';
}

class xhp_strong extends Api\HTMLElement
{
    protected $tagName = 'strong';
}

class xhp_style extends Api\HTMLElement
{
    protected $tagName = 'style';
}

class xhp_sub extends Api\HTMLElement
{
    protected $tagName = 'sub';
}

class xhp_summary extends Api\HTMLElement
{
    protected $tagName = 'summary';
}

class xhp_sup extends Api\HTMLElement
{
    protected $tagName = 'sup';
}

class xhp_table extends Api\HTMLElement
{
    protected $tagName = 'table';
}

class xhp_tbody extends Api\HTMLElement
{
    protected $tagName = 'tbody';
}

class xhp_template extends Api\HTMLElement
{
    protected $tagName = 'template';
}

class xhp_td extends Api\HTMLElement
{
    protected $tagName = 'td';
}

class xhp_textarea extends Api\HTMLElement
{
    protected $tagName = 'textarea';
}

class xhp_tfoot extends Api\HTMLElement
{
    protected $tagName = 'tfoot';
}

class xhp_th extends Api\HTMLElement
{
    protected $tagName = 'th';
}

class xhp_thead extends Api\HTMLElement
{
    protected $tagName = 'thead';
}

class xhp_time extends Api\HTMLElement
{
    protected $tagName = 'time';
}

class xhp_title extends Api\HTMLElement
{
    protected $tagName = 'title';
}

class xhp_tr extends Api\HTMLElement
{
    protected $tagName = 'tr';
}

class xhp_track extends Api\HTMLElement
{
    protected $tagName = 'track';
    protected $omitEndTag = true;
}

class xhp_tt extends Api\HTMLElement
{
    protected $tagName = 'tt';
}

class xhp_u extends Api\HTMLElement
{
    protected $tagName = 'u';
}

class xhp_ul extends Api\HTMLElement
{
    protected $tagName = 'ul';
}

class xhp_var extends Api\HTMLElement
{
    protected $tagName = 'var';
}

class xhp_video extends Api\HTMLElement
{
    protected $tagName = 'video';
}

class xhp_wbr extends Api\HTMLElement
{
    protected $tagName = 'wbr';
    protected $omitEndTag = true;
}

// TODO: Implement custom rendering for the doctype
class xhp_x__doctype extends Api\HTMLElement
{
    protected $tagName = '!DOCTYPE';
    protected $omitEndTag = true;
}
